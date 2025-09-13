<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | SKIPIKET</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logos/logoSKI.svg') }}">
    @vite('resources/css/app.css')
</head>
<body class="bg-[#EDF0FF] min-h-screen flex">

    <div class="flex flex-col justify-center px-8 md:px-20 lg:px-32 w-full lg:w-1/2">
        <div class="flex items-center gap-3 mb-12">
            <img src="{{ asset('images/logos/logo.svg') }}" alt="SKI PIKET" class="h-10">
        </div>

        <h1 class="text-[#2C3278] text-2xl md:text-4xl font-extrabold leading-snug">
            New here? Let's make it official—
            your adventure starts now!
        </h1>

        @if ($errors->any())
            <div class="mt-2 w-full max-w-md bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded-md text-sm">
                <p>{{ $errors->first() }}</p>
            </div>
        @endif
        {{-- Form --}}
        <form method="POST" action="{{ route('register.store') }}" class="space-y-4 w-full max-w-md">
            @csrf

            <x-auth.input-auth 
                icon="images/icons/mdi_account-outline.svg"
                type="text"
                name="name"
                placeholder="Choose a unique username for your account"
                alt="Username Icon"
            />

            <x-auth.input-auth 
                icon="images/icons/mdi_account-outline.svg"
                type="text"
                name="fullname"
                placeholder="Enter your full name to get started"
                alt="Fullname Icon"
            />

            <x-auth.input-auth 
                icon="images/icons/clarity_email-line.svg"
                type="email"
                name="email"
                placeholder="Enter your e-mail"
                alt="Email Icon"
            />

            <x-auth.input-auth 
                icon="images/icons/mdi_password-outline.svg"
                type="password"
                name="password"
                placeholder="Type your password"
                alt="Password Icon"
            />

            <x-auth.input-auth 
                icon="images/icons/mdi_password-outline.svg"
                type="password"
                name="password_confirmation"
                placeholder="Confirm your password"
                alt="Password Icon"
            />

            <x-auth.button-auth type="submit">
                Continue
            </x-auth.button-auth>
        </form>

        <p class="mt-6 text-sm text-[#2C3278]">
            Already have an account?
            <a href="/login" class="font-bold text-[#5370FF] hover:underline">
                Login
            </a>
        </p>
    </div>

    <div class="hidden lg:flex flex-1 items-center justify-end">
        <img src="{{ asset('images/illustrations/undraw_step-to-the-sun_wp49 1.svg') }}"
             alt="Login Illustration"
             class="max-h-[80%]">
    </div>

</body>
</html>
