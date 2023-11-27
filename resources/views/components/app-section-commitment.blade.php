<section id="section-commitment" class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-6 text-center">
        <h2 class="fw-bold fs-1 mb-3">
          Komitmen <span class="text-qw-primary">Qwords</span>
        </h2>
        <p>Berbagai alasan mengapa pelanggan memilih sewa hosting di Qwords</p>
      </div>
    </div>
    <div class="row justify-content-center mt-4">
      <div class="col-12 col-md-6 col-lg-4 mb-3">
        <x-app-card-solution
          image="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/call.webp"
          title="Layanan 24/7"
          description="Tim Technical Support dan Customer Service Qwords siap membantu Anda selama 24 jam, 7 hari. Anda dapat menghubungi melalui Live chat, Call Center, dan Support Ticket." />
      </div>
      <div class="col-12 col-md-6 col-lg-4 mb-3">
        <x-app-card-solution
          image="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/book.webp"
          title="Panduan Manual Lengkap"
          description="Qwords dilengkapi dengan halaman knowledge base berisi tutorial dan tips seputar pengelolaan website dan hosting. Dapat diakses dengan mudah dan solutif" />
      </div>
      <div class="col-12 col-md-6 col-lg-4 mb-3">
        <x-app-card-solution
          image="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/router.webp"
          title="Up time 99.99%"
          description="Uptime Network & Server di atas 99. 99% dengan konfigurasi server yang tepat. Didukung manajemen jaringan dan multiple upstream tier 1 provider network serta multiple peering." />
      </div>
      <div class="col-12 col-md-6 col-lg-4 mb-3">
        <x-app-card-solution
          image="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/guard.webp"
          title="Jaminan keamanan"
          description="Keamanan menjadi fokus utama kami di Qwords. Tindakan pemantauan dan pencegahan yang berstandar & berkelanjutan telah menjadi perhatian utama kami." />
      </div>
      <div class="col-12 col-md-6 col-lg-4 mb-3">
        <x-app-card-solution
          image="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/networkAlt.webp"
          title="Clustered DNS"
          description="DNS Server Cloud Hosting Qwords terhubung satu dengan yang lainnya. Hal ini membuat DNS Server akan selalu dapat di akses karena saling membackup antar server." />
      </div>
      <div class="col-12 col-md-6 col-lg-4 mb-3">
        <x-app-card-solution
          image="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/diamond.webp"
          title="High Enterprise Server"
          description="Standar server Qwords adalah server kelas enterprise Dual Xeon Octa Core yang merupakan hardware kelas terbaik. Hardware ini biasa digunakan oleh perusahaan terkemuka." />
      </div>
      <div class="col-12 col-md-6 col-lg-4 mb-3">
        <x-app-card-solution
          image="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/router.webp"
          title="Tier 1 Network"
          description="Tier 1 Network merupakan jaringan dunia tanpa transit network, yang membuat jaringan lebih cepat serta jalur routing yang lebih pendek dan ketersediaan backup network." />
      </div>
      <div class="col-12 col-md-6 col-lg-4 mb-3">
        <x-app-card-solution
          image="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/network.webp"
          title="Peering Network"
          description="Jaringan di Qwords terhubung langsung ke public peering seperti OpenIXP dan CDIX yang membuat latency atau waktu tunggu pengiriman data semakin kecil." />
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function() {
        var navbar = $("#navbar");
        var targetDiv = $(".content"); // Adjust this selector based on your actual target div

        $(window).scroll(function() {
            var scrollPosition = $(window).scrollTop();
            var targetDivTop = targetDiv.offset().top;

            if (scrollPosition >= targetDivTop) {
                navbar.addClass("fixed");
            } else {
                navbar.removeClass("fixed");
            }
        });
    });
</script>
</section>
