<x-dashboard-layout>
    <h1 class="text-2xl font-bold mb-4">Editar Sensor</h1>

    <form method="POST" action="{{ route('sensores.update', $sensor) }}">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-medium">Nombre</label>
            <input type="text" name="nombre" value="{{ old('nombre', $sensor->nombre) }}"
                class="w-full border p-2 rounded" required>
            @error('nombre')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block font-medium">Batería (%)</label>
            <input type="number" name="bateria" value="{{ old('bateria', $sensor->bateria) }}" step="0.1" min="0"
                max="100" class="w-full border p-2 rounded" required>
            @error('bateria')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block font-medium">Desgaste (%)</label>
            <input type="number" name="desgaste" value="{{ old('desgaste', $sensor->desgaste) }}" step="0.1" min="0"
                max="100" class="w-full border p-2 rounded" required>
            @error('desgaste')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block font-medium">Temperatura (°C)</label>
            <input type="number" name="temperatura" value="{{ old('temperatura', $sensor->temperatura) }}"
                class="w-full border p-2 rounded" required>
            @error('temperatura')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block font-medium">Estado</label>
            <select name="estado" id="">
                <option value="activo" {{ old('estado', $sensor->estado) === 'activo' ? 'selected' : '' }}>Activo</option>
                <option value="desactivado" {{ old('estado', $sensor->estado) === 'desactivado' ? 'selected' : '' }}>
                    Desactivado</option>
            </select>
            @error('estado')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="px-4 py-2 bg-brand-500 text-white rounded hover:bg-brand-600">
            Guardar cambios
        </button>
    </form>
</x-dashboard-layout>