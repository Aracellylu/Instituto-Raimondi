function updateSelectOptions() {
    const select = document.getElementById('carreraSelect');
    const tipoCarrera = document.querySelector('input[name="tipoCarrera"]:checked').value;

    // Limpiar las opciones existentes
    select.innerHTML = '<option selected disabled>Seleccione...</option>';

    if (tipoCarrera === 'tecnicas') {
        // Opciones para Carreras Técnicas
        const carrerasTecnicas = ['Ingeniería de Sistemas', 'Técnico en Redes', 'Diseño Gráfico'];
        carrerasTecnicas.forEach(carrera => {
            const option = document.createElement('option');
            option.value = carrera; // Asegúrate de que el valor esté correctamente asignado
            option.textContent = carrera;
            select.appendChild(option);
        });
    } else if (tipoCarrera === 'libres') {
        // Opciones para Cursos Libres
        const cursosLibres = ['Curso de Fotografía', 'Curso de Programación', 'Curso de Marketing'];
        cursosLibres.forEach(curso => {
            const option = document.createElement('option');
            option.value = curso; // Asegúrate de que el valor esté correctamente asignado
            option.textContent = curso;
            select.appendChild(option);
        });
    }
}

document.getElementById('infoForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita el envío del formulario por defecto
    const formData = new FormData(this);
    fetch('https://script.google.com/macros/s/AKfycbyszCh49l2KA-PF_lYdti_y8HdkqYEJ6i7jYLEZo5bqyoYmp3zbuM0uMNQ0lsfpIAL3/exec', { // Reemplaza con tu URL
        method: 'POST',
        body: formData,
    })
    .then(response => response.text())
    .then(data => {
        alert(data); // Muestra el mensaje de respuesta
        this.reset(); // Resetea el formulario
    })
    .catch(error => console.error('Error:', error));
});

            // Obtener el botón
            const scrollToTopBtn = document.getElementById("scrollToTopBtn");

            // Mostrar el botón al desplazarse hacia abajo
            window.addEventListener("scroll", () => {
                if (window.scrollY > 200) { // Muestra el botón después de desplazarse 200px
                    scrollToTopBtn.classList.add("show");
                } else {
                    scrollToTopBtn.classList.remove("show");
                }
            });

            // Función para desplazar hacia arriba al hacer clic en el botón
            scrollToTopBtn.addEventListener("click", () => {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            });
