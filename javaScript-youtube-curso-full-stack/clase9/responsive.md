# Posicionamiento css.

Define el comportamiento de posicion del elemento.

- **position: static;**
El elemento permanecera en el flujo natural de la pagina, como resultado no actuara como punto de anclaje.

  - top.
  - bottom.
  - left.
  - right.
   - z-index.


- **position: relative;**
El elemento permanecera en el flujo natural de la pagina.

  - top.
  - bottom.
  - left.
  - right.
  - z-index.


- **position: absolute;**
El elemento no permanecera en el flujo natural de la pagina. Se posicionara de acuerdo con el antepasado posicionamiento mas cercano.

  - top.
  - botton.
  - left.
  - right.
  - z-index.

- **position: fixed;**
El elemento no permanecera en el flujo natural de la pagina.(Queda fija a la pagina) Se posicionara deacerdo con la ventana grafica.

  - top.
  - bottom.
  - left.
  - right.
  - z-index.

- **position: sticky;**
El elemento es posicionado deacuerdo al flujo normal del documento y luego es desplazado con relacion a su ancestro que se desplace mas cercano.

  - top.
  - bottom.
  - left.
  - right.
  - z-index.


# Responsive.

El diseño responsivo es un enfoque de diseño web que busca optimizar y adaptar la visualizacion de un sitio web o aplicacion en diferentes dispositivos y tamaños de pantalla, como computadores de escritorio, laptops, tablets y smartphones.

# Mobile first.

"Mobile First" es un enfoque de diseño y desarrollo web en el que se prioriza la experiencia del usuario en dispositivos moviles, ya sean smartphones y tablets, antes de adaptar el diseño a dispositivos de escritorio y laptos.

# Design Layouts.

- **Fluid layout:**
 Utiliza proporciones relativas en lugar de valores fijos para dimensionar y organizar los elementos de la pagina.

- **Adaptive layout:**
Utiliza puntos de interrupcion especificos (breakpoints) para cambiar la disposicion y el estilo de un sitio wen en funcion del tamañp de la pantalla es un diseño responsi pero no es un diseño fluido.

- **Fixed layout:**
Los elementos de la pagina se dimensionan y se organizan utilizando valores fijos. Esto significa que el diseño no se ajusta automaticamente al tamaño de la pantalla.

- **Centered layout:**
Tiene un ancho maximo establecido para el contenido y se centra en la pantalla cuando es mas ancha que el ancho maximo definido.

1. diseño fluido.
2. diseño adaptativo.
3. diseño fijo.
4. diseño centrado.

## Media Queries.

```
@media screen and (min-width: 768px){

}

@media screen and (min-width: 992px){

}
```

## Deshabilitar el Zoom.

```
<meta name='viewport' 
content='width=device-width, initial-scale=1.0, maxmum-scale=1.0'/>
```


