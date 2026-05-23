<x-layout>
    <x-slot:heading> Login</x-slot:heading>
    <form method="POST" action="/login">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <x-form-field>
                    <x-form-label for="email">Email</x-form-label>
                    <x-form-input id="email" name="email" :value="old('email')" placeholder="example@gmail.com" required
                        type="email"></x-form-input>
                    <x-form-error name="email"></x-form-error>

                </x-form-field>
                <x-form-field>
                    <x-form-label for="password">Password</x-form-label>
                    <x-form-input id="password" required name="password" type="password"></x-form-input>
                    <x-form-error name="password"></x-form-error>

                </x-form-field>

            </div>
        </div>




        </div>

        <div class="mt-6 flex items-center justify-end mr-6 mb-10 gap-x-6">
            <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <x-form-button>login</x-form-button>

        </div>
    </form>

</x-layout>
