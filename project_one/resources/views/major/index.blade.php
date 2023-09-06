{{-- @extends('layout')
@section('title','major') --}}



@extends('adminlte::page')
@section('content')
<table>
    <thead>
        <th>id</th>
        <th>title</th>
        <th>created_at</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach ($majors as $major)
        <tr>
            <td>{{$major->id}}</td>
            <td>{{$major->title}}</td>
            <td>{{$major->created_at}}</td>
          
                <form action="{{ route('majors.delete',$major->id) }}" method="post">
                    @method("DELETE")
                    @csrf
                    <td><button>Delete</button></td>
                </form>
   
            </td>
           
          z
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
