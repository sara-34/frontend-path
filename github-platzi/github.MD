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

   * git diff = sirve para ver los cambios realizados.

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


-----------------------

Git reset y git rm son comandos con utilidades muy diferentes, pero se pueden llegar a confundir facilmente.

## **git rm** 
este comando nos ayuda a eliminar archivos de git sin eliminar su historial del sistemas de las versiones, lo cual nos ayuda mucho porque nos ayuda a recuperar informacion pasada antes de borrar el archivo.

* **git rm --cached:** Elimina los archivos de nuestro repositorio local y del área de staging, pero los mantiene en nuestro disco duro. Básicamente le dice a Git que deje de trackear el historial de cambios de estos archivos, por lo que pasaran a un estado untracked.
* **git rm --force:** Elimina los archivos de Git y del disco duro. Git siempre guarda todo, por lo que podemos acceder al registro de la existencia de los archivos, de modo que podremos recuperarlos si es necesario (pero debemos usar comandos más avanzados).

## **git reset:** 

este comando nos ayuda a volver en el tiempo pero esta no nos dejara recuperar la informacion que teniamos ya que todo sera eliminado y debemos volver a escribirla.

solo debemos emplear este comando en caso de emergencia.

Hay dos formas de utilizar **git reset:** con el argumento **--hard**, borrando toda la información que tengamos en el área de staging (y perdiendo todo para siempre). 
Un poco más seguro, con el argumento **--soft**, que mantiene allí los archivos del área de staging para que podamos aplicar nuestros últimos cambios pero desde un commit anterior.

### **git reset --soft:** 
borra el historial y resgistros de git pero guarda los cambios que tengamos en staging, y lo unico que se hace es aplicar ultimas actualizaciones un nuevo commit.

### **git reset --hard:** 
borra todo.

### **git reset HEAD:**
este comando sirve para sacar archivos del area de staging, no los borra lo unico que hace es agregar los ultimos cambios y que los archivos no se envien al ultimo commit.

### **git clone + url del repositorio local** 
Este comando funciona cuando queremos bajar los cambio del repositorio a nuestro escritorio, lo cual crea una copia en nuestro escritorio y crea una base de datos en tiempo real.

### **git log --stat**
nos muestra el cambien especifico que se realizo en el archivo.


### **git fech**

Este comando permite hace traer los archivos pero no me crea una copia de estos.

### **git marge:** 
Esto nos permite fucionar la nueva rama con la rama pricipal para que asi se guarden los cambios realizados. 

### **git commit -am ""**
Automaticamente añade los cambios pero solo funciona con archivos que se les hizo add previamente.

# Ramas GIT
Las ramas de nos permite hacer cambios a nuestro proyecto sin necesidad de afectar la rama principal.

- **git branch-nombre de la rama**: con este comando se genera una nueva rama.

- **git checkout nombre rama**: con este comando podemos saltar de una rama a otra.

- **git checkout -b rama**:
Genera una rama y nos mueve a ella automaticamente, es decir, es la combinacion de git checkout y branch al mismo tiempo.

- **git reset id-commit:**
nos lleva a cualquier commit no importa la rama, ya que identificamos el id del tag, eliminando el historial de los commit posteriores al tag seleccionado.

- **git checkout rama-o-id-commit:** nos lleva a cualquier commit sin borrar los commir posteriores al tag seleccionado.

~~**"SIEMPRE GUARDAR CAMBIOS EN RAMA ANTES DE CAMBIAR A OTRA RAMA"**~~

# **git marge**

El comando nos permite crear un nuevo commit con la combinacion de dos ramas (La rama donde nos encontramos cuando ejecutamos el comando y la rama que indiquemos despues del comando).

Siempre debemos estar en la rama pricipal antes de realizar el git marge para que todos los cambios que agregamos queden es esta. 

ejemplo:

* git checkout master
  git merge cabecera

otra opcion es crear un nuevo commit en la rama cabecera combinando todos los cambios de cualquier otra rama.

* git checkout cabecera
  git merge cualquier-otra-rama.

# Conflictos en las ramas.

