@foreach ($menu as $item=>$value)

<li class="nav-item ">
    <a href="{{($value->txt_function)}}" class="nav-link ">
    <i class="nav-icon fas fa-{{$value->txt_icon_name}}"></i>
    <p>
    {{$value->main_menu}}
    <!-- <i class="right fas fa-angle-left"></i> -->
    </p>
    </a>
    
    
    <!-- @foreach($submenu as $key=>$sub)

   

    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="#" class="nav-link ">
            <i class="far fa-circle nav-icon"></i>
            <p>{{$sub->sub_menu}}</p>
            </a>
        </li>
    </ul>

  

    @endforeach -->

    
</li>


@endforeach