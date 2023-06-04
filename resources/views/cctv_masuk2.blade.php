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
                    <div class="row">
                        <div class="col-12">
                            <div class="card h-100">
                                <video id="camCctv" autoplay style="width: 50rem;"></video>
                                <div class="card-body">
                                    <h5 class="card-title">Blok B</h5>
                                    <p class="card-text">CCTV ini terpasang di salah satu tiang listrik di blok B
                                    </p>
                                </div>
                                <div class="card-footer text-center">
                                    <button class="btn btn-primary" onclick="startCamera();">Stream</button>
                                </div>
                                <div class="card-footer text-center">
                                    @include('layout/navpagination')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        {{-- akhir konten --}}
    </div>
    <script>
        var camera = document.querySelector("#camCctv");

        async function startCamera() {
            var stream = null;
            try {
                stream = await navigator.mediaDevices.getUserMedia({
                    video: true,
                    audio: false
                });
            } catch (error) {
                alert(error);
                return;
            }
            camera.srcObject = stream;

        }
    </script>
@endsection
