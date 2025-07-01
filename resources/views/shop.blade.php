@extends('layouts.master')

@section('content')
    <div class="wrapper">
        <div class="relative">
            <img src="../../assets/images/background.png" alt="Product"
                class="w-full h-[298px] sm:h-48 md:h-56 lg:h-96 object-cover" />

            <div class="absolute inset-0 flex flex-col justify-center items-center z-40 text-white text-center px-4 sm:px-8">
                <h2 class="text-3xl sm:text-4xl font-bold">SHOP</h2>
                <p class="text-sm sm:text-base font-normal mt-2">HOME &gt; SHOP</p>
            </div>
        </div>

        <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-1/4 space-y-4 pt-6">
                <ul class="space-y-2">
                    <li class="flex items-center justify-between border border-[#858585] px-2 py-2 cursor-pointer">
                        Lights
                        <input type="checkbox" class="filter-checkbox" value="Lights" />
                    </li>
                    <li class="flex items-center justify-between border border-[#858585] px-2 py-2 cursor-pointer">
                        Sounds
                        <input type="checkbox" class="filter-checkbox" value="Sounds" />
                    </li>
                    <li class="flex items-center justify-between border border-[#858585] px-2 py-2 cursor-pointer">
                        Stage
                        <input type="checkbox" class="filter-checkbox" value="Stage" />
                    </li>
                    <li class="flex items-center justify-between border border-[#858585] px-2 py-2 cursor-pointer">
                        Others
                        <input type="checkbox" class="filter-checkbox" value="Others" />
                    </li>
                </ul>
            </div>

            <div id="product-container"
                class="w-full md:w-2/3 grid grid-cols-2 lg:grid-cols-3 gap-5 md:gap-10 pt-6 mx-auto pb-6"></div>
        </div>
    </div>

    <script>
        const products = [{
                image: "../../assets/images/led.png",
                name: "LED SCREEN P3",
                actual_price: 800,
                discount_price: 1200,
                category: "Lights",
            },
            {
                image: "../../assets/images/heatlight.png",
                name: "Moving Head Light",
                actual_price: 800,
                discount_price: 1200,
                category: "Lights",
            },
            {
                image: "../../assets/images/led1.png",
                name: "LED SCREEN P1",
                actual_price: 800,
                discount_price: 1200,
                category: "Lights",
            },
            {
                image: "../../assets/images/led2.png",
                name: "LED SCREEN P3",
                actual_price: 800,
                discount_price: 1200,
                category: "Stage",
            },
            {
                image: "../../assets/images/led.png",
                name: "Moving Head Light",
                actual_price: 800,
                discount_price: 1200,
                category: "Lights",
            },
            {
                image: "../../assets/images/heatlight.png",
                name: "LED SCREEN P1",
                actual_price: 800,
                discount_price: 1200,
                category: "Stage",
            },
            {
                image: "../../assets/images/led.png",
                name: "LED SCREEN P3",
                actual_price: 800,
                discount_price: 1200,
                category: "Others",
            },
            {
                image: "../../assets/images/heatlight.png",
                name: "Moving Head Light",
                actual_price: 800,
                discount_price: 1200,
                category: "Sounds",
            },
            {
                image: "../../assets/images/led1.png",
                name: "LED SCREEN P1",
                actual_price: 800,
                discount_price: 1200,
                category: "Stage",
            },
        ];

        const container = document.getElementById("product-container");
        const checkboxes = document.querySelectorAll(".filter-checkbox");

        function filterProducts() {
            const selectedCategories = [];

            checkboxes.forEach((checkbox) => {
                if (checkbox.checked) {
                    selectedCategories.push(checkbox.value);
                }
            });

            container.innerHTML = "";

            const filteredProducts = products.filter(
                (product) =>
                selectedCategories.length === 0 ||
                selectedCategories.includes(product.category)
            );

            filteredProducts.forEach((product) => {
                const productElement = document.createElement("div");
                productElement.className =
                    " p-4 cursor-pointer transition-transform duration-300 hover:scale-105 shadow-lg hover:shadow-2xl rounded-lg space-y-4";
                productElement.innerHTML = `
            <div class="flex items-center justify-center">
              <img class="w-full h-[200px] object-contain" src="${product.image}" alt="${product.name}">
            </div>
            <div class="space-y-3 flex flex-col items-start justify-start">
              <h2 class="text-[14px] sm:text-[18px] lg:text-[24px] font-[600]">${product.name}</h2>
              <div class="flex items-center gap-5">
                <del class="text-[12px] sm:text-[18px] lg:text-[14px] font-[500] text-[#858585]">Rs ${product.actual_price}</del>
                <p class="text-[12px] sm:text-[18px] lg:text-[14px] font-[500]">Rs ${product.discount_price}</p>
              </div>
              <a href="#" class="text-[14px] sm:text-[18px] lg:text-[16px] font-[700] underline pb-2">ORDER NOW</a>
            </div>
          `;
                container.appendChild(productElement);
            });
        }

        checkboxes.forEach((checkbox) => {
            checkbox.addEventListener("change", filterProducts);
        });

        filterProducts();
    </script>
@endsection
