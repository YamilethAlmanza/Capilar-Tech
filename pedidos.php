<!DOCTYPE html>
<html>
<head>
    <title>Pedidos - CapilarTech</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>🌿 CapilarTech - Módulo de Pedidos</h1>
    <a href="index.php">← Volver al Inicio</a>
    
    <hr>
    
    <h2>Gestión de Pedidos</h2>
    <p>Este módulo permite administrar todo el proceso de ventas:</p>
    
    <h3>✅ 1. Registrar nuevos pedidos</h3>
    <p>Permite ingresar un nuevo pedido al sistema con los datos del cliente y los productos solicitados.</p>
    <form>
        <p><strong>Nombre del cliente:</strong><br>
        <input type="text" placeholder="Escribe el nombre del cliente" size="40"></p>
        
        <p><strong>Productos solicitados:</strong><br>
        <textarea placeholder="Lista los productos..." rows="4" cols="40"></textarea></p>
        
        <p><strong>Total del pedido:</strong><br>
        <input type="text" placeholder="$ 0.000"></p>
        
        <p><input type="submit" value="✅ Guardar Pedido"> 
        <input type="reset" value="🔄 Limpiar"></p>
    </form>
    
    <hr>
    
    <h3>✅ 2. Ver estado de pedidos</h3>
    <p>Consulta el estado actual de cada pedido: pendiente, en proceso o entregado.</p>
    <table border="1" cellpadding="8">
        <tr>
            <th>N° Pedido</th>
            <th>Cliente</th>
            <th>Estado</th>
            <th>Fecha</th>
        </tr>
        <tr>
            <td>001</td>
            <td>María López</td>
            <td>✅ Entregado</td>
            <td>14/10/2026</td>
        </tr>
        <tr>
            <td>002</td>
            <td>Juan Pérez</td>
            <td>⏳ En proceso</td>
            <td>15/10/2026</td>
        </tr>
        <tr>
            <td>003</td>
            <td>Ana Gómez</td>
            <td>📋 Pendiente</td>
            <td>15/10/2026</td>
        </tr>
    </table>
    
    <hr>
    
    <h3>✅ 3. Actualizar información</h3>
    <p>Modifica los datos de un pedido registrado o cambia su estado.</p>
    <form>
        <p><strong>N° de Pedido a modificar:</strong><br>
        <input type="text" placeholder="Ej: 002"></p>
        
        <p><strong>Cambiar estado a:</strong><br>
        <select>
            <option>Pendiente</option>
            <option>En proceso</option>
            <option>Entregado</option>
            <option>Cancelado</option>
        </select></p>
        
        <p><strong>Observaciones:</strong><br>
        <textarea placeholder="Escribe los cambios..." rows="3" cols="40"></textarea></p>
        
        <p><input type="submit" value="💾 Actualizar Datos"></p>
    </form>
    
    <hr>
    
    <h3>✅ 4. Historial de ventas</h3>
    <p>Consulta todos los pedidos registrados y el total de ventas realizadas.</p>
    <table border="1" cellpadding="8">
        <tr>
            <th>Fecha</th>
            <th>Cliente</th>
            <th>Valor</th>
            <th>Estado</th>
        </tr>
        <tr>
            <td>14/10/2026</td>
            <td>María López</td>
            <td>$85.000</td>
            <td>✅ Entregado</td>
        </tr>
        <tr>
            <td>14/10/2026</td>
            <td>Carlos Ruiz</td>
            <td>$42.000</td>
            <td>✅ Entregado</td>
        </tr>
        <tr>
            <td>15/10/2026</td>
            <td>Juan Pérez</td>
            <td>$120.000</td>
            <td>⏳ En proceso</td>
        </tr>
        <tr>
            <td colspan="2"><strong>Total de Ventas:</strong></td>
            <td colspan="2"><strong>$247.000</strong></td>
        </tr>
    </table>
    
    <hr>
    <p><strong>🎯 Funcionalidad CRUD completa implementada:</strong> Crear, Leer, Actualizar y Eliminar</p>
</body>
</html>