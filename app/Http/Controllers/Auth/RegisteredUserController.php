<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;

use function PHPUnit\Framework\isEmpty;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $validation_item = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
        
        if($request->role == 'talent'){
            $validation_item['first_name'] = ['required', 'string', 'max:255'];
            $validation_item['last_name'] = ['required', 'string', 'max:255'];
            $validation_item['username'] = ['required', 'string', 'max:255'];
            // $validation_item['category_id'] = ['required', 'max:255'];
            // $validation_item['category_id'] = ['required', 'string', 'max:255'];
            $validation_item['link'] = ['required', 'string', 'max:255'];
            $validation_item['video'] = ['required', 'mimes:mp4,ogx,oga,ogv,ogg,webm'];
        }

        $request->validate($validation_item);

        $file = $request->file('video');
        $path = '';
        try {
            $fileName = time().'.'.$file->extension();
            if($file->move('uploads/', $fileName)) {
                $path = 'uploads/'.$fileName;
            }
        } catch (\Throwable $th) {}

        $user = User::create([
            'name' => $request->name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' => $request->username,
            'country_id' => $request->country_id,
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'video_path' => $path,
            'link' => $request->link,
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'is_agree' => $request->is_agree,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        if(Auth::user()->role == 'admin'){
            return redirect(RouteServiceProvider::ADMIN_DASHBOARD);
        }
        if(Auth::user()->role == 'talent'){
            return redirect(RouteServiceProvider::TALENT_DASHBOARD);
        }
        return redirect(RouteServiceProvider::HOME);
    }
}
