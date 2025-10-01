@extends('layouts.app')



@section('content')
    <h1 class="mb-4">Dashboard</h1>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="d-flex gap-2">
                <a href="{{ route('admin.index') }}" class="btn btn-teal flex-fill text-center">
                    University
                </a>
                <a href="{{ route('admin.index') }}" class="btn btn-teal flex-fill text-center">
                    Personal
                </a>
            </div>
        </div>
    </div>
@endsection

@section('breadcrumbs')
    @php
        $breadcrumbs = [
            ['label' => 'Home', 'url' => route('admin.dash')],
            ['label' => 'Dashboard'], // active
        ];
    @endphp
    <x-breadcrumbs :items="$breadcrumbs" />
@endsection
