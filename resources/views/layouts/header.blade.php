<!-- navbar -->
<header class="fixed-header">
    <div class="wrapper p-3">
        <nav class="flex justify-between items-center">
            <!-- Logo -->
            <img class="w-10 h-10 block lg:hidden" src="{{ asset('assets/images/suba 1.png') }}" alt="Mobile Logo" />

            <!-- Navigation Links -->
            <div id="nav-content" class="hidden lg:flex flex-1 items-center justify-between">
                <ul
                    class="flex flex-col lg:flex-row flex-1 justify-around items-center font-[500] absolute lg:relative top-[70px] lg:top-0 left-0 right-0 bg-[#EFF2FC] lg:bg-transparent py-4 lg:py-0">
                    <li class="cursor-pointer py-3 lg:py-0">
                        <a href="{{route('index')}}">HOME</a>
                    </li>
                    <li class="cursor-pointer py-3 lg:py-0">
                        <a href="{{route('shop')}}">SHOP</a>
                    </li>
                    <li class="dropdown py-3 lg:py-0">
                        <a class="dropdown-trigger cursor-pointer">RENTAL</a>
                        <ul id="rentalDropdown"
                            class="dropdown-content hidden lg:absolute lg:bg-white lg:shadow-md lg:mt-2 py-2 lg:min-w-[200px]">
                            <li class="py-2 px-1 hover:bg-gray-100">
                                <a href="{{route('equipRental')}}">Equipment Rental</a>
                            </li>
                            <li class="py-2 px-1 hover:bg-gray-100">
                                <a href="{{route('packageRental')}}">Package Rental</a>
                            </li>
                        </ul>
                    </li>
                    <li class="hidden lg:block">
                        <img class="w-10 h-10" src="{{ asset('assets/images/suba 1.png') }}" alt="Desktop Logo" />
                    </li>
                    <li class="cursor-pointer py-3 lg:py-0">
                        <a href="{{route('services')}}">SERVICES</a>
                    </li>
                    <li class="cursor-pointer py-3 lg:py-0">
                        <a href="{{route('about')}}">ABOUT US</a>
                    </li>
                    <li class="cursor-pointer py-3 lg:py-0">
                        <a href="{{route('contact')}}">CONTACT US</a>
                    </li>
                </ul>
                <p
                    class="hidden lg:flex rounded-full w-10 h-10 justify-center items-center bg-white p-2 cursor-pointer ml-4">
                    <i class="fa-solid fa-phone"></i>
                </p>
            </div>

            <!-- Mobile Phone and Hamburger -->
            <div class="flex lg:hidden items-center gap-4">
                <p class="rounded-full w-10 h-10 flex justify-center items-center bg-white p-2 cursor-pointer">
                    <i class="fa-solid fa-phone"></i>
                </p>
                <button id="hamburger" class="text-2xl focus:outline-none">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </nav>
    </div>
</header>




