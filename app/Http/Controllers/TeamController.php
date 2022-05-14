<?php

namespace App\Http\Controllers;

use App\Team;
use App\TeamDetail;
use Illuminate\Http\Request;
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
      $result = Team::latest()->paginate(1);
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
      if ($team->status == "accepted") {
         return redirect()->back()->with('success', 'Verifikasi Accepted');
      } else if ($team->status == "rejected") {
         return redirect()->back()->with('success', 'Verifikasi Rejected');
      }
      //return view('admin.validasiregistrasi.index',compact('result'));
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
      $detailTeam = TeamDetail::where('team_id',$team->id);
      $detailTeam->delete();
      Team::destroy($team->id);
      return redirect()->back()->with('success', 'Data Peserta Berhasil Dihapus');
   }
}