# Objetos.

Un objeto es una estructura de datos que permite almacenar valores mediante propiedad-valor a traves de la sintaxis de llaves ({}) y separados por (,).

estructura:

var objeto = {
    clave1: "valor1",
   "clave 2": "valor2",
}


# Atributos y metodos.

En programación orientada a objetos, un objeto es una representación de la realidad, en el cual sus características propias se definen como atributos y sus acciones se definen como métodos.

*En otras palabras, los atributos son las variables y los métodos son las funciones propias de cada objeto.*


### Cómo acceder a los valores de un objeto
A diferencia de los arrays, únicamente es necesario saber la propiedad del objeto para acceder a su valor.

Existen tres formas para acceder al valor de un objeto:

* Mediante la notación de corchetes.
* Mediante la notación de punto.


## Qué es la notación de corchetes
La notación de corchetes ya ese familiar para ti, similar a los arrays, indicamos entre corchetes la propiedad del objeto entre comillas.

* objeto["propiedad" ]

## Qué es la notación de punto
La notación de punto indicamos con un punto la propiedad del objeto. Si existen espacios, la única forma de acceder a esa propiedad es mediante la notación de corchetes.

objeto.propiedad


# Cómo añadir propiedades de un objeto

Para añadir propiedades de un objeto, utilizamos la notación de corchetes o de punto con la nueva propiedad, asignándole su respectivo valor.

**miAuto[" color"] = "rojo"**.


# Cómo modificar propiedades de un objeto
Para modificar propiedades de un objeto, utilizamos la notación de corchetes o de punto con la propiedad específica, asignándole su nuevo valor.

**miAuto["marca "] = "Ford"**

# Cómo eliminar propiedades de un objeto
Para eliminar propiedades de un objeto, utilizamos la palabra reservada **delete** seguido de la propiedad del objeto.

**delete miAuto["marca "].**

**delete miAuto.marca.**


# El objeto contexto this
En JavaScript, el objeto contexto this hace referencia a diferentes valores según su contexto de ejecución. Como es un tema complejo de programación orientada a objetos, no profundizaré.

En objetos, el contexto this hace referencia al propio objeto. Esto sirve para acceder a los atributos y métodos propios del objeto.

* detalle: function () {
    console.log(`Auto ${this.modelo} del ${this.año}.`)
  },




