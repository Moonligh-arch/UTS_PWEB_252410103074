@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<section class="profile-section">

    <div class="page-heading">
        <div>
            <h1>Your <span>Profile.</span></h1>
            <p>Informasi akun dan preferensi watchlist milikmu.</p>
        </div>
    </div>

    <div class="profile-card">

        <div class="profile-header">

            <div class="profile-avatar">
                {{ $inisial }}
            </div>

            <div class="profile-identity">
                <h2>{{ $username }}</h2>
                <span>Username</span>
            </div>

            <a href="{{ route('login') }}" class="logout-button">
                Logout <span>→</span>
            </a>

        </div>

        <div class="profile-divider"></div>

        <div class="profile-information">

            <div class="section-heading">
                <h2>Account Details</h2>
            </div>

            <div class="row g-3">

                @foreach($detailProfil as $detail)

                    <div class="col-12 col-md-6">

                        <div class="profile-info-item">

                            <span>{{ $detail['label'] }}</span>

                            <strong>{{ $detail['value'] }}</strong>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </div>

</section>

@endsection