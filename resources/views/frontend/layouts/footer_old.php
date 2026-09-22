<style type="text/css">
    .social_fix_link{right:0;margin-top:-105px;position:fixed;top:55%;z-index:1000;}
    .social_fix_link ul{padding-left:0px;list-style:none;}
    .social_fix_link li:last-child a{border-radius:0 0 5px 0;}
    .social_fix_link ul li a{
        display: block;
        height: 35px;
        font-size: 18px;
        line-height: 35px;
        position: relative;
        text-align: center;
        width: 35px;
        background-color: #129AF7;
        margin: 7px;
        color: #fff;
        font-weight: bold;
    }
    .social_fix_link a:hover span{right:130%;opacity:1;}
    .social_fix_link a span{border-radius:3px;line-height:24px;right:-100%;margin-top:-16px;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";filter:alpha(opacity=0);opacity:0;padding:4px 8px;position:absolute;-webkit-transition:opacity .3s, right .4s;-moz-transition:opacity .3s, right .4s;-ms-transition:opacity .3s, right .4s;-o-transition:opacity .3s, right .4s;transition:opacity .3s, right .4s;top:50%;white-space:nowrap;z-index:-1;}
    .social_fix_link a span:before{content:"";display:block;height:8px;right:-4px;margin-top:-4px;position:absolute;top:50%;-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-ms-transform:rotate(45deg);-o-transform:rotate(45deg);transform:rotate(45deg);width:8px;z-index:-2;}
    .social_fix_link a[class*="self"]:hover,.social_fix_link a[class*="self"] span,.social_fix_link a[class*="self"] span:before{
/*        background:#666666;*/
    }
    .social_fix_link a[class*="twitter"]:hover,.social_fix_link a[class*="twitter"] span,.social_fix_link a[class*="twitter"] span:before{background:#785899;}
    .social_fix_link a[class*="behance"]:hover,.social_fix_link a[class*="behance"] span,.social_fix_link a[class*="behance"] span:before{background:#3162A2;color:#fff;}
    @media screen and (min-width: 0px) and (max-width: 500px){
    .social_fix_link{right:0;margin-top:-65px;position:fixed;top:35%;z-index:1000;}
    }
</style>
<div class="social_fix_link">
    <ul>
        <li>
            <a href="tel:01317608200" class="entypo-self">
                <i class="fa fa-phone"></i>
                <span style="background-color: #129AF7;color: #fff;">01317608200</span>
            </a>
        </li>
        <li>
            <a target="_blank" href="https://wa.me/8801317608200" class="entypo-self">
                <i class="fa fa-whatsapp"></i>
                <span style="background-color: #129AF7;color: #fff;">WhatsApp</span>
            </a>
        </li>
        <!-- <li>
            <a target="_blank" href="{{@$contact->facebook}}" class="entypo-self">
                <i class="fa fa-facebook"></i>
                <span style="background-color: #129AF7;color: #fff;">Facebook</span>
            </a>
        </li>
        <li>
            <a target="_blank" href="{{@$contact->instagram}}" class="entypo-self">
                <i class="fa fa-instagram"></i>
                <span style="background-color: #129AF7;color: #fff;">Instagram</span>
            </a>
        </li>
        <li>
            <a target="_blank" href="{{@$contact->youtube}}" class="entypo-self">
                <i class="fa fa-youtube"></i>
                <span style="background-color: #129AF7;color: #fff;">Youtube</span>
            </a>
        </li>
        <li>
            <a target="_blank" href="{{@$contact->linkedin}}" class="entypo-self">
                <i class="fa fa-linkedin"></i>
                <span style="background-color: #129AF7;color: #fff;">Linkedin</span>
            </a>
        </li>
        <li>
            <a target="_blank" href="{{@$contact->twitter}}" class="entypo-self">
                <i class="fa fa-twitter"></i>
                <span style="background-color: #129AF7;color: #fff;">Twitter</span>
            </a>
        </li> -->
  </ul>
</div>
<footer class="main">
    <div class="container pb-30 wow animate__animated animate__fadeInUp" data-wow-delay="0" style="background: #129AF7;padding-bottom: 15px !important;">
        <div class="row">
            <div class="col-12 mb-30">
                <div class="footer-bottom"></div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <p class="font-sm mb-0" style="color: #1D546D;color: #fff">Copyright &copy; <script>document.write(new Date().getFullYear());</script> <strong class="text-brand" style="color:#fff !important">{{@$contact->name}}</strong>. </p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 text-center">
                <div class="mobile-social-icon">
                    <a title="Page" href="{{@$contact->facebook}}" target="_blank"><i class="fa fa-facebook" style="color: #fff;margin-top: 10px;"></i></a>
                    <a title="Page" href="{{@$contact->instagram}}" target="_blank"><i class="fa fa-instagram" style="color: #fff;margin-top: 10px;"></i></a>
                    <a title="Youtube" href="{{@$contact->youtube}}" target="_blank"><i class="fa fa-youtube" style="color: #fff;margin-top: 10px;"></i></a>
                    <a title="Page" href="{{@$contact->linkedin}}" target="_blank"><i class="fa fa-linkedin" style="color: #fff;margin-top: 10px;"></i></a>
                    <a title="Page" href="{{@$contact->twitter}}" target="_blank">
                        <i class="fa fa-twitter" style="color: #fff;margin-top: 10px;"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>