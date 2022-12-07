<x-guest-layout>
    <x-kuijet.auth-card>
        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a
            password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-kuijet.auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-kuijet.auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="grid gap-6">
                <!-- Email Address -->
                <div class="space-y-2">
                    <x-kuijet.label for="email" :value="__('Email')" />
                    <x-kuijet.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-mail aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        <x-kuijet.input withicon id="email" class="block w-full" type="email" name="email"
                            :value="old('email')" required autofocus placeholder="{{ __('Email') }}" />
                    </x-kuijet.input-with-icon-wrapper>
                </div>

                <div>
                    <x-kuijet.button class="justify-center w-full">
                        {{ __('Email Password Reset Link') }}
                    </x-kuijet.button>
                </div>
            </div>
        </form>
    </x-kuijet.auth-card>
</x-guest-layout>