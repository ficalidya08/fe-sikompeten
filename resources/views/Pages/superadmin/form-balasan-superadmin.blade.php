@extends('layouts.app-superadmin')

@section('title', 'Formulir Balasan Laporan Kegiatan')

@section('content')
<div class="bg-[#F5F6FA] p-6 sm:p-10">

    {{-- Breadcrumb + Title --}}
    <div class="flex items-center gap-2 text-sm text-[#2B3674] mb-4">
        <span>Surakarta, Indonesia</span>
        <span>•</span>
        <span>24 September 2025</span>
    </div>

        <div class="bg-white rounded-xl shadow p-6 mb-10">
    <h1 class="text-2xl font-semibold text-[#2B3674]">
        FORMULIR BALASAN LAPORAN KEGIATAN
    </h1>
    <p class="text-sm text-gray-500 max-w-2xl">
        Silakan lengkapi data pada form ini untuk balasan laporan kegiatan. 
        Pastikan semua informasi yang dibutuhkan terisi dengan benar sebelum disimpan atau diajukan.
    </p>
</div>

  
    <div class="bg-white rounded-xl shadow p-6 mb-10">
      <h2 class="text-lg font-semibold text-[#2B3674] mb-1">Surat Balasan Laporan Kegiatan</h2>
      <p class="text-gray-500 text-sm mb-6">Lengkapi informasi surat balasan laporan kegiatan.</p>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

        <div>
          <label class="text-sm font-medium text-gray-700">Nomor Surat</label>
          <input type="text" placeholder="Contoh: 01/OPD/2025" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
        </div>

        <div>
          <label class="text-sm font-medium text-gray-700">Tanggal Surat</label>
          <input type="date" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
        </div>

        <div class="sm:col-span-2">
          <label class="text-sm font-medium text-gray-700">Perihal</label>
          <input type="text" placeholder="Masukkan perihal surat" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
        </div>

        <div class="sm:col-span-2">
          <label class="text-sm font-medium text-gray-700">Lampiran</label>
          <input type="text" placeholder="Masukkan lampiran surat" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
        </div>
        
        <div class="w-full col-span-2">
    <label class="text-sm font-medium text-gray-700">Usulan Kegiatan</label>
    <select class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
        <option value="">-- Pilih Usulan --</option>
        <option>Usulan 1</option>
        <option>Usulan 2</option>
    </select>
        </div>

        <div class="sm:col-span-2">
          <label class="text-sm font-medium text-gray-700">Jumlah Jam Pelajaran (JP)</label>
          <input type="text" placeholder="Masukkan jumlah pelajaran (JP)" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
        </div>

        <div class="sm:col-span-2">
          <label class="text-sm font-medium text-gray-700">Nomor Sertifikat</label>
          <input type="text" placeholder="Masukkan nomor sertifikat" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
        </div>

      </div>
    </div>

    <!-- 🔘 Navigation -->
    <div class="flex justify-between mt-10">
      <a href="daftar-laporan-superadmin" 
        class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg text-sm hover:bg-gray-200 transition">
        <i class="fa-solid fa-arrow-left mr-2"></i>Kembali
      </a>

      <a href="review-balasan" 
        class="bg-[#FFA41B] text-white px-6 py-2 rounded-lg text-sm hover:bg-[#ff9600] transition">
        Selanjutnya<i class="fa-solid fa-arrow-right ml-2"></i>
      </a>
    </div>
    </div>
</div>
@endsection
