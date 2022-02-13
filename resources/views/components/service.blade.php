<a href="{{ route('service.show',$service->slug) }}" class="text-decoration-none d-block text-dark g-col-6 g-col-md-3">
    <div class="m-auto my-2 bg-white hover-shadow" style="border-radius:20px">
        <img src="{{ Voyager::image($service->image) }}" alt="{{ $service->title }}" class="w-100" style="height:12em;object-fit:cover;border-radius:20px">
        <div class="py-3 fw-bold text-center">{{ $service->title }}</div>
    </div>
</a>