@extends('layouts.master')

@section('content')
    <div class="header-spacer"></div>

    <!-- Keep your existing backdrop div -->
    <div id="backdrop" class="hidden fixed top-0 left-0 w-full h-full bg-black opacity-50 z-40"></div>

    <script src="../js/header.js"></script>

    <main class="wrapper pb-20">
        <!-- banner section -->
        <div class="relative">
            <img src="../../assets/images/background.png" alt="Product"
                class="w-full h-[298px] sm:h-48 md:h-56 lg:h-96 object-cover" />

            <div class="absolute inset-0 flex flex-col justify-center items-center z-40 text-white text-center px-4 sm:px-8">
                <h2 class="text-3xl sm:text-4xl font-bold">OUR SERVICES</h2>
                <p class="text-sm sm:text-base font-normal mt-2">
                    HOME &gt; SERVICES
                </p>
            </div>
        </div>

        <!-- Specialized section -->
        <div>
            <div class="mt-10 flex flex-col gap-4">
                <p class="font-[700] text-sm md:text-xl text-center">
                    Meet our services
                </p>
                <h2 class="font-[700] text-xl md:text-2xl text-center">
                    WHAT WE SPECIALIZED
                </h2>
            </div>
            <div id="cardContainer"></div>

            <script src="../js/card.js"></script>
        </div>

        <!-- features section -->
        <div class="mt-10 flex flex-col lg:flex-row gap-6 lg:gap-[20px] items-center">
            <div class="w-full lg:w-2/3">
                <!-- feature-1 -->
                <div class="p-5">
                    <div class="flex gap-4">
                        <span class="material-symbols-outlined w-[30px] h-[30px] text-[#1DB561]">
                            smart_toy
                        </span>
                        <h2 class="font-bold text-lg md:text-xl">
                            SMART AND RADIANT COLORS
                        </h2>
                    </div>
                    <div class="mt-2 text-sm md:text-base font-normal leading-5 text-justify">
                        The specific instructions for installing a wall sconce will differ
                        depending on the type of fixture you choose.
                    </div>
                </div>

                <!-- feature-2 -->
                <div class="p-5 mt-6 md:mt-8">
                    <div class="flex gap-4">
                        <i class="fa-regular fa-face-smile text-2xl text-[#1DB561]"></i>
                        <h2 class="font-bold text-lg md:text-xl">
                            FEEL THE SHINE OF A STAR
                        </h2>
                    </div>
                    <div class="mt-2 text-sm md:text-base font-normal leading-5 text-justify">
                        The specific instructions for installing a wall sconce will differ
                        depending on the type of fixture you choose.
                    </div>
                </div>

                <!-- feature-3 -->
                <div class="p-5 mt-6 md:mt-8">
                    <div class="flex gap-4">
                        <i class="fa-solid fa-vector-square text-2xl text-[#1DB561]"></i>
                        <h2 class="font-bold text-lg md:text-xl">
                            SMART AND RADIANT COLORS
                        </h2>
                    </div>
                    <div class="mt-2 text-sm md:text-base font-normal leading-5 text-justify">
                        The specific instructions for installing a wall sconce will differ
                        depending on the type of fixture you choose.
                    </div>
                </div>
            </div>

            <div class="w-full lg:flex-grow">
                <img class="w-full h-auto" src="../../assets/images/services.png" alt="services" />
            </div>
        </div>
    </main>
@endsection
