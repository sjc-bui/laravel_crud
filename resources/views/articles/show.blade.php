@extends('articles.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Article detail</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('articles.index') }}" class="btn btn-info">Back</a>
        </div>
    </div>
</div>

<h4>{{ $article->topic }}</h4>
<p>{{ $article->description }}</p>
<p>{{ $article->categorie }}</p>

@endsection
