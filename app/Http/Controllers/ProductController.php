<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Orderinformation;
use Illuminate\Support\Facades\DB;
use Session;
class ProductController extends Controller
{
    function ProductIndex()
    {
        $products= Product:: all();
        return view('product',['products'=>$products]);
    }
    function detail($id)
    {
        $detail= Product :: find($id);
        return view('detail',['detail'=>$detail]);
    }
    function addtocard(Request $req)
    {
      if($req->session()->get('user'))
      {
        $cart=new Cart;
        $cart->user_id=$req->session()->get('user')['id'];
        $cart->products_id=$req->product_id;
        $cart->save();
        return redirect('/');
      }
      else 
      {
        return redirect('login');
      }
    }
    static function cartitem()
    {
        $id= Session::get('user')['id'];
        $total= Cart::where('user_id',$id)->count();
        return $total;
    }
    function cartlist()
    {
        $Item=Session::get('user')['id'];
        $products=DB::table('products')
        ->join('carts','carts.products_id','=','products.id')    
        ->where('carts.user_id',$Item)
        ->select('products.*','carts.id as cart_id')
        ->get();
        return view('cartlist',['pro'=>$products]);
    }
    function order()
    {
        $Item=Session::get('user')['id'];
        $data= DB::table('products')
        ->join('carts','carts.products_id','=','products.id')    
        ->where('carts.user_id',$Item)
        ->sum('products.price');
        return view('order',['data'=>$data]);
    }
    function remove($id)
    {
        Cart::destroy($id);
        return redirect('/cartlist');
    }
    function ordeIrnfo(Request $req)
    {
        $user_id=Session::get('user')['id'];
        $cart= Cart::where('user_id',$user_id)->get();
       
        foreach ($cart as $var) {
         $orderinfo=new Orderinformation;
         $orderinfo->user_id=$var['user_id'];
         $orderinfo->products_id=$var['products_id'];
         $orderinfo->payment_method=$req->online;
         $orderinfo->payment_status='pending';
         $orderinfo->status='pending';
         $orderinfo->save();
         $var->delete();
        }
        return redirect('/');
    }
    function myorder()
    {
        $Item=Session::get('user')['id'];
        $data= DB::table('orderinformations')
        ->join('products','orderinformations.products_id','=','products.id')    
        ->where('orderinformations.user_id',$Item)
        ->get();
        return view('orderInfo',['order'=>$data]);
    }
    function mainorder(Request $req)
    {
        if($req->session()->get('user'))
        {
            $data=$req->product_id;
            $maindata=Product::where('id',$data)->get();
            return view('/mainorder',['main'=>$maindata]);
        }
        else
        {
            return redirect('login');
        }
    }
    function mainorderinfo(Request $req)
    {
        
        $user_id=Session::get('user')['id'];
       
         $orderinfo=new Orderinformation;
         $orderinfo->user_id=$user_id;
         $orderinfo->products_id= $req->id;
         $orderinfo->payment_method=$req->online;
         $orderinfo->payment_status='pending';
         $orderinfo->status='pending';
         $orderinfo->save();
       
        return redirect('/');
    }
}
