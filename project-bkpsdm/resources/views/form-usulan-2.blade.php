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
  <button class="flex items-center justify-center w-8 h-8 rounded-full bg-[#FFA41B] hover:opacity-90 transition">
  <img src="{{ asset('images/step-2-white.png') }}" alt="Step 2" class="w-4 h-4">
  </button>
  <div class="w-10 h-[2px] bg-gray-300"></div>

  <!-- Step 3 -->
  <button class="flex items-center justify-center w-8 h-8 rounded-full bg-gray-200 hover:bg-[#FFA41B] transition">
  <img src="{{ asset('images/step-3.png') }}" alt="Step 3" class="w-4 h-4">
  </button>
  </div>

  <!-- Judul -->
  <section class="bg-white rounded-xl shadow p-8">
  <div class="mb-8">
    <h2 class="text-lg font-semibold text-[#2B3674]">Detail Kegiatan</h2>
  </div>

  <!-- Form Detail Kegiatan -->
  <form class="space-y-4" id="formUsulan">
    <div>
      <label class="text-sm font-medium text-gray-700">Tujuan Kegiatan</label>
      <input type="text" class="w-full border border-gray-300 rounded-lg p-2 mt-1 text-sm" placeholder="Jelaskan tujuan kegiatan" />
    </div>

    <div>
      <label class="text-sm font-medium text-gray-700">Maksud Kegiatan</label>
      <input type="text" class="w-full border border-gray-300 rounded-lg p-2 mt-1 text-sm" placeholder="Jelaskan maksud kegiatan" />
    </div>

    <div>
      <label class="text-sm font-medium text-gray-700">Latar Belakang Kegiatan</label>
      <input type="text" class="w-full border border-gray-300 rounded-lg p-2 mt-1 text-sm" placeholder="Jelaskan latar belakang kegiatan" />
    </div>

    <div>
      <label class="text-sm font-medium text-gray-700">Dasar Hukum Kegiatan</label>
      <input type="text" class="w-full border border-gray-300 rounded-lg p-2 mt-1 text-sm" placeholder="Sebutkan dasar hukum pelaksanaan kegiatan" />
    </div>

    <div>
      <label class="text-sm font-medium text-gray-700">Hasil Kegiatan</label>
      <input type="text" class="w-full border border-gray-300 rounded-lg p-2 mt-1 text-sm" placeholder="Jelaskan hasil yang diharapkan dari kegiatan" />
    </div>

    <div>
      <label class="text-sm font-medium text-gray-700">Narasumber</label>
      <input type="text" class="w-full border border-gray-300 rounded-lg p-2 mt-1 text-sm" placeholder="Nama narasumber/pemateri" />
    </div>

    <div>
      <label class="text-sm font-medium text-gray-700">Uraian Kegiatan</label>
      <textarea class="w-full border border-gray-300 rounded-lg p-2 mt-1 text-sm" rows="2" placeholder="Uraikan detail kegiatan yang akan dilaksanakan"></textarea>
    </div>

   <!-- Susunan Acara -->
<div class="pt-4 border-t border-gray-200" id="susunanAcaraContainer">
  <div class="flex justify-between items-center mb-4">
    <h3 class="font-medium text-gray-800">Susunan Acara</h3>
    <button
      type="button"
      id="tambahAcara"
      class="flex items-center gap-2 bg-[#1C1F4A] text-white text-sm px-3 py-1.5 rounded-lg hover:bg-[#2a2e66] transition"
    >
      <i class="fa-solid fa-plus"></i> Tambah Susunan Acara
    </button>
  </div>

  <div
    class="acara-item relative mb-4 border border-gray-300 rounded-xl p-5 bg-white shadow-sm"
  >
    <button
    type="button"
    class="hapusAcara absolute top-3 right-3 transition hover:opacity-80"
    title="Hapus"
    >
    <img src="{{ asset('images/trash.png') }}" alt="Hapus" class="w-5 h-5">
    </button>

    <!-- Grid dengan lebar kolom proporsional -->
    <div class="grid grid-cols-[1fr_1.5fr_1fr] gap-6 items-end">
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
        <input
          type="text"
          class="w-full border border-gray-300 rounded-lg p-2 text-sm"
          placeholder="Nama kegiatan"
        />
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Waktu</label>
        <div class="flex items-center gap-2">
          <input
            type="time"
            class="flex-1 border border-gray-300 rounded-lg p-2 text-sm"
            value="08:00"
          />
          <span class="text-gray-500">-</span>
          <input
            type="time"
            class="flex-1 border border-gray-300 rounded-lg p-2 text-sm"
            value="11:00"
          />
        </div>
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Tempat Pelaksanaan</label>
        <input
          type="text"
          class="w-full border border-gray-300 rounded-lg p-2 text-sm"
          placeholder="Ruang/tempat pelaksanaan"
        />
      </div>
    </div>
  </div>
</div>

    <!-- Tombol Navigasi -->
    <div class="flex justify-between mt-10">
      <a href="form-usulan-1" 
        class="bg-gray-100 text-gray-700 px-6 py-2 rounded-lg text-sm hover:bg-gray-200 transition">
        <i class="fa-solid fa-arrow-left mr-2"></i>Previous
      </a>
      <a href="form-usulan-3" 
       class="bg-[#FFA41B] text-white px-6 py-2 rounded-lg text-sm hover:bg-[#ff9600] transition">
        Next<i class="fa-solid fa-arrow-right ml-2"></i>
    </a>
    </div>
  </form>
  </section>
</div>

<!-- Script Tambah & Hapus -->
<script>
  document
    .getElementById("tambahAcara")
    .addEventListener("click", function () {
      const container = document.getElementById("susunanAcaraContainer");
      const firstItem = container.querySelector(".acara-item");
      const newItem = firstItem.cloneNode(true);

      // Bersihkan input dalam card baru
      newItem.querySelectorAll("input").forEach((input) => (input.value = ""));

      container.appendChild(newItem);
      attachDeleteHandlers();
    });

  function attachDeleteHandlers() {
    document.querySelectorAll(".hapusAcara").forEach((btn) => {
      btn.onclick = function () {
        const item = btn.closest(".acara-item");
        const allItems = document.querySelectorAll(".acara-item");
        if (allItems.length > 1) {
          item.remove();
        } else {
          alert("Minimal satu susunan acara harus ada.");
        }
      };
    });
  }

  // Pasang handler awal
  attachDeleteHandlers();
</script>
@endsection
