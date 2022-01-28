@extends('layout.admin.main')

@section('content')
    <div class="content">
        <h1 class="content-title">Dashboard</h1>

        <div class="header">
            <div class="card post">
                <div class="card-body">
                    <span class="count-number">50</span>
                    <h2 class="header-title">Post</h2>
                    <i class='bx bxs-edit'></i>
                </div>
                <div class="card-footer">
                    <a href="../page/list-post.html" class="header-readMore">
                        <span>See more</span>
                        <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>
            </div>
            <div class="card comment">
                <div class="card-body">
                    <span class="count-number">823</span>
                    <h2 class="header-title">Comment</h2>
                    <i class='bx bxs-comment-detail'></i>
                </div>
                <div class="card-footer">
                    <a href="../page/comment.html" class="header-readMore">
                        <span>See more</span>
                        <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>
            </div>
            <div class="card visitor">
                <div class="card-body">
                    <span class="count-number">999</span>
                    <h2 class="header-title">Visitor</h2>
                    <i class='bx bx-line-chart'></i>
                </div>
            </div>
            <div class="card user">
                <div class="card-body">
                    <span class="count-number">50</span>
                    <h2 class="header-title">Post</h2>
                    <i class='bx bxs-edit'></i>
                </div>
                <div class="card-footer">
                    <a href="../page/list-post.html" class="header-readMore">
                        <span>See more</span>
                        <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="first-container">
            <div class="popular-post-wrapper stat-card">
                <div class="popular-post-head">
                    <h3 class="popular-post-title">Popular Post</h3>
                </div>
                <div class="popular-post-body">
                    <div class="popular-post-card">
                        <div class="card-img">
                            <img src="{{ url('assets/img') }}/img-1.jpg" alt="Images 1" class="popular-post-img">
                        </div>
                        <div class="card-text">
                            <h4 class="post-title">Judul Postingan 1</h4>
                            <span class="popular-post-sub">
                                <i class='bx bxs-user'></i> <span class="author">Penulis</span>
                                <i class='bx bxs-calendar'></i> <span class="date-posted">21 Oktober 2021</span>
                                <i class="fa fa-eye"></i>
                                <spam class="views">999 Views</spam>
                            </span>

                        </div>
                    </div>

                    <div class="popular-post-card">
                        <div class="card-img">
                            <img src="{{ url('assets/img') }}/img-2.jpg" alt="Images 2" class="popular-post-img">
                        </div>
                        <div class="card-text">
                            <h4 class="post-title">Judul Postingan 2</h4>
                            <span class="popular-post-sub">
                                <i class='bx bxs-user'></i> <span class="author">Penulis</span>
                                <i class='bx bxs-calendar'></i> <span class="date-posted">21 Oktober 2021</span>
                                <i class="fa fa-eye"></i>
                                <spam class="views">999 Views</spam>
                            </span>

                        </div>
                    </div>

                    <div class="popular-post-card">
                        <div class="card-img">
                            <img src="{{ url('assets/img') }}/img-3.jpg" alt="Images 3" class="popular-post-img">
                        </div>
                        <div class="card-text">
                            <h4 class="post-title">Judul Postingan 3</h4>
                            <span class="popular-post-sub">
                                <i class='bx bxs-user'></i> <span class="author">Penulis</span>
                                <i class='bx bxs-calendar'></i> <span class="date-posted">21 Oktober 2021</span>
                                <i class="fa fa-eye"></i>
                                <spam class="views">999 Views</spam>
                            </span>

                        </div>
                    </div>

                    <div class="popular-post-card">
                        <div class="card-img">
                            <img src="{{ url('assets/img') }}/img-4.jpg" alt="Images 4" class="popular-post-img">
                        </div>
                        <div class="card-text">
                            <h4 class="post-title">Judul Postingan 4</h4>
                            <span class="popular-post-sub">
                                <i class='bx bxs-user'></i> <span class="author">Penulis</span>
                                <i class='bx bxs-calendar'></i> <span class="date-posted">21 Oktober 2021</span>
                                <i class="fa fa-eye"></i>
                                <spam class="views">999 Views</spam>
                            </span>

                        </div>
                    </div>

                </div>
            </div>
            <div class="visitor-chart stat-card">
                <div class="visitor-chart-header">
                    <h4 class="visitor-title">Visitor Statistics</h4>
                </div>
                <!-- <div class="visitor-chart-body">
                                <h3 class="total-visitor">999 visitor</h3>
                                <canvas id="visitor-chart"></canvas>
                            </div> -->
            </div>
        </div>

        <div class="second-container">
            <div class="stat-card">

            </div>
            <div class="stat-card">

            </div>
        </div>

    </div>
@endsection
