@if($appFooter)
{!! $appFooter !!}
@else
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                @if($showSupport)
                <p>
                    {!! trans('cachet.powered_by') !!}
                    @if($showTimezone)
                    {{ trans('cachet.timezone', ['timezone' => $timezone]) }}
                    @endif
                </p>
                @endif
            </div>
            <div class="col-sm-8">
                <ul class="list-inline">
                    <li>
                        <a class="btn btn-link" href="/logout">{{ trans('dashboard.logout') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
@endif

@include("partials.analytics")
