# CatAData

**CatAData** es una aplicación web sencilla y simpática que muestra datos curiosos sobre gatos, obtenidos desde una API externa. El objetivo es que el usuario interactúe con la app de forma lúdica y ligera, y pueda ver un dato nuevo cada vez que lo desee. Además, se incorporará una funcionalidad básica para guardar información localmente.

---

## ✨ Objetivo

Crear una pequeña app interactiva en la que:

-   El usuario vea un dato curioso sobre gatos.
-   Al pulsar un botón, aparezca un nuevo dato.
-   Pueda marcar uno de esos datos como "favorito" para almacenarlo en una base de datos.

---

## 💻 Tecnologías a utilizar

-   **Laravel**: Framework backend en PHP para gestionar la lógica de la app.
-   **Docker**: Para crear un entorno de desarrollo autocontenible, sin necesidad de instalar nada manualmente.
-   **MySQL**: Base de datos para guardar datos favoritos.
-   **Blade**: Sistema de plantillas de Laravel para mostrar la interfaz al usuario.
-   **CatFact Ninja API**: API externa que proporciona datos aleatorios sobre gatos.

---

## 📚 Datos que vamos a guardar

Se guardarán los siguientes datos en la base de datos:

-   **ID del dato (UUID opcional)**
-   **Texto del hecho**
-   **Fecha en que se guardó como favorito**

Esto nos permite tener una pequeña sección de "favoritos" o "los mejores datos" que el usuario haya decidido conservar.

---

## 🚀 Flujo básico de la app

1. El usuario entra en la página principal.
2. Se muestra automáticamente un dato de gato al azar (usando la API).
3. El usuario puede:
    - Ver otro dato (botón "Dame otro")
    - Marcarlo como favorito (botón "Guardar")
4. El dato guardado se almacena en la base de datos local.
5. Habrá una página adicional para ver los datos guardados.

---

## 🚫 Lo que NO vamos a hacer (por ahora)

-   No pediremos login ni usuarios.
-   No validaremos repeticiones de datos.
-   No conectaremos redes sociales ni APIs complejas.
-   No usaremos frontend tipo React, Vue, etc.

---

## 📊 Potenciales mejoras futuras

-   Votar datos como "mejores".
-   Compartir por email.
-   Exportar los favoritos.
-   Asignar etiquetas según categoría o tipo de hecho (salud, historia, biológico, etc.)

---

Este documento es la base para organizar el desarrollo de **CatAData**, un proyecto simple y divertido para aprender Laravel, Docker y manejo básico de bases de datos de forma gradual.
