<x-app-layout>
    <!-- Sidebar and Main Content Wrapper -->
    <div class="flex min-h-screen bg-white mt-10">
        <!-- Sidebar -->
        <aside class="w-1/5 bg-blue-50 p-6 rounded-lg" style="height: 100%;">
            <div class="p-6">
                <!-- Logo -->
                <div class="mb-10 flex justify-center">
                    <img src="{{ asset('images/image.png') }}" alt="logo" class="w-20 mb-10">
                </div>

                <!-- Navigation Menu -->
                <nav class="space-y-4 text-lg flex flex-col justify-between" style="height: 300px;">
                    <div>
                        <a href="/dashboard"
                            class="block text-blue-600 hover:bg-gray-300 hover:rounded hover:px-4 hover:transition-all font-bold">Главен
                            панел</a>
                        <a href="{{ route('profile.edit') }}"
                            class="block text-blue-600 hover:bg-gray-300 hover:rounded hover:px-4 hover:transition-all font-bold">Мој
                            профил</a>
                        <a href="#"
                            class="block text-blue-600 hover:bg-gray-300 hover:rounded hover:px-4 hover:transition-all font-bold">Статистики</a>
                        <a href="{{ route('courses.index') }}"
                            class="block text-blue-600 hover:bg-gray-300 hover:rounded hover:px-4 hover:transition-all font-bold">Курсеви</a>
                    </div>
                    <div>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="block text-blue-600 hover:bg-gray-300 hover:rounded hover:px-4 hover:transition-all font-bold">Одјави
                                се</button>
                        </form>
                    </div>
                </nav>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 px-8">
            <!-- Top Bar -->
            <div class="bg-blue-50 p-6 rounded-lg items-center mb-8">
                <div class="flex justify-between ">
                    <h1 class="text-3xl font-bold text-blue-600">Добредојде назад, {{ Auth::user()->name }}!</h1>
                    <div class="flex items-center space-x-4">
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg">Превземи во Excel</button>
                    </div>
                </div>
                <p class="text-blue-600 mt-5">Види што сработија студентите во последниов период!</p>
            </div>

            <!-- Dashboard Cards -->
            <div class="grid grid-cols-3 gap-8">
                <!-- Calendar and Stats -->
                <div class="col-span-1 p-6 bg-blue-50 p-6 rounded-lg">
                    <h2 class="text-2xl font-bold text-blue-800 mb-6">Вашите тековни активности</h2>
                    <!-- Calendar Placeholder -->
                    <div class="bg-gray-100 p-4 rounded-md h-64">Calendar Here</div>
                </div>

                <!-- Usage Chart -->
                <div class="col-span-2 bg-blue-50 p-6 rounded-lg">
                    <h2 class="text-2xl font-bold text-blue-800 mb-6">Употреба на платформа</h2>
                    <!-- Platform Usage Chart or Content Here -->
                    <button class="mt-6 bg-blue-100 text-blue-800 font-semibold py-2 px-4 rounded-lg hover:bg-blue-200">
                        Преглед на податоци
                    </button>
                </div>

                <!-- Active Users -->
                <div class="bg-blue-50 p-6 rounded-lg">
                    <h2 class="text-2xl font-bold text-blue-800 mb-6">Активни корисници</h2>
                    <!-- Active Users Content Here -->
                    <button class="mt-6 bg-blue-100 text-blue-800 font-semibold py-2 px-4 rounded-lg hover:bg-blue-200">
                        Преглед на податоци
                    </button>
                </div>

                <!-- Certificates -->
                <div class="col-span-2 bg-blue-50 p-6 rounded-lg">
                    <h2 class="text-2xl font-bold text-blue-800 mb-6">Број на добиени сертификати по курс.</h2>

                    <ol class="list-decimal list-inside text-gray-600">
                        <li class="flex justify-between mb-2">
                            <span>Финансии за стартапи: Како да го стартуваш својот бизнис?</span>
                            <span>322</span>
                        </li>
                        <li class="flex justify-between mb-2">
                            <span>Буџетирање за претприемачи: Како да останеш во зелено?</span>
                            <span>211</span>
                        </li>
                        <li class="flex justify-between mb-2">
                            <span>Како да ги оптимизираш трошоците и да генерираш профит?</span>
                            <span>202</span>
                        </li>
                        <li class="flex justify-between mb-2">
                            <span>Менаџирање на паричен тек – Клучот за успешен бизнис!</span>
                            <span>183</span>
                        </li>
                        <li class="flex justify-between mb-2">
                            <span>Како да инвестираш во својот бизнис и да го скалираш?</span>
                            <span>144</span>
                        </li>
                    </ol>

                    <button class="mt-6 bg-blue-100 text-blue-800 font-semibold py-2 px-4 rounded-lg hover:bg-blue-200">
                        Превземи целосна листа
                    </button>
                </div>


                <!-- Badges Earned -->
                <div class="col-span-1 p-6 bg-blue-50 p-6 rounded-lg">
                    <h2 class="text-2xl font-bold text-blue-800 mb-6">Број на добиени беџови</h2>
                    <ul class="text-gray-600 space-y-2">
                        <li>Златен беџ: 5</li>
                        <li>Сребрен беџ: 12</li>
                        <li>Бронзен беџ: 15</li>
                    </ul>
                </div>

                <!-- Top Students -->
                <div class="col-span-2 bg-blue-50 p-6 rounded-lg">
                    <h2 class="text-2xl font-bold text-blue-800 mb-6">5 најдобри студенти</h2>
                    <!-- Top 5 Students Content Here -->
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex justify-between"><span>Студент 1</span><span>95%</span></li>
                        <li class="flex justify-between"><span>Студент 2</span><span>90%</span></li>
                        <li class="flex justify-between"><span>Студент 3</span><span>85%</span></li>
                        <li class="flex justify-between"><span>Студент 4</span><span>80%</span></li>
                        <li class="flex justify-between"><span>Студент 5</span><span>78%</span></li>
                    </ul>
                    <button class="mt-6 bg-blue-100 text-blue-800 font-semibold py-2 px-4 rounded-lg hover:bg-blue-200">
                        Превземи целосна листа
                    </button>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer -->
    <hr class="mt-10">
    <footer class="bg-white p-4">
        <div class="flex justify-between items-center max-w-7xl mx-auto p-5">
            <img src="{{ asset('images/image.png') }}" alt="VideoLap Logo" class="h-16">
            <div>
                <a href="#" class="pe-10">Контакт</a>
                <a href="#" class="pe-10">ЧПП</a>
                <a href="#">Политика за приватност</a>
            </div>
            <img src="{{ asset('images/logo.png') }}" alt="Sparkasse Logo" class="h-8">
        </div>
        <div class="flex justify-center text-blue-600">
            &copy;VibeOnEdu
        </div>
    </footer>
</x-app-layout>