los archivos con conflictos por el comando **git merge** entran en un nuevo estado que conocemos como Ubmerged. solo debemos ejecutar **git add** para pasarlos al area de staging
y **git commit** para aplicar los cambios en el repositorio.

**Lo que hacemos para solucionar el conflicto es aceotar los cambios de ultimo momento o dejarlo tal cual como esta aceptando desde el editor.**

## Revertir un merge.

Para cancelar un merge utilizamos en siguiente comando:

* git merge --abort


# NOTA 
Copia de repositorio.

para copiar un repositorio remoto a un repositorio local debemos utilizar el comando **git clone <url>** 
, para enviar cambios al repositorio remoto se utiliza el **git push** para la actualizacion de repositorio local usamos **git fetch** luego lo fusionamos con **git merge**, para traer dato y fusionarlos a la vez usamos **git pull**, Para crear commits rápidamente, fusionando **git add** y **git commit -m ""**, usamos **git commit -am ""**.


# GITHUB
Es una plataforma que nos permite guardar repositorios es git que se podran usar como servidores remotos y donde se podran ejecutar algunos comandos de forma visual e interactiva.

**README.md**: Es un archivo que viene por defecto, es muy buena practica porque no lleva a describir el proyecto que contiene el repositorio.

## Clonacion de repositorio.

para clonar un repositorio desde de GitHub se debe copiar la url del repositorio y ejecutar **git clone url**, esto descargara la version que se encuentra en el proyecto de gitHub.

## Repositorio GutHub a decumento local.

Utilizaremos **git init**

* guardar la URL del repositorio de GitHub con el nombre origin 

*git remote add origin URL*

* verfivar si la URL se guardo correctamente.

*git remote*

*git remote -v*

* traer la version del repositorio remoto y hacer merge para crear un commit con los archivos de ambas partes, podemos usar **git fetch** y **git merge** o solo **git pull** con el flag **--allow-unrelated-histories.**

*git pull origin master --allow-unrelated-histories*

* por ultimo es el **git push** para guardar cambios en nuestro repositorio local en github.

*git push origin master*

# Llaves Publicas y Privadas.

Las llaves publicas y privadas que se conocen tambien como asimetrico de un solo camino, nos sirve para mandar mensajes privados dentro de varios nodos, ya que al firmar el mensaje como una llave publica esta esta vinculada a una llave privada con la cual podemos leer el mensaje que nos quieren transmitir.

Esto nos ayuda a desifrar todos los archivos y que los podamos compartir de una manera mas segura sin el riesgo de que estos sean encontrados por hackers.

## Funcionamiento.

* Ambas personas deben crear su llave publica y privada.

* Ambas personas podran compartir su llave publica a las otras partes.

* la persona que quiere compartir un mensaje puede usar la llave publica de la otra persona para cifrar los archivos y asegurarse que solo puedan ser descifrados con la llave privada de la persona con la que queremos compartir el mensaje.

* el mensaje esta cifrado y puede ser enviado a la otra persona sin problemas.

* la persona por ultimo podra utilizar su llave privada para descifrar el mensaje.

# SSH 

La creacion de las ssh es necesario solo una vez por cada computadora, lo que hacemos agregandola a git es creando una forma de comunicarnos mas segura sin necesidad de escribir nuestro usuario y contraseña a cada comento.

ssh:

git remote set-url origin url-ssh-del-repositorio-en-github.

ej:
 git remote set-url origin git@github.com:sara-34/curso-profesional-git-git-hub-platzi.git

 ## Comandos para copiar la llave ssh:
**Windows**

 clip < ~/.ssh/id_rsa.pub

**Linux (Ubuntu):**

cat ~/.ssh/id_rsa.pub

**Mac:**

pbcopy < ~/.ssh/id_rsa.pub


## **Tags y Versiones Git**

GitHub Desktop te permite crear etiquetas anotadas. Las etiquetas se asocian con confirmaciones, así que puedes utilizarlas para marcar un punto individual en el historial de tu repositorio, incluyendo los números de versión para un lanzamiento.

en si es como tener versiones antiguas de nuestro proyectos como lo son desde el inicio.

Los tags o etiquetas nos permiten asignar versiones a los commits con cambios mas importantes o significativos de nuestro proyecto.

# **Comandos:**

