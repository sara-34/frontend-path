Un bucle (loop) o ciclo repetitivo es una estructura de control que te permite realizar una o varias instrucciones mientras una condición sea verdadera.

Existen dos tipos de ciclos repetitivos:

For (para)
While (mientras)

## Qué es un ciclo for
Para el ciclo for conocemos la cantidad de veces que la estructura repetirá una o varias instrucciones.

for (condición) {
    // Bloque de código
}

* Inicio: se debe inicializar una variable que será evaluada en la expresión a comparar. Esta variable puede ser declarada dentro o fuera de la condición.

* Comparación: es una expresión que debe cumplir la variable inicial, cuando no se cumpla, el ciclo termina.

* Pasos: son los intervalos que cambiará la variable inicial, mientras cumpla con la expresión de comparación.
Cada una de las partes debe estar separa

## Qué es un ciclo for … of
El ciclo for ... of es una variación del ciclo for que se utiliza para recorrer los valores de los elementos de un array.

La estructura del ciclo for ... of es la siguiente:

for ( var elemento of array){
    //Bloque de código
}.

Por convención, se escribe la variable elemento en singular con respecto al nombre del array. Por ejemplo, si el nombre del array es datos, el nombre de la variable de cada elemento sería dato, y así sucesivamente.

* for (var dato of datos) { ... }
* for (var name of names) { ... }
* for (var number of numbers) { ... }
* for (var el of elements) { ... }