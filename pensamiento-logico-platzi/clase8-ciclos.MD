# Bucles repetitivos.

Un bucle(loop) o ciclos repetitivos son una estructura de control que te permiten realizar una o varias instrucciones mientras una condicion sea verdadera.

**Los bucles siempre van a necesitar un valor inicial y un incremento.**

Tipos de ciclos repetitivos.

* For (para).
* While (mientras).
* Do-while (haz algo mientras).

## For.

Para el ciclo for conocemos la cantidad de veces que la estructura repetira una o varias instrucciones.

Estructura:

for (inicio; comparacion; incremento){
    "Bloque de codigo"
}

Condicion:
* Inicio: Se debe inicializar a un variable que sera evaluada en la expresion a comparar.

* Comparacion: es un expresion que debe cumplir la variable inicial, cuando no se cumpla, el ciclo termina.

* Incremento: son los intervalos que cambiara la variable inicial, mientras cumpla con la expresion de comparacion.

## While.

Para el ciclo while no conocemos la cantidad de veces que la estructura repetira una o varias instrucciones. 

Estructura.

while (condicion){
    "Bloque de codigo"
    "Cambiar la condicion para salir del bucle"
}

**Nota: En este caso la condicion es una expresion logica a evaluar, si es verdadero repite el bloque de codigo, si es falso el ciclo se termina.**

## Do-while.

Un ciclo do-while sigue la misma tendencia que un while, la diferencia está en que **do-while ejecuta el bloque de código una vez y después evalúa la condición.**

### Estructura.

do {
    "Bloque de codigo"
    "Cambiar la condicion para salir del bucle"
}
while (condicion).
