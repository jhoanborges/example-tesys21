[Requerimientos funcionales]
Desarrollar una API para administrar tareas.
Modelo: Tarea
- id (autoincremental)
- titulo (string, requerido)
- descripcion (text, opcional)
- completada (boolean, default: false)
- fecha_limite (date, debe ser futura)

- created_at, updated_at (timestamps)

Endpoints requeridos:

fecha_limite (date, debe ser futura)

- GET /api/tareas -> listar todas las tareas
- POST /api/tareas -> crear una nueva tarea
- PUT /api/tareas/{id} -> actualizar una tarea existente
- DELETE /api/tareas/{id} -> eliminar una tarea

[Requerimientos técnicos]
1. Framework: Laravel (LTS preferentemente)
2. Base de datos: MySQL o SQLite
3. Docker: docker-compose con Laravel, DB, y opcional phpMyAdmin

4. POO: uso de Form Requests, separación en Services/Repositories

5. Migraciones y seeder con datos de prueba


6. Uso de Git con commits claros

7. Documentación en README.md