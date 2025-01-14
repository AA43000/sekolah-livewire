<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index() {
        $data['title'] = 'Guru';
        $data['view'] = 'listGuru';

        return view('guru', $data);
    }

    public function createPage() {
        $data['title'] = 'Guru';
        $data['view'] = 'createGuru';

        return view('guru', $data);
    }

    public function editPage($id) {
        $data['title'] = 'Guru';
        $data['view'] = 'editGuru';
        $data['data_guru'] = Guru::find($id);

        return view('guru', $data);
    }
}
