<?php

namespace App\Http\Livewire\Mlm;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Master;
use App\Models\Monitor;
class Mlm extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $ids, $jenim_pel, $statum_op, $masterawal_id, $master_id, $search;

    public $reg;
    public $id_data = false;
    protected $queryString = ['reg'];

    public $m_rs;
    public $m_rt;
    public $m_st;
    public $m_rn;
    public $m_n;
    public $m_tn;
    public $m_tap;
    public $m_tahanan;
    public $m_ground;
    public $m_jrs1_r;
    public $m_jrs1_s;
    public $m_jrs1_t;
    public $m_jrs1_n;
    public $m_fuse1_r;
    public $m_fuse1_s;
    public $m_fuse1_t;
    public $m_jrs2_r;
    public $m_jrs2_s;
    public $m_jrs2_t;
    public $m_jrs2_n;
    public $m_fuse2_r;
    public $m_fuse2_s;
    public $m_fuse2_t;
    public $m_jrs3_r;
    public $m_jrs3_s;
    public $m_jrs3_t;
    public $m_jrs3_n;
    public $m_fuse3_r;
    public $m_fuse3_s;
    public $m_fuse3_t;
    public $m_jrs4_r;
    public $m_jrs4_s;
    public $m_jrs4_t;
    public $m_jrs4_n;
    public $m_fuse4_r;
    public $m_fuse4_s;
    public $m_fuse4_t;
    public $m_jrs5_r;
    public $m_jrs5_s;
    public $m_jrs5_t;
    public $m_jrs5_n;
    public $m_fuse5_r;
    public $m_fuse5_s;
    public $m_fuse5_t;

    public $m_jam;
    public $m_petugas;
    public $m_pelanggan;
    public $m_ket;

    public $fres;

    protected $listeners = [
        'refresh-mi' => '$refresh',
    ];

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function resetInputField()
    {
        $this->ids = '';
    }

    public function edit($id)
    {
        $edit = Monitor::where('id', $id)->first();
        $this->id_data = $id;
        $this->ids = $id;
        $this->m_rs = $edit->m_rs;
        $this->m_rt = $edit->m_rt;
        $this->m_st = $edit->m_st;
        $this->m_rn = $edit->m_rn;
        $this->m_n = $edit->m_n;
        $this->m_tn = $edit->m_tn;
        $this->m_tap = $edit->m_tap;
        $this->m_tahanan = $edit->m_tahanan;
        $this->m_ground = $edit->m_ground;
        $this->m_jrs1_r = $edit->m_jrs1_r;
        $this->m_jrs1_s = $edit->m_jrs1_s;
        $this->m_jrs1_t = $edit->m_jrs1_t;
        $this->m_jrs1_n = $edit->m_jrs1_n;
        $this->m_fuse1_r = $edit->m_fuse1_r;
        $this->m_fuse1_s = $edit->m_fuse1_s;
        $this->m_fuse1_t = $edit->m_fuse1_t;
        $this->m_jrs2_r = $edit->m_jrs2_r;
        $this->m_jrs2_s = $edit->m_jrs2_s;
        $this->m_jrs2_t = $edit->m_jrs2_t;
        $this->m_jrs2_n = $edit->m_jrs2_n;
        $this->m_fuse2_r = $edit->m_fuse2_r;
        $this->m_fuse2_s = $edit->m_fuse2_s;
        $this->m_fuse2_t = $edit->m_fuse2_t;
        $this->m_jrs3_r = $edit->m_jrs3_r;
        $this->m_jrs3_s = $edit->m_jrs3_s;
        $this->m_jrs3_t = $edit->m_jrs3_t;
        $this->m_jrs3_n = $edit->m_jrs3_n;
        $this->m_fuse3_r = $edit->m_fuse3_r;
        $this->m_fuse3_s = $edit->m_fuse3_s;
        $this->m_fuse3_t = $edit->m_fuse3_t;
        $this->m_jrs4_r = $edit->m_jrs4_r;
        $this->m_jrs4_s = $edit->m_jrs4_s;
        $this->m_jrs4_t = $edit->m_jrs4_t;
        $this->m_jrs4_n = $edit->m_jrs4_n;
        $this->m_fuse4_r = $edit->m_fuse4_r;
        $this->m_fuse4_s = $edit->m_fuse4_s;
        $this->m_fuse4_t = $edit->m_fuse4_t;
        $this->m_jrs5_r = $edit->m_jrs5_r;
        $this->m_jrs5_s = $edit->m_jrs5_s;
        $this->m_jrs5_t = $edit->m_jrs5_t;
        $this->m_jrs5_n = $edit->m_jrs5_n;
        $this->m_fuse5_r = $edit->m_fuse5_r;
        $this->m_fuse5_s = $edit->m_fuse5_s;
        $this->m_fuse5_t = $edit->m_fuse5_t;

        $this->m_jam = $edit->m_jam;
        $this->m_petugas = $edit->m_petugas;
        $this->m_pelanggan = $edit->m_pelanggan;
        $this->m_ket = $edit->m_ket;
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
            //  dd($this->m_n);
            $data = [
                'm_rs' => $this->m_rs,
                'm_rt' => $this->m_rt ?? null,
                'm_st' => $this->m_st ?? null,
                'm_rn' => $this->m_rn ?? null,
                'm_n' => $this->m_n ?? null,
                'm_tn' => $this->m_tn ?? null,
                'm_tap' => $this->m_tap ?? null,
                'm_tahanan' => $this->m_tahanan ?? null,
                'm_ground' => $this->m_ground ?? null,
                'm_jrs1_r' => $this->m_jrs1_r ?? null,
                'm_jrs1_s' => $this->m_jrs1_s ?? null,
                'm_jrs1_t' => $this->m_jrs1_t ?? null,
                'm_jrs1_n' => $this->m_jrs1_n ?? null,
                'm_fuse1_r' => $this->m_fuse1_r ?? null,
                'm_fuse1_s' => $this->m_fuse1_s ?? null,
                'm_fuse1_t' => $this->m_fuse1_t ?? null,
                'm_jrs2_r' => $this->m_jrs2_r ?? null,
                'm_jrs2_s' => $this->m_jrs2_s ?? null,
                'm_jrs2_t' => $this->m_jrs2_t ?? null,
                'm_jrs2_n' => $this->m_jrs2_n ?? null,
                'm_fuse2_r' => $this->m_fuse2_r ?? null,
                'm_fuse2_s' => $this->m_fuse2_s ?? null,
                'm_fuse2_t' => $this->m_fuse2_t ?? null,
                'm_jrs3_r' => $this->m_jrs3_r ?? null,
                'm_jrs3_s' => $this->m_jrs3_s ?? null,
                'm_jrs3_t' => $this->m_jrs3_t ?? null,
                'm_jrs3_n' => $this->m_jrs3_n ?? null,
                'm_fuse3_r' => $this->m_fuse3_r ?? null,
                'm_fuse3_s' => $this->m_fuse3_s ?? null,
                'm_fuse3_t' => $this->m_fuse3_t ?? null,
                'm_jrs4_r' => $this->m_jrs4_r ?? null,
                'm_jrs4_s' => $this->m_jrs4_s ?? null,
                'm_jrs4_t' => $this->m_jrs4_t ?? null,
                'm_jrs4_n' => $this->m_jrs4_n ?? null,
                'm_fuse4_r' => $this->m_fuse4_r ?? null,
                'm_fuse4_s' => $this->m_fuse4_s ?? null,
                'm_fuse4_t' => $this->m_fuse4_t ?? null,
                'm_jrs5_r' => $this->m_jrs5_r ?? null,
                'm_jrs5_s' => $this->m_jrs5_s ?? null,
                'm_jrs5_t' => $this->m_jrs5_t ?? null,
                'm_jrs5_n' => $this->m_jrs5_n ?? null,
                'm_fuse5_r' => $this->m_fuse5_r ?? null,
                'm_fuse5_s' => $this->m_fuse5_s ?? null,
                'm_fuse5_t' => $this->m_fuse5_t ?? null,
                'm_jam' => $this->m_jam ?? null,
                'm_petugas' => $this->m_petugas ?? null,
                'm_pelanggan' => $this->m_pelanggan ?? null,
                'm_ket' => $this->m_ket ?? null,
            ];
            //   dd($posts);
            $posts->update($this->cleanInput($data));
            $this->id_data = null;
            $this->emitSelf('refresh-mi');
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

        for ($i = 53; $i < 101; $i++) {
            $select[] = $ura[$i];
        }

        $a1 = $select;
        $a2 = ['id', 'masterawal_id', 'master_id', 'tgl'];
        $select = array_merge($a1, $a2);

        // dd($select);

        $posts = Monitor::select($select)
            ->whereHas('master', function ($q) use ($search) {
                $q
                    ->search('id_nama', $search)
                    ->orWhere('penyulang', 'like', '%' . $search . '%');
            })
            ->orderBy('master_id', 'ASC')
            ->where('uuid', $this->reg)
            ->paginate(10);

        return view('livewire.mlm.mlm', compact('posts'));
    }
}