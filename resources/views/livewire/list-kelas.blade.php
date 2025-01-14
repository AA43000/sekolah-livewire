<div>
    <div class="card mt-3">
        <div class="card-header d-flex justify-content-between">
            <h3>Data Kelas</h3>
            <a href="{{url('kelas/create')}}" wire:navigate class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="tableData" class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">nama Kelas</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="body-table">
                        @foreach ($datas as $data)
                            <tr wire:key="{{$data->id}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$data->name}}</td>
                                <td>
                                    <a href="/kelas/edit/{{$data->id}}" wire:navigate class="btn btn-primary btn-sm">Edit</a>
                                    <button wire:click="deleteKelas({{$data->id}})" wire:confirm="Anda yakin ingin mnghapus??" class="btn btn-danger btn-sm">Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
