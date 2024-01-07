@extends('layouts.app')

@section('content')
    <h1>Daftar Prodi</h1>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kode</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prodis as $prodi)
                <tr>
                    <td>{{ $prodi->nama }}</td>
                    <td>{{ $prodi->kode }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $prodis->links() }}
@endsection