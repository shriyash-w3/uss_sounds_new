<!-- footer -->
<footer class="bg-black text-white text-sm py-10 font-[500]">
    <div class="wrapper px-4 md:px-6 lg:px-8">
        <!-- Main footer content -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-4">
            <!-- Company Info -->
            <div class="flex flex-col gap-5">
                <img class="w-10 h-10" src="../../assets/images/suba 1.png" alt="Company Logo" />
                <p class="max-w-[227px] text-sm">
                    US Sound & Lights provides professional audio and lighting
                    solutions for events of all sizes.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="flex flex-col gap-5">
                <h2 class="text-lg font-semibold">Quick Links</h2>
                <ul class="list-none flex flex-col gap-3">
                    <li class="hover:text-gray-300 cursor-pointer">
                        <a href="{{route('shop')}}"> Shop </a>
                    </li>
                    <li class="hover:text-gray-300 cursor-pointer">
                        <a href="{{route('equipRental')}}"> Rent Equipment </a>
                    </li>
                    <li class="hover:text-gray-300 cursor-pointer">
                        <a href="{{route('services')}}"> Services </a>
                    </li>
                    <li class="hover:text-gray-300 cursor-pointer">
                        <a href="{{route('contact')}}"> Support </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="flex flex-col gap-5">
                <h2 class="text-lg font-semibold">Contact</h2>
                <ul class="list-disc flex flex-col gap-3 ml-4">
                    <li>1234 Sound Ave</li>
                    <li>Los Angeles, CA 90028</li>
                    <li>Phone: (555) 123-4567</li>
                    <li>Email: info@ussoundlights.com</li>
                </ul>
            </div>

            <!-- Social Media -->
            <div class="flex flex-col gap-5">
                <h2 class="text-lg font-semibold">Follow Us</h2>
                <div class="flex gap-4">
                    <i
                        class="fa-brands fa-facebook w-[24px] h-[24px] hover:text-gray-300 cursor-pointer transition-colors"></i>
                    <i
                        class="fa-brands fa-twitter w-[24px] h-[24px] hover:text-gray-300 cursor-pointer transition-colors"></i>
                    <i
                        class="fa-brands fa-instagram w-[24px] h-[24px] hover:text-gray-300 cursor-pointer transition-colors"></i>
                    <i
                        class="fa-brands fa-youtube w-[24px] h-[24px] hover:text-gray-300 cursor-pointer transition-colors"></i>
                </div>
            </div>
        </div>

        <!-- Copyright section -->
        <div class="mt-10 pt-5 border-t border-white/20">
            <p class="text-center text-sm">
                © 2025 US Sound & Lights. All rights reserved.
            </p>
        </div>
    </div>
</footer>
