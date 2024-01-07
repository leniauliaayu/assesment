@extends('layouts.app')

@section('content')
    <h1>Daftar Dosen</h1>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIP</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dosens as $dosen)
                <tr>
                    <td>{{ $dosen->nama }}</td>
                    <td>{{ $dosen->nip }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $dosens->links() }}
@endsection