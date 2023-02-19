<?php

namespace App\Http\Middleware;

use App\Models\Category;
use App\Models\Country;
use Illuminate\Http\Request;
use Inertia\Middleware;
use Tightenco\Ziggy\Ziggy;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): string|null
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        $countries = Country::where(['status' => 1])->get();
        $categories = Category::where(['status' => 1])->where('parent_id', null)->get();
        $sub_categories = Category::where(['status' => 1])->where('parent_id', '!=', null)->get();
        return array_merge(parent::share($request), [
            'flash' => [
                'message' => session('message')
            ],
            'countries' => $countries,
            'categories' => $categories,
            'sub_categories' => $sub_categories,
            'auth' => [
                'user' => $request->user(),
            ],
            'ziggy' => function () use ($request) {
                return array_merge((new Ziggy)->toArray(), [
                    'location' => $request->url(),
                ]);
            },
        ]);
    }
}
