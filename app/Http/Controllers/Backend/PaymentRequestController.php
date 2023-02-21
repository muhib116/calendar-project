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
        if ($request->bank_type == 'Stripe') {
            $request->validate([
                'amount' => 'required|integer|min:25',
                'stripe_email' => 'email|required'
            ]);
        }
        if ($request->bank_type == 'Bank') {
            $request->validate([
                'amount' => 'required|integer|min:200',
                'bank_name' => 'required',
                'account_number' => 'required',
            ]);
        }
        PaymentRequest::create([
            'user_id' => auth()->id(),
            'invoice' => $this->getOrderCode(),
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
