<li class="nav-item {{ Request::is('cities*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('cities.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Cities</span>
    </a>
</li>
<li class="nav-item {{ Request::is('services*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('services.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Services</span>
    </a>
</li>
<li class="nav-item {{ Request::is('tags*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('tags.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Tags</span>
    </a>
</li>
<li class="nav-item {{ Request::is('propertyTypes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('propertyTypes.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Property Types</span>
    </a>
</li>
<li class="nav-item {{ Request::is('neighborhoods*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('neighborhoods.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Neighborhoods</span>
    </a>
</li>
<li class="nav-item {{ Request::is('properties*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('properties.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Properties</span>
    </a>
</li>
<li class="nav-item {{ Request::is('propertiesServices*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('propertiesServices.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Properties Services</span>
    </a>
</li>
<li class="nav-item {{ Request::is('posts*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('posts.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Posts</span>
    </a>
</li>
<li class="nav-item {{ Request::is('postsTags*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('postsTags.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Posts Tags</span>
    </a>
</li>
<li class="nav-item {{ Request::is('coments*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('coments.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Coments</span>
    </a>
</li>
