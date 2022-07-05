@extends('layouts.app')

@section('content')
<div class="container">
 Ciao {{Auth::user()->name}}, hai raggiunto la index della tua crud

 <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post )

        <tr>
          <th scope="row">{{$post->id}}</th>
          <td>{{$post->title}}</td>
          {{-- <td>{{$post->content}}</td> --}}
          <td>EDIT SHOW</td>

        </tr>
        @endforeach


    </tbody>
  </table>
</div>
@endsection
