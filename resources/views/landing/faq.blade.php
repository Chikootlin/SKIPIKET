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
<body class="bg-[#EDF0FF] text-[#2C3278]">
    <!-- Navbar -->
    <x-landing.navbar 
        logo="logo"
        color="[#2C3278]"
    />

  <section class="text-center mt-32 px-6">
    <h1 class="text-2xl md:text-4xl font-bold text-[#2C3278]">
        Frequently asked
    </h1>

    <h2 class="text-4xl md:text-6xl font-bold text-[#6A75D7]">
        questions
    </h2>
    <p class="text-[#2C3278]/50 mt-2">
      Looking for answers? You're in the right place.
    </p>
  </section>

  <!-- FAQ ACCORDION -->
  <section class="max-w-3xl mx-auto mt-10 px-6">
    <div class="bg-[#C7D5FF] rounded-xl shadow-md divide-y divide-[#2C3278]/20">
      <!-- Item -->
      <details class="group">
        <summary class="flex justify-between items-center cursor-pointer px-6 py-4 font-medium">
          What is this app used for?
          <span class="transition-transform group-open:rotate-45 text-2xl">+</span>
        </summary>
        <div class="px-6 pb-4 text-sm text-gray-700">
          This app is used to manage and view duty schedules for SKI Piket.
        </div>
      </details>
      <details class="group">
        <summary class="flex justify-between items-center cursor-pointer px-6 py-4 font-medium">
          Who can use this app?
          <span class="transition-transform group-open:rotate-45 text-2xl">+</span>
        </summary>
        <div class="px-6 pb-4 text-sm text-gray-700">
          Only SKI students and staff can access this app.
        </div>
      </details>
      <details class="group">
        <summary class="flex justify-between items-center cursor-pointer px-6 py-4 font-medium">
          Can I swap duty schedules with another student?
          <span class="transition-transform group-open:rotate-45 text-2xl">+</span>
        </summary>
        <div class="px-6 pb-4 text-sm text-gray-700">
          Yes, you can. If both students agree to switch their picket schedules, they can submit a request form. Once the request is sent, it will be reviewed and approved by the teacher. After approval, the schedule will automatically updated.
        </div>
      </details>
      <details class="group">
        <summary class="flex justify-between items-center cursor-pointer px-6 py-4 font-medium">
          Can I view the schedule in calendar format?
          <span class="transition-transform group-open:rotate-45 text-2xl">+</span>
        </summary>
        <div class="px-6 pb-4 text-sm text-gray-700">
          The app provides a monthly calendar view for easy access.
        </div>
      </details>
      <details class="group">
        <summary class="flex justify-between items-center cursor-pointer px-6 py-4 font-medium">
          What should I do if the schedule doesn’t update properly?
          <span class="transition-transform group-open:rotate-45 text-2xl">+</span>
        </summary>
        <div class="px-6 pb-4 text-sm text-gray-700">
          Contact the admin or refresh the app to load the latest schedule.
        </div>
      </details>
    </div>
  </section>

  <!-- 🌟 CONTACT -->
  <section class="text-center mt-12 px-6 pb-16">
    <h2 class="text-lg md:text-xl font-bold mb-2">Have any other questions</h2>
    <p class="text-gray-600 text-sm mb-2">
      Got questions? Feel free to drop us an email anytime! We'll get back to you ASAP!
    </p>
    <a href="#"
       class="text-[#3B82F6] font-semibold hover:underline">
       admin.skipiket@gmail.com
    </a>
  </section>

</body>
</html>