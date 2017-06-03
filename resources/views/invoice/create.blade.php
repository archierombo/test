@extends('layouts.main')
@section('title', 'Add New Client')
@section('content')
<div class="">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Add Invoice</div>
                <div class="panel-body">
                
                    <form enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" action="{{ route('invoice.store') }}">
                        {{ csrf_field() }}

                         <div class="form-group{{ $errors->has('product_name') ? ' has-error' : '' }}"><!--product_name-->
                            <label for="product_name" class="col-md-4 control-label">Product Name</label>

                            <div class="col-md-6">
                                <input id="product_name" type="text" class="form-control" name="product_name" value="{{ old('product_name') }}" required autofocus>

                                @if ($errors->has('product_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><!--product_name-->
                          <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}"><!--price-->
                            <label for="price" class="col-md-4 control-label">Price</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="price" value="{{ old('price') }}" required >

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><!--price-->
                      
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
