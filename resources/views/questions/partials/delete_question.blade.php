<hr>

<h2>Delete this question:</h2>

{!! Form::open([
        'action' => ['QuestionController@destroy', $question->id],
        'method' => 'delete',
        'class' => 'delete-question' // needed for the delete_confirm.js file in the public > js folder
        ]) !!}

    <button type="submit" class="btn btn-danger">Delete This Question!</button>
{!! Form::close() !!}