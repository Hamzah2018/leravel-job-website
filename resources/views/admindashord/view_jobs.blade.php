
@foreach ($job as $p)
name:{{ $p->job_name }}
<br>
des:{{ $p->job_descrip }}
<br>
@endforeach
