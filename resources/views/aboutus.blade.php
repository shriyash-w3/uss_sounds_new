@extends('layouts.master')

@section('content')
    <div class="header-spacer"></div>

    <!-- Keep your existing backdrop div -->
    <div id="backdrop" class="hidden fixed top-0 left-0 w-full h-full bg-black opacity-50 z-40"></div>

    <script src="../js/header.js"></script>

    <div class="wrapper">
        <div class="relative">
            <img src="../../assets/images/background.png" alt="Product"
                class="w-full h-[298px] sm:h-48 md:h-56 lg:h-96 object-cover" />

            <div class="absolute inset-0 flex flex-col justify-center items-center z-40 text-white text-center px-4 sm:px-8">
                <h2 class="text-3xl sm:text-4xl font-bold">ABOUT US</h2>
                <p class="text-sm sm:text-base font-normal mt-2">
                    HOME &gt; ABOUT-US
                </p>
            </div>
        </div>
    </div>

    <main>
        <!-- Top section with placeholder image -->
        <div class="wrapper">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center justify-between gap-4 py-8">
                    <div class="w-full md:w-1/2 text-gray-600">
                        <p class="text-[14px] sm:text-[16px] md:text-[18px] font-[500] text-justify">
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                            The point of using Lorem Ipsum is that it has a more-or-less
                            normal distribution of letters, as opposed to using 'Content
                            here, content here', making it look like readable English. Many
                            desktop publishing packages and web page editors now use Lorem
                            Ipsum as their default model text, and a search for 'lorem
                            ipsum' will uncover many web sites still in their infancy.
                            Various versions have evolved over the years, sometimes by
                            accident, sometimes on purpose (injected humour and the like).
                        </p>
                    </div>
                    <div class="w-full md:w-[40%] flex items-center justify-center">
                        <img src="../../assets/images/i.jpeg" alt="Description of image"
                            class="w-full h-[352px] object-cover rounded-lg" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Middle section -->
        <div class="bg-[#8DA4EF24] p-4 md:p-12 lg:p-24 w-full rounded-lg mb-12">
            <div class="">
                <div
                    class="p-4 md:p-8 lg:p-12 border-2 flex flex-col md:flex-row justify-between gap-4 md:gap-8 items-center">
                    <div class="flex-col w-full md:w-2/3">
                        <h2 class="text-[16px] md:text-xl lg:text-2xl font-semibold mb-4 text-center md:text-left">
                            JOIN US : LET'S ADD SOME VIBRANCY.
                        </h2>
                        <p class="text-[#4B5563] mb-4 max-w-[700px] text-justify text-[18px] font-[500]">
                            In egestas erat imperdiet sed euismod nisi. Tincidunt augue
                            interdum velit euismod in pellentesque massa placerat. Amet nisi
                            purus in mollis nunc sed ultrici ut
                        </p>
                    </div>
                    <button
                        class="bg-white text-black py-3 md:py-4 px-6 md:px-8 underline leading-4 rounded w-fit transition-transform duration-300 hover:scale-105 cursor-pointer text-[16px] font-[600]">
                        RENT NOW
                    </button>
                </div>
            </div>
        </div>

        <!-- Team section -->
        <div class="wrapper">
            <div class="flex flex-col md:flex-row justify-center gap-4 md:gap-6 lg:gap-8 mb-12 px-4">
                <!-- Team member 1 -->
                <div
                    class="text-center cursor-pointer transition-transform duration-300 hover:scale-105 shadow-lg p-4 rounded-lg hover:shadow-2xl w-full md:w-1/3">
                    <img src="../../assets/images/i.jpeg" alt="Team member"
                        class="rounded-lg mx-auto mb-4 w-full max-w-[212px] h-64 object-cover" />
                    <h3 class="font-[600] text-[24px]">Bhawana Regmi</h3>
                    <p class="text-[16px] font-[600]">Japanese Teacher</p>
                </div>

                <!-- Team member 2 -->
                <div
                    class="text-center cursor-pointer transition-transform duration-300 hover:scale-105 shadow-lg p-4 rounded-lg hover:shadow-2xl w-full md:w-1/3">
                    <img src="../../assets/images/i.jpeg" alt="Team member"
                        class="rounded-lg mx-auto mb-4 w-full max-w-[212px] h-64 object-cover" />
                    <h3 class="font-[600] text-[24px]">Bhawana Regmi</h3>
                    <p class="text-[16px] font-[600]">Japanese Teacher</p>
                </div>

                <!-- Team member 3 -->
                <div
                    class="text-center cursor-pointer transition-transform duration-300 hover:scale-105 shadow-lg p-4 rounded-lg hover:shadow-2xl w-full md:w-1/3">
                    <img src="../../assets/images/i.jpeg" alt="Team member"
                        class="rounded-lg mx-auto mb-4 w-full max-w-[212px] h-64 object-cover" />
                    <h3 class="font-[600] text-[24px]">Bhawana Regmi</h3>
                    <p class="text-[16px] font-[600]">Japanese Teacher</p>
                </div>
            </div>
        </div>
    </main>
@endsection
