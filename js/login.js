let inptName = document.getElementById('name');
let inptPass = document.getElementById('password');
let nombreMensaje = document.getElementById('nameMessage');
let passMensaje = document.getElementById('passMessage');
let btnSubmit = document.getElementById('btn-submit');

listeners();

function listeners() {
    btnSubmit.addEventListener('click', e=>{
        
        
         if(inptName.value == ''){
             nombreMensaje.classList.add('text-danger')
            
      
             setTimeout(function(){
                 nombreMensaje.classList.remove('text-danger')
                
             },4000)

         }else if(inptPass.value == ''){
             passMensaje.style.display = 'block';

             setTimeout(function(){
                passMensaje.style.display = 'none';
             },4000)
         }
    })
}