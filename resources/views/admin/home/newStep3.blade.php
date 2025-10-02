@extends('layouts.app')
@section('timeline')
    <x-timeline :active="3" />
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


                <table class="table no-bottom-border">
                    <tr>
                        <td>Date Of Departure:</td>
                        <td><input type="date" class="form-control"/></td>
                    </tr>
                    <tr>
                        <td>Date Of Arrival:</td>
                        <td><input type="date" class="form-control"/></td>
                    </tr>
                    <tr>
                        <td>Time Of Departure:</td>
                        <td><input type="time" class="form-control"/></td>
                    </tr>
                    <tr>
                        <td>Time Of Departure:</td>
                        <td><input type="time" class="form-control"/></td>
                    </tr>
                    <tr>
                        <td colspan="2"><div style="height:5px; background-color:#006d6d; border-radius:100px;"></div></td>
                    </tr>
                    <tr>
                        <td>Date Business Commenced:</td>
                        <td><input type="date" class="form-control"/></td>
                    </tr>
                    <tr>
                        <td>Date Business Ended:</td>
                        <td><input type="date" class="form-control"/></td>
                    </tr>
                    <tr>
                        <td>Time Business Commenced:</td>
                        <td><input type="time" class="form-control"/></td>
                    </tr>
                    <tr>
                        <td>Business End Time:</td>
                        <td><input type="time" class="form-control"/></td>
                    </tr>
                </table>

                {{-- Buttons --}}
                <div class="d-flex justify-content-end gap-2">
                    <button type="button" class="btn btn-outline-secondary">Cancel</button>
                    <button type="button" class="btn btn-teal"
                        onclick="window.location.href='{{ route('admin.newStep4') }}'">
                        Next
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
