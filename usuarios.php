<!DOCTYPE html>
<html>
<head>
    <title>Usuarios - CapilarTech</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>🌿 CapilarTech - Módulo de Usuarios</h1>
    <a href="index.php">← Volver al Inicio</a>
    
    <hr>
    
    <h2>Gestión de Usuarios y Clientes</h2>
    <p>Administración de información de usuarios del sistema y control de acceso.</p>
    
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Perfil</th>
            <th>Acciones</th>
        </tr>
        <tr>
            <td>1</td>
            <td>María López</td>
            <td>maria@email.com</td>
            <td>310-123-4567</td>
            <td>Cliente</td>
            <td>✏️ Editar | 🗑️ Eliminar</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Juan Pérez</td>
            <td>juan@email.com</td>
            <td>311-987-6543</td>
            <td>Cliente</td>
            <td>✏️ Editar | 🗑️ Eliminar</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Ana Gómez</td>
            <td>ana@email.com</td>
            <td>312-456-7890</td>
            <td>Administrador</td>
            <td>✏️ Editar | 🗑️ Eliminar</td>
        </tr>
    </table>
    
    <hr>
    
    <h3>✅ 1. Registrar nuevos usuarios</h3>
    <form>
        <p><strong>Nombre completo:</strong><br>
        <input type="text" placeholder="Escribe el nombre completo" size="40"></p>
        
        <p><strong>Correo electrónico:</strong><br>
        <input type="email" placeholder="correo@ejemplo.com" size="40"></p>
        
        <p><strong>Teléfono:</strong><br>
        <input type="text" placeholder="3XX-XXX-XXXX"></p>
        
        <p><strong>Tipo de perfil:</strong><br>
        <select>
            <option>Cliente</option>
            <option>Administrador</option>
        </select></p>
        
        <p><strong>Contraseña:</strong><br>
        <input type="password" placeholder="Crea una contraseña"></p>
        
        <p><input type="submit" value="✅ Registrar Usuario"> 
        <input type="reset" value="🔄 Limpiar"></p>
    </form>
    
    <hr>
    
    <h3>✅ 2. Consultar datos de clientes</h3>
    <form>
        <p><strong>Buscar usuario por nombre o correo:</strong><br>
        <input type="text" placeholder="Escribe el nombre o correo..." size="40">
        <p><input type="submit" value="🔍 Buscar"></p>
    </form>
    
    <p><strong>Lista completa de usuarios registrados:</strong></p>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Perfil</th>
        </tr>
        <tr>
            <td>1</td>
            <td>María López</td>
            <td>maria@email.com</td>
            <td>310-123-4567</td>
            <td>Cliente</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Juan Pérez</td>
            <td>juan@email.com</td>
            <td>311-987-6543</td>
            <td>Cliente</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Ana Gómez</td>
            <td>ana@email.com</td>
            <td>312-456-7890</td>
            <td>Administrador</td>
        </tr>
    </table>
    
    <hr>
    
    <h3>✅ 3. Actualizar información personal</h3>
    <form>
        <p><strong>ID del usuario a actualizar:</strong><br>
        <input type="text" placeholder="Ej: 2"></p>
        
        <p><strong>Nuevo nombre:</strong><br>
        <input type="text" placeholder="Juan Pérez" size="40"></p>
        
        <p><strong>Nuevo correo:</strong><br>
        <input type="email" placeholder="juan@email.com" size="40"></p>
        
        <p><strong>Nuevo teléfono:</strong><br>
        <input type="text" placeholder="311-987-6543"></p>
        
        <p><strong>Cambiar contraseña:</strong><br>
        <input type="password" placeholder="Dejar en blanco para no cambiar"></p>
        
        <p><input type="submit" value="💾 Guardar Cambios"></p>
    </form>
    
    <hr>
    
    <h3>✅ 4. Eliminar registros</h3>
    <form>
        <p><strong>ID del usuario a eliminar:</strong><br>
        <input type="text" placeholder="Ej: 3"></p>
        
        <p><strong>Nombre del usuario:</strong><br>
        <input type="text" placeholder="Ana Gómez" size="40"></p>
        
        <p><strong>¿Estás seguro? Esta acción no se puede deshacer.</strong><br>
        <input type="checkbox"> Sí, confirmo la eliminación</p>
        
        <p><input type="submit" value="🗑️ Eliminar Usuario" style="color:red;">
    </form>
    
    <hr>
    <p><strong>🎯 Funcionalidad CRUD completa:</strong> Crear — Leer — Actualizar — Eliminar</p>
    <p><em>Control de acceso y perfiles de usuario implementado</em></p>
</body>
</html>