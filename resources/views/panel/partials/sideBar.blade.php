<ul class="nav">
    <li>
        <a href="{{ url('/daily') }}">
            <i class="pe-7s-notebook"></i>
            <p> برنامه ی روز ها </p>
        </a>
    </li>
    <li>
        <a href="{{ URL::to('/') }}">
            <i class="pe-7s-display2"></i>
            <p> برنامه ی امتحانی </p>
        </a>
    </li>
    <li>
        <a href="{{ url('calender') }}">
            <i class="pe-7s-study"></i>
            <p> تقویم </p>
        </a>
    </li>
</ul>