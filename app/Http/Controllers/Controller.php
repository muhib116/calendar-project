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
        OrderCode::whereDate('created_at', Carbon::yesterday())->delete();
        $orderCode = OrderCode::create([]);
        $orderCode = OrderCode::orderBy('id', 'desc');
        $orderId = ($orderCode->count() == 0 ? 0 : $orderCode->first()->id) + 1;
        $zeros = strlen($orderId) < 7 ? 7 - strlen($orderId) : '';
        $code = '';
        for($i = 1; $i <= $zeros; $i++) $code .= str(rand(1,9));
        $code .= $orderId;
        return $code;
    }
}
