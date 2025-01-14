<?php

namespace App\Livewire;

use App\Models\Siswa;
use App\Models\Kelas;

use Livewire\Component;

class CreateSiswa extends Component
{
    public $kelas;
    public $name;
    public $jenis_kelamin;
    public $nis;
    public $id_kelas;

    public function mount() {
        $this->kelas = Kelas::all();
    }

    public function save() {
        $this->validate([
            'name' => 'required',
            'jenis_kelamin' => 'required',
            'nis' => 'required',
            'id_kelas' => 'required',
        ]);

        $creatdSiswa = new Siswa;
        $creatdSiswa->name = $this->name;
        $creatdSiswa->jenis_kelamin = $this->jenis_kelamin;
        $creatdSiswa->nis = $this->nis;
        $creatdSiswa->id_kelas = $this->id_kelas;
        $creatdSiswa->save();

        $this->name = '';
        $this->nis = '';
        $this->id_kelas = '';
        $this->jenis_kelamin = '';

        return $this->redirect('/siswa', navigate:true);
    }

    public function render()
    {
        return view('livewire.create-siswa');
    }
}
