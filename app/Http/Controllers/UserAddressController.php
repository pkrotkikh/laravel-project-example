<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAddressCreateRequest;
use App\UserAddress;
use Illuminate\Http\Request;

class UserAddressController extends Controller
{
    /**
     * Create new user address
     *
     * @param UserAddressCreateRequest $request
     * @return \Redirect
     * */
    public function create(UserAddressCreateRequest $request)
    {
        UserAddress::create($request->all());
        return back();
    }

    /**
     * Delete user address
     *
     * @param UserAddress $userAddress
     * @return \Redirect
     * */
    public function delete(UserAddress $userAddress)
    {
        $userAddress->delete();
        return back();
    }
}
