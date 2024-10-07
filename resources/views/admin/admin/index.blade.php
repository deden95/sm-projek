@extends('admin.layouts.master')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ __('Admins') }}</h1>
    <a href="{{ route('admins.create') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm">
        <i class="fas fa-plus"></i> {{ __('Add Admin') }}
    </a>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-sm" id="dtable">
                <thead>
                    <tr>
                        <th>{{ __('SL') }}</th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Email') }}</th>
                        <th>{{ __('Photo') }}</th>
                        <th>{{ __('Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($admins as $admin)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                        <td>
                            @if($admin->photo)
                                <img src="{{ asset('uploads/'.$admin->photo) }}" alt="photo" width="50">
                            @else
                                <span>{{ __('No Photo') }}</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admins.edit', $admin->id) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admins.destroy', $admin->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('{{ __('Are you sure?') }}');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
