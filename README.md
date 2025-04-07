# APP TAREAS

Una aplicación de gestión de tareas desarrollada con Laravel 10, enfocada en la implementación de operaciones CRUD (Crear, Leer, Actualizar, Eliminar). Este proyecto sirve como plataforma de práctica para el manejo de estas operaciones fundamentales en el framework Laravel.

## Tabla de contenidos

- [Resumen](#resumen)
- [El reto](#el-reto)
- [Capturas de pantalla](#capturas-de-pantalla)
- [Enlaces](#enlaces)
- [Mi proceso](#mi-proceso)
- [Autor](#autor)
- [Agradecimientos](#agradecimientos)

## Resumen

### Descripción del proyecto

APP TAREAS es una aplicación web desarrollada con Laravel 10 que permite a los usuarios gestionar sus actividades diarias mediante un sistema intuitivo de lista de tareas.

### Objetivo principal

El objetivo de este proyecto es practicar y demostrar la implementación de operaciones CRUD completas utilizando Laravel 10, así como mejorar mis habilidades en el desarrollo de aplicaciones web con este framework.

### Características clave

- **Usabilidad**: Interfaz limpia e intuitiva que facilita la gestión de tareas.
- **Funcionalidades**: Creación, visualización, edición y eliminación de tareas, con categorización y priorización.
- **Diseño**: Diseño responsivo implementado con TailwindCSS para una experiencia óptima en dispositivos de escritorio y móviles.

## El reto

Los usuarios deben poder:

- Registrarse e iniciar sesión en la aplicación
- Crear nuevas tareas especificando título, descripción, categoría y fecha límite
- Ver todas sus tareas en un dashboard organizado
- Filtrar tareas por categoría, prioridad o estado de finalización
- Editar los detalles de las tareas existentes
- Marcar tareas como completadas
- Eliminar tareas
- Recibir notificaciones sobre tareas próximas a vencer

## Capturas de pantalla

### Vista de escritorio
![Vista de escritorio](./desktop-preview.png)

### Vista móvil
![Vista móvil](./mobile-preview.png)

## Enlaces

- [Repositorio en GitHub](https://github.com/tuusuario/app-tareas)
- [URL del sitio en vivo](https://app-tareas.ejemplo.com)

## Mi proceso

### Tecnologías utilizadas

- Git para control de versiones
- Laravel 10 como framework principal
- DDEV para entorno de desarrollo local
- TailwindCSS para estilos y diseño responsivo
- PHP 8.1 como lenguaje de programación base

### Lo que aprendí

Este proyecto me permitió profundizar en varios aspectos clave del desarrollo web moderno con Laravel:

- Implementación de autenticación y autorización en Laravel:

```php
public function __construct()
{
    $this->middleware('auth')->except(['index', 'show']);
}
```

- Validación de formularios con reglas personalizadas:

```php
$request->validate([
    'titulo' => 'required|max:255',
    'descripcion' => 'nullable',
    'fecha_limite' => 'required|date|after:today',
    'categoria_id' => 'required|exists:categorias,id'
]);
```

- Uso de relaciones Eloquent para estructurar datos:

```php
public function usuario()
{
    return $this->belongsTo(User::class);
}

public function categoria()
{
    return $this->belongsTo(Categoria::class);
}
```

### Desarrollo continuo

Para futuras iteraciones del proyecto, me gustaría:

- Implementar un sistema de etiquetas para una categorización más flexible de las tareas
- Añadir funcionalidad para compartir listas de tareas entre usuarios
- Integrar un calendario para visualizar mejor las fechas límite
- Desarrollar una API RESTful para permitir integraciones con otras aplicaciones
- Implementar tests automatizados para mejorar la calidad y mantenibilidad del código

### Recursos útiles

- [Documentación oficial de Laravel](https://laravel.com/docs/10.x) - Una referencia completa para resolver cualquier duda sobre el framework.
- [TailwindCSS Documentation](https://tailwindcss.com/docs) - Guía esencial para el uso de clases y personalización del diseño.
- [Laracasts](https://laracasts.com/) - Tutoriales y screencasts que me ayudaron a resolver problemas específicos de implementación.
- [DDEV Documentation](https://ddev.readthedocs.io/) - Guía para configurar y optimizar el entorno de desarrollo local.

## Autor

- GitHub - [@tuusuario](https://github.com/tuusuario)
- Frontend Mentor - [@tuusuario](https://www.frontendmentor.io/profile/tuusuario)
- Twitter - [@tuusuario](https://twitter.com/tuusuario)

## Agradecimientos

Quiero agradecer especialmente a:

- La comunidad de Laravel en español por sus valiosos consejos y soluciones
- Mi mentor [Nombre del Mentor] por su guía durante el desarrollo de este proyecto
- Los colaboradores del curso [Nombre del Curso] que me inspiraron para implementar ciertas funcionalidades