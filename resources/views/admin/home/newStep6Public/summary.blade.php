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
        <div class="card text-dark bg-info mb-3 rounded mt-4 p-4">
            <form>
                <div class="card-header">Bus Summary</div>
                <div class="card-body">
                    <p>
                        You will be notified once a bus has been assigned to you with all the travel details.
                    </p>
                </div>
                {{-- Buttons --}}
                <div class="d-flex justify-content-end gap-2">
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

    .card-body p {
        color: white !important;
        font-size: 22px !important;
    }
</style>
