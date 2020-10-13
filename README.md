##Para levantar el proyecto:
- Ejecutar el comando "./start" dentro del root del proyecto.
- El proyecto se abre en el navegador como "http://localhost/".
- El proyecto tiene implementado adminer, para abrirlo,
se debe de poner "http://localhost:8080/",
con las credenciales:
 ~~~
 servidor: mysql.
 usuario: test.
 contraseña: test.
 base de datos: abmProducto.
~~~
 - Para ejecutar las migraciones, ejecutar el comando "./webapp"
 dentro del root del proyecto, luego ejecutar el comando "php artisan migrate". 
