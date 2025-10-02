@extends('layouts.app')
@section('timeline')
    <x-timeline :active="7" />
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
        <div class="card rounded shadow-sm mt-4 p-4 center card">
            <form>
                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label">Expense name</label>
                        <input type="text" class="form-control" />
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Amount</label>
                        <input type="number" class="form-control" />
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Quotation/Invoice</label>
                        <input type="file" class="form-control" />
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Quotation/Invoice</label>
                        <input type="file" class="form-control" />
                    </div>
                    <div class="col-md-12">
                        <button type="button" class="btn btn-outline-secondary">Add to list</button>
                    </div>
                </div>

                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">An active item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                    <li class="list-group-item">A fourth item</li>
                    <li class="list-group-item">And a fifth one</li>
                </ul>

                {{-- Buttons --}}
                <div class="d-flex justify-content-end gap-2">
                    <button type="button" class="btn btn-outline-secondary">Cancel</button>
                    <button type="submit" class="btn btn-teal">Next</button>
                </div>
            </form>
        </div>
    </div>
@endsection
