@extends('template_backend.home')
@section('sub-judul','Category')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
{{ Session('success')}}
</div>
@endif

<a href="{{ route('category.create')}}" class="btn btn-info btn-sm">Add Category</a>
<br><hr>


<table  class="table table-striped table-hover table-sm">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama kategori</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($category as $result=>$hasil )
        <tr>
        <td>{{ $result + $category->firstitem()}}</td>
            <td>{{$hasil->name}}</td>
        <td>
        <form action="{{ route('category.destroy', $hasil->id)}}" method="POST">
                @csrf
                @method('delete')
                <a href="{{ route('category.edit', $hasil->id)}}" class="btn btn-primary">Edit</a>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $category->links()}}



@endsection