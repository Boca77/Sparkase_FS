<x-app-layout>
    <!-- Sidebar and Main Content Wrapper -->
    <div class="flex min-h-screen bg-gray-50">
        <!-- Sidebar -->
        <aside class="w-1/5 bg-white border-r">
            <div class="p-6">
                <!-- Logo -->
                <div class="mb-10">
                    <img src="/path-to-logo.png" alt="Logo" class="h-12">
                </div>

                <!-- Navigation Menu -->
                <nav class="space-y-4">
                    <a href="#" class="block text-blue-600 font-semibold">Главна</a>
                    <a href="#" class="block text-gray-600">Курсови</a>
                    <a href="#" class="block text-gray-600">Корисници</a>
                    <a href="#" class="block text-gray-600">Факултети</a>
                </nav>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <!-- Top Bar -->
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-blue-600">Добредојде назад, Емилија!</h1>
                <div class="flex items-center space-x-4">
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg">Посетете профил</button>
                    <div class="flex items-center space-x-2">
                        <span>Емилија</span>
                        <img src="/path-to-avatar.png" alt="User Avatar" class="w-10 h-10 rounded-full">
                    </div>
                </div>
            </div>

            <!-- Dashboard Cards -->
            <div class="grid grid-cols-3 gap-8">
                <!-- Calendar and Stats -->
                <div class="col-span-1 bg-white p-6 rounded-lg shadow">
                    <h2 class="text-lg font-semibold mb-4">Вашите тековни активности</h2>
                    <!-- Calendar Placeholder -->
                    <div class="bg-gray-100 p-4 rounded-md h-64">Calendar Here</div>
                </div>

                <!-- Usage Chart -->
                <div class="col-span-2 bg-white p-6 rounded-lg shadow">
                    <h2 class="text-lg font-semibold mb-4">Употреба на платформата</h2>
                    <!-- Chart Placeholder -->
                    <div class="bg-gray-100 p-4 rounded-md h-64">Chart Here</div>
                </div>

                <!-- Active Users -->
                <div class="col-span-1 bg-white p-6 rounded-lg shadow">
                    <h2 class="text-lg font-semibold mb-4">Активни корисници</h2>
                    <div class="bg-gray-100 p-4 rounded-md h-32">Users Activity Graph Here</div>
                </div>

                <!-- Certificates -->
                <div class="col-span-1 bg-white p-6 rounded-lg shadow">
                    <h2 class="text-lg font-semibold mb-4">Број на добиени сертификати по курс</h2>
                    <ul class="text-gray-600 space-y-2">
                        <li>Курс 1: 120</li>
                        <li>Курс 2: 98</li>
                        <li>Курс 3: 85</li>
                    </ul>
                </div>

                <!-- Badges Earned -->
                <div class="col-span-1 bg-white p-6 rounded-lg shadow">
                    <h2 class="text-lg font-semibold mb-4">Број на добиени беџови</h2>
                    <ul class="text-gray-600 space-y-2">
                        <li>Златен беџ: 5</li>
                        <li>Сребрен беџ: 12</li>
                        <li>Бронзен беџ: 15</li>
                    </ul>
                </div>

                <!-- Top Students -->
                <div class="col-span-2 bg-white p-6 rounded-lg shadow">
                    <h2 class="text-lg font-semibold mb-4">5 најдобри студенти</h2>
                    <ul class="space-y-2">
                        <li class="flex justify-between"><span>Студент 1</span><span>95%</span></li>
                        <li class="flex justify-between"><span>Студент 2</span><span>90%</span></li>
                        <li class="flex justify-between"><span>Студент 3</span><span>85%</span></li>
                        <li class="flex justify-between"><span>Студент 4</span><span>80%</span></li>
                        <li class="flex justify-between"><span>Студент 5</span><span>78%</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white p-4 mt-8">
        <div class="flex justify-between items-center max-w-7xl mx-auto">
            <img src="/path-to-videolap-logo.png" alt="VideoLap Logo" class="h-8">
            <img src="/path-to-sparkasse-logo.png" alt="Sparkasse Logo" class="h-8">
        </div>
    </footer>
</x-app-layout>
