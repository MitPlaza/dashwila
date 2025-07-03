@props(['sensoresActivos', 'sensoresCriticos', 'temperaturaPromedio'])

<div class="col-span-12">
    <!-- Metric Group Five -->
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:gap-6 xl:grid-cols-3 pb-4">
        <!-- Metric Item Start -->
        <div
            class="rounded-2xl flex justify-center items-center border border-gray-200 bg-white px-6 pb-5 pt-6 dark:border-gray-800 dark:bg-white/[0.03]">
            <div class="flex flex-col justify-center items-center gap-3">
                <div>
                    <span
                        class="flex  mb-1 justify-center items-center gap-2 text-theme-xs text-gray-500 dark:text-gray-400">
                        <img src="{{ asset('images/icons/sensor-encendido.svg')}}" width="25" height="25"> Sensores
                        Activos
                    </span>
                </div>
                <div>
                    <h2 class="text-4xl font-bold  text-gray-800  dark:text-white/90">
                        {{ $sensoresActivos }} / 15
                    </h2>
                </div>
            </div>
        </div>
        <!-- Metric Item End -->

        <!-- Metric Item Start -->
        <div
            class="rounded-2xl flex justify-center items-center border border-gray-200 bg-white px-6 pb-5 pt-5 dark:border-gray-800 dark:bg-white/[0.03]">
            <div class="flex flex-col justify-start items-center gap-3">
                <div>
                    <span
                        class="flex  mb-1 justify-center items-center gap-2 text-theme-xs text-gray-500 dark:text-gray-400">
                        <img src="{{ asset('images/icons/exclamacion-de-bateria.svg')}}" width="25" height="25">
                        Estado Crítico
                    </span>
                </div>
                <div>
                    <h2 class="text-4xl font-bold  text-red-600  dark:text-white/90">
                        {{ $sensoresCriticos }}
                    </h2>
                </div>
            </div>
        </div>
        <!-- Metric Item End -->

        <!-- Metric Item Start -->
        <div
            class="rounded-2xl flex justify-center items-center border border-gray-200 bg-white px-6 pb-5 pt-5 dark:border-gray-800 dark:bg-white/[0.03]">
            <div class="flex flex-col justify-start items-center gap-3">
                <div>
                    <span
                        class="flex  mb-1 justify-center items-center gap-2 text-theme-xs text-gray-500 dark:text-gray-400">
                        <img src="{{ asset('images/icons/temperatura-alta.svg')}}" width="25" height="25">
                        Temperatura Promedio
                    </span>
                </div>
                <div>
                    <h2 class="text-4xl font-bold   text-gray-800 dark:text-white/90">
                        {{ $temperaturaPromedio }} °C
                    </h2>
                </div>
            </div>
        </div>
        <!-- Metric Item End -->


    </div>
    <!-- Metric Group Five -->
</div>


<!----optimo-aceptable-critico-->
<div class="col-span-12">
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
                    <span class="flex  mb-1 items-center gap-2 text-theme-xs text-gray-500 dark:text-gray-400">
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
                    <span class="flex  mb-1 items-center gap-2 text-theme-xs text-gray-500 dark:text-gray-400">
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