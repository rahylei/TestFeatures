<x-guest-layout>
    <x-kuijet.auth-card>
        <!-- Validation Errors -->
        <x-kuijet.auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-kuijet.label for="email" :value="__('Email')" />

                <x-kuijet.input id="email" class="block w-full mt-1" type="email" name="email"
                    :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-kuijet.label for="password" :value="__('Password')" />

                <x-kuijet.input id="password" class="block w-full mt-1" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-kuijet.label for="password_confirmation" :value="__('Confirm Password')" />

                <x-kuijet.input id="password_confirmation" class="block w-full mt-1" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-kuijet.button>
                    {{ __('Reset Password') }}
                </x-kuijet.button>
            </div>
        </form>
    </x-kuijet.auth-card>
</x-guest-layout>