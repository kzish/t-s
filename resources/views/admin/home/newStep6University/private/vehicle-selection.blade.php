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
        <div class="card text-dark bg-light mb-3 rounded mt-4 p-4 center-card">
            <form>
                <div class="card-body">
                    <p>
                        Select the vehicle registration number you will be using
                    </p>
                    <select class="form-select" aria-label="Default select example">
                        <option selected></option>
                        <option value="1">AEJ-123</option>
                        <option value="2">BJS_321</option>
                        <option value="3">JKL-223</option>
                    </select>
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
