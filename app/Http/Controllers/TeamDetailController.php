<?php

namespace App\Http\Controllers;

use App\Team;
use App\TeamDetail;
use Illuminate\Http\Request;

class TeamDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\TeamDetail  $teamDetail
     * @return \Illuminate\Http\Response
     */
    public function show(TeamDetail $teamDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TeamDetail  $teamDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamDetail $teamDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TeamDetail  $teamDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeamDetail $teamDetail)
    {
        //
    }

    public function updateImg(Request $request, Team $team)
    {
        $request->validate([
            'imgAnggota0' => ['required','max:1000'],
            'imgAnggota1' => ['required','max:1000'],
            'imgAnggota2' => ['required','max:1000']
        ]);

        $team['status'] = "pending";
        $team['message'] = "";
        $team->save();

        $imgFolder = "files";

        if ($request->hasFile('imgAnggota0')) {
            //ImageMember0
            $idMember0 = $request->get('idAnggota0');
            $member0 = TeamDetail::find($idMember0);
            unlink('files/' . $member0->image);

            $imgFile = time() . "_" . $request->file('imgAnggota0')->getClientOriginalName();
            $request->file('imgAnggota0')->move($imgFolder, $imgFile);
            $member0->image = $imgFile;

            $member0->save();
        }

        if ($request->hasFile('imgAnggota1')) {
            //ImageMember1
            $idMember1 = $request->get('idAnggota1');
            $member1 = TeamDetail::find($idMember1);
            unlink('files/' . $member1->image);

            $imgFile = time() . "_" . $request->file('imgAnggota1')->getClientOriginalName();
            $request->file('imgAnggota1')->move($imgFolder, $imgFile);
            $member1->image = $imgFile;

            $member1->save();
        }

        if ($request->hasFile('imgAnggota2')) {
            //ImageMember2
            $idMember2 = $request->get('idAnggota2');
            $member2 = TeamDetail::find($idMember2);
            unlink('files/' . $member2->image);

            $imgFile = time() . "_" . $request->file('imgAnggota2')->getClientOriginalName();
            $request->file('imgAnggota2')->move($imgFolder, $imgFile);
            $member2->image = $imgFile;

            $member2->save();
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeamDetail  $teamDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamDetail $teamDetail)
    {
        //
    }
}