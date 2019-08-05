@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<label for="">Name</label>
<input type="text" class="form-control" name="name" placeholder="Name"
       value="@if(old('name')){{'name'}}@else{{$user->user ?? ''}} @endif" required>

<label for="">Email</label>
<input type="text" class="form-control" name="email" placeholder="Email"
       value="@if(old('email')){{'email'}}@else{{$user->email ?? ''}} @endif" required>

<label for="">Password</label>
<input type="password" class="form-control" name="password">

<label for="">Password confirm</label>
<input type="password" class="form-control" name="password_confirmation">

<hr />

<input type="submit" value="Save" class="btn btn-success">
