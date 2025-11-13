@extends('layouts.app-admin')

@section('title', 'Form Laporan Hasil Kegiatan')

@section('content')
<div class="bg-[#F5F6FA] p-6 sm:p-10">

  <!-- Breadcrumb -->
  <div class="flex items-center gap-2 text-sm text-[#2B3674] mb-4">
    <span>Surakarta, Indonesia</span>
    <span>•</span>
    <span>24 September 2025</span>
  </div>

  <!-- Header Form -->
  <div class="bg-white rounded-xl shadow p-6 mb-8">
    <h1 class="text-2xl font-semibold text-[#2B3674]">FORMULIR LAPORAN HASIL KEGIATAN</h1>
    <p class="text-sm text-gray-500 mt-2">
      Silakan lengkapi form berikut untuk melaporkan hasil kegiatan yang telah dilakukan. Pastikan semua data benar sebelum disimpan.
    </p>
  </div>

  <!-- Section A: Identitas Surat -->
  <div class="bg-white rounded-xl shadow p-6 mb-10">
    <h2 class="text-lg font-semibold text-[#2B3674] mb-1">Identitas Surat</h2>
    <p class="text-gray-500 text-sm mb-6">Lengkapi identitas surat hasil kegiatan.</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
      <div>
        <label class="text-sm font-medium text-gray-700">Nomor Surat</label>
        <input type="text" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm" placeholder="Contoh: 03/2025/BKPSDM">
      </div>

      <div>
        <label class="text-sm font-medium text-gray-700">Tanggal Surat</label>
        <input type="date" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
      </div>

      <div class="sm:col-span-2">
        <label class="text-sm font-medium text-gray-700">Perihal</label>
        <input type="text" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm" placeholder="Masukkan perihal surat">
      </div>

      <div class="sm:col-span-2">
        <label class="text-sm font-medium text-gray-700">Lampiran</label>
        <input type="text" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm" placeholder="Masukkan lampiran surat">
      </div>
    </div>
  </div>

  <!-- Section B: Laporan Hasil Kegiatan -->
  <div class="bg-white rounded-xl shadow p-6 mb-10">
    <h2 class="text-lg font-semibold text-[#2B3674] mb-1">Laporan Hasil Kegiatan</h2>
    <p class="text-gray-500 text-sm mb-6">Lengkapi informasi kegiatan yang dilaporkan.</p>

   <div class="space-y-5">
      <div class="w-full">
  <label class="text-sm font-medium text-gray-700">Usulan Kegiatan</label>
  <select class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
    <option value="">-- Pilih Unit --</option>
    <option>Usulan 1</option>
    <option>Usulan 2</option>
  </select>
</div>


      <div class="sm:col-span-2">
        <label class="text-sm font-medium text-gray-700">Identitas Surat Usulan Kegiatan</label>
        <input type="text" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm" placeholder="Masukkan identitas surat usulan kegiatan">
      </div>

      <div>
        <label class="text-sm font-medium text-gray-700">Cara Pelatihan</label>
        <select class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
          <option value="">-- Pilih Cara --</option>
          <option>Diklat Struktural</option>
          <option>Bimbingan Teknis</option>
          <option>Datasering</option>
        </select>
      </div>

      <div class="sm:col-span-2">
        <label class="text-sm font-medium text-gray-700">Latar Belakang</label>
        <textarea class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm h-28" placeholder="Masukkan latar belakang kegiatan"></textarea>
      </div>

      <div class="sm:col-span-2">
        <label class="text-sm font-medium text-gray-700">Dasar Hukum</label>
        <textarea class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm h-28" placeholder="Masukkan dasar hukum kegiatan"></textarea>
      </div>

      <div class="sm:col-span-2">
        <label class="text-sm font-medium text-gray-700">Maksud Kegiatan</label>
        <textarea class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm h-28" placeholder="Masukkan maksud kegiatan"></textarea>
      </div>

      <div class="sm:col-span-2">
        <label class="text-sm font-medium text-gray-700">Tujuan Kegiatan</label>
        <textarea class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm h-28" placeholder="Masukkan tujuan kegiatan"></textarea>
      </div>

      <div class="sm:col-span-2">
        <label class="text-sm font-medium text-gray-700">Atribut Khusus</label>
        <input type="text" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm" placeholder="Masukkan lampiran surat">
      </div>
    </div>
  </div>

  <!-- Section C: Detail Laporan Hasil Kegiatan -->
  <div class="bg-white rounded-xl shadow p-6 mb-10">
    <h2 class="text-lg font-semibold text-[#2B3674] mb-1">Detail Laporan Hasil Kegiatan</h2>
    <p class="text-gray-500 text-sm mb-6">Lengkapi detail laporan kegiatan.</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
      <div class="sm:col-span-2">
        <label class="text-sm font-medium text-gray-700">Rincian Kegiatan</label>
        <textarea class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm h-28" placeholder="Masukkan tujuan kegiatan"></textarea>
      </div>

      <div class="sm:col-span-2">
        <label class="text-sm font-medium text-gray-700">Rundown</label>
        <label class="mt-2 border border-gray-300 rounded-lg px-3 py-6 flex flex-col items-center text-sm text-gray-500 cursor-pointer hover:bg-gray-50 transition">
          <i class="fa-solid fa-upload text-2xl mb-2"></i>
          Klik untuk upload
          <input type="file" class="hidden">
        </label>
      </div>

      <div class="sm:col-span-2">
        <label class="text-sm font-medium text-gray-700">Peserta</label>
        <label class="mt-2 border border-gray-300 rounded-lg px-3 py-6 flex flex-col items-center text-sm text-gray-500 cursor-pointer hover:bg-gray-50 transition">
          <i class="fa-solid fa-upload text-2xl mb-2"></i>
          Klik untuk upload
          <input type="file" class="hidden">
        </label>
      </div>

      <div class="sm:col-span-2">
        <label class="text-sm font-medium text-gray-700">Undangan</label>
        <input type="text" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm" placeholder="Masukkan link undangan">
      </div>

      <div class="sm:col-span-2">
        <label class="text-sm font-medium text-gray-700">Materi</label>
        <input type="text" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm" placeholder="Masukkan link materi">
      </div>

      <div class="sm:col-span-2">
        <label class="text-sm font-medium text-gray-700">Daftar Hadir</label>
        <input type="text" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm" placeholder="Masukkan link daftar hadir">
      </div>

      <div class="sm:col-span-2">
        <label class="text-sm font-medium text-gray-700">Dokumentasi</label>
        <input type="text" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm" placeholder="Masukkan link dokumentasi">
      </div>

      <div class="sm:col-span-2">
        <label class="text-sm font-medium text-gray-700">Unggah Dokumentasi</label>
        <label class="mt-2 border border-gray-300 rounded-lg px-3 py-6 flex flex-col items-center text-sm text-gray-500 cursor-pointer hover:bg-gray-50 transition">
          <i class="fa-solid fa-upload text-2xl mb-2"></i>
          Klik untuk upload
          <input type="file" class="hidden">
        </label>
      </div>
    </div>
  </div>

  <!-- 🔘 Navigation -->
    <div class="flex justify-between mt-10">
      <a href="laporan-kegiatan" 
        class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg text-sm hover:bg-gray-200 transition">
        <i class="fa-solid fa-arrow-left mr-2"></i>Kembali
      </a>

      <a href="review-laporan" 
        class="bg-[#FFA41B] text-white px-6 py-2 rounded-lg text-sm hover:bg-[#ff9600] transition">
        Selanjutnya<i class="fa-solid fa-arrow-right ml-2"></i>
      </a>
    </div>
</div>
@endsection
