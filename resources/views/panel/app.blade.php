<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    @include('panel.panel.head')

    <body class="sidebar-mini">
        <div class="wrapper">

            @include('panel.panel.top-nav')

            @include('panel.panel.sidebar')

            <div class="content-wrapper">

                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>@yield('title')</h1>
                            </div>
                            @hasSection('back')
                                <a href="@yield('back')"><button type="button" class="btn btn-warning-outline pull-right">Назад</button></a>
                            @endif
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Blank Page</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="content">
                    @yield('content')
                </section>

            </div>

        </div>

        @include('panel.panel.footer')

        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>

        <script src="{{ mix('admin/js/all.js') }}"></script>
        @yield('alerts_script')
        @yield('script')
        @stack('js')
    </body>
</html>
