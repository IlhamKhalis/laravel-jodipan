@extends('layout.app')

@section('content')

<div class="page-header min-vh-80" style="background-image: url('{{ asset('assets/img/kww/IMG_0224.PNG') }}')">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="text-center">
                    <h1 class="text-white">Kampung Warna Warni</h1>
                    <h3 class="text-white">Jodipan</h3>
                </div>
            </div>
        </div>
    </div>
  </div>

  <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
  <div class="container">
    <div class="section text-center">
      <h2>FAQs</h2>
    </div>
    <div class="faqs">
      <div class="accordion">
        <div class="accordion-item">
          <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Bolehkah saya membawa hewan peliharaan saya ke Jodipan?</span><span class="icon" aria-hidden="true"></span></button>
          <div class="accordion-content">
            <p>Ya, hewan peliharaan diperbolehkan di Desa Wisata Warna-warni Jodipan, namun pastikan hewan tersebut diikat dan Anda membersihkannya untuk menjaga kebersihan desa.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Apakah ada spot tersembunyi atau objek wisata yang kurang dikenal di Jodipan?</span><span class="icon" aria-hidden="true"></span></button>
          <div class="accordion-content">
            <p>Selain spot foto utama, jelajahi gang-gang sempit di mana anda akan menemukan mural unik dan karya seni lokal yang tidak terlalu ramai.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">Kapan waktu terbaik untuk mengambil foto?</span><span class="icon" aria-hidden="true"></span></button>
          <div class="accordion-content">
            <p>Waktu terbaik untuk mengambil foto adalah pada saat golden hour, yaitu satu jam pertama setelah matahari terbit dan satu jam terakhir sebelum matahari terbenam. Pencahayaannya lebih lembut dan menciptakan efek magis pada dinding berwarna-warni.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">Bisakah saya menemukan jajanan atau minuman lokal yang unik?</span><span class="icon" aria-hidden="true"></span></button>
          <div class="accordion-content">
            <p>Ya, cobalah makanan khas setempat, "Es Dawet", makanan penutup dingin tradisional Indonesia yang terbuat dari tepung beras, disajikan dengan santan dan gula palem, atau cobalah "Rujak Cingur", salad buah dan sayuran lokal dengan saus kacang yang tajam.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">Apakah ada cerita atau legenda lokal yang berhubungan dengan Jodipan?</span><span class="icon" aria-hidden="true"></span></button>
          <div class="accordion-content">
            <p>Penduduk setempat percaya bahwa transformasi Jodipan telah membawa keberuntungan bagi masyarakat, mengubahnya dari kawasan terbengkalai menjadi tempat wisata dinamis yang telah mengangkat semangat dan perekonomian warganya.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Apakah ada kegiatan inisiatif ramah lingkungan di Jodipan?</span><span class="icon" aria-hidden="true"></span></button>
          <div class="accordion-content">
            <p>Ya, Jodipan memiliki program daur ulang berbasis komunitas. Warga membuat karya seni dan kerajinan dari bahan daur ulang, yang kemudian dijual kepada pengunjung. Inisiatif ini membantu menjaga desa tetap bersih dan mendorong keberlanjutan.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Dapatkah saya berpartisipasi dalam kegiatan atau lokakarya lokal?</span><span class="icon" aria-hidden="true"></span></button>
          <div class="accordion-content">
            <p>Ya, Jodipan sesekali menawarkan lokakarya tentang seni dan kerajinan tradisional Indonesia. Tanyakan kepada pemandu lokal atau pusat komunitas untuk jadwal atau ketersediaan.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">Bagaimana suasana malam hari di Jodipan?</span><span class="icon" aria-hidden="true"></span></button>
          <div class="accordion-content">
            <p>Meskipun Jodipan lebih sering dikunjungi pada siang hari, pada malam hari tempat ini berubah menjadi tempat yang tenang dan tenteram. Beberapa area menyala, memberikan pengalaman berbeda namun sama-sama menawan. Namun, sebaiknya berkunjung sebelum gelap karena sebagian besar objek wisata tutup pada pukul 18.00.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">Apakah ada oleh-oleh unik yang harus saya perhatikan?</span><span class="icon" aria-hidden="true"></span></button>
          <div class="accordion-content">
            <p>Carilah replika miniatur rumah Jodipan yang dilukis dengan tangan dan dibuat oleh pengrajin lokal. Mereka dijadikan kenang-kenangan unik dan penuh warna yang mencerminkan esensi desa.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

@endsection
