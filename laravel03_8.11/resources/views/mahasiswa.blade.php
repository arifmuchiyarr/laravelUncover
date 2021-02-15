{{-- @include('layout.header', ['title'=> 'Data Mahasiswa']) // ini untuk penggunaan terpisah--}}
@extends('layout.master')
@section('title', 'Data Mahasiswa')
@section('menuMahasiswa', 'active')

@section('content')

<div class="container text-center mt-3 p-4 bg-white">
        <h1>Data Mahasiswa</h1>
        <div class="row">
            <div class="col-sm-8 col-md-6 m-auto">
                <ol class="list-group">
                @forelse ($mahasiswa as $val)
                    <li class="list-group-item">{{$val}}</li>
                    @empty
                        <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
                    @endforelse
                </ol>
            </div>
        </div>
    </div>
{{-- @include('layout.footer') // ini untuk penggunaan terpisah--}}

@endsection
