<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
@props(['sensores'])

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
                <div class="bg-white rounded-lg p-6 w-full max-w-md dark:bg-gray-800" @click.away="showModal1 = false">
                    <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">
                        Sensor 5
                    </h2>
                    <p class="text-gray-600 dark:text-gray-300">
                        Batería: {{ $sensores[4]->bateria }}%<br>
                        Desgaste: {{ $sensores[4]->desgaste }}%<br>
                        Temperatura: {{ $sensores[4]->temperatura }}°C
                    </p>
                    <button class="mt-4 px-4 py-2 bg-brand-500 text-white rounded hover:bg-brand-600"
                        @click="showModal1 = false">
                        Cerrar
                    </button>
                </div>
            </div>
            <!---modal 2--->
            <div x-show="showModal2"
                class="fixed inset-0 z-[999999] flex items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white rounded-lg p-6 w-full max-w-md dark:bg-gray-800" @click.away="showModal2 = false">
                    <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">
                        Sensor 4
                    </h2>
                    <p class="text-gray-600 dark:text-gray-300">
                        Batería: {{ $sensores[3]->bateria }}%<br>
                        Desgaste: {{ $sensores[3]->desgaste }}%<br>
                        Temperatura: {{ $sensores[3]->temperatura }}°C
                    </p>
                    <button class="mt-4 px-4 py-2 bg-brand-500 text-white rounded hover:bg-brand-600"
                        @click="showModal2 = false">
                        Cerrar
                    </button>
                </div>
            </div>
            <!---modal 3--->
            <div x-show="showModal3"
                class="fixed inset-0 z-[999999] flex items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white rounded-lg p-6 w-full max-w-md dark:bg-gray-800" @click.away="showModal3 = false">
                    <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">
                        Sensor 10
                    </h2>
                    <p class="text-gray-600 dark:text-gray-300">
                        Batería: {{ $sensores[9]->bateria }}%<br>
                        Desgaste: {{ $sensores[9]->desgaste }}%<br>
                        Temperatura: {{ $sensores[9]->temperatura }}°C
                    </p>
                    <button class="mt-4 px-4 py-2 bg-brand-500 text-white rounded hover:bg-brand-600"
                        @click="showModal3 = false">
                        Cerrar
                    </button>
                </div>
            </div>
            <!---modal 4--->
            <div x-show="showModal4"
                class="fixed inset-0 z-[999999] flex items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white rounded-lg p-6 w-full max-w-md dark:bg-gray-800" @click.away="showModal4 = false">
                    <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">
                        Sensor 9
                    </h2>
                    <p class="text-gray-600 dark:text-gray-300">
                        Batería: {{ $sensores[8]->bateria }}%<br>
                        Desgaste: {{ $sensores[8]->desgaste }}%<br>
                        Temperatura: {{ $sensores[8]->temperatura }}°C
                    </p>
                    <button class="mt-4 px-4 py-2 bg-brand-500 text-white rounded hover:bg-brand-600"
                        @click="showModal4 = false">
                        Cerrar
                    </button>
                </div>
            </div>
            <!---modal 5--->
            <div x-show="showModal5"
                class="fixed inset-0 z-[999999] flex items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white rounded-lg p-6 w-full max-w-md dark:bg-gray-800" @click.away="showModal5 = false">
                    <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">
                        Sensor 15
                    </h2>
                    <p class="text-gray-600 dark:text-gray-300">
                        Batería: {{ $sensores[14]->bateria }}%<br>
                        Desgaste: {{ $sensores[14]->desgaste }}%<br>
                        Temperatura: {{ $sensores[14]->temperatura }}°C
                    </p>
                    <button class="mt-4 px-4 py-2 bg-brand-500 text-white rounded hover:bg-brand-600"
                        @click="showModal5 = false">
                        Cerrar
                    </button>
                </div>
            </div>

            <!---modal 6--->
            <div x-show="showModal6"
                class="fixed inset-0 z-[999999] flex items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white rounded-lg p-6 w-full max-w-md dark:bg-gray-800" @click.away="showModal6 = false">
                    <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">
                        Sensor 14
                    </h2>
                    <p class="text-gray-600 dark:text-gray-300">
                        Batería: {{ $sensores[13]->bateria }}%<br>
                        Desgaste: {{ $sensores[13]->desgaste }}%<br>
                        Temperatura: {{ $sensores[13]->temperatura }}°C
                    </p>
                    <button class="mt-4 px-4 py-2 bg-brand-500 text-white rounded hover:bg-brand-600"
                        @click="showModal6 = false">
                        Cerrar
                    </button>
                </div>
            </div>

            <!---modal 7--->
            <div x-show="showModal7"
                class="fixed inset-0 z-[999999] flex items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white rounded-lg p-6 w-full max-w-md dark:bg-gray-800" @click.away="showModal7 = false">
                    <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">
                        Sensor 3
                    </h2>
                    <p class="text-gray-600 dark:text-gray-300">
                        Batería: {{ $sensores[2]->bateria }}%<br>
                        Desgaste: {{ $sensores[2]->desgaste }}%<br>
                        Temperatura: {{ $sensores[2]->temperatura }}°C
                    </p>
                    <button class="mt-4 px-4 py-2 bg-brand-500 text-white rounded hover:bg-brand-600"
                        @click="showModal7 = false">
                        Cerrar
                    </button>
                </div>
            </div>


            <!---modal 8--->
            <div x-show="showModal8"
                class="fixed inset-0 z-[999999] flex items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white rounded-lg p-6 w-full max-w-md dark:bg-gray-800" @click.away="showModal8 = false">
                    <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">
                        Sensor 8
                    </h2>
                    <p class="text-gray-600 dark:text-gray-300">
                        Batería: {{ $sensores[7]->bateria }}%<br>
                        Desgaste: {{ $sensores[7]->desgaste }}%<br>
                        Temperatura: {{ $sensores[7]->temperatura }}°C
                    </p>
                    <button class="mt-4 px-4 py-2 bg-brand-500 text-white rounded hover:bg-brand-600"
                        @click="showModal8 = false">
                        Cerrar
                    </button>
                </div>
            </div>

            <!---modal 9--->
            <div x-show="showModal9"
                class="fixed inset-0 z-[999999] flex items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white rounded-lg p-6 w-full max-w-md dark:bg-gray-800" @click.away="showModal9 = false">
                    <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">
                        Sensor 13
                    </h2>
                    <p class="text-gray-600 dark:text-gray-300">
                        Batería: {{ $sensores[12]->bateria }}%<br>
                        Desgaste: {{ $sensores[12]->desgaste }}%<br>
                        Temperatura: {{ $sensores[12]->temperatura }}°C
                    </p>
                    <button class="mt-4 px-4 py-2 bg-brand-500 text-white rounded hover:bg-brand-600"
                        @click="showModal9 = false">
                        Cerrar
                    </button>
                </div>
            </div>

            <!---modal 10--->
            <div x-show="showModal10"
                class="fixed inset-0 z-[999999] flex items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white rounded-lg p-6 w-full max-w-md dark:bg-gray-800" @click.away="showModal10 = false">
                    <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">
                        Sensor 2
                    </h2>
                    <p class="text-gray-600 dark:text-gray-300">
                        Batería: {{ $sensores[1]->bateria }}%<br>
                        Desgaste: {{ $sensores[1]->desgaste }}%<br>
                        Temperatura: {{ $sensores[1]->temperatura }}°C
                    </p>
                    <button class="mt-4 px-4 py-2 bg-brand-500 text-white rounded hover:bg-brand-600"
                        @click="showModal10 = false">
                        Cerrar
                    </button>
                </div>
            </div>

            <!---modal 11--->
            <div x-show="showModal11"
                class="fixed inset-0 z-[999999] flex items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white rounded-lg p-6 w-full max-w-md dark:bg-gray-800" @click.away="showModal11 = false">
                    <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">
                        Sensor 7
                    </h2>
                    <p class="text-gray-600 dark:text-gray-300">
                        Batería: {{ $sensores[6]->bateria }}%<br>
                        Desgaste: {{ $sensores[6]->desgaste }}%<br>
                        Temperatura: {{ $sensores[6]->temperatura }}°C
                    </p>
                    <button class="mt-4 px-4 py-2 bg-brand-500 text-white rounded hover:bg-brand-600"
                        @click="showModal11 = false">
                        Cerrar
                    </button>
                </div>
            </div>

            <!---modal 12--->
            <div x-show="showModal12"
                class="fixed inset-0 z-[999999] flex items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white rounded-lg p-6 w-full max-w-md dark:bg-gray-800" @click.away="showModal12 = false">
                    <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">
                        Sensor 12
                    </h2>
                    <p class="text-gray-600 dark:text-gray-300">
                        Batería: {{ $sensores[11]->bateria }}%<br>
                        Desgaste: {{ $sensores[11]->desgaste }}%<br>
                        Temperatura: {{ $sensores[11]->temperatura }}°C
                    </p>
                    <button class="mt-4 px-4 py-2 bg-brand-500 text-white rounded hover:bg-brand-600"
                        @click="showModal12 = false">
                        Cerrar
                    </button>
                </div>
            </div>

            <!---modal 13--->
            <div x-show="showModal13"
                class="fixed inset-0 z-[999999] flex items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white rounded-lg p-6 w-full max-w-md dark:bg-gray-800" @click.away="showModal13 = false">
                    <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">
                        Sensor 1
                    </h2>
                    <p class="text-gray-600 dark:text-gray-300">
                        Batería: {{ $sensores[0]->bateria }}%<br>
                        Desgaste: {{ $sensores[0]->desgaste }}%<br>
                        Temperatura: {{ $sensores[0]->temperatura }}°C
                    </p>
                    <button class="mt-4 px-4 py-2 bg-brand-500 text-white rounded hover:bg-brand-600"
                        @click="showModal13 = false">
                        Cerrar
                    </button>
                </div>
            </div>

            <!---modal 14--->
            <div x-show="showModal14"
                class="fixed inset-0 z-[999999] flex items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white rounded-lg p-6 w-full max-w-md dark:bg-gray-800" @click.away="showModal14 = false">
                    <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">
                        Sensor 6
                    </h2>
                    <p class="text-gray-600 dark:text-gray-300">
                        Batería: {{ $sensores[5]->bateria }}%<br>
                        Desgaste: {{ $sensores[5]->desgaste }}%<br>
                        Temperatura: {{ $sensores[5]->temperatura }}°C
                    </p>
                    <button class="mt-4 px-4 py-2 bg-brand-500 text-white rounded hover:bg-brand-600"
                        @click="showModal14 = false">
                        Cerrar
                    </button>
                </div>
            </div>

            <!---modal 15--->
            <div x-show="showModal15"
                class="fixed inset-0 z-[999999] flex items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white rounded-lg p-6 w-full max-w-md dark:bg-gray-800" @click.away="showModal15 = false">
                    <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">
                        Sensor 11
                    </h2>
                    <p class="text-gray-600 dark:text-gray-300">
                        Batería: {{ $sensores[10]->bateria }}%<br>
                        Desgaste: {{ $sensores[10]->desgaste }}%<br>
                        Temperatura: {{ $sensores[10]->temperatura }}°C
                    </p>
                    <button class="mt-4 px-4 py-2 bg-brand-500 text-white rounded hover:bg-brand-600"
                        @click="showModal15 = false">
                        Cerrar
                    </button>
                </div>
            </div>

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