@extends('layouts.app')

@section('content')
    
        <div class="container">
                <table id="trainingsTable" class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Accredited</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($trajnimet as $trajnim)
                        <tr>
                            <td>{{$trajnim->id}}</td>
                            <td>{{ $trajnim->titulli }}</td>
                            <td>{{ $trajnim->pershkrimi }}</td>
                            <td>
                                @if($trajnim->akredituar == 1)
                                    YES
                                @else
                                    NO
                                @endif

                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
@endsection



