@extends('layouts.app')

{{-- Meta Tag --}}
@section('metakey',$meta->get('portofolio')->metakey)
@section('title',$meta->get('portofolio')->metatitle)
@section('metadesc',$meta->get('portofolio')->metadesc)
@section('metaimage',$meta->get('portofolio')->metaimage)
{{-- end Meta --}}

@section('content')
<section class="py-5" style="background-color: #F7F7F7;">
    <div class="container mb-4">
        <h2 class="fw-bold">{{ $content->get('portofolio-title')->content }}</h2>
    </div>
    <div class="container">
        <div class="masonry">
            @foreach ($portofolio as $porto)
                @include('components.portofolio',['porto'=>$porto])
            @endforeach
        </div>
    </div>
</section>
@endsection