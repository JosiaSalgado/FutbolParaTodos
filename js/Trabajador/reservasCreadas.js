let reservas = document.querySelector('.container-reservas');

listeners();


function listeners() {
    reservas.addEventListener('click', leerInfo);
}


function leerInfo(e) {
    console.log(e.target);
    if (e.target.classList.contains('btn-success')){        
        let reserva = e.target.parentElement.parentElement;
        borrarReserva(reserva);

    }else if(e.target.classList.contains('bi-check-lg')){
        let reserva = e.target.parentElement.parentElement.parentElement;
        borrarReserva(reserva);
    }
}

function borrarReserva(e) {
    let resultado = window.confirm('Estas Seguro de que quiere Confirmar la reserva?');
    if(resultado){
        e.classList.add('d-none');
    }
    

}
