<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - SIKOMPETEN</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body
    class="min-h-screen flex items-center justify-center bg-[#1C1F4A] text-gray-800 px-4"
  >
    <!-- Container -->
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
        <h1 class="text-3xl font-bold tracking-wide mt-0">
          SIKOMPETEN
        </h1>
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
      <div class="bg-white w-full md:w-1/2 rounded-2xl p-8 space-y-6 shadow-lg">
        <h2 class="text-2xl font-bold text-center text-gray-800">
          Selamat Datang 
        </h2>

        <!-- Form -->
        <form class="space-y-4">
          <div>
            <label class="block text-sm font-medium mb-1">User name</label>
            <input
              type="text"
              id="username"
              placeholder="Enter your User name"
              class="w-full px-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#6F3BF5]"
            />
          </div>

          <div>
            <label class="block text-sm font-medium mb-1">Password</label>
            <div class="relative">
              <input
                type="password"
                id="password"
                placeholder="Enter your Password"
                class="w-full px-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#6F3BF5]"
              />
              <button
                type="button"
                id="togglePassword"
                class="absolute right-4 top-2.5 text-gray-400 hover:text-gray-600"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  id="eyeIcon"
                  class="w-5 h-5"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                  />
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 
                    8.268 2.943 9.542 7-1.274 4.057-5.065 
                    7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                  />
                </svg>
              </button>
            </div>
          </div>

          <!-- Remember & Forgot -->
          <div class="flex justify-between items-center text-sm">
            <label class="flex items-center gap-2">
              <input type="checkbox" class="rounded border-gray-300" />
              Remember me
            </label>
            <a href="#" class="text-[#6F3BF5] hover:underline">
              Forgot Password?
            </a>
          </div>

          <!-- Login Button -->
          <div class="flex justify-center">
            <button
              type="submit"
              id="login-button"
              class="px-20 py-2 rounded-lg bg-[#FFA41B] text-white font-semibold hover:bg-[#ff9600] transition"
            >
              Login
            </button>
          </div>
        </form>
      </div>
    </div>

    <!-- JS -->
    <script>
      const passwordInput = document.getElementById("password");
      const togglePassword = document.getElementById("togglePassword");

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

      let showPassword = false;
      togglePassword.addEventListener("click", () => {
        showPassword = !showPassword;
        passwordInput.type = showPassword ? "text" : "password";
        togglePassword.innerHTML = showPassword ? eyeClosed : eyeOpen;
      });
    </script>
  </body>
</html>
