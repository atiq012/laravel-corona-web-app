@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-end mb-2">
        <a href="{{route('dashboard.create')}}" class="btn btn-success">New Informations</a>
    </div>
    <div class="card card-default">
        <div class="card-header">
            Categories
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <th>Thana</th>
                    <th>Infected</th>
                    <th>New Infected</th>
                    <th>Recovered</th>
                    <th>Deaths</th>
                    <th>Action</th>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>
                                    {{$item->thana}}
                                </td>
                                <td>
                                    {{$item->infected}}
                                </td>
                                <td>
                                    {{$item->new_infected}}
                                </td>
                                <td>
                                    {{$item->recover}}
                                </td>
                                <td>
                                    {{$item->deaths}}
                                </td>
                                <td>
                                <a href="{{route('dashboard.edit',$item->id)}}" class="btn btn-info btn-sm">Edit</a>
                                    {{-- <button type="button" class="btn btn-danger btn-sm">Delete</button> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </thead>
            </table>
        </div>
    </div>
@endsection