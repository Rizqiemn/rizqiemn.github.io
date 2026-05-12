<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!-- FAVICON -->
<link 
  rel="icon" 
  type="image/svg+xml"
  href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Cdefs%3E%3ClinearGradient id='g' x1='0' y1='0' x2='1' y2='1'%3E%3Cstop offset='0%25' stop-color='%238b5cf6'/%3E%3Cstop offset='100%25' stop-color='%2306b6d4'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width='64' height='64' rx='18' fill='%23050816'/%3E%3Cpath d='M18 46V18H32C41 18 46 22 46 29C46 34 43 37 38 38L47 46H38L30 39H26V46H18ZM26 25V33H31C35 33 38 32 38 29C38 26 35 25 31 25H26Z' fill='url(%23g)'/%3E%3C/svg%3E"
/>
  <title>Rizqie Miftakhuddin Noor | Portfolio</title>

  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    html {
      scroll-behavior: smooth;
    }

    body {
      background: #050816;
      overflow-x: hidden;
      font-family: sans-serif;
    }

    .glow {
      box-shadow: 0 0 25px rgba(99,102,241,.4);
    }

    .gradient-text {
      background: linear-gradient(to right,#8b5cf6,#06b6d4);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .blob {
      position: absolute;
      filter: blur(100px);
      opacity: .4;
      z-index: -1;
    }

    .animate-float {
      animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
      0%,100%{
        transform: translateY(0px);
      }
      50%{
        transform: translateY(-20px);
      }
    }

    .card-hover {
      transition: .4s;
    }

    .card-hover:hover {
      transform: translateY(-8px);
      border-color: #8b5cf6;
    }
  </style>
</head>
<body class="text-white">

  <!-- BACKGROUND -->
  <div class="blob bg-purple-600 w-72 h-72 rounded-full top-10 left-10"></div>
  <div class="blob bg-cyan-500 w-72 h-72 rounded-full bottom-10 right-10"></div>

  <!-- NAVBAR -->
  <header class="fixed w-full top-0 z-50 backdrop-blur-md bg-black/20 border-b border-white/10">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold gradient-text">
        <a href="#home" class="hover:text-cyan-400 transition">Rizqiemn</a>
      </h1>

      <nav class="hidden md:flex gap-8 text-sm">
        <a href="#home" class="hover:text-cyan-400 transition">Home</a>
        <a href="#about" class="hover:text-cyan-400 transition">About</a>
        <a href="#skills" class="hover:text-cyan-400 transition">Skill</a>
        <a href="#project" class="hover:text-cyan-400 transition">Projects</a>
        <a href="#contact" class="hover:text-cyan-400 transition">Contact</a>
      </nav>
    </div>
  </header>

  <!-- HERO -->
  <section id="home" class="min-h-screen flex items-center px-6">
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-10 items-center">

      <div>
        <p class="text-cyan-400 mb-3">
          Hello, I'm
        </p>

        <h3 class="text-5xl md:text-4xl font-black leading-tight mb-5">
          Rizqie Miftakhuddin Noor<br>
          <span class="gradient-text">
            Programmer & IT Support
          </span>
        </h3>

        <p class="text-gray-300 text-lg leading-relaxed max-w-xl">
          IT Support, Chatbot engineer, and digital creator
          focused on automation, Data Analysis, AI systems, and modern web with 5 years of experience.
        </p>

        <div class="mt-8 flex gap-4">
    <!-- DOWNLOAD CV -->
    <a 
      href="cv\CV_Rizqie Miftakhuddin Noor_2026.pdf"
      download
      class="group px-6 py-3 rounded-xl bg-gradient-to-r from-purple-600 to-cyan-500 font-semibold glow flex items-center gap-2 hover:scale-105 transition"
    >
      <span>Download CV</span>

      <!-- DOWNLOAD ICON -->
      <svg 
        stroke="currentColor" 
        fill="currentColor" 
        stroke-width="0" 
        viewBox="0 0 16 16"
        class="transition group-hover:translate-y-1"
        height="1em" 
        width="1em"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.6a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.6a.5.5 0 0 1 1 0v2.6a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.6a.5.5 0 0 1 .5-.5"/>
        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
      </svg>
    </a>

    <!-- CONTACT BUTTON -->
    <a 
      href="#contact"
      class="group px-6 py-3 rounded-xl border border-white/20 hover:border-cyan-400 transition flex items-center gap-2"
    >
      <span>Contact Me</span>

      <!-- ARROW ICON -->
      <svg 
        stroke="currentColor" 
        fill="currentColor" 
        stroke-width="0" 
        viewBox="0 0 16 16"
        class="transition opacity-70 group-hover:translate-x-1"
        height="1em" 
        width="1em"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path 
          fill-rule="evenodd" 
          d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8">
        </path>
      </svg>
    </a>

  </div>
<br>
  <!-- SOCIAL MEDIA -->
  <div class="flex items-center gap-4 flex-wrap">

    <!-- FACEBOOK -->
    <a 
      href="https://facebook.com/rizqiemn"
      target="_blank"
      class="group w-12 h-12 rounded-xl border border-white/10 bg-white/5 backdrop-blur-md flex items-center justify-center hover:border-cyan-400 hover:-translate-y-1 transition"
    >
      <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512"
        class="text-xl group-hover:text-cyan-400 transition"
        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
        <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 
        12.42-50.06 52.24-50.06h40.42V6.26S260.43 
        0 225.36 0c-73.22 0-121.08 44.38-121.08 
        124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
      </svg>
    </a>

<!-- INSTAGRAM -->
<a 
  href="https://instagram.com/rizqiemn"
  target="_blank"
  class="group w-12 h-12 rounded-xl border border-white/10 bg-white/5 backdrop-blur-md flex items-center justify-center hover:border-pink-400 hover:-translate-y-1 transition"
>
<svg 
    stroke="currentColor" 
    fill="currentColor" 
    stroke-width="0" 
    viewBox="0 0 448 512"
    class="text-xl group-hover:text-pink-400 transition"
    height="1em" 
    width="1em"
    xmlns="http://www.w3.org/2000/svg"
>
    <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.4 0-74.7-33.3-74.7-74.7s33.3-74.7 74.7-74.7 74.7 33.3 74.7 74.7-33.3 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.9-26.9 26.9s-26.9-12-26.9-26.9 12-26.9 26.9-26.9 26.9 12 26.9 26.9zM398.8 80c-14.8-37.3-43.5-66-80.8-80.8C284.7-14.3 256-16 224 16 192-16 163.3-14.3 130 0 92.7 14.8 64 43.5 49.2 80 34.9 113.3 33.2 142 33.2 224c0 82 1.7 110.7 16 144 14.8 37.3 43.5 66 80.8 80.8 33.3 14.3 62 16 144 16 82 0 110.7-1.7 144-16 37.3-14.8 66-43.5 80.8-80.8 14.3-33.3 16-62 16-144 0-82-1.7-110.7-16-144zM224 388c-90.4 0-164-73.6-164-164S133.6 60 224 60s164 73.6 164 164-73.6 164-164 164z"></path>
</svg>
</a>

    <!-- TIKTOK -->
    <a 
      href="https://tiktok.com/@rizqiemiftah"
      target="_blank"
      class="group w-12 h-12 rounded-xl border border-white/10 bg-white/5 backdrop-blur-md flex items-center justify-center hover:border-white hover:-translate-y-1 transition"
    >
      <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512"
        class="text-xl group-hover:text-white transition"
        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
        <path d="M448,209.9a210.1,210.1,0,0,1-122.8-39.2v178.7A162.6,
        162.6,0,1,1,185,188.3v80.4a74.6,74.6,0,1,0,
        52.2,71.2V0h77.8a132,132,0,0,0,1.9,22.2h0A133.4,
        133.4,0,0,0,448,132.1Z"></path>
      </svg>
    </a>

    <!-- LINKEDIN -->
    <a 
      href="https://linkedin.com/in/rizqiemn"
      target="_blank"
      class="group w-12 h-12 rounded-xl border border-white/10 bg-white/5 backdrop-blur-md flex items-center justify-center hover:border-blue-400 hover:-translate-y-1 transition"
    >
      <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512"
        class="text-xl group-hover:text-blue-400 transition"
        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
        <path d="M100.28 448H7.4V148.9h92.88zm-46.44-341C24.3 
        107 0 82.7 0 53.8a53.79 53.79 0 0 1 
        107.58 0c0 28.9-24.3 53.2-53.74 
        53.2zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.3 
        0-55.7 37.7-55.7 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 
        42.69-48.3 87.88-48.3 94 0 111.28 61.9 
        111.28 142.3V448z"></path>
      </svg>
    </a>

<!-- GITHUB -->
<a 
  href="https://github.com/rizqiemn"
  target="_blank"
  class="group w-12 h-12 rounded-xl border border-white/10 bg-white/5 backdrop-blur-md flex items-center justify-center hover:border-gray-400 hover:-translate-y-1 transition"
>
  <svg 
    stroke="currentColor" 
    fill="currentColor" 
    stroke-width="0" 
    viewBox="0 0 496 512"
    class="text-xl group-hover:text-gray-300 transition"
    height="1em" 
    width="1em"
    xmlns="http://www.w3.org/2000/svg"
  >
    <path d="M248 8C111 8 0 119 0 256c0 109.8 71.7 202.8 171 235.7 12.5 2.3 17-5.4 17-12v-42.2c-69.7 15.2-84.4-33.6-84.4-33.6-11.4-29-27.8-36.7-27.8-36.7-22.7-15.5 1.7-15.2 1.7-15.2 25.1 1.8 38.3 25.8 38.3 25.8 22.3 38.3 58.6 27.2 72.9 20.8 2.2-16.2 8.7-27.2 15.8-33.5-55.7-6.3-114.3-27.8-114.3-123.7 0-27.3 9.8-49.7 25.8-67.2-2.6-6.4-11.2-31.8 2.4-66.3 0 0 21-6.7 68.8 25.7 20-5.6 41.5-8.4 62.8-8.5 21.3.1 42.8 2.9 62.8 8.5 47.8-32.4 68.8-25.7 68.8-25.7 13.6 34.5 5 59.9 2.4 66.3 16 17.5 25.8 39.9 25.8 67.2 0 96.2-58.7 117.3-114.6 123.5 9 7.8 17 23.2 17 46.8v69.3c0 6.7 4.5 14.4 17.2 12C424.3 458.7 496 365.7 496 256 496 119 385 8 248 8z"></path>
  </svg>
</a>

  </div>

</div>
      <!-- PROFILE -->
      <div class="flex justify-center">
        <div class="relative animate-float">
          <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-cyan-500 rounded-full blur-2xl opacity-40"></div>

          <img
            src="https://scontent.fcgk12-1.fna.fbcdn.net/v/t51.82787-15/609157252_18392074303180543_8527163535833300515_n.webp?stp=dst-jpg_tt6&_nc_cat=106&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeHjFWvqxMxdhS7wEHVG_UOeOz9-Zs4B_xs7P35mzgH_G2T0u6Uso-ChdO6DYYEYvxxxjrPZln-fyIkwiWq9GJUM&_nc_ohc=Ey9OG3SEQuEQ7kNvwHZbC05&_nc_oc=AdqHMGUH03ADTuE1fQVbyBT07Lnly3xjdfT8gROo8yNre27h9ei0DvWEQs0gByZmRD4&_nc_zt=23&_nc_ht=scontent.fcgk12-1.fna&_nc_gid=PVHb-3VSTARrVrEzWv_J6g&_nc_ss=7b2a8&oh=00_Af7Lg9fh-LiBt715sE0UXQpE914mfe4y6vF7g_1L1g6KaA&oe=6A090395"
            class="relative w-[320px] h-[320px] object-cover rounded-full border-4 border-white/10 glow"
          />
        </div>
      </div>

    </div>
  </section>

  <!-- ABOUT -->
  <section id="about" class="py-28 px-6">
    <div class="max-w-6xl mx-auto">

      <div class="text-center mb-16">
        <p class="text-cyan-400 mb-2">
          Introduction
        </p>

        <h2 class="text-4xl font-bold">
          About Me
        </h2>
      </div>

      <div class="grid md:grid-cols-3 gap-6">

        <div class="card-hover p-8 rounded-3xl bg-white/5 border border-white/10 backdrop-blur-md">
          <h3 class="text-xl font-bold mb-4">
            Web Developer
          </h3>

          <p class="text-gray-400">
            Building responsive websites and web applications
            with modern technologies and best practices.
          </p>
        </div>

        <div class="card-hover p-8 rounded-3xl bg-white/5 border border-white/10 backdrop-blur-md">
          <h3 class="text-xl font-bold mb-4">
            Automation
          </h3>

          <p class="text-gray-400">
            WhatsApp chatbot, AI integration,
            omnichannel systems, and workflow automation.
          </p>
        </div>

        <div class="card-hover p-8 rounded-3xl bg-white/5 border border-white/10 backdrop-blur-md">
          <h3 class="text-xl font-bold mb-4">
            Database Management and Data Analysis
          </h3>

        <p class="text-gray-400">
            Database design & optimization, data analysis, and actionable insights for decision-making.
        </p>
          </p>
        </div>
<br>
      </div><div class="grid md:grid-cols-3 gap-6">

        <div class="card-hover p-8 rounded-3xl bg-white/5 border border-white/10 backdrop-blur-md">
          <h3 class="text-xl font-bold mb-4">
            QA Engineer
          </h3>

          <p class="text-gray-400">
            Ensuring quality and reliability of software products
            through systematic testing and validation.
          </p>
        </div>

        <div class="card-hover p-8 rounded-3xl bg-white/5 border border-white/10 backdrop-blur-md">
          <h3 class="text-xl font-bold mb-4">
            IT Support
          </h3>

          <p class="text-gray-400">
            Providing technical support and troubleshooting for hardware and software issues.
          </p>
        </div>

        <div class="card-hover p-8 rounded-3xl bg-white/5 border border-white/10 backdrop-blur-md">
          <h3 class="text-xl font-bold mb-4">
            Python Programming Language
          </h3>

          <p class="text-gray-400">
            Writing efficient and maintainable Python code for various applications.
          </p>
        </div>

      </div>

    </div>
  </section>

<!-- SKILLS -->
<section id="skills" class="py-28 px-6">
  <div class="max-w-6xl mx-auto">

    <div class="text-center mb-16">
      <p class="text-cyan-400 mb-2">
        My Expertise
      </p>

      <h2 class="text-4xl font-bold">
        Skills & Tools
      </h2>
    </div>

    <div class="grid md:grid-cols-3 gap-6">

      <!-- FRONTEND -->
      <div class="card-hover p-8 rounded-3xl bg-white/5 border border-white/10 backdrop-blur-md">
        <h3 class="text-2xl font-bold mb-6 gradient-text">
          Frontend
        </h3>

        <div class="flex flex-wrap gap-3">
          <span class="px-4 py-2 rounded-xl bg-cyan-500/10 border border-cyan-400/20">HTML</span>
          <span class="px-4 py-2 rounded-xl bg-cyan-500/10 border border-cyan-400/20">CSS</span>
          <span class="px-4 py-2 rounded-xl bg-cyan-500/10 border border-cyan-400/20">JavaScript</span>
          <span class="px-4 py-2 rounded-xl bg-cyan-500/10 border border-cyan-400/20">Bootstrap</span>
          <span class="px-4 py-2 rounded-xl bg-cyan-500/10 border border-cyan-400/20">Tailwind</span>
        </div>
      </div>

      <!-- BACKEND -->
      <div class="card-hover p-8 rounded-3xl bg-white/5 border border-white/10 backdrop-blur-md">
        <h3 class="text-2xl font-bold mb-6 gradient-text">
          Backend & Database
        </h3>

        <div class="flex flex-wrap gap-3">
          <span class="px-4 py-2 rounded-xl bg-purple-500/10 border border-purple-400/20">PHP</span>
          <span class="px-4 py-2 rounded-xl bg-purple-500/10 border border-purple-400/20">CodeIgniter</span>
          <span class="px-4 py-2 rounded-xl bg-purple-500/10 border border-purple-400/20">Python</span>
          <span class="px-4 py-2 rounded-xl bg-purple-500/10 border border-purple-400/20">SQL</span>
          <span class="px-4 py-2 rounded-xl bg-purple-500/10 border border-purple-400/20">PostgreSQL</span>
          <span class="px-4 py-2 rounded-xl bg-purple-500/10 border border-purple-400/20">MySQL</span>
        </div>
      </div>

      <!-- OTHER -->
      <div class="card-hover p-8 rounded-3xl bg-white/5 border border-white/10 backdrop-blur-md">
        <h3 class="text-2xl font-bold mb-6 gradient-text">
          Analytics & Office
        </h3>

        <div class="flex flex-wrap gap-3">
          <span class="px-4 py-2 rounded-xl bg-pink-500/10 border border-pink-400/20">Excel</span>
          <span class="px-4 py-2 rounded-xl bg-pink-500/10 border border-pink-400/20">Word</span>
          <span class="px-4 py-2 rounded-xl bg-pink-500/10 border border-pink-400/20">PowerPoint</span>
          <span class="px-4 py-2 rounded-xl bg-pink-500/10 border border-pink-400/20">Botpress</span>
          <span class="px-4 py-2 rounded-xl bg-pink-500/10 border border-pink-400/20">Looker Studio</span>
          <span class="px-4 py-2 rounded-xl bg-pink-500/10 border border-pink-400/20">Tableau</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- EXPERIENCE -->
<section id="experience" class="py-28 px-6">
  <div class="max-w-6xl mx-auto">

    <div class="text-center mb-16">
      <p class="text-cyan-400 mb-2">
        Career Journey
      </p>

      <h2 class="text-4xl font-bold">
        Experience
      </h2>
    </div>

    <div class="space-y-8">

      <!-- ERAJAYA -->
      <div class="card-hover p-8 rounded-3xl bg-white/5 border border-white/10 backdrop-blur-md">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-5">
          <div>
            <h3 class="text-2xl font-bold">
              IT Support Dedicated Erajaya
            </h3>

            <p class="text-cyan-400">
              Infomedia
            </p>
          </div>

          <span class="mt-3 md:mt-0 text-sm px-4 py-2 rounded-full bg-cyan-500/10 border border-cyan-400/20">
            2024 - Today
          </span>
        </div>

        <ul class="space-y-3 text-gray-300">
          <li>• Mengelola dan memantau jalannya Chatbot</li>
          <li>• IT Support layanan Omni Channel Erajaya</li>
          <li>• Monitoring dan analisis gangguan pada web</li>
          <li>• Membuat laporan bulanan untuk Erajaya</li>
          <li>• Membuat dokumentasi UAT dan alur chatbot</li>
          <li>• Monitoring issue Omni Channel dan Chatbot</li>
        </ul>
      </div>

      <!-- KANGPRO -->
      <div class="card-hover p-8 rounded-3xl bg-white/5 border border-white/10 backdrop-blur-md">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-5">
          <div>
            <h3 class="text-2xl font-bold">
              Web Developer
            </h3>

            <p class="text-cyan-400">
              KangPro | Remote
            </p>
          </div>

          <span class="mt-3 md:mt-0 text-sm px-4 py-2 rounded-full bg-purple-500/10 border border-purple-400/20">
            2023 - Oktober 2025
          </span>
        </div>

        <ul class="space-y-3 text-gray-300">
          <li>• Membuat ide dan analisis bisnis</li>
          <li>• Mengembangkan dashboard website</li>
          <li>• Mengelola blog dan website perusahaan</li>
          <li>• Customer Service Center</li>
          <li>• System Analyst dan Quality Assurance aplikasi</li>
        </ul>
      </div>

      <!-- AKBAR -->
      <div class="card-hover p-8 rounded-3xl bg-white/5 border border-white/10 backdrop-blur-md">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-5">
          <div>
            <h3 class="text-2xl font-bold">
              Web Developer
            </h3>

            <p class="text-cyan-400">
              CV Akbar Technology Gemilang | Cirebon
            </p>
          </div>

          <span class="mt-3 md:mt-0 text-sm px-4 py-2 rounded-full bg-pink-500/10 border border-pink-400/20">
            2022 - 2023
          </span>
        </div>

        <ul class="space-y-3 text-gray-300">
          <li>• Membuat website menggunakan CodeIgniter 3</li>
          <li>• Mengelola dan maintenance website</li>
          <li>• Menemukan dan memperbaiki bugs</li>
          <li>• Mengelola database</li>
          <li>• Melakukan pengujian sistem</li>
        </ul>
      </div>

      <!-- FREELANCE -->
      <div class="card-hover p-8 rounded-3xl bg-white/5 border border-white/10 backdrop-blur-md">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-5">
          <div>
            <h3 class="text-2xl font-bold">
              Freelance Web Developer
            </h3>

            <p class="text-cyan-400">
              Freelance
            </p>
          </div>

          <span class="mt-3 md:mt-0 text-sm px-4 py-2 rounded-full bg-yellow-500/10 border border-yellow-400/20">
            2021 - Today
          </span>
        </div>

        <ul class="space-y-3 text-gray-300">
          <li>• Sistem manajemen gudang TB Kedungjaya</li>
          <li>• Web data takson pembelajaran</li>
          <li>• Website penilaian Agent Erajaya</li>
          <li>• Dashboard monitoring layanan</li>
          <li>• Monitoring dan maintenance website</li>
          <li>• Pengujian sistem dan debugging</li>
        </ul>
      </div>

    </div>
  </div>
</section>

<!-- DETAIL PROJECT -->
<section id="project" class="py-28 px-6">
  <div class="max-w-7xl mx-auto">

    <div class="text-center mb-16">
      <p class="text-cyan-400 mb-2">
        Portfolio
      </p>

      <h2 class="text-4xl font-bold">
        Detail Projects
      </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- PROJECT 1 -->
      <div onclick="openModal('modal1')"
        class="cursor-pointer card-hover rounded-3xl overflow-hidden bg-white/5 border border-white/10">

        <img
          src="https://images.unsplash.com/photo-1556740749-887f6717d7e4?q=80&w=1200"
          class="h-56 w-full object-cover">

        <div class="p-6">
          <h3 class="text-2xl font-bold mb-3">
            Sistem Manajemen Gudang
          </h3>

          <p class="text-gray-400">
            Sistem inventory berbasis web untuk toko besi Kedungjaya.
          </p>
        </div>
      </div>

      <!-- PROJECT 2 -->
      <div onclick="openModal('modal2')"
        class="cursor-pointer card-hover rounded-3xl overflow-hidden bg-white/5 border border-white/10">

        <img
          src="https://images.unsplash.com/photo-1584036561566-baf8f5f1b144?q=80&w=1200"
          class="h-56 w-full object-cover">

        <div class="p-6">
          <h3 class="text-2xl font-bold mb-3">
            Diagnosa Covid-19 CNN
          </h3>

          <p class="text-gray-400">
            AI klasifikasi citra rontgen paru-paru menggunakan CNN.
          </p>
        </div>
      </div>

      <!-- PROJECT 3 -->
      <div onclick="openModal('modal3')"
        class="cursor-pointer card-hover rounded-3xl overflow-hidden bg-white/5 border border-white/10">

        <img
          src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?q=80&w=1200"
          class="h-56 w-full object-cover">

        <div class="p-6">
          <h3 class="text-2xl font-bold mb-3">
            Sistem Keuangan Desa
          </h3>

          <p class="text-gray-400">
            Sistem pengelolaan APBDes dan realisasi anggaran desa.
          </p>
        </div>
      </div>

      <!-- PROJECT 4 -->
      <div onclick="openModal('modal4')"
        class="cursor-pointer card-hover rounded-3xl overflow-hidden bg-white/5 border border-white/10">

        <img
          src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=1200"
          class="h-56 w-full object-cover">

        <div class="p-6">
          <h3 class="text-2xl font-bold mb-3">
            Sistem Puskesmas
          </h3>

          <p class="text-gray-400">
            Maintenance dan pengembangan sistem penugasan internal.
          </p>
        </div>
      </div>

      <!-- PROJECT 5 -->
      <div onclick="openModal('modal5')"
        class="cursor-pointer card-hover rounded-3xl overflow-hidden bg-white/5 border border-white/10">

        <img
          src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=1200"
          class="h-56 w-full object-cover">

        <div class="p-6">
          <h3 class="text-2xl font-bold mb-3">
            TrackPay
          </h3>

          <p class="text-gray-400">
            Sistem manajemen keuangan pribadi berbasis web.
          </p>
        </div>
      </div>

      <!-- PROJECT 6 -->
      <div onclick="openModal('modal6')"
        class="cursor-pointer card-hover rounded-3xl overflow-hidden bg-white/5 border border-white/10">

        <img
          src="https://images.unsplash.com/photo-1530026405186-ed1f139313f8?q=80&w=1200"
          class="h-56 w-full object-cover">

        <div class="p-6">
          <h3 class="text-2xl font-bold mb-3">
            DigiTakson
          </h3>

          <p class="text-gray-400">
            Sistem pencarian urutan takson makhluk hidup.
          </p>
        </div>
      </div>

      <!-- PROJECT 7 -->
      <div onclick="openModal('modal7')"
        class="cursor-pointer card-hover rounded-3xl overflow-hidden bg-white/5 border border-white/10">

        <img
          src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=1200"
          class="h-56 w-full object-cover">

        <div class="p-6">
          <h3 class="text-2xl font-bold mb-3">
            TandaTanah
          </h3>

          <p class="text-gray-400">
            Sistem penyimpanan data kepemilikan tanah.
          </p>
        </div>
      </div>

      <!-- PROJECT 8 -->
      <div onclick="openModal('modal8')"
        class="cursor-pointer card-hover rounded-3xl overflow-hidden bg-white/5 border border-white/10">

        <img
          src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1200"
          class="h-56 w-full object-cover">

        <div class="p-6">
          <h3 class="text-2xl font-bold mb-3">
            Performance Agent Insight
          </h3>

          <p class="text-gray-400">
            Dashboard penilaian performa Agent Erajaya.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- MODALS -->
<!-- MODAL 1 -->
<div id="modal1" class="hidden fixed inset-0 bg-black/70 z-50 flex items-center justify-center p-6">
  <div class="bg-[#0f172a] max-w-2xl rounded-3xl p-8 border border-white/10 relative">

    <button onclick="closeModal('modal1')" class="absolute top-4 right-4 text-2xl">×</button>

    <h2 class="text-3xl font-bold mb-5 gradient-text">
      Rancang Bangun Sistem Manajemen Gudang Berbasis Web
    </h2>

    <p class="text-gray-300 leading-relaxed">
      Sistem ini menghasilkan program untuk menghitung persediaan barang dagang
      pada toko besi Kedungjaya menggunakan PHP dan MySQL sehingga menghasilkan
      data yang lebih akurat dan membantu kegiatan operasional toko.
    </p>
  </div>
</div>

<!-- MODAL 2 -->
<div id="modal2" class="hidden fixed inset-0 bg-black/70 z-50 flex items-center justify-center p-6">
  <div class="bg-[#0f172a] max-w-2xl rounded-3xl p-8 border border-white/10 relative">

    <button onclick="closeModal('modal2')" class="absolute top-4 right-4 text-2xl">×</button>

    <h2 class="text-3xl font-bold mb-5 gradient-text">
      Diagnosa Covid-19 CNN
    </h2>

    <p class="text-gray-300 leading-relaxed">
      Sistem klasifikasi citra rontgen paru-paru menggunakan metode CNN dengan
      1841 data pelatihan dan 525 data validasi yang menghasilkan akurasi
      validasi sebesar 98,86%.
    </p>
  </div>
</div>

<!-- MODAL 3 -->
<div id="modal3" class="hidden fixed inset-0 bg-black/70 z-50 flex items-center justify-center p-6">
  <div class="bg-[#0f172a] max-w-2xl rounded-3xl p-8 border border-white/10 relative">

    <button onclick="closeModal('modal3')" class="absolute top-4 right-4 text-2xl">×</button>

    <h2 class="text-3xl font-bold mb-5 gradient-text">
      Sistem Keuangan Desa
    </h2>

    <p class="text-gray-300 leading-relaxed">
      Sistem pengelolaan keuangan desa yang mempermudah pengaturan
      Realisasi Anggaran dan APBDes secara digital.
    </p>
  </div>
</div>

<!-- MODAL 4 -->
<div id="modal4" class="hidden fixed inset-0 bg-black/70 z-50 flex items-center justify-center p-6">
  <div class="bg-[#0f172a] max-w-2xl rounded-3xl p-8 border border-white/10 relative">

    <button onclick="closeModal('modal4')" class="absolute top-4 right-4 text-2xl">×</button>

    <h2 class="text-3xl font-bold mb-5 gradient-text">
      Maintenance Sistem Puskesmas
    </h2>

    <p class="text-gray-300 leading-relaxed">
      Melakukan analisis, maintenance, pengembangan fitur baru,
      debugging sistem serta pelatihan penggunaan aplikasi
      kepada internal Puskesmas.
    </p>
  </div>
</div>

<!-- MODAL 5 -->
<div id="modal5" class="hidden fixed inset-0 bg-black/70 z-50 flex items-center justify-center p-6">
  <div class="bg-[#0f172a] max-w-2xl rounded-3xl p-8 border border-white/10 relative">

    <button onclick="closeModal('modal5')" class="absolute top-4 right-4 text-2xl">×</button>

    <h2 class="text-3xl font-bold mb-5 gradient-text">
      TrackPay
    </h2>

    <p class="text-gray-300 leading-relaxed">
      Sistem manajemen keuangan pribadi untuk melacak pengeluaran
      dan pemasukan harian maupun bulanan secara detail.
    </p>
  </div>
</div>

<!-- MODAL 6 -->
<div id="modal6" class="hidden fixed inset-0 bg-black/70 z-50 flex items-center justify-center p-6">
  <div class="bg-[#0f172a] max-w-2xl rounded-3xl p-8 border border-white/10 relative">

    <button onclick="closeModal('modal6')" class="absolute top-4 right-4 text-2xl">×</button>

    <h2 class="text-3xl font-bold mb-5 gradient-text">
      DigiTakson
    </h2>

    <p class="text-gray-300 leading-relaxed">
      Sistem pembelajaran digital untuk mencari urutan takson
      makhluk hidup mulai dari Domain hingga Spesies.
    </p>
  </div>
</div>

<!-- MODAL 7 -->
<div id="modal7" class="hidden fixed inset-0 bg-black/70 z-50 flex items-center justify-center p-6">
  <div class="bg-[#0f172a] max-w-2xl rounded-3xl p-8 border border-white/10 relative">

    <button onclick="closeModal('modal7')" class="absolute top-4 right-4 text-2xl">×</button>

    <h2 class="text-3xl font-bold mb-5 gradient-text">
      TandaTanah
    </h2>

    <p class="text-gray-300 leading-relaxed">
      Website yang memungkinkan pengguna menyimpan dan mengelola
      data kepemilikan tanah secara digital.
    </p>
  </div>
</div>

<!-- MODAL 8 -->
<div id="modal8" class="hidden fixed inset-0 bg-black/70 z-50 flex items-center justify-center p-6">
  <div class="bg-[#0f172a] max-w-2xl rounded-3xl p-8 border border-white/10 relative">

    <button onclick="closeModal('modal8')" class="absolute top-4 right-4 text-2xl">×</button>

    <h2 class="text-3xl font-bold mb-5 gradient-text">
      Performance Agent Insight (Pro-AI)
    </h2>

    <p class="text-gray-300 leading-relaxed">
      Website penilaian kinerja Agent Erajaya yang dilengkapi dashboard,
      data pendukung, detail penilaian serta monitoring performa Agent.
    </p>
  </div>
</div>

<script>
  function openModal(id) {
    document.getElementById(id).classList.remove('hidden')
  }

  function closeModal(id) {
    document.getElementById(id).classList.add('hidden')
  }
</script>


  <!-- CONTACT -->
<section id="contact" class="py-28 px-6">
  <div class="max-w-4xl mx-auto">

    <!-- TITLE -->
    <div class="text-center mb-14">
      <p class="text-cyan-400 mb-2">
        Get In Touch
      </p>

      <h2 class="text-5xl font-bold mb-6">
        Contact Me
      </h2>

      <p class="text-gray-400 text-lg leading-relaxed">
        Please contact me directly at
        <a 
          href="mailto:rizqiemn@gmail.com"
          class="underline hover:text-cyan-400 transition"
        >
          rizqiemn@gmail.com
        </a>
        or through this form.
      </p>
    </div>

    <!-- FORM -->
    <form
      id="contact-form"
      action="https://api.web3forms.com/submit"
      method="POST"
      class="flex flex-col gap-5"
    >

      <!-- WEB3FORMS ACCESS KEY -->
      <input 
        type="hidden" 
        name="access_key" 
        value="85943105-0381-4ea5-b44c-5995bfeff3a4"
      >

      <!-- OPTIONAL -->
      <input 
        type="hidden" 
        name="subject" 
        value="New Portfolio Message"
      >

      <input 
        type="hidden" 
        name="from_name" 
        value="Portfolio Website"
      >

      <!-- EMAIL -->
      <input
        type="email"
        name="email"
        required
        maxlength="500"
        placeholder="Your email"
        class="w-full px-6 h-16 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md text-white placeholder-gray-400 focus:outline-none focus:border-cyan-400 transition"
      >

      <!-- MESSAGE -->
      <textarea
        name="message"
        required
        maxlength="5000"
        placeholder="Your message"
        class="w-full p-6 h-64 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md text-white placeholder-gray-400 focus:outline-none focus:border-cyan-400 transition resize-none"
      ></textarea>

      <!-- BUTTON -->
      <button
        id="submit-btn"
        type="submit"
        class="group flex items-center justify-center gap-3 h-14 w-44 rounded-full bg-gradient-to-r from-purple-600 to-cyan-500 text-white font-semibold glow transition-all hover:scale-105 active:scale-95"
      >

        <span id="btn-text">
          Submit
        </span>

        <!-- SEND ICON -->
        <svg
          stroke="currentColor"
          fill="currentColor"
          stroke-width="0"
          viewBox="0 0 512 512"
          class="text-sm opacity-80 transition-all group-hover:translate-x-1 group-hover:-translate-y-1"
          height="1em"
          width="1em"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z"></path>
        </svg>

      </button>

      <!-- RESULT -->
      <p id="result" class="text-sm text-gray-400"></p>

    </form>
  </div>
</section>

<script>
  const form = document.getElementById("contact-form");
  const result = document.getElementById("result");
  const btnText = document.getElementById("btn-text");

  form.addEventListener("submit", async function (e) {

    e.preventDefault();

    btnText.innerText = "Sending...";

    const formData = new FormData(form);

    const response = await fetch(form.action, {
      method: "POST",
      body: formData
    });

    const data = await response.json();

    if (data.success) {

      result.innerHTML = `
        <span class="text-green-400">
          Message sent successfully 🚀
        </span>
      `;

      form.reset();

    } else {

      result.innerHTML = `
        <span class="text-red-400">
          Failed to send message ❌
        </span>
      `;
    }

    btnText.innerText = "Submit";
  });
</script>

<!-- THEME TOGGLE BUTTON -->
<button
  id="theme-toggle"
  class="fixed bottom-6 right-6 z-[999] w-14 h-14 rounded-full bg-white/10 backdrop-blur-md border border-white/10 flex items-center justify-center shadow-2xl hover:scale-110 transition-all"
>
  
  <!-- MOON ICON -->
  <svg
    id="theme-icon-dark"
    xmlns="http://www.w3.org/2000/svg"
    fill="none"
    viewBox="0 0 24 24"
    stroke-width="1.5"
    stroke="currentColor"
    class="w-6 h-6 text-white"
  >
    <path
      stroke-linecap="round"
      stroke-linejoin="round"
      d="M21.752 15.002A9.718 9.718 0 0 1 18 15.75c-5.385 
      0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 
      9.753 0 1 0 21.752 15.002z"
    />
  </svg>

  <!-- SUN ICON -->
  <svg
    id="theme-icon-light"
    xmlns="http://www.w3.org/2000/svg"
    fill="none"
    viewBox="0 0 24 24"
    stroke-width="1.5"
    stroke="currentColor"
    class="w-6 h-6 text-yellow-400 hidden"
  >
    <path
      stroke-linecap="round"
      stroke-linejoin="round"
      d="M12 3v1.5m0 15V21m8.25-9H21M3 
      12H4.5m13.364 6.364-1.06-1.06M6.697 
      6.697 5.636 5.636m12.728 
      0-1.06 1.06M6.697 17.303l-1.06 
      1.06M15.75 12a3.75 3.75 0 1 1-7.5 
      0 3.75 3.75 0 0 1 7.5 0Z"
    />
  </svg>

</button>

<style id="3zlgjw">
  /* LIGHT MODE */
  body.light-mode {
    background: #f4f7fb;
    color: #0f172a;
  }

  body.light-mode header {
    background: rgba(255,255,255,.7);
    border-color: rgba(0,0,0,.08);
  }

  body.light-mode .card-hover,
  body.light-mode .bg-white\/5 {
    background: rgba(255,255,255,.7) !important;
    border-color: rgba(0,0,0,.08) !important;
    color: #0f172a;
  }

  body.light-mode .text-white {
    color: #0f172a !important;
  }

  body.light-mode .text-gray-300,
  body.light-mode .text-gray-400,
  body.light-mode .text-gray-500 {
    color: #475569 !important;
  }

  body.light-mode input,
  body.light-mode textarea {
    background: rgba(255,255,255,.9) !important;
    color: #0f172a !important;
    border-color: rgba(0,0,0,.08) !important;
  }

  body.light-mode input::placeholder,
  body.light-mode textarea::placeholder {
    color: #64748b !important;
  }

  body.light-mode footer {
    border-color: rgba(0,0,0,.08);
  }

  body.light-mode #theme-toggle {
    background: rgba(255,255,255,.8);
    border-color: rgba(0,0,0,.08);
  }

  body.light-mode .blob {
    opacity: .15;
  }
</style>

<script id="dtxjlwm">
  const toggleBtn = document.getElementById('theme-toggle');
  const body = document.body;

  const moonIcon = document.getElementById('theme-icon-dark');
  const sunIcon = document.getElementById('theme-icon-light');

  // LOAD SAVED THEME
  if (localStorage.getItem('theme') === 'light') {
    enableLightMode();
  }

  // BUTTON CLICK
  toggleBtn.addEventListener('click', () => {

    if (body.classList.contains('light-mode')) {

      disableLightMode();

    } else {

      enableLightMode();

    }

  });

  // ENABLE LIGHT
  function enableLightMode() {

    body.classList.add('light-mode');

    localStorage.setItem('theme', 'light');

    moonIcon.classList.add('hidden');
    sunIcon.classList.remove('hidden');
  }

  // DISABLE LIGHT
  function disableLightMode() {

    body.classList.remove('light-mode');

    localStorage.setItem('theme', 'dark');

    moonIcon.classList.remove('hidden');
    sunIcon.classList.add('hidden');
  }
</script>



  <!-- FOOTER -->
  <footer class="border-t border-white/10 py-6 text-center text-gray-500">
    © 2024 Rizqie Miftakhuddin Noor. All rights reserved.
  </footer>

</body>
</html>