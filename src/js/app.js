document.addEventListener('DOMContentLoaded', function() {

    eventListeners();

    validacion();
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
}

function eventListeners() {
    //Muestra campos condicionales
    const metodoContacto = document.querySelectorAll('input[name="contacto[contacto]"]');
    metodoContacto.forEach(input => input.addEventListener('click', mostrarMetodosContacto));
};

function mostrarMetodosContacto(event) {
    const contactoDiv = document.querySelector('#contacto');
    console.log('its happen');

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

    } else {
        contactoDiv.innerHTML = `
            <label for="email" class="form-label">E-mail: </label>
            <input type="email" id="email" class="form-control" placeholder="Tu E-mail" name="contacto[email]" required>
            <span class="invalid-feedback">Ingresa tu E-mail.</span>
        `;
    }
}