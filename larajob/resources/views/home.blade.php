@extends('layouts.app')
@section('content')
<h1>Salut {{ auth()->user()->name }}</h1>
@foreach(auth()->user()->likes as $like)
Vous avez aimé(e) {{ $like->title }} .
@endforeach
@endsection
