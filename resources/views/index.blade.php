@extends('layout.master')

@section('content')
@include('partials.modules.messages')
@include('partials.modules.status')
@include('partials.modules.timeline')
@include('partials.about-app')
@include('partials.modules.components')
@include('partials.modules.metrics')
@include('partials.modules.stickied')
@include('partials.modules.scheduled')
@stop

@section('bottom-content')
@include('partials.footer')
@stop
