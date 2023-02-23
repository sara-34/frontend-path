# Coerción.

La coerción implícita consiste en la transformación de tipos mediante la ayuda de JavaScript. Esto ocurre en operaciones de diferentes tipos, ya que es un lenguaje débil y dinámicamente tipado.

## Ejemplos:

4 + "7" // 47
4 * "7" // 28
2 + true // 3
false - 3 // -3
!3 // false


## Qué es la coerción explícita.

La coerción explícita es la transformación de tipos de datos que controlamos el resultado. Para realizar estas transformaciones utiliza las funciones **Number()**, **String()** y **Boolean()**, para convertir a tipo número, string y lógico, respectivamente.

## Ejemplo.

Number("47") // 47
String(51) // "51"
Boolean(1) // true

**Puedes utilizar la palabra reservada TYPEOF para comprobar el tipo de dato transformado.**