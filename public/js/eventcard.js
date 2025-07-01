const events = [
  {
    title: "CONCERT PACKAGES",
    image: "../../assets/images/eventpackage1.png",
    features: [
      "Concert Packages",
      "Moving Head Lights",
      "LED Video Wall",
      "Stage Monitoring",
    ],
    price: "Rs 26,550/day",
  },
  {
    title: "CORPORATE PACKAGE",
    image: "../../assets/images/eventpackage2.png",
    features: [
      "Concert Packages",
      "Moving Head Lights",
      "LED Video Wall",
      "Stage Monitoring",
    ],
    price: "Rs 26,550/day",
  },
  {
    title: "WEDDING PACKAGE",
    image: "../../assets/images/eventpackage3.png",
    features: [
      "Concert Packages",
      "Moving Head Lights",
      "LED Video Wall",
      "Stage Monitoring",
    ],
    price: "Rs 26,550/day",
  },
];

// Function to generate event cards dynamically
function generateEventCards() {
  const container = document.getElementById("event_card");
  container.innerHTML = ""; // Clear existing content

  events.forEach((event) => {
    // Create card element
    const card = document.createElement("div");
    card.className =
      "bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 duration-300 transform transition-all cursor-pointer";

    // Set inner HTML
    card.innerHTML = `
          <img src="${event.image}" alt="${
      event.title
    }" class="w-full h-52 object-cover">
          <div class="p-5">
              <h2 class="font-bold text-lg">${event.title}</h2>
              <ul class="mt-5 flex flex-col gap-5">
                  ${event.features
                    .map(
                      (feature) =>
                        `<li class="flex items-center gap-2"><span class="mr-2">✔</span>${feature}</li>`
                    )
                    .join("")}
              </ul>
              <div class="flex justify-between items-center">
              <p class="font-bold mt-3">${event.price}</p>
              <a class="mt-4 bg-black text-white px-4 py-2 rounded-md hover:bg-gray-700 transition-transform duration-300 hover:scale-105" href="./rental-inquiry.html">Book Now</a>
              </div>
            
          </div>
      `;

    // Append card to container
    container.appendChild(card);
  });
}

// Generate cards on page load
generateEventCards();
