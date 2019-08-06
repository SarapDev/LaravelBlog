@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title')Users today list@endslot
            @slot('parent')Main @endslot
            @slot('active')Users @endslot
        @endcomponent

        <hr />
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
{{--                        {{$users->links()}}--}}
                    </td>
                </tr>
                </tfoot>
        </table>

    </div>
@endsection
