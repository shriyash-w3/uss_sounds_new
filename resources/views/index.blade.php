@extends('layouts.master')

@section('content')
    <div class="header-spacer"></div>

    <!-- Keep your existing backdrop div -->
    <div
      id="backdrop"
      class="hidden fixed top-0 left-0 w-full h-full bg-black opacity-50 z-40"
    ></div>

    <script src="../js/header.js"></script>

    <!-- hero section fully responsive -->
    <div class="wrapper">
      <section
        class="relative w-full h-[250px] sm:h-[420px] md:h-[510px] lg:h-[650px] flex items-center justify-center bg-black px-4 sm:px-6 md:px-8 lg:px-12"
      >
        <!-- Background Image -->
        <div
          class="absolute inset-0 bg-cover bg-center opacity-80"
          style="background-image: url('../images/herosection/hero.png')"
        ></div>

        <!-- Overlay -->
        <div
          class="absolute inset-0 bg-gradient-to-b from-black via-transparent to-black"
        ></div>

        <!-- Content -->
        <div
          class="relative text-center text-white space-y-1 sm:space-y-2 md:space-y-3"
        >
          <p
            class="text-[9px] sm:text-[10px] md:text-[12px] lg:text-[14px] font-[500] text-center"
          >
            Don't Miss Today's Featured Deals
          </p>
          <div class="flex flex-col">
            <h2
              class="text-[24px] sm:text-[28px] md:text-[30px] lg:text-[36px] font-[800]"
            >
              Decorative Lightnings
            </h2>
            <h2
              class="text-[24px] sm:text-[28px] md:text-[30px] lg:text-[36px] font-[800]"
            >
              & Sounds
            </h2>
          </div>
          <div
            class="cursor-pointer transition-transform duration-400 hover:scale-108"
          >
            <a
              class="text-[10px] md:text-[12px] lg:text-[14px] font-[600] text-black bg-white px-3 md:px-8 py-1 md:py-3 cursor-pointer rounded"
              href="./shop.html"
            >
              Shop Now
            </a>
          </div>
        </div>
      </section>
    </div>

    <!-- green page section -->
    <div class="wrapper">
      <div
        class="w-full flex flex-col md:flex md:flex-row gap-1.5 md:gap-2 lg:gap-6 px-0 md:px-2 lg:px-12 mt-10 mb-[40px] md:mb-[70px] lg:mb-[100px]"
      >
        <!-- first box -->
        <div
          class="relative bg-[#EFFFFA] p-3 sm:p-4 md:p-6 lg:p-12 shadow-md w-full md:w-[40%] flex flex-col justify-between cursor-pointer transition-transform duration-300 hover:scale-102 hover:shadow-xl rounded"
        >
          <div class="flex flex-col gap-y-2">
            <h3
              class="text-[16px] sm:text-[18px] md:text-[20px] lg:text-[24px] font-[700] text-black"
            >
              NEW COLLECTIONS
            </h3>
            <p
              class="text-[#858585] text-[12px] sm:text-[14px] md:text-[16px] lg:text-[18px] font-[500]"
            >
              FASHION
            </p>
          </div>
          <a
            href="./shop.html"
            class="text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] font-[700] text-black underline mt-6 sm:mt-8 md:mt-10 lg:mt-12"
            >SHOP NOW</a
          >
          <img
            src="../images/herosection/lamp.png"
            alt="Lamp"
            class="absolute bottom-1.5 sm:bottom-4 md:bottom-6 lg:bottom-7 right-1 sm:right-4 md:right-6 lg:right-7 w-24 sm:w-32 md:w-40 lg:w-44 h-24 sm:h-28 md:h-36 lg:h-40"
          />
        </div>

        <!-- second box -->
        <div
          class="relative bg-[#EFFFFA] p-3 sm:p-4 md:p-6 lg:p-12 shadow-md w-full md:w-[30%] flex flex-col justify-between cursor-pointer transition-transform duration-300 hover:scale-102 hover:shadow-xl rounded"
        >
          <div class="flex flex-col gap-y-2">
            <h3
              class="text-[16px] sm:text-[18px] md:text-[20px] lg:text-[24px] font-[700] text-black"
            >
              LIGHT COLLECTION
            </h3>
            <p
              class="text-[#858585] text-[12px] sm:text-[14px] md:text-[16px] lg:text-[18px] font-[500]"
            >
              Best For You
            </p>
          </div>
          <a
            href="./shop.html"
            class="text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] font-[700] text-black underline mt-6 sm:mt-8 md:mt-10 lg:mt-12"
            >SHOP NOW</a
          >
          <img
            src="../images/herosection/bulb.png"
            alt="Lamp"
            class="absolute bottom-2 sm:bottom-4 md:bottom-6 lg:bottom-7 right-2 sm:right-4 md:right-6 lg:right-7 w-20 sm:w-26 md:w-28 lg:w-32 h-20 sm:h-26 md:h-28 lg:h-30"
          />
        </div>

        <!-- third box -->
        <div
          class="relative bg-[#EFFFFA] p-3 sm:p-4 md:p-6 lg:p-12 shadow-md w-full md:w-[30%] flex flex-col justify-between cursor-pointer transition-transform duration-300 hover:scale-102 hover:shadow-xl rounded"
        >
          <div class="flex flex-col gap-y-2">
            <h3
              class="text-[16px] sm:text-[18px] md:text-[20px] lg:text-[24px] font-[700] text-black"
            >
              SOUND COLLECTION
            </h3>
            <p
              class="text-[#858585] text-[12px] sm:text-[14px] md:text-[16px] lg:text-[18px] font-[500]"
            >
              Best For You
            </p>
          </div>
          <a
            href="./shop.html"
            class="text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] font-[700] text-black underline mt-6 sm:mt-8 md:mt-10 lg:mt-12"
            >SHOP NOW</a
          >
          <img
            src="../images/herosection/pop.png"
            alt="Lamp"
            class="absolute bottom-3 sm:bottom-4 md:bottom-6 lg:bottom-7 right-3 sm:right-4 md:right-6 lg:right-7 w-24 sm:w-32 md:w-36 lg:w-40 h-20 sm:h-28 md:h-30 lg:h-34"
          />
        </div>
      </div>
    </div>

    <!-- product header and button section -->
    <div class="wrapper">
      <div class="w-full text-center space-y-1 sm:space-y-2 md:space-y-3">
        <h2
          class="text-[12px] sm:text-[14px] md:text-[16px] lg:text-[18px] font-[500] text-black"
        >
          New Trending
        </h2>
        <p
          class="text-[20px] sm:text-[24px] md:text-[30px] lg:text-[36px] font-[700]"
        >
          Products
        </p>
        <div
          class="flex items-center w-full md:w-10/12 lg:w-8/12 mx-auto"
          id="buttonContainer"
        >
          <button
            class="category-btn flex-1 text-[#858585] text-[12px] sm:text-[14px] md:text-[16px] lg:text-[18px] font-[500] px-2 md:px-4 lg:px-6 py-1 md:py-2 border-l border-r border-gray-300 transition duration-300 hover:bg-black hover:text-white cursor-pointer"
          >
            ALL
          </button>
          <button
            class="category-btn flex-1 text-[#858585] text-[12px] sm:text-[14px] md:text-[16px] lg:text-[18px] font-[500] px-2 md:px-4 lg:px-6 py-1 md:py-2 border-l border-r border-gray-300 transition duration-300 hover:bg-black hover:text-white cursor-pointer"
          >
            LIGHTS
          </button>
          <button
            class="category-btn flex-1 text-[#858585] text-[12px] sm:text-[14px] md:text-[16px] lg:text-[18px] font-[500] px-2 md:px-4 lg:px-6 py-1 md:py-2 border-l border-r border-gray-300 transition duration-300 hover:bg-black hover:text-white cursor-pointer"
          >
            SOUNDS
          </button>
          <button
            class="category-btn flex-1 text-[#858585] text-[12px] sm:text-[14px] md:text-[16px] lg:text-[18px] font-[500] px-2 md:px-4 lg:px-6 py-1 md:py-2 border-l border-r border-gray-300 transition duration-300 hover:bg-black hover:text-white cursor-pointer"
          >
            STAGE
          </button>
          <button
            class="category-btn flex-1 text-[#858585] text-[12px] sm:text-[14px] md:text-[16px] lg:text-[18px] font-[500] px-2 md:px-4 lg:px-6 py-1 md:py-2 border-l border-r border-gray-300 transition duration-300 hover:bg-black hover:text-white cursor-pointer"
          >
            OTHERS
          </button>
        </div>
      </div>
    </div>

    <!-- product section -->
    <div class="wrapper w-full py-6 md:py-10 px-0 sm:px-3 md:px-6 lg:px-12">
      <div
        id="product-container"
        class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-2 md:gap-4 lg:gap-6"
      >
        <!-- Products will be inserted dynamically here -->
      </div>
    </div>
    <script src="../js/homeProduct.js"></script>

    <!-- flat 15% off section -->
    <div
      class="relative w-full h-[240px] sm:h-[350px] md:h-[500px] lg:h-[600px] bg-cover bg-center flex justify-center items-center mb-6 md:mb-10"
      style="background-image: url('../images/indexPage/flat.png')"
    >
      <div class="w-[28%] flex flex-col h-full">
        <div
          class="h-[50%] text-white leading-6 sm:leading-8 md:leading-10 lg:leading-16 flex flex-col items-center justify-center"
        >
          <p
            class="text-[18px] sm:text-[24px] md:text-[32px] lg:text-[40px] xl:text-[48px] font-[600]"
          >
            Flat
          </p>
          <h2
            class="text-[22px] sm:text-[28px] md:text-[40px] lg:text-[52px] xl:text-[72px] font-[600]"
          >
            15%
          </h2>
          <p
            class="text-[18px] sm:text-[24px] md:text-[32px] lg:text-[40px] xl:text-[48px] font-[600]"
          >
            Off
          </p>
        </div>
        <div class="h-[50%] bg-white border-b-2 border-t-2 border-l-2">
          <img
            src="../images/productsection/speaker.png"
            alt=""
            class="w-full h-full object-contain"
          />
        </div>
      </div>
      <div class="w-[32%] h-full bg-white border-2">
        <img
          src="../images/productsection/speaker2.png"
          alt=""
          class="w-full h-full object-contain"
        />
      </div>
      <div class="h-full text-white w-[40%] flex flex-col justify-center">
        <div class="w-10/12 lg:w-9/12 mx-auto">
          <h2
            class="text-[12px] sm:text-[18px] md:text-[24px] lg:text-[30px] xl:text-[36px] font-[700]"
          >
            ALL TYPES OF LIGHTS
          </h2>
          <p
            class="text-[9px] sm:text-[14px] md:text-[18px] lg:text-[24px] font-[600]"
          >
            And Sound System
          </p>
          <p
            class="text-[8px] sm:text-[10px] md:text-[14px] lg:text-[18px] font-[500] text-justify mt-2 md:mt-4 lg:mt-8"
          >
            It is a long established fact that a reader will be distracted by
            the readable content of a page when looking at its layout. The point
            of using Lorem Ipsum is that it has a more-or-less normal
            distribution of letters, as opposed to using 'Content here, content
            her
          </p>
          <button
            class="text-black underline text-[8px] sm:text-[10px] md:text-[12px] lg:text-[16px] font-[700] bg-white px-4 md:px-6 lg:px-12 py-1 md:py-2 mt-2 md:mt-4 lg:mt-8 cursor-pointer transition-transform duration-300 hover:scale-105"
          >
            Shop
          </button>
        </div>
      </div>
    </div>

    <!-- rental section -->
    <div class="wrapper">
      <div class="w-full text-center space-y-3">
        <h2
          class="text-[12px] sm:text-[14px] md:text-[16px] lg:text-[18px] font-[500] text-black"
        >
          Professional
        </h2>
        <p
          class="text-[20px] sm:text-[24px] md:text-[30px] lg:text-[36px] font-[700]"
        >
          Equipment Rental
        </p>
        <div
          class="flex items-center w-full md:w-10/12 lg:w-8/12 mx-auto py-10"
          id="rentalButtonContainer"
        >
          <button
            class="category-button-rental flex-1 text-[#858585] text-[12px] sm:text-[14px] md:text-[16px] lg:text-[18px] font-[500] px-2 md:px-4 lg:px-6 py-1 md:py-2 border-l border-r border-gray-300 transition duration-300 hover:bg-black hover:text-white cursor-pointer"
          >
            ALL
          </button>
          <button
            class="category-button-rental flex-1 text-[#858585] text-[12px] sm:text-[14px] md:text-[16px] lg:text-[18px] font-[500] px-2 md:px-4 lg:px-6 py-1 md:py-2 border-l border-r border-gray-300 transition duration-300 hover:bg-black hover:text-white cursor-pointer"
          >
            LIGHTS
          </button>
          <button
            class="category-button-rental flex-1 text-[#858585] text-[12px] sm:text-[14px] md:text-[16px] lg:text-[18px] font-[500] px-2 md:px-4 lg:px-6 py-1 md:py-2 border-l border-r border-gray-300 transition duration-300 hover:bg-black hover:text-white cursor-pointer"
          >
            SOUNDS
          </button>
          <button
            class="category-button-rental flex-1 text-[#858585] text-[12px] sm:text-[14px] md:text-[16px] lg:text-[18px] font-[500] px-2 md:px-4 lg:px-6 py-1 md:py-2 border-l border-r border-gray-300 transition duration-300 hover:bg-black hover:text-white cursor-pointer"
          >
            STAGE
          </button>
          <button
            class="category-button-rental flex-1 text-[#858585] text-[12px] sm:text-[14px] md:text-[16px] lg:text-[18px] font-[500] px-2 md:px-4 lg:px-6 py-1 md:py-2 border-l border-r border-gray-300 transition duration-300 hover:bg-black hover:text-white cursor-pointer"
          >
            OTHERS
          </button>
        </div>
      </div>
    </div>

    <!-- rental product section -->
    <div class="wrapper">
      <div class="w-full py-1 px-0 sm:px-3 md:px-6 lg:px-12">
        <div
          id="rental-container"
          class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-3 w-full mx-auto"
        >
          <!-- Products will be dynamically inserted here -->
        </div>
      </div>
      <script src="../js/homeRental.js"></script>
    </div>

    <!-- image section -->
    <div class="wrapper px-0 sm:px-4 md:px-8 lg:px-10">
      <div
        class="relative w-full h-[200px] sm:h-[400px] md:h-[550px] lg:h-[650px] flex items-center justify-between mb-10 mt-10"
      >
        <!-- Left Image -->
        <img
          src="../images/productsection/img1.jpg"
          class="w-[40%] h-full object-cover"
        />

        <!-- Right Image -->
        <img
          src="../images/productsection/img3.jpg"
          class="w-[40%] h-full object-cover"
        />

        <!-- Center Overlay Image -->
        <img
          src="../images/productsection/img2.jpg"
          class="absolute top-1/2 left-1/2 w-6/12 h-auto shadow-lg transform -translate-x-1/2 -translate-y-1/2"
        />
      </div>
    </div>

    <!-- logo section -->
    <div class="wrapper px-0 sm:px-4 md:px-8 lg:px-10">
      <div
        class="py-2 sm:py-4 md:py-8 lg:py-12 px-1 md:px-3 text-[#858585] mb-6 md:mb-10 mt-6 md:mt-10 flex items-center justify-between"
      >
        <img
          src="../images/logo/logo8.avif"
          alt="Logo"
          class="w-10 h-10 sm:w-14 sm:h-14 md:w-20 md:h-20 lg:w-24 lg:h-24 cursor-pointer transition-transform duration-300 hover:scale-120"
        />
        <img
          src="../images/logo/logo1.jpg"
          alt="Logo"
          class="w-10 h-10 sm:w-14 sm:h-14 md:w-20 md:h-20 lg:w-24 lg:h-24 cursor-pointer transition-transform duration-300 hover:scale-120"
        />
        <img
          src="../images/logo/logo4.png"
          alt="Logo"
          class="w-10 h-10 sm:w-14 sm:h-14 md:w-20 md:h-20 lg:w-24 lg:h-24 cursor-pointer transition-transform duration-300 hover:scale-120"
        />
        <img
          src="../images/logo/logo3.jpg"
          alt="Logo"
          class="w-10 h-10 sm:w-14 sm:h-14 md:w-20 md:h-20 lg:w-24 lg:h-24 cursor-pointer transition-transform duration-300 hover:scale-120"
        />
        <img
          src="../images/logo/logo5.png"
          alt="Logo"
          class="w-10 h-10 sm:w-14 sm:h-14 md:w-20 md:h-20 lg:w-24 lg:h-24 cursor-pointer transition-transform duration-300 hover:scale-120"
        />
      </div>
    </div>

    <!-- video section -->
    <div class="wrapper px-0 sm:px-3 md:px-6 lg:px-10 pb-4 sm:pb-8 md:pb-10">
      <iframe
        width="100%"
        src="https://www.youtube.com/embed/3VZFpwlXKpg?si=Vwg8wHIteTzevLKe"
        title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin"
        allowfullscreen
        class="h-[200px] sm:h-[300px] md:h-[400px] lg:h-[500px]"
      ></iframe>
    </div>


@endsection