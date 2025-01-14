<?php

namespace App\Livewire;

use App\Models\Siswa;

use Livewire\Component;

class ListSiswa extends Component
{
    public $datas;

    public function mount() {
        $this->datas = Siswa::get();
    }

    public function deleteSiswa($id) {
        Siswa::where('id', $id)->delete();

        return $this->redirect('/siswa', navigate:true);
    }

    public function render()
    {
        return view('livewire.list-siswa', [
            'datas' => $this->datas
        ]);
    }
}
