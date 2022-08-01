<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function getPesertaWorkshop() {
        $teamWorkshop1 = DB::table('team_has_workshop')
         ->join('team_details', 'team_has_workshop.team_detail_id', '=', 'team_details.id')
         ->join('teams', 'team_details.team_id', '=', 'teams.id')
         ->select('team_details.*', 'teams.team_name')
         ->where('team_has_workshop.workshop_id', '=', 1)
         ->orderBy('team_details.team_id', 'asc')
         ->get();
        
        // dd($teamWorkshop1);

        return view('admin.pesertaworkshop.index', compact('teamWorkshop1'));
    }
}
