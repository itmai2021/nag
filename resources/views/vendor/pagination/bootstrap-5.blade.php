@if ($paginator->hasPages())
<nav>
    <div class="d-flex justify-content-end">
        <ul class="pagination">
            {{-- Prev --}}
            @if ($paginator->onFirstPage())
            <li class="page-item disabled" aria-disabled="true">
                <span class="page-link">&lsaquo;</span>
            </li>
            @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">&lsaquo;</a>
            </li>
            @endif

            {{-- Numbers --}}
            @foreach ($elements as $element)
            @if (is_string($element))
            <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
            @endif

            @if (is_array($element))
            @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
            <li class="page-item active" aria-current="page">
                <span class="page-link">{{ $page }}</span>
            </li>
            @else
            <li class="page-item">
                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
            </li>
            @endif
            @endforeach
            @endif
            @endforeach

            {{-- Next --}}
            @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">&rsaquo;</a>
            </li>
            @else
            <li class="page-item disabled" aria-disabled="true">
                <span class="page-link">&rsaquo;</span>
            </li>
            @endif
        </ul>
    </div>

</nav>
@endif