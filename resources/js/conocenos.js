// codigo para animaciones sencillas al hacer scroll y otras mejoras esteticas

document.addEventListener("DOMContentLoaded", function () {
    // selecciona todas las tarjetas de integrantes
    const cards = document.querySelectorAll(".card");
  
    // observa cuando entran en el viewport para aplicar animacion
    const observer = new IntersectionObserver(
      entries => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add("animate__fadeInUp");
            entry.target.classList.add("animate__animated");
            observer.unobserve(entry.target);
          }
        });
      },
      {
        threshold: 0.1
      }
    );
  
    // aplica el observador a cada tarjeta
    cards.forEach(card => {
      observer.observe(card);
    });
  
    // agrega efecto de resaltar la tarjeta al pasar el mouse
    cards.forEach(card => {
      card.addEventListener("mouseenter", () => {
        card.style.boxShadow = "0 8px 16px rgba(0, 0, 0, 0.2)";
        card.style.transform = "scale(1.03)";
      });
      card.addEventListener("mouseleave", () => {
        card.style.boxShadow = "0 4px 6px rgba(0, 0, 0, 0.1)";
        card.style.transform = "scale(1)";
      });
    });
  
    // boton para volver al inicio con scroll suave si existe
    const backToTop = document.querySelector("#backToTop");
    if (backToTop) {
      backToTop.addEventListener("click", function () {
        window.scrollTo({
          top: 0,
          behavior: "smooth"
        });
      });
    }
  });