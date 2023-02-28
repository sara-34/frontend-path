# Filter Y Map

Estos son metodos del array que sirve para recorrerlos y devolver un valor array con nuevos resultados.

## Metodo filter.

El metodo filter consiste en crear un nuevo array a partir de los elementos originales filtrados mediante una funcion(callback) que indica la condicion a cumplir y es inmutable.
(Si la condicion se cumple retorna el elemento completo).

El método filter recibe dos argumentos:

* La función que itera y evalúa si cada elemento del array si cumple con la condición especificada (obligatorio).

* Un objeto al que puede hacer referencia el contexto this en la función. Si se lo omite, será undefined. Recuerde que this es diferente según el lugar donde sea invocado.

## La función, que recibe como argumento el método filter, utiliza tres parámetros:

* El valor actual del elemento iterado. Es decir, si es la primera iteración, será el primer elemento, y así sucesivamente.

* El índice del elemento iterado. Es decir, si es la primera iteración, será el índice 0, y así sucesivamente.


* El array que está iterando.

# Map

El metodo map es inmutable y consiste en crear un nuevo array a partir de los elementos originales transformados mediante una funcion.

**Recibe dos argumentos.**
* La función que itera y transforma cada elemento del array (obligatorio).

* Un objeto al que puede hacer referencia el contexto this en la función. Si se lo omite, será undefined. Recuerde que this es diferente según el lugar donde sea invocado.

## La función, que recibe como argumento el método map, utiliza tres parámetros opcionales:

* El valor actual del elemento iterado. Es decir, si es la primera iteración, será el primer elemento, y así sucesivamente.

* El índice del elemento iterado. Es decir, si es la primera iteración, será el índice 0, y así sucesivamente.

* El array que está iterando.


