# Formularios clasicos en HTML.

```
<form action='/server' method='get' class='form'>

</form>
```

# Tipos de inputs.

- Input text field, Email text field.
- Radio buttons.
- Select elements.
- Textareas.
- Checkboxes.
- Label: Funciona para agregarle la informacion al formulario.
- Placeholder: texto de ayuda para el form.
- fieldset: Grupo de controles.
- lengend: Descripcion del fieldset.
- input type radio: sirve para darle check al form(opcion multiple).
- vertical-aling:middle: funciona para alinear todo el texto de un contenedor verticalmente.

## Diferencia entre enlaces y botones.

### Enlaces(hipervinculos).

- Se crean utilizando la etiqueta < a> (ancla) en HTML.
- Su principal proposito es navegar entre paginas o secciones dentro de una pagina web.

### Botones.

- Se crea utilizando la etiqueta < button> o < input type="button"> en HTML.
- Su principal proposito es realizar acciones especificas en la pagina, como enviar formularios activar eventos de JavaScript, entre otros.
-text-shadow: -1px -1px 0 #fef9c3: Decoracion de la letra.


## Controles Modernos para formularios.

1. **email:** Acepta una direccion de correo electronico. El navegador realiza una validacion basica de correo electronico.
```
<input type="email" name="email">
```
2. **url:** Acepta una URL, el navegador realiza una validacion basica de la URL.

```
<input type="url" name="website">
```
3. **number:** Acepta numeros enteros o decimales, Puede especificar atributos adecionales como min, max y step restringit y controlar el rango de valores permitidos.

```
<input type="number" name="age" min="1" max="100">
```
4. **range:** Acepta un rango de numeros y presenta un control deslizante en la interfaz de usuario. Tambien se puede usar atributos como min, max y step.

```
<input type="range" name="volume" min="0" max="100">
```
5. **date:** Acepta una fecha y muestra un selector de fecha en la interfaz de usuario.

```
<input type="date" name="birthdate">
```
6.**time:** Acepta una horay muestra un selector de hora en la interfaz de usuario.

```
<input type="time" name="appt_time">
```
7. **datetime-local:** Acepta una fecha y hora mostrando un selector de fecha y hora en la interfaz de usuario.

```
<input type="datetime-local" name="meeting">
```
8. **color:** Acepta un valor de color y muestra un selector de color en la interfaz de usuario.

```
<input type="color" name="favorite_color">
```
9. **search:** Acepta una cadena de busqueda y puede mostrar sugerencias de busqueda en algunos navegadoreso.

```
<input type="search" name="query">
```
10. **tel:** Acepta un numero de telefono, aunque no realiza una validacion especifica del telefono, se utiliza principalmente para mejorar la experiencia del usuario en dispositivos moviles, mostrando un teclado numerico adecuado.

```
<input type="tel" name="phone">
```












