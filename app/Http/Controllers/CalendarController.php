<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calendar;
use Inertia\Inertia;

class CalendarController extends Controller
{
    function index(Request $request) {
        $calendars = Calendar::where(['user_id' => $request->user()->id])->get();
        
        return Inertia::render('Calendar/List', ['calendars' => $calendars]);
    }

    function store(Request $request) {
        $data = $request->all();
        $calendar = new Calendar;
        $calendar->user_id = $data['user_id'];
        $calendar->year = $data['year'];
        $calendar->selectedPageIndex = $data['selectedPageIndex'];
        $calendar->language = $data['language'];
        $calendar->weekStartDay = $data['weekStartDay'];
        $calendar->theme = $data['theme'];
        $calendar->settings = $data['settings'];
        $calendar->save();

        return redirect()->route('my_calendars')->with('message', 'Calendar created!');
    }

    function update(Request $request) {
        $data = $request->all();

        $payload = [];
        if($data['price']>0){
            $payload = [
                'price' => $data['price']
            ];
        }else{
            $payload = [
                'year' => $data['year'],
                'selectedPageIndex' => $data['selectedPageIndex'],
                'language' => $data['language'],
                'weekStartDay' => $data['weekStartDay'],
                'theme' => $data['theme'],
                'settings' => $data['settings'],
            ];
        }
        
        if(count($payload)){
            Calendar::where(['id' => $request->id])->where(['user_id' => $request->user_id])->update($payload);
            return response()->json(['status' => true], 200);
        }

        return response()->json(['status'=>false], 200);
    }

    function priceUpdate(Request $request) {
        $data = $request->all();
        $payload = [
            'price' => $data['price']
        ];
        
        if(count($payload)){
            Calendar::where(['id' => $request->id])->where(['user_id' => $request->user_id])->update($payload);
        }

        return redirect()->back()->with('message', 'Calendar price updated!');
    }

    function delete($calendar_id){
        Calendar::where(['id' => $calendar_id])->delete();
        return redirect()->back()->with('message', 'Calendar deleted!');
    }

    function makeCalendarSalable(Request $request, $calendar_id){
        $calendar = Calendar::where(['id' => $calendar_id])->first();
        Calendar::where(['user_id' => $calendar->user_id])->update([
            'is_salable' => 0
        ]);

        Calendar::where(['id' => $calendar_id])->update([
            'is_salable' => 1
        ]);

        return redirect()->back()->with('message', 'Calendar added to profile');
    }
}
