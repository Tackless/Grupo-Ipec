document.addEventListener('DOMContentLoaded', function() {

    eventListeners();
    validacion();
    crearGaleria();
});
// Example starter JavaScript for disabling form submissions if there are invalid fields
function validacion() {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
};

function eventListeners() {
    //Muestra campos condicionales
    const metodoContacto = document.querySelectorAll('input[name="contacto[contacto]"]');
    metodoContacto.forEach(input => input.addEventListener('click', mostrarMetodosContacto));
};

function mostrarMetodosContacto(event) {
    const contactoDiv = document.querySelector('#contacto');

    if (event.target.value === 'telefono') {
        contactoDiv.innerHTML = `
            <label for="tel" class="form-label">Teléfono: </label>
            <input type="tel" id="tel" class="form-control" placeholder="Tu Teléfono" name="contacto[telefono]" required>
            <span class="invalid-feedback">Escribe tu teléfono</span>
        `;
        // <p>Elija la fecha y la hora para la llamada</p>

        // <label class="form-label" for="fecha">Fecha</label>
        // <input class="form-control" type="date" id="fecha" name="contacto[fecha]" required>
        
        // <label class="form-label" for="hora">Hora</label>
        // <input class="form-control" type="time" id="hora" min="09:00" max="18:00" name="contacto[hora]" required></input>

    } else if (event.target.value === 'email') {
        contactoDiv.innerHTML = `
            <label for="email" class="form-label">E-mail: </label>
            <input type="email" id="email" class="form-control" placeholder="Tu E-mail" name="contacto[email]" required>
            <span class="invalid-feedback">Ingresa tu E-mail.</span>
        `;
    } else {
        contactoDiv.innerHTML = `
            <label for="tel" class="form-label">Teléfono: </label>
            <input type="tel" id="tel" class="form-control mb-1" placeholder="Tu Teléfono" name="contacto[telefono]" required>
            <span class="invalid-feedback">Escribe tu teléfono</span>

            <label for="email" class="form-label">E-mail: </label>
            <input type="email" id="email" class="form-control" placeholder="Tu E-mail" name="contacto[email]" required>
            <span class="invalid-feedback">Ingresa tu E-mail.</span>
        `;
    }
};

function crearGaleria(){
    const galeria = document.querySelector('.galeria-imagenes');

    for(let i = 1; i <= 6; i++){
        const imagen = document.createElement('div');
        imagen.classList.add("col-6","col-md-4","col-lg-2","d-flex","justify-content-center","mb-1");
        imagen.innerHTML = `
            <img loading="lazy" src="build/img/galeria/${i}.webp" alt="Imagen Galería">
        `;
        imagen.onclick = function() {
            mostrarImagen(i);
        }
        galeria.appendChild(imagen);
    }
};
function mostrarImagen(id) {
    const imagen = document.createElement('picture');
    imagen.innerHTML = `
        <img loading="lazy" src="build/img/galeria/${id}.webp" alt="Imagen Galería">
    `;

    // Crear el overlay con la imagen
    const overlay = document.createElement('div');
    overlay.appendChild(imagen);
    overlay.classList.add('overlay');
    overlay.onclick = function(){
        const body = document.querySelector('body');
        body.classList.remove('fijar-body');
        overlay.remove();
    }

    // Boton para cerrar el modal 
    const cerrarModal = document.createElement('p');
    cerrarModal.textContent = ('X');
    cerrarModal.onclick = function(){
        const body = document.querySelector('body');
        body.classList.remove('fijar-body');
        overlay.remove();
    }
    cerrarModal.classList.add('btn-cerrar');

    overlay.appendChild(cerrarModal);

    // Añadirlo a HTML
    const body = document.querySelector('body');
    body.appendChild(overlay)
    body.classList.add('fijar-body');
}