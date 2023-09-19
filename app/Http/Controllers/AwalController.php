<?php

namespace App\Http\Controllers;

use App\Models\Awal;
use App\Models\Master;
use Illuminate\Http\Request;
use App\Models\Monitor;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;
use App\Models\Masterawal;

class AwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Awal::all()->sortByDesc('id');

        return view('awal.awal', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $masterawal = Masterawal::where('status', 1)->pluck('ulp', 'id');
        return view('awal.create', compact('masterawal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $uuid1 = Uuid::uuid1()->toString();
        $m_awal = Masterawal::where('id', $request->masterawal_id)->first();
        global $a;
        global $b;
        global $c;

        $data = $request->all();
        $data['uuid'] = $uuid1;
        $data['cos'] = $m_awal->cos;
        $data['wbp'] = $m_awal->wbp;
        $data['lwbp1'] = $m_awal->lwbp1;
        $data['lwbp2'] = $m_awal->lwbp2;

        //dd($data);

        $posts = Master::where('masterawal_id', $request->masterawal_id)
            ->where('aktif', 1)
            ->get();
        // dd($posts);
        $a = $data;
        $b = $posts;
        $c = $uuid1;

        DB::beginTransaction();

        try {
            global $a, $b, $c;
            Awal::create($a);
            foreach ($b as $post) {
                Monitor::create([
                    'masterawal_id' => $post->masterawal_id,
                    'master_id' => $post->id,
                    'uuid' => $c,
                    'jenis_pel' => $post->jenis_pel,
                    'status_op' => $post->status_op,
                    'revisi_travo' => $post->revisi_travo,
                ]);
            }

            DB::commit();
            return redirect()
                ->route('awal.index')
                ->with('success', 'Data Berhasil Di simpan');
        } catch (\Exception $e) {
            DB::rollback();

            return redirect()
                ->route('awal.index')
                ->with('success', 'ganguan di ulang lg');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Awal  $awal
     * @return \Illuminate\Http\Response
     */
    public function show(Awal $awal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Awal  $awal
     * @return \Illuminate\Http\Response
     */
    public function edit(Awal $awal)
    {
        $masterawal = Masterawal::where('status', 1)->pluck('ulp', 'id');
        $posts = $awal;
        return view('awal.create', compact('posts', 'masterawal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Awal  $awal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Awal $awal)
    {
        $awal->update($request->all());

        return redirect()
            ->route('awal.index')
            ->with('success', 'Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Awal  $awal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Awal $awal)
    {
        global $ae;
        global $be;

        $ae = $awal->uuid;
        $be = $awal->id;

        DB::beginTransaction();

        try {
            global $ae, $be;

            Monitor::where('uuid', $ae)->delete();

            Awal::where('id', $be)->delete();

            DB::commit();

            return redirect()
                ->route('awal.index')
                ->with('success', 'Data berhasil di hapus');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()
                ->route('awal.index')
                ->with('success', 'Data Gangguan di ulang lg');
        }
    }

    public function copy($id)
    {
        $reg = Awal::where('uuid', $id)->first();

        //  dd($reg);
        return view('copy.create', compact('id', 'reg'));
    }

    public function save(Request $request)
    {
        $uuid1 = Uuid::uuid1()->toString();
        $m_awal = Awal::where('uuid', $request->uuids)->first();

        global $a;
        global $b;
        global $c;

        $data = [
            'judul' => $request->judul,
            'masterawal_id' => $request->masterawal_id,
            'uuid' => $uuid1,
            'bulan' => $request->bulan,
            'tahun' => $request->tahun,
        ];
        $data['cos'] = $m_awal->cos;
        $data['wbp'] = $m_awal->wbp;
        $data['lwbp1'] = $m_awal->lwbp1;
        $data['lwbp2'] = $m_awal->lwbp2;

        // dd($data);

        $posts = Monitor::where('uuid', $request->uuids)
            ->where('masterawal_id', $request->masterawal_id)
            ->get();

        $a = $data;
        $b = $posts;
        $c = $uuid1;

        DB::beginTransaction();

        try {
            global $a, $b, $c;
            Awal::create($a);
            foreach ($b as $post) {
                // dd($post->id);

                Monitor::create([
                    'masterawal_id' => $post->masterawal_id,
                    'master_id' => $post->master_id,
                    'uuid' => $c,
                    'jenis_pel' => $post->jenis_pel,
                    'status_op' => $post->status_op,
                    'revisi_travo' => $post->revisi_travo,
                    's_rs' => $post->s_rs ?? null,
                    's_rt' => $post->s_rt ?? null,
                    's_st' => $post->s_st ?? null,
                    's_rn' => $post->s_rn ?? null,
                    ' s_n' => $post->s_n ?? null,
                    's_tn' => $post->s_tn ?? null,
                    ' s_tap' => $post->s_tap ?? null,
                    's_tahanan' => $post->s_tahanan ?? null,
                    's_ground' => $post->s_ground ?? null,
                    's_jrs1_r' => $post->s_jrs1_r ?? null,
                    's_jrs1_s' => $post->s_jrs1_s ?? null,
                    's_jrs1_t' => $post->s_jrs1_t ?? null,
                    's_jrs1_n' => $post->s_jrs1_n ?? null,
                    's_fuse1_r' => $post->s_fuse1_r ?? null,
                    's_fuse1_s' => $post->s_fuse1_s ?? null,
                    's_fuse1_t' => $post->s_fuse1_t ?? null,
                    ' s_jrs2_r' => $post->s_jrs2_r ?? null,
                    's_jrs2_s' => $post->s_jrs2_s ?? null,
                    's_jrs2_t' => $post->s_jrs2_t ?? null,
                    's_jrs2_n' => $post->s_jrs2_n ?? null,
                    's_fuse2_r' => $post->s_fuse2_r ?? null,
                    's_fuse2_s' => $post->s_fuse2_s ?? null,
                    's_fuse2_t' => $post->s_fuse2_t ?? null,
                    's_jrs3_r' => $post->s_jrs3_r ?? null,
                    's_jrs3_s' => $post->s_jrs3_s ?? null,
                    's_jrs3_t' => $post->s_jrs3_t ?? null,
                    's_jrs3_n' => $post->s_jrs3_n ?? null,
                    's_fuse3_r' => $post->s_fuse3_r ?? null,
                    's_fuse3_s' => $post->s_fuse3_s ?? null,
                    's_fuse3_t' => $post->s_fuse3_t ?? null,
                    's_jrs4_r' => $post->s_jrs4_r ?? null,
                    's_jrs4_s' => $post->s_jrs4_s ?? null,
                    's_jrs4_t' => $post->s_jrs4_t ?? null,
                    's_jrs4_n' => $post->s_jrs4_n ?? null,
                    's_fuse4_r' => $post->s_fuse4_r ?? null,
                    's_fuse4_s' => $post->s_fuse4_s ?? null,
                    's_fuse4_t' => $post->s_fuse4_t ?? null,
                    's_jrs5_r' => $post->s_jrs5_r ?? null,
                    's_jrs5_s' => $post->s_jrs5_s ?? null,
                    's_jrs5_t' => $post->s_jrs5_t ?? null,
                    's_jrs5_n' => $post->s_jrs5_n ?? null,
                    's_fuse5_r' => $post->s_fuse5_r ?? null,
                    's_fuse5_s' => $post->s_fuse5_s ?? null,
                    's_fuse5_t' => $post->s_fuse5_t ?? null,
                    'tgl' => $post->tgl ?? null,
                    's_jam' => $post->s_jam ?? null,
                    's_petugas' => $post->s_petugas ?? null,
                    'm_rs' => $post->m_rs ?? null,
                    'm_rt' => $post->m_rt ?? null,
                    'm_st' => $post->m_st ?? null,
                    'm_rn' => $post->m_rn ?? null,
                    ' m_n' => $post->m_n ?? null,
                    'm_tn' => $post->m_tn ?? null,
                    ' m_tap' => $post->m_tap ?? null,
                    'm_tahanan' => $post->m_tahanan ?? null,
                    'm_ground' => $post->m_ground ?? null,
                    'm_jrs1_r' => $post->m_jrs1_r ?? null,
                    'm_jrs1_s' => $post->m_jrs1_s ?? null,
                    'm_fuse1_t' => $post->m_fuse1_t ?? null,
                    ' m_jrs2_r' => $post->m_jrs2_r ?? null,
                    'm_jrs2_s' => $post->m_jrs2_s ?? null,
                    'm_jrs2_t' => $post->m_jrs2_t ?? null,
                    'm_jrs2_n' => $post->m_jrs2_n ?? null,
                    'm_fuse2_r' => $post->m_fuse2_r ?? null,
                    'm_fuse2_s' => $post->m_fuse2_s ?? null,
                    'm_fuse2_t' => $post->m_fuse2_t ?? null,
                    'm_jrs3_r' => $post->m_jrs3_r ?? null,
                    'm_jrs3_s' => $post->m_jrs3_s ?? null,
                    'm_jrs3_t' => $post->m_jrs3_t ?? null,
                    'm_jrs3_n' => $post->m_jrs3_n ?? null,
                    'm_fuse3_r' => $post->m_fuse3_r ?? null,
                    'm_fuse3_s' => $post->m_fuse3_s ?? null,
                    'm_fuse3_t' => $post->m_fuse3_t ?? null,
                    'm_jrs4_r' => $post->m_jrs4_r ?? null,
                    'm_jrs4_s' => $post->m_jrs4_s ?? null,
                    'm_jrs4_t' => $post->m_jrs4_t ?? null,
                    'm_jrs4_n' => $post->m_jrs4_n ?? null,
                    'm_fuse4_r' => $post->m_fuse4_r ?? null,
                    'm_fuse4_s' => $post->m_fuse4_s ?? null,
                    'm_fuse4_t' => $post->m_fuse4_t ?? null,
                    'm_jrs5_r' => $post->m_jrs5_r ?? null,
                    'm_jrs5_s' => $post->m_jrs5_s ?? null,
                    'm_jrs5_t' => $post->m_jrs5_t ?? null,
                    'm_jrs5_n' => $post->m_jrs5_n ?? null,
                    'm_fuse5_r' => $post->m_fuse5_r ?? null,
                    'm_fuse5_s' => $post->m_fuse5_s ?? null,
                    'm_fuse5_t' => $post->m_fuse5_t ?? null,
                    'm_jam' => $post->m_jam ?? null,
                    'm_petugas' => $post->m_petugas ?? null,
                    'm_pelanggan' => $post->m_pelanggan ?? null,
                    'm_ket' => $post->m_ket ?? null,
                ]);
            }

            DB::commit();
            return redirect()
                ->route('awal.index')
                ->with('success', 'Data Berhasil Di Copy');
        } catch (\Exception $e) {
            DB::rollback();

            return redirect()
                ->route('awal.index')
                ->with('success', 'Data Gangguan di ulang lg');
        }
    }
}