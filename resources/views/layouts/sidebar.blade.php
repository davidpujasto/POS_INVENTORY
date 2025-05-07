<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show " id="sidebar">
    <div class="c-sidebar-brand d-md-down-none">
        <a href="{{ route('home') }}">
            <img class="c-sidebar-brand-full" src="{{ asset('images/logo.png') }}" alt="Site Logo" width="150">
            <img class="c-sidebar-brand-minimized" src="{{ asset('images/logo.png') }}" alt="Site Logo" width="40">
            
        
    </div>
    <ul class="c-sidebar-nav">
    @include('layouts.menu')
       
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>


