<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use DB;

class AddressController extends Controller
{
    public function showAllAddresses()
    {
       /*return Address::all();
       $addressList = Address::get();
       return view('addresses.address-list', compact ('addressList'));*/

       $addressData = [];
       $addressDB = DB::select('call ReadAllAddresses');
       foreach ($addressDB as $adr) {
           $addressData['addressData'][] = [ $adr->ID, $adr->line_1, $adr->line_2, 
                               $adr->line_3, $adr->county, 
                               $adr->post_code, $adr->country ];
       }
       return view('address-list', [ 'addressData' => $addressData ]);
       //return view('address-list')->with('addressData', $addressData);
    }

    public function addNewAddress(Request $request) {
        $this->validate($request, [
            'line_1' => 'required',
            'line_2' => 'required',
            'line_3' => 'required',
            'county' => 'required',
            'post_code' => 'required',
            'country' => 'required',
        ]);
        $addressData = [];
        $addressData['line_1'] = $request->input('line_1');
        $addressData['line_2'] = $request->input('line_2');
        $addressData['line_3'] = $request->input('line_3');
        $addressData['county'] = $request->input('county');
        $addressData['post_code'] = $request->input('post_code');
        $addressData['country'] = $request->input('country');

        DB::insert('call AddNewAddress(?,?,?,?,?,?)', array( $addressData['line_1'], $addressData['line_2'], 
        $addressData['line_3'],$addressData['county'], $addressData['post_code'], $addressData['country']));
        
        return redirect()->back()->with('success', 'Address has been added successfully!');
    }

    public function showAddressById($id) {
        $addressId = DB::select('call SearchAddress(?)', array($id));
        $addressData = $addressId[0];
        return view('address-edit', [ 'addressData' => $addressData ]);
    }

    public function updateAddress(Request $request) {
        $this->validate($request, [
            'line_1' => 'required',
            'line_2' => 'required',
            'line_3' => 'required',
            'county' => 'required',
            'post_code' => 'required',
            'country' => 'required',
        ]);
        $addressData = [];
        $addressData['ID'] = $request->input('ID');
        $addressData['line_1'] = $request->input('line_1');
        $addressData['line_2'] = $request->input('line_2');
        $addressData['line_3'] = $request->input('line_3');
        $addressData['county'] = $request->input('county');
        $addressData['post_code'] = $request->input('post_code');
        $addressData['country'] = $request->input('country');

        DB::update('call EditAddress(?,?,?,?,?,?,?)', array($addressData['ID'],
        $addressData['line_1'], $addressData['line_2'], $addressData['line_3'],
        $addressData['county'], $addressData['post_code'], $addressData['country']));
        //return redirect('/address-list');
        return redirect()->back()->with('success', 'Address has been updated successfully!');
    }

    public function deleteAddress($id) {
        DB::delete('call DeleteAddress(?)', array($id));
        //return redirect('/address-list');
        return redirect()->back();
    }

}
