<div>
    <div class="card mt-3">
        <div class="card-header d-flex justify-content-between">
            <h3>Data Guru</h3>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="save" id="formData">
                <div class="form-group">
                    <label for="name">Nama Guru</label>
                    <input type="text" id="name" wire:model="name" class="form-control" placeholder="Nama Guru" required>
                    @error('name')
                        <span class="text-center">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="mata_pelajaran">Mata Plajaran</label>
                    <input type="text" id="mata_pelajaran" wire:model="mata_pelajaran" class="form-control" placeholder="Mata Pelajaran" required>
                    @error('mata_pelajaran')
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
                    <label for="nip">NIP</label>
                    <input type="text" id="nip" wire:model="nip" class="form-control" placeholder="NIP" required>
                    @error('nip')
                        <span class="text-center">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <select wire:model="id_kelas" id="id_kelas" class="form-control" multiple="multiple">
                        @foreach($kelas as $kel)
                            <option value="{{$kel->id}}">{{$kel->name}}</option>
                        @endforeach
                    </select>
                    @error('id_kelas')
                        <span class="text-center">{{$message}}</span>
                    @enderror
                </div>
                <a href="/guru" wire:navigate class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

<script>
    // document.addEventListener('DOMContentLoaded', function () {
    //     $('#id_kelas').select2();

    //     const form = document.getElementById('formData');

    //     form.addEventListener('submit', function (event) {
    //         // Jalankan fungsi JavaScript sebelum submit
    //         @this.set('id_kelas', $('#id_kelas').val());

    //         // Jika ingin meneruskan ke Livewire, biarkan form tetap terkirim
    //         // Livewire akan menangani submit secara normal setelah JS ini
    //     });
    //     // $('#id_kelas').on('change', function (e) {
    //     //     @this.set('id_kelas', $(this).val());
    //     // });
    // });

    // document.addEventListener('livewire:load', function () {
    //     $('#id_kelas').select2();
    //     alert('sdf');
    // });

    // Livewire.hook('message.processed', (message, component) => {
    //     $('#id_kelas').select2();
    // });

</script>