<div {{ $attributes->merge(['class' => 'join']) }}>
    {{-- First Page --}}
    @if ($currentPage > 1)
        <a href="?page=1"><button class="join-item btn">|«</button></a>
    @endif
    {{-- Previous Button --}}
    @if ($currentPage > 1)
        <a href="?page={{ $currentPage - 1 }}"><button class="join-item btn">«</button></a>
    @endif

    {{-- Page Numbers --}}
    @for ($i = 1; $i <= $totalPages; $i++)
        @if ($i == $currentPage)
            <button class="join-item btn"><strong>{{ $i }}</strong></button>
        @else
            <a href="?page={{ $i }}"><button class="join-item btn">{{ $i }}</button></a>
        @endif
    @endfor

    {{-- Next Button --}}
    @if ($currentPage < $totalPages)
        <a href="?page={{ $currentPage + 1 }}"><button class="join-item btn">»</button></a> 
    @endif
    {{-- Last Page --}}
    @if ($currentPage < $totalPages)
        <a href="?page={{ $totalPages }}"><button class="join-item btn">»|</button></a>
    @endif
</div>
