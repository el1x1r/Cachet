@extends('layout.dashboard')

@section('content')
<div class="header fixed">
    <div class="sidebar-toggler visible-xs">
        <i class="ion ion-navicon"></i>
    </div>
    <span class="uppercase">
        <i class="ion ion-ios-people-outline"></i> {{ trans('dashboard.team.team') }}
    </span>
    <div class="clearfix"></div>
</div>
<div class="content-wrapper header-fixed">
    <div class="row">
        <div class="col-sm-12">
            <p class="lead">{{ trans('dashboard.team.description') }}</p>

            <div class="user-grid">
                @foreach($teamMembers as $member)
                <a href="#">
                    <div class="user col-sm-3 col-xs-6">
                        <div class="name">{{ $member->username }} <small class="label label-info">{{ $member->isAdmin ? "Admin" : "" }}</small></div>
                        <div class="email">{{ $member->email }}</div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@stop
