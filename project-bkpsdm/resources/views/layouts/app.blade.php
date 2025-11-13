<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'SIKOMPETEN')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>

  <body class="flex h-screen bg-[#F4F5F7] text-gray-800">
    <!-- Sidebar -->
    <aside
      id="sidebar"
      class="fixed md:static inset-y-0 left-0 w-64 bg-[#F9FAFC] border-r border-gray-200 flex flex-col transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out z-50"
    >
      <div class="p-6 border-b border-gray-200 flex justify-between items-center">
        <div>
          <img
            src="{{ asset('images/logo-bkpsdm.png') }}"
            alt="Logo BKPSDM"
            class="w-28 mb-2"
          />
          <h1 class="text-lg font-bold text-[#2B3674] tracking-wide">SIKOMPETEN</h1>
        </div>

        <!-- Tombol close di mobile -->
        <button
          id="closeSidebar"
          class="md:hidden text-gray-600 hover:text-gray-800 transition"
        >
          <i class="fa-solid fa-xmark text-xl"></i>
        </button>
      </div>

      <!-- Navigation -->
      <nav class="flex-1 p-4 space-y-2 text-sm">
        <!-- Dashboard -->
        <a
          href="{{ url('/dashboard-opd') }}"
          class="flex items-center gap-3 px-3 py-2 rounded-lg transition
            {{ Request::is('dashboard-opd') ? 'bg-[#1C1F4A] text-white' : 'text-gray-600 hover:bg-[#E8EDFF]' }}"
        >
          <img 
            src="{{ Request::is('dashboard-opd') ? asset('images/grid-white.png') : asset('images/grid.png') }}" 
            alt="Grid" 
            class="w-5 h-5"
          >
          Dashboard
        </a>

        <!-- Daftar Usulan -->
        <a
          href="{{ url('/daftar-usulan') }}"
          class="flex items-center gap-3 px-3 py-2 rounded-lg transition
            {{ Request::is('daftar-usulan') ? 'bg-[#1C1F4A] text-white' : 'text-gray-600 hover:bg-[#E8EDFF]' }}"
        >
          <img 
            src="{{ Request::is('daftar-usulan') ? asset('images/file-white.png') : asset('images/file.png') }}" 
            alt="File" 
            class="w-5 h-5"
          >
          Daftar Usulan
        </a>

        <!-- Pengajuan Usulan -->
<a
  href="{{ url('/pengajuan-usulan') }}"
  class="flex items-center gap-3 px-3 py-2 rounded-lg
    {{ Request::is('pengajuan-usulan', 'form-usulan-1', 'form-usulan-2', 'form-usulan-3') ? 'bg-[#1C1F4A] text-white' : 'text-gray-600 hover:bg-[#E8EDFF]' }}"
>
  <img 
    src="{{ Request::is('pengajuan-usulan', 'form-usulan-1', 'form-usulan-2', 'form-usulan-3') ? asset('images/briefcase-white.png') : asset('images/briefcase.png') }}" 
    alt="Briefcase" 
    class="w-5 h-5"
  >
  Pengajuan Usulan
</a>


        <div class="mt-8 text-xs text-gray-400 uppercase font-semibold">Other</div>

        <!-- Support -->
        <a
          href="#"
          class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 hover:bg-[#E8EDFF] transition"
        >
          <img 
            src="{{ asset('images/support.png') }}" 
            alt="Support" 
            class="w-5 h-5"
          >
          Support
        </a>

        <!-- Settings -->
        <a
          href="#"
          class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 hover:bg-[#E8EDFF] transition"
        >
          <img 
            src="{{ asset('images/setting.png') }}" 
            alt="Setting" 
            class="w-5 h-5"
          >
          Settings
        </a>
      </nav>
    </aside>

    <!-- Overlay untuk mobile -->
    <div
      id="overlay"
      class="fixed inset-0 bg-black bg-opacity-30 hidden md:hidden z-40"
    ></div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col h-full overflow-hidden">
      <!-- Header di mobile -->
      <header
        class="md:hidden flex items-center justify-between bg-white p-4 border-b shadow-sm"
      >
        <button
          id="openSidebar"
          class="text-gray-600 hover:text-gray-800 transition"
        >
          <i class="fa-solid fa-bars text-xl"></i>
        </button>
        <h1 class="text-[#2B3674] font-bold">SIKOMPETEN</h1>
        <img
          src="{{ asset('images/bkpsdm.png') }}"
          alt="Profile"
          class="w-8 h-8 rounded-full"
        />
      </header>

      <!-- Konten utama -->
      <main class="flex-1 overflow-y-auto p-4 md:p-8 bg-[#F4F5F7]">
        @yield('content')
      </main>
    </div>

    <!-- Script Toggle Sidebar -->
    <script>
      const sidebar = document.getElementById("sidebar");
      const openSidebar = document.getElementById("openSidebar");
      const closeSidebar = document.getElementById("closeSidebar");
      const overlay = document.getElementById("overlay");

      openSidebar?.addEventListener("click", () => {
        sidebar.classList.remove("-translate-x-full");
        overlay.classList.remove("hidden");
      });

      closeSidebar?.addEventListener("click", () => {
        sidebar.classList.add("-translate-x-full");
        overlay.classList.add("hidden");
      });

      overlay?.addEventListener("click", () => {
        sidebar.classList.add("-translate-x-full");
        overlay.classList.add("hidden");
      });
    </script>
  </body>
</html>
