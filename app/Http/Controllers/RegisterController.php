<?php

namespace App\Http\Controllers;

use App\Account;
use App\Team;
use App\TeamDetail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        dd($request);
        $dataAccount = new Account();
        $dataAccount->username = $request->get('username');
        $dataAccount->password = Hash::make($request->get('password'));

        $dataAccount->save();
        $newIdAccount = $dataAccount->id;

        $dataTeam = new Team();

        $dataTeam->account_id = $newIdAccount;
        $dataTeam->team_name = $request->get('team_name');
        $dataTeam->school_name = $request->get('school_name');
        $dataTeam->school_address = $request->get('school_address');
        
        $dataTeam->save();
        $newIdTeam = $dataTeam->id;

        $dataMember1 = new TeamDetail();
        $dataMember1->team_id = $newIdTeam;
        $dataMember1->name = $request->get('name');
        $dataMember1->role = "Leader";
        $dataMember1->phone_number = $request->get('phone_number');
        $dataMember1->email = $request->get('email');
        $dataMember1->image = "image";

        $dataMember1->save();
        
        $dataMember2 = new TeamDetail();
        $dataMember2->team_id = $newIdTeam;
        $dataMember2->name = $request->get('name1');
        $dataMember2->role = "Member";
        $dataMember2->phone_number = $request->get('phone_number1');
        $dataMember2->email = $request->get('email1');
        $dataMember2->image = "image";

        $dataMember2->save();

        $dataMember3 = new TeamDetail();
        $dataMember3->team_id = $newIdTeam;
        $dataMember3->name = $request->get('name2');
        $dataMember3->role = "Member";
        $dataMember3->phone_number = $request->get('phone_number2');
        $dataMember3->email = $request->get('email2');
        $dataMember3->image = "image";

        $dataMember3->save();

        dd("Works");
    }
}
