<div>
    <div class="card mt-3">
        <div class="card-header d-flex justify-content-between">
            <h3>Data Siswa</h3>
        </div>
        <div class="card-body">
            <form wire:submit="save">
                <div class="form-group">
                    <label for="name">Nama Siswa</label>
                    <input type="text" id="name" wire:model="name" class="form-control" placeholder="Nama Siswa" required>
                    @error('name')
                        <span class="text-center">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">jenis Kelamin</label>
                    <select wire:model="jenis_kelamin" id="jenis_kelamin" class="form-control">
                        <option value="">Pilih</option>
                        <option value="Laki laki">Laki Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                    @error('jenis_kelamin')
                        <span class="text-center">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nis">NIS</label>
                    <input type="text" id="nis" wire:model="nis" class="form-control" placeholder="NIS" required>
                    @error('nis')
                        <span class="text-center">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <select wire:model="id_kelas" id="id_kelas" class="form-control">
                        <option value="" selected>Pilih Kelas</option>
                        @foreach($kelas as $kel)
                            <option value="{{$kel->id}}">{{$kel->name}}</option>
                        @endforeach
                    </select>
                    @error('id_kelas')
                        <span class="text-center">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kelas">Foto</label>
                    <input type="file" wire:model="foto" id="foto" class="form-control">
                    @error('foto')
                        <span class="text-center">{{$message}}</span>
                    @enderror
                </div>
                <a href="/siswa" wire:navigate class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
