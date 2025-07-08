<x-dashboard-layout>

    <div class="col-span-12">
        <div
            class="rounded-2xl border border-gray-200 bg-white px-5 pb-5 pt-5 dark:border-gray-800 dark:bg-white/[0.03] sm:px-6 sm:pt-6">

            <div class="w-full pt-5 mx-auto sm:py-4">
                <a href="{{ route('sensores.index')}}"
                    class="inline-flex items-center text-sm text-gray-500 transition-colors hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300">
                    <svg class="stroke-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                        viewBox="0 0 20 20" fill="none">
                        <path d="M12.7083 5L7.5 10.2083L12.7083 15.4167" stroke="" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    Volver a sensores
                </a>
            </div>

            <div class="rflex flex-col justify-center flex-1 w-full max-w-md mx-auto">


                <h1 class=" mb-2 font-semibold text-gray-800 text-title-sm dark:text-white/90 sm:text-title-md">Editar
                    Sensor</h1>

                <form method="POST" action="{{ route('sensores.update', $sensor) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">Nombre</label>
                        <input type="text" name="nombre" value="{{ old('nombre', $sensor->nombre) }}"
                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                            required>
                        @error('nombre')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">Batería (%)</label>
                        <input type="number" name="bateria" value="{{ old('bateria', $sensor->bateria) }}" step="0.1"
                            min="0" max="100"
                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                            required>
                        @error('bateria')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">Desgaste (%)</label>
                        <input type="number" name="desgaste" value="{{ old('desgaste', $sensor->desgaste) }}" step="0.1"
                            min="0" max="100"
                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                            required>
                        @error('desgaste')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">Temperatura (°C)</label>
                        <input type="number" name="temperatura" value="{{ old('temperatura', $sensor->temperatura) }}"
                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                            required>
                        @error('temperatura')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">Estado</label>
                        <select name="estado" id="">
                            <option value="activo" {{ old('estado', $sensor->estado) === 'activo' ? 'selected' : '' }}>
                                Activo
                            </option>
                            <option value="desactivado" {{ old('estado', $sensor->estado) === 'desactivado' ? 'selected' : '' }}>
                                Desactivado</option>
                        </select>
                        @error('estado')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex items-center justify-end mt-4">


                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ms-4"
                            style="background-color: #041e42">
                            Guardar cambios
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-dashboard-layout>