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
                    <h2 class="fs-2 m-0">Monitoring CCTV</h2>
                </div>

            </div>
        </nav>
        {{-- akhir navbar --}}
        {{-- konten --}}
        <div class="container-fluid px-5">
            <div class="row g-3 my-2">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <img src="/src/image/bagianBelakang.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Bagian Belakang</h5>
                                    <p>CCTV ini terpasang di salah satu tiang listrik di bagian belakang kompleks
                                    </p>
                                </div>
                                <div class="card-footer text-center">
                                <a href="/cctv/masuk1"><button class="btn btn-primary">Stream</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="/src/image/blokB.jpg" class="card-img-top" >
                                <div class="card-body">
                                    <h5 class="card-title">Blok B</h5>
                                    <p class="card-text">CCTV ini terpasang di salah satu tiang listrik di blok B
                                </div>
                                <div class="card-footer text-center">
                                    <a href="/cctv/masuk2"><button class="btn btn-primary">Stream</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="/src/image/taman.jpg" class="card-img-top" >
                                <div class="card-body">
                                    <h5 class="card-title">Taman</h5>
                                    <p class="card-text">CCTV ini mengambil 80% view di sekitar taman
                                </div>
                                <div class="card-footer text-center">
                                    <a href="/cctv/masuk3"><button class="btn btn-primary">Stream</button></a>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>



        {{-- akhir konten --}}
    </div>
@endsection
