@extends('layouts.app')
@section('timeline')
    <x-timeline :active="2" />
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
        <div class="card rounded shadow-sm mt-4 p-4 center-card">
            <form>

                {{-- from --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="tripPurpose" class="form-label">From</label>
                            <select class="form-select" id="tripPurpose" name="tripPurpose">
                                <option value="" selected>Select purpose</option>
                                <option value="meeting">Meeting</option>
                                <option value="training">Training</option>
                                <option value="conference">Conference</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    {{-- destination --}}
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="tripPurpose" class="form-label">Destination</label>
                            <select class="form-select" id="tripPurpose" name="tripPurpose">
                                <option value="" selected>Select purpose</option>
                                <option value="meeting">Meeting</option>
                                <option value="training">Training</option>
                                <option value="conference">Conference</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>


                {{-- Buttons --}}
                <div class="d-flex justify-content-end gap-2">
                    <button type="button" class="btn btn-outline-secondary">Cancel</button>
                    <button type="button" class="btn btn-teal"
                        onclick="window.location.href='{{ route('admin.newStep3') }}'">
                        Next
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
