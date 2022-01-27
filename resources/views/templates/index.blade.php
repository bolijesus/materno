

@include('templates.head')


<!-- Loader -->
{{-- @include('templates.layout.loader') --}}
<!-- #Loader -->

{{-- @include('templates.layout.search_bar')         --}}
        <!-- Top Bar -->
        @include('templates.layout.top_bar')         
        <!-- #Top Bar -->
        <section>
            <!-- Left Sidebar -->
            @include('templates.layout.left_sidebar')
            <!-- #END# Left Sidebar -->
        </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                {{-- Bread Crumbs --}}
                    @include('templates.layout.breadcrumbs')
                {{-- #Bread Crumbs --}}
                @yield('content')
            </div>
        </div>
    </section>

@include('templates.scripts')