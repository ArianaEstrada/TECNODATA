<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Encabezado igual al que proporcionaste anteriormente -->
    <!-- ... -->
</head>
<body>
<!-- Barra de navegación igual a la que proporcionaste -->
<!-- ... -->

<div class="register-container">
    <div class="register-card">
        <div class="register-header">
            <i class="fas fa-laptop-code me-2"></i>TECNODATOS
            <h2>Crear Cuenta</h2>
            <p>Únete a nuestro sistema de gestión integral</p>
        </div>

        <div class="register-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Nombre -->
                <div class="mb-3">
                    <label for="nom" class="form-label">Nombre</label>
                    <input id="nom" class="form-control" type="text" name="nom" value="{{ old('nom') }}" required autofocus>
                    @error('nom')
                    <div class="mt-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Apellido Paterno -->
                <div class="mb-3">
                    <label for="ap" class="form-label">Apellido Paterno</label>
                    <input id="ap" class="form-control" type="text" name="ap" value="{{ old('ap') }}" required>
                    @error('ap')
                    <div class="mt-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Apellido Materno -->
                <div class="mb-3">
                    <label for="am" class="form-label">Apellido Materno</label>
                    <input id="am" class="form-control" type="text" name="am" value="{{ old('am') }}" required>
                    @error('am')
                    <div class="mt-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Teléfono -->
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input id="telefono" class="form-control" type="text" name="telefono" value="{{ old('telefono') }}" required>
                    @error('telefono')
                    <div class="mt-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Correo Electrónico -->
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo Electrónico</label>
                    <input id="correo" class="form-control" type="email" name="correo" value="{{ old('correo') }}" required>
                    @error('correo')
                    <div class="mt-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Tipo de Usuario (Rol) -->
                <div class="mb-3">
                    <label for="id_rol" class="form-label">Tipo de Usuario</label>
                    <select id="id_rol" class="form-control" name="id_rol" required>
                        <option value="">Seleccione un tipo</option>
                        @foreach($roles as $rol)
                            <option value="{{ $rol->id_rol }}" {{ old('id_rol') == $rol->id_rol ? 'selected' : '' }}>
                                {{ $rol->desc_rol }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_rol')
                    <div class="mt-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Contraseña -->
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input id="password" class="form-control" type="password" name="password" required>
                    @error('password')
                    <div class="mt-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Confirmar Contraseña -->
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                    <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required>
                    @error('password_confirmation')
                    <div class="mt-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-register">
                        <i class="fas fa-user-plus me-2"></i>Registrarse
                    </button>
                </div>

                <div class="register-footer">
                    <p>¿Ya tienes una cuenta? <a href="{{ route('login') }}">Inicia sesión</a></p>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap 5 JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
