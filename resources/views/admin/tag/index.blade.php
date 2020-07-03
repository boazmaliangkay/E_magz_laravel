@extends('template_backend.home')
@section('sub-judul','Tag')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
{{ Session('success')}}
</div>
@endif

<a href="{{ route('tag.create')}}" class="btn btn-info btn-sm">Add Tag</a>
<br><hr>


<table  class="table table-striped table-hover table-sm">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Tag</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tag as $result=>$hasil )
        <tr>
        <td>{{ $result + $tag->firstitem()}}</td>
            <td>{{$hasil->name}}</td>
        <td>
        <form action="{{ route('tag.destroy', $hasil->id)}}" method="POST">
                @csrf
                @method('delete')
                <a href="{{ route('tag.edit', $hasil->id)}}" class="btn btn-primary">Edit</a>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $tag->links()}}



@endsection