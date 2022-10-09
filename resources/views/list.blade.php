<x-layout>
    @slot('title','Match List')
    @slot('body')
        
       

        <!-- Start Matches Area -->
        <section class="matches-area bg-image ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Matches</span>
                    <h2>Trending Matches</h2>
                </div>

                <div class="matches-tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link active" id="all-matches-tab" data-bs-toggle="tab" href="#all-matches" role="tab" aria-controls="all-matches" aria-selected="true">Upcoming Matches</a></li>
    
                        <li class="nav-item" role="presentation"><a class="nav-link" id="upcoming-matches-tab" data-bs-toggle="tab" href="#upcoming-matches" role="tab" aria-controls="upcoming-matches" aria-selected="false">Live Matches</a></li>
    
                        <li class="nav-item" role="presentation"><a class="nav-link" id="latest-result-tab" data-bs-toggle="tab" href="#latest-result" role="tab" aria-controls="latest-result" aria-selected="false">Finished Matches</a></li>
                    </ul>
                    
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="all-matches" role="tabpanel">
                            <div class="single-matches-box">
                                <div class="row align-items-center">
                                    <div class="col-lg-5 col-md-12">
                                        <div class="matches-team">
                                            <img src="{{url('img/team1.png')}}" alt="image">
            
                                            <div class="content">
                                                <h3><a href="single-team.html">Fierce</a></h3>
                                                <ul class="watch-list">
                                                    <li><span>Watch</span></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-2 col-md-12">
                                        <div class="matches-result">
                                            <ul>
                                                <li>9</li>
                                                <li>14</li>
                                            </ul>
                                            <span class="date-time">20TH May 2021, 23:00</span>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-5 col-md-12">
                                        <div class="matches-team right-image">
                                            <img src="{{url('img/team2.png')}}" alt="image">
            
                                            <div class="content">
                                                <h3><a href="single-team.html">Devlis</a></h3>
                                                <ul class="watch-list">
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                    <li><span>Watch</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="single-matches-box">
                                <div class="row align-items-center">
                                    <div class="col-lg-5 col-md-12">
                                        <div class="matches-team">
                                            <img src="{{url('img/team3.png')}}" alt="image">
            
                                            <div class="content">
                                                <h3><a href="single-team.html">Skullking</a></h3>
                                                <ul class="watch-list">
                                                    <li><span>Watch</span></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-2 col-md-12">
                                        <div class="matches-result">
                                            <ul>
                                                <li>10</li>
                                                <li>8</li>
                                            </ul>
                                            <span class="date-time">19TH May 2021, 22:00</span>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-5 col-md-12">
                                        <div class="matches-team right-image">
                                            <img src="{{url('img/team4.png')}}" alt="image">
            
                                            <div class="content">
                                                <h3><a href="single-team.html">Gurdian</a></h3>
                                                <ul class="watch-list">
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                    <li><span>Watch</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="single-matches-box">
                                <div class="row align-items-center">
                                    <div class="col-lg-5 col-md-12">
                                        <div class="matches-team">
                                            <img src="{{url('img/team5.png')}}" alt="image">
            
                                            <div class="content">
                                                <h3><a href="single-team.html">Rover</a></h3>
                                                <ul class="watch-list">
                                                    <li><span>Watch</span></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-2 col-md-12">
                                        <div class="matches-result">
                                            <ul>
                                                <li>10</li>
                                                <li>10</li>
                                            </ul>
                                            <span class="date-time">18TH May 2021, 21:00</span>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-5 col-md-12">
                                        <div class="matches-team right-image">
                                            <img src="{{url('img/team6.png')}}" alt="image">
            
                                            <div class="content">
                                                <h3><a href="single-team.html">Gleopsis</a></h3>
                                                <ul class="watch-list">
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                    <li><span>Watch</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="single-matches-box">
                                <div class="row align-items-center">
                                    <div class="col-lg-5 col-md-12">
                                        <div class="matches-team">
                                            <img src="{{url('img/team7.png')}}" alt="image">
            
                                            <div class="content">
                                                <h3><a href="single-team.html">Solider</a></h3>
                                                <ul class="watch-list">
                                                    <li><span>Watch</span></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-2 col-md-12">
                                        <div class="matches-result">
                                            <ul>
                                                <li>14</li>
                                                <li>15</li>
                                            </ul>
                                            <span class="date-time">17TH May 2021, 24:00</span>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-5 col-md-12">
                                        <div class="matches-team right-image">
                                            <img src="{{url('img/team8.png')}}" alt="image">
            
                                            <div class="content">
                                                <h3><a href="single-team.html">Roosgun</a></h3>
                                                <ul class="watch-list">
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                    <li><span>Watch</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="upcoming-matches" role="tabpanel">
                            <div class="single-matches-box">
                                <div class="row align-items-center">
                                    <div class="col-lg-5 col-md-12">
                                        <div class="matches-team">
                                            <img src="{{url('img/team5.png')}}" alt="image">
            
                                            <div class="content">
                                                <h3><a href="single-team.html">Rover</a></h3>
                                                <ul class="watch-list">
                                                    <li><span>Watch</span></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-2 col-md-12">
                                        <div class="matches-result">
                                            <ul>
                                                <li>0</li>
                                                <li>0</li>
                                            </ul>
                                            <span class="date-time">18TH May 2021, 21:00</span>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-5 col-md-12">
                                        <div class="matches-team right-image">
                                            <img src="{{url('img/team6.png')}}" alt="image">
            
                                            <div class="content">
                                                <h3><a href="single-team.html">Gleopsis</a></h3>
                                                <ul class="watch-list">
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                    <li><span>Watch</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="single-matches-box">
                                <div class="row align-items-center">
                                    <div class="col-lg-5 col-md-12">
                                        <div class="matches-team">
                                            <img src="{{url('img/team7.png')}}" alt="image">
            
                                            <div class="content">
                                                <h3><a href="single-team.html">Solider</a></h3>
                                                <ul class="watch-list">
                                                    <li><span>Watch</span></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-2 col-md-12">
                                        <div class="matches-result">
                                            <ul>
                                                <li>0</li>
                                                <li>0</li>
                                            </ul>
                                            <span class="date-time">17TH May 2021, 24:00</span>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-5 col-md-12">
                                        <div class="matches-team right-image">
                                            <img src="{{url('img/team8.png')}}" alt="image">
            
                                            <div class="content">
                                                <h3><a href="single-team.html">Roosgun</a></h3>
                                                <ul class="watch-list">
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                    <li><span>Watch</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-matches-box">
                                <div class="row align-items-center">
                                    <div class="col-lg-5 col-md-12">
                                        <div class="matches-team">
                                            <img src="{{url('img/team1.png')}}" alt="image">
            
                                            <div class="content">
                                                <h3><a href="single-team.html">Fierce</a></h3>
                                                <ul class="watch-list">
                                                    <li><span>Watch</span></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-2 col-md-12">
                                        <div class="matches-result">
                                            <ul>
                                                <li>0</li>
                                                <li>0</li>
                                            </ul>
                                            <span class="date-time">20TH May 2021, 23:00</span>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-5 col-md-12">
                                        <div class="matches-team right-image">
                                            <img src="{{url('img/team2.png')}}" alt="image">
            
                                            <div class="content">
                                                <h3><a href="single-team.html">Devlis</a></h3>
                                                <ul class="watch-list">
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                    <li><span>Watch</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="single-matches-box">
                                <div class="row align-items-center">
                                    <div class="col-lg-5 col-md-12">
                                        <div class="matches-team">
                                            <img src="{{url('img/team3.png')}}" alt="image">
            
                                            <div class="content">
                                                <h3><a href="single-team.html">Skullking</a></h3>
                                                <ul class="watch-list">
                                                    <li><span>Watch</span></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-2 col-md-12">
                                        <div class="matches-result">
                                            <ul>
                                                <li>0</li>
                                                <li>0</li>
                                            </ul>
                                            <span class="date-time">19TH May 2021, 22:00</span>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-5 col-md-12">
                                        <div class="matches-team right-image">
                                            <img src="{{url('img/team4.png')}}" alt="image">
            
                                            <div class="content">
                                                <h3><a href="single-team.html">Gurdian</a></h3>
                                                <ul class="watch-list">
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                    <li><span>Watch</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="latest-result" role="tabpanel">
                            <div class="single-matches-box">
                                <div class="row align-items-center">
                                    <div class="col-lg-5 col-md-12">
                                        <div class="matches-team">
                                            <img src="{{url('img/team1.png')}}" alt="image">
            
                                            <div class="content">
                                                <h3><a href="single-team.html">Fierce</a></h3>
                                                <ul class="watch-list">
                                                    <li><span>Watch</span></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-2 col-md-12">
                                        <div class="matches-result">
                                            <ul>
                                                <li>9</li>
                                                <li>14</li>
                                            </ul>
                                            <span class="date-time">20TH May 2021, 23:00</span>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-5 col-md-12">
                                        <div class="matches-team right-image">
                                            <img src="{{url('img/team2.png')}}" alt="image">
            
                                            <div class="content">
                                                <h3><a href="single-team.html">Devlis</a></h3>
                                                <ul class="watch-list">
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                    <li><span>Watch</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="single-matches-box">
                                <div class="row align-items-center">
                                    <div class="col-lg-5 col-md-12">
                                        <div class="matches-team">
                                            <img src="{{url('img/team3.png')}}" alt="image">
            
                                            <div class="content">
                                                <h3><a href="single-team.html">Skullking</a></h3>
                                                <ul class="watch-list">
                                                    <li><span>Watch</span></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-2 col-md-12">
                                        <div class="matches-result">
                                            <ul>
                                                <li>10</li>
                                                <li>8</li>
                                            </ul>
                                            <span class="date-time">19TH May 2021, 22:00</span>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-5 col-md-12">
                                        <div class="matches-team right-image">
                                            <img src="{{url('img/team4.png')}}" alt="image">
            
                                            <div class="content">
                                                <h3><a href="single-team.html">Gurdian</a></h3>
                                                <ul class="watch-list">
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                    <li><span>Watch</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="single-matches-box">
                                <div class="row align-items-center">
                                    <div class="col-lg-5 col-md-12">
                                        <div class="matches-team">
                                            <img src="{{url('img/team5.png')}}" alt="image">
            
                                            <div class="content">
                                                <h3><a href="single-team.html">Rover</a></h3>
                                                <ul class="watch-list">
                                                    <li><span>Watch</span></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-2 col-md-12">
                                        <div class="matches-result">
                                            <ul>
                                                <li>10</li>
                                                <li>10</li>
                                            </ul>
                                            <span class="date-time">18TH May 2021, 21:00</span>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-5 col-md-12">
                                        <div class="matches-team right-image">
                                            <img src="{{url('img/team6.png')}}" alt="image">
            
                                            <div class="content">
                                                <h3><a href="single-team.html">Gleopsis</a></h3>
                                                <ul class="watch-list">
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                    <li><span>Watch</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="single-matches-box">
                                <div class="row align-items-center">
                                    <div class="col-lg-5 col-md-12">
                                        <div class="matches-team">
                                            <img src="{{url('img/team7.png')}}" alt="image">
            
                                            <div class="content">
                                                <h3><a href="single-team.html">Solider</a></h3>
                                                <ul class="watch-list">
                                                    <li><span>Watch</span></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-2 col-md-12">
                                        <div class="matches-result">
                                            <ul>
                                                <li>14</li>
                                                <li>15</li>
                                            </ul>
                                            <span class="date-time">17TH May 2021, 24:00</span>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-5 col-md-12">
                                        <div class="matches-team right-image">
                                            <img src="{{url('img/team8.png')}}" alt="image">
            
                                            <div class="content">
                                                <h3><a href="single-team.html">Roosgun</a></h3>
                                                <ul class="watch-list">
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a></li>
                                                    <li><a href="#" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a></li>
                                                    <li><span>Watch</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Start Matches Area -->

       


     
      

      

    
        @endslot
    </x-layout>