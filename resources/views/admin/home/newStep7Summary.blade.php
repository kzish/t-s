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
                <div class="card-header">Your T&S Summary</div>
                <div class="card-body">
                   <table>
                    <tr>
                        <td>Date of Departure:</td>
                        <td>24-05-2025</td>
                    </tr>
                    <tr>
                        <td>Date of Return:</td>
                        <td>29-05-2025</td>
                    </tr>
                    <tr>
                        <td>Route:</td>
                        <td>MSU main campus gweru - MSU harare campus</td>
                    </tr>
                    <tr>
                        <td>Accomodation type:</td>
                        <td>Proven</td>
                    </tr>
                    <tr>
                        <td>Meals:</td>
                        <td>3 breakfasts (provided by accomodation) 3 lunch, 3 supper</td>
                    </tr>
                    <tr>
                        <td>Vehicle usage:</td>
                        <td>Designated Driver (You), Toyota Hilux (AEJ-2233)</td>
                    </tr>
                    <tr>
                        <td>Other expenses:</td>
                        <td>Expense1, Expense 2, Expense 3</td>
                    </tr>
                    <tr>
                        <td>Estimatd funds:</td>
                        <td>650, 000 ZWL</td>
                    </tr>
                    <tr>
                        <td>Estmated fuel:</td>
                        <td>47 litres</td>
                    </tr>
                   </table>
                </div>
                {{-- Buttons --}}
                <div class="d-flex justify-content-end gap-2">
                    <button type="button" class="btn btn-secondary-outline"
                        onclick="window.location.href='{{ route('admin.newStep6') }}'">
                        Back
                    </button>
                    <button type="button" class="btn btn-teal"
                        onclick="window.location.href='{{ route('admin.newStep6') }}'">
                        Submit
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
