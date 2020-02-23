<form action="/comment" method="post">
    @csrf
    <label for="text">Comment</label>
    <textarea name="text" class="form-control" id="text"></textarea>

    <button type="submit">Submit</button>
</form>
