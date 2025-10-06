# 🧩 Proyecto MiApp – Sistema de Login con Perfil y Avatar

Este proyecto está desarrollado con **CodeIgniter 4**, e implementa un sistema de autenticación con login, panel de inicio y gestión de perfil con cambio de avatar.

---

## 🚀 Instalación y configuración inicial

###  Clonar o copiar el proyecto
Coloca la carpeta del proyecto dentro de tu directorio de XAMPP, por ejemplo:

### Ejecutar las migraciones
Abre una terminal dentro de la carpeta del proyecto y ejecuta:

```bash
php spark migrate
```

Esto creará las tablas necesarias en tu base de datos, incluyendo `usuarios`.

---

### Insertar usuarios por defecto (Seeder)
Ejecuta el seeder `SUsuarios` para registrar los usuarios iniciales:

```bash
php spark db:seed SUsuarios
```

---

## 👤 Usuarios de prueba

| Rol   | Usuario | Contraseña |
|--------|----------|-------------|
| ADMIN  | admin    | Admin789*   |
| USER   | andy     | Andy123     |

---

## 🌐 Ruta principal de la aplicación

Después de iniciar Apache y MySQL en XAMPP, ingresa en tu navegador:

```
http://miapp.test/
```

---

## 🔐 Flujo de uso

1. **Login**  
   - Ingresa con uno de los usuarios anteriores.  
   - Si las credenciales son correctas, se abrirá la vista `inicio`.

2. **Inicio (Dashboard)**  
   - Muestra tarjetas (`cards`) y un **navbar** con el nombre del usuario y su avatar.  
   - Si no tiene imagen, muestra un ícono por defecto.

3. **Perfil (`/perfil`)**  
   - Permite cambiar el avatar del usuario.  
   - La imagen se guarda en `public/images/users/`.

4. **Cerrar sesión**  
   - Desde el menú del usuario en el navbar, selecciona **Cerrar Sesión**.

---
## 💾 En caso de error con la base de datos

Si aparece un error como:
```
Table 'miapp.usuarios' doesn't exist
```
Ejecuta la migración, o en caso extremo, **crea la tabla manualmente** con este SQL:

```sql
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    apellidos VARCHAR(100) NOT NULL,
    nombres VARCHAR(100) NOT NULL,
    nomusuario VARCHAR(100) NOT NULL UNIQUE,
    claveacceso VARCHAR(255) NOT NULL,
    nivelacceso ENUM('ADMIN', 'USER') DEFAULT 'USER',
    avatar VARCHAR(255) DEFAULT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
```


