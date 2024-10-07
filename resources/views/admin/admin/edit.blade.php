@extends('admin.layouts.master')

@section('content')
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('admins.update', $admin->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">{{ __('Name') }}</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $admin->name }}" required>
            </div>
            <div class="form-group">
                <label for="email">{{ __('Email') }}</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $admin->email }}" required>
            </div>
            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Leave blank to keep current password">
            </div>
            <div class="form-group">
                <label for="photo">{{ __('Photo') }}</label>
                <input type="file" class="form-control" id="photo" name="photo">
                @if($admin->photo)
                    <img src="{{ asset('uploads/'.$admin->photo) }}" alt="photo" width="100">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
        </form>
    </div>
</div>
@endsection
