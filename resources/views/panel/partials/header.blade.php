{{--<div class="main-panel">--}}
<nav class="navbar navbar-default navbar-fixed" dir="rtl">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"> پروژه نرم افزار </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
                <li class="dropdown">
                    <a href="{{ URL::to('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        خروج
                    </a>

                    <form id="logout-form" action="{{ URL::to('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{--</div>--}}