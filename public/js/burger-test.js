const burger = document.getElementById('burger');
const menuList = document.getElementById('menu-list');
const closeBtn = document.getElementById('close-btn');

burger.addEventListener('click', () => {
  menuList.classList.toggle('active');

  // Prevent scrolling of the main website content
  document.body.style.overflow = menuList.classList.contains('active') ? 'hidden' : 'auto';
});
// Add this after the existing JavaScript code



closeBtn.addEventListener('click', () => {
  menuList.classList.remove('active');

  // Enable scrolling of the main website content
  document.body.style.overflow = 'auto';
});
