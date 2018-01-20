<?php

namespace App\Http\Controllers;

use Auth;
use App\Vendor;
use App\UserVendor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller {

    public function index() {
        $user = Auth::user();
        $data = $user->with('vendors')->where('id', $user->id)->first();
        return view('profile', [
            'data' => $data
        ]);
    }

}
