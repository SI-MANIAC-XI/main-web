<?php

namespace App\Http\Controllers;

use App\Team;
use App\TeamDetail;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Validator;
use Validator;

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
        //cara 1


        // $this->validate($request, [
        //    'imgAnggota0' => 'file|max:1024',
        //    'imgAnggota1' => 'file|max:1024',
        //    'imgAnggota2' => 'file|max:1024'
        // ]);
        //cara 2
        // $validation = Validator::make($request->all(),[
        //    'imgAnggota0' => 'file|max:1024',
        //    'imgAnggota1' => 'file|max:1024',
        //    'imgAnggota2' => 'file|max:1024'
        // ]);

        // if($validation->fails()) {
        //    return redirect()->withErrors($validation)->withInput();
        // }

        $imgFolder = "files";

        try {
            if ($request->hasFile('imgAnggota0')) {
                if ($request->file('imgAnggota0')->getSize() > 1000000) {
                    session()->flash("error", "File gagal di upload, pastikan ukuran file kurang dari 1 mb");
                    return redirect()->back();
                } else {
                    //ImageMember0
                    $idMember0 = $request->get('idAnggota0');
                    $member0 = TeamDetail::find($idMember0);
                    unlink('files/' . $member0->image);

                    $imgFile = time() . "_" . $request->file('imgAnggota0')->getClientOriginalName();
                    $request->file('imgAnggota0')->move($imgFolder, $imgFile);
                    $member0->image = $imgFile;

                    $member0->save();
                }
            }

            if ($request->hasFile('imgAnggota1')) {
                if ($request->file('imgAnggota1')->getSize() > 1000000) {
                    session()->flash("error", "File gagal di upload, pastikan ukuran file kurang dari 1 mb");
                    return redirect()->back();
                } else {
                    //ImageMember1
                    $idMember1 = $request->get('idAnggota1');
                    $member1 = TeamDetail::find($idMember1);
                    unlink('files/' . $member1->image);

                    $imgFile = time() . "_" . $request->file('imgAnggota1')->getClientOriginalName();
                    $request->file('imgAnggota1')->move($imgFolder, $imgFile);
                    $member1->image = $imgFile;

                    $member1->save();
                }
            }

            if ($request->hasFile('imgAnggota2')) {
                if ($request->file('imgAnggota2')->getSize() > 1000000) {
                    session()->flash("error", "File gagal di upload, pastikan ukuran file kurang dari 1 mb");
                    return redirect()->back();
                } else {
                    //ImageMember2
                    $idMember2 = $request->get('idAnggota2');
                    $member2 = TeamDetail::find($idMember2);
                    unlink('files/' . $member2->image);

                    $imgFile = time() . "_" . $request->file('imgAnggota2')->getClientOriginalName();
                    $request->file('imgAnggota2')->move($imgFolder, $imgFile);
                    $member2->image = $imgFile;

                    $member2->save();
                }
            }
            $team['status'] = "pending";
            $team['message'] = "";
            $team->save();
            //kasih pesan berhasil
            session()->flash("success", "File Gambar atau PDF Kartu Pelajar berhasil di ubah. Silahkan tunggu hingga panitia memvalidasi ulang data Anda");
            return redirect()->back();
        } catch (\Exception $e) {
            //pesan gagal karena format file tidak sesuai
            $message = 'Terjadi kesalahan saat upload file Gambar atau PDF.
                     Pastikan format file dalam bentuk PDF, JPG, PNG, dan JPEG dengan maksimal ukuran file adalah 1 MB. 
                     Pastikan format nama file adalah NamaTim_Nama';
            session()->flash("error", $message);
            return redirect()->back();
        }
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
