# Formularios.

La forma adecuada para crear formularios correctos es:

   <!--Forma correcta de hacer un formulario-->
    <form action=""><!--Etiqueta que le dice al navegador que vamos a ingresar y crear un formulario-->
        <label for="nombre"><!--Sirve d einterfaz para el usuario-->
            <span>¿Cual es tu nombre?</span>
            <input type="text" id="nombre" placeholder="Ingresa tu nombre">
        </label>

        <label for="inicio"><!--Sirve d einterfaz para el usuario-->
            <span>¿Que dia inicio en platzi?</span>
            <input type="date" id="inicio">
        </label>

        <label for="hora"><!--Sirve d einterfaz para el usuario-->
            <span>¿Cual es la hora de inicio?</span>
            <input type="time" id="hora">
        </label>
    </form>