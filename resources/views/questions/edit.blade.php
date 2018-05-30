@extends('layouts.master')

@section('title', 'Edit a Programming Question')

@section('content')

    <div class="page-header">
        <h1>Edit a Programming Question</h1>
    </div>

    {!! Form::model($question,
        [
            'action' => ['QuestionController@update', $question->id], //This is the specification for the action. In the array, we need to specify the name of the update action and supply the id of the object
            'method' => 'put'//Need to specify the put method because it is not the traditional post
        ]) !!} {{--This syntax {!!  !!} is the syntax we use when we want an html output.
                                    Form::model function is provided by the forms library which you downloaded/added through composure (laravel collective)
                                    $question is the model object derived from $data['question'] = $question; in the QuestionController.php file.
                                    So $question = the array key name ('question'). An action item is referenced in the array and this is
                                    associated with the store controller action--}}

        @include('questions.partials.object_form')

        <button class="btn btn-success" type="submit">Update Your Question!</button>

    {!! Form::close() !!}

    @include('questions.partials.delete_question')

@endsection