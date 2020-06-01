@extends('layouts.admin')
@section('title')
	Create Menu
@endsection
@section('content')
	<div class="content">
		<div class="card">
                        <div class="card-header bg-light">
                            Menu List
                         <a class="btn btn-primary" href="{{route('newMenuPost')}}">Create Menu Link?</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User</th>
                                        <th>Menu</th>
                                        <th>Created At</th>
                                        <th>Update At</th>
                                        <th>Action</th>
                                    </tr>                                    
                                    </thead>
                                    <tbody>
                                 {{-- @foreach($menu as $menulist)
                                  <tr>
                                        <td>{{$menulist->id}}</td>
                                        <td></td>
                                        <td class="text-nowrap"><a href="{{route('createMenuEdit',$menulist->id)}}">{{$menulist->menu}}</a></td>
                                        <td></td>
                                        <td>{{\Carbon\Carbon::parse($menulist->created_at)->diffForHumans()}}</td>
                                        <td>{{\Carbon\Carbon::parse($menulist->updated_at)->diffForHumans()}}</td>
                                        <td></td>
                                        
                                    </tr>
                                    @endsection --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
	</div>
@endsection