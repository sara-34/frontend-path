# GIT Y GITHUB
### Enlace Recurso:
[Curso](https://platzi.com/cursos/git-github/)

### Enlace repositorio:
[Repositorio GitHub](https://github.com/sara-34/curso-profesional-git-git-hub-platzi)

## ¿Que es Git?

**Git es un sistema de control de versiones** distribuido, diseñado por linus Torvalds. Git esta pensado en la eficiencia y la confiabilidad del mantenimiento de versiones de aplicaciones cuando estas contienen un gran numero de archivos de codigo fuente.

*Git trabaja de forma remota y local de lo contrario Github trabaja en la nube*

- Git esta optimizado para guardar cambios de forma incremental.

- Puede contar con un historial, que nos permite regresar a una version anterior y agregar nuevas funcionalidades.

- lleva un registro de los cambios que otras personas lleguen a realizar en los archivos.

Principalmente fue diseñado para operar en el entorno de linux, pero actualmente es multiplataforma lo que permite que sea compatible con Linux, MacOS Y Windown. en la maquina local se encuentra Git, se utiliza bajo la terminal o linea de comandos. 

**Algunos comandos de la terminal son:**

- marge
- pull
- add
- commit
- rebase

**Algunos comandos de Git son:** 

- **git init** (Nos permite iniciar en la terminal de Git).
- **git status** (nos permite mirar el estado de archivo o proyecto a subir).
- **git add** . (nos permite agregar los cambios realizados al documento).
- **git commit -m""** (nos permite tener registrado el ultimo cambio que se realizo).
- **git show** (muestras los cambios historicos realizados en el proyecto).
- **git log archivo.txt** (Ver todos los archivos que se han agregado y eliminado).
- **git pull** (Permite traer cambio de otro repositorio).
- **git push** (permite enviar cambio realizados al repositorio).

## Caracteristicas De Git.

- Git almacena la informacion como un conjunto de archivos.
- no existen cambios, corrupcion en archivos o alguna alteracion sin que Git lo sepa.
- La mayoria de todo en git es local. es dificil que se necesiten recursos o informacion externa, basta con los recursos locales con lo que cuenta.
- Git contiene 3 estados con los cuales permite la localizacion de archivos los cuales son: 

    * Staged.
    * Modified.
    * Committed.


## Para que proyectos funciona Git.

Con git se obtiene mayor eficiencia usando archivos de texto plano ya que con archivos binarios no puede guardar solo los cambios si no que que se debe volver a grabar el archivos completo ante cada midificacion, por mas minima que esta sea, lo que hace que incremente mucho mas el tamaño del repositorio.

~~Guardar archivos binarios en el repositorio de Git no es una buena practica, unicamente deberian guardarsde achivos pequeño como lo son los (Logos) que no sufran casi modificaciones durante la vida del proyecto. Los binarios deben guardar en un CDN.~~

## ¿Que es un sistema de control de versiones?

El SCV O VCS es un sistema que permite registrar los cambios que se realizaron sobre un archivo a lo largo del tiempo, lo que nos permite que llevemos un historial del ciclo de vida del proyecto, permite tambien comparar los cambio que se realizaron a lo largo del tiempo.

*Cualquier archivo que se encuentre en un ordenador puede ponerse bajo control de versiones*


## ¿En que se diferencia de Github?
Git hub es una plataforma de desarrollo colaborativo que nos permite el alojamiento de grandes proyectos utilizando el sistema de control de Git, principalmente es empleado para la creacion de codigo, este puede considerarse como la red social del codigo para los programadores.

## Caracteristicas:

+ git permite alojar proyectos en los repositorios de forma gratuita de publica (tambien contiene una forma de pago para privados).

+ tiene la facilidad de 
compartir lo proyectos.

+ permite la colaboracion de unos con los otros.

+ permite reducir lo errores humano y ayuda a detectar fallos de una forma mas rapido.

+ permite trabajar un proyecto en equipo.

+ ofrece diferentes ventajas para el control de los proyectos.

# Lineas de comandos:

   * *pwd* : muestra la localizacion actual de la carpeta en la que estamos.

   * *cd* : navegamos entre las carpetas.

   * *ls* : lista el numero de carpetas que tengamos.

   * *ls -al*: Argumentos.

   * *ls -a* : muestra grupo de archivod.

   * *clear* : limpia consola.

   * *cd ..* : me permite salir de la carpeta.

   * *mkdir* : creacion de carpetas.

   * *touch* : creacion de archivo vacio.

   * *cat* : muestra el contenido de un archivo.

   * *history* : muestra todos los comandos que hemos utilizado.

   * *!numero comando* : Me permite ejecutar de nuevo el comando.

   * *rm archivo.txt* = eliminar archivo.

   * *git rm archivo.txt* = Sacar archivo.

   * *git config --list--show - origen* = ver configuraciones guardadas.

   * *git config* = ver la configuracion de Git.

   * *git rm --cached archivo.txt* = Sacar archivo.

   * *git config --global* = cambiar todos los usuarios locales.

   * *git config --list* = lista de configuracion.

   * *git log* = Permite ver la historia del archivo.

   * git show = historia de archivo que existio.

   * git diff = sirve para comparar versiones anteriores.

   * staging = es como la historia o area de preparacion y para pasar a este lo unico que debemos hacer es ponerle el add.

   * Checkout = Se trae los cambios del repositorio.


## Que es Branch (Rama):

una rama o branch es una version del codigo del proyecto en el cual se esta trabajando ayudan a mantener el orden y control de las versiones.

### **Rama main(master)**:

cada vez que añademos codigo y guardamos los cambios al hacer un commit esto genera un nuevo codigo y lo que hace es generar nuevas versones dentro de esta rama hasta que se llega a la version actual.

### **Rama development**

cuando decides hacer experimento al generar ramas experimentales podemos trabajar en alguna rama main pero en estas se podran hacer todos los cambios deseados sin necesidad de que afecte el contenido de las otras ramas.

### **Rama Hotfix**

cuando encontramos un error en la rama main nos vemos en la obligacion de crear una rama la cual nos permite hacer los cambios necesarios, cuando ya este todo listo lo que hacemos es fusionar las dos ramas y esta origina la rama master final.


