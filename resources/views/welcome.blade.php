<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="./Natural_files/css2" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .flipX video::-webkit-media-text-track-display {
            transform: matrix(-1, 0, 0, 1, 0, 0) !important;
        }

        .flipXY video::-webkit-media-text-track-display {
            transform: matrix(-1, 0, 0, -1, 0, 0) !important;
        }

        .flipXYX video::-webkit-media-text-track-display {
            transform: matrix(1, 0, 0, -1, 0, 0) !important;
        }
    </style>
</head>

<body>
    <!-- Start Header -->
    @include('layout.navbar')
    <!-- End Header -->
    <!-- Start Landing -->
    <div class="landing">
        <div class="container">
            <div class="text">
                <h1>Welcome {{ $user }}, To Our Blogs</h1>
                <p>Here Iam gonna share everything about my life. Books Iam reading, Games Iam Playing, Stories and
                    Events</p>
            </div>
            <div class="image">
                <img src="{{ asset('images/landing-image.png') }}" alt="">
            </div>
        </div>
        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#articles" class="go-down">
            <i class="fas fa-angle-double-down fa-2x"></i>
        </a>
    </div>
    <!-- End Landing -->
    <!-- Start Articles -->
    <div class="articles" id="articles">
        <h2 class="main-title">Blogs</h2>
        <div class="container">
            @foreach ($blogs as $blog)
                <div class="box">
                    <img src="./Natural_files/cat-01.jpg" alt="">
                    <div class="content">
                        <h3>{{ $blog->title }}</h3>
                        <p>{{ $blog->description }}</p>
                    </div>
                    <div class="info">
                        <a href="{{ url("blog/show/$blog->id") }}">Read More</a>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="spikes"></div>
    <!-- End Articles -->
    <!-- Start Gallery -->
    <div class="gallery" id="gallery">
        <h2 class="main-title">Gallery</h2>
        <div class="container">
            <div class="box">
                <div class="image">
                    <img src="./Natural_files/gallery-01.png" alt="">
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="./Natural_files/gallery-02.png" alt="">
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="./Natural_files/gallery-03.jpg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="./Natural_files/gallery-04.png" alt="">
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="./Natural_files/gallery-05.jpg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="./Natural_files/gallery-06.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->
    <!-- Start Features -->
    <div class="features" id="features">
        <h2 class="main-title">Features</h2>
        <div class="container">
            <div class="box quality">
                <div class="img-holder"><img src="./Natural_files/features-01.jpg" alt=""></div>
                <h2>Quality</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit harum hic veniam eligendi minima</p>
                <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">More</a>
            </div>
            <div class="box time">
                <div class="img-holder"><img src="./Natural_files/features-02.jpg" alt=""></div>
                <h2>Time</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit harum hic veniam eligendi minima</p>
                <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">More</a>
            </div>
            <div class="box passion">
                <div class="img-holder"><img src="./Natural_files/features-03.jpg" alt=""></div>
                <h2>Passion</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit harum hic veniam eligendi minima</p>
                <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">More</a>
            </div>
        </div>
    </div>
    <!-- End Features -->
    <!-- Start Testimonials -->
    <div class="testimonials" id="testimonials">
        <h2 class="main-title">Users</h2>
        <div class="container">
            @foreach ($users as $user)
                <div class="box">
                    <img src="{{ asset('images/avatar-01.png') }}" alt="">
                    <h3>{{ $user->name }}</h3>
                    <span class="title">{{ $user->email }}</span>
                    <div class="rate">
                        <i class="filled fas fa-star"></i>
                        <i class="filled fas fa-star"></i>
                        <i class="filled fas fa-star"></i>
                        <i class="filled fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet
                        est
                        natus
                        quaerat ducimus
                    </p>
                </div>
            @endforeach
        </div>
    </div>
    <!-- End Testimonials -->
    <!-- Start Team -->
    <div class="team" id="team">
        <h2 class="main-title">Team Members</h2>
        <div class="container">
            <div class="box">
                <div class="data">
                    <img src="{{ asset('images/team-01.jpg') }}" alt="">
                    <div class="social">
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <h3>Name</h3>
                    <p>Simple Short Description</p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="{{ asset('images/team-02.jpg') }}" alt="">
                    <div class="social">
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <h3>Name</h3>
                    <p>Simple Short Description</p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="{{ asset('images/team-03.jpg') }}" alt="">
                    <div class="social">
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <h3>Name</h3>
                    <p>Simple Short Description</p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="{{ asset('images/team-04.jpg') }}" alt="">
                    <div class="social">
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <h3>Name</h3>
                    <p>Simple Short Description</p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="{{ asset('images/team-05.jpg') }}" alt="">
                    <div class="social">
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <h3>Name</h3>
                    <p>Simple Short Description</p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="{{ asset('images/team-06.jpg') }}" alt="">
                    <div class="social">
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <h3>Name</h3>
                    <p>Simple Short Description</p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="{{ asset('images/team-07.jpg') }}" alt="">
                    <div class="social">
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <h3>Name</h3>
                    <p>Simple Short Description</p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="{{ asset('images/team-08.jpg') }}" alt="">
                    <div class="social">
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <h3>Name</h3>
                    <p>Simple Short Description</p>
                </div>
            </div>
        </div>
    </div>
    <div class="spikes"></div>
    <!-- End Team -->
    <!-- Start Services -->
    <div class="services" id="services">
        <h2 class="main-title">Services</h2>
        <div class="container">
            <div class="box">
                <i class="fas fa-user-shield fa-4x"></i>
                <h3>Security</h3>
                <div class="info">
                    <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">Details</a>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-tools fa-4x"></i>
                <h3>Fixing Issues</h3>
                <div class="info">
                    <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">Details</a>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-map-marked-alt fa-4x"></i>
                <h3>Location</h3>
                <div class="info">
                    <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">Details</a>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-laptop-code fa-4x"></i>
                <h3>Coding</h3>
                <div class="info">
                    <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">Details</a>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-palette fa-4x"></i>
                <h3>Security</h3>
                <div class="info">
                    <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">Design</a>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-bullhorn fa-4x"></i>
                <h3>Marketing</h3>
                <div class="info">
                    <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">Details</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->
    <!-- Start Skills -->
    <div class="our-skills" id="our-skills">
        <h2 class="main-title">Our Skills</h2>
        <div class="container">
            <img src="./Natural_files/skills.png" alt="">
            <div class="skills">
                <div class="skill">
                    <h3>HTML <span>80%</span></h3>
                    <div class="the-progress">
                        <span style="width: 0" data-width="80%"></span>
                    </div>
                </div>
                <div class="skill">
                    <h3>CSS <span>85%</span></h3>
                    <div class="the-progress">
                        <span style="width: 0" data-width="85%"></span>
                    </div>
                </div>
                <div class="skill">
                    <h3>JavaScript <span>70%</span></h3>
                    <div class="the-progress">
                        <span style="width: 0" data-width="70%"></span>
                    </div>
                </div>
                <div class="skill">
                    <h3>Python <span>80%</span></h3>
                    <div class="the-progress">
                        <span style="width: 0" data-width="80%"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Skills -->
    <!-- Start Work Steps -->
    <div class="work-steps" id="work-steps">
        <h2 class="main-title">How It Works ?</h2>
        <div class="container">
            <img src="./Natural_files/work-steps.png" alt="" class="image">
            <div class="info">
                <div class="box">
                    <img src="{{ asset('images/work-steps-1.png') }}" alt="">
                    <div class="text">
                        <h3>Business Analysis</h3>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim nesciunt obcaecati quisquam
                            quis laborum
                            recusandae debitis vel
                        </p>
                    </div>
                </div>
                <div class="box">
                    <img src="{{ asset('images/work-steps-2.png') }}" alt="">
                    <div class="text">
                        <h3>Architecture</h3>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim nesciunt obcaecati quisquam
                            quis laborum
                            recusandae debitis vel
                        </p>
                    </div>
                </div>
                <div class="box">
                    <img src="{{ asset('images/work-steps-3.png') }}" alt="">
                    <div class="text">
                        <h3>Developement</h3>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim nesciunt obcaecati quisquam
                            quis laborum
                            recusandae debitis vel
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Work Steps -->
    <!-- Start Events -->
    <div class="events" id="events">
        <div class="dots dots-up"></div>
        <div class="dots dots-down"></div>
        <h2 class="main-title">Latest Events</h2>
        <div class="container">
            <img src="{{ asset('images/events.png') }}" alt="">
            <div class="info">
                <div class="time">
                    <div class="unit">
                        <span class="days">63</span>
                        <span>Days</span>
                    </div>
                    <div class="unit">
                        <span class="hours">09</span>
                        <span>Hours</span>
                    </div>
                    <div class="unit">
                        <span class="minutes">30</span>
                        <span>Minutes</span>
                    </div>
                    <div class="unit">
                        <span class="seconds">47</span>
                        <span>Seconds</span>
                    </div>
                </div>
                <h2 class="title">Tech Masters Event 2021</h2>
                <p class="description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero tenetur doloremque iusto ut
                    adipisci quam
                    ratione aliquam excepturi nulla in harum, veritatis porro
                </p>
            </div>
            <div class="subscribe">
                <form action="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/">
                    <input type="email" placeholder="Enter Your Email">
                    <input type="submit" value="Subscribe">
                </form>
            </div>
        </div>
    </div>
    <!-- End Events -->
    <!-- Start Pricing -->
    <div class="pricing" id="pricing">
        <div class="dots dots-up"></div>
        <div class="dots dots-down"></div>
        <h2 class="main-title">Pricing Plans</h2>
        <div class="container">
            <div class="box">
                <div class="title">Basic</div>
                <img src="{{ asset('images/hosting-basic.png') }}" alt="">
                <div class="price">
                    <span class="amount">$15</span>
                    <span class="time">Per Month</span>
                </div>
                <ul>
                    <li>10GB HDD Space</li>
                    <li>5 Email Addresses</li>
                    <li>2 Subdomains</li>
                    <li>4 Databases</li>
                    <li>Basic Support</li>
                </ul>
                <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">Choose Plan</a>
            </div>
            <div class="box popular">
                <div class="label">Most Popular</div>
                <div class="title">Advanced</div>
                <img src="{{ asset('images/hosting-advanced.png') }}" alt="">
                <div class="price">
                    <span class="amount">$25</span>
                    <span class="time">Per Month</span>
                </div>
                <ul>
                    <li>20GB HDD Space</li>
                    <li>10 Email Addresses</li>
                    <li>5 Subdomains</li>
                    <li>8 Databases</li>
                    <li>Advanced Support</li>
                </ul>
                <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">Choose Plan</a>
            </div>
            <div class="box">
                <div class="title">Professional</div>
                <img src="{{ asset('images/hosting-professional.png') }}" alt="">
                <div class="price">
                    <span class="amount">$45</span>
                    <span class="time">Per Month</span>
                </div>
                <ul>
                    <li>50GB HDD Space</li>
                    <li>20 Email Addresses</li>
                    <li>10 Subdomains</li>
                    <li>20 Databases</li>
                    <li>Professional Support</li>
                </ul>
                <a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">Choose Plan</a>
            </div>
        </div>
    </div>
    <!-- End Pricing -->
    <!-- Start Videos -->
    <div class="videos" id="videos">
        <h2 class="main-title">Top Videos</h2>
        <div class="container">
            <div class="holder">
                <div class="list">
                    <div class="name">
                        Top Videos
                        <i class="fas fa-random"></i>
                    </div>
                    <ul>
                        <li>How To Create Sub Domain<span>05:18</span></li>
                        <li>Playing With The DNS <span>03:18</span></li>
                        <li>Everything About The Virtual Hosts <span>05:25</span></li>
                        <li>How To Monitor Your Website <span>04:16</span></li>
                        <li>Uncharted Beating The Last Boss <span>07:48</span></li>
                        <li>Ys Oath In Felghana Overview <span>03:12</span></li>
                        <li>Ys Series All Games Ending <span>08:10</span></li>
                    </ul>
                </div>
                <div class="preview">
                    <img src="{{ asset('images/video-preview.jpg') }}" alt="">
                    <div class="info">Everything About The Virtual Hosts</div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Videos -->
    <!-- Start Stats -->
    <div class="stats" id="stats">
        <h2>Our Awesome Stats</h2>
        <div class="container">
            <div class="box">
                <i class="far fa-user fa-2x fa-fw"></i>
                <span class="number">300</span>
                <span class="text">Clients</span>
            </div>
            <div class="box">
                <i class="fas fa-code fa-2x fa-fw"></i>
                <span class="number">400</span>
                <span class="text">Projects</span>
            </div>
            <div class="box">
                <i class="fas fa-globe-asia fa-2x fa-fw"></i>
                <span class="number">12</span>
                <span class="text">Countries</span>
            </div>
            <div class="box">
                <i class="far fa-money-bill-alt fa-2x fa-fw"></i>
                <span class="number">500K</span>
                <span class="text">Money</span>
            </div>
        </div>
    </div>
    <!-- End Stats -->
    <!-- Start Discount -->
    <div class="discount" id="discount">
        <div class="image">
            <div class="content">
                <h2>We Have A Discount</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi asperiores consectetur,
                    recusandae
                    ratione provident necessitatibus, cumque delectus commodi fuga praesentium beatae. Totam vel
                    similique
                    laborum dicta aperiam odit doloribus corporis.
                </p>
                <img src="{{ asset('images/discount.png') }}" alt="">
            </div>
        </div>
        <div class="form">
            <div class="content">
                <h2>Request A Discount</h2>
                <form action="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/">
                    <input class="input" type="text" placeholder="Your Name" name="name">
                    <input class="input" type="email" placeholder="Your Email" name="email">
                    <input class="input" type="text" placeholder="Your Phone" name="mobile">
                    <textarea class="input" placeholder="Tell Us About Your Needs" name="message"></textarea>
                    <input type="submit" value="Send">
                </form>
            </div>
        </div>
    </div>
    <!-- End Discount -->
    <!-- Start Footer -->
    <div class="footer">
        <div class="container">
            <div class="box">
                <h3>Blogers</h3>
                <ul class="social">
                    <li>
                        <a href="#" class="facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="youtube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
                <p class="text">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus nulla rem, dignissimos iste
                    aspernatur
                </p>
            </div>
            <div class="box">
                <ul class="links">
                    <li><a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">Important Link 1</a>
                    </li>
                    <li><a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">Important Link 2</a>
                    </li>
                    <li><a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">Important Link 3</a>
                    </li>
                    <li><a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">Important Link 4</a>
                    </li>
                    <li><a href="https://elzerowebschool.github.io/HTML_And_CSS_Template_Three/#">Important Link 5</a>
                    </li>
                </ul>
            </div>
            <div class="box">
                <div class="line">
                    <i class="fas fa-map-marker-alt fa-fw"></i>
                    <div class="info">Egypt, Giza, Inside The Sphinx, Room Number 220</div>
                </div>
                <div class="line">
                    <i class="far fa-clock fa-fw"></i>
                    <div class="info">Business Hours: From 10:00 To 18:00</div>
                </div>
                <div class="line">
                    <i class="fas fa-phone-volume fa-fw"></i>
                    <div class="info">
                        <span>+201113050566</span>
                        <span>+201501036198</span>
                    </div>
                </div>
            </div>
            <div class="box footer-gallery">
                <img src="./Natural_files/gallery-01.png" alt="">
                <img src="./Natural_files/gallery-02.png" alt="">
                <img src="./Natural_files/gallery-03.jpg" alt="">
                <img src="./Natural_files/gallery-04.png" alt="">
                <img src="./Natural_files/gallery-05.jpg" alt="">
                <img src="./Natural_files/gallery-06.png" alt="">
            </div>
        </div>
        <p class="copyright">Made With &lt;3 By Mohamed Maher</p>
    </div>
    <!-- End Footer -->
    <script src="./Natural_files/main.js.download"></script>


</body>

</html>
