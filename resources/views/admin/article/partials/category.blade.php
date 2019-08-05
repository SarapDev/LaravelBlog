@foreach ($categories as $category)

    <option value="{{$category->id ?? ""}}"

        @isset($article->id)
            @foreach($article->categories as $category_articles)
                @if($category->id == $category_articles->id)
                    selected="selected"
                @endif
            @endforeach
        @endisset

    >
        {!! $delimiter ?? "" !!}{{$category->title ?? ""}}
    </option>

    @if (count($category->children) > 0)

        @include('admin.article.partials.category', [
          'categories' => $category->children,
          'delimiter'  => ' - ' . $delimiter
        ])

    @endif
@endforeach
