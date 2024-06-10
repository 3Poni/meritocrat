document.addEventListener('DOMContentLoaded', () => {
    let items = document.querySelectorAll('.item');
    let itemSpans = document.querySelectorAll(".item-span");
    console.log(itemSpans)
    items.forEach((item) => {
        item.addEventListener('mouseover', () => {
            item.style.backgroundColor = '#1A1C27';
            itemSpans.forEach((span) => {
                span.style.color = '#fff';
            });
        });

        item.addEventListener('mouseout', (event) => {
            let target = event.target;
            itemSpans.forEach((span) => {
                if (span === target) {
                    span.style.color = '#fff';
                } else {
                    span.style.color = '#000';
                }
            });
            item.style.backgroundColor = '#fff';
        });
    });
});