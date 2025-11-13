@extends('layouts.app')

@section('title', 'Form Pengajuan Usulan')

@section('content')
<div class="min-h-screen bg-[#F5F6FA] p-6 sm:p-10">
  <!-- Header -->
  <header class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
    <div>
      <h1 class="text-2xl font-semibold text-[#2B3674]">FORMULIR PENGAJUAN USULAN</h1>
      <p class="text-sm text-gray-500 max-w-2xl">
        Silakan lengkapi data pada form ini untuk mengajukan usulan kegiatan. 
      </p>
    </div>

    <div class="flex items-center gap-4">
      <img src="{{ asset('images/notif.png') }}" alt="Notif" class="w-6 h-6 cursor-pointer hover:opacity-80 transition">
      <img src="{{ asset('images/pesan.png') }}" alt="Pesan" class="w-5 h-5 cursor-pointer hover:opacity-80 transition">
      <div class="flex items-center gap-2 cursor-pointer">
        <img src="{{ asset('images/bkpsdm.png') }}" alt="Profile" class="w-8 h-8 rounded-full">
        <span class="text-[#2B3674] font-medium text-sm sm:text-base">Admin</span>
        <i class="fa-solid fa-chevron-down text-gray-400 text-sm"></i>
      </div>
    </div>
  </header>

<!-- Lokasi + Tanggal -->
<div class="bg-white rounded-xl shadow p-6 mb-8">
  <div class="flex justify-between items-center mb-6">
    <div class="flex items-center text-sm text-gray-600 gap-4">
      <div class="flex items-center gap-2">
        <i class="fa-solid fa-location-dot text-[#FFA41B]"></i>
        <span>Surakarta, Indonesia</span>
        <i class="fa-regular fa-calendar text-[#FFA41B] ml-4"></i>
        <span>24 September 2025</span>
      </div>
    </div>
  </div>

    <!-- Progress Step -->
    <div class="flex items-center gap-3 mb-8">

  <!-- Step 1 -->
  <button class="flex items-center justify-center w-8 h-8 rounded-full bg-[#FFA41B] hover:opacity-90 transition">
  <img src="{{ asset('images/step-1-white.png') }}" alt="Step 1" class="w-4 h-4">
  </button>
  <div class="w-10 h-[2px] bg-gray-300"></div>

  <!-- Step 2 -->
  <button class="flex items-center justify-center w-8 h-8 rounded-full bg-gray-200 hover:bg-[#FFA41B] transition">
  <img src="{{ asset('images/step-2.png') }}" alt="Step 2" class="w-4 h-4">
  </button>
  <div class="w-10 h-[2px] bg-gray-300"></div>

  <!-- Step 3 -->
  <button class="flex items-center justify-center w-8 h-8 rounded-full bg-gray-200 hover:bg-[#FFA41B] transition">
  <img src="{{ asset('images/step-3.png') }}" alt="Step 3" class="w-4 h-4">
  </button>
  </div>


  <!-- Form -->
  <section class="bg-white rounded-xl shadow p-8">
    <h2 class="text-lg font-semibold text-[#2B3674] mb-6">Informasi Dasar Kegiatan</h2>

    <form class="grid grid-cols-1 sm:grid-cols-2 gap-6">
      <div>
        <label class="text-sm font-medium text-gray-700">Nama Kegiatan</label>
        <input type="text" placeholder="Masukkan Nama Kegiatan" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#FFA41B]">
      </div>

      <div>
        <label class="text-sm font-medium text-gray-700">Jenis Kegiatan</label>
        <input type="text" placeholder="Masukkan Jenis Kegiatan" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#FFA41B]">
      </div>

      <div>
        <label class="text-sm font-medium text-gray-700">Kategori Kompetensi</label>
        <input type="text" placeholder="Masukkan Kategori Kompetensi" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#FFA41B]">
      </div>

      <div>
        <label class="text-sm font-medium text-gray-700">Unit OPD</label>
        <input type="text" placeholder="Masukkan Unit OPD" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#FFA41B]">
      </div>

      <div>
        <label class="text-sm font-medium text-gray-700">Tanggal Mulai</label>
        <input type="date" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#FFA41B]">
      </div>

      <div>
        <label class="text-sm font-medium text-gray-700">Tanggal Selesai</label>
        <input type="date" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#FFA41B]">
      </div>

      <div>
        <label class="text-sm font-medium text-gray-700">Penyelenggara</label>
        <input type="text" placeholder="Masukkan Penyelenggara" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#FFA41B]">
      </div>

      <div>
        <label class="text-sm font-medium text-gray-700">Tempat Kegiatan</label>
        <input type="text" placeholder="Masukkan Tempat Kegiatan" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#FFA41B]">
      </div>

      <div>
        <label class="text-sm font-medium text-gray-700">Sasaran Peserta</label>
        <input type="text" placeholder="Contoh: ASN Golongan III, Jabatan Fungsional, dll" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#FFA41B]">
      </div>

      <div>
        <label class="text-sm font-medium text-gray-700">Alokasi Anggaran</label>
        <select class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-[#FFA41B]">
          <option>Pilih sumber anggaran</option>
          <option>APBN</option>
          <option>APBD</option>
          <option>Lainnya</option>
        </select>
      </div>
    </form>

    <!-- Tombol Navigasi -->
    <div class="flex justify-between mt-10">
      <a href="pengajuan-usulan" 
        class="bg-gray-100 text-gray-700 px-6 py-2 rounded-lg text-sm hover:bg-gray-200 transition">
        <i class="fa-solid fa-arrow-left mr-2"></i>Previous
      </a>
      <a href="form-usulan-2" 
        class="bg-[#FFA41B] text-white px-6 py-2 rounded-lg text-sm hover:bg-[#ff9600] transition">
        Next<i class="fa-solid fa-arrow-right ml-2"></i>
      </a>
    </div>
  </section>
</div>
@endsection
