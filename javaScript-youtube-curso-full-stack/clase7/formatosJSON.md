# Formato JSON.

JSON(JavaScript Object Notation) es un formato de intercambio de datos ligero y facil de leer tanto para humanos como para maquinas.

Se utiliza ampliamente para transmitir datos en aplicaciones web entre el cliente y el servidor.

```
{
    "nombre": "Sara,
    "edad": 19,
    "ocupacion": "Ingeniero de software",
    "direccion": {
        "calle": "Avenida de la tecnologia",
        "numero": "123",
        "cuidad": "Ciudad Futuro",
        "codigoPostal": "54321"
    },

    "hobbies": [
        "leer",
        "programar",
        "dibujar"
    ]
}
```

**Nota:** Las comillas simples nunca se utilizan en los elementos JSON, Los objetos JSON estan formados por pares de clave-valor, donde las claves son siempre **string** y los valores pueden ser **string, numericos, objetos, arrays, true, false o null.**
