@extends('layouts.app-superadmin')

@section('title', 'Tambah Pengguna')

@section('content')

<!-- Header -->
<div class="bg-white rounded-xl shadow p-6 mb-10">
    <h1 class="text-2xl font-semibold text-[#2B3674]">
        TAMBAH DATA PENGGUNA
    </h1>
    <p class="text-sm text-gray-500 max-w-2xl">
        Lengkapi data berikut untuk menambahkan akun pengguna baru ke sistem.
    </p>
</div>

<!-- Form Tambah Pengguna -->
<section class="bg-white rounded-xl shadow p-6 mb-10">
    <form action="#" method="POST" class="space-y-5">
        @csrf

        <!-- Nama Lengkap -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
            <input 
                type="text" 
                name="name" 
                placeholder="Masukkan nama lengkap"
                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-[#1C1F4A] focus:border-[#1C1F4A]"
                required
            >
        </div>

        <!-- Email -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input 
                type="email" 
                name="email" 
                placeholder="Masukkan email pengguna"
                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-[#1C1F4A] focus:border-[#1C1F4A]"
                required
            >
        </div>

        <!-- Role Pengguna -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Role Pengguna</label>
            <select 
                name="role" 
                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-[#1C1F4A] focus:border-[#1C1F4A]"
                required
            >
                <option value="">-- Pilih Role --</option>
                <option value="SuperAdmin">SuperAdmin</option>
                <option value="Admin">Admin</option>
                <option value="User">User</option>
            </select>
        </div>

        <!-- Status Akun -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Status Akun</label>
            <select 
                name="status" 
                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-[#1C1F4A] focus:border-[#1C1F4A]"
                required
            >
                <option value="">-- Pilih Status --</option>
                <option value="Aktif">Aktif</option>
                <option value="Nonaktif">Nonaktif</option>
            </select>
        </div>

        <!-- Password -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input 
                type="password" 
                name="password" 
                placeholder="Masukkan password pengguna"
                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-[#1C1F4A] focus:border-[#1C1F4A]"
                required
            >
        </div>

        <!-- 🔘 Navigation -->
    <div class="flex justify-between mt-10">
      <a href="user-manajemen" 
        class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg text-sm hover:bg-gray-200 transition">
        <i class="fa-solid fa-arrow-left mr-2"></i>Batal
      </a>

      <a href="user-manajemen" 
        class="bg-[#FFA41B] text-white px-6 py-2 rounded-lg text-sm hover:bg-[#ff9600] transition">
        Simpan<i class="fa-solid fa-arrow-right ml-2"></i>
      </a>
    </div>
    </form>
</section>

@endsection
