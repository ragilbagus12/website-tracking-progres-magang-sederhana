<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Dashboard Magang' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="flex h-screen bg-gray-100">

        <aside class="w-64 bg-white shadow-md hidden md:block">
            <div class="p-6 font-bold text-xl text-indigo-600 border-b border-gray-100">
                Hummatech
            </div>
            <nav class="mt-4 px-4 space-y-1">
                <a href="#" class="block px-4 py-2 text-gray-700 bg-indigo-50 text-indigo-600 rounded-md font-medium">Dashboard</a>
                <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-50 hover:text-indigo-600 rounded-md font-medium">Projek Selesai</a>
                <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-50 hover:text-indigo-600 rounded-md font-medium">Tentang</a>
            </nav>
        </aside>

        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="flex justify-between items-center bg-white p-4 shadow-sm border-gray-100">
                <h1 class="text-xl justify-between items-center bg-white p-4 shadow-sm border-b border-gray-100">Front-end Pembelajaran</h1>
                    <div class="flex items-center space-x-3">
                        <span class="text-sm text-gray-600 font-medium">Ragil Bagus Nugroho</span>
                    </div>
            </header>

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>