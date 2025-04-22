<x-guest-layout>
    <x-auth-card>
        <div class="">
            <h1 class="text__primary">Register.</h1>
            <hr class="border__primary my-4">
            <p>Create your account by filling the form below.</p>

            <div class="my-10">
                <x-validate-error />
            </div>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="my-10">
                <!-- Name -->
                <x-input type="text" name="name" id="name" placeholder="Full Name" required autofocus />

                <!-- Email Address -->
                <x-input type="email" name="email" id="email" placeholder="Email Address" required />

                <!-- Password -->
                <x-input type="password" name="password" id="password" placeholder="Password" required />

                <!-- Confirm Password -->
                <x-input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required />

                <x-button type="submit" label="Register" style="gradient" color="primary" icon="user-plus" class="mt-10" fontawesome iconRight block />
            </div>

            <hr class="border__primary my-4">

            <div class="text-center">
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Already have an account?
                    <a class="underline hover:text-gray-900 dark:hover:text-gray-500" href="{{ route('login') }}">
                        {{ __('Login here') }}
                    </a>
                </p>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
