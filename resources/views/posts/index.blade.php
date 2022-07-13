@extends('app')
@section('content')
@if(session('success'))
<p class="alert alert-success">{{session('success')}}</p>
@endif
@auth
<p>Welcome <b>{{ Auth::user()->name }}</b></p>
<a class="btn btn-primary" href="{{ route('password') }}">Change Password</a>
<a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
@endauth
  <div class="card">
    <div class="card-header">
      <form action="" class="row row-cols-auto g-1">
        <div class="col">
          <input type="text" class="form-control" name="q", value="{{$q}}" placeholder="Search here..."/>
        </div>
        <div class="col">
          <button class="btn btn-success">Refresh</button>
        </div>
        <div class="col">
          <a href="{{ route('post.create') }}" class="btn btn-primary"> Add</a>
        </div>
      </form>
    </div>
    <div class="card-body p-0 table-responsive">
      <table class="table table-bordered table-striped table-hover m-0">
        <thead>
          <th>#</th>
          <th>Username</th>
          <th>Caption</th>
        </thead>
        <?php $no = 1 ?>
        @foreach($posts as $post)
        <tr>
          <td>{{$no++}}</td>
          <td>{{$post->user_id}}</td>
          <td>{{$post->caption}}</td>
          <td>
            <a class="btn btn-warning" href="{{ route('customer.edit', $customer)}}">Edit</a>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
@endSection
