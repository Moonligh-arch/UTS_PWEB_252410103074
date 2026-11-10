@extends('layouts.app')

@section('title', 'Watchlist')

@section('content')

<section class="management-section">

    <div class="page-heading">

        <div>
            <span class="eyebrow">YOUR COLLECTION</span>

            <h1>Anime <span>Watchlist.</span></h1>

            <p>
                Hai {{ $username }}, berikut daftar anime
                yang tersimpan dalam koleksimu.
            </p>
        </div>

        <div class="collection-counter">
            <span>DISPLAYING</span>
            <strong>{{ count($daftarAnime) }}</strong>
            <small>Anime</small>
        </div>

    </div>

    <div class="filter-panel">

        <form
            action="{{ route('pengelolaan') }}"
            method="GET"
            class="row g-3 align-items-end"
        >

            <input
                type="hidden"
                name="username"
                value="{{ $username }}"
            >

            <div class="col-12 col-md-6">

                <label for="status" class="form-label">
                    Filter Status
                </label>

                <select
                    name="status"
                    id="status"
                    class="form-select custom-input"
                >

                    @foreach($opsiStatus as $opsi)

                        <option
                            value="{{ $opsi }}"
                            {{ $statusDipilih === $opsi ? 'selected' : '' }}
                        >
                            {{ $opsi }}
                        </option>

                    @endforeach

                </select>

            </div>

            <div class="col-12 col-md-auto">

                <button type="submit" class="btn primary-button">
                    Terapkan Filter
                    <span>→</span>
                </button>

            </div>

        </form>

    </div>

    <div class="row g-3 mt-2">

        @forelse($daftarAnime as $anime)

            <div class="col-12 col-md-6 col-xl-4">

                <div class="anime-card h-100">

                    <div class="anime-card-top">

                        <img
                            src="{{ asset('images/' . $anime['gambar']) }}"
                            alt="Poster {{ $anime['judul'] }}"
                            class="anime-poster"
                            loading="lazy"
                        >

                        <div class="anime-status">

                            @if($anime['status'] === 'Selesai')

                                <span class="status-badge status-finished">
                                    Selesai
                                </span>

                            @elseif($anime['status'] === 'Ditonton')

                                <span class="status-badge status-watching">
                                    Ditonton
                                </span>

                            @else

                                <span class="status-badge status-planned">
                                    Rencana
                                </span>

                            @endif

                        </div>

                    </div>

                    <div class="anime-card-body">

                        <h3>{{ $anime['judul'] }}</h3>

                        <p class="anime-genre">
                            {{ $anime['genre'] }}
                        </p>

                        <div class="anime-information">

                            <div>
                                <span>EPISODE</span>
                                <strong>{{ $anime['episode'] }} Eps</strong>
                            </div>

                            <div class="anime-rating">
                                <span>RATING</span>

                                @if($anime['rating'] !== null)

                                    <strong>
                                        <span>★</span>
                                        {{ number_format($anime['rating'], 1) }}
                                    </strong>

                                @else

                                    <strong>Belum dinilai</strong>

                                @endif
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        @empty

            <div class="col-12">

                <div class="empty-state">
                    <div>✧</div>
                    <h3>Belum ada anime di kategori ini.</h3>
                    <p>
                        Coba pilih status lain untuk melihat koleksi anime.
                    </p>

                    <a
                        href="{{ route('pengelolaan', ['username' => $username]) }}"
                        class="btn primary-button"
                    >
                        Tampilkan Semua
                    </a>
                </div>

            </div>

        @endforelse

    </div>

</section>

@endsection