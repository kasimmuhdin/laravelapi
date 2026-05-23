<x-layout>
    <x-slot:heading> Create Product</x-slot:heading>
    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">

            <h2 class="text-base/7 font-semibold text-gray-900">Creat New Product</h2>
            <p class="mt-1 text-sm/6 text-gray-600">We Just need a Handfull of detail from you.</p>
            <div class="border-b border-gray-900/10 pb-12">

                <x-form-field>
                    <x-form-label for="title">Title</x-form-label>
                    <x-form-input id="title" name="title" placeholder="Shifter Leader"></x-form-input>
                    <x-form-error name="title"></x-form-error>
                </x-form-field>
                <x-form-field>
                    <x-form-label for="salary">Salary</x-form-label>
                    <x-form-input id="salary" name="salary" placeholder="$50000"></x-form-input>
                    <x-form-error name="salary"></x-form-error>

                </x-form-field>
            </div>
        </div>




        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <x-form-button>Save</x-form-button>

        </div>
    </form>

</x-layout>
