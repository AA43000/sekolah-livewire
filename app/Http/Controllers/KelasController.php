<?php

namespace App\Http\Controllers;

use App\Models\Kelas;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index() {
        $data['title'] = 'Kelas';
        $data['view'] = 'listKelas';

        return view('kelas', $data);
    }

    public function createPage() {
        $data['title'] = 'Create Kelas';
        $data['view'] = 'createKelas';

        return view('kelas', $data);
    }

    public function editPage($id) {
        $data['title'] = 'Edit Kelas';
        $data['view'] = 'editKelas';
        $data['data_kelas'] = Kelas::find($id);

        return view('kelas', $data);
    }
}
