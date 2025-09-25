const singleBtn = document.querySelector('.wp-element-button');

singleBtn.addEventListener('mouseover', () => {
    singleBtn.classList.add("is-mouseover");
});

singleBtn.addEventListener('mouseleave', () => {
    singleBtn.classList.remove("is-mouseover");
});