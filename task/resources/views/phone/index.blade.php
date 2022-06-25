@extends('layouts.App')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Phone Number</th>
      <th scope="col">User Id</th>
      <th scope="col">Change</th>
    </tr>
  </thead>
  <tbody>
    @foreach($phones as $phone)
    <tr>
      <th scope="row">{{$phone->id}}</th>
      <td>{{$phone->number}}</td>
      <td>{{$phone->user_id}}</td>
      <td> 
        <a href="{{route('phones.edit',$phone->id)}}">UPDATE</a><br><br>
    {!! Form::open(['route' =>['phones.destroy',$phone->id],'method'=>'delete'])!!}
        <button type='submit' class='btn btn-danger'>DELETE</button>
    {!! Form::close()!!}
    </td>
    </tr>
    @endforeach
  </tbody>
</table>

   

@endsection

