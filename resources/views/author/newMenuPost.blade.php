@extends('layouts.admin')
@section('title')
	Create Menu
@endsection 
@section('content')
	<div class="content">
			<div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-light">
                                New Menu Name:
                            </div>
                            @if(Session::has('success'))
                            	<div class="alert alert-success">{{Session::get('success')}}</div>
                            @endif

                             @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            
                            <form method="POST" action="{{route('createMenuPost')}}">
                            	@csrf
                            	<div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="normal-input" class="form-control-label">Menu Name:</label>
                                            <input id="normal-input" name="menu" class="form-control" placeholder="Menu Title">
                                        </div>
                                    </div>                                    
                                </div>                                
                               <div>
                                <button type="submit" class="btn btn-success">Create Menu Link!</button>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	</div>
@endsection