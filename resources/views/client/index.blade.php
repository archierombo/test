@extends('layouts.main')
@section('title', 'View Clients')
@section('content')
<div>
    <div class="row">
        <div class="col-md-12">
        @if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif
            <div class="panel panel-default">
                <div class="panel-heading">View Clients</div>
                <div class="panel-body">
                @foreach($clients as $client)
                <div class="row">
    <div class="col-md-12">
    <div class="row">
        <div class="col-md-3">
        {{$client->client_name}}&nbsp;
        <a href="{{route('client.show',$client->id)}}" class="btn btn-success">View</a>

   
      
        </div>
        <div class="col-md-3">
           <a href="{{ route('client.edit', $client->id) }}" class="btn btn-primary">Edit Client</a>
        </div>
         <div class="col-md-3">
               {!! Form::open(['route'=> ['client.destroy',$client->id],'method'=>'DELETE']) !!}
        {!! Form::submit('Delete',['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
         </div>
          <div class="col-md-3">
              
        <a href="{{ route('invoice.create',$client->id) }}" class="btn btn-default">Add Invoice</a>
          </div>
        </div>
        <hr>
        </div>
        </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
