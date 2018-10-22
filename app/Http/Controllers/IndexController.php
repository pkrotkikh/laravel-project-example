<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserAddress;

class IndexController extends Controller
{

    /**
     * Shows the main page
     *
     * @param none
     * @return view('site.home.myAddressPage')
     * */

    public function index()
    {
        $addresses = UserAddress::orderBy('name', 'asc')->get();
        return view('site.home.myAddressPage', ['addresses' => $addresses]);
    }
}
