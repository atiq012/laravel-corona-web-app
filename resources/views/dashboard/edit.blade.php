@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            Update Informations
        </div>
        
        <div class="card-body">
                <form action="{{route('dashboard.update',$item->id)}}" method="POST">
                    @csrf
                    @method('put')
                        <div class="form-group">
                            <label for="name">Thana</label>
                        <input type="text" class="form-control" name="Thana" id="Thana" value="{{$item->thana}}">
                        </div>
                        <div class="form-group">
                            <label for="name">Infected</label>
                        <input type="text" class="form-control" name="Infected" id="Infected" value="{{$item->infected}}">
                        </div>
                        <div class="form-group">
                            <label for="name">New Infected</label>
                        <input type="text" class="form-control" name="New_Infected" id="New_Infected" value="{{$item->new_infected}}">
                        </div>
                        <div class="form-group">
                            <label for="name">Recovered</label>
                        <input type="text" class="form-control" name="Recovered" id="Recovered" value="{{$item->recover}}">
                        </div>
                        <div class="form-group">
                            <label for="name">Deaths</label>
                        <input type="text" class="form-control" name="Deaths" id="Deaths" value="{{$item->deaths}}">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Done</button>
                        </div>
                </form>
        </div>
    </div>
@endsection