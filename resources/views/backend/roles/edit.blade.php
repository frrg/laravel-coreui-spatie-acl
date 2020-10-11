@extends('layouts.backend.master')
@section('title')
Edit Roles
@endsection
@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <h4>Edit Role</h4>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('roles.index') }}"> Back</a>
                        </div>
                    </div>

                    {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
                    <div class="card-body">
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">Nama Role</label>
                                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                </div>

                                <div class="form-group">
                                    <table class="table">
                                        <tr>
                                            <th><input type="checkbox" value="1" class="all"> Grand All</th>
                                            <th>Module Name</th>
                                            <th>Access</th>
                                        </tr>
                                        @forelse (config('menus') as $module)
                                        <tr>
                                            <td><input type="checkbox" value="1" name="checkModule[]" class="check-modules"> Select All</td>
                                            <td>{{ $module['display_name'] }}</td>
                                            <td>
                                                @forelse ($module['action'] as $key => $permission)
                                                <label class="permissions" for="{{ $permission }}">
                                                    {{ Form::checkbox('permissions[]', $permission.'-'.$module['name'], false, array('class' => 'name check-access '.$permission.'-'.$module['name'].'-key ')) }}
                                                    {{ $permission }}
                                                </label>
                                                @empty
                                                There is no permission for this module
                                                @endforelse
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="2">No Roles</td>
                                        </tr>
                                        @endforelse
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $.get("{{ route('roles.check',$role->id) }}", function(data) {
            $.each(data.permission, function(key, val) {
                if ($.inArray(val.id, Object.values(data.rolePermissions)) !== -1) {
                    $('.' + this.name + '-key').iCheck('check'); //To check the radio button
                }
            });

        });
    });
</script>
@include('backend.roles.script')

@endpush

@push('css')
<link rel="stylesheet" href="{{ asset('assets/lib/icheck/square/blue.css') }}">
<style>
    .permissions {
        margin-right: 10px;
    }
</style>
@endpush