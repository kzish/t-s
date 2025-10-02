@extends('layouts.app')
@section('timeline')
    <x-timeline :active="6" />
@endsection
@section('breadcrumbs')
    @php
        $breadcrumbs = [
            ['label' => 'Home', 'url' => route('admin.dash')],
            ['label' => 'New T&S Application'], // active
        ];
    @endphp
    <x-breadcrumbs :items="$breadcrumbs" />
@endsection
@section('content')
    <div class="my-4">
        {{-- Card --}}
        <div class="card text-dark bg-info mb-3 rounded mt-4 p-4 center-card">
            <form>
                <div class="card-body">
                    <div class="teal-bg">
                        <div class="title">Success</div>
                        <div class="body">Your travelling & subsistance Application has been submitted usccessfully!</div>
                    </div>
                    <img class="tick" src="{{ asset('img/tick.png') }}" />
                </div>
                {{-- Buttons --}}
                <div class="d-flex justify-content-end gap-2">
                    <button type="button" class="btn btn-teal"
                        onclick="window.location.href='{{ route('admin.newStep6') }}'">
                        Done
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

<style>
    .card-body .body {
        color: white !important;
        font-size: 22px !important;
    }

    .card-body .title {
        color: white !important;
        font-size: 32px !important;
    }

    .teal-bg {
        text-align: center;
        padding: 50px;
    }

    .tick {
        height:150px;
        height:150px;
        text-align: center;
    }
</style>