* crear un nuevo tag y asignarlo a un commmit:

git tag -a nombredeltag iddelcommit.

* borrar un tag del repositorio local:

git tag -d nombredeltag

* listar los tag de nuestro repositorio local:

git tag , git show-ref --tags.

* publicar un tag en el repositorio remoto:

git push origin --tags.

* borrar un tag del repositorio remoto:

git tag -d nombredeltag y git push origin :refs/tags/nombredeltag

## Nota:

*Se puede poner alias* *ejemplo:*

*alias arbolito="git log -all --graph --decorate --oneline"*


git log --all --graph --decorate --oneline

*Con cada codigo que* *deseemos recortar lo* *podemos agregar con* *alias.*

Para llamarlo:

git alias(nombre del alias).

Para generar un comando complejo con varios comandos de una forma optimizada, utilizamos conjuntos de sentencias conocidas como alias.

# Manejo de ramas en GitHub

Las ramas nos permiten hacer cambios a nuestro archivos sin modificar la version orifinal, esto nos da la posibilidad de trabajar con ramas que nunca se envian a github 

La ventaja que tiene usar ramas es que las modificaciones solo afectarán a esa rama en particular. Si luego de “guardar” los archivos(usando commit) nos movemos a otra rama (git checkout otraRama) veremos como las modificaciones de la rama pasada no aparecen en la otraRama.

## **Comandos de manejo de ramas de GitHub.**

* *Crear rama:*

**git branch nombreRama**

* *movernos a otra rama:*

**git checkout nombreRama.**

* *crear una rama en el repositorio local:*

**git branch nombreRama**
**git checkout -b nombreRama.**


* *Publicar una rama local al repositorio remoto:*

**git push origin nombreRama.**

### *Podemos ver nuestro  entorno graficamente con  el comando:*

* gitk

# Colaboradores en nuestro repositorio.

* Hacer commit con el nuevo mensaje que queremos:

git commit -amend

* corregir el mensaje.

* traer el repositorio remoto.

git pull origin master.

* ejecutar el cambio.

git push --set-upstream origin master.

Por defecto, cualquier persona puede clonar o descargar el proyecto que tengamos en github siempre y cuando lo tengamos publico, pero no podran hscer commits, ni la creacion de ramas, para solucionar esto lo que debemos de hacer es añadir a una persona como nuestro colaborador en el repositorio.

## Pasos:
* en github, vista la pagina principal de repositorio.

* debajo de tu nombre de repositorio, da clic en settings.

* en la barra lateral izquierda da clic en Manage Access.

* da clic en invite collaborator.

* comienza a teclear el nombre de la persona que deseas invitar dentro del campo de busqueda. Posteriormente, da clic en algun nombre de lista de coincidencias (Add[user] to [repository]).

* Aceptar la invitacion que llega al correo.

## Nota:

" **git clone url-del-remoto** este comando nos permite clonar el repositorio de forma local. La url puede ser HTTP o SSh, si tenemos agregado nuestra llave publica en Github".

"Los archivos binarios para una mejor practica no deberian ser agregados al repositorio git"

# **Pull Requests:**

Usualmente en el entorno profesional se bloquea la rama master, y para poder enviar el codigo a esta rama debemos pasar primero por un *code review*, luego de que esto de apruebe lo que hacemos es unir el codigo con un marge request.

Para realizar las pruebas enviamos el codigo a servidores llamados *staging develop (servidores de pruebas)* luego de realizar las pruebas adecuadas estos pasan al servidor de produccion *merge request*

 los PR(pull requests) son la base de la colaboracion a proyectos Open Sourse(proyectos de codigo abierto), por lo general es forkear el proyecto, implementar el cambio en una nueva rama, hacer el PR y esperar que los administradores del proyecto hagan merge o pidan algun cambio en el codigo o commits que se hicieron.

 ## **Proceso para realizar un pull request.**

 * Un pull request es un estado intermedio antes de enviar el merge.

 * el pull request permite que otro miembros del equipo revisen el codigo y asi aprobar el merge a la rama.

 * permite a las personas que no forman el equipo, trabajar y colaborar con una rama.

