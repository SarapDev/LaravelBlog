<label for="">Status</label>
<select class="form-control" name="published">
    @if(isset($category->id))
        <option value="0" @if ($category->published == 0) selected="" @endif>Not a publish</option>
        <option value="1" @if ($category->published == 1) selected="" @endif>Was published</option>
    @else
        <option value="0">Not a publish</option>
        <option value="1">Was published</option>
    @endif
</select>

<label for="">Name</label>
<input type="text" class="form-control" name="title" placeholder="Title" value="{{$category->title ?? ''}}" required>

<label for="">Slug</label>
<input type="text" name="slug" class="form-control" placeholder="Autogeneration slug" readonly='' value="{{$category->slug ?? ''}}">

<label for="">Parent's category</label>
<select class="form-control" name="parent_id">
    <option value="0">-- without parent's category --</option>
    @include('admin.categories.partials.category', ['categories' => $categories])
</select>

<hr />

<input type="submit" value="Save" class="btn btn-success">