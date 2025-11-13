@extends('layouts.app-superadmin')

@section('title', 'Edit Pengguna')

@section('content')

<!-- Header -->
<div class="bg-white rounded-xl shadow p-6 mb-10">
    <h1 class="text-2xl font-semibold text-[#2B3674]">
        EDIT DATA PENGGUNA
    </h1>
    <p class="text-sm text-gray-500 max-w-2xl">
        Perbarui informasi akun pengguna sistem sesuai kebutuhan.
    </p>
</div>

<!-- Form Section -->
<div class="bg-white rounded-xl shadow p-6 mb-10">
    <form action="#" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <!-- Nama Lengkap -->
        <div>
            <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">
                Nama Lengkap
            </label>
            <input type="text" id="nama" name="nama"
                   value="Pengguna 1"
                   class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#4361EE] focus:outline-none text-sm">
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                Email
            </label>
            <input type="email" id="email" name="email"
                   value="user1@example.com"
                   class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#4361EE] focus:outline-none text-sm">
        </div>

        <!-- Role -->
        <div>
            <label for="role" class="block text-sm font-medium text-gray-700 mb-1">
                Role Pengguna
            </label>
            <select id="role" name="role"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#4361EE] focus:outline-none text-sm">
                <option>SuperAdmin</option>
                <option selected>Admin</option>
                <option>User</option>
            </select>
        </div>

        <!-- Status -->
        <div>
            <label for="status" class="block text-sm font-medium text-gray-700 mb-1">
                Status Akun
            </label>
            <select id="status" name="status"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#4361EE] focus:outline-none text-sm">
                <option selected>Aktif</option>
                <option>Nonaktif</option>
            </select>
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                Ubah Password (Opsional)
            </label>
            <input type="password" id="password" name="password"
                   placeholder="Kosongkan jika tidak ingin mengganti"
                   class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#4361EE] focus:outline-none text-sm">
        </div>

        <!-- 🔘 Navigation -->
    <div class="flex justify-between mt-10">
      <a href="user-manajemen" 
        class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg text-sm hover:bg-gray-200 transition">
        <i class="fa-solid fa-arrow-left mr-2"></i>Batal
      </a>

      <a href="user-manajemen" 
        class="bg-[#FFA41B] text-white px-6 py-2 rounded-lg text-sm hover:bg-[#ff9600] transition">
        Simpan Perubahan<i class="fa-solid fa-arrow-right ml-2"></i>
      </a>
    </div>
    </form>
</section>

@endsection
