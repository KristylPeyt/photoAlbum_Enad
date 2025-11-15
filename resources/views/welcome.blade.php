@extends('pages.layout')

@section('content')
<center>
        <section class="hero">
  <div class="hero-content">
    <h2>Explore the Beauty of the Philippines</h2>
    <p>Click a category below to view its photos</p>
    </div>
  </div>
</section>
</center>
<!-- Preview images -->
        <div class="preview-grid">
            @foreach($categories as $slug => $name)
                <div class="preview-category">
                    <h4>{{ $name }}</h4>
                    <div class="photo-preview">
                        @foreach($previews[$slug] as $img)
                            <a href="{{ route('category', $slug) }}">
                                <img src="{{ $img['url'] }}" alt="{{ $img['title'] }}" style="width:100%; height:100px; object-fit:cover;">
                            </a>

                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection

