@extends('layouts.main')
@section('title', 'Add New Client')
@section('content')
<div class="">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Add Product</div>
                <div class="panel-body">
                    <form enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" action="{{ route('client.store') }}">
                        {{ csrf_field() }}

                         <div class="form-group{{ $errors->has('product_name') ? ' has-error' : '' }}"><!--product_name-->
                            <label for="client_name" class="col-md-4 control-label">Client Name</label>

                            <div class="col-md-6">
                                <input id="client_name" type="text" class="form-control" name="client_name" value="{{ old('client_name') }}" required autofocus>

                                @if ($errors->has('client_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('client_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><!--product_name-->
                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"><!--product_name-->
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><!--product_name-->
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}"><!--product_name-->
                            <label for="phone" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><!--product_name-->
                        <div class="row">
                        	<div class="col-sm-6">
                        		 <input type="submit" class="btn btn-lg btn-primary btn-block">
                        	</div>
                        	<div class="col-sm-6">
                        		 <input type="reset" class="btn btn-lg btn-info btn-block">
                        	</div>
                        </div>
                         </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
