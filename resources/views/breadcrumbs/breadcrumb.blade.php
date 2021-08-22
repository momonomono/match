@if (count($breadcrumbs))
<div class="p-breadcrumb">
    <div class="l-breadcrumb">

        <ul class="p-breadcrumb__container">
            @foreach ($breadcrumbs as $breadcrumb)
                @if ($breadcrumb->url && !$loop->last)
                    <li class="p-breadcrumb__item">
                        <a href="{{ $breadcrumb->url }}" class="p-breadcrumb__link">
                        {{ $breadcrumb->title }}</a>
                    </li>
                    <li class="p-breadcrumb__item">></li>
                @else
                    <li class="p-breadcrumb__item active">{{ $breadcrumb->title }}</li>
                @endif
            @endforeach
        </ul>

    </div>
</div>
@endif