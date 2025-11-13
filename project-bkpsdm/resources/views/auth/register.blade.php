<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrasi - SIKOMPETEN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      /* Hilangkan scrollbar tapi tetap bisa scroll */
      .hide-scrollbar::-webkit-scrollbar {
        display: none;
      }
      .hide-scrollbar {
        -ms-overflow-style: none; /* IE dan Edge */
        scrollbar-width: none; /* Firefox */
      }
    </style>
  </head>
  <body
    class="min-h-screen flex items-center justify-center bg-[#1C1F4A] text-gray-800 px-4"
  >
    <div
      class="w-full max-w-5xl flex flex-col md:flex-row items-center justify-between bg-transparent"
    >
      <!-- Left Section -->
      <div class="text-white max-w-md mb-10 md:mb-0">
        <img 
          src="{{ asset('images/logo-bkpsdm.png') }}" 
          alt="Logo BKPSDM" 
          class="w-36 mb-0" 
        />
        <h1 class="text-3xl font-bold tracking-wide mt-0">SIKOMPETEN</h1>
        <p class="text-lg font-semibold mb-6">Building the Future...</p>
        <p class="text-sm text-gray-300 leading-relaxed">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <div class="mt-6 flex gap-2">
          <span class="h-1 w-6 bg-white rounded"></span>
          <span class="h-1 w-2 bg-white/40 rounded"></span>
          <span class="h-1 w-2 bg-white/40 rounded"></span>
        </div>
      </div>

      <!-- Right Section -->
      <div class="bg-white w-full md:w-1/2 rounded-2xl p-8 shadow-lg">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">
          Registrasi Akun
        </h2>

        <!-- Scrollable Form tapi scrollbar disembunyikan -->
        <div class="max-h-[360px] overflow-y-auto pr-2 hide-scrollbar">
          <form class="space-y-3 pb-3">
            <!-- NIP -->
            <div>
              <label class="block text-sm font-medium mb-1">NIP</label>
              <input
                type="text"
                placeholder="Masukkan NIP Anda"
                class="w-full px-3 py-[6px] border rounded-full border-gray-300 text-sm 
                       focus:outline-none focus:ring-[1.5px] focus:ring-[#6F3BF5]"
              />
            </div>

            <!-- Nama Lengkap -->
            <div>
              <label class="block text-sm font-medium mb-1">Nama Lengkap</label>
              <input
                type="text"
                placeholder="Masukkan Nama Lengkap"
                class="w-full px-3 py-[6px] border rounded-full border-gray-300 text-sm 
                       focus:outline-none focus:ring-[1.5px] focus:ring-[#6F3BF5]"
              />
            </div>

            <!-- Email -->
            <div>
              <label class="block text-sm font-medium mb-1">Email</label>
              <input
                type="email"
                placeholder="Masukkan Email"
                class="w-full px-3 py-[6px] border rounded-full border-gray-300 text-sm 
                       focus:outline-none focus:ring-[1.5px] focus:ring-[#6F3BF5]"
              />
            </div>

            <!-- Sub Unit Kerja -->
            <div>
              <label class="block text-sm font-medium mb-1">Sub Unit Kerja</label>
              <select
                class="w-full px-3 py-[6px] border rounded-full border-gray-300 text-sm 
                       focus:outline-none focus:ring-[1.5px] focus:ring-[#6F3BF5]"
              >
                <option value="">-- Pilih Sub Unit Kerja --</option>
                <option value="BKPSDM">BKPSDM</option>
                <option value="Dinas Sosial">Dinas Sosial</option>
                <option value="Dinas Kesehatan">Dinas Kesehatan</option>
                <option value="Dinas KOMINFO">Dinas KOMINFO</option>
              </select>
            </div>

            <!-- Password -->
            <div class="relative">
              <label class="block text-sm font-medium mb-1">Password</label>
              <input
                type="password"
                id="password"
                placeholder="Masukkan Password"
                class="w-full px-3 py-[6px] border rounded-full border-gray-300 text-sm 
                       focus:outline-none focus:ring-[1.5px] focus:ring-[#6F3BF5]"
              />
              <button
                type="button"
                id="togglePassword"
                class="absolute right-4 top-[38px] text-gray-400 hover:text-gray-600"
              >
                <!-- Icon default: eye open -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 
                    8.268 2.943 9.542 7-1.274 
                    4.057-5.065 7-9.542 7-4.477 
                    0-8.268-2.943-9.542-7z"/>
                </svg>
              </button>
            </div>

            <!-- Konfirmasi Password -->
            <div class="relative">
              <label class="block text-sm font-medium mb-1">Konfirmasi Password</label>
              <input
                type="password"
                id="confirmPassword"
                placeholder="Ulangi Password"
                class="w-full px-3 py-[6px] border rounded-full border-gray-300 text-sm 
                       focus:outline-none focus:ring-[1.5px] focus:ring-[#6F3BF5]"
              />
              <button
                type="button"
                id="toggleConfirmPassword"
                class="absolute right-4 top-[38px] text-gray-400 hover:text-gray-600"
              >
                <!-- Icon default: eye open -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 
                    8.268 2.943 9.542 7-1.274 
                    4.057-5.065 7-9.542 7-4.477 
                    0-8.268-2.943-9.542-7z"/>
                </svg>
              </button>
            </div>

            <!-- Tombol -->
            <div class="pt-3">
              <button
                type="submit"
                class="w-full py-2 rounded-lg bg-[#FFA41B] text-white font-semibold hover:bg-[#ff9600] transition"
              >
                Daftar
              </button>
            </div>

            <!-- Sudah punya akun -->
            <p class="text-center text-sm text-gray-500 pb-2">
              Sudah punya akun?
              <a href="{{ url('/login') }}" class="text-[#6F3BF5] font-semibold hover:underline">
                Login di sini
              </a>
            </p>
          </form>
        </div>
      </div>
    </div>

    <!-- JS -->
    <script>
      const eyeOpen = `
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
        viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
          d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 
          8.268 2.943 9.542 7-1.274 
          4.057-5.065 7-9.542 7-4.477 
          0-8.268-2.943-9.542-7z"/>
        </svg>`;

      const eyeClosed = `
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
        viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
          d="M3 3l18 18M9.88 9.88A3 3 0 0112 9c1.657 0 
          3 1.343 3 3 0 .74-.268 1.42-.713 
          1.94M6.1 6.1C4.03 7.39 
          2.5 9.47 2.458 12c1.274 4.057 
          5.065 7 9.542 7 1.42 0 2.77-.26 
          4.01-.73M15.88 15.88A3 3 
          0 0012 15c-1.657 0-3-1.343-3-3 
          0-.74.268-1.42.713-1.94"/>
        </svg>`;

      function setupToggle(inputId, toggleId) {
        const input = document.getElementById(inputId);
        const toggle = document.getElementById(toggleId);

        let show = false;
        toggle.addEventListener("click", () => {
          show = !show;
          input.type = show ? "text" : "password";
          toggle.innerHTML = show ? eyeClosed : eyeOpen;
        });
      }

      setupToggle("password", "togglePassword");
      setupToggle("confirmPassword", "toggleConfirmPassword");
    </script>
  </body>
</html>
