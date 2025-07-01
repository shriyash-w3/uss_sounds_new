@extends('layouts.master')

@section('content')
    <div class="header-spacer"></div>

    <!-- Keep your existing backdrop div -->
    <div
      id="backdrop"
      class="hidden fixed top-0 left-0 w-full h-full bg-black opacity-50 z-40"
    ></div>

    <script src="../js/header.js"></script>

    <main class="wrapper pb-20">
      <!-- Banner -->
      <div class="relative">
        <img
          src="../../assets/images/background.png"
          alt="Product"
          class="w-full h-[298px] sm:h-48 md:h-56 lg:h-96 object-cover"
        />

        <div
          class="absolute inset-0 flex flex-col justify-center items-center z-40 text-white text-center px-4 sm:px-8"
        >
          <h2 class="text-3xl sm:text-4xl font-bold">PACKAGES</h2>
          <p class="text-sm sm:text-base font-normal mt-2">HOME &gt; RENTAL</p>
        </div>
      </div>
      <!-- event packages -->
      <div class="text-center mt-10 flex flex-col gap-[9px]">
        <p class="font-[500] text-[18px]">Features</p>
        <h2 class="font-[700] text-3xl">EVENT PACKAGES</h2>
      </div>
      <!-- Event Card -->

      <div
        id="event_card"
        class="mt-10 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6"
      ></div>
      <script src="../js/eventcard.js"></script>
    </main>
@endsection