document.querySelector(".menu-btn").addEventListener("click", () => {
  document.querySelector(".nav-menu").classList.toggle("show");
});

ScrollReveal().reveal('.header');
ScrollReveal().reveal('.personal', { delay: 500 });
ScrollReveal().reveal('.talleres', { delay: 500 });
ScrollReveal().reveal('.instalaciones', { delay: 500 });
ScrollReveal().reveal('.contacto', { delay: 500 });
ScrollReveal().reveal('footer', { delay: 500 });



