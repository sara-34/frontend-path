# Algoritmos.

El codigo es un conjunto de **instrucciones** que le dicen a la computadora que tareas debe realizar.

Estas instrucciones se llaman algoritmos, por lo que un codigo podria tener uno o mas algoritmos.

## Ejemplo.

Algoritmo para preparar cafe.

- Verificar si hay suficiente agua en la cafetera.
- Si no hay suficiente agua, llenar la cafetera con agua fresca.
- Verificar si hay suficiente cafe en el filtro.
- Si no hay suficiente cafe, añadir la cantidad necesaria al filtro.
- Escender la cafetera y esperar a que termine de hacer el cafe.
- Mientras se hace el cafe, preparar la taza donde se va a servir.
- Cuando la cafetera haya terminado, apagarla y retirar el filtro y los posos de cafe.
- Servir el cafe en la taza o el vaso preparado previamente.
- Añadir leche, azucar u otros ingredientes adicionales necesarios.
- Tomar el cafe.

## Algoritmos en diferentes areas.

1. En matematicas, se utilizan algoritmos para realizar calculos y resolver problemas.

2. En fisica se utilizan algoritmos para modelar y simular sistemas fisicos.

3. En quimica se utilizan los algoritmos para predecir y modelar la estructura y el comportamiento de moleculas.

4. En biologia se utilizan algoritmos para analizar y procesar grandes cantidades de datos genomicos y proteomicos.

## Sentencias y Expresiones en los lenguajes.
 
- Una expresion es una combinacion de valores, variables, operadores y funciones que se evaluan para producir un resultado.

- Una sentencia es una instruccion que realiza una accion en el programa.

Nota: Las sentencias pueden cambiar el estado de las variables, realizar operaciones de entrada/salida, controlar el flujo de ejecucion del programa, entre otras acciones.


## Ejemplo de expresiones.

1. Expresion de suma: 5 + 3 devuelve 8.
2. Expresion de multiplicacion: 5 * 3 devuelve 15.
3. Expresion Concatenacion cadenas: "Hola " + nombre devuelve "Hola nombre" Porque realiza la concatenacion.

## Ejemplo de sentencias.
- si (x > 5) { imprimir("x es mayor que 5"); }

Esta sentencia comprueba si el valor de la variable x es mayor que 5 este mostrara un mensaje.

- edad = obtener("¿Cual es la edad?");
Esta sentencia utiliza la funcion obtener para pedir al usuario que ingrese su edad y guardar el valor en la variable edad.

## Sentencias y Expresiones en los lenguajes.

Una sentencia puede estar hecha de una o mas expresiones a = b * 2.

1. 2 es una expresion de valor literal.
2. b es una expresion de variable.
3. b * 2 es una expresion aritmetica.
4. a = b * 2 es una expresion de asignacion.

- Es una sentencia porque es una instruccion que realiza una accion, que es asignar el valor b * 2 a la variable a.

- Tambien es una expresion porque produce un valor xomo resultado de su evaluacion en este caso, la expresion b * 2 se evalua como un numero, que luego se asigna a la variable a.

## Operadores en programacion.

Los operadores son simbolos o palabras reservadas que se utilizan para realizar operaciones o comparaciones entre valores o variables.

1. **Operadores aritmericos.**

- +: suma dos valores.
- *: multiplica dos valores.

2. **Operadores de asignacion.**

- =: asigna un valor a una variable.

3. **Operadores de comparacion.**

- ==: comprueba si dos valores son iguales.
- (>)=: *comprueba si el valor de la izquierda es mayor o igual que el valor de la derecha*

4. **Operadores logicos.**

- &&: devuelve verdadero si ambas expresiones son verdaderas.
- !: devuelve el valor opuesto de la expresion booleana.

5. **Valores y tipos en el codigo.**

- Cuando necesitamos hacer matematicas, queremos un numero (Number).
- Cuando necesitamos imprimir un valor en la pantalla, necesitamos una cadena de texto (String).
- Cuando necesitamos tomar una decision en un programa, necesitamos un valor (Booleano)(Verdadero, Falso).

## **Lenguajes interpretados y Compilados**

La diferencia es el proceso de traduccion del codigo fuente a un programa ejecutable.

- **Compilado:** Usa un compilador para traducir el codigo fuente en lenguaje de maquina.

          - C++
          - Java.
      
        

- **Interpretado:** Usa un interprete para traducir el codigo fuente a lenguaje de maquina en tiempo de ejecucion.

          - PHP.
          - Python.
          - JavaScript.


## Tipos y valores en javaScript.

