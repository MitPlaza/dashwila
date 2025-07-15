<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
@props(['sensores', 'datosHistoricos'])

<div class="col-span-12 ">

    <div
        class="rounded-2xl border border-gray-200  px-5 pb-5 pt-5 dark:border-gray-800 dark:bg-white/[0.03] sm:px-6 sm:pt-6">

        <div class="flex flex-wrap items-start justify-between gap-5">
            <div class="flex gap-2">
                <img src="{{ asset('images/svg/espacio-del-cubo-modelo.svg')}}" width="30" height="30">
                <h3 class="mb-1 text-lg font-semibold wila-color dark:text-white/90">Visualización 3D del Motor</h3>
            </div>

        </div>


        <!-- Model Viewer -->


        <div
            x-data="{ showModal1: false, showModal2: false, showModal3: false, showModal4: false, showModal5: false, showModal6: false, showModal7: false, showModal8: false, showModal9: false, showModal10: false, showModal11: false, showModal12: false, showModal13: false, showModal14: false, showModal15: false }">
            <model-viewer src="{{ asset('models/Motor-completo.glb') }}" ar ar-modes="webxr scene-viewer quick-look"
                camera-controls auto-rotate tone-mapping="neutral" shadow-intensity="1"
                style="width: 100%; height: 600px;">

                <!-- Hotspots -->
                <button slot="hotspot-1" data-position="0.24525842494358283m 0.3509766938495988m -0.43976417766289205m"
                    data-normal="-0.15593817689234601m 0.9020568596764867m -0.40246329882125453m"
                    data-visibility-attribute="visible" @click="showModal1 = true">
                    <div
                        style="background: transparent; border-radius: 50%; width: 20px; height: 20px; cursor: pointer;">
                    </div>
                </button>


                <button class="Hotspot" slot="hotspot-2"
                    data-position="0.24106179606140066m 0.36781665795835794m -0.30064180464156465m"
                    data-normal="0 0.99543299102938m 0.09546287430358619m" data-visibility-attribute="visible"
                    @click="showModal2 = true">
                    <div style="background: transparent; border-radius: 50%; width: 20px; height: 20px; border: none;">
                    </div>

                </button>
                <button class="Hotspot" slot="hotspot-3"
                    data-position="0.40304576741233866m 0.35650938063368975m -0.4210130712449327m"
                    data-normal="0 0.9128096388745982m -0.4083853121472731m" data-visibility-attribute="visible"
                    @click="showModal3 = true">
                    <div style="background: transparent; border-radius: 50%; width: 20px; height: 20px; border: none;">
                    </div>
                </button>
                <button class="Hotspot" slot="hotspot-4"
                    data-position="0.40043902047757396m 0.36814141016680924m -0.30402813743909685m"
                    data-normal="0 0.99543299102938m 0.09546287430358619m" data-visibility-attribute="visible"
                    @click="showModal4 = true">
                    <div style="background: transparent; border-radius: 50%; width: 20px; height: 20px; border: none;">
                    </div>
                </button>
                <button class="Hotspot" slot="hotspot-5"
                    data-position="0.5582386806511414m 0.3510183045516283m -0.43328654687299967m"
                    data-normal="0 0.9128096388745982m -0.4083853121472731m" data-visibility-attribute="visible"
                    @click="showModal5 = true">
                    <div style="background: transparent; border-radius: 50%; width: 20px; height: 20px; border: none;">
                    </div>
                </button>
                <button class="Hotspot" slot="hotspot-6"
                    data-position="0.5522757249987704m 0.3693161476014283m -0.3162776365951707m"
                    data-normal="0 0.99543299102938m 0.09546287430358619m" data-visibility-attribute="visible"
                    @click="showModal6 = true">
                    <div style="background: transparent; border-radius: 50%; width: 20px; height: 20px; border: none;">
                    </div>
                </button>
                <button class="Hotspot" slot="hotspot-7"
                    data-position="0.24803863808911436m 0.22341872263388438m -0.07326284505001984m"
                    data-normal="0.642787635138821m 0.31624301364122126m 0.697720870001579m"
                    data-visibility-attribute="visible" @click="showModal7 = true">
                    <div style="background: transparent; border-radius: 50%; width: 20px; height: 20px; border: none;">
                    </div>
                </button>
                <button class="Hotspot" slot="hotspot-8"
                    data-position="0.39123617502336144m 0.2385869680610222m -0.07724656166377442m"
                    data-normal="0 0.41282590933682844m 0.9108099519549735m" data-visibility-attribute="visible"
                    @click="showModal8 = true">
                    <div style="background: transparent; border-radius: 50%; width: 20px; height: 20px; border: none;">
                    </div>
                </button>
                <button class="Hotspot" slot="hotspot-9"
                    data-position="0.5418509919133987m 0.24090120845225185m -0.07829549442069339m"
                    data-normal="0 0.41282590933682844m 0.9108099519549735m" data-visibility-attribute="visible"
                    @click="showModal9 = true">
                    <div style="background: transparent; border-radius: 50%; width: 20px; height: 20px; border: none;">
                    </div>
                </button>
                <button class="Hotspot" slot="hotspot-10"
                    data-position="0.23768536793302064m 0.08736395908053213m -0.052603058509654674m"
                    data-normal="0 -0.08173591946477496m 0.9966540219500686m" data-visibility-attribute="visible"
                    @click="showModal10 = true">
                    <div style="background: transparent; border-radius: 50%; width: 20px; height: 20px; border: none;">
                    </div>
                </button>
                <button class="Hotspot" slot="hotspot-11"
                    data-position="0.39093636394576414m 0.08394332059657889m -0.05288358618072642m"
                    data-normal="0 -0.08173591946477496m 0.9966540219500686m" data-visibility-attribute="visible"
                    @click="showModal11 = true">
                    <div style="background: transparent; border-radius: 50%; width: 20px; height: 20px; border: none;">
                    </div>
                </button>
                <button class="Hotspot" slot="hotspot-12"
                    data-position="0.5379699460920566m 0.08879752565957955m -0.05248549124973116m"
                    data-normal="0 -0.08173591946477496m 0.9966540219500686m" data-visibility-attribute="visible"
                    @click="showModal12 = true">
                    <div style="background: transparent; border-radius: 50%; width: 20px; height: 20px; border: none;">
                    </div>
                </button>
                <button class="Hotspot" slot="hotspot-13"
                    data-position="0.2405533100628769m -0.05851657852033684m -0.11096803294940916m"
                    data-normal="0 -0.5819916892307135m 0.813194732930791m" data-visibility-attribute="visible"
                    @click="showModal13 = true">
                    <div style="background: transparent; border-radius: 50%; width: 20px; height: 20px; border: none;">
                    </div>
                </button>
                <button class="Hotspot" slot="hotspot-14"
                    data-position="0.39260813992099686m -0.06009390181266363m -0.11209690037831826m"
                    data-normal="0 -0.5819916892307135m 0.813194732930791m" data-visibility-attribute="visible"
                    @click="showModal14 = true">
                    <div style="background: transparent; border-radius: 50%; width: 20px; height: 20px; border: none;">
                    </div>
                </button>
                <button class="Hotspot" slot="hotspot-15"
                    data-position="0.5453557733192957m -0.038995165207284806m -0.14399333320340035m"
                    data-normal="0 -0.5819916892307134m 0.8131947329307911m" data-visibility-attribute="visible"
                    @click="showModal15 = true">
                    <div style="background: transparent; border-radius: 50%; width: 20px; height: 20px; border: none;">
                    </div>
                </button>

                <!-- Opcional: barra de progreso -->
                <div class="progress-bar hide" slot="progress-bar">
                    <div class="update-bar"></div>
                </div>

                <!-- Botón AR -->
                <button slot="ar-button" id="ar-button">
                    View in your space
                </button>
            </model-viewer>


            <!---modal 1--->
            <div x-show="showModal1"
                class="fixed inset-0 z-[999999] flex items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white rounded-lg w-full max-w-4xl mt-8 max-h-[80vh] overflow-y-auto dark:bg-gray-800"
                    @click.away="showModal1 = false">

                    <!-- Header -->
                    <div class="flex justify-between items-center p-6 border-b">
                        <div class="flex items-center gap-4">
                            <h2 class="text-2xl font-bold text-gray-800 dark:text-white">
                                {{ $sensores[4]->nombre }}
                            </h2>
                            <span class="px-3 py-1 rounded-full text-sm font-medium
                    @if($sensores[4]->desgaste < 20) bg-blue-100 text-blue-800 
                    @elseif($sensores[4]->desgaste < 40) bg-orange-100 text-orange-800
                    @else bg-red-100 text-red-800 @endif">
                                @if($sensores[4]->desgaste < 20) Óptimo
                                @elseif($sensores[4]->desgaste < 40) Aceptable
                                @else Crítico @endif
                            </span>
                        </div>
                        <button @click="showModal1 = false" class="text-gray-500 hover:text-gray-700">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Métricas -->
                    <div class="p-6">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

                            <!-- Temperatura -->
                            <div class="bg-gray-50 rounded-lg p-4 dark:bg-gray-700">
                                <h3 class="text-sm text-gray-500 dark:text-gray-400 mb-1">Temperatura</h3>
                                <div class="text-2xl font-bold text-gray-800 dark:text-white mb-2">
                                    {{ $sensores[4]->temperatura }}°C
                                </div>
                                <div class="text-xs text-gray-500 mb-2">
                                    <span class="text-blue-600">Óptimo: 60-90°C</span> |
                                    <span class="text-red-600">Crítico: >90°C</span>
                                </div>
                            </div>

                            <!-- Desgaste -->
                            <div class="bg-gray-50 rounded-lg p-4 dark:bg-gray-700">
                                <h3 class="text-sm text-gray-500 dark:text-gray-400 mb-1">Desgaste</h3>
                                <div class="text-2xl font-bold text-gray-800 dark:text-white mb-2">
                                    {{ $sensores[4]->desgaste }}%
                                </div>
                                <div class="text-xs text-gray-500 mb-2">Límite: 50%</div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="h-2 rounded-full @if($sensores[4]->desgaste < 20) bg-blue-500 @elseif($sensores[4]->desgaste < 40) bg-orange-500 @else bg-red-500 @endif"
                                        style="width: {{ $sensores[4]->desgaste }}%"></div>
                                </div>
                            </div>

                            <!-- Batería -->
                            <div class="bg-gray-50 rounded-lg p-4 dark:bg-gray-700">
                                <h3 class="text-sm text-gray-500 dark:text-gray-400 mb-1">Batería</h3>
                                <div class="text-2xl font-bold text-gray-800 dark:text-white mb-4">
                                    {{ $sensores[4]->bateria }}%
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-500 h-2 rounded-full"
                                        style="width: {{ $sensores[4]->bateria }}%"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Gráfico Histórico de Temperatura -->
                        <div class="mb-8">
                            <div class="flex items-center gap-2 mb-4">
                                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                    </path>
                                </svg>
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Histórico de Temperatura
                                </h3>
                            </div>
                            <div class="bg-white rounded-lg p-4 border">
                                <canvas id="graficoTemperaturaSensor5" height="200"></canvas>
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
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Histórico de Desgaste
                                </h3>
                            </div>
                            <div class="bg-white rounded-lg p-4 border">
                                <canvas id="graficoDesgasteSensor5" height="200"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="px-6 pb-6">
                        <button class="px-6 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition-colors"
                            @click="showModal1 = false">
                            Cerrar
                        </button>
                    </div>
                </div>
            </div>
            <!---fin modal 1--->




            <!---modal 2--->
            <div x-show="showModal2"
                class="fixed inset-0 z-[999999] flex items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white rounded-lg w-full max-w-4xl mt-8 max-h-[80vh] overflow-y-auto dark:bg-gray-800"
                    @click.away="showModal2 = false">

                    <!-- Header -->
                    <div class="flex justify-between items-center p-6 border-b">
                        <div class="flex items-center gap-4">
                            <h2 class="text-2xl font-bold text-gray-800 dark:text-white">
                                {{ $sensores[3]->nombre }}
                            </h2>
                            <span class="px-3 py-1 rounded-full text-sm font-medium
                    @if($sensores[3]->desgaste < 20) bg-blue-100 text-blue-800 
                    @elseif($sensores[3]->desgaste < 40) bg-orange-100 text-orange-800
                    @else bg-red-100 text-red-800 @endif">
                                @if($sensores[3]->desgaste < 20) Óptimo
                                @elseif($sensores[3]->desgaste < 40) Aceptable
                                @else Crítico @endif
                            </span>
                        </div>
                        <button @click="showModal2 = false" class="text-gray-500 hover:text-gray-700">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Métricas -->
                    <div class="p-6">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

                            <!-- Temperatura -->
                            <div class="bg-gray-50 rounded-lg p-4 dark:bg-gray-700">
                                <h3 class="text-sm text-gray-500 dark:text-gray-400 mb-1">Temperatura</h3>
                                <div class="text-2xl font-bold text-gray-800 dark:text-white mb-2">
                                    {{ $sensores[3]->temperatura }}°C
                                </div>
                                <div class="text-xs text-gray-500 mb-2">
                                    <span class="text-blue-600">Óptimo: 60-90°C</span> |
                                    <span class="text-red-600">Crítico: >90°C</span>
                                </div>
                            </div>

                            <!-- Desgaste -->
                            <div class="bg-gray-50 rounded-lg p-4 dark:bg-gray-700">
                                <h3 class="text-sm text-gray-500 dark:text-gray-400 mb-1">Desgaste</h3>
                                <div class="text-2xl font-bold text-gray-800 dark:text-white mb-2">
                                    {{ $sensores[3]->desgaste }}%
                                </div>
                                <div class="text-xs text-gray-500 mb-2">Límite: 50%</div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="h-2 rounded-full @if($sensores[3]->desgaste < 20) bg-blue-500 @elseif($sensores[3]->desgaste < 40) bg-orange-500 @else bg-red-500 @endif"
                                        style="width: {{ $sensores[3]->desgaste }}%"></div>
                                </div>
                            </div>

                            <!-- Batería -->
                            <div class="bg-gray-50 rounded-lg p-4 dark:bg-gray-700">
                                <h3 class="text-sm text-gray-500 dark:text-gray-400 mb-1">Batería</h3>
                                <div class="text-2xl font-bold text-gray-800 dark:text-white mb-4">
                                    {{ $sensores[3]->bateria }}%
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-500 h-2 rounded-full"
                                        style="width: {{ $sensores[3]->bateria }}%"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Gráfico Histórico de Temperatura -->
                        <div class="mb-8">
                            <div class="flex items-center gap-2 mb-4">
                                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                    </path>
                                </svg>
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Histórico de Temperatura
                                </h3>
                            </div>
                            <div class="bg-white rounded-lg p-4 border">
                                <canvas id="graficoTemperaturaSensor4" height="200"></canvas>
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
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Histórico de Desgaste
                                </h3>
                            </div>
                            <div class="bg-white rounded-lg p-4 border">
                                <canvas id="graficoDesgasteSensor4" height="200"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="px-6 pb-6">
                        <button class="px-6 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition-colors"
                            @click="showModal2 = false">
                            Cerrar
                        </button>
                    </div>
                </div>
            </div>
            <!---fin modal 2--->




            <!---modal 3--->
            <div x-show="showModal7"
                class="fixed inset-0 z-[999999] flex items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white rounded-lg w-full max-w-4xl mt-8 max-h-[80vh] overflow-y-auto dark:bg-gray-800"
                    @click.away="showModal7 = false">

                    <!-- Header -->
                    <div class="flex justify-between items-center p-6 border-b">
                        <div class="flex items-center gap-4">
                            <h2 class="text-2xl font-bold text-gray-800 dark:text-white">
                                {{ $sensores[2]->nombre }}
                            </h2>
                            <span class="px-3 py-1 rounded-full text-sm font-medium
                    @if($sensores[2]->desgaste < 20) bg-blue-100 text-blue-800 
                    @elseif($sensores[2]->desgaste < 40) bg-orange-100 text-orange-800
                    @else bg-red-100 text-red-800 @endif">
                                @if($sensores[2]->desgaste < 20) Óptimo
                                @elseif($sensores[2]->desgaste < 40) Aceptable
                                @else Crítico @endif
                            </span>
                        </div>
                        <button @click="showModal7 = false" class="text-gray-500 hover:text-gray-700">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Métricas -->
                    <div class="p-6">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

                            <!-- Temperatura -->
                            <div class="bg-gray-50 rounded-lg p-4 dark:bg-gray-700">
                                <h3 class="text-sm text-gray-500 dark:text-gray-400 mb-1">Temperatura</h3>
                                <div class="text-2xl font-bold text-gray-800 dark:text-white mb-2">
                                    {{ $sensores[2]->temperatura }}°C
                                </div>
                                <div class="text-xs text-gray-500 mb-2">
                                    <span class="text-blue-600">Óptimo: 60-90°C</span> |
                                    <span class="text-red-600">Crítico: >90°C</span>
                                </div>
                            </div>

                            <!-- Desgaste -->
                            <div class="bg-gray-50 rounded-lg p-4 dark:bg-gray-700">
                                <h3 class="text-sm text-gray-500 dark:text-gray-400 mb-1">Desgaste</h3>
                                <div class="text-2xl font-bold text-gray-800 dark:text-white mb-2">
                                    {{ $sensores[2]->desgaste }}%
                                </div>
                                <div class="text-xs text-gray-500 mb-2">Límite: 50%</div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="h-2 rounded-full @if($sensores[2]->desgaste < 20) bg-blue-500 @elseif($sensores[2]->desgaste < 40) bg-orange-500 @else bg-red-500 @endif"
                                        style="width: {{ $sensores[2]->desgaste }}%"></div>
                                </div>
                            </div>

                            <!-- Batería -->
                            <div class="bg-gray-50 rounded-lg p-4 dark:bg-gray-700">
                                <h3 class="text-sm text-gray-500 dark:text-gray-400 mb-1">Batería</h3>
                                <div class="text-2xl font-bold text-gray-800 dark:text-white mb-4">
                                    {{ $sensores[2]->bateria }}%
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-500 h-2 rounded-full"
                                        style="width: {{ $sensores[2]->bateria }}%"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Gráfico Histórico de Temperatura -->
                        <div class="mb-8">
                            <div class="flex items-center gap-2 mb-4">
                                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                    </path>
                                </svg>
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Histórico de Temperatura
                                </h3>
                            </div>
                            <div class="bg-white rounded-lg p-4 border">
                                <canvas id="graficoTemperaturaSensor3" height="200"></canvas>
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
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Histórico de Desgaste
                                </h3>
                            </div>
                            <div class="bg-white rounded-lg p-4 border">
                                <canvas id="graficoDesgasteSensor3" height="200"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="px-6 pb-6">
                        <button class="px-6 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition-colors"
                            @click="showModal7 = false">
                            Cerrar
                        </button>
                    </div>
                </div>
            </div>
            <!---fin modal 3--->



            <!---modal 4--->
            <div x-show="showModal10"
                class="fixed inset-0 z-[999999] flex items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white rounded-lg w-full max-w-4xl mt-8 max-h-[80vh] overflow-y-auto dark:bg-gray-800"
                    @click.away="showModal10 = false">

                    <!-- Header -->
                    <div class="flex justify-between items-center p-6 border-b">
                        <div class="flex items-center gap-4">
                            <h2 class="text-2xl font-bold text-gray-800 dark:text-white">
                                {{ $sensores[1]->nombre }}
                            </h2>
                            <span class="px-3 py-1 rounded-full text-sm font-medium
                    @if($sensores[1]->desgaste < 20) bg-blue-100 text-blue-800 
                    @elseif($sensores[1]->desgaste < 40) bg-orange-100 text-orange-800
                    @else bg-red-100 text-red-800 @endif">
                                @if($sensores[1]->desgaste < 20) Óptimo
                                @elseif($sensores[1]->desgaste < 40) Aceptable
                                @else Crítico @endif
                            </span>
                        </div>
                        <button @click="showModal10 = false" class="text-gray-500 hover:text-gray-700">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Métricas -->
                    <div class="p-6">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

                            <!-- Temperatura -->
                            <div class="bg-gray-50 rounded-lg p-4 dark:bg-gray-700">
                                <h3 class="text-sm text-gray-500 dark:text-gray-400 mb-1">Temperatura</h3>
                                <div class="text-2xl font-bold text-gray-800 dark:text-white mb-2">
                                    {{ $sensores[1]->temperatura }}°C
                                </div>
                                <div class="text-xs text-gray-500 mb-2">
                                    <span class="text-blue-600">Óptimo: 60-90°C</span> |
                                    <span class="text-red-600">Crítico: >90°C</span>
                                </div>
                            </div>

                            <!-- Desgaste -->
                            <div class="bg-gray-50 rounded-lg p-4 dark:bg-gray-700">
                                <h3 class="text-sm text-gray-500 dark:text-gray-400 mb-1">Desgaste</h3>
                                <div class="text-2xl font-bold text-gray-800 dark:text-white mb-2">
                                    {{ $sensores[1]->desgaste }}%
                                </div>
                                <div class="text-xs text-gray-500 mb-2">Límite: 50%</div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="h-2 rounded-full @if($sensores[1]->desgaste < 20) bg-blue-500 @elseif($sensores[1]->desgaste < 40) bg-orange-500 @else bg-red-500 @endif"
                                        style="width: {{ $sensores[1]->desgaste }}%"></div>
                                </div>
                            </div>

                            <!-- Batería -->
                            <div class="bg-gray-50 rounded-lg p-4 dark:bg-gray-700">
                                <h3 class="text-sm text-gray-500 dark:text-gray-400 mb-1">Batería</h3>
                                <div class="text-2xl font-bold text-gray-800 dark:text-white mb-4">
                                    {{ $sensores[1]->bateria }}%
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-500 h-2 rounded-full"
                                        style="width: {{ $sensores[1]->bateria }}%"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Gráfico Histórico de Temperatura -->
                        <div class="mb-8">
                            <div class="flex items-center gap-2 mb-4">
                                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                    </path>
                                </svg>
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Histórico de Temperatura
                                </h3>
                            </div>
                            <div class="bg-white rounded-lg p-4 border">
                                <canvas id="graficoTemperaturaSensor2" height="200"></canvas>
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
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Histórico de Desgaste
                                </h3>
                            </div>
                            <div class="bg-white rounded-lg p-4 border">
                                <canvas id="graficoDesgasteSensor2" height="200"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="px-6 pb-6">
                        <button class="px-6 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition-colors"
                            @click="showModal10 = false">
                            Cerrar
                        </button>
                    </div>
                </div>
            </div>
            <!---fin modal 4--->




            <!---modal 5--->
            <div x-show="showModal13"
                class="fixed inset-0 z-[999999] flex items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white rounded-lg w-full max-w-4xl mt-8 max-h-[80vh] overflow-y-auto dark:bg-gray-800"
                    @click.away="showModal13 = false">

                    <!-- Header -->
                    <div class="flex justify-between items-center p-6 border-b">
                        <div class="flex items-center gap-4">
                            <h2 class="text-2xl font-bold text-gray-800 dark:text-white">
                                {{ $sensores[0]->nombre }}
                            </h2>
                            <span class="px-3 py-1 rounded-full text-sm font-medium
                    @if($sensores[0]->desgaste < 20) bg-blue-100 text-blue-800 
                    @elseif($sensores[0]->desgaste < 40) bg-orange-100 text-orange-800
                    @else bg-red-100 text-red-800 @endif">
                                @if($sensores[0]->desgaste < 20) Óptimo
                                @elseif($sensores[0]->desgaste < 40) Aceptable
                                @else Crítico @endif
                            </span>
                        </div>
                        <button @click="showModal13 = false" class="text-gray-500 hover:text-gray-700">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Métricas -->
                    <div class="p-6">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

                            <!-- Temperatura -->
                            <div class="bg-gray-50 rounded-lg p-4 dark:bg-gray-700">
                                <h3 class="text-sm text-gray-500 dark:text-gray-400 mb-1">Temperatura</h3>
                                <div class="text-2xl font-bold text-gray-800 dark:text-white mb-2">
                                    {{ $sensores[0]->temperatura }}°C
                                </div>
                                <div class="text-xs text-gray-500 mb-2">
                                    <span class="text-blue-600">Óptimo: 60-90°C</span> |
                                    <span class="text-red-600">Crítico: >90°C</span>
                                </div>
                            </div>

                            <!-- Desgaste -->
                            <div class="bg-gray-50 rounded-lg p-4 dark:bg-gray-700">
                                <h3 class="text-sm text-gray-500 dark:text-gray-400 mb-1">Desgaste</h3>
                                <div class="text-2xl font-bold text-gray-800 dark:text-white mb-2">
                                    {{ $sensores[0]->desgaste }}%
                                </div>
                                <div class="text-xs text-gray-500 mb-2">Límite: 50%</div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="h-2 rounded-full @if($sensores[0]->desgaste < 20) bg-blue-500 @elseif($sensores[0]->desgaste < 40) bg-orange-500 @else bg-red-500 @endif"
                                        style="width: {{ $sensores[0]->desgaste }}%"></div>
                                </div>
                            </div>

                            <!-- Batería -->
                            <div class="bg-gray-50 rounded-lg p-4 dark:bg-gray-700">
                                <h3 class="text-sm text-gray-500 dark:text-gray-400 mb-1">Batería</h3>
                                <div class="text-2xl font-bold text-gray-800 dark:text-white mb-4">
                                    {{ $sensores[0]->bateria }}%
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-500 h-2 rounded-full"
                                        style="width: {{ $sensores[0]->bateria }}%"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Gráfico Histórico de Temperatura -->
                        <div class="mb-8">
                            <div class="flex items-center gap-2 mb-4">
                                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                    </path>
                                </svg>
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Histórico de Temperatura
                                </h3>
                            </div>
                            <div class="bg-white rounded-lg p-4 border">
                                <canvas id="graficoTemperaturaSensor1" height="200"></canvas>
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
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Histórico de Desgaste
                                </h3>
                            </div>
                            <div class="bg-white rounded-lg p-4 border">
                                <canvas id="graficoDesgasteSensor1" height="200"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="px-6 pb-6">
                        <button class="px-6 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition-colors"
                            @click="showModal13 = false">
                            Cerrar
                        </button>
                    </div>
                </div>
            </div>
            <!---fin modal 5--->


            <!----optimo-aceptable-critico-->
            <div class="col-span-12 mt-4">
                <!-- Metric Group Five -->
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:gap-6 xl:grid-cols-3 pb-4">
                    <!-- Metric Item Start -->
                    <div
                        class="rounded-xl flex justify-start items-center border border-gray-200 bg-blue-50 px-6 pb-1 pt-1 dark:border-gray-800 dark:bg-white/[0.03]">
                        <div class="flex flex-col justify-start items-center gap-3">
                            <div>
                                <span
                                    class="flex  justify-center mb-1 items-center gap-2 text-theme-xs text-gray-500 dark:text-gray-400">
                                    <span class="inline-block w-3 h-3 rounded-full" style="
                                                            background-color:
                                                  
                                                                 #00a8e8 
                                                       
                                                               ">
                                    </span>
                                    Óptimo
                                </span>
                            </div>

                        </div>
                    </div>
                    <!-- Metric Item End -->

                    <!-- Metric Item Start -->
                    <div
                        class="rounded-xl flex justify-start items-center border border-gray-200 bg-blue-50 px-6 pb-1 pt-1 dark:border-gray-800 dark:bg-white/[0.03]">
                        <div class="flex flex-col justify-center items-center gap-3">
                            <div>
                                <span
                                    class="flex  mb-1 items-center gap-2 text-theme-xs text-gray-500 dark:text-gray-400">
                                    <span class="inline-block w-3 h-3 rounded-full" style="
                                                            background-color:
                                                           
                                                                #f59e0b  ;
                                                               ">
                                    </span>
                                    Aceptable
                                </span>
                            </div>

                        </div>
                    </div>
                    <!-- Metric Item End -->

                    <!-- Metric Item Start -->
                    <div
                        class="rounded-xl flex justify-start items-center border border-gray-200 bg-blue-50 px-6 pb-1 pt-1 dark:border-gray-800 dark:bg-white/[0.03]">
                        <div class="flex flex-col justify-center items-center gap-3">
                            <div>
                                <span
                                    class="flex  mb-1 items-center gap-2 text-theme-xs text-gray-500 dark:text-gray-400">
                                    <span class="inline-block w-3 h-3 rounded-full" style="
                                                            background-color:

                                                                #dc2626 
                                                               ">
                                    </span>
                                    Crítico
                                </span>
                            </div>

                        </div>
                    </div>
                    <!-- Metric Item End -->


                </div>
                <!-- Metric Group Five -->

            </div>
        </div>
    </div>
