let currentIndex = 0;
const totalItems = document.querySelectorAll('.carousel-item').length;
const carousel = document.querySelector('.carousel');

// Function to move to the next or previous slide
function moveSlide(step) {
    currentIndex = (currentIndex + step + totalItems) % totalItems;  // Ensures the index loops
    carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
}

// Auto slide function
function autoSlide() {
    setInterval(() => {
        moveSlide(1); // Automatically move to the next slide
    }, 3000); // Change slide every 3 seconds (3000 ms)
}

// Start the auto sliding when the page loads
autoSlide();


const allHoverImages = document.querySelectorAll('.hover-container div img');
const imgContainer = document.querySelector('.img-container');

window.addEventListener('DOMContentLoaded', () => {
    allHoverImages[0].parentElement.classList.add('active');
});

allHoverImages.forEach((image) => {
    image.addEventListener('mouseover', () =>{
        imgContainer.querySelector('img').src = image.src;
        resetActiveImg();
        image.parentElement.classList.add('active');
    });
});

function resetActiveImg(){
    allHoverImages.forEach((img) => {
        img.parentElement.classList.remove('active');
    });
}