// Scroll animations
const sections = document.querySelectorAll('.section');

window.addEventListener('scroll', () => {
  sections.forEach(section => {
    const sectionTop = section.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;

    if (sectionTop < windowHeight * 0.75) {
      section.classList.add('animate');
    } else {
      section.classList.remove('animate');
    }
  });
});
function openLink(url) {
    window.open(url, '_blank');
  }
  