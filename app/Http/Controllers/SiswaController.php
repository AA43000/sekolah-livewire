<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(Request $request) {
        $data['title'] = 'Siswa';
        $data['view'] = 'listSiswa';
        return view('siswa', $data);
    }

    public function createPage() {
        $data['title'] = 'Siswa';
        $data['view'] = 'createSiswa';
        return view('siswa', $data);
    }

    public function editPage($id) {
        $data['title'] = 'Siswa';
        $data['view'] = 'editSiswa';
        $data['data_siswa'] = Siswa::find($id);

        return view('siswa', $data);
    }
}
