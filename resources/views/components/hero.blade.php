<div class="col-12" style="background-image: linear-gradient(rgba(3, 3, 3, 0.52), rgba(0, 0, 0, 0.73)),url('{{ Voyager::image($hero->background) }}');background-size:cover;background-position:center;width:100%">
    <div class="container d-flex align-items-center justify-content-start" style="height:83vh !important;">
        <div class="col-12 col-md-6 col-lg-5 px-5 px-md-0">
            <h1>{{ $hero->title }}</h1>
            <p>{{ $hero->desc }}</p>
            <a href="{{ $hero->url_button }}" class="btn btn-primary">{{ $hero->button }}</a>
        </div>
    </div>
</div>