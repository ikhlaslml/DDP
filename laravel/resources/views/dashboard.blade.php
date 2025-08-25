@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
    <p>Selamat datang di admin dashboard Laravel dengan SB Admin!</p>
    <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button class="btn btn-danger">Logout</button>
</form>

@endsection
