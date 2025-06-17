# API REST con PHP y MySQL

## 📌 Descripción
API para gestión de productos con operaciones CRUD (Create, Read, Update, Delete).  

## 🛠 Tecnologías
- **Backend**: PHP 8+
- **Base de datos**: MySQL (usando PDO para conexiones seguras)
- **Servidor**: Apache

- **Herramientas adicionales**:
  - Thunder Client (para pruebas)
  - Visual Studio Code

## 🔌 Endpoints

| Método | Endpoint      | Descripción               | 
|--------|---------------|---------------------------|
| `GET`  | `/products`   | Obtener todos los productos | 
| `GETID`  | `/products/{id}` | Obtener un producto    |
| `POST` | `/products`   | Crear producto            | 
| `PUT`  | `/products/{id}` | Actualizar producto      | 
| `DELETE` | `/products/{id}` | Eliminar producto       |

## 🚀 Instalación

### Requisitos previos
- PHP 8+ y MySQL instalados
- Apache configurado

### Pasos
1. **Clonar el repositorio**:
   ```bash
   git clone https://github.com/eliandevcol/php-api-mysql.git
   cd php-api-mysql
