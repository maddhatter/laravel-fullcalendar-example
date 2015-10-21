@extends('layout')

@section('content')
    <div class="page-header">
        <h1>CalendarEvents / Create </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('calendar_events.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                     <label for="title">TITLE</label>
                     <input type="text" name="title" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="start">START</label>
                     <input type="text" name="start" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="end">END</label>
                     <input type="text" name="end" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="is_all_day">IS_ALL_DAY</label>
                     <input type="text" name="is_all_day" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="background_color">BACKGROUND_COLOR</label>
                     <input type="text" name="background_color" class="form-control" value=""/>
                </div>



            <a class="btn btn-default" href="{{ route('calendar_events.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Create</button>
            </form>
        </div>
    </div>


@endsection
