@extends('layout.header_footer')

@section('title', 'Page Title')

@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Wrapper for slides -->
<div class="carousel-inner">
  <div class="item active">
    <img style="width: 1360px" src="img/nashville-tn-skyline-1300-500-1024x394.jpg" alt="Los Angeles">
  </div>

  <div class="item">
    <img style="width: 1360px" src="img/nashville-tn-skyline-1300-500-1024x394.jpg" alt="Chicago">
  </div>

  <div class="item">
    <img style="width: 1360px" src="img/nashville-tn-skyline-1300-500-1024x394.jpg" alt="New York">
  </div>
</div>

<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
  <span class="sr-only">Next</span>
</a>
</div>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 16px;
  text-decoration: none;
  font-size: 16px;
}

li a:hover {
  background-color: #111111;
  text-decoration: none;
  transition: 0.5s;
  color: white;
}
</style>

<ul>
  <li><a href="#home">Facebook</a></li>
  <li><a href="#news">Instagram</a></li>
  <li><a href="#contact">Blah blah</a></li>
  <li><a href="#about">Blah</a></li>
</ul>

<div class="grid-portfolio" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="thumb">
                            <a href="img/big_portfolio_item_4.png" data-lightbox="image-1"><div class="hover-effect">
                                <div class="hover-content">
                                    <h1>Biodiesel <em>squid</em></h1>
                                    <p>Awesome Subtittle Goes Here</p>
                                </div>
                            </div></a>
                            <div class="image">
                                <img src="img/portfolio_item_4.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="thumb">
                            <a href="img/big_portfolio_item_2.png" data-lightbox="image-1"><div class="hover-effect">
                                <div class="hover-content">
                                    <h1>raclette <em>taxidermy</em></h1>
                                    <p>Awesome Subtittle Goes Here</p>
                                </div>
                            </div></a>
                            <div class="image">
                                <img src="img/portfolio_item_2.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="thumb">
                            <a href="img/big_portfolio_item_3.png" data-lightbox="image-1"><div class="hover-effect">
                                <div class="hover-content">
                                    <h1>humblebrag <em>brunch</em></h1>
                                    <p>Awesome Subtittle Goes Here</p>
                                </div>
                            </div></a>
                            <div class="image">
                                <img src="img/portfolio_item_3.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="thumb">
                            <a href="img/big_portfolio_item_1.png" data-lightbox="image-1"><div class="hover-effect">
                                <div class="hover-content">
                                    <h1>Succulents <em>chambray</em></h1>
                                    <p>Awesome Subtittle Goes Here</p>
                                </div>
                            </div></a>
                            <div class="image">
                                <img src="img/portfolio_item_1.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="thumb">
                            <a href="img/big_portfolio_item_5.png" data-lightbox="image-1"><div class="hover-effect">
                                <div class="hover-content">
                                    <h1>freegan <em>aesthetic</em></h1>
                                    <p>Awesome Subtittle Goes Here</p>
                                </div>
                            </div></a>
                            <div class="image">
                                <img src="img/portfolio_item_5.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="thumb">
                            <a href="img/big_portfolio_item_6.png" data-lightbox="image-1"><div class="hover-effect">
                                <div class="hover-content">
                                    <h1>taiyaki <em>vegan</em></h1>
                                    <p>Awesome Subtittle Goes Here</p>
                                </div>
                            </div></a>
                            <div class="image">
                                <img src="img/portfolio_item_6.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="thumb">
                            <a href="img/big_portfolio_item_7.png" data-lightbox="image-1"><div class="hover-effect">
                                <div class="hover-content">
                                    <h1>Thundercats <em>santo</em></h1>
                                    <p>Awesome Subtittle Goes Here</p>
                                </div>
                            </div></a>
                            <div class="image">
                                <img src="img/portfolio_item_7.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="thumb">
                            <a href="img/big_portfolio_item_8.png" data-lightbox="image-1"><div class="hover-effect">
                                <div class="hover-content">
                                    <h1>wayfarers <em>yuccie</em></h1>
                                    <p>Awesome Subtittle Goes Here</p>
                                </div>
                            </div></a>
                            <div class="image">
                                <img src="img/portfolio_item_8.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="thumb">
                            <a href="img/big_portfolio_item_9.png" data-lightbox="image-1"><div class="hover-effect">
                                <div class="hover-content">
                                    <h1>disrupt <em>street</em></h1>
                                    <p>Awesome Subtittle Goes Here</p>
                                </div>
                            </div></a>
                            <div class="image">
                                <img src="img/portfolio_item_9.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="load-more-button">
                        <a href="#">Load More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
