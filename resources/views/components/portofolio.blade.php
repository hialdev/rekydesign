<a href="{{ route('portofolio.show',$porto->slug) }}" class="item text-dark text-decoration-none">
    <img src="{{ Voyager::image($porto->image) }}" alt="{{ $porto->title }}">
    <h6 class="fw-bold mt-4">{{ $porto->title }}</h6>
</a>