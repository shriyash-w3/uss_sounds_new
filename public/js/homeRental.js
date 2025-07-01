document.addEventListener("DOMContentLoaded", () => {
  const products = [
    {
      image: "../images/productsection/product5.png",
      name: "LED SCREEN P1",
      oldPrice: 800,
      newPrice: 1200,
      category: "STAGE",
    },
    {
      image: "../images/productsection/product6.png",
      name: "LED SCREEN P3",
      oldPrice: 800,
      newPrice: 1200,
      category: "LIGHTS",
    },
    {
      image: "../images/productsection/product3.png",
      name: "Moving Head Light",
      oldPrice: 800,
      newPrice: 1200,
      category: "LIGHTS",
    },
    {
      image: "../images/productsection/product4.png",
      name: "LED SCREEN P1",
      oldPrice: 800,
      newPrice: 1200,
      category: "STAGE",
    },
    {
      image: "../images/productsection/product4.png",
      name: "LED SCREEN P1",
      oldPrice: 800,
      newPrice: 1200,
      category: "STAGE",
    },
    {
      image: "../images/productsection/product3.png",
      name: "LED SCREEN P1",
      oldPrice: 800,
      newPrice: 1200,
      category: "OTHERS",
    },
    {
      image: "../images/productsection/product5.png",
      name: "LED SCREEN P1",
      oldPrice: 800,
      newPrice: 1200,
      category: "STAGE",
    },
  ];

  const productContainer = document.getElementById("rental-container");
  const buttonContainer = document.getElementById("rentalButtonContainer");

  // Function to display products based on category
  const displayProducts = (category = "ALL") => {
    // Clear existing products
    productContainer.innerHTML = "";

    // Filter products based on selected category
    const filteredProducts =
      category === "ALL"
        ? products
        : products.filter((product) => product.category === category);

    // Display the filtered products
    filteredProducts.forEach((item) => {
      const productCard = document.createElement("div");
      productCard.className =

        "p-4 cursor-pointer transition-transform duration-300 hover:scale-105 shadow-lg hover:shadow-2xl rounded-lg space-y-2 md:space-y-4";


      productCard.innerHTML = `
              <div class="h-[65%] md:h-[70%]">
                  <img class="w-full h-full object-contain" src="${item.image}" alt="${item.name}">
              </div>

              <div class="space-y-3 flex flex-col items-start justify-start">
                  <h2 class="text-[14px] sm:text-[18px] lg:text-[24px] font-[600]">${item.name}</h2>
                  <div class="flex items-center gap-5">
                      <del class="text-[12px] sm:text-[18px] lg:text-[14px] font-[500] text-[#858585]">Rs ${item.oldPrice}</del>
                      <p class="text-[12px] sm:text-[18px] lg:text-[14px] font-[500]">Rs ${item.newPrice}</p>
                  </div>
                  <a href="./inquiry.html" class="text-[14px] sm:text-[18px] lg:text-[16px] font-[700] underline pb-2">RENT NOW</a>
              </div>
          `;

      productContainer.appendChild(productCard);
    });
  };

  // Add active class to buttons
  const setActiveButton = (clickedButton) => {
    const buttons = buttonContainer.querySelectorAll(".category-button-rental");
    buttons.forEach((button) => {
      button.classList.remove("bg-black", "text-white");
    });
    clickedButton.classList.add("bg-black", "text-white");
  };

  // Display all products initially
  displayProducts();

  // Add event listeners to category buttons
  const categoryButtons = buttonContainer.querySelectorAll(
    ".category-button-rental"
  );

  categoryButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const category = button.textContent.trim();
      setActiveButton(button);
      displayProducts(category);
    });
  });
});
