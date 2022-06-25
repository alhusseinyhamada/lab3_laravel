@extends('layouts.app')

@section('title')
hello title
@endsection

@section('content')
{!! Form::open(['route' => 'articles.store']) !!}
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">phone number</label>
            {!! Form::text('phonenumber',null,['class'=>'form-control'])!!}
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">user id</label>
            {!! Form::number('userid',null,['class'=>'form-control'])!!}
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">ADD</button>
        {!! Form::close() !!}
@endsection