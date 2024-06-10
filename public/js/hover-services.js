document.addEventListener('DOMContentLoaded', function() {
    const hoverBlocks = document.querySelectorAll('.item');
  
    hoverBlocks.forEach(function(block) {
      block.addEventListener('mouseover', function() {
        this.style.backgroundColor = "#ff0000";
        const image = this.querySelector('img');
        const imgHover = this.dataset.imgHover;
        image.src = imgHover;
      });
  
      block.addEventListener('mouseout', function() {
        this.style.backgroundColor = "#ffffff";
        const image = this.querySelector('img');
        const imgOriginal = this.dataset.imgOriginal;
        image.src = imgOriginal;
      });
    });
  });
  