@extends('layouts.app-superadmin')

@section('title', 'Manajemen Pengguna')

@section('content')

<!-- Header -->
<div class="bg-white rounded-xl shadow p-6 mb-10">
    <h1 class="text-2xl font-semibold text-[#2B3674]">
        MANAJEMEN PENGGUNA SISTEM
    </h1>
    <p class="text-sm text-gray-500 max-w-2xl">
        Daftar akun pengguna yang terdaftar dalam sistem. SuperAdmin dapat menambah, mengedit, atau menghapus data pengguna.
    </p>
</div>

<!-- Table Section -->
<section class="bg-white rounded-xl shadow p-4 sm:p-6">
    <!-- Bagian Atas: Filter & Tombol Tambah -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-5 gap-3">
        <!-- Filter -->
        <div class="flex flex-wrap items-center gap-3">
            <input 
                type="text" 
                placeholder="Cari pengguna..." 
                class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none"
            >

            <select 
                class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none"
            >
                <option value="">Semua Role</option>
                <option>SuperAdmin</option>
                <option>Admin</option>
                <option>User</option>
            </select>

            <select 
                class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none"
            >
                <option value="">Semua Status</option>
                <option>Aktif</option>
                <option>Nonaktif</option>
            </select>
        </div>

        <!-- Tombol Tambah Pengguna -->
            <a href="/tambah-user"
                class="bg-[#FFA41B] text-white px-3 py-1.5 text-sm rounded-lg hover:bg-[#ff9600] transition flex items-center justify-center gap-2">
                + Tambah Pengguna
            </a>
    </div>

    <!-- Tabel -->
    <div class="overflow-x-auto w-full">
        <table class="min-w-full text-sm text-gray-600">
            <thead class="border-b text-gray-700 bg-[#FAFAFB]">
                <tr>
                    <th class="py-3 px-4 text-left font-semibold">No</th>
                    <th class="py-3 px-4 text-left font-semibold">Nama Lengkap</th>
                    <th class="py-3 px-4 text-left font-semibold">Email</th>
                    <th class="py-3 px-4 text-left font-semibold">Role</th>
                    <th class="py-3 px-4 text-left font-semibold">Status</th>
                    <th class="py-3 px-4 text-left font-semibold text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 1; $i <= 8; $i++)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3 px-4">{{ $i }}</td>
                        <td class="py-3 px-4">Pengguna {{ $i }}</td>
                        <td class="py-3 px-4">user{{ $i }}@example.com</td>
                        <td class="py-3 px-4">
                            @if ($i % 3 == 0)
                                <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs font-medium">
                                    SuperAdmin
                                </span>
                            @elseif ($i % 2 == 0)
                                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-medium">
                                    Admin
                                </span>
                            @else
                                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-xs font-medium">
                                    User
                                </span>
                            @endif
                        </td>
                        <td class="py-3 px-4">
                            @if ($i % 2 == 0)
                                <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-medium">
                                    Aktif
                                </span>
                            @else
                                <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-xs font-medium">
                                    Nonaktif
                                </span>
                            @endif
                        </td>
                        <td class="py-3 px-4 text-center">
                            <div class="flex items-center justify-center gap-3" x-data="{ open: false }">
                                <!-- Tombol Detail -->
                                <a href="#" 
                                   @click.prevent="open = true"
                                   class="bg-[#4361EE] text-white text-xs px-3 py-1.5 rounded-md hover:bg-[#3651d4] transition">
                                    Detail
                                </a>

                                <!-- Icon Edit -->
                                <a href="edit-user" title="Edit">
                                    <img src="{{ asset('images/edit.png') }}" 
                                         alt="Edit" class="w-5 h-5 hover:opacity-80 transition">
                                </a>

                                <!-- Tombol Hapus -->
                                <form action="#" method="POST" class="inline"
                                      onsubmit="return confirm('Yakin ingin menghapus pengguna ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="Hapus">
                                        <img src="{{ asset('images/delete.png') }}" 
                                             alt="Hapus" class="w-5 h-5 hover:opacity-80 transition">
                                    </button>
                                </form>

                                <!-- Popup Detail -->
<div 
    x-show="open"
    x-transition
    class="fixed inset-0 bg-gray-900 bg-opacity-50 backdrop-blur-sm flex items-center justify-center z-50"
>
    <div 
        @click.away="open = false"
        x-transition
        class="bg-white rounded-2xl shadow-2xl w-full max-w-md p-6 sm:p-8 relative transform transition-all scale-95"
    >
        <!-- Tombol Close -->
        <button 
            @click="open = false"
            class="absolute top-4 right-4 text-gray-400 hover:text-red-500 text-xl font-bold transition"
        >
            ✕
        </button>

        <!-- Header Modal -->
        <div class="text-center mb-6">
            <div class="w-14 h-14 mx-auto mb-3 bg-[#E8EDFF] rounded-full flex items-center justify-center">
                <img src="{{ asset('images/user-detail.png') }}" alt="User Icon" class="w-7 h-7">
            </div>
            <h2 class="text-xl font-semibold text-[#1C1F4A]">
                Detail Pengguna
            </h2>
            <p class="text-sm text-gray-500 mt-1">
                Informasi lengkap akun pengguna sistem
            </p>
        </div>

        <!-- Isi Detail -->
        <div class="space-y-3 text-sm text-gray-700">
            <div class="flex justify-between border-b pb-2">
                <span class="font-medium">Nama Lengkap</span>
                <span>Pengguna {{ $i }}</span>
            </div>
            <div class="flex justify-between border-b pb-2">
                <span class="font-medium">Email</span>
                <span>user{{ $i }}@example.com</span>
            </div>
            <div class="flex justify-between border-b pb-2">
                <span class="font-medium">Role</span>
                <span>
                    {{ $i % 3 == 0 ? 'SuperAdmin' : ($i % 2 == 0 ? 'Admin' : 'User') }}
                </span>
            </div>
            <div class="flex justify-between border-b pb-2">
                <span class="font-medium">Status</span>
                <span class="{{ $i % 2 == 0 ? 'text-green-600' : 'text-red-600' }}">
                    {{ $i % 2 == 0 ? 'Aktif' : 'Nonaktif' }}
                </span>
            </div>
            <div class="flex justify-between">
                <span class="font-medium">Tanggal Bergabung</span>
                <span>{{ now()->format('d-m-Y') }}</span>
            </div>
        </div>

        <!-- Tombol Tutup -->
        <div class="mt-8 flex justify-center">
            <button 
                @click="open = false"
                class="bg-[#1C1F4A] hover:bg-[#16183a] text-white px-6 py-2.5 rounded-lg text-sm transition shadow-md hover:shadow-lg"
            >
                Tutup
            </button>
        </div>
    </div>
</div>

                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
</section>

@endsection
