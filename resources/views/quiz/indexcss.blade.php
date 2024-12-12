<x-app-layout>
    <div class="max-w-4xl mx-auto py-10 px-6 bg-white shadow-lg rounded-lg">
        @if (session('message'))
            <script>
                alert("{{ session('message') }}");
            </script>
        @endif
        <h1 class="text-3xl font-extrabold text-center text-blue-500 mb-8">CSS Quiz</h1>

        <form method="POST" action="{{ route('quiz.css.submit') }}">
            @csrf
            @foreach ($questions as $question)
                <div class="mb-8">
                    <p class="text-lg font-semibold text-gray-800">{{ $loop->iteration }}. {{ $question->question }}</p>
                    <div class="mt-4 space-y-2">
                        @foreach (json_decode($question->options, true) as $key => $option)
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="answers[{{ $question->id }}]" value="{{ $key }}" class="form-radio h-5 w-5 text-blue-500 border-gray-300 focus:ring-blue-400" />
                                <span class="text-gray-700">{{ $key }}. {{ $option }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            @endforeach

            <div class="text-center">
                <button type="submit" class="bg-blue-600 text-white font-semibold py-2 px-6 rounded shadow-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-400 focus:ring-opacity-50 transition duration-300">
                    Submit
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
