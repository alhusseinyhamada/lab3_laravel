@extends('layouts.app')

@section('title')
edit page
@endsection

@section('content')
{!! Form::model($phone,['route' => ['phones.update',$phone->id],'method'=>'put']) !!}
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
        <button type="submit" class="btn btn-primary">UPDATE</button>
        {!! Form::close() !!}
@endsection