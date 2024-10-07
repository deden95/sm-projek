@extends('admin.layouts.master')

@section('content')
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('admins.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">{{ __('Name') }}</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">{{ __('Email') }}</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="photo">{{ __('Photo') }}</label>
                <input type="file" class="form-control" id="photo" name="photo">
            </div>
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
        </form>
    </div>
</div>
@endsection
