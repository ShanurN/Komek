<x-layouts.app :title="'KOMEK BY TICKET - Кинотеатр'">
    <div class="hero-banner">
    </div>

    <x-header />
    <x-nav />
    <x-filter-tabs />

    <main class="main-content">
        <div class="movies-grid">
            @foreach($movies as $movie)
                <x-movie-card 
                    :title="$movie->title"
                    :genre="$movie->genre"
                    :poster="asset($movie->poster)"
                    :rating="$movie->rating"
                    :badge="$movie->badge"
                    :showtimes="$movie->showtimes"
                />
            @endforeach
        </div>
    </main>

    <x-footer />

    @push('scripts')
    <script>
        const tabs = document.querySelectorAll('.tab');
        tabs.forEach(tab => {
            tab.addEventListener('click', function () {
                tabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');
            });
        });

        const showtimeBtns = document.querySelectorAll('.showtime-btn');
        showtimeBtns.forEach(btn => {
            btn.addEventListener('mouseenter', () => {
                btn.style.transform = 'translateY(-3px)';
            });
            btn.addEventListener('mouseleave', () => {
                btn.style.transform = 'translateY(0)';
            });
        });
    </script>
    @endpush
</x-layouts.app>