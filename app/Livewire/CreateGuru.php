<?php

namespace App\Livewire;

use App\Models\Guru;
use App\Models\GuruKelas;
use App\Models\Kelas;
use Livewire\Component;

class CreateGuru extends Component
{
    public $kelas;
    public $name;
    public $jenis_kelamin;
    public $nip;
    public $mata_pelajaran;
    public $id_kelas = [];
    protected $listeners = ['refreshSelect2'];

    public function mount() {
        $this->kelas = Kelas::all();
    }

    public function save() {
        $this->validate([
            'name' => 'required',
            'jenis_kelamin' => 'required',
            'nip' => 'required',
            'mata_pelajaran' => 'required',
            'id_kelas' => 'required|array|min:1',
        ]);

        $createGuru = new Guru;
        $createGuru->name = $this->name;
        $createGuru->jenis_kelamin = $this->jenis_kelamin;
        $createGuru->nip = $this->nip;
        $createGuru->mata_pelajaran = $this->mata_pelajaran;
        $createGuru->save();
        $id = $createGuru->id;

        $this->proses_kelas($this->id_kelas, $id);

        $this->name = '';        
        $this->nip = '';        
        $this->jenis_kelamin = '';        
        $this->mata_pelajaran = '';
        $this->id_kelas = [];
        
        return $this->redirect('/guru', navigate:true);
    }

    public function proses_kelas($id_kelas, $id_guru) {
        GuruKelas::where('id_guru', $id_guru)->whereNotIn('id_kelas', $id_kelas)->delete();

        foreach($id_kelas as $kelas) {
            GuruKelas::updateOrCreate([
                'id_guru' => $id_guru,
                'id_kelas' => $kelas
            ]);
        }
    }

    public function render()
    {
        return view('livewire.create-guru');
    }
}
