@extends('template')
@section('content')

<main id="main">

    <!-- ======= Cloud Hosting Indonesia Section ======= -->
    <section id="cloud-hosting-indo" class="cloud-hosting-indo">
      <div class="container">

        <div class="section-title">
          <h2>Cloud Hosting Indonesia <br> <span class="pumpkin">Diskon Hingga 50%</span></h2>
          <p>Layanan cloud hosting indonesia terbaik dengan teknologi andal untuk website anda</p>
        </div>

        <!-- Swiper Cloud Hosting-->
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">

            @foreach ($cloud_hostings as $cloud_hosting)
            <div class="swiper-slide">
              <div class="content-box">
                <div class="content-swiper">
                  <div class="content-header">
                    <h6>{{ $cloud_hosting->name }}</h6>
                    <h3 style="padding-bottom: 8px">{{ $cloud_hosting->code }}</h3>
                    <h6 style="text-decoration: line-through">Rp.{{ number_format( $cloud_hosting->price_before_discount ,0,',','.') }}</h6>
                    <h5 class="pumpkin">Rp.<span style="font-size: 38px;">{{ number_format( $cloud_hosting->price_after_discount ,0,',','.') }}</span>/bln</h5>
                  </div>
                  <hr>
                  <div class="content-body">
                    <h5>Features</h5>
                    @foreach ($cloud_hosting->features()->get() as $feature)
                    <ul>
                      <li><img src="{{ asset('/icons/disk.png') }}" alt=""> {{ $feature->disk }} Disk</li>
                      <li><img src="{{ asset('/icons/bandwith.png') }}" alt=""> {{ $feature->bandwith }} Bandwith</li>
                      <li><img src="{{ asset('/icons/cpu.png') }}" alt=""> {{ $feature->core_cpu }} Core CPU </li>
                      <li><img src="{{ asset('/icons/addon.png') }}" alt=""> {{ $feature->parked_domain }} Addon/Parked Domain </li>
                    </ul>
                    @endforeach
                    
                  </div>
                  <div class="content-footer">
                    <a href="#" class="btn btn-bd-primary">Pesan Sekarang</a>
                  </div>
                </div>  
              </div>
            </div>
            @endforeach
            
          </div>

          <div class="swiper-pagination"></div>
        </div>
        <!-- End Swiper Cloud Hosting -->
      </div>
      <br>
      <div class="container">

        <div id="others-services" class="others-services">
          <div class="section-title">
            <h2>Lihat Juga Layanan Kami Yang Lain</h2>
            <p>Optimalkan performa website bisnis Anda dengan berbagai layanan berkualitas dari Qwords</p>
          </div>

          <!-- Swiper Layanan Lainnya -->
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              @foreach ($other_services as $other_service)
              <div class="swiper-slide">
                <div class="content-box-2">
                  <div class="content-swiper">
                    <div class="content-header">
                      <div class="icon-box">
                        <div class="icon">
                          <img src="{{ asset('/icons/check.png') }}" style="width: 30px;" alt="">
                        </div>
                      </div>
                      <h3>{{ $other_service->name }}</h3>
                      <p>{{ $other_service->desc }}</p>
                      <h6 style="padding-top: 15px">Mulai dari</h6>
                      <h5 class="pumpkin" style="padding-bottom: 10px">Rp.<span style="font-size: 38px;">{{ number_format( $other_service->price ,0,',','.') }}</span>/bln</h5>
                    </div>
                    <div class="content-footer">
                      <a href="#" class="btn btn-bd-primary">Pesan Sekarang</a>
                    </div>
                  </div>  
                </div>
              </div>
              @endforeach
  
            </div>
  
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <!-- End Swiper Layanan Lainnya  -->
      </div>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
          var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
              rotate: 10,
              stretch: 0,
              depth: 200,
              modifier: 2,
              slideShadows: true,
            },
            loop: true,
          });
      
        </script>

      
    </section><!-- End Cloud Hosting Indonesia Section -->

    <!-- ======= Domain Section ======= -->
    <section id="domain" class="domain section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Cari Nama Domainmu</h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-10">
            <form action="{{ route('find_domain') }}" method="POST">
              @csrf
              <div class="row">
                <div class="col-md-8 form-group">
                  <input type="text" name="name" class="form-control form-input" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-2 form-group mt-3 mt-md-0">
                  <select class="form-select" aria-label="Default select example" name="type_domain">
                    @foreach ($all_type_domains as $item)
                      <option value="{{ $item->id }}">.{{ $item->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="text-center col-md-2 form-group mt-3 mt-md-0"><button type="submit">Search</button></div>
              </div>
            </form>
            <div class="domain-prices">
              <div class="row text-center">
                @foreach ($type_domains as $type_domain)
                <div class="col-3">
                  <div>
                    <h4 class="pumpkin">.{{ $type_domain->name }}</h4>
                    <p>Rp.{{ number_format( $type_domain->price ,0,',','.') }}</p>
                  </div>
                </div>
              @endforeach
              
              </div>
            </div>
          </div>
        </div>

        @php
          $domain_name = session()->get('domain_name');
          $name = session()->get('name');
          $domains = session()->get('domains');
          $count_domain = session()->get('domain_count');
        @endphp

        @if ($message = Session::get('success'))
        
        <hr><br>
        <div class="container text-center">
          <div class="row align-items-start">
            <div class="col-lg-5">
              <div class="text-center">
                  <div class="icon-box">
                    <div class="icon">
                      <i class="bi bi-check-lg"></i>
                    </div>
                  </div>
                <h4>Selamat {{ $message }}</h4>
                <h5>{{ $domain_name }}</h5>
                <button type="button" class="btn btn-bd-primary" style="margin-bottom: 40px; margin-top: 25px">Pesan Sekarang</button>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="text-center">
                <h4 style="margin-bottom: 20px">Alternatif Tersedia</h4>
              </div>
              <table class="table table-dark table-hover">
                <tbody>
                  @if ($count_domain == 0)
                    <p class="pumpkin">Tidak ditemukan alternatif lainnya.</p>
                  @else
                    @foreach ($domains as $domain)
                      <tr>
                        <td>{{ $name.'.'.$domain->name }}</td>
                        <td>Rp.{{ number_format($domain->price,0,',','.')  }}</td>
                        <td><button type="button" class="btn btn-bd-primary">Pesan Sekarang</button></td>
                      </tr>
                    @endforeach
                  @endif
                </tbody>
              </table>
            </div>
          </div>
        </div>
        @endif

        @if ($message = Session::get('error'))

        <hr><br>
        <div class="container text-center">
          <div class="row align-items-start">
            <div class="col-lg-5">
              <div class="text-center">
                  <div class="icon-box">
                    <div class="icon">
                      <i class="bi bi-exclamation-lg"></i>
                    </div>
                  </div>
                <h4>{{ $message }}  Domain ini<br> milik anda?</h4>
                <button class="btn btn-bd-primary" style="margin-bottom: 40px">Transfer {{ $domain_name }} ke Qwords</button>
                </div>
            </div>
            <div class="col-lg-7">
              <div class="text-center">
                <h4>Alternatif Tersedia</h4>
              </div>
              <table class="table table-dark table-hover">
                <tbody>
                  @if ($count_domain == 0)
                    <p class="pumpkin">Tidak ditemukan alternatif lainnya.</p>
                  @else
                    @foreach ($domains as $domain)
                      <tr>
                        <td>{{ $name.'.'.$domain->name }}</td>
                        <td>Rp.{{ number_format($domain->price,0,',','.')  }}</td>
                        <td><button type="button" class="btn btn-bd-primary">Pesan Sekarang</button></td>
                      </tr>
                    @endforeach
                  @endif
                </tbody>
              </table>
            </div>
          </div>
        </div>
          
        @endif

      </div>
    </section><!-- End Domain Section -->

    <!-- ======= Solution Section ======= -->
    <section id="solution" class="solution section-bg">
      <div class="container">

        <div class="section-title text-center">
          <h2>Solusi Paket Hosting Terbaik dari Kami</h2>
          <p >Kami menawarkan solusi paket hosting terbaik untuk segala kebutuhan website dan sistem Anda. Mulai dari blog hingga website bisnis dan perusahaan</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-building"></i></i></div>
              <h4><a href="">Perusahaan</a></h4>
              <p>Wujudkan website perusahaan profesional dan berkelas dengan dukungan web hosting terbaik dan fitur keamanan ekstra</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-shop-window"></i></div>
              <h4><a href="">UMKM dan Toko Online</a></h4>
              <p>Memberikan hosting terbaik untuk mendukung kebutuhan website pemasaran barang/jasa secara online.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-people-fill"></i></div>
              <h4><a href="">Organisasi dan Komunitas</a></h4>
              <p>Bikin website organisasi atau komunitas Anda dengan paket hosting unggulan yang ramah kantong.</p>
            </div>
          </div>

        </div>

        <br>
        
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-backpack"></i></div>
              <h4><a href="">Sekolah</a></h4>
              <p>Infrastruktur web hosting terbaik untuk menunjang kegiatan e-learning. Didukung platform MOODLE khusus pembelajaran daring</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-pc-display"></i></div>
              <h4><a href="">Developer</a></h4>
              <p>Tersedia paket hosting Indonesia dengan spesifikasi khusus yang dev-friendly. Ekstra NodeJS dan Git Version Control</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-book"></i></i></div>
              <h4><a href="">Blogger dan Personal</a></h4>
              <p>Memfasilitasi blogger dengan infrastruktur hosting Indonesia terbaik serta template website premium untuk tampil lebih profesional</p>
            </div>
          </div>
        </div>

        <br>

        <div class="row row-box">
          <div class="col-lg-4">
            <img src="{{ asset('/img/image-1.png') }}" alt="">
          </div>

          <div class="col-lg-8">
            <h1><span class="pumpkin">Bikin website impian </span><br> dengan mudah disini hanya 1 jutaan</h1>
            <p>Bikin website impian include paket hosting Indonesia terbaik hanya 1 jutaan Jasa pembuatan website profesional untuk Perusahaan, Bisnis & UKM. 
              Bikin Website Impian dengan mudah di sini, desain website elegan dan mudah dikelola</p>
              <a href="#" class="btn-view"><span>Lihat Selengkapnya &#187</span></a>
          </div>

        </div>

      </div>
    </section><!-- End Solution Section -->

    <!-- ======= Commitment Section ======= -->
    <section id="commitment" class="commitment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Komitmen Qwords</h2>
          <p>Berbagai alasan mengapa pelanggan memilih sewa hosting di Qwords</p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-telephone"></i>
              <h4><a href="#">Layanan 24/7</a></h4>
              <p>Tim Technical Support dan Customer Service Qwords siap membantu Anda selama 24 jam, 7 hari. Anda dapat menghubungi melalui Live chat, Call Center, dan Support Ticket.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="#">Panduan Manual Lengkap</a></h4>
              <p>Qwords dilengkapi dengan halaman knowledge base berisi tutorial dan tips seputar pengelolaan website dan hosting. Dapat diakses dengan mudah dan solutif</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="#">Up time 99.99%</a></h4>
              <p>Uptime Network & Server di atas 99. 99% dengan konfigurasi server yang tepat. Didukung manajemen jaringan dan multiple upstream tier 1 provider network 
                serta multiple peering.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-shield-shaded"></i>
              <h4><a href="#">Jaminan keamanan</a></h4>
              <p>Keamanan menjadi fokus utama kami di Qwords. Tindakan pemantauan dan pencegahan yang berstandar & 
                berkelanjutan telah menjadi perhatian utama kami.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-brightness-high"></i>
              <h4><a href="#">Clustered DNS</a></h4>
              <p>DNS Server Cloud Hosting Qwords terhubung satu dengan yang lainnya. Hal ini membuat DNS Server akan selalu dapat di akses karena saling membackup antar server.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-gem"></i>
              <h4><a href="#">High Enterprise Server</a></h4>
              <p>Standar server Qwords adalah server kelas enterprise Dual Xeon Octa Core yang merupakan hardware kelas terbaik. Hardware ini biasa digunakan oleh perusahaan terkemuka.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-hand-thumbs-up"></i>
              <h4><a href="#">Tier 1 Network</a></h4>
              <p>Tier 1 Network merupakan jaringan dunia tanpa transit network, yang membuat jaringan lebih cepat serta jalur routing yang lebih pendek dan ketersediaan backup network.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-hourglass-split"></i>
              <h4><a href="#">Peering Network</a></h4>
              <p>Jaringan di Qwords terhubung langsung ke public peering seperti OpenIXP dan CDIX yang membuat latency atau waktu tunggu pengiriman data semakin kecil.</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Commitment Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="45000" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="48521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="38" data-purecounter-duration="1" class="purecounter"></span>
              <p>Partners</p>
            </div>
          </div>

          <div class="col-lg-3 col-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="200" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Counts Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container text-center">
        <h1>Garansi 30 Hari <span class="pumpkin">Uang Kembali</span></h1>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Apa Kata Mereka?</h2>
          <p>Apa kata mereka yang sudah menggunakan layanan web hosting Indonesia dari Qwords? Simak pengalaman mereka yang telah membuktikan sendiri fitur dari layanan kami.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            @foreach ($testimonials as $testimonial)
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  {{ $testimonial->testimonial }}
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('/img/'.$testimonial->profile_image)}}" class="testimonial-img" alt="">
                <h3>{{ $testimonial->name }}</h3>
                <h4>{{ $testimonial->known_as }}</h4>
              </div>
            </div><!-- End testimonial item -->
            @endforeach

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Payment Section ======= -->
    <section id="payment" class="payment section-bg text-center">
      <div class="container">
        <div class="row justify-content-center">
          <h5>Pilih metode e-payment otomatis. Layanan Domain, Hosting, VPS langsung aktif tanpa perlu konfirmasi bayar.</h5>
          <div class="col-12 text-center">
            <div class="img-wrapper d-lg-block d-none">
              <img loading="lazy" src="{{ asset('img/payment.png') }}" alt="Pilihan metode pembayaran hosting murah Indonesia" width="100%" height="100%">
            </div>
            <div class="img-wrapper d-lg-none d-block">
              <img loading="lazy" src="{{ asset('img/payment2.png') }}" alt="Pilihan metode pembayaran hosting murah Indonesia" width="100%" height="100%">
            </div>
              <a href="#" class="btn-view"><span>Lihat Selengkapnya &#187</span></a>
          </div>
        </div>
      </div>
    </section><!-- End Team Section -->

    <!-- ======= FAQ Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title">
          <h2>Pertanyaan seputar <span class="pumpkin">Layanan Web Hosting </span>Qwords</h2>
        </div>

        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Apa itu web hosting?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Hosting adalah tempat penyimpanan file dan data website seperti teks, video dan gambar website. File dan data tersebut di simpan di dalam server yang terkoneksi dengan internet sehingga data tersebut dapat diakses oleh siapa saja, kapan saja dan di mana saja.
                  Penjelasan lebih lanjut dapat Anda baca pada <strong><a href="https://qwords.com/blog/apa-itu-hosting/">artikel ini.</a></strong></p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Ada berapa jenis hosting di Qwords?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Untuk mendukung kesuksesan bisnis di era digital, Qwords menghadirkan beragam paket hosting Indonesia yang bisa dipilih sesuai kebutuhan.</p>
                <ul>
                  <li>
                    <strong>Value Performance</strong>
                    <p>Value Cloud Hosting merupakan paket cloud hosting murah Indonesia yang dirancang khusus untuk keperluan sederhana seperti UKM, toko online, blog, website sederhana, hingga email untuk penggunaan personal.
                    Hosting murah dari Qwords untuk pengguna baru website atau Anda yang baru terjun ke dalam industri/bisnis online. Storage sesuai kebutuhan, fleksibel, dan ekstra lega mulai 3 GB </p>
                  </li>
                  <li>
                    <strong>High Performance Cloud Hosting Bisnis</strong>
                    <p>Productivity starts here! Berikan Hosting terbaik untuk bisnis Anda. Kinerja lebih produktif dengan performa tinggi & optimal untuk website profesional perusahaan, e-commerce, startup bisnis, serta support Moodle--platform open source yang memudahkan sistem pembelajaran online.</p>
                  </li>
                  <li>
                    <strong>High Performance Cloud Hosting Enterprise</strong>
                    <p>Nikmati versi terbaik dedicated hosting melalui paket HPCH Enterprise. Tampil lebih premium dengan resource dedicated hanya untuk 1 pengguna. Performa lebih stabil, bebas gangguan dari Cloud Hosting lainnya. More productivity, less drama</p>
                  </li>
                  <li>
                    <strong>WordPress Hosting</strong>
                    <p>Hosting khusus bagi Anda yang menggunakan CMS WordPress. Dilengkapi CloudPop untuk kinerja WordPress yang optimal.
                    WordPress Hosting Indonesia yang dioptimalkan dengan CloudPOP</p>
                  </li>
                  <li>
                    <strong>Unlimited Hosting</strong>
                    <p>Paket Unlimited Hosting Indonesia yang dapat diandalkan, tanpa batasan! Free Domain & SSL Certificate dengan Uptime Server 99,99%.
                    Didukung Website Builder dan Web Accelerator dengan Module LSAPI PRO + CRIU. Akses internasional ngebut, serta garansi 30 hari uang kembali.</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Apa kelebihan dari cloud hosting Qwords?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Cloud hosting Qwords sudah dipercaya 45,000+ pelanggan dari dalam dan luar negeri. Anda akan mendapatkan jaminan keamanan, Uptime 99.99%, dukungan teknis selama 24 jam, 7 hari melalui Live chat, Call Center, atau Support Ticket dan masih banyak lagi.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                Mengapa saya perlu web hosting?
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Tanpa web hosting, Anda tidak bisa membuat website company profile, portal berita, blog pribadi, website toko online, atau jenis website lain yang bisa diakses secara online.
                Penyedia layanan web hosting seperti Qwords.com membantu memastikan data-data dan file website Anda tetap aman serta responsif ketika diakses oleh pengguna secara online.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                Bagaimana cara membeli hosting?
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Kami memiliki panduan cara membeli hosting di Qwords sesuai kebutuhan dengan mudah yang dapat Anda akses selengkapnya <strong><a href="#">di sini</a></strong>. Beli hosting Indonesia di Qwords kini juga semakin mudah dengan adanya berbagai metode pembayaran.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                Apakah saya bisa transfer Hosting ke Qwords Cloud Web Hosting Indonesia?
              </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Ya, Anda bisa melakukan transfer Hosting dari provider lain ke Qwords Cloud Hosting Indonesia. Caranya, silahkan lakukan pemesanan Cloud Hosting baru sesuai paket yang Anda inginkan, kemudian informasikan kebutuhan migrasi pada tim support kami, lalu proses migrasi akan dibantu hingga selesai.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

</main><!-- End #main -->
    
@endsection