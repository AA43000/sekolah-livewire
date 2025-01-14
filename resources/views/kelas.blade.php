@extends('index')

@section('content')

@if($view == 'listKelas')
    <livewire:list-kelas>
@elseif($view == 'createKelas')
    <livewire:create-kelas>
@elseif($view == 'editKelas')
    <livewire:edit-kelas :data_kelas="$data_kelas">
@endif

@endsection