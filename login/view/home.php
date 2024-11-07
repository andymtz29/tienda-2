

<style>
body {
    font-family: Arial, sans-serif;
    background-image: url('https://i.pinimg.com/736x/f4/82/6a/f4826ad396c7d299f79736521cb1fda8.jpg');
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    min-height: 100vh;
    color: #151515;
}


        .login-container {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
        }

        .login-form {
            width: 100%;
            max-width: 400px;
            margin: auto;
        }

        .cerrar-sesion, .editar {
            position: absolute;
            top: 10px;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
            color: white;
            font-weight: bold;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .cerrar-sesion {
            right: 10px;
            background-color: #ff4d4d;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .cerrar-sesion:hover {
            background-color: #ff1a1a;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .editar {
            right: 160px;
            background-color: #4CAF50;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .editar:hover {
            background-color: #45a049;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .cerrar-sesion i, .editar i {
            margin-right: 8px;
        }
    </style>


<body>
<h1><i class="fas fa-list"></i> Lista de Productos</h1>

<div class="table-container">
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th><i class="fas fa-hashtag"></i>ID</th>
                <th><i class="fas fa-box"></i>Producto</th>
                <th><i class="fas fa-dollar-sign"></i>Precio</th>
                <th><i class="fas fa-layer-group"></i>Cantidad</th>
                <th><i class="fas fa-cog"></i>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?php echo htmlspecialchars($producto['id_producto']); ?></td>
                    <td><?php echo htmlspecialchars($producto['producto']); ?></td>
                    <td><?php echo htmlspecialchars($producto['precio']); ?></td>
                    <td><?php echo htmlspecialchars($producto['cantidad']); ?></td>
                    <td class="actions">
                        <a href="./app/controller/editar.php?id=<?php echo $producto['id_producto']; ?>" class="edit">
                            <i class="fas fa-edit"></i>Editar
                        </a>
                        <a href="#" class="delete" onclick="eliminar_producto(<?php echo $producto['id_producto']; ?>);">
                            <i class="fas fa-trash-alt"></i>Eliminar
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="container">
        <a href="./app/controller/agregar.php" class="add-product">
            <i class="fas fa-plus"></i>Agregar Producto
        </a>

        <button class="cerrar-sesion" id="cerrar">
            <i class="fas fa-sign-out-alt"></i>Cerrar Sesión
        </button>

        <a href="./info_usuario.php" class="editar" id="editar">
            <i class="fas fa-user-edit"></i>Editar Usuario
        </a>
    </div>
</div>
</body>