@if ($paginator->hasPages())
<div class="pagination-wrapper m-t-20">

  <nav class="pagination is-centered">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
    <a class="pagination-prev" disabled>&laquo;</a>

        @else

        <a href="{{$paginator->previousPageUrl()}}" rel="prev">&laquo;</a>

        @endif
<ul class="pagination-list">
        {{-- Pagination List --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li>
                           <a class="pagination-link is-current">{{ $page }}</a>
                        </li>
                    @else
                        <li><a href="{{ $url }}" class="pagination-link">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
        @else
            <li class="disabled"><span>&raquo;</span></li>
        @endif
    </ul>
  </nav>
</div>
@endif
