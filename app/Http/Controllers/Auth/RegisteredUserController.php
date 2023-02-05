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
            $validation_item['country'] = ['required', 'string', 'max:255'];
            $validation_item['category_id'] = ['required', 'string', 'max:255'];
            $validation_item['link'] = ['required', 'string', 'max:255'];
            $validation_item['video'] = ['required', 'mimes:mp4,ogx,oga,ogv,ogg,webm'];
        }

        $request->validate($validation_item);


        $fileName = time().'.'.$request->file->extension();
        $request->file->move(public_path('uploads'), $fileName);

        dd($fileName);

        $user = User::create([
            'name' => $request->name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' => $request->username,
            'country' => $request->country,
            'category_id' => $request->category_id,
            'video_path' => $request->video_path,
            'link' => $request->link,
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'is_agree' => $request->is_agree,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
