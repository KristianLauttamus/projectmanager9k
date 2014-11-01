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
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->decription }}</td>
                                <td>{{ $project->tasks()->count() }}</td>
                                <td>{{ $project->assignedUsers()->count() }}</td>
                                <td>
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-danger" style="width: {{ $project->progress }}%"></div>
                                    </div>
                                </td>
                                <td><span class="badge bg-red">{{ $project->progress }}%</span></td>
                            </tr>
                        @endforeach
                        
                        <tr>
                            <td>2.</td>
                            <td>Clean database</td>
                            <td>
                                <div class="progress xs">
                                    <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                                </div>
                            </td>
                            <td><span class="badge bg-yellow">70%</span></td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Cron job running</td>
                            <td>
                                <div class="progress xs progress-striped active">
                                    <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                                </div>
                            </td>
                            <td><span class="badge bg-light-blue">30%</span></td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Fix and squish bugs</td>
                            <td>
                                <div class="progress xs progress-striped active">
                                    <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                                </div>
                            </td>
                            <td><span class="badge bg-green">90%</span></td>
                        </tr>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
@stop