@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-4">
                <div class="card-header">My Questionnaires</div>

                <div class="card-body">
                 @foreach ($questionnaires as $questionnaire)
                    <li class="list-group-item">
                        <a href="{{$questionnaire->path() }}">{{$questionnaire->title}}</a>

                        <div class="mt-2">
                            <small class="font-weight-bold">Share Url</small>
                            <p>
                                <a href="{{$questionnaire->publicPath()}}">{{$questionnaire->publicPath()}}</a>
                            </p>
                        </div>
                    </li>

                 @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
