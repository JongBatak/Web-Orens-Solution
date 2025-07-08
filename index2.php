<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Orens Solution</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.lineicons.com/5.0/lineicons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body class="overflow-x-hidden h-screen">
  <!-- Tombol Toggle untuk mobile -->
  <label for="toggler" class="md:hidden fixed top-4 left-4 z-50 bg-orange-500 text-white p-2 rounded shadow">
    <i class="bi bi-list text-2xl"></i>
  </label>

  <div class="flex">
    <input type="checkbox" id="toggler" class="peer hidden">

    <!-- Sidebar -->
    <aside id="sidebar" class="fixed md:static top-0 left-0 h-screen bg-orange-500 flex flex-col transition-all duration-300 
                w-[85px] -translate-x-full peer-checked:translate-x-0 md:translate-x-0 z-50 md:w-[85px] peer-checked:md:w-[260px]">

      <label for="toggler" class="flex items-center cursor-pointer text-white p-6 text-[25px] space-x-1">
        <i class="bi bi-grid"></i>
        <span id="brand-orens" class="font-semibold text-white opacity-0 -translate-x-4 transition-all duration-250 delay-100">Orens</span>
        <span id="brand-solution" class="font-semibold text-blue-700 opacity-0 -translate-x-4 transition-all duration-250 delay-200">Solution</span>
      </label>

      <ul class="flex-1 space-y-2 mt-2 text-sm">
        <li>
          <a href="#" class="flex items-center text-white px-6 py-2 hover:bg-orange-400 border-l-4 border-transparent hover:border-blue-500 transition-all">
            <i class="lni lni-home-2 mr-3"></i>
            <span class="menu-label opacity-0 -translate-x-4 transition-all duration-50">Home</span>
          </a>
        </li>
        <li>
          <a href="About Us.html" class="flex items-center text-white px-6 py-2 hover:bg-orange-400 border-l-4 border-transparent hover:border-blue-500 transition-all">
            <i class="bi bi-people mr-3"></i>
            <span class="menu-label opacity-0 -translate-x-4 transition-all duration-100 delay-50">About Us</span>
          </a>
        </li>
        <li>
          <a href="Karya/HasilKarya.html" class="flex items-center text-white px-6 py-2 hover:bg-orange-400 border-l-4 border-transparent hover:border-blue-500 transition-all">
            <i class="bi bi-lightbulb mr-3"></i>
            <span class="menu-label opacity-0 -translate-x-4 transition-all duration-100 delay-50">Hasil Karya</span>
          </a>
        </li>
      </ul>

      <div class="mt-auto mb-4">
        <a href="#" class="flex items-center text-white px-6 py-2 hover:bg-orange-400 border-l-4 border-transparent hover:border-blue-500 transition-all">
          <i class="lni lni-exit mr-3"></i>
          <span class="menu-label opacity-0 -translate-x-4 transition-all duration-300 delay-400">Logout</span>
        </a>
      </div>
    </aside>

    <!-- Konten Utama -->
    <div id="main-content" class="transition-all duration-300 w-full min-h-screen p-6 md:ml-[85px] peer-checked:md:ml-[260px]">
      <h2 class="text-center text-2xl font-semibold mb-6 pt-20 md:pt-0">Welcome to Orens Solution</h2>
      <img src="SMKPP.png" alt="Orens Solution Logo" class="block mx-auto max-w-[800px] w-full rounded-lg"/>
    </div>
  </div>

  <!-- Script untuk toggle animasi dan label -->
  <script>
    const toggler = document.getElementById('toggler');
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('main-content');
    const labels = document.querySelectorAll('.menu-label');
    const brandOrens = document.getElementById('brand-orens');
    const brandSolution = document.getElementById('brand-solution');

    toggler.addEventListener('change', () => {
      if (toggler.checked) {
        sidebar.classList.remove('w-[85px]');
        sidebar.classList.add('w-[260px]');
        mainContent.classList.remove('md:ml-[85px]');
        mainContent.classList.add('md:ml-[260px]');

        brandOrens.classList.remove('opacity-0', '-translate-x-4');
        brandOrens.classList.add('opacity-100', 'translate-x-0');
        brandSolution.classList.remove('opacity-0', '-translate-x-4');
        brandSolution.classList.add('opacity-100', 'translate-x-0');
        labels.forEach(label => {
          label.classList.remove('opacity-0', '-translate-x-4');
          label.classList.add('opacity-100', 'translate-x-0');
        });
      } else {
        sidebar.classList.remove('w-[260px]');
        sidebar.classList.add('w-[85px]');
        mainContent.classList.remove('md:ml-[260px]');
        mainContent.classList.add('md:ml-[85px]');

        brandOrens.classList.remove('opacity-100', 'translate-x-0');
        brandOrens.classList.add('opacity-0', '-translate-x-4');
        brandSolution.classList.remove('opacity-100', 'translate-x-0');
        brandSolution.classList.add('opacity-0', '-translate-x-4');

        labels.forEach(label => {
          label.classList.remove('opacity-100', 'translate-x-0');
          label.classList.add('opacity-0', '-translate-x-4');
        });
      }
    });
  </script>
</body>
</html> 