@extends('layouts.base')

@section('content')
	<!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">@Lang('projects.index')</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>@Lang('projects.name')</th>
                            <th>@Lang('projects.description')</th>
                            <th>@Lang('projects.tasks')</th>
                            <th>@Lang('projects.assignedusers')</th>
                            <th>@Lang('projects.progressbar')</th>
                            <th style="width: 40px">@Lang('projects.progress')</th>
                        </tr>
                        @foreach($projects as $project)
                            <tr>
                                <td>{{ $project->id }}</td>
                                <td><a href="{{ URL::route('projects.show', $project->id) }}">{{ $project->name }}</a></td>

                                <td>{{ $project->description }}</td>
                                <td>{{ $project->assignedUsers()->count() }}</td>
                                <td></td>
                                <td>
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-danger" style="width: {{ $project->progress }}%"></div>
                                    </div>
                                </td>
                                <td><span class="badge bg-red">{{ $project->progress }}%</span></td>
                            </tr>
                        @endforeach
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
@stop