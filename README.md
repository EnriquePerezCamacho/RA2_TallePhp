# RA2_TallePhp
# Enrique Perez Camacho

# Tema 2: Sintaxis PHP
1. Ejercicio con echo y HTML Embebido
Crea un archivo PHP que imprime un formulario HTML usando la función echo. El
formulario debe contener un campo de texto para el nombre y un botón de envío.
Cuando el formulario se envía, muestra el nombre ingresado utilizando la misma
página PHP.

2. Ejercicio de Comentarios y Buenas Prácticas
Escribe un script en PHP que contenga una función de llamada
calcularAreaRectangulo($ancho, $alto). Documente cada parte del guión
con comentarios detallados, incluyendo la explicación de la función, los parámetros y
cómo se realiza la operación. Usa comentarios multilínea para explicar el propósito
general del script y comentarios de una sola línea para detallar las operaciones.

4. Ejercicio con Variables y Constantes Complejas
Declara una llamada constante GRAVITYcon el valor 9.8. Luego, crea una función
que acepta el nombre de un planeta y, si el planeta es "Tierra", multiplica un valor de
masa ingresado por la gravedad (utilizando la constante). Usa variables para
almacenar el resultado e imprimir un mensaje con la fuerza de gravedad aplicada.

# Tema 3: Tipos, Variables y Constantes
1. Ejercicio con Tipos y Conversión
Declara una variable de tipo cadena que contenga un número ( "25"). Luego,
convierte esta variable a un tipo de dato entero y realiza una suma con otro número.
Imprime el resultado antes y después de la conversión utilizando var_dump()para
ver el tipo de dato.

2. Ejercicio con Tipos Compuestos (Arrays Multidimensionales)
Crea un array multidimensional llamado $alumnosque contiene información de al
menos tres estudiantes. Cada estudiante debe tener un nombre, una edad y una
lista de materias con sus respectivas calificaciones. Registre la matriz para mostrar
el nombre de cada alumno y la calificación promedio de sus materias.

3. Ejercicio con Variables y Constantes
Define una constante TASA_INTEREScon el valor 0.05. Luego, escribe un script
que acepta una cantidad principal ingresada por el usuario y calcula el interés simple
después de un año, utilizando la constante. Imprima el resultado con un formato
adecuado.

# Tema 4: Operadores
1. Ejercicio con Operadores de Asignación y Condicionales
Declara una variable con un valor inicial de 100. Usa operadores de asignación (+=, -=, etc.) para modificar su valor en diferentes etapas y luego usa unacondicional ifpara determinar si el valor final es mayor o menor que 100.

2. Ejercicio con Operadores de Comparación y Lógicos
Declara tres variables: $a, $by $c, con valores numéricos diferentes. Utilice
operadores de comparación y lógicos para verificar si $aes mayor que $b y si $ces
menor que $a. Imprima un mensaje que indique si ambas condiciones son
verdaderas o si alguna es falsa.

3. Ejercicio con Operador Ternario Anidado
Defina una variable llamada $calificacionque contenga un valor numérico.
Utilice un operador ternario anidado para determinar si la calificación es
"Sobresaliente" (90-100), "Buena" (70-89), o "Necesita mejorar" (menor a 70).
Imprime el resultado.

# Tema 5: Estructuras de Control
1. Ejercicio con if, else, elseifpara Determinar Edad
Escribe un script en PHP que pida al usuario ingresar su edad. Luego, utiliza una
estructura if, elseif, elsepara imprimir un mensaje diferente según la edad:
"Eres menor de edad" (< 18), "Eres adulto joven" (18-35), "Eres adulto" (36-65),
"Eres alcalde" (> 65).

2. Ejercicio con Bucledo-while
Escribe un script en PHP que use un bucle do-whilepara pedir al usuario que
ingrese un número positivo. Si el número ingresado es negativo, el script debe
continuar pidiendo un número hasta que se ingrese uno positivo. Luego, imprime el
número positivo ingresado.

3. Ejercicio con switchpara Menús
Crea un menú de opciones con switch, donde el usuario pueda elegir entre
"Sumar", "Restar", "Multiplicar" y "Dividir". Solicita dos números al usuario y realiza la
operación seleccionada. Si el usuario selecciona una opción inválida, se muestra un
mensaje de error.

# Tema 6: Matrices
1. Ejercicio con Arrays y Recorrido Completo
Crea un array llamado $numerosque contiene los números del 1 al 10. Luego, usa
un bucle foreachpara recorrer el array y multiplicar cada número por 2. Almacena
los resultados en un nuevo array y muestra ambos arrays.

2. Ejercicio con Arrays Multidimensionales
Define un array multidimensional que contiene la información de tres productos:
nombre, precio, y cantidad_en_stock. Usa un bucle foreachpara calcular el
valor total de cada producto ( precio * cantidad_en_stock) y muestra los
resultados.

3. Ejercicio con Diferencias entre Arrays
Define dos arrays: $array1con los valores "rojo", "verde", "azul", y
$array2con "verde", "amarillo", "azul". Usamos array_diff()para
determinar qué colores están en $array1pero no en $array2. Imprime el
resultado.

# Tema 7: Funciones
1. Ejercicio con Funciones y Argumentos por Referencia
Define una función llamada incrementarPorValor()que acepte una variable por
referencia y la incremente en 10. Llama a la función pasando una variable y muestra
su valor antes y después de la llamada para ver el cambio.
2. Ejercicio con Función con Argumentos Predeterminados y Retorno
Crea una función llamada convertirTemperatura()que acepte dos
argumentos: una temperatura y una escala ( "C"o "F"). Por defecto, convierte de
Celsius a Fahrenheit. La función debe devolver la temperatura convertida. Utilice la
fórmula: (C * 9/5) + 32.
3. Ejercicio con Funciones Anónimas y Función array_map
Crea un array de números del 1 al 5. Usa una función anónima con
array_map()para elevar cada número al cuadrado y almacenar los resultados en
un nuevo array. Imprime el array original y el nuevo array.
