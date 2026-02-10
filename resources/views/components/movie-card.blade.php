@props(['title', 'genre', 'poster', 'rating', 'badge' => null, 'showtimes' => []])

<div class="movie-card">
    <div class="movie-poster">
        <img src="{{ $poster }}" alt="{{ $title }}" class="poster-image">
        @if($rating)
            <div class="age-rating">{{ $rating }}</div>
        @endif
        @if($badge)
            <div class="movie-badge">{{ $badge }}</div>
        @endif
    </div>
    <div class="movie-info">
        <h3 class="movie-title">{{ $title }}</h3>
        <div>
            @foreach(explode(',', $genre) as $g)
                <span class="movie-genre">{{ trim($g) }}</span>
            @endforeach
        </div>
        <div class="movie-showtimes">
            @foreach($showtimes as $showtime)
                <div class="showtime-container">
                    <button class="showtime-btn">
                        <span class="showtime-time">{{ is_array($showtime) ? $showtime['time'] : $showtime->time }}</span>
                        <span class="showtime-meta">{{ is_array($showtime) ? $showtime['meta'] : $showtime->meta }}</span>
                    </button>
                    <div class="showtime-hall">{{ is_array($showtime) ? $showtime['hall'] : $showtime->hall }}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>
