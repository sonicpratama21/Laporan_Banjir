<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')
@section('content')
<div class="max-w-lg mx-auto bg-white rounded-2xl
            shadow-lg p-6">
  <h1 class="text-xl font-bold text-amber-700 mb-4">
    Edit Laporan</h1>
  <form action="/laporan/{{ $laporan->id }}" method="POST"
        class="space-y-3">
    @csrf @method('PUT')
    <input class="inp" name="nama_pelapor"
      value="{{ old('nama_pelapor',
                $laporan->nama_pelapor) }}">
    <input class="inp" name="lokasi"
      value="{{ old('lokasi', $laporan->lokasi) }}">
    <input class="inp" type="number" name="tinggi_air"
      value="{{ old('tinggi_air',
                $laporan->tinggi_air) }}">
    <textarea class="inp" name="keterangan" rows="3"
      >{{ old('keterangan',
          $laporan->keterangan) }}</textarea>
    <select class="inp" name="status">
      @foreach (['menunggu','diproses','selesai'] as $s)
      <option value="{{ $s }}"
        {{ old('status', $laporan->status) == $s
           ? 'selected' : '' }}>{{ ucfirst($s) }}</option>
      @endforeach
    </select>
    <div class="flex gap-2">
      <button class="btn bg-amber-600">Update</button>
      <a href="/laporan" class="btn bg-gray-400">Batal</a>
    </div>
  </form>
</div>
@endsection

</body>
</html>