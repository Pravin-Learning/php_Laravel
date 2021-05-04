
<h1>User file</h1>
<!-- 
@if($user=='pk')
<h3>HIi {{$user}}<h3>
@endif -->
<!-- @for($i=0;$i<10;$i++)
<h4>{{$i}}<h4>
@endfor -->

@foreach ($user as $u)
<h3>{{$u}}</h3>
@endforeach