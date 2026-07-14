@extends('layouts.app')

@section('content')

<div class="container">

    <h3 class="mb-4">
        تنظیمات فروشگاه
    </h3>

    @if(session('success'))

        <div class="alert alert-success">

            {{ session('success') }}

        </div>

    @endif

    <form method="POST" action="{{ route('settings.update') }}">

        @csrf

        <div class="mb-3">

            <label class="form-label">

                نام فروشگاه

            </label>

            <input
                type="text"
                class="form-control"
                name="store_name"
                value="{{ $settings['store_name'] ?? '' }}"
            >

        </div>

        <div class="mb-3">

            <label class="form-label">

                شماره تماس

            </label>

            <input
                type="text"
                class="form-control"
                name="phone"
                value="{{ $settings['phone'] ?? '' }}"
            >

        </div>

        <div class="mb-3">

            <label class="form-label">

                آدرس

            </label>

            <textarea
                class="form-control"
                rows="3"
                name="address"
            >{{ $settings['address'] ?? '' }}</textarea>

        </div>

        <button class="btn btn-primary">

            ذخیره تنظیمات

        </button>

    </form>

</div>

@endsection