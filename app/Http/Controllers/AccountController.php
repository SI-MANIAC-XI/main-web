<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Account::latest()->paginate(6);
        return view('admin.accountdata.index', compact('result'));
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return redirect('/login')->with("loginError",'Username atau Password salah!. Silahkan periksa kembali username atau password anda');
    }

    public function logout(Request $request){
        Auth::logout();
        request()->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/login');
    }

    public function registerPage() {
        date_default_timezone_set("Asia/Jakarta");
        $endDate = "1 September 2022";
        $endDateTimestamp = strtotime($endDate);
        if (time() >= $endDateTimestamp) {
            session()->flash('registerClosed', 'Pendaftaran telah ditutup, sampai jumpa di MANIAC XII');
            return redirect('/login');
        } else {
            return view('auth.register');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        $account['password'] = Hash::make($request->get('password'));
        $account->save();
        return redirect()->back()->with('status', 'Password peserta berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        //
    }
}