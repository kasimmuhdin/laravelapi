<x-layout>
    @if (session('success'))
        <div id="success-message" class="bg-green-200 text-green-800 p-4 rounded mb-4">
            {{ session('success') }}
        </div>

        <script>
            setTimeout(() => {
                document.getElementById('success-message').remove();
            }, 3000);
        </script>
    @endif
    <x-slot:heading>Jobs Listing Page </x-slot:heading>

    <div class="space-y-2">
        @foreach ($jobs as $job)
            <a href="/job/{{ $job['id'] }}" class="px-4 py-4 block  border border-gray-400 rounded">
                <div class="text-blue-400 mb-2">
                    {{ $job->employer->name }}
                </div>
                <strong>{{ $job['title'] }}</strong>
                {{ $job['title'] }} -
                {{ $job['salary'] }}
            </a>
            {{ $loop->count }}
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
