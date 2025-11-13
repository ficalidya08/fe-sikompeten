@extends('layouts.app-superadmin')

@section('title', 'Review Balasan Laporan Kegiatan')

@section('content')
<div class="bg-[#F5F6FA] p-6 sm:p-10 min-h-screen">

  {{-- Header --}}
  <div class="flex items-center gap-2 text-sm text-[#2B3674] mb-4">
    <span>Surakarta, Indonesia</span>
    <span>•</span>
    <span>24 September 2025</span>
  </div>

  <div class="bg-white rounded-xl shadow p-6 mb-10">
    <h1 class="text-2xl font-semibold text-[#2B3674]">
      REVIEW BALASAN LAPORAN KEGIATAN
    </h1>
    <p class="text-sm text-gray-500 max-w-2xl">
      Periksa kembali seluruh informasi sebelum mengirim surat balasan laporan kegiatan.
    </p>
  </div>

  {{-- REVIEW CARD --}}
  <div class="bg-white rounded-xl shadow p-6 mb-10 space-y-6">

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-sm">
      <div>
        <p class="text-gray-500 mb-1">Nomor Surat</p>
        <p class="text-[#2B3674] font-medium">01/OPD/2025</p>
      </div>

      <div>
        <p class="text-gray-500 mb-1">Tanggal Surat</p>
        <p class="text-[#2B3674] font-medium">24 September 2025</p>
      </div>

      <div class="sm:col-span-2">
        <p class="text-gray-500 mb-1">Perihal</p>
        <p class="text-[#2B3674] font-medium">Balasan Laporan Hasil Kegiatan Pelatihan Kompetensi</p>
      </div>

      <div class="sm:col-span-2">
        <p class="text-gray-500 mb-1">Lampiran</p>
        <p class="text-[#2B3674] font-medium">2 Lembar</p>
      </div>

      <div class="sm:col-span-2">
        <p class="text-gray-500 mb-1">Usulan Kegiatan</p>
        <p class="text-[#2B3674] font-medium">Pelatihan Kompetensi ASN Tahun 2025</p>
      </div>

      <div class="sm:col-span-2">
        <p class="text-gray-500 mb-1">Jumlah Jam Pelajaran (JP)</p>
        <p class="text-[#2B3674] font-medium">24 JP</p>
      </div>

      <div class="sm:col-span-2">
        <p class="text-gray-500 mb-1">Nomor Sertifikat</p>
        <p class="text-[#2B3674] font-medium">BKPSDM/2025/00123</p>
      </div>
    </div>

  </div>

  {{-- BUTTONS --}}
  <div class="flex justify-between">
    <a href="form-balasan" 
       class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg text-sm hover:bg-gray-200 transition">
      <i class="fa-solid fa-arrow-left mr-2"></i> Kembali
    </a>

    <a href="notif-balasan" 
        class="bg-[#FFA41B] text-white px-6 py-2 rounded-lg text-sm hover:bg-[#ff9600] transition">
        Selanjutnya<i class="fa-solid fa-arrow-right ml-2"></i>
      </a>
  </div>

</div>
@endsection
