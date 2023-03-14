<?php

namespace App\Http\Controllers;

use App\Models\Occasion;
use App\Models\Settings;
use App\Models\TalentEarningType;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PaymentController extends Controller
{
    public function info($id, $type) {
        $talent = User::findOrFail($id);
        $earning = null;
        if ($type == 'wish') {
            $earning = TalentEarningType::where('user_id', $talent->id)->where('type', 'wish')->first();
        }
        if ($type == 'tips') {
            $earning = TalentEarningType::where('user_id', $talent->id)->where('type', 'tips')->first();
        }
        if ($type == 'mylife') {
            $earning = TalentEarningType::where('user_id', $talent->id)->where('type', 'mylife')->first();
        }
        if (empty($earning)) {
            return redirect()->back();
        }
        $ocasions = Occasion::where('status', 1)->get();
        return Inertia::render('Backend/Payment/Info', compact('talent', 'earning', 'ocasions', 'type'));
    }

    public function gateway($id, $type) {
        $talent = User::findOrFail($id);
        $earning = null;
        if ($type == 'wish') {
            $earning = TalentEarningType::where('user_id', $talent->id)->where('type', 'wish')->first();
        }
        if ($type == 'tips') {
            $earning = TalentEarningType::where('user_id', $talent->id)->where('type', 'tips')->first();
        }
        if ($type == 'mylife') {
            $earning = TalentEarningType::where('user_id', $talent->id)->where('type', 'mylife')->first();
        }
        if (empty($earning)) {
            return redirect()->back();
        } 
        $orderCode = $this->getOrderCode();
        return Inertia::render('Backend/Payment/Gateway', compact('talent', 'earning', 'type', 'orderCode'));
    }
    
}
