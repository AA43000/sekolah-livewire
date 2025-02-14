<?php

namespace App\Livewire;

use Livewire\WithFileUploads;

use App\Models\Siswa;
use App\Models\Kelas;

use Livewire\Component;

class CreateSiswa extends Component
{
    use WithFileUploads;

    public $kelas;
    public $name;
    public $jenis_kelamin;
    public $nis;
    public $id_kelas;
    public $foto;

    public function mount() {
        $this->kelas = Kelas::all();
    }

    public function save() {
        $this->validate([
            'name' => 'required',
            'jenis_kelamin' => 'required',
            'nis' => 'required',
            'id_kelas' => 'required',
            'foto' => 'required '
        ]);
 
        $foto = $this->foto->store('photos');

        $creatdSiswa = new Siswa;
        $creatdSiswa->name = $this->name;
        $creatdSiswa->jenis_kelamin = $this->jenis_kelamin;
        $creatdSiswa->nis = $this->nis;
        $creatdSiswa->id_kelas = $this->id_kelas;
        $creatdSiswa->foto = $foto;
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
