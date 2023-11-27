<section id="section-search-domain" class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 text-center">
        <h2 class="text-white fw-bold">Cari Nama Domainmu</h2>
        <p class="text-white">
          Nama Domain digunakan untuk mempermudah pengunjung<br>
          menuju ke situs Anda. Pilih nama domain yang paling<br>
          mencerminkan bisnis, produk, atau layanan Anda.
        </p>
      </div>
    </div>
    <form class="row justify-content-center mt-4">
      <div class="col-12 col-sm-7 col-md-7 col-lg-8">
        <div class="input-group input-group-lg">
          <input type="text" class="form-control border-0" name="domain" placeholder="Cari nama domain Anda">
        </div>
      </div>
      <div class="col-12 col-sm-5 col-md-5 col-lg-2 mt-3 mt-sm-0">
        <div class="input-group input-group-lg">
          <select class="form-select border-0">
            <option selected value=".id">.id</option>
          </select>
        </div>
      </div>
      <div class="col-12 col-lg-2 mt-3 mt-lg-0">
        <div class="d-grid">
          <button type="button" class="btn btn-lg btn-dark">Cari</button>
        </div>
      </div>
    </form>
    <div class="row justify-content-center mt-5">
      <div class="col-12 text-center text-white">
        <div class="d-flex flex-wrap justify-content-around justify-content-lg-center gap-3">
          <x-app-content-domain name=".com" price="Rp 165.000" />
          <div class="d-none d-sm-block vr"></div>
          <x-app-content-domain name=".id" price="Rp 225.000" />
          <div class="d-none d-sm-block vr"></div>
          <x-app-content-domain name=".info" price="Rp 77.000" />
        </div>
      </div>
    </div>
  </div>
</section>
