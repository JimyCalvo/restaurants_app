<x-layouts.app.app title="Resturantes">

    <h1>REGISTRO</h1>





    <div >
        <form action="{{ route('restaurantes.store') }}" method="POST" enctype="multipart/form-data" class="container ps-5 pe-5 ms-5 me-5 ">
            @csrf
            <label>Razon social</label>
            <input type="text" class="form-control" name="RazonSocial" value="{{ old('RazonSocial') }}">
            @error('RazonSocial')
                <small style="color: red">{{ $message }}</small>
            @enderror
            <br>
            <label>Nombre del Restaurante</label>
            <input type="text" class="form-control" name="nombreRestaurante" value="{{ old('nombreRestaurante') }}">
            @error('nombreRestaurante')
                <small style="color: red">{{ $message }}</small>
            @enderror
            <br>
            <label>Direccion del local</label>
            <input type="text" class="form-control" name="direccionLocal" value="{{ old('direccionLocal') }}">
            @error('direccionLocal')
                <small style="color: red">{{ $message }}</small>
            @enderror
            <br>
            <label>Gerente del local</label>
            <input type="text" class="form-control" name="nombreGerente" value="{{ old('nombreGerente') }}">
            @error('nombreGerente')
                <small style="color: red">{{ $message }}</small>
            @enderror
            <br>
            <label>Foto</label>
            <input type="file" class="form-control"  name="fotoLocal" value="{{ old('fotoLocal') }}">
            @error('fotoLocal')
                <small style="color: red">{{ $message }}</small>
            @enderror
            <br>
            <label>Tipo de Local</label>
            <br>
            <label> Restaurante:
                <input type="radio" name="categoriaLocal" value="Restaurante" value="{{ old('categoriaLocal') }}">
                @error('categoriaLocal')
                    <small style="color: red">{{ $message }}</small>
                @enderror
            </label>
            <label> Comida Rapida:
                <input type="radio" name="categoriaLocal" value="Comida Rapida" value="{{ old('categoriaLocal') }}">
                @error('categoriaLocal')
                    <small style="color: red">{{ $message }}</small>
                @enderror
            </label>
            <label> Cafeteria:
                <input type="radio" name="categoriaLocal" value="Cafeteria" value="{{ old('categoriaLocal') }}">
                @error('categoriaLocal')
                    <small style="color: red">{{ $message }}</small>
                @enderror
            </label>
            <label> Bar:
                <input type="radio" name="categoriaLocal" value="Bar" value="{{ old('categoriaLocal') }}">
                @error('categoriaLocal')
                    <small style="color: red">{{ $message }}</small>
                @enderror
            </label>
            <label> Miselanea:
                <input type="radio" name="categoriaLocal" value="Miselanea" value="{{ old('categoriaLocal') }}">
                @error('categoriaLocal')
                    <small style="color: red">{{ $message }}</small>
                @enderror
            </label>
            <br>
            <label>Direccion de E-mail</label>
            <input type="text" class="form-control" name="correoLocal" value="{{ old('correoLocal') }}">
            @error('correoLocal')
                <small style="color: red">{{ $message }}</small>
            @enderror
            <br>
            <div id="botones">
                <button class="btn btn-outline-success" type="submit">Registrar</button>
            </div>


        </form>
    </div>

    <a href="{{ route('restaurantes.index') }}">
        <h1>Regresar</h1>
    </a>


</x-layouts.app.app>
