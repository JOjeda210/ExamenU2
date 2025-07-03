<!DOCTYPE html>
<html lang="es-LA">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../assets/css/global.css">
    <link rel="stylesheet" href="../../assets/css/style_footer.css">
</head>
<body>
    <!-- Slidebar -->
    <nav class="sidebar">
        <ul>
            <li><a href="../../index.phtml">Cerrar sesión</a></li>
        </ul>
    </nav>
    <!-- Tabla -->
    <div class="main-content">
        <table class="info-table">
            <tr>
                <th>Escuela</th>
                <td>Universidad Politécnica de Quintana Roo</td>
            </tr>
            <tr>
                <th>Materia</th>
                <td>Tópicos de calidad del diseño de software</td>
            </tr>
            <tr>
                <th>Docente</th>
                <td>Ing. Andrés Olán</td>
            </tr>
        </table>
        <!-- Dashboard Cards -->
        <div class="dashboard-cards">
            <div class="card">
                <span class="card-title">Calificación</span>
                <span class="card-value">100%</span>
            </div>
            <div class="card">
                <span class="card-title">Promedio del grupo</span>
                <span class="card-value">10.0</span>
            </div>
            <div class="card">
                <span class="card-title">Integrantes</span>
                <span class="card-value">5</span>
            </div>
        </div>
        <h1>Bienvenido al examen de la U2 TCDS</h1>
        <p>Examen Unidad 2 integrantes</p>
        <!-- Integrantes -->
        <div class="integrantes-lista">
            <div class="integrante-card">Jesús Ojeda</div>
            <div class="integrante-card">Hilmar Hidalgo</div>
            <div class="integrante-card">Derek Arguelles</div>
            <div class="integrante-card">Jesús Mena</div>
            <div class="integrante-card">Raul Tucuch</div>
        </div>
    </div>
    <!-- Footer -->
    <?php include '../components/footer.phtml'; ?>
</body>
</html>