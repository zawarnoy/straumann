@extends('layouts.layout')

@section('title', $category->name)

@section('additional_styles')
    <link rel="stylesheet" href="{{ asset('css/categories.css') }}">
@endsection

@section('content')
    <section id="content">
        @if ($category->page_image)
            <div class="image-wrapper">
                <div class="thumbnail category-image">
                    <img src="{{ \TCG\Voyager\Facades\Voyager::image($category->page_image) }}" alt="content">
                    <div class="image-text">Библиотека</div>
                </div>
                @if ($category->page_image_description)
                    <div class="image-description">{{ $category->page_image_description }}</div>
                @endif
            </div>
        @endif

        <div class="inner">

            <div class="bt">
                <span>{{ $category->name }}</span>
            </div>

            <div class="documents-list">
                @foreach($category->documents as $document)

                    <div class="document-area">
                        <img src="{{ !empty($document->image) ? \TCG\Voyager\Facades\Voyager::image($document->image) : asset('img/doc.ico') }}"
                             alt="">
                        <div class="document-data">

                            <a class="document-link"
                               href="/storage/{{ json_decode($document->file)[0]->download_link}}">{{ $document->name }}</a>

                            <div class="document-description">
                                {{ $document->description }}
                            </div>

                            <div class="meta">
                                <i class="fa fa-calendar"></i>
                                <span> {{ date('d-m-Y', strtotime($document->created_at)) }}</span>

                                <span>
                            <i class="fa fa-download"></i>
                            <a class=""
                               href="/storage/{{ json_decode($document->file)[0]->download_link}}"> Скачать</a>
                            </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="inner">
            <div class="text">
                {!!  $category->body !!}
                <div class="clearfix"></div>
            </div>
            <div class="nav">
                @if ($previous)
                    <a href="{{ url($previous) }}" class="prev">{{ $previousTitle }}</a>
                @endif
                @if ($next)
                    <a href="{{ url($next) }}" class="next">{{ $nextTitle }}</a>
                @endif
            </div>
            <div class="actions">

                <script src="https://platform-api.sharethis.com/js/sharethis.js#property=5d0960691449a300127e1ae4&product=inline-follow-buttons">

                </script>
                <div class="sharethis-inline-follow-buttons"></div>

                <div class="clearfix"></div>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>

@endsection