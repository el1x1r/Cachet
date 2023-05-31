<li class="list-group-item {{ $component->group_id ? "sub-component" : "component" }} status-{{ $component->status }}">
    @if($component->link)
    <a href="{{ $component->link }}" target="_blank" class="links">{!! $component->name !!}</a>
    @else
    {!! $component->name !!}
    @endif

    @if($component->description)
    <i class="ion ion-ios-help-outline help-icon" data-toggle="tooltip" data-title="{{ $component->description }}" data-container="body"></i>
    @endif

    <div class="pull-right">
        <small> <small class="label label-info" >{{ trans('cachet.components.last_updated', ['timestamp' => $component->updated_at_formatted]) }}</small></small>
    </div>
</li>
