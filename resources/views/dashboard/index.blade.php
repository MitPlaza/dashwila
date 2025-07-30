<x-dashboard-layout>

    <div class="col-span-12">
        <div
            class="rounded-2xl border border-gray-200 bg-white px-5 pb-5 pt-5 dark:border-gray-800 dark:bg-white/[0.03] sm:px-6 sm:pt-6">

            <h1 class="text-2xl font-bold mb-4">Usuarios</h1>

            <!-- Mensajes de éxito/error -->
            @if(session('success'))
                <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                    {{ session('error') }}
                </div>
            @endif



            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <!-- table header start -->
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="border-gray-100 border-y dark:border-gray-800">
                        <th class="py-3">
                            <div class="flex items-center">
                                <p class="font-medium p-2 text-gray-500 text-theme-xs dark:text-gray-400">
                                    Nombre
                                </p>
                            </div>
                        </th>
                        <th class="py-3">
                            <div class="flex items-center">
                                <p class="font-medium p-2 text-gray-500 text-theme-xs dark:text-gray-400">
                                    Email
                                </p>
                            </div>
                        </th class="py-3">

                        <th class="py-3">
                            <div class="flex items-center">
                                <p class="font-medium p-2 text-gray-500 text-theme-xs dark:text-gray-400">
                                    Rol
                                </p>
                            </div>
                        </th class="py-3">

                        <th class="py-3">
                            <div class="flex items-center col-span-2">
                                <p class="font-medium p-2 text-gray-500 text-theme-xs dark:text-gray-400">
                                    Acciones
                                </p>
                            </div>
                        </th>
                    </tr>
                </thead>
                <!-- table header end -->

                <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
                    @foreach($usuarios as $user)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                            <td class="py-3">
                                <div class="flex items-center">
                                    <div class="flex items-center gap-3">
                                        <div>
                                            <p class="font-medium p-2 text-gray-800 text-theme-sm dark:text-white/90">
                                                {{ $user->name }}
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-3">
                                <div class="flex items-center">
                                    <p class="text-gray-500 p-2 text-theme-sm dark:text-gray-400">
                                        {{ $user->email }}
                                    </p>
                                </div>
                            </td>
                            <td class="py-3">
                                <div class="flex items-center">
                                    <p class="text-gray-500 p-2 text-theme-sm dark:text-gray-400">
                                        {{ $user->rol }}
                                    </p>
                                </div>
                            </td>
                            <td class="py-3">
                                <div class="flex items-center gap-2">
                                    <!-- Botón Editar -->


                                    <!-- Botón Eliminar -->
                                    <form method="POST" action="{{ route('dashboard.destroy', $user) }}"
                                        onsubmit="return confirm('¿Estás seguro de que quieres eliminar este usuario?')"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="rounded-full px-4 py-2 text-theme-xs font-medium text-white bg-red-600 hover:underline">
                                            Eliminar
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <!-- table item -->

                    @endforeach

                    <!-- table body end -->
                </tbody>
            </table>

        </div>
    </div>
</x-dashboard-layout>