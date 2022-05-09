<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $data = new Account();
        $data->username = $request->get('username');
        $data->password = Hash::make($request->get('password'));

        $data->save();
        dd("Works");
    }
}
