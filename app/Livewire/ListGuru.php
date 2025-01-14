<?php

namespace App\Livewire;

use App\Models\Guru;
use App\Models\GuruKelas;
use Livewire\Component;

class ListGuru extends Component
{
    public $datas;

    public function mount() {
        $gurus = Guru::with('kelas')->get();
        $this->datas = $gurus->map(function ($gurus) {
            $kelas_nama = $gurus->kelas->pluck('name')->implode(', ');

            return [
                'id' => $gurus->id,
                'name' => $gurus->name,
                'mata_pelajaran' => $gurus->mata_pelajaran,
                'jenis_kelamin' => $gurus->jenis_kelamin,
                'nip' => $gurus->nip,
                'kelas' => $kelas_nama
            ];
        });
    }

    public function deleteGuru($id) {
        Guru::where('id', $id)->delete();
        GuruKelas::where('id_guru', $id)->delete();

        return $this->redirect('/guru', navigate:true);
    }

    public function render()
    {
        return view('livewire.list-guru');
    }
}
