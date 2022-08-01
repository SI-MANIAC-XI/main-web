<?php

namespace App\Http\Controllers;

use App\Account;
use App\Team;
use App\TeamDetail;
use App\Workshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $result = Team::latest()->paginate(6);
      //dd($result);
      return view('admin.validasiregistrasi.index', compact('result'));
   }

   public function confirmation(Request $request, Team $team)
   {
      //dd($request);
      // $id = $request->get('id');
      // $team = Team::find($id);
      $team->status = $request->get('status');
      $team->save();
      // //$result = Team::all();
      return redirect()->back()->with('success', 'Verifikasi Accepted');
      //return view('admin.validasiregistrasi.index',compact('result'));
   }
   
   public function rejectConfirmation(Request $request, Team $team)
   {
      $team->status = $request->get('status');
      $team->message = $request->get('message');
      $team->save();
      return redirect()->back()->with('success', 'Verifikasi Rejected');
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
    * @param  \App\Team  $team
    * @return \Illuminate\Http\Response
    */
   public function show(Team $team)
   {
      //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Team  $team
    * @return \Illuminate\Http\Response
    */
   public function edit(Team $team)
   {
      //
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Team  $team
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Team $team)
   {
      //
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Team  $team
    * @return \Illuminate\Http\Response
    */
   public function destroy(Team $team)
   {
      try {
         $detailTeam = TeamDetail::where('team_id', $team->id);
         $detailTeam->delete();
         Team::destroy($team->id);
         return redirect()->back()->with('success', 'Data Peserta Berhasil Dihapus');
      } catch (\PDOException $e) {
         return redirect()->back()->with('error', 'Data Peserta Gagal Dihapus');
      }
   }

   public function TeamDisplay(Account $account)
   {
      if(Auth::user()->id != $account->id){
         $team = Team::where('account_id',Auth::user()->id)->first();
         return view('teams.dashboard', compact('team'));
      }else{
         $team = Team::where('account_id', $account->id)->first();
         return view('teams.dashboard', compact('team'));
      }
      
   }

   public function displayWorkshop(Account $account) {
      $team = Team::where('account_id',Auth::user()->id)->first();
      $teamDetail = $team->teamDetail;
      $workshop = DB::table('workshops')->get();
      
      $teamWorkshop1 = DB::table('team_has_workshop')
         ->join('team_details', 'team_has_workshop.team_detail_id', '=', 'team_details.id')
         ->join('teams', 'team_details.team_id', '=', 'teams.id')
         ->select('team_details.*')
         ->where('team_details.team_id', '=', $team->id)
         ->where('team_has_workshop.workshop_id', '=', 1)
         ->get();
         
      // dd($teamWorkshop1);
      return view('teams.workshop', compact('team', 'workshop', 'teamWorkshop1'));
      // dd($workshop);
   }

   public function registerWorkshop(Request $request) {
      $workshop_id = $request->get('workshopId');
      $workshop = DB::table('workshops')->where('id', '=', $workshop_id)->first();
      if ($request->get('peserta1')) {
         DB::table('team_has_workshop')->updateOrInsert(['team_detail_id'=>$request->get('peserta1'), 'workshop_id'=>$workshop_id]);
      }
      if ($request->get('peserta2')) {
         DB::table('team_has_workshop')->updateOrInsert(['team_detail_id'=>$request->get('peserta2'), 'workshop_id'=>$workshop_id]);
      }
      if ($request->get('peserta3')) {
         DB::table('team_has_workshop')->updateOrInsert(['team_detail_id'=>$request->get('peserta3'), 'workshop_id'=>$workshop_id]);
      }

      session()->flash('success', 'Registrasi workshop berhasil');
      return redirect('/workshop');
   }
}