* la persona que tiene la responsabilidad de aceptar los pull request y hacer los merge tienen un perfil especial y son llamado DevOps.

 
El pull request es una funcionalidad de GitHub, en la que un colaborador pide que revisen sus cambios antes de hacer merge a una rama normalmente es la principal(main).

Al hacer el pull se puede entablar una conversacion con los usuario y mirar si se rechazan o no los cambios realizados.

## **Pasos para realizar un pull request**

* Se trabaja en una rama paralela los cambios que se desean.

git checkout -b <rama>.

* Se hace commit a la rama

git commit -am "<comentario>"

* Se suben al remoto los cambios 

git push origin <rama>

* En GitHub se hace el pull request comparando la rama master con la rama del fix-type

* Uno o varios colaboradores revisan que el codigo sea correcto y dan feedback (en el chat del pull request).

* El colaborador hace los cambios que sea en la rama y lo vuelve a subir al remoto(automaticamente jala la historia de los cambios que se hagan en la rama, en remoto).

* Se aceptan los cambios en GitHub.

* Se hace merge a master desde GitHub

# **FORK**
Cuando queremos participar en un proyecto que existe pero no tenemos permisos para escribir en el lo que hacemos en **bifucarlo** (hacer un "fork"), que consiste en crear una copia completa del repositorio bajo nuestro control, el cual podremos manejar a nuestra manera.

a la hora de bifucarlo lo que hacemos es ir a la pagina del proyecto y desde esta apretar el boton **fork**, depues clonaremos el repositorio con el **git clone** para tenerlo en nuestro escritorio, para que todo se fusiones lo que hacemos es un **pull request** esperando que se realice el **merge** con el original.

Para traer los cambios del repositorio forkeado agregamos una nueva fuente remota:

git remote add upstream url-repositorio.

luego traemos los cambios del original para actualizar en el repositorio forkeado:

git pull upstream master (traemos cambios del repositorio original)

git push origin master (enviamos cambios a nuestro repositorio forkeado)

# Deploy

Es un proceso que permite enviar al servidor uno o varios archivos, este servido puede ser de prueba, desarrollo o produccion.

## **Pasos para realizarlo.**

* Entrar a la carpeta de los archivos del servidos.

* copiar link en clone, elegir entre https o ssh del repositorio a contribuir.

   * En la carpeta deseada se clona el repositorio.

git clone url 

Deploy:

* Realiza cambios y commit en guthub.
* traer al repositorio local las actualizaciones para el servidor en la carpeta de los archivos del servidor.

git pull ramaRemota main

## **Ignorar Archivos en el repositorio**

Comando para ocultar archivos es **.gitignore** y se inicia con un (*).

No todos los archivos que agregas a un proyecto deberían ir a un repositorio. Por ejemplo, cuando tienes un archivo donde están tus contraseñas que comúnmente tienen la extensión .env o cuando te estás conectando a una base de datos; son archivos que nadie debe ver.

# Pages.

GitHub tiene un servicio de hosting donde podemos alojar nuestro repositorio y hacer que nuestro contenido se vea en tiempo real.


# Rebase

Es el proceso de mover o combinar una secuencia de confirmaciones en una nieva confirmacion base. la reorganizacion es muy util y se visualiza facielmente en el contecto de un flujo de trabajo de ramas de funciones.

**para hacer un rebase en la rama feature de la rama master:**

*git checkout feature*

*git rebase master*

**Para fusionar la otra rama es lo mismo:**

*git checkout master.*

*git rebase feature.*

**//Cambiamos a la rama que queremos traer los cambios.**

git checkout experiment.

**//Aplicamos rebase para traer los cambios de la rama que queremos.**

git rebase master.

# Git Stash.

El stashed nos sirve para guardar cambios para despues, esto nos sirve para guardar cambios y poder cambiar de rama sin perder el trabajo que aun no se guarda con el commit.

### **git stash:** 
Este comando guarda el trabajo del staging en una lista temporal llamada stash.

*git stash*

**se puede colocar un mensaje en el stash para asi diferenciar el git stash**

*git stash save "mensaje identidicado"*

**para recuperar ultimos cambios desde el stash:**

*git stash pop*.

**Aplicacion de un stash especifico y eliminarlo del stash**

