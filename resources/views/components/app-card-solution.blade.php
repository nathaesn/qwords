<div class="card shadow text-center p-4">
  <div class="card-body">
    <img data-lazyloaded="1" src="{{ url($image) }}" loading="lazy" data-src="{{ url($image) }}" alt="company"
      data-ll-status="loaded" width="200">
    <h5 class="card-title text-qw-primary fw-bold mt-3">{{ $title }}</h5>
    <p class="card-text">{{ $description }}</p>
  </div>
</div>