* **Valores primitivos:**

  * Booleans(true, false).
  * Numbers(-100, 3.14).
  * String("Hola", 'abracadabra').
  * Symbols(Symbol()).
  * BigInts(10n).
  * Undefined(undefined).
  * Null(null).
  * Igualdad loose(Suelta)== : Solo verifica el valor.
  * igualdad Strict(Estricta)=== : Verifica sus resultados(Elementos).

  **Nota: Siempre utilizar la igualdad Estricta(===) Ya que esto nos evitara problemas futuros.**



## typeof.

El operador **typeof** devuelve una cadena que indica el tipo del operador sin evaluarlo. Operando es la cadena, variable, palabra clave u objeto para el que se devolvera su tipo.

Ejemplo: Declarando variables.

  * var miFuncion = new Function("5 + 2");
  * var forma = "redonda";
  * var tamanio = 1;
  * var hoy = new Date();

El operador typeof devuelve los siguientes resultados para estas variables.

  * typeof miFuncion === 'funcion';
  * typeof forma === 'String';
  * typeof tamanio === 'number';
  * typeof hoy === 'object';
  * typeof noExiste === 'undefined';

### **typeof null**

*typeof null === "object";*

En un inicio la representacion interna del valor nulo se definio como un puntero nulo cero(0 x 00) en la mayoria de los sistemas.

La etiqueta de tipo para los objetos tambien se establecio como cero en dicha version.

Se propuso una solucion para ECMAScript pero fue rechazada.

## **Objetos y funciones.**

- Objects({});
- Functions(x => x * 2);




**Nota: Un simbolo nunca es igual a otro simbolo, ya que el proposito del simbolo es generar un valor unico**


*Todo en javaScript que no sea un valor primitivo es un objeto.*

## JavaScript y sus variables var, let y const.


| Propiedad     | var     | let    | const |
|---------------|---------|--------|-------|
| scope(alcance)| funcion | bloque | bloque|
|re-asignacion  | v       | v      | x     |
| re-declaracion| v       | x      | x     |


**Nota: No se recomienda usar var ya que este tiene muchos problemas a la hora de ser declarado.**


## Valores Falsos en JavaScript.

1. false : El valor booleano falso.
2. 0 : El numero cero.
3. -0 : El numero cero negativo.
4. 0n : El BigInt cero.
5. " " : La cadena de texto vacio.
6. null : Un valor nulo.
7. undefined : Un valor no definido.
8. NaN : Un valor que representa "Not a Number".


## Valores Verdaderos en JavaScript.

1. true: el valor verdadero.
2. 1: cualquier numero diferente de cero se considera verdadero.
3. "false": cualquier cadena de texto no vacia de considera verdadera.
4. []: Un arreglo vacio se considera verdadero.
5. {}: Cualquier objeto vacio se considera verdadero.
6. function() {}: Cualquier funcion definida se considera verdadera.
7. new Date(): Cualquier objeto de fecha se considera verdadero.
8. 40n: Cualquier BigInt de cero se considera verdadero.

## Valores Nulos.

1. null.
2. undefined.


## Objetos y sus propiedades en JavaScript.

**Creacion de objetos en javaScript**

```
const human = {
    name: "Sara", 
    lastname: "Arias",
    age: 32
}

console.log(human);
```

**Para acceder a los elementos del objeto se utiliza el (.) ejemplo:**

- *human.name.*
- *human.lastname.*
- *human.age.*

**Para agregar cosas al objeto tambien utilizamos (.) ejemplo:**

- *human.from = "Colombia";*
- *human.make = 'Ford';*
- *human.model = 'Mustang';*
- *human.year = 1969;*

**Las propiedades se pueden cambiar en el tiempo**

- *human.blonde = false;*
- *human.age = human.age - 10;*

**Eliminar propiedades de un objeto**

- *delete human.lastname;*
- *delete human.age;*


# Funciones puras y mutacion en JavaScript.

- **Function Statement**
Una definición de función (también denominada declaración de función o expresión de función) consta de la palabra clave function
```
function walk(){

    console.log("I´m walking");
}

walk();
```

- **Function Expression**
Esta función puede ser anónima; no tiene por qué tener un nombre.
```
const walk = function(){

    console.log("I´m walking");
}

walk();
```

## Funciones Puras y Mutacion en JavaScript.

### Funciones Puras.
1. **No tiene Efectos secundarios:** No modifica ningun estado fuera de su alcance, como variables globales o referencias.

2. **Es determinista:** Esto significa que dada la misma entrada, siempre producira la misma salida.

Ejemplo:

```
function sum(x, y){
    return x + y;
}

sum(2, 1);
```
*Nota: x Y y son los **Parametros** de la funcion, mientras que en la ejecucion 2 y 1 pasan a ser los **Argumentos***

*Los primitivos siempre se copian por valor*

## Operadores Logicos.

- **OR:** a|| b || c retorna el primer valor verdadero.
- **AND:** a && b && c retorna el primer valor falso.
- **NOT:** !a retorna el valor contrario booleano.



