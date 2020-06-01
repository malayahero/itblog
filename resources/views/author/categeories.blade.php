@extends('layouts.admin')
@section('title')
	Create Categeories
@endsection 
@section('content')
	<div class="content">
		<div class="card">
                        <div class="card-header bg-light">
                            Categeories List
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User</th>
                                        <th>Categeories</th>
                                        <th>Created At</th>
                                        <th>Update At</th>
                                        <th>Action</th>
                                    </tr>                                    
                                    </thead>
                                    <tbody>
              
                                  <tr>
                                        {{-- <td>{{$categeories->id}}</td>
                                        <td class="text-nowrap"><a href="{{route('createMenuShow',$categeories->id)}}">{{$categeories->categeories}}</a></td>
                                        <td>{{\Carbon\Carbon::parse($categeories->created_at)->diffForHumans()}}</td>
                                        <td>{{\Carbon\Carbon::parse($categeories->updated_at)->diffForHumans()}}</td>
                                        <td></td>
                                        <td> --}}
                                        {{-- <a href="{{route('editPost', $categeories->id)}}" class="btn btn-warning">Edit</a>
                                        <form method="POST" id="deletePost-{{$categeories->id}}" action="{{route('deletePost',$categeories->id)}}">@csrf</form>
                                        <a href="#" onclick="document.getElementById('deletePost-{{$categeories->id}}').submit()" class="btn btn-danger">Remove</a>
                                        {{-- </td> --}}
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
	</div>
@endsection