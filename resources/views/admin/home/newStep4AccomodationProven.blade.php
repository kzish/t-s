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
        <div class="card rounded shadow-sm mt-4 p-4 center-card">
            <form>


                <div class="row mb-5">
                    <div class="col-md-6">
                        <label>Attach Quaotation</label>
                        <input type="file" class="form-control"/>
                    </div>
                    <div class="col-md-6" style="text-align: right">
                        <label><b>Rate:</b> 1USD/1400ZWL </label>
                    </div>
                </div>


                <div class="row mb-5">
                    <div class="col-md-6">
                        <label>Daily Rate (USD)</label>
                        <input type="number" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label>Meals to be part of Accomodation Billing:</label>
                        <table>
                            <tr>
                                <td><input type="checkbox"/>&nbsp;Dinner&nbsp;</td>
                                <td><input type="checkbox"/>&nbsp;Lunch&nbsp;</td>
                                <td><input type="checkbox"/>&nbsp;Breakfast&nbsp;</td>
                            </tr>
                        </table>
                    </div>
                </div>

                {{-- Buttons --}}
                <div class="d-flex justify-content-end gap-2">
                    <button type="button" class="btn btn-outline-secondary">Cancel</button>
                    <button type="button" class="btn btn-teal"
                        onclick="window.location.href='{{ route('admin.newStep5') }}'">
                        Next
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
