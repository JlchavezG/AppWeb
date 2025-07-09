// === main.js ===

document.addEventListener("DOMContentLoaded", () => {
  const btnIrArriba = document.getElementById("btn-ir-arriba");

  // Detectar scroll
  window.addEventListener("scroll", () => {
    if (window.scrollY > 300) {
      btnIrArriba.classList.add("visible");
    } else {
      btnIrArriba.classList.remove("visible");
    }
  });

  // Ir arriba al hacer clic
  btnIrArriba.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
});