<style>
        body {
    height: 100vh;
    margin: 0;
    font-family: 'Arial', sans-serif;
    background-image: url('https://dm0qx8t0i9gc9.cloudfront.net/thumbnails/video/yRF5c-O/videoblocks-3d-connected-dots-polygons-and-lines-plexus-seamless-looping-motion-background-purple-violet_s0s_hqtww_thumbnail-1080_01.png'); /* Cambia la URL por la de tu imagen */
    background-size: cover;
    background-position: center;
}

.login-container {
    height: 100%;
}

.login-form {
    background-color: rgba(255, 255, 255, 0.9);
    max-width: 400px;
    width: 100%;
}

.form-floating label {
    font-size: 0.9rem;
}

.btn-block {
    padding: 10px;
    font-size: 1.1rem;
}

.shadow {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

    </style>
       
</head>
<body>

<div class="login-container d-flex justify-content-center align-items-center">
        <form id="frm_login" class="login-form p-4 shadow rounded">
            <div class="text-center mb-4">
                <i class="fa-solid fa-user-circle fa-3x text-primary"></i>
                <h3 class="mt-3">Iniciar Sesión</h3>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="usuario" name="usuario" type="text" placeholder="e-mail">
                <label class="text-primary" for="usuario">
                    <i class="fa-solid fa-envelope me-2"></i>Correo electrónico
                </label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="password" name="password" type="password" placeholder="password">
                <label class="text-primary" for="password">
                    <i class="fa-solid fa-lock me-2"></i>Contraseña
                </label>
            </div>
            <div class="d-grid">
                <button type="button" id="btn_iniciar" class="btn btn-primary btn-block">
                    <i class="fa-solid fa-sign-in-alt me-2"></i> Iniciar Sesión
                </button>
            </div>

            <div class="mt-4 d-flex justify-content-center">
            <a href="./registro_vista.php" class="text-dark">¿No tiene una cuenta? Regístrate</a>
             </div>

        </form>
    </div>

</body>