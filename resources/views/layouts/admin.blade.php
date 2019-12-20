<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('global.site_title') }}</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/buttons.dataTables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/select.dataTables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/coreui.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/dropzone.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    @yield('styles')
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed pace-done sidebar-lg-show">
    <header class="app-header navbar">
        <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="javascript:void(0);">
            <img class="logo-header navbar-brand-full m-0" src="{{ asset('images/logo.png') }}">
            <img class="logo-small-header navbar-brand-minimized m-0" src="{{ asset('images/logo-small.png') }}">
        </a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none mg-left--16" type="button" data-toggle="sidebar-lg-show">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="nav navbar-nav d-sm-down-none" id="search-global-form">
            <li class="in">
                <form id="search-suggestion-form" role="search" class="app-search hidden-xs">
                    <input class="form-control search-box" name="search" id="search-suggestion" type="search" placeholder="Type keyword and enter" aria-label="Search">
                    <a href="javascript:void(0);" class="active">
                        <img src="{{ asset('images/search_icon.svg') }}" class="search-icon" alt="search icon">
                    </a>
                </form>
                <div class="suggestion-form">
                    <div id="filter-suggestion">
                    </div>
                </div>
            </li>
        </ul>

        <ul class="nav navbar-nav ml-auto">
            <li class="d-md-down-none vertical-line">
                <span class="separator"></span>
            </li>
            <div id="userbox" class="userbox">
                <a href="javascript:void(0);" data-toggle="dropdown" aria-expanded="false">
                    <?php
                        $urlAvata = null;
                    ?>
                    @if (!empty($urlAvata))
                        <img src="{{ $urlAvata }}" alt="avata" class="avata-sidebar float-left">
                    @else
                        <div class="member-sidebar float-left">
                            <span class="avata-sidebar member-initials-sidebar">{{ substr(auth()->user()->name, 0, 1) }}</span>
                        </div>
                    @endif
                    <div class="profile-info mg-right-10 pd-top-5">
                        <span class="name">{{ ucwords(auth()->user()->name) }}</span>
                        <span class="role">{{ ucwords(auth()->user()->roles[0]->title) }}</span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right mg-top-10">
                    <div class="dropdown-header text-center">
                        <strong>Account</strong>
                    </div>
                    <a class="dropdown-item" href="javascript:void(0);">
                        <i class="nav-icon fas fa-user"></i>Profile
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>{{ trans('global.logout') }}
                    </a>
                </div>
            </div>
            @if(count(config('panel.available_languages', [])) > 1)
                <li class="nav-item dropdown d-md-down-none">
                    <a class="nav-link" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ strtoupper(app()->getLocale()) }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        @foreach(config('panel.available_languages') as $langLocale => $langName)
                            <a class="dropdown-item" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }} ({{ $langName }})</a>
                        @endforeach
                    </div>
                </li>
            @endif
        </ul>
    </header>

    <div class="app-body">
        @include('partials.menu')
        <main class="main">


            <div style="padding-top: 20px" class="container-fluid">

                @yield('content')

            </div>


        </main>
        <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/coreui.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script src="{{ asset('js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/jszip.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('js/ckeditor.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('js/select2.full.min.js') }}"></script>
    <script src="{{ asset('js/dropzone.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        // toastr
        toastr.options = {
            "closeButton": true,
            "positionClass": "toast-bottom-right"
        }
        @if(Session::has('alerts'))
            let alerts = {!! json_encode(Session::get('alerts')) !!};
            helpers.displayAlerts(alerts, toastr);
        @endif

        @if(Session::has('message'))
            var alertType = {!! json_encode(Session::get('alert-type', 'info')) !!};
            var alertMessage = {!! json_encode(Session::get('message')) !!};
            var alerter = toastr[alertType];

            if (alerter) {
                alerter(alertMessage);
            } else {
                toastr.error("toastr alert-type " + alertType + " is unknown");
            }
        @endif
        // end toastr

        $(function() {
            let copyButtonTrans = '{{ trans('global.datatables.copy') }}'
            let csvButtonTrans = '{{ trans('global.datatables.csv') }}'
            let excelButtonTrans = '{{ trans('global.datatables.excel') }}'
            let pdfButtonTrans = '{{ trans('global.datatables.pdf') }}'
            let printButtonTrans = '{{ trans('global.datatables.print') }}'
            let colvisButtonTrans = '{{ trans('global.datatables.colvis') }}'

            let languages = {
                'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json'
            };

            $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, { className: 'btn' })
            $.extend(true, $.fn.dataTable.defaults, {
                language: {
                    url: languages.{{ app()->getLocale() }}
                },
                columnDefs: [{
                    orderable: false,
                    className: 'select-checkbox',
                    targets: 0
                }, {
                    orderable: false,
                    searchable: false,
                    targets: -1
                }],
                select: {
                    style:    'multi+shift',
                    selector: 'td:first-child'
                },
                order: [],
                scrollX: true,
                pageLength: 100,
                dom: 'lBfrtip<"actions">',
                buttons: [
                  {
                      extend: 'copy',
                      className: 'btn-default',
                      text: copyButtonTrans,
                      exportOptions: {
                          columns: ':visible'
                      }
                  },
                  {
                      extend: 'csv',
                      className: 'btn-default',
                      text: csvButtonTrans,
                      exportOptions: {
                          columns: ':visible'
                      }
                  },
                  {
                      extend: 'excel',
                      className: 'btn-default',
                      text: excelButtonTrans,
                      exportOptions: {
                          columns: ':visible'
                      }
                  },
                  {
                      extend: 'pdf',
                      className: 'btn-default',
                      text: pdfButtonTrans,
                      exportOptions: {
                          columns: ':visible'
                      }
                  },
                  {
                      extend: 'print',
                      className: 'btn-default',
                      text: printButtonTrans,
                      exportOptions: {
                          columns: ':visible'
                      }
                  },
                  {
                      extend: 'colvis',
                      className: 'btn-default',
                      text: colvisButtonTrans,
                      exportOptions: {
                          columns: ':visible'
                      }
                  }
                ]
              });

              $.fn.dataTable.ext.classes.sPageButton = '';
          });

    </script>
    @yield('scripts')
</body>

</html>