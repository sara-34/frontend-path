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


## CommonJs
```
helper.js

function sum(a,b){
    return a + b;
}

module.exports = sum;
```

```
main.js

const sum = require('./helper.js');

const result = sumar(3,5);
console.log(result);

```

## Pseudo-codigo

Se crean multiples tareas para obtener nuestros archivos finales.

1. index.js se concatena con utils.js
2. blog.js se concatena con utils.js
3. contact.js se concatena con dep1.js y dep2.js
4. los archivos resultantes se minimanizan


## Webpack 

Con webPack solo hay que definir las entradas y salidas como queremos transformar los archivos.

El unico problema es que la configuracion de webpack puede llegar a ser muy complicada, incluyendo su dev server.


## Vite como alternativa a WebPack.

- Ya tiene un dev server que funciona con es modules.
- usa la configuracion de wollup para el bunfling.
- para el transpirador hace uso de esbuild en vez de babel que es la opcion mas comun en webpack.
- es practicamente zero-config.
 





