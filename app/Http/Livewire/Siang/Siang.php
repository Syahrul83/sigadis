<?php

namespace App\Http\Livewire\Siang;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Master;
use App\Models\Monitor;

class Siang extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $ids, $jenis_pel, $status_op, $masterawal_id, $master_id, $search;

    public $reg;
    public $id_data = false;
    protected $queryString = ['reg'];

    public $s_rs;
    public $s_rt;
    public $s_st;
    public $s_rn;
    public $s_n;
    public $s_tn;
    public $s_tap;
    public $s_tahanan;
    public $s_ground;
    public $s_jrs1_r;
    public $s_jrs1_s;
    public $s_jrs1_t;
    public $s_jrs1_n;
    public $s_fuse1_r;
    public $s_fuse1_s;
    public $s_fuse1_t;
    public $s_jrs2_r;
    public $s_jrs2_s;
    public $s_jrs2_t;
    public $s_jrs2_n;
    public $s_fuse2_r;
    public $s_fuse2_s;
    public $s_fuse2_t;
    public $s_jrs3_r;
    public $s_jrs3_s;
    public $s_jrs3_t;
    public $s_jrs3_n;
    public $s_fuse3_r;
    public $s_fuse3_s;
    public $s_fuse3_t;
    public $s_jrs4_r;
    public $s_jrs4_s;
    public $s_jrs4_t;
    public $s_jrs4_n;
    public $s_fuse4_r;
    public $s_fuse4_s;
    public $s_fuse4_t;
    public $s_jrs5_r;
    public $s_jrs5_s;
    public $s_jrs5_t;
    public $s_jrs5_n;
    public $s_fuse5_r;
    public $s_fuse5_s;
    public $s_fuse5_t;
    public $tgl;
    public $s_jam;
    public $s_petugas;
    public $s_pelanggan;

    public $fres;

    protected $listeners = [
        'refresh-me' => '$refresh',
    ];

    public function resetInputField()
    {
        $this->ids = '';
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function edit($id)
    {
        $edit = Monitor::where('id', $id)->first();
        $this->id_data = $id;
        $this->ids = $id;
        $this->s_rs = $edit->s_rs;
        $this->s_rt = $edit->s_rt;
        $this->s_st = $edit->s_st;
        $this->s_rn = $edit->s_rn;
        $this->s_n = $edit->s_n;
        $this->s_tn = $edit->s_tn;
        $this->s_tap = $edit->s_tap;
        $this->s_tahanan = $edit->s_tahanan;
        $this->s_ground = $edit->s_ground;
        $this->s_jrs1_r = $edit->s_jrs1_r;
        $this->s_jrs1_s = $edit->s_jrs1_s;
        $this->s_jrs1_t = $edit->s_jrs1_t;
        $this->s_jrs1_n = $edit->s_jrs1_n;
        $this->s_fuse1_r = $edit->s_fuse1_r;
        $this->s_fuse1_s = $edit->s_fuse1_s;
        $this->s_fuse1_t = $edit->s_fuse1_t;
        $this->s_jrs2_r = $edit->s_jrs2_r;
        $this->s_jrs2_s = $edit->s_jrs2_s;
        $this->s_jrs2_t = $edit->s_jrs2_t;
        $this->s_jrs2_n = $edit->s_jrs2_n;
        $this->s_fuse2_r = $edit->s_fuse2_r;
        $this->s_fuse2_s = $edit->s_fuse2_s;
        $this->s_fuse2_t = $edit->s_fuse2_t;
        $this->s_jrs3_r = $edit->s_jrs3_r;
        $this->s_jrs3_s = $edit->s_jrs3_s;
        $this->s_jrs3_t = $edit->s_jrs3_t;
        $this->s_jrs3_n = $edit->s_jrs3_n;
        $this->s_fuse3_r = $edit->s_fuse3_r;
        $this->s_fuse3_s = $edit->s_fuse3_s;
        $this->s_fuse3_t = $edit->s_fuse3_t;
        $this->s_jrs4_r = $edit->s_jrs4_r;
        $this->s_jrs4_s = $edit->s_jrs4_s;
        $this->s_jrs4_t = $edit->s_jrs4_t;
        $this->s_jrs4_n = $edit->s_jrs4_n;
        $this->s_fuse4_r = $edit->s_fuse4_r;
        $this->s_fuse4_s = $edit->s_fuse4_s;
        $this->s_fuse4_t = $edit->s_fuse4_t;
        $this->s_jrs5_r = $edit->s_jrs5_r;
        $this->s_jrs5_s = $edit->s_jrs5_s;
        $this->s_jrs5_t = $edit->s_jrs5_t;
        $this->s_jrs5_n = $edit->s_jrs5_n;
        $this->s_fuse5_r = $edit->s_fuse5_r;
        $this->s_fuse5_s = $edit->s_fuse5_s;
        $this->s_fuse5_t = $edit->s_fuse5_t;
        $this->tgl = $edit->tgl;
        $this->s_jam = $edit->s_jam;
        $this->s_petugas = $edit->s_petugas;
        $this->s_pelanggan = $edit->s_pelanggan;

        // $edit['aktif'] = 1;
        // $edit->update();
    }

    protected function cleanInput($input)
    {
        foreach ($input as &$value) {
            if (is_array($value)) {
                $value = $this->cleanInput($value);
            } elseif (is_string($value)) {
                $value = trim($value);
                if ($value === '') {
                    $value = null;
                }
            }
        }
        return $input;
    }

    public function update()
    {
        if ($this->ids) {
            $posts = Monitor::find($this->ids);
            //  dd($this->s_n);
            $data = [
                's_rs' => $this->s_rs,
                's_rt' => $this->s_rt ?? null,
                's_st' => $this->s_st ?? null,
                's_rn' => $this->s_rn ?? null,
                's_n' => $this->s_n ?? null,
                's_tn' => $this->s_tn ?? null,
                's_tap' => $this->s_tap ?? null,
                's_tahanan' => $this->s_tahanan ?? null,
                's_ground' => $this->s_ground ?? null,
                's_jrs1_r' => $this->s_jrs1_r ?? null,
                's_jrs1_s' => $this->s_jrs1_s ?? null,
                's_jrs1_t' => $this->s_jrs1_t ?? null,
                's_jrs1_n' => $this->s_jrs1_n ?? null,
                's_fuse1_r' => $this->s_fuse1_r ?? null,
                's_fuse1_s' => $this->s_fuse1_s ?? null,
                's_fuse1_t' => $this->s_fuse1_t ?? null,
                's_jrs2_r' => $this->s_jrs2_r ?? null,
                's_jrs2_s' => $this->s_jrs2_s ?? null,
                's_jrs2_t' => $this->s_jrs2_t ?? null,
                's_jrs2_n' => $this->s_jrs2_n ?? null,
                's_fuse2_r' => $this->s_fuse2_r ?? null,
                's_fuse2_s' => $this->s_fuse2_s ?? null,
                's_fuse2_t' => $this->s_fuse2_t ?? null,
                's_jrs3_r' => $this->s_jrs3_r ?? null,
                's_jrs3_s' => $this->s_jrs3_s ?? null,
                's_jrs3_t' => $this->s_jrs3_t ?? null,
                's_jrs3_n' => $this->s_jrs3_n ?? null,
                's_fuse3_r' => $this->s_fuse3_r ?? null,
                's_fuse3_s' => $this->s_fuse3_s ?? null,
                's_fuse3_t' => $this->s_fuse3_t ?? null,
                's_jrs4_r' => $this->s_jrs4_r ?? null,
                's_jrs4_s' => $this->s_jrs4_s ?? null,
                's_jrs4_t' => $this->s_jrs4_t ?? null,
                's_jrs4_n' => $this->s_jrs4_n ?? null,
                's_fuse4_r' => $this->s_fuse4_r ?? null,
                's_fuse4_s' => $this->s_fuse4_s ?? null,
                's_fuse4_t' => $this->s_fuse4_t ?? null,
                's_jrs5_r' => $this->s_jrs5_r ?? null,
                's_jrs5_s' => $this->s_jrs5_s ?? null,
                's_jrs5_t' => $this->s_jrs5_t ?? null,
                's_jrs5_n' => $this->s_jrs5_n ?? null,
                's_fuse5_r' => $this->s_fuse5_r ?? null,
                's_fuse5_s' => $this->s_fuse5_s ?? null,
                's_fuse5_t' => $this->s_fuse5_t ?? null,
                'tgl' => $this->tgl ?? null,
                's_jam' => $this->s_jam ?? null,
                's_petugas' => $this->s_petugas ?? null,
            ];
            $posts->update($this->cleanInput($data));
            $this->id_data = null;
            $this->emitSelf('refresh-me');
            $this->dispatchBrowserEvent('newName', [
                'newName' => 'Data Berhasil Di Simpan',
            ]);
        }
    }
    public function render()
    {
        $search = $this->search;

        $test = Monitor::all()
            ->first()
            ->toArray();

        $ura = array_keys($test);

        for ($i = 6; $i < 53; $i++) {
            $select[] = $ura[$i];
        }

        $a1 = $select;
        $a2 = ['id', 'masterawal_id', 'master_id'];
        $select = array_merge($a1, $a2);

        //dd($select);

        $posts = Monitor::select($select)
            ->whereHas('master', function ($q) use ($search) {
                $q
                    ->search('id_nama', $search)
                    ->orWhere('penyulang', 'like', '%' . $search . '%');
            })
            ->orderBy('master_id', 'ASC')
            ->where('uuid', $this->reg)
            ->paginate(10);

        //   dd($posts);
        return view('livewire.siang.siang', compact('posts'));
    }
}