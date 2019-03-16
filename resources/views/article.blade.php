@extends('layouts.layout')

@section('title', 'Title')

@section('content')

	<section id="page__title">
		<div class="inner">
			<div class="breadcrumbs">
				<ul>
					<li><a href="#">Главная - </a></li>
					<li>Статьи</li>
				</ul>
			</div>
			<div class="bt"><span>{{ $post->title }}</span></div>
			<div class="clearfix"></div>
		</div>
	</section>

	<section id="content">
		<div class="thumbnail">
			<img src="{{ asset('img/content.jpg') }}" alt="content">
		</div>
		<div class="inner">
			<div class="text">

				{!!  $post->body !!}

				<div class="clearfix"></div>
			</div>

			<div class="actions">
				<p class="prev"><a href="#">Atgal į naujienų sąrašą</a></p>
				<div class="share">
					<span>Buvo naudinga. Pasidalinkite:</span>
					<ul>
						<li><a href="#" target="_blank"><img src="{{ asset('img/facebook.png') }}" alt="facebook"></a></li>
						<li><a href="#" target="_blank"><img src="{{ asset('img/instagram.png') }}" alt="instagram"></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="clearfix"></div>
		</div>
	</section>

@stop