<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SKIPIKET</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logos/logoSKI.svg') }}">
    @vite('resources/css/app.css')
</head>
<body class="bg-[#EDF0FF] min-h-screen flex">

    <div class="flex flex-col justify-center px-8 md:px-20 lg:px-32 w-full lg:w-1/2">
        <div class="flex items-center gap-3 mb-12">
            <img src="{{ asset('images/logos/logo.svg') }}" alt="SKI PIKET" class="h-10">
        </div>

        <h1 class="text-[#2C3278] text-3xl md:text-4xl font-extrabold leading-snug">
            Trouble signing in?
        </h1>

        <form method="POST" action="{{ route('login.attempt') }}" class="space-y-4 w-full max-w-md">
            @csrf

            <label for="password">Your new Password</label>
            <x-auth.input-auth 
                icon="images/icons/mdi_password-outline.svg"
                type="password"
                name="password"
                placeholder="Enter your new password"
                alt="Password Icon"
            />

            <label for="confirm">Confirm Password</label>
            <x-auth.input-auth 
                icon="images/icons/mdi_password-outline.svg"
                type="password"
                name="confirm"
                placeholder="What is your e-mail?"
                alt="Email Icon"
            />

            <x-auth.button-auth type="submit">
                Continue
            </x-auth.button-auth>
        </form>

        <p class="mt-6 text-sm text-[#2C3278]">
            Don't have an account?
            <a href="/register" class="font-bold text-[#5370FF] hover:underline">
                Create Account
            </a>
        </p>
    </div>

    <div class="hidden lg:flex flex-1 items-center justify-center">
        <img src="{{ asset('images/illustrations/undraw_forgot-password_nttj 1.svg') }}"
             alt="Login Illustration"
             class="max-h-[80%]">
    </div>

</body>
</html>
