# 🎓 plataformaacademica - Plataforma de Estudio y Gestión Educativa

Este proyecto es una **solución integral para la gestión académica y preparación de exámenes**, diseñada para administrar bancos de preguntas, procesos de estudio guiado y simulacros de exámenes con un control administrativo y contable completo.

---

## 🚀 Hoja de Ruta y Módulos Funcionales

### A. Módulo de Autenticación y Usuarios
*   **Gestión de Acceso:** Registro, inicio de sesión y recuperación de contraseña.
*   **Comunicación:** Envío automático de credenciales por correo electrónico.
*   **Roles Definidos:**
    *   `Superadministrador` | `Administrador` | `Instructor`
    *   `Estudiante` | `Usuario de Examen` | `Usuario de Estudio`
*   **Creación Manual:** Soporte para usuarios institucionales sin pasarela de pago.

### B. Módulo de Acceso por Pago
*   **Integración:** Conexión con pasarelas de pago.
*   **Control Financiero:** Registro de valores, estados de pago (aprobado, pendiente, rechazado, vencido).
*   **Automatización:** Activación inmediata del acceso tras confirmación de pago.
*   **Exportación:** Reportes contables por rango de fechas para conciliación.

### C. Módulo de Banco de Preguntas
*   **Organización:** Preguntas categorizadas por **Pilares** y **Temas**.
*   **Modos:** Diferenciación entre modo estudio y modo examen.
*   **Contenido Rico:** Opción múltiple (A, B, C, D), respuestas correctas con explicaciones detalladas.
*   **Gestión Masiva:** Importación desde Excel e historial de cambios para auditoría.

### D. Módulo de Pilares y Temas
*   Estructura base de **5 pilares principales**.
*   Configuración dinámica del número de preguntas por pilar y temas asociados.

### E. Modo Estudio
*   **Interactividad:** Elección de pilar y generación de 22 preguntas aleatorias.
*   **Retroalimentación:** Feedback inmediato con opción de reintento hasta acertar.
*   **Seguimiento:** Registro de avances, fechas y efectividad en el primer intento.

### F. Modo Examen
*   **Simulacro Real:** Generación aleatoria de 110 preguntas (22 por cada uno de los 5 pilares).
*   **Evaluación:** Sin retroalimentación durante la prueba; calificación final en porcentaje.
*   **Aprobación:** Umbral del 60% para aprobar.
*   **Resultados:** Detalle global y por pilar para identificar áreas de mejora.

### G. Módulo de Estadísticas del Usuario
*   Histórico de simulaciones y exámenes.
*   Métricas de acierto por pilar y efectividad general.
*   Evolución del desempeño a través del tiempo.

### H. Módulo Administrativo de Estadísticas
*   **Métricas de Usuario:** Activos, registros por fecha y conversiones de pago.
*   **Análisis Académico:** Promedios de aprobación, pilares de mayor dificultad.
*   **Calidad:** Identificación de preguntas con alto índice de error para revisión.

### I. Módulo de Reportes Contables
*   Filtros por fecha, usuario, medio de pago y estado.
*   Exportación a Excel para gestión administrativa.

### J. Módulo de Configuración
*   Personalización de umbrales de aprobación y tiempos límite.
*   Gestión de vigencia de accesos y plantillas de correos.
*   Identidad visual (Nombre, logo y datos institucionales).

---

## 🏗️ Arquitectura Técnica

*   **Backend:** Laravel 12 (PHP 8.2+).
*   **Frontend:** Bootstrap 5.3 + jQuery 4.0 + Alpine.js.
*   **Base de Datos:** MySQL / PostgreSQL.
*   **Reportes:** jsPDF y SheetJS (XLSX).
*   **Compilación:** Vite para optimización de assets.

---

## 📁 Estructura del Proyecto

*   **[routes/](file:///c:/Users/victo/Herd/plataformaacademica/routes)**: Rutas de autenticación, estudio y administración.
*   **[app/Models/](file:///c:/Users/victo/Herd/plataformaacademica/app/Models)**: Modelos para `User`, `Pregunta`, `Pilar`, `Pago`, `Examen`, etc.
*   **[resources/views/](file:///c:/Users/victo/Herd/plataformaacademica/resources/views)**: Interfaz del estudiante y panel administrativo.

---

## ⚙️ Instalación

1. `composer install` & `npm install`
2. Configurar `.env` (DB, Mail, Pasarela de Pago)
3. `php artisan migrate --seed`
4. `npm run dev`
