🚀 Sistema de Gestión Académica - Examen Final Progra Web II

Autor: Rodrigo Javier Calle Cruz 

Institución: Universidad Privada de Santa Cruz (UPDS)

Fecha: Abril 2026

📋 Descripción del Proyecto

El objetivo general del proyecto es diseñar e implementar un sistema web de gestion de tareas que responda a la necesidad de administrar actividades en contexto multilingues consolidando la competencias en desarrollo web estructurado, internacionalizacion, uso responsable de IA y reflexion sobre la inclusion linguistica y cultural, en coherencia con el modelo educativo por competencia de la UPDS.

Stack Tecnológico

    Framework: CakePHP 5.x (Strawberry)

    Lenguaje: PHP 8.4.0 (Optimized Runtime)

    Base de Datos: MariaDB 10.11

    Infraestructura: Docker / Docker Compose

    Servidor Web: Apache 2.4 (integrado en el contenedor)

    Control de Versiones: Git (GitHub)


🏗️ Arquitectura de la Solución

El proyecto se basa en la arquitectura MVC (Modelo-Vista-Controlador) propia de CakePHP, asegurando una separación clara entre la lógica de datos y la interfaz de usuario.


Componentes Clave:

    Capa de Datos: Uso de Migrations para la creación de tablas (Personas, Alumnos, Usuarios) y Seeds para datos de prueba.

    Lógica de Negocio: Implementación de validaciones personalizadas en los Table Objects para asegurar la integridad de los datos.

    Seguridad: Middleware de autenticación configurado para restringir el acceso a la gestión administrativa.

    Contenedores: Orquestación mediante Docker para garantizar que el entorno de desarrollo sea idéntico al de producción.


Guía de Despliegue (Entorno Docker)
1. Clonar el Repositorio
Bash

git clone https://github.com/rodrigo2005a/proyectowebII.git
cd proyectowebII


📁 Estructura Principal

    src/: Contiene el núcleo de la aplicación (Controllers, Models, Templates).

    config/: Archivos de configuración de base de datos y rutas.

    docker/: Archivos de configuración para la imagen de Apache/PHP.

    templates/: Vistas de la aplicación desarrolladas con PHP embebido.

