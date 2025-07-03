<x-dashboard-layout>
    <h1 class="text-2xl font-bold mb-4">Listado de Sensores</h1>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif


    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <!-- table header start -->
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr class="border-gray-100 border-y dark:border-gray-800">
                <th class="py-3">
                    <div class="flex items-center">
                        <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                            Sensor
                        </p>
                    </div>
                </th>
                <th class="py-3">
                    <div class="flex items-center">
                        <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                            Batería
                        </p>
                    </div>
                </th class="py-3">
                <th class="py-3">
                    <div class="flex items-center">
                        <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                            Desgaste
                        </p>
                    </div>
                </th>
                <th class="py-3">
                    <div class="flex items-center">
                        <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                            Temperatura
                        </p>
                    </div>
                </th>
                <th class="py-3">
                    <div class="flex items-center col-span-2">
                        <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                            Acciones
                        </p>
                    </div>
                </th>
            </tr>
        </thead>
        <!-- table header end -->

        <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
            @foreach($sensores as $sensor)
                <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                    <td class="py-3">
                        <div class="flex items-center">
                            <div class="flex items-center gap-3">
                                <div class=" overflow-hidden rounded-md">
                                    <img src="{{ asset('images/icons/sensor.png')}}" alt="Product" width="40"
                                        height="auto" />
                                </div>
                                <div>
                                    <p class="font-medium text-gray-800 text-theme-sm dark:text-white/90">
                                        {{ $sensor->nombre }}
                                    </p>

                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="py-3">
                        <div class="flex items-center">
                            <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                                {{ $sensor->bateria }} %
                            </p>
                        </div>
                    </td>
                    <td class="py-3">
                        <div class="flex items-center">
                            <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                                {{ $sensor->desgaste }} %
                            </p>
                        </div>
                    </td>
                    <td class="py-3">
                        <div class="flex items-center">
                            <p class="text-gray-500 text-theme-sm dark:text-gray-400">
                                {{ $sensor->temperatura }} °C
                            </p>
                        </div>
                    </td>
                    <td class="py-3">
                        <div class="flex items-center">
                            <p
                                class="rounded-full  px-2 py-0.5 text-theme-xs font-medium text-blue-600 dark:bg-success-500/15 dark:text-success-500">
                                <a href="{{ route('sensores.edit', $sensor->id) }}" class="hover:underline">Editar</a>
                            </p>
                        </div>
                    </td>
                </tr>
                <!-- table item -->

            @endforeach

            <!-- table body end -->
        </tbody>
    </table>
</x-dashboard-layout>