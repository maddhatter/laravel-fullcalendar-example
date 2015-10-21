@extends('layout')

@section('content')
    <div class="page-header">
        <h1>CalendarEvents</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>START</th>
                        <th>END</th>
                        <th>IS_ALL_DAY</th>
                        <th>BACKGROUND_COLOR</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($calendar_events as $calendar_event)
                <tr>
                    <td>{{$calendar_event->id}}</td>
                    <td>{{$calendar_event->title}}</td>
                    <td>{{$calendar_event->start}}</td>
                    <td>{{$calendar_event->end}}</td>
                    <td>{{$calendar_event->is_all_day}}</td>
                    <td>{{$calendar_event->background_color}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('calendar_events.show', $calendar_event->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('calendar_events.edit', $calendar_event->id) }}">Edit</a>
                        <form action="{{ route('calendar_events.destroy', $calendar_event->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>

            <a class="btn btn-success" href="{{ route('calendar_events.create') }}">Create</a>
        </div>
    </div>


@endsection