@extends('layout')

@section('content')
    <div class="page-header">
        <h1>CalendarEvents / Edit </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('calendar_events.update', $calendar_event->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$calendar_event->id}}</p>
                </div>
                <div class="form-group">
                     <label for="title">TITLE</label>
                     <input type="text" name="title" class="form-control" value="{{$calendar_event->title}}"/>
                </div>
                    <div class="form-group">
                     <label for="start">START</label>
                     <input type="text" name="start" class="form-control" value="{{$calendar_event->start}}"/>
                </div>
                    <div class="form-group">
                     <label for="end">END</label>
                     <input type="text" name="end" class="form-control" value="{{$calendar_event->end}}"/>
                </div>
                    <div class="form-group">
                     <label for="is_all_day">IS_ALL_DAY</label>
                     <input type="text" name="is_all_day" class="form-control" value="{{$calendar_event->is_all_day}}"/>
                </div>
                    <div class="form-group">
                     <label for="background_color">BACKGROUND_COLOR</label>
                     <input type="text" name="background_color" class="form-control" value="{{$calendar_event->background_color}}"/>
                </div>



            <a class="btn btn-default" href="{{ route('calendar_events.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Save</button>
            </form>
        </div>
    </div>


@endsection