</div>




<!-- JavaScript OPTIMIZADO - Sin mensajes repetidos -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        console.log('DOM cargado, iniciando script...');

        // Verificar si los datos históricos existen
        try {
            @if(isset($datosHistoricos) && !empty($datosHistoricos))
                    // Datos históricos del controlador
                    const datosHistoricos = {!! json_encode($datosHistoricos) !!};
                    console.log('Datos históricos cargados:', datosHistoricos);

                    /* ====================================================================
                       INICIO MODAL 1 - SENSOR [4] (quinta posición) - CANVAS ID 5
                       ==================================================================== */

                    const sensorId1 = {{ $sensores[4]->id }};
                    console.log('ID del sensor modal 1:', sensorId1);

                    function crearGraficoTemperaturaSensor5() {
                        const ctx = document.getElementById('graficoTemperaturaSensor5');
                        if (!ctx) {
                            console.error('Canvas de temperatura NO encontrado modal 1');
                            return;
                        }

                        const datos = datosHistoricos[sensorId1];
                        if (!datos || !datos.temperaturas || datos.temperaturas.length === 0) {
                            console.error('No hay datos de temperatura válidos modal 1');
                            return;
                        }

                        console.log('Creando gráfico de temperatura modal 1 con', datos.temperaturas.length, 'puntos');

                        new Chart(ctx, {
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

                    function crearGraficoDesgasteSensor5() {
                        const ctx = document.getElementById('graficoDesgasteSensor5');
                        if (!ctx) {
                            console.error('Canvas de desgaste NO encontrado modal 1');
                            return;
                        }

                        const datos = datosHistoricos[sensorId1];
                        if (!datos || !datos.desgastes || datos.desgastes.length === 0) {
                            console.error('No hay datos de desgaste válidos modal 1');
                            return;
                        }

                        console.log('Creando gráfico de desgaste modal 1 con', datos.desgastes.length, 'puntos');

                        new Chart(ctx, {
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

                    // Observer MEJORADO para modal 1
                    const observer1 = new MutationObserver(function (mutations) {
                        mutations.forEach(function (mutation) {
                            if (mutation.type === 'attributes' && mutation.attributeName === 'style') {
                                const modal = document.querySelector('[x-show="showModal1"]');

                                // Solo crear gráficos si está visible y no se han creado
                                if (modal && modal.style.display !== 'none' && !modal.classList.contains('graficos1-creados')) {
                                    console.log('Modal 1 abierto - Creando gráficos...');
                                    modal.classList.add('graficos1-creados');
                                    setTimeout(() => {
                                        crearGraficoTemperaturaSensor5();
                                        crearGraficoDesgasteSensor5();
                                    }, 300);
                                }

                                // Limpiar marca cuando se cierra pero SIN interferir
                                if (modal && modal.style.display === 'none' && modal.classList.contains('graficos1-creados')) {
                                    modal.classList.remove('graficos1-creados');
                                }
                            }
                        });
                    });

                    const modalElement1 = document.querySelector('[x-show="showModal1"]');
                    if (modalElement1) {
                        observer1.observe(modalElement1, { attributes: true });
                    }

                    /* ====================================================================
                       FIN MODAL 1
                       ==================================================================== */

                    /* ====================================================================
                       INICIO MODAL 2 - SENSOR [3] (cuarta posición) - CANVAS ID 4
                       ==================================================================== */

                    const sensorId2 = {{ $sensores[3]->id }};
                    console.log('ID del sensor modal 2:', sensorId2);

                    function crearGraficoTemperaturaSensor4() {
                        const ctx = document.getElementById('graficoTemperaturaSensor4');
                        if (!ctx) {
                            console.error('Canvas de temperatura NO encontrado modal 2');
                            return;
                        }

                        const datos = datosHistoricos[sensorId2];
                        if (!datos || !datos.temperaturas || datos.temperaturas.length === 0) {
                            console.error('No hay datos de temperatura válidos modal 2');
                            return;
                        }

                        console.log('Creando gráfico de temperatura modal 2 con', datos.temperaturas.length, 'puntos');

                        new Chart(ctx, {
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

                    function crearGraficoDesgasteSensor4() {
                        const ctx = document.getElementById('graficoDesgasteSensor4');
                        if (!ctx) {
                            console.error('Canvas de desgaste NO encontrado modal 2');
                            return;
                        }

                        const datos = datosHistoricos[sensorId2];
                        if (!datos || !datos.desgastes || datos.desgastes.length === 0) {
                            console.error('No hay datos de desgaste válidos modal 2');
                            return;
                        }

                        console.log('Creando gráfico de desgaste modal 2 con', datos.desgastes.length, 'puntos');

                        new Chart(ctx, {
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

                    // Observer MEJORADO para modal 2
                    const observer2 = new MutationObserver(function (mutations) {
                        mutations.forEach(function (mutation) {
                            if (mutation.type === 'attributes' && mutation.attributeName === 'style') {
                                const modal = document.querySelector('[x-show="showModal2"]');

                                // Solo crear gráficos si está visible y no se han creado
                                if (modal && modal.style.display !== 'none' && !modal.classList.contains('graficos2-creados')) {
                                    console.log('Modal 2 abierto - Creando gráficos...');
                                    modal.classList.add('graficos2-creados');
                                    setTimeout(() => {
                                        crearGraficoTemperaturaSensor4();
                                        crearGraficoDesgasteSensor4();
                                    }, 300);
                                }

                                // Limpiar marca cuando se cierra pero SIN interferir
                                if (modal && modal.style.display === 'none' && modal.classList.contains('graficos2-creados')) {
                                    modal.classList.remove('graficos2-creados');
                                }
                            }
                        });
                    });

                    const modalElement2 = document.querySelector('[x-show="showModal2"]');
                    if (modalElement2) {
                        observer2.observe(modalElement2, { attributes: true });
                    }

                    /* ====================================================================
                       FIN MODAL 2
                       ==================================================================== */


                    /* ====================================================================
                    INICIO MODAL 3 - SENSOR [2] (tercera posición) - CANVAS ID 3
                    ==================================================================== */

                    const sensorId3 = {{ $sensores[2]->id }};
                    console.log('ID del sensor modal 7:', sensorId3);

                    function crearGraficoTemperaturaSensor3() {
                        const ctx = document.getElementById('graficoTemperaturaSensor3');
                        if (!ctx) {
                            console.error('Canvas de temperatura NO encontrado modal 7');
                            return;
                        }

                        const datos = datosHistoricos[sensorId3];
                        if (!datos || !datos.temperaturas || datos.temperaturas.length === 0) {
                            console.error('No hay datos de temperatura válidos modal 7');
                            return;
                        }

                        console.log('Creando gráfico de temperatura modal 7 con', datos.temperaturas.length, 'puntos');

                        new Chart(ctx, {
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

                    function crearGraficoDesgasteSensor3() {
                        const ctx = document.getElementById('graficoDesgasteSensor3');
                        if (!ctx) {
                            console.error('Canvas de desgaste NO encontrado modal 7');
                            return;
                        }

                        const datos = datosHistoricos[sensorId3];
                        if (!datos || !datos.desgastes || datos.desgastes.length === 0) {
                            console.error('No hay datos de desgaste válidos modal 7');
                            return;
                        }

                        console.log('Creando gráfico de desgaste modal 7 con', datos.desgastes.length, 'puntos');

                        new Chart(ctx, {
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

                    // Observer MEJORADO para modal 7
                    const observer3 = new MutationObserver(function (mutations) {
                        mutations.forEach(function (mutation) {
                            if (mutation.type === 'attributes' && mutation.attributeName === 'style') {
                                const modal = document.querySelector('[x-show="showModal7"]');

                                // Solo crear gráficos si está visible y no se han creado
                                if (modal && modal.style.display !== 'none' && !modal.classList.contains('graficos3-creados')) {
                                    console.log('Modal 7 abierto - Creando gráficos...');
                                    modal.classList.add('graficos3-creados');
                                    setTimeout(() => {
                                        crearGraficoTemperaturaSensor3();
                                        crearGraficoDesgasteSensor3();
                                    }, 300);
                                }

                                // Limpiar marca cuando se cierra pero SIN interferir
                                if (modal && modal.style.display === 'none' && modal.classList.contains('graficos3-creados')) {
                                    modal.classList.remove('graficos3-creados');
                                }
                            }
                        });
                    });

                    const modalElement3 = document.querySelector('[x-show="showModal7"]');
                    if (modalElement3) {
                        observer3.observe(modalElement3, { attributes: true });
                    }

                    /* ====================================================================
                       FIN MODAL 3
                       ==================================================================== */



                    /* ====================================================================
                 INICIO MODAL 4 - SENSOR [1] (tercera posición) - CANVAS ID 2
                 ==================================================================== */

                    const sensorId4 = {{ $sensores[1]->id }};
                    console.log('ID del sensor modal 10:', sensorId4);

                    function crearGraficoTemperaturaSensor2() {
                        const ctx = document.getElementById('graficoTemperaturaSensor2');
                        if (!ctx) {
                            console.error('Canvas de temperatura NO encontrado modal 10');
                            return;
                        }

                        const datos = datosHistoricos[sensorId4];
                        if (!datos || !datos.temperaturas || datos.temperaturas.length === 0) {
                            console.error('No hay datos de temperatura válidos modal 10');
                            return;
                        }

                        console.log('Creando gráfico de temperatura modal 10 con', datos.temperaturas.length, 'puntos');

                        new Chart(ctx, {
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

                    function crearGraficoDesgasteSensor2() {
                        const ctx = document.getElementById('graficoDesgasteSensor2');
                        if (!ctx) {
                            console.error('Canvas de desgaste NO encontrado modal 10');
                            return;
                        }

                        const datos = datosHistoricos[sensorId4];
                        if (!datos || !datos.desgastes || datos.desgastes.length === 0) {
                            console.error('No hay datos de desgaste válidos modal 10');
                            return;
                        }

                        console.log('Creando gráfico de desgaste modal 10 con', datos.desgastes.length, 'puntos');

                        new Chart(ctx, {
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

                    // Observer MEJORADO para modal 7
                    const observer4 = new MutationObserver(function (mutations) {
                        mutations.forEach(function (mutation) {
                            if (mutation.type === 'attributes' && mutation.attributeName === 'style') {
                                const modal = document.querySelector('[x-show="showModal10"]');

                                // Solo crear gráficos si está visible y no se han creado
                                if (modal && modal.style.display !== 'none' && !modal.classList.contains('graficos4-creados')) {
                                    console.log('Modal 10 abierto - Creando gráficos...');
                                    modal.classList.add('graficos4-creados');
                                    setTimeout(() => {
                                        crearGraficoTemperaturaSensor2();
                                        crearGraficoDesgasteSensor2();
                                    }, 300);
                                }

                                // Limpiar marca cuando se cierra pero SIN interferir
                                if (modal && modal.style.display === 'none' && modal.classList.contains('graficos4-creados')) {
                                    modal.classList.remove('graficos4-creados');
                                }
                            }
                        });
                    });

                    const modalElement4 = document.querySelector('[x-show="showModal10"]');
                    if (modalElement4) {
                        observer4.observe(modalElement4, { attributes: true });
                    }

                    /* ====================================================================
                       FIN MODAL 4
                       ==================================================================== */






                    /* ====================================================================
                 INICIO MODAL 5 - SENSOR [0] (tercera posición) - CANVAS ID 2
                 ==================================================================== */

                    const sensorId5 = {{ $sensores[0]->id }};
                    console.log('ID del sensor modal 13:', sensorId5);

                    function crearGraficoTemperaturaSensor1() {
                        const ctx = document.getElementById('graficoTemperaturaSensor1');
                        if (!ctx) {
                            console.error('Canvas de temperatura NO encontrado modal 13');
                            return;
                        }

                        const datos = datosHistoricos[sensorId5];
                        if (!datos || !datos.temperaturas || datos.temperaturas.length === 0) {
                            console.error('No hay datos de temperatura válidos modal 13');
                            return;
                        }

                        console.log('Creando gráfico de temperatura modal 13 con', datos.temperaturas.length, 'puntos');

                        new Chart(ctx, {
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

                    function crearGraficoDesgasteSensor1() {
                        const ctx = document.getElementById('graficoDesgasteSensor1');
                        if (!ctx) {
                            console.error('Canvas de desgaste NO encontrado modal 13');
                            return;
                        }

                        const datos = datosHistoricos[sensorId5];
                        if (!datos || !datos.desgastes || datos.desgastes.length === 0) {
                            console.error('No hay datos de desgaste válidos modal 13');
                            return;
                        }

                        console.log('Creando gráfico de desgaste modal 13 con', datos.desgastes.length, 'puntos');

                        new Chart(ctx, {
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

                    // Observer MEJORADO para modal 7
                    const observer5 = new MutationObserver(function (mutations) {
                        mutations.forEach(function (mutation) {
                            if (mutation.type === 'attributes' && mutation.attributeName === 'style') {
                                const modal = document.querySelector('[x-show="showModal13"]');

                                // Solo crear gráficos si está visible y no se han creado
                                if (modal && modal.style.display !== 'none' && !modal.classList.contains('graficos5-creados')) {
                                    console.log('Modal 13 abierto - Creando gráficos...');
                                    modal.classList.add('graficos5-creados');
                                    setTimeout(() => {
                                        crearGraficoTemperaturaSensor1();
                                        crearGraficoDesgasteSensor1();
                                    }, 300);
                                }

                                // Limpiar marca cuando se cierra pero SIN interferir
                                if (modal && modal.style.display === 'none' && modal.classList.contains('graficos5-creados')) {
                                    modal.classList.remove('graficos5-creados');
                                }
                            }
                        });
                    });

                    const modalElement5 = document.querySelector('[x-show="showModal13"]');
                    if (modalElement5) {
                        observer5.observe(modalElement5, { attributes: true });
                    }

                    /* ====================================================================
                       FIN MODAL 5
                       ==================================================================== */

            @else
                console.error('No hay datos históricos disponibles en el servidor');
            @endif
        } catch (error) {
            console.error('Error crítico al cargar datos históricos:', error);
        }
    });
</script>