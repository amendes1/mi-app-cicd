<!DOCTYPE html>
<html>
<head>
    <title>🚀 App con CI/CD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>🎯 Mi App con CI/CD</h1>
        <p>✅ Versión: <?php echo getenv('APP_VERSION') ?: '1.0.0'; ?></p>
        <p>🕐 Servidor: <?php echo date('Y-m-d H:i:s'); ?></p>
        <p>🐘 PHP: <?php echo phpversion(); ?></p>
        
        <?php
        // Probar MySQL
        $host = getenv('DB_HOST') ?: 'No configurado';
        echo "<p>📊 BD Host: $host</p>";
        
        // Mostrar variables de entorno (para debug)
        if (getenv('SHOW_ENV')) {
            echo "<h3>🔧 Variables de Entorno:</h3>";
            echo "<pre>";
            foreach ($_SERVER as $key => $value) {
                if (strpos($key, 'APP_') === 0 || strpos($key, 'DB_') === 0) {
                    echo "$key: $value\n";
                }
            }
            echo "</pre>";
        }
        ?>
        
        <div class="status">
            <h2>📈 Estado del Sistema</h2>
            <div class="status-item">✅ PHP Funcionando</div>
            <div class="status-item">✅ Apache Activo</div>
            <div class="status-item">✅ CI/CD Configurado</div>
        </div>
    </div>
</body>
</html>
