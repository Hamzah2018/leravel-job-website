@extends('layout.masterdmin');

@section('content')
<main class="container justify-content-center">

<table class="m-5">
    <tr>
        <td><h5>name</h5> </td>
        <td><h5>descrp</h5></td>
        <td><h5>edit</h5></td>
        <td><h5>delete</h5></td>
    </tr>


@foreach ($job as $j)

<tr class="border">
    <td class="m-3">{{ $j->job_name }}</td>
    <td class="m-3">{{ $j->job_descrip }}</td>
    <td><a href="edit/{{ $j->id }}" class = "btn btn-primary m-3">Edit</a></td>
    <td><a href="add/{{ $j->id }}" class = "btn btn-danger m-3">delete</a>
        </td>
</tr>
@endforeach
</table>
<a class = "btn btn-primary mx-5" href="job_add">Add</a>
</main>
@endsection
