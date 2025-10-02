<div class="bg-light py-3 px-4 mb-4 rounded">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            @foreach ($items as $item)
                @if (!$loop->last)
                    <li class="breadcrumb-item">
                        <a href="{{ $item['url'] ?? '#' }}" class="text-primary text-decoration-none">
                            {{ $item['label'] }}
                        </a>
                    </li>
                @else
                    <li class="breadcrumb-item active text-secondary fw-bold" aria-current="page">
                        {{ $item['label'] }}
                    </li>
                @endif
            @endforeach
        </ol>
    </nav>
</div>
