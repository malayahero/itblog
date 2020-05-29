@extends('layouts.admin')
@section('title')
	Admin Product
@endsection
@section('content')
<div class="content">
		<div class="card">
                        <div class="card-header bg-light">
                            Admin Product
                            <a href="{{route('adminNewProduct')}}" class="btn btn-primary">New Product</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Thumbnail</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>                                    
                                    </thead>
                                    <tbody>
                                    	@foreach($products as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td><img src="{{$product->thumbnail}}" width="100"></img></td>
                                        <td class="text-nowrap"><a href="{{route('adminEditProduct',$product->id)}}">{{$product->title}}</a></td>
                                        <td>{{$product->description}}td>
                                        <td>{{$product->price}}USD</td>
                                        <td>
                                        <a href="{{route('adminPostEdit', $product->id)}}" class="btn btn-warning">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
	</div>
    
@endsection