- La complejidad espacial es diferente a la complejidad temporal. Los diferentes compiladores asignan un espacio distinto de memoria para almacenar variables.

- La diversidad de tamaños y formas con las que el compilador almacena información es interesante, pero para el propósito que tenemos, podemos simplificarlo a contar cuántas variables se definen para almacenar arreglos, números o cadenas.

- Ejemplos de complejidad espacial
El algoritmo contar recibe como parámetro un número y cuenta hasta ese número. ¿Qué se genera en el algoritmo? Una variable i que almacena un número.

```
function contar(n) {
    for (let i = 0; i< n; i++){
        console.log(i)
    }
}
```
- El algoritmo repetirArreglo recibe como parámetro un array y lo duplica, por ende, está generando un espacio en memoria similar al array inicial.

```
function repertirArreglo (array) {
    let arregloRepetido = [...array]
    return arregloRepetido
}
```
- El algoritmo convertirAString recibe como parámetro un array de números, y por cada número lo convierte a string. De esta manera, se está generando un valor en memoria diferente, ya que los compiladores manejan los números y las palabras de diferente manera.

```
function convertirAString  (array) {
    let resultado = array.map(el => el.toString())
    return resultado
}
```

- El algoritmo generarMatriz recibe un valor numérico como parámetro para generar una array de arrays o una matriz. En consecuencia, se está generando un número de elementos igual al cuadrado del parámetro y una cantidad de arrays igual al valor del parámetro.

```
function generarMatriz (valor){
    let matriz = new Array(valor)
    for (let i = 0; i < valor; i++){
        matriz[i] = new Array(valor).fill(0)
    }
    return matriz
}

console.log( generarMatriz(5))

[
  [ 0, 0, 0, 0, 0 ],
  [ 0, 0, 0, 0, 0 ],
  [ 0, 0, 0, 0, 0 ],
  [ 0, 0, 0, 0, 0 ],
  [ 0, 0, 0, 0, 0 ]
]

```

