@extends('layouts.default')

@section('title')
Cursos | Etec da Zona Leste
@endsection

@section('content')
<main class="mx-auto max-w-[1024px] mb-24">
    <h1 class="text-sky-800 text-5xl mb-8 pb-2 border-b border-neutral-300">
        Cursos
    </h1>

    <section>
        <div class="grid grid-cols-3 gap-x-6 gap-y-12">
            @foreach ($courses as $course)
            <div class="flex-1 aspect-square border border-neutral-200 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow cursor-pointer duration-300">
                <figure>
                    <div src="{{ $course['imagem'] }}" class="w-full aspect-video bg-neutral-300"></div>
                    <figcaption class="px-8 py-6">
                        <h2 class="text-2xl text-sky-800 mb-2">
                            {{ $course['nome'] }}
                        </h2>
                        <p class="opacity-80">
                            {{ $course['descricao'] }}
                        </p>
                    </figcaption>
                </figure>
            </div>
            @endforeach
        </div>
    </section>
</main>
@endsection