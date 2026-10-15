<!DOCTYPE html>
<html>
<head>
    <title>Productos - CapilarTech</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>🌿 CapilarTech - Módulo de Productos</h1>
    <a href="index.php">← Volver al Inicio</a>
    
    <hr>
    
    <h2>Catálogo de Productos</h2>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Categoría</th>
            <th>Acciones</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Champú Hidratante</td>
            <td>$35.000</td>
            <td>Cuidado Diario</td>
            <td>✏️ Editar | 🗑️ Eliminar</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Acondicionador Reparador</td>
            <td>$32.000</td>
            <td>Tratamiento</td>
            <td>✏️ Editar | 🗑️ Eliminar</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Crema para Peinar</td>
            <td>$28.000</td>
            <td>Estilismo</td>
            <td>✏️ Editar | 🗑️ Eliminar</td>
        </tr>
    </table>
    
    <hr>
    
    <h3>✅ 1. Registrar nuevo producto</h3>
    <form>
        <p><strong>Nombre del producto:</strong><br>
        <input type="text" placeholder="Ej: Aceite de Argán" size="40"></p>
        
        <p><strong>Precio:</strong><br>
        <input type="text" placeholder="$ 0.000"></p>
        
        <p><strong>Categoría:</strong><br>
        <select>
            <option>Cuidado Diario</option>
            <option>Tratamiento</option>
            <option>Estilismo</option>
            <option>Accesorios</option>
        </select></p>
        
        <p><strong>Descripción:</strong><br>
        <textarea placeholder="Breve descripción del producto..." rows="3" cols="40"></textarea></p>
        
        <p><input type="submit" value="✅ Guardar Producto"> 
        <input type="reset" value="🔄 Limpiar"></p>
    </form>
    
    <hr>
    
    <h3>✅ 2. Buscar productos</h3>
    <form>
        <p><strong>Buscar por nombre o categoría:</strong><br>
        <input type="text" placeholder="Escribe el producto que buscas..." size="40">
        <p><input type="submit" value="🔍 Buscar"></p>
    </form>
    
    <hr>
    
    <h3>✅ 3. Editar información del producto</h3>
    <form>
        <p><strong>ID del producto a editar:</strong><br>
        <input type="text" placeholder="Ej: 2"></p>
        
        <p><strong>Nuevo nombre:</strong><br>
        <input type="text" placeholder="Acondicionador Reparador" size="40"></p>
        
        <p><strong>Nuevo precio:</strong><br>
        <input type="text" placeholder="$32.000"></p>
        
        <p><strong>Nueva categoría:</strong><br>
        <select>
            <option>Cuidado Diario</option>
            <option selected>Tratamiento</option>
            <option>Estilismo</option>
        </select></p>
        
        <p><input type="submit" value="💾 Actualizar Cambios"></p>
    </form>
    
    <hr>
    
    <h3>✅ 4. Eliminar producto</h3>
    <form>
        <p><strong>ID del producto a eliminar:</strong><br>
        <input type="text" placeholder="Ej: 3"></p>
        
        <p><strong>Nombre del producto:</strong><br>
        <input type="text" placeholder="Crema para Peinar" size="40"></p>
        
        <p><input type="submit" value="🗑️ Confirmar Eliminación" style="color:red;">
    </form>
    
    <hr>
    <p><strong>🎯 Funcionalidad CRUD completa:</strong> Crear (Registrar) — Leer (Buscar y Listar) — Actualizar (Editar) — Eliminar</p>
</body>
</html>