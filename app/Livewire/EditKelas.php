<?php

namespace App\Livewire;

use App\Models\Kelas;
use Livewire\Component;

class EditKelas extends Component
{
    public Kelas $kelas;
    public $name;

    public function mount($data_kelas) {
        $this->kelas = $data_kelas;
        $this->name = $data_kelas->name;
    }

    public function update() {
        $this->validate([
            'name' => 'required'
        ]);

        Kelas::where('id', $this->kelas->id)->update([
            'name' => $this->name
        ]);

        session()->flash('message', 'Kelas berhasil diupdate');
        $this->redirect('/kelas', navigate:true);
    }

    public function render()
    {
        return view('livewire.edit-kelas');
    }
}
