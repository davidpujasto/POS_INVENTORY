<!-- Dropezone CSS -->
<link rel="stylesheet" href="{{ asset('css/dropzone.css') }}">
<!-- CoreUI CSS -->
@vite('resources/sass/app.scss')
<link href="https://cdn.datatables.net/v/bs4/jszip-3.10.1/dt-1.13.5/b-2.4.1/b-html5-2.4.1/b-print-2.4.1/sl-1.7.0/datatables.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

@yield('third_party_stylesheets')

@stack('page_css')

@livewireStyles

<style>

    /* Sidebar background dan teks dasar */
.c-sidebar {
    background-color: #1e293b !important; /* Slate-800 */
    color: #f8fafc !important; /* Slate-50 */
}

.c-sidebar-nav {
    overflow: visible !important;
}

.c-sidebar .c-sidebar-nav-link {
    color: #94a3b8!important; /* Slate-400 */
    border-radius: 0.375rem;
    padding: 0.5rem 1rem;
    transition: all 0.2s ease-in-out;
}

.c-sidebar .c-sidebar-nav-link:hover {
    background-color: rgba(255, 255, 255, 0.05) !important;
    color: #ffffff !important; /* Slate-100 */

    border-radius: 0.5rem; /* Efek membulat lebih terasa */
}

.c-sidebar .c-active {
    color: #ffffff !important;
    background-color: rgba(255, 255, 255, 0.08) !important;
    font-weight: 700 !important;
    border-radius: 0.5rem;
}

.c-sidebar .c-sidebar-nav-icon {
    color: #94a3b8 !important;
    transition: color 0.2s ease-in-out;
}

.c-sidebar .c-sidebar-nav-link:hover .c-sidebar-nav-icon {
    color: #38bdf8 !important; /* Sky-400 */
}

.c-sidebar .c-active .c-sidebar-nav-icon {
    color: #38bdf8 !important;
    font-weight: bold !important;
}

    div.dataTables_wrapper div.dataTables_length select {
        width: 65px;
        display: inline-block;
    }
    .select2-container--default .select2-selection--single {
        background-color: #fff;
        border: 1px solid #D8DBE0;
        border-radius: 4px;
    }
    .select2-container--default .select2-selection--multiple {
        background-color: #fff;
        border: 1px solid #D8DBE0;
        border-radius: 4px;
    }
    .select2-container .select2-selection--multiple {
        height: 35px;
    }
    .select2-container .select2-selection--single {
        height: 35px;
    }
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        line-height: 33px;
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow b {
        margin-top: 2px;
    }
</style>
