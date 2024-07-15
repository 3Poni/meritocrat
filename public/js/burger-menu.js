const button = document.querySelector('.burger-button');
const menu = document.querySelector('.burger-menu');
const navButton = document.querySelector('.nav-button')


button.addEventListener('click', () => {
  button.classList.toggle('-menu-open');
  menu.classList.toggle('-open');
})

navButton.addEventListener('click', function(){
  navButton.parentNode.parentNode.classList.toggle('closed')
  console.log('fefe')
})

// (function() {

//   .addEventListener('click', function() {

//     this.parentNode.parentNode.classList.toggle('closed')
//   }, false);
//   console.log('wfewf')
// })();

