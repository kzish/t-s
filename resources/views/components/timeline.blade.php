@props(['active' => 1])

@php
    $steps = [
        ['number' => 1, 'label' => 'Purpose'],
        ['number' => 2, 'label' => 'Routes'],
        ['number' => 3, 'label' => 'Dates'],
        ['number' => 4, 'label' => 'Accomodation'],
        ['number' => 5, 'label' => 'Meals'],
        ['number' => 6, 'label' => 'Vehicle Usage'],
        ['number' => 7, 'label' => 'Other Expenses'],
    ];
@endphp

<div class="teal-line">
    <div class="d-flex justify-content-between align-items-center my-4">
        @foreach ($steps as $step)
            <div class="d-flex flex-column align-items-center">
                {{-- Circle --}}
                <div class="rounded-circle border d-flex justify-content-center align-items-center mb-2"
                    style="width: 40px; height: 40px;
                        background-color: {{ $step['number'] == $active ? '#006d6d' : 'transparent' }};
                        color: {{ $step['number'] == $active ? '#fff' : '#000' }};">
                    {{ $step['number'] }}
                </div>

                {{-- Label, fixed 2 lines --}}
                <div style="text-align: center; width: 102px; height: 2.4em; line-height: 1.2em; overflow: hidden;">
                    {{ $step['label'] }}
                </div>
            </div>
        @endforeach
    </div>
</div>


<style>
    .timeline {
        position: relative;
    }

    .timeline-step {
        position: relative;
    }

    .timeline-step:not(:last-child) .timeline-line {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateX(50%);
        width: 100%;
        height: 2px;
        background: #006d6d;
        /* teal-ish line */
        z-index: 0;
    }

    .timeline-circle {
        width: 40px;
        height: 40px;
        line-height: 40px;
        border-radius: 50%;
        display: inline-block;
        border: 2px solid #006d6d;
        /* teal border */
        text-align: center;
        font-weight: bold;
        position: relative;
        z-index: 1;
        text-decoration: none;
    }

    .bg-teal {
        background-color: #006d6d !important;
        /* filled circle */
        border-color: #006d6d !important;
    }

    .
