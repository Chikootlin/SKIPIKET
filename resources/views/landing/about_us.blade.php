<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logos/logoSKI.svg') }}">
    <title>FAQ | SKIPIKET</title>
</head>
<body class="m-0 p-0 bg-[#EDF0FF] min-h-screen">
    <!-- Navbar -->
    <x-landing.navbar 
        logo="logo"
        color="[#2C3278]"
    />

    <!-- Main Content -->
    <main class="mt-20 p-10 max-w-7xl mx-auto">
        <div class="bg-white bg-opacity-20 rounded-xl p-10 flex flex-col md:flex-row items-center space-y-6 md:space-y-0 md:space-x-10 shadow-lg">
            <div class="flex-1 max-w-lg">
                <h2 class="text-6xl font-bold text-[#2C3278] mb-6">Why we built this app?</h2>
                <p class="text-[#8A8FBC] leading-relaxed text-justify">
                    In many schools, class picket schedules are still managed manually. Teachers or class leaders have to remind students one by one, which takes a lot of time and can be confusing. Sometimes students forget their turn, and the schedule becomes messy.
                </p>
            </div>
            <div class="flex-1">
                <img src="{{ asset('images/illustrations/undraw_questions_g2px 1.svg') }}" alt="Why built illustration" class="max-w-full h-80" />
            </div>
        </div>

        <section class="max-w-7xl mx-auto px-6 py-12">

            <h2 class="text-6xl font-bold text-[#2c3e8e] text-center mb-8">Our Purposes</h2>

            <!-- Grid 4 kotak -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-12">
                <x-landing.about-us-card
                    icon="bi_gear-fill"
                    title="Efficiency"
                    description="To create a system that is fast, organized, and easy to manage"
                />
                <x-landing.about-us-card
                    icon="solar_calendar-bold-duotone (1)"
                    title="Scheduling"
                    description="To arrange weekly class picket tasks in a clear and fair way"
                />
                <x-landing.about-us-card
                    icon="flexibility"
                    title="Flexibility"
                    description="To allow students to swap picket schedules when needed"
                />
                <x-landing.about-us-card
                    icon="report"
                    title="Reporting"
                    description="To provide student performance reports."
                />
            </div>
        </section>
    </main>

    <section class="relative w-full p-10" id="vision-mission">

        <!-- Background Overlay Color -->
        <div class="absolute inset-0 bg-blue-400 opacity-20 -z-10"></div>

        <!-- Background Image -->
        <div
            class="absolute inset-0 bg-cover bg-center opacity-80 -z-20"
            style="background-image: url('{{ asset('images/backgrounds/360_F_601629275_sz3QMahg40CpXTo21qbmKbG0bATJH1pi 1.jpg') }}');"
        ></div>

        <div class="relative max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Vision Card -->
            <div class="bg-white bg-opacity-90 rounded-xl p-8 shadow-lg">
                <h3 class="text-4xl font-semibold text-[#2c3e8e] text-center mb-4">Vision</h3>
                <p class="text-[#8A8FBC] leading-relaxed text-justify">
                    We want to help schools become cleaner, more organized, and more responsible. By using a simple class picket system, we hope students learn good habits, work together, and take care of their classroom every day. Our goal is to make cleanliness and teamwork a natural part of school life.                
                </p>
            </div>

            <!-- Mission Card -->
            <div class="bg-white bg-opacity-90 rounded-xl p-8 shadow-lg">
                <h3 class="text-4xl font-semibold text-[#2c3e8e] mb-4 text-center">Mission</h3>
                <p class="text-[#8A8FBC] leading-relaxed text-justify">
                    Our mission is to help schools manage class picket schedules in a simple and organized way. We want students to learn responsibility by doing their part in keeping the classroom clean. The app makes it easy to set weekly schedules, switch schedule when needed, and see who is doing their job well. We also want to save teachers time by making the process clear and automatic. Through this, we hope to build good habits and teamwork among students.                
                </p>
            </div>
        </div>
    </section>

    <footer class="bg-[#C7D5FF] mt-40">
        <div class="max-w-7xl mx-auto px-6 py-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="flex justify-center md:justify-start">
                <img src="{{ asset('images/illustrations/footer-illustration.svg') }}"
                    alt="Footer Illustration" class="max-h-56">
            </div>

            <div>
                <h3 class="text-xl font-bold text-[#2C3278] mb-6">SKI Piket</h3>

                <div class="grid grid-cols-3 gap-8">
                <!-- About Us -->
                <div>
                    <h4 class="font-semibold mb-3 text-[#2C3278]">About Us</h4>
                    <ul class="space-y-2 text-sm text-[#2C3278]">
                    <li><a href="#" class="hover:underline">Vision</a></li>
                    <li><a href="#" class="hover:underline">Mission</a></li>
                    </ul>
                </div>

                <!-- Support -->
                <div>
                    <h4 class="font-semibold mb-3 text-[#2C3278]">Support</h4>
                    <ul class="space-y-2 text-sm text-[#2C3278]">
                    <li><a href="#" class="hover:underline">FAQ's</a></li>
                    <li><a href="#" class="hover:underline">Refund Policy</a></li>
                    </ul>
                </div>

                <!-- Social -->
                <div>
                    <h4 class="font-semibold mb-3 text-[#2C3278]">Social</h4>
                    <ul class="space-y-2 text-sm text-[#2C3278]">
                    <li><a href="#" class="hover:underline">Instagram</a></li>
                    <li><a href="#" class="hover:underline">LinkedIn</a></li>
                    <li><a href="#" class="hover:underline">Facebook</a></li>
                    </ul>
                </div>
                </div>
            </div>

            </div>
        </div>

        <!-- Bottom bar -->
        <div class="border-t border-[#2C3278]/20">
            <div class="max-w-7xl mx-auto px-6 py-4 flex flex-col md:flex-row items-center justify-between text-sm text-[#2C3278]">
            <p>© 2025 SKI Piket. All rights reserved.</p>
            <a href="#" class="hover:underline mt-2 md:mt-0">Terms of Service</a>
            </div>
        </div>
    </footer>

</body>
</html>