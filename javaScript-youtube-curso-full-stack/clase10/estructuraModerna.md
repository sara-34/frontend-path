 # Bundling y Tooling.
 
Agregando JavaScript a mi html.

```
<script type="text/javascript">
console.log("Hola mundo");
</script>

<head>
   <script type="text/javascript" src="/main.js"></script>
</head>
```

1. **Code bundling:** Agrupar varios archivos javaScript, css, imagenes y otros recursos en un menor numero de archivos.

2. **Tree-shaking:** Elimina el codigo muerto(codigo no utilizado) del paquete final.

3. **Sistema de modulos:** Permite importar y exportar codigo de manera modular, haciendo que la base de codigo sea mas facil de mantener.

4. **Transpilation:** Permite escribir codigo utilizando las ultimas caracteristicas de javaScript y convertirlo automaticamente en una sintaxis que los navegadores mas antiguos puedan entender.

5. **Hot Module Replacement (HMR):** Permite ver los cambios en tiempo real sin tener que actualizar el navegador.

6. **Code splitting:** Divide el codigo en fragmentos mas pequeños que se puedan cargar segun la demanda.




