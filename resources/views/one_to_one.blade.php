@extends('main')
@section('title','one to one')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <h2 class="mt-2 mb-2 text-center">One to one relationship</h2>
            <table class="table table-border">
                <thead>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                </thead>
                <tbody>
                    @foreach($user as $info)
                    <tr>
                        <td>{{$info->name}}</td>
                        <td>{{$info->address->address}}</td>
                        <td>{{$info->phone->phone}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection