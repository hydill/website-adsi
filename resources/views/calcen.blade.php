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
                    <h2 class="fs-2 m-0">Call Center</h2>
                </div>

            </div>
        </nav>
        {{-- akhir navbar --}}
        {{-- konten --}}
        <div class="table-responsive custom-table-responsive">

            <table class="table custom-table">
                <thead>
                    <tr>

                        <th scope="col">Pict</th>
                        <th scope="col">Bersangkutan</th>
                        <th scope="col">Kontak</th>
                        <th scope="col">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <tr scope="row">

                        <td>
                            <div class="flex-shrink-0">
                                <img src="/src/images/chat-img2.jpg" alt="Generic placeholder image"
                                    class="img-fluid rounded-circle border border-dark border-3" style="width: 70px;">
                            </div>
                        </td>
                        <td><a href="#">Haeruddin</a>
                        <span>()</span></td>
                        <td>+63 983 0962 971</td>
                        <td>
                            <a href=""><i class="fa fa-commenting" aria-hidden="true" style="color:gold;"></i></a>
                        </td>
                    </tr>
                    <tr class="spacer">
                        <td colspan="100"></td>
                    </tr>
                    <tr scope="row">
                        <td>
                            <div class="flex-shrink-0">
                                <img src="/src/images/chat-img2.jpg" alt="Generic placeholder image"
                                    class="img-fluid rounded-circle border border-dark border-3" style="width: 70px;">
                            </div>
                        </td>
                        <td><a href="#">Todi</a></td>
                        <td>+63 983 0962 019</td>
                        <td>
                            <a href=""><i class="fa fa-commenting" aria-hidden="true" style="color:gold;"></i></a>
                        </td>
                    </tr>
                    <tr class="spacer">
                        <td colspan="100"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
