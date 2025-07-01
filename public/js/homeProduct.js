document.addEventListener("DOMContentLoaded", () => {
  const products = [
    {
      image: "../../assets/images/led.png",
      name: "LED SCREEN P3",
      actual_price: 800,
      discount_price: 1200,
      category: "STAGE",
    },
    {
      image: "../../assets/images/heatlight.png",
      name: "Moving Head Light",
      actual_price: 800,
      discount_price: 1200,
      category: "LIGHTS",
    },
    {
      image: "../../assets/images/led1.png",
      name: "LED SCREEN P1",
      actual_price: 800,
      discount_price: 1200,
      category: "STAGE",
    },
    {
      image: "../../assets/images/led2.png",
      name: "LED SCREEN P3",
      actual_price: 800,
      discount_price: 1200,
      category: "STAGE",
    },
    {
      image: "../../assets/images/led.png",
      name: "Moving Head Light",
      actual_price: 800,
      discount_price: 1200,
      category: "LIGHTS",
    },
    {
      image: "../../assets/images/heatlight.png",
      name: "LED SCREEN P1",
      actual_price: 800,
      discount_price: 1200,
      category: "STAGE",
    },
    {
      image: "../../assets/images/led.png",
      name: "LED SCREEN P3",
      actual_price: 800,
      discount_price: 1200,
      category: "STAGE",
    },
    {
      image: "../../assets/images/heatlight.png",
      name: "Moving Head Light",
      actual_price: 800,
      discount_price: 1200,
      category: "LIGHTS",
    },
  ];

  const container = document.getElementById("product-container");
  const buttons = document.querySelectorAll(".category-btn");

  function renderProducts(category) {
    container.innerHTML = ""; // Clear previous items

    products
      .filter((product) => category === "ALL" || product.category === category)
      .forEach((product) => {
        const productElement = document.createElement("div");
        productElement.className =

          " p-4 cursor-pointer transition-transform duration-300 hover:scale-105 shadow-lg hover:shadow-2xl rounded-lg space-y-2 md:space-y-4";


        productElement.innerHTML = `
                  <div class="h-[65%] md:h-[70%]">
                      <img class="w-full h-full object-contain" src="${product.image}" alt="${product.name}">
                  </div>

                  <div class="space-y-3 flex flex-col items-start justify-start">
                      <h2 class="text-[14px] sm:text-[18px] lg:text-[24px] font-[600]">${product.name}</h2>
                      <div class="flex items-center gap-5">
                          <del class="text-[12px] sm:text-[18px] lg:text-[14px] font-[500] text-[#858585]">Rs ${product.actual_price}</del>
                          <p class="text-[12px] sm:text-[18px] lg:text-[14px] font-[500]">Rs ${product.discount_price}</p>

                      </div>
                      <a href="#" class="text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] font-[700] underline">ORDER NOW</a>
                  </div>
              `;

        container.appendChild(productElement);
      });
  }

  buttons.forEach((button) => {
    button.addEventListener("click", () => {
      const category = button.textContent.trim().toUpperCase(); // Get category name
      renderProducts(category);

      // Update button styles
      buttons.forEach((btn) => btn.classList.remove("bg-black", "text-white"));
      button.classList.add("bg-black", "text-white");
    });
  });

  renderProducts("ALL"); // Load all products by default
});
