document.addEventListener('DOMContentLoaded', function() {

    iniciarApp();
});
function iniciarApp() {
    validacion();
    eventListeners();
    buscarPorFecha();
    crearGaleria();
    seleccionarFecha();
};
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
    const plantelFooter = document.querySelectorAll('input[name="plantel-footer"]');
    metodoContacto.forEach(input => input.addEventListener('click', mostrarMetodosContacto));
    plantelFooter.forEach(input => input.addEventListener('click', plantelMapa));
};
function plantelMapa(event) {
    console.log('hi');
    const plantelMapa = document.querySelector('#plantel-mapa');
    let plantel = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.4414695268347!2d-98.90222885021497!3d19.263158751006234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce1ec99c9cfe8b%3A0xe234a05ac680ee66!2sAv.%20Cuauht%C3%A9moc%20Pte.%2043%2C%20Salitreria%2C%2056600%20Chalco%20de%20D%C3%ADaz%20Covarrubias%2C%20M%C3%A9x.!5e0!3m2!1ses-419!2smx!4v1645726965874!5m2!1ses-419!2smx';

    if (event.target.value === 'valle') {
        plantel = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1331.517655788919!2d-98.94464262925123!3d19.277988542737923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce1c157e59e573%3A0xfb8e18f62463f56!2sPol%C3%ADgono%201%2C%20Alfredo%20Baranda%2C%2056610%20Valle%20de%20Chalco%20Solidaridad%2C%20M%C3%A9x.!5e0!3m2!1ses-419!2smx!4v1645727432084!5m2!1ses-419!2smx'
    };
    plantelMapa.innerHTML = `
        <iframe src="${plantel}" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        `;
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
    };
};
function crearGaleria(){
    const galeria = document.querySelector('.galeria-imagenes');

    if (galeria) {
        for(let i = 1; i <= 6; i++){
            const imagen = document.createElement('div');
            imagen.classList.add("col-6","col-md-4","col-lg-2","d-flex","justify-content-center","mb-1");
            imagen.innerHTML = `
                <img width="200" height="300" loading="lazy" src="build/img/galeria/${i}.webp" alt="Imagen Galería">
            `;
            imagen.onclick = function() {
                mostrarImagen(i);
            }
            galeria.appendChild(imagen);
        };
    };
};
function mostrarImagen(id) {
    const imagen = document.createElement('picture');
    imagen.innerHTML = `
        <img width="200" height="300" loading="lazy" src="build/img/galeria/${id}.webp" alt="Imagen Galería">
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
};
function seleccionarFecha() {
    const inputFecha = document.querySelector('#fecha-cita');
    const horaCita = document.querySelector('#hora-cita');
    let diaNombre = '';
    let horaMaxima = '';
    if (inputFecha) {
        inputFecha.addEventListener('input', function (e) {
            const dia = new Date(e.target.value).getUTCDay();
            
            if ( [0].includes(dia)) {
                diaNombre = 'l Domingo';
                horaMaxima = '12:45';
            } else if ([6].includes(dia)) {
                diaNombre = 'l Sábado';
                horaMaxima = '13:45';
            } else {
                diaNombre = ' Lunes a Viernes'
                horaMaxima = '17:45';
            }
    
            horaCita.innerHTML = `
                <label class="form-label" for="hora">Hora de${diaNombre} (09:00 - ${horaMaxima})</label>
                <input class="form-control" type="time" id="hora" min="09:00" max="${horaMaxima}" name="contacto[hora]" required>
                <span class="invalid-feedback">Elige una Hora Válida.</span>
            `;
        });
    }
};
function buscarPorFecha() {
    const fechaInput = document.querySelector('#fecha-listado');
    if (fechaInput) {
        fechaInput.addEventListener('input', (e) => {
            const fechaSeleccionada = e.target.value;
            window.location = `?fecha=${fechaSeleccionada}`;
        });
    };
};