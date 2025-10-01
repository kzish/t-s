@extends('layouts.app')

@section('content')
    <a href="{{ route('admin.newStep1') }}" class="btn btn-teal flex-fill text-center">
        New T&S Application
    </a>
    <br />
    <br />

    <table class="table table-bordered table-hover align-middle tealhead">
        <thead class="table-light">
            <tr>
                <td colspan="5">My traveling and subsistance applications</td>
            </tr>
            <tr>
                <th>Date</th>
                <th>Purpose of Trip</th>
                <th>Amount Due</th>
                <th>Status</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2025-09-30</td>
                <td>Workshop at Harare</td>
                <td>$120.00</td>
                <td><span class="badge bg-warning text-dark">Pending - HOD</span></td>
                <td class="text-center">
                    <a href="#" class="btn btn-sm btn-outline-primary me-1">
                        <i class="bi bi-eye"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-outline-success me-1">
                        <i class="bi bi-pencil"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-outline-danger">
                        <i class="bi bi-trash"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>2025-10-05</td>
                <td>Conference in Bulawayo</td>
                <td>$300.00</td>
                <td><span class="badge bg-info text-dark">Pending - Bursar</span></td>
                <td class="text-center">
                    <a href="#" class="btn btn-sm btn-outline-primary me-1">
                        <i class="bi bi-eye"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-outline-success me-1">
                        <i class="bi bi-pencil"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-outline-danger">
                        <i class="bi bi-trash"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>2025-10-15</td>
                <td>Field Research Trip</td>
                <td>$500.00</td>
                <td><span class="badge bg-secondary">Pending - Accounting</span></td>
                <td class="text-center">
                    <a href="#" class="btn btn-sm btn-outline-primary me-1">
                        <i class="bi bi-eye"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-outline-success me-1">
                        <i class="bi bi-pencil"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-outline-danger">
                        <i class="bi bi-trash"></i>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection

@section('breadcrumbs')
    @php
        $breadcrumbs = [
            ['label' => 'Home', 'url' => route('admin.dash')],
            ['label' => 'Index'], // active
        ];
    @endphp
    <x-breadcrumbs :items="$breadcrumbs" />
@endsection
