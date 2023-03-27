# Algoritmo de un reloj utilizando funciones
Recordarás el algoritmo de un reloj que realizaste, existían pasos en el diagrama de flujo que se repetían. Utilicemos funciones para encapsular esa lógica y reutilizarla según corresponda.

Primeramente, definimos las variables iniciales de horas, minutos y segundos en un valor igual a cero. Estas variables seguían un formato establecido para mostrarlo como tiempo.

H = 0
M = 0
S = 0

Formato = 00:00:00
Después, validábamos cuando la variable horas y minutos era igual a 60; y la variable horas era igual a 24.

Si S == 60 entonces S = 0
Si M == 60 entonces M = 0
Si H == 24 entonces H = 0
Este comportamiento sigue un patrón, validamos que un tipo de variable esté por debajo de un límite. Entonces, encapsulemos esta lógica en una función para solamente invocarla cuando sea necesario.

Representemos como parámetros a las variables con el nombre de tipo y el valor máximo como limite. Dentro de la función utilizaremos un condicional para comprobar si tipo es igual a limite, si esto es verdadero, entonces regresamos un valor de cero, caso contrario, regresamos el mismo valor de tipo.

function validar (tipo, limite)
    if (tipo == limite)
        return 0
    else
        return tipo
De esta manera, ya podemos utilizarlo en nuestro algoritmo:

S = validar(S, 60)
M = validar(M, 60)
H = validar(H, 24)