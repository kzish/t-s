@extends('layouts.app')



@section('content')
    <div class="container-fluid">
        <h1 class="mb-4">Dashboard</h1>
        <div class="card">
            <div class="card-body">
                <p class="text-muted">This is your blank dashboard page.</p>
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
