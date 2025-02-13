# Sistema-Gestion-Larabel

Este proyecto es un sistema de gestión de inventario diseñado para demostrar habilidades fundamentales en desarrollo de software. Utiliza un stack tecnológico moderno y está estructurado para ser escalable y fácil de mantener.

## Stack Tecnológico

### Backend
- **Laravel** (API)
- **PostgreSQL**
- **Docker**

### Frontend
- **React**
- **Tailwind CSS**
- **Axios** para llamadas API

## Estructura del Proyecto

```
Sistema-Gestion-Larabel/
├── backend/         # Laravel API
│   └── Dockerfile
├── frontend/        # React
│   └── Dockerfile
├── docker-compose.yml
└── README.md
```

## Funcionalidades Base

- **Dashboard** con estadísticas
- **CRUD** de productos/items
- **Sistema de usuarios y roles**
- **Reportes básicos** (PDF/Excel)

## Estructura Técnica

### Modelos Principales
- User
- Product
- Category
- Transaction
- Role/Permission (usando Spatie)

### Controladores Organizados
- Admin/DashboardController
- Admin/ProductController
- Admin/UserController
- ReportController

## Características Avanzadas

- **Autenticación** (Breeze o Jetstream)
- **API endpoints** para futura app móvil
- **Notificaciones** por email
- **Logs de actividad**
- **Subida de imágenes** (con resize)

## UI/UX

- **Tailwind CSS** o **Bootstrap**
- **Livewire** para interactividad
- **Gráficos** con Chart.js
- **Datatables** para listados

## Plan de Desarrollo

### Semana 1:
- Configuración inicial
- Autenticación
- Modelos y migraciones básicas

### Semana 2:
- CRUD completo
- Validaciones
- Tests básicos

### Semana 3:
- UI/UX
- Reportes
- Roles y permisos

## Instrucciones de Configuración

1. Clona el repositorio.
2. Navega a la carpeta del proyecto.
3. Ejecuta `docker-compose up` para iniciar los contenedores.
4. Accede a la aplicación en `http://localhost:3000` para el frontend y `http://localhost:8000` para el backend.

## Contribuciones

Las contribuciones son bienvenidas. Si deseas colaborar, por favor abre un issue o un pull request.

## Licencia

Este proyecto está bajo la Licencia MIT. Mira el archivo [LICENSE](./LICENSE) para más detalles.