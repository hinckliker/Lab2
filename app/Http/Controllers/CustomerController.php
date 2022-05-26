<?php

namespace App\Http\Controllers;

use App\Models\Addres;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request){

        if (!(count($request->all()))){
            $customers = Customer::all();
        }else{

            $conditions = [];

            foreach ($request->keys() as $item){
                if($request->filled($item)){
                    $temp = [$item,$request[$item]];
                    $conditions[] = $temp;
                }


            }

            if((count($conditions))){
                $customers = Customer::where($conditions)
                    ->get();
            }else{
                $customers = Customer::all();
            }

        }

        return view('customers',['customers' => $customers]);
    }

    public function currentCustomer($id){
        $customer = Customer::where('id','=',$id)->get();
        $addreses = Addres::where('customer_id','=',$id)->get();
        return view('current_customer',['customers'=>$customer,'addreses'=>$addreses]);
    }


}
