<x-app-layout>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">
    {{-- <header class="bg-blue-600 text-white py-5">
        <h1 class="text-3xl font-bold text-center">{{ $title }}</h1>
    </header> --}}

    <main class="container mx-auto p-5 space-y-10">
        @foreach ($materi as $item)
        <section class="bg-white rounded-lg shadow-lg p-5">
            <div class="flex flex-col md:flex-row items-center">
                <img src="{{ $item->image }}" alt="{{ $item->title }}" class="w-32 h-32 mb-4 md:mb-0 md:mr-5" />
                <div>
                    <h2 class="text-2xl font-semibold mb-2 text-blue-600">{{ $item->title }}</h2>
                    <p>{{ $item->content }}</p>
                </div>
            </div>
        </section>
        @endforeach
    </main>

    <footer class="bg-gray-800 text-white py-5">
        <p class="text-center">&copy; 2024 Materi Web Development</p>
    </footer>
</body>

</html>
</x-app-layout>


