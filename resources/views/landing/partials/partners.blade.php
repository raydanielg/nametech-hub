<section class="partners-section py-5 bg-light border-top border-bottom">
    <div class="container">
        <p class="text-center text-uppercase text-muted small fw-bold tracking-widest mb-4">Trusted by Industry Leaders</p>
        <div class="d-flex flex-wrap justify-content-center align-items-center gap-4 gap-md-5 opacity-50">
            @foreach($partners as $partner)
                <div class="partner-item fw-bold text-dark h5 mb-0" title="{{ $partner->name }}">
                    {{ $partner->name }}
                </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    .partner-item {
        transition: all 0.3s;
        cursor: default;
    }
    .partner-item:hover {
        opacity: 1;
        transform: translateY(-2px);
    }
</style>
