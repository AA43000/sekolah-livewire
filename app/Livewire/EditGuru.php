<?php

namespace App\Livewire;

use App\Models\GuruKelas;
use App\Models\Guru;
use App\Models\Kelas;
use Livewire\Component;

class EditGuru extends Component
{
    public $guru;
    public $kelas;
    public $name;
    public $mata_pelajaran;
    public $jenis_kelamin;
    public $nip;
    public $id_kelas = [];

    public function mount($data_guru) {
        $this->kelas = Kelas::all();
        $this->guru = $data_guru;
        $this->name = $data_guru->name;
        $this->mata_pelajaran = $data_guru->mata_pelajaran;
        $this->jenis_kelamin = $data_guru->jenis_kelamin;
        $this->nip = $data_guru->nip;
        $this->id_kelas = GuruKelas::where('id_guru', $data_guru->id)->pluck('id_kelas');
    }

    public function update() {
        $this->validate([
            'name' => 'required',
            'mata_pelajaran' => 'required',
            'jenis_kelamin' => 'required',
            'nip' => 'required',
            'id_kelas' => 'required',
        ]);

        Guru::where('id', $this->guru->id)->update([
            'name' => $this->name,
            'mata_pelajaran' => $this->mata_pelajaran,
            'jenis_kelamin' => $this->jenis_kelamin,
            'nip' => $this->nip,
        ]);

        $this->proses_kelas($this->id_kelas, $this->guru->id);

        $this->redirect('/guru', navigate:true);
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
        return view('livewire.edit-guru');
    }
}
