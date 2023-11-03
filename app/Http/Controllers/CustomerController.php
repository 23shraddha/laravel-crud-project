<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create(){
        return view('customer');
    }

   public function store(Request $request){
        echo "<pre>";
        print_r($request->all());
    // Insert Query here:
        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->description = $request['description'];
        $customer->save();

        return redirect('/customer/view');
    }

        public function view(){
            $customers = Customer::all();
            $data = compact('customers');
            // this 'customer' string make array of this string and push array into $data
            return view('customer-view')->with($data);
        }

        // public function delete($id){
        //     $customer = Customer::find($id)->delete();
        //     return redirect()->back();
        // }


        public function delete($id) {
            $customer = Customer::find($id);
            if ($customer) {
                $customer->delete();
            }
            // You can return a success message if needed
            return response()->json(['message' => 'Customer deleted successfully']);
        }

        public function edit($id){
            $customer = Customer::find($id);
            if ($customer) {
                $url = url('/customer/update').'/'.$id;
                return view('customer-edit', compact('customer', 'url'));
            }  
        } 
        
        
        public function update(Request $request, $id) {
            $customer = Customer::find($id);
            if ($customer) {
                $customer->name = $request['name'];
                $customer->description = $request['description'];
                $customer->save();
                return redirect('/customer/view'); // Redirect to the view page
            }
        }
        
 
}
