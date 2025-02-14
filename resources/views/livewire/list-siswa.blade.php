<div>
    <div class="card mt-3">
        <div class="card-header d-flex justify-content-between">
            <h3>Data Siswa</h3>
            <a href="{{url('siswa/create')}}" wire:navigate class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="tableData" class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">nama Siswa</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">NIS</th>
                            <th scope="col">kelas</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $data)
                        <tr wire:key="{{$data->id}}">
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->jenis_kelamin}}</td>
                            <td>{{$data->nis}}</td>
                            <td>{{$data->kelas->name}}</td>
                            <td><img src="{{Storage::url($data->foto)}}" alt=""></td>
                            <td>
                                <a href="/siswa/edit/{{$data->id}}" wire:navigate class="btn btn-primary btn-sm">Edit</a>
                                <button wire:click="deleteSiswa({{$data->id}})" wire:confirm="Anda yakin ingin mnghapus??" class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
