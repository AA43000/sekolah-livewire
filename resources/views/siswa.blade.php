@extends('index')

@section('content')

@if($view == 'listSiswa')
    <livewire:list-siswa>
@elseif($view == 'createSiswa')
    <livewire:create-siswa>
@elseif($view == 'editSiswa')
    <livewire:edit-siswa :data_siswa="$data_siswa">
@endif

@endsection