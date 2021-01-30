<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            
            @if(Auth::user()->id==1)
            <li class="nav-title">Admin Privilege</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/types') }}"><i class="nav-icon icon-graduation"></i> Categories</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/sub-types') }}"><i class="nav-icon icon-graduation"></i> Sub Categories</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/contacts') }}"><i class="nav-icon icon-graduation"></i> Contact</a></li>
            @endif
            <li class="nav-title">Data</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/venues') }}"><i class="nav-icon icon-graduation"></i> Venues</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/contactvenues') }}"><i class="nav-icon icon-graduation"></i> Contact Venues</a></li>
            @if(Auth::user()->id==1)
           <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i> {{ __('Manage access') }}</a></li>
            @endif
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
