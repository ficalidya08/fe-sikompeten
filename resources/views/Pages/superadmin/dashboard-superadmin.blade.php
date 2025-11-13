@extends('layouts.app-superadmin')

@section('title', 'Dashboard Superadmin')

@section('content')
<!-- Header -->
<header class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
  <div>
    <h1 class="text-2xl font-semibold text-[#2B3674]">Hallo, SuperAdmin!</h1>
    <p class="text-sm text-gray-500">Hope you have a good day</p>
  </div>

  <div class="flex items-center gap-4">
    <!-- Ikon Notifikasi -->
    <img 
      src="{{ asset('images/notif.png') }}" 
      alt="Notifikasi"
      class="w-6 h-6 cursor-pointer hover:opacity-80 transition"
    >

    <!-- Ikon Pesan -->
    <img 
      src="{{ asset('images/pesan.png') }}" 
      alt="Pesan" 
      class="w-5 h-5 cursor-pointer hover:opacity-80 transition"
    >

    <script src="//unpkg.com/alpinejs" defer></script>

<!-- Profil Dropdown -->
<div x-data="{ open: false }" class="relative">
  <!-- Tombol Profil -->
  <div 
    @click="open = !open" 
    class="flex items-center gap-2 cursor-pointer select-none"
  >
    <img src="{{ asset('images/bkpsdm.png') }}" alt="Profile" class="w-8 h-8 rounded-full">
    <span class="text-[#2B3674] font-medium text-sm sm:text-base">Admin</span>
    <i 
      :class="open ? 'fa-solid fa-chevron-up' : 'fa-solid fa-chevron-down'" 
      class="text-gray-400 text-sm transition"
    ></i>
  </div>

  <!-- Dropdown Menu -->
  <div 
    x-cloak
    x-show="open"
    @click.away="open = false"
    x-transition
    class="absolute right-0 mt-2 w-40 bg-white rounded-lg shadow-lg py-2 border border-gray-100 z-50"
  >
    <a 
  href="{{ url('/profile-show') }}" 
  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition cursor-pointer"
>
  Profile
</a>

    <div 
      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition cursor-pointer"
    >
      Logout
    </div>
  </div>
</div>

  </div>
</header>

<!-- Cards -->
<section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 mb-8">
  <div class="p-5 sm:p-6 rounded-xl bg-[#FFE6EB] shadow-sm">
    <h2 class="text-gray-700 text-sm font-medium">Total Usulan Masuk</h2>
    <p class="text-2xl sm:text-3xl font-bold text-[#2B3674] mt-2">5</p>
    <p class="text-xs text-[#E74C3C] mt-1">+2 dari bulan lalu</p>
  </div>

  <div class="p-5 sm:p-6 rounded-xl bg-[#F2E9FF] shadow-sm">
    <h2 class="text-gray-700 text-sm font-medium">Total Laporan Hasil Masuk</h2>
    <p class="text-2xl sm:text-3xl font-bold text-[#2B3674] mt-2">2</p>
    <p class="text-xs text-[#9B59B6] mt-1">2 Menunggu</p>
  </div>
</section>

<!-- Table Section -->
<section class="bg-white rounded-xl shadow p-4 sm:p-6">
  <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4 gap-3">
    <div>
      <h2 class="text-lg font-semibold text-[#2B3674]">Daftar Usulan Kegiatan</h2>
      <p class="text-xs text-gray-500">Pantau Daftar Usulan Secara Real-time</p>
    </div>
    <div class="flex flex-wrap gap-2">
      <!-- Tombol Filter -->
      <button class="border border-gray-300 text-gray-700 px-3 py-1.5 text-sm rounded-lg hover:bg-gray-100 transition flex items-center justify-center gap-2">
        <img src="{{ asset('images/filters.png') }}" alt="Filter" class="w-3.5 h-3.5">
        Filter
      </button>
    </div>
  </div>

  <!-- TABEL -->
<div class="overflow-x-auto w-full">
    <table class="min-w-full text-sm text-gray-600">
        <thead class="border-b text-gray-700 bg-[#FAFAFB]">
            <tr>
                <th class="py-3 px-4 text-left font-semibold">No</th>
                <th class="py-3 px-4 text-left font-semibold">Nomor Surat</th>
                <th class="py-3 px-4 text-left font-semibold">Perihal Surat</th>
                <th class="py-3 px-4 text-left font-semibold">Nama Kegiatan</th>
                <th class="py-3 px-4 text-left font-semibold">Tanggal Pelaksanaan</th>
                <th class="py-3 px-4 text-left font-semibold">Status</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 1; $i <= 10; $i++)
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-3 px-4">{{ $i }}</td>
                    <td class="py-3 px-4">123/{{ $i }}/BKPSDM/2025</td>
                    <td class="py-3 px-4">Undangan Kegiatan {{ $i }}</td>
                    <td class="py-3 px-4">Pelatihan Kompetensi {{ $i }}</td>
                    <td class="py-3 px-4">10-11-2025</td>
                    <td class="py-3 px-4">
                        @if ($i % 2 == 0)
                            <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-medium">
                                Disetujui
                            </span>
                        @else
                            <span class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full text-xs font-medium">
                                Menunggu
                            </span>
                        @endif
                    </td>
        </tr>
        @endfor
      </tbody>
    </table>
  </div>
</section>

  

@endsection
