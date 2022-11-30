const app = document.getElementById('typewriter');

/*Se refiere a la variable que permitira que el titulo ubicado en la sección parpadee como si se tratara de una maquina de escribir.*/
const typewriter = new Typewriter(app, {
    loop:true,
    delay:75
});


/*Por medio de las funciones Typewriter, el texto asignado sera aquel que se muestre en iteración en pantalla. 42 min*/ 
typewriter
.typeString('Tu consultorio médico.')
.pauseFor(600)
.start();