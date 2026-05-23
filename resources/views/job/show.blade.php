<x-layout>
    <x-slot:heading>{{ $job['title'] }} Detail </x-slot:heading>
    <h1>

        Titel: {{ $job['title'] }}
        Salery : {{ $job['salary'] }}
    </h1>
    @can('edit', $job)
        <p class="mt-6">
            <x-button href="/job/{{ $job->id }}/edit">Editing Job</x-button>
        </p>
    @endcan

</x-layout>
