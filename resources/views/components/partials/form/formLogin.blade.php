<div class="container">
    <form action="/login" method="POST">
        @csrf
        <label for="username" class="form-label text-light pt-2">Usuario/Email</label>
        <input type="text" name="username" id="username" class="form-control">
        @if ($errors->has('username'))
            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
        @endif
        <label for="password" class="form-label text-light pt-2">Contraseña</label>
        <input type="password" name="password" id="password" class="form-control"/>
        @if ($errors->has('username'))
            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
        @endif
        <br>
        <x-partials.messages.messages class="container"/>
        <br>
        <input type="submit" value="Iniciar Sesión"  class="btn btn-secondary mb-3">
    </form>
    <br>
    <a href="/register">Crear nueva cuenta</a>
</div>