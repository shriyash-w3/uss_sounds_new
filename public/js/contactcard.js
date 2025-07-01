const contacts = [
  {
    iconClass: "fa-solid fa-location-dot", // Store icon class names
    title: "Address",
    subtitle: "Bharatpur 1- Chitwan, Nepal",
  },
  {
    iconClass: "fa-solid fa-phone",
    title: "Phone",
    subtitle: "+977 9858766666",
  },
  {
    iconClass: "fa-regular fa-envelope",
    title: "Gmail",
    subtitle: "drone@gmail.com",
  },
];

function createContactCard() {
  const container = document.getElementById("contactus");
  container.innerHTML = ""; // Clear existing content

  contacts.forEach((contact) => {
    const card = document.createElement("div");
    card.className =
      "w-full px-2 bg-black text-white rounded-[4px] py-7 lg:w-[90%] cursor-pointer transition-transform duration-300 hover:scale-102"; // Added some padding

    const icon = document.createElement("i"); // Create icon element
    icon.className = contact.iconClass; // Set its class
    icon.style.fontSize = "20px"; // Example: Adjust size as needed
    icon.style.marginBottom = "5px"; // Add some spacing

    const title = document.createElement("p");
    title.className = "font-bold";
    title.textContent = contact.title;

    const subtitle = document.createElement("p");
    subtitle.textContent = contact.subtitle;
    subtitle.style.fontSize = "14px"; // Example: Smaller size

    card.appendChild(icon); // Append the icon
    card.appendChild(title); // Append the title
    card.appendChild(subtitle); // Append the subtitle

    container.appendChild(card);
  });
  const card = document.createElement("div");
  card.className = "bg-black text-white rounded-[4px] lg:w-[90%]";

  const iframe = document.createElement("iframe");
  iframe.className = "w-full lg:w-[90%] rounded transiton-transform duration-300 hover:scale-102";

  iframe.src =
    "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.4330426957636!2d84.42861127630961!3d27.7039128761845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fb7786b5cef9%3A0xb031c33dd71d47cf!2sBharatpur%20Municipality%20Ward%201%20Office!5e0!3m2!1sen!2snp!4v1739693683311!5m2!1sen!2snp"; // Corrected src URL

  iframe.style.border = "0"; // or iframe.style.border = "none";
  iframe.allowFullscreen = true; // Use camelCase for JavaScript properties
  iframe.loading = "lazy";
  iframe.referrerPolicy = "no-referrer-when-downgrade";

  container.appendChild(iframe);
}

createContactCard();
