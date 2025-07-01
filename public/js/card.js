// Card data array
const cardData = [
  { icon: "🔍", title: "Sales", subtitle: "Sound & lights" },
  { icon: "⭐", title: "Rental", subtitle: "Services" },
  { icon: "💰", title: "AFFORDABLE", subtitle: "COST" },
  { icon: "👥", title: "HIGH", subtitle: "EFFICIENCY" },
  { icon: "➕", title: "Best", subtitle: "Sound Quality" },
  { icon: "🔀", title: "RANDOM", subtitle: "EFFECTS" },
];

// Function to create a card
function createCard(icon, title, subtitle) {
  const card = document.createElement("div");
  card.className =
    "card transition duration-300 transform hover:scale-104 hover:shadow-xl cursor-pointer";

  const iconElem = document.createElement("div");
  iconElem.className = "icon";
  iconElem.innerHTML = icon;

  const titleElem = document.createElement("h3");
  titleElem.className = "title";
  titleElem.innerText = title;

  const subtitleElem = document.createElement("h4");
  subtitleElem.className = "subtitle";
  subtitleElem.innerText = subtitle;

  const description = document.createElement("p");
  description.className = "description";
  description.innerText =
    "Diam Phasellus vestibulum lorem sed risus ultricies tristique.";

  card.appendChild(iconElem);
  card.appendChild(titleElem);
  card.appendChild(subtitleElem);
  card.appendChild(description);

  return card;
}

// Function to render all cards inside a container
function renderCards(containerId) {
  const container = document.getElementById(containerId);
  container.className = "card-container"; // Apply grid styles

  cardData.forEach(({ icon, title, subtitle }) => {
    const card = createCard(icon, title, subtitle);
    container.appendChild(card);
  });
}

// Call function to render cards inside 'cardContainer' div
document.addEventListener("DOMContentLoaded", () => {
  renderCards("cardContainer");
});
