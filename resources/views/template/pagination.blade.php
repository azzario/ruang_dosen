@if ($paginator->lastPage() > 1)
    <nav aria-label="...">
        <ul class="pagination">
            <li class="{{ ($paginator->currentPage() == 1) ? ' page-item disabled' : '' }}">
                <a class="page-link" href="{{ $paginator->url(1) }}" tabindex="-1">Previous</a>
            </li>
            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                <li class="{{ ($paginator->currentPage() == $i) ? ' page-item active' : '' }}">
                    <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                </li>
            @endfor
            <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' page-item disabled' : '' }}">
                <a class="page-link" href="{{ $paginator->url($paginator->currentPage()+1) }}" >Next</a>
            </li>
        </ul>
    </nav>
@endif