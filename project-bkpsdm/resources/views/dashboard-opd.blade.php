@extends('layouts.app')

@section('title', 'Dashboard Admin OPD')

@section('content')
<!-- Header -->
<header class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
  <div>
    <h1 class="text-2xl font-semibold text-[#2B3674]">Selamat Siang, Admin!</h1>
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
    <div class="flex items-center gap-2 cursor-pointer">
      <img src="{{ asset('images/bkpsdm.png') }}" alt="Profile" class="w-8 h-8 rounded-full">
      <span class="text-[#2B3674] font-medium text-sm sm:text-base">Admin</span>
      <i class="fa-solid fa-chevron-down text-gray-400 text-sm"></i>
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

      <!-- Tombol Cetak -->
      <button class="border border-gray-300 text-gray-700 px-3 py-1.5 text-sm rounded-lg hover:bg-gray-100 transition flex items-center justify-center gap-2">
        <img src="{{ asset('images/Icon.png') }}" alt="Print" class="w-4 h-4">
        Cetak Sertifikat
      </button>

      <!-- Tombol Upload -->
      <button class="bg-[#FFA41B] text-white px-3 py-1.5 text-sm rounded-lg hover:bg-[#ff9600] transition">
        + Upload Usulan
      </button>
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
              <button 
                class="btn-detail bg-[#4361EE] text-white text-xs px-4 py-1.5 rounded-md hover:bg-[#364ed3] transition"
                data-id="{{ $i }}"
            >
              Detail
            </button>

            </div>
          </td>
        </tr>
        @endfor
      </tbody>
    </table>
  </div>
</section>

  <!-- Modal Detail -->
    <div id="detailModal" class="fixed inset-0 bg-black bg-opacity-40 hidden justify-center items-center z-50">
    <div class="bg-white w-full max-w-4xl rounded-xl shadow-lg p-6 relative">

  <!-- Tombol close -->
    <button id="closeModal" class="absolute top-3 right-3 text-gray-400 hover:text-red-500 transition text-2xl font-bold">
      &times;
    </button>

    <h2 class="text-xl font-semibold text-[#2B3674] mb-6 text-center">Detail Usulan Kegiatan</h2>

    <!-- GRID CARD LAYOUT -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
      <!-- Informasi Penyelenggara -->
      <div class="rounded-xl bg-[#EAF1FF] p-5 shadow-sm border border-gray-100">
        <h3 class="font-semibold text-[#2B3674] flex items-center gap-2 mb-3">
          <img src="{{ asset('icon/Icon.png') }}" class="w-5 h-5" alt="">
          Penyelenggara
        </h3>
        <p class="text-sm text-gray-600"><strong>Penyelenggara:</strong> <span id="detail-penyelenggara">-</span></p>
        <p class="text-sm text-gray-600"><strong>Penyelenggaraan:</strong> <span id="detail-penyelenggaraan">-</span></p>
        <p class="text-sm text-gray-600"><strong>Tempat:</strong> <span id="detail-tempat">-</span></p>
      </div>

      <!-- Informasi Kontak -->
      <div class="rounded-xl bg-[#F4E9FF] p-5 shadow-sm border border-gray-100">
        <h3 class="font-semibold text-[#2B3674] flex items-center gap-2 mb-3">
          <img src="{{ asset('icon/Users.png') }}" class="w-5 h-5" alt="">
          Detail Pengusul
        </h3>
        <p class="text-sm text-gray-600"><strong>ID:</strong> <span id="detail-id">-</span></p>
        <p class="text-sm text-gray-600"><strong>NIP Pengusul:</strong> <span id="detail-nip">-</span></p>
        <p class="text-sm text-gray-600"><strong>Pelaksanaan:</strong> <span id="detail-pelaksanaan">-</span></p>
      </div>

      <!-- Informasi Kegiatan -->
      <div class="rounded-xl bg-[#E8F6EF] p-5 shadow-sm border border-gray-100">
        <h3 class="font-semibold text-[#2B3674] flex items-center gap-2 mb-3">
          <img src="{{ asset('icon/Doc.png') }}" class="w-5 h-5" alt="">
          Informasi Kegiatan
        </h3>
        <p class="text-sm text-gray-600"><strong>Nama Pelatihan:</strong> <span id="detail-nama">-</span></p>
        <p class="text-sm text-gray-600"><strong>Jenis Pelatihan:</strong> <span id="detail-jenis">-</span></p>
        <p class="text-sm text-gray-600"><strong>Metode:</strong> <span id="detail-metode">-</span></p>
      </div>

      <!-- File Brosur -->
      <div class="rounded-xl bg-[#FFF4E4] p-5 shadow-sm border border-gray-100">
        <h3 class="font-semibold text-[#2B3674] flex items-center gap-2 mb-3">
          <img src="{{ asset('icon/Book.png') }}" class="w-5 h-5" alt="">
          File Brosur
        </h3>
        <p class="text-sm text-gray-600"><strong>Tanggal Mulai:</strong> <span id="detail-mulai">-</span></p>
        <p class="text-sm text-gray-600"><strong>Tanggal Selesai:</strong> <span id="detail-selesai">-</span></p>
        <p class="text-sm text-gray-600"><strong>File:</strong> 
          <a href="#" id="detail-file" target="_blank" class="text-[#4361EE] hover:underline">Lihat File</a>
        </p>
      </div>
    </div>

    <!-- Keterangan -->
    <div class="mt-6 p-4 bg-[#FAFAFB] rounded-xl border border-gray-100">
      <h3 class="font-semibold text-[#2B3674] flex items-center gap-2 mb-3">
        <img src="{{ asset('icon/Icon-2.png') }}" class="w-5 h-5" alt="">
        Keterangan
      </h3>
      <p id="detail-keterangan" class="text-sm text-gray-700 leading-relaxed">-</p>
    </div>
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("detailModal");
  const closeModal = document.getElementById("closeModal");

  // Tutup modal
  closeModal.addEventListener("click", () => {
    modal.classList.add("hidden");
    modal.classList.remove("flex");
  });

  // Ambil semua tombol detail
  document.querySelectorAll(".btn-detail").forEach((btn) => {
    btn.addEventListener("click", () => {
      const id = btn.dataset.id;

      // Simulasi data (dummy)
      const data = {
        id: id,
        nip: "19876543210" + id,
        nama: "Pelatihan Kepemimpinan " + id,
        jenis: "Teknis",
        metode: "Online",
        pelaksanaan: "Internal",
        penyelenggara: "BKPSDM",
        penyelenggaraan: "Tatap Muka",
        tempat: "Aula BKPSDM",
        mulai: "2025-10-21",
        selesai: "2025-10-25",
        file: "#",
        keterangan: "Pelatihan untuk peningkatan kompetensi ASN.",
      };

      // Isi data ke modal
      document.getElementById("detail-id").textContent = data.id;
      document.getElementById("detail-nip").textContent = data.nip;
      document.getElementById("detail-nama").textContent = data.nama;
      document.getElementById("detail-jenis").textContent = data.jenis;
      document.getElementById("detail-metode").textContent = data.metode;
      document.getElementById("detail-pelaksanaan").textContent = data.pelaksanaan;
      document.getElementById("detail-penyelenggara").textContent = data.penyelenggara;
      document.getElementById("detail-penyelenggaraan").textContent = data.penyelenggaraan;
      document.getElementById("detail-tempat").textContent = data.tempat;
      document.getElementById("detail-mulai").textContent = data.mulai;
      document.getElementById("detail-selesai").textContent = data.selesai;
      document.getElementById("detail-file").setAttribute("href", data.file);
      document.getElementById("detail-keterangan").textContent = data.keterangan;

      // Tampilkan modal
      modal.classList.remove("hidden");
      modal.classList.add("flex");
    });
  });
});
</script>
@endsection
