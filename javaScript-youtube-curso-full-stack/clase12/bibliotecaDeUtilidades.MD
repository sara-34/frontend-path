# Lodash.

Lodash es una biblioteca de JavaScript que proporciona funciones utilitarias para tareas comunes de programacion. Esta diseñada para trabajar con estructuras de datos como objetos, arreglos, cadenas de texto y numeros.

## Alternativas:
- Underscore.
- Ramda.
- Metodos nativos.

```
map([🍇,🐮,🐔],cook)
=>  [🍿,🍔,🍳]

filter([🍿,🍔,🍳], isVegetarian)
=>       [🍿,🍳]

redce([🍿,🍳], eat)
=>💩
```

# Practica con Lodash.

Es una moderna biblioteca de utilidade de JavaScript que ofrece modularidad, rendimiento y extras.

1. **groupoBy():**Permite agrepar las entradas del blog por autor o por fecha.
```
.groupBy(entries, 'autor').
```

2. **filter():** Permite filtrar las entradas del blog que cumplan con ciertos criterios, como las que tengan ciertos tag especificos.
```
.filter(entries, entry => .includes(entry.tags, 'CSS3')).
```

3. **map():** Permite transformar los datos del set, por ejemplo, para obtener un array solo con los titulos de las entradas.
```
.map(entries, 'titulo').
```

4. **orderBy():** Permite ordenar las entradas por fecha o por algun otro criterio.
```
.orderBy(entries, ['fecha','titulo'], ['desc','asc']).
```

5. reduce(): Te permite realizar alguna operacion con los datos, como calcular total de tags en todas las entradas.

```
.reduce(entries, (totalTags, entreties), totalTags + entry.tags.length, 0).
```

**Nota:Entre mas especifico sea el nombre de la variable declarada mucho mejor para la persona que lea el codigo a futuro.**

 
## Practica Con Lodash.

1. **merge():** Puedes combinar dos o mas entradas del blog en un solo objeto.
```
_.merge(entries[0], entries[1]).
```

2. **pick():** Puedes seleccionar ciertas propiedades de una entrada del blog y crear un nuevo objeto con ellas.
```
_.pick(entries[0],['titulo','tags']).
```

3.**omit():**Puedes eliminar ciertas propiedades de una entrada del blog y crear un nuevo objeto sin ellas.
```
_.omit(entries[1],['descripcion']).
```

4. **has():**Puedes verificar si una entrada del blog tiene una propiedad especifica.
```
_.has(entries[2],'fecha').
```

5. **invert():** Puedes intercambiar las claves y los valores de las propiedades de una entrada del 

```
_.merge(entries[0], entries[1]).
```
