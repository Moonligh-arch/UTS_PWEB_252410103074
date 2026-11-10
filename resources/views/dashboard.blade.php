@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<section class="dashboard-section">

    <div class="welcome-panel">

        <div class="welcome-content">

            <span class="eyebrow">DASHBOARD</span>

            <h1>
                Halo, <span>{{ $username }}</span>.
            </h1>

            <p>
                Berikut ringkasan koleksi anime yang kamu kelola.
            </p>

            <a
                href="{{ route('pengelolaan', ['username' => $username]) }}"
                class="btn primary-button"
            >
                Lihat Watchlist →
            </a>

        </div>

    </div>

    <div class="section-heading">

        <h2>Watchlist Overview</h2>

        <p>Ringkasan koleksi anime berdasarkan status tontonan.</p>

    </div>

    <div class="row g-3">

        @foreach($ringkasan as $item)

            <div class="col-6 col-xl-3">

                @include('partials.kartu-ringkasan', [
                    'item' => $item
                ])

            </div>

        @endforeach

    </div>

</section>

@endsection