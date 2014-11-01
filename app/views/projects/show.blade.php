@extends('layouts.base')

@section('content')
	<!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">{{ $project->name }}</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div>
                        {{ $project->description }}
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">@Lang('projects.assignedusers')</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>@Lang('users.name')</th>
                            <th>@Lang('users.email')</th>
                        </tr>
                        @foreach($project->assignedUsers()->get() as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
        <div class="col-md-6">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">@Lang('projects.assignedusers')</h3>
                </div><!-- /.box-header -->
                <div class="box-tools">
                    <a href="{{ '/projects/'.$project->id.'create/task' }}"></a>
                </div>
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>@Lang('projects.taskname')</th>
                            <th>@Lang('projects.taskdescription')</th>
                            <th>@Lang('projects.progressbar')</th>
                            <th>@Lang('projects.progress')</th>
                        </tr>
                            <tr>
                                <td>TaskName</td>
                                <td>TaskDesc</td>
                                <td>
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-danger" style="width: TaskProgress%"></div>
                                    </div>
                                </td>
                                <td><span class="badge bg-red">TaskProgress%</span></td>
                            </tr>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
@stop