## Variables y operaciones
### 1️⃣ Responde las siguientes preguntas en la sección de comentarios:
- ¿Qué es una variable y para qué sirve?

**R/: Son espacios en la memoria donde podemos guardar informacion, tipos de datos caracteres, booleanos, numericos, funciones con ciertos argumentos.**


- ¿Cuál es la diferencia entre declarar e inicializar una variable?

**R/: Una cosa es decirle a javaScript que tenemos una variable let nombre declaramos una variable. Asignarle un valor a esta variable es inicianizarla let nombre = "Sara".**

- ¿Cuál es la diferencia entre sumar números y concatenar strings?

**R/: cuando sumamos este operador nos permite sumar numeros, pero al usarlo con string lo que hace es unir ambos strings.**

- ¿Cuál operador me permite sumar o concatenar?

**R/: (+).**

### 2️⃣ Determina el nombre y tipo de dato para almacenar en variables la siguiente información:

- Nombre: string
- Apellido: string
- Nombre de usuario en Platzi: string(@fulanito)
- Edad: number
- Correo electrónico: string(la@gmail.com)
- Mayor de edad: boolean
- Dinero ahorrado: number
- Deudas: number
### 3️⃣ Traduce a código JavaScript las variables del ejemplo anterior y deja tu código en los comentarios.

R/: let nombre = "Sara";
let apellido = "Arias";
let NombreUsuario = "@fulanito";
let edad = 19;
let correoElectronico = "la@gmail.com";
let mayorDeEdad = true;
let dineroAhorrado = 500000;
let deudas = 1000;



### 4️⃣ Calcula e imprime las siguientes variables a partir de las variables del ejemplo anterior:

- Nombre completo (nombre y apellido)Dinero real (dinero ahorrado menos deudas)

R/: let nombreCompleto = nombre + " " + apellido;
R/: let dineroReal = dineroAhorrado - deudas;


## Funciones

### 1️⃣ Responde las siguientes preguntas en la sección de comentarios:
- ¿Qué es una función?

**R/: Son la forma de encapsular bloques de codigos para que sean reutilizables y poder ejecutarlos en un futuro.**

- ¿Cuándo me sirve usar una función en mi código?

**R/: Nos sirve crear una funcion cuando tenemos variables o bloques de codigos (con cambios que podrian ser parametros y argumentos) que podriamos encapsular para reutilizar mas de una vez en el futuro, tambien nos sirve para ordenar y mejorar la legibilidad de nuestro codigo.**



- ¿Cuál es la diferencia entre parámetros y argumentos de una función?

**R/: Los parametros es lo que recibe una funcion cuando se esta creando, cuando las vamos a ejecutar ya no recibimos parametros si no que enviamos argumentos a nuestra funcion.**

**Recibiendo parametros**

function nombreCompleto(name, lastName) {

    return name + " " + lastName;
    
}

**Enviando argumentos**
nombreCompleto("Sara", "Arias");


### 2️⃣ Convierte el siguiente código en una función, pero, cambiando cuando sea necesario las variables constantes por parámetros y argumentos en una función:

- const name = "Juan David";
- const lastname = "Castro Gallego";
- const completeName = name + lastname;
- const nickname = "juandc";

console.log("Mi nombre es " + completeName + ", pero prefiero que me digas " + nickname + ".");

/////////////////////////////////

function nombreCompleto(name, lastName) {

    return name + " " + lastName;
    
}

nombreCompleto("Sara", "Arias");

//////////////////////////////////////////////////////////////////////////////

function saludo(name, lastName, userName) {

    const completeName = nombreCompleto(name, lastName);
    console.log("Mi nombre es " + completeName + ", pero prefiero que me digas " + userName + ".");
}


## Condicionales

### 1️⃣ Responde las siguientes preguntas en la sección de comentarios:

- ¿Qué es un condicional?

**R/: Son la forma en la que se ejecutan los bloques de codigo dependiendo de alguna condicion o validacion.**

- ¿Qué tipos de condicionales existen en JavaScript y cuáles son sus diferencias?

R/:if, elseif, else, Switch
Switch: nos deja agregar variables, todos validan la misma condicion.
if : se le asigna diferentes validaciones u condiciones para su comparacion.



- ¿Puedo combinar funciones y condicionales?

**R/: Si las funciones pueden encapsular cualquier bloque de codigo, incluyendo condicionales.**

### 2️⃣ Replica el comportamiento del siguiente código que usa la sentencia switch utilizando if, else y else if:
const tipoDeSuscripcion = "Basic";

switch (tipoDeSuscripcion) {
   case "Free":
       console.log("Solo puedes tomar los cursos gratis");
       break;
   case "Basic":
       console.log("Puedes tomar casi todos los cursos de Platzi durante un mes");
       break;
   case "Expert":
       console.log("Puedes tomar casi todos los cursos de Platzi durante un año");
       break;
   case "ExpertPlus":
       console.log("Tú y alguien más pueden tomar TODOS los cursos de Platzi durante un año");
       break;
}


if (tipoDeSuscripcion == "Free") {
    console.log("Solo puedess tomar los cursos gratis");
    
}else if (tipoDeSuscripcion == "Basic") {
    console.log("Puedes tomar casi todos los cursos de Platzi durante un mes");
    
}else if (tipoDeSuscripcion == "Expert") {

    console.log("Puedes tomar casi todos los cursos de Platzi durante un año");
    
}else if(tipoDeSuscripcion == "ExpertPlus"){

    console.log("Tú y alguien más pueden tomar TODOS los cursos de Platzi durante un año");
}

