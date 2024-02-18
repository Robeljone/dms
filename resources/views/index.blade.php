@include(".Includes/header")
@include(".Includes/sidebar")
<div class="p-4 sm:ml-64" style="margin-top: 20px">
    <div class="p-4 border-2 border-black-200 border-solid rounded-lg dark:border-gray-700 mt-14">
        <div class="container mx-auto p-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Chart Section -->
                <div class="bg-white p-4 rounded-md shadow-md">
                    <h2 class="text-lg font-semibold mb-4">Line Chart</h2>
                    <canvas id="lineChart" width="400" height="200"></canvas>
                </div>
                <!-- Pie Chart Section -->
                <div class="bg-white p-4 rounded-md shadow-md">
                    <h2 class="text-lg font-semibold mb-4">Pie Chart</h2>
                    <canvas id="pieChart" width="400" height="200"></canvas>
                </div>
                <div class="bg-white p-4 rounded-md shadow-md">
                    <h2 class="text-lg font-semibold mb-4">Pie Chart</h2>
                    <canvas id="pieChart" width="400" height="200"></canvas>
                </div>
            </div>

        </div>
    </div>
</div>
@include(".Includes/footer")
