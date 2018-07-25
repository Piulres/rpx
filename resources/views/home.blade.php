@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Recently added teams</div>

                <div class="panel-body table-responsive">
                    <table class="table table-bordered table-striped ajaxTable">
                        <thead>
                        <tr>

                            <th> @lang('global.teams.fields.name')</th>
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        @foreach($teams as $team)
                            <tr>

                                <td>{{ $team->name }} </td>
                                <td>

                                    @can('team_view')
                                    <a href="{{ route('admin.teams.show',[$team->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan

                                    @can('team_edit')
                                    <a href="{{ route('admin.teams.edit',[$team->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan

                                    @can('team_delete')
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.teams.destroy', $team->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan

                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Recently added users</div>

                <div class="panel-body table-responsive">
                    <table class="table table-bordered table-striped ajaxTable">
                        <thead>
                        <tr>

                            <th> @lang('global.users.fields.name')</th>
                            <th> @lang('global.users.fields.email')</th>
                            <th> @lang('global.users.fields.approved')</th>
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        @foreach($users as $user)
                            <tr>

                                <td>{{ $user->name }} </td>
                                <td>{{ $user->email }} </td>
                                <td>{{ $user->approved }} </td>
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
                    </table>
                </div>
            </div>
        </div>

         <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Recently added timeentries</div>

                <div class="panel-body table-responsive">
                    <table class="table table-bordered table-striped ajaxTable">
                        <thead>
                        <tr>

                            <th> @lang('global.time-entries.fields.start-time')</th>
                            <th> @lang('global.time-entries.fields.end-time')</th>
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        @foreach($timeentries as $timeentry)
                            <tr>

                                <td>{{ $timeentry->start_time }} </td>
                                <td>{{ $timeentry->end_time }} </td>
                                <td>

                                    @can('time_entry_view')
                                    <a href="{{ route('admin.time_entries.show',[$timeentry->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan

                                    @can('time_entry_edit')
                                    <a href="{{ route('admin.time_entries.edit',[$timeentry->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan

                                    @can('time_entry_delete')
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.time_entries.destroy', $timeentry->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan

                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
         </div>

         <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Recently added contentpages</div>

                <div class="panel-body table-responsive">
                    <table class="table table-bordered table-striped ajaxTable">
                        <thead>
                        <tr>

                            <th> @lang('global.content-pages.fields.title')</th>
                            <th> @lang('global.content-pages.fields.page-text')</th>
                            <th> @lang('global.content-pages.fields.excerpt')</th>
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        @foreach($contentpages as $contentpage)
                            <tr>

                                <td>{{ $contentpage->title }} </td>
                                <td>{{ $contentpage->page_text }} </td>
                                <td>{{ $contentpage->excerpt }} </td>
                                <td>

                                    @can('content_page_view')
                                    <a href="{{ route('admin.content_pages.show',[$contentpage->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan

                                    @can('content_page_edit')
                                    <a href="{{ route('admin.content_pages.edit',[$contentpage->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan

                                    @can('content_page_delete')
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.content_pages.destroy', $contentpage->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan

                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
         </div>


    </div>
@endsection
