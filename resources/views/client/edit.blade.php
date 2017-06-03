@extends('layouts.main')
@section('title', 'Edit Client')
@section('content')
<div class="">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Client</div>
                 <p> <a href="{{ route('client.index') }}">Go back to all Clients.</a></p>
                   <div class="panel-body">
                {!! Form::model($clients,['route' => ['client.update', $clients->id],'method' => 'PUT','class'=>'form-horizontal','files' => 'true']) !!}

                 <div class="form-group"><!--product_name-->
                 {{Form::label('client_name','Client Name',['class' => 'col-md-4 control-label'])}}
                 <div class="col-md-6">
                     {{ Form::text('client_name',null,["class" => 'form-control']) }}
                 </div>
                 </div><!--product_name-->
                 <div class="form-group"><!--sector-->
                       {{Form::label('email','E-Mail',['class' => 'col-md-4 control-label'])}}
                       <div class="col-md-6">
                            {{ Form::text('email',null,["class" => 'form-control']) }}
                       </div>
                 </div><!--sector-->
                  <div class="form-group"><!--sub_sector-->
                        {{Form::label('phone','Phone',['class' => 'col-md-4 control-label'])}}
                         <div class="col-md-6">
                            {{ Form::text('phone',null,["class" => 'form-control']) }}
                       </div>
                  </div><!--sub_sector-->
                  
                  
                 
                  
                   
                  
                 
                  
                   
                
                  
                   <div class="row" style="margin-bottom: 12px;">
                <div class="col-md-12">
                    {!! Form::submit('Update Client',array('class'=> 'btn btn-block btn-success')) !!}
                </div>
               
            </div>
                    {!! Form::close() !!}
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
