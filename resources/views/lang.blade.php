@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>Meu conteúdo.</p>
    <p>@lang('Amo programar.')</p>
@endsection
