<?php

namespace App\Livewire;

use App\Models\Kelas;

use Livewire\Component;

class CreateKelas extends Component
{
    public $name = '';

    public function save() {
        $this->validate([
            'name' => 'required'
        ]);

        $createKelas = new Kelas;
        $createKelas->name = $this->name;
        $createKelas->save();

        $this->name = '';

        session()->flash('message', 'Kelas berhasil dibuat');
        $this->redirect('/kelas', navigate:true);
    }

    public function render()
    {
        return view('livewire.create-kelas');
    }
}
