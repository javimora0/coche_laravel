****
# API REST de administracion de alquileres de coches


# Requisitos Técnicos
La **API** está basada en el estándar **REST** y se comunica a través de **HTTP**.
Para el despliegue de la API es necesaria la instalación de **composer** y de **XAMPP**. Una vez descargado el repositorio, ejecutar el comando: `composer upgrade` en la consola


## Rutas de Usuarios

### Obtener un Usuario por DNI

- **Método**: GET
- **Ruta**: `/usuarios/{dni}`
- **Descripción**: Esta ruta permite obtener un usuario por su DNI.

### Obtener Todos los Usuarios

- **Método**: GET
- **Ruta**: `/usuarios`

- **Descripción**: Esta ruta permite obtener la lista de todos los usuarios.

### Crear un Nuevo Usuario

- **Método**: POST
- **Ruta**: `/usuarios`
- **Descripción**: Esta ruta permite crear un nuevo usuario.
- **JSON**:
``` 
{
    "dni":"dni",
    "nombre":"nombre",
    "tfno":"tfno",
    "edad":"edad"
}
```

### Modificar un Usuario

- **Método**: PUT
- **Ruta**: `/usuarios/{dni}`
- **Descripción**: Esta ruta permite modificar los datos de un usuario existente.
- **JSON**:
``` 
{
    "nombre":"nombre",
    "tfno":"tfno",
    "edad":"edad"
}
```

### Borrar un Usuario

- **Método**: DELETE
- **Ruta**: `/usuarios/{dni}`
- **Descripción**: Esta ruta permite eliminar un usuario por su DNI.

## Rutas de Coches

### Obtener un Coche por Matrícula

- **Método**: GET
- **Ruta**: `/coches/{matricula}`
- **Descripción**: Esta ruta permite obtener un coche por su matrícula.

### Obtener Todos los Coches

- **Método**: GET
- **Ruta**: `/coches`
- **Descripción**: Esta ruta permite obtener la lista de todos los coches disponibles.

### Borrar un Coche

- **Método**: DELETE
- **Ruta**: `/coches/{matricula}`
- **Descripción**: Esta ruta permite eliminar un coche por su matrícula.

### Modificar un Coche

- **Método**: PUT
- **Ruta**: `/coche/{matricula}`
- **Descripción**: Esta ruta permite modificar los datos de un coche existente.
- **JSON**:
``` 
{
    "marca":"marca",
    "modelo":"modelo",
    "precio_dia":"precio_dia"
}
```

### Insertar un Coche

- **Método**: POST
- **Ruta**: `/coches`
- **Descripción**: Esta ruta permite insertar un nuevo coche en la base de datos.
- **JSON**:
``` 
{
    "matricula":"matricula",
    "marca":"marca",
    "modelo":"modelo",
    "precio_dia":"precio_dia"
}
```

### Modificar el Precio de un Coche

- **Método**: PUT
- **Ruta**: `/coches/modificar_precio/{matricula}`
- **Descripción**: Esta ruta permite modificar el precio de un coche específico.
- **JSON**:
``` 
{
    "precio_dia":"precio_dia"
}
```

## Rutas de Alquileres

### Devolucion de Alquiler

- **Método**: POST
- **Ruta**: `/alquileres/solicitar/{dni}`
- **Descripción**: Esta ruta permite realizar una devolución de alquiler.
- **JSON**:
```
{
    "matricula":"matricula",
    "dias_alquilado":"dias_alquilado"
}
```

### Devolución de Alquiler

- **Método**: PUT
- **Ruta**: `/alquileres/devolucion`
- **Descripción**: Esta ruta permite realizar la devolución de un alquiler.
- **JSON**:
```
{
    "matricula":"matricula",
    "dni":"dni",
    "dias_alquilado":"dias_alquilado"
}
```

### Ranking de Alquileres

- **Método**: GET
- **Ruta**: `/alquileres/ranking`
- **Descripción**: Esta ruta permite obtener un ranking de alquileres.

## Ejemplos de Uso

Puedes utilizar herramientas como [Postman](https://www.postman.com/) o [ThunderClient](https://www.thunderclient.com/) para probar las rutas de esta aplicación.****