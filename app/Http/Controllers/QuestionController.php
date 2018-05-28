<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        //echo'<pre>'; This test code shows you all question objects being retrieved from the database
        //print_r($questions);
        //echo'</pre>';

        $data = array();
        $questions = Question::all();
        $data['objects'] = $questions;

        return view('questions.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $question = new Question;
        $data = array();
        $data['question'] = $question; //['question'] is the array key name and referenced in {!! Form::model($question,
        // ['action' => 'QuestionController@store']) !!} in the create.blade.php file. = $question is the new empty model object
        // that was created when specifying = new Question (just above)
        return view('questions.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //The $request variable will store all the form data when we submit the form
    {
        $question = new Question; //Create new object of core object type. Now set the question's data from the form data
        $question->title = $request->title; //Set the questions table columns values (through the Model : $question->title) by using the form data : $request->title.
        $question->description = $request->description;
        $question->code = $request->code;

        //create a new object (question) in the database using the save() function calling it on the model object
        if(!$question->save()) {
            $errors = $question->getErrors(); // retrieve errors. getErrors() provided by Esensi and contains all the error messages
            /*
             * This is test code to see what prints out
             * echo'<pre>';
             * print_r($errors);
             * echo'</pre>';
             */
            return redirect() //redirect back to the create page and pass along the errors
                ->action('QuestionController@create') // note that the redirect syntax is a bit different than return view()
                ->with('errors', $errors)//this is to pass the errors. 'errors' = key and $errors = error messages
                ->withInput();
        }
        // successful creation
        return redirect()
            ->action('QuestionController@index')
            ->with('message', '<div class="alert alert-success">Question created successfully</div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array();

        $question = Question::find($id);

        $data['object'] = $question;

        return view ('questions/show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
