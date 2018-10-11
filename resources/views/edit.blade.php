@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-8 ">
             <div class="card">
                <div class="card-header">Edit</div>

                <div class="card-body">


                    <form method="POST" action="/home/edit/{{$trajnimi->id}}" >
                                        
                                    {{ csrf_field() }}
                                    {{ method_field('PUT')}} 

                                    <div class="form-group">
                                        <label for="titulli">Titulli</label>
                                        <input type="text" class="form-control" id="titulli" name="titulli" value="{{ $trajnimi->titulli }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="pershkrimi">Pershkrimi</label>
                                        <textarea type="text" class="form-control" id="pershkrimi" name="pershkrimi"  required>{{ $trajnimi->pershkrimi }}</textarea>
                                    </div>



                                    <div class="form-group">
                                        <label for="akredituar">Akredituar</label>
                                        <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" @if($trajnimi->akredituar == 1) checked @endif value="true" name="akredituar" class="custom-control-input" required>
                                        <label class="custom-control-label" for="customRadio1">PO</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" @if($trajnimi->akredituar == 0 ) checked @endif value="false" name="akredituar" class="custom-control-input" required>
                                        <label class="custom-control-label" for="customRadio2">JO</label>
                                        </div>
                                    </div>

                                      <div class="modal-footer">
                                        <a class="btn btn-secondary" href="/home">Back</a>
                                        <button type="submit" class="btn btn-success">Update</button>
                                      </div>
                    </form>



                </div>
            </div>

          
        </div>
    </div>
</div>
 

@endsection