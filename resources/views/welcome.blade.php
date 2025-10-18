<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido a mi proyecto Laravel</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f8fafc;
            family=Roboto:wght@400;700&;
        }

        .mensaje-vida {
            margin: 60px auto;
            max-width: 700px;
            padding: 35px;
            background: #fffdfd;
            border-radius: 18px;
            text-align: center;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }

        .mensaje-vida h2 {
            family=Roboto:wght@400;700&; /* 💖 fuente cursiva y elegante */
            font-size: 40px;
            color: #e91e63;
            margin-bottom: 15px;
            letter-spacing: 2px;
        }

        .mensaje-vida p {
            font-family: 'Dancing Script', cursive; /* 💫 fuente moderna y limpia */
            font-size: 22px;
            color: #333;
            letter-spacing: 1.5px; /* espacio entre letras */
            line-height: 1.8;
        }
        h1 { color: #2d3748; }
        p { color: #4a5568; }
        img {
            width: 700px;          /* tamaño de la imagen */
            height: 300px;
            border-radius: 50%;    /* redondea la imagen */
            object-fit: cover;     /* mantiene la proporción */
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        .perfil__info h{
            font-size: 26px;
            color: #2b6cb0;
            margin-bottom: 12px;
            letter-spacing: 3px;
        }

        .perfil__info p{
           font-size: 20px;
            color: #1a202c;
            font-style: italic;
            letter-spacing: 3px;
            line-height:1.6;
        }

        .dato {
           font-size: 20px;
            color: #1a202c;
            font-style: italic;
            letter-spacing: 3px;
            line-height:1.6;
        }
    </style>
</head>
<body>
    <h1>👋 ¡Hola! Soy Jheny Chirinos Moreira</h1>
    <img src="{{ asset('img/jheny.jpg') }}" alt="Foto de Jheny">
    <!-- Mensaje de la vida -->
    <div class="mensaje-vida">
    <h2>🌷 Mensaje de la vida 🌷</h2>
    <p>"La vida no se trata de esperar a que pase la tormenta, sino de aprender a bailar bajo la lluvia."</p>
    </div>

    <!-- Tarjeta con los datos -->
  <div class="perfil__info">
    <div class="info__fila">
      <strong>Gmail:</strong>
      <a href="mailto:jhen12moreira05@gmail.com" class="dato">jhen12moreira05@gmail.com</a>
    </div>
    <div class="info__fila">
      <strong>Teléfono:</strong>
      <a href="tel:+59176977352" class="dato">+591 76977352</a>
    </div>
    <div class="info__fila">
      <strong>Edad:</strong>
      <span class="dato">29 años</span>
    </div>
    <div class="info__fila">
      <strong>Carrera:</strong>
      <span class="dato">Ingeniería en Sistemas</span>
    </div>
    <p>Este es mi primer proyecto en Laravel.</p>
    <p>Fecha: {{ date('10/10/2025') }}</p>
</body>
</html>
