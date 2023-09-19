<?php

namespace App\Http\Livewire\Trafo;

use Livewire\Component;
use App\Models\Monitor;
use Livewire\WithPagination;
use App\Models\Master;
use Illuminate\Support\Facades\DB;

class Trafo extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $ids,
        $jenis_pel,
        $status_op,
        $masterawal_id,
        $master_id,
        $search,
        $revisi_travo;

    public $reg;

    protected $queryString = ['reg'];

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function resetInputField()
    {
        $this->ids = '';
        $this->masterawal_id = '';
        $this->master_id = '';
        $this->jenis_pel = '';
        $this->status_op = '';
        $this->uuid = '';
        $this->revisi_travo = '';
    }
    public function hydrate()
    {
        $this->resetErrorBag();
        $this->resetValidation();
    }

    public function store()
    {
        $this->validate([
            'master_id' => 'required',
        ]);

        $mstr = Master::where('id', $this->master_id)->first();
        $data = [
            'masterawal_id' => $mstr->masterawal_id,
            'master_id' => $this->master_id,
            'uuid' => $this->reg,
            'jenis_pel' => $mstr->jenis_pel,
            'status_op' => $mstr->status_op,
            'revisi_travo' => $mstr->revisi_travo,
        ];

        //  dd($data);

        Monitor::create($data);
        $this->dispatchBrowserEvent('newName', [
            'newName' => 'Data Berhasil Di Simpan',
        ]);
        $this->emit('studentAdded');
        $this->dispatchBrowserEvent('newName', [
            'newName' => 'Data Berhasil Di Simpan',
        ]);
        $this->resetInputField();
    }

    public function edit($id)
    {
        $posts = Monitor::where('id', $id)->first();
        $this->ids = $id;
        $this->jenis_pel = $posts->jenis_pel;
        $this->status_op = $posts->status_op;
        $this->revisi_travo = $posts->revisi_travo;
    }

    public function update()
    {
        // $this->validate([
        //     'jenis_pel' => 'required',
        //     'status_op' => 'required',
        // ]);
        // dd($this->revisi_travo);
        if ($this->ids) {
            $posts = Monitor::find($this->ids);

            $data = [
                'jenis_pel' => $this->jenis_pel,
                'status_op' => $this->status_op,
                'revisi_travo' => $this->revisi_travo,
            ];
            // dd($data);
            $posts->update($data);
            $this->resetInputField();
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
        $posts = Monitor::find($this->deleteId);

        $posts->delete();
        Session()->flash('message', 'Data Berhasil di Hapus');
        $this->emit('studentDelete');
    }

    public function render()
    {
        $reg = $this->reg;
        $ok = [];
        $data = [];
        $monitor = [];
        $test = [];
        $data = Monitor::select('master_id')
            ->where('uuid', $reg)
            ->get()
            ->toArray();

        foreach ($data as $key => $value) {
            $ok[] = $value['master_id'];
        }

        //  dd($data);
        $mst = $data[0]['masterawal_id'] ?? null;
        $masters = Master::whereNotIn('id', $ok)
            ->where('masterawal_id', $mst)
            ->pluck('id_nama', 'id');

        // $test = Monitor::all()
        //     ->first()
        //     ->toArray();

        $test = DB::table('monitors')->first();

        $fruits = collect($test);
        $keys = $fruits->keys();

        // $ura = array_keys($test);

        for ($i = 0; $i < 7; $i++) {
            $select[] = $keys[$i];
        }

        $search = $this->search;

        $posts = Monitor::select($select)
            ->whereHas('master', function ($q) use ($search) {
                $q
                    ->search('id_nama', $search)
                    ->orWhere('penyulang', 'like', '%' . $search . '%');
            })
            ->orderBy('master_id', 'ASC')
            ->where('uuid', $this->reg)
            ->paginate(10);

        return view('livewire.trafo.trafo', compact('posts', 'masters'));
    }
}