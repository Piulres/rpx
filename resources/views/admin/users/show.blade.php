@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.users.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('global.users.fields.name')</th>
                            <td field-key='name'>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.email')</th>
                            <td field-key='email'>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.role')</th>
                            <td field-key='role'>
                                @foreach ($user->role as $singleRole)
                                    <span class="label label-info label-many">{{ $singleRole->title }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.team')</th>
                            <td field-key='team'>{{ $user->team->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.approved')</th>
                            <td field-key='approved'>{{ Form::checkbox("approved", 1, $user->approved == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.created-by')</th>
                            <td field-key='created_by'>{{ $user->created_by->name or '' }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#user_actions" aria-controls="user_actions" role="tab" data-toggle="tab">Ações do usuário</a></li>
<li role="presentation" class=""><a href="#internal_notifications" aria-controls="internal_notifications" role="tab" data-toggle="tab">Notifications</a></li>
<li role="presentation" class=""><a href="#assets_history" aria-controls="assets_history" role="tab" data-toggle="tab">Assets history</a></li>
<li role="presentation" class=""><a href="#time_entries" aria-controls="time_entries" role="tab" data-toggle="tab">Entradas de tempo</a></li>
<li role="presentation" class=""><a href="#tasks" aria-controls="tasks" role="tab" data-toggle="tab">Tasks</a></li>
<li role="presentation" class=""><a href="#users" aria-controls="users" role="tab" data-toggle="tab">Usuários</a></li>
<li role="presentation" class=""><a href="#assets" aria-controls="assets" role="tab" data-toggle="tab">Assets</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="user_actions">
<table class="table table-bordered table-striped {{ count($user_actions) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('global.user-actions.created_at')</th>
                        <th>@lang('global.user-actions.fields.user')</th>
                        <th>@lang('global.user-actions.fields.action')</th>
                        <th>@lang('global.user-actions.fields.action-model')</th>
                        <th>@lang('global.user-actions.fields.action-id')</th>
                        
        </tr>
    </thead>

    <tbody>
        @if (count($user_actions) > 0)
            @foreach ($user_actions as $user_action)
                <tr data-entry-id="{{ $user_action->id }}">
                    <td>{{ $user_action->created_at or '' }}</td>
                                <td field-key='user'>{{ $user_action->user->name or '' }}</td>
                                <td field-key='action'>{{ $user_action->action }}</td>
                                <td field-key='action_model'>{{ $user_action->action_model }}</td>
                                <td field-key='action_id'>{{ $user_action->action_id }}</td>
                                
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="7">@lang('global.app_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="internal_notifications">
<table class="table table-bordered table-striped {{ count($internal_notifications) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('global.internal-notifications.fields.text')</th>
                        <th>@lang('global.internal-notifications.fields.link')</th>
                        <th>@lang('global.internal-notifications.fields.users')</th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        @if (count($internal_notifications) > 0)
            @foreach ($internal_notifications as $internal_notification)
                <tr data-entry-id="{{ $internal_notification->id }}">
                    <td field-key='text'>{{ $internal_notification->text }}</td>
                                <td field-key='link'>{{ $internal_notification->link }}</td>
                                <td field-key='users'>
                                    @foreach ($internal_notification->users as $singleUsers)
                                        <span class="label label-info label-many">{{ $singleUsers->name }}</span>
                                    @endforeach
                                </td>
                                                                <td>
                                    @can('internal_notification_view')
                                    <a href="{{ route('admin.internal_notifications.show',[$internal_notification->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan
                                    @can('internal_notification_edit')
                                    <a href="{{ route('admin.internal_notifications.edit',[$internal_notification->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan
                                    @can('internal_notification_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.internal_notifications.destroy', $internal_notification->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="8">@lang('global.app_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="assets_history">
<table class="table table-bordered table-striped {{ count($assets_histories) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('global.assets-history.created_at')</th>
                        <th>@lang('global.assets-history.fields.asset')</th>
                        <th>@lang('global.assets-history.fields.status')</th>
                        <th>@lang('global.assets-history.fields.location')</th>
                        <th>@lang('global.assets-history.fields.assigned-user')</th>
                        
        </tr>
    </thead>

    <tbody>
        @if (count($assets_histories) > 0)
            @foreach ($assets_histories as $assets_history)
                <tr data-entry-id="{{ $assets_history->id }}">
                    <td>{{ $assets_history->created_at or '' }}</td>
                                <td field-key='asset'>{{ $assets_history->asset->title or '' }}</td>
                                <td field-key='status'>{{ $assets_history->status->title or '' }}</td>
                                <td field-key='location'>{{ $assets_history->location->title or '' }}</td>
                                <td field-key='assigned_user'>{{ $assets_history->assigned_user->name or '' }}</td>
                                
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="7">@lang('global.app_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="time_entries">
<table class="table table-bordered table-striped {{ count($time_entries) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('global.time-entries.fields.work-type')</th>
                        <th>@lang('global.time-entries.fields.project')</th>
                        <th>@lang('global.time-entries.fields.start-time')</th>
                        <th>@lang('global.time-entries.fields.end-time')</th>
                        <th>@lang('global.time-entries.fields.created-by')</th>
                        <th>@lang('global.time-entries.fields.created-by-team')</th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        @if (count($time_entries) > 0)
            @foreach ($time_entries as $time_entry)
                <tr data-entry-id="{{ $time_entry->id }}">
                    <td field-key='work_type'>{{ $time_entry->work_type->name or '' }}</td>
                                <td field-key='project'>{{ $time_entry->project->name or '' }}</td>
                                <td field-key='start_time'>{{ $time_entry->start_time }}</td>
                                <td field-key='end_time'>{{ $time_entry->end_time }}</td>
                                <td field-key='created_by'>{{ $time_entry->created_by->name or '' }}</td>
                                <td field-key='created_by_team'>{{ $time_entry->created_by_team->name or '' }}</td>
                                                                <td>
                                    @can('time_entry_view')
                                    <a href="{{ route('admin.time_entries.show',[$time_entry->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan
                                    @can('time_entry_edit')
                                    <a href="{{ route('admin.time_entries.edit',[$time_entry->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan
                                    @can('time_entry_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.time_entries.destroy', $time_entry->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="11">@lang('global.app_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="tasks">
<table class="table table-bordered table-striped {{ count($tasks) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('global.tasks.fields.name')</th>
                        <th>@lang('global.tasks.fields.description')</th>
                        <th>@lang('global.tasks.fields.status')</th>
                        <th>@lang('global.tasks.fields.tag')</th>
                        <th>@lang('global.tasks.fields.attachment')</th>
                        <th>@lang('global.tasks.fields.due-date')</th>
                        <th>@lang('global.tasks.fields.user')</th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        @if (count($tasks) > 0)
            @foreach ($tasks as $task)
                <tr data-entry-id="{{ $task->id }}">
                    <td field-key='name'>{{ $task->name }}</td>
                                <td field-key='description'>{!! $task->description !!}</td>
                                <td field-key='status'>{{ $task->status->name or '' }}</td>
                                <td field-key='tag'>
                                    @foreach ($task->tag as $singleTag)
                                        <span class="label label-info label-many">{{ $singleTag->name }}</span>
                                    @endforeach
                                </td>
                                <td field-key='attachment'>@if($task->attachment)<a href="{{ asset(env('UPLOAD_PATH').'/' . $task->attachment) }}" target="_blank">Download file</a>@endif</td>
                                <td field-key='due_date'>{{ $task->due_date }}</td>
                                <td field-key='user'>{{ $task->user->name or '' }}</td>
                                                                <td>
                                    @can('task_view')
                                    <a href="{{ route('admin.tasks.show',[$task->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan
                                    @can('task_edit')
                                    <a href="{{ route('admin.tasks.edit',[$task->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan
                                    @can('task_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.tasks.destroy', $task->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="12">@lang('global.app_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="users">
<table class="table table-bordered table-striped {{ count($users) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('global.users.fields.name')</th>
                        <th>@lang('global.users.fields.email')</th>
                        <th>@lang('global.users.fields.role')</th>
                        <th>@lang('global.users.fields.team')</th>
                        <th>@lang('global.users.fields.approved')</th>
                        <th>@lang('global.users.fields.created-by')</th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        @if (count($users) > 0)
            @foreach ($users as $user)
                <tr data-entry-id="{{ $user->id }}">
                    <td field-key='name'>{{ $user->name }}</td>
                                <td field-key='email'>{{ $user->email }}</td>
                                <td field-key='role'>
                                    @foreach ($user->role as $singleRole)
                                        <span class="label label-info label-many">{{ $singleRole->title }}</span>
                                    @endforeach
                                </td>
                                <td field-key='team'>{{ $user->team->name or '' }}</td>
                                <td field-key='approved'>{{ Form::checkbox("approved", 1, $user->approved == 1 ? true : false, ["disabled"]) }}</td>
                                <td field-key='created_by'>{{ $user->created_by->name or '' }}</td>
                                                                <td>
                                    @can('user_view')
                                    <a href="{{ route('admin.users.show',[$user->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan
                                    @can('user_edit')
                                    <a href="{{ route('admin.users.edit',[$user->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan
                                    @can('user_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.users.destroy', $user->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="13">@lang('global.app_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="assets">
<table class="table table-bordered table-striped {{ count($assets) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('global.assets.fields.category')</th>
                        <th>@lang('global.assets.fields.serial-number')</th>
                        <th>@lang('global.assets.fields.title')</th>
                        <th>@lang('global.assets.fields.photo1')</th>
                        <th>@lang('global.assets.fields.photo2')</th>
                        <th>@lang('global.assets.fields.photo3')</th>
                        <th>@lang('global.assets.fields.status')</th>
                        <th>@lang('global.assets.fields.location')</th>
                        <th>@lang('global.assets.fields.assigned-user')</th>
                        <th>@lang('global.assets.fields.notes')</th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        @if (count($assets) > 0)
            @foreach ($assets as $asset)
                <tr data-entry-id="{{ $asset->id }}">
                    <td field-key='category'>{{ $asset->category->title or '' }}</td>
                                <td field-key='serial_number'>{{ $asset->serial_number }}</td>
                                <td field-key='title'>{{ $asset->title }}</td>
                                <td field-key='photo1'>@if($asset->photo1)<a href="{{ asset(env('UPLOAD_PATH').'/' . $asset->photo1) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo1) }}"/></a>@endif</td>
                                <td field-key='photo2'>@if($asset->photo2)<a href="{{ asset(env('UPLOAD_PATH').'/' . $asset->photo2) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo2) }}"/></a>@endif</td>
                                <td field-key='photo3'>@if($asset->photo3)<a href="{{ asset(env('UPLOAD_PATH').'/' . $asset->photo3) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $asset->photo3) }}"/></a>@endif</td>
                                <td field-key='status'>{{ $asset->status->title or '' }}</td>
                                <td field-key='location'>{{ $asset->location->title or '' }}</td>
                                <td field-key='assigned_user'>{{ $asset->assigned_user->name or '' }}</td>
                                <td field-key='notes'>{!! $asset->notes !!}</td>
                                                                <td>
                                    @can('asset_view')
                                    <a href="{{ route('admin.assets.show',[$asset->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan
                                    @can('asset_edit')
                                    <a href="{{ route('admin.assets.edit',[$asset->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan
                                    @can('asset_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.assets.destroy', $asset->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="15">@lang('global.app_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.users.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop
