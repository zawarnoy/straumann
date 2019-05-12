@extends('layouts.layout')

@section('title', $category->name)

@section('content')

    <section id="page__title">
        <div class="inner">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="#">Главная - </a></li>
                    <li><a href="{{route('categories.index')}}">Категории - </a></li>
                    <li><a href="{{route('categories.show', ['slug' => $category->slug])}}">{{ $category->name }}</a>
                    </li>
                </ul>
            </div>
            <div class="bt"><span>{{ $category->name }}</span></div>
            <div class="clearfix"></div>
        </div>
    </section>

    <section id="content">
        @if ($category->page_image)
            <div class="image-wrapper">
                <div class="thumbnail">
                    <img src="{{ \TCG\Voyager\Facades\Voyager::image($category->page_image) }}" alt="content">
                </div>
                @if ($category->page_image_description)
                    <div class="image-description">{{ $category->page_image_description }}</div>
                @endif
            </div>
        @endif

        <div class="inner">

            <div class="bt">
                <span>Документы</span>
            </div>

            <div class="documents-list">
                @foreach($category->documents as $document)
                    <div class="document-area">
                        <img src="{{ !empty($document->image) ? \TCG\Voyager\Facades\Voyager::image($document->image) : asset('img/document.png') }}" alt="">
                        <div class="document-data">
                            <a class="document-link"
                               href="/storage/{{ json_decode($document->file)[0]->download_link}}">{{ $document->name }}</a>

                            <div class="document-description">
                                {{ $document->description }}
                            </div>

                            <div class="meta">
                                <i class="fa fa-calendar"></i>
                                <span>{{ date('d-m-Y', strtotime($document->created_at)) }}</span>

                                <span>
                            <i class="fa fa-download"></i>
                            <a class=""
                               href="/storage/{{ json_decode($document->file)[0]->download_link}}">Скачать</a>
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
                    <a href="{{ url($previous) }}" class="prev">Предыдущая</a>
                @endif
                @if ($next)
                    <a href="{{ url($next) }}" class="next">Следующая</a>
                @endif
            </div>
            <div class="actions">

                <div class="share">
                    <span>Соц. сети:</span>
                    <ul>
                        <li><a href="#" target="_blank"><img src="{{ asset('img/facebook.png') }}" alt="facebook"></a>
                        </li>
                        <li><a href="#" target="_blank"><img src="{{ asset('img/instagram.png') }}" alt="instagram"></a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>

@endsection