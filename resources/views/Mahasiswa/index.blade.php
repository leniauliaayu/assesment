@extends('layouts.app')

@section('content')
    <h1>Daftar Mahasiswa</h1>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Prodi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswas as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->prodi->nama }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $mahasiswas->links() }}
@endsection