# Condicionales.

## Utilizar condicional if-else.

Un condicional **if** evalua una expresion si es verdadera, la palabra reservada **else** evalua cuando la expresion **if** es falsa pero no es obligatorio colocarlo.

* if (condicion)
    "Bloque 1 en caso de que condicion sea verdadero"
else:
    "Bloque 2 en caso de que condicion sea falso"

# Switch.

La estructura switch es otra forma de evaluar condiciones, la diferencia con if es que las condiciones deben ser iguales a un caso o valor especifico.

Colocamos la palabra reservada switch y seguido de la variables o expresion a evaluar, despues colocamos cada caso con la palabra reservada case y el valor que debera ser igual a la expresion.

* switch (expresion) {
    case 1
        "Bloque 1"
    case 2
        "Bloque 2"   
    default: 
        "Bloque por defecto"
}
