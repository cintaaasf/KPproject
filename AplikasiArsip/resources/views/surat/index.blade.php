<!DOCTYPE html>
<html lang="en">
<head>
    @extends('layouts.app')
@section('content')
    <h1>Data Surat</h1>
    <a href="{{ route('surat.create') }}">Tambah Surat</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor Surat</th>
                <th>Jenis</th>
                <th>Pengirim</th>
                <th>Penerima</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($surats as $surat)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $surat->nomor_surat }}</td>
                <td>{{ $surat->jenis }}</td>
                <td>{{ $surat->pengirim }}</td>
                <td>{{ $surat->penerima }}</td>
                <td>
                    <a href="{{ route('surat.show', $surat->id) }}">Detail</a>
                    <a href="{{ route('surat.edit', $surat->id) }}">Edit</a>
                    <form action="{{ route('surat.destroy', $surat->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection   
</body>
</html>