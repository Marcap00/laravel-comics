<footer>
    <div class="bg-footer-bottom">
        <div class="container">
            <div class="footer-bottom">
                <button type="button">SIGN-UP NOW!</button>
                <div class="social">
                    <h3>FOLLOW US</h3>
                    @foreach ($imagesFooter as $image)
                    <img src="{{ Vite::asset('resources/images/footer-' . $image['imageUrl'] . '.png') }}" alt="{{ $image['alt'] }}">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</footer>
