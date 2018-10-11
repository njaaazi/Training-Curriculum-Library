@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    
    <div class="col-md-2">
            <div class="card">
                <div class="card-header">Panel</div>

                <div class="card-body">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Add Training
                    </button>

                </div>
            </div>

            
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <table id="myTable" class="table table-hover">
                      <thead class="thead-light"> 
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Title</th>
                          <th scope="col">Description</th>
                          <th scope="col">Accredited</th>
                          <th scope="col">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($trajnimet as $trajnim)
                            <tr>
                              <th >{{$trajnim->id}}</th>
                              <td>{{ $trajnim->titulli }}</td>
                              <td>{{$trajnim->pershkrimi}}</td>
                              <td>
                                @if($trajnim->akredituar == 1)
                                    PO
                                @else
                                    JO
                                @endif
                              </td>
                              <td>
                              <div class="costumButtons">
                                <div>
                                 
                                     <a class="btn btn-secondary" href="/home/{{{ $trajnim->id }}}" target="_blank">
                                      <i class="fas text-white fa-eye"></i>
                                    </a>
                                    
                                </div>

                                <div>
                                    <a class="btn btn-success" href="/home/pdf/{{ $trajnim->id }}" target="_blank"><i class="fas fa-file-pdf"></i></a>
                                    
                                </div>
                                
                                <div>

                                  <form id="deleteForm" method="POST" action="/home/{{ $trajnim->id }}">
                                    {{ method_field('DELETE') }}
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                    <button  type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                  </form>
                       
                              </div>

                              <div>

                               {{--   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit" data-pershkrimi="{{$trajnim->pershkrimi}}" data-titulli="{{$trajnim->titulli}}" data-akredituar="{{$trajnim->akredituar}}" data-id="{{$trajnim->id}}" >
                                  <i class="fas fa-edit"></i>
                                  </button> --}}

                                  <a class="btn btn-primary" href="/home/edit/{{$trajnim->id}}"> <i class="fas fa-edit"></i> </a>
                             
                              </div>
                        

                                </div>
                              </td>
                            </tr>


                         
            

                        @endforeach
                      </tbody>
                    </table>

                </div>
            </div>

            
        </div>
    </div>
</div>



<!-- Modal Add Training -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Training</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/home" >
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="titulli">Titulli</label>
                    <input type="text" class="form-control" id="titulli" name="titulli"  required>
                </div>

                <div class="form-group">
                    <label for="pershkrimi">Pershkrimi</label>
                    <textarea type="text" class="form-control" id="pershkrimi" name="pershkrimi"  required>
                </textarea>
                </div>

                <div class="form-group">
                    <label for="akredituar">Akredituar</label>
                    <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio1" value="true" name="akredituar" class="custom-control-input" required>
                    <label class="custom-control-label" for="customRadio1">PO</label>
                    </div>
                    <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio2" value="false" name="akredituar" class="custom-control-input" required>
                    <label class="custom-control-label" for="customRadio2">JO</label>
                    </div>
                </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save</button>
                  </div>
            </form>
        </div>

    </div>
  </div>
</div>
{{-- Add training modal end --}}




@endsection
