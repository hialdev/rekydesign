<div class="quote-item border p-3 px-4 d-flex flex-column flex-lg-row align-items-center gap-3" style="border-radius: 20px;">
    <span class="iconify quote-icon" style="font-size: 42px;" data-icon="fa-solid:quote-right"></span>
    <div class="profile mt-n3">
        <img src="{{ Voyager::image($quote->image) }}" alt="{{ $quote->name }}" class="rounded-circle" style="width: 9em;height:9em;object-fit:cover">
    </div>
    <div class="say">
        <h6 class="fw-bold">{{ $quote->name }}</h6>
        <q>{{ $quote->quote }}</q>
        <div class="rate">
            @for ($i = 0; $i < $quote->rating; $i++)
                <span class="iconify" data-icon="bi:star-fill"></span>
            @endfor
        </div>
    </div>
</div>