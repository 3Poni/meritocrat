// Dropdown Menu
var dropdown = document.querySelectorAll('li.dropdown');


    Array.from(dropdown).forEach(function(el){
        var button = el.querySelector('a[data-toggle]'),
            menu = el.querySelector('.dropdown-menu'),
            arrow = el.querySelector('.icon-arrow');
        if(button !== null) {
        button.onclick = function(event) {
            if(!menu.hasClass('show')) {
                menu.classList.add('show');
                menu.classList.remove('hide');
                arrow.classList.add('open');
                arrow.classList.remove('close');
                event.preventDefault();
            }
            else {
                menu.classList.remove('show');
                menu.classList.add('hide');
                arrow.classList.remove('open');
                arrow.classList.add('close');
                event.preventDefault();
            }
        };
        }
    })

    Element.prototype.hasClass = function(className) {
        return this.className && new RegExp("(^|\\s)" + className + "(\\s|$)").test(this.className);
    };


