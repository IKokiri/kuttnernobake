<!DOCTYPE html>
<html lang="en">

<head>
    @component('admin/layout.component_head')
    @endcomponent
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        @component('admin/layout.component_sidebar')
        @endcomponent

        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content"> 
                @component('admin/layout.component_topbar')
                @endcomponent

                @hasSection('page')
                    @yield('page')
                @endif
            </div>   
            @component('admin/layout.component_footer')
            @endcomponent
        </div>
    </div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
     

    @component('admin/layout.component_scripts')
    @endcomponent
  
</body>


@hasSection('script')
    @yield('script')
@endif


</html>

