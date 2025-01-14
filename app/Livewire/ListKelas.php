<?php

namespace App\Livewire;

use App\Models\Kelas;
use Livewire\Component;

class ListKelas extends Component
{
    public $datas;

    public function mount() {
        $this->datas = Kelas::get();
    }

    public function deleteKelas($id) {
        Kelas::where('id', $id)->delete();

        return $this->redirect('/kelas', navigate:true);
    }
    
    public function render()
    {
        return view('livewire.list-kelas', [
            'datas' => $this->datas
        ]);
    }
}
