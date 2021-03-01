@extends('tryblade.layout')
@section('title','Page Title')
@section('sidebar')
@parent
<p> This is appended yo the master sidebar.</p>
@endsection

@section('content')
<p>This is my body content.</p>

@endsection
<x-alert>
    <strong>Whoooops!</strong>
</x-alert>
