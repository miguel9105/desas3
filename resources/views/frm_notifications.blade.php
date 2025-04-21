<form action="{{ route('notifications.store') }}" method="POST" enctype="multipart/form-data" class="notification-form">
    @csrf {{-- Token de seguridad para evitar ataques CSRF --}}

    <h2 class="form-title">Notificación de Emergencia</h2>
    
    {{-- Campo para el título --}}
    <div class="form-group">
        <label for="titulo" class="form-label">
            Título de la notificación:
        </label>
        <input type="text" name="title" id="titulo" class="form-input" required placeholder="Ej: Terremoto en zona centro">
    </div>

    {{-- Campo para elegir el tipo de desastre --}}
    <div class="form-group">
        <label for="tipo" class="form-label">
            Tipo de desastre:
        </label>
        <select name="type" id="tipo" class="form-select" required>
            <option value="" disabled selected>Seleccione un tipo</option>
            <option value="terremoto">Terremoto</option>
            <option value="inundacion">Inundación</option>
            <option value="incendio">Incendio</option>
            <option value="tormenta">Tormenta</option>
            <option value="otro">Otro</option>
        </select>
    </div>

    {{-- Campo para la descripción --}}
    <div class="form-group">
        <label for="descripcion" class="form-label">
            Descripción del evento:
        </label>
        <textarea name="description" id="descripcion" class="form-textarea" required placeholder="Describa con detalle la situación..."></textarea>
    </div>

    {{-- Botón de envío --}}
    <div class="form-actions">
        <button type="submit" class="submit-btn">Enviar notificación</button>
    </div>
</form>

<style>
    .notification-form {
        max-width: 600px;
        margin: 2rem auto;
        padding: 2rem;
        background: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .form-title {
        color: #2c3e50;
        text-align: center;
        margin-bottom: 1.5rem;
        font-weight: 600;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-label {
        display: block;
        margin-bottom: 0.5rem;
        color: #34495e;
        font-weight: 500;
        font-size: 1rem;
    }

    .form-input, .form-select, .form-textarea {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-size: 1rem;
        transition: all 0.3s ease;
        box-sizing: border-box;
    }

    .form-input:focus, .form-select:focus, .form-textarea:focus {
        border-color: #3498db;
        box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        outline: none;
    }

    .form-select {
        appearance: none;
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 0.75rem center;
        background-size: 1em;
    }

    .form-textarea {
        min-height: 120px;
        resize: vertical;
    }

    .submit-btn {
        width: 100%;
        padding: 0.75rem;
        background-color: #e74c3c;
        color: white;
        border: none;
        border-radius: 6px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .submit-btn:hover {
        background-color: #c0392b;
    }

    .form-actions {
        margin-top: 2rem;
    }

    /* Efectos para dispositivos móviles */
    @media (max-width: 768px) {
        .notification-form {
            padding: 1.5rem;
            margin: 1rem;
        }
    }
</style>