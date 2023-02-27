# Arrays.

El índice es la forma en que accedemos a los elementos de los arrays. En JavaScript, los índices empiezan desde 0, es decir, la primera posición es el índice 0. Un array se inicia mediante la sintaxis de corchetes [] y es tipo de dato objeto.


* var array = [1,2,3,4].

Para acceder a los elemento utilizamos:

array[indice];

para saber la cantidad de los elemento del array utilizamos **length**

* var array = [1,2,3,4]
var longitud = array.length
console.log(longitud) 

**Entonces, para acceder a un elemento del array, únicamente podrás utilizar los índices desde el 0 hasta array.length -1. Si se accede a un índice que no existe, devolverá undefined.**

## Qué es la mutabilidad en los arrays.

La mutabilidad hace referencia a la capacidad de una estructura de datos a cambiar. Esto permite cambiar los valores de los elementos de un array cuando accedemos a sus elementos mediante un índice.

var nombres = ["Andres", "Ramiro", "Silvia"]
// Accedemos y mutamos el segundo elemento
nombres[1] = "Platzi"

console.log(nombres)
// ["Andres", "Platzi", "Silvia"]

## Qué son los métodos de arrays
Los métodos de arrays son funcionalidades extra. Es semejante a las funciones, pero se accede mediante la notación punto array.metodo(argumentos).

Existen métodos mutables, es decir, que cambian el array original. Estos métodos son:

* push
* unshift
* pop
* shift

