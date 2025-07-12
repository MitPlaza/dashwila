<div class="col-span-6 gap-4 mt-4">
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 mb-6">
        <h2 class="text-xl font-bold mb-4 text-gray-800 dark:text-white"
            style="background: #003459; padding: 10px; border-radius: 5px; color: #a6b8c1; font-weight: 400;">
            {{ $titulo }}
        </h2>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Anillo Interior -->
            <div>
                <h3 class="text-lg font-semibold mb-3 text-gray-700 dark:text-gray-300">Anillo Interior</h3>
                <canvas id="grafico{{ ucfirst($tipo) }}Interior" width="400" height="400"></canvas>
            </div>

            <!-- Anillo Medio -->
            <div>
                <h3 class="text-lg font-semibold mb-3 text-gray-700 dark:text-gray-300">Anillo Medio</h3>
                <canvas id="grafico{{ ucfirst($tipo) }}Medio" width="400" height="400"></canvas>
            </div>

            <!-- Anillo Exterior -->
            <div>
                <h3 class="text-lg font-semibold mb-3 text-gray-700 dark:text-gray-300">Anillo Exterior</h3>
                <canvas id="grafico{{ ucfirst($tipo) }}Exterior" width="400" height="400"></canvas>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript inteligente -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Datos del componente - usando las variables del componente
        const datos{{ ucfirst($tipo) }} = @json($datos);
        const tipoGrafico = '{{ $tipo }}';
        const unidad = '{{ $unidad }}';
        const maximoEje = {{ $maximoEje }};
        const propiedadDatos = '{{ $propiedadDatos }}';

        // Función para crear gráfico inteligente
        function crearGrafico{{ ucfirst($tipo) }}(canvasId, datos, titulo, mostrarEjeY = false) {
            const ctx = document.getElementById(canvasId).getContext('2d');

            const labels = datos.map(item => item.nombre);
            const values = datos.map(item => item[propiedadDatos]); // ¡Aquí está la magia!
            const colors = datos.map(item => item.color);

            const config = {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: `${tipoGrafico.charAt(0).toUpperCase() + tipoGrafico.slice(1)} Promedio (${unidad})`,
                        data: values,
                        backgroundColor: colors,
                        borderColor: colors.map(color => color),
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: maximoEje,
                            display: mostrarEjeY,
                            ticks: {
                                display: mostrarEjeY,
                                callback: function (value) {
                                    return value + unidad;
                                }
                            },
                            grid: {
                                display: false
                            }
                        },
                        x: {
                            ticks: {
                                maxRotation: 45,
                                minRotation: 45
                            },
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            };

            new Chart(ctx, config);
        }

        // Crear gráficos para cada anillo - NUEVO ORDEN
        crearGrafico{{ ucfirst($tipo) }}('grafico{{ ucfirst($tipo) }}Interior', datos{{ ucfirst($tipo) }}['Anillo Interior'], 'Anillo Interior', true);
        crearGrafico{{ ucfirst($tipo) }}('grafico{{ ucfirst($tipo) }}Medio', datos{{ ucfirst($tipo) }}['Anillo Medio'], 'Anillo Medio', false);
        crearGrafico{{ ucfirst($tipo) }}('grafico{{ ucfirst($tipo) }}Exterior', datos{{ ucfirst($tipo) }}['Anillo Exterior'], 'Anillo Exterior', false);
    });
</script>

<style>
    canvas {
        max-height: 300px !important;
    }
</style>