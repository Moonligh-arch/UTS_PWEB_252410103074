@extends('layouts.app')

@section('title', 'Login')

@section('content')

<section class="login-section">

    <div class="login-card">

        <div class="login-heading">

            <h1>Login</h1>

            <p>
                Masukkan username untuk membuka watchlist.
            </p>

        </div>

        <form action="{{ route('dashboard') }}" method="GET">

            <div class="mb-3">

                <label for="username" class="form-label">
                    Username
                </label>

                <input
                    type="text"
                    class="form-control custom-input"
                    id="username"
                    name="username"
                    placeholder="Masukkan username"
                    autocomplete="username"
                    required
                >

            </div>

            <div class="mb-4">

                <label for="password" class="form-label">
                    Password
                </label>

                <input
                    type="password"
                    class="form-control custom-input"
                    id="password"
                    placeholder="Masukkan password"
                    autocomplete="off"
                >

                <small class="input-note">
                    Masukin asal saja.
                </small>

            </div>

            <button type="submit" class="btn login-button w-100">
                Login →
            </button>

        </form>

    </div>

</section>

@endsection