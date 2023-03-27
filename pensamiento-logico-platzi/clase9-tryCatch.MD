# Try Catch.

Evalua si un algoritmo contiene errores, para que el flujo del programana no colapse.

Los programas evaluan linea por linea el codigo, si no ocurre ningun problema, se ejecutaran todas las lineas hasta el final del programa, sin embargo si ocurre un error en determinado lugar el programa se detendra.

## Estructura.

Envolvemos en el bloque try las lineas de codigo que podrian provocar un problema y en caso de que exista un errpr lo manejaremos en el bloque catch.

"Linea 1"
"Linea 2"

try{
    "Linea 3"
}
catch{
    mostrar "Algo salio mal..."
    "Linea 4"
    "Final del programan"
}
