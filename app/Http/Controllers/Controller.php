<?php

namespace App\Http\Controllers;

use App\Models\OrderCode;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getOrderCode() {
        OrderCode::where('created_at', now()->subHour(24))->delete();
        $orderCode = OrderCode::create([]);
        $orderCode = OrderCode::orderBy('id', 'desc');
        $orderId = ($orderCode->count() == 0 ? 0 : $orderCode->first()->id) + 1;
        $zeros = strlen($orderId) < 7 ? 7 - strlen($orderId) : 0;
        $code = '';
        for($i = 1; $i <= $zeros; $i++) $code .= '0';
        $code .= $orderId;
        return $code;
    }
}
