@extends('layouts.app')
@section('timeline')
    <x-timeline :active="4" />
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
        <div class="card rounded shadow-sm mt-4 p-4">
            <form>


                <p>Select your type of accomodation</p>

                {{-- Buttons --}}
                <div class="d-flex justify-content-start gap-2">
                    <button type="button" class="btn btn-teal"
                        onclick="window.location.href='{{ route('admin.newStep4AccomodationProven') }}'">
                        Proven
                    </button>
                    <button type="button" class="btn btn-teal"
                        onclick="window.location.href='{{ route('admin.newStep4AccomodationUnProven') }}'">
                        Unproven
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
