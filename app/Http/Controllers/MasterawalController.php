<?php

namespace App\Http\Controllers;

use App\Models\Master;
use App\Models\Masterawal;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class MasterawalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Masterawal::all()->sortByDesc('id');
        return view('masterawal.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masterawal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Masterawal::create($data);

        return redirect()
            ->route('masterawal.index')
            ->with('success', 'Data Berhasil Di simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Masterawal  $masterawal
     * @return \Illuminate\Http\Response
     */
    public function show(Masterawal $masterawal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Masterawal  $masterawal
     * @return \Illuminate\Http\Response
     */
    public function edit(Masterawal $masterawal)
    {
        $posts = $masterawal;
        return view('masterawal.create', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Masterawal  $masterawal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Masterawal $masterawal)
    {
        $masterawal->update($request->all());

        return redirect()
            ->route('masterawal.index')
            ->with('success', 'Data Berhasil Di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Masterawal  $masterawal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Masterawal $masterawal)
    {
        DB::beginTransaction($masterawal);

        try {
            Master::where('masterawal_id', $masterawal->id)->delete();
            $masterawal->delete();

            DB::commit();
            return redirect()
                ->route('masterawal.index')
                ->with('success', 'Data berhasil di hapus');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()
                ->route('masterawal.index')
                ->with('success', 'Data Gangguan di ulang lagi');
        }
    }

    public function aktif($id)
    {
        $posts = Masterawal::where('id', $id)->first();
        $posts['status'] = 0;
        $posts->update();

        return redirect()->back();
    }

    public function naktif($id)
    {
        $posts = Masterawal::where('id', $id)->first();
        $posts['status'] = 1;
        $posts->update();

        return redirect()->back();
    }
}