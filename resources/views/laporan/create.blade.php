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
  <h1 class="text-xl font-bold text-indigo-900 mb-4">
    Form Lapor Banjir</h1>
  <form action="/laporan" method="POST" class="space-y-3">
    @csrf
    <input class="inp" name="nama_pelapor"
      placeholder="Nama pelapor"
      value="{{ old('nama_pelapor') }}">
    <input class="inp" name="lokasi" placeholder="Lokasi"
      value="{{ old('lokasi') }}">
    <input class="inp" type="number" name="tinggi_air"
      placeholder="Tinggi air (cm)"
      value="{{ old('tinggi_air') }}">
    <textarea class="inp" name="keterangan" rows="3"
      placeholder="Keterangan"
      >{{ old('keterangan') }}</textarea>
    <div class="flex gap-2">
      <button class="btn bg-indigo-600">Kirim</button>
      <a href="/laporan" class="btn bg-gray-400">Batal</a>
    </div>
  </form>
</div>
@endsection

</body>
</html>