@extends('layout.masterdmin');
@section('content')
<form action="/edit{{ $job->id }}" method="POST" class="m-5">
    @csrf
    {{-- {{ csrf_field()}} --}}


    job name :<input class="form-control" type="text" name="name" value="{{$job->job_name}}">
</br>
 job descrip :<input class="form-control" type="text" name="descrip" value="{{$job->job_descrip}}">
</br>
 <input type="submit" class = "btn btn-primary" value="Edit job">

</form>
@endsection
