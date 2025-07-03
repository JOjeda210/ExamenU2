# ExamenU2

Este proyecto es una aplicación web sencilla que incluye un formulario de inicio de sesión y un footer reutilizable.

## Integrantes

- Hilmar Hidaldo
- Jesús Ojeda
- Jesús Mena
- Derek Arguelles 
- Raul Tucuch

## Profesor

- Ing. Andrés Olán

## Materia

- Tópicos de calidad del diseño de software

## Universidad

- Universidad Politécnica de Quintana Roo

## Estructura del proyecto

- `index.phtml`: Página principal con el formulario de login.
- `components/footer.phtml`: Componente de pie de página incluido en la página principal.
- `assets/css/global.css`: Estilos generales de la aplicación.
- `assets/css/style_footer.css`: Estilos específicos para el footer.
- `src/views/dashboard.php`: Página a la que se redirige tras iniciar sesión.

## Instrucciones

1. Clona o descarga este repositorio en tu servidor local (por ejemplo, XAMPP).
2. Asegúrate de que la estructura de carpetas sea la siguiente:
    ```
    ExamenU2/
    ├── assets/
    │   └── css/
    │       ├── global.css
    │       └── style_footer.css
    ├── components/
    │   └── footer.phtml
    ├── src/
    │   └── views/
    │       └── dashboard.php
    └── index.phtml
    ```
3. Abre `index.phtml` en tu navegador para ver el formulario de inicio de sesión y el footer.

## Notas

- El footer se incluye usando PHP:  
  `<?php include 'components/footer.phtml'; ?>`
- Los estilos del footer están en `assets/css/style_footer.css`.