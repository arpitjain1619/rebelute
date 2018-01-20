<?php

namespace App\Http\Controllers;

use Auth;
use App\Vendor;
use App\UserVendor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VendorController extends Controller {

    public function addVendor() {
        $user = Auth::user();
        $vendors = Vendor::get();
        return view('add_vendor', [
            'user' => $user,
            'vendors' => $vendors
        ]);
    }

    public function createVendor(Request $request) {
        $vendor_to_add = $added_vendor = [];
        $user = Auth::user();
        $vendors = Vendor::get();
        $data = $user->with('vendors')->where('id', $user->id)->first();
        foreach($data->vendors as $vendor) {
            if(in_array($vendor->id, $request->vendors)) {
                $added_vendor[] = $vendor->name;
            }
        }
        if(count($added_vendor) > 0) {
            $invalid_vendors = implode(', ', $added_vendor);
            return redirect()
            ->route('user.add.vendor')
            ->with([
                'flash_level' => 'danger',
                'flash_message' => 'Vendors: '. $invalid_vendors . ' already added'
            ]);
        } else {
            foreach($request->vendors as $vendor) {
                $value['user_id'] = Auth::user()->id;
                $value['vendor_id'] = $vendor;
                array_push($vendor_to_add, $value);
            }

            UserVendor::insert($vendor_to_add);
            return redirect()->route('user.get.profile')
            ->with([
                'flash_level' => 'success',
                'flash_message' => 'Vendors added successfully'
            ]);
        }
    }

}
