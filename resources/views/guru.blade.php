@extends('index')

@section('content')

@livewireScripts

@if($view == 'listGuru')
    <livewire:list-guru>
@elseif($view == 'createGuru')
    <livewire:create-guru>
@elseif($view == 'editGuru')
    <livewire:edit-guru :data_guru="$data_guru">
@endif


@endsection