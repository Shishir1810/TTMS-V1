
<!DOCTYPE html>
<html class="no-js">
<head>
<title>Free CSS | Free CSS Templates | Demo of the HTML CSS Template Travel</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{url('Frontend/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('Frontend/css/plugins.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('Frontend/css/style.css')}}">

<script src="{{url('Frontend/js/modernizr-2.6.2.min.js')}}"></script>
<!--[if lt IE 9]>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
<style type="text/css">
#freecssfooter{display:block;width:100%;padding:120px 0 20px;overflow:hidden;background-color:transparent;z-index:5000;text-align:center;}
#freecssfooter div#fcssholder div{display:none;}
#freecssfooter div#fcssholder div:first-child{display:block;}
#freecssfooter div#fcssholder div:first-child a{float:none;margin:0 auto;}
</style></head>
<body>
<script type="text/javascript">
(function(){
  var bsa = document.createElement('script');
     bsa.type = 'text/javascript';
     bsa.async = true;
     bsa.src = '//s3.buysellads.com/ac/bsa.js';
  (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
})();
</script>
<div id="fh5co-wrapper">
  <div id="fh5co-page">
 @include('frontend.fixed.header')

    <div class="fh5co-hero">
      <div class="fh5co-overlay"></div>
      <div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image:url(uploads/image/shi.jpg);">
        <div class="desc">
          <div class="container">
            <div class="row">
              <div class="col-sm-5 col-md-5">
                <div class="tabulation animate-box">
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Flights</a></li>
                    <li role="presentation"><a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">Hotels</a></li>
                    <li role="presentation"><a href="#packages" aria-controls="packages" role="tab" data-toggle="tab">Packages</a></li>
                  </ul>
                  <form action="#" method="post">
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="flights">
                        <div class="row">
                          <div class="col-xxs-12 col-xs-6 mt">
                            <div class="input-field">
                              <label>From:</label>
                              <input type="text" class="form-control" placeholder="Los Angeles, USA">
                            </div>
                          </div>
                          <div class="col-xxs-12 col-xs-6 mt">
                            <div class="input-field">
                              <label>To:</label>
                              <input type="text" class="form-control" placeholder="Tokyo, Japan">
                            </div>
                          </div>
                          <div class="col-xxs-12 col-xs-6 mt alternate">
                            <div class="input-field">
                              <label>Check In:</label>
                              <input type="text" class="form-control" placeholder="mm/dd/yyyy">
                            </div>
                          </div>
                          <div class="col-xxs-12 col-xs-6 mt alternate">
                            <div class="input-field">
                              <label>Check Out:</label>
                              <input type="text" class="form-control" placeholder="mm/dd/yyyy">
                            </div>
                          </div>
                          <div class="col-sm-12 mt">
                            <section>
                              <label>Class:</label>
                              <select class="cs-select cs-skin-border">
                                <option value="" disabled selected>Economy</option>
                                <option value="economy">Economy</option>
                                <option value="first">First</option>
                                <option value="business">Business</option>
                              </select>
                            </section>
                          </div>
                          <div class="col-xxs-12 col-xs-6 mt">
                            <section>
                              <label>Adult:</label>
                              <select class="cs-select cs-skin-border">
                                <option value="" disabled selected>1</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                              </select>
                            </section>
                          </div>
                          <div class="col-xxs-12 col-xs-6 mt">
                            <section>
                              <label>Children:</label>
                              <select class="cs-select cs-skin-border">
                                <option value="" disabled selected>1</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                              </select>
                            </section>
                          </div>
                          <div class="col-xs-12">
                            <input type="submit" class="btn btn-primary btn-block" value="Search Flight">
                          </div>
                        </div>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="hotels">
                        <div class="row">
                          <div class="col-xxs-12 col-xs-12 mt">
                            <div class="input-field">
                              <label>City:</label>
                              <input type="text" class="form-control" placeholder="Los Angeles, USA">
                            </div>
                          </div>
                          <div class="col-xxs-12 col-xs-6 mt alternate">
                            <div class="input-field">
                              <label>Return:</label>
                              <input type="text" class="form-control" placeholder="mm/dd/yyyy">
                            </div>
                          </div>
                          <div class="col-xxs-12 col-xs-6 mt alternate">
                            <div class="input-field">
                              <label>Check Out:</label>
                              <input type="text" class="form-control" placeholder="mm/dd/yyyy">
                            </div>
                          </div>
                          <div class="col-sm-12 mt">
                            <section>
                              <label>Rooms:</label>
                              <select class="cs-select cs-skin-border">
                                <option value="" disabled selected>1</option>
                                <option value="economy">1</option>
                                <option value="first">2</option>
                                <option value="business">3</option>
                              </select>
                            </section>
                          </div>
                          <div class="col-xxs-12 col-xs-6 mt">
                            <section>
                              <label>Adult:</label>
                              <select class="cs-select cs-skin-border">
                                <option value="" disabled selected>1</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                              </select>
                            </section>
                          </div>
                          <div class="col-xxs-12 col-xs-6 mt">
                            <section>
                              <label>Children:</label>
                              <select class="cs-select cs-skin-border">
                                <option value="" disabled selected>1</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                              </select>
                            </section>
                          </div>
                          <div class="col-xs-12">
                            <input type="submit" class="btn btn-primary btn-block" value="Search Hotel">
                          </div>
                        </div>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="packages">
                        <div class="row">
                          <div class="col-xxs-12 col-xs-6 mt">
                            <div class="input-field">
                              <label>City:</label>
                              <input type="text" class="form-control" placeholder="Los Angeles, USA">
                            </div>
                          </div>
                          <div class="col-xxs-12 col-xs-6 mt">
                            <div class="input-field">
                              <label>Destination:</label>
                              <input type="text" class="form-control" placeholder="Tokyo, Japan">
                            </div>
                          </div>
                          <div class="col-xxs-12 col-xs-6 mt alternate">
                            <div class="input-field">
                              <label>Departs:</label>
                              <input type="text" class="form-control" placeholder="mm/dd/yyyy">
                            </div>
                          </div>
                          <div class="col-xxs-12 col-xs-6 mt alternate">
                            <div class="input-field">
                              <label>Return:</label>
                              <input type="text" class="form-control" placeholder="mm/dd/yyyy">
                            </div>
                          </div>
                          <div class="col-sm-12 mt">
                            <section>
                              <label>Rooms:</label>
                              <select class="cs-select cs-skin-border">
                                <option value="" disabled selected>1</option>
                                <option value="economy">1</option>
                                <option value="first">2</option>
                                <option value="business">3</option>
                              </select>
                            </section>
                          </div>
                          <div class="col-xxs-12 col-xs-6 mt">
                            <section>
                              <label>Adult:</label>
                              <select class="cs-select cs-skin-border">
                                <option value="" disabled selected>1</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                              </select>
                            </section>
                          </div>
                          <div class="col-xxs-12 col-xs-6 mt">
                            <section>
                              <label>Children:</label>
                              <select class="cs-select cs-skin-border">
                                <option value="" disabled selected>1</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                              </select>
                            </section>
                          </div>
                          <div class="col-xs-12">
                            <input type="submit" class="btn btn-primary btn-block" value="Search Packages">
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="desc2 animate-box">
                <div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
                  <p>Lorem ipsum dolor sit amet</p>
                  <h2>Exclusive Limited Time Offer</h2>
                  <h3>Fly to Hong Kong via Los Angeles, USA</h3>
                  <span class="price">$599</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="fh5co-tours" class="fh5co-section-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
            <h3>Hot Tours</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
            <div><img src="assets/images/place-1.jpg" alt="website template image" class="img-responsive">
              <div class="desc"><span></span>
                <h3>New York</h3>
                <span>3 nights + Flight 5*Hotel</span> <span class="price">$1,000</span><a class="btn btn-primary btn-outline" href="https://www.free-css.com/free-css-templates">Book Now <i class="icon-arrow-right22"></i></a></div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
            <div><img src="assets/images/place-2.jpg" alt="website template image" class="img-responsive">
              <div class="desc"><span></span>
                <h3>Philippines</h3>
                <span>4 nights + Flight 5*Hotel</span> <span class="price">$1,000</span><a class="btn btn-primary btn-outline" href="https://www.free-css.com/free-css-templates">Book Now <i class="icon-arrow-right22"></i></a></div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
            <div><img src="assets/images/place-3.jpg" alt="website template image" class="img-responsive">
              <div class="desc"><span></span>
                <h3>Hongkong</h3>
                <span>2 nights + Flight 4*Hotel</span> <span class="price">$1,000</span><a class="btn btn-primary btn-outline" href="https://www.free-css.com/free-css-templates">Book Now <i class="icon-arrow-right22"></i></a></div>
            </div>
          </div>
          <div class="col-md-12 text-center animate-box">
            <p><a class="btn btn-primary btn-outline btn-lg" href="https://www.free-css.com/free-css-templates">See All Offers <i class="icon-arrow-right22"></i></a></p>
          </div>
        </div>
      </div>
    </div>

    <div id="fh5co-features">
      <div class="container">
        <div class="row">
          <div class="col-md-4 animate-box">
            <div class="feature-left"><span class="icon"><i class="icon-hotairballoon"></i></span>
              <div class="feature-copy">
                <h3>Family Travel</h3>
                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                <p><a href="https://www.free-css.com/free-css-templates">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 animate-box">
            <div class="feature-left"><span class="icon"><i class="icon-search"></i></span>
              <div class="feature-copy">
                <h3>Travel Plans</h3>
                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                <p><a href="https://www.free-css.com/free-css-templates">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 animate-box">
            <div class="feature-left"><span class="icon"><i class="icon-wallet"></i></span>
              <div class="feature-copy">
                <h3>Honeymoon</h3>
                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                <p><a href="https://www.free-css.com/free-css-templates">Learn More</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 animate-box">
            <div class="feature-left"><span class="icon"><i class="icon-wine"></i></span>
              <div class="feature-copy">
                <h3>Business Travel</h3>
                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                <p><a href="https://www.free-css.com/free-css-templates">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 animate-box">
            <div class="feature-left"><span class="icon"><i class="icon-genius"></i></span>
              <div class="feature-copy">
                <h3>Solo Travel</h3>
                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                <p><a href="https://www.free-css.com/free-css-templates">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 animate-box">
            <div class="feature-left"><span class="icon"><i class="icon-chat"></i></span>
              <div class="feature-copy">
                <h3>Explorer</h3>
                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                <p><a href="https://www.free-css.com/free-css-templates">Learn More</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="fh5co-destination">
      <div class="tour-fluid">
        <div class="row">
          <div class="col-md-12">
            <ul id="fh5co-destination-list" class="animate-box">
              <li class="one-forth text-center" style="background-image:url(assets/images/place-1.jpg);"><a href="https://www.free-css.com/free-css-templates">
                <div class="case-studies-summary">
                  <h2>Los Angeles</h2>
                </div>
                </a></li>
              <li class="one-forth text-center" style="background-image:url(assets/images/place-2.jpg);"><a href="https://www.free-css.com/free-css-templates">
                <div class="case-studies-summary">
                  <h2>Hongkong</h2>
                </div>
                </a></li>
              <li class="one-forth text-center" style="background-image:url(assets/images/place-3.jpg);"><a href="https://www.free-css.com/free-css-templates">
                <div class="case-studies-summary">
                  <h2>Italy</h2>
                </div>
                </a></li>
              <li class="one-forth text-center" style="background-image:url(assets/images/place-4.jpg);"><a href="https://www.free-css.com/free-css-templates">
                <div class="case-studies-summary">
                  <h2>Philippines</h2>
                </div>
                </a></li>
              <li class="one-forth text-center" style="background-image:url(assets/images/place-5.jpg);"><a href="https://www.free-css.com/free-css-templates">
                <div class="case-studies-summary">
                  <h2>Japan</h2>
                </div>
                </a></li>
              <li class="one-half text-center">
                <div class="title-bg">
                  <div class="case-studies-summary">
                    <h2>Most Popular Destinations</h2>
                    <span><a href="https://www.free-css.com/free-css-templates">View All Destinations</a></span></div>
                </div>
              </li>
              <li class="one-forth text-center" style="background-image:url(assets/images/place-6.jpg);"><a href="https://www.free-css.com/free-css-templates">
                <div class="case-studies-summary">
                  <h2>Paris</h2>
                </div>
                </a></li>
              <li class="one-forth text-center" style="background-image:url(assets/images/place-7.jpg);"><a href="https://www.free-css.com/free-css-templates">
                <div class="case-studies-summary">
                  <h2>Singapore</h2>
                </div>
                </a></li>
              <li class="one-forth text-center" style="background-image:url(assets/images/place-8.jpg);"><a href="https://www.free-css.com/free-css-templates">
                <div class="case-studies-summary">
                  <h2>Madagascar</h2>
                </div>
                </a></li>
              <li class="one-forth text-center" style="background-image:url(assets/images/place-9.jpg);"><a href="https://www.free-css.com/free-css-templates">
                <div class="case-studies-summary">
                  <h2>Egypt</h2>
                </div>
                </a></li>
              <li class="one-forth text-center" style="background-image:url(assets/images/place-10.jpg);"><a href="https://www.free-css.com/free-css-templates">
                <div class="case-studies-summary">
                  <h2>Indonesia</h2>
                </div>
                </a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div id="fh5co-blog-section" class="fh5co-section-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
            <h3>Recent From Blog</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row row-bottom-padded-md">
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="fh5co-blog animate-box"><a href="https://www.free-css.com/free-css-templates"><img class="img-responsive" src="assets/images/place-1.jpg" alt="website template image"></a>
              <div class="blog-text">
                <div class="prod-title">
                  <h3><a href="https://www.free-css.com/free-css-templates">30% Discount to Travel All Around the World</a></h3>
                  <span class="posted_by">Sep. 15th</span> <span class="comment"><a href="https://www.free-css.com/free-css-templates">21<i class="icon-bubble2"></i></a></span>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p><a href="https://www.free-css.com/free-css-templates">Learn More...</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="fh5co-blog animate-box"><a href="https://www.free-css.com/free-css-templates"><img class="img-responsive" src="assets/images/place-2.jpg" alt="website template image"></a>
              <div class="blog-text">
                <div class="prod-title">
                  <h3><a href="https://www.free-css.com/free-css-templates">Planning for Vacation</a></h3>
                  <span class="posted_by">Sep. 15th</span> <span class="comment"><a href="https://www.free-css.com/free-css-templates">21<i class="icon-bubble2"></i></a></span>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p><a href="https://www.free-css.com/free-css-templates">Learn More...</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix visible-sm-block"></div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="fh5co-blog animate-box"><a href="https://www.free-css.com/free-css-templates"><img class="img-responsive" src="assets/images/place-3.jpg" alt="website template image"></a>
              <div class="blog-text">
                <div class="prod-title">
                  <h3><a href="https://www.free-css.com/free-css-templates">Visit Tokyo Japan</a></h3>
                  <span class="posted_by">Sep. 15th</span> <span class="comment"><a href="https://www.free-css.com/free-css-templates">21<i class="icon-bubble2"></i></a></span>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p><a href="https://www.free-css.com/free-css-templates">Learn More...</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix visible-md-block"></div>
        </div>
        <div class="col-md-12 text-center animate-box">
          <p><a class="btn btn-primary btn-outline btn-lg" href="https://www.free-css.com/free-css-templates">See All Post <i class="icon-arrow-right22"></i></a></p>
        </div>
      </div>
    </div>
    
    @include('frontend.fixed.footer')
  </div>
</div>
<script src="{{url('Frontend/js/jquery.min.js')}}"></script>
<script src="{{url('Frontend/js/jquery.easing.1.3.js')}}"></script>
<script src="{{url('Frontend/js/bootstrap.min.js')}}"></script>
<script src="{{url('Frontend/js/jquery.waypoints.min.js')}}"></script>
<script src="{{url('Frontend/js/sticky.js')}}"></script>
<script src="{{url('Frontend/js/jquery.stellar.min.js')}}"></script>
<script src="{{url('Frontend/js/hoverIntent.js')}}"></script>
<script src="{{url('Frontend/js/superfish.js')}}"></script>
<script src="{{url('Frontend/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{url('Frontend/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{url('Frontend/js/classie.js')}}"></script>
<script src="{{url('Frontend/js/selectFx.js')}}"></script>
<script src="{{url('Frontend/js/main.js')}}"></script>
<div id="freecssfooter">
  <div id="fcssholder">
    <div id="bsap_2365" class="bsarocks bsap_b893e54e42ad5b76e7b252f59be18e67"></div>
  </div>
</div>
<script type="text/javascript">
var gaProperty = 'UA-120201777-1';var disableStr = 'ga-disable-' + gaProperty;if (document.cookie.indexOf(disableStr + '=true') > -1) {window[disableStr] = true;}
function gaOptout(){document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2045 23:59:59 UTC; path=/';window[disableStr] = true;alert('Google Tracking has been deactivated');}
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-120201777-1', 'auto');ga('set', 'anonymizeIp', true);ga('send', 'pageview');
</script>
</body>
</html>