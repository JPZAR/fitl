@extends('layouts.master')

@section('title', $object->title)

@section('content')


<h1>{{$object->title}}</h1>

<p>{{$object->description}}</p>
<pre>
    {{$object->code}}
</pre>
<p>{{$object->created_at}}</p>

<div class="page-header">
    <a href="{{action('QuestionController@edit', $object->id)}}"
       class="btn btn-info pull-right">Edit</a>
</div>
@endsection
