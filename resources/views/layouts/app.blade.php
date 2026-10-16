<!DOCTYPE html><html><head>
<script src="https://cdn.tailwindcss.com"></script>
<style type="text/tailwindcss">
  .inp{@apply w-full border rounded-lg p-2 outline-none
       focus:ring-2 focus:ring-indigo-400}
  .btn{@apply px-4 py-2 rounded-lg text-white shadow}
</style></head>
<body class="min-h-screen bg-gradient-to-br
             from-sky-100 to-indigo-200">
<div class="max-w-4xl mx-auto p-6">
  @if (session('success'))
  <div class="mb-4 p-3 rounded-lg bg-green-100
       text-green-700">{{ session('success') }}</div>
  @endif
  @if ($errors->any())
  <div class="mb-4 p-3 rounded-lg bg-red-100
       text-red-700 text-sm">
    @foreach ($errors->all() as $e)
      <p>{{ $e }}</p>
    @endforeach
  </div>
  @endif
  @yield('content')
</div></body></html>
