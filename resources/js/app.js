import './bootstrap';

import '@fortawesome/fontawesome-free/css/fontawesome.css';
import '@fortawesome/fontawesome-free/css/brands.css';
import '@fortawesome/fontawesome-free/css/regular.css';
import '@fortawesome/fontawesome-free/css/solid.css';
import '@fortawesome/fontawesome-free/css/v4-shims.css';

document.addEventListener("DOMContentLoaded", function () {
    const body = document.querySelector("body");
    const sidebar = body.querySelector(".sidebar");
    const toggle = body.querySelector(".toggle");
    const modeSwitch = body.querySelector(".toggle-switch");
    const modeText = body.querySelector(".mode-text");

    // Función para cambiar el modo
    function toggleDarkMode() {
        body.classList.toggle("dark");

        // Guardar el estado del modo en el almacenamiento local
        const isDarkMode = body.classList.contains("dark");
        localStorage.setItem("darkMode", JSON.stringify(isDarkMode));

        // Actualizar el texto del botón de cambio de modo
        modeText.innerText = isDarkMode ? "Light Mode" : "Dark Mode";
    }

    // Evento para cambiar el modo al hacer clic en el botón de cambio de modo
    modeSwitch.addEventListener("click", toggleDarkMode);

    // Evento para abrir/cerrar el sidebar al hacer clic en el botón de toggle
    toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });

    // Verificar si el modo oscuro está activado en el almacenamiento local
    const isDarkMode = JSON.parse(localStorage.getItem("darkMode"));
    if (isDarkMode) {
        body.classList.add("dark");
    }
});
function togglePasswordVisibility() {
    var passwordInput = document.getElementById('contrasena');
    var eyeIcon = document.querySelector('.eye-icon i');

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye');
    } else {
        passwordInput.type = "password";
        eyeIcon.classList.remove('fa-eye');
        eyeIcon.classList.add('fa-eye-slash');
    }
}

document.addEventListener('DOMContentLoaded', function () {
    // Obtener el ícono del ojo
    var eyeIcon = document.querySelector('.eye-icon');

    // Agregar un evento de clic al ícono del ojo
    eyeIcon.addEventListener('click', togglePasswordVisibility);
});

