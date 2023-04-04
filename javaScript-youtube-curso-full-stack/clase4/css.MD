# CSS.

Las hojas de estilo en cascada son un lenguaje de estilo utilizado para describir la presentacion de un documento HTML.

Incluyendo aspectos como el diseño, los colores, las fuentes, los tamalos, etc.


 **Estructura css.**
```
<style>
    body{
        background: tomato;
        font-size: 16px;
    }
</style>

```

- Selector: **body.**
- Propiedades: **background, font-size.**
- Valores: **tomato, 16px.**
- Unidad: **px.**

## Modelo caja.
 
Es como funciona css en general.

## Elementos.
- Tipo bloque(uno encima del otro).
- Tipo linea(uno al lado del otro).
- Tipo inline-block.

### Reglas.

- Los elemento de bloque siempre aparecen debajo del elemento anterior.
- El ancho de los elementos de bloque se establece automaticamente en funcion del ancho de su contenedor principal.
- La altura predeterminada de los elementos de bloque se basa en el contenido que contiene.
- Los elementos en linea no afectan el espacio vertical.
- El ancho de los elementos en linea se basan en el contenido que contienen, no en el ancho del elemento principal.

### Cajas.

- div: caja en bloque.
- span: caja en linea.

### Propiedades de la caja.
**Contenido, Padding, Borde, Margin**
- **Contenido:** Es el texto, las imagenes o cualquier otro contenido multimedia.
- **Padding:** Es el espacio entre en contenido de la caja y su borde.
- **Borde:** Es la linea entre el relleno y el margen del cuadro.
- **Margen:** Es el espacio entre la caja y las cajas alrededor de esta.

- **lorem:** Nos sirve para tener una especie de texto a la hora de realizar un ejemplo en css(texto de relleno).


## Concideraciones del modelo de caja.

- Margen en elementos en linea.
- Colapso vertical del margen.
- Dimensiones explicitas.
- Tamaño de la caja box-sizing.

# Selectores.

- Adyacente .primero + .segundo.
- Hijo .padre > .hijo.
- Descendiente .abuelo .bisnieto.
- Hermano .hermano ~ .hermana.

## layout

Algoritmo que determina la posicion y tamaño de cajas basado en la forma en la que interactuan con sus elementos (hermanos y padres).

## **Cascada y especificidad en css.**

1. **Posicion y orden:** El orden en que se declaran las reglas CSS(Siempre se agrega la regla final osea la de la ultima posicion).
2. **Especificidad:** Un algoritmo que determia que selector de CSS tiene mas peso.
3. **Origen:** El orden en que aparece CSS y de donde proviene ya sea un estilo de navegador, el CSS de una extension o nuestro CSS.
4. **Importancia:**Algunas reglas CSS tienen mas peso que otras, especialmente con el tipo de regla !important (No usar no es buena practica).

### Origen.

1. **User agent base styles:** Estos son los estilos que su navegador aplica a los elemento HTML por defecto.

2. **Local user styles:** Estos pueden provenir del nivel del sistema operativo, como un tamaño de fuente base o una preferencia de movimiento reducido. Tambien pueden provenir de extensiones de navegador.

3. **Authored CSS:** El css que crea.

4. **Authored !important:** Cualquier !important que agregue a sus declaraciones de autor.

5. ***Local user styles !important:** Cualquier !important que provenga del nivel del sistema operativo o del nivel de extension del navegador CSS.

6. **User agent !important:** Cualquier !important que esta definido en el CSS predeterminado proporcionado por el navegador.

## **Importancia.**

1. Reglas normales, como *font-size*, *background* o *color*.

2. Reglas de animacion.

3. Reglas !important(siguiendo el mismo orden que el origen).

4. Reglas de transición.


# Recursos.

- [CSS](https://cssreference.io/).
- [Web Dev](https://web.dev/learn/css/)
- [Laboratorio](https://laboratoria.github.io/css-diner/)









