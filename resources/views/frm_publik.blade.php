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
                        <h2 class="fs-2 m-0">Forum Publik</h2>
                    </div>

                </div>
            </nav>
            {{-- akhir navbar --}}
            {{-- konten --}}

            <div class="container-fluid px-5">
                <div class="row g-3 my-2">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card p-5">
                            <div class="page-title">
                                <div class="row">
                                    <div class="col-12 col-md-6 order-md-1 order-last">
                                        <h3>Chat Publik</h3>
                                        <p class="text-subtitle text-muted">Forum chat untuk penghuni perumahan</p>
                                    </div>

                                </div>
                            </div>


                            <div class="col-12">
                                <div class="chat-detail">
                                    <div class="chat-profile-header clearfix">
                                        <div class="left">
                                            <div class="clearfix">
                                                <div class="chat-profile-photo">
                                                    <img src="vendors/images/profile-photo.jpg" alt="">
                                                </div>
                                                <div class="chat-profile-name">
                                                    <h3>Anda</h3>
                                                    <span>Blok AC No.25</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right text-right">
                                            <div class="dropdown">

                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Export Chat</a>
                                                    <a class="dropdown-item" href="#">Search</a>
                                                    <a class="dropdown-item text-light-orange" href="#">Delete
                                                        Chat</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-box">
                                        <div class="chat-desc customscroll">
                                            <ul>
                                                <li class="clearfix admin_chat">
                                                    <span class="chat-img">
                                                        <img src="vendors/images/profile-photo.jpg" alt="">
                                                    </span>
                                                    <div class="chat-body clearfix">
                                                        <p>Pak mufdin Punya motor baru btw</p>
                                                        <div class="chat_time">09:40PM</div>
                                                    </div>
                                                </li>
                                                <li class="clearfix local_chat">
                                                    <span class="chat-img">
                                                        <img src="vendors/images/chat-img1.jpg" alt="">
                                                    </span>
                                                    <div class="chat-body clearfix">
                                                        <div class="chat_time">Bu Mufida</div>
                                                        <p>deh iyo baru na pake pi berkebun.</p>
                                                        <div class="chat_time">09:41PM</div>
                                                    </div>
                                                </li>
                                                <li class="clearfix local_chat">
                                                    <span class="chat-img">
                                                        <img src="vendors/images/photo4.jpg" alt="">
                                                    </span>
                                                    <div class="chat-body clearfix">
                                                        <div class="chat_time">Bu Hasna</div>
                                                        <p>lain lain mentong</p>
                                                        <div class="chat_time">09:42PM</div>
                                                    </div>
                                                </li>





                                            </ul>
                                        </div>
                                        <div class="chat-footer">
                                            
                                            <div class="chat_text_area">
                                                <textarea placeholder="Type your message…"></textarea>
                                            </div>
                                            <div class="chat_send">
                                                <button class="btn btn-link" type="submit"><i
                                                        class="icon-copy ion-paper-airplane"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>

                </div>
            </div>
        </div>
@endsection
