@extends('layouts.app-superadmin')

@section('content')
<div class="bg-[#F5F6FA] p-6 sm:p-10">

    {{-- ⬆ Header Middle: Lokasi + Tanggal --}}
    <div class="bg-white rounded-xl shadow p-6">

        <div class="flex items-center gap-2 text-sm text-[#2B3674] mb-6">
            <span>Surakarta, Indonesia</span>
            <span>•</span>
            <span>24 September 2025</span>
        </div>

        {{-- ✅ SUCCESS ICON + TITLE --}}
        <div class="flex flex-col items-center text-center">
        <div class="bg-green-100 p-4 rounded-full w-fit flex items-center justify-center">
            <img src="{{ asset('images/check.png') }}" class="w-12 h-12" alt="">
        </div>
            <h2 class="text-2xl text-[#2B3674] font-semibold mt-4">
                Balasan Laporan Kegiatan Berhasil Dikirim!
            </h2>

            <p class="text-gray-500 max-w-lg mt-2">
                Balasan laporan kegiatan telah berhasil dikirim kepada OPD.
            </p>

            {{-- Navigation --}}
                <a href="dashboard-superadmin"
                   class="bg-[#FFA41B] text-white px-6 py-2 text-sm rounded-lg hover:bg-[#ff9600] transition">
                    Kembali ke Dashboard
                </a>
            </div>

        </div>

    </div>

</div>
@endsection
