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
<div class="flex justify-between items-center mb-4">
  <h1 class="text-2xl font-bold text-indigo-900">
    Laporan Banjir</h1>
      <a href="/laporan/create"
     class="btn bg-indigo-600 hover:bg-indigo-700">
    + Lapor Banjir</a>
</div>
<div class="bg-white rounded-xl shadow overflow-hidden">
<table class="w-full text-sm text-left">
<thead class="bg-indigo-600 text-white">
<tr><th class="p-3">No</th><th>Pelapor</th><th>Lokasi</th>
    <th>Tinggi</th><th>Status</th><th>Aksi</th></tr>
</thead>
<tbody class="divide-y">
@foreach ($data as $d)
<tr class="hover:bg-indigo-50">
  <td class="p-3">{{ $loop->iteration }}</td>
  <td>{{ $d->nama_pelapor }}</td>
  <td>{{ $d->lokasi }}</td>
  <td>{{ $d->tinggi_air }} cm</td>
  <td>
    @php $w = ['selesai' => 'bg-green-100 text-green-700',
      'diproses' => 'bg-yellow-100 text-yellow-700']; @endphp
    <span class="px-2 py-1 rounded-full text-xs
      {{ $w[$d->status] ?? 'bg-red-100 text-red-700' }}">
      {{ $d->status }}</span>
  </td>
  <td class="p-3"><div class="flex gap-3">
    <a href="/laporan/{{ $d->id }}/edit"
       class="text-blue-600">Edit</a>
    <form action="/laporan/{{ $d->id }}" method="POST"
          onsubmit="return confirm('Hapus?')">
      @csrf @method('DELETE')
      <button class="text-red-600">Hapus</button>
    </form>
  </div></td>
</tr>
@endforeach
</tbody></table></div>
@endsection

</body>
</html>