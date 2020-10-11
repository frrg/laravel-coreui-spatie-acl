<div class="c-subheader px-3">
    <!-- Breadcrumb-->
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ $bcrum['url-first'] }}">@if(isset($bcrum)) {{ $bcrum['name-first'] }} @endif</a></li>
        @if(isset($bcrum['url-second']))
        <li class="breadcrumb-item"><a href="{{ $bcrum['url-second'] }}">@if(isset($bcrum)) {{ $bcrum['name-second'] }} @endif</a></li>
        @endif
        <li class="breadcrumb-item">@if(isset($bcrum)) {{ $bcrum['current'] }} @endif</li>
    </ol>
    <!-- Breadcrumb Menu-->
</div>