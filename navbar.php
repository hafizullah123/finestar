<!-- ✅ Navbar Section -->
<section class="w-full bg-gradient-to-r from-[#f9f9f8] to-[#efeeed] border-b-2 border-[#e7742d] shadow-sm">
  <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
    <!-- Logo -->
    <h1 class="text-xl md:text-2xl font-bold text-[#4a3128] uppercase tracking-wide">
      Nut Collection
    </h1>

    <!-- Hamburger Button (Mobile) -->
    <button
      id="menu-btn"
      class="md:hidden flex flex-col space-y-1 focus:outline-none"
      aria-label="Toggle Menu"
    >
      <span class="block w-6 h-0.5 bg-gray-800"></span>
      <span class="block w-6 h-0.5 bg-gray-800"></span>
      <span class="block w-6 h-0.5 bg-gray-800"></span>
    </button>

    <!-- Nav Links (Desktop) -->
    <div
      id="menu"
      class="hidden md:flex flex-col md:flex-row md:items-center md:space-x-8 text-center absolute md:static left-0 right-0 top-16 md:top-auto bg-gradient-to-r from-[#f9f9f8] to-[#efeeed] md:bg-transparent border-t md:border-none shadow-md md:shadow-none py-4 md:py-0"
    >
      <a href="#" class="block text-gray-800 font-medium uppercase tracking-wide hover:text-[#4a3128] transition py-2">Activities</a>
      <a href="#" class="block text-gray-800 font-medium uppercase tracking-wide hover:text-[#4a3128] transition py-2">Certificates</a>
      <a href="#" class="block text-gray-800 font-medium uppercase tracking-wide hover:text-[#4a3128] transition py-2">Fine Star</a>
      <a href="#" class="block text-gray-800 font-medium uppercase tracking-wide hover:text-[#4a3128] transition py-2">Dry Fruit</a>
      <a href="#" class="block text-gray-800 font-medium uppercase tracking-wide hover:text-[#4a3128] transition py-2">Partnerships</a>
      <a href="#" class="block text-gray-800 font-medium uppercase tracking-wide hover:text-[#4a3128] transition py-2">About Us</a>
    </div>
  </div>

  <!-- ✅ JavaScript for Toggle -->
  <script>
    const menuBtn = document.getElementById("menu-btn");
    const menu = document.getElementById("menu");

    menuBtn.addEventListener("click", () => {
      menu.classList.toggle("hidden");
      menu.classList.toggle("flex");
      menu.classList.toggle("flex-col");
    });
  </script>
</section>
