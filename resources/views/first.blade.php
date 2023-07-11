
<h1>Hello from first page</h1>
<h1>hello {{$id}}</h1>











{{-- @foreach ($name as $u)
    <h1>{{$u}}</h1>
@endforeach --}}

{{-- @section('contents')
    <h1>Hello from first page</h1>
@endsection --}}




{{-- 
@include('post',['status'=>'New Idea'])
@includeWhen(true,'post',['status'=>'Hello from post']); --}}
{{-- @includeUnless(false,'post',['status'=>"testing"]); --}}




{{-- 
<h1>First post</h1>
<a href="{{route('home')}}">Page</a>

{{'<h1>Hello from first page</h1>'}}
{!!'<h1>Hello from first page</h1>'!!}

@php
    $users=['Raian','Rafi','Tanisha','Rozina'];
@endphp


@includeUnless(empty($users),'post',['status'=>"testing"]); --}}
{{-- {!!"<script>alert()</script>"!!} --}}
{{-- <ul>
    @foreach ($users as $user)
    <li>{{ $loop->iteration}}-{{$user}}</li>
    @endforeach
</ul> --}}
