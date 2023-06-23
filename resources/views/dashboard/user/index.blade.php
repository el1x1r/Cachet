@extends('layout.dashboard')

@section('content')
<div class="header">
    <div class="sidebar-toggler visible-xs">
        <i class="ion ion-navicon"></i>
    </div>
    <span class="uppercase">
        <i class="ion ion-ios-person-outline"></i> Profile
    </span>
    <small class="label label-info"><small>Handled by external service</small></small>
</div>
<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12">
            @include('partials.errors')
            <form name="UserForm" class="form-vertical" role="form" action="#" method="POST">
                {!! csrf_field() !!}
                <fieldset>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>{{ trans('forms.user.username') }}</label>
                                <input type="text" class="form-control" name="username" value="{{ $currentUser->username }}" disabled>
                            </div>
                            <div class="form-group">
                                <label>{{ trans('forms.user.email') }}</label>
                                <input type="email" class="form-control" name="email" value="{{ $currentUser->email }}" disabled>
                            </div>
                            <div class="form-group">
                                <label>{{ trans('forms.user.password') }}</label>
                                <input type="password" class="form-control" name="password" value="" placeholder="Handled by external service" disabled>
                            </div>
                            <hr>
                            @if($currentUser->isAdmin)
                            <div class="form-group">
                                <label>{{ trans('forms.user.api-token') }}</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="api_key" readonly value="{{ $currentUser->api_key }}" placeholder="{{ trans('forms.user.api-token') }}">
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@stop
