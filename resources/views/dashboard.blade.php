@extends('layouts.app')

@section('content')
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Pembelajaran 3 - View Blade & TailwindCSS</h2>
        <p class="text-gray-600 text-sm mt-1">Implementasi tampilan web sederhana menggunakan Laravel Blade Template Engine dan TailwindCSS</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <h3 class="text-gray-500 text-sm font-medium">Tahapan Selesai</h3>
        <p class="text-3xl font-extrabold text-indigo-600 mt-2">3 / 10</p>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-xs border border-gray-200">
        <h3 class="text-gray-500 text-sm font-medium">Status Magang/PKL</h3>
        <p class="text-xl font-bold text-green-600 mt-2">Aktif</p>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-xs border border-gray-200">
        <h3 class="text-gray-500 text-sm font-medium">Durasi</h3>
        <p class="text-3xl font-extrabold text-yellow-600 mt-2">3 Hari</p>
    </div>

    <div class="bg-white rounded-xl shadow-xs border border-gray-200 overflow-hidden">
        <div class="p-4 border-b border-gray-200 font-semibold text-gray-800">Daftar Materi Pembelajaran Front-end</div>
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-500 text-gray-300 text-xs uppercase tracking-wider">
                        <th class="p-4 border-b">No.</th>
                        <th class="p-4 border-b">Materi</th>
                        <th class="p-4 border-b">Durasi</th>
                        <th class="p-4 border-b">Status</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="p-4">1</td>
                        <td class="p-4 font-medium">HTML, CSS Dan JS Dasar</td>
                        <td class="p-4">5 Hari</td>
                        <td class="p-4">
                            <span class="px-2.5 py-1 bg-green-100 text-green-800 rounded-full text-xs font-semibold">Selesai</span>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="p-4">2</td>
                        <td class="p-4 font-medium">Laravel - Route & controller</td>
                        <td class="p-4">3 Hari</td>
                        <td class="p-4">
                            <span class="px-2.5 bg-green-100 text-green-800 rounded-full text-xs font-semibold">Selesai</span>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="p-4">3</td>
                        <td class="p-4 font-medium">Laravel - View Blade & Tailwind</td>
                        <td class="p-4">3 Hari</td>
                        <td class="p-4">
                            <span class="px-2.5 py-1 bg-green-100 text-green-800 rounded-full text-xs font-semibold">Selesai</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection