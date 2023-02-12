<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Page;
use App\Models\Settings;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SettingsController extends Controller
{
    function index(){
        $settings = Settings::first();
        return Inertia::render('Backend/AdminDashboard/Settings/Index', [
            'settings' => $settings,
        ]);
    }

    public function saveSettings(Request $request) {
        $settings = Settings::first();
        if ($settings) {
            $settings->update([
                'logo' => $request->logo,
                'companyName' => $request->companyName,
                'dateFormate' => $request->dateFormate,
                'commission' => $request->commission,
                'currencyPosition' => $request->currencyPosition,
                'stripePublicKey' => $request->stripePublicKey,
                'stripePrivatKey' => $request->stripePrivatKey,
                'settings' => $request->settings,
            ]);
        } else {
            Settings::create([
                'logo' => $request->logo,
                'companyName' => $request->companyName,
                'dateFormate' => $request->dateFormate,
                'commission' => $request->commission,
                'currencyPosition' => $request->currencyPosition,
                'stripePublicKey' => $request->stripePublicKey,
                'stripePrivatKey' => $request->stripePrivatKey,
                'settings' => $request->settings,
            ]);
        }
        return redirect()->back()->with('success', 'Settings updated successfully');;
    }

    public function saveLanguage(Request $request) {
        Language::create([
            'english' => $request->english,
            'french' => $request->french,
            'spanish' => $request->spanish,
            'settings' => $request->settings,
        ]);
        return redirect()->back()->with('success', 'Language created successfully');
    }

    public function savepage(Request $request) {
        $request->validate([
            'title' => 'required|unique:pages,title',
        ]);
        Page::create([
            'title' => $request->title,
            'slug' => str()->slug($request->title),
            'email' => $request->email,
            'settings' => $request->settings,
            'description' => $request->description,
        ]);
        return redirect()->back()->with('success', 'Page created successfully');
    }
}
