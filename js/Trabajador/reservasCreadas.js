let reservas = document.querySelector('.container-reservas');
let reserva = document.querySelectorAll('.reservaBox');
let canchaSlc = document.querySelector('#canchaSlc');
let horaSlc = document.querySelector('#horaSlc');
let listaReserva = [];




listeners();
guardarReservas();

let objeto = {
    numero: '',
    hora: ''
}









//Funciones 


function listeners() {
    reservas.addEventListener('click', leerInfo);

    canchaSlc.addEventListener('change', e => {
        objeto.numero = e.target.value;
        filtrar();
        console.log(objeto);
    })


    horaSlc.addEventListener('change', e => {
        objeto.hora = e.target.value;
        console.log(objeto);
    })

}

//borrar reservas
function leerInfo(e) {
    console.log(e.target);
    if (e.target.classList.contains('btn-success')) {
        let reserva = e.target.parentElement.parentElement;
        borrarReserva(reserva);

    } else if (e.target.classList.contains('bi-check-lg')) {
        let reserva = e.target.parentElement.parentElement.parentElement;
        borrarReserva(reserva);
    }
}

function borrarReserva(e) {
    let resultado = window.confirm('Estas Seguro de que quiere Confirmar la reserva?');
    if (resultado) {
        e.classList.add('d-none');
    }


}

function guardarReservas() {
    reserva.forEach(e => {
        let reservaInfo = {
            cancha: e.querySelector('.cancha span').innerHTML,
            fecha: e.querySelector('.fecha span').innerHTML,
            hora: e.querySelector('.hora span').innerHTML,
            nombre: e.querySelector('.nombre span').innerHTML,
            telefono: e.querySelector('.telefono span').innerHTML,
            direccion: e.querySelector('.direccion span').innerHTML,
            correo: e.querySelector('.correo span').innerHTML
        }


        listaReserva.push(reservaInfo);

    })
    console.log(listaReserva);
}


function imprimirHTML(e) {
    e.forEach(x => {
        let div = document.createElement('div');
        div.innerHTML = `
        <div class="col-12 mt-3 reservaBox border border-warning d-flex ">
        <div class="numeroCancha col-2 border-end d-flex align-items-center ">
            <h3 class='text-center cancha'>Numero de cancha: <span>${x.cancha}</span></h3>
        </div>

        <div class="infoArriendo col-4 d-flex flex-column justify-content-center">
            <h3 class="ms-3 fecha">
               <span>${x.fecha}</span>
            </h3>
            <p class="ms-4 fs-5 mb-3 hora">
                <span>${x.hora}</span>
            </p>
        </div>

        <div class="infoArriendo col-4">
            <div class='mt-3'>
                <h4 class="py-1 mt-1 mb-0 p-0 nombre"><strong>Nombre: </strong><span>${x.nombre}</span></h4>
                <p class="m-0 py-1 datos telefono"><strong>Telefono: </strong><span>${x.telefono}</span></p>
                <p class="m-0 py-1 datos direccion"><strong>Direccion: </strong><span>${x.direccion}</span></p>
                <p class="m-0 py-1 datos correo "><strong>Correo: </strong><span>${x.correo}</span></p>
            </div>
        </div>

        <div class="botones col-2 align-items-center d-flex ">
            <button class="btn btn-success me-3 aceptar"><i class="bi bi-check-lg"></i></button>
            <button class="btn btn-danger rechazar"><i class="bi bi-x-lg"></i></button>
        </div>
    </div>
        `;

        reservas.appendChild(div);

    })
}

function filtrar() {
    let filtro = listaReserva.filter(filtrarCancha);
    console.log(filtro.length);
    if (filtro.length) {
        limpiarHTML();
        imprimirHTML(filtro);
    } else {
        limpiarHTML();
        errorMessage();
    }
}


function filtrarCancha(e) {
    if (objeto.numero) {
        return objeto.numero === e.cancha;
    } else {
        return e;
    }
}

function limpiarHTML() {
    while (reservas.firstChild) {
        reservas.removeChild(reservas.firstChild);
    }
}

function errorMessage() {
    
    let h1 = document.createElement('div');
    h1.innerHTML = ` <div class='col-12 mt-4'>
                        <h1 class="text-center text-danger">No hay reservaciones para con el filtro seleccionado</h1>
                     </div>
    `;
    reservas.appendChild(h1);
}