@extends('app')
@section('content')
<div class="row">
  <div class="col-md-6">
    <form method="POST" action="{{ route('post.store') }}">
      @csrf
      <div class="mb-3">
        <label>Caption<span class="text-danger">*</span></label>
        <textarea type="text" class="form-control" name="caption" autocomplete="caption" autofocus required>{{old('caption')}}</textarea>
      </div>
      <div class="mb-3">
        <button class="btn btn-primary">Save</button>
        <a href="{{ route('post.index') }}" class="btn btn-danger">Back</a>
      </div>
    </form>
  </div>
</div>
@endSection