<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hechos de gatos guardados</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 2rem;
            background-color: #f8f8f8;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            background: white;
            margin-bottom: 1rem;
            padding: 1rem;
            border-radius: 6px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .nuevo {
            display: inline-block;
            margin-bottom: 2rem;
            padding: 0.5rem 1rem;
            background: #3b82f6;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <h1>🐾 Hechos de gatos guardados</h1>

    <a class="nuevo" href="{{ route('fact.new') }}">➕ Obtener un nuevo hecho</a>

    <ul>
        @forelse($facts as $fact)
            <li>{{ $fact->content }}</li>
        @empty
            <li>No hay ningún hecho aún. Haz clic en el botón para añadir uno.</li>
        @endforelse
    </ul>

</body>
</html>
