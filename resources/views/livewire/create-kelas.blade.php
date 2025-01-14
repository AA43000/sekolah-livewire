<div>
    <div class="card mt-3">
        <div class="card-header d-flex justify-content-between">
            <h3>Data Kelas</h3>
        </div>
        <div class="card-body">
            <form wire:submit="save">
                @csrf
                <div class="form-group">
                    <label for="name">Nama Kelas</label>
                    <input type="text" id="name" wire:model="name" class="form-control" placeholder="Nama Kelas" required>
                    @error('name')
                        <span class="text-center">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{url('kelas')}}" wire:navigate class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
