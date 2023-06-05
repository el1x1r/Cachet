<li class="list-group-item {{ $component->group_id ? "sub-component" : "component" }} status-{{ $component->status }}">
    @if($component->link)
    <a href="{{ $component->link }}" target="_blank" class="links">{!! $component->name !!}</a>
    @else
    {!! $component->name !!}
    @endif

    @if($component->description)
    <i class="ion ion-ios-help-outline help-icon" data-toggle="tooltip" data-title="{{ $component->description }}" data-container="body"></i>
    @endif

    @if($component->days_until_formatted)
     <div class="pull-right">
        <small><small class="label label-info" data-toggle="tooltip" title="{{ $component->last_day_formatted }}">{{ trans('cachet.components.last_updated', ['timestamp' => $component->days_until_formatted]) }}</small></small>
    </div>
    @endif
</li>
