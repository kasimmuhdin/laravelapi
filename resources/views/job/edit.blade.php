<x-layout>
    <x-slot:heading> {{ $job->title }} Editing </x-slot:heading>
    <form method="POST" action="/job/{{ $job->id }}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-gray-900">title</label>
                        <div class="mt-2">


                            <input id="title" type="text" name="title" placeholder="Shifter Leader"
                                value="{{ $job->title }}"
                                class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                required />
                        </div>
                        @error('title')
                            <p class="text-xs text-red-400 font-semibold"> {{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                    <div class="mt-2">
                        <input id="salary" type="text" name="salary" placeholder="$50,000"
                            class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                            value="{{ $job->salary }}" required />

                    </div>
                    @error('title')
                        <p class="text-xs text-red-400 font-semibold"> {{ $message }}</p>
                    @enderror
                </div>



                {{-- @if ($errors->any())

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                @endif --}}


            </div>
        </div>




        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center">
                <button form="delete-form" class="text-red-600">Delete</button>
            </div>
            <div class="flex items-center gap-x-6">
                <a href="/job/{{ $job->id }}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
            </div>

        </div>
    </form>
    <form method="POST" action="/job/{{ $job->id }}" id="delete-form" hidden>
        @csrf
        @method('DELETE')
    </form>

</x-layout>
