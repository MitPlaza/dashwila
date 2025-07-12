@props(['sensoresActivos', 'sensoresCriticos', 'temperaturaPromedio'])

<!-- Metric Group Five -->
<div class="col-span-12 ">
    <div
        class="rounded-2xl border border-gray-200  px-5 pb-5 pt-5 dark:border-gray-800 dark:bg-white/[0.03] sm:px-6 sm:pt-6">

        <div class="flex flex-wrap items-start justify-between gap-5 mb-4">
            <div class="flex gap-2">
                <img src="{{ asset('images/icons/estadisticas.svg')}}" width="25" height="25">
                <h3 class="mb-1 text-lg font-semibold wila-color dark:text-white/90">Resumen General</h3>
            </div>

        </div>

        <div class="grid grid-cols-12 gap-2">


            <div class="col-span-6 gap-2">
                <!-- Metric Item Start -->
                <div
                    class="rounded-2xl flex justify-center items-center mb-4 border border-gray-200 bg-white px-6 pb-5 pt-6 dark:border-gray-800 dark:bg-white/[0.03]">
                    <div class="flex flex-col justify-center items-center gap-3 ">
                        <div>
                            <span
                                class="flex  mb-1 justify-center items-center gap-2 text-xs text-gray-500 dark:text-gray-400">
                                Sensores Activos
                            </span>
                        </div>
                        <div class="flex gap-2">
                            <div>
                                <img src="{{ asset('images/icons/marque-el-circulo.svg')}}" width="25" height="25">
                            </div>
                            <div>
                                <h2 class="text-xl font-bold  text-gray-800  dark:text-white/90">
                                    {{ $sensoresActivos }} / 15
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Metric Item End -->

                <!-- Metric Item Start -->
                <div
                    class="rounded-2xl flex justify-center items-center border border-gray-200 bg-white px-6 pb-5 pt-5 dark:border-gray-800 dark:bg-white/[0.03]">
                    <div class="flex flex-col justify-start  items-center">
                        <div>
                            <span
                                class="flex  mb-1 justify-center items-center text-xs text-gray-500 dark:text-gray-400">
                                Temperatura Promedio
                            </span>
                        </div>
                        <div class="flex gap-2">
                            <div>
                                <img src="{{ asset('images/icons/temperatura-alta.svg')}}" width="25" height="25">
                            </div>
                            <div>
                                <h2 class="text-xl font-bold   text-gray-800 dark:text-white/90">
                                    {{ $temperaturaPromedio }} °C
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Metric Item End -->
            </div>

            <div class="col-span-6 gap-2">
                <!-- Metric Item Start - MODIFICADO CON GRÁFICO -->
                <div style="background: linear-gradient(135deg, #ff6b35 0%, #ff8c42 100%);"
                    class="rounded-2xl flex flex-col justify-center items-center border border-gray-200 px-6 pb-5 pt-5">

                    <!-- Contenedor del gráfico -->
                    <div class="relative mb-3">
                        <canvas id="graficoSensoresCriticos" width="100" height="100"></canvas>
                        <!-- Ícono en el centro -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <img src="{{ asset('images/icons/advertencia-de-triangulo.svg')}}" width="25" height="25">
                        </div>
                    </div>

                    <!-- Texto -->
                    <div class="text-center">
                        <h2 class="text-4xl font-bold text-white mb-1">
                            {{ $sensoresCriticos }}
                        </h2>
                        <span class="text-sm text-white/80">
                            Sensores Críticos
                        </span>
                    </div>
                </div>
                <!-- Metric Item End -->
            </div>
        </div>

        <div class="flex flex-wrap items-start justify-between gap-5 mt-4 mb-4">
            <div class="flex gap-2">
                <img src="{{ asset('images/icons/pastilla.svg')}}" width="25" height="25">
                <h3 class="mb-1 text-lg font-semibold wila-color dark:text-white/90">Rangos de Operación</h3>
            </div>

            <!---inico datos--->
            <div
                class="rounded-xl flex justify-start items-center w-full border border-blue-200 bg-blue-50 px-6 pb-1 pt-1 dark:border-gray-800 dark:bg-white/[0.03]">
                <div class="flex flex-col justify-start items-center gap-3">
                    <div>
                        <span
                            class="flex  justify-center mb-1 items-center gap-2 text-theme-xs text-gray-500 dark:text-gray-400">
                            <span class="inline-block w-3 h-3 rounded-full" style="
                                                            background-color:
                                                  
                                                                 #00a8e8 
                                                       
                                                               ">
                            </span>
                            Temperatura Óptima: 60°C - 90°C
                        </span>
                    </div>

                </div>
            </div>

            <!---inicio datos --->


            <!---inico datos--->
            <div
                class="rounded-xl flex justify-start items-center w-full border border-red-200 bg-red-50 px-6 pb-1 pt-1 dark:border-gray-800 dark:bg-white/[0.03]">
                <div class="flex flex-col justify-start items-center gap-3">
                    <div>
                        <span
                            class="flex  justify-center mb-1 items-center gap-2 text-theme-xs text-gray-500 dark:text-gray-400">
                            <span class="inline-block w-3 h-3 rounded-full" style="
                                                            background-color:
                                                  
                                                                 red 
                                                       
                                                               ">
                            </span>
                            Temperatura Crítica: >90°C
                        </span>
                    </div>

                </div>
            </div>

            <!---inicio datos --->

            <!---inico datos--->
            <div
                class="rounded-xl flex justify-start items-center w-full border border-blue-200 bg-blue-50 px-6 pb-1 pt-1 dark:border-gray-800 dark:bg-white/[0.03]">
                <div class="flex flex-col justify-start items-center gap-3">
                    <div>
                        <span
                            class="flex  justify-center mb-1 items-center gap-2 text-theme-xs text-gray-500 dark:text-gray-400">
                            <span class="inline-block w-3 h-3 rounded-full" style="
                                                            background-color:
                                                  
                                                                 #00a8e8 
                                                       
                                                               ">
                            </span>
                            Desgaste Normal: 0% - 40%
                        </span>
                    </div>

                </div>
            </div>

            <!---inicio datos --->


            <!---inico datos--->
            <div
                class="rounded-xl flex justify-start items-center w-full border border-red-200 bg-red-50 px-6 pb-1 pt-1 dark:border-gray-800 dark:bg-white/[0.03]">
                <div class="flex flex-col justify-start items-center gap-3">
                    <div>
                        <span
                            class="flex  justify-center mb-1 items-center gap-2 text-theme-xs text-gray-500 dark:text-gray-400">
                            <span class="inline-block w-3 h-3 rounded-full" style="
                                                            background-color:
                                                  
                                                                 red 
                                                       
                                                               ">
                            </span>
                            Desgaste Crítico: 40% - 50%
                        </span>
                    </div>

                </div>
            </div>

            <!---inicio datos --->

        </div>


    </div>
</div>

<!-- JavaScript para el gráfico circular -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sensoresCriticos = {{ $sensoresCriticos }};
        const totalSensores = 15;
        const sensoresNormales = totalSensores - sensoresCriticos;

        const ctx = document.getElementById('graficoSensoresCriticos').getContext('2d');

        new Chart(ctx, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [sensoresCriticos, sensoresNormales],
                    backgroundColor: [
                        'rgba(255, 255, 255, 0.9)',  // Blanco para críticos
                        'rgba(255, 255, 255, 0.3)'   // Blanco tenue para normales
                    ],
                    borderWidth: 0,
                    cutout: '60%'  // Tamaño del hueco central
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        enabled: false
                    }
                }
            }
        });
    });
</script>

<style>
    #graficoSensoresCriticos {
        max-width: 100px !important;
        max-height: 100px !important;
    }
</style>