const animales = [
  { nombre: 'Perro',    imagen: '/animales/img/perro.png' },
  { nombre: 'Gato',     imagen: '/animales/img/gato.png' },
  { nombre: 'Elefante', imagen: '/animales/img/elefante.png' },
  { nombre: 'Leon',     imagen: '/animales/img/leon.png' },
  { nombre: 'Conejo',   imagen: '/animales/img/conejo.png' },
  { nombre: 'Obeja',    imagen: '/animales/img/obeja.png' },
  { nombre: 'Zebra',    imagen: '/animales/img/zebra.png' },
  // Agrega más animales según sea necesario
];

let indiceAnimalActual;
let opcionesDesordenadas;
let intentosRestantes;

function puntuacion(){
  puntos = 0;
}


function iniciarJuego() {
    intentosRestantes = 3;
    actualizarVisualizacionIntentos();
    indiceAnimalActual = Math.floor(Math.random() * animales.length);
    mostrarImagenAnimal();
}

function mostrarImagenAnimal() {
    const imagenAnimal = document.getElementById('animal-image');
    imagenAnimal.src = animales[indiceAnimalActual].imagen;
}

function verificarRespuesta() {
    const entradaUsuario = document.getElementById('animal-input').value.toLowerCase();
    const mensajeResultado = document.getElementById('result-message');

    if (entradaUsuario === animales[indiceAnimalActual].nombre.toLowerCase()) {
        mensajeResultado.innerText = '¡Correcto! Es un ' + animales[indiceAnimalActual].nombre;
        reiniciarJuego();
    } else {
        intentosRestantes--;
        actualizarVisualizacionIntentos();

        if (intentosRestantes === 0) {
            mensajeResultado.innerText = '¡Fin del juego! La respuesta correcta era ' + animales[indiceAnimalActual].nombre;
            reiniciarJuego();
        } else {
            mensajeResultado.innerText = `¡Incorrecto! ${intentosRestantes} intentos restantes. Intenta de nuevo.`;
        }
    }
}

function reiniciarJuego() {
    setTimeout(() => {
        document.getElementById('animal-input').value = '';
        document.getElementById('result-message').innerText = '';
        iniciarJuego();
    }, 1000); // Espera 2 segundos antes de comenzar un nuevo juego
}

function actualizarVisualizacionIntentos() {
    document.getElementById('attempts-count').innerText = intentosRestantes;
}

// Inicia el juego cuando la página se carga
iniciarJuego();

