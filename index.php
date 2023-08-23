<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Streaming Premium</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto-Light', sans-serif;
            background-color: #000;
            color: #fff;
        }
        header {
            background-color: #fuchsia;
            padding: 10px 0;
            text-align: center;
        }
        header a {
            color: #fff;
            text-decoration: none;
            margin: 0 20px;
            text-transform: uppercase;
            font-size: 14px;
            transition: background-color 0.3s;
            padding: 5px;
            border-radius: 5px;
        }
        header a:hover {
            background-color: #fuchsia;
            color: #fff;
        }
        .title {
            text-align: center;
            margin: 100px 0;
            font-size: 36px;
            text-transform: uppercase;
        }
        .title span {
            display: block;
        }
        .description {
            text-align: center;
            margin-bottom: 50px;
            font-size: 18px;
        }
        .content-section {
            background-color: #222;
            padding: 50px 0;
        }
        footer {
            background-color: #fuchsia;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <a href="#">INICIO</a>
        <a href="#">NOVEDADES</a>
        <a href="#">NOSOTROS</a>
        <a href="#">ÚNETE</a>
    </header>
    <div class="content-section">
        <div class="title">
            <span>DISFRUTA DEL MEJOR CONTENIDO</span>
            <span>STREAMING PREMIUM</span>
        </div>
        <div class="description">
            Ofrecemos una amplia variedad de contenido premium para tu entretenimiento.
        </div>
    </div>
    <footer>
        <p>Derechos reservados 2020 - 2023 by ryze</p>
        <p>Design by ryze</p>
    </footer>
    <script>
        window.addEventListener("scroll", function() {
            document.body.style.backgroundColor = "#fuchsia";
        });
    </script>
</body>
</html>
