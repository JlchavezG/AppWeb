// === modo-oscuro.js ===

// Elemento del botón
const botonModo = document.getElementById("boton-modo");

// Cargar preferencia desde localStorage
document.addEventListener("DOMContentLoaded", () => {
  const modoGuardado = localStorage.getItem("modoOscuro");
  if (modoGuardado === "activado") {
    document.body.classList.add("modo-oscuro");
    botonModo.textContent = "☀️";
  } else {
    botonModo.textContent = "🌙";
  }
});

// Evento click para cambiar modo
botonModo.addEventListener("click", () => {
  document.body.classList.toggle("modo-oscuro");
  
  // Guardar preferencia
  if (document.body.classList.contains("modo-oscuro")) {
    localStorage.setItem("modoOscuro", "activado");
    botonModo.textContent = "☀️";
  } else {
    localStorage.setItem("modoOscuro", "desactivado");
    botonModo.textContent = "🌙";
  }
});