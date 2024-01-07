@extends('layouts.app')

@section('content')
    <h1>Daftar Mata Kuliah</h1>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kode</th>
                <th>Prodi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mataKuliahs as $mataKuliah)
                <tr>
                    <td>{{ $mataKuliah->nama }}</td>
                    <td>{{ $mataKuliah->kode }}</td>
                    <td>{{ $mataKuliah->prodi->nama }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $mataKuliahs->links() }}
@endsection