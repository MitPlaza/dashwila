<x-dashboard-layout>
    <div class="mx-auto">




        <div class="grid grid-cols-12 gap-4 mt-4">
            <div class="col-span-4">
                <x-metricas :sensoresActivos="$sensoresActivos" :sensoresCriticos="$sensoresCriticos"
                    :temperaturaPromedio="$temperaturaPromedio" />
            </div>
            <div class="col-span-8">
                <x-model-viewer :sensores="$sensores" :datos-historicos="$datosHistoricos" />
            </div>

        </div>
    </div>


    <!---inicio charts--->

    <!-- CÓDIGO COMPLETO: Grid + Modal con tu diseño elegante -->
    <div x-data="{ 
    showModal: false,
    selectedSensor: null,
    openModal(sensor) {
        this.selectedSensor = sensor;
        this.showModal = true;
    }
}">

        <!-- TU GRID ORIGINAL CON CLICK MODIFICADO -->
        <div class="grid col-span-12 space-y-8 mt-4">
            {{-- Anillo Interior --}}
            <div>
                <h2 style="background: #003459; padding: 10px; border-radius: 5px; color: #a6b8c1; font-weight: 400;"
                    class="text-xl font-bold mb-4 dark:text-white">Anillo Interior (Sensores 1-5)</h2>

                <div class="grid grid-cols-1 md:grid-cols-5 gap-2">
                    @foreach ($sensores->where('area', 'Anillo Interior') as $sensor)
                        @php
                            $desgaste = $sensor->estado === 'desactivado' ? 0 : $sensor->desgaste;
                            $temperatura = $sensor->estado === 'desactivado' ? 0 : $sensor->temperatura;
                            $bateria = $sensor->estado === 'desactivado' ? 0 : $sensor->bateria;
                        @endphp

                        <div class="border rounded-lg p-4 bg-white shadow dark:bg-gray-800 cursor-pointer hover:shadow-lg transition-shadow {{ $sensor->estado === 'desactivado' ? 'opacity-50' : '' }} {{ $sensor->desgaste > 40 ? 'sensor-critico' : '' }}"
                            style="border-color: @if($sensor->desgaste > 40) #dc2626 @else #a6b8c1 @endif" @click="openModal({
                                                                            id: {{ $sensor->id }},
                                                                            nombre: '{{ $sensor->nombre }}',
                                                                            estado: '{{ $sensor->estado }}',
                                                                            area: '{{ $sensor->area }}',
                                                                            desgaste: {{ $desgaste }},
                                                                            temperatura: {{ $temperatura }},
                                                                            bateria: {{ $bateria }}
                                                                         })">

                            <div class="flex items-center justify-between mb-2">
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">
                                    {{ $sensor->nombre }}
                                </h3>
                                <span class="inline-block w-3 h-3 rounded-full"
                                    style="background-color: @if($sensor->estado === 'desactivado') #9ca3af @elseif($sensor->desgaste < 40) #00a8e8 @else #dc2626 @endif">
                                </span>
                            </div>

                            <!-- Desgaste -->
                            <p class="text-gray-500 text-sm mb-1">Desgaste</p>
                            <div class="flex items-center justify-between mb-1">
                                <div></div>
                                <p class="text-xl font-bold" style="color: {{ $desgaste >= 40 ? '#dc2626' : '#00a8e8' }}">
                                    {{ $desgaste }}%
                                </p>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
                                <div class="h-2.5 rounded-full"
                                    style="width: {{ $desgaste }}%; background-color: {{ $desgaste >= 40 ? '#dc2626' : '#00a8e8' }};">
                                </div>
                            </div>

                            <!-- Temp y Bateria -->
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="text-gray-500 text-sm">Temp</p>
                                    <p class="font-semibold"
                                        style="color: {{ $temperatura >= 90 ? '#dc2626' : '#00a8e8'}};">
                                        {{ $temperatura }}°C
                                    </p>
                                </div>
                                <div class="text-right w-1/2">
                                    <p class="text-gray-500 text-sm">Batería</p>
                                    <p class="font-semibold">{{ $bateria }}%</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 mt-1 dark:bg-gray-700">
                                        <div class="h-2.5 rounded-full"
                                            style="width: {{ $bateria }}%; background-color: {{ $bateria < 30 ? '#dc2626' : ($bateria < 60 ? '#f59e0b' : '#00a8e8') }};">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- MODAL CON TU DISEÑO ELEGANTE -->
        <div x-show="showModal" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-[999999] flex items-center justify-center bg-black bg-opacity-50"
            style="display: none;">

            <div class="bg-white rounded-lg w-full max-w-4xl mt-8 max-h-[80vh] overflow-y-auto dark:bg-gray-800"
                @click.away="showModal = false">

                <!-- Header -->
                <div class="flex justify-between items-center p-6 border-b">
                    <div class="flex items-center gap-4">
                        <h2 class="text-2xl font-bold text-gray-800 dark:text-white"
                            x-text="selectedSensor ? selectedSensor.nombre : ''"></h2>
                        <span class="px-3 py-1 rounded-full text-sm font-medium" :class="{
                              'bg-blue-100 text-blue-800': selectedSensor && selectedSensor.desgaste < 20,
                              'bg-orange-100 text-orange-800': selectedSensor && selectedSensor.desgaste >= 20 && selectedSensor.desgaste < 40,
                              'bg-red-100 text-red-800': selectedSensor && selectedSensor.desgaste >= 40
                          }"
                            x-text="selectedSensor ? (selectedSensor.desgaste < 20 ? 'Óptimo' : (selectedSensor.desgaste < 40 ? 'Aceptable' : 'Crítico')) : ''">
                        </span>
                    </div>
                    <button @click="showModal = false" class="text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Métricas -->
                <div class="p-6" x-show="selectedSensor">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

                        <!-- Temperatura -->
                        <div class="bg-gray-50 rounded-lg p-4 dark:bg-gray-700">
                            <h3 class="text-sm text-gray-500 dark:text-gray-400 mb-1">Temperatura</h3>
                            <div class="text-2xl font-bold text-gray-800 dark:text-white mb-2"
                                x-text="selectedSensor ? selectedSensor.temperatura + '°C' : ''"></div>
                            <div class="text-xs text-gray-500 mb-2">
                                <span class="text-blue-600">Óptimo: 60-90°C</span> |
                                <span class="text-red-600">Crítico: >90°C</span>
                            </div>
                        </div>

                        <!-- Desgaste -->
                        <div class="bg-gray-50 rounded-lg p-4 dark:bg-gray-700">
                            <h3 class="text-sm text-gray-500 dark:text-gray-400 mb-1">Desgaste</h3>
                            <div class="text-2xl font-bold text-gray-800 dark:text-white mb-2"
                                x-text="selectedSensor ? selectedSensor.desgaste + '%' : ''"></div>
                            <div class="text-xs text-gray-500 mb-2">Límite: 50%</div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="h-2 rounded-full" :class="{
                                     'bg-blue-500': selectedSensor && selectedSensor.desgaste < 20,
                                     'bg-orange-500': selectedSensor && selectedSensor.desgaste >= 20 && selectedSensor.desgaste < 40,
                                     'bg-red-500': selectedSensor && selectedSensor.desgaste >= 40
                                 }" :style="'width: ' + (selectedSensor ? selectedSensor.desgaste : 0) + '%'"></div>
                            </div>
                        </div>

                        <!-- Batería -->
                        <div class="bg-gray-50 rounded-lg p-4 dark:bg-gray-700">
                            <h3 class="text-sm text-gray-500 dark:text-gray-400 mb-1">Batería</h3>
                            <div class="text-2xl font-bold text-gray-800 dark:text-white mb-4"
                                x-text="selectedSensor ? selectedSensor.bateria + '%' : ''"></div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-500 h-2 rounded-full"
                                    :style="'width: ' + (selectedSensor ? selectedSensor.bateria : 0) + '%'"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Gráfico Histórico de Temperatura -->
                    <div class="mb-8">
                        <div class="flex items-center gap-2 mb-4">
                            <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                </path>
                            </svg>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Histórico de Temperatura
                            </h3>
                        </div>
                        <div class="bg-white rounded-lg p-4 border">
                            <canvas id="graficoTemperaturaDinamico" height="200"></canvas>
                        </div>
                    </div>

                    <!-- Gráfico Histórico de Desgaste -->
                    <div>
                        <div class="flex items-center gap-2 mb-4">
                            <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                </path>
                            </svg>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Histórico de Desgaste</h3>
                        </div>
                        <div class="bg-white rounded-lg p-4 border">
                            <canvas id="graficoDesgasteDinamico" height="200"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <div class="px-6 pb-6">
                    <button class="px-6 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition-colors"
                        @click="showModal = false">
                        Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Anillo Medio --}}


    <!-- CÓDIGO SEPARADO PARA ANILLO MEDIO -->
    <div x-data="{ 
    showModalMedio: false,
    selectedSensorMedio: null,
    openModalMedio(sensor) {
        this.selectedSensorMedio = sensor;
        this.showModalMedio = true;
    }
}">

        <!-- GRID PARA ANILLO MEDIO -->
        <div class="grid col-span-12 space-y-8 mt-4">
            {{-- Anillo Medio --}}
            <div>
                <h2 style="background: #003459; padding: 10px; border-radius: 5px; color: #a6b8c1; font-weight: 400;"
                    class="text-xl font-bold mb-4 dark:text-white">Anillo Medio (Sensores 6-10)</h2>

                <div class="grid grid-cols-1 md:grid-cols-5 gap-2">
                    @foreach ($sensores->where('area', 'Anillo Medio') as $sensor)
                        @php
                            $desgaste = $sensor->estado === 'desactivado' ? 0 : $sensor->desgaste;
                            $temperatura = $sensor->estado === 'desactivado' ? 0 : $sensor->temperatura;
                            $bateria = $sensor->estado === 'desactivado' ? 0 : $sensor->bateria;
                        @endphp

                        <div class="border rounded-lg p-4 bg-white shadow dark:bg-gray-800 cursor-pointer hover:shadow-lg transition-shadow {{ $sensor->estado === 'desactivado' ? 'opacity-50' : '' }} {{ $sensor->desgaste > 40 ? 'sensor-critico' : '' }}"
                            style="border-color: @if($sensor->desgaste > 40) #dc2626 @else #a6b8c1 @endif" @click="openModalMedio({
                                                                        id: {{ $sensor->id }},
                                                                        nombre: '{{ $sensor->nombre }}',
                                                                        estado: '{{ $sensor->estado }}',
                                                                        area: '{{ $sensor->area }}',
                                                                        desgaste: {{ $desgaste }},
                                                                        temperatura: {{ $temperatura }},
                                                                        bateria: {{ $bateria }}
                                                                     })">

                            <div class="flex items-center justify-between mb-2">
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">
                                    {{ $sensor->nombre }}
                                </h3>
                                <span class="inline-block w-3 h-3 rounded-full"
                                    style="background-color: @if($sensor->estado === 'desactivado') #9ca3af @elseif($sensor->desgaste < 40) #00a8e8 @else #dc2626 @endif">
                                </span>
                            </div>

                            <!-- Desgaste -->
                            <p class="text-gray-500 text-sm mb-1">Desgaste</p>
                            <div class="flex items-center justify-between mb-1">
                                <div></div>
                                <p class="text-xl font-bold" style="color: {{ $desgaste >= 40 ? '#dc2626' : '#00a8e8' }}">
                                    {{ $desgaste }}%
                                </p>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
                                <div class="h-2.5 rounded-full"
                                    style="width: {{ $desgaste }}%; background-color: {{ $desgaste >= 40 ? '#dc2626' : '#00a8e8' }};">
                                </div>
                            </div>

                            <!-- Temp y Bateria -->
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="text-gray-500 text-sm">Temp</p>
                                    <p class="font-semibold"
                                        style="color: {{ $temperatura >= 90 ? '#dc2626' : '#00a8e8'}};">
                                        {{ $temperatura }}°C
                                    </p>
                                </div>
                                <div class="text-right w-1/2">
                                    <p class="text-gray-500 text-sm">Batería</p>
                                    <p class="font-semibold">{{ $bateria }}%</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 mt-1 dark:bg-gray-700">
                                        <div class="h-2.5 rounded-full"
                                            style="width: {{ $bateria }}%; background-color: {{ $bateria < 30 ? '#dc2626' : ($bateria < 60 ? '#f59e0b' : '#00a8e8') }};">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- MODAL PARA ANILLO MEDIO -->
        <div x-show="showModalMedio" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-[999999] flex items-center justify-center bg-black bg-opacity-50"
            style="display: none;">

            <div class="bg-white rounded-lg w-full max-w-4xl mt-8 max-h-[80vh] overflow-y-auto dark:bg-gray-800"
                @click.away="showModalMedio = false">

                <!-- Header -->
                <div class="flex justify-between items-center p-6 border-b">
                    <div class="flex items-center gap-4">
                        <h2 class="text-2xl font-bold text-gray-800 dark:text-white"
                            x-text="selectedSensorMedio ? selectedSensorMedio.nombre : ''"></h2>
                        <span class="px-3 py-1 rounded-full text-sm font-medium" :class="{
                          'bg-blue-100 text-blue-800': selectedSensorMedio && selectedSensorMedio.desgaste < 20,
                          'bg-orange-100 text-orange-800': selectedSensorMedio && selectedSensorMedio.desgaste >= 20 && selectedSensorMedio.desgaste < 40,
                          'bg-red-100 text-red-800': selectedSensorMedio && selectedSensorMedio.desgaste >= 40
                      }"
                            x-text="selectedSensorMedio ? (selectedSensorMedio.desgaste < 20 ? 'Óptimo' : (selectedSensorMedio.desgaste < 40 ? 'Aceptable' : 'Crítico')) : ''">
                        </span>
                    </div>
                    <button @click="showModalMedio = false" class="text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Métricas -->
                <div class="p-6" x-show="selectedSensorMedio">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

                        <!-- Temperatura -->
                        <div class="bg-gray-50 rounded-lg p-4 dark:bg-gray-700">
                            <h3 class="text-sm text-gray-500 dark:text-gray-400 mb-1">Temperatura</h3>
                            <div class="text-2xl font-bold text-gray-800 dark:text-white mb-2"
                                x-text="selectedSensorMedio ? selectedSensorMedio.temperatura + '°C' : ''"></div>
                            <div class="text-xs text-gray-500 mb-2">
                                <span class="text-blue-600">Óptimo: 60-90°C</span> |
                                <span class="text-red-600">Crítico: >90°C</span>
                            </div>
                        </div>

                        <!-- Desgaste -->
                        <div class="bg-gray-50 rounded-lg p-4 dark:bg-gray-700">
                            <h3 class="text-sm text-gray-500 dark:text-gray-400 mb-1">Desgaste</h3>
                            <div class="text-2xl font-bold text-gray-800 dark:text-white mb-2"
                                x-text="selectedSensorMedio ? selectedSensorMedio.desgaste + '%' : ''"></div>
                            <div class="text-xs text-gray-500 mb-2">Límite: 50%</div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="h-2 rounded-full" :class="{
                                 'bg-blue-500': selectedSensorMedio && selectedSensorMedio.desgaste < 20,
                                 'bg-orange-500': selectedSensorMedio && selectedSensorMedio.desgaste >= 20 && selectedSensorMedio.desgaste < 40,
                                 'bg-red-500': selectedSensorMedio && selectedSensorMedio.desgaste >= 40
                             }" :style="'width: ' + (selectedSensorMedio ? selectedSensorMedio.desgaste : 0) + '%'">
                                </div>
                            </div>
                        </div>

                        <!-- Batería -->
                        <div class="bg-gray-50 rounded-lg p-4 dark:bg-gray-700">
                            <h3 class="text-sm text-gray-500 dark:text-gray-400 mb-1">Batería</h3>
                            <div class="text-2xl font-bold text-gray-800 dark:text-white mb-4"
                                x-text="selectedSensorMedio ? selectedSensorMedio.bateria + '%' : ''"></div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-500 h-2 rounded-full"
                                    :style="'width: ' + (selectedSensorMedio ? selectedSensorMedio.bateria : 0) + '%'">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gráfico Histórico de Temperatura -->
                    <div class="mb-8">
                        <div class="flex items-center gap-2 mb-4">
                            <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                </path>
                            </svg>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Histórico de Temperatura
                            </h3>
                        </div>
                        <div class="bg-white rounded-lg p-4 border">
                            <canvas id="graficoTemperaturaMedio" height="200"></canvas>
                        </div>
                    </div>

                    <!-- Gráfico Histórico de Desgaste -->
                    <div>
                        <div class="flex items-center gap-2 mb-4">
                            <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                </path>
                            </svg>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Histórico de Desgaste</h3>
                        </div>
                        <div class="bg-white rounded-lg p-4 border">
                            <canvas id="graficoDesgasteMedio" height="200"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <div class="px-6 pb-6">
                    <button class="px-6 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition-colors"
                        @click="showModalMedio = false">
                        Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>





    {{-- Anillo Exterior --}}


    <!-- CÓDIGO SEPARADO PARA ANILLO EXTERIOR -->
    <div x-data="{ 
    showModalExterior: false,
    selectedSensorExterior: null,
    openModalExterior(sensor) {
        this.selectedSensorExterior = sensor;
        this.showModalExterior = true;
    }
}">

        <!-- GRID PARA ANILLO EXTERIOR -->
        <div class="grid col-span-12 space-y-8 mt-4">
            {{-- Anillo Exterior --}}
            <div>
                <h2 style="background: #003459; padding: 10px; border-radius: 5px; color: #a6b8c1; font-weight: 400;"
                    class="text-xl font-bold mb-4 dark:text-white">Anillo Exterior (Sensores 11-15)</h2>

                <div class="grid grid-cols-1 md:grid-cols-5 gap-2">
                    @foreach ($sensores->where('area', 'Anillo Exterior') as $sensor)
                        @php
                            $desgaste = $sensor->estado === 'desactivado' ? 0 : $sensor->desgaste;
                            $temperatura = $sensor->estado === 'desactivado' ? 0 : $sensor->temperatura;
                            $bateria = $sensor->estado === 'desactivado' ? 0 : $sensor->bateria;
                        @endphp

                        <div class="border rounded-lg p-4 bg-white shadow dark:bg-gray-800 cursor-pointer hover:shadow-lg transition-shadow {{ $sensor->estado === 'desactivado' ? 'opacity-50' : '' }} {{ $sensor->desgaste > 40 ? 'sensor-critico' : '' }}"
                            style="border-color: @if($sensor->desgaste > 40) #dc2626 @else #a6b8c1 @endif" @click="openModalExterior({
                                                                id: {{ $sensor->id }},
                                                                nombre: '{{ $sensor->nombre }}',
                                                                estado: '{{ $sensor->estado }}',
                                                                area: '{{ $sensor->area }}',
                                                                desgaste: {{ $desgaste }},
                                                                temperatura: {{ $temperatura }},
                                                                bateria: {{ $bateria }}
                                                             })">

                            <div class="flex items-center justify-between mb-2">
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">
                                    {{ $sensor->nombre }}
                                </h3>
                                <span class="inline-block w-3 h-3 rounded-full"
                                    style="background-color: @if($sensor->estado === 'desactivado') #9ca3af @elseif($sensor->desgaste < 40) #00a8e8 @else #dc2626 @endif">
                                </span>
                            </div>

                            <!-- Desgaste -->
                            <p class="text-gray-500 text-sm mb-1">Desgaste</p>
                            <div class="flex items-center justify-between mb-1">
                                <div></div>
                                <p class="text-xl font-bold" style="color: {{ $desgaste >= 40 ? '#dc2626' : '#00a8e8' }}">
                                    {{ $desgaste }}%
                                </p>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
                                <div class="h-2.5 rounded-full"
                                    style="width: {{ $desgaste }}%; background-color: {{ $desgaste >= 40 ? '#dc2626' : '#00a8e8' }};">
                                </div>
                            </div>

                            <!-- Temp y Bateria -->
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="text-gray-500 text-sm">Temp</p>
                                    <p class="font-semibold"
                                        style="color: {{ $temperatura >= 90 ? '#dc2626' : '#00a8e8'}};">
                                        {{ $temperatura }}°C
                                    </p>
                                </div>
                                <div class="text-right w-1/2">
                                    <p class="text-gray-500 text-sm">Batería</p>
                                    <p class="font-semibold">{{ $bateria }}%</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 mt-1 dark:bg-gray-700">
                                        <div class="h-2.5 rounded-full"
                                            style="width: {{ $bateria }}%; background-color: {{ $bateria < 30 ? '#dc2626' : ($bateria < 60 ? '#f59e0b' : '#00a8e8') }};">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- MODAL PARA ANILLO EXTERIOR -->
        <div x-show="showModalExterior" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-[999999] flex items-center justify-center bg-black bg-opacity-50"
            style="display: none;">

            <div class="bg-white rounded-lg w-full max-w-4xl mt-8 max-h-[80vh] overflow-y-auto dark:bg-gray-800"
                @click.away="showModalExterior = false">

                <!-- Header -->
                <div class="flex justify-between items-center p-6 border-b">
                    <div class="flex items-center gap-4">
                        <h2 class="text-2xl font-bold text-gray-800 dark:text-white"
                            x-text="selectedSensorExterior ? selectedSensorExterior.nombre : ''"></h2>
                        <span class="px-3 py-1 rounded-full text-sm font-medium" :class="{
                          'bg-blue-100 text-blue-800': selectedSensorExterior && selectedSensorExterior.desgaste < 20,
                          'bg-orange-100 text-orange-800': selectedSensorExterior && selectedSensorExterior.desgaste >= 20 && selectedSensorExterior.desgaste < 40,
                          'bg-red-100 text-red-800': selectedSensorExterior && selectedSensorExterior.desgaste >= 40
                      }"
                            x-text="selectedSensorExterior ? (selectedSensorExterior.desgaste < 20 ? 'Óptimo' : (selectedSensorExterior.desgaste < 40 ? 'Aceptable' : 'Crítico')) : ''">
                        </span>
                    </div>
                    <button @click="showModalExterior = false" class="text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Métricas -->
                <div class="p-6" x-show="selectedSensorExterior">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

                        <!-- Temperatura -->
                        <div class="bg-gray-50 rounded-lg p-4 dark:bg-gray-700">
                            <h3 class="text-sm text-gray-500 dark:text-gray-400 mb-1">Temperatura</h3>
                            <div class="text-2xl font-bold text-gray-800 dark:text-white mb-2"
                                x-text="selectedSensorExterior ? selectedSensorExterior.temperatura + '°C' : ''"></div>
                            <div class="text-xs text-gray-500 mb-2">
                                <span class="text-blue-600">Óptimo: 60-90°C</span> |
                                <span class="text-red-600">Crítico: >90°C</span>
                            </div>
                        </div>

                        <!-- Desgaste -->
                        <div class="bg-gray-50 rounded-lg p-4 dark:bg-gray-700">
                            <h3 class="text-sm text-gray-500 dark:text-gray-400 mb-1">Desgaste</h3>
                            <div class="text-2xl font-bold text-gray-800 dark:text-white mb-2"
                                x-text="selectedSensorExterior ? selectedSensorExterior.desgaste + '%' : ''"></div>
                            <div class="text-xs text-gray-500 mb-2">Límite: 50%</div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="h-2 rounded-full" :class="{
                                 'bg-blue-500': selectedSensorExterior && selectedSensorExterior.desgaste < 20,
                                 'bg-orange-500': selectedSensorExterior && selectedSensorExterior.desgaste >= 20 && selectedSensorExterior.desgaste < 40,
                                 'bg-red-500': selectedSensorExterior && selectedSensorExterior.desgaste >= 40
                             }" :style="'width: ' + (selectedSensorExterior ? selectedSensorExterior.desgaste : 0) + '%'">
                                </div>
                            </div>
                        </div>

                        <!-- Batería -->
                        <div class="bg-gray-50 rounded-lg p-4 dark:bg-gray-700">
                            <h3 class="text-sm text-gray-500 dark:text-gray-400 mb-1">Batería</h3>
                            <div class="text-2xl font-bold text-gray-800 dark:text-white mb-4"
                                x-text="selectedSensorExterior ? selectedSensorExterior.bateria + '%' : ''"></div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-500 h-2 rounded-full"
                                    :style="'width: ' + (selectedSensorExterior ? selectedSensorExterior.bateria : 0) + '%'">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gráfico Histórico de Temperatura -->
                    <div class="mb-8">
                        <div class="flex items-center gap-2 mb-4">
                            <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                </path>
                            </svg>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Histórico de Temperatura
                            </h3>
                        </div>
                        <div class="bg-white rounded-lg p-4 border">
                            <canvas id="graficoTemperaturaExterior" height="200"></canvas>
                        </div>
                    </div>

                    <!-- Gráfico Histórico de Desgaste -->
                    <div>
                        <div class="flex items-center gap-2 mb-4">
                            <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                </path>
                            </svg>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Histórico de Desgaste</h3>
                        </div>
                        <div class="bg-white rounded-lg p-4 border">
                            <canvas id="graficoDesgasteExterior" height="200"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <div class="px-6 pb-6">
                    <button class="px-6 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition-colors"
                        @click="showModalExterior = false">
                        Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>




    {{-- Anillo Exterior --}}


    </div>


    <style>
        .sensor-critico {
            animation: borderPulse 2s infinite ease-in-out;
        }

        @keyframes borderPulse {
            0% {
                border-color: #dc2626;
                box-shadow: 0 0 0 0 rgba(220, 38, 38, 0.7);
                opacity: 1;
            }

            50% {
                border-color: #dc2626;
                box-shadow: 0 0 0 10px rgba(220, 38, 38, 0);
                opacity: 0.5;
                /* Igual que opacity-50 de Tailwind */
            }

            100% {
                border-color: #dc2626;
                box-shadow: 0 0 0 0 rgba(220, 38, 38, 0);
                opacity: 1;
            }
        }
    </style>
    <!-- Chart.js - solo una vez -->

    <!-- PASO 2: Script para gráficos dinámicos -->
    <!-- Script completo con diagnóstico -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            console.log('DOM cargado, iniciando script dinámico...');

            // Variables globales para los gráficos
            let graficoTemperatura = null;
            let graficoDesgaste = null;

            // Verificar si los datos históricos existen
            try {
                @if(isset($datosHistoricos) && !empty($datosHistoricos))
                    // Datos históricos del controlador
                    const datosHistoricos = {!! json_encode($datosHistoricos) !!};
                    console.log('Datos históricos cargados:', datosHistoricos);

                    function crearGraficoTemperaturaDinamico(sensorId) {
                        const ctx = document.getElementById('graficoTemperaturaDinamico');
                        if (!ctx) {
                            console.error('Canvas de temperatura NO encontrado');
                            return;
                        }

                        // Destruir gráfico anterior si existe
                        if (graficoTemperatura) {
                            graficoTemperatura.destroy();
                            graficoTemperatura = null;
                        }

                        const datos = datosHistoricos[sensorId];
                        if (!datos || !datos.temperaturas || datos.temperaturas.length === 0) {
                            console.error('No hay datos de temperatura válidos para sensor:', sensorId);
                            return;
                        }

                        console.log('Creando gráfico de temperatura dinámico para sensor', sensorId, 'con', datos.temperaturas.length, 'puntos');

                        graficoTemperatura = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: datos.etiquetas,
                                datasets: [{
                                    label: 'Temperatura (°C)',
                                    data: datos.temperaturas,
                                    borderColor: '#3b82f6',
                                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                                    fill: true,
                                    tension: 0.4,
                                    pointRadius: 4,
                                    pointHoverRadius: 6
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                plugins: {
                                    legend: {
                                        display: true,
                                        position: 'top'
                                    }
                                },
                                scales: {
                                    y: {
                                        beginAtZero: false,
                                        grid: {
                                            color: 'rgba(0, 0, 0, 0.1)'
                                        }
                                    },
                                    x: {
                                        grid: {
                                            display: false
                                        }
                                    }
                                }
                            }
                        });
                    }

                    function crearGraficoDesgasteDinamico(sensorId) {
                        const ctx = document.getElementById('graficoDesgasteDinamico');
                        if (!ctx) {
                            console.error('Canvas de desgaste NO encontrado');
                            return;
                        }

                        // Destruir gráfico anterior si existe
                        if (graficoDesgaste) {
                            graficoDesgaste.destroy();
                            graficoDesgaste = null;
                        }

                        const datos = datosHistoricos[sensorId];
                        if (!datos || !datos.desgastes || datos.desgastes.length === 0) {
                            console.error('No hay datos de desgaste válidos para sensor:', sensorId);
                            return;
                        }

                        console.log('Creando gráfico de desgaste dinámico para sensor', sensorId, 'con', datos.desgastes.length, 'puntos');

                        graficoDesgaste = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: datos.etiquetas,
                                datasets: [{
                                    label: 'Desgaste (%)',
                                    data: datos.desgastes,
                                    borderColor: '#ef4444',
                                    backgroundColor: 'rgba(239, 68, 68, 0.1)',
                                    fill: true,
                                    tension: 0.4,
                                    pointRadius: 4,
                                    pointHoverRadius: 6
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                plugins: {
                                    legend: {
                                        display: true,
                                        position: 'top'
                                    }
                                },
                                scales: {
                                    y: {
                                        beginAtZero: true,
                                        max: 50,
                                        grid: {
                                            color: 'rgba(0, 0, 0, 0.1)'
                                        }
                                    },
                                    x: {
                                        grid: {
                                            display: false
                                        }
                                    }
                                }
                            }
                        });
                    }

                    // Observer para detectar cuando se abre nuestro modal dinámico
                    const observer = new MutationObserver(function (mutations) {
                        mutations.forEach(function (mutation) {
                            if (mutation.type === 'attributes' && mutation.attributeName === 'style') {
                                const modal = document.querySelector('[x-show="showModal"]');

                                // Solo crear gráficos si está visible y no se han creado
                                if (modal && modal.style.display !== 'none' && !modal.classList.contains('graficos-dinamicos-creados')) {
                                    console.log('Modal dinámico abierto - Esperando datos del sensor...');

                                    // Esperar un poco para que Alpine.js actualice selectedSensor
                                    setTimeout(() => {
                                        // Obtener el sensor seleccionado desde Alpine.js
                                        const alpineData = Alpine.$data(modal.closest('[x-data]'));
                                        if (alpineData && alpineData.selectedSensor) {
                                            const sensorId = alpineData.selectedSensor.id;
                                            console.log('Creando gráficos dinámicos para sensor ID:', sensorId);

                                            // *** LÍNEAS DE DIAGNÓSTICO AGREGADAS ***
                                            console.log('Datos disponibles para sensores:', Object.keys(datosHistoricos));
                                            console.log('¿Existe sensor', sensorId, '?', datosHistoricos.hasOwnProperty(sensorId));
                                            if (datosHistoricos[sensorId]) {
                                                console.log('Datos del sensor:', datosHistoricos[sensorId]);
                                            } else {
                                                console.error('NO HAY DATOS para sensor:', sensorId);
                                            }
                                            // *** FIN DIAGNÓSTICO ***

                                            modal.classList.add('graficos-dinamicos-creados');
                                            crearGraficoTemperaturaDinamico(sensorId);
                                            crearGraficoDesgasteDinamico(sensorId);
                                        } else {
                                            console.warn('No se encontró selectedSensor en Alpine.js');
                                        }
                                    }, 500);
                                }

                                // Limpiar marca cuando se cierra
                                if (modal && modal.style.display === 'none' && modal.classList.contains('graficos-dinamicos-creados')) {
                                    modal.classList.remove('graficos-dinamicos-creados');
                                    console.log('Modal dinámico cerrado - Marcas limpiadas');
                                }
                            }
                        });
                    });

                    // Observar el modal dinámico
                    const modalElement = document.querySelector('[x-show="showModal"]');
                    if (modalElement) {
                        observer.observe(modalElement, { attributes: true });
                        console.log('Observer configurado para modal dinámico');
                    } else {
                        console.error('No se encontró el modal dinámico');
                    }

                @else
                    console.error('No hay datos históricos disponibles en el servidor');
                @endif
    } catch (error) {
                console.error('Error crítico al cargar datos históricos:', error);
            }
        });
    </script>

    <!-- Script específico para Anillo Medio -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            console.log('Script Anillo Medio cargado...');

            // Variables globales para los gráficos del Anillo Medio
            let graficoTemperaturaMedio = null;
            let graficoDesgasteMedio = null;

            // Verificar si los datos históricos existen
            try {
                @if(isset($datosHistoricos) && !empty($datosHistoricos))
                    // Datos históricos del controlador (misma fuente)
                    const datosHistoricosMedio = {!! json_encode($datosHistoricos) !!};
                    console.log('Datos históricos cargados para Anillo Medio:', datosHistoricosMedio);

                    function crearGraficoTemperaturaMedio(sensorId) {
                        const ctx = document.getElementById('graficoTemperaturaMedio');
                        if (!ctx) {
                            console.error('Canvas de temperatura Medio NO encontrado');
                            return;
                        }

                        // Destruir gráfico anterior si existe
                        if (graficoTemperaturaMedio) {
                            graficoTemperaturaMedio.destroy();
                            graficoTemperaturaMedio = null;
                        }

                        const datos = datosHistoricosMedio[sensorId];
                        if (!datos || !datos.temperaturas || datos.temperaturas.length === 0) {
                            console.error('No hay datos de temperatura válidos para sensor Medio:', sensorId);
                            return;
                        }

                        console.log('Creando gráfico de temperatura Medio para sensor', sensorId, 'con', datos.temperaturas.length, 'puntos');

                        graficoTemperaturaMedio = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: datos.etiquetas,
                                datasets: [{
                                    label: 'Temperatura (°C)',
                                    data: datos.temperaturas,
                                    borderColor: '#3b82f6',
                                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                                    fill: true,
                                    tension: 0.4,
                                    pointRadius: 4,
                                    pointHoverRadius: 6
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                plugins: {
                                    legend: {
                                        display: true,
                                        position: 'top'
                                    }
                                },
                                scales: {
                                    y: {
                                        beginAtZero: false,
                                        grid: {
                                            color: 'rgba(0, 0, 0, 0.1)'
                                        }
                                    },
                                    x: {
                                        grid: {
                                            display: false
                                        }
                                    }
                                }
                            }
                        });
                    }

                    function crearGraficoDesgasteMedio(sensorId) {
                        const ctx = document.getElementById('graficoDesgasteMedio');
                        if (!ctx) {
                            console.error('Canvas de desgaste Medio NO encontrado');
                            return;
                        }

                        // Destruir gráfico anterior si existe
                        if (graficoDesgasteMedio) {
                            graficoDesgasteMedio.destroy();
                            graficoDesgasteMedio = null;
                        }

                        const datos = datosHistoricosMedio[sensorId];
                        if (!datos || !datos.desgastes || datos.desgastes.length === 0) {
                            console.error('No hay datos de desgaste válidos para sensor Medio:', sensorId);
                            return;
                        }

                        console.log('Creando gráfico de desgaste Medio para sensor', sensorId, 'con', datos.desgastes.length, 'puntos');

                        graficoDesgasteMedio = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: datos.etiquetas,
                                datasets: [{
                                    label: 'Desgaste (%)',
                                    data: datos.desgastes,
                                    borderColor: '#ef4444',
                                    backgroundColor: 'rgba(239, 68, 68, 0.1)',
                                    fill: true,
                                    tension: 0.4,
                                    pointRadius: 4,
                                    pointHoverRadius: 6
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                plugins: {
                                    legend: {
                                        display: true,
                                        position: 'top'
                                    }
                                },
                                scales: {
                                    y: {
                                        beginAtZero: true,
                                        max: 50,
                                        grid: {
                                            color: 'rgba(0, 0, 0, 0.1)'
                                        }
                                    },
                                    x: {
                                        grid: {
                                            display: false
                                        }
                                    }
                                }
                            }
                        });
                    }

                    // Observer para detectar cuando se abre el modal del Anillo Medio
                    const observerMedio = new MutationObserver(function (mutations) {
                        mutations.forEach(function (mutation) {
                            if (mutation.type === 'attributes' && mutation.attributeName === 'style') {
                                const modalMedio = document.querySelector('[x-show="showModalMedio"]');

                                // Solo crear gráficos si está visible y no se han creado
                                if (modalMedio && modalMedio.style.display !== 'none' && !modalMedio.classList.contains('graficos-medio-creados')) {
                                    console.log('Modal Anillo Medio abierto - Esperando datos del sensor...');

                                    // Esperar un poco para que Alpine.js actualice selectedSensorMedio
                                    setTimeout(() => {
                                        // Obtener el sensor seleccionado desde Alpine.js
                                        const alpineDataMedio = Alpine.$data(modalMedio.closest('[x-data]'));
                                        if (alpineDataMedio && alpineDataMedio.selectedSensorMedio) {
                                            const sensorId = alpineDataMedio.selectedSensorMedio.id;
                                            console.log('Creando gráficos Anillo Medio para sensor ID:', sensorId);

                                            modalMedio.classList.add('graficos-medio-creados');
                                            crearGraficoTemperaturaMedio(sensorId);
                                            crearGraficoDesgasteMedio(sensorId);
                                        } else {
                                            console.warn('No se encontró selectedSensorMedio en Alpine.js');
                                        }
                                    }, 500);
                                }

                                // Limpiar marca cuando se cierra
                                if (modalMedio && modalMedio.style.display === 'none' && modalMedio.classList.contains('graficos-medio-creados')) {
                                    modalMedio.classList.remove('graficos-medio-creados');
                                    console.log('Modal Anillo Medio cerrado - Marcas limpiadas');
                                }
                            }
                        });
                    });

                    // Observar el modal del Anillo Medio
                    const modalElementMedio = document.querySelector('[x-show="showModalMedio"]');
                    if (modalElementMedio) {
                        observerMedio.observe(modalElementMedio, { attributes: true });
                        console.log('Observer configurado para modal Anillo Medio');
                    } else {
                        console.error('No se encontró el modal del Anillo Medio');
                    }

                @else
                    console.error('No hay datos históricos disponibles para Anillo Medio');
                @endif
    } catch (error) {
                console.error('Error crítico al cargar datos históricos Anillo Medio:', error);
            }
        });
    </script>

    <!-- Script específico para Anillo Exterior -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            console.log('Script Anillo Exterior cargado...');

            // Variables globales para los gráficos del Anillo Exterior
            let graficoTemperaturaExterior = null;
            let graficoDesgasteExterior = null;

            // Verificar si los datos históricos existen
            try {
                @if(isset($datosHistoricos) && !empty($datosHistoricos))
                    // Datos históricos del controlador (misma fuente)
                    const datosHistoricosExterior = {!! json_encode($datosHistoricos) !!};
                    console.log('Datos históricos cargados para Anillo Exterior:', datosHistoricosExterior);

                    function crearGraficoTemperaturaExterior(sensorId) {
                        const ctx = document.getElementById('graficoTemperaturaExterior');
                        if (!ctx) {
                            console.error('Canvas de temperatura Exterior NO encontrado');
                            return;
                        }

                        // Destruir gráfico anterior si existe
                        if (graficoTemperaturaExterior) {
                            graficoTemperaturaExterior.destroy();
                            graficoTemperaturaExterior = null;
                        }

                        const datos = datosHistoricosExterior[sensorId];
                        if (!datos || !datos.temperaturas || datos.temperaturas.length === 0) {
                            console.error('No hay datos de temperatura válidos para sensor Exterior:', sensorId);
                            return;
                        }

                        console.log('Creando gráfico de temperatura Exterior para sensor', sensorId, 'con', datos.temperaturas.length, 'puntos');

                        graficoTemperaturaExterior = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: datos.etiquetas,
                                datasets: [{
                                    label: 'Temperatura (°C)',
                                    data: datos.temperaturas,
                                    borderColor: '#3b82f6',
                                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                                    fill: true,
                                    tension: 0.4,
                                    pointRadius: 4,
                                    pointHoverRadius: 6
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                plugins: {
                                    legend: {
                                        display: true,
                                        position: 'top'
                                    }
                                },
                                scales: {
                                    y: {
                                        beginAtZero: false,
                                        grid: {
                                            color: 'rgba(0, 0, 0, 0.1)'
                                        }
                                    },
                                    x: {
                                        grid: {
                                            display: false
                                        }
                                    }
                                }
                            }
                        });
                    }

                    function crearGraficoDesgasteExterior(sensorId) {
                        const ctx = document.getElementById('graficoDesgasteExterior');
                        if (!ctx) {
                            console.error('Canvas de desgaste Exterior NO encontrado');
                            return;
                        }

                        // Destruir gráfico anterior si existe
                        if (graficoDesgasteExterior) {
                            graficoDesgasteExterior.destroy();
                            graficoDesgasteExterior = null;
                        }

                        const datos = datosHistoricosExterior[sensorId];
                        if (!datos || !datos.desgastes || datos.desgastes.length === 0) {
                            console.error('No hay datos de desgaste válidos para sensor Exterior:', sensorId);
                            return;
                        }

                        console.log('Creando gráfico de desgaste Exterior para sensor', sensorId, 'con', datos.desgastes.length, 'puntos');

                        graficoDesgasteExterior = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: datos.etiquetas,
                                datasets: [{
                                    label: 'Desgaste (%)',
                                    data: datos.desgastes,
                                    borderColor: '#ef4444',
                                    backgroundColor: 'rgba(239, 68, 68, 0.1)',
                                    fill: true,
                                    tension: 0.4,
                                    pointRadius: 4,
                                    pointHoverRadius: 6
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                plugins: {
                                    legend: {
                                        display: true,
                                        position: 'top'
                                    }
                                },
                                scales: {
                                    y: {
                                        beginAtZero: true,
                                        max: 50,
                                        grid: {
                                            color: 'rgba(0, 0, 0, 0.1)'
                                        }
                                    },
                                    x: {
                                        grid: {
                                            display: false
                                        }
                                    }
                                }
                            }
                        });
                    }

                    // Observer para detectar cuando se abre el modal del Anillo Exterior
                    const observerExterior = new MutationObserver(function (mutations) {
                        mutations.forEach(function (mutation) {
                            if (mutation.type === 'attributes' && mutation.attributeName === 'style') {
                                const modalExterior = document.querySelector('[x-show="showModalExterior"]');

                                // Solo crear gráficos si está visible y no se han creado
                                if (modalExterior && modalExterior.style.display !== 'none' && !modalExterior.classList.contains('graficos-exterior-creados')) {
                                    console.log('Modal Anillo Exterior abierto - Esperando datos del sensor...');

                                    // Esperar un poco para que Alpine.js actualice selectedSensorExterior
                                    setTimeout(() => {
                                        // Obtener el sensor seleccionado desde Alpine.js
                                        const alpineDataExterior = Alpine.$data(modalExterior.closest('[x-data]'));
                                        if (alpineDataExterior && alpineDataExterior.selectedSensorExterior) {
                                            const sensorId = alpineDataExterior.selectedSensorExterior.id;
                                            console.log('Creando gráficos Anillo Exterior para sensor ID:', sensorId);

                                            modalExterior.classList.add('graficos-exterior-creados');
                                            crearGraficoTemperaturaExterior(sensorId);
                                            crearGraficoDesgasteExterior(sensorId);
                                        } else {
                                            console.warn('No se encontró selectedSensorExterior en Alpine.js');
                                        }
                                    }, 500);
                                }

                                // Limpiar marca cuando se cierra
                                if (modalExterior && modalExterior.style.display === 'none' && modalExterior.classList.contains('graficos-exterior-creados')) {
                                    modalExterior.classList.remove('graficos-exterior-creados');
                                    console.log('Modal Anillo Exterior cerrado - Marcas limpiadas');
                                }
                            }
                        });
                    });

                    // Observar el modal del Anillo Exterior
                    const modalElementExterior = document.querySelector('[x-show="showModalExterior"]');
                    if (modalElementExterior) {
                        observerExterior.observe(modalElementExterior, { attributes: true });
                        console.log('Observer configurado para modal Anillo Exterior');
                    } else {
                        console.error('No se encontró el modal del Anillo Exterior');
                    }

                @else
                    console.error('No hay datos históricos disponibles para Anillo Exterior');
                @endif
    } catch (error) {
                console.error('Error crítico al cargar datos históricos Anillo Exterior:', error);
            }
        });
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

</x-dashboard-layout>