@extends('layouts.master')

@section('title', 'Submit a Programming Question')

@section('content')

    <div class="page-header">
        <h1>Submit a Programming Question</h1>
    </div>

    {!! Form::model($question, ['action' => 'QuestionController@store']) !!} {{--This syntax {!!  !!} is the syntax we use when we want an html output.
                                Form::model function is provided by the forms library which you downloaded/added through composure (laravel collective)
                                $question is the model object derived from $data['question'] = $question; in the QuestionController.php file.
                                So $question = the array key name ('question'). An action item is referenced in the array and this is
                                associated with the store controller action--}}
        <div class="form-group">
            {!! Form::label('title', 'What is your question?') !!}
            {!! Form::text('title', '', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Describe your situation in more detail') !!}
            {!! Form::textarea('description', '', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('code', 'Include a code sample. (optional)') !!}
            {!! Form::text('code', '', ['class' => 'form-control']) !!}
        </div>

        <button class="btn btn-success" type="submit">Submit Your Question!</button>

    {!! Form::close() !!}

@endsection