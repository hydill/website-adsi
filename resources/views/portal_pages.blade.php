@extends('layout.main')

@section('container')
        <div id="page-content-wrapper">
            {{-- navbar --}}
            <nav class="navbar navbar-expand-lg navbar-light bg-transparant py-4 px-4">
                <div class="d-flex align-item-center">
                    <div class="container mx-auto p-2" style="width: 50px">
                        <i class=" fa-sharp fa-solid fa-arrow-left fs-2 me-3" id="toggleMenu"></i>
                    </div>
                    <div>
                        <h2 class="fs-2 m-0">Portal Otomatis</h2>
                    </div>

                </div>
            </nav>
            {{-- akhir navbar --}}
            {{-- konten --}}

            <div class="container-fluid px-5">
                <div class="row g-3 my-2">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Titik Portal</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>
                                                    No.
                                                </th>
                                                <th>
                                                    Lokasi/tempat portal
                                                </th>
                                                <th>
                                                    Aksi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="py-1">
                                                    1.
                                                </td>
                                                <td>
                                                    Portal Belakang
                                                </td>
                                                <td>
                                                    <div>
                                                        <button type="button" class="btn btn-success"
                                                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                            Buka
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="py-1">
                                                    2.
                                                </td>
                                                <td>
                                                    Portal Depan
                                                </td>
                                                <td>
                                                    <div>
                                                        <button type="button" class="btn btn-success"
                                                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                            Buka
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="py-1">
                                                    3.
                                                </td>
                                                <td>
                                                    Portal Gerbang 2
                                                </td>
                                                <td>
                                                    <div>
                                                        <button type="button" class="btn btn-success"
                                                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                            Buka
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
@endsection