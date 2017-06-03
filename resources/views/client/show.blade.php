@extends('layouts.main')
@section('title', 'View Client')
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
                <div class="panel-heading">View Client</div>
                <div class="panel-body">
                
                <div class="row">
    <div class="col-md-12">
    <div class="row">
        <div class="col-md-3">
        <h5>Client Name</h5><br>
        {{$clients->client_name}}
       
        
        </div>
        <div class="col-md-3">
         <h5>E-Mail</h5><br>
          {{$clients->email}}
        </div>
         <div class="col-md-3">
           <h5>Phone</h5><br>
          {{$clients->phone}}
        </div>
         <div class="col-md-3">
              <a href="{{ route('client.edit', $clients->id) }}" class="btn btn-primary">Edit Client</a>
         {!! Form::open(['route'=> ['client.destroy',$clients->id],'method'=>'DELETE']) !!}
        {!! Form::submit('Delete?',['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
         </div>
        </div>
        <hr>
        </div>
        </div>
              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
