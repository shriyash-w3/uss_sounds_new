@extends('layouts.master')

@section('content')
    <main class="wrapper pb-20">
        <!-- Banner -->
        <div class="relative">
            <img src="../../assets/images/background.png" alt="Product"
                class="w-full h-[298px] sm:h-48 md:h-56 lg:h-96 object-cover" />
            <div class="absolute inset-0 flex flex-col justify-center items-center z-40 text-white text-center px-4 sm:px-8">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold">CONTACT US</h2>
                <p class="text-sm sm:text-base font-normal mt-2">HOME &gt; CONTACT</p>
            </div>
        </div>

        <!-- form and address icon -->
        <div class="mt-8 sm:mt-12 md:mt-16 lg:mt-20 px-4 sm:px-6 md:px-8">
            <div class="flex flex-col lg:flex-row gap-5">
                <!-- Contact Info Section -->
                <div class="w-full lg:w-1/4 mb-8 md:mb-0 order-2 lg:order-1">
                    <div id="contactus" class="text-center flex flex-col gap-5"></div>
                    <script src="{{ asset('js/contactcard.js') }}"></script>
                </div>

                <!-- Form Section -->
                <div class="order-1 lg:order-2 flex-grow">
                    <!-- <form action="#" method="POST" onsubmit="return validateForm()"> -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-gray-700 font-bold mb-2">Name<span
                                    class="text-[#EE6122]">*</span></label>
                            <input type="text" id="name" name="name"
                                class="w-full border border-gray-300 px-3 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Enter your Name" required />
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 font-bold mb-2">Email<span
                                    class="text-[#EE6122]">*</span></label>
                            <input type="email" id="email" name="email"
                                class="w-full border border-gray-300 px-3 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Enter your Email" required />
                        </div>
                    </div>

                    <div class="mt-4">
                        <label for="mobile" class="block text-gray-700 font-bold mb-2">Mobile<span
                                class="text-[#EE6122]">*</span></label>
                        <input type="tel" id="mobile" name="mobile"
                            class="w-full border border-gray-300 px-3 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Enter your Mobile" required />
                    </div>

                    <div class="mt-4">
                        <label for="subject" class="block text-gray-700 font-bold mb-2">Subject<span
                                class="text-[#EE6122]">*</span></label>
                        <input type="text" id="subject" name="subject"
                            class="w-full border border-gray-300 px-3 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Enter your Subject" required />
                    </div>

                    <div class="mt-4">
                        <label for="message" class="block text-gray-700 font-bold mb-2">Message<span
                                class="text-[#EE6122]">*</span></label>
                        <textarea id="message" name="message" rows="8"
                            class="w-full border border-gray-300 px-3 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Enter your Message" required></textarea>
                    </div>

                    <div class="mt-6">
                        <button type="submit"
                            class="w-auto sm:w-auto bg-black text-white px-6 sm:px-8 py-2 rounded-md hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-300">
                            Pay
                        </button>
                    </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </main>
@endsection
