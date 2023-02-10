# **Qué son las media queries**
Las media queries son reglas CSS que establecen un comportamiento distinto o diferentes estilos en un cierto rango de la pantalla. Esto sirve para establecer el layout del sitio web para diferentes tipos de pantalla: escritorio, tablets y celulares.

Estos son dos tipos de media querie :

* **max-width / max-height:** establece un rango máximo para cierto comportamiento.

* **min-width / min-height:** establece un rango mínimo para cierto comportamiento.

### Estructura.

(@media (max-width:750px){
    div {
        color:red
    }
})