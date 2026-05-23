<x-layout>
    <x-slot:heading> Register</x-slot:heading>
    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <x-form-field>
                    <x-form-label for="name">Fulll Name</x-form-label>
                    <x-form-input id="name" required name="name"></x-form-input>
                    <x-form-error name="name"></x-form-error>
                </x-form-field>
                <x-form-field>
                    <x-form-label for="email">Email</x-form-label>
                    <x-form-input id="email" name="email" required placeholder="example@gmail.com"
                        type="email"></x-form-input>
                    <x-form-error name="email"></x-form-error>

                </x-form-field>
                <x-form-field>
                    <x-form-label for="password">Password</x-form-label>
                    <x-form-input id="password" required name="password" type="password"></x-form-input>
                    <x-form-error name="password"></x-form-error>

                </x-form-field>
                <x-form-field>
                    <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                    <x-form-input id="password_confirmation" required name="password_confirmation"
                        type="password"></x-form-input>
                    <x-form-error name="password_confirmation"></x-form-error>

                </x-form-field>
            </div>
        </div>




        </div>

        <div class="mt-6 flex items-center justify-end mr-6 mb-10 gap-x-6">
            <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <x-form-button>Register</x-form-button>

        </div>
    </form>

</x-layout>
