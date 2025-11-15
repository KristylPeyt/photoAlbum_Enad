@extends('pages.layout')

@section('content')
<center><h1 class="category-title">{{ $title }}</h1></center>
&nbsp;
&nbsp;

<a class="back" href="{{ route('home') }}">← Back to Home</a>

<div class="photo-grid">
    @foreach($images as $img)
        <div class="photo-card">
            <img src="{{ asset($img['url']) }}" alt="{{ $img['title'] }}">
            <div class="caption-container">
                <strong>{{ $img['title'] }}</strong>
                <p>{{ $img['caption'] ?? '' }}</p>
            </div>
        </div>
    @endforeach
</div>
@endsection
