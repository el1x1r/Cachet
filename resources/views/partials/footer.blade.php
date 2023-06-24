@if($appFooter)
{!! $appFooter !!}
@else
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <b>Hi, {{ $currentUser->username }}</b>
            </div>
            <div class="col-sm-8">
                <ul class="list-inline">
                    @if($currentUser)
                    <li>
                        <a class="btn btn-link" href="{{ cachet_route('dashboard') }}">{{ trans('dashboard.dashboard') }}</a>
                    </li>
                    <li>
                        <a class="btn btn-link" href="{{ cachet_route('auth.logout') }}">{{ trans('dashboard.logout') }}</a>
                    </li>
                    @endif
                    <li>
                        <a class="btn btn-link" href="#top">Back to top</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
@endif

@include("partials.analytics")
