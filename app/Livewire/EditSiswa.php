<?php

namespace App\Livewire;

use App\Models\Siswa;
use App\Models\Kelas;

use Livewire\Component;

class EditSiswa extends Component
{
    public $siswa;
    public $kelas;
    public $name;
    public $jenis_kelamin;
    public $nis;
    public $id_kelas;

    public function mount($data_siswa) {
        $this->siswa = $data_siswa;
        $this->kelas = Kelas::all();
        $this->name = $data_siswa->name;
        $this->jenis_kelamin = $data_siswa->jenis_kelamin;
        $this->nis = $data_siswa->nis;
        $this->id_kelas = $data_siswa->id_kelas;
    }

    public function update() {
        $this->validate([
            'name' => 'required',
            'jenis_kelamin' => 'required',
            'nis' => 'required',
            'id_kelas' => 'required',
        ]);

        Siswa::where('id', $this->siswa->id)->update([
            'name' => $this->name,
            'jenis_kelamin' => $this->jenis_kelamin,
            'nis' => $this->nis,
            'id_kelas' => $this->id_kelas,
        ]);

        return $this->redirect('/siswa', navigate:true);
    }

    public function render()
    {
        return view('livewire.edit-siswa');
    }
}
