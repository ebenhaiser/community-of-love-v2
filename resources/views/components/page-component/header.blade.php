<div>
    <div class="page-header">
        <div>
            <h1 class="page-title">{{ $title ??= "Title" }}</h1>
            <p class="page-subtitle">{{ $subtitle ??= "Subtitle" }}</p>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.html" class="text-decoration-none text-muted-green">Home</a>
                </li>
                @if ($mainTitle)
                    <li class="breadcrumb-item text-muted-green">{{ $mainTitle ??= "Main Title" }}</li>
                @endif
                <li class="breadcrumb-item active text-main" aria-current="page">{{ $title ??= "Title" }}</li>
            </ol>
        </nav>
    </div>
</div>
