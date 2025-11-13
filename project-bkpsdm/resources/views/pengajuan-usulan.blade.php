@extends('layouts.app')

@section('title', 'Dashboard Admin OPD')

@section('content')
<!-- Header -->
<header class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
  <div>
    <h1 class="text-2xl font-semibold text-[#2B3674]">PENGAJUAN USULAN</h1>
    <p class="text-sm text-gray-500">Daftar usulan kegiatan yang saat ini sedang dalam proses pengajuan.</p>
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
    <div class="flex items-center gap-2 cursor-pointer">
      <img src="{{ asset('images/bkpsdm.png') }}" alt="Profile" class="w-8 h-8 rounded-full">
      <span class="text-[#2B3674] font-medium text-sm sm:text-base">Admin</span>
      <i class="fa-solid fa-chevron-down text-gray-400 text-sm"></i>
    </div>
  </div>
</header>

<!-- Table Section -->
<section class="bg-white rounded-xl shadow p-4 sm:p-6">
  <div
    class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4 gap-3"
  >
    <!-- Grup Kiri (Filter) -->
    <div class="flex flex-wrap gap-2">
      <!-- Tombol Filter -->
      <button
        class="border border-gray-300 text-gray-700 px-3 py-1.5 text-sm rounded-lg hover:bg-gray-100 transition flex items-center justify-center gap-2"
      >
        <img
          src="{{ asset('images/filters.png') }}"
          alt="Filter"
          class="w-3.5 h-3.5"
        />
        Filter
      </button>
    </div>

    <!-- Grup Kanan (Cetak & Upload) -->
    <div class="flex flex-wrap gap-2 w-full sm:w-auto justify-end">
      <!-- Tombol Cetak -->
      <button
        class="border border-gray-300 text-gray-700 px-3 py-1.5 text-sm rounded-lg hover:bg-gray-100 transition flex items-center justify-center gap-2"
      >
        <img
          src="{{ asset('images/Icon.png') }}"
          alt="Print"
          class="w-4 h-4"
        />
        Cetak Sertifikat
      </button>

      <!-- Tombol Upload -->
      <a
        href="/form-usulan-1"
        class="bg-[#FFA41B] text-white px-3 py-1.5 text-sm rounded-lg hover:bg-[#ff9600] transition flex items-center justify-center gap-2"
      >
        + Upload Usulan
      </a>
    </div>
  </div>

 <!-- Wrapper agar tabel bisa discroll di layar kecil -->
  <div class="overflow-x-auto w-full">
  <table class="min-w-full text-sm text-gray-600">
    <thead class="border-b text-gray-700 bg-[#FAFAFB]">
      <tr>
        <th class="py-3 px-4 text-left font-semibold">No</th>
        <th class="py-3 px-4 text-left font-semibold">Nama Kegiatan</th>
        <th class="py-3 px-4 text-left font-semibold">File</th>
        <th class="py-3 px-4 text-left font-semibold">Status</th>
        <th class="py-3 px-4 text-left font-semibold">Hasil</th>
        <th class="py-3 px-4 text-left font-semibold">Keterangan</th>
      </tr>
    </thead>
    <tbody>
      @for ($i = 1; $i <= 10; $i++)
        <tr class="border-b hover:bg-gray-50">
          <td class="py-3 px-4">{{ $i }}</td>
          <td class="py-3 px-4 font-semibold text-[#2B3674]">Nama Kegiatan {{ $i }}</td>
          <td class="py-3 px-4">File_{{ $i }}.pdf</td>
          <td class="py-3 px-4">
            @if ($i % 2 == 0)
              <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-medium">Active</span>
            @else
              <span class="bg-gray-100 text-gray-500 px-3 py-1 rounded-full text-xs font-medium">Inactive</span>
            @endif
          </td>
          <td class="py-3 px-4">Lulus</td>

          <!-- Kolom Keterangan + Tombol -->
          <td class="py-3 px-4">
          <div class="flex items-center justify-between gap-3 w-full">
            <span class="text-gray-600 text-sm truncate max-w-[55%]">Keterangan Kegiatan</span>
            <button class="bg-[#4361EE] text-white text-xs px-4 py-1.5 rounded-md">Detail</button>
          </div>
          </td>
        </tr>
      @endfor
    </tbody>
  </table>
</div>
</section>
@endsection
