@extends('layout')

@section('content')
    {!! $calendar->calendar() !!}
@stop

@section('scripts')
    {!! $calendar->script() !!}
@stop