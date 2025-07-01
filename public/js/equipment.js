const products = [
  {
    image: '../../assets/images/led.png',
    name: 'LED SCREEN P3',
    actual_price: 800,
    discount_price: 1200
  },
  {
    image: '../../assets/images/heatlight.png',
    name: 'Moving Head Light',
    actual_price: 800,
    discount_price: 1200
  },
  {
    image: '../../assets/images/led1.png',
    name: 'LED SCREEN P1',
    actual_price: 800,
    discount_price: 1200
  },
  {
    image: '../../assets/images/led2.png',
    name: 'LED SCREEN P3',
    actual_price: 800,
    discount_price: 1200
  },
  {
    image: '../../assets/images/led.png',
    name: 'Moving Head Light',
    actual_price: 800,
    discount_price: 1200
  },
  {
    image: '../../assets/images/heatlight.png',
    name: 'LED SCREEN P1',
    actual_price: 800,
    discount_price: 1200
  },
  {
    image: '../../assets/images/led.png',
    name: 'LED SCREEN P3',
    actual_price: 800,
    discount_price: 1200
  },
  {
    image: '../../assets/images/heatlight.png',
    name: 'Moving Head Light',
    actual_price: 800,
    discount_price: 1200
  },
  {
    image: '../../assets/images/led1.png',
    name: 'LED SCREEN P1',
    actual_price: 800,
    discount_price: 1200
  },
];

const container = document.getElementById('product-container');

products.forEach(product => {
  const productElement = document.createElement('div');
  productElement.className = " p-6 cursor-pointer transition-transform duration-300 hover:scale-105 shadow-lg hover:shadow-2xl rounded-lg space-y-4";
  productElement.innerHTML = `
    <!-- image section -->
    <div class="flex items-center justify-center">
      <img class="w-full h-full object-contain" src="${product.image}" alt="${product.name}">
    </div>
    <!-- text section -->
    <div class=" space-y-3">
      <h2 class="text-[24px] font-[600]">${product.name}</h2>
      <div class="flex items-center gap-5">
        <del class="text-[18px] font-[500] text-[#858585]">Rs ${product.actual_price}</del>
        <p class="text-[24px] font-[500]">Rs ${product.discount_price}</p>
      </div>
      <a href="#" class="text-[16px] font-[700] underline">RENT NOW</a>
    </div>
  `;
  container.appendChild(productElement);
});
