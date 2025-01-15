@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- First Page Link --}}
            @if ($paginator->onFirstPage())
                <button class="disabled join-item btn btn-outline">«</button>
            @else
                <a href="/?page=1"><button class="join-item btn btn-outline">«</button></a>
            @endif
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled join-item btn btn-outline" aria-disabled="true"><span>@lang('pagination.previous')</span></li>
            @else
                <li class="join-item btn btn-outline"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></li>
            @endif
            {{-- Current Page --}}
            <button class="disabled join-item btn">{{$paginator->currentPage()}}</button>
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="join-item btn btn-outline"><a href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></li>
            @else
                <li class="disabled join-item btn btn-outline" aria-disabled="true"><span>@lang('pagination.next')</span></li>
            @endif
            {{-- Last Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="/?page={{round(1000/16)}}"><button class="join-item btn btn-outline">»</button></a>
            @else
                <button class="disabled join-item btn btn-outline">»</button>
            @endif
        </ul>
    </nav>