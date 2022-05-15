<?php 

namespace App\Http\Controllers;

use App\Models\Order;
use App\Events\CustomEvent;
use App\Jobs\CreateOrderJob;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'product_name' => 'required|string',
            'quantity' => 'required|numeric',
            'total_price' => 'required|numeric'
        ]);

        $data = Order::create([
            'user_id' => 2,
            'product_name' => $request->product_name,
            'quantity' => $request->quantity,
            'total_price' => $request->total_price
        ]);

        $array = $data->toArray();

        event(new CustomEvent($array));

        return response()->json($data, 201);
    }
}