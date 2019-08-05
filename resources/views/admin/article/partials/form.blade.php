<label for="">Status</label>
<select class="form-control" name="published">
    @if(isset($article->id))
        <option value="0" @if ($article->published == 0) selected="" @endif>Not a publish</option>
        <option value="1" @if ($article->published == 1) selected="" @endif>Was published</option>
    @else
        <option value="0">Not a publish</option>
        <option value="1">Was published</option>
    @endif
</select>

<label for="">Title</label>
<input type="text" class="form-control" name="title" placeholder="Title" value="{{$article->title ?? ''}}" required>

<label for="">Slug</label>
<input type="text" name="slug" class="form-control" placeholder="Autogeneration slug" readonly='' value="{{$article->slug ?? ''}}">

<label for="">Parent's category</label>
<select class="form-control" name="categories[]" multiple=''>
    @include('admin.article.partials.category', ['categories' => $categories])
</select>

<label for="">Short description</label>
<textarea name="description_short" class="form-control" id="description_short">{{$article->description_short ?? ""}}</textarea>

<label for="">Full description</label>
<textarea name="description" class="form-control" id="description">{{$article->description ?? ""}}</textarea>

<hr />

<label for="">Meta title</label>
<input type="text" class="form-control" name="meta_title" placeholder="Meta Title" value="{{$article->meta_title ?? ''}}" required>

<label for="">Meta description</label>
<input type="text" class="form-control" name="meta_description" placeholder="Meta Description" value="{{$article->meta_description ?? ''}}" required>

<label for="">Key words</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Meta Title" value="{{$article->meta_keyword ?? ''}}" required>

<hr />

<input type="submit" value="Save" class="btn btn-success">
