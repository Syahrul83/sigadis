<?php

namespace App\Http\Livewire\Master;

use Livewire\Component;

use App\Models\Master;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;
use Illuminate\Validation\Rule;

class Data extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $ids;
    public $master;
    // public $formData;
    public $id_ap2t;
    public $id_nama;
    public $alamat;
    public $lintang;
    public $bujur;
    public $konstruksi;
    public $trafo;
    public $penyulang;
    public $rayon;
    public $merek;
    public $ns_trafo;
    public $tahun;
    public $tipe;
    public $kapasitas;
    public $jenis_pel;
    public $status_op;
    public $jumlah;
    public $search;

    public $updateMode = false;

    public $masterID;

    public $reg;

    public $aktif;
    public $revisi_travo;

    protected $queryString = ['reg'];

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function resetInputField()
    {
        $this->ids = '';
        $this->id_ap2t = '';
        $this->id_nama = '';
        $this->alamat = '';
        $this->lintang = '';
        $this->bujur = '';
        $this->konstruksi = '';
        $this->trafo = '';
        $this->penyulang = '';
        $this->rayon = '';
        $this->merek = '';
        $this->ns_trafo = '';
        $this->tahun = '';
        $this->tipe = '';
        $this->kapasitas = '';
        $this->jenis_pel = '';
        $this->status_op = '';
        $this->revisi_travo = '';
    }

    // public function mount($reg)
    // {
    //     //  dd($reg);

    //     $this->regional = $reg;
    // }

    public function hydrate()
    {
        $this->resetErrorBag();
        $this->resetValidation();
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
    public function store()
    {
        $this->validate([
            'id_nama' => 'required|unique:masters',
            'kapasitas' => 'required',
        ]);

        $data = [
            'id_ap2t' => $this->id_ap2t,
            'masterawal_id' => $this->reg,
            'id_nama' => $this->id_nama,
            'alamat' => $this->alamat,
            'lintang' => $this->lintang,
            'bujur' => $this->bujur,
            'konstruksi' => $this->konstruksi,
            'trafo' => $this->trafo,
            'penyulang' => $this->penyulang,
            'rayon' => $this->rayon,
            'merek' => $this->merek,
            'ns_trafo' => $this->ns_trafo,
            'tahun' => $this->tahun,
            'tipe' => $this->tipe,
            'kapasitas' => $this->kapasitas,
            'jenis_pel' => $this->jenis_pel,
            'status_op' => $this->status_op,
            'revisi_travo' => $this->revisi_travo,
        ];

        //dd($data);
        Master::create($this->cleanInput($data));
        $this->resetInputField();
        $this->emit('studentAdded');
        $this->dispatchBrowserEvent('newName', [
            'newName' => 'Data Berhasil Di Simpan',
        ]);
    }

    public function edit($id)
    {
        // dd($id);
        $this->updateMode = true;

        $posts = Master::where('id', $id)->first();

        $this->ids = $id;
        $this->id_ap2t = $posts->id_ap2t;
        $this->id_nama = $posts->id_nama;
        $this->alamat = $posts->alamat;
        $this->lintang = $posts->lintang;
        $this->bujur = $posts->bujur;
        $this->konstruksi = $posts->konstruksi;
        $this->trafo = $posts->trafo;
        $this->penyulang = $posts->penyulang;
        $this->rayon = $posts->rayon;
        $this->merek = $posts->merek;
        $this->ns_trafo = $posts->ns_trafo;
        $this->tahun = $posts->tahun;
        $this->tipe = $posts->tipe;
        $this->kapasitas = $posts->kapasitas;
        $this->jenis_pel = $posts->jenis_pel;
        $this->status_op = $posts->status_op;
        $this->revisi_travo = $posts->revisi_travo;
    }

    protected function rules()
    {
        return [
            'id_nama' => [
                'required',
                Rule::unique('masters')->ignore($this->ids),
            ],
            'kapasitas' => 'required',
        ];
    }

    public function update()
    {
        $this->validate();

        if ($this->ids) {
            $posts = Master::find($this->ids);

            $data = [
                'id_ap2t' => $this->id_ap2t,
                'id_nama' => $this->id_nama,
                'alamat' => $this->alamat,
                'lintang' => $this->lintang,
                'bujur' => $this->bujur,
                'konstruksi' => $this->konstruksi,
                'trafo' => $this->trafo,
                'penyulang' => $this->penyulang,
                'rayon' => $this->rayon,
                'merek' => $this->merek,
                'ns_trafo' => $this->ns_trafo,
                'tahun' => $this->tahun,
                'tipe' => $this->tipe,
                'kapasitas' => $this->kapasitas,
                'jenis_pel' => $this->jenis_pel,
                'status_op' => $this->status_op,
                'revisi_travo' => $this->revisi_travo,
            ];

            $posts->update($this->cleanInput($data));
            $this->resetInputField();
            // Session()->flash('message', 'Data Berhasil di Update');
            // $this->reset();
            // $this->resetExcept(['reg']);
            //$this->emit('berhasil');
            $this->dispatchBrowserEvent('newName', [
                'newName' => 'Data Berhasil Di update',
            ]);
            $this->emit('studentUpdate');
        }
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $posts = Master::find($this->deleteId);

        $posts->delete();
        Session()->flash('message', 'Data Berhasil di Hapus');
        $this->emit('studentDelete');
    }

    public function clear()
    {
        $this->updateMode = false;
        $this->resetInputField();
    }

    public function tombol1($id)
    {
        //dd($id);
        $posts = Master::select('id', 'aktif')
            ->where('id', $id)
            ->first();
        $data = ['aktif' => 0];
        $posts->update($data);
    }

    public function tombol2($id)
    {
        //dd($id);
        $posts = Master::select('id', 'aktif')
            ->where('id', $id)
            ->first();
        $data = ['aktif' => 1];
        $posts->update($data);
    }

    public function render()
    {
        $posts = Master::search('id_nama', $this->search)
            ->orderBy('id', 'DESC')
            ->where('masterawal_id', $this->reg)
            ->paginate(10);
        return view('livewire.master.data', compact('posts'));
    }
}