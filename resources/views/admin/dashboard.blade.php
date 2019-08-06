@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron jumbotron-fluid">
                    <a href="{{route('admin.category.index')}}" class="btn btn-lg btn-outline-dark ml-md-5" role="button"><span class="label label-primary p-1">Category {{$count_categories}}</span> </a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron jumbotron-fluid">
                    <a href="{{route('admin.article.index')}}" class="btn btn-lg btn-outline-dark ml-md-5" role="button"><span class="label label-primary p-1">Article {{$count_articles}}</span> </a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron jumbotron-fluid">
                    <a href="{{route('admin.user_managment.user.index')}}" class="btn btn-lg btn-outline-dark ml-md-5" role="button"><span class="label label-primary p-1">Users {{$count_user}}</span> </a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron jumbotron-fluid">
                    <a href="{{route('admin.user_managment.user.today')}}" class="btn btn-lg btn-outline-dark ml-md-5" role="button"><span class="label label-primary p-1">Users today {{$count_user_today}}</span> </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 list-group">
                <a class="btn btn-outline-dark btn-lg btn-block mb-1" href="{{route('admin.category.create')}}">Create category</a>
                @foreach ($categories as $category)
                    <a class="list-group-item list-group-item-action" href="{{route('admin.category.edit', $category)}}">
                        <h4 class="list-group-item-heading">{{$category->title}}</h4>
                        <p class="list-group-item-text">
                            {{$category->articles()->count()}}
                        </p>
                    </a>
                @endforeach
            </div>
            <div class="col-sm-6 list-group">
                <a class="btn btn-lg btn-block btn-outline-dark mb-1" href="{{route('admin.article.create')}}">Create materials</a>
                @foreach($articles as $article)
                    <a class="list-group-item list-group-item-action" href="{{route('admin.article.edit', $article)}}">
                        <h4 class="list-group-item-heading">{{$article->title}}</h4>
                        <p class="list-group-item-text">
                            {{$article->categories()->pluck('title')->implode(', ')}}
                        </p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
