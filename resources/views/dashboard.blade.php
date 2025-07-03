<x-dashboard-layout>


    <x-model-viewer :sensores="$sensores" />

    <x-metricas :sensoresActivos="$sensoresActivos" :sensoresCriticos="$sensoresCriticos"
        :temperaturaPromedio="$temperaturaPromedio" />

    <div class="grid col-span-12 space-y-8">
        {{-- Anillo Interior --}}
        <div>
            <h2 style="background: #041e42;
    padding: 10px;
    border-radius: 5px;
    color: #a6b8c1;
    font-weight: 400;" class="text-xl font-bold mb-4 text-gray-800 dark:text-white">Anillo Interior (Sensores 1-5)</h2>
            <div class="grid grid-cols-1 md:grid-cols-5 gap-2">
                @foreach ($sensores->where('area', 'Anillo Interior') as $sensor)
                            @php
                                $desgaste = $sensor->estado === 'desactivado' ? 0 : $sensor->desgaste;
                                $temperatura = $sensor->estado === 'desactivado' ? 0 : $sensor->temperatura;
                                $bateria = $sensor->estado === 'desactivado' ? 0 : $sensor->bateria;
                            @endphp

                            <div class="border rounded-lg p-4 bg-white shadow dark:bg-gray-800 {{ $sensor->estado === 'desactivado' ? 'opacity-50' : '' }}"
                                style="border-color: @if($sensor->desgaste > 40) #dc2626 @else #a6b8c1  @endif ">

                                <div class="flex items-center justify-between mb-2">
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">
                                        {{ $sensor->nombre }}
                                    </h3>
                                    <span class="inline-block w-3 h-3 rounded-full"
                                        style="
                                                                                                                                                            background-color:
                                                                                                                                                             @if($sensor->estado === 'desactivado')
                                                                                                                                                                  #9ca3af
                                                                                                                                                            @elseif($sensor->desgaste < 20)
                                                                                                                                                                #00a8e8   /* Óptimo */
                                                                                                                                                            @elseif($sensor->desgaste < 40)
                                                                                                                                                                #f59e0b   /* Aceptable */
                                                                                                                                                            @else
                                                                                                                                                                #dc2626   /* Crítico */
                                                                                                                                                            @endif
                                                                                                                                                                                                           ">
                                    </span>
                                </div>

                                <!-- Desgaste -->
                                <p class="text-gray-500 text-sm mb-1">Desgaste</p>
                                <div class="flex items-center justify-between mb-1">
                                    <div></div>
                                    <p class="text-xl font-bold"
                                        style="color: 
                                                                                                                                                                                                        {{ $desgaste >= 40 ? '#dc2626' : '#00a8e8' }}">
                                        {{ $desgaste }}%
                                    </p>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
                                    <div class="h-2.5 rounded-full"
                                        style="
                                                                                                                                                                                                        width: {{ $desgaste }}%;
                                                                                                                                                                                                        background-color: {{ $desgaste >= 40 ? '#dc2626' : '#00a8e8' }};">
                                    </div>
                                </div>

                                <!-- Temp y Bateria -->
                                <div class="flex justify-between items-center">
                                    <div>
                                        <p class="text-gray-500 text-sm">Temp</p>
                                        <p class="font-semibold" style="color: {{ $temperatura >= 90 ? '#dc2626' : '#00a8e8'}};">
                                            {{ $temperatura }}°C
                                        </p>
                                    </div>
                                    <div class="text-right w-1/2">
                                        <p class="text-gray-500 text-sm">Batería</p>
                                        <p class="font-semibold">{{ $bateria }}%</p>
                                        <div class="w-full bg-gray-200 rounded-full h-2.5 mt-1 dark:bg-gray-700">
                                            <div class="h-2.5 rounded-full" style="
                                                                                                                                                                                                                width: {{ $bateria }}%;
                                                                                                                                                                                                                background-color: 
                                                                                                                                                                                                                    {{ $bateria < 30
                    ? '#dc2626'
                    : ($bateria < 60
                        ? '#f59e0b'
                        : '#00a8e8') }};">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                @endforeach
            </div>
        </div>

        {{-- Anillo Medio --}}
        <div>
            <h2 style="background: #041e42;
    padding: 10px;
    border-radius: 5px;
    color: #a6b8c1;
    font-weight: 400;" class="text-xl font-bold mb-4 text-gray-800 dark:text-white">Anillo Medio (Sensores 6-10)</h2>
            <div class="grid grid-cols-1 md:grid-cols-5 gap-2">
                @foreach ($sensores->where('area', 'Anillo Medio') as $sensor)
                            @php
                                $desgaste = $sensor->estado === 'desactivado' ? 0 : $sensor->desgaste;
                                $temperatura = $sensor->estado === 'desactivado' ? 0 : $sensor->temperatura;
                                $bateria = $sensor->estado === 'desactivado' ? 0 : $sensor->bateria;
                            @endphp

                            <div class="border rounded-lg p-4 bg-white shadow dark:bg-gray-800 {{ $sensor->estado === 'desactivado' ? 'opacity-50' : '' }}"
                                style="border-color: @if($sensor->desgaste > 40) #dc2626 @else #a6b8c1  @endif "">

                                            <div class=" flex items-center justify-between mb-2">
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">
                                    {{ $sensor->nombre }}
                                </h3>
                                <span class="inline-block w-3 h-3 rounded-full"
                                    style="
                                                                                                                                                    background-color:
                                                                                                                                                            @if($sensor->estado === 'desactivado')
                                                                                                                                                                  #9ca3af
                                                                                                                                                            @elseif($sensor->desgaste < 20)
                                                                                                                                                                #00a8e8   /* Óptimo */
                                                                                                                                                            @elseif($sensor->desgaste < 40)
                                                                                                                                                                #f59e0b   /* Aceptable */
                                                                                                                                                            @else
                                                                                                                                                                #dc2626   /* Crítico */
                                                                                                                                                            @endif
                                                                                                                                                            ">
                                </span>
                            </div>

                            <!-- Desgaste -->
                            <p class="text-gray-500 text-sm mb-1">Desgaste</p>
                            <div class="flex items-center justify-between mb-1">
                                <div></div>
                                <p class="text-xl font-bold"
                                    style="color: 
                                                                                                                                                                                            {{ $desgaste >= 40 ? '#dc2626' : '#00a8e8' }}">
                                    {{ $desgaste }}%
                                </p>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
                                <div class="h-2.5 rounded-full"
                                    style="
                                                                                                                                                                                            width: {{ $desgaste }}%;
                                                                                                                                                                                            background-color: {{ $desgaste >= 40 ? '#dc2626' : '#00a8e8' }};">
                                </div>
                            </div>

                            <!-- Temp y Bateria -->
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="text-gray-500 text-sm">Temp</p>
                                    <p class="font-semibold" style="color: {{ $temperatura >= 90 ? '#dc2626' : '#00a8e8'}};">
                                        {{ $temperatura }}°C
                                    </p>
                                </div>
                                <div class="text-right w-1/2">
                                    <p class="text-gray-500 text-sm">Batería</p>
                                    <p class="font-semibold">{{ $bateria }}%</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 mt-1 dark:bg-gray-700">
                                        <div class="h-2.5 rounded-full" style="
                                                                                                                                                                                                    width: {{ $bateria }}%;
                                                                                                                                                                                                    background-color: 
                                                                                                                                                                                                        {{ $bateria < 30
                    ? '#dc2626'
                    : ($bateria < 60
                        ? '#f59e0b'
                        : '#00a8e8') }};">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
        </div>
    </div>

    {{-- Anillo Exterior --}}
    <div>
        <h2 style="background: #041e42;
    padding: 10px;
    border-radius: 5px;
    color: #a6b8c1;
    font-weight: 400;" class="text-xl font-bold mb-4 text-gray-800 dark:text-white">Anillo Exterior (Sensores 11-15)
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-5 gap-2">
            @foreach ($sensores->where('area', 'Anillo Exterior') as $sensor)
                    @php
                        $desgaste = $sensor->estado === 'desactivado' ? 0 : $sensor->desgaste;
                        $temperatura = $sensor->estado === 'desactivado' ? 0 : $sensor->temperatura;
                        $bateria = $sensor->estado === 'desactivado' ? 0 : $sensor->bateria;
                    @endphp

                    <div class="border rounded-lg p-4 bg-white shadow dark:bg-gray-800 {{ $sensor->estado === 'desactivado' ? 'opacity-50' : '' }}"
                        style="border-color: @if($sensor->desgaste > 40) #dc2626 @else #a6b8c1  @endif "">

                                        <div class=" flex items-center justify-between mb-2">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">
                            {{ $sensor->nombre }}
                        </h3>
                        <span class="inline-block w-3 h-3 rounded-full"
                            style="
                                                                                                                                                                           background-color:
                                                                                                                                                                                  @if($sensor->estado === 'desactivado')
                                                                                                                                                                                      #9ca3af
                                                                                                                                                                                @elseif($sensor->desgaste < 20)
                                                                                                                                                                                    #00a8e8   /* Óptimo */
                                                                                                                                                                                @elseif($sensor->desgaste < 40)
                                                                                                                                                                                    #f59e0b   /* Aceptable */
                                                                                                                                                                                @else
                                                                                                                                                                                    #dc2626   /* Crítico */
                                                                                                                                                                                @endif
                                                                                                                                                                               ">
                        </span>
                    </div>

                    <!-- Desgaste -->
                    <p class="text-gray-500 text-sm mb-1">Desgaste</p>
                    <div class="flex items-center justify-between mb-1">
                        <div></div>
                        <p class="text-xl font-bold"
                            style="color: 
                                                                                                                                                                            {{ $desgaste >= 40 ? '#dc2626' : '#00a8e8' }}">
                            {{ $desgaste }}%
                        </p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
                        <div class="h-2.5 rounded-full"
                            style="
                                                                                                                                                                            width: {{ $desgaste }}%;
                                                                                                                                                                            background-color: {{ $desgaste >= 40 ? '#dc2626' : '#00a8e8' }};">
                        </div>
                    </div>

                    <!-- Temp y Bateria -->
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-gray-500 text-sm">Temp</p>
                            <p class="font-semibold" style="color: {{ $temperatura >= 90 ? '#dc2626' : '#00a8e8'}};">
                                {{ $temperatura }}°C
                            </p>
                        </div>
                        <div class="text-right w-1/2">
                            <p class="text-gray-500 text-sm">Batería</p>
                            <p class="font-semibold">{{ $bateria }}%</p>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 mt-1 dark:bg-gray-700">
                                <div class="h-2.5 rounded-full" style="
                                                                                                                                                                                    width: {{ $bateria }}%;
                                                                                                                                                                                    background-color: 
                                                                                                                                                                                        {{ $bateria < 30
                ? '#dc2626'
                : ($bateria < 60
                    ? '#f59e0b'
                    : '#00a8e8') }};">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
    </div>
    </div>
    </div>


</x-dashboard-layout>