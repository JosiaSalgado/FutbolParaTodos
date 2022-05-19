let reservas = document.querySelector('.container-reservas');
let reserva = document.querySelectorAll('.reservaBox');
let canchaSlc = document.querySelector('#canchaSlc');
let horaSlc = document.querySelector('#horaSlc');
let fechaSlc = document.querySelector('#fechaSlc');
let objeto = {
    numero: '',
    hora: '',
    fecha: ''
}
let listaReserva = [];




listeners();
guardarReservas();



//Funciones 

function listeners() {

    canchaSlc.addEventListener('change', e => {
        objeto.numero = e.target.value;
        filtrar();
    })


    horaSlc.addEventListener('change', e => {
        objeto.hora = e.target.value;
        filtrar();
    })

    fechaSlc.addEventListener('change', e => {
        // let date = new Date()
        // let today = date.getFullYear()+'-'+0+(date.getMonth()+1)+'-'+date.getDate();
        objeto.fecha = e.target.value;
        filtrar();
    })

}

//borrar reservas
// function leerInfo(e) {
//     if (e.target.classList.contains('btn-success')) {
//         let reserva = e.target.parentElement.parentElement;   
//         // borrarReserva(reserva);

//     } else if (e.target.classList.contains('bi-check-lg')) {
//         let reserva = e.target.parentElement.parentElement.parentElement;
//         // borrarReserva(reserva);
//     }

//     if (e.target.classList.contains('rechazar')) {
//         let reserva = e.target.parentElement.parentElement;
//         // borrarReserva(reserva);

//     } else if (e.target.classList.contains('bi-x-lg')) {
//         let reserva = e.target.parentElement.parentElement.parentElement;
//         // borrarReserva(reserva);
//     }
// }


// function borrarReserva(e) {

//     let datosFechaHora = {
//         hora: e.querySelector('.hora span').innerHTML,
//         fecha: e.querySelector('.fecha span').innerHTML,
//         cancha: e.querySelector('.cancha span').innerHTML
//     }

//     e.classList.add('d-none');
//     //Borrar del array
//     listaReserva.forEach(x => {
//         if (x.fecha == datosFechaHora.fecha && x.hora == datosFechaHora.hora && x.cancha == datosFechaHora.cancha) {
//             let item = listaReserva.indexOf(x);
//             listaReserva.splice(item, 1)
//             console.log(listaReserva);
//             // window.location.reload();


//         }
//     })

// }


function guardarReservas() {
    reserva.forEach(e => {
        let reservaInfo = {
            cancha: e.querySelector('.cancha span').innerHTML,
            fecha: e.querySelector('.fecha span').innerHTML,
            hora: e.querySelector('.hora span').innerHTML,
            nombre: e.querySelector('.nombre span').innerHTML,
            telefono: e.querySelector('.telefono span').innerHTML,
            direccion: e.querySelector('.direccion span').innerHTML,
            correo: e.querySelector('.correo span').innerHTML,
            id: e.querySelector('.id span').innerHTML
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
                <p class="m-0 py-1 datos id d-none"><strong>Id: </strong><span>${x.id}</span></p>
            </div>
        </div>

        <div class="botones col-2 align-items-center d-flex ">
        <a href="../../php/trabajadores/aceptarReserva.php?id=${x.id}" class="btn btn-success me-3 aceptar"><i class="bi bi-check-lg"></i></a>
        <a href="../../php/trabajadores/eliminarReserva.php?id=${x.id}" class="btn btn-danger rechazar"><i class="bi bi-x-lg"></i></a>
        </div>
    </div>
        `;

        reservas.appendChild(div);

    })
}

function filtrar() {

    let filtro = listaReserva.filter(filtrarCancha).filter(filtrarHora).filter(filtrarFecha);

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
        return objeto.numero == e.cancha;

    } else {
        return listaReserva;
    }
}

function filtrarHora(e) {
    if (objeto.hora) {
        return objeto.hora == e.hora;

    } else {
        return listaReserva;
    }
}

function filtrarFecha(e) {
    if (objeto.fecha) {
        return objeto.fecha == e.fecha;

    } else {
        return listaReserva;
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