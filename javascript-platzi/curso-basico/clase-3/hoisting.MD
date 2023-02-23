# Hoisting.

Hoisting nos ayuda a describir que las declaraciones de vaiables y funciones son desplazadas a la parte superior de scope mas cercano. Esto sucede solamente con las declaraciones y no con las asignaciones.

El codigo procede a permanecer igual, solo que el motor de javaScript lo interpreta de cierta manera, en el caso de la variables solamente sucede cuando son declaradas con var.

* Hoisting en variables declaradas con var.

¿Que sucede si declaramos el siguiente codigo?

**console.lo(nombre);
var nombre = "Andres"**

Lo que va a pasar es que el console.log va a devolver un undefined, ya que esta haciendo referencia a una variable que no esta declarada aun.

Lo que java esta realizando es lo siguiente.

(// Hoistin: Declara y asigna undefined
var nombre = undefined
console.log(nombre)// undefined
nombre = "Andres").


Hoisting en Funciones.

Que sucede en el siguiente codigo.

(console.log( saludar() )

function saludar() {
  return "Hola"
})

La respuesta es "Hola", porque al invocar una función que no está declarada, JavaScript la eleva y por eso podemos invocar una función antes de declararla.

Pero, lo que realmente sucede es que JavaScript guarda la función en memoria en la fase de creación de un contexto de ejecución, no asigna undefined como con las variables.




