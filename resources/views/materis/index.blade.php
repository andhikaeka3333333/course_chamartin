<x-app-layout>
    <div class="bg-blue-100">
        <div class="bg-[#2d3e50] text-white py-8">
            <div class="max-w-6xl mx-auto px-6 flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold">Selamat Belajar, {{ auth()->user()->name }}</h1>
                    <p class="text-base mt-2">Baca doa dulu yuk sebelum belajar</p>
                </div>
            </div>
        </div>
    {{-- Jika ada daftar materi --}}
    @if(isset($materi) && is_iterable($materi))
    <main class="container mx-auto p-5 space-y-5">
        @foreach ($materi as $item)
        <section class="bg-white rounded-lg shadow-lg p-5">
            <div class="flex flex-col lg:flex-row items-start lg:items-center">
                {{-- Gambar materi --}}
                <img src="{{ $item->image }}" alt="{{ $item->title }}"
                     class="w-32 h-32 mb-4 lg:mb-0 lg:mr-5 object-cover" />

                {{-- Detail materi --}}
                <div class="flex-1">
                    <a href="{{ route('materi.show', $item->title) }}"
                       class="text-2xl font-semibold mb-2 text-blue-600 hover:underline block">
                        {{ $item->title }}
                    </a>
                    <p class="text-gray-700 text-sm lg:text-base mb-4">{{ $item->content }}</p>

                    {{-- Tombol Mulai Quiz --}}
                    <a href="{{ route('quiz', ['title' => $item->title]) }}"
                       class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition text-sm lg:text-base inline-block">
                        Mulai Quiz
                    </a>
                </div>
            </div>
        </section>
        @endforeach
    </main>
    @endif

    {{-- Jika halaman detail materi --}}
    @if(isset($materi) && !is_iterable($materi))
    <main class="container mx-auto p-5 space-y-10">
        <section class="bg-white rounded-lg shadow-lg p-5">
            <h1 class="text-3xl font-bold mb-4 text-blue-600 text-center lg:text-left">{{ $materi->title }}</h1>
            <img src="{{ $materi->image }}" alt="{{ $materi->title }}"
                 class="w-64 h-64 mb-4 mx-auto object-cover" />
            <p class="text-lg text-gray-700 text-justify mb-4">{{ $materi->content }}</p>

            {{-- Tombol Mulai Quiz --}}
            <a href="{{ route('quiz', ['title' => $materi->title]) }}"
               class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition text-sm lg:text-base inline-block">
                Mulai Quiz
            </a>
        </section>
    </main>
    @endif
</div>
</x-app-layout>
