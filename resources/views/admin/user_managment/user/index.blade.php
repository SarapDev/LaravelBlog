@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title')Users list@endslot
            @slot('parent')Main @endslot
            @slot('active')Users @endslot
        @endcomponent

        <hr />
        <a href="{{route('admin.user_managment.user.create')}}" class="btn btn-primary float-right"><i class="fa fa-plus-square-o"></i>Create user </a>

        <table class="table table-striped">
            <thead>
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td class="text-right">Action</td>
            </tr>
            </thead>
            <tbody>

            @forelse($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td class="text-right">
                        <form onsubmit="if(confirm('Delete?')){return true}else{return false}" action="{{route('admin.user_managment.user.destroy', $user)}}" method="post">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <a class='btn btn-default' href="{{route('admin.user_managment.user.edit', $user)}}"><i class="fa fa-edit"></i></a>

                            <button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center"><h2>No data</h2></td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pull-right"></ul>
                    {{$users->links()}}
                </td>
            </tr>
            </tfoot>
        </table>

    </div>
@endsection
