<div class="bg-banner-icons">
    <div class="container">
        <div class="banner-icons">
            @foreach ($imagesBannerIcons as $image)
            <div class="banner-icon">
                <img src="{{ asset('images/' . $image['url']) }}" alt="{{ $image['text'] }}">
                <p>{{ $image['text'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
