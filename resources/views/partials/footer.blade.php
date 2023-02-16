<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <footer>
        <div class="top_footer_container">
            <div class="main_container">
                <ul class="shop_ul">
                    <li class="shop_li_label">
                        <img class="shop_icon" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}"
                            alt="">
                        <span>
                            DIGITAL COMICS
                        </span>
                    </li>
                    <li class="shop_li_label">
                        <img class="shop_icon" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}"
                            alt="">
                        <span>
                            DC MERCHANDISE
                        </span>
                    </li>
                    <li class="shop_li_label">
                        <img class="shop_icon" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}"
                            alt="">
                        <span>
                            SUBSCRIPTION
                        </span>
                    </li>
                    <li class="shop_li_label">
                        <img class="shop_icon" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}"
                            alt="">
                        <span>
                            COMIC SHOP LOCATOR
                        </span>
                    </li>
                    <li class="shop_li_label">
                        <img class="shop_icon" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                        <span>
                            DC POWER VISA
                        </span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="features_container" style="background-image: url({{Vite::asset('resources/img/footer-bg.jpg')}})">
            <div class="main_container features_lists_container">
                <div>
                    <ul class="features_ul">
                        <li>
                            <h5>DC COMICS</h5>
                        </li>
                        <li class="features_li">
                            <a href="#">Characters </a>
                        </li>
                        <li class="features_li">
                            <a href="#">Comics </a>
                        </li>
                        <li class="features_li">
                            <a href="#">Movies </a>
                        </li>
                        <li class="features_li">
                            <a href="#">TV </a>
                        </li>
                        <li class="features_li">
                            <a href="#">Games </a>
                        </li>
                        <li class="features_li">
                            <a href="#">Videos </a>
                        </li>
                        <li class="features_li">
                            <a href="#">News </a>
                        </li>
                    </ul>
                    <ul class="features_ul">
                        <li>
                            <h5>SHOP</h5>
                        </li>
                        <li class="features_li">
                            <a href="#">Shop DC </a>
                        </li>
                        <li class="features_li">
                            <a href="#">Shop DC Collectibles </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="features_ul">
                        <li>
                            <h5>DC</h5>
                        </li>
                        <li class="features_li">
                            <a href="#">Terms Of Use </a>
                        </li>
                        <li class="features_li">
                            <a href="#">Privacy policy (New)
                            </a>
                        </li>
                        <li class="features_li">
                            <a href="#">Ad Choices </a>
                        </li>
                        <li class="features_li">
                            <a href="#">Advertising </a>
                        </li>
                        <li class="features_li">
                            <a href="#">Jobs </a>
                        </li>
                        <li class="features_li">
                            <a href="#">Subscriptions </a>
                        </li>
                        <li class="features_li">
                            <a href="#">Talent Workshops </a>
                        </li>
                        <li class="features_li">
                            <a href="#">CPSC Certificates </a>
                        </li>
                        <li class="features_li">
                            <a href="#">Ratings </a>
                        </li>
                        <li class="features_li">
                            <a href="#">Shop Help </a>
                        </li>
                        <li class="features_li">
                            <a href="#">Contact Us </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="features_ul">
                        <li>
                            <h5>SITES</h5>
                        </li>
                        <li class="features_li">
                            <a href="#">DC </a>
                        </li>
                        <li class="features_li">
                            <a href="#">MAD Magazine </a>
                        </li>
                        <li class="features_li">
                            <a href="#">DC Kids </a>
                        </li>
                        <li class="features_li">
                            <a href="#">DC Universe </a>
                        </li>
                        <li class="features_li">
                            <a href="#">DC Power Visa </a>
                        </li>
                    </ul>
                </div>
                <img class="dc_logo_bg" src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="">
            </div>
        </div>
        <div class="socials_container">
            <div class="flex_container">
                <div>
                    <button class="sign_up_button">
                        SIGN-UP NOW!
                    </button>
                </div>
                <div class="right_socials_container">
                    <div class="follow_us">FOLLOW US</div>
                    <div>
                        <img class="social_icons" src="{{Vite::asset('resources/img/footer-facebook.png')}}" alt="">
                        <img class="social_icons" src="{{Vite::asset('resources/img/footer-periscope.png')}}" alt="">
                        <img class="social_icons" src="{{Vite::asset('resources/img/footer-pinterest.png')}}" alt="">
                        <img class="social_icons" src="{{Vite::asset('resources/img/footer-twitter.png')}}" alt="">
                        <img class="social_icons" src="{{Vite::asset('resources/img/footer-youtube.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>