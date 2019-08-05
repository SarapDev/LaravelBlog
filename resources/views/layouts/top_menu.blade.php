@foreach($categories as $category)
    @if ($category->children->where('published', 1)->count())
        <div class="dropdown">
            <div class="btn-group m-1">
                <button class="btn btn-outline-secondary btn-sm " type="button">
                    <a class="dropdown-item" href="{{url("/blog/category/$category->slug")}}">{{$category->title}}</a>
                </button>
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>

                <ul class="dropdown-menu">
                  @include('layouts.top_menu', ['categories' => $category->children->where('published', 1)])
                </ul>
    @else
        <div class="dropdown">
            <a class="dropdown-item" href="{{url("/blog/category/$category->slug")}}">{{$category->title}}</a>
    @endif
        </div>
@endforeach
