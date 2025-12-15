@extends('back.includes.layout')

@section('content')
    <div class="wrapper">
        {{-- side --}}
        @include('back.includes.side')

        <div class="main">
            {{-- nav --}}
            @include('back.includes.nav')

            <main class="content">
                <div class="container-fluid">

                    <div class="header">
                        <h1 class="header-title">
                            Help and support center
                        </h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                <li class="breadcrumb-item active" aria-current="page">Help and Support</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-xl-2">

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Help and Support</h5>
                                </div>

                                <div class="list-group list-group-flush" role="tablist">
                                    <a class="list-group-item list-group-item-action active" onclick="newForm()"
                                        href="#form" data-bs-toggle="list">
                                        Request Form
                                    </a>
                                    <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#password"
                                        role="tab" onclick="listItem()">
                                        My Inbox
                                    </a>
                                    <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#password"
                                        role="tab" onclick="request()">
                                        My Request
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-9 col-xl-10">
                            <div class="">
                                <div class="fade-in" id="loadContent">
                                    {{-- load content here --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        newForm()
        function newForm() {
            $('#loadContent').load("createForm");
        }
        function listItem() {
            $('#loadContent').load("support-list");
        }
        function request() {
            $('#loadContent').load("support-requets");
        }
        function inbox() {
            $('#loadContent').load("support-inbox");
        }

    </script>
@endsection
