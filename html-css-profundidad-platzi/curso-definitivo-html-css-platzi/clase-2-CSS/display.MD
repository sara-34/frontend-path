# **Display:**

Formalmente la propiedad display establece los tipos de visualización interna y externa de un elemento.

* **Valores display-outside(Afuera):**

display: block;
display: inline;
display: run-in;

 * **Valores display-inside(Adentro):**

display: flow;
display: flow-root;
display: table;
display: flex;
display: grid;
display: ruby;
display: subgrid;

* **Valores display-outside más valores display-inside:**

display: block flow;
display: inline table;
display: flex run-in;

* **Valores display-listitem(Elemento de lista):** 

display: list-item;
display: list-item block;
display: list-item inline;
display: list-item flow;
display: list-item flow-root;
display: list-item block flow;
display: list-item block flow-root;
display: flow list-item block;

* **Valores display-internal(Interno):**

display:
table-row-group;
display: table-header-group;
display: table-footer-group;
display: table-row;
display: table-cell;
display: table-column-group;
display: table-column;
display: table-caption;
display: ruby-base;
display: ruby-text;
display: ruby-base-container;
display: ruby-text-container;

 * **Valores display-box:**
display: contents;
display: none;

 * **Valores display-legacy:**

display: inline-block;
display: inline-table;
display: inline-flex;
display: inline-grid;

* **Valores globales:**
display: heredar;
display: initial;
display: unset;


# Etiquetas en linea y en bloque:

Una etiqueta de línea es aquella que ocupa el espacio mínimo necesario en horizontal, y permite que otro elemento se coloque a su lado. En cambio una etiqueta de bloque, ocupa todo el ancho disponible y no permite que otro elemento se coloque a su lado (aunque aparentemente tenga lugar suficiente).