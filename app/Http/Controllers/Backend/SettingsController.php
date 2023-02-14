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
        $pages = Page::orderBy('id', 'DESC')->get();
        $languages = Language::orderBy('id', 'DESC')->get();
        return Inertia::render('Backend/AdminDashboard/Settings/Index', [
            'settings' => $settings,
            'pages' => $pages,
            'languages' => $languages,
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
        return redirect()->back()->with('message', 'Settings updated successfully');;
    }

    public function saveLanguage(Request $request) {
        $id = $request->id;

        $except = $id ? $id : Language::class;
        $request->validate([
            'english' => 'required|unique:languages,english,'.$except,
            'french' => 'required|unique:languages,french,'.$except,
            'spanish' => 'required|unique:languages,spanish,'.$except,
        ]);

        $data = [
            'english' => $request->english,
            'french' => $request->french,
            'spanish' => $request->spanish,
            'settings' => $request->settings,
        ];
        $lang = null;
        if ($request->id) {
            $lang = Language::find($request->id);
        }
        $lang ? $lang->update($data) : Language::create($data);

        return redirect()->back()->with('message', 'Language created successfully');
    }

    public function savepage(Request $request) {
        $except = $request->id ? $request->id : Page::class;
        $request->validate([
            'title' => 'required|unique:pages,title,'.$except,
        ]);
        Page::updateOrCreate(['id' => $request->id],[
            'title' => $request->title,
            'slug' => str()->slug($request->title),
            'settings' => $request->settings,
            'description' => $request->description,
        ]);
        return redirect()->back()->with('message', 'Page created successfully');
    }

    public function deletepage(Page $page) {
        $page->delete();
        return redirect()->back()->with('message', 'Page Deleted Successfully');
    }
}
