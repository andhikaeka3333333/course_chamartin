<!-- resources/views/quiz/index.blade.php -->
<x-app-layout>
    <div class="max-w-7xl mx-auto py-10">
        <h1 class="text-2xl font-bold mb-4">HTML, CSS, and JS Quiz</h1>
        <form method="POST" action="{{ route('quiz.submit') }}">
            @csrf
            @foreach ($questions as $question)
                <div class="mb-6">
                    <p class="text-lg font-medium">{{ $question->question }}</p>
                    @foreach (json_decode($question->options, true) as $key => $option)
                        <div>
                            <label>
                                <input type="radio" name="answers[{{ $question->id }}]" value="{{ $key }}" />
                                {{ $key }}. {{ $option }}
                            </label>
                        </div>
                    @endforeach
                </div>
            @endforeach
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">
                Submit
            </button>
        </form>
    </div>
</x-app-layout>
