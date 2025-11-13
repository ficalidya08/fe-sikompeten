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

  <!-- Step Progress -->
  <div class="flex items-center gap-3 mb-8">


  <!-- Step 1 -->
  <button class="flex items-center justify-center w-8 h-8 rounded-full bg-gray-200 hover:bg-[#FFA41B] transition">
  <img src="{{ asset('images/step-1.png') }}" alt="Step 1" class="w-4 h-4">
  </button>
  <div class="w-10 h-[2px] bg-gray-300"></div>

  <!-- Step 2 -->
  <button class="flex items-center justify-center w-8 h-8 rounded-full bg-gray-200 hover:bg-[#FFA41B] transition">
  <img src="{{ asset('images/step-2.png') }}" alt="Step 2" class="w-4 h-4">
  </button>
  <div class="w-10 h-[2px] bg-gray-300"></div>

  <!-- Step 3 -->
  <button class="flex items-center justify-center w-8 h-8 rounded-full bg-[#FFA41B] hover:opacity-90 transition">
  <img src="{{ asset('images/step-3-white.png') }}" alt="Step 3" class="w-4 h-4">
  </button>
  
  </div>

  <!-- Form Upload -->
  <div class="max-w-3xl mx-auto bg-white border border-gray-200 rounded-2xl shadow-sm p-8">
    <div class="mb-6">
      <h2 class="text-gray-700 font-semibold text-base mb-1">Penandatangan Surat</h2>
      <p class="text-sm text-gray-500 mb-4">
        Informasi Kepala OPD yang menandatangani surat usulan (minimal Eselon III)
      </p>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
        <div>
          <label class="block text-sm text-gray-600 mb-1">Nama Kepala OPD</label>
          <input type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-[#FFA41B]" placeholder="Nama lengkap Kepala OPD">
        </div>
        <div>
          <label class="block text-sm text-gray-600 mb-1">Jabatan</label>
          <input type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-[#FFA41B]" placeholder="Contoh: Kepala Dinas, Sekretaris Daerah, dll">
        </div>
      </div>
    </div>

    <!-- Upload Dokumen -->
    <div class="mb-6">
      <h2 class="text-gray-700 font-semibold text-base mb-2">Dokumen</h2>
      <label class="block text-sm text-gray-600 mb-2">Upload Surat Pengajuan Usulan</label>
      
      <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center cursor-pointer hover:border-[#FFA41B] transition">
        <input type="file" id="uploadFile" class="hidden">
        <label for="uploadFile" class="cursor-pointer flex flex-col items-center justify-center">
          <img src="{{ asset('images/upload.png') }}" alt="Upload" class="w-6 h-6 mb-2 opacity-70">
          <p class="text-sm text-gray-600 mb-1">Klik untuk upload atau drag & drop</p>
          <p class="text-xs text-gray-400">PDF, DOC, DOCX (Maks. 10MB)</p>
        </label>
      </div>
    </div>

    <!-- Tombol Navigasi -->
    <div class="flex justify-between items-center mt-8">
      <a href="form-usulan-2" 
       class="bg-gray-200 text-gray-700 px-5 py-2 rounded-lg text-sm font-medium hover:bg-gray-300 transition">
       <i class="fa-solid fa-arrow-left mr-2"></i>Previous
    </a>
      <button class="bg-[#FFA41B] text-white px-5 py-2 rounded-lg text-sm font-medium hover:bg-[#ff9600] transition">
       Next<i class="fa-solid fa-arrow-right ml-2"></i>
      </button>
    </div>
  </div>
</div>
@endsection