*git stash pop stash@{<num_stash>}*

**para retomar los cambios de una posicion especifica del stash puedes utilizar el comando.**

*git stash apply stash@{<num_stash>}*

**para ver la lista de cambios guardados en stash y poder recuperarlos.**

*git stash list*

**Crear una rama para guardar el stash.**

*git stash branch <nombre_de_la_rama>*

**si deseas crear una rama y aplicar un stash especifico**

*git stash branch nombre_rama stash*

**Eliminar elementos de stash**

*git stash drop.*

**Pero si, en cambio, conoces el índice del stash que quieres borrar (mediante git stash list) puedes utilizar el comando:**

*git stash drop stash@{<num_stash>}*


**Si, en cambio, deseas eliminar todos los elementos del stash, puedes utilizar:**

*git stash clear*


# **GIT CLEAN:**

*El comando clean actua en archivos sin seguimiento, este tipo de archivos son aquellos que se encuentran en el directorio de trabajo, pero que aun no se han añadido al indice de seguimiento de repositorio.*

**git clean**

*revision de archivos sin seguimiento.*

**git clean --dry-run**

*eliminar achivos sin seguimiento.*

**git clean -f**

**git log --oneline:** historial de commits.

# Git Cherry-pick:
Es un comando que permite tomar uno o varios commits de otra rama sin tener que hacer un merge(Aunque no es una buena practica).

**Se ejecuta de la siguiente manera.**

*git checkoutmaster*

 *git cherry-pick 7ec61c0*: sirve para llamar una linea en especial.

## Git Reset y Reflog: SOLO SE DEBEN USAR EN CASO DE EMERGENCIA.

Git guarda los cambios aunque decidas borrarlos, y estos archivos que se eliminan los podemos volver a ver con:

* git reflog

muchos comandos de Git aceptan un parametro para especificar una referencia.

* git checkout puedes moverte sin realizar ningun cambio.

   * git checkout eff544f

* git reset: Hará que el último commit sea el pasado por la ref, usar este comando sólo si sabes exactamente qué estás haciendo

* git merge: Puedes hacer merge de un commit en específico, funciona igual que con una branch, pero te hace el merge del estado específico del commit mandado

¿Qué pasa cuando todo se rompe y no sabemos qué está pasando? 

Con **git reset HashDelHEAD** nos devolveremos al estado en que el proyecto funcionaba.

**git reset --soft HashDelHEAD te mantiene lo que tengas en staging ahí.**

**git reset --hard HashDelHEAD resetea absolutamente todo incluyendo lo que tengas en staging.**

**Remendar commit**

Remendar un commit con *amend* puede modificar el commit mas reciente(emendar) en la misma rama.

**git add -A # Para hacer uso de amend los archivos deben de estar en staging
git commit --amend # Remendar último commit**

*Este comando sirve para agregar archivos nuevos o actualizar el commit anterior y no generar commits innecesarios.*

# Grep y Log

Para buscar, empleamos el comando **git grep color** y nos buscará en todo el proyecto los archivos en donde está la palabra color.

Con **git grep -n color** nos saldrá un output el cual nos dirá en qué línea está lo que estamos buscando.

Con **git grep -c color** nos saldrá un output el cual nos dirá cuántas veces se repite esa palabra y en qué archivo.

Si queremos buscar cuántas veces utilizamos un atributo de HTML lo hacemos con **git grep -c "<p>"**.

* git shortlog -sn: muestra cuantos commit han hecho cada miembro del equipo.

* git shortlog -sn --all: muestra cuantos commit han hecho cada miembro del equipo, hasta los que han sido eliminados.

* git shortlog -sn --all --no-merge: muestra cuantos commit ha hecho cada miembro, quitando los eliminados sin los merges.

* git blame ARCHIVO: muestra quien hizo cada cosa línea por línea.

* git COMANDO --help:
muestra como funciona el comando.

* git blame ARCHIVO
 -Llinea_inicial,linea_final: 
 muestra quien hizo cada cosa línea por línea, indicándole desde qué línea ver. Ejemplo -L35,50.

* git branch -r: se muestran todas las ramas remotas.

* git branch -a: se muestran todas las ramas, tanto locales como remotas.