### 3️⃣ Replica el comportamiento de tu condicional anterior con if, else y else if, pero ahora solo con if (sin else ni else if).

function conseguirSuscripcion(suscripcion) {
    

 if (suscripcion== "Free") {
    console.log("Solo puedess tomar los cursos gratis");
    return;
    
}if (suscripcion == "Basic") {
    console.log("Puedes tomar casi todos los cursos de Platzi durante un mes");
    return;
    
}if (suscripcion == "Expert") {

    console.log("Puedes tomar casi todos los cursos de Platzi durante un año");
    return;
    
}if(suscripcion == "ExpertPlus"){

    console.log("Tú y alguien más pueden tomar TODOS los cursos de Platzi durante un año");
    return;
}

console.warn("Esta suscripcion no existe");
}

 
<!--Bonos-----------------------------> 

const tipoDeSuscripciones = {
    free: "Solo puedess tomar los cursos gratis",
    basic: "Puedes tomar casi todos los cursos de Platzi durante un mes",
    expert: "Puedes tomar casi todos los cursos de Platzi durante un año",
    expertplus: "Tú y alguien más pueden tomar TODOS los cursos de Platzi durante un año"

}

const ejemploSuscripciones = "basic";

function conseguirSuscripcion(suscripcion) {
    if (tipoDeSuscripciones[suscripcion]) {
        console.log(tipoDeSuscripciones[suscripcion]);
        return;

    }
    console.warn("Este tipo de datos no existe");
    
}



## Ciclos
### 1️⃣ Responde las siguientes preguntas en la sección de comentarios:
- ¿Qué es un ciclo?

**R/: Es la forma de ejecutar un bloque de codigo hasta que se cumpla cierta condicion.**

- ¿Qué tipos de ciclos existen en JavaScript?

**R/: While(Hace validacion), for(obliga a poner una condicion al inicio y al final), do While.**

- ¿Qué es un ciclo infinito y por qué es un problema?

**R/: Es cuando la validacion de nuestros condicionales nunca se cumplen y termina dañando la aplicacion.**

- ¿Puedo mezclar ciclos y condicionales?

R/: Si, aunque los ciclos son una especie de condicionales, nada nos impide agregar mas condicionales dentro del ciclo. 


### 2️⃣ Replica el comportamiento de los siguientes ciclos for utilizando ciclos while:

for (let i = 0; i < 5; i++) {
    console.log("El valor de i es: " + i);
}

let i = 0;

while (i < 5) {
    console.log("El valor de i es: " + i);
    i++;
    
}

for (let i = 10; i >= 2; i--) {
    console.log("El valor de i es: " + i);
}

let i = 10

 while (i >= 2) {

    console.log("El valor de i es: " + i);
    i--;

    
 }

### 3️⃣ Escribe un código en JavaScript que le pregunte a los usuarios cuánto es 2 + 2. Si responden bien, mostramos un mensaje de felicitaciones, pero si responden mal, volvemos a empezar.

💡 Pista: puedes usar la función prompt de JavaScript.

 let respuesta;

 while (respuesta != "4") {

    let pregunta = prompt("Cuanto es 2 + 2")
    respuesta = pregunta;
    
 }

## Listas

### 1️⃣ Responde las siguientes preguntas en la sección de comentarios:
- ¿Qué es un array?

R/:Es una lista de elemento.

const array = [1, 2, 4, 5];

- ¿Qué es un objeto?

R/: Es una lista de elemento PERO cada elemento tiene un nombre clave.

const obj ={
    nombre : "sofia";
    casa : 2;
};


- ¿Cuándo es mejor usar objetos o arrays?

**R/: Arrays cuando lo que vamos hacer en un elemento es lo mismo que en los demas, mientras que en un objeto los nombres de cada elemento son importante para el algoritmo.** 

- ¿Puedo mezclar arrays con objetos o incluso objetos con arrays?

**R/: Si ya que los arrays pueden guardar cualquier objetos.**

### 2️⃣ Crea una función que pueda recibir cualquier array como parámetro e imprima su primer elemento.

 function imprimirPrimerElementoArray(array) {
    console.log(array[0]);
    
 }

 imprimirPrimerElementoArray(["fresa", "mango", "banano"]);

### 3️⃣ Crea una función que pueda recibir cualquier array como parámetro e imprima todos sus elementos uno por uno (no se vale imprimir el array completo).

function imprimirElementoPorElemento(array) {
    for (let i = 0; i < array.length; i++) {
        console.log(array[i]);
        
    }

 }

 imprimirElementoPorElemento(["fresa", "mango", "banano"]);


### 4️⃣ Crea una función que pueda recibir cualquier objeto como parámetro e imprima todos sus elementos uno por uno (no se vale imprimir el objeto completo).


 let obj = {
    nombre:"Sara",
    apellido: "Arias",
    comidaFav:"Pasta"
 };

 function funcionImprimirObj(obj) {
    let array = Object.values(obj);
    for (let i = 0; i < array.length; i++) {

        console.log(array[i]);
        
    }
    
 }

 funcionImprimirObj(obj);



