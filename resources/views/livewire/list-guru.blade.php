<div>
    <div class="card mt-3">
        <div class="card-header d-flex justify-content-between">
            <h3>Data Guru</h3>
            <a href="{{url('guru/create')}}" wire:navigate class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="tableData" class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Guru</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $data)
                        <tr wire:key="{{$data['id']}}">
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data['name']}}</td>
                            <td>{{$data['mata_pelajaran']}}</td>
                            <td>{{$data['jenis_kelamin']}}</td>
                            <td>{{$data['nip']}}</td>
                            <td>{{$data['kelas']}}</td>
                            <td>
                                <a href="/guru/edit/{{$data['id']}}" wire:navigate class="btn btn-primary btn-sm">Edit</a>
                                <button wire:click="deleteGuru({{$data['id']}})" wire:confirm="Anda yakin ingin mnghapus??" class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
