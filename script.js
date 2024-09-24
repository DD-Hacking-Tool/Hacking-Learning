// Smooth Scrolling for Navigation Links
document.querySelectorAll('nav a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });
});

// Fade-In Animation for Courses Section
window.addEventListener('scroll', function() {
    const courses = document.querySelector('#courses');
    const coursesPosition = courses.getBoundingClientRect().top;
    const screenPosition = window.innerHeight / 1.3;

    if (coursesPosition < screenPosition) {
        courses.classList.add('fade-in');
    }
});

// Toggle Mobile Menu
const menuToggle = document.querySelector('.menu-toggle');
const nav = document.querySelector('nav ul');

menuToggle.addEventListener('click', function() {
    nav.classList.toggle('slide');
});

// Scroll-to-Top Button
const scrollTopBtn = document.createElement('button');
scrollTopBtn.innerHTML = "&#8679;";
scrollTopBtn.classList.add('scroll-top-btn');
document.body.appendChild(scrollTopBtn);

window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
        scrollTopBtn.style.display = 'block';
    } else {
        scrollTopBtn.style.display = 'none';
    }
});

scrollTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});
