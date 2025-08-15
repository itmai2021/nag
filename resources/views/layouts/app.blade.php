<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Admin NAG</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('/assets/images/NAG.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('/assets/vendors/simple-datatables/style.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/41.2.0/classic/ckeditor.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/ckeditor5-build-classic-with-image-resize@latest/build/ckeditor.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/ckeditor5-classic-plus@41.3.0/build/ckeditor.js"></script>

</head>
@if (Auth::user())

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo d-flex justify-content-center align-items-center w-100">

                            <a href="#" class="d-flex justify-content-center align-items-center">
                                <img src="{{ asset('/assets/images/NAG.png') }}" alt="Logo"
                                    style="height: 20px; width: auto;">
                            </a>
                        </div>

                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i
                                    class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <!-- <li class="sidebar-title">Menu</li> -->
                        <li class="sidebar-item" id="company">
                            <a href="{{ route('company.index') }}" class='sidebar-link' id="a-company">
                                <i class="bi bi-grid-fill"></i>
                                <span>Company</span>
                            </a>
                        </li>
                        <li class="sidebar-item" id="business_unit">
                            <a href="{{ route('business_unit.index') }}" class='sidebar-link' id="a-business_unit">
                                <i class="bi bi-grid-fill"></i>
                                <span>Business Unit</span>
                            </a>
                        </li>
                        <li class="sidebar-item" id="news">
                            <a href="{{ route('news.index') }}" class='sidebar-link' id="a-news">
                                <i class="bi bi-grid-fill"></i>
                                <span>News</span>
                            </a>
                        </li>
                        <li class="sidebar-item" id="contact_us">
                            <a href="{{ route('contact_us.index_admin') }}" class='sidebar-link' id="a-contact_us">
                                <i class="bi bi-grid-fill"></i>
                                <span>Message</span>
                            </a>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>

                                <span>{{ Auth::user()->name ?? 'Admin' }}</span>
                            </a>
                            <ul class="submenu ">
                                <!-- <li class="submenu-item ">
                                    <a href="">Change Password</a>
                                </li> -->
                                <li class="submenu-item ">
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <span>Logout</span></a>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                @yield('content')
                @include('sweetalert::alert')
            </div>
        </div>
    </div>
    <script src="{{ asset('/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('/assets/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('/assets/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('/assets/js/main.js') }}"></script>

    <script src="{{ asset('/assets/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script src="{{ asset('/assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    @yield('addon-script')
</body>
@else
@dd('NO')
<script>
    window.location.href = "{{ route('login.index') }}";
</script>
@endif

</html>
<script>
    $(document).ready(function() {
        var url = window.location.href.split("/");
        console.log(url[3]);
        switch (url[4]) {
            case 'company':
                $("#company").addClass('active');
                break;
            case 'business_unit':
                $("#business_unit").addClass('active');
                break;
            case 'news':
                $("#news").addClass('active');
                break;
            case 'contact_us':
                $("#contact_us").addClass('active');
                break;
            default:
                break;
        }
    });
</script>
<script>
    function MyCustomUploadAdapterPlugin(editor) {
        editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
            return {
                upload: () => {
                    return loader.file
                        .then(file => {
                            const data = new FormData();
                            data.append('upload', file);

                            return fetch("{{ route('news.upload') }}", {
                                    method: 'POST',
                                    headers: {
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                    },
                                    body: data
                                })
                                .then(response => response.json())
                                .then(res => {
                                    return {
                                        default: res.url
                                    };
                                });
                        });
                }
            };
        };
    }

    document.querySelectorAll('.editor').forEach(element => {
        ClassicEditor
            .create(element, {
                extraPlugins: [MyCustomUploadAdapterPlugin],
                image: {
                    resizeUnit: '%',
                    resizeOptions: [{
                            name: 'resizeImage:original',
                            label: 'Original',
                            value: null
                        },
                        {
                            name: 'resizeImage:50',
                            label: '50%',
                            value: '50'
                        },
                        {
                            name: 'resizeImage:75',
                            label: '75%',
                            value: '75'
                        }
                    ],
                    toolbar: [
                        'imageStyle:alignLeft',
                        'imageStyle:alignCenter',
                        'imageStyle:alignRight',
                        '|',
                        'resizeImage:50',
                        'resizeImage:75',
                        'resizeImage:original',
                        '|',
                        'imageTextAlternative'
                    ],
                    styles: ['alignLeft', 'alignCenter', 'alignRight']
                },
                toolbar: [
                    'heading', '|',
                    'bold', 'italic', '|',
                    'link', 'bulletedList', 'numberedList', '|',
                    'uploadImage', 'blockQuote', '|',
                    'undo', 'redo'
                ]
            })
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    element.value = editor.getData();
                });
            })
            .catch(console.error);
    });
</script>