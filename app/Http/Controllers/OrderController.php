<?php

// app/Http/Controllers/OrderController.php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Midtrans\Snap;

class OrderController extends Controller
{
    public function checkout(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }
    
        $order = Order::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'qty' => $request->qty,
            'total_price' => $product->harga * $request->qty,
            'status' => 'Unpaid',
            'product_id' => $product->id,
        ]);
    
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = config('midtrans.is_production');
        \Midtrans\Config::$isSanitized = config('midtrans.is_sanitized');
        \Midtrans\Config::$is3ds = config('midtrans.is_3ds');
    
        $params = [
            'transaction_details' => [
                'order_id' => $order->id,
                'gross_amount' => $order->total_price,
            ],
            'customer_details' => [
                'name' => $request->name,
                'phone' => $request->phone,
            ],
        ];
    
        try {
            $snapToken = \Midtrans\Snap::getSnapToken($params);
            $order->snap_token = $snapToken;
            $order->save();
    
            return redirect()->route('cart.view')->with('success', 'Product added to cart.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to process payment.');
        }
    }
    

    public function viewCart()
    {
        $orders = Order::with('product')->where('status', 'Unpaid')->get(); // Load relasi product
        return view('cart', compact('orders'));
    }


    public function delete($id)
    {
        $order = Order::find($id);
        if ($order) {
            $order->delete();
            return redirect()->route('cart.view')->with('success', 'Order has been deleted.');
        }
        return redirect()->route('cart.view')->with('error', 'Order not found.');
    }

    public function callback(Request $request){
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
        if($hashed == $request->signature_key){
            if($request->transaction_status == 'capture'){
                $order = Order::find($request->order_id);
                $order->update(['status' => 'Paid']);
            }
        }
    }

    public function pesan(){
        return view('admin_umkm.order', [
            'orders' => Order::latest()->get()
        ]);
    }
    
    public function invoice($id){
        $order = Order::find($id);
        return view('invoice', compact('order'));
    }
    

    public function History()
    {
        $orders = Order::with('product')->where('status', 'paid')->get(); // Load relasi product
        return view('history', compact('orders'));
    }
}
