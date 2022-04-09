<ul class="pagination justify-content-center">
    <!-- Previous Page Link -->
    @if ($paginator->onFirstPage())
    <li class="page-item prev">
        <a class="page-link">
            <i class="tf-icon bx bx-chevrons-left">
            </i>
        </a>
    </li>
    @else
    <li class="page-item prev">
        <a class="page-link" a href="{{ $paginator->previousPageUrl() }}">
            <i class="tf-icon bx bx-chevrons-left">
            </i>
        </a>
    </li>
    @endif

    <!-- Pagination Elements -->
    @foreach ($elements as $element)
    <!-- "Three Dots" Separator -->
    @if (is_string($element))
    <li class="disabled"><span>{{ $element }}</span></li>
    @endif

    <!-- Array Of Links -->
    @if (is_array($element))
    @foreach ($element as $page => $url)
    @if ($page == $paginator->currentPage())
    <li class="page-item">
        <a class="page-link"><span>{{ $page }}</span></a>
    </li>
    @else
    <li class="page-item">
        <a class="page-link" href="{{ $url }}"><span>{{ $page }}</span></a>
    </li>
    @endif
    @endforeach
    @endif
    @endforeach

    <!-- Next Page Link -->
    @if ($paginator->hasMorePages())
    <li class="page-item last">
        <a class="page-link" href="{{ $paginator->nextPageUrl() }}">
            <i class="tf-icon bx bx-chevrons-right">
            </i>
        </a>
    </li>
    @else
    <li class="page-item last">
        <a class="page-link">
            <i class="tf-icon bx bx-chevrons-right">
            </i>
        </a>
    </li>
    @endif
</ul>