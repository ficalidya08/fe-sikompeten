@extends('layouts.app-superadmin')

@section('title', 'Daftar Usulan Kegiatan')

@section('content')
<div class="bg-white rounded-2xl shadow-md p-6">
  <div class="flex justify-between items-center mb-6">
    <h1 class="text-xl md:text-2xl font-bold text-[#2B3674]">Daftar Usulan Kegiatan</h1>
    <div class="relative">
      <input
        type="text"
        placeholder="Cari kegiatan..."
        class="border border-gray-300 rounded-lg px-4 py-2 pl-10 focus:ring-2 focus:ring-[#1C1F4A] focus:outline-none text-sm"
      />
      <i class="fa-solid fa-magnifying-glass absolute left-3 top-3 text-gray-400"></i>
    </div>
  </div>

  <div class="overflow-x-auto">
    <table class="w-full text-sm text-left border border-gray-200 rounded-lg overflow-hidden">
      <thead class="bg-[#E8EDFF] text-[#1C1F4A] uppercase text-xs">
        <tr>
          <th class="px-4 py-3 font-semibold">No</th>
          <th class="px-4 py-3 font-semibold">Nama Kegiatan</th>
          <th class="px-4 py-3 font-semibold">Tanggal Pelaksanaan</th>
          <th class="px-4 py-3 font-semibold">Status</th>
          <th class="px-4 py-3 font-semibold text-center">Aksi</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200 text-gray-700">
        @foreach ([
          ['kegiatan' => 'Workshop Pengembangan Kompetensi ASN', 'tanggal' => '12 Oktober 2025', 'status' => 'Menunggu'],
          ['kegiatan' => 'Seminar Peningkatan Kapasitas', 'tanggal' => '20 Oktober 2025', 'status' => 'Diverifikasi'],
          ['kegiatan' => 'Pelatihan Digitalisasi Layanan Publik', 'tanggal' => '5 November 2025', 'status' => 'Ditolak'],
        ] as $index => $item)
        <tr class="hover:bg-gray-50">
          <td class="px-4 py-3">{{ $index + 1 }}</td>
          <td class="px-4 py-3 font-medium">{{ $item['kegiatan'] }}</td>
          <td class="px-4 py-3">{{ $item['tanggal'] }}</td>
          <td class="px-4 py-3">
            @if ($item['status'] === 'Diverifikasi')
              <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-semibold">{{ $item['status'] }}</span>
            @elseif ($item['status'] === 'Menunggu')
              <span class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full text-xs font-semibold">{{ $item['status'] }}</span>
            @else
              <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-xs font-semibold">{{ $item['status'] }}</span>
            @endif
          </td>
          <td class="px-4 py-3 text-center">
            <div class="flex justify-center gap-2">
              <button class="bg-[#1C1F4A] text-white px-3 py-1 rounded-lg text-xs hover:bg-[#2B3674] transition">
                <i class="fa-solid fa-check mr-1"></i> Verifikasi
              </button>
              <button class="bg-red-500 text-white px-3 py-1 rounded-lg text-xs hover:bg-red-600 transition">
                <i class="fa-solid fa-xmark mr-1"></i> Tolak
              </button>
              <button class="bg-blue-500 text-white px-3 py-1 rounded-lg text-xs hover:bg-blue-600 transition">
                <i class="fa-solid fa-eye mr-1"></i> Detail
              </button>
              <button class="bg-purple-500 text-white px-3 py-1 rounded-lg text-xs hover:bg-purple-600 transition">
                <i class="fa-solid fa-pen mr-1"></i> Update Pelaksanaan
              </button>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
