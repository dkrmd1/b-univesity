@extends('layouts.app')
@extends('content')

    <!-- HERO SECTION -->
    <section class="container min-h-[90vh] relative mt-28">
      <div
        id="hero-1"
        class="absolute animate-fade top-0 left-0 w-full h-full flex flex-col lg:flex-row lg:portrait:flex-col items-center justify-center rounded-[30px]"
      >
        <div class="px-4 md:pl-12 w-full lg:w-1/2 lg:portrait:w-full">
          <h1
            class="text-4xl font-semibold font-montserrat md:text-5xl/[60px] text-white mb-7"
          >
            Menyatukan Ilmu dan Iman untuk Masa Depan Cerah
          </h1>
          <span
            class="text-lg md:text-xl text-white font-montserrat font-medium"
            >Kami berkomitmen mendidik generasi unggul yang menjunjung tinggi
            nilai agama dan kecemerlangan akademik.</span
          >
        </div>
        <img
          src="../assets/images/hero-illustration-1.png"
          class="mr-12 sm:-mr-12 z-0 w-full lg:w-1/2 lg:portrait:w-4/5"
          alt="Hero Image"
        />
      </div>
      <div
        id="hero-2"
        class="absolute top-0 animate-fade left-0 w-full h-full flex flex-col lg:flex-row lg:portrait:flex-col items-center justify-center rounded-[30px]"
      >
        <div class="px-4 md:pl-12 w-full lg:w-1/2 lg:portrait:w-full">
          <h1
            class="text-4xl font-semibold font-montserrat md:text-5xl/[60px] text-white mb-7"
          >
            Menuju Pendidikan Berdaya Saing Global
          </h1>
          <span
            class="text-lg md:text-xl text-white font-montserrat font-medium"
            >Teknik pembelajaran yang memadukan tradisi keilmuan Agama dengan
            inovasi modern.</span
          >
        </div>
        <img
          src="../assets/images/hero-illustration-2.png"
          class="mr-12 sm:-mr-12 z-0 w-full lg:w-1/2 lg:portrait:w-4/5"
          alt="Hero Image"
        />
      </div>
      <div
        id="hero-3"
        class="absolute animate-fade top-0 left-0 w-full h-full flex flex-col lg:flex-row lg:portrait:flex-col items-center justify-center rounded-[30px]"
      >
        <div class="px-4 md:pl-12 w-full lg:w-1/2 lg:portrait:w-full">
          <h1
            class="text-4xl font-semibold font-montserrat md:text-5xl/[60px] text-white mb-7"
          >
            Menciptakan Generasi Berakhlak dan Berwawasan
          </h1>
          <span
            class="text-lg md:text-xl text-white font-montserrat font-medium"
            >Kami hadir untuk membimbing Anda dalam meraih prestasi akademik dan
            menjadi agen perubahan di dunia.</span
          >
        </div>
        <img
          src="../assets/images/hero-illustration-3.png"
          class="mr-12 sm:-mr-12 z-0 w-full lg:w-1/2 lg:portrait:w-4/5"
          alt="Hero Image"
        />
      </div>
    </section>

    <div
      class="container overflow-hidden w-fit md:px-16 py-5 rounded-3xl mx-4 sm:mx-auto -mt-32 bg-white z-10 relative shadow-2xl"
    >
      <h3
        class="text-xl sm:text-2xl text-center w-full font-semibold font-montserrat mb-4"
      >
        Bekerjasama Dengan
      </h3>
      <div class="flex overflow-x-auto gap-16">
        <img
          class="w-12 md:w-fit"
          src="/assets/images/nus.png"
          alt="National University of Singapore"
        />
        <img
          class="w-12 md:w-fit"
          src="/assets/images/ntu.png"
          alt="Nanyang Technological University"
        />
        <img
          class="w-12 md:w-fit"
          src="/assets/images/mit.png"
          alt="Massachusetts Institute of Technology"
        />
        <img
          class="w-12 md:w-fit"
          src="/assets/images/TIT.png"
          alt="Tokyo Institute of Technology"
        />
        <img
          class="w-12 md:w-fit"
          src="/assets/images/Waseda.png"
          alt="Waseda University"
        />
        <img
          class="w-12 md:w-fit"
          src="/assets/images/Tokyo-Daigaku.png"
          alt="The University of Tokyo"
        />
      </div>
    </div>

    <!-- END OF HERO SECTION -->

    <!-- ABOUT SECTION -->
    <section class="w-full overflow-hidden py-28">
      <div
        class="container grid grid-cols-1 md:grid-cols-2 items-center gap-12"
      >
        <div class="space-y-4 lg:ml-20">
          <h3
            class="text-primary-200 font-bold text-xl sm:text-2xl font-montserrat"
          >
            TENTANG KAMI
          </h3>
          <p class="font-montserrat text-2xl sm:text-4xl font-semibold">
            Membangun generasi
            <span class="text-secondary-purple">unggul</span> dan
            <span class="text-secondary-pink">berakhlak</span>
          </p>
          <p
            class="text-base sm:text-lg font-semibold text-xneutral-200 font-montserrat"
          >
            Universitas yang berfokus pada integritas, ilmu pengetahuan, dan
            pengembangan karakter untuk membentuk pemimpin masa depan.
          </p>
          <a
            href="#"
            class="px-6 py-[14px] font-montserrat text-neutral-0 bg-white border w-fit text-lg font-semibold border-primary-200 text-primary-200 rounded-full flex gap-[10px]"
            ><span>Tentang kami</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
        <div class="relative">
          <div class="grid grid-cols-2 gap-6 w-fit">
            <img src="/assets/images/about-1.png" alt="Illustration 1" />
            <img src="/assets/images/about-2.png" alt="Illustration 2" />
            <img
              class="col-span-2"
              src="/assets/images/about-3.png"
              alt="Illustration 3"
            />
          </div>
          <img
            class="absolute -bottom-32 -left-36 -z-10"
            src="/assets/images/elipse-1.svg"
            alt=""
          />
          <img
            class="absolute -top-24 -right-16 -z-10"
            src="/assets/images/elipse-2.svg"
            alt=""
          />
        </div>
      </div>
    </section>
    <!-- END OF ABOUT SECTION -->

    <!-- NEWS SECTION -->
    <section class="container relative">
      <div class="mb-10 flex justify-between items-center">
        <div>
          <h3
            class="font-semibold text-xl sm:text-2xl font-montserrat text-xneutral-400"
          >
            Berita terkini untuk Anda
          </h3>
          <p
            class="text-sm sm:text-base font-montserrat text-xneutral-200 font-semibold"
          >
            Temukan berita terbaru hari ini
          </p>
        </div>
        <div>
          <button
            class="text-xneutral-400 hover:text-xneutral-0 bg-xneutral-0 transition-all hover:bg-xneutral-400 w-10 h-10 rounded-full"
          >
            <i class="bi bi-arrow-left-short text-4xl"></i>
          </button>
          <button
            class="text-xneutral-400 hover:text-xneutral-0 bg-xneutral-0 transition-all hover:bg-xneutral-400 w-10 h-10 rounded-full"
          >
            <i class="bi bi-arrow-right-short text-4xl"></i>
          </button>
        </div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div
          class="p-[14px] rounded-[20px] border border-xneutral-100 bg-xneutral-0"
        >
          <div class="max-h-[214px] rounded-2xl overflow-hidden mb-5">
            <img src="/assets/images/berita.png" alt="Berita 1" />
          </div>
          <a
            href="berita.html"
            class="text-base sm:text-lg font-montserrat font-semibold text-xneutral-400 line-clamp-2"
          >
            Alat Pemotong Adonan Kerupuk untuk UMKM J&R Dinoyo Malang
          </a>
          <p
            class="font-montserrat text-xs sm:text-sm font-semibold text-xneutral-200"
          >
            20/08/24
          </p>
        </div>
        <div
          class="p-[14px] rounded-[20px] border border-xneutral-100 bg-white"
        >
          <div class="max-h-[214px] rounded-2xl overflow-hidden mb-5">
            <img src="/assets/images/berita-1.png" alt="Berita 1" />
          </div>
          <a
            href="berita.html"
            class="text-base sm:text-lg font-montserrat font-semibold text-xneutral-400 line-clamp-2"
          >
            Himpunan Informatika (HMTI) gelar kuliah praktisi
          </a>
          <p
            class="font-montserrat text-xs sm:text-sm font-semibold text-xneutral-200"
          >
            08/08/24
          </p>
        </div>
        <div
          class="p-[14px] rounded-[20px] border border-xneutral-100 bg-white"
        >
          <div class="max-h-[214px] rounded-2xl overflow-hidden mb-5">
            <img src="/assets/images/berita-2.png" alt="Berita 1" />
          </div>
          <a
            href="berita.html"
            class="text-base sm:text-lg font-montserrat font-semibold text-xneutral-400 line-clamp-2"
          >
            Rapat Konsolidasi Pembentukan APSIMI (Asosiasi Program Studi
            Informatika Medis Indonesia)
          </a>
          <p
            class="font-montserrat text-xs sm:text-sm font-semibold text-xneutral-200"
          >
            20/07/24
          </p>
        </div>
      </div>
      <div class="absolute top-12 -left-24 -z-10">
        <img src="/assets/images/elipse-1.svg" alt="" />
      </div>
    </section>
    <!-- END OF NEWS SECTION -->

    <!-- RECTOR SECTION -->
    <section class="container mt-28">
      <div class="text-center space-y-2">
        <h3
          class="font-montserrat font-semibold text-xneutral-400 text-xl sm:text-2xl"
        >
          Rektorat B-Universitas
        </h3>
        <p
          class="font-montserrat text-sm sm:text-base font-semibold text-xneutral-200"
        >
          Berkomitmen untuk meningkatkan kualitas Pendidikan
        </p>
      </div>
      <div class="grid grid-cols-2 gap-12 lg:grid-cols-4 mt-11 text-center">
        <div class="flex flex-col items-center">
          <div class="rounded-full overflow-hidden w-fit mb-6">
            <img src="/assets/images/orang-3.png" alt="Angga Setiawan" />
          </div>
          <p
            class="mb-[2px] text-sm sm:text-base text-xneutral-400 font-semibold font-montserrat"
          >
            Angga Setiawan
          </p>
          <p
            class="mb-[2px] text-xs sm:text-sm text-xneutral-200 font-semibold font-montserrat"
          >
            Rektor
          </p>
        </div>
        <div class="flex flex-col items-center">
          <div class="rounded-full overflow-hidden w-fit mb-6">
            <img src="/assets/images/orang-2.png" alt="Galih Pratama" />
          </div>
          <p
            class="mb-[2px] text-sm sm:text-base text-xneutral-400 font-semibold font-montserrat"
          >
            Galih Pratama
          </p>
          <p
            class="mb-[2px] text-xs sm:text-sm text-xneutral-200 font-semibold font-montserrat"
          >
            Wakil Rektor 1
          </p>
        </div>
        <div class="flex flex-col items-center">
          <div class="rounded-full overflow-hidden w-fit mb-6">
            <img
              src="/assets/images/orang-5.png"
              alt="Ahmad Hafidh Ayatullah"
            />
          </div>
          <p
            class="mb-[2px] text-sm sm:text-base text-xneutral-400 font-semibold font-montserrat"
          >
            Ahmad Hafidh Ayatullah
          </p>
          <p
            class="mb-[2px] text-xs sm:text-sm text-xneutral-200 font-semibold font-montserrat"
          >
            Wakil Rektor 2
          </p>
        </div>
        <div class="flex flex-col items-center">
          <div class="rounded-full overflow-hidden w-fit mb-6">
            <img src="/assets/images/orang-4.png" alt="Della Reno Rinaldi" />
          </div>
          <p
            class="mb-[2px] text-sm sm:text-base text-xneutral-400 font-semibold font-montserrat"
          >
            Della Reno Rinaldi
          </p>
          <p
            class="mb-[2px] text-xs sm:text-sm text-xneutral-200 font-semibold font-montserrat"
          >
            Wakil Rektor 3
          </p>
        </div>
      </div>
    </section>
    <!-- END OF RECTOR SECTION -->

    <!-- ANNOUNCEMENT SECTION -->
    <section class="mt-28 x-announcement w-full">
      <div class="container pt-9 pb-16">
        <div class="mb-10 flex justify-between items-center">
          <div>
            <h3
              class="font-semibold text-xl sm:text-2xl font-montserrat text-xneutral-0"
            >
              Pengumuman
            </h3>
            <p
              class="font-montserrat text-sm sm:text-base text-xneutral-0 font-semibold"
            >
              Dapatkan pengumuman terbaru
            </p>
          </div>
          <div>
            <button
              class="text-xneutral-400 hover:text-xneutral-0 bg-xneutral-0 transition-all hover:bg-xneutral-400 w-10 h-10 rounded-full"
            >
              <i class="bi bi-arrow-left-short text-4xl"></i>
            </button>
            <button
              class="text-xneutral-400 hover:text-xneutral-0 bg-xneutral-0 transition-all hover:bg-xneutral-400 w-10 h-10 rounded-full"
            >
              <i class="bi bi-arrow-right-short text-4xl"></i>
            </button>
          </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div
            class="py-[26px] px-7 rounded-[20px] border border-xneutral-100 bg-white"
          >
            <a
              href=""
              class="text-base sm:text-lg font-montserrat font-semibold text-xneutral-400 line-clamp-2 mb-4"
            >
              Mahasiswa PKM-KC Alat Sensor Batuk Pasien TBC
            </a>
            <p
              class="font-montserrat text-xs sm:text-sm font-semibold text-xneutral-200 mb-1.5"
            >
              Tingginya kasus TBC membuat mahasiswa membentuk tim Program....
            </p>
            <p class="font-montserrat text-xs font-semibold text-xneutral-200">
              20/08/24
            </p>
          </div>
          <div
            class="py-[26px] px-7 rounded-[20px] border border-xneutral-100 bg-white"
          >
            <a
              href=""
              class="text-base sm:text-lg font-montserrat font-semibold text-xneutral-400 line-clamp-2 mb-4"
            >
              Green Idul Adha Dapat Apresiasi Majelis Lingkungan
            </a>
            <p
              class="font-montserrat text-xs sm:text-sm font-semibold text-xneutral-200 mb-1.5"
            >
              Ada yang berbeda dari hari idul Adha 1444 Hijriah saat ini karena
            </p>
            <p class="font-montserrat text-xs font-semibold text-xneutral-200">
              26/09/24
            </p>
          </div>
          <div
            class="py-[26px] px-7 rounded-[20px] border border-xneutral-100 bg-white"
          >
            <a
              href=""
              class="text-base sm:text-lg font-montserrat font-semibold text-xneutral-400 line-clamp-2 mb-4"
            >
              Prodi Informatika Pemenang Juara 1 Gemastik 2024
            </a>
            <p
              class="font-montserrat text-xs sm:text-sm font-semibold text-xneutral-200 mb-1.5"
            >
              Mahasiswa informatika menang lomba Gemastik 2024 kategori Cyber
              Security
            </p>
            <p class="font-montserrat text-xs font-semibold text-xneutral-200">
              28/09/24
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- END OF ANNOUNCEMENT SECTION -->
  </body>
</html>
