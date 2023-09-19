<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Illuminate\Contracts\Session\Session;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;

class Students extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $ids;
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $foto;
    public $search;

    protected $listeners = [
        'refresh-mi' => '$refresh',
    ];

    public function resetInputField()
    {
        $this->firstname = '';
        $this->lastname = '';
        $this->email = '';
        $this->phone = '';
        $this->foto = '';
    }

    public function store()
    {
        $data = $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'foto' => 'required|max:1024',
        ]);

        $data['foto'] = $this->foto->store('photos');
        //  dd($data);
        $study = Student::create($data);
        // dd($study);
        Session()->flash('message', 'student create Succsess');
        $this->resetInputField();
        $this->emit('studentAdded');
    }

    public function edit($id)
    {
        $student = Student::where('id', $id)->first();
        $this->ids = $student->id;
        $this->firstname = $student->firstname;
        $this->lastname = $student->lastname;
        $this->email = $student->email;
        $this->phone = $student->phone;
        $this->emitSelf('refresh-mi');
    }

    public function update()
    {
        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'foto' => 'max:1024',
        ]);

        if ($this->ids) {
            $student = Student::find($this->ids);

            $data = [
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
                'email' => $this->email,
                'phone' => $this->phone,
            ];

            if ($this->foto != '') {
                if ($student->foto != '') {
                    if (file_exists(storage_path('app/' . $student->foto))) {
                        unlink(storage_path('app/' . $student->foto));
                    }
                }

                $data['foto'] = $this->foto->store('photos');
            }

            $student->update($data);

            Session()->flash('message', 'student Update Succsess');
            $this->resetInputField();
            $this->emit('studentUpdate');
            $this->emitSelf('refresh-mi');
        }
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $student = Student::find($this->deleteId);

        if ($student->foto != '') {
            if (file_exists(storage_path('app/' . $student->foto))) {
                unlink(storage_path('app/' . $student->foto));
            }
        }
        $student->delete();
        Session()->flash('message', 'student delete Succsess');
    }

    public function render()
    {
        // sleep(1);

        $students = Student::search('firstname', $this->search)
            ->orderBy('id', 'DESC')
            ->paginate(5);
        return view('livewire.students', ['students' => $students]);
    }
}