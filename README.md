# INTROD_PHP

## Tema1 
PHP
Comentarios, variables, constantes, arrays, arrays asociativos
Comentarios
Son notas dentro del código que el servidor ignora por completo; sirven para explicar, documentar o aclarar qué hace el programa.

Una sola línea: Se usan dos barras // o una almohadilla #.

Varias líneas: Se encierran entre /* y */.

### Variables y Constantes
Ambas sirven para guardar información, pero funcionan de manera distinta:

### Variables: 
Son “contenedores” para datos que pueden cambiar durante la ejecución.

Siempre empiezan con el signo de peso ($)seguidodelnombre(ejemplo:‘edad = 25;`).

# Constantes
Las constantes son valores fijos que se definen una sola vez y no pueden modificarse ni eliminarse durante la ejecución del programa. Se utilizan para representar información que debe permanecer invariable, como configuraciones o parámetros globales.

En PHP se crean mediante la función define() o con la palabra clave const. A diferencia de las variables, las constantes no llevan el signo $ delante de su nombre.

### Arrays y Arrays asociativos
Un array es una estructura que permite almacenar múltiples valores dentro de una sola variable, funcionando como una lista organizada.

### Arrays indexados: 
Los elementos se guardan en posiciones numéricas llamadas índices, que comienzan automáticamente desde 0. Esto significa que el primer valor ocupa la posición 0, el segundo la 1, y así sucesivamente.

### Arrays asociativos: 
En lugar de números, se utilizan claves personalizadas para identificar cada valor. Se escriben en formato clave => valor, lo que permite asociar etiquetas significativas a los datos.

Los arrays asociativos son especialmente útiles cuando se necesita relacionar información con nombres o categorías, como los detalles de un usuario (ejemplo: "nombre" => "Ana").

# Operados

## Aritmeticos

Los operadores aritméticos son las herramientas básicas de procesamiento de cualquier sistema. Su importancia radica en tres puntos:

## asignacion

Su función es gestionar el almacenamiento de datos; sin ellos, no podríamos guardar los resultados de nuestros cálculos.

## comparacion

Son la base de la toma de decisiones. Permiten que el programa pregunte: "¿Es el usuario mayor de edad?" o "¿Hay stock suficiente?".

## logica

Permiten crear reglas complejas. Sin ellos, no podrías validar condiciones múltiples como: "Si tiene usuario Y la contraseña es correcta".

## Incremento

Su función es el control de repetición. Son esenciales para recorrer listas de datos o crear cronómetros y contadores.