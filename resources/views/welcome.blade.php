@extends('layouts.main')

@section('content')
  {{-- Jumbotron --}}
  <section id="jumbotron" class="h-screen bg-grey-600 flex items-center justify-center text-white pt-20">
    <div class="text-center">
      <h1 class="text-5xl font-bold">Welcome</h1>
      <p class="text-xl mt-4">This is the jumbotron section.</p>
    </div>
  </section>

  {{-- Section berikutnya --}}
  <section id="about" class="py-20 container mx-auto px-4">
    <h2 class="text-3xl font-semibold mb-6">About</h2>
    <p>Konten about...</p>
  </section>
@endsection
