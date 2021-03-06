@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{$questionnaire->title}}</h1>

                <form action="/surveys/{{$questionnaire->id}}-{{Str::slug($questionnaire->title)}}" method="post">
                    @csrf
                        @foreach ($questionnaire->questions as $key => $question)
                        <div class="card mt-4">
                            <div class="card-header"><strong>{{$key +1}}. </strong>{{$question->question}}</div>
                                <div class="card-body">
                                    @error('responses.' . $key . '.answer_id')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                    <ul class="list-group">
                                        @foreach ($question->answers as $answer)
                                            <label for="answer{{ $answer->id}}">
                                                <li class="list-group-item">
                                                        <input type="hidden" name="responses[{{$key}}][question_id]" value="{{$question->id}}" >
                                                     <input type="radio" name="responses[{{$key}}][answer_id]" id="answer{{$answer->id}}" class="mr-2" value="{{$answer->id}}" {{ (old('responses.' . $key . '.answer_id') == $answer->id) ? 'checked' : '' }}>
                                                     {{$answer->answer}}</li>
                                            </label>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endforeach

                  

                <div class="card mt-4">
                    <div class="card-header">Create new questionnaire</div>

                    <div class="card-body">
                        
                        
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="survey[name]" aria-describedby="nameHelp" placeholder="Enter name">
                                <small id="nameHelp" class="form-text text-muted">Hi! What is your name?.</small>
                                @error('name')
                                <small class="text-danger"> {{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Your Email</label>
                                <input type="email" class="form-control" id="email" name="survey[email]" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">Your email please.</small>
                                @error('email')
                                <small class="text-danger"> {{$message}}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-dark mt-3 btn-block ">Complete Survey</button>
                        
                        
                     </form>                 
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
