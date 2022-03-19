<?php

namespace App\Http\Controllers;

use App\Models\transactionhistory;
use App\Models\user;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class ProjectController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function signup()
    {

        return view('signup');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function transaction()
    {
        return view('transaction');
    }


    function addData(Request $req)
    {
        //     $name = new user;
        //     $name-> name=$req->name;
        //     $name-> pin=$req->pin;
        //     $name->save();
        //     return redirect('login');

        $name = $req->input('name');
        $pin = $req->input('pin');
        DB::table('users')->insert([
            'name' => $name,
            'pin' => $pin
        ]);
        return redirect('login');
    }
    function showData()
    {
        $transactions = transactionhistory::all();
        return view('dashboard', ['transactions' => $transactions]);
    }
    function addFunds(Request $req)
    {
        $balance = user::find($req->balance);
        $data = transactionhistory::find($req->id);
        $data->balance=$req->deposit_value + $balance;
    }
    function deductFunds(Request $req)
    {
        $balance = user::find($req->balance);
        $data = transactionhistory::find($req->id);
        $data->balance=$req->withdraw_value - $balance;
    }
}
