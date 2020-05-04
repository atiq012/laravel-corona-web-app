@extends('layouts.app')
@section('content')
    <div class="card card-default">
        <div class="card-header">
            New Informations
        </div>
        
        <div class="card-body">
            <form action="{{route('dashboard.store')}}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="name">Thana</label>
                    <input type="text" class="form-control" name="Thana" id="Thana">
                    </div>
                    <div class="form-group">
                        <label for="name">Infected</label>
                    <input type="text" class="form-control" name="Infected" id="Infected">
                    </div>
                    <div class="form-group">
                        <label for="name">New Infected</label>
                    <input type="text" class="form-control" name="New_Infected" id="New_Infected">
                    </div>
                    <div class="form-group">
                        <label for="name">Recovered</label>
                    <input type="text" class="form-control" name="Recovered" id="Recovered">
                    </div>
                    <div class="form-group">
                        <label for="name">Deaths</label>
                    <input type="text" class="form-control" name="Deaths" id="Deaths">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Done</button>
                    </div>
            </form>
        </div>
    </div>
@endsection