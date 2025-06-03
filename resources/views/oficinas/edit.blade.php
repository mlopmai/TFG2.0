<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/templateHeaderFooter.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/formulario.css') }}">
</head>

<body>
<header class="header-outer">
	<div class="header-inner responsive-wrapper">
		<div class="header-logo">
			<img src="{{asset("assets/Icono1.png")}}" />
		</div>
		<nav class="header-navigation">
			<a href="#"></a>
			<a href="{{ route('oficinas.index') }}" class="btn btn-primary">Volver al inicio</a>
			<a href="#"></a>
		</nav>
	</div>
</header>

<main>
    <h2>Editando {{ $oficinas->nombre }}</h2>
    <div class="contentErorres">
        @foreach ($errors->all() as $error)
            <li style="color:red;">{{$error}}</li>
            <br>
        @endforeach
    </div>
    <form method="POST" action="{{route('oficinas.update', $oficinas->id)}}">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{old("nombre", $oficinas->nombre)}}" placeholder="nombre">
        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" value="{{old('direccion', $oficinas->direccion)}}" placeholder="direccion">
        <input type="submit" value="Enviar">
    </form>

    <form action="{{ route('oficinas.destroy', $oficinas->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('¿Estás seguro de que quieres eliminar este gimnasio?');" style="background-color: red; color: white; border: none; padding: 8px 12px; cursor: pointer;">
            Eliminar Gimnasio
        </button>
    </form>
    </main>

<footer>
    <footer class="footer-outer">
        <div class="footer-inner responsive-wrapper">
            <div class="footer-logo">
                <img src="{{asset("assets/Icono1.png")}}" />
            </div>
        </div>
</footer>
</body>

</html>