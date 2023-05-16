# New Date()

```
const today = new Date();
// Muestra la fecha y hora actual del sistema.
console.log(today);

const birthDate = new Date("1990-05-10T08:30:00");
//Muestra la fecha y hora correspondiente a 10 de mayo de 1990 a las 8:30AM.

console.log(birthDate);
```
Ademas de estos metodos, tambien puedes utilizar una serie de metodos para modificar la fecha y hora que representa un objeto Date.

setFullYear(): Establece el mes de la fecha representada.

- setMonth(): Establece el mes de la fecha representada.
- setDate(): Establece el dia del mes de la fecha representada.
- setHours(): Establece la hora de la fecha representada.
- setMinutes(): Establece los minutos de la fecha representada.
- setSeconds(): Establece los segundos de la fecha representada.

```
console.log(today);
console.log(birthDay);
console.log(today.getFullYear());
console.log(today.getMonth());
console.log(today.getDay());
console.log(today.getDate()); 
console.log(today.getHours());
console.log(today.getMinutes());
console.log(today.getSeconds());
console.log(today.getTime());
```

# UNIX Timestamp.
Se trata de un valor entero que representa el numero de segundo transcurridos desde el 1 de enero de 1970 a las 00:00:00 UTC.

**Sumando fechas.**
```
const today1 = new Date();
const TWO_DAYS_IN_MS = 2 * 24 * 60 * 60 * 1000;
const twoDayLater = new Date(today.getTime() + TWO_DAYS_IN_MS);

console.log(twoDayLater);
```
 

# ¿Por que usar Day.js?

- Es una libreria bastante liviana con soporte de treeshaking.
- Tiene una API intuitiva.
- Soporta multiples idiomas y formatos.
- Permite la manipulacion de fechas y horas de manera sencilla.

## Cosas que se pueden realizar con Day.js

- Sumar dias a una fecha.
- Restar horas a una fecha.
- Obtener la diferencia en dias entre dos fechas.
- Obtener el dia de la semana de una fecha.
- Redondear una fecha al inicio del dia.
- Tiempo relativo.


## Lista de los "Parsing tokens"

**input**
YY
YYYY
M
MM
MMM
MMMM
D
DD

**Ejemplo**
01
2001
1-12
01-12
jan-dec
january-december
1-31
01-31

**Descripcion**
Año de dos digitos.
Año de cuatro digitos.
Mes, comenzado en 1.
Mes, con dos digitos.
Nombre abreviado del mes.
Nombre completo del mes.
Dia del mes.
Dia del mes, con 2 digitos.


## Temporal API.

Temporal es una nueva API para trabajar con fechas y horas en JavaScript que esta en proceso de estandarizacion en el W3C.

Esta API tiene como objetivo resolver algunas de las limitaciones y problemas de diseño del objeto Date integrado en JavaScript, ofreciendo una sintaxis mas intitiva y consistente, y un conjunto de funcionalidades mas completas y precisas.
