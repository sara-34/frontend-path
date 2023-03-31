# Complejidad temporal

Los metodos **performance.now()** y **console.time()** se utilizan para medir el tiempo entre dos lineas de codigo en **milisegundos**. La diferencia entre ambos es que **performance.now()** es mas preciso.

## Método performance.now.

El metodo performance.now() mide el tiempo en una determinada linea de codigo. 
**Se debe incluir dos invocaciones de este metodo y guardarlos en variables, luego calcular la diferencia para obtener el dato del tiempo empleado del algoritmo.**

```
const tiempoInicial = performance.now()
contar(5) // Algoritmo
const tiempoFinal = performance.now()
const duracion = tiempoFinal - tiempoInicial
console.log(duracion)
```

*Ten en cuenta que performance.now() pertenece al objeto global.*

## Metodo console.time

El metodo **console.time()** mide el tiempo en una determinada linea de codigo. Se necesitan dos invocaciones de este metodo y especificando como **argumento el nombre de esta operacion** La segunda invocacion cuando se termine de poner la linea de codigo es **console.timeEnd()**, que indica que se cerro la linea del algortirmo.

```
console.time("duración")
contar(5) // Algoritmo
console.timeEnd("duración")
```


*Ejecuta el método y observa los valores de duración. Este método funciona en cualquier contexto de ejecución.*


