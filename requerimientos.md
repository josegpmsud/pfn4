# Base de datos

## bitacoras

- id (PK)
- bitacora
- id_usuario (FK)
- fecha
- hora
- ip
- so
- navegador
- usuario

## roles

- id (PK)
- rol
- fecha_creacion
- usuario_creacion
- fecha_modificacion
- usuario_modificacion

## usuarios

- id (PK)
- id_persona (FK)
- usuario
- clave
- habilitado
- fecha
- id_rol (FK)
- fecha_creacion
- fecha_modificacion
- usuario_creacion
- usuario_modificacion

## enlaces

- id (PK)
- id_pagina (FK)
- id_rol (FK)
- descripcion
- fecha_creacion
- fecha_modificacion
- usuario_creacion
- usuario_modificacion

## paginas

- id (PK)
- fecha_creacion
- fecha_modificacion
- usuario_creacion
- usuario_modificacion
- url
- estado
- nombre
- descripcion
- icono
- tipo

## personas

- id (PK)
- primer_nombre
- segundo_nombre
- primer_apellido
- segundo_apellido
- fecha_creacion
- fecha_modificacion
- usuario_creacion
- usuario_modificacion
