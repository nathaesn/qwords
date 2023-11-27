<div class="row justify-content-center align-items-center mb-5 mb-lg-3 from-left">
  <div class="order-2 {{ $isLeft ? 'order-lg-1' : 'order-lg-2' }} col-12 col-lg-6">
    <div class="header-quote">
      <h5>{{ $quote }}</h5>
    </div>
    <div class="quote-details">
      <p class="fst-italic">{{ $quoteDetail }}</p>
    </div>
    <div class="author-name ms-5">
      <h6 class="d-inline me-3">{{ $authorName }}</h6>
      <span class="small text-muted">{{ $authorDescription }}</span>
    </div>
    <div class="mt-2">
      <a href="{{ $videoUrl }}" class="btn btn-qw-transparent ms-4">
        <span class="me-1">Lihat Video Selengkapnya</span>
        <i class="bi bi-arrow-right"></i>
      </a>
    </div>
  </div>
  <div class="order-1 {{ $isLeft ? 'order-lg-2' : 'order-lg-1' }} col-12 col-lg-6 mb-3 mb-lg-5">
    <div class="img-wrapper mx-auto rounded-4 p-3">
      <img data-lazyloaded="1" data-placeholder-resp="100%x100%" src="{{ $imageUrl }}" loading="lazy"
        data-src="{{ $imageUrl }}" alt="testi1.webp" width="100%" height="100%" data-ll-status="loaded"
        class="entered litespeed-loaded"><noscript><img loading="lazy" src="{{ $imageUrl }}" alt="testi1.webp"
          width="100%" height="100%"></noscript>
    </div>
  </div>
</div>
