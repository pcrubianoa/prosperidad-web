<footer class="footer footer-shop">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="fot-box">
            <h3 class="fot-logo"><img src="http://www.dps.gov.co/_catalogs/masterpage/DPS/images/logo-DPS-Gov.png"  alt="logo"></h3>
            <p>Mollis semper lobortis vitae phasellus tu
              rpis commodo libero vamus sed dolor do
              nec turpis. Praesent sit amet non magna
              vel diam trum elementum. </p>
            <p>Suspendisse congue sapien vestib massa posuere lacinia.</p>
          </div>
          <div class="row">
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
              <div class="social-box">
                <ul class="social-links">
                  <li><a target="_blank" href="https://www.facebook.com/"><i class="icomoon-facebook"></i></a></li>
                  <li class=""><a target="_blank" href="https://twitter.com/"><i class="icomoon-twitter"></i></a></li>
                  <li><a target="_blank" href="https://www.google.com/"><i class="icomoon-googleplus"></i></a></li>
                  <li class="li-last"><a target="_blank" href="https://www.pinterest.com/"><i class="icomoon-pinterest"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="fot-box">
            <h3 class="fot-title">COMPANY PAGES</h3>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <ul>
                  <li> <a href="#"> Home</a></li>
                  <li> <a href="#"> Features</a></li>
                  <li> <a href="#"> Projects</a></li>
                  <li> <a href="#"> Our Services</a></li>
                  <li> <a href="#"> Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <ul>
                  <li> <a href="#"> About Us</a></li>
                  <li> <a href="#">Shop</a></li>
                  <li> <a href="#">Our Blog</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="fot-box">
            <h3 class="fot-title">Contact Us</h3>
            <div class="fot-contact">
              <div class="media-body">
                <table>
                  <tr>
                    <td><i class="fa fa-map-marker"></i></td>
                    <td>380 Canal View Society, River Street
                      Victoria ML 00789</td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-phone"></i></td>
                    <td>0800.123.9876</td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-envelope"></i></td>
                    <td><a href="mailto:contact.us@domain.com">contact.us@domain.com</a></td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-fax"></i></td>
                    <td>123.456.0000</td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-clock-o"></i></td>
                    <td>Mon - Sat : 0900 - 1900<br>
                      Sun : Closed</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="fot-box">
            <h3 class="fot-title">INSTAGRAM FEED</h3>
            <!-- Flickr--> 
            <script src="plugins/jflickrfeed/jflickrfeed.min.js" ></script> 
            <script type="text/javascript">



$(document).ready(function($) {

	  
    /////////////////////////////////////
    // Flickr Feed
    /////////////////////////////////////



    // Get your flickr ID from: http://idgettr.com/



    var flickr_id = '7992704@N05';

    var $flcr_feed

    $flcr_feed = $('#flickr-feed');
    if ($flcr_feed.length) {
        $('#flickr-feed').jflickrfeed({
            limit: 9,
            qstrings: {
                id: '7992704@N05'
            },
            itemTemplate: '<li><a href="{{image_b}}" rel="prettyPhoto[flickr]"><img src="{{image_s}}" alt="{{title}}" /><span><i class="icomoon-search"></i></span></a></li>',
            itemCallback: function() {
                $("a[rel='prettyPhoto[flickr]']").prettyPhoto({
                    changepicturecallback: function() {
                        $('.pp_pic_holder').show();
                    }
                });
            }
        });
    }



    var flickr_id = '120066133@N02';

    var $flcr_feed

    $flcr_feed = $('#flickr-feed2');
    if ($flcr_feed.length) {
        $('#flickr-feed2').jflickrfeed({
            limit: 9,
            qstrings: {
                id: '120066133@N02'
            },
            itemTemplate: '<li><a href="{{image_b}}" rel="prettyPhoto[flickr]"><img src="{{image_s}}" alt="{{title}}" /><span><i class="icomoon-search"></i></span></a></li>',
            itemCallback: function() {
                $("a[rel='prettyPhoto[flickr]']").prettyPhoto({
                    changepicturecallback: function() {
                        $('.pp_pic_holder').show();
                    }
                });
            }
        });
    }
 });

</script>
            <div class="fot-contact">
              <div class="media-body">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>