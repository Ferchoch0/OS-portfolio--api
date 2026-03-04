INSERT INTO projects (title, slug, category, description, stack, cover_url, featured, order_index, published_at, created_at, home_position) VALUES

('Otter Task v.2 - Migración React', 'otter-task-v2', 'Desarrollo Web', 
'Migración y modernización de Otter Task a arquitectura SPA. Frontend completamente reescrito en React consumiendo API RESTful en PHP. Incluye nuevas funcionalidades: generación de tickets, sistema de QR, modal de ventas mejorado y flujos más profesionales. Desplegado en infraestructura propia con Nginx y Ngrok.',
'React, PHP, REST API, Nginx, Ngrok', 'img/otter/', 1, 1, NOW(), NOW(), NULL),

('CPA Refrigeración Panel + App Mobile', 'cpa-refrigeracion', 'Desarrollo Web', 
'Sistema integral con app móvil para técnicos de refrigeración y panel de administración web. Permite registrar visitas técnicas, estado de equipos, incidencias y generar reportes. Desarrollado en equipo, liderando la implementación técnica del frontend en React integrado con API REST en PHP. Desplegado en infraestructura propia.',
'React, PHP, REST API, Mobile', 'img/cpa/', 1, 2, NOW(), NOW(), 1),

('CPA Desinfección Soporte Legacy Angular', 'cpa-desinfeccion', 'Desarrollo Web',
'Mantenimiento y evolución de sistema legacy (5 años) con app móvil y panel web en Angular, y API en Node.js. Actualización de librerías obsoletas, corrección de bugs críticos, implementación de nuevas funcionalidades y refactorización de módulos completos. Trabajo en equipo actuando como tech lead.',
'Angular, Node.js, Mobile', 'img/cpa-desinfeccion/', 0, 3, NOW(), NOW(), NULL),

('Beretta Logística Control de Transporte', 'beretta-logistica', 'Desarrollo Web',
'Panel de control logístico para empresa de transporte de cargas. Gestión de flota vehicular, historial de mantenimiento, planificación de rutas, control de combustible, administración de empleados y sistema de roles de acceso. Desarrollado en equipo con React, PHP y Tailwind CSS. Lideré la arquitectura técnica del proyecto.',
'React, PHP, Tailwind CSS', 'img/beretta/', 1, 4, NOW(), NOW(), NULL),

('Mottoso Propiedades Inmobiliaria Integral', 'mottoso-propiedades', 'Desarrollo Web',
'Plataforma inmobiliaria completa con catálogo de propiedades para compra y alquiler, sistema de tasaciones, integración de mapas interactivos, formularios de contacto y panel de administración. Desarrollado en equipo con React y PHP. Desplegado en infraestructura propia con Nginx.',
'React, PHP, Maps API, Nginx', 'img/mottoso/', 1, 5, NOW(), NOW(), 2),

('CPA Página Publicitaria Refrigeración', 'cpa-publicitaria', 'Marketing Digital',
'Página publicitaria para el servicio de refrigeración de CPA.',
'HTML, CSS, JavaScript', 'img/cpa-pub/', 0, 6, NOW(), NOW(), 3);