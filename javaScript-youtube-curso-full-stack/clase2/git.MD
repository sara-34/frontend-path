# Git
Es un sistemas de control de versiones distribuido, gratuito y Open Source(Codigo Abierto no significa que sea gratis).

**¿Cual es la diferencia entre un sistema de control de versiones distribuido y uno centralizado?**
 Los sistemas **centralizados** son sistemas en los que se guarda el proyecto en el servidor centralizado para poderlo trabajar y enviar cambios al software que se esta programando, encambio los sistemas **distribuido** son cuando cada persona mantiene una copia de proyecto local.

# Git stage area.

Donde se guardan los archivos que ya se encuentran listo para commit, es decir todo lo que se encuentre en el staging area es a lo que se le va agregar el commit.

## Creacion de repositorio local 

- git init: Inicializamos el control de versiones.
- git status: Chequeamos el estado.
- git add .: Añadimos y guardamos los cambios en Staging area.
- git commit -"": Hacemos el commit.
- git log : Revisamos el log de los commits.
- git branch: crear y ver ramas.
- git checkout: cambio de rama.
- git checkout -b : cambiar y crear una nueva rama
- git merge: mezclar los cambios de ambas ramas.
- git remote add origin <url-repositorio-git> : Al repositorio que seran enviados los archivos.
- git push -u origin main: enviar cambios a la rama.
- git pull origin main: traerme los cambios de la rama. 
-git clone: clonar el repositorio.
-git remote -v: ver los repositorios a los qe se les agrega cambio(historial).



### Sintaxis moderna.

- git switch: cambiar de rama.
- git switch -c: cambiar y crear una nueva rama.

## Diferencia entre Checkout y Switch.

La cuestión es que **git checkout** es el antiguo comando que se usaba para crear y cambiar de rama. También se puede usar para restaurar los cambios de una determinada confirmación.

Pero **git switch** hace más que eso, te permite copiar archivos de cualquier rama o confirmar directamente en tu árbol de trabajo sin la necesidad de cambiar de rama.




