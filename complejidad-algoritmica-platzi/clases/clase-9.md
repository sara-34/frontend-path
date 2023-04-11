# Notación Big-O en complejidad temporal
Analicemos los siguientes casos para calcular la notación Big-O en complejidad temporal, independiente de la capacidad de procesamiento de tu computador, en estos casos evaluaremos de manera general el peor de los casos que demora un algoritmo en un sistema igual.

- Variables: tienen una notación constante O(1) debido a que al crear una variable se demora un tiempo constante.
- Condicionales: tienen una notación constante O(1) debido a que procesa la condición en un tiempo constante.
- Ciclos repetitivos: tienen una notación lineal O(n) debido a que en el peor de los casos, estos ejecutan n veces una instrucción.
- Ciclos repetitivos anidados: tienen una notación cuadrática O(n^2) debido a que cada ciclo interno se ejecuta n veces el ciclo externo.

## Notaciones básicas en complejidad temporal de un algoritmo
Notación Big-O en complejidad espacial
Analicemos los siguientes casos para calcular la notación Big-O en complejidad espacial, independiente de la capacidad de procesamiento de tu computador, en estos casos evaluaremos de manera general el peor de los casos el espacio que ocupa un algoritmo en memoria.

- Variables: tienen una notación constante O(1) debido a que guarda un espacio de memoria.
- Condicionales: tienen una notación constante O(1) debido a que procesa la condición en un espacio de memoria.
- Ciclos repetitivos: tienen una notación lineal O(1) debido a que procesa el bucle en un espacio de memoria.
- Arrays: tienen una notación lineal O(n) porque guarda en memoria n elementos.
- Matrices o array de arrays: tienen una notación cuadrática O(n^2) porque por cada elemento del array guarda otro array de n elementos.

## Notaciones básicas en complejidad espacial de un algoritmo
También puedes ver esta representación gráfica, donde cada cuadrado es un espacio de memoria utilizado por arrays y matrices (array de arrays).

## Representación de arrays y matrices en memoria
Simplificar la notación
Simplificar la notación consiste en representar el crecimiento del algoritmo con una notación general, en lugar de una función específica. En otras palabras, eliminar las constantes que en este análisis no cambia drásticamente el resultado final.

## Notaciones simplificadas

El crecimiento siempre importa
La complejidad de un algoritmo nace de cuántos recursos utiliza el algoritmo al ejecutarse. La notación Big-O solo se enfoca en el crecimiento en el peor de los casos, no en los valores que puede tener un algoritmo en segundos o bytes.