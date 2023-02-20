<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PaymentRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PaymentRequestController extends Controller
{
    public function index() {
        $requests = PaymentRequest::all();
        return Inertia::render('Backend/TalentDashboard/Payout', [
            'requests' => $requests
        ]);
    }

    public function payoutRequest(Request $request) {
        $request->validate([
            'amount' => 'required|integer|min:25'
        ]);
        PaymentRequest::create([
            'user_id' => auth()->id(),
            'bank_type' => $request->bank_type,
            'amount' => $request->amount,
            'stripe_email' => $request->stripe_email,
            'bank_name' => $request->bank_name,
            'account_number' => $request->account_number,
            'settings' => $request->settings,
        ]);
        return redirect()->back()->with('message', 'Payout request saved successfully');
    }
}
