@extends('layouts.app-admin')

@section('title', 'Form Pengajuan Usulan')

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
        FORMULIR PENGAJUAN USULAN
    </h1>
    <p class="text-sm text-gray-500 max-w-2xl">
        Silakan lengkapi data pada form ini untuk mengajukan usulan kegiatan. 
        Pastikan semua informasi yang dibutuhkan terisi dengan benar sebelum disimpan atau diajukan.
    </p>
</div>

    <!-- ======================= -->
    <!-- 🟦 SECTION — Identitas Surat -->
    <!-- ======================= -->
    <div class="bg-white rounded-xl shadow p-6 mb-10">
      <h2 class="text-lg font-semibold text-[#2B3674] mb-1">Identitas Surat</h2>
      <p class="text-gray-500 text-sm mb-6">Lengkapi informasi identitas usulan.</p>

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

      </div>
    </div>

    <!-- ======================= -->
    <!-- 🟨 SECTION — Usulan Kegiatan -->
    <!-- ======================= -->
    <div class="bg-white rounded-xl shadow p-6 mb-10">
      <h2 class="text-lg font-semibold text-[#2B3674] mb-1">Usulan Kegiatan</h2>
      <p class="text-gray-500 text-sm mb-6">Lengkapi informasi usulan kegiatan.</p>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

        <div>
          <label class="text-sm font-medium text-gray-700">Sub Unit Kerja</label>
          <input type="text" placeholder="Masukkan sub unit kerja" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
        </div>

        <div>
          <label class="text-sm font-medium text-gray-700">Nama Kegiatan</label>
          <input type="text" placeholder="Masukkan nama kegiatan" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
        </div>

        <div>
          <label class="text-sm font-medium text-gray-700">Lokasi Kegiatan</label>
          <input type="text" placeholder="Masukkan lokasi" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
        </div>

        <div>
      <label class="text-sm font-medium text-gray-700">Cara Pelatihan</label>
      <select class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
        <option value="">-- Pilih Cara Pelatihan --</option>
        <option value="diklat struktural">Diklat Struktural</option>
        <option value="bimbingan teknis">Bimbingan Teknis</option>
        <option value="datasering">Datasering</option>
      </select>
        </div>

        <div>
          <label class="text-sm font-medium text-gray-700">Tanggal Pelaksanaan</label>
          <input type="date" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
        </div>

        <div>
          <label class="text-sm font-medium text-gray-700">Diajukan Oleh</label>
          <input type="text" placeholder="Isi nama" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
        </div>

      </div>
    </div>

    <!-- ======================= -->
    <!-- 🟩 SECTION — Detail Kegiatan -->
    <!-- ======================= -->
    <div class="bg-white rounded-xl shadow p-6 mb-10">
      <h2 class="text-lg font-semibold text-[#2B3674] mb-1">Detail Kegiatan</h2>
      <p class="text-gray-500 text-sm mb-6">Lengkapi informasi detail usulan kegiatan.</p>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

        @php
          $fields = [
            'Narasumber Kegiatan',
            'Jumlah Peserta', 'Alokasi Anggaran'
          ];
        @endphp

        @foreach($fields as $field)
        <div>
          <label class="text-sm font-medium text-gray-700">{{ $field }}</label>
          <input type="text" placeholder="Masukkan {{ strtolower($field) }}" class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
        </div>
        @endforeach

        <div>
      <label class="text-sm font-medium text-gray-700">Metode Pelatihan</label>
      <select class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
        <option value="">-- Pilih Metode Pelatihan --</option>
        <option value="bleanded learning">Bleanded Learning</option>
        <option value="e-learning">E-Learning</option>
        <option value="klasikal">Klasikal</option>
      </select>
        </div>

        <div class="sm:col-span-2">
      <label class="text-sm font-medium text-gray-700">Dasar Hukum Kegiatan</label>
      <textarea 
        placeholder="Masukkan dasar hukum kegiatan"
        class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm h-28"
      ></textarea>
        </div>

        <div class="sm:col-span-2">
      <label class="text-sm font-medium text-gray-700">Latar Belakang Kegiatan</label>
      <textarea 
        placeholder="Masukkan latar belakang kegiatan"
        class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm h-28"
      ></textarea>
        </div>

        <div class="sm:col-span-2">
      <label class="text-sm font-medium text-gray-700">Maksud Kegiatan</label>
      <textarea 
        placeholder="Masukkan maksud kegiatan"
        class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm h-28"
      ></textarea>
        </div>

        <div class="sm:col-span-2">
      <label class="text-sm font-medium text-gray-700">Tujuan Kegiatan</label>
      <textarea 
        placeholder="Masukkan tujuan kegiatan"
        class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm h-28"
      ></textarea>
        </div>

        <div class="sm:col-span-2">
      <label class="text-sm font-medium text-gray-700">Uraian Kegiatan</label>
      <textarea 
        placeholder="Masukkan uraian kegiatan"
        class="mt-2 w-full border border-gray-300 rounded-lg px-3 py-2 text-sm h-28"
      ></textarea>
        </div>

        <div class="sm:col-span-2">
      <label class="text-sm font-medium text-gray-700">Unggah Jadwal Pelaksanaan</label>
      <label class="mt-2 border border-gray-300 rounded-lg px-3 py-6 flex flex-col items-center text-sm text-gray-500 cursor-pointer hover:bg-gray-50 transition">
        <i class="fa-solid fa-upload text-2xl mb-2"></i>
        Klik untuk upload atau drag & drop
        <input type="file" class="hidden" name="jadwal">
      </label>
        </div>
      </div>
    </div>

    <!-- 🔘 Navigation -->
    <div class="flex justify-between mt-10">
      <a href="pengajuan-usulan" 
        class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg text-sm hover:bg-gray-200 transition">
        <i class="fa-solid fa-arrow-left mr-2"></i>Kembali
      </a>

      <a href="review-usulan" 
        class="bg-[#FFA41B] text-white px-6 py-2 rounded-lg text-sm hover:bg-[#ff9600] transition">
        Selanjutnya<i class="fa-solid fa-arrow-right ml-2"></i>
      </a>
    </div>

  </div>
</div>
@endsection
