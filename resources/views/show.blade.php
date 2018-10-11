@extends('layouts.app')

@section('content')
	
	<div class="container">
	    <div class="row justify-content-center">
			
			<div class="col-md-8">
				 <div class="card">
                	<div class="card-header">Training Details</div>

                	<div class="card-body">
                        <table class="table table-bordered ">
                                <tr>
                                    <th class="table-info" scope="row">Title</th>
                                    <td>{{$trajnimi->titulli }}</td>
                                   
                                </tr>
                                <tr>
                                    <th class="table-info" scope="row">Created</th>
                                    <td>{{$trajnimi->created_at}}</td>
                                </tr>

                                <tr>
                                    <th class="table-info" scope="row">Updated</th>
                                    <td>{{$trajnimi->updated_at}}</td>
                                </tr>
                        </table>
                
            
                	</div>
            	</div>
			</div>

	    </div>
	</div>

@endsection