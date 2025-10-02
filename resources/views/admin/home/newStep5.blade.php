@extends('layouts.app')
@section('timeline')
    <x-timeline :active="5" />
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
        <div class="card text-dark bg-info mb-3 rounded mt-4 p-4">
            <form>
                <div class="card-header">Meals Summary</div>
                <div class="card-body">
                    <ul>
                        <li>Total breakfast meals: X3 (Provided by Accomodation)</li>
                        <li>Total lunch meals: X3</li>
                        <li>Total supper meals: X3</li>
                        <li>Total meal funds: $50,000</li>
                    </ul>
                </div>
                {{-- Buttons --}}
                <div class="d-flex justify-content-end gap-2">
                    <button type="button" class="btn btn-outline-secondary">Cancel</button>
                    <button type="button" class="btn btn-teal"
                        onclick="window.location.href='{{ route('admin.newStep6') }}'">
                        Next
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

<style>
    .card-header {
        color: white !important;
        font-size: 32px !important;
    }

    .card-body ul li {
        color: white !important;
        font-size: 22px !important;
    }
</style>
