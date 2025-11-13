@extends('layouts.app-user')

@section('title', 'Dashboard User')

@section('content')
<!-- Header -->
<header class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
  <div>
    <h1 class="text-2xl font-semibold text-[#2B3674]">Hallo, User!</h1>
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

    <!-- Profil -->
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
    <h2 class="text-gray-700 text-sm font-medium">Total Usulan</h2>
    <p class="text-2xl sm:text-3xl font-bold text-[#2B3674] mt-2">5</p>
    <p class="text-xs text-[#E74C3C] mt-1">+2 dari bulan lalu</p>
  </div>

  <div class="p-5 sm:p-6 rounded-xl bg-[#E3EEFF] shadow-sm">
    <h2 class="text-gray-700 text-sm font-medium">Disetujui</h2>
    <p class="text-2xl sm:text-3xl font-bold text-[#2B3674] mt-2">3</p>
    <p class="text-xs text-[#3498DB] mt-1">60% approval rate</p>
  </div>

  <div class="p-5 sm:p-6 rounded-xl bg-[#F2E9FF] shadow-sm">
    <h2 class="text-gray-700 text-sm font-medium">Sertifikat</h2>
    <p class="text-2xl sm:text-3xl font-bold text-[#2B3674] mt-2">2</p>
    <p class="text-xs text-[#9B59B6] mt-1">Sertifikat Diterbitkan</p>
  </div>
</section>

  <!-- Tabel Sertifikat -->
  <div class="bg-white rounded-xl shadow border border-gray-100 p-6">
    <div class="flex justify-between items-center mb-4">
      <h3 class="font-semibold text-lg text-[#2B3674]">Daftar Sertifikat Kegiatan</h3>
      <!-- Tombol Filter -->
      <button class="border border-gray-300 text-gray-700 px-3 py-1.5 text-sm rounded-lg hover:bg-gray-100 transition flex items-center justify-center gap-2">
        <img src="{{ asset('images/filters.png') }}" alt="Filter" class="w-3.5 h-3.5">
        Filter
      </button>
    </div>

    <div class="overflow-x-auto">
      <table class="min-w-full border-t border-gray-200 text-sm">
        <thead class="bg-[#F9FAFC] text-gray-600">
          <tr>
            <th class="px-4 py-2 text-left font-medium">No</th>
            <th class="px-4 py-2 text-left font-medium">Nama Kegiatan</th>
            <th class="px-4 py-2 text-left font-medium">Tanggal</th>
            <th class="px-4 py-2 text-left font-medium">Status</th>
            <th class="px-4 py-2 text-left font-medium">Keterangan</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
          <tr>
            <td class="px-4 py-3">1</td>
            <td class="px-4 py-3 font-medium">Workshop Kompetensi ASN</td>
            <td class="px-4 py-3">10 Oktober 2025</td>
            <td class="py-3 px-4">
              <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-medium">
                Tersedia
              </span>
            </td>
            <td class="px-4 py-3 flex gap-2">
              <button class="text-xs px-3 py-1.5 bg-[#1C1F4A] text-white rounded-lg hover:bg-[#2B3674]">
                Cetak Sertifikat
              </button>
              <button class="text-xs px-3 py-1.5 border border-gray-300 rounded-lg hover:bg-gray-100">
                Lihat Sertifikat
              </button>
            </td>
          </tr>
          <tr>
            <td class="px-4 py-3">2</td>
            <td class="px-4 py-3 font-medium">Seminar Pengembangan Diri</td>
            <td class="px-4 py-3">22 September 2025</td>
            <td class="py-3 px-4">
              <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-medium">
                Tersedia
              </span>
            </td>

            <td class="px-4 py-3 flex gap-2">
              <button class="text-xs px-3 py-1.5 bg-[#1C1F4A] text-white rounded-lg hover:bg-[#2B3674]">
                Cetak Sertifikat
              </button>
              <button class="text-xs px-3 py-1.5 border border-gray-300 rounded-lg hover:bg-gray-100">
                Lihat Sertifikat
              </button>
            </td>
          </tr>
          <tr>
            <td class="px-4 py-3">3</td>
            <td class="px-4 py-3 font-medium">Pelatihan Soft Skills</td>
            <td class="px-4 py-3">15 Agustus 2025</td>
            <td class="py-3 px-4">
              <span class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full text-xs font-medium">
                Menunggu
              </span>
            </td>
            <td class="px-4 py-3 flex gap-2">
              <button class="text-xs px-3 py-1.5 bg-[#1C1F4A] text-white rounded-lg hover:bg-[#2B3674]">
                Cetak Sertifikat
              </button>
              <button class="text-xs px-3 py-1.5 border border-gray-300 rounded-lg hover:bg-gray-100">
                Lihat Sertifikat
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>
@endsection
