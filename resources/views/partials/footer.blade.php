    <!-- FOOTER SECTION -->
    <footer class="w-full mt-14 pt-20">
        <div
          class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12 lg:gap-36 container"
        >
          <div>
            <img
              class="mb-10"
              src="/assets/images/B-Uni.png"
              alt="Logo B-Universitas"
            />
            <p class="text-medium text-xneutral-200 font-poppins text-sm mb-6">
              Lihat Perkembangan kami diakun sosial media
            </p>
            <div class="flex items-center gap-11">
              <a
                href="#"
                class="w-8 h-8 grid place-content-center rounded-full bg-primary-200"
              >
                <i class="bi bi-instagram text-lg text-xneutral-0"></i>
              </a>
              <a
                href="#"
                class="w-8 h-8 grid place-content-center rounded-full bg-primary-200"
              >
                <i class="bi bi-youtube text-lg text-xneutral-0"></i>
              </a>
              <a
                href="#"
                class="w-8 h-8 grid place-content-center rounded-full bg-primary-200"
              >
                <i class="bi bi-linkedin text-sm text-xneutral-0"></i>
              </a>
              <a
                href="#"
                class="w-8 h-8 grid place-content-center rounded-full bg-primary-200"
              >
                <i class="bi bi-facebook text-lg text-xneutral-0"></i>
              </a>
            </div>
          </div>
          <div>
            <h4
              class="font-poppins font-semibold text-lg text-xneutral-300 mb-10"
            >
              Contact us
            </h4>
            <div class="space-y-6">
              <div class="flex gap-4">
                <i class="bi bi-geo-alt-fill text-xneutral-200"></i>
                <p class="font-poppins text-xneutral-200 text-sm">
                  Jl. Teknik Kimia, Keputih, Kec. Sukolilo, Surabaya, Jawa Timur
                  60111
                </p>
              </div>
              <div class="flex gap-4">
                <i class="bi bi-envelope text-xneutral-200"></i>
                <p class="font-poppins text-xneutral-200 text-sm">
                  admin@b-university.ac.id
                </p>
              </div>
              <div class="flex gap-4">
                <i class="bi bi-whatsapp text-xneutral-200"></i>
                <p class="font-poppins text-xneutral-200 text-sm">
                  +62 878-7777-9999
                </p>
              </div>
            </div>
          </div>
          <div>
            <h4
              class="font-poppins font-semibold text-lg text-xneutral-300 mb-10"
            >
              Contact us
            </h4>
            <div class="max-h-24">
              <a href="{{ $datafooter->link_gmaps ?? 'null' }}" target="_blank" rel="noopener noreferrer">
                <button class="px-6 py-[14px] text-center w-full font-montserrat text-neutral-0 bg-white border text-lg font-semibold border-primary-200 text-primary-200 rounded-full">
                  View GMaps
                </button>
              </a>
            </div>
          </div>
        </div>
        <div class="container">
          <hr class="mt-14 border-2 border-xneutral-300" />
          <p class="text-center my-6 font-poppins text-xneutral-200">
            Copyright © 2024 | B University
          </p>
        </div>
      </footer>
      <!-- END OF FOOTER SECTION -->