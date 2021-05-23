# select-database

Este pequeño sistema permite elegir entre tres bases de datos para guardar un nombre.

## Uso

1. Se deben crear las tres bases de datos, los scripts se encuentran en la carpeta `schema/`

2. Si se desea cambiar los nombres de las bases de datos, se tiene que modificar el documento `index.php` especificamente los atributos `value` de la etiqueta `option`

    ```html
    <select class="form-control" name="basedatos" id="basedatos">
        <option value="base-de-datos-1">Base de datos #1</option>
        <option value="base-de-datos-2">Base de datos #2</option>
        <option value="base-de-datos-3">Base de datos #3</option>
    </select>
    ```

3. Una ves creadas las bases de datos y modificado en caso de ser necesario ya se puede utilizar el sistema.