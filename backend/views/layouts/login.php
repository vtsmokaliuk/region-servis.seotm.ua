<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo \Yii::$app->request->baseUrl;?>/dist/images/favicon.png">
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
<body>
<?php $this->beginBody() ?>
<?= Alert::widget() ?>
<div class="main-wrapper">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader" style="display: none;">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(<?php echo \Yii::$app->request->baseUrl;?>//image/auth-bg.jpg) no-repeat center center;">
        <div class="auth-box">
            <div id="loginform">
                <div class="logo">
                    <span class="db"><img src="<?php echo \Yii::$app->request->baseUrl;?>/image/logo-icon.png" alt="logo"></span>
                    <h5 class="font-medium m-b-20"><?=$this->title?></h5>
                </div>
                <!-- Form -->
                <div class="row">
                    <div class="col-12">
                        <?
                        echo $content;
                        ?>

                    </div>
                </div>
            </div>
            <div id="recoverform">
                <div class="logo">
                    <span class="db"><img src="<?php echo \Yii::$app->request->baseUrl;?>//image/logo-icon.png" alt="logo"></span>
                    <h5 class="font-medium m-b-20">Recover Password</h5>
                    <span>Enter your Email and instructions will be sent to you!</span>
                </div>
                <div class="row m-t-20">
                    <!-- Form -->
                    <form class="col-12" action="index.html">
                        <!-- email -->
                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control form-control-lg" type="email" required="" placeholder="Username">
                            </div>
                        </div>
                        <!-- pwd -->
                        <div class="row m-t-20">
                            <div class="col-12">
                                <button class="btn btn-block btn-lg btn-danger" type="submit" name="action">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
</div>

<script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    // ==============================================================
    // Login and Recover Password
    // ==============================================================
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
</script>
<style>
    #login-form .help-block{
        display:block;
        width:100%;
        clear:both;
    }
    #login-form .help-block-error{
        color:red;
    }
    .fa-fw,
    .fa-li,
    .wi-fw {
        text-align: center
    }

    .flag-icon,
    .flag-icon-background {
        background-repeat: no-repeat;
        background-position: 50%
    }

    *,
    .dd-empty,
    .dd-handle,
    .dd-placeholder,
    ::after,
    ::before {
        box-sizing: border-box
    }

    pre,
    textarea {
        overflow: auto
    }

    .fa-stack,
    .flag-icon,
    .mdi-set,
    .mdi:before,
    .wi,
    label,
    output {
        display: inline-block
    }

    .dropdown-menu,
    .nav,
    .navbar-nav {
        list-style: none
    }

    .waves-effect,
    html {
        -webkit-tap-highlight-color: transparent
    }

    @font-face {
        font-family: Rubik;
        font-style: normal;
        font-weight: 300;
        src: local('Rubik Light'), local('Rubik-Light'), url(https://fonts.gstatic.com/s/rubik/v7/iJWHBXyIfDnIV7Fqj2md8WU.ttf) format('truetype')
    }

    @font-face {
        font-family: Rubik;
        font-style: normal;
        font-weight: 400;
        src: local('Rubik'), local('Rubik-Regular'), url(https://fonts.gstatic.com/s/rubik/v7/iJWKBXyIfDnIV7nBrXk.ttf) format('truetype')
    }

    @font-face {
        font-family: Rubik;
        font-style: normal;
        font-weight: 500;
        src: local('Rubik Medium'), local('Rubik-Medium'), url(https://fonts.gstatic.com/s/rubik/v7/iJWHBXyIfDnIV7Eyjmmd8WU.ttf) format('truetype')
    }

    @font-face {
        font-family: Rubik;
        font-style: normal;
        font-weight: 700;
        src: local('Rubik Bold'), local('Rubik-Bold'), url(https://fonts.gstatic.com/s/rubik/v7/iJWHBXyIfDnIV7F6iGmd8WU.ttf) format('truetype')
    }

    @font-face {
        font-family: Rubik;
        font-style: normal;
        font-weight: 900;
        src: local('Rubik Black'), local('Rubik-Black'), url(https://fonts.gstatic.com/s/rubik/v7/iJWHBXyIfDnIV7FCimmd8WU.ttf) format('truetype')
    }


    /*!
 * Font Awesome Free 5.0.9 by @fontawesome - https://fontawesome.com
 * License - https://fontawesome.com/license (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)
 */

    .fa,
    .fab,
    .fal,
    .far,
    .fas {
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1
    }

    .fa-lg {
        font-size: 1.33333em;
        line-height: .75em;
        vertical-align: -.0667em
    }

    .fa-stack,
    img,
    svg {
        vertical-align: middle
    }

    .fa-xs {
        font-size: .75em
    }

    .fa-sm {
        font-size: .875em
    }

    .fa-1x {
        font-size: 1em
    }

    .fa-2x {
        font-size: 2em
    }

    .fa-3x {
        font-size: 3em
    }

    .fa-4x {
        font-size: 4em
    }

    .fa-5x {
        font-size: 5em
    }

    .fa-6x {
        font-size: 6em
    }

    .fa-7x {
        font-size: 7em
    }

    .fa-8x {
        font-size: 8em
    }

    .fa-9x {
        font-size: 9em
    }

    .fa-10x {
        font-size: 10em
    }

    .fa-fw {
        width: 1.25em
    }

    .fa-ul {
        list-style-type: none;
        margin-left: 2.5em;
        padding-left: 0
    }

    .fa-ul>li {
        position: relative
    }

    .fa-li {
        left: -2em;
        position: absolute;
        width: 2em;
        line-height: inherit
    }

    .fa-border {
        border: .08em solid #eee;
        border-radius: .1em;
        padding: .2em .25em .15em
    }

    .fa-pull-left {
        float: left
    }

    .fa-pull-right {
        float: right
    }

    .fa.fa-pull-left,
    .fab.fa-pull-left,
    .fal.fa-pull-left,
    .far.fa-pull-left,
    .fas.fa-pull-left {
        margin-right: .3em
    }

    .fa.fa-pull-right,
    .fab.fa-pull-right,
    .fal.fa-pull-right,
    .far.fa-pull-right,
    .fas.fa-pull-right {
        margin-left: .3em
    }

    .fa-spin {
        -webkit-animation: fa-spin 2s infinite linear;
        animation: fa-spin 2s infinite linear
    }

    .fa-pulse {
        -webkit-animation: fa-spin 1s infinite steps(8);
        animation: fa-spin 1s infinite steps(8)
    }

    @-webkit-keyframes fa-spin {
        0% {
            -webkit-transform: rotate(0);
            transform: rotate(0)
        }
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }

    @keyframes fa-spin {
        0% {
            -webkit-transform: rotate(0);
            transform: rotate(0)
        }
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }

    .fa-rotate-90 {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg)
    }

    .fa-rotate-180 {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg)
    }

    .fa-rotate-270 {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
        -webkit-transform: rotate(270deg);
        transform: rotate(270deg)
    }

    .fa-flip-horizontal {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
        -webkit-transform: scale(-1, 1);
        transform: scale(-1, 1)
    }

    .fa-flip-vertical {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
        -webkit-transform: scale(1, -1);
        transform: scale(1, -1)
    }

    .fa-flip-horizontal.fa-flip-vertical {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
        -webkit-transform: scale(-1, -1);
        transform: scale(-1, -1)
    }

    :root .fa-flip-horizontal,
    :root .fa-flip-vertical,
    :root .fa-rotate-180,
    :root .fa-rotate-270,
    :root .fa-rotate-90 {
        -webkit-filter: none;
        filter: none
    }

    .fa-stack {
        height: 2em;
        line-height: 2em;
        position: relative;
        width: 2em
    }

    .fa-stack-1x,
    .fa-stack-2x {
        left: 0;
        position: absolute;
        text-align: center;
        width: 100%
    }

    .flag-icon,
    .form-check,
    sub,
    sup {
        position: relative
    }

    .fa-stack-1x {
        line-height: inherit
    }

    .fa-stack-2x {
        font-size: 2em
    }

    .fa-inverse {
        color: #fff
    }

    .fa-500px:before {
        content: "\f26e"
    }

    .fa-accessible-icon:before {
        content: "\f368"
    }

    .fa-accusoft:before {
        content: "\f369"
    }

    .fa-address-book:before {
        content: "\f2b9"
    }

    .fa-address-card:before {
        content: "\f2bb"
    }

    .fa-adjust:before {
        content: "\f042"
    }

    .fa-adn:before {
        content: "\f170"
    }

    .fa-adversal:before {
        content: "\f36a"
    }

    .fa-affiliatetheme:before {
        content: "\f36b"
    }

    .fa-algolia:before {
        content: "\f36c"
    }

    .fa-align-center:before {
        content: "\f037"
    }

    .fa-align-justify:before {
        content: "\f039"
    }

    .fa-align-left:before {
        content: "\f036"
    }

    .fa-align-right:before {
        content: "\f038"
    }

    .fa-allergies:before {
        content: "\f461"
    }

    .fa-amazon:before {
        content: "\f270"
    }

    .fa-amazon-pay:before {
        content: "\f42c"
    }

    .fa-ambulance:before {
        content: "\f0f9"
    }

    .fa-american-sign-language-interpreting:before {
        content: "\f2a3"
    }

    .fa-amilia:before {
        content: "\f36d"
    }

    .fa-anchor:before {
        content: "\f13d"
    }

    .fa-android:before {
        content: "\f17b"
    }

    .fa-angellist:before {
        content: "\f209"
    }

    .fa-angle-double-down:before {
        content: "\f103"
    }

    .fa-angle-double-left:before {
        content: "\f100"
    }

    .fa-angle-double-right:before {
        content: "\f101"
    }

    .fa-angle-double-up:before {
        content: "\f102"
    }

    .fa-angle-down:before {
        content: "\f107"
    }

    .fa-angle-left:before {
        content: "\f104"
    }

    .fa-angle-right:before {
        content: "\f105"
    }

    .fa-angle-up:before {
        content: "\f106"
    }

    .fa-angrycreative:before {
        content: "\f36e"
    }

    .fa-angular:before {
        content: "\f420"
    }

    .fa-app-store:before {
        content: "\f36f"
    }

    .fa-app-store-ios:before {
        content: "\f370"
    }

    .fa-apper:before {
        content: "\f371"
    }

    .fa-apple:before {
        content: "\f179"
    }

    .fa-apple-pay:before {
        content: "\f415"
    }

    .fa-archive:before {
        content: "\f187"
    }

    .fa-arrow-alt-circle-down:before {
        content: "\f358"
    }

    .fa-arrow-alt-circle-left:before {
        content: "\f359"
    }

    .fa-arrow-alt-circle-right:before {
        content: "\f35a"
    }

    .fa-arrow-alt-circle-up:before {
        content: "\f35b"
    }

    .fa-arrow-circle-down:before {
        content: "\f0ab"
    }

    .fa-arrow-circle-left:before {
        content: "\f0a8"
    }

    .fa-arrow-circle-right:before {
        content: "\f0a9"
    }

    .fa-arrow-circle-up:before {
        content: "\f0aa"
    }

    .fa-arrow-down:before {
        content: "\f063"
    }

    .fa-arrow-left:before {
        content: "\f060"
    }

    .fa-arrow-right:before {
        content: "\f061"
    }

    .fa-arrow-up:before {
        content: "\f062"
    }

    .fa-arrows-alt:before {
        content: "\f0b2"
    }

    .fa-arrows-alt-h:before {
        content: "\f337"
    }

    .fa-arrows-alt-v:before {
        content: "\f338"
    }

    .fa-assistive-listening-systems:before {
        content: "\f2a2"
    }

    .fa-asterisk:before {
        content: "\f069"
    }

    .fa-asymmetrik:before {
        content: "\f372"
    }

    .fa-at:before {
        content: "\f1fa"
    }

    .fa-audible:before {
        content: "\f373"
    }

    .fa-audio-description:before {
        content: "\f29e"
    }

    .fa-autoprefixer:before {
        content: "\f41c"
    }

    .fa-avianex:before {
        content: "\f374"
    }

    .fa-aviato:before {
        content: "\f421"
    }

    .fa-aws:before {
        content: "\f375"
    }

    .fa-backward:before {
        content: "\f04a"
    }

    .fa-balance-scale:before {
        content: "\f24e"
    }

    .fa-ban:before {
        content: "\f05e"
    }

    .fa-band-aid:before {
        content: "\f462"
    }

    .fa-bandcamp:before {
        content: "\f2d5"
    }

    .fa-barcode:before {
        content: "\f02a"
    }

    .fa-bars:before {
        content: "\f0c9"
    }

    .fa-baseball-ball:before {
        content: "\f433"
    }

    .fa-basketball-ball:before {
        content: "\f434"
    }

    .fa-bath:before {
        content: "\f2cd"
    }

    .fa-battery-empty:before {
        content: "\f244"
    }

    .fa-battery-full:before {
        content: "\f240"
    }

    .fa-battery-half:before {
        content: "\f242"
    }

    .fa-battery-quarter:before {
        content: "\f243"
    }

    .fa-battery-three-quarters:before {
        content: "\f241"
    }

    .fa-bed:before {
        content: "\f236"
    }

    .fa-beer:before {
        content: "\f0fc"
    }

    .fa-behance:before {
        content: "\f1b4"
    }

    .fa-behance-square:before {
        content: "\f1b5"
    }

    .fa-bell:before {
        content: "\f0f3"
    }

    .fa-bell-slash:before {
        content: "\f1f6"
    }

    .fa-bicycle:before {
        content: "\f206"
    }

    .fa-bimobject:before {
        content: "\f378"
    }

    .fa-binoculars:before {
        content: "\f1e5"
    }

    .fa-birthday-cake:before {
        content: "\f1fd"
    }

    .fa-bitbucket:before {
        content: "\f171"
    }

    .fa-bitcoin:before {
        content: "\f379"
    }

    .fa-bity:before {
        content: "\f37a"
    }

    .fa-black-tie:before {
        content: "\f27e"
    }

    .fa-blackberry:before {
        content: "\f37b"
    }

    .fa-blind:before {
        content: "\f29d"
    }

    .fa-blogger:before {
        content: "\f37c"
    }

    .fa-blogger-b:before {
        content: "\f37d"
    }

    .fa-bluetooth:before {
        content: "\f293"
    }

    .fa-bluetooth-b:before {
        content: "\f294"
    }

    .fa-bold:before {
        content: "\f032"
    }

    .fa-bolt:before {
        content: "\f0e7"
    }

    .fa-bomb:before {
        content: "\f1e2"
    }

    .fa-book:before {
        content: "\f02d"
    }

    .fa-bookmark:before {
        content: "\f02e"
    }

    .fa-bowling-ball:before {
        content: "\f436"
    }

    .fa-box:before {
        content: "\f466"
    }

    .fa-box-open:before {
        content: "\f49e"
    }

    .fa-boxes:before {
        content: "\f468"
    }

    .fa-braille:before {
        content: "\f2a1"
    }

    .fa-briefcase:before {
        content: "\f0b1"
    }

    .fa-briefcase-medical:before {
        content: "\f469"
    }

    .fa-btc:before {
        content: "\f15a"
    }

    .fa-bug:before {
        content: "\f188"
    }

    .fa-building:before {
        content: "\f1ad"
    }

    .fa-bullhorn:before {
        content: "\f0a1"
    }

    .fa-bullseye:before {
        content: "\f140"
    }

    .fa-burn:before {
        content: "\f46a"
    }

    .fa-buromobelexperte:before {
        content: "\f37f"
    }

    .fa-bus:before {
        content: "\f207"
    }

    .fa-buysellads:before {
        content: "\f20d"
    }

    .fa-calculator:before {
        content: "\f1ec"
    }

    .fa-calendar:before {
        content: "\f133"
    }

    .fa-calendar-alt:before {
        content: "\f073"
    }

    .fa-calendar-check:before {
        content: "\f274"
    }

    .fa-calendar-minus:before {
        content: "\f272"
    }

    .fa-calendar-plus:before {
        content: "\f271"
    }

    .fa-calendar-times:before {
        content: "\f273"
    }

    .fa-camera:before {
        content: "\f030"
    }

    .fa-camera-retro:before {
        content: "\f083"
    }

    .fa-capsules:before {
        content: "\f46b"
    }

    .fa-car:before {
        content: "\f1b9"
    }

    .fa-caret-down:before {
        content: "\f0d7"
    }

    .fa-caret-left:before {
        content: "\f0d9"
    }

    .fa-caret-right:before {
        content: "\f0da"
    }

    .fa-caret-square-down:before {
        content: "\f150"
    }

    .fa-caret-square-left:before {
        content: "\f191"
    }

    .fa-caret-square-right:before {
        content: "\f152"
    }

    .fa-caret-square-up:before {
        content: "\f151"
    }

    .fa-caret-up:before {
        content: "\f0d8"
    }

    .fa-cart-arrow-down:before {
        content: "\f218"
    }

    .fa-cart-plus:before {
        content: "\f217"
    }

    .fa-cc-amazon-pay:before {
        content: "\f42d"
    }

    .fa-cc-amex:before {
        content: "\f1f3"
    }

    .fa-cc-apple-pay:before {
        content: "\f416"
    }

    .fa-cc-diners-club:before {
        content: "\f24c"
    }

    .fa-cc-discover:before {
        content: "\f1f2"
    }

    .fa-cc-jcb:before {
        content: "\f24b"
    }

    .fa-cc-mastercard:before {
        content: "\f1f1"
    }

    .fa-cc-paypal:before {
        content: "\f1f4"
    }

    .fa-cc-stripe:before {
        content: "\f1f5"
    }

    .fa-cc-visa:before {
        content: "\f1f0"
    }

    .fa-centercode:before {
        content: "\f380"
    }

    .fa-certificate:before {
        content: "\f0a3"
    }

    .fa-chart-area:before {
        content: "\f1fe"
    }

    .fa-chart-bar:before {
        content: "\f080"
    }

    .fa-chart-line:before {
        content: "\f201"
    }

    .fa-chart-pie:before {
        content: "\f200"
    }

    .fa-check:before {
        content: "\f00c"
    }

    .fa-check-circle:before {
        content: "\f058"
    }

    .fa-check-square:before {
        content: "\f14a"
    }

    .fa-chess:before {
        content: "\f439"
    }

    .fa-chess-bishop:before {
        content: "\f43a"
    }

    .fa-chess-board:before {
        content: "\f43c"
    }

    .fa-chess-king:before {
        content: "\f43f"
    }

    .fa-chess-knight:before {
        content: "\f441"
    }

    .fa-chess-pawn:before {
        content: "\f443"
    }

    .fa-chess-queen:before {
        content: "\f445"
    }

    .fa-chess-rook:before {
        content: "\f447"
    }

    .fa-chevron-circle-down:before {
        content: "\f13a"
    }

    .fa-chevron-circle-left:before {
        content: "\f137"
    }

    .fa-chevron-circle-right:before {
        content: "\f138"
    }

    .fa-chevron-circle-up:before {
        content: "\f139"
    }

    .fa-chevron-down:before {
        content: "\f078"
    }

    .fa-chevron-left:before {
        content: "\f053"
    }

    .fa-chevron-right:before {
        content: "\f054"
    }

    .fa-chevron-up:before {
        content: "\f077"
    }

    .fa-child:before {
        content: "\f1ae"
    }

    .fa-chrome:before {
        content: "\f268"
    }

    .fa-circle:before {
        content: "\f111"
    }

    .fa-circle-notch:before {
        content: "\f1ce"
    }

    .fa-clipboard:before {
        content: "\f328"
    }

    .fa-clipboard-check:before {
        content: "\f46c"
    }

    .fa-clipboard-list:before {
        content: "\f46d"
    }

    .fa-clock:before {
        content: "\f017"
    }

    .fa-clone:before {
        content: "\f24d"
    }

    .fa-closed-captioning:before {
        content: "\f20a"
    }

    .fa-cloud:before {
        content: "\f0c2"
    }

    .fa-cloud-download-alt:before {
        content: "\f381"
    }

    .fa-cloud-upload-alt:before {
        content: "\f382"
    }

    .fa-cloudscale:before {
        content: "\f383"
    }

    .fa-cloudsmith:before {
        content: "\f384"
    }

    .fa-cloudversify:before {
        content: "\f385"
    }

    .fa-code:before {
        content: "\f121"
    }

    .fa-code-branch:before {
        content: "\f126"
    }

    .fa-codepen:before {
        content: "\f1cb"
    }

    .fa-codiepie:before {
        content: "\f284"
    }

    .fa-coffee:before {
        content: "\f0f4"
    }

    .fa-cog:before {
        content: "\f013"
    }

    .fa-cogs:before {
        content: "\f085"
    }

    .fa-columns:before {
        content: "\f0db"
    }

    .fa-comment:before {
        content: "\f075"
    }

    .fa-comment-alt:before {
        content: "\f27a"
    }

    .fa-comment-dots:before {
        content: "\f4ad"
    }

    .fa-comment-slash:before {
        content: "\f4b3"
    }

    .fa-comments:before {
        content: "\f086"
    }

    .fa-compass:before {
        content: "\f14e"
    }

    .fa-compress:before {
        content: "\f066"
    }

    .fa-connectdevelop:before {
        content: "\f20e"
    }

    .fa-contao:before {
        content: "\f26d"
    }

    .fa-copy:before {
        content: "\f0c5"
    }

    .fa-copyright:before {
        content: "\f1f9"
    }

    .fa-couch:before {
        content: "\f4b8"
    }

    .fa-cpanel:before {
        content: "\f388"
    }

    .fa-creative-commons:before {
        content: "\f25e"
    }

    .fa-credit-card:before {
        content: "\f09d"
    }

    .fa-crop:before {
        content: "\f125"
    }

    .fa-crosshairs:before {
        content: "\f05b"
    }

    .fa-css3:before {
        content: "\f13c"
    }

    .fa-css3-alt:before {
        content: "\f38b"
    }

    .fa-cube:before {
        content: "\f1b2"
    }

    .fa-cubes:before {
        content: "\f1b3"
    }

    .fa-cut:before {
        content: "\f0c4"
    }

    .fa-cuttlefish:before {
        content: "\f38c"
    }

    .fa-d-and-d:before {
        content: "\f38d"
    }

    .fa-dashcube:before {
        content: "\f210"
    }

    .fa-database:before {
        content: "\f1c0"
    }

    .fa-deaf:before {
        content: "\f2a4"
    }

    .fa-delicious:before {
        content: "\f1a5"
    }

    .fa-deploydog:before {
        content: "\f38e"
    }

    .fa-deskpro:before {
        content: "\f38f"
    }

    .fa-desktop:before {
        content: "\f108"
    }

    .fa-deviantart:before {
        content: "\f1bd"
    }

    .fa-diagnoses:before {
        content: "\f470"
    }

    .fa-digg:before {
        content: "\f1a6"
    }

    .fa-digital-ocean:before {
        content: "\f391"
    }

    .fa-discord:before {
        content: "\f392"
    }

    .fa-discourse:before {
        content: "\f393"
    }

    .fa-dna:before {
        content: "\f471"
    }

    .fa-dochub:before {
        content: "\f394"
    }

    .fa-docker:before {
        content: "\f395"
    }

    .fa-dollar-sign:before {
        content: "\f155"
    }

    .fa-dolly:before {
        content: "\f472"
    }

    .fa-dolly-flatbed:before {
        content: "\f474"
    }

    .fa-donate:before {
        content: "\f4b9"
    }

    .fa-dot-circle:before {
        content: "\f192"
    }

    .fa-dove:before {
        content: "\f4ba"
    }

    .fa-download:before {
        content: "\f019"
    }

    .fa-draft2digital:before {
        content: "\f396"
    }

    .fa-dribbble:before {
        content: "\f17d"
    }

    .fa-dribbble-square:before {
        content: "\f397"
    }

    .fa-dropbox:before {
        content: "\f16b"
    }

    .fa-drupal:before {
        content: "\f1a9"
    }

    .fa-dyalog:before {
        content: "\f399"
    }

    .fa-earlybirds:before {
        content: "\f39a"
    }

    .fa-edge:before {
        content: "\f282"
    }

    .fa-edit:before {
        content: "\f044"
    }

    .fa-eject:before {
        content: "\f052"
    }

    .fa-elementor:before {
        content: "\f430"
    }

    .fa-ellipsis-h:before {
        content: "\f141"
    }

    .fa-ellipsis-v:before {
        content: "\f142"
    }

    .fa-ember:before {
        content: "\f423"
    }

    .fa-empire:before {
        content: "\f1d1"
    }

    .fa-envelope:before {
        content: "\f0e0"
    }

    .fa-envelope-open:before {
        content: "\f2b6"
    }

    .fa-envelope-square:before {
        content: "\f199"
    }

    .fa-envira:before {
        content: "\f299"
    }

    .fa-eraser:before {
        content: "\f12d"
    }

    .fa-erlang:before {
        content: "\f39d"
    }

    .fa-ethereum:before {
        content: "\f42e"
    }

    .fa-etsy:before {
        content: "\f2d7"
    }

    .fa-euro-sign:before {
        content: "\f153"
    }

    .fa-exchange-alt:before {
        content: "\f362"
    }

    .fa-exclamation:before {
        content: "\f12a"
    }

    .fa-exclamation-circle:before {
        content: "\f06a"
    }

    .fa-exclamation-triangle:before {
        content: "\f071"
    }

    .fa-expand:before {
        content: "\f065"
    }

    .fa-expand-arrows-alt:before {
        content: "\f31e"
    }

    .fa-expeditedssl:before {
        content: "\f23e"
    }

    .fa-external-link-alt:before {
        content: "\f35d"
    }

    .fa-external-link-square-alt:before {
        content: "\f360"
    }

    .fa-eye:before {
        content: "\f06e"
    }

    .fa-eye-dropper:before {
        content: "\f1fb"
    }

    .fa-eye-slash:before {
        content: "\f070"
    }

    .fa-facebook:before {
        content: "\f09a"
    }

    .fa-facebook-f:before {
        content: "\f39e"
    }

    .fa-facebook-messenger:before {
        content: "\f39f"
    }

    .fa-facebook-square:before {
        content: "\f082"
    }

    .fa-fast-backward:before {
        content: "\f049"
    }

    .fa-fast-forward:before {
        content: "\f050"
    }

    .fa-fax:before {
        content: "\f1ac"
    }

    .fa-female:before {
        content: "\f182"
    }

    .fa-fighter-jet:before {
        content: "\f0fb"
    }

    .fa-file:before {
        content: "\f15b"
    }

    .fa-file-alt:before {
        content: "\f15c"
    }

    .fa-file-archive:before {
        content: "\f1c6"
    }

    .fa-file-audio:before {
        content: "\f1c7"
    }

    .fa-file-code:before {
        content: "\f1c9"
    }

    .fa-file-excel:before {
        content: "\f1c3"
    }

    .fa-file-image:before {
        content: "\f1c5"
    }

    .fa-file-medical:before {
        content: "\f477"
    }

    .fa-file-medical-alt:before {
        content: "\f478"
    }

    .fa-file-pdf:before {
        content: "\f1c1"
    }

    .fa-file-powerpoint:before {
        content: "\f1c4"
    }

    .fa-file-video:before {
        content: "\f1c8"
    }

    .fa-file-word:before {
        content: "\f1c2"
    }

    .fa-film:before {
        content: "\f008"
    }

    .fa-filter:before {
        content: "\f0b0"
    }

    .fa-fire:before {
        content: "\f06d"
    }

    .fa-fire-extinguisher:before {
        content: "\f134"
    }

    .fa-firefox:before {
        content: "\f269"
    }

    .fa-first-aid:before {
        content: "\f479"
    }

    .fa-first-order:before {
        content: "\f2b0"
    }

    .fa-firstdraft:before {
        content: "\f3a1"
    }

    .fa-flag:before {
        content: "\f024"
    }

    .fa-flag-checkered:before {
        content: "\f11e"
    }

    .fa-flask:before {
        content: "\f0c3"
    }

    .fa-flickr:before {
        content: "\f16e"
    }

    .fa-flipboard:before {
        content: "\f44d"
    }

    .fa-fly:before {
        content: "\f417"
    }

    .fa-folder:before {
        content: "\f07b"
    }

    .fa-folder-open:before {
        content: "\f07c"
    }

    .fa-font:before {
        content: "\f031"
    }

    .fa-font-awesome:before {
        content: "\f2b4"
    }

    .fa-font-awesome-alt:before {
        content: "\f35c"
    }

    .fa-font-awesome-flag:before {
        content: "\f425"
    }

    .fa-fonticons:before {
        content: "\f280"
    }

    .fa-fonticons-fi:before {
        content: "\f3a2"
    }

    .fa-football-ball:before {
        content: "\f44e"
    }

    .fa-fort-awesome:before {
        content: "\f286"
    }

    .fa-fort-awesome-alt:before {
        content: "\f3a3"
    }

    .fa-forumbee:before {
        content: "\f211"
    }

    .fa-forward:before {
        content: "\f04e"
    }

    .fa-foursquare:before {
        content: "\f180"
    }

    .fa-free-code-camp:before {
        content: "\f2c5"
    }

    .fa-freebsd:before {
        content: "\f3a4"
    }

    .fa-frown:before {
        content: "\f119"
    }

    .fa-futbol:before {
        content: "\f1e3"
    }

    .fa-gamepad:before {
        content: "\f11b"
    }

    .fa-gavel:before {
        content: "\f0e3"
    }

    .fa-gem:before {
        content: "\f3a5"
    }

    .fa-genderless:before {
        content: "\f22d"
    }

    .fa-get-pocket:before {
        content: "\f265"
    }

    .fa-gg:before {
        content: "\f260"
    }

    .fa-gg-circle:before {
        content: "\f261"
    }

    .fa-gift:before {
        content: "\f06b"
    }

    .fa-git:before {
        content: "\f1d3"
    }

    .fa-git-square:before {
        content: "\f1d2"
    }

    .fa-github:before {
        content: "\f09b"
    }

    .fa-github-alt:before {
        content: "\f113"
    }

    .fa-github-square:before {
        content: "\f092"
    }

    .fa-gitkraken:before {
        content: "\f3a6"
    }

    .fa-gitlab:before {
        content: "\f296"
    }

    .fa-gitter:before {
        content: "\f426"
    }

    .fa-glass-martini:before {
        content: "\f000"
    }

    .fa-glide:before {
        content: "\f2a5"
    }

    .fa-glide-g:before {
        content: "\f2a6"
    }

    .fa-globe:before {
        content: "\f0ac"
    }

    .fa-gofore:before {
        content: "\f3a7"
    }

    .fa-golf-ball:before {
        content: "\f450"
    }

    .fa-goodreads:before {
        content: "\f3a8"
    }

    .fa-goodreads-g:before {
        content: "\f3a9"
    }

    .fa-google:before {
        content: "\f1a0"
    }

    .fa-google-drive:before {
        content: "\f3aa"
    }

    .fa-google-play:before {
        content: "\f3ab"
    }

    .fa-google-plus:before {
        content: "\f2b3"
    }

    .fa-google-plus-g:before {
        content: "\f0d5"
    }

    .fa-google-plus-square:before {
        content: "\f0d4"
    }

    .fa-google-wallet:before {
        content: "\f1ee"
    }

    .fa-graduation-cap:before {
        content: "\f19d"
    }

    .fa-gratipay:before {
        content: "\f184"
    }

    .fa-grav:before {
        content: "\f2d6"
    }

    .fa-gripfire:before {
        content: "\f3ac"
    }

    .fa-grunt:before {
        content: "\f3ad"
    }

    .fa-gulp:before {
        content: "\f3ae"
    }

    .fa-h-square:before {
        content: "\f0fd"
    }

    .fa-hacker-news:before {
        content: "\f1d4"
    }

    .fa-hacker-news-square:before {
        content: "\f3af"
    }

    .fa-hand-holding:before {
        content: "\f4bd"
    }

    .fa-hand-holding-heart:before {
        content: "\f4be"
    }

    .fa-hand-holding-usd:before {
        content: "\f4c0"
    }

    .fa-hand-lizard:before {
        content: "\f258"
    }

    .fa-hand-paper:before {
        content: "\f256"
    }

    .fa-hand-peace:before {
        content: "\f25b"
    }

    .fa-hand-point-down:before {
        content: "\f0a7"
    }

    .fa-hand-point-left:before {
        content: "\f0a5"
    }

    .fa-hand-point-right:before {
        content: "\f0a4"
    }

    .fa-hand-point-up:before {
        content: "\f0a6"
    }

    .fa-hand-pointer:before {
        content: "\f25a"
    }

    .fa-hand-rock:before {
        content: "\f255"
    }

    .fa-hand-scissors:before {
        content: "\f257"
    }

    .fa-hand-spock:before {
        content: "\f259"
    }

    .fa-hands:before {
        content: "\f4c2"
    }

    .fa-hands-helping:before {
        content: "\f4c4"
    }

    .fa-handshake:before {
        content: "\f2b5"
    }

    .fa-hashtag:before {
        content: "\f292"
    }

    .fa-hdd:before {
        content: "\f0a0"
    }

    .fa-heading:before {
        content: "\f1dc"
    }

    .fa-headphones:before {
        content: "\f025"
    }

    .fa-heart:before {
        content: "\f004"
    }

    .fa-heartbeat:before {
        content: "\f21e"
    }

    .fa-hips:before {
        content: "\f452"
    }

    .fa-hire-a-helper:before {
        content: "\f3b0"
    }

    .fa-history:before {
        content: "\f1da"
    }

    .fa-hockey-puck:before {
        content: "\f453"
    }

    .fa-home:before {
        content: "\f015"
    }

    .fa-hooli:before {
        content: "\f427"
    }

    .fa-hospital:before {
        content: "\f0f8"
    }

    .fa-hospital-alt:before {
        content: "\f47d"
    }

    .fa-hospital-symbol:before {
        content: "\f47e"
    }

    .fa-hotjar:before {
        content: "\f3b1"
    }

    .fa-hourglass:before {
        content: "\f254"
    }

    .fa-hourglass-end:before {
        content: "\f253"
    }

    .fa-hourglass-half:before {
        content: "\f252"
    }

    .fa-hourglass-start:before {
        content: "\f251"
    }

    .fa-houzz:before {
        content: "\f27c"
    }

    .fa-html5:before {
        content: "\f13b"
    }

    .fa-hubspot:before {
        content: "\f3b2"
    }

    .fa-i-cursor:before {
        content: "\f246"
    }

    .fa-id-badge:before {
        content: "\f2c1"
    }

    .fa-id-card:before {
        content: "\f2c2"
    }

    .fa-id-card-alt:before {
        content: "\f47f"
    }

    .fa-image:before {
        content: "\f03e"
    }

    .fa-images:before {
        content: "\f302"
    }

    .fa-imdb:before {
        content: "\f2d8"
    }

    .fa-inbox:before {
        content: "\f01c"
    }

    .fa-indent:before {
        content: "\f03c"
    }

    .fa-industry:before {
        content: "\f275"
    }

    .fa-info:before {
        content: "\f129"
    }

    .fa-info-circle:before {
        content: "\f05a"
    }

    .fa-instagram:before {
        content: "\f16d"
    }

    .fa-internet-explorer:before {
        content: "\f26b"
    }

    .fa-ioxhost:before {
        content: "\f208"
    }

    .fa-italic:before {
        content: "\f033"
    }

    .fa-itunes:before {
        content: "\f3b4"
    }

    .fa-itunes-note:before {
        content: "\f3b5"
    }

    .fa-jenkins:before {
        content: "\f3b6"
    }

    .fa-joget:before {
        content: "\f3b7"
    }

    .fa-joomla:before {
        content: "\f1aa"
    }

    .fa-js:before {
        content: "\f3b8"
    }

    .fa-js-square:before {
        content: "\f3b9"
    }

    .fa-jsfiddle:before {
        content: "\f1cc"
    }

    .fa-key:before {
        content: "\f084"
    }

    .fa-keyboard:before {
        content: "\f11c"
    }

    .fa-keycdn:before {
        content: "\f3ba"
    }

    .fa-kickstarter:before {
        content: "\f3bb"
    }

    .fa-kickstarter-k:before {
        content: "\f3bc"
    }

    .fa-korvue:before {
        content: "\f42f"
    }

    .fa-language:before {
        content: "\f1ab"
    }

    .fa-laptop:before {
        content: "\f109"
    }

    .fa-laravel:before {
        content: "\f3bd"
    }

    .fa-lastfm:before {
        content: "\f202"
    }

    .fa-lastfm-square:before {
        content: "\f203"
    }

    .fa-leaf:before {
        content: "\f06c"
    }

    .fa-leanpub:before {
        content: "\f212"
    }

    .fa-lemon:before {
        content: "\f094"
    }

    .fa-less:before {
        content: "\f41d"
    }

    .fa-level-down-alt:before {
        content: "\f3be"
    }

    .fa-level-up-alt:before {
        content: "\f3bf"
    }

    .fa-life-ring:before {
        content: "\f1cd"
    }

    .fa-lightbulb:before {
        content: "\f0eb"
    }

    .fa-line:before {
        content: "\f3c0"
    }

    .fa-link:before {
        content: "\f0c1"
    }

    .fa-linkedin:before {
        content: "\f08c"
    }

    .fa-linkedin-in:before {
        content: "\f0e1"
    }

    .fa-linode:before {
        content: "\f2b8"
    }

    .fa-linux:before {
        content: "\f17c"
    }

    .fa-lira-sign:before {
        content: "\f195"
    }

    .fa-list:before {
        content: "\f03a"
    }

    .fa-list-alt:before {
        content: "\f022"
    }

    .fa-list-ol:before {
        content: "\f0cb"
    }

    .fa-list-ul:before {
        content: "\f0ca"
    }

    .fa-location-arrow:before {
        content: "\f124"
    }

    .fa-lock:before {
        content: "\f023"
    }

    .fa-lock-open:before {
        content: "\f3c1"
    }

    .fa-long-arrow-alt-down:before {
        content: "\f309"
    }

    .fa-long-arrow-alt-left:before {
        content: "\f30a"
    }

    .fa-long-arrow-alt-right:before {
        content: "\f30b"
    }

    .fa-long-arrow-alt-up:before {
        content: "\f30c"
    }

    .fa-low-vision:before {
        content: "\f2a8"
    }

    .fa-lyft:before {
        content: "\f3c3"
    }

    .fa-magento:before {
        content: "\f3c4"
    }

    .fa-magic:before {
        content: "\f0d0"
    }

    .fa-magnet:before {
        content: "\f076"
    }

    .fa-male:before {
        content: "\f183"
    }

    .fa-map:before {
        content: "\f279"
    }

    .fa-map-marker:before {
        content: "\f041"
    }

    .fa-map-marker-alt:before {
        content: "\f3c5"
    }

    .fa-map-pin:before {
        content: "\f276"
    }

    .fa-map-signs:before {
        content: "\f277"
    }

    .fa-mars:before {
        content: "\f222"
    }

    .fa-mars-double:before {
        content: "\f227"
    }

    .fa-mars-stroke:before {
        content: "\f229"
    }

    .fa-mars-stroke-h:before {
        content: "\f22b"
    }

    .fa-mars-stroke-v:before {
        content: "\f22a"
    }

    .fa-maxcdn:before {
        content: "\f136"
    }

    .fa-medapps:before {
        content: "\f3c6"
    }

    .fa-medium:before {
        content: "\f23a"
    }

    .fa-medium-m:before {
        content: "\f3c7"
    }

    .fa-medkit:before {
        content: "\f0fa"
    }

    .fa-medrt:before {
        content: "\f3c8"
    }

    .fa-meetup:before {
        content: "\f2e0"
    }

    .fa-meh:before {
        content: "\f11a"
    }

    .fa-mercury:before {
        content: "\f223"
    }

    .fa-microchip:before {
        content: "\f2db"
    }

    .fa-microphone:before {
        content: "\f130"
    }

    .fa-microphone-slash:before {
        content: "\f131"
    }

    .fa-microsoft:before {
        content: "\f3ca"
    }

    .fa-minus:before {
        content: "\f068"
    }

    .fa-minus-circle:before {
        content: "\f056"
    }

    .fa-minus-square:before {
        content: "\f146"
    }

    .fa-mix:before {
        content: "\f3cb"
    }

    .fa-mixcloud:before {
        content: "\f289"
    }

    .fa-mizuni:before {
        content: "\f3cc"
    }

    .fa-mobile:before {
        content: "\f10b"
    }

    .fa-mobile-alt:before {
        content: "\f3cd"
    }

    .fa-modx:before {
        content: "\f285"
    }

    .fa-monero:before {
        content: "\f3d0"
    }

    .fa-money-bill-alt:before {
        content: "\f3d1"
    }

    .fa-moon:before {
        content: "\f186"
    }

    .fa-motorcycle:before {
        content: "\f21c"
    }

    .fa-mouse-pointer:before {
        content: "\f245"
    }

    .fa-music:before {
        content: "\f001"
    }

    .fa-napster:before {
        content: "\f3d2"
    }

    .fa-neuter:before {
        content: "\f22c"
    }

    .fa-newspaper:before {
        content: "\f1ea"
    }

    .fa-nintendo-switch:before {
        content: "\f418"
    }

    .fa-node:before {
        content: "\f419"
    }

    .fa-node-js:before {
        content: "\f3d3"
    }

    .fa-notes-medical:before {
        content: "\f481"
    }

    .fa-npm:before {
        content: "\f3d4"
    }

    .fa-ns8:before {
        content: "\f3d5"
    }

    .fa-nutritionix:before {
        content: "\f3d6"
    }

    .fa-object-group:before {
        content: "\f247"
    }

    .fa-object-ungroup:before {
        content: "\f248"
    }

    .fa-odnoklassniki:before {
        content: "\f263"
    }

    .fa-odnoklassniki-square:before {
        content: "\f264"
    }

    .fa-opencart:before {
        content: "\f23d"
    }

    .fa-openid:before {
        content: "\f19b"
    }

    .fa-opera:before {
        content: "\f26a"
    }

    .fa-optin-monster:before {
        content: "\f23c"
    }

    .fa-osi:before {
        content: "\f41a"
    }

    .fa-outdent:before {
        content: "\f03b"
    }

    .fa-page4:before {
        content: "\f3d7"
    }

    .fa-pagelines:before {
        content: "\f18c"
    }

    .fa-paint-brush:before {
        content: "\f1fc"
    }

    .fa-palfed:before {
        content: "\f3d8"
    }

    .fa-pallet:before {
        content: "\f482"
    }

    .fa-paper-plane:before {
        content: "\f1d8"
    }

    .fa-paperclip:before {
        content: "\f0c6"
    }

    .fa-parachute-box:before {
        content: "\f4cd"
    }

    .fa-paragraph:before {
        content: "\f1dd"
    }

    .fa-paste:before {
        content: "\f0ea"
    }

    .fa-patreon:before {
        content: "\f3d9"
    }

    .fa-pause:before {
        content: "\f04c"
    }

    .fa-pause-circle:before {
        content: "\f28b"
    }

    .fa-paw:before {
        content: "\f1b0"
    }

    .fa-paypal:before {
        content: "\f1ed"
    }

    .fa-pen-square:before {
        content: "\f14b"
    }

    .fa-pencil-alt:before {
        content: "\f303"
    }

    .fa-people-carry:before {
        content: "\f4ce"
    }

    .fa-percent:before {
        content: "\f295"
    }

    .fa-periscope:before {
        content: "\f3da"
    }

    .fa-phabricator:before {
        content: "\f3db"
    }

    .fa-phoenix-framework:before {
        content: "\f3dc"
    }

    .fa-phone:before {
        content: "\f095"
    }

    .fa-phone-slash:before {
        content: "\f3dd"
    }

    .fa-phone-square:before {
        content: "\f098"
    }

    .fa-phone-volume:before {
        content: "\f2a0"
    }

    .fa-php:before {
        content: "\f457"
    }

    .fa-pied-piper:before {
        content: "\f2ae"
    }

    .fa-pied-piper-alt:before {
        content: "\f1a8"
    }

    .fa-pied-piper-pp:before {
        content: "\f1a7"
    }

    .fa-piggy-bank:before {
        content: "\f4d3"
    }

    .fa-pills:before {
        content: "\f484"
    }

    .fa-pinterest:before {
        content: "\f0d2"
    }

    .fa-pinterest-p:before {
        content: "\f231"
    }

    .fa-pinterest-square:before {
        content: "\f0d3"
    }

    .fa-plane:before {
        content: "\f072"
    }

    .fa-play:before {
        content: "\f04b"
    }

    .fa-play-circle:before {
        content: "\f144"
    }

    .fa-playstation:before {
        content: "\f3df"
    }

    .fa-plug:before {
        content: "\f1e6"
    }

    .fa-plus:before {
        content: "\f067"
    }

    .fa-plus-circle:before {
        content: "\f055"
    }

    .fa-plus-square:before {
        content: "\f0fe"
    }

    .fa-podcast:before {
        content: "\f2ce"
    }

    .fa-poo:before {
        content: "\f2fe"
    }

    .fa-pound-sign:before {
        content: "\f154"
    }

    .fa-power-off:before {
        content: "\f011"
    }

    .fa-prescription-bottle:before {
        content: "\f485"
    }

    .fa-prescription-bottle-alt:before {
        content: "\f486"
    }

    .fa-print:before {
        content: "\f02f"
    }

    .fa-procedures:before {
        content: "\f487"
    }

    .fa-product-hunt:before {
        content: "\f288"
    }

    .fa-pushed:before {
        content: "\f3e1"
    }

    .fa-puzzle-piece:before {
        content: "\f12e"
    }

    .fa-python:before {
        content: "\f3e2"
    }

    .fa-qq:before {
        content: "\f1d6"
    }

    .fa-qrcode:before {
        content: "\f029"
    }

    .fa-question:before {
        content: "\f128"
    }

    .fa-question-circle:before {
        content: "\f059"
    }

    .fa-quidditch:before {
        content: "\f458"
    }

    .fa-quinscape:before {
        content: "\f459"
    }

    .fa-quora:before {
        content: "\f2c4"
    }

    .fa-quote-left:before {
        content: "\f10d"
    }

    .fa-quote-right:before {
        content: "\f10e"
    }

    .fa-random:before {
        content: "\f074"
    }

    .fa-ravelry:before {
        content: "\f2d9"
    }

    .fa-react:before {
        content: "\f41b"
    }

    .fa-readme:before {
        content: "\f4d5"
    }

    .fa-rebel:before {
        content: "\f1d0"
    }

    .fa-recycle:before {
        content: "\f1b8"
    }

    .fa-red-river:before {
        content: "\f3e3"
    }

    .fa-reddit:before {
        content: "\f1a1"
    }

    .fa-reddit-alien:before {
        content: "\f281"
    }

    .fa-reddit-square:before {
        content: "\f1a2"
    }

    .fa-redo:before {
        content: "\f01e"
    }

    .fa-redo-alt:before {
        content: "\f2f9"
    }

    .fa-registered:before {
        content: "\f25d"
    }

    .fa-rendact:before {
        content: "\f3e4"
    }

    .fa-renren:before {
        content: "\f18b"
    }

    .fa-reply:before {
        content: "\f3e5"
    }

    .fa-reply-all:before {
        content: "\f122"
    }

    .fa-replyd:before {
        content: "\f3e6"
    }

    .fa-resolving:before {
        content: "\f3e7"
    }

    .fa-retweet:before {
        content: "\f079"
    }

    .fa-ribbon:before {
        content: "\f4d6"
    }

    .fa-road:before {
        content: "\f018"
    }

    .fa-rocket:before {
        content: "\f135"
    }

    .fa-rocketchat:before {
        content: "\f3e8"
    }

    .fa-rockrms:before {
        content: "\f3e9"
    }

    .fa-rss:before {
        content: "\f09e"
    }

    .fa-rss-square:before {
        content: "\f143"
    }

    .fa-ruble-sign:before {
        content: "\f158"
    }

    .fa-rupee-sign:before {
        content: "\f156"
    }

    .fa-safari:before {
        content: "\f267"
    }

    .fa-sass:before {
        content: "\f41e"
    }

    .fa-save:before {
        content: "\f0c7"
    }

    .fa-schlix:before {
        content: "\f3ea"
    }

    .fa-scribd:before {
        content: "\f28a"
    }

    .fa-search:before {
        content: "\f002"
    }

    .fa-search-minus:before {
        content: "\f010"
    }

    .fa-search-plus:before {
        content: "\f00e"
    }

    .fa-searchengin:before {
        content: "\f3eb"
    }

    .fa-seedling:before {
        content: "\f4d8"
    }

    .fa-sellcast:before {
        content: "\f2da"
    }

    .fa-sellsy:before {
        content: "\f213"
    }

    .fa-server:before {
        content: "\f233"
    }

    .fa-servicestack:before {
        content: "\f3ec"
    }

    .fa-share:before {
        content: "\f064"
    }

    .fa-share-alt:before {
        content: "\f1e0"
    }

    .fa-share-alt-square:before {
        content: "\f1e1"
    }

    .fa-share-square:before {
        content: "\f14d"
    }

    .fa-shekel-sign:before {
        content: "\f20b"
    }

    .fa-shield-alt:before {
        content: "\f3ed"
    }

    .fa-ship:before {
        content: "\f21a"
    }

    .fa-shipping-fast:before {
        content: "\f48b"
    }

    .fa-shirtsinbulk:before {
        content: "\f214"
    }

    .fa-shopping-bag:before {
        content: "\f290"
    }

    .fa-shopping-basket:before {
        content: "\f291"
    }

    .fa-shopping-cart:before {
        content: "\f07a"
    }

    .fa-shower:before {
        content: "\f2cc"
    }

    .fa-sign:before {
        content: "\f4d9"
    }

    .fa-sign-in-alt:before {
        content: "\f2f6"
    }

    .fa-sign-language:before {
        content: "\f2a7"
    }

    .fa-sign-out-alt:before {
        content: "\f2f5"
    }

    .fa-signal:before {
        content: "\f012"
    }

    .fa-simplybuilt:before {
        content: "\f215"
    }

    .fa-sistrix:before {
        content: "\f3ee"
    }

    .fa-sitemap:before {
        content: "\f0e8"
    }

    .fa-skyatlas:before {
        content: "\f216"
    }

    .fa-skype:before {
        content: "\f17e"
    }

    .fa-slack:before {
        content: "\f198"
    }

    .fa-slack-hash:before {
        content: "\f3ef"
    }

    .fa-sliders-h:before {
        content: "\f1de"
    }

    .fa-slideshare:before {
        content: "\f1e7"
    }

    .fa-smile:before {
        content: "\f118"
    }

    .fa-smoking:before {
        content: "\f48d"
    }

    .fa-snapchat:before {
        content: "\f2ab"
    }

    .fa-snapchat-ghost:before {
        content: "\f2ac"
    }

    .fa-snapchat-square:before {
        content: "\f2ad"
    }

    .fa-snowflake:before {
        content: "\f2dc"
    }

    .fa-sort:before {
        content: "\f0dc"
    }

    .fa-sort-alpha-down:before {
        content: "\f15d"
    }

    .fa-sort-alpha-up:before {
        content: "\f15e"
    }

    .fa-sort-amount-down:before {
        content: "\f160"
    }

    .fa-sort-amount-up:before {
        content: "\f161"
    }

    .fa-sort-down:before {
        content: "\f0dd"
    }

    .fa-sort-numeric-down:before {
        content: "\f162"
    }

    .fa-sort-numeric-up:before {
        content: "\f163"
    }

    .fa-sort-up:before {
        content: "\f0de"
    }

    .fa-soundcloud:before {
        content: "\f1be"
    }

    .fa-space-shuttle:before {
        content: "\f197"
    }

    .fa-speakap:before {
        content: "\f3f3"
    }

    .fa-spinner:before {
        content: "\f110"
    }

    .fa-spotify:before {
        content: "\f1bc"
    }

    .fa-square:before {
        content: "\f0c8"
    }

    .fa-square-full:before {
        content: "\f45c"
    }

    .fa-stack-exchange:before {
        content: "\f18d"
    }

    .fa-stack-overflow:before {
        content: "\f16c"
    }

    .fa-star:before {
        content: "\f005"
    }

    .fa-star-half:before {
        content: "\f089"
    }

    .fa-staylinked:before {
        content: "\f3f5"
    }

    .fa-steam:before {
        content: "\f1b6"
    }

    .fa-steam-square:before {
        content: "\f1b7"
    }

    .fa-steam-symbol:before {
        content: "\f3f6"
    }

    .fa-step-backward:before {
        content: "\f048"
    }

    .fa-step-forward:before {
        content: "\f051"
    }

    .fa-stethoscope:before {
        content: "\f0f1"
    }

    .fa-sticker-mule:before {
        content: "\f3f7"
    }

    .fa-sticky-note:before {
        content: "\f249"
    }

    .fa-stop:before {
        content: "\f04d"
    }

    .fa-stop-circle:before {
        content: "\f28d"
    }

    .fa-stopwatch:before {
        content: "\f2f2"
    }

    .fa-strava:before {
        content: "\f428"
    }

    .fa-street-view:before {
        content: "\f21d"
    }

    .fa-strikethrough:before {
        content: "\f0cc"
    }

    .fa-stripe:before {
        content: "\f429"
    }

    .fa-stripe-s:before {
        content: "\f42a"
    }

    .fa-studiovinari:before {
        content: "\f3f8"
    }

    .fa-stumbleupon:before {
        content: "\f1a4"
    }

    .fa-stumbleupon-circle:before {
        content: "\f1a3"
    }

    .fa-subscript:before {
        content: "\f12c"
    }

    .fa-subway:before {
        content: "\f239"
    }

    .fa-suitcase:before {
        content: "\f0f2"
    }

    .fa-sun:before {
        content: "\f185"
    }

    .fa-superpowers:before {
        content: "\f2dd"
    }

    .fa-superscript:before {
        content: "\f12b"
    }

    .fa-supple:before {
        content: "\f3f9"
    }

    .fa-sync:before {
        content: "\f021"
    }

    .fa-sync-alt:before {
        content: "\f2f1"
    }

    .fa-syringe:before {
        content: "\f48e"
    }

    .fa-table:before {
        content: "\f0ce"
    }

    .fa-table-tennis:before {
        content: "\f45d"
    }

    .fa-tablet:before {
        content: "\f10a"
    }

    .fa-tablet-alt:before {
        content: "\f3fa"
    }

    .fa-tablets:before {
        content: "\f490"
    }

    .fa-tachometer-alt:before {
        content: "\f3fd"
    }

    .fa-tag:before {
        content: "\f02b"
    }

    .fa-tags:before {
        content: "\f02c"
    }

    .fa-tape:before {
        content: "\f4db"
    }

    .fa-tasks:before {
        content: "\f0ae"
    }

    .fa-taxi:before {
        content: "\f1ba"
    }

    .fa-telegram:before {
        content: "\f2c6"
    }

    .fa-telegram-plane:before {
        content: "\f3fe"
    }

    .fa-tencent-weibo:before {
        content: "\f1d5"
    }

    .fa-terminal:before {
        content: "\f120"
    }

    .fa-text-height:before {
        content: "\f034"
    }

    .fa-text-width:before {
        content: "\f035"
    }

    .fa-th:before {
        content: "\f00a"
    }

    .fa-th-large:before {
        content: "\f009"
    }

    .fa-th-list:before {
        content: "\f00b"
    }

    .fa-themeisle:before {
        content: "\f2b2"
    }

    .fa-thermometer:before {
        content: "\f491"
    }

    .fa-thermometer-empty:before {
        content: "\f2cb"
    }

    .fa-thermometer-full:before {
        content: "\f2c7"
    }

    .fa-thermometer-half:before {
        content: "\f2c9"
    }

    .fa-thermometer-quarter:before {
        content: "\f2ca"
    }

    .fa-thermometer-three-quarters:before {
        content: "\f2c8"
    }

    .fa-thumbs-down:before {
        content: "\f165"
    }

    .fa-thumbs-up:before {
        content: "\f164"
    }

    .fa-thumbtack:before {
        content: "\f08d"
    }

    .fa-ticket-alt:before {
        content: "\f3ff"
    }

    .fa-times:before {
        content: "\f00d"
    }

    .fa-times-circle:before {
        content: "\f057"
    }

    .fa-tint:before {
        content: "\f043"
    }

    .fa-toggle-off:before {
        content: "\f204"
    }

    .fa-toggle-on:before {
        content: "\f205"
    }

    .fa-trademark:before {
        content: "\f25c"
    }

    .fa-train:before {
        content: "\f238"
    }

    .fa-transgender:before {
        content: "\f224"
    }

    .fa-transgender-alt:before {
        content: "\f225"
    }

    .fa-trash:before {
        content: "\f1f8"
    }

    .fa-trash-alt:before {
        content: "\f2ed"
    }

    .fa-tree:before {
        content: "\f1bb"
    }

    .fa-trello:before {
        content: "\f181"
    }

    .fa-tripadvisor:before {
        content: "\f262"
    }

    .fa-trophy:before {
        content: "\f091"
    }

    .fa-truck:before {
        content: "\f0d1"
    }

    .fa-truck-loading:before {
        content: "\f4de"
    }

    .fa-truck-moving:before {
        content: "\f4df"
    }

    .fa-tty:before {
        content: "\f1e4"
    }

    .fa-tumblr:before {
        content: "\f173"
    }

    .fa-tumblr-square:before {
        content: "\f174"
    }

    .fa-tv:before {
        content: "\f26c"
    }

    .fa-twitch:before {
        content: "\f1e8"
    }

    .fa-twitter:before {
        content: "\f099"
    }

    .fa-twitter-square:before {
        content: "\f081"
    }

    .fa-typo3:before {
        content: "\f42b"
    }

    .fa-uber:before {
        content: "\f402"
    }

    .fa-uikit:before {
        content: "\f403"
    }

    .fa-umbrella:before {
        content: "\f0e9"
    }

    .fa-underline:before {
        content: "\f0cd"
    }

    .fa-undo:before {
        content: "\f0e2"
    }

    .fa-undo-alt:before {
        content: "\f2ea"
    }

    .fa-uniregistry:before {
        content: "\f404"
    }

    .fa-universal-access:before {
        content: "\f29a"
    }

    .fa-university:before {
        content: "\f19c"
    }

    .fa-unlink:before {
        content: "\f127"
    }

    .fa-unlock:before {
        content: "\f09c"
    }

    .fa-unlock-alt:before {
        content: "\f13e"
    }

    .fa-untappd:before {
        content: "\f405"
    }

    .fa-upload:before {
        content: "\f093"
    }

    .fa-usb:before {
        content: "\f287"
    }

    .fa-user:before {
        content: "\f007"
    }

    .fa-user-circle:before {
        content: "\f2bd"
    }

    .fa-user-md:before {
        content: "\f0f0"
    }

    .fa-user-plus:before {
        content: "\f234"
    }

    .fa-user-secret:before {
        content: "\f21b"
    }

    .fa-user-times:before {
        content: "\f235"
    }

    .fa-users:before {
        content: "\f0c0"
    }

    .fa-ussunnah:before {
        content: "\f407"
    }

    .fa-utensil-spoon:before {
        content: "\f2e5"
    }

    .fa-utensils:before {
        content: "\f2e7"
    }

    .fa-vaadin:before {
        content: "\f408"
    }

    .fa-venus:before {
        content: "\f221"
    }

    .fa-venus-double:before {
        content: "\f226"
    }

    .fa-venus-mars:before {
        content: "\f228"
    }

    .fa-viacoin:before {
        content: "\f237"
    }

    .fa-viadeo:before {
        content: "\f2a9"
    }

    .fa-viadeo-square:before {
        content: "\f2aa"
    }

    .fa-vial:before {
        content: "\f492"
    }

    .fa-vials:before {
        content: "\f493"
    }

    .fa-viber:before {
        content: "\f409"
    }

    .fa-video:before {
        content: "\f03d"
    }

    .fa-video-slash:before {
        content: "\f4e2"
    }

    .fa-vimeo:before {
        content: "\f40a"
    }

    .fa-vimeo-square:before {
        content: "\f194"
    }

    .fa-vimeo-v:before {
        content: "\f27d"
    }

    .fa-vine:before {
        content: "\f1ca"
    }

    .fa-vk:before {
        content: "\f189"
    }

    .fa-vnv:before {
        content: "\f40b"
    }

    .fa-volleyball-ball:before {
        content: "\f45f"
    }

    .fa-volume-down:before {
        content: "\f027"
    }

    .fa-volume-off:before {
        content: "\f026"
    }

    .fa-volume-up:before {
        content: "\f028"
    }

    .fa-vuejs:before {
        content: "\f41f"
    }

    .fa-warehouse:before {
        content: "\f494"
    }

    .fa-weibo:before {
        content: "\f18a"
    }

    .fa-weight:before {
        content: "\f496"
    }

    .fa-weixin:before {
        content: "\f1d7"
    }

    .fa-whatsapp:before {
        content: "\f232"
    }

    .fa-whatsapp-square:before {
        content: "\f40c"
    }

    .fa-wheelchair:before {
        content: "\f193"
    }

    .fa-whmcs:before {
        content: "\f40d"
    }

    .fa-wifi:before {
        content: "\f1eb"
    }

    .fa-wikipedia-w:before {
        content: "\f266"
    }

    .fa-window-close:before {
        content: "\f410"
    }

    .fa-window-maximize:before {
        content: "\f2d0"
    }

    .fa-window-minimize:before {
        content: "\f2d1"
    }

    .fa-window-restore:before {
        content: "\f2d2"
    }

    .fa-windows:before {
        content: "\f17a"
    }

    .fa-wine-glass:before {
        content: "\f4e3"
    }

    .fa-won-sign:before {
        content: "\f159"
    }

    .fa-wordpress:before {
        content: "\f19a"
    }

    .fa-wordpress-simple:before {
        content: "\f411"
    }

    .fa-wpbeginner:before {
        content: "\f297"
    }

    .fa-wpexplorer:before {
        content: "\f2de"
    }

    .fa-wpforms:before {
        content: "\f298"
    }

    .fa-wrench:before {
        content: "\f0ad"
    }

    .fa-x-ray:before {
        content: "\f497"
    }

    .fa-xbox:before {
        content: "\f412"
    }

    .fa-xing:before {
        content: "\f168"
    }

    .fa-xing-square:before {
        content: "\f169"
    }

    .fa-y-combinator:before {
        content: "\f23b"
    }

    .fa-yahoo:before {
        content: "\f19e"
    }

    .fa-yandex:before {
        content: "\f413"
    }

    .fa-yandex-international:before {
        content: "\f414"
    }

    .fa-yelp:before {
        content: "\f1e9"
    }

    .fa-yen-sign:before {
        content: "\f157"
    }

    .fa-yoast:before {
        content: "\f2b1"
    }

    .fa-youtube:before {
        content: "\f167"
    }

    .fa-youtube-square:before {
        content: "\f431"
    }

    .sr-only {
        margin: -1px
    }

    dl,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    ol,
    p,
    pre,
    ul {
        margin-top: 0
    }

    .sr-only-focusable:active,
    .sr-only-focusable:focus {
        margin: 0
    }

    address,
    dl,
    ol,
    p,
    pre,
    ul {
        margin-bottom: 1rem
    }

    dd,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    label {
        margin-bottom: .5rem
    }

    @font-face {
        font-family: 'Font Awesome 5 Brands';
        font-style: normal;
        font-weight: 400;
        src: url(icons/font-awesome/webfonts/fa-brands-400.eot);
        src: url(icons/font-awesome/webfonts/fa-brands-400.eot?#iefix) format("embedded-opentype"), url(icons/font-awesome/webfonts/fa-brands-400.woff2) format("woff2"), url(icons/font-awesome/webfonts/fa-brands-400.woff) format("woff"), url(icons/font-awesome/webfonts/fa-brands-400.ttf) format("truetype"), url(icons/font-awesome/webfonts/fa-brands-400.svg#fontawesome) format("svg")
    }

    .fab {
        font-family: 'Font Awesome 5 Brands'
    }

    .fa,
    .far,
    .fas {
        font-family: 'Font Awesome 5 Free'
    }

    @font-face {
        font-family: 'Font Awesome 5 Free';
        font-style: normal;
        font-weight: 400;
        src: url(icons/font-awesome/webfonts/fa-regular-400.eot);
        src: url(icons/font-awesome/webfonts/fa-regular-400.eot?#iefix) format("embedded-opentype"), url(icons/font-awesome/webfonts/fa-regular-400.woff2) format("woff2"), url(icons/font-awesome/webfonts/fa-regular-400.woff) format("woff"), url(icons/font-awesome/webfonts/fa-regular-400.ttf) format("truetype"), url(icons/font-awesome/webfonts/fa-regular-400.svg#fontawesome) format("svg")
    }

    .far {
        font-weight: 400
    }

    @font-face {
        font-family: 'Font Awesome 5 Free';
        font-style: normal;
        font-weight: 900;
        src: url(icons/font-awesome/webfonts/fa-solid-900.eot);
        src: url(icons/font-awesome/webfonts/fa-solid-900.eot?#iefix) format("embedded-opentype"), url(icons/font-awesome/webfonts/fa-solid-900.woff2) format("woff2"), url(icons/font-awesome/webfonts/fa-solid-900.woff) format("woff"), url(icons/font-awesome/webfonts/fa-solid-900.ttf) format("truetype"), url(icons/font-awesome/webfonts/fa-solid-900.svg#fontawesome) format("svg")
    }

    .fa,
    .fas {
        font-weight: 900
    }

    .wi,
    [class*=" ti-"],
    [class^=ti-] {
        font-style: normal;
        font-weight: 400;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    @font-face {
        font-family: simple-line-icons;
        src: url(icons/simple-line-icons/fonts/Simple-Line-Icons.eot?-i3a2kk);
        src: url(icons/simple-line-icons/fonts/Simple-Line-Icons.eot?#iefix-i3a2kk) format('embedded-opentype'), url(icons/simple-line-icons/fonts/Simple-Line-Icons.ttf?-i3a2kk) format('truetype'), url(icons/simple-line-icons/fonts/Simple-Line-Icons.woff2?-i3a2kk) format('woff2'), url(icons/simple-line-icons/fonts/Simple-Line-Icons.woff?-i3a2kk) format('woff'), url(icons/simple-line-icons/fonts/Simple-Line-Icons.svg?-i3a2kk#simple-line-icons) format('svg');
        font-weight: 400;
        font-style: normal
    }

    .icon-action-redo,
    .icon-action-undo,
    .icon-anchor,
    .icon-arrow-down,
    .icon-arrow-down-circle,
    .icon-arrow-left,
    .icon-arrow-left-circle,
    .icon-arrow-right,
    .icon-arrow-right-circle,
    .icon-arrow-up,
    .icon-arrow-up-circle,
    .icon-badge,
    .icon-bag,
    .icon-ban,
    .icon-basket,
    .icon-basket-loaded,
    .icon-bell,
    .icon-book-open,
    .icon-briefcase,
    .icon-bubble,
    .icon-bubbles,
    .icon-bulb,
    .icon-calculator,
    .icon-calender,
    .icon-call-end,
    .icon-call-in,
    .icon-call-out,
    .icon-camera,
    .icon-camrecorder,
    .icon-chart,
    .icon-check,
    .icon-chemistry,
    .icon-clock,
    .icon-close,
    .icon-cloud-download,
    .icon-cloud-upload,
    .icon-compass,
    .icon-control-end,
    .icon-control-forward,
    .icon-control-pause,
    .icon-control-play,
    .icon-control-rewind,
    .icon-control-start,
    .icon-credit-card,
    .icon-crop,
    .icon-cup,
    .icon-cursor,
    .icon-cursor-move,
    .icon-diamond,
    .icon-direction,
    .icon-directions,
    .icon-disc,
    .icon-dislike,
    .icon-doc,
    .icon-docs,
    .icon-drawar,
    .icon-drop,
    .icon-earphones,
    .icon-earphones-alt,
    .icon-emotsmile,
    .icon-energy,
    .icon-envelope,
    .icon-envelope-letter,
    .icon-envelope-open,
    .icon-equalizer,
    .icon-eye,
    .icon-eyeglass,
    .icon-feed,
    .icon-film,
    .icon-fire,
    .icon-flag,
    .icon-folder,
    .icon-folder-alt,
    .icon-frame,
    .icon-game-controller,
    .icon-ghost,
    .icon-globe,
    .icon-globe-alt,
    .icon-graduation,
    .icon-graph,
    .icon-grid,
    .icon-handbag,
    .icon-heart,
    .icon-home,
    .icon-hourglass,
    .icon-info,
    .icon-key,
    .icon-layers,
    .icon-like,
    .icon-link,
    .icon-list,
    .icon-location-pin,
    .icon-lock,
    .icon-lock-open,
    .icon-login,
    .icon-logout,
    .icon-loop,
    .icon-magic-wand,
    .icon-magnet,
    .icon-magnifier,
    .icon-magnifier-add,
    .icon-magnifier-remove,
    .icon-map,
    .icon-menu,
    .icon-microphone,
    .icon-mouse,
    .icon-music-tone,
    .icon-music-tone-alt,
    .icon-mustache,
    .icon-note,
    .icon-notebook,
    .icon-options,
    .icon-options-vertical,
    .icon-paper-clip,
    .icon-paper-plane,
    .icon-paypal,
    .icon-pencil,
    .icon-people,
    .icon-phone,
    .icon-picture,
    .icon-pie-chart,
    .icon-pin,
    .icon-plane,
    .icon-playlist,
    .icon-plus,
    .icon-power,
    .icon-present,
    .icon-printer,
    .icon-puzzle,
    .icon-question,
    .icon-refresh,
    .icon-reload,
    .icon-rocket,
    .icon-screen-desktop,
    .icon-screen-smartphone,
    .icon-screen-tablet,
    .icon-settings,
    .icon-share,
    .icon-share-alt,
    .icon-shield,
    .icon-shuffle,
    .icon-size-actual,
    .icon-size-fullscreen,
    .icon-social-behance,
    .icon-social-dribbble,
    .icon-social-dropbox,
    .icon-social-facebook,
    .icon-social-foursqare,
    .icon-social-github,
    .icon-social-gplus,
    .icon-social-instagram,
    .icon-social-linkedin,
    .icon-social-pintarest,
    .icon-social-reddit,
    .icon-social-skype,
    .icon-social-soundcloud,
    .icon-social-spotify,
    .icon-social-stumbleupon,
    .icon-social-tumblr,
    .icon-social-twitter,
    .icon-social-youtube,
    .icon-speech,
    .icon-speedometer,
    .icon-star,
    .icon-support,
    .icon-symble-female,
    .icon-symbol-male,
    .icon-tag,
    .icon-target,
    .icon-trash,
    .icon-trophy,
    .icon-umbrella,
    .icon-user,
    .icon-user-female,
    .icon-user-follow,
    .icon-user-following,
    .icon-user-unfollow,
    .icon-vector,
    .icon-volume-1,
    .icon-volume-2,
    .icon-volume-off,
    .icon-wallet,
    .icon-wrench {
        font-family: simple-line-icons;
        speak: none;
        font-style: normal;
        font-weight: 400;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .icon-user:before {
        content: "\e005"
    }

    .icon-people:before {
        content: "\e001"
    }

    .icon-user-female:before {
        content: "\e000"
    }

    .icon-user-follow:before {
        content: "\e002"
    }

    .icon-user-following:before {
        content: "\e003"
    }

    .icon-user-unfollow:before {
        content: "\e004"
    }

    .icon-login:before {
        content: "\e066"
    }

    .icon-logout:before {
        content: "\e065"
    }

    .icon-emotsmile:before {
        content: "\e021"
    }

    .icon-phone:before {
        content: "\e600"
    }

    .icon-call-end:before {
        content: "\e048"
    }

    .icon-call-in:before {
        content: "\e047"
    }

    .icon-call-out:before {
        content: "\e046"
    }

    .icon-map:before {
        content: "\e033"
    }

    .icon-location-pin:before {
        content: "\e096"
    }

    .icon-direction:before {
        content: "\e042"
    }

    .icon-directions:before {
        content: "\e041"
    }

    .icon-compass:before {
        content: "\e045"
    }

    .icon-layers:before {
        content: "\e034"
    }

    .icon-menu:before {
        content: "\e601"
    }

    .icon-list:before {
        content: "\e067"
    }

    .icon-options-vertical:before {
        content: "\e602"
    }

    .icon-options:before {
        content: "\e603"
    }

    .icon-arrow-down:before {
        content: "\e604"
    }

    .icon-arrow-left:before {
        content: "\e605"
    }

    .icon-arrow-right:before {
        content: "\e606"
    }

    .icon-arrow-up:before {
        content: "\e607"
    }

    .icon-arrow-up-circle:before {
        content: "\e078"
    }

    .icon-arrow-left-circle:before {
        content: "\e07a"
    }

    .icon-arrow-right-circle:before {
        content: "\e079"
    }

    .icon-arrow-down-circle:before {
        content: "\e07b"
    }

    .icon-check:before {
        content: "\e080"
    }

    .icon-clock:before {
        content: "\e081"
    }

    .icon-plus:before {
        content: "\e095"
    }

    .icon-close:before {
        content: "\e082"
    }

    .icon-trophy:before {
        content: "\e006"
    }

    .icon-screen-smartphone:before {
        content: "\e010"
    }

    .icon-screen-desktop:before {
        content: "\e011"
    }

    .icon-plane:before {
        content: "\e012"
    }

    .icon-notebook:before {
        content: "\e013"
    }

    .icon-mustache:before {
        content: "\e014"
    }

    .icon-mouse:before {
        content: "\e015"
    }

    .icon-magnet:before {
        content: "\e016"
    }

    .icon-energy:before {
        content: "\e020"
    }

    .icon-disc:before {
        content: "\e022"
    }

    .icon-cursor:before {
        content: "\e06e"
    }

    .icon-cursor-move:before {
        content: "\e023"
    }

    .icon-crop:before {
        content: "\e024"
    }

    .icon-chemistry:before {
        content: "\e026"
    }

    .icon-speedometer:before {
        content: "\e007"
    }

    .icon-shield:before {
        content: "\e00e"
    }

    .icon-screen-tablet:before {
        content: "\e00f"
    }

    .icon-magic-wand:before {
        content: "\e017"
    }

    .icon-hourglass:before {
        content: "\e018"
    }

    .icon-graduation:before {
        content: "\e019"
    }

    .icon-ghost:before {
        content: "\e01a"
    }

    .icon-game-controller:before {
        content: "\e01b"
    }

    .icon-fire:before {
        content: "\e01c"
    }

    .icon-eyeglass:before {
        content: "\e01d"
    }

    .icon-envelope-open:before {
        content: "\e01e"
    }

    .icon-envelope-letter:before {
        content: "\e01f"
    }

    .icon-bell:before {
        content: "\e027"
    }

    .icon-badge:before {
        content: "\e028"
    }

    .icon-anchor:before {
        content: "\e029"
    }

    .icon-wallet:before {
        content: "\e02a"
    }

    .icon-vector:before {
        content: "\e02b"
    }

    .icon-speech:before {
        content: "\e02c"
    }

    .icon-puzzle:before {
        content: "\e02d"
    }

    .icon-printer:before {
        content: "\e02e"
    }

    .icon-present:before {
        content: "\e02f"
    }

    .icon-playlist:before {
        content: "\e030"
    }

    .icon-pin:before {
        content: "\e031"
    }

    .icon-picture:before {
        content: "\e032"
    }

    .icon-handbag:before {
        content: "\e035"
    }

    .icon-globe-alt:before {
        content: "\e036"
    }

    .icon-globe:before {
        content: "\e037"
    }

    .icon-folder-alt:before {
        content: "\e039"
    }

    .icon-folder:before {
        content: "\e089"
    }

    .icon-film:before {
        content: "\e03a"
    }

    .icon-feed:before {
        content: "\e03b"
    }

    .icon-drop:before {
        content: "\e03e"
    }

    .icon-drawar:before {
        content: "\e03f"
    }

    .icon-docs:before {
        content: "\e040"
    }

    .icon-doc:before {
        content: "\e085"
    }

    .icon-diamond:before {
        content: "\e043"
    }

    .icon-cup:before {
        content: "\e044"
    }

    .icon-calculator:before {
        content: "\e049"
    }

    .icon-bubbles:before {
        content: "\e04a"
    }

    .icon-briefcase:before {
        content: "\e04b"
    }

    .icon-book-open:before {
        content: "\e04c"
    }

    .icon-basket-loaded:before {
        content: "\e04d"
    }

    .icon-basket:before {
        content: "\e04e"
    }

    .icon-bag:before {
        content: "\e04f"
    }

    .icon-action-undo:before {
        content: "\e050"
    }

    .icon-action-redo:before {
        content: "\e051"
    }

    .icon-wrench:before {
        content: "\e052"
    }

    .icon-umbrella:before {
        content: "\e053"
    }

    .icon-trash:before {
        content: "\e054"
    }

    .icon-tag:before {
        content: "\e055"
    }

    .icon-support:before {
        content: "\e056"
    }

    .icon-frame:before {
        content: "\e038"
    }

    .icon-size-fullscreen:before {
        content: "\e057"
    }

    .icon-size-actual:before {
        content: "\e058"
    }

    .icon-shuffle:before {
        content: "\e059"
    }

    .icon-share-alt:before {
        content: "\e05a"
    }

    .icon-share:before {
        content: "\e05b"
    }

    .icon-rocket:before {
        content: "\e05c"
    }

    .icon-question:before {
        content: "\e05d"
    }

    .icon-pie-chart:before {
        content: "\e05e"
    }

    .icon-pencil:before {
        content: "\e05f"
    }

    .icon-note:before {
        content: "\e060"
    }

    .icon-loop:before {
        content: "\e064"
    }

    .icon-home:before {
        content: "\e069"
    }

    .icon-grid:before {
        content: "\e06a"
    }

    .icon-graph:before {
        content: "\e06b"
    }

    .icon-microphone:before {
        content: "\e063"
    }

    .icon-music-tone-alt:before {
        content: "\e061"
    }

    .icon-music-tone:before {
        content: "\e062"
    }

    .icon-earphones-alt:before {
        content: "\e03c"
    }

    .icon-earphones:before {
        content: "\e03d"
    }

    .icon-equalizer:before {
        content: "\e06c"
    }

    .icon-like:before {
        content: "\e068"
    }

    .icon-dislike:before {
        content: "\e06d"
    }

    .icon-control-start:before {
        content: "\e06f"
    }

    .icon-control-rewind:before {
        content: "\e070"
    }

    .icon-control-play:before {
        content: "\e071"
    }

    .icon-control-pause:before {
        content: "\e072"
    }

    .icon-control-forward:before {
        content: "\e073"
    }

    .icon-control-end:before {
        content: "\e074"
    }

    .icon-volume-1:before {
        content: "\e09f"
    }

    .icon-volume-2:before {
        content: "\e0a0"
    }

    .icon-volume-off:before {
        content: "\e0a1"
    }

    .icon-calender:before {
        content: "\e075"
    }

    .icon-bulb:before {
        content: "\e076"
    }

    .icon-chart:before {
        content: "\e077"
    }

    .icon-ban:before {
        content: "\e07c"
    }

    .icon-bubble:before {
        content: "\e07d"
    }

    .icon-camrecorder:before {
        content: "\e07e"
    }

    .icon-camera:before {
        content: "\e07f"
    }

    .icon-cloud-download:before {
        content: "\e083"
    }

    .icon-cloud-upload:before {
        content: "\e084"
    }

    .icon-envelope:before {
        content: "\e086"
    }

    .icon-eye:before {
        content: "\e087"
    }

    .icon-flag:before {
        content: "\e088"
    }

    .icon-heart:before {
        content: "\e08a"
    }

    .icon-info:before {
        content: "\e08b"
    }

    .icon-key:before {
        content: "\e08c"
    }

    .icon-link:before {
        content: "\e08d"
    }

    .icon-lock:before {
        content: "\e08e"
    }

    .icon-lock-open:before {
        content: "\e08f"
    }

    .icon-magnifier:before {
        content: "\e090"
    }

    .icon-magnifier-add:before {
        content: "\e091"
    }

    .icon-magnifier-remove:before {
        content: "\e092"
    }

    .icon-paper-clip:before {
        content: "\e093"
    }

    .icon-paper-plane:before {
        content: "\e094"
    }

    .icon-power:before {
        content: "\e097"
    }

    .icon-refresh:before {
        content: "\e098"
    }

    .icon-reload:before {
        content: "\e099"
    }

    .icon-settings:before {
        content: "\e09a"
    }

    .icon-star:before {
        content: "\e09b"
    }

    .icon-symble-female:before {
        content: "\e09c"
    }

    .icon-symbol-male:before {
        content: "\e09d"
    }

    .icon-target:before {
        content: "\e09e"
    }

    .icon-credit-card:before {
        content: "\e025"
    }

    .icon-paypal:before {
        content: "\e608"
    }

    .icon-social-tumblr:before {
        content: "\e00a"
    }

    .icon-social-twitter:before {
        content: "\e009"
    }

    .icon-social-facebook:before {
        content: "\e00b"
    }

    .icon-social-instagram:before {
        content: "\e609"
    }

    .icon-social-linkedin:before {
        content: "\e60a"
    }

    .icon-social-pintarest:before {
        content: "\e60b"
    }

    .icon-social-github:before {
        content: "\e60c"
    }

    .icon-social-gplus:before {
        content: "\e60d"
    }

    .icon-social-reddit:before {
        content: "\e60e"
    }

    .icon-social-skype:before {
        content: "\e60f"
    }

    .icon-social-dribbble:before {
        content: "\e00d"
    }

    .icon-social-behance:before {
        content: "\e610"
    }

    .icon-social-foursqare:before {
        content: "\e611"
    }

    .icon-social-soundcloud:before {
        content: "\e612"
    }

    .icon-social-spotify:before {
        content: "\e613"
    }

    .icon-social-stumbleupon:before {
        content: "\e614"
    }

    .icon-social-youtube:before {
        content: "\e008"
    }

    .icon-social-dropbox:before {
        content: "\e00c"
    }


    /*!
 *  Weather Icons 2.0
 *  Updated August 1, 2015
 *  Weather themed icons for Bootstrap
 *  Author - Erik Flowers - erik@helloerik.com
 *  Email: erik@helloerik.com
 *  Twitter: http://twitter.com/Erik_UX
 *  ------------------------------------------------------------------------------
 *  Maintained at http://erikflowers.github.io/weather-icons
 *
 *  License
 *  ------------------------------------------------------------------------------
 *  - Font licensed under SIL OFL 1.1 -
 *    http://scripts.sil.org/OFL
 *  - CSS, SCSS and LESS are licensed under MIT License -
 *    http://opensource.org/licenses/mit-license.html
 *  - Documentation licensed under CC BY 3.0 -
 *    http://creativecommons.org/licenses/by/3.0/
 *  - Inspired by and works great as a companion with Font Awesome
 *    "Font Awesome by Dave Gandy - http://fontawesome.io"
 */

    @font-face {
        font-family: weathericons;
        src: url(icons/weather-icons/fonts/weathericons-regular-webfont.eot);
        src: url(icons/weather-icons/fonts/weathericons-regular-webfont.eot?#iefix) format('embedded-opentype'), url(icons/weather-icons/fonts/weathericons-regular-webfont.woff2) format('woff2'), url(icons/weather-icons/fonts/weathericons-regular-webfont.woff) format('woff'), url(icons/weather-icons/fonts/weathericons-regular-webfont.ttf) format('truetype'), url(icons/weather-icons/fonts/weathericons-regular-webfont.svg#weather_iconsregular) format('svg');
        font-weight: 400;
        font-style: normal
    }

    .wi {
        font-family: weathericons
    }

    .wi-fw {
        width: 1.4em
    }

    body,
    caption {
        text-align: left
    }

    .wi-rotate-90 {
        filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=1);
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg)
    }

    .wi-rotate-180 {
        filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=2);
        -webkit-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg)
    }

    .wi-rotate-270 {
        filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=3);
        -webkit-transform: rotate(270deg);
        -ms-transform: rotate(270deg);
        transform: rotate(270deg)
    }

    .wi-flip-horizontal {
        filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1);
        -webkit-transform: scale(-1, 1);
        -ms-transform: scale(-1, 1);
        transform: scale(-1, 1)
    }

    .wi-flip-vertical {
        filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1);
        -webkit-transform: scale(1, -1);
        -ms-transform: scale(1, -1);
        transform: scale(1, -1)
    }

    .wi-day-sunny:before {
        content: "\f00d"
    }

    .wi-day-cloudy:before {
        content: "\f002"
    }

    .wi-day-cloudy-gusts:before {
        content: "\f000"
    }

    .wi-day-cloudy-windy:before {
        content: "\f001"
    }

    .wi-day-fog:before {
        content: "\f003"
    }

    .wi-day-hail:before {
        content: "\f004"
    }

    .wi-day-haze:before {
        content: "\f0b6"
    }

    .wi-day-lightning:before {
        content: "\f005"
    }

    .wi-day-rain:before {
        content: "\f008"
    }

    .wi-day-rain-mix:before {
        content: "\f006"
    }

    .wi-day-rain-wind:before {
        content: "\f007"
    }

    .wi-day-showers:before {
        content: "\f009"
    }

    .wi-day-sleet:before {
        content: "\f0b2"
    }

    .wi-day-sleet-storm:before {
        content: "\f068"
    }

    .wi-day-snow:before {
        content: "\f00a"
    }

    .wi-day-snow-thunderstorm:before {
        content: "\f06b"
    }

    .wi-day-snow-wind:before {
        content: "\f065"
    }

    .wi-day-sprinkle:before {
        content: "\f00b"
    }

    .wi-day-storm-showers:before {
        content: "\f00e"
    }

    .wi-day-sunny-overcast:before {
        content: "\f00c"
    }

    .wi-day-thunderstorm:before {
        content: "\f010"
    }

    .wi-day-windy:before {
        content: "\f085"
    }

    .wi-solar-eclipse:before {
        content: "\f06e"
    }

    .wi-hot:before {
        content: "\f072"
    }

    .wi-day-cloudy-high:before {
        content: "\f07d"
    }

    .wi-day-light-wind:before {
        content: "\f0c4"
    }

    .wi-night-clear:before {
        content: "\f02e"
    }

    .wi-night-alt-cloudy:before {
        content: "\f086"
    }

    .wi-night-alt-cloudy-gusts:before {
        content: "\f022"
    }

    .wi-night-alt-cloudy-windy:before {
        content: "\f023"
    }

    .wi-night-alt-hail:before {
        content: "\f024"
    }

    .wi-night-alt-lightning:before {
        content: "\f025"
    }

    .wi-night-alt-rain:before {
        content: "\f028"
    }

    .wi-night-alt-rain-mix:before {
        content: "\f026"
    }

    .wi-night-alt-rain-wind:before {
        content: "\f027"
    }

    .wi-night-alt-showers:before {
        content: "\f029"
    }

    .wi-night-alt-sleet:before {
        content: "\f0b4"
    }

    .wi-night-alt-sleet-storm:before {
        content: "\f06a"
    }

    .wi-night-alt-snow:before {
        content: "\f02a"
    }

    .wi-night-alt-snow-thunderstorm:before {
        content: "\f06d"
    }

    .wi-night-alt-snow-wind:before {
        content: "\f067"
    }

    .wi-night-alt-sprinkle:before {
        content: "\f02b"
    }

    .wi-night-alt-storm-showers:before {
        content: "\f02c"
    }

    .wi-night-alt-thunderstorm:before {
        content: "\f02d"
    }

    .wi-night-cloudy:before {
        content: "\f031"
    }

    .wi-night-cloudy-gusts:before {
        content: "\f02f"
    }

    .wi-night-cloudy-windy:before {
        content: "\f030"
    }

    .wi-night-fog:before {
        content: "\f04a"
    }

    .wi-night-hail:before {
        content: "\f032"
    }

    .wi-night-lightning:before {
        content: "\f033"
    }

    .wi-night-partly-cloudy:before {
        content: "\f083"
    }

    .wi-night-rain:before {
        content: "\f036"
    }

    .wi-night-rain-mix:before {
        content: "\f034"
    }

    .wi-night-rain-wind:before {
        content: "\f035"
    }

    .wi-night-showers:before {
        content: "\f037"
    }

    .wi-night-sleet:before {
        content: "\f0b3"
    }

    .wi-night-sleet-storm:before {
        content: "\f069"
    }

    .wi-night-snow:before {
        content: "\f038"
    }

    .wi-night-snow-thunderstorm:before {
        content: "\f06c"
    }

    .wi-night-snow-wind:before {
        content: "\f066"
    }

    .wi-night-sprinkle:before {
        content: "\f039"
    }

    .wi-night-storm-showers:before {
        content: "\f03a"
    }

    .wi-night-thunderstorm:before {
        content: "\f03b"
    }

    .wi-lunar-eclipse:before {
        content: "\f070"
    }

    .wi-stars:before {
        content: "\f077"
    }

    .wi-night-alt-cloudy-high:before {
        content: "\f07e"
    }

    .wi-night-cloudy-high:before {
        content: "\f080"
    }

    .wi-night-alt-partly-cloudy:before {
        content: "\f081"
    }

    .wi-cloud:before {
        content: "\f041"
    }

    .wi-cloudy:before {
        content: "\f013"
    }

    .wi-cloudy-gusts:before {
        content: "\f011"
    }

    .wi-cloudy-windy:before {
        content: "\f012"
    }

    .wi-fog:before {
        content: "\f014"
    }

    .wi-hail:before {
        content: "\f015"
    }

    .wi-rain:before {
        content: "\f019"
    }

    .wi-rain-mix:before {
        content: "\f017"
    }

    .wi-rain-wind:before {
        content: "\f018"
    }

    .wi-showers:before {
        content: "\f01a"
    }

    .wi-sleet:before {
        content: "\f0b5"
    }

    .wi-sprinkle:before {
        content: "\f01c"
    }

    .wi-storm-showers:before {
        content: "\f01d"
    }

    .wi-thunderstorm:before {
        content: "\f01e"
    }

    .wi-snow-wind:before {
        content: "\f064"
    }

    .wi-snow:before {
        content: "\f01b"
    }

    .wi-smog:before {
        content: "\f074"
    }

    .wi-smoke:before {
        content: "\f062"
    }

    .wi-lightning:before {
        content: "\f016"
    }

    .wi-raindrops:before {
        content: "\f04e"
    }

    .wi-raindrop:before {
        content: "\f078"
    }

    .wi-dust:before {
        content: "\f063"
    }

    .wi-snowflake-cold:before {
        content: "\f076"
    }

    .wi-windy:before {
        content: "\f021"
    }

    .wi-strong-wind:before {
        content: "\f050"
    }

    .wi-sandstorm:before {
        content: "\f082"
    }

    .wi-earthquake:before {
        content: "\f0c6"
    }

    .wi-fire:before {
        content: "\f0c7"
    }

    .wi-flood:before {
        content: "\f07c"
    }

    .wi-meteor:before {
        content: "\f071"
    }

    .wi-tsunami:before {
        content: "\f0c5"
    }

    .wi-volcano:before {
        content: "\f0c8"
    }

    .wi-hurricane:before {
        content: "\f073"
    }

    .wi-tornado:before {
        content: "\f056"
    }

    .wi-small-craft-advisory:before {
        content: "\f0cc"
    }

    .wi-gale-warning:before {
        content: "\f0cd"
    }

    .wi-storm-warning:before {
        content: "\f0ce"
    }

    .wi-hurricane-warning:before {
        content: "\f0cf"
    }

    .wi-wind-direction:before {
        content: "\f0b1"
    }

    .wi-alien:before {
        content: "\f075"
    }

    .wi-celsius:before {
        content: "\f03c"
    }

    .wi-fahrenheit:before {
        content: "\f045"
    }

    .wi-degrees:before {
        content: "\f042"
    }

    .wi-thermometer:before {
        content: "\f055"
    }

    .wi-thermometer-exterior:before {
        content: "\f053"
    }

    .wi-thermometer-internal:before {
        content: "\f054"
    }

    .wi-cloud-down:before {
        content: "\f03d"
    }

    .wi-cloud-up:before {
        content: "\f040"
    }

    .wi-cloud-refresh:before {
        content: "\f03e"
    }

    .wi-horizon:before {
        content: "\f047"
    }

    .wi-horizon-alt:before {
        content: "\f046"
    }

    .wi-sunrise:before {
        content: "\f051"
    }

    .wi-sunset:before {
        content: "\f052"
    }

    .wi-moonrise:before {
        content: "\f0c9"
    }

    .wi-moonset:before {
        content: "\f0ca"
    }

    .wi-refresh:before {
        content: "\f04c"
    }

    .wi-refresh-alt:before {
        content: "\f04b"
    }

    .wi-umbrella:before {
        content: "\f084"
    }

    .wi-barometer:before {
        content: "\f079"
    }

    .wi-humidity:before {
        content: "\f07a"
    }

    .wi-na:before {
        content: "\f07b"
    }

    .wi-train:before {
        content: "\f0cb"
    }

    .wi-moon-new:before {
        content: "\f095"
    }

    .wi-moon-waxing-cresent-1:before {
        content: "\f096"
    }

    .wi-moon-waxing-cresent-2:before {
        content: "\f097"
    }

    .wi-moon-waxing-cresent-3:before {
        content: "\f098"
    }

    .wi-moon-waxing-cresent-4:before {
        content: "\f099"
    }

    .wi-moon-waxing-cresent-5:before {
        content: "\f09a"
    }

    .wi-moon-waxing-cresent-6:before {
        content: "\f09b"
    }

    .wi-moon-first-quarter:before {
        content: "\f09c"
    }

    .wi-moon-waxing-gibbous-1:before {
        content: "\f09d"
    }

    .wi-moon-waxing-gibbous-2:before {
        content: "\f09e"
    }

    .wi-moon-waxing-gibbous-3:before {
        content: "\f09f"
    }

    .wi-moon-waxing-gibbous-4:before {
        content: "\f0a0"
    }

    .wi-moon-waxing-gibbous-5:before {
        content: "\f0a1"
    }

    .wi-moon-waxing-gibbous-6:before {
        content: "\f0a2"
    }

    .wi-moon-full:before {
        content: "\f0a3"
    }

    .wi-moon-waning-gibbous-1:before {
        content: "\f0a4"
    }

    .wi-moon-waning-gibbous-2:before {
        content: "\f0a5"
    }

    .wi-moon-waning-gibbous-3:before {
        content: "\f0a6"
    }

    .wi-moon-waning-gibbous-4:before {
        content: "\f0a7"
    }

    .wi-moon-waning-gibbous-5:before {
        content: "\f0a8"
    }

    .wi-moon-waning-gibbous-6:before {
        content: "\f0a9"
    }

    .wi-moon-third-quarter:before {
        content: "\f0aa"
    }

    .wi-moon-waning-crescent-1:before {
        content: "\f0ab"
    }

    .wi-moon-waning-crescent-2:before {
        content: "\f0ac"
    }

    .wi-moon-waning-crescent-3:before {
        content: "\f0ad"
    }

    .wi-moon-waning-crescent-4:before {
        content: "\f0ae"
    }

    .wi-moon-waning-crescent-5:before {
        content: "\f0af"
    }

    .wi-moon-waning-crescent-6:before {
        content: "\f0b0"
    }

    .wi-moon-alt-new:before {
        content: "\f0eb"
    }

    .wi-moon-alt-waxing-cresent-1:before {
        content: "\f0d0"
    }

    .wi-moon-alt-waxing-cresent-2:before {
        content: "\f0d1"
    }

    .wi-moon-alt-waxing-cresent-3:before {
        content: "\f0d2"
    }

    .wi-moon-alt-waxing-cresent-4:before {
        content: "\f0d3"
    }

    .wi-moon-alt-waxing-cresent-5:before {
        content: "\f0d4"
    }

    .wi-moon-alt-waxing-cresent-6:before {
        content: "\f0d5"
    }

    .wi-moon-alt-first-quarter:before {
        content: "\f0d6"
    }

    .wi-moon-alt-waxing-gibbous-1:before {
        content: "\f0d7"
    }

    .wi-moon-alt-waxing-gibbous-2:before {
        content: "\f0d8"
    }

    .wi-moon-alt-waxing-gibbous-3:before {
        content: "\f0d9"
    }

    .wi-moon-alt-waxing-gibbous-4:before {
        content: "\f0da"
    }

    .wi-moon-alt-waxing-gibbous-5:before {
        content: "\f0db"
    }

    .wi-moon-alt-waxing-gibbous-6:before {
        content: "\f0dc"
    }

    .wi-moon-alt-full:before {
        content: "\f0dd"
    }

    .wi-moon-alt-waning-gibbous-1:before {
        content: "\f0de"
    }

    .wi-moon-alt-waning-gibbous-2:before {
        content: "\f0df"
    }

    .wi-moon-alt-waning-gibbous-3:before {
        content: "\f0e0"
    }

    .wi-moon-alt-waning-gibbous-4:before {
        content: "\f0e1"
    }

    .wi-moon-alt-waning-gibbous-5:before {
        content: "\f0e2"
    }

    .wi-moon-alt-waning-gibbous-6:before {
        content: "\f0e3"
    }

    .wi-moon-alt-third-quarter:before {
        content: "\f0e4"
    }

    .wi-moon-alt-waning-crescent-1:before {
        content: "\f0e5"
    }

    .wi-moon-alt-waning-crescent-2:before {
        content: "\f0e6"
    }

    .wi-moon-alt-waning-crescent-3:before {
        content: "\f0e7"
    }

    .wi-moon-alt-waning-crescent-4:before {
        content: "\f0e8"
    }

    .wi-moon-alt-waning-crescent-5:before {
        content: "\f0e9"
    }

    .wi-moon-alt-waning-crescent-6:before {
        content: "\f0ea"
    }

    .wi-moon-0:before {
        content: "\f095"
    }

    .wi-moon-1:before {
        content: "\f096"
    }

    .wi-moon-2:before {
        content: "\f097"
    }

    .wi-moon-3:before {
        content: "\f098"
    }

    .wi-moon-4:before {
        content: "\f099"
    }

    .wi-moon-5:before {
        content: "\f09a"
    }

    .wi-moon-6:before {
        content: "\f09b"
    }

    .wi-moon-7:before {
        content: "\f09c"
    }

    .wi-moon-8:before {
        content: "\f09d"
    }

    .wi-moon-9:before {
        content: "\f09e"
    }

    .wi-moon-10:before {
        content: "\f09f"
    }

    .wi-moon-11:before {
        content: "\f0a0"
    }

    .wi-moon-12:before {
        content: "\f0a1"
    }

    .wi-moon-13:before {
        content: "\f0a2"
    }

    .wi-moon-14:before {
        content: "\f0a3"
    }

    .wi-moon-15:before {
        content: "\f0a4"
    }

    .wi-moon-16:before {
        content: "\f0a5"
    }

    .wi-moon-17:before {
        content: "\f0a6"
    }

    .wi-moon-18:before {
        content: "\f0a7"
    }

    .wi-moon-19:before {
        content: "\f0a8"
    }

    .wi-moon-20:before {
        content: "\f0a9"
    }

    .wi-moon-21:before {
        content: "\f0aa"
    }

    .wi-moon-22:before {
        content: "\f0ab"
    }

    .wi-moon-23:before {
        content: "\f0ac"
    }

    .wi-moon-24:before {
        content: "\f0ad"
    }

    .wi-moon-25:before {
        content: "\f0ae"
    }

    .wi-moon-26:before {
        content: "\f0af"
    }

    .wi-moon-27:before {
        content: "\f0b0"
    }

    .wi-time-1:before {
        content: "\f08a"
    }

    .wi-time-2:before {
        content: "\f08b"
    }

    .wi-time-3:before {
        content: "\f08c"
    }

    .wi-time-4:before {
        content: "\f08d"
    }

    .wi-time-5:before {
        content: "\f08e"
    }

    .wi-time-6:before {
        content: "\f08f"
    }

    .wi-time-7:before {
        content: "\f090"
    }

    .wi-time-8:before {
        content: "\f091"
    }

    .wi-time-9:before {
        content: "\f092"
    }

    .wi-time-10:before {
        content: "\f093"
    }

    .wi-time-11:before {
        content: "\f094"
    }

    .wi-time-12:before {
        content: "\f089"
    }

    .wi-direction-up:before {
        content: "\f058"
    }

    .wi-direction-up-right:before {
        content: "\f057"
    }

    .wi-direction-right:before {
        content: "\f04d"
    }

    .wi-direction-down-right:before {
        content: "\f088"
    }

    .wi-direction-down:before {
        content: "\f044"
    }

    .wi-direction-down-left:before {
        content: "\f043"
    }

    .wi-direction-left:before {
        content: "\f048"
    }

    .wi-direction-up-left:before {
        content: "\f087"
    }

    .wi-wind-beaufort-0:before {
        content: "\f0b7"
    }

    .wi-wind-beaufort-1:before {
        content: "\f0b8"
    }

    .wi-wind-beaufort-2:before {
        content: "\f0b9"
    }

    .wi-wind-beaufort-3:before {
        content: "\f0ba"
    }

    .wi-wind-beaufort-4:before {
        content: "\f0bb"
    }

    .wi-wind-beaufort-5:before {
        content: "\f0bc"
    }

    .wi-wind-beaufort-6:before {
        content: "\f0bd"
    }

    .wi-wind-beaufort-7:before {
        content: "\f0be"
    }

    .wi-wind-beaufort-8:before {
        content: "\f0bf"
    }

    .wi-wind-beaufort-9:before {
        content: "\f0c0"
    }

    .wi-wind-beaufort-10:before {
        content: "\f0c1"
    }

    .wi-wind-beaufort-11:before {
        content: "\f0c2"
    }

    .wi-wind-beaufort-12:before {
        content: "\f0c3"
    }

    .wi-yahoo-0:before {
        content: "\f056"
    }

    .wi-yahoo-1:before {
        content: "\f00e"
    }

    .wi-yahoo-2:before {
        content: "\f073"
    }

    .wi-yahoo-3:before,
    .wi-yahoo-4:before {
        content: "\f01e"
    }

    .wi-yahoo-5:before,
    .wi-yahoo-6:before,
    .wi-yahoo-7:before {
        content: "\f017"
    }

    .wi-yahoo-8:before {
        content: "\f015"
    }

    .wi-yahoo-9:before {
        content: "\f01a"
    }

    .wi-yahoo-10:before {
        content: "\f015"
    }

    .wi-yahoo-11:before,
    .wi-yahoo-12:before {
        content: "\f01a"
    }

    .wi-yahoo-13:before {
        content: "\f01b"
    }

    .wi-yahoo-14:before {
        content: "\f00a"
    }

    .wi-yahoo-15:before {
        content: "\f064"
    }

    .wi-yahoo-16:before {
        content: "\f01b"
    }

    .wi-yahoo-17:before {
        content: "\f015"
    }

    .wi-yahoo-18:before {
        content: "\f017"
    }

    .wi-yahoo-19:before {
        content: "\f063"
    }

    .wi-yahoo-20:before {
        content: "\f014"
    }

    .wi-yahoo-21:before {
        content: "\f021"
    }

    .wi-yahoo-22:before {
        content: "\f062"
    }

    .wi-yahoo-23:before,
    .wi-yahoo-24:before {
        content: "\f050"
    }

    .wi-yahoo-25:before {
        content: "\f076"
    }

    .wi-yahoo-26:before {
        content: "\f013"
    }

    .wi-yahoo-27:before {
        content: "\f031"
    }

    .wi-yahoo-28:before {
        content: "\f002"
    }

    .wi-yahoo-29:before {
        content: "\f031"
    }

    .wi-yahoo-30:before {
        content: "\f002"
    }

    .wi-yahoo-31:before {
        content: "\f02e"
    }

    .wi-yahoo-32:before {
        content: "\f00d"
    }

    .wi-yahoo-33:before {
        content: "\f083"
    }

    .wi-yahoo-34:before {
        content: "\f00c"
    }

    .wi-yahoo-35:before {
        content: "\f017"
    }

    .wi-yahoo-36:before {
        content: "\f072"
    }

    .wi-yahoo-37:before,
    .wi-yahoo-38:before,
    .wi-yahoo-39:before {
        content: "\f00e"
    }

    .wi-yahoo-40:before {
        content: "\f01a"
    }

    .wi-yahoo-41:before {
        content: "\f064"
    }

    .wi-yahoo-42:before {
        content: "\f01b"
    }

    .wi-yahoo-43:before {
        content: "\f064"
    }

    .wi-yahoo-44:before {
        content: "\f00c"
    }

    .wi-yahoo-45:before {
        content: "\f00e"
    }

    .wi-yahoo-46:before {
        content: "\f01b"
    }

    .wi-yahoo-47:before {
        content: "\f00e"
    }

    .wi-yahoo-3200:before {
        content: "\f077"
    }

    .wi-forecast-io-clear-day:before {
        content: "\f00d"
    }

    .wi-forecast-io-clear-night:before {
        content: "\f02e"
    }

    .wi-forecast-io-rain:before {
        content: "\f019"
    }

    .wi-forecast-io-snow:before {
        content: "\f01b"
    }

    .wi-forecast-io-sleet:before {
        content: "\f0b5"
    }

    .wi-forecast-io-wind:before {
        content: "\f050"
    }

    .wi-forecast-io-fog:before {
        content: "\f014"
    }

    .wi-forecast-io-cloudy:before {
        content: "\f013"
    }

    .wi-forecast-io-partly-cloudy-day:before {
        content: "\f002"
    }

    .wi-forecast-io-partly-cloudy-night:before {
        content: "\f031"
    }

    .wi-forecast-io-hail:before {
        content: "\f015"
    }

    .wi-forecast-io-thunderstorm:before {
        content: "\f01e"
    }

    .wi-forecast-io-tornado:before {
        content: "\f056"
    }

    .wi-wmo4680-00:before,
    .wi-wmo4680-0:before {
        content: "\f055"
    }

    .wi-wmo4680-01:before,
    .wi-wmo4680-1:before {
        content: "\f013"
    }

    .wi-wmo4680-02:before,
    .wi-wmo4680-2:before {
        content: "\f055"
    }

    .wi-wmo4680-03:before,
    .wi-wmo4680-3:before {
        content: "\f013"
    }

    .wi-wmo4680-04:before,
    .wi-wmo4680-05:before,
    .wi-wmo4680-10:before,
    .wi-wmo4680-11:before,
    .wi-wmo4680-4:before,
    .wi-wmo4680-5:before {
        content: "\f014"
    }

    .wi-wmo4680-12:before {
        content: "\f016"
    }

    .wi-wmo4680-18:before {
        content: "\f050"
    }

    .wi-wmo4680-20:before {
        content: "\f014"
    }

    .wi-wmo4680-21:before,
    .wi-wmo4680-22:before {
        content: "\f017"
    }

    .wi-wmo4680-23:before {
        content: "\f019"
    }

    .wi-wmo4680-24:before {
        content: "\f01b"
    }

    .wi-wmo4680-25:before {
        content: "\f015"
    }

    .wi-wmo4680-26:before {
        content: "\f01e"
    }

    .wi-wmo4680-27:before,
    .wi-wmo4680-28:before,
    .wi-wmo4680-29:before {
        content: "\f063"
    }

    .wi-wmo4680-30:before,
    .wi-wmo4680-31:before,
    .wi-wmo4680-32:before,
    .wi-wmo4680-33:before,
    .wi-wmo4680-34:before,
    .wi-wmo4680-35:before {
        content: "\f014"
    }

    .wi-wmo4680-40:before {
        content: "\f017"
    }

    .wi-wmo4680-41:before {
        content: "\f01c"
    }

    .wi-wmo4680-42:before {
        content: "\f019"
    }

    .wi-wmo4680-43:before {
        content: "\f01c"
    }

    .wi-wmo4680-44:before {
        content: "\f019"
    }

    .wi-wmo4680-45:before,
    .wi-wmo4680-46:before {
        content: "\f015"
    }

    .wi-wmo4680-47:before,
    .wi-wmo4680-48:before {
        content: "\f01b"
    }

    .wi-wmo4680-50:before,
    .wi-wmo4680-51:before {
        content: "\f01c"
    }

    .wi-wmo4680-52:before,
    .wi-wmo4680-53:before {
        content: "\f019"
    }

    .wi-wmo4680-54:before,
    .wi-wmo4680-55:before,
    .wi-wmo4680-56:before {
        content: "\f076"
    }

    .wi-wmo4680-57:before {
        content: "\f01c"
    }

    .wi-wmo4680-58:before {
        content: "\f019"
    }

    .wi-wmo4680-60:before,
    .wi-wmo4680-61:before {
        content: "\f01c"
    }

    .wi-wmo4680-62:before,
    .wi-wmo4680-63:before {
        content: "\f019"
    }

    .wi-wmo4680-64:before,
    .wi-wmo4680-65:before,
    .wi-wmo4680-66:before {
        content: "\f015"
    }

    .wi-wmo4680-67:before,
    .wi-wmo4680-68:before {
        content: "\f017"
    }

    .wi-wmo4680-70:before,
    .wi-wmo4680-71:before,
    .wi-wmo4680-72:before,
    .wi-wmo4680-73:before {
        content: "\f01b"
    }

    .wi-wmo4680-74:before,
    .wi-wmo4680-75:before,
    .wi-wmo4680-76:before {
        content: "\f076"
    }

    .wi-wmo4680-77:before {
        content: "\f01b"
    }

    .wi-wmo4680-78:before {
        content: "\f076"
    }

    .wi-wmo4680-80:before {
        content: "\f019"
    }

    .wi-wmo4680-81:before {
        content: "\f01c"
    }

    .wi-wmo4680-82:before,
    .wi-wmo4680-83:before {
        content: "\f019"
    }

    .wi-wmo4680-84:before {
        content: "\f01d"
    }

    .wi-wmo4680-85:before,
    .wi-wmo4680-86:before,
    .wi-wmo4680-87:before {
        content: "\f017"
    }

    .wi-wmo4680-89:before {
        content: "\f015"
    }

    .wi-wmo4680-90:before {
        content: "\f016"
    }

    .wi-wmo4680-91:before {
        content: "\f01d"
    }

    .wi-wmo4680-92:before,
    .wi-wmo4680-93:before {
        content: "\f01e"
    }

    .wi-wmo4680-94:before {
        content: "\f016"
    }

    .wi-wmo4680-95:before,
    .wi-wmo4680-96:before {
        content: "\f01e"
    }

    .wi-wmo4680-99:before {
        content: "\f056"
    }

    .wi-owm-200:before,
    .wi-owm-201:before,
    .wi-owm-202:before {
        content: "\f01e"
    }

    .wi-owm-210:before,
    .wi-owm-211:before,
    .wi-owm-212:before,
    .wi-owm-221:before {
        content: "\f016"
    }

    .wi-owm-230:before,
    .wi-owm-231:before,
    .wi-owm-232:before {
        content: "\f01e"
    }

    .wi-owm-300:before,
    .wi-owm-301:before {
        content: "\f01c"
    }

    .wi-owm-302:before {
        content: "\f019"
    }

    .wi-owm-310:before {
        content: "\f017"
    }

    .wi-owm-311:before,
    .wi-owm-312:before {
        content: "\f019"
    }

    .wi-owm-313:before {
        content: "\f01a"
    }

    .wi-owm-314:before {
        content: "\f019"
    }

    .wi-owm-321:before,
    .wi-owm-500:before {
        content: "\f01c"
    }

    .wi-owm-501:before,
    .wi-owm-502:before,
    .wi-owm-503:before,
    .wi-owm-504:before {
        content: "\f019"
    }

    .wi-owm-511:before {
        content: "\f017"
    }

    .wi-owm-520:before,
    .wi-owm-521:before,
    .wi-owm-522:before {
        content: "\f01a"
    }

    .wi-owm-531:before {
        content: "\f01d"
    }

    .wi-owm-600:before,
    .wi-owm-601:before {
        content: "\f01b"
    }

    .wi-owm-602:before {
        content: "\f0b5"
    }

    .wi-owm-611:before,
    .wi-owm-612:before,
    .wi-owm-615:before,
    .wi-owm-616:before,
    .wi-owm-620:before {
        content: "\f017"
    }

    .wi-owm-621:before,
    .wi-owm-622:before {
        content: "\f01b"
    }

    .wi-owm-701:before {
        content: "\f01a"
    }

    .wi-owm-711:before {
        content: "\f062"
    }

    .wi-owm-721:before {
        content: "\f0b6"
    }

    .wi-owm-731:before {
        content: "\f063"
    }

    .wi-owm-741:before {
        content: "\f014"
    }

    .wi-owm-761:before,
    .wi-owm-762:before {
        content: "\f063"
    }

    .wi-owm-771:before {
        content: "\f011"
    }

    .wi-owm-781:before {
        content: "\f056"
    }

    .wi-owm-800:before {
        content: "\f00d"
    }

    .wi-owm-801:before,
    .wi-owm-802:before,
    .wi-owm-803:before {
        content: "\f011"
    }

    .wi-owm-803:before {
        content: "\f012"
    }

    .wi-owm-804:before {
        content: "\f013"
    }

    .wi-owm-900:before {
        content: "\f056"
    }

    .wi-owm-901:before {
        content: "\f01d"
    }

    .wi-owm-902:before {
        content: "\f073"
    }

    .wi-owm-903:before {
        content: "\f076"
    }

    .wi-owm-904:before {
        content: "\f072"
    }

    .wi-owm-905:before {
        content: "\f021"
    }

    .wi-owm-906:before {
        content: "\f015"
    }

    .wi-owm-957:before {
        content: "\f050"
    }

    .wi-owm-day-200:before,
    .wi-owm-day-201:before,
    .wi-owm-day-202:before {
        content: "\f010"
    }

    .wi-owm-day-210:before,
    .wi-owm-day-211:before,
    .wi-owm-day-212:before,
    .wi-owm-day-221:before {
        content: "\f005"
    }

    .wi-owm-day-230:before,
    .wi-owm-day-231:before,
    .wi-owm-day-232:before {
        content: "\f010"
    }

    .wi-owm-day-300:before,
    .wi-owm-day-301:before {
        content: "\f00b"
    }

    .wi-owm-day-302:before,
    .wi-owm-day-310:before,
    .wi-owm-day-311:before,
    .wi-owm-day-312:before,
    .wi-owm-day-313:before,
    .wi-owm-day-314:before {
        content: "\f008"
    }

    .wi-owm-day-321:before,
    .wi-owm-day-500:before {
        content: "\f00b"
    }

    .wi-owm-day-501:before,
    .wi-owm-day-502:before,
    .wi-owm-day-503:before,
    .wi-owm-day-504:before {
        content: "\f008"
    }

    .wi-owm-day-511:before {
        content: "\f006"
    }

    .wi-owm-day-520:before,
    .wi-owm-day-521:before,
    .wi-owm-day-522:before {
        content: "\f009"
    }

    .wi-owm-day-531:before {
        content: "\f00e"
    }

    .wi-owm-day-600:before {
        content: "\f00a"
    }

    .wi-owm-day-601:before {
        content: "\f0b2"
    }

    .wi-owm-day-602:before {
        content: "\f00a"
    }

    .wi-owm-day-611:before,
    .wi-owm-day-612:before,
    .wi-owm-day-615:before,
    .wi-owm-day-616:before,
    .wi-owm-day-620:before {
        content: "\f006"
    }

    .wi-owm-day-621:before,
    .wi-owm-day-622:before {
        content: "\f00a"
    }

    .wi-owm-day-701:before {
        content: "\f009"
    }

    .wi-owm-day-711:before {
        content: "\f062"
    }

    .wi-owm-day-721:before {
        content: "\f0b6"
    }

    .wi-owm-day-731:before {
        content: "\f063"
    }

    .wi-owm-day-741:before {
        content: "\f003"
    }

    .wi-owm-day-761:before,
    .wi-owm-day-762:before {
        content: "\f063"
    }

    .wi-owm-day-781:before {
        content: "\f056"
    }

    .wi-owm-day-800:before {
        content: "\f00d"
    }

    .wi-owm-day-801:before,
    .wi-owm-day-802:before,
    .wi-owm-day-803:before {
        content: "\f000"
    }

    .wi-owm-day-804:before {
        content: "\f00c"
    }

    .wi-owm-day-900:before {
        content: "\f056"
    }

    .wi-owm-day-902:before {
        content: "\f073"
    }

    .wi-owm-day-903:before {
        content: "\f076"
    }

    .wi-owm-day-904:before {
        content: "\f072"
    }

    .wi-owm-day-906:before {
        content: "\f004"
    }

    .wi-owm-day-957:before {
        content: "\f050"
    }

    .wi-owm-night-200:before,
    .wi-owm-night-201:before,
    .wi-owm-night-202:before {
        content: "\f02d"
    }

    .wi-owm-night-210:before,
    .wi-owm-night-211:before,
    .wi-owm-night-212:before,
    .wi-owm-night-221:before {
        content: "\f025"
    }

    .wi-owm-night-230:before,
    .wi-owm-night-231:before,
    .wi-owm-night-232:before {
        content: "\f02d"
    }

    .wi-owm-night-300:before,
    .wi-owm-night-301:before {
        content: "\f02b"
    }

    .wi-owm-night-302:before,
    .wi-owm-night-310:before,
    .wi-owm-night-311:before,
    .wi-owm-night-312:before,
    .wi-owm-night-313:before,
    .wi-owm-night-314:before {
        content: "\f028"
    }

    .wi-owm-night-321:before,
    .wi-owm-night-500:before {
        content: "\f02b"
    }

    .wi-owm-night-501:before,
    .wi-owm-night-502:before,
    .wi-owm-night-503:before,
    .wi-owm-night-504:before {
        content: "\f028"
    }

    .wi-owm-night-511:before {
        content: "\f026"
    }

    .wi-owm-night-520:before,
    .wi-owm-night-521:before,
    .wi-owm-night-522:before {
        content: "\f029"
    }

    .wi-owm-night-531:before {
        content: "\f02c"
    }

    .wi-owm-night-600:before {
        content: "\f02a"
    }

    .wi-owm-night-601:before {
        content: "\f0b4"
    }

    .wi-owm-night-602:before {
        content: "\f02a"
    }

    .wi-owm-night-611:before,
    .wi-owm-night-612:before,
    .wi-owm-night-615:before,
    .wi-owm-night-616:before,
    .wi-owm-night-620:before {
        content: "\f026"
    }

    .wi-owm-night-621:before,
    .wi-owm-night-622:before {
        content: "\f02a"
    }

    .wi-owm-night-701:before {
        content: "\f029"
    }

    .wi-owm-night-711:before {
        content: "\f062"
    }

    .wi-owm-night-721:before {
        content: "\f0b6"
    }

    .wi-owm-night-731:before {
        content: "\f063"
    }

    .wi-owm-night-741:before {
        content: "\f04a"
    }

    .wi-owm-night-761:before,
    .wi-owm-night-762:before {
        content: "\f063"
    }

    .wi-owm-night-781:before {
        content: "\f056"
    }

    .wi-owm-night-800:before {
        content: "\f02e"
    }

    .wi-owm-night-801:before,
    .wi-owm-night-802:before,
    .wi-owm-night-803:before {
        content: "\f022"
    }

    .wi-owm-night-804:before {
        content: "\f086"
    }

    .wi-owm-night-900:before {
        content: "\f056"
    }

    .wi-owm-night-902:before {
        content: "\f073"
    }

    .wi-owm-night-903:before {
        content: "\f076"
    }

    .wi-owm-night-904:before {
        content: "\f072"
    }

    .wi-owm-night-906:before {
        content: "\f024"
    }

    .wi-owm-night-957:before {
        content: "\f050"
    }

    @font-face {
        font-family: themify;
        src: url(icons/themify-icons/fonts/themify.eot?-fvbane);
        src: url(icons/themify-icons/fonts/themify.eot?#iefix-fvbane) format('embedded-opentype'), url(icons/themify-icons/fonts/themify.woff) format('woff'), url(icons/themify-icons/fonts/themify.ttf) format('truetype'), url(icons/themify-icons/fonts/themify.svg?-fvbane#themify) format('svg');
        font-weight: 400;
        font-style: normal
    }

    [class*=" ti-"],
    [class^=ti-] {
        font-family: themify;
        speak: none;
        font-variant: normal;
        text-transform: none
    }

    .ti-wand:before {
        content: "\e600"
    }

    .ti-volume:before {
        content: "\e601"
    }

    .ti-user:before {
        content: "\e602"
    }

    .ti-unlock:before {
        content: "\e603"
    }

    .ti-unlink:before {
        content: "\e604"
    }

    .ti-trash:before {
        content: "\e605"
    }

    .ti-thought:before {
        content: "\e606"
    }

    .ti-target:before {
        content: "\e607"
    }

    .ti-tag:before {
        content: "\e608"
    }

    .ti-tablet:before {
        content: "\e609"
    }

    .ti-star:before {
        content: "\e60a"
    }

    .ti-spray:before {
        content: "\e60b"
    }

    .ti-signal:before {
        content: "\e60c"
    }

    .ti-shopping-cart:before {
        content: "\e60d"
    }

    .ti-shopping-cart-full:before {
        content: "\e60e"
    }

    .ti-settings:before {
        content: "\e60f"
    }

    .ti-search:before {
        content: "\e610"
    }

    .ti-zoom-in:before {
        content: "\e611"
    }

    .ti-zoom-out:before {
        content: "\e612"
    }

    .ti-cut:before {
        content: "\e613"
    }

    .ti-ruler:before {
        content: "\e614"
    }

    .ti-ruler-pencil:before {
        content: "\e615"
    }

    .ti-ruler-alt:before {
        content: "\e616"
    }

    .ti-bookmark:before {
        content: "\e617"
    }

    .ti-bookmark-alt:before {
        content: "\e618"
    }

    .ti-reload:before {
        content: "\e619"
    }

    .ti-plus:before {
        content: "\e61a"
    }

    .ti-pin:before {
        content: "\e61b"
    }

    .ti-pencil:before {
        content: "\e61c"
    }

    .ti-pencil-alt:before {
        content: "\e61d"
    }

    .ti-paint-roller:before {
        content: "\e61e"
    }

    .ti-paint-bucket:before {
        content: "\e61f"
    }

    .ti-na:before {
        content: "\e620"
    }

    .ti-mobile:before {
        content: "\e621"
    }

    .ti-minus:before {
        content: "\e622"
    }

    .ti-medall:before {
        content: "\e623"
    }

    .ti-medall-alt:before {
        content: "\e624"
    }

    .ti-marker:before {
        content: "\e625"
    }

    .ti-marker-alt:before {
        content: "\e626"
    }

    .ti-arrow-up:before {
        content: "\e627"
    }

    .ti-arrow-right:before {
        content: "\e628"
    }

    .ti-arrow-left:before {
        content: "\e629"
    }

    .ti-arrow-down:before {
        content: "\e62a"
    }

    .ti-lock:before {
        content: "\e62b"
    }

    .ti-location-arrow:before {
        content: "\e62c"
    }

    .ti-link:before {
        content: "\e62d"
    }

    .ti-layout:before {
        content: "\e62e"
    }

    .ti-layers:before {
        content: "\e62f"
    }

    .ti-layers-alt:before {
        content: "\e630"
    }

    .ti-key:before {
        content: "\e631"
    }

    .ti-import:before {
        content: "\e632"
    }

    .ti-image:before {
        content: "\e633"
    }

    .ti-heart:before {
        content: "\e634"
    }

    .ti-heart-broken:before {
        content: "\e635"
    }

    .ti-hand-stop:before {
        content: "\e636"
    }

    .ti-hand-open:before {
        content: "\e637"
    }

    .ti-hand-drag:before {
        content: "\e638"
    }

    .ti-folder:before {
        content: "\e639"
    }

    .ti-flag:before {
        content: "\e63a"
    }

    .ti-flag-alt:before {
        content: "\e63b"
    }

    .ti-flag-alt-2:before {
        content: "\e63c"
    }

    .ti-eye:before {
        content: "\e63d"
    }

    .ti-export:before {
        content: "\e63e"
    }

    .ti-exchange-vertical:before {
        content: "\e63f"
    }

    .ti-desktop:before {
        content: "\e640"
    }

    .ti-cup:before {
        content: "\e641"
    }

    .ti-crown:before {
        content: "\e642"
    }

    .ti-comments:before {
        content: "\e643"
    }

    .ti-comment:before {
        content: "\e644"
    }

    .ti-comment-alt:before {
        content: "\e645"
    }

    .ti-close:before {
        content: "\e646"
    }

    .ti-clip:before {
        content: "\e647"
    }

    .ti-angle-up:before {
        content: "\e648"
    }

    .ti-angle-right:before {
        content: "\e649"
    }

    .ti-angle-left:before {
        content: "\e64a"
    }

    .ti-angle-down:before {
        content: "\e64b"
    }

    .ti-check:before {
        content: "\e64c"
    }

    .ti-check-box:before {
        content: "\e64d"
    }

    .ti-camera:before {
        content: "\e64e"
    }

    .ti-announcement:before {
        content: "\e64f"
    }

    .ti-brush:before {
        content: "\e650"
    }

    .ti-briefcase:before {
        content: "\e651"
    }

    .ti-bolt:before {
        content: "\e652"
    }

    .ti-bolt-alt:before {
        content: "\e653"
    }

    .ti-blackboard:before {
        content: "\e654"
    }

    .ti-bag:before {
        content: "\e655"
    }

    .ti-move:before {
        content: "\e656"
    }

    .ti-arrows-vertical:before {
        content: "\e657"
    }

    .ti-arrows-horizontal:before {
        content: "\e658"
    }

    .ti-fullscreen:before {
        content: "\e659"
    }

    .ti-arrow-top-right:before {
        content: "\e65a"
    }

    .ti-arrow-top-left:before {
        content: "\e65b"
    }

    .ti-arrow-circle-up:before {
        content: "\e65c"
    }

    .ti-arrow-circle-right:before {
        content: "\e65d"
    }

    .ti-arrow-circle-left:before {
        content: "\e65e"
    }

    .ti-arrow-circle-down:before {
        content: "\e65f"
    }

    .ti-angle-double-up:before {
        content: "\e660"
    }

    .ti-angle-double-right:before {
        content: "\e661"
    }

    .ti-angle-double-left:before {
        content: "\e662"
    }

    .ti-angle-double-down:before {
        content: "\e663"
    }

    .ti-zip:before {
        content: "\e664"
    }

    .ti-world:before {
        content: "\e665"
    }

    .ti-wheelchair:before {
        content: "\e666"
    }

    .ti-view-list:before {
        content: "\e667"
    }

    .ti-view-list-alt:before {
        content: "\e668"
    }

    .ti-view-grid:before {
        content: "\e669"
    }

    .ti-uppercase:before {
        content: "\e66a"
    }

    .ti-upload:before {
        content: "\e66b"
    }

    .ti-underline:before {
        content: "\e66c"
    }

    .ti-truck:before {
        content: "\e66d"
    }

    .ti-timer:before {
        content: "\e66e"
    }

    .ti-ticket:before {
        content: "\e66f"
    }

    .ti-thumb-up:before {
        content: "\e670"
    }

    .ti-thumb-down:before {
        content: "\e671"
    }

    .ti-text:before {
        content: "\e672"
    }

    .ti-stats-up:before {
        content: "\e673"
    }

    .ti-stats-down:before {
        content: "\e674"
    }

    .ti-split-v:before {
        content: "\e675"
    }

    .ti-split-h:before {
        content: "\e676"
    }

    .ti-smallcap:before {
        content: "\e677"
    }

    .ti-shine:before {
        content: "\e678"
    }

    .ti-shift-right:before {
        content: "\e679"
    }

    .ti-shift-left:before {
        content: "\e67a"
    }

    .ti-shield:before {
        content: "\e67b"
    }

    .ti-notepad:before {
        content: "\e67c"
    }

    .ti-server:before {
        content: "\e67d"
    }

    .ti-quote-right:before {
        content: "\e67e"
    }

    .ti-quote-left:before {
        content: "\e67f"
    }

    .ti-pulse:before {
        content: "\e680"
    }

    .ti-printer:before {
        content: "\e681"
    }

    .ti-power-off:before {
        content: "\e682"
    }

    .ti-plug:before {
        content: "\e683"
    }

    .ti-pie-chart:before {
        content: "\e684"
    }

    .ti-paragraph:before {
        content: "\e685"
    }

    .ti-panel:before {
        content: "\e686"
    }

    .ti-package:before {
        content: "\e687"
    }

    .ti-music:before {
        content: "\e688"
    }

    .ti-music-alt:before {
        content: "\e689"
    }

    .ti-mouse:before {
        content: "\e68a"
    }

    .ti-mouse-alt:before {
        content: "\e68b"
    }

    .ti-money:before {
        content: "\e68c"
    }

    .ti-microphone:before {
        content: "\e68d"
    }

    .ti-menu:before {
        content: "\e68e"
    }

    .ti-menu-alt:before {
        content: "\e68f"
    }

    .ti-map:before {
        content: "\e690"
    }

    .ti-map-alt:before {
        content: "\e691"
    }

    .ti-loop:before {
        content: "\e692"
    }

    .ti-location-pin:before {
        content: "\e693"
    }

    .ti-list:before {
        content: "\e694"
    }

    .ti-light-bulb:before {
        content: "\e695"
    }

    .ti-Italic:before {
        content: "\e696"
    }

    .ti-info:before {
        content: "\e697"
    }

    .ti-infinite:before {
        content: "\e698"
    }

    .ti-id-badge:before {
        content: "\e699"
    }

    .ti-hummer:before {
        content: "\e69a"
    }

    .ti-home:before {
        content: "\e69b"
    }

    .ti-help:before {
        content: "\e69c"
    }

    .ti-headphone:before {
        content: "\e69d"
    }

    .ti-harddrives:before {
        content: "\e69e"
    }

    .ti-harddrive:before {
        content: "\e69f"
    }

    .ti-gift:before {
        content: "\e6a0"
    }

    .ti-game:before {
        content: "\e6a1"
    }

    .ti-filter:before {
        content: "\e6a2"
    }

    .ti-files:before {
        content: "\e6a3"
    }

    .ti-file:before {
        content: "\e6a4"
    }

    .ti-eraser:before {
        content: "\e6a5"
    }

    .ti-envelope:before {
        content: "\e6a6"
    }

    .ti-download:before {
        content: "\e6a7"
    }

    .ti-direction:before {
        content: "\e6a8"
    }

    .ti-direction-alt:before {
        content: "\e6a9"
    }

    .ti-dashboard:before {
        content: "\e6aa"
    }

    .ti-control-stop:before {
        content: "\e6ab"
    }

    .ti-control-shuffle:before {
        content: "\e6ac"
    }

    .ti-control-play:before {
        content: "\e6ad"
    }

    .ti-control-pause:before {
        content: "\e6ae"
    }

    .ti-control-forward:before {
        content: "\e6af"
    }

    .ti-control-backward:before {
        content: "\e6b0"
    }

    .ti-cloud:before {
        content: "\e6b1"
    }

    .ti-cloud-up:before {
        content: "\e6b2"
    }

    .ti-cloud-down:before {
        content: "\e6b3"
    }

    .ti-clipboard:before {
        content: "\e6b4"
    }

    .ti-car:before {
        content: "\e6b5"
    }

    .ti-calendar:before {
        content: "\e6b6"
    }

    .ti-book:before {
        content: "\e6b7"
    }

    .ti-bell:before {
        content: "\e6b8"
    }

    .ti-basketball:before {
        content: "\e6b9"
    }

    .ti-bar-chart:before {
        content: "\e6ba"
    }

    .ti-bar-chart-alt:before {
        content: "\e6bb"
    }

    .ti-back-right:before {
        content: "\e6bc"
    }

    .ti-back-left:before {
        content: "\e6bd"
    }

    .ti-arrows-corner:before {
        content: "\e6be"
    }

    .ti-archive:before {
        content: "\e6bf"
    }

    .ti-anchor:before {
        content: "\e6c0"
    }

    .ti-align-right:before {
        content: "\e6c1"
    }

    .ti-align-left:before {
        content: "\e6c2"
    }

    .ti-align-justify:before {
        content: "\e6c3"
    }

    .ti-align-center:before {
        content: "\e6c4"
    }

    .ti-alert:before {
        content: "\e6c5"
    }

    .ti-alarm-clock:before {
        content: "\e6c6"
    }

    .ti-agenda:before {
        content: "\e6c7"
    }

    .ti-write:before {
        content: "\e6c8"
    }

    .ti-window:before {
        content: "\e6c9"
    }

    .ti-widgetized:before {
        content: "\e6ca"
    }

    .ti-widget:before {
        content: "\e6cb"
    }

    .ti-widget-alt:before {
        content: "\e6cc"
    }

    .ti-wallet:before {
        content: "\e6cd"
    }

    .ti-video-clapper:before {
        content: "\e6ce"
    }

    .ti-video-camera:before {
        content: "\e6cf"
    }

    .ti-vector:before {
        content: "\e6d0"
    }

    .ti-themify-logo:before {
        content: "\e6d1"
    }

    .ti-themify-favicon:before {
        content: "\e6d2"
    }

    .ti-themify-favicon-alt:before {
        content: "\e6d3"
    }

    .ti-support:before {
        content: "\e6d4"
    }

    .ti-stamp:before {
        content: "\e6d5"
    }

    .ti-split-v-alt:before {
        content: "\e6d6"
    }

    .ti-slice:before {
        content: "\e6d7"
    }

    .ti-shortcode:before {
        content: "\e6d8"
    }

    .ti-shift-right-alt:before {
        content: "\e6d9"
    }

    .ti-shift-left-alt:before {
        content: "\e6da"
    }

    .ti-ruler-alt-2:before {
        content: "\e6db"
    }

    .ti-receipt:before {
        content: "\e6dc"
    }

    .ti-pin2:before {
        content: "\e6dd"
    }

    .ti-pin-alt:before {
        content: "\e6de"
    }

    .ti-pencil-alt2:before {
        content: "\e6df"
    }

    .ti-palette:before {
        content: "\e6e0"
    }

    .ti-more:before {
        content: "\e6e1"
    }

    .ti-more-alt:before {
        content: "\e6e2"
    }

    .ti-microphone-alt:before {
        content: "\e6e3"
    }

    .ti-magnet:before {
        content: "\e6e4"
    }

    .ti-line-double:before {
        content: "\e6e5"
    }

    .ti-line-dotted:before {
        content: "\e6e6"
    }

    .ti-line-dashed:before {
        content: "\e6e7"
    }

    .ti-layout-width-full:before {
        content: "\e6e8"
    }

    .ti-layout-width-default:before {
        content: "\e6e9"
    }

    .ti-layout-width-default-alt:before {
        content: "\e6ea"
    }

    .ti-layout-tab:before {
        content: "\e6eb"
    }

    .ti-layout-tab-window:before {
        content: "\e6ec"
    }

    .ti-layout-tab-v:before {
        content: "\e6ed"
    }

    .ti-layout-tab-min:before {
        content: "\e6ee"
    }

    .ti-layout-slider:before {
        content: "\e6ef"
    }

    .ti-layout-slider-alt:before {
        content: "\e6f0"
    }

    .ti-layout-sidebar-right:before {
        content: "\e6f1"
    }

    .ti-layout-sidebar-none:before {
        content: "\e6f2"
    }

    .ti-layout-sidebar-left:before {
        content: "\e6f3"
    }

    .ti-layout-placeholder:before {
        content: "\e6f4"
    }

    .ti-layout-menu:before {
        content: "\e6f5"
    }

    .ti-layout-menu-v:before {
        content: "\e6f6"
    }

    .ti-layout-menu-separated:before {
        content: "\e6f7"
    }

    .ti-layout-menu-full:before {
        content: "\e6f8"
    }

    .ti-layout-media-right-alt:before {
        content: "\e6f9"
    }

    .ti-layout-media-right:before {
        content: "\e6fa"
    }

    .ti-layout-media-overlay:before {
        content: "\e6fb"
    }

    .ti-layout-media-overlay-alt:before {
        content: "\e6fc"
    }

    .ti-layout-media-overlay-alt-2:before {
        content: "\e6fd"
    }

    .ti-layout-media-left-alt:before {
        content: "\e6fe"
    }

    .ti-layout-media-left:before {
        content: "\e6ff"
    }

    .ti-layout-media-center-alt:before {
        content: "\e700"
    }

    .ti-layout-media-center:before {
        content: "\e701"
    }

    .ti-layout-list-thumb:before {
        content: "\e702"
    }

    .ti-layout-list-thumb-alt:before {
        content: "\e703"
    }

    .ti-layout-list-post:before {
        content: "\e704"
    }

    .ti-layout-list-large-image:before {
        content: "\e705"
    }

    .ti-layout-line-solid:before {
        content: "\e706"
    }

    .ti-layout-grid4:before {
        content: "\e707"
    }

    .ti-layout-grid3:before {
        content: "\e708"
    }

    .ti-layout-grid2:before {
        content: "\e709"
    }

    .ti-layout-grid2-thumb:before {
        content: "\e70a"
    }

    .ti-layout-cta-right:before {
        content: "\e70b"
    }

    .ti-layout-cta-left:before {
        content: "\e70c"
    }

    .ti-layout-cta-center:before {
        content: "\e70d"
    }

    .ti-layout-cta-btn-right:before {
        content: "\e70e"
    }

    .ti-layout-cta-btn-left:before {
        content: "\e70f"
    }

    .ti-layout-column4:before {
        content: "\e710"
    }

    .ti-layout-column3:before {
        content: "\e711"
    }

    .ti-layout-column2:before {
        content: "\e712"
    }

    .ti-layout-accordion-separated:before {
        content: "\e713"
    }

    .ti-layout-accordion-merged:before {
        content: "\e714"
    }

    .ti-layout-accordion-list:before {
        content: "\e715"
    }

    .ti-ink-pen:before {
        content: "\e716"
    }

    .ti-info-alt:before {
        content: "\e717"
    }

    .ti-help-alt:before {
        content: "\e718"
    }

    .ti-headphone-alt:before {
        content: "\e719"
    }

    .ti-hand-point-up:before {
        content: "\e71a"
    }

    .ti-hand-point-right:before {
        content: "\e71b"
    }

    .ti-hand-point-left:before {
        content: "\e71c"
    }

    .ti-hand-point-down:before {
        content: "\e71d"
    }

    .ti-gallery:before {
        content: "\e71e"
    }

    .ti-face-smile:before {
        content: "\e71f"
    }

    .ti-face-sad:before {
        content: "\e720"
    }

    .ti-credit-card:before {
        content: "\e721"
    }

    .ti-control-skip-forward:before {
        content: "\e722"
    }

    .ti-control-skip-backward:before {
        content: "\e723"
    }

    .ti-control-record:before {
        content: "\e724"
    }

    .ti-control-eject:before {
        content: "\e725"
    }

    .ti-comments-smiley:before {
        content: "\e726"
    }

    .ti-brush-alt:before {
        content: "\e727"
    }

    .ti-youtube:before {
        content: "\e728"
    }

    .ti-vimeo:before {
        content: "\e729"
    }

    .ti-twitter:before {
        content: "\e72a"
    }

    .ti-time:before {
        content: "\e72b"
    }

    .ti-tumblr:before {
        content: "\e72c"
    }

    .ti-skype:before {
        content: "\e72d"
    }

    .ti-share:before {
        content: "\e72e"
    }

    .ti-share-alt:before {
        content: "\e72f"
    }

    .ti-rocket:before {
        content: "\e730"
    }

    .ti-pinterest:before {
        content: "\e731"
    }

    .ti-new-window:before {
        content: "\e732"
    }

    .ti-microsoft:before {
        content: "\e733"
    }

    .ti-list-ol:before {
        content: "\e734"
    }

    .ti-linkedin:before {
        content: "\e735"
    }

    .ti-layout-sidebar-2:before {
        content: "\e736"
    }

    .ti-layout-grid4-alt:before {
        content: "\e737"
    }

    .ti-layout-grid3-alt:before {
        content: "\e738"
    }

    .ti-layout-grid2-alt:before {
        content: "\e739"
    }

    .ti-layout-column4-alt:before {
        content: "\e73a"
    }

    .ti-layout-column3-alt:before {
        content: "\e73b"
    }

    .ti-layout-column2-alt:before {
        content: "\e73c"
    }

    .ti-instagram:before {
        content: "\e73d"
    }

    .ti-google:before {
        content: "\e73e"
    }

    .ti-github:before {
        content: "\e73f"
    }

    .ti-flickr:before {
        content: "\e740"
    }

    .ti-facebook:before {
        content: "\e741"
    }

    .ti-dropbox:before {
        content: "\e742"
    }

    .ti-dribbble:before {
        content: "\e743"
    }

    .ti-apple:before {
        content: "\e744"
    }

    .ti-andrAdminid:before {
        content: "\e745"
    }

    .ti-save:before {
        content: "\e746"
    }

    .ti-save-alt:before {
        content: "\e747"
    }

    .ti-yahoo:before {
        content: "\e748"
    }

    .ti-wordpress:before {
        content: "\e749"
    }

    .ti-vimeo-alt:before {
        content: "\e74a"
    }

    .ti-twitter-alt:before {
        content: "\e74b"
    }

    .ti-tumblr-alt:before {
        content: "\e74c"
    }

    .ti-trello:before {
        content: "\e74d"
    }

    .ti-stack-overflow:before {
        content: "\e74e"
    }

    .ti-soundcloud:before {
        content: "\e74f"
    }

    .ti-sharethis:before {
        content: "\e750"
    }

    .ti-sharethis-alt:before {
        content: "\e751"
    }

    .ti-reddit:before {
        content: "\e752"
    }

    .ti-pinterest-alt:before {
        content: "\e753"
    }

    .ti-microsoft-alt:before {
        content: "\e754"
    }

    .ti-linux:before {
        content: "\e755"
    }

    .ti-jsfiddle:before {
        content: "\e756"
    }

    .ti-joomla:before {
        content: "\e757"
    }

    .ti-html5:before {
        content: "\e758"
    }

    .ti-flickr-alt:before {
        content: "\e759"
    }

    .ti-email:before {
        content: "\e75a"
    }

    .ti-drupal:before {
        content: "\e75b"
    }

    .ti-dropbox-alt:before {
        content: "\e75c"
    }

    .ti-css3:before {
        content: "\e75d"
    }

    .ti-rss:before {
        content: "\e75e"
    }

    .ti-rss-alt:before {
        content: "\e75f"
    }

    .flag-icon-background {
        -webkit-background-size: contain;
        background-size: contain
    }

    .flag-icon {
        width: 1.33333333em;
        line-height: 1em;
        -webkit-background-size: contain;
        background-size: contain
    }

    .flag-icon:before {
        content: "\00a0"
    }

    .dropdown-menu .flag-icon {
        margin-right: 5px
    }

    .flag-icon-ad {
        background-image: url(icons/flag-icon-css/flags/ad.svg)
    }

    .flag-icon-ae {
        background-image: url(icons/flag-icon-css/flags/ae.svg)
    }

    .flag-icon-af {
        background-image: url(icons/flag-icon-css/flags/af.svg)
    }

    .flag-icon-ag {
        background-image: url(icons/flag-icon-css/flags/ag.svg)
    }

    .flag-icon-ai {
        background-image: url(icons/flag-icon-css/flags/ai.svg)
    }

    .flag-icon-al {
        background-image: url(icons/flag-icon-css/flags/al.svg)
    }

    .flag-icon-am {
        background-image: url(icons/flag-icon-css/flags/am.svg)
    }

    .flag-icon-ao {
        background-image: url(icons/flag-icon-css/flags/ao.svg)
    }

    .flag-icon-aq {
        background-image: url(icons/flag-icon-css/flags/aq.svg)
    }

    .flag-icon-ar {
        background-image: url(icons/flag-icon-css/flags/ar.svg)
    }

    .flag-icon-as {
        background-image: url(icons/flag-icon-css/flags/as.svg)
    }

    .flag-icon-at {
        background-image: url(icons/flag-icon-css/flags/at.svg)
    }

    .flag-icon-au {
        background-image: url(icons/flag-icon-css/flags/au.svg)
    }

    .flag-icon-aw {
        background-image: url(icons/flag-icon-css/flags/aw.svg)
    }

    .flag-icon-ax {
        background-image: url(icons/flag-icon-css/flags/ax.svg)
    }

    .flag-icon-az {
        background-image: url(icons/flag-icon-css/flags/az.svg)
    }

    .flag-icon-ba {
        background-image: url(icons/flag-icon-css/flags/ba.svg)
    }

    .flag-icon-bb {
        background-image: url(icons/flag-icon-css/flags/bb.svg)
    }

    .flag-icon-bd {
        background-image: url(icons/flag-icon-css/flags/bd.svg)
    }

    .flag-icon-be {
        background-image: url(icons/flag-icon-css/flags/be.svg)
    }

    .flag-icon-bf {
        background-image: url(icons/flag-icon-css/flags/bf.svg)
    }

    .flag-icon-bg {
        background-image: url(icons/flag-icon-css/flags/bg.svg)
    }

    .flag-icon-bh {
        background-image: url(icons/flag-icon-css/flags/bh.svg)
    }

    .flag-icon-bi {
        background-image: url(icons/flag-icon-css/flags/bi.svg)
    }

    .flag-icon-bj {
        background-image: url(icons/flag-icon-css/flags/bj.svg)
    }

    .flag-icon-bl {
        background-image: url(icons/flag-icon-css/flags/bl.svg)
    }

    .flag-icon-bm {
        background-image: url(icons/flag-icon-css/flags/bm.svg)
    }

    .flag-icon-bn {
        background-image: url(icons/flag-icon-css/flags/bn.svg)
    }

    .flag-icon-bo {
        background-image: url(icons/flag-icon-css/flags/bo.svg)
    }

    .flag-icon-bq {
        background-image: url(icons/flag-icon-css/flags/bq.svg)
    }

    .flag-icon-br {
        background-image: url(icons/flag-icon-css/flags/br.svg)
    }

    .flag-icon-bs {
        background-image: url(icons/flag-icon-css/flags/bs.svg)
    }

    .flag-icon-bt {
        background-image: url(icons/flag-icon-css/flags/bt.svg)
    }

    .flag-icon-bv {
        background-image: url(icons/flag-icon-css/flags/bv.svg)
    }

    .flag-icon-bw {
        background-image: url(icons/flag-icon-css/flags/bw.svg)
    }

    .flag-icon-by {
        background-image: url(icons/flag-icon-css/flags/by.svg)
    }

    .flag-icon-bz {
        background-image: url(icons/flag-icon-css/flags/bz.svg)
    }

    .flag-icon-ca {
        background-image: url(icons/flag-icon-css/flags/ca.svg)
    }

    .flag-icon-cc {
        background-image: url(icons/flag-icon-css/flags/cc.svg)
    }

    .flag-icon-cd {
        background-image: url(icons/flag-icon-css/flags/cd.svg)
    }

    .flag-icon-cf {
        background-image: url(icons/flag-icon-css/flags/cf.svg)
    }

    .flag-icon-cg {
        background-image: url(icons/flag-icon-css/flags/cg.svg)
    }

    .flag-icon-ch {
        background-image: url(icons/flag-icon-css/flags/ch.svg)
    }

    .flag-icon-ci {
        background-image: url(icons/flag-icon-css/flags/ci.svg)
    }

    .flag-icon-ck {
        background-image: url(icons/flag-icon-css/flags/ck.svg)
    }

    .flag-icon-cl {
        background-image: url(icons/flag-icon-css/flags/cl.svg)
    }

    .flag-icon-cm {
        background-image: url(icons/flag-icon-css/flags/cm.svg)
    }

    .flag-icon-cn {
        background-image: url(icons/flag-icon-css/flags/cn.svg)
    }

    .flag-icon-co {
        background-image: url(icons/flag-icon-css/flags/co.svg)
    }

    .flag-icon-cr {
        background-image: url(icons/flag-icon-css/flags/cr.svg)
    }

    .flag-icon-cu {
        background-image: url(icons/flag-icon-css/flags/cu.svg)
    }

    .flag-icon-cv {
        background-image: url(icons/flag-icon-css/flags/cv.svg)
    }

    .flag-icon-cw {
        background-image: url(icons/flag-icon-css/flags/cw.svg)
    }

    .flag-icon-cx {
        background-image: url(icons/flag-icon-css/flags/cx.svg)
    }

    .flag-icon-cy {
        background-image: url(icons/flag-icon-css/flags/cy.svg)
    }

    .flag-icon-cz {
        background-image: url(icons/flag-icon-css/flags/cz.svg)
    }

    .flag-icon-de {
        background-image: url(icons/flag-icon-css/flags/de.svg)
    }

    .flag-icon-dj {
        background-image: url(icons/flag-icon-css/flags/dj.svg)
    }

    .flag-icon-dk {
        background-image: url(icons/flag-icon-css/flags/dk.svg)
    }

    .flag-icon-dm {
        background-image: url(icons/flag-icon-css/flags/dm.svg)
    }

    .flag-icon-do {
        background-image: url(icons/flag-icon-css/flags/do.svg)
    }

    .flag-icon-dz {
        background-image: url(icons/flag-icon-css/flags/dz.svg)
    }

    .flag-icon-ec {
        background-image: url(icons/flag-icon-css/flags/ec.svg)
    }

    .flag-icon-ee {
        background-image: url(icons/flag-icon-css/flags/ee.svg)
    }

    .flag-icon-eg {
        background-image: url(icons/flag-icon-css/flags/eg.svg)
    }

    .flag-icon-eh {
        background-image: url(icons/flag-icon-css/flags/eh.svg)
    }

    .flag-icon-er {
        background-image: url(icons/flag-icon-css/flags/er.svg)
    }

    .flag-icon-es {
        background-image: url(icons/flag-icon-css/flags/es.svg)
    }

    .flag-icon-et {
        background-image: url(icons/flag-icon-css/flags/et.svg)
    }

    .flag-icon-fi {
        background-image: url(icons/flag-icon-css/flags/fi.svg)
    }

    .flag-icon-fj {
        background-image: url(icons/flag-icon-css/flags/fj.svg)
    }

    .flag-icon-fk {
        background-image: url(icons/flag-icon-css/flags/fk.svg)
    }

    .flag-icon-fm {
        background-image: url(icons/flag-icon-css/flags/fm.svg)
    }

    .flag-icon-fo {
        background-image: url(icons/flag-icon-css/flags/fo.svg)
    }

    .flag-icon-fr {
        background-image: url(icons/flag-icon-css/flags/fr.svg)
    }

    .flag-icon-ga {
        background-image: url(icons/flag-icon-css/flags/ga.svg)
    }

    .flag-icon-gb {
        background-image: url(icons/flag-icon-css/flags/gb.svg)
    }

    .flag-icon-gd {
        background-image: url(icons/flag-icon-css/flags/gd.svg)
    }

    .flag-icon-ge {
        background-image: url(icons/flag-icon-css/flags/ge.svg)
    }

    .flag-icon-gf {
        background-image: url(icons/flag-icon-css/flags/gf.svg)
    }

    .flag-icon-gg {
        background-image: url(icons/flag-icon-css/flags/gg.svg)
    }

    .flag-icon-gh {
        background-image: url(icons/flag-icon-css/flags/gh.svg)
    }

    .flag-icon-gi {
        background-image: url(icons/flag-icon-css/flags/gi.svg)
    }

    .flag-icon-gl {
        background-image: url(icons/flag-icon-css/flags/gl.svg)
    }

    .flag-icon-gm {
        background-image: url(icons/flag-icon-css/flags/gm.svg)
    }

    .flag-icon-gn {
        background-image: url(icons/flag-icon-css/flags/gn.svg)
    }

    .flag-icon-gp {
        background-image: url(icons/flag-icon-css/flags/gp.svg)
    }

    .flag-icon-gq {
        background-image: url(icons/flag-icon-css/flags/gq.svg)
    }

    .flag-icon-gr {
        background-image: url(icons/flag-icon-css/flags/gr.svg)
    }

    .flag-icon-gs {
        background-image: url(icons/flag-icon-css/flags/gs.svg)
    }

    .flag-icon-gt {
        background-image: url(icons/flag-icon-css/flags/gt.svg)
    }

    .flag-icon-gu {
        background-image: url(icons/flag-icon-css/flags/gu.svg)
    }

    .flag-icon-gw {
        background-image: url(icons/flag-icon-css/flags/gw.svg)
    }

    .flag-icon-gy {
        background-image: url(icons/flag-icon-css/flags/gy.svg)
    }

    .flag-icon-hk {
        background-image: url(icons/flag-icon-css/flags/hk.svg)
    }

    .flag-icon-hm {
        background-image: url(icons/flag-icon-css/flags/hm.svg)
    }

    .flag-icon-hn {
        background-image: url(icons/flag-icon-css/flags/hn.svg)
    }

    .flag-icon-hr {
        background-image: url(icons/flag-icon-css/flags/hr.svg)
    }

    .flag-icon-ht {
        background-image: url(icons/flag-icon-css/flags/ht.svg)
    }

    .flag-icon-hu {
        background-image: url(icons/flag-icon-css/flags/hu.svg)
    }

    .flag-icon-id {
        background-image: url(icons/flag-icon-css/flags/id.svg)
    }

    .flag-icon-ie {
        background-image: url(icons/flag-icon-css/flags/ie.svg)
    }

    .flag-icon-il {
        background-image: url(icons/flag-icon-css/flags/il.svg)
    }

    .flag-icon-im {
        background-image: url(icons/flag-icon-css/flags/im.svg)
    }

    .flag-icon-in {
        background-image: url(icons/flag-icon-css/flags/in.svg)
    }

    .flag-icon-io {
        background-image: url(icons/flag-icon-css/flags/io.svg)
    }

    .flag-icon-iq {
        background-image: url(icons/flag-icon-css/flags/iq.svg)
    }

    .flag-icon-ir {
        background-image: url(icons/flag-icon-css/flags/ir.svg)
    }

    .flag-icon-is {
        background-image: url(icons/flag-icon-css/flags/is.svg)
    }

    .flag-icon-it {
        background-image: url(icons/flag-icon-css/flags/it.svg)
    }

    .flag-icon-je {
        background-image: url(icons/flag-icon-css/flags/je.svg)
    }

    .flag-icon-jm {
        background-image: url(icons/flag-icon-css/flags/jm.svg)
    }

    .flag-icon-jo {
        background-image: url(icons/flag-icon-css/flags/jo.svg)
    }

    .flag-icon-jp {
        background-image: url(icons/flag-icon-css/flags/jp.svg)
    }

    .flag-icon-ke {
        background-image: url(icons/flag-icon-css/flags/ke.svg)
    }

    .flag-icon-kg {
        background-image: url(icons/flag-icon-css/flags/kg.svg)
    }

    .flag-icon-kh {
        background-image: url(icons/flag-icon-css/flags/kh.svg)
    }

    .flag-icon-ki {
        background-image: url(icons/flag-icon-css/flags/ki.svg)
    }

    .flag-icon-km {
        background-image: url(icons/flag-icon-css/flags/km.svg)
    }

    .flag-icon-kn {
        background-image: url(icons/flag-icon-css/flags/kn.svg)
    }

    .flag-icon-kp {
        background-image: url(icons/flag-icon-css/flags/kp.svg)
    }

    .flag-icon-kr {
        background-image: url(icons/flag-icon-css/flags/kr.svg)
    }

    .flag-icon-kw {
        background-image: url(icons/flag-icon-css/flags/kw.svg)
    }

    .flag-icon-ky {
        background-image: url(icons/flag-icon-css/flags/ky.svg)
    }

    .flag-icon-kz {
        background-image: url(icons/flag-icon-css/flags/kz.svg)
    }

    .flag-icon-la {
        background-image: url(icons/flag-icon-css/flags/la.svg)
    }

    .flag-icon-lb {
        background-image: url(icons/flag-icon-css/flags/lb.svg)
    }

    .flag-icon-lc {
        background-image: url(icons/flag-icon-css/flags/lc.svg)
    }

    .flag-icon-li {
        background-image: url(icons/flag-icon-css/flags/li.svg)
    }

    .flag-icon-lk {
        background-image: url(icons/flag-icon-css/flags/lk.svg)
    }

    .flag-icon-lr {
        background-image: url(icons/flag-icon-css/flags/lr.svg)
    }

    .flag-icon-ls {
        background-image: url(icons/flag-icon-css/flags/ls.svg)
    }

    .flag-icon-lt {
        background-image: url(icons/flag-icon-css/flags/lt.svg)
    }

    .flag-icon-lu {
        background-image: url(icons/flag-icon-css/flags/lu.svg)
    }

    .flag-icon-lv {
        background-image: url(icons/flag-icon-css/flags/lv.svg)
    }

    .flag-icon-ly {
        background-image: url(icons/flag-icon-css/flags/ly.svg)
    }

    .flag-icon-ma {
        background-image: url(icons/flag-icon-css/flags/ma.svg)
    }

    .flag-icon-mc {
        background-image: url(icons/flag-icon-css/flags/mc.svg)
    }

    .flag-icon-md {
        background-image: url(icons/flag-icon-css/flags/md.svg)
    }

    .flag-icon-me {
        background-image: url(icons/flag-icon-css/flags/me.svg)
    }

    .flag-icon-mf {
        background-image: url(icons/flag-icon-css/flags/mf.svg)
    }

    .flag-icon-mg {
        background-image: url(icons/flag-icon-css/flags/mg.svg)
    }

    .flag-icon-mh {
        background-image: url(icons/flag-icon-css/flags/mh.svg)
    }

    .flag-icon-mk {
        background-image: url(icons/flag-icon-css/flags/mk.svg)
    }

    .flag-icon-ml {
        background-image: url(icons/flag-icon-css/flags/ml.svg)
    }

    .flag-icon-mm {
        background-image: url(icons/flag-icon-css/flags/mm.svg)
    }

    .flag-icon-mn {
        background-image: url(icons/flag-icon-css/flags/mn.svg)
    }

    .flag-icon-mo {
        background-image: url(icons/flag-icon-css/flags/mo.svg)
    }

    .flag-icon-mp {
        background-image: url(icons/flag-icon-css/flags/mp.svg)
    }

    .flag-icon-mq {
        background-image: url(icons/flag-icon-css/flags/mq.svg)
    }

    .flag-icon-mr {
        background-image: url(icons/flag-icon-css/flags/mr.svg)
    }

    .flag-icon-ms {
        background-image: url(icons/flag-icon-css/flags/ms.svg)
    }

    .flag-icon-mt {
        background-image: url(icons/flag-icon-css/flags/mt.svg)
    }

    .flag-icon-mu {
        background-image: url(icons/flag-icon-css/flags/mu.svg)
    }

    .flag-icon-mv {
        background-image: url(icons/flag-icon-css/flags/mv.svg)
    }

    .flag-icon-mw {
        background-image: url(icons/flag-icon-css/flags/mw.svg)
    }

    .flag-icon-mx {
        background-image: url(icons/flag-icon-css/flags/mx.svg)
    }

    .flag-icon-my {
        background-image: url(icons/flag-icon-css/flags/my.svg)
    }

    .flag-icon-mz {
        background-image: url(icons/flag-icon-css/flags/mz.svg)
    }

    .flag-icon-na {
        background-image: url(icons/flag-icon-css/flags/na.svg)
    }

    .flag-icon-nc {
        background-image: url(icons/flag-icon-css/flags/nc.svg)
    }

    .flag-icon-ne {
        background-image: url(icons/flag-icon-css/flags/ne.svg)
    }

    .flag-icon-nf {
        background-image: url(icons/flag-icon-css/flags/nf.svg)
    }

    .flag-icon-ng {
        background-image: url(icons/flag-icon-css/flags/ng.svg)
    }

    .flag-icon-ni {
        background-image: url(icons/flag-icon-css/flags/ni.svg)
    }

    .flag-icon-nl {
        background-image: url(icons/flag-icon-css/flags/nl.svg)
    }

    .flag-icon-no {
        background-image: url(icons/flag-icon-css/flags/no.svg)
    }

    .flag-icon-np {
        background-image: url(icons/flag-icon-css/flags/np.svg)
    }

    .flag-icon-nr {
        background-image: url(icons/flag-icon-css/flags/nr.svg)
    }

    .flag-icon-nu {
        background-image: url(icons/flag-icon-css/flags/nu.svg)
    }

    .flag-icon-nz {
        background-image: url(icons/flag-icon-css/flags/nz.svg)
    }

    .flag-icon-om {
        background-image: url(icons/flag-icon-css/flags/om.svg)
    }

    .flag-icon-pa {
        background-image: url(icons/flag-icon-css/flags/pa.svg)
    }

    .flag-icon-pe {
        background-image: url(icons/flag-icon-css/flags/pe.svg)
    }

    .flag-icon-pf {
        background-image: url(icons/flag-icon-css/flags/pf.svg)
    }

    .flag-icon-pg {
        background-image: url(icons/flag-icon-css/flags/pg.svg)
    }

    .flag-icon-ph {
        background-image: url(icons/flag-icon-css/flags/ph.svg)
    }

    .flag-icon-pk {
        background-image: url(icons/flag-icon-css/flags/pk.svg)
    }

    .flag-icon-pl {
        background-image: url(icons/flag-icon-css/flags/pl.svg)
    }

    .flag-icon-pm {
        background-image: url(icons/flag-icon-css/flags/pm.svg)
    }

    .flag-icon-pn {
        background-image: url(icons/flag-icon-css/flags/pn.svg)
    }

    .flag-icon-pr {
        background-image: url(icons/flag-icon-css/flags/pr.svg)
    }

    .flag-icon-ps {
        background-image: url(icons/flag-icon-css/flags/ps.svg)
    }

    .flag-icon-pt {
        background-image: url(icons/flag-icon-css/flags/pt.svg)
    }

    .flag-icon-pw {
        background-image: url(icons/flag-icon-css/flags/pw.svg)
    }

    .flag-icon-py {
        background-image: url(icons/flag-icon-css/flags/py.svg)
    }

    .flag-icon-qa {
        background-image: url(icons/flag-icon-css/flags/qa.svg)
    }

    .flag-icon-re {
        background-image: url(icons/flag-icon-css/flags/re.svg)
    }

    .flag-icon-ro {
        background-image: url(icons/flag-icon-css/flags/ro.svg)
    }

    .flag-icon-rs {
        background-image: url(icons/flag-icon-css/flags/rs.svg)
    }

    .flag-icon-ru {
        background-image: url(icons/flag-icon-css/flags/ru.svg)
    }

    .flag-icon-rw {
        background-image: url(icons/flag-icon-css/flags/rw.svg)
    }

    .flag-icon-sa {
        background-image: url(icons/flag-icon-css/flags/sa.svg)
    }

    .flag-icon-sb {
        background-image: url(icons/flag-icon-css/flags/sb.svg)
    }

    .flag-icon-sc {
        background-image: url(icons/flag-icon-css/flags/sc.svg)
    }

    .flag-icon-sd {
        background-image: url(icons/flag-icon-css/flags/sd.svg)
    }

    .flag-icon-se {
        background-image: url(icons/flag-icon-css/flags/se.svg)
    }

    .flag-icon-sg {
        background-image: url(icons/flag-icon-css/flags/sg.svg)
    }

    .flag-icon-sh {
        background-image: url(icons/flag-icon-css/flags/sh.svg)
    }

    .flag-icon-si {
        background-image: url(icons/flag-icon-css/flags/si.svg)
    }

    .flag-icon-sj {
        background-image: url(icons/flag-icon-css/flags/sj.svg)
    }

    .flag-icon-sk {
        background-image: url(icons/flag-icon-css/flags/sk.svg)
    }

    .flag-icon-sl {
        background-image: url(icons/flag-icon-css/flags/sl.svg)
    }

    .flag-icon-sm {
        background-image: url(icons/flag-icon-css/flags/sm.svg)
    }

    .flag-icon-sn {
        background-image: url(icons/flag-icon-css/flags/sn.svg)
    }

    .flag-icon-so {
        background-image: url(icons/flag-icon-css/flags/so.svg)
    }

    .flag-icon-sr {
        background-image: url(icons/flag-icon-css/flags/sr.svg)
    }

    .flag-icon-ss {
        background-image: url(icons/flag-icon-css/flags/ss.svg)
    }

    .flag-icon-st {
        background-image: url(icons/flag-icon-css/flags/st.svg)
    }

    .flag-icon-sv {
        background-image: url(icons/flag-icon-css/flags/sv.svg)
    }

    .flag-icon-sx {
        background-image: url(icons/flag-icon-css/flags/sx.svg)
    }

    .flag-icon-sy {
        background-image: url(icons/flag-icon-css/flags/sy.svg)
    }

    .flag-icon-sz {
        background-image: url(icons/flag-icon-css/flags/sz.svg)
    }

    .flag-icon-tc {
        background-image: url(icons/flag-icon-css/flags/tc.svg)
    }

    .flag-icon-td {
        background-image: url(icons/flag-icon-css/flags/td.svg)
    }

    .flag-icon-tf {
        background-image: url(icons/flag-icon-css/flags/tf.svg)
    }

    .flag-icon-tg {
        background-image: url(icons/flag-icon-css/flags/tg.svg)
    }

    .flag-icon-th {
        background-image: url(icons/flag-icon-css/flags/th.svg)
    }

    .flag-icon-tj {
        background-image: url(icons/flag-icon-css/flags/tj.svg)
    }

    .flag-icon-tk {
        background-image: url(icons/flag-icon-css/flags/tk.svg)
    }

    .flag-icon-tl {
        background-image: url(icons/flag-icon-css/flags/tl.svg)
    }

    .flag-icon-tm {
        background-image: url(icons/flag-icon-css/flags/tm.svg)
    }

    .flag-icon-tn {
        background-image: url(icons/flag-icon-css/flags/tn.svg)
    }

    .flag-icon-to {
        background-image: url(icons/flag-icon-css/flags/to.svg)
    }

    .flag-icon-tr {
        background-image: url(icons/flag-icon-css/flags/tr.svg)
    }

    .flag-icon-tt {
        background-image: url(icons/flag-icon-css/flags/tt.svg)
    }

    .flag-icon-tv {
        background-image: url(icons/flag-icon-css/flags/tv.svg)
    }

    .flag-icon-tw {
        background-image: url(icons/flag-icon-css/flags/tw.svg)
    }

    .flag-icon-tz {
        background-image: url(icons/flag-icon-css/flags/tz.svg)
    }

    .flag-icon-ua {
        background-image: url(icons/flag-icon-css/flags/ua.svg)
    }

    .flag-icon-ug {
        background-image: url(icons/flag-icon-css/flags/ug.svg)
    }

    .flag-icon-um {
        background-image: url(icons/flag-icon-css/flags/um.svg)
    }

    .flag-icon-us {
        background-image: url(icons/flag-icon-css/flags/us.svg)
    }

    .flag-icon-uy {
        background-image: url(icons/flag-icon-css/flags/uy.svg)
    }

    .flag-icon-uz {
        background-image: url(icons/flag-icon-css/flags/uz.svg)
    }

    .flag-icon-va {
        background-image: url(icons/flag-icon-css/flags/va.svg)
    }

    .flag-icon-vc {
        background-image: url(icons/flag-icon-css/flags/vc.svg)
    }

    .flag-icon-ve {
        background-image: url(icons/flag-icon-css/flags/ve.svg)
    }

    .flag-icon-vg {
        background-image: url(icons/flag-icon-css/flags/vg.svg)
    }

    .flag-icon-vi {
        background-image: url(icons/flag-icon-css/flags/vi.svg)
    }

    .flag-icon-vn {
        background-image: url(icons/flag-icon-css/flags/vn.svg)
    }

    .flag-icon-vu {
        background-image: url(icons/flag-icon-css/flags/vu.svg)
    }

    .flag-icon-wf {
        background-image: url(icons/flag-icon-css/flags/wf.svg)
    }

    .flag-icon-ws {
        background-image: url(icons/flag-icon-css/flags/ws.svg)
    }

    .flag-icon-ye {
        background-image: url(icons/flag-icon-css/flags/ye.svg)
    }

    .flag-icon-yt {
        background-image: url(icons/flag-icon-css/flags/yt.svg)
    }

    .flag-icon-za {
        background-image: url(icons/flag-icon-css/flags/za.svg)
    }

    .flag-icon-zm {
        background-image: url(icons/flag-icon-css/flags/zm.svg)
    }

    .flag-icon-zw {
        background-image: url(icons/flag-icon-css/flags/zw.svg)
    }

    @font-face {
        font-family: "Material Design Icons";
        src: url(icons/material-design-iconic-font/fonts/materialdesignicons-webfont.eot?v=1.8.36);
        src: url(icons/material-design-iconic-font/fonts/materialdesignicons-webfont.eot?#iefix&v=1.8.36) format("embedded-opentype"), url(icons/material-design-iconic-font/fonts/materialdesignicons-webfont.woff2?v=1.8.36) format("woff2"), url(icons/material-design-iconic-font/fonts/materialdesignicons-webfont.woff?v=1.8.36) format("woff"), url(icons/material-design-iconic-font/fonts/materialdesignicons-webfont.ttf?v=1.8.36) format("truetype"), url(icons/material-design-iconic-font/fonts/materialdesignicons-webfont.svg?v=1.8.36#materialdesigniconsregular) format("svg");
        font-weight: 400;
        font-style: normal
    }

    .mdi-set,
    .mdi:before {
        font: normal normal normal 24px/1 "Material Design Icons";
        font-size: inherit;
        text-rendering: auto;
        line-height: inherit;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        transform: translate(0, 0)
    }

    article,
    aside,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    legend,
    main,
    nav,
    section {
        display: block
    }

    address,
    legend {
        line-height: inherit
    }

    .mdi-access-point:before {
        content: "\F002"
    }

    .mdi-access-point-network:before {
        content: "\F003"
    }

    .mdi-account:before {
        content: "\F004"
    }

    .mdi-account-alert:before {
        content: "\F005"
    }

    .mdi-account-box:before {
        content: "\F006"
    }

    .mdi-account-box-outline:before {
        content: "\F007"
    }

    .mdi-account-card-details:before {
        content: "\F5D2"
    }

    .mdi-account-check:before {
        content: "\F008"
    }

    .mdi-account-circle:before {
        content: "\F009"
    }

    .mdi-account-convert:before {
        content: "\F00A"
    }

    .mdi-account-edit:before {
        content: "\F6BB"
    }

    .mdi-account-key:before {
        content: "\F00B"
    }

    .mdi-account-location:before {
        content: "\F00C"
    }

    .mdi-account-minus:before {
        content: "\F00D"
    }

    .mdi-account-multiple:before {
        content: "\F00E"
    }

    .mdi-account-multiple-minus:before {
        content: "\F5D3"
    }

    .mdi-account-multiple-outline:before {
        content: "\F00F"
    }

    .mdi-account-multiple-plus:before {
        content: "\F010"
    }

    .mdi-account-network:before {
        content: "\F011"
    }

    .mdi-account-off:before {
        content: "\F012"
    }

    .mdi-account-outline:before {
        content: "\F013"
    }

    .mdi-account-plus:before {
        content: "\F014"
    }

    .mdi-account-remove:before {
        content: "\F015"
    }

    .mdi-account-search:before {
        content: "\F016"
    }

    .mdi-account-settings:before {
        content: "\F630"
    }

    .mdi-account-settings-variant:before {
        content: "\F631"
    }

    .mdi-account-star:before {
        content: "\F017"
    }

    .mdi-account-star-variant:before {
        content: "\F018"
    }

    .mdi-account-switch:before {
        content: "\F019"
    }

    .mdi-adjust:before {
        content: "\F01A"
    }

    .mdi-air-conditioner:before {
        content: "\F01B"
    }

    .mdi-airballoon:before {
        content: "\F01C"
    }

    .mdi-airplane:before {
        content: "\F01D"
    }

    .mdi-airplane-landing:before {
        content: "\F5D4"
    }

    .mdi-airplane-off:before {
        content: "\F01E"
    }

    .mdi-airplane-takeoff:before {
        content: "\F5D5"
    }

    .mdi-airplay:before {
        content: "\F01F"
    }

    .mdi-alarm:before {
        content: "\F020"
    }

    .mdi-alarm-check:before {
        content: "\F021"
    }

    .mdi-alarm-multiple:before {
        content: "\F022"
    }

    .mdi-alarm-off:before {
        content: "\F023"
    }

    .mdi-alarm-plus:before {
        content: "\F024"
    }

    .mdi-alarm-snooze:before {
        content: "\F68D"
    }

    .mdi-album:before {
        content: "\F025"
    }

    .mdi-alert:before {
        content: "\F026"
    }

    .mdi-alert-box:before {
        content: "\F027"
    }

    .mdi-alert-circle:before {
        content: "\F028"
    }

    .mdi-alert-circle-outline:before {
        content: "\F5D6"
    }

    .mdi-alert-octagon:before {
        content: "\F029"
    }

    .mdi-alert-octagram:before {
        content: "\F6BC"
    }

    .mdi-alert-outline:before {
        content: "\F02A"
    }

    .mdi-all-inclusive:before {
        content: "\F6BD"
    }

    .mdi-alpha:before {
        content: "\F02B"
    }

    .mdi-alphabetical:before {
        content: "\F02C"
    }

    .mdi-altimeter:before {
        content: "\F5D7"
    }

    .mdi-amazon:before {
        content: "\F02D"
    }

    .mdi-amazon-clouddrive:before {
        content: "\F02E"
    }

    .mdi-ambulance:before {
        content: "\F02F"
    }

    .mdi-amplifier:before {
        content: "\F030"
    }

    .mdi-anchor:before {
        content: "\F031"
    }

    .mdi-andrAdminid:before {
        content: "\F032"
    }

    .mdi-andrAdminid-debug-bridge:before {
        content: "\F033"
    }

    .mdi-andrAdminid-studio:before {
        content: "\F034"
    }

    .mdi-angular:before {
        content: "\F6B1"
    }

    .mdi-angularjs:before {
        content: "\F6BE"
    }

    .mdi-animation:before {
        content: "\F5D8"
    }

    .mdi-apple:before {
        content: "\F035"
    }

    .mdi-apple-finder:before {
        content: "\F036"
    }

    .mdi-apple-ios:before {
        content: "\F037"
    }

    .mdi-apple-keyboard-caps:before {
        content: "\F632"
    }

    .mdi-apple-keyboard-command:before {
        content: "\F633"
    }

    .mdi-apple-keyboard-control:before {
        content: "\F634"
    }

    .mdi-apple-keyboard-option:before {
        content: "\F635"
    }

    .mdi-apple-keyboard-shift:before {
        content: "\F636"
    }

    .mdi-apple-mobileme:before {
        content: "\F038"
    }

    .mdi-apple-safari:before {
        content: "\F039"
    }

    .mdi-application:before {
        content: "\F614"
    }

    .mdi-apps:before {
        content: "\F03B"
    }

    .mdi-archive:before {
        content: "\F03C"
    }

    .mdi-arrange-bring-forward:before {
        content: "\F03D"
    }

    .mdi-arrange-bring-to-front:before {
        content: "\F03E"
    }

    .mdi-arrange-send-backward:before {
        content: "\F03F"
    }

    .mdi-arrange-send-to-back:before {
        content: "\F040"
    }

    .mdi-arrow-all:before {
        content: "\F041"
    }

    .mdi-arrow-bottom-left:before {
        content: "\F042"
    }

    .mdi-arrow-bottom-right:before {
        content: "\F043"
    }

    .mdi-arrow-compress:before {
        content: "\F615"
    }

    .mdi-arrow-compress-all:before {
        content: "\F044"
    }

    .mdi-arrow-down:before {
        content: "\F045"
    }

    .mdi-arrow-down-bold:before {
        content: "\F046"
    }

    .mdi-arrow-down-bold-circle:before {
        content: "\F047"
    }

    .mdi-arrow-down-bold-circle-outline:before {
        content: "\F048"
    }

    .mdi-arrow-down-bold-hexagon-outline:before {
        content: "\F049"
    }

    .mdi-arrow-down-box:before {
        content: "\F6BF"
    }

    .mdi-arrow-down-drop-circle:before {
        content: "\F04A"
    }

    .mdi-arrow-down-drop-circle-outline:before {
        content: "\F04B"
    }

    .mdi-arrow-expand:before {
        content: "\F616"
    }

    .mdi-arrow-expand-all:before {
        content: "\F04C"
    }

    .mdi-arrow-left:before {
        content: "\F04D"
    }

    .mdi-arrow-left-bold:before {
        content: "\F04E"
    }

    .mdi-arrow-left-bold-circle:before {
        content: "\F04F"
    }

    .mdi-arrow-left-bold-circle-outline:before {
        content: "\F050"
    }

    .mdi-arrow-left-bold-hexagon-outline:before {
        content: "\F051"
    }

    .mdi-arrow-left-box:before {
        content: "\F6C0"
    }

    .mdi-arrow-left-drop-circle:before {
        content: "\F052"
    }

    .mdi-arrow-left-drop-circle-outline:before {
        content: "\F053"
    }

    .mdi-arrow-right:before {
        content: "\F054"
    }

    .mdi-arrow-right-bold:before {
        content: "\F055"
    }

    .mdi-arrow-right-bold-circle:before {
        content: "\F056"
    }

    .mdi-arrow-right-bold-circle-outline:before {
        content: "\F057"
    }

    .mdi-arrow-right-bold-hexagon-outline:before {
        content: "\F058"
    }

    .mdi-arrow-right-box:before {
        content: "\F6C1"
    }

    .mdi-arrow-right-drop-circle:before {
        content: "\F059"
    }

    .mdi-arrow-right-drop-circle-outline:before {
        content: "\F05A"
    }

    .mdi-arrow-top-left:before {
        content: "\F05B"
    }

    .mdi-arrow-top-right:before {
        content: "\F05C"
    }

    .mdi-arrow-up:before {
        content: "\F05D"
    }

    .mdi-arrow-up-bold:before {
        content: "\F05E"
    }

    .mdi-arrow-up-bold-circle:before {
        content: "\F05F"
    }

    .mdi-arrow-up-bold-circle-outline:before {
        content: "\F060"
    }

    .mdi-arrow-up-bold-hexagon-outline:before {
        content: "\F061"
    }

    .mdi-arrow-up-box:before {
        content: "\F6C2"
    }

    .mdi-arrow-up-drop-circle:before {
        content: "\F062"
    }

    .mdi-arrow-up-drop-circle-outline:before {
        content: "\F063"
    }

    .mdi-assistant:before {
        content: "\F064"
    }

    .mdi-asterisk:before {
        content: "\F6C3"
    }

    .mdi-at:before {
        content: "\F065"
    }

    .mdi-attachment:before {
        content: "\F066"
    }

    .mdi-audiobook:before {
        content: "\F067"
    }

    .mdi-auto-fix:before {
        content: "\F068"
    }

    .mdi-auto-upload:before {
        content: "\F069"
    }

    .mdi-autorenew:before {
        content: "\F06A"
    }

    .mdi-av-timer:before {
        content: "\F06B"
    }

    .mdi-baby:before {
        content: "\F06C"
    }

    .mdi-baby-buggy:before {
        content: "\F68E"
    }

    .mdi-backburger:before {
        content: "\F06D"
    }

    .mdi-backspace:before {
        content: "\F06E"
    }

    .mdi-backup-restore:before {
        content: "\F06F"
    }

    .mdi-bandcamp:before {
        content: "\F674"
    }

    .mdi-bank:before {
        content: "\F070"
    }

    .mdi-barcode:before {
        content: "\F071"
    }

    .mdi-barcode-scan:before {
        content: "\F072"
    }

    .mdi-barley:before {
        content: "\F073"
    }

    .mdi-barrel:before {
        content: "\F074"
    }

    .mdi-basecamp:before {
        content: "\F075"
    }

    .mdi-basket:before {
        content: "\F076"
    }

    .mdi-basket-fill:before {
        content: "\F077"
    }

    .mdi-basket-unfill:before {
        content: "\F078"
    }

    .mdi-battery:before {
        content: "\F079"
    }

    .mdi-battery-10:before {
        content: "\F07A"
    }

    .mdi-battery-20:before {
        content: "\F07B"
    }

    .mdi-battery-30:before {
        content: "\F07C"
    }

    .mdi-battery-40:before {
        content: "\F07D"
    }

    .mdi-battery-50:before {
        content: "\F07E"
    }

    .mdi-battery-60:before {
        content: "\F07F"
    }

    .mdi-battery-70:before {
        content: "\F080"
    }

    .mdi-battery-80:before {
        content: "\F081"
    }

    .mdi-battery-90:before {
        content: "\F082"
    }

    .mdi-battery-alert:before {
        content: "\F083"
    }

    .mdi-battery-charging:before {
        content: "\F084"
    }

    .mdi-battery-charging-100:before {
        content: "\F085"
    }

    .mdi-battery-charging-20:before {
        content: "\F086"
    }

    .mdi-battery-charging-30:before {
        content: "\F087"
    }

    .mdi-battery-charging-40:before {
        content: "\F088"
    }

    .mdi-battery-charging-60:before {
        content: "\F089"
    }

    .mdi-battery-charging-80:before {
        content: "\F08A"
    }

    .mdi-battery-charging-90:before {
        content: "\F08B"
    }

    .mdi-battery-minus:before {
        content: "\F08C"
    }

    .mdi-battery-negative:before {
        content: "\F08D"
    }

    .mdi-battery-outline:before {
        content: "\F08E"
    }

    .mdi-battery-plus:before {
        content: "\F08F"
    }

    .mdi-battery-positive:before {
        content: "\F090"
    }

    .mdi-battery-unknown:before {
        content: "\F091"
    }

    .mdi-beach:before {
        content: "\F092"
    }

    .mdi-beaker:before {
        content: "\F68F"
    }

    .mdi-beats:before {
        content: "\F097"
    }

    .mdi-beer:before {
        content: "\F098"
    }

    .mdi-behance:before {
        content: "\F099"
    }

    .mdi-bell:before {
        content: "\F09A"
    }

    .mdi-bell-off:before {
        content: "\F09B"
    }

    .mdi-bell-outline:before {
        content: "\F09C"
    }

    .mdi-bell-plus:before {
        content: "\F09D"
    }

    .mdi-bell-ring:before {
        content: "\F09E"
    }

    .mdi-bell-ring-outline:before {
        content: "\F09F"
    }

    .mdi-bell-sleep:before {
        content: "\F0A0"
    }

    .mdi-beta:before {
        content: "\F0A1"
    }

    .mdi-bible:before {
        content: "\F0A2"
    }

    .mdi-bike:before {
        content: "\F0A3"
    }

    .mdi-bing:before {
        content: "\F0A4"
    }

    .mdi-binoculars:before {
        content: "\F0A5"
    }

    .mdi-bio:before {
        content: "\F0A6"
    }

    .mdi-biohazard:before {
        content: "\F0A7"
    }

    .mdi-bitbucket:before {
        content: "\F0A8"
    }

    .mdi-black-mesa:before {
        content: "\F0A9"
    }

    .mdi-blackberry:before {
        content: "\F0AA"
    }

    .mdi-blender:before {
        content: "\F0AB"
    }

    .mdi-blinds:before {
        content: "\F0AC"
    }

    .mdi-block-helper:before {
        content: "\F0AD"
    }

    .mdi-blogger:before {
        content: "\F0AE"
    }

    .mdi-bluetooth:before {
        content: "\F0AF"
    }

    .mdi-bluetooth-audio:before {
        content: "\F0B0"
    }

    .mdi-bluetooth-connect:before {
        content: "\F0B1"
    }

    .mdi-bluetooth-off:before {
        content: "\F0B2"
    }

    .mdi-bluetooth-settings:before {
        content: "\F0B3"
    }

    .mdi-bluetooth-transfer:before {
        content: "\F0B4"
    }

    .mdi-blur:before {
        content: "\F0B5"
    }

    .mdi-blur-linear:before {
        content: "\F0B6"
    }

    .mdi-blur-off:before {
        content: "\F0B7"
    }

    .mdi-blur-radial:before {
        content: "\F0B8"
    }

    .mdi-bomb:before {
        content: "\F690"
    }

    .mdi-bomb-off:before {
        content: "\F6C4"
    }

    .mdi-bone:before {
        content: "\F0B9"
    }

    .mdi-book:before {
        content: "\F0BA"
    }

    .mdi-book-minus:before {
        content: "\F5D9"
    }

    .mdi-book-multiple:before {
        content: "\F0BB"
    }

    .mdi-book-multiple-variant:before {
        content: "\F0BC"
    }

    .mdi-book-open:before {
        content: "\F0BD"
    }

    .mdi-book-open-page-variant:before {
        content: "\F5DA"
    }

    .mdi-book-open-variant:before {
        content: "\F0BE"
    }

    .mdi-book-plus:before {
        content: "\F5DB"
    }

    .mdi-book-variant:before {
        content: "\F0BF"
    }

    .mdi-bookmark:before {
        content: "\F0C0"
    }

    .mdi-bookmark-check:before {
        content: "\F0C1"
    }

    .mdi-bookmark-music:before {
        content: "\F0C2"
    }

    .mdi-bookmark-outline:before {
        content: "\F0C3"
    }

    .mdi-bookmark-plus:before {
        content: "\F0C5"
    }

    .mdi-bookmark-plus-outline:before {
        content: "\F0C4"
    }

    .mdi-bookmark-remove:before {
        content: "\F0C6"
    }

    .mdi-boombox:before {
        content: "\F5DC"
    }

    .mdi-bootstrap:before {
        content: "\F6C5"
    }

    .mdi-border-all:before {
        content: "\F0C7"
    }

    .mdi-border-bottom:before {
        content: "\F0C8"
    }

    .mdi-border-color:before {
        content: "\F0C9"
    }

    .mdi-border-horizontal:before {
        content: "\F0CA"
    }

    .mdi-border-inside:before {
        content: "\F0CB"
    }

    .mdi-border-left:before {
        content: "\F0CC"
    }

    .mdi-border-none:before {
        content: "\F0CD"
    }

    .mdi-border-outside:before {
        content: "\F0CE"
    }

    .mdi-border-right:before {
        content: "\F0CF"
    }

    .mdi-border-style:before {
        content: "\F0D0"
    }

    .mdi-border-top:before {
        content: "\F0D1"
    }

    .mdi-border-vertical:before {
        content: "\F0D2"
    }

    .mdi-bow-tie:before {
        content: "\F677"
    }

    .mdi-bowl:before {
        content: "\F617"
    }

    .mdi-bowling:before {
        content: "\F0D3"
    }

    .mdi-box:before {
        content: "\F0D4"
    }

    .mdi-box-cutter:before {
        content: "\F0D5"
    }

    .mdi-box-shadow:before {
        content: "\F637"
    }

    .mdi-bridge:before {
        content: "\F618"
    }

    .mdi-briefcase:before {
        content: "\F0D6"
    }

    .mdi-briefcase-check:before {
        content: "\F0D7"
    }

    .mdi-briefcase-download:before {
        content: "\F0D8"
    }

    .mdi-briefcase-upload:before {
        content: "\F0D9"
    }

    .mdi-brightness-1:before {
        content: "\F0DA"
    }

    .mdi-brightness-2:before {
        content: "\F0DB"
    }

    .mdi-brightness-3:before {
        content: "\F0DC"
    }

    .mdi-brightness-4:before {
        content: "\F0DD"
    }

    .mdi-brightness-5:before {
        content: "\F0DE"
    }

    .mdi-brightness-6:before {
        content: "\F0DF"
    }

    .mdi-brightness-7:before {
        content: "\F0E0"
    }

    .mdi-brightness-auto:before {
        content: "\F0E1"
    }

    .mdi-broom:before {
        content: "\F0E2"
    }

    .mdi-brush:before {
        content: "\F0E3"
    }

    .mdi-buffer:before {
        content: "\F619"
    }

    .mdi-bug:before {
        content: "\F0E4"
    }

    .mdi-bulletin-board:before {
        content: "\F0E5"
    }

    .mdi-bullhorn:before {
        content: "\F0E6"
    }

    .mdi-bullseye:before {
        content: "\F5DD"
    }

    .mdi-burst-mode:before {
        content: "\F5DE"
    }

    .mdi-bus:before {
        content: "\F0E7"
    }

    .mdi-cached:before {
        content: "\F0E8"
    }

    .mdi-cake:before {
        content: "\F0E9"
    }

    .mdi-cake-layered:before {
        content: "\F0EA"
    }

    .mdi-cake-variant:before {
        content: "\F0EB"
    }

    .mdi-calculator:before {
        content: "\F0EC"
    }

    .mdi-calendar:before {
        content: "\F0ED"
    }

    .mdi-calendar-blank:before {
        content: "\F0EE"
    }

    .mdi-calendar-check:before {
        content: "\F0EF"
    }

    .mdi-calendar-clock:before {
        content: "\F0F0"
    }

    .mdi-calendar-multiple:before {
        content: "\F0F1"
    }

    .mdi-calendar-multiple-check:before {
        content: "\F0F2"
    }

    .mdi-calendar-plus:before {
        content: "\F0F3"
    }

    .mdi-calendar-question:before {
        content: "\F691"
    }

    .mdi-calendar-range:before {
        content: "\F678"
    }

    .mdi-calendar-remove:before {
        content: "\F0F4"
    }

    .mdi-calendar-text:before {
        content: "\F0F5"
    }

    .mdi-calendar-today:before {
        content: "\F0F6"
    }

    .mdi-call-made:before {
        content: "\F0F7"
    }

    .mdi-call-merge:before {
        content: "\F0F8"
    }

    .mdi-call-missed:before {
        content: "\F0F9"
    }

    .mdi-call-received:before {
        content: "\F0FA"
    }

    .mdi-call-split:before {
        content: "\F0FB"
    }

    .mdi-camcorder:before {
        content: "\F0FC"
    }

    .mdi-camcorder-box:before {
        content: "\F0FD"
    }

    .mdi-camcorder-box-off:before {
        content: "\F0FE"
    }

    .mdi-camcorder-off:before {
        content: "\F0FF"
    }

    .mdi-camera:before {
        content: "\F100"
    }

    .mdi-camera-burst:before {
        content: "\F692"
    }

    .mdi-camera-enhance:before {
        content: "\F101"
    }

    .mdi-camera-front:before {
        content: "\F102"
    }

    .mdi-camera-front-variant:before {
        content: "\F103"
    }

    .mdi-camera-iris:before {
        content: "\F104"
    }

    .mdi-camera-off:before {
        content: "\F5DF"
    }

    .mdi-camera-party-mode:before {
        content: "\F105"
    }

    .mdi-camera-rear:before {
        content: "\F106"
    }

    .mdi-camera-rear-variant:before {
        content: "\F107"
    }

    .mdi-camera-switch:before {
        content: "\F108"
    }

    .mdi-camera-timer:before {
        content: "\F109"
    }

    .mdi-candle:before {
        content: "\F5E2"
    }

    .mdi-candycane:before {
        content: "\F10A"
    }

    .mdi-car:before {
        content: "\F10B"
    }

    .mdi-car-battery:before {
        content: "\F10C"
    }

    .mdi-car-connected:before {
        content: "\F10D"
    }

    .mdi-car-wash:before {
        content: "\F10E"
    }

    .mdi-cards:before {
        content: "\F638"
    }

    .mdi-cards-outline:before {
        content: "\F639"
    }

    .mdi-cards-playing-outline:before {
        content: "\F63A"
    }

    .mdi-cards-variant:before {
        content: "\F6C6"
    }

    .mdi-carrot:before {
        content: "\F10F"
    }

    .mdi-cart:before {
        content: "\F110"
    }

    .mdi-cart-off:before {
        content: "\F66B"
    }

    .mdi-cart-outline:before {
        content: "\F111"
    }

    .mdi-cart-plus:before {
        content: "\F112"
    }

    .mdi-case-sensitive-alt:before {
        content: "\F113"
    }

    .mdi-cash:before {
        content: "\F114"
    }

    .mdi-cash-100:before {
        content: "\F115"
    }

    .mdi-cash-multiple:before {
        content: "\F116"
    }

    .mdi-cash-usd:before {
        content: "\F117"
    }

    .mdi-cast:before {
        content: "\F118"
    }

    .mdi-cast-connected:before {
        content: "\F119"
    }

    .mdi-castle:before {
        content: "\F11A"
    }

    .mdi-cat:before {
        content: "\F11B"
    }

    .mdi-cellphone:before {
        content: "\F11C"
    }

    .mdi-cellphone-andrAdminid:before {
        content: "\F11D"
    }

    .mdi-cellphone-basic:before {
        content: "\F11E"
    }

    .mdi-cellphone-dock:before {
        content: "\F11F"
    }

    .mdi-cellphone-iphone:before {
        content: "\F120"
    }

    .mdi-cellphone-link:before {
        content: "\F121"
    }

    .mdi-cellphone-link-off:before {
        content: "\F122"
    }

    .mdi-cellphone-settings:before {
        content: "\F123"
    }

    .mdi-certificate:before {
        content: "\F124"
    }

    .mdi-chair-school:before {
        content: "\F125"
    }

    .mdi-chart-arc:before {
        content: "\F126"
    }

    .mdi-chart-areaspline:before {
        content: "\F127"
    }

    .mdi-chart-bar:before {
        content: "\F128"
    }

    .mdi-chart-bubble:before {
        content: "\F5E3"
    }

    .mdi-chart-gantt:before {
        content: "\F66C"
    }

    .mdi-chart-histogram:before {
        content: "\F129"
    }

    .mdi-chart-line:before {
        content: "\F12A"
    }

    .mdi-chart-pie:before {
        content: "\F12B"
    }

    .mdi-chart-scatterplot-hexbin:before {
        content: "\F66D"
    }

    .mdi-chart-timeline:before {
        content: "\F66E"
    }

    .mdi-check:before {
        content: "\F12C"
    }

    .mdi-check-all:before {
        content: "\F12D"
    }

    .mdi-check-circle:before {
        content: "\F5E0"
    }

    .mdi-check-circle-outline:before {
        content: "\F5E1"
    }

    .mdi-checkbox-blank:before {
        content: "\F12E"
    }

    .mdi-checkbox-blank-circle:before {
        content: "\F12F"
    }

    .mdi-checkbox-blank-circle-outline:before {
        content: "\F130"
    }

    .mdi-checkbox-blank-outline:before {
        content: "\F131"
    }

    .mdi-checkbox-marked:before {
        content: "\F132"
    }

    .mdi-checkbox-marked-circle:before {
        content: "\F133"
    }

    .mdi-checkbox-marked-circle-outline:before {
        content: "\F134"
    }

    .mdi-checkbox-marked-outline:before {
        content: "\F135"
    }

    .mdi-checkbox-multiple-blank:before {
        content: "\F136"
    }

    .mdi-checkbox-multiple-blank-circle:before {
        content: "\F63B"
    }

    .mdi-checkbox-multiple-blank-circle-outline:before {
        content: "\F63C"
    }

    .mdi-checkbox-multiple-blank-outline:before {
        content: "\F137"
    }

    .mdi-checkbox-multiple-marked:before {
        content: "\F138"
    }

    .mdi-checkbox-multiple-marked-circle:before {
        content: "\F63D"
    }

    .mdi-checkbox-multiple-marked-circle-outline:before {
        content: "\F63E"
    }

    .mdi-checkbox-multiple-marked-outline:before {
        content: "\F139"
    }

    .mdi-checkerboard:before {
        content: "\F13A"
    }

    .mdi-chemical-weapon:before {
        content: "\F13B"
    }

    .mdi-chevron-double-down:before {
        content: "\F13C"
    }

    .mdi-chevron-double-left:before {
        content: "\F13D"
    }

    .mdi-chevron-double-right:before {
        content: "\F13E"
    }

    .mdi-chevron-double-up:before {
        content: "\F13F"
    }

    .mdi-chevron-down:before {
        content: "\F140"
    }

    .mdi-chevron-left:before {
        content: "\F141"
    }

    .mdi-chevron-right:before {
        content: "\F142"
    }

    .mdi-chevron-up:before {
        content: "\F143"
    }

    .mdi-chip:before {
        content: "\F61A"
    }

    .mdi-church:before {
        content: "\F144"
    }

    .mdi-cisco-webex:before {
        content: "\F145"
    }

    .mdi-city:before {
        content: "\F146"
    }

    .mdi-clipboard:before {
        content: "\F147"
    }

    .mdi-clipboard-account:before {
        content: "\F148"
    }

    .mdi-clipboard-alert:before {
        content: "\F149"
    }

    .mdi-clipboard-arrow-down:before {
        content: "\F14A"
    }

    .mdi-clipboard-arrow-left:before {
        content: "\F14B"
    }

    .mdi-clipboard-check:before {
        content: "\F14C"
    }

    .mdi-clipboard-flow:before {
        content: "\F6C7"
    }

    .mdi-clipboard-outline:before {
        content: "\F14D"
    }

    .mdi-clipboard-text:before {
        content: "\F14E"
    }

    .mdi-clippy:before {
        content: "\F14F"
    }

    .mdi-clock:before {
        content: "\F150"
    }

    .mdi-clock-alert:before {
        content: "\F5CE"
    }

    .mdi-clock-end:before {
        content: "\F151"
    }

    .mdi-clock-fast:before {
        content: "\F152"
    }

    .mdi-clock-in:before {
        content: "\F153"
    }

    .mdi-clock-out:before {
        content: "\F154"
    }

    .mdi-clock-start:before {
        content: "\F155"
    }

    .mdi-close:before {
        content: "\F156"
    }

    .mdi-close-box:before {
        content: "\F157"
    }

    .mdi-close-box-outline:before {
        content: "\F158"
    }

    .mdi-close-circle:before {
        content: "\F159"
    }

    .mdi-close-circle-outline:before {
        content: "\F15A"
    }

    .mdi-close-network:before {
        content: "\F15B"
    }

    .mdi-close-octagon:before {
        content: "\F15C"
    }

    .mdi-close-octagon-outline:before {
        content: "\F15D"
    }

    .mdi-close-outline:before {
        content: "\F6C8"
    }

    .mdi-closed-caption:before {
        content: "\F15E"
    }

    .mdi-cloud:before {
        content: "\F15F"
    }

    .mdi-cloud-check:before {
        content: "\F160"
    }

    .mdi-cloud-circle:before {
        content: "\F161"
    }

    .mdi-cloud-download:before {
        content: "\F162"
    }

    .mdi-cloud-outline:before {
        content: "\F163"
    }

    .mdi-cloud-outline-off:before {
        content: "\F164"
    }

    .mdi-cloud-print:before {
        content: "\F165"
    }

    .mdi-cloud-print-outline:before {
        content: "\F166"
    }

    .mdi-cloud-sync:before {
        content: "\F63F"
    }

    .mdi-cloud-upload:before {
        content: "\F167"
    }

    .mdi-code-array:before {
        content: "\F168"
    }

    .mdi-code-braces:before {
        content: "\F169"
    }

    .mdi-code-brackets:before {
        content: "\F16A"
    }

    .mdi-code-equal:before {
        content: "\F16B"
    }

    .mdi-code-greater-than:before {
        content: "\F16C"
    }

    .mdi-code-greater-than-or-equal:before {
        content: "\F16D"
    }

    .mdi-code-less-than:before {
        content: "\F16E"
    }

    .mdi-code-less-than-or-equal:before {
        content: "\F16F"
    }

    .mdi-code-not-equal:before {
        content: "\F170"
    }

    .mdi-code-not-equal-variant:before {
        content: "\F171"
    }

    .mdi-code-parentheses:before {
        content: "\F172"
    }

    .mdi-code-string:before {
        content: "\F173"
    }

    .mdi-code-tags:before {
        content: "\F174"
    }

    .mdi-code-tags-check:before {
        content: "\F693"
    }

    .mdi-codepen:before {
        content: "\F175"
    }

    .mdi-coffee:before {
        content: "\F176"
    }

    .mdi-coffee-outline:before {
        content: "\F6C9"
    }

    .mdi-coffee-to-go:before {
        content: "\F177"
    }

    .mdi-coin:before {
        content: "\F178"
    }

    .mdi-coins:before {
        content: "\F694"
    }

    .mdi-collage:before {
        content: "\F640"
    }

    .mdi-color-helper:before {
        content: "\F179"
    }

    .mdi-comment:before {
        content: "\F17A"
    }

    .mdi-comment-account:before {
        content: "\F17B"
    }

    .mdi-comment-account-outline:before {
        content: "\F17C"
    }

    .mdi-comment-alert:before {
        content: "\F17D"
    }

    .mdi-comment-alert-outline:before {
        content: "\F17E"
    }

    .mdi-comment-check:before {
        content: "\F17F"
    }

    .mdi-comment-check-outline:before {
        content: "\F180"
    }

    .mdi-comment-multiple-outline:before {
        content: "\F181"
    }

    .mdi-comment-outline:before {
        content: "\F182"
    }

    .mdi-comment-plus-outline:before {
        content: "\F183"
    }

    .mdi-comment-processing:before {
        content: "\F184"
    }

    .mdi-comment-processing-outline:before {
        content: "\F185"
    }

    .mdi-comment-question-outline:before {
        content: "\F186"
    }

    .mdi-comment-remove-outline:before {
        content: "\F187"
    }

    .mdi-comment-text:before {
        content: "\F188"
    }

    .mdi-comment-text-outline:before {
        content: "\F189"
    }

    .mdi-compare:before {
        content: "\F18A"
    }

    .mdi-compass:before {
        content: "\F18B"
    }

    .mdi-compass-outline:before {
        content: "\F18C"
    }

    .mdi-console:before {
        content: "\F18D"
    }

    .mdi-contact-mail:before {
        content: "\F18E"
    }

    .mdi-contacts:before {
        content: "\F6CA"
    }

    .mdi-content-copy:before {
        content: "\F18F"
    }

    .mdi-content-cut:before {
        content: "\F190"
    }

    .mdi-content-duplicate:before {
        content: "\F191"
    }

    .mdi-content-paste:before {
        content: "\F192"
    }

    .mdi-content-save:before {
        content: "\F193"
    }

    .mdi-content-save-all:before {
        content: "\F194"
    }

    .mdi-content-save-settings:before {
        content: "\F61B"
    }

    .mdi-contrast:before {
        content: "\F195"
    }

    .mdi-contrast-box:before {
        content: "\F196"
    }

    .mdi-contrast-circle:before {
        content: "\F197"
    }

    .mdi-cookie:before {
        content: "\F198"
    }

    .mdi-copyright:before {
        content: "\F5E6"
    }

    .mdi-counter:before {
        content: "\F199"
    }

    .mdi-cow:before {
        content: "\F19A"
    }

    .mdi-creation:before {
        content: "\F1C9"
    }

    .mdi-credit-card:before {
        content: "\F19B"
    }

    .mdi-credit-card-multiple:before {
        content: "\F19C"
    }

    .mdi-credit-card-off:before {
        content: "\F5E4"
    }

    .mdi-credit-card-plus:before {
        content: "\F675"
    }

    .mdi-credit-card-scan:before {
        content: "\F19D"
    }

    .mdi-crop:before {
        content: "\F19E"
    }

    .mdi-crop-free:before {
        content: "\F19F"
    }

    .mdi-crop-landscape:before {
        content: "\F1A0"
    }

    .mdi-crop-portrait:before {
        content: "\F1A1"
    }

    .mdi-crop-rotate:before {
        content: "\F695"
    }

    .mdi-crop-square:before {
        content: "\F1A2"
    }

    .mdi-crosshairs:before {
        content: "\F1A3"
    }

    .mdi-crosshairs-gps:before {
        content: "\F1A4"
    }

    .mdi-crown:before {
        content: "\F1A5"
    }

    .mdi-cube:before {
        content: "\F1A6"
    }

    .mdi-cube-outline:before {
        content: "\F1A7"
    }

    .mdi-cube-send:before {
        content: "\F1A8"
    }

    .mdi-cube-unfolded:before {
        content: "\F1A9"
    }

    .mdi-cup:before {
        content: "\F1AA"
    }

    .mdi-cup-off:before {
        content: "\F5E5"
    }

    .mdi-cup-water:before {
        content: "\F1AB"
    }

    .mdi-currency-btc:before {
        content: "\F1AC"
    }

    .mdi-currency-eur:before {
        content: "\F1AD"
    }

    .mdi-currency-gbp:before {
        content: "\F1AE"
    }

    .mdi-currency-inr:before {
        content: "\F1AF"
    }

    .mdi-currency-ngn:before {
        content: "\F1B0"
    }

    .mdi-currency-rub:before {
        content: "\F1B1"
    }

    .mdi-currency-try:before {
        content: "\F1B2"
    }

    .mdi-currency-usd:before {
        content: "\F1B3"
    }

    .mdi-currency-usd-off:before {
        content: "\F679"
    }

    .mdi-cursor-default:before {
        content: "\F1B4"
    }

    .mdi-cursor-default-outline:before {
        content: "\F1B5"
    }

    .mdi-cursor-move:before {
        content: "\F1B6"
    }

    .mdi-cursor-pointer:before {
        content: "\F1B7"
    }

    .mdi-cursor-text:before {
        content: "\F5E7"
    }

    .mdi-database:before {
        content: "\F1B8"
    }

    .mdi-database-minus:before {
        content: "\F1B9"
    }

    .mdi-database-plus:before {
        content: "\F1BA"
    }

    .mdi-debug-step-into:before {
        content: "\F1BB"
    }

    .mdi-debug-step-out:before {
        content: "\F1BC"
    }

    .mdi-debug-step-over:before {
        content: "\F1BD"
    }

    .mdi-decimal-decrease:before {
        content: "\F1BE"
    }

    .mdi-decimal-increase:before {
        content: "\F1BF"
    }

    .mdi-delete:before {
        content: "\F1C0"
    }

    .mdi-delete-circle:before {
        content: "\F682"
    }

    .mdi-delete-empty:before {
        content: "\F6CB"
    }

    .mdi-delete-forever:before {
        content: "\F5E8"
    }

    .mdi-delete-sweep:before {
        content: "\F5E9"
    }

    .mdi-delete-variant:before {
        content: "\F1C1"
    }

    .mdi-delta:before {
        content: "\F1C2"
    }

    .mdi-deskphone:before {
        content: "\F1C3"
    }

    .mdi-desktop-mac:before {
        content: "\F1C4"
    }

    .mdi-desktop-tower:before {
        content: "\F1C5"
    }

    .mdi-details:before {
        content: "\F1C6"
    }

    .mdi-developer-board:before {
        content: "\F696"
    }

    .mdi-deviantart:before {
        content: "\F1C7"
    }

    .mdi-dialpad:before {
        content: "\F61C"
    }

    .mdi-diamond:before {
        content: "\F1C8"
    }

    .mdi-dice-1:before {
        content: "\F1CA"
    }

    .mdi-dice-2:before {
        content: "\F1CB"
    }

    .mdi-dice-3:before {
        content: "\F1CC"
    }

    .mdi-dice-4:before {
        content: "\F1CD"
    }

    .mdi-dice-5:before {
        content: "\F1CE"
    }

    .mdi-dice-6:before {
        content: "\F1CF"
    }

    .mdi-dice-d20:before {
        content: "\F5EA"
    }

    .mdi-dice-d4:before {
        content: "\F5EB"
    }

    .mdi-dice-d6:before {
        content: "\F5EC"
    }

    .mdi-dice-d8:before {
        content: "\F5ED"
    }

    .mdi-dictionary:before {
        content: "\F61D"
    }

    .mdi-directions:before {
        content: "\F1D0"
    }

    .mdi-directions-fork:before {
        content: "\F641"
    }

    .mdi-discord:before {
        content: "\F66F"
    }

    .mdi-disk:before {
        content: "\F5EE"
    }

    .mdi-disk-alert:before {
        content: "\F1D1"
    }

    .mdi-disqus:before {
        content: "\F1D2"
    }

    .mdi-disqus-outline:before {
        content: "\F1D3"
    }

    .mdi-division:before {
        content: "\F1D4"
    }

    .mdi-division-box:before {
        content: "\F1D5"
    }

    .mdi-dna:before {
        content: "\F683"
    }

    .mdi-dns:before {
        content: "\F1D6"
    }

    .mdi-do-not-disturb:before {
        content: "\F697"
    }

    .mdi-do-not-disturb-off:before {
        content: "\F698"
    }

    .mdi-dolby:before {
        content: "\F6B2"
    }

    .mdi-domain:before {
        content: "\F1D7"
    }

    .mdi-dots-horizontal:before {
        content: "\F1D8"
    }

    .mdi-dots-vertical:before {
        content: "\F1D9"
    }

    .mdi-douban:before {
        content: "\F699"
    }

    .mdi-download:before {
        content: "\F1DA"
    }

    .mdi-drag:before {
        content: "\F1DB"
    }

    .mdi-drag-horizontal:before {
        content: "\F1DC"
    }

    .mdi-drag-vertical:before {
        content: "\F1DD"
    }

    .mdi-drawing:before {
        content: "\F1DE"
    }

    .mdi-drawing-box:before {
        content: "\F1DF"
    }

    .mdi-dribbble:before {
        content: "\F1E0"
    }

    .mdi-dribbble-box:before {
        content: "\F1E1"
    }

    .mdi-drone:before {
        content: "\F1E2"
    }

    .mdi-dropbox:before {
        content: "\F1E3"
    }

    .mdi-drupal:before {
        content: "\F1E4"
    }

    .mdi-duck:before {
        content: "\F1E5"
    }

    .mdi-dumbbell:before {
        content: "\F1E6"
    }

    .mdi-earth:before {
        content: "\F1E7"
    }

    .mdi-earth-box:before {
        content: "\F6CC"
    }

    .mdi-earth-box-off:before {
        content: "\F6CD"
    }

    .mdi-earth-off:before {
        content: "\F1E8"
    }

    .mdi-edge:before {
        content: "\F1E9"
    }

    .mdi-eject:before {
        content: "\F1EA"
    }

    .mdi-elevation-decline:before {
        content: "\F1EB"
    }

    .mdi-elevation-rise:before {
        content: "\F1EC"
    }

    .mdi-elevator:before {
        content: "\F1ED"
    }

    .mdi-email:before {
        content: "\F1EE"
    }

    .mdi-email-alert:before {
        content: "\F6CE"
    }

    .mdi-email-open:before {
        content: "\F1EF"
    }

    .mdi-email-open-outline:before {
        content: "\F5EF"
    }

    .mdi-email-outline:before {
        content: "\F1F0"
    }

    .mdi-email-secure:before {
        content: "\F1F1"
    }

    .mdi-email-variant:before {
        content: "\F5F0"
    }

    .mdi-emby:before {
        content: "\F6B3"
    }

    .mdi-emoticon:before {
        content: "\F1F2"
    }

    .mdi-emoticon-cool:before {
        content: "\F1F3"
    }

    .mdi-emoticon-dead:before {
        content: "\F69A"
    }

    .mdi-emoticon-devil:before {
        content: "\F1F4"
    }

    .mdi-emoticon-excited:before {
        content: "\F69B"
    }

    .mdi-emoticon-happy:before {
        content: "\F1F5"
    }

    .mdi-emoticon-neutral:before {
        content: "\F1F6"
    }

    .mdi-emoticon-poop:before {
        content: "\F1F7"
    }

    .mdi-emoticon-sad:before {
        content: "\F1F8"
    }

    .mdi-emoticon-tongue:before {
        content: "\F1F9"
    }

    .mdi-engine:before {
        content: "\F1FA"
    }

    .mdi-engine-outline:before {
        content: "\F1FB"
    }

    .mdi-equal:before {
        content: "\F1FC"
    }

    .mdi-equal-box:before {
        content: "\F1FD"
    }

    .mdi-eraser:before {
        content: "\F1FE"
    }

    .mdi-eraser-variant:before {
        content: "\F642"
    }

    .mdi-escalator:before {
        content: "\F1FF"
    }

    .mdi-ethernet:before {
        content: "\F200"
    }

    .mdi-ethernet-cable:before {
        content: "\F201"
    }

    .mdi-ethernet-cable-off:before {
        content: "\F202"
    }

    .mdi-etsy:before {
        content: "\F203"
    }

    .mdi-ev-station:before {
        content: "\F5F1"
    }

    .mdi-evernote:before {
        content: "\F204"
    }

    .mdi-exclamation:before {
        content: "\F205"
    }

    .mdi-exit-to-app:before {
        content: "\F206"
    }

    .mdi-export:before {
        content: "\F207"
    }

    .mdi-eye:before {
        content: "\F208"
    }

    .mdi-eye-off:before {
        content: "\F209"
    }

    .mdi-eye-outline:before {
        content: "\F6CF"
    }

    .mdi-eye-outline-off:before {
        content: "\F6D0"
    }

    .mdi-eyedropper:before {
        content: "\F20A"
    }

    .mdi-eyedropper-variant:before {
        content: "\F20B"
    }

    .mdi-face:before {
        content: "\F643"
    }

    .mdi-face-profile:before {
        content: "\F644"
    }

    .mdi-facebook:before {
        content: "\F20C"
    }

    .mdi-facebook-box:before {
        content: "\F20D"
    }

    .mdi-facebook-messenger:before {
        content: "\F20E"
    }

    .mdi-factory:before {
        content: "\F20F"
    }

    .mdi-fan:before {
        content: "\F210"
    }

    .mdi-fast-forward:before {
        content: "\F211"
    }

    .mdi-fast-forward-outline:before {
        content: "\F6D1"
    }

    .mdi-fax:before {
        content: "\F212"
    }

    .mdi-feather:before {
        content: "\F6D2"
    }

    .mdi-ferry:before {
        content: "\F213"
    }

    .mdi-file:before {
        content: "\F214"
    }

    .mdi-file-chart:before {
        content: "\F215"
    }

    .mdi-file-check:before {
        content: "\F216"
    }

    .mdi-file-cloud:before {
        content: "\F217"
    }

    .mdi-file-delimited:before {
        content: "\F218"
    }

    .mdi-file-document:before {
        content: "\F219"
    }

    .mdi-file-document-box:before {
        content: "\F21A"
    }

    .mdi-file-excel:before {
        content: "\F21B"
    }

    .mdi-file-excel-box:before {
        content: "\F21C"
    }

    .mdi-file-export:before {
        content: "\F21D"
    }

    .mdi-file-find:before {
        content: "\F21E"
    }

    .mdi-file-hidden:before {
        content: "\F613"
    }

    .mdi-file-image:before {
        content: "\F21F"
    }

    .mdi-file-import:before {
        content: "\F220"
    }

    .mdi-file-lock:before {
        content: "\F221"
    }

    .mdi-file-multiple:before {
        content: "\F222"
    }

    .mdi-file-music:before {
        content: "\F223"
    }

    .mdi-file-outline:before {
        content: "\F224"
    }

    .mdi-file-pdf:before {
        content: "\F225"
    }

    .mdi-file-pdf-box:before {
        content: "\F226"
    }

    .mdi-file-powerpoint:before {
        content: "\F227"
    }

    .mdi-file-powerpoint-box:before {
        content: "\F228"
    }

    .mdi-file-presentation-box:before {
        content: "\F229"
    }

    .mdi-file-restore:before {
        content: "\F670"
    }

    .mdi-file-send:before {
        content: "\F22A"
    }

    .mdi-file-tree:before {
        content: "\F645"
    }

    .mdi-file-video:before {
        content: "\F22B"
    }

    .mdi-file-word:before {
        content: "\F22C"
    }

    .mdi-file-word-box:before {
        content: "\F22D"
    }

    .mdi-file-xml:before {
        content: "\F22E"
    }

    .mdi-film:before {
        content: "\F22F"
    }

    .mdi-filmstrip:before {
        content: "\F230"
    }

    .mdi-filmstrip-off:before {
        content: "\F231"
    }

    .mdi-filter:before {
        content: "\F232"
    }

    .mdi-filter-outline:before {
        content: "\F233"
    }

    .mdi-filter-remove:before {
        content: "\F234"
    }

    .mdi-filter-remove-outline:before {
        content: "\F235"
    }

    .mdi-filter-variant:before {
        content: "\F236"
    }

    .mdi-find-replace:before {
        content: "\F6D3"
    }

    .mdi-fingerprint:before {
        content: "\F237"
    }

    .mdi-fire:before {
        content: "\F238"
    }

    .mdi-firefox:before {
        content: "\F239"
    }

    .mdi-fish:before {
        content: "\F23A"
    }

    .mdi-flag:before {
        content: "\F23B"
    }

    .mdi-flag-checkered:before {
        content: "\F23C"
    }

    .mdi-flag-outline:before {
        content: "\F23D"
    }

    .mdi-flag-outline-variant:before {
        content: "\F23E"
    }

    .mdi-flag-triangle:before {
        content: "\F23F"
    }

    .mdi-flag-variant:before {
        content: "\F240"
    }

    .mdi-flash:before {
        content: "\F241"
    }

    .mdi-flash-auto:before {
        content: "\F242"
    }

    .mdi-flash-off:before {
        content: "\F243"
    }

    .mdi-flash-outline:before {
        content: "\F6D4"
    }

    .mdi-flash-red-eye:before {
        content: "\F67A"
    }

    .mdi-flashlight:before {
        content: "\F244"
    }

    .mdi-flashlight-off:before {
        content: "\F245"
    }

    .mdi-flask:before {
        content: "\F093"
    }

    .mdi-flask-empty:before {
        content: "\F094"
    }

    .mdi-flask-empty-outline:before {
        content: "\F095"
    }

    .mdi-flask-outline:before {
        content: "\F096"
    }

    .mdi-flattr:before {
        content: "\F246"
    }

    .mdi-flip-to-back:before {
        content: "\F247"
    }

    .mdi-flip-to-front:before {
        content: "\F248"
    }

    .mdi-floppy:before {
        content: "\F249"
    }

    .mdi-flower:before {
        content: "\F24A"
    }

    .mdi-folder:before {
        content: "\F24B"
    }

    .mdi-folder-account:before {
        content: "\F24C"
    }

    .mdi-folder-download:before {
        content: "\F24D"
    }

    .mdi-folder-google-drive:before {
        content: "\F24E"
    }

    .mdi-folder-image:before {
        content: "\F24F"
    }

    .mdi-folder-lock:before {
        content: "\F250"
    }

    .mdi-folder-lock-open:before {
        content: "\F251"
    }

    .mdi-folder-move:before {
        content: "\F252"
    }

    .mdi-folder-multiple:before {
        content: "\F253"
    }

    .mdi-folder-multiple-image:before {
        content: "\F254"
    }

    .mdi-folder-multiple-outline:before {
        content: "\F255"
    }

    .mdi-folder-outline:before {
        content: "\F256"
    }

    .mdi-folder-plus:before {
        content: "\F257"
    }

    .mdi-folder-remove:before {
        content: "\F258"
    }

    .mdi-folder-star:before {
        content: "\F69C"
    }

    .mdi-folder-upload:before {
        content: "\F259"
    }

    .mdi-font-awesome:before {
        content: "\F03A"
    }

    .mdi-food:before {
        content: "\F25A"
    }

    .mdi-food-apple:before {
        content: "\F25B"
    }

    .mdi-food-fork-drink:before {
        content: "\F5F2"
    }

    .mdi-food-off:before {
        content: "\F5F3"
    }

    .mdi-food-variant:before {
        content: "\F25C"
    }

    .mdi-football:before {
        content: "\F25D"
    }

    .mdi-football-australian:before {
        content: "\F25E"
    }

    .mdi-football-helmet:before {
        content: "\F25F"
    }

    .mdi-format-align-center:before {
        content: "\F260"
    }

    .mdi-format-align-justify:before {
        content: "\F261"
    }

    .mdi-format-align-left:before {
        content: "\F262"
    }

    .mdi-format-align-right:before {
        content: "\F263"
    }

    .mdi-format-annotation-plus:before {
        content: "\F646"
    }

    .mdi-format-bold:before {
        content: "\F264"
    }

    .mdi-format-clear:before {
        content: "\F265"
    }

    .mdi-format-color-fill:before {
        content: "\F266"
    }

    .mdi-format-color-text:before {
        content: "\F69D"
    }

    .mdi-format-float-center:before {
        content: "\F267"
    }

    .mdi-format-float-left:before {
        content: "\F268"
    }

    .mdi-format-float-none:before {
        content: "\F269"
    }

    .mdi-format-float-right:before {
        content: "\F26A"
    }

    .mdi-format-font:before {
        content: "\F6D5"
    }

    .mdi-format-header-1:before {
        content: "\F26B"
    }

    .mdi-format-header-2:before {
        content: "\F26C"
    }

    .mdi-format-header-3:before {
        content: "\F26D"
    }

    .mdi-format-header-4:before {
        content: "\F26E"
    }

    .mdi-format-header-5:before {
        content: "\F26F"
    }

    .mdi-format-header-6:before {
        content: "\F270"
    }

    .mdi-format-header-decrease:before {
        content: "\F271"
    }

    .mdi-format-header-equal:before {
        content: "\F272"
    }

    .mdi-format-header-increase:before {
        content: "\F273"
    }

    .mdi-format-header-pound:before {
        content: "\F274"
    }

    .mdi-format-horizontal-align-center:before {
        content: "\F61E"
    }

    .mdi-format-horizontal-align-left:before {
        content: "\F61F"
    }

    .mdi-format-horizontal-align-right:before {
        content: "\F620"
    }

    .mdi-format-indent-decrease:before {
        content: "\F275"
    }

    .mdi-format-indent-increase:before {
        content: "\F276"
    }

    .mdi-format-italic:before {
        content: "\F277"
    }

    .mdi-format-line-spacing:before {
        content: "\F278"
    }

    .mdi-format-line-style:before {
        content: "\F5C8"
    }

    .mdi-format-line-weight:before {
        content: "\F5C9"
    }

    .mdi-format-list-bulleted:before {
        content: "\F279"
    }

    .mdi-format-list-bulleted-type:before {
        content: "\F27A"
    }

    .mdi-format-list-numbers:before {
        content: "\F27B"
    }

    .mdi-format-page-break:before {
        content: "\F6D6"
    }

    .mdi-format-paint:before {
        content: "\F27C"
    }

    .mdi-format-paragraph:before {
        content: "\F27D"
    }

    .mdi-format-pilcrow:before {
        content: "\F6D7"
    }

    .mdi-format-quote:before {
        content: "\F27E"
    }

    .mdi-format-rotate-90:before {
        content: "\F6A9"
    }

    .mdi-format-section:before {
        content: "\F69E"
    }

    .mdi-format-size:before {
        content: "\F27F"
    }

    .mdi-format-strikethrough:before {
        content: "\F280"
    }

    .mdi-format-strikethrough-variant:before {
        content: "\F281"
    }

    .mdi-format-subscript:before {
        content: "\F282"
    }

    .mdi-format-superscript:before {
        content: "\F283"
    }

    .mdi-format-text:before {
        content: "\F284"
    }

    .mdi-format-textdirection-l-to-r:before {
        content: "\F285"
    }

    .mdi-format-textdirection-r-to-l:before {
        content: "\F286"
    }

    .mdi-format-title:before {
        content: "\F5F4"
    }

    .mdi-format-underline:before {
        content: "\F287"
    }

    .mdi-format-vertical-align-bottom:before {
        content: "\F621"
    }

    .mdi-format-vertical-align-center:before {
        content: "\F622"
    }

    .mdi-format-vertical-align-top:before {
        content: "\F623"
    }

    .mdi-format-wrap-inline:before {
        content: "\F288"
    }

    .mdi-format-wrap-square:before {
        content: "\F289"
    }

    .mdi-format-wrap-tight:before {
        content: "\F28A"
    }

    .mdi-format-wrap-top-bottom:before {
        content: "\F28B"
    }

    .mdi-forum:before {
        content: "\F28C"
    }

    .mdi-forward:before {
        content: "\F28D"
    }

    .mdi-foursquare:before {
        content: "\F28E"
    }

    .mdi-fridge:before {
        content: "\F28F"
    }

    .mdi-fridge-filled:before {
        content: "\F290"
    }

    .mdi-fridge-filled-bottom:before {
        content: "\F291"
    }

    .mdi-fridge-filled-top:before {
        content: "\F292"
    }

    .mdi-fullscreen:before {
        content: "\F293"
    }

    .mdi-fullscreen-exit:before {
        content: "\F294"
    }

    .mdi-function:before {
        content: "\F295"
    }

    .mdi-gamepad:before {
        content: "\F296"
    }

    .mdi-gamepad-variant:before {
        content: "\F297"
    }

    .mdi-garage:before {
        content: "\F6D8"
    }

    .mdi-garage-open:before {
        content: "\F6D9"
    }

    .mdi-gas-cylinder:before {
        content: "\F647"
    }

    .mdi-gas-station:before {
        content: "\F298"
    }

    .mdi-gate:before {
        content: "\F299"
    }

    .mdi-gauge:before {
        content: "\F29A"
    }

    .mdi-gavel:before {
        content: "\F29B"
    }

    .mdi-gender-female:before {
        content: "\F29C"
    }

    .mdi-gender-male:before {
        content: "\F29D"
    }

    .mdi-gender-male-female:before {
        content: "\F29E"
    }

    .mdi-gender-transgender:before {
        content: "\F29F"
    }

    .mdi-ghost:before {
        content: "\F2A0"
    }

    .mdi-gift:before {
        content: "\F2A1"
    }

    .mdi-git:before {
        content: "\F2A2"
    }

    .mdi-github-box:before {
        content: "\F2A3"
    }

    .mdi-github-circle:before {
        content: "\F2A4"
    }

    .mdi-github-face:before {
        content: "\F6DA"
    }

    .mdi-glass-flute:before {
        content: "\F2A5"
    }

    .mdi-glass-mug:before {
        content: "\F2A6"
    }

    .mdi-glass-stange:before {
        content: "\F2A7"
    }

    .mdi-glass-tulip:before {
        content: "\F2A8"
    }

    .mdi-glassdoor:before {
        content: "\F2A9"
    }

    .mdi-glasses:before {
        content: "\F2AA"
    }

    .mdi-gmail:before {
        content: "\F2AB"
    }

    .mdi-gnome:before {
        content: "\F2AC"
    }

    .mdi-gondola:before {
        content: "\F685"
    }

    .mdi-google:before {
        content: "\F2AD"
    }

    .mdi-google-cardboard:before {
        content: "\F2AE"
    }

    .mdi-google-chrome:before {
        content: "\F2AF"
    }

    .mdi-google-circles:before {
        content: "\F2B0"
    }

    .mdi-google-circles-communities:before {
        content: "\F2B1"
    }

    .mdi-google-circles-extended:before {
        content: "\F2B2"
    }

    .mdi-google-circles-group:before {
        content: "\F2B3"
    }

    .mdi-google-controller:before {
        content: "\F2B4"
    }

    .mdi-google-controller-off:before {
        content: "\F2B5"
    }

    .mdi-google-drive:before {
        content: "\F2B6"
    }

    .mdi-google-earth:before {
        content: "\F2B7"
    }

    .mdi-google-glass:before {
        content: "\F2B8"
    }

    .mdi-google-keep:before {
        content: "\F6DB"
    }

    .mdi-google-maps:before {
        content: "\F5F5"
    }

    .mdi-google-nearby:before {
        content: "\F2B9"
    }

    .mdi-google-pages:before {
        content: "\F2BA"
    }

    .mdi-google-photos:before {
        content: "\F6DC"
    }

    .mdi-google-physical-web:before {
        content: "\F2BB"
    }

    .mdi-google-play:before {
        content: "\F2BC"
    }

    .mdi-google-plus:before {
        content: "\F2BD"
    }

    .mdi-google-plus-box:before {
        content: "\F2BE"
    }

    .mdi-google-translate:before {
        content: "\F2BF"
    }

    .mdi-google-wallet:before {
        content: "\F2C0"
    }

    .mdi-gradient:before {
        content: "\F69F"
    }

    .mdi-grease-pencil:before {
        content: "\F648"
    }

    .mdi-grid:before {
        content: "\F2C1"
    }

    .mdi-grid-off:before {
        content: "\F2C2"
    }

    .mdi-group:before {
        content: "\F2C3"
    }

    .mdi-guitar-electric:before {
        content: "\F2C4"
    }

    .mdi-guitar-pick:before {
        content: "\F2C5"
    }

    .mdi-guitar-pick-outline:before {
        content: "\F2C6"
    }

    .mdi-hackernews:before {
        content: "\F624"
    }

    .mdi-hamburger:before {
        content: "\F684"
    }

    .mdi-hand-pointing-right:before {
        content: "\F2C7"
    }

    .mdi-hanger:before {
        content: "\F2C8"
    }

    .mdi-hangouts:before {
        content: "\F2C9"
    }

    .mdi-harddisk:before {
        content: "\F2CA"
    }

    .mdi-headphones:before {
        content: "\F2CB"
    }

    .mdi-headphones-box:before {
        content: "\F2CC"
    }

    .mdi-headphones-settings:before {
        content: "\F2CD"
    }

    .mdi-headset:before {
        content: "\F2CE"
    }

    .mdi-headset-dock:before {
        content: "\F2CF"
    }

    .mdi-headset-off:before {
        content: "\F2D0"
    }

    .mdi-heart:before {
        content: "\F2D1"
    }

    .mdi-heart-box:before {
        content: "\F2D2"
    }

    .mdi-heart-box-outline:before {
        content: "\F2D3"
    }

    .mdi-heart-broken:before {
        content: "\F2D4"
    }

    .mdi-heart-half-outline:before {
        content: "\F6DD"
    }

    .mdi-heart-half-part:before {
        content: "\F6DE"
    }

    .mdi-heart-half-part-outline:before {
        content: "\F6DF"
    }

    .mdi-heart-outline:before {
        content: "\F2D5"
    }

    .mdi-heart-pulse:before {
        content: "\F5F6"
    }

    .mdi-help:before {
        content: "\F2D6"
    }

    .mdi-help-circle:before {
        content: "\F2D7"
    }

    .mdi-help-circle-outline:before {
        content: "\F625"
    }

    .mdi-hexagon:before {
        content: "\F2D8"
    }

    .mdi-hexagon-multiple:before {
        content: "\F6E0"
    }

    .mdi-hexagon-outline:before {
        content: "\F2D9"
    }

    .mdi-highway:before {
        content: "\F5F7"
    }

    .mdi-history:before {
        content: "\F2DA"
    }

    .mdi-hololens:before {
        content: "\F2DB"
    }

    .mdi-home:before {
        content: "\F2DC"
    }

    .mdi-home-map-marker:before {
        content: "\F5F8"
    }

    .mdi-home-modern:before {
        content: "\F2DD"
    }

    .mdi-home-outline:before {
        content: "\F6A0"
    }

    .mdi-home-variant:before {
        content: "\F2DE"
    }

    .mdi-hook:before {
        content: "\F6E1"
    }

    .mdi-hook-off:before {
        content: "\F6E2"
    }

    .mdi-hops:before {
        content: "\F2DF"
    }

    .mdi-hospital:before {
        content: "\F2E0"
    }

    .mdi-hospital-building:before {
        content: "\F2E1"
    }

    .mdi-hospital-marker:before {
        content: "\F2E2"
    }

    .mdi-hotel:before {
        content: "\F2E3"
    }

    .mdi-houzz:before {
        content: "\F2E4"
    }

    .mdi-houzz-box:before {
        content: "\F2E5"
    }

    .mdi-human:before {
        content: "\F2E6"
    }

    .mdi-human-child:before {
        content: "\F2E7"
    }

    .mdi-human-female:before {
        content: "\F649"
    }

    .mdi-human-greeting:before {
        content: "\F64A"
    }

    .mdi-human-handsdown:before {
        content: "\F64B"
    }

    .mdi-human-handsup:before {
        content: "\F64C"
    }

    .mdi-human-male:before {
        content: "\F64D"
    }

    .mdi-human-male-female:before {
        content: "\F2E8"
    }

    .mdi-human-pregnant:before {
        content: "\F5CF"
    }

    .mdi-image:before {
        content: "\F2E9"
    }

    .mdi-image-album:before {
        content: "\F2EA"
    }

    .mdi-image-area:before {
        content: "\F2EB"
    }

    .mdi-image-area-close:before {
        content: "\F2EC"
    }

    .mdi-image-broken:before {
        content: "\F2ED"
    }

    .mdi-image-broken-variant:before {
        content: "\F2EE"
    }

    .mdi-image-filter:before {
        content: "\F2EF"
    }

    .mdi-image-filter-black-white:before {
        content: "\F2F0"
    }

    .mdi-image-filter-center-focus:before {
        content: "\F2F1"
    }

    .mdi-image-filter-center-focus-weak:before {
        content: "\F2F2"
    }

    .mdi-image-filter-drama:before {
        content: "\F2F3"
    }

    .mdi-image-filter-frames:before {
        content: "\F2F4"
    }

    .mdi-image-filter-hdr:before {
        content: "\F2F5"
    }

    .mdi-image-filter-none:before {
        content: "\F2F6"
    }

    .mdi-image-filter-tilt-shift:before {
        content: "\F2F7"
    }

    .mdi-image-filter-vintage:before {
        content: "\F2F8"
    }

    .mdi-image-multiple:before {
        content: "\F2F9"
    }

    .mdi-import:before {
        content: "\F2FA"
    }

    .mdi-inbox:before {
        content: "\F686"
    }

    .mdi-inbox-arrow-down:before {
        content: "\F2FB"
    }

    .mdi-inbox-arrow-up:before {
        content: "\F3D1"
    }

    .mdi-incognito:before {
        content: "\F5F9"
    }

    .mdi-infinity:before {
        content: "\F6E3"
    }

    .mdi-information:before {
        content: "\F2FC"
    }

    .mdi-information-outline:before {
        content: "\F2FD"
    }

    .mdi-information-variant:before {
        content: "\F64E"
    }

    .mdi-instagram:before {
        content: "\F2FE"
    }

    .mdi-instapaper:before {
        content: "\F2FF"
    }

    .mdi-internet-explorer:before {
        content: "\F300"
    }

    .mdi-invert-colors:before {
        content: "\F301"
    }

    .mdi-itunes:before {
        content: "\F676"
    }

    .mdi-jeepney:before {
        content: "\F302"
    }

    .mdi-jira:before {
        content: "\F303"
    }

    .mdi-jsfiddle:before {
        content: "\F304"
    }

    .mdi-json:before {
        content: "\F626"
    }

    .mdi-keg:before {
        content: "\F305"
    }

    .mdi-kettle:before {
        content: "\F5FA"
    }

    .mdi-key:before {
        content: "\F306"
    }

    .mdi-key-change:before {
        content: "\F307"
    }

    .mdi-key-minus:before {
        content: "\F308"
    }

    .mdi-key-plus:before {
        content: "\F309"
    }

    .mdi-key-remove:before {
        content: "\F30A"
    }

    .mdi-key-variant:before {
        content: "\F30B"
    }

    .mdi-keyboard:before {
        content: "\F30C"
    }

    .mdi-keyboard-backspace:before {
        content: "\F30D"
    }

    .mdi-keyboard-caps:before {
        content: "\F30E"
    }

    .mdi-keyboard-close:before {
        content: "\F30F"
    }

    .mdi-keyboard-off:before {
        content: "\F310"
    }

    .mdi-keyboard-return:before {
        content: "\F311"
    }

    .mdi-keyboard-tab:before {
        content: "\F312"
    }

    .mdi-keyboard-variant:before {
        content: "\F313"
    }

    .mdi-kodi:before {
        content: "\F314"
    }

    .mdi-label:before {
        content: "\F315"
    }

    .mdi-label-outline:before {
        content: "\F316"
    }

    .mdi-lambda:before {
        content: "\F627"
    }

    .mdi-lamp:before {
        content: "\F6B4"
    }

    .mdi-lan:before {
        content: "\F317"
    }

    .mdi-lan-connect:before {
        content: "\F318"
    }

    .mdi-lan-disconnect:before {
        content: "\F319"
    }

    .mdi-lan-pending:before {
        content: "\F31A"
    }

    .mdi-language-c:before {
        content: "\F671"
    }

    .mdi-language-cpp:before {
        content: "\F672"
    }

    .mdi-language-csharp:before {
        content: "\F31B"
    }

    .mdi-language-css3:before {
        content: "\F31C"
    }

    .mdi-language-html5:before {
        content: "\F31D"
    }

    .mdi-language-javascript:before {
        content: "\F31E"
    }

    .mdi-language-php:before {
        content: "\F31F"
    }

    .mdi-language-python:before {
        content: "\F320"
    }

    .mdi-language-python-text:before {
        content: "\F321"
    }

    .mdi-language-swift:before {
        content: "\F6E4"
    }

    .mdi-language-typescript:before {
        content: "\F6E5"
    }

    .mdi-laptop:before {
        content: "\F322"
    }

    .mdi-laptop-chromebook:before {
        content: "\F323"
    }

    .mdi-laptop-mac:before {
        content: "\F324"
    }

    .mdi-laptop-off:before {
        content: "\F6E6"
    }

    .mdi-laptop-windows:before {
        content: "\F325"
    }

    .mdi-lastfm:before {
        content: "\F326"
    }

    .mdi-launch:before {
        content: "\F327"
    }

    .mdi-layers:before {
        content: "\F328"
    }

    .mdi-layers-off:before {
        content: "\F329"
    }

    .mdi-lead-pencil:before {
        content: "\F64F"
    }

    .mdi-leaf:before {
        content: "\F32A"
    }

    .mdi-led-off:before {
        content: "\F32B"
    }

    .mdi-led-on:before {
        content: "\F32C"
    }

    .mdi-led-outline:before {
        content: "\F32D"
    }

    .mdi-led-variant-off:before {
        content: "\F32E"
    }

    .mdi-led-variant-on:before {
        content: "\F32F"
    }

    .mdi-led-variant-outline:before {
        content: "\F330"
    }

    .mdi-library:before {
        content: "\F331"
    }

    .mdi-library-books:before {
        content: "\F332"
    }

    .mdi-library-music:before {
        content: "\F333"
    }

    .mdi-library-plus:before {
        content: "\F334"
    }

    .mdi-lightbulb:before {
        content: "\F335"
    }

    .mdi-lightbulb-on:before {
        content: "\F6E7"
    }

    .mdi-lightbulb-on-outline:before {
        content: "\F6E8"
    }

    .mdi-lightbulb-outline:before {
        content: "\F336"
    }

    .mdi-link:before {
        content: "\F337"
    }

    .mdi-link-off:before {
        content: "\F338"
    }

    .mdi-link-variant:before {
        content: "\F339"
    }

    .mdi-link-variant-off:before {
        content: "\F33A"
    }

    .mdi-linkedin:before {
        content: "\F33B"
    }

    .mdi-linkedin-box:before {
        content: "\F33C"
    }

    .mdi-linux:before {
        content: "\F33D"
    }

    .mdi-lock:before {
        content: "\F33E"
    }

    .mdi-lock-open:before {
        content: "\F33F"
    }

    .mdi-lock-open-outline:before {
        content: "\F340"
    }

    .mdi-lock-outline:before {
        content: "\F341"
    }

    .mdi-lock-pattern:before {
        content: "\F6E9"
    }

    .mdi-lock-plus:before {
        content: "\F5FB"
    }

    .mdi-login:before {
        content: "\F342"
    }

    .mdi-login-variant:before {
        content: "\F5FC"
    }

    .mdi-logout:before {
        content: "\F343"
    }

    .mdi-logout-variant:before {
        content: "\F5FD"
    }

    .mdi-looks:before {
        content: "\F344"
    }

    .mdi-loop:before {
        content: "\F6EA"
    }

    .mdi-loupe:before {
        content: "\F345"
    }

    .mdi-lumx:before {
        content: "\F346"
    }

    .mdi-magnet:before {
        content: "\F347"
    }

    .mdi-magnet-on:before {
        content: "\F348"
    }

    .mdi-magnify:before {
        content: "\F349"
    }

    .mdi-magnify-minus:before {
        content: "\F34A"
    }

    .mdi-magnify-minus-outline:before {
        content: "\F6EB"
    }

    .mdi-magnify-plus:before {
        content: "\F34B"
    }

    .mdi-magnify-plus-outline:before {
        content: "\F6EC"
    }

    .mdi-mail-ru:before {
        content: "\F34C"
    }

    .mdi-mailbox:before {
        content: "\F6ED"
    }

    .mdi-map:before {
        content: "\F34D"
    }

    .mdi-map-marker:before {
        content: "\F34E"
    }

    .mdi-map-marker-circle:before {
        content: "\F34F"
    }

    .mdi-map-marker-minus:before {
        content: "\F650"
    }

    .mdi-map-marker-multiple:before {
        content: "\F350"
    }

    .mdi-map-marker-off:before {
        content: "\F351"
    }

    .mdi-map-marker-plus:before {
        content: "\F651"
    }

    .mdi-map-marker-radius:before {
        content: "\F352"
    }

    .mdi-margin:before {
        content: "\F353"
    }

    .mdi-markdown:before {
        content: "\F354"
    }

    .mdi-marker:before {
        content: "\F652"
    }

    .mdi-marker-check:before {
        content: "\F355"
    }

    .mdi-martini:before {
        content: "\F356"
    }

    .mdi-material-ui:before {
        content: "\F357"
    }

    .mdi-math-compass:before {
        content: "\F358"
    }

    .mdi-matrix:before {
        content: "\F628"
    }

    .mdi-maxcdn:before {
        content: "\F359"
    }

    .mdi-medical-bag:before {
        content: "\F6EE"
    }

    .mdi-medium:before {
        content: "\F35A"
    }

    .mdi-memory:before {
        content: "\F35B"
    }

    .mdi-menu:before {
        content: "\F35C"
    }

    .mdi-menu-down:before {
        content: "\F35D"
    }

    .mdi-menu-down-outline:before {
        content: "\F6B5"
    }

    .mdi-menu-left:before {
        content: "\F35E"
    }

    .mdi-menu-right:before {
        content: "\F35F"
    }

    .mdi-menu-up:before {
        content: "\F360"
    }

    .mdi-menu-up-outline:before {
        content: "\F6B6"
    }

    .mdi-message:before {
        content: "\F361"
    }

    .mdi-message-alert:before {
        content: "\F362"
    }

    .mdi-message-bulleted:before {
        content: "\F6A1"
    }

    .mdi-message-bulleted-off:before {
        content: "\F6A2"
    }

    .mdi-message-draw:before {
        content: "\F363"
    }

    .mdi-message-image:before {
        content: "\F364"
    }

    .mdi-message-outline:before {
        content: "\F365"
    }

    .mdi-message-plus:before {
        content: "\F653"
    }

    .mdi-message-processing:before {
        content: "\F366"
    }

    .mdi-message-reply:before {
        content: "\F367"
    }

    .mdi-message-reply-text:before {
        content: "\F368"
    }

    .mdi-message-settings:before {
        content: "\F6EF"
    }

    .mdi-message-settings-variant:before {
        content: "\F6F0"
    }

    .mdi-message-text:before {
        content: "\F369"
    }

    .mdi-message-text-outline:before {
        content: "\F36A"
    }

    .mdi-message-video:before {
        content: "\F36B"
    }

    .mdi-meteor:before {
        content: "\F629"
    }

    .mdi-microphone:before {
        content: "\F36C"
    }

    .mdi-microphone-off:before {
        content: "\F36D"
    }

    .mdi-microphone-outline:before {
        content: "\F36E"
    }

    .mdi-microphone-settings:before {
        content: "\F36F"
    }

    .mdi-microphone-variant:before {
        content: "\F370"
    }

    .mdi-microphone-variant-off:before {
        content: "\F371"
    }

    .mdi-microscope:before {
        content: "\F654"
    }

    .mdi-microsoft:before {
        content: "\F372"
    }

    .mdi-minecraft:before {
        content: "\F373"
    }

    .mdi-minus:before {
        content: "\F374"
    }

    .mdi-minus-box:before {
        content: "\F375"
    }

    .mdi-minus-box-outline:before {
        content: "\F6F1"
    }

    .mdi-minus-circle:before {
        content: "\F376"
    }

    .mdi-minus-circle-outline:before {
        content: "\F377"
    }

    .mdi-minus-network:before {
        content: "\F378"
    }

    .mdi-mixcloud:before {
        content: "\F62A"
    }

    .mdi-monitor:before {
        content: "\F379"
    }

    .mdi-monitor-multiple:before {
        content: "\F37A"
    }

    .mdi-more:before {
        content: "\F37B"
    }

    .mdi-motorbike:before {
        content: "\F37C"
    }

    .mdi-mouse:before {
        content: "\F37D"
    }

    .mdi-mouse-off:before {
        content: "\F37E"
    }

    .mdi-mouse-variant:before {
        content: "\F37F"
    }

    .mdi-mouse-variant-off:before {
        content: "\F380"
    }

    .mdi-move-resize:before {
        content: "\F655"
    }

    .mdi-move-resize-variant:before {
        content: "\F656"
    }

    .mdi-movie:before {
        content: "\F381"
    }

    .mdi-multiplication:before {
        content: "\F382"
    }

    .mdi-multiplication-box:before {
        content: "\F383"
    }

    .mdi-music-box:before {
        content: "\F384"
    }

    .mdi-music-box-outline:before {
        content: "\F385"
    }

    .mdi-music-circle:before {
        content: "\F386"
    }

    .mdi-music-note:before {
        content: "\F387"
    }

    .mdi-music-note-bluetooth:before {
        content: "\F5FE"
    }

    .mdi-music-note-bluetooth-off:before {
        content: "\F5FF"
    }

    .mdi-music-note-eighth:before {
        content: "\F388"
    }

    .mdi-music-note-half:before {
        content: "\F389"
    }

    .mdi-music-note-off:before {
        content: "\F38A"
    }

    .mdi-music-note-quarter:before {
        content: "\F38B"
    }

    .mdi-music-note-sixteenth:before {
        content: "\F38C"
    }

    .mdi-music-note-whole:before {
        content: "\F38D"
    }

    .mdi-nature:before {
        content: "\F38E"
    }

    .mdi-nature-people:before {
        content: "\F38F"
    }

    .mdi-navigation:before {
        content: "\F390"
    }

    .mdi-near-me:before {
        content: "\F5CD"
    }

    .mdi-needle:before {
        content: "\F391"
    }

    .mdi-nest-protect:before {
        content: "\F392"
    }

    .mdi-nest-thermostat:before {
        content: "\F393"
    }

    .mdi-network:before {
        content: "\F6F2"
    }

    .mdi-network-download:before {
        content: "\F6F3"
    }

    .mdi-network-question:before {
        content: "\F6F4"
    }

    .mdi-network-upload:before {
        content: "\F6F5"
    }

    .mdi-new-box:before {
        content: "\F394"
    }

    .mdi-newspaper:before {
        content: "\F395"
    }

    .mdi-nfc:before {
        content: "\F396"
    }

    .mdi-nfc-tap:before {
        content: "\F397"
    }

    .mdi-nfc-variant:before {
        content: "\F398"
    }

    .mdi-nodejs:before {
        content: "\F399"
    }

    .mdi-note:before {
        content: "\F39A"
    }

    .mdi-note-multiple:before {
        content: "\F6B7"
    }

    .mdi-note-multiple-outline:before {
        content: "\F6B8"
    }

    .mdi-note-outline:before {
        content: "\F39B"
    }

    .mdi-note-plus:before {
        content: "\F39C"
    }

    .mdi-note-plus-outline:before {
        content: "\F39D"
    }

    .mdi-note-text:before {
        content: "\F39E"
    }

    .mdi-notification-clear-all:before {
        content: "\F39F"
    }

    .mdi-npm:before {
        content: "\F6F6"
    }

    .mdi-nuke:before {
        content: "\F6A3"
    }

    .mdi-numeric:before {
        content: "\F3A0"
    }

    .mdi-numeric-0-box:before {
        content: "\F3A1"
    }

    .mdi-numeric-0-box-multiple-outline:before {
        content: "\F3A2"
    }

    .mdi-numeric-0-box-outline:before {
        content: "\F3A3"
    }

    .mdi-numeric-1-box:before {
        content: "\F3A4"
    }

    .mdi-numeric-1-box-multiple-outline:before {
        content: "\F3A5"
    }

    .mdi-numeric-1-box-outline:before {
        content: "\F3A6"
    }

    .mdi-numeric-2-box:before {
        content: "\F3A7"
    }

    .mdi-numeric-2-box-multiple-outline:before {
        content: "\F3A8"
    }

    .mdi-numeric-2-box-outline:before {
        content: "\F3A9"
    }

    .mdi-numeric-3-box:before {
        content: "\F3AA"
    }

    .mdi-numeric-3-box-multiple-outline:before {
        content: "\F3AB"
    }

    .mdi-numeric-3-box-outline:before {
        content: "\F3AC"
    }

    .mdi-numeric-4-box:before {
        content: "\F3AD"
    }

    .mdi-numeric-4-box-multiple-outline:before {
        content: "\F3AE"
    }

    .mdi-numeric-4-box-outline:before {
        content: "\F3AF"
    }

    .mdi-numeric-5-box:before {
        content: "\F3B0"
    }

    .mdi-numeric-5-box-multiple-outline:before {
        content: "\F3B1"
    }

    .mdi-numeric-5-box-outline:before {
        content: "\F3B2"
    }

    .mdi-numeric-6-box:before {
        content: "\F3B3"
    }

    .mdi-numeric-6-box-multiple-outline:before {
        content: "\F3B4"
    }

    .mdi-numeric-6-box-outline:before {
        content: "\F3B5"
    }

    .mdi-numeric-7-box:before {
        content: "\F3B6"
    }

    .mdi-numeric-7-box-multiple-outline:before {
        content: "\F3B7"
    }

    .mdi-numeric-7-box-outline:before {
        content: "\F3B8"
    }

    .mdi-numeric-8-box:before {
        content: "\F3B9"
    }

    .mdi-numeric-8-box-multiple-outline:before {
        content: "\F3BA"
    }

    .mdi-numeric-8-box-outline:before {
        content: "\F3BB"
    }

    .mdi-numeric-9-box:before {
        content: "\F3BC"
    }

    .mdi-numeric-9-box-multiple-outline:before {
        content: "\F3BD"
    }

    .mdi-numeric-9-box-outline:before {
        content: "\F3BE"
    }

    .mdi-numeric-9-plus-box:before {
        content: "\F3BF"
    }

    .mdi-numeric-9-plus-box-multiple-outline:before {
        content: "\F3C0"
    }

    .mdi-numeric-9-plus-box-outline:before {
        content: "\F3C1"
    }

    .mdi-nut:before {
        content: "\F6F7"
    }

    .mdi-nutrition:before {
        content: "\F3C2"
    }

    .mdi-oar:before {
        content: "\F67B"
    }

    .mdi-octagon:before {
        content: "\F3C3"
    }

    .mdi-octagon-outline:before {
        content: "\F3C4"
    }

    .mdi-octagram:before {
        content: "\F6F8"
    }

    .mdi-odnoklassniki:before {
        content: "\F3C5"
    }

    .mdi-office:before {
        content: "\F3C6"
    }

    .mdi-oil:before {
        content: "\F3C7"
    }

    .mdi-oil-temperature:before {
        content: "\F3C8"
    }

    .mdi-omega:before {
        content: "\F3C9"
    }

    .mdi-onedrive:before {
        content: "\F3CA"
    }

    .mdi-opacity:before {
        content: "\F5CC"
    }

    .mdi-open-in-app:before {
        content: "\F3CB"
    }

    .mdi-open-in-new:before {
        content: "\F3CC"
    }

    .mdi-openid:before {
        content: "\F3CD"
    }

    .mdi-opera:before {
        content: "\F3CE"
    }

    .mdi-ornament:before {
        content: "\F3CF"
    }

    .mdi-ornament-variant:before {
        content: "\F3D0"
    }

    .mdi-owl:before {
        content: "\F3D2"
    }

    .mdi-package:before {
        content: "\F3D3"
    }

    .mdi-package-down:before {
        content: "\F3D4"
    }

    .mdi-package-up:before {
        content: "\F3D5"
    }

    .mdi-package-variant:before {
        content: "\F3D6"
    }

    .mdi-package-variant-closed:before {
        content: "\F3D7"
    }

    .mdi-page-first:before {
        content: "\F600"
    }

    .mdi-page-last:before {
        content: "\F601"
    }

    .mdi-page-layout-body:before {
        content: "\F6F9"
    }

    .mdi-page-layout-footer:before {
        content: "\F6FA"
    }

    .mdi-page-layout-header:before {
        content: "\F6FB"
    }

    .mdi-page-layout-sidebar-left:before {
        content: "\F6FC"
    }

    .mdi-page-layout-sidebar-right:before {
        content: "\F6FD"
    }

    .mdi-palette:before {
        content: "\F3D8"
    }

    .mdi-palette-advanced:before {
        content: "\F3D9"
    }

    .mdi-panda:before {
        content: "\F3DA"
    }

    .mdi-pandora:before {
        content: "\F3DB"
    }

    .mdi-panorama:before {
        content: "\F3DC"
    }

    .mdi-panorama-fisheye:before {
        content: "\F3DD"
    }

    .mdi-panorama-horizontal:before {
        content: "\F3DE"
    }

    .mdi-panorama-vertical:before {
        content: "\F3DF"
    }

    .mdi-panorama-wide-angle:before {
        content: "\F3E0"
    }

    .mdi-paper-cut-vertical:before {
        content: "\F3E1"
    }

    .mdi-paperclip:before {
        content: "\F3E2"
    }

    .mdi-parking:before {
        content: "\F3E3"
    }

    .mdi-pause:before {
        content: "\F3E4"
    }

    .mdi-pause-circle:before {
        content: "\F3E5"
    }

    .mdi-pause-circle-outline:before {
        content: "\F3E6"
    }

    .mdi-pause-octagon:before {
        content: "\F3E7"
    }

    .mdi-pause-octagon-outline:before {
        content: "\F3E8"
    }

    .mdi-paw:before {
        content: "\F3E9"
    }

    .mdi-paw-off:before {
        content: "\F657"
    }

    .mdi-pen:before {
        content: "\F3EA"
    }

    .mdi-pencil:before {
        content: "\F3EB"
    }

    .mdi-pencil-box:before {
        content: "\F3EC"
    }

    .mdi-pencil-box-outline:before {
        content: "\F3ED"
    }

    .mdi-pencil-circle:before {
        content: "\F6FE"
    }

    .mdi-pencil-lock:before {
        content: "\F3EE"
    }

    .mdi-pencil-off:before {
        content: "\F3EF"
    }

    .mdi-pentagon:before {
        content: "\F6FF"
    }

    .mdi-pentagon-outline:before {
        content: "\F700"
    }

    .mdi-percent:before {
        content: "\F3F0"
    }

    .mdi-pharmacy:before {
        content: "\F3F1"
    }

    .mdi-phone:before {
        content: "\F3F2"
    }

    .mdi-phone-bluetooth:before {
        content: "\F3F3"
    }

    .mdi-phone-classic:before {
        content: "\F602"
    }

    .mdi-phone-forward:before {
        content: "\F3F4"
    }

    .mdi-phone-hangup:before {
        content: "\F3F5"
    }

    .mdi-phone-in-talk:before {
        content: "\F3F6"
    }

    .mdi-phone-incoming:before {
        content: "\F3F7"
    }

    .mdi-phone-locked:before {
        content: "\F3F8"
    }

    .mdi-phone-log:before {
        content: "\F3F9"
    }

    .mdi-phone-minus:before {
        content: "\F658"
    }

    .mdi-phone-missed:before {
        content: "\F3FA"
    }

    .mdi-phone-outgoing:before {
        content: "\F3FB"
    }

    .mdi-phone-paused:before {
        content: "\F3FC"
    }

    .mdi-phone-plus:before {
        content: "\F659"
    }

    .mdi-phone-settings:before {
        content: "\F3FD"
    }

    .mdi-phone-voip:before {
        content: "\F3FE"
    }

    .mdi-pi:before {
        content: "\F3FF"
    }

    .mdi-pi-box:before {
        content: "\F400"
    }

    .mdi-piano:before {
        content: "\F67C"
    }

    .mdi-pig:before {
        content: "\F401"
    }

    .mdi-pill:before {
        content: "\F402"
    }

    .mdi-pillar:before {
        content: "\F701"
    }

    .mdi-pin:before {
        content: "\F403"
    }

    .mdi-pin-off:before {
        content: "\F404"
    }

    .mdi-pine-tree:before {
        content: "\F405"
    }

    .mdi-pine-tree-box:before {
        content: "\F406"
    }

    .mdi-pinterest:before {
        content: "\F407"
    }

    .mdi-pinterest-box:before {
        content: "\F408"
    }

    .mdi-pistol:before {
        content: "\F702"
    }

    .mdi-pizza:before {
        content: "\F409"
    }

    .mdi-plane-shield:before {
        content: "\F6BA"
    }

    .mdi-play:before {
        content: "\F40A"
    }

    .mdi-play-box-outline:before {
        content: "\F40B"
    }

    .mdi-play-circle:before {
        content: "\F40C"
    }

    .mdi-play-circle-outline:before {
        content: "\F40D"
    }

    .mdi-play-pause:before {
        content: "\F40E"
    }

    .mdi-play-protected-content:before {
        content: "\F40F"
    }

    .mdi-playlist-check:before {
        content: "\F5C7"
    }

    .mdi-playlist-minus:before {
        content: "\F410"
    }

    .mdi-playlist-play:before {
        content: "\F411"
    }

    .mdi-playlist-plus:before {
        content: "\F412"
    }

    .mdi-playlist-remove:before {
        content: "\F413"
    }

    .mdi-playstation:before {
        content: "\F414"
    }

    .mdi-plex:before {
        content: "\F6B9"
    }

    .mdi-plus:before {
        content: "\F415"
    }

    .mdi-plus-box:before {
        content: "\F416"
    }

    .mdi-plus-box-outline:before {
        content: "\F703"
    }

    .mdi-plus-circle:before {
        content: "\F417"
    }

    .mdi-plus-circle-multiple-outline:before {
        content: "\F418"
    }

    .mdi-plus-circle-outline:before {
        content: "\F419"
    }

    .mdi-plus-network:before {
        content: "\F41A"
    }

    .mdi-plus-one:before {
        content: "\F41B"
    }

    .mdi-plus-outline:before {
        content: "\F704"
    }

    .mdi-pocket:before {
        content: "\F41C"
    }

    .mdi-pokeball:before {
        content: "\F41D"
    }

    .mdi-polarAdminid:before {
        content: "\F41E"
    }

    .mdi-poll:before {
        content: "\F41F"
    }

    .mdi-poll-box:before {
        content: "\F420"
    }

    .mdi-polymer:before {
        content: "\F421"
    }

    .mdi-pool:before {
        content: "\F606"
    }

    .mdi-popcorn:before {
        content: "\F422"
    }

    .mdi-pot:before {
        content: "\F65A"
    }

    .mdi-pot-mix:before {
        content: "\F65B"
    }

    .mdi-pound:before {
        content: "\F423"
    }

    .mdi-pound-box:before {
        content: "\F424"
    }

    .mdi-power:before {
        content: "\F425"
    }

    .mdi-power-plug:before {
        content: "\F6A4"
    }

    .mdi-power-plug-off:before {
        content: "\F6A5"
    }

    .mdi-power-settings:before {
        content: "\F426"
    }

    .mdi-power-socket:before {
        content: "\F427"
    }

    .mdi-prescription:before {
        content: "\F705"
    }

    .mdi-presentation:before {
        content: "\F428"
    }

    .mdi-presentation-play:before {
        content: "\F429"
    }

    .mdi-printer:before {
        content: "\F42A"
    }

    .mdi-printer-3d:before {
        content: "\F42B"
    }

    .mdi-printer-alert:before {
        content: "\F42C"
    }

    .mdi-printer-settings:before {
        content: "\F706"
    }

    .mdi-priority-high:before {
        content: "\F603"
    }

    .mdi-priority-low:before {
        content: "\F604"
    }

    .mdi-professional-hexagon:before {
        content: "\F42D"
    }

    .mdi-projector:before {
        content: "\F42E"
    }

    .mdi-projector-screen:before {
        content: "\F42F"
    }

    .mdi-publish:before {
        content: "\F6A6"
    }

    .mdi-pulse:before {
        content: "\F430"
    }

    .mdi-puzzle:before {
        content: "\F431"
    }

    .mdi-qqchat:before {
        content: "\F605"
    }

    .mdi-qrcode:before {
        content: "\F432"
    }

    .mdi-qrcode-scan:before {
        content: "\F433"
    }

    .mdi-quadcopter:before {
        content: "\F434"
    }

    .mdi-quality-high:before {
        content: "\F435"
    }

    .mdi-quicktime:before {
        content: "\F436"
    }

    .mdi-radar:before {
        content: "\F437"
    }

    .mdi-radiator:before {
        content: "\F438"
    }

    .mdi-radio:before {
        content: "\F439"
    }

    .mdi-radio-handheld:before {
        content: "\F43A"
    }

    .mdi-radio-tower:before {
        content: "\F43B"
    }

    .mdi-radioactive:before {
        content: "\F43C"
    }

    .mdi-radiobox-blank:before {
        content: "\F43D"
    }

    .mdi-radiobox-marked:before {
        content: "\F43E"
    }

    .mdi-raspberrypi:before {
        content: "\F43F"
    }

    .mdi-ray-end:before {
        content: "\F440"
    }

    .mdi-ray-end-arrow:before {
        content: "\F441"
    }

    .mdi-ray-start:before {
        content: "\F442"
    }

    .mdi-ray-start-arrow:before {
        content: "\F443"
    }

    .mdi-ray-start-end:before {
        content: "\F444"
    }

    .mdi-ray-vertex:before {
        content: "\F445"
    }

    .mdi-rdio:before {
        content: "\F446"
    }

    .mdi-react:before {
        content: "\F707"
    }

    .mdi-read:before {
        content: "\F447"
    }

    .mdi-readability:before {
        content: "\F448"
    }

    .mdi-receipt:before {
        content: "\F449"
    }

    .mdi-record:before {
        content: "\F44A"
    }

    .mdi-record-rec:before {
        content: "\F44B"
    }

    .mdi-recycle:before {
        content: "\F44C"
    }

    .mdi-reddit:before {
        content: "\F44D"
    }

    .mdi-redo:before {
        content: "\F44E"
    }

    .mdi-redo-variant:before {
        content: "\F44F"
    }

    .mdi-refresh:before {
        content: "\F450"
    }

    .mdi-regex:before {
        content: "\F451"
    }

    .mdi-relative-scale:before {
        content: "\F452"
    }

    .mdi-reload:before {
        content: "\F453"
    }

    .mdi-remote:before {
        content: "\F454"
    }

    .mdi-rename-box:before {
        content: "\F455"
    }

    .mdi-reorder-horizontal:before {
        content: "\F687"
    }

    .mdi-reorder-vertical:before {
        content: "\F688"
    }

    .mdi-repeat:before {
        content: "\F456"
    }

    .mdi-repeat-off:before {
        content: "\F457"
    }

    .mdi-repeat-once:before {
        content: "\F458"
    }

    .mdi-replay:before {
        content: "\F459"
    }

    .mdi-reply:before {
        content: "\F45A"
    }

    .mdi-reply-all:before {
        content: "\F45B"
    }

    .mdi-reproduction:before {
        content: "\F45C"
    }

    .mdi-resize-bottom-right:before {
        content: "\F45D"
    }

    .mdi-responsive:before {
        content: "\F45E"
    }

    .mdi-restart:before {
        content: "\F708"
    }

    .mdi-restore:before {
        content: "\F6A7"
    }

    .mdi-rewind:before {
        content: "\F45F"
    }

    .mdi-rewind-outline:before {
        content: "\F709"
    }

    .mdi-rhombus:before {
        content: "\F70A"
    }

    .mdi-rhombus-outline:before {
        content: "\F70B"
    }

    .mdi-ribbon:before {
        content: "\F460"
    }

    .mdi-road:before {
        content: "\F461"
    }

    .mdi-road-variant:before {
        content: "\F462"
    }

    .mdi-robot:before {
        content: "\F6A8"
    }

    .mdi-rocket:before {
        content: "\F463"
    }

    .mdi-roomba:before {
        content: "\F70C"
    }

    .mdi-rotate-3d:before {
        content: "\F464"
    }

    .mdi-rotate-left:before {
        content: "\F465"
    }

    .mdi-rotate-left-variant:before {
        content: "\F466"
    }

    .mdi-rotate-right:before {
        content: "\F467"
    }

    .mdi-rotate-right-variant:before {
        content: "\F468"
    }

    .mdi-rounded-corner:before {
        content: "\F607"
    }

    .mdi-router-wireless:before {
        content: "\F469"
    }

    .mdi-routes:before {
        content: "\F46A"
    }

    .mdi-rowing:before {
        content: "\F608"
    }

    .mdi-rss:before {
        content: "\F46B"
    }

    .mdi-rss-box:before {
        content: "\F46C"
    }

    .mdi-ruler:before {
        content: "\F46D"
    }

    .mdi-run:before {
        content: "\F70D"
    }

    .mdi-run-fast:before {
        content: "\F46E"
    }

    .mdi-sale:before {
        content: "\F46F"
    }

    .mdi-satellite:before {
        content: "\F470"
    }

    .mdi-satellite-variant:before {
        content: "\F471"
    }

    .mdi-saxophone:before {
        content: "\F609"
    }

    .mdi-scale:before {
        content: "\F472"
    }

    .mdi-scale-balance:before {
        content: "\F5D1"
    }

    .mdi-scale-bathroom:before {
        content: "\F473"
    }

    .mdi-scanner:before {
        content: "\F6AA"
    }

    .mdi-school:before {
        content: "\F474"
    }

    .mdi-screen-rotation:before {
        content: "\F475"
    }

    .mdi-screen-rotation-lock:before {
        content: "\F476"
    }

    .mdi-screwdriver:before {
        content: "\F477"
    }

    .mdi-script:before {
        content: "\F478"
    }

    .mdi-sd:before {
        content: "\F479"
    }

    .mdi-seal:before {
        content: "\F47A"
    }

    .mdi-search-web:before {
        content: "\F70E"
    }

    .mdi-seat-flat:before {
        content: "\F47B"
    }

    .mdi-seat-flat-angled:before {
        content: "\F47C"
    }

    .mdi-seat-individual-suite:before {
        content: "\F47D"
    }

    .mdi-seat-legroom-extra:before {
        content: "\F47E"
    }

    .mdi-seat-legroom-normal:before {
        content: "\F47F"
    }

    .mdi-seat-legroom-reduced:before {
        content: "\F480"
    }

    .mdi-seat-recline-extra:before {
        content: "\F481"
    }

    .mdi-seat-recline-normal:before {
        content: "\F482"
    }

    .mdi-security:before {
        content: "\F483"
    }

    .mdi-security-home:before {
        content: "\F689"
    }

    .mdi-security-network:before {
        content: "\F484"
    }

    .mdi-select:before {
        content: "\F485"
    }

    .mdi-select-all:before {
        content: "\F486"
    }

    .mdi-select-inverse:before {
        content: "\F487"
    }

    .mdi-select-off:before {
        content: "\F488"
    }

    .mdi-selection:before {
        content: "\F489"
    }

    .mdi-send:before {
        content: "\F48A"
    }

    .mdi-serial-port:before {
        content: "\F65C"
    }

    .mdi-server:before {
        content: "\F48B"
    }

    .mdi-server-minus:before {
        content: "\F48C"
    }

    .mdi-server-network:before {
        content: "\F48D"
    }

    .mdi-server-network-off:before {
        content: "\F48E"
    }

    .mdi-server-off:before {
        content: "\F48F"
    }

    .mdi-server-plus:before {
        content: "\F490"
    }

    .mdi-server-remove:before {
        content: "\F491"
    }

    .mdi-server-security:before {
        content: "\F492"
    }

    .mdi-settings:before {
        content: "\F493"
    }

    .mdi-settings-box:before {
        content: "\F494"
    }

    .mdi-shape-circle-plus:before {
        content: "\F65D"
    }

    .mdi-shape-plus:before {
        content: "\F495"
    }

    .mdi-shape-polygon-plus:before {
        content: "\F65E"
    }

    .mdi-shape-rectangle-plus:before {
        content: "\F65F"
    }

    .mdi-shape-square-plus:before {
        content: "\F660"
    }

    .mdi-share:before {
        content: "\F496"
    }

    .mdi-share-variant:before {
        content: "\F497"
    }

    .mdi-shield:before {
        content: "\F498"
    }

    .mdi-shield-outline:before {
        content: "\F499"
    }

    .mdi-shopping:before {
        content: "\F49A"
    }

    .mdi-shopping-music:before {
        content: "\F49B"
    }

    .mdi-shovel:before {
        content: "\F70F"
    }

    .mdi-shovel-off:before {
        content: "\F710"
    }

    .mdi-shredder:before {
        content: "\F49C"
    }

    .mdi-shuffle:before {
        content: "\F49D"
    }

    .mdi-shuffle-disabled:before {
        content: "\F49E"
    }

    .mdi-shuffle-variant:before {
        content: "\F49F"
    }

    .mdi-sigma:before {
        content: "\F4A0"
    }

    .mdi-sigma-lower:before {
        content: "\F62B"
    }

    .mdi-sign-caution:before {
        content: "\F4A1"
    }

    .mdi-signal:before {
        content: "\F4A2"
    }

    .mdi-signal-2g:before {
        content: "\F711"
    }

    .mdi-signal-3g:before {
        content: "\F712"
    }

    .mdi-signal-4g:before {
        content: "\F713"
    }

    .mdi-signal-hspa:before {
        content: "\F714"
    }

    .mdi-signal-hspa-plus:before {
        content: "\F715"
    }

    .mdi-signal-variant:before {
        content: "\F60A"
    }

    .mdi-silverware:before {
        content: "\F4A3"
    }

    .mdi-silverware-fork:before {
        content: "\F4A4"
    }

    .mdi-silverware-spoon:before {
        content: "\F4A5"
    }

    .mdi-silverware-variant:before {
        content: "\F4A6"
    }

    .mdi-sim:before {
        content: "\F4A7"
    }

    .mdi-sim-alert:before {
        content: "\F4A8"
    }

    .mdi-sim-off:before {
        content: "\F4A9"
    }

    .mdi-sitemap:before {
        content: "\F4AA"
    }

    .mdi-skip-backward:before {
        content: "\F4AB"
    }

    .mdi-skip-forward:before {
        content: "\F4AC"
    }

    .mdi-skip-next:before {
        content: "\F4AD"
    }

    .mdi-skip-next-circle:before {
        content: "\F661"
    }

    .mdi-skip-next-circle-outline:before {
        content: "\F662"
    }

    .mdi-skip-previous:before {
        content: "\F4AE"
    }

    .mdi-skip-previous-circle:before {
        content: "\F663"
    }

    .mdi-skip-previous-circle-outline:before {
        content: "\F664"
    }

    .mdi-skull:before {
        content: "\F68B"
    }

    .mdi-skype:before {
        content: "\F4AF"
    }

    .mdi-skype-business:before {
        content: "\F4B0"
    }

    .mdi-slack:before {
        content: "\F4B1"
    }

    .mdi-sleep:before {
        content: "\F4B2"
    }

    .mdi-sleep-off:before {
        content: "\F4B3"
    }

    .mdi-smoking:before {
        content: "\F4B4"
    }

    .mdi-smoking-off:before {
        content: "\F4B5"
    }

    .mdi-snapchat:before {
        content: "\F4B6"
    }

    .mdi-snowflake:before {
        content: "\F716"
    }

    .mdi-snowman:before {
        content: "\F4B7"
    }

    .mdi-soccer:before {
        content: "\F4B8"
    }

    .mdi-sofa:before {
        content: "\F4B9"
    }

    .mdi-solid:before {
        content: "\F68C"
    }

    .mdi-sort:before {
        content: "\F4BA"
    }

    .mdi-sort-alphabetical:before {
        content: "\F4BB"
    }

    .mdi-sort-ascending:before {
        content: "\F4BC"
    }

    .mdi-sort-descending:before {
        content: "\F4BD"
    }

    .mdi-sort-numeric:before {
        content: "\F4BE"
    }

    .mdi-sort-variant:before {
        content: "\F4BF"
    }

    .mdi-soundcloud:before {
        content: "\F4C0"
    }

    .mdi-source-branch:before {
        content: "\F62C"
    }

    .mdi-source-commit:before {
        content: "\F717"
    }

    .mdi-source-commit-end:before {
        content: "\F718"
    }

    .mdi-source-commit-end-local:before {
        content: "\F719"
    }

    .mdi-source-commit-local:before {
        content: "\F71A"
    }

    .mdi-source-commit-next-local:before {
        content: "\F71B"
    }

    .mdi-source-commit-start:before {
        content: "\F71C"
    }

    .mdi-source-commit-start-next-local:before {
        content: "\F71D"
    }

    .mdi-source-fork:before {
        content: "\F4C1"
    }

    .mdi-source-merge:before {
        content: "\F62D"
    }

    .mdi-source-pull:before {
        content: "\F4C2"
    }

    .mdi-speaker:before {
        content: "\F4C3"
    }

    .mdi-speaker-off:before {
        content: "\F4C4"
    }

    .mdi-speaker-wireless:before {
        content: "\F71E"
    }

    .mdi-speedometer:before {
        content: "\F4C5"
    }

    .mdi-spellcheck:before {
        content: "\F4C6"
    }

    .mdi-spotify:before {
        content: "\F4C7"
    }

    .mdi-spotlight:before {
        content: "\F4C8"
    }

    .mdi-spotlight-beam:before {
        content: "\F4C9"
    }

    .mdi-spray:before {
        content: "\F665"
    }

    .mdi-square-inc:before {
        content: "\F4CA"
    }

    .mdi-square-inc-cash:before {
        content: "\F4CB"
    }

    .mdi-stackexchange:before {
        content: "\F60B"
    }

    .mdi-stackoverflow:before {
        content: "\F4CC"
    }

    .mdi-stadium:before {
        content: "\F71F"
    }

    .mdi-stairs:before {
        content: "\F4CD"
    }

    .mdi-star:before {
        content: "\F4CE"
    }

    .mdi-star-circle:before {
        content: "\F4CF"
    }

    .mdi-star-half:before {
        content: "\F4D0"
    }

    .mdi-star-off:before {
        content: "\F4D1"
    }

    .mdi-star-outline:before {
        content: "\F4D2"
    }

    .mdi-steam:before {
        content: "\F4D3"
    }

    .mdi-steering:before {
        content: "\F4D4"
    }

    .mdi-step-backward:before {
        content: "\F4D5"
    }

    .mdi-step-backward-2:before {
        content: "\F4D6"
    }

    .mdi-step-forward:before {
        content: "\F4D7"
    }

    .mdi-step-forward-2:before {
        content: "\F4D8"
    }

    .mdi-stethoscope:before {
        content: "\F4D9"
    }

    .mdi-sticker:before {
        content: "\F5D0"
    }

    .mdi-stocking:before {
        content: "\F4DA"
    }

    .mdi-stop:before {
        content: "\F4DB"
    }

    .mdi-stop-circle:before {
        content: "\F666"
    }

    .mdi-stop-circle-outline:before {
        content: "\F667"
    }

    .mdi-store:before {
        content: "\F4DC"
    }

    .mdi-store-24-hour:before {
        content: "\F4DD"
    }

    .mdi-stove:before {
        content: "\F4DE"
    }

    .mdi-subdirectory-arrow-left:before {
        content: "\F60C"
    }

    .mdi-subdirectory-arrow-right:before {
        content: "\F60D"
    }

    .mdi-subway:before {
        content: "\F6AB"
    }

    .mdi-subway-variant:before {
        content: "\F4DF"
    }

    .mdi-sunglasses:before {
        content: "\F4E0"
    }

    .mdi-surround-sound:before {
        content: "\F5C5"
    }

    .mdi-svg:before {
        content: "\F720"
    }

    .mdi-swap-horizontal:before {
        content: "\F4E1"
    }

    .mdi-swap-vertical:before {
        content: "\F4E2"
    }

    .mdi-swim:before {
        content: "\F4E3"
    }

    .mdi-switch:before {
        content: "\F4E4"
    }

    .mdi-sword:before {
        content: "\F4E5"
    }

    .mdi-sync:before {
        content: "\F4E6"
    }

    .mdi-sync-alert:before {
        content: "\F4E7"
    }

    .mdi-sync-off:before {
        content: "\F4E8"
    }

    .mdi-tab:before {
        content: "\F4E9"
    }

    .mdi-tab-unselected:before {
        content: "\F4EA"
    }

    .mdi-table:before {
        content: "\F4EB"
    }

    .mdi-table-column-plus-after:before {
        content: "\F4EC"
    }

    .mdi-table-column-plus-before:before {
        content: "\F4ED"
    }

    .mdi-table-column-remove:before {
        content: "\F4EE"
    }

    .mdi-table-column-width:before {
        content: "\F4EF"
    }

    .mdi-table-edit:before {
        content: "\F4F0"
    }

    .mdi-table-large:before {
        content: "\F4F1"
    }

    .mdi-table-row-height:before {
        content: "\F4F2"
    }

    .mdi-table-row-plus-after:before {
        content: "\F4F3"
    }

    .mdi-table-row-plus-before:before {
        content: "\F4F4"
    }

    .mdi-table-row-remove:before {
        content: "\F4F5"
    }

    .mdi-tablet:before {
        content: "\F4F6"
    }

    .mdi-tablet-andrAdminid:before {
        content: "\F4F7"
    }

    .mdi-tablet-ipad:before {
        content: "\F4F8"
    }

    .mdi-tag:before {
        content: "\F4F9"
    }

    .mdi-tag-faces:before {
        content: "\F4FA"
    }

    .mdi-tag-heart:before {
        content: "\F68A"
    }

    .mdi-tag-multiple:before {
        content: "\F4FB"
    }

    .mdi-tag-outline:before {
        content: "\F4FC"
    }

    .mdi-tag-plus:before {
        content: "\F721"
    }

    .mdi-tag-remove:before {
        content: "\F722"
    }

    .mdi-tag-text-outline:before {
        content: "\F4FD"
    }

    .mdi-target:before {
        content: "\F4FE"
    }

    .mdi-taxi:before {
        content: "\F4FF"
    }

    .mdi-teamviewer:before {
        content: "\F500"
    }

    .mdi-telegram:before {
        content: "\F501"
    }

    .mdi-television:before {
        content: "\F502"
    }

    .mdi-television-guide:before {
        content: "\F503"
    }

    .mdi-temperature-celsius:before {
        content: "\F504"
    }

    .mdi-temperature-fahrenheit:before {
        content: "\F505"
    }

    .mdi-temperature-kelvin:before {
        content: "\F506"
    }

    .mdi-tennis:before {
        content: "\F507"
    }

    .mdi-tent:before {
        content: "\F508"
    }

    .mdi-terrain:before {
        content: "\F509"
    }

    .mdi-test-tube:before {
        content: "\F668"
    }

    .mdi-text-shadow:before {
        content: "\F669"
    }

    .mdi-text-to-speech:before {
        content: "\F50A"
    }

    .mdi-text-to-speech-off:before {
        content: "\F50B"
    }

    .mdi-textbox:before {
        content: "\F60E"
    }

    .mdi-texture:before {
        content: "\F50C"
    }

    .mdi-theater:before {
        content: "\F50D"
    }

    .mdi-theme-light-dark:before {
        content: "\F50E"
    }

    .mdi-thermometer:before {
        content: "\F50F"
    }

    .mdi-thermometer-lines:before {
        content: "\F510"
    }

    .mdi-thumb-down:before {
        content: "\F511"
    }

    .mdi-thumb-down-outline:before {
        content: "\F512"
    }

    .mdi-thumb-up:before {
        content: "\F513"
    }

    .mdi-thumb-up-outline:before {
        content: "\F514"
    }

    .mdi-thumbs-up-down:before {
        content: "\F515"
    }

    .mdi-ticket:before {
        content: "\F516"
    }

    .mdi-ticket-account:before {
        content: "\F517"
    }

    .mdi-ticket-confirmation:before {
        content: "\F518"
    }

    .mdi-ticket-percent:before {
        content: "\F723"
    }

    .mdi-tie:before {
        content: "\F519"
    }

    .mdi-tilde:before {
        content: "\F724"
    }

    .mdi-timelapse:before {
        content: "\F51A"
    }

    .mdi-timer:before {
        content: "\F51B"
    }

    .mdi-timer-10:before {
        content: "\F51C"
    }

    .mdi-timer-3:before {
        content: "\F51D"
    }

    .mdi-timer-off:before {
        content: "\F51E"
    }

    .mdi-timer-sand:before {
        content: "\F51F"
    }

    .mdi-timer-sand-empty:before {
        content: "\F6AC"
    }

    .mdi-timetable:before {
        content: "\F520"
    }

    .mdi-toggle-switch:before {
        content: "\F521"
    }

    .mdi-toggle-switch-off:before {
        content: "\F522"
    }

    .mdi-tooltip:before {
        content: "\F523"
    }

    .mdi-tooltip-edit:before {
        content: "\F524"
    }

    .mdi-tooltip-image:before {
        content: "\F525"
    }

    .mdi-tooltip-outline:before {
        content: "\F526"
    }

    .mdi-tooltip-outline-plus:before {
        content: "\F527"
    }

    .mdi-tooltip-text:before {
        content: "\F528"
    }

    .mdi-tooth:before {
        content: "\F529"
    }

    .mdi-tor:before {
        content: "\F52A"
    }

    .mdi-tower-beach:before {
        content: "\F680"
    }

    .mdi-tower-fire:before {
        content: "\F681"
    }

    .mdi-traffic-light:before {
        content: "\F52B"
    }

    .mdi-train:before {
        content: "\F52C"
    }

    .mdi-tram:before {
        content: "\F52D"
    }

    .mdi-transcribe:before {
        content: "\F52E"
    }

    .mdi-transcribe-close:before {
        content: "\F52F"
    }

    .mdi-transfer:before {
        content: "\F530"
    }

    .mdi-transit-transfer:before {
        content: "\F6AD"
    }

    .mdi-translate:before {
        content: "\F5CA"
    }

    .mdi-treasure-chest:before {
        content: "\F725"
    }

    .mdi-tree:before {
        content: "\F531"
    }

    .mdi-trello:before {
        content: "\F532"
    }

    .mdi-trending-down:before {
        content: "\F533"
    }

    .mdi-trending-neutral:before {
        content: "\F534"
    }

    .mdi-trending-up:before {
        content: "\F535"
    }

    .mdi-triangle:before {
        content: "\F536"
    }

    .mdi-triangle-outline:before {
        content: "\F537"
    }

    .mdi-trophy:before {
        content: "\F538"
    }

    .mdi-trophy-award:before {
        content: "\F539"
    }

    .mdi-trophy-outline:before {
        content: "\F53A"
    }

    .mdi-trophy-variant:before {
        content: "\F53B"
    }

    .mdi-trophy-variant-outline:before {
        content: "\F53C"
    }

    .mdi-truck:before {
        content: "\F53D"
    }

    .mdi-truck-delivery:before {
        content: "\F53E"
    }

    .mdi-truck-trailer:before {
        content: "\F726"
    }

    .mdi-tshirt-crew:before {
        content: "\F53F"
    }

    .mdi-tshirt-v:before {
        content: "\F540"
    }

    .mdi-tumblr:before {
        content: "\F541"
    }

    .mdi-tumblr-reblog:before {
        content: "\F542"
    }

    .mdi-tune:before {
        content: "\F62E"
    }

    .mdi-tune-vertical:before {
        content: "\F66A"
    }

    .mdi-twitch:before {
        content: "\F543"
    }

    .mdi-twitter:before {
        content: "\F544"
    }

    .mdi-twitter-box:before {
        content: "\F545"
    }

    .mdi-twitter-circle:before {
        content: "\F546"
    }

    .mdi-twitter-retweet:before {
        content: "\F547"
    }

    .mdi-ubuntu:before {
        content: "\F548"
    }

    .mdi-umbraco:before {
        content: "\F549"
    }

    .mdi-umbrella:before {
        content: "\F54A"
    }

    .mdi-umbrella-outline:before {
        content: "\F54B"
    }

    .mdi-undo:before {
        content: "\F54C"
    }

    .mdi-undo-variant:before {
        content: "\F54D"
    }

    .mdi-unfold-less:before {
        content: "\F54E"
    }

    .mdi-unfold-more:before {
        content: "\F54F"
    }

    .mdi-ungroup:before {
        content: "\F550"
    }

    .mdi-unity:before {
        content: "\F6AE"
    }

    .mdi-untappd:before {
        content: "\F551"
    }

    .mdi-update:before {
        content: "\F6AF"
    }

    .mdi-upload:before {
        content: "\F552"
    }

    .mdi-usb:before {
        content: "\F553"
    }

    .mdi-vector-arrange-above:before {
        content: "\F554"
    }

    .mdi-vector-arrange-below:before {
        content: "\F555"
    }

    .mdi-vector-circle:before {
        content: "\F556"
    }

    .mdi-vector-circle-variant:before {
        content: "\F557"
    }

    .mdi-vector-combine:before {
        content: "\F558"
    }

    .mdi-vector-curve:before {
        content: "\F559"
    }

    .mdi-vector-difference:before {
        content: "\F55A"
    }

    .mdi-vector-difference-ab:before {
        content: "\F55B"
    }

    .mdi-vector-difference-ba:before {
        content: "\F55C"
    }

    .mdi-vector-intersection:before {
        content: "\F55D"
    }

    .mdi-vector-line:before {
        content: "\F55E"
    }

    .mdi-vector-point:before {
        content: "\F55F"
    }

    .mdi-vector-polygon:before {
        content: "\F560"
    }

    .mdi-vector-polyline:before {
        content: "\F561"
    }

    .mdi-vector-rectangle:before {
        content: "\F5C6"
    }

    .mdi-vector-selection:before {
        content: "\F562"
    }

    .mdi-vector-square:before {
        content: "\F001"
    }

    .mdi-vector-triangle:before {
        content: "\F563"
    }

    .mdi-vector-union:before {
        content: "\F564"
    }

    .mdi-verified:before {
        content: "\F565"
    }

    .mdi-vibrate:before {
        content: "\F566"
    }

    .mdi-video:before {
        content: "\F567"
    }

    .mdi-video-off:before {
        content: "\F568"
    }

    .mdi-video-switch:before {
        content: "\F569"
    }

    .mdi-view-agenda:before {
        content: "\F56A"
    }

    .mdi-view-array:before {
        content: "\F56B"
    }

    .mdi-view-carousel:before {
        content: "\F56C"
    }

    .mdi-view-column:before {
        content: "\F56D"
    }

    .mdi-view-dashboard:before {
        content: "\F56E"
    }

    .mdi-view-day:before {
        content: "\F56F"
    }

    .mdi-view-grid:before {
        content: "\F570"
    }

    .mdi-view-headline:before {
        content: "\F571"
    }

    .mdi-view-list:before {
        content: "\F572"
    }

    .mdi-view-module:before {
        content: "\F573"
    }

    .mdi-view-parallel:before {
        content: "\F727"
    }

    .mdi-view-quilt:before {
        content: "\F574"
    }

    .mdi-view-sequential:before {
        content: "\F728"
    }

    .mdi-view-stream:before {
        content: "\F575"
    }

    .mdi-view-week:before {
        content: "\F576"
    }

    .mdi-vimeo:before {
        content: "\F577"
    }

    .mdi-vine:before {
        content: "\F578"
    }

    .mdi-violin:before {
        content: "\F60F"
    }

    .mdi-visualstudio:before {
        content: "\F610"
    }

    .mdi-vk:before {
        content: "\F579"
    }

    .mdi-vk-box:before {
        content: "\F57A"
    }

    .mdi-vk-circle:before {
        content: "\F57B"
    }

    .mdi-vlc:before {
        content: "\F57C"
    }

    .mdi-voice:before {
        content: "\F5CB"
    }

    .mdi-voicemail:before {
        content: "\F57D"
    }

    .mdi-volume-high:before {
        content: "\F57E"
    }

    .mdi-volume-low:before {
        content: "\F57F"
    }

    .mdi-volume-medium:before {
        content: "\F580"
    }

    .mdi-volume-off:before {
        content: "\F581"
    }

    .mdi-vpn:before {
        content: "\F582"
    }

    .mdi-walk:before {
        content: "\F583"
    }

    .mdi-wallet:before {
        content: "\F584"
    }

    .mdi-wallet-giftcard:before {
        content: "\F585"
    }

    .mdi-wallet-membership:before {
        content: "\F586"
    }

    .mdi-wallet-travel:before {
        content: "\F587"
    }

    .mdi-wan:before {
        content: "\F588"
    }

    .mdi-washing-machine:before {
        content: "\F729"
    }

    .mdi-watch:before {
        content: "\F589"
    }

    .mdi-watch-export:before {
        content: "\F58A"
    }

    .mdi-watch-import:before {
        content: "\F58B"
    }

    .mdi-watch-vibrate:before {
        content: "\F6B0"
    }

    .mdi-water:before {
        content: "\F58C"
    }

    .mdi-water-off:before {
        content: "\F58D"
    }

    .mdi-water-percent:before {
        content: "\F58E"
    }

    .mdi-water-pump:before {
        content: "\F58F"
    }

    .mdi-watermark:before {
        content: "\F612"
    }

    .mdi-weather-cloudy:before {
        content: "\F590"
    }

    .mdi-weather-fog:before {
        content: "\F591"
    }

    .mdi-weather-hail:before {
        content: "\F592"
    }

    .mdi-weather-lightning:before {
        content: "\F593"
    }

    .mdi-weather-lightning-rainy:before {
        content: "\F67D"
    }

    .mdi-weather-night:before {
        content: "\F594"
    }

    .mdi-weather-partlycloudy:before {
        content: "\F595"
    }

    .mdi-weather-pouring:before {
        content: "\F596"
    }

    .mdi-weather-rainy:before {
        content: "\F597"
    }

    .mdi-weather-snowy:before {
        content: "\F598"
    }

    .mdi-weather-snowy-rainy:before {
        content: "\F67E"
    }

    .mdi-weather-sunny:before {
        content: "\F599"
    }

    .mdi-weather-sunset:before {
        content: "\F59A"
    }

    .mdi-weather-sunset-down:before {
        content: "\F59B"
    }

    .mdi-weather-sunset-up:before {
        content: "\F59C"
    }

    .mdi-weather-windy:before {
        content: "\F59D"
    }

    .mdi-weather-windy-variant:before {
        content: "\F59E"
    }

    .mdi-web:before {
        content: "\F59F"
    }

    .mdi-webcam:before {
        content: "\F5A0"
    }

    .mdi-webhook:before {
        content: "\F62F"
    }

    .mdi-webpack:before {
        content: "\F72A"
    }

    .mdi-wechat:before {
        content: "\F611"
    }

    .mdi-weight:before {
        content: "\F5A1"
    }

    .mdi-weight-kilogram:before {
        content: "\F5A2"
    }

    .mdi-whatsapp:before {
        content: "\F5A3"
    }

    .mdi-wheelchair-accessibility:before {
        content: "\F5A4"
    }

    .mdi-white-balance-auto:before {
        content: "\F5A5"
    }

    .mdi-white-balance-incandescent:before {
        content: "\F5A6"
    }

    .mdi-white-balance-iridescent:before {
        content: "\F5A7"
    }

    .mdi-white-balance-sunny:before {
        content: "\F5A8"
    }

    .mdi-widgets:before {
        content: "\F72B"
    }

    .mdi-wifi:before {
        content: "\F5A9"
    }

    .mdi-wifi-off:before {
        content: "\F5AA"
    }

    .mdi-wii:before {
        content: "\F5AB"
    }

    .mdi-wiiu:before {
        content: "\F72C"
    }

    .mdi-wikipedia:before {
        content: "\F5AC"
    }

    .mdi-window-close:before {
        content: "\F5AD"
    }

    .mdi-window-closed:before {
        content: "\F5AE"
    }

    .mdi-window-maximize:before {
        content: "\F5AF"
    }

    .mdi-window-minimize:before {
        content: "\F5B0"
    }

    .mdi-window-open:before {
        content: "\F5B1"
    }

    .mdi-window-restore:before {
        content: "\F5B2"
    }

    .mdi-windows:before {
        content: "\F5B3"
    }

    .mdi-wordpress:before {
        content: "\F5B4"
    }

    .mdi-worker:before {
        content: "\F5B5"
    }

    .mdi-wrap:before {
        content: "\F5B6"
    }

    .mdi-wrench:before {
        content: "\F5B7"
    }

    .mdi-wunderlist:before {
        content: "\F5B8"
    }

    .mdi-xaml:before {
        content: "\F673"
    }

    .mdi-xbox:before {
        content: "\F5B9"
    }

    .mdi-xbox-controller:before {
        content: "\F5BA"
    }

    .mdi-xbox-controller-off:before {
        content: "\F5BB"
    }

    .mdi-xda:before {
        content: "\F5BC"
    }

    .mdi-xing:before {
        content: "\F5BD"
    }

    .mdi-xing-box:before {
        content: "\F5BE"
    }

    .mdi-xing-circle:before {
        content: "\F5BF"
    }

    .mdi-xml:before {
        content: "\F5C0"
    }

    .mdi-yeast:before {
        content: "\F5C1"
    }

    .mdi-yelp:before {
        content: "\F5C2"
    }

    .mdi-yin-yang:before {
        content: "\F67F"
    }

    .mdi-youtube-play:before {
        content: "\F5C3"
    }

    .mdi-zip-box:before {
        content: "\F5C4"
    }

    .mdi-18px.mdi-set,
    .mdi-18px.mdi:before {
        font-size: 18px
    }

    .mdi-24px.mdi-set,
    .mdi-24px.mdi:before {
        font-size: 24px
    }

    .mdi-36px.mdi-set,
    .mdi-36px.mdi:before {
        font-size: 36px
    }

    .mdi-48px.mdi-set,
    .mdi-48px.mdi:before {
        font-size: 48px
    }

    .mdi-dark {
        color: rgba(0, 0, 0, .54)
    }

    .mdi-dark.mdi-inactive {
        color: rgba(0, 0, 0, .26)
    }

    .mdi-light {
        color: #fff
    }

    .mdi-light.mdi-inactive {
        color: rgba(255, 255, 255, .3)
    }

    .mdi-rotate-45 {
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg)
    }

    .mdi-rotate-90 {
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg)
    }

    .mdi-rotate-135 {
        -webkit-transform: rotate(135deg);
        -ms-transform: rotate(135deg);
        transform: rotate(135deg)
    }

    .mdi-rotate-180 {
        -webkit-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg)
    }

    .mdi-rotate-225 {
        -webkit-transform: rotate(225deg);
        -ms-transform: rotate(225deg);
        transform: rotate(225deg)
    }

    .mdi-rotate-270 {
        -webkit-transform: rotate(270deg);
        -ms-transform: rotate(270deg);
        transform: rotate(270deg)
    }

    .mdi-rotate-315 {
        -webkit-transform: rotate(315deg);
        -ms-transform: rotate(315deg);
        transform: rotate(315deg)
    }

    .mdi-flip-horizontal {
        -webkit-transform: scaleX(-1);
        transform: scaleX(-1);
        filter: FlipH;
        -ms-filter: "FlipH"
    }

    .mdi-flip-vertical {
        -webkit-transform: scaleY(-1);
        transform: scaleY(-1);
        filter: FlipV;
        -ms-filter: "FlipV"
    }


    /*! Cryptocoins - cryptocurrency icon font | https://github.com/allienworks/cryptocoins */

    @font-face {
        font-family: cryptocoins;
        src: url(icons/crypto-icons/cryptocoins.woff2) format('woff2'), url(icons/crypto-icons/cryptocoins.woff) format('woff'), url(icons/crypto-icons/cryptocoins.ttf) format('truetype')
    }

    .cc::before {
        font-family: cryptocoins;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        font-style: normal;
        font-variant: normal;
        font-weight: 400;
        text-decoration: none;
        text-transform: none
    }

    .ADA {
        color: #3CC8C8
    }

    .ADC {
        color: #3CB0E5
    }

    .AEON {
        color: #164450
    }

    .AMP {
        color: #048DD2
    }

    .ANC {
        color: #000
    }

    .ARCH {
        color: #002652
    }

    .ARDR {
        color: #1162a1
    }

    .ARK {
        color: #F70000
    }

    .AUR {
        color: #136c5e
    }

    .BANX {
        color: #225BA6
    }

    .BAT {
        color: #9e1f63
    }

    .BAY {
        color: #584ba1
    }

    .BC {
        color: #202121
    }

    .BCN {
        color: #964F51
    }

    .BFT {
        color: #4fc3f7
    }

    .BRK {
        color: #194fa0
    }

    .BRX {
        color: #a8c300
    }

    .BSD {
        color: #1186E7
    }

    .BTA {
        color: #210094
    }

    .BCH,
    .BTC {
        color: #F7931A
    }

    .BTCD {
        color: #2A72DC
    }

    .BTM {
        color: #9FA8B4
    }

    .BTS {
        color: #03A9E0
    }

    .CLAM {
        color: #D6AB31
    }

    .CLOAK {
        color: #DF3F1E
    }

    .DAO {
        color: #FF3B3B
    }

    .DASH {
        color: #1c75bc
    }

    .DCR {
        color: #3b7cfb
    }

    .DCT {
        color: #008770
    }

    .DGB {
        color: #06c
    }

    .DGD,
    .DGX {
        color: #D8A24A
    }

    .DMD {
        color: #5497b2
    }

    .DOGE {
        color: #BA9F33
    }

    .EMC {
        color: #674c8c
    }

    .EOS {
        color: #19191A
    }

    .ERC {
        color: #101E84
    }

    .ETC {
        color: #669073
    }

    .ETH {
        color: #282828
    }

    .FC2 {
        color: #040405
    }

    .FCT {
        color: #2175BB
    }

    .FLO {
        color: #1358C8
    }

    .FRK {
        color: #0633cd
    }

    .FTC {
        color: #679EF1
    }

    .GAME {
        color: #ed1b24
    }

    .GBYTE {
        color: #2C3E50
    }

    .GDC {
        color: #E9A226
    }

    .GEMZ {
        color: #e86060
    }

    .GLD {
        color: #E8BE24
    }

    .GNO {
        color: #00A6C4
    }

    .GNT {
        color: #00d6e3
    }

    .GOLOS {
        color: #2670B7
    }

    .GRC {
        color: #88A13C
    }

    .GRS {
        color: #648FA0
    }

    .HEAT {
        color: #ff5606
    }

    .ICN {
        color: #4c6f8c
    }

    .IFC {
        color: #ed272d
    }

    .INCNT {
        color: #f2932f
    }

    .IOC {
        color: #2fa3de
    }

    .IOTA {
        color: #FFF
    }

    .JBS {
        color: #1A8BCD
    }

    .KMD {
        color: #326464
    }

    .KOBO {
        color: #80C342
    }

    .KORE {
        color: #DF4124
    }

    .LBC {
        color: #015C47
    }

    .LDOGE {
        color: #fc0
    }

    .LISK {
        color: #1A6896
    }

    .LTC {
        color: #838383
    }

    .MAID {
        color: #5492D6
    }

    .MCO {
        color: #0D3459
    }

    .MINT {
        color: #006835
    }

    .MONA {
        color: #a99364
    }

    .MRC {
        color: #4279bd
    }

    .MSC {
        color: #1D4983
    }

    .MTR {
        color: #b92429
    }

    .MUE {
        color: #f5a10e
    }

    .NBT {
        color: #FFC93D
    }

    .NEO {
        color: #58BF00
    }

    .NEOS {
        color: #1d1d1b
    }

    .NEU {
        color: #2983c0
    }

    .NLG {
        color: #003E7E
    }

    .NMC {
        color: #6787B7
    }

    .NOTE {
        color: #42daff
    }

    .NVC {
        color: #ecab41
    }

    .NXT {
        color: #008FBB
    }

    .OK {
        color: #0165A4
    }

    .OMG {
        color: #1A53F0
    }

    .OMNI {
        color: #18347E
    }

    .OPAL {
        color: #7193AA
    }

    .PART {
        color: #05D5A3
    }

    .PIGGY {
        color: #F27A7A
    }

    .PINK {
        color: #ED31CA
    }

    .PIVX {
        color: #3b2f4d
    }

    .POT {
        color: #105B2F
    }

    .PPC {
        color: #3FA30C
    }

    .QRK {
        color: #22AABF
    }

    .QTUM {
        color: #359BCE
    }

    .RADS {
        color: #924cea
    }

    .RBIES {
        color: #C62436
    }

    .RBT {
        color: #0d4982
    }

    .RBY {
        color: #D31F26
    }

    .RDD {
        color: #ED1C24
    }

    .REP {
        color: #40a2cb
    }

    .RISE {
        color: #43CEA2
    }

    .SALT {
        color: #373C43
    }

    .SAR {
        color: #1B72B8
    }

    .SCOT {
        color: #3498DB
    }

    .SDC {
        color: #981D2D
    }

    .SIA {
        color: #00CBA0
    }

    .SJCX {
        color: #036
    }

    .SLG {
        color: #5A6875
    }

    .SLS {
        color: #1EB549
    }

    .SNRG {
        color: #160363
    }

    .START {
        color: #01AEF0
    }

    .STEEM {
        color: #1A5099
    }

    .STR {
        color: #08B5E5
    }

    .STRAT {
        color: #2398dd
    }

    .SWIFT {
        color: #428BCA
    }

    .SYNC {
        color: #008DD2
    }

    .SYS {
        color: #0098DA
    }

    .TRIG {
        color: #1fbff4
    }

    .TX {
        color: #1F8BCC
    }

    .UBQ {
        color: #00ec8d
    }

    .UNITY {
        color: #ED8527
    }

    .USDT {
        color: #2CA07A
    }

    .VIOR {
        color: #1F52A4
    }

    .VNL {
        color: #404249
    }

    .VPN {
        color: #589700
    }

    .VRC {
        color: #418bca
    }

    .VTC {
        color: #1b5c2e
    }

    .WAVES {
        color: #24aad6
    }

    .XAI {
        color: #2ef99f
    }

    .XBS {
        color: #d3261d
    }

    .XCP {
        color: #EC1550
    }

    .XEM {
        color: #41bf76
    }

    .XMR {
        color: #F60
    }

    .XPM {
        color: #e5b625
    }

    .XRP {
        color: #346AA9
    }

    .XTZ {
        color: #A6DF00
    }

    .XVG {
        color: #42AFB2
    }

    .XZC {
        color: #23B852
    }

    .YBC {
        color: #D6C154
    }

    .ZEC {
        color: #e5a93d
    }

    .ZEIT {
        color: #ACACAC
    }

    .cc.ADA-alt::before {
        content: "\E001"
    }

    .cc.ADA::before {
        content: "\E002"
    }

    .cc.ADC-alt::before {
        content: "\E003"
    }

    .cc.ADC::before {
        content: "\E004"
    }

    .cc.AEON-alt::before {
        content: "\E005"
    }

    .cc.AEON::before {
        content: "\E006"
    }

    .cc.AMP-alt::before {
        content: "\E007"
    }

    .cc.AMP::before {
        content: "\E008"
    }

    .cc.ANC-alt::before {
        content: "\E009"
    }

    .cc.ANC::before {
        content: "\E00A"
    }

    .cc.ARCH-alt::before {
        content: "\E00B"
    }

    .cc.ARCH::before {
        content: "\E00C"
    }

    .cc.ARDR-alt::before {
        content: "\E00D"
    }

    .cc.ARDR::before {
        content: "\E00E"
    }

    .cc.ARK-alt::before {
        content: "\E00F"
    }

    .cc.ARK::before {
        content: "\E010"
    }

    .cc.AUR-alt::before {
        content: "\E011"
    }

    .cc.AUR::before {
        content: "\E012"
    }

    .cc.BANX-alt::before {
        content: "\E013"
    }

    .cc.BANX::before {
        content: "\E014"
    }

    .cc.BAT-alt::before {
        content: "\E015"
    }

    .cc.BAT::before {
        content: "\E016"
    }

    .cc.BAY-alt::before {
        content: "\E017"
    }

    .cc.BAY::before {
        content: "\E018"
    }

    .cc.BC-alt::before {
        content: "\E019"
    }

    .cc.BC::before {
        content: "\E01A"
    }

    .cc.BCH-alt::before {
        content: "\E01B"
    }

    .cc.BCH::before {
        content: "\E01C"
    }

    .cc.BCN-alt::before {
        content: "\E01D"
    }

    .cc.BCN::before {
        content: "\E01E"
    }

    .cc.BFT-alt::before {
        content: "\E01F"
    }

    .cc.BFT::before {
        content: "\E020"
    }

    .cc.BRK-alt::before {
        content: "\E021"
    }

    .cc.BRK::before {
        content: "\E022"
    }

    .cc.BRX-alt::before {
        content: "\E023"
    }

    .cc.BRX::before {
        content: "\E024"
    }

    .cc.BSD-alt::before {
        content: "\E025"
    }

    .cc.BSD::before {
        content: "\E026"
    }

    .cc.BTA::before {
        content: "\E027"
    }

    .cc.BTC-alt::before {
        content: "\E028"
    }

    .cc.BTC::before {
        content: "\E029"
    }

    .cc.BTCD-alt::before {
        content: "\E02A"
    }

    .cc.BTCD::before {
        content: "\E02B"
    }

    .cc.BTM-alt::before {
        content: "\E02C"
    }

    .cc.BTM::before {
        content: "\E02D"
    }

    .cc.BTS-alt::before {
        content: "\E02E"
    }

    .cc.BTS::before {
        content: "\E02F"
    }

    .cc.CLAM-alt::before {
        content: "\E030"
    }

    .cc.CLAM::before {
        content: "\E031"
    }

    .cc.CLOAK-alt::before {
        content: "\E032"
    }

    .cc.CLOAK::before {
        content: "\E033"
    }

    .cc.DAO-alt::before {
        content: "\E034"
    }

    .cc.DAO::before {
        content: "\E035"
    }

    .cc.DASH-alt::before {
        content: "\E036"
    }

    .cc.DASH::before {
        content: "\E037"
    }

    .cc.DCR-alt::before {
        content: "\E038"
    }

    .cc.DCR::before {
        content: "\E039"
    }

    .cc.DCT-alt::before {
        content: "\E03A"
    }

    .cc.DCT::before {
        content: "\E03B"
    }

    .cc.DGB-alt::before {
        content: "\E03C"
    }

    .cc.DGB::before {
        content: "\E03D"
    }

    .cc.DGD::before {
        content: "\E03E"
    }

    .cc.DGX::before {
        content: "\E03F"
    }

    .cc.DMD-alt::before {
        content: "\E040"
    }

    .cc.DMD::before {
        content: "\E041"
    }

    .cc.DOGE-alt::before {
        content: "\E042"
    }

    .cc.DOGE::before {
        content: "\E043"
    }

    .cc.EMC-alt::before {
        content: "\E044"
    }

    .cc.EMC::before {
        content: "\E045"
    }

    .cc.EOS-alt::before {
        content: "\E046"
    }

    .cc.EOS::before {
        content: "\E047"
    }

    .cc.ERC-alt::before {
        content: "\E048"
    }

    .cc.ERC::before {
        content: "\E049"
    }

    .cc.ETC-alt::before {
        content: "\E04A"
    }

    .cc.ETC::before {
        content: "\E04B"
    }

    .cc.ETH-alt::before {
        content: "\E04C"
    }

    .cc.ETH::before {
        content: "\E04D"
    }

    .cc.FC2-alt::before {
        content: "\E04E"
    }

    .cc.FC2::before {
        content: "\E04F"
    }

    .cc.FCT-alt::before {
        content: "\E050"
    }

    .cc.FCT::before {
        content: "\E051"
    }

    .cc.FLO-alt::before {
        content: "\E052"
    }

    .cc.FLO::before {
        content: "\E053"
    }

    .cc.FRK-alt::before {
        content: "\E054"
    }

    .cc.FRK::before {
        content: "\E055"
    }

    .cc.FTC-alt::before {
        content: "\E056"
    }

    .cc.FTC::before {
        content: "\E057"
    }

    .cc.GAME-alt::before {
        content: "\E058"
    }

    .cc.GAME::before {
        content: "\E059"
    }

    .cc.GBYTE-alt::before {
        content: "\E05A"
    }

    .cc.GBYTE::before {
        content: "\E05B"
    }

    .cc.GDC-alt::before {
        content: "\E05C"
    }

    .cc.GDC::before {
        content: "\E05D"
    }

    .cc.GEMZ-alt::before {
        content: "\E05E"
    }

    .cc.GEMZ::before {
        content: "\E05F"
    }

    .cc.GLD-alt::before {
        content: "\E060"
    }

    .cc.GLD::before {
        content: "\E061"
    }

    .cc.GNO-alt::before {
        content: "\E062"
    }

    .cc.GNO::before {
        content: "\E063"
    }

    .cc.GNT-alt::before {
        content: "\E064"
    }

    .cc.GNT::before {
        content: "\E065"
    }

    .cc.GOLOS-alt::before {
        content: "\E066"
    }

    .cc.GOLOS::before {
        content: "\E067"
    }

    .cc.GRC-alt::before {
        content: "\E068"
    }

    .cc.GRC::before {
        content: "\E069"
    }

    .cc.GRS::before {
        content: "\E06A"
    }

    .cc.HEAT-alt::before {
        content: "\E06B"
    }

    .cc.HEAT::before {
        content: "\E06C"
    }

    .cc.ICN-alt::before {
        content: "\E06D"
    }

    .cc.ICN::before {
        content: "\E06E"
    }

    .cc.IFC-alt::before {
        content: "\E06F"
    }

    .cc.IFC::before {
        content: "\E070"
    }

    .cc.INCNT-alt::before {
        content: "\E071"
    }

    .cc.INCNT::before {
        content: "\E072"
    }

    .cc.IOC-alt::before {
        content: "\E073"
    }

    .cc.IOC::before {
        content: "\E074"
    }

    .cc.IOTA-alt::before {
        content: "\E075"
    }

    .cc.IOTA::before {
        content: "\E076"
    }

    .cc.JBS-alt::before {
        content: "\E077"
    }

    .cc.JBS::before {
        content: "\E078"
    }

    .cc.KMD-alt::before {
        content: "\E079"
    }

    .cc.KMD::before {
        content: "\E07A"
    }

    .cc.KOBO::before {
        content: "\E07B"
    }

    .cc.KORE-alt::before {
        content: "\E07C"
    }

    .cc.KORE::before {
        content: "\E07D"
    }

    .cc.LBC-alt::before {
        content: "\E07E"
    }

    .cc.LBC::before {
        content: "\E07F"
    }

    .cc.LDOGE-alt::before {
        content: "\E080"
    }

    .cc.LDOGE::before {
        content: "\E081"
    }

    .cc.LSK-alt::before {
        content: "\E082"
    }

    .cc.LSK::before {
        content: "\E083"
    }

    .cc.LTC-alt::before {
        content: "\E084"
    }

    .cc.LTC::before {
        content: "\E085"
    }

    .cc.MAID-alt::before {
        content: "\E086"
    }

    .cc.MAID::before {
        content: "\E087"
    }

    .cc.MCO-alt::before {
        content: "\E088"
    }

    .cc.MCO::before {
        content: "\E089"
    }

    .cc.MINT-alt::before {
        content: "\E08A"
    }

    .cc.MINT::before {
        content: "\E08B"
    }

    .cc.MONA-alt::before {
        content: "\E08C"
    }

    .cc.MONA::before {
        content: "\E08D"
    }

    .cc.MRC::before {
        content: "\E08E"
    }

    .cc.MSC-alt::before {
        content: "\E08F"
    }

    .cc.MSC::before {
        content: "\E090"
    }

    .cc.MTR-alt::before {
        content: "\E091"
    }

    .cc.MTR::before {
        content: "\E092"
    }

    .cc.MUE-alt::before {
        content: "\E093"
    }

    .cc.MUE::before {
        content: "\E094"
    }

    .cc.NBT::before {
        content: "\E095"
    }

    .cc.NEO-alt::before {
        content: "\E096"
    }

    .cc.NEO::before {
        content: "\E097"
    }

    .cc.NEOS-alt::before {
        content: "\E098"
    }

    .cc.NEOS::before {
        content: "\E099"
    }

    .cc.NEU-alt::before {
        content: "\E09A"
    }

    .cc.NEU::before {
        content: "\E09B"
    }

    .cc.NLG-alt::before {
        content: "\E09C"
    }

    .cc.NLG::before {
        content: "\E09D"
    }

    .cc.NMC-alt::before {
        content: "\E09E"
    }

    .cc.NMC::before {
        content: "\E09F"
    }

    .cc.NOTE-alt::before {
        content: "\E0A0"
    }

    .cc.NOTE::before {
        content: "\E0A1"
    }

    .cc.NVC-alt::before {
        content: "\E0A2"
    }

    .cc.NVC::before {
        content: "\E0A3"
    }

    .cc.NXT-alt::before {
        content: "\E0A4"
    }

    .cc.NXT::before {
        content: "\E0A5"
    }

    .cc.OK-alt::before {
        content: "\E0A6"
    }

    .cc.OK::before {
        content: "\E0A7"
    }

    .cc.OMG-alt::before {
        content: "\E0A8"
    }

    .cc.OMG::before {
        content: "\E0A9"
    }

    .cc.OMNI-alt::before {
        content: "\E0AA"
    }

    .cc.OMNI::before {
        content: "\E0AB"
    }

    .cc.OPAL-alt::before {
        content: "\E0AC"
    }

    .cc.OPAL::before {
        content: "\E0AD"
    }

    .cc.PART-alt::before {
        content: "\E0AE"
    }

    .cc.PART::before {
        content: "\E0AF"
    }

    .cc.PIGGY-alt::before {
        content: "\E0B0"
    }

    .cc.PIGGY::before {
        content: "\E0B1"
    }

    .cc.PINK-alt::before {
        content: "\E0B2"
    }

    .cc.PINK::before {
        content: "\E0B3"
    }

    .cc.PIVX-alt::before {
        content: "\E0B4"
    }

    .cc.PIVX::before {
        content: "\E0B5"
    }

    .cc.POT-alt::before {
        content: "\E0B6"
    }

    .cc.POT::before {
        content: "\E0B7"
    }

    .cc.PPC-alt::before {
        content: "\E0B8"
    }

    .cc.PPC::before {
        content: "\E0B9"
    }

    .cc.QRK-alt::before {
        content: "\E0BA"
    }

    .cc.QRK::before {
        content: "\E0BB"
    }

    .cc.QTUM-alt::before {
        content: "\E0BC"
    }

    .cc.QTUM::before {
        content: "\E0BD"
    }

    .cc.RADS-alt::before {
        content: "\E0BE"
    }

    .cc.RADS::before {
        content: "\E0BF"
    }

    .cc.RBIES-alt::before {
        content: "\E0C0"
    }

    .cc.RBIES::before {
        content: "\E0C1"
    }

    .cc.RBT-alt::before {
        content: "\E0C2"
    }

    .cc.RBT::before {
        content: "\E0C3"
    }

    .cc.RBY-alt::before {
        content: "\E0C4"
    }

    .cc.RBY::before {
        content: "\E0C5"
    }

    .cc.RDD-alt::before {
        content: "\E0C6"
    }

    .cc.RDD::before {
        content: "\E0C7"
    }

    .cc.REP-alt::before {
        content: "\E0C8"
    }

    .cc.REP::before {
        content: "\E0C9"
    }

    .cc.RISE-alt::before {
        content: "\E0CA"
    }

    .cc.RISE::before {
        content: "\E0CB"
    }

    .cc.SALT-alt::before {
        content: "\E0CC"
    }

    .cc.SALT::before {
        content: "\E0CD"
    }

    .cc.SAR-alt::before {
        content: "\E0CE"
    }

    .cc.SAR::before {
        content: "\E0CF"
    }

    .cc.SCOT-alt::before {
        content: "\E0D0"
    }

    .cc.SCOT::before {
        content: "\E0D1"
    }

    .cc.SDC-alt::before {
        content: "\E0D2"
    }

    .cc.SDC::before {
        content: "\E0D3"
    }

    .cc.SIA-alt::before {
        content: "\E0D4"
    }

    .cc.SIA::before {
        content: "\E0D5"
    }

    .cc.SJCX-alt::before {
        content: "\E0D6"
    }

    .cc.SJCX::before {
        content: "\E0D7"
    }

    .cc.SLG-alt::before {
        content: "\E0D8"
    }

    .cc.SLG::before {
        content: "\E0D9"
    }

    .cc.SLS-alt::before {
        content: "\E0DA"
    }

    .cc.SLS::before {
        content: "\E0DB"
    }

    .cc.SNRG-alt::before {
        content: "\E0DC"
    }

    .cc.SNRG::before {
        content: "\E0DD"
    }

    .cc.START-alt::before {
        content: "\E0DE"
    }

    .cc.START::before {
        content: "\E0DF"
    }

    .cc.STEEM-alt::before {
        content: "\E0E0"
    }

    .cc.STEEM::before {
        content: "\E0E1"
    }

    .cc.STR-alt::before {
        content: "\E0E2"
    }

    .cc.STR::before {
        content: "\E0E3"
    }

    .cc.STRAT-alt::before {
        content: "\E0E4"
    }

    .cc.STRAT::before {
        content: "\E0E5"
    }

    .cc.SWIFT-alt::before {
        content: "\E0E6"
    }

    .cc.SWIFT::before {
        content: "\E0E7"
    }

    .cc.SYNC-alt::before {
        content: "\E0E8"
    }

    .cc.SYNC::before {
        content: "\E0E9"
    }

    .cc.SYS-alt::before {
        content: "\E0EA"
    }

    .cc.SYS::before {
        content: "\E0EB"
    }

    .cc.TRIG-alt::before {
        content: "\E0EC"
    }

    .cc.TRIG::before {
        content: "\E0ED"
    }

    .cc.TX-alt::before {
        content: "\E0EE"
    }

    .cc.TX::before {
        content: "\E0EF"
    }

    .cc.UBQ-alt::before {
        content: "\E0F0"
    }

    .cc.UBQ::before {
        content: "\E0F1"
    }

    .cc.UNITY-alt::before {
        content: "\E0F2"
    }

    .cc.UNITY::before {
        content: "\E0F3"
    }

    .cc.USDT-alt::before {
        content: "\E0F4"
    }

    .cc.USDT::before {
        content: "\E0F5"
    }

    .cc.VIOR-alt::before {
        content: "\E0F6"
    }

    .cc.VIOR::before {
        content: "\E0F7"
    }

    .cc.VNL-alt::before {
        content: "\E0F8"
    }

    .cc.VNL::before {
        content: "\E0F9"
    }

    .cc.VPN-alt::before {
        content: "\E0FA"
    }

    .cc.VPN::before {
        content: "\E0FB"
    }

    .cc.VRC-alt::before {
        content: "\E0FC"
    }

    .cc.VRC::before {
        content: "\E0FD"
    }

    .cc.VTC-alt::before {
        content: "\E0FE"
    }

    .cc.VTC::before {
        content: "\E0FF"
    }

    .cc.WAVES-alt::before {
        content: "\E100"
    }

    .cc.WAVES::before {
        content: "\E101"
    }

    .cc.XAI-alt::before {
        content: "\E102"
    }

    .cc.XAI::before {
        content: "\E103"
    }

    .cc.XBS-alt::before {
        content: "\E104"
    }

    .cc.XBS::before {
        content: "\E105"
    }

    .cc.XCP-alt::before {
        content: "\E106"
    }

    .cc.XCP::before {
        content: "\E107"
    }

    .cc.XEM-alt::before {
        content: "\E108"
    }

    .cc.XEM::before {
        content: "\E109"
    }

    .cc.XMR::before {
        content: "\E10A"
    }

    .cc.XPM-alt::before {
        content: "\E10B"
    }

    .cc.XPM::before {
        content: "\E10C"
    }

    .cc.XRP-alt::before {
        content: "\E10D"
    }

    .cc.XRP::before {
        content: "\E10E"
    }

    .cc.XTZ-alt::before {
        content: "\E10F"
    }

    .cc.XTZ::before {
        content: "\E110"
    }

    .cc.XVG-alt::before {
        content: "\E111"
    }

    .cc.XVG::before {
        content: "\E112"
    }

    .cc.XZC-alt::before {
        content: "\E113"
    }

    .cc.XZC::before {
        content: "\E114"
    }

    .cc.YBC-alt::before {
        content: "\E115"
    }

    .cc.YBC::before {
        content: "\E116"
    }

    .cc.ZEC-alt::before {
        content: "\E117"
    }

    .cc.ZEC::before {
        content: "\E118"
    }

    .cc.ZEIT-alt::before {
        content: "\E119"
    }

    .cc.ZEIT::before {
        content: "\E11A"
    }

    body[data-theme=dark] {
        color: #b2b9bf;
        background: #212529
    }

    body[data-theme=dark] a.link {
        color: #e9ecef
    }

    body[data-theme=dark] a.link:focus,
    body[data-theme=dark] a.link:hover {
        color: #2962FF
    }

    body[data-theme=dark] .bg-white {
        background-color: #000!important
    }

    body[data-theme=dark] .bg-dark {
        background-color: #6c757d!important
    }

    body[data-theme=dark] .text-dark {
        color: #e9ecef!important
    }

    body[data-theme=dark] .badge-light {
        background-color: #343a40;
        color: #b2b9bf
    }

    body[data-theme=dark] .btn-light {
        background-color: #343a40;
        border-color: #343a40;
        color: #b2b9bf
    }

    body[data-theme=dark] .custom-control-label::before {
        background-color: #6c757d
    }

    body[data-theme=dark] .card,
    body[data-theme=dark] .css-bar:after,
    body[data-theme=dark] .custom-file-label,
    body[data-theme=dark] .custom-select,
    body[data-theme=dark] .dtp>.dtp-content,
    body[data-theme=dark] .form-control,
    body[data-theme=dark] .jsgrid-header-row>.jsgrid-header-cell,
    body[data-theme=dark] .jsgrid-row>.jsgrid-cell,
    body[data-theme=dark] .list-group-item,
    body[data-theme=dark] .lobilists .lobilist,
    body[data-theme=dark] .modal-content,
    body[data-theme=dark] .nav-tabs .nav-item.show .nav-link,
    body[data-theme=dark] .nav-tabs .nav-link.active,
    body[data-theme=dark] .note-editor.note-frame .note-editing-area .note-editable,
    body[data-theme=dark] .note-editor.note-frame .note-statusbar,
    body[data-theme=dark] .page-item.disabled .page-link,
    body[data-theme=dark] .page-link,
    body[data-theme=dark] .select2-container--classic .select2-selection--single,
    body[data-theme=dark] .select2-container--default .select2-selection--multiple,
    body[data-theme=dark] .select2-container--default .select2-selection--single {
        background-color: #243242
    }

    body[data-theme=dark] .dropdown-item:focus,
    body[data-theme=dark] .dropdown-item:hover,
    body[data-theme=dark] .dropzone,
    body[data-theme=dark] .mailbox .message-center .message-item:hover,
    body[data-theme=dark] .picker__button--clear,
    body[data-theme=dark] .picker__button--close,
    body[data-theme=dark] .picker__button--today {
        background: #243242
    }

    body[data-theme=dark] .card-footer,
    body[data-theme=dark] .left-part,
    body[data-theme=dark] .right-part.mail-compose,
    body[data-theme=dark] .right-part.mail-details,
    body[data-theme=dark] .right-part.mail-list,
    body[data-theme=dark] .select2-dropdown,
    body[data-theme=dark] .typeahead.form-control {
        background-color: #243242!important
    }

    body[data-theme=dark] #main-wrapper,
    body[data-theme=dark] .breadcrumb,
    body[data-theme=dark] .cke_toolbar_separator,
    body[data-theme=dark] .dropdown-menu,
    body[data-theme=dark] .jumbotron,
    body[data-theme=dark] .page-wrapper,
    body[data-theme=dark] .progress,
    body[data-theme=dark] .wizard-content .wizard>.steps .step,
    body[data-theme=dark] .wizard:not(.wizard-circle)>.actions .disabled a,
    body[data-theme=dark] .wizard:not(.wizard-circle)>.actions .disabled a:active,
    body[data-theme=dark] .wizard:not(.wizard-circle)>.actions .disabled a:hover,
    body[data-theme=dark] .wizard:not(.wizard-circle)>.content,
    body[data-theme=dark] .wizard:not(.wizard-circle)>.steps .disabled a,
    body[data-theme=dark] .wizard:not(.wizard-circle)>.steps .disabled a:active,
    body[data-theme=dark] .wizard:not(.wizard-circle)>.steps .disabled a:hover {
        background-color: #2c3b4c
    }

    body[data-theme=dark] .daterangepicker,
    body[data-theme=dark] .daterangepicker .calendar-table,
    body[data-theme=dark] .fc-toolbar .fc-button.fc-state-active,
    body[data-theme=dark] .fc-unthemed td.fc-today,
    body[data-theme=dark] .picker--time .picker__box,
    body[data-theme=dark] .picker__box,
    body[data-theme=dark] .picker__list-item {
        background: #343a40
    }

    body[data-theme=dark] .fc-unthemed .fc-divider,
    body[data-theme=dark] .fc-unthemed .fc-list-heading td,
    body[data-theme=dark] .fc-unthemed .fc-popover .fc-header {
        background: #b2b9bf
    }

    body[data-theme=dark] .daterangepicker td.off,
    body[data-theme=dark] .daterangepicker td.off.end-date,
    body[data-theme=dark] .daterangepicker td.off.in-range,
    body[data-theme=dark] .daterangepicker td.off.start-date {
        background: #000
    }

    body[data-theme=dark] .timeline:before {
        background-color: #343a40
    }

    body[data-theme=dark] .cd-horizontal-timeline .events {
        background: #343a40
    }

    body[data-theme=dark] .bootstrap-switch .bootstrap-switch-label,
    body[data-theme=dark] .cd-horizontal-timeline .events a::after,
    body[data-theme=dark] .cke_top,
    body[data-theme=dark] .css-bar>i,
    body[data-theme=dark] .dp-off,
    body[data-theme=dark] .footable-odd,
    body[data-theme=dark] .jsgrid-alt-row>.jsgrid-cell,
    body[data-theme=dark] .jsgrid-filter-row>.jsgrid-cell,
    body[data-theme=dark] .mce-menu-item.mce-disabled,
    body[data-theme=dark] .mce-menu-item.mce-disabled:hover,
    body[data-theme=dark] .noUi-target,
    body[data-theme=dark] .noUi-tooltip,
    body[data-theme=dark] .striped-rows .row:nth-child(odd),
    body[data-theme=dark] div.mce-edit-area {
        background: #212529!important
    }

    body[data-theme=dark] .bg-light,
    body[data-theme=dark] .chat-list .chat-item .chat-content .box.bg-light-info,
    body[data-theme=dark] .custom-file-label::after,
    body[data-theme=dark] .customizer,
    body[data-theme=dark] .f-icon:hover,
    body[data-theme=dark] .if-icon:hover,
    body[data-theme=dark] .input-group-text,
    body[data-theme=dark] .m-icon:hover,
    body[data-theme=dark] .mce-panel,
    body[data-theme=dark] .myadmin-dd .dd-list .dd-item .dd-handle,
    body[data-theme=dark] .myadmin-dd-empty .dd-list .dd3-content,
    body[data-theme=dark] .myadmin-dd-empty .dd-list .dd3-handle,
    body[data-theme=dark] .sl-icon:hover,
    body[data-theme=dark] .t-icon:hover,
    body[data-theme=dark] .table .thead-light th,
    body[data-theme=dark] .table-hover tbody tr:hover,
    body[data-theme=dark] .w-icon:hover,
    body[data-theme=dark] pre[class*=language-] {
        background-color: #212d3b!important
    }

    body[data-theme=dark] .timeline>.timeline-item>.timeline-panel:after {
        border-right: #243242;
        border-left: #243242
    }

    body[data-theme=dark] .mce-menubar .mce-menubtn.mce-active,
    body[data-theme=dark] .mce-menubar .mce-menubtn:focus,
    body[data-theme=dark] .mce-menubar .mce-menubtn:hover {
        background: #343a40;
        border-color: #243242
    }

    body[data-theme=dark] .mce-btn {
        background: #343a40;
        text-shadow: none
    }

    .dropdown-menu,
    .form-control,
    .modal-content,
    .popover,
    .toast,
    .toast-header {
        background-clip: padding-box
    }

    body[data-theme=dark] .breadcrumb-item.active,
    body[data-theme=dark] .chat-list .chat-item .chat-content .box.bg-light-info,
    body[data-theme=dark] .cke_reset_all,
    body[data-theme=dark] .cke_reset_all *,
    body[data-theme=dark] .cke_reset_all a,
    body[data-theme=dark] .cke_reset_all textarea,
    body[data-theme=dark] .custom-file-label::after,
    body[data-theme=dark] .custom-select,
    body[data-theme=dark] .dropdown-item,
    body[data-theme=dark] .dropdown-menu,
    body[data-theme=dark] .dtp .dtp-picker-time>a,
    body[data-theme=dark] .dtp table.dtp-picker-days tr>td>a,
    body[data-theme=dark] .form-control,
    body[data-theme=dark] .input-group-text,
    body[data-theme=dark] .lobilists .btn-link,
    body[data-theme=dark] .mce-btn button,
    body[data-theme=dark] .mce-ico,
    body[data-theme=dark] .mce-menubar .mce-menubtn button span,
    body[data-theme=dark] .nav-tabs .nav-item.show .nav-link,
    body[data-theme=dark] .nav-tabs .nav-link.active,
    body[data-theme=dark] .nav-tabs .nav-link:focus,
    body[data-theme=dark] .nav-tabs .nav-link:hover,
    body[data-theme=dark] .noUi-tooltip,
    body[data-theme=dark] .note-editor.note-frame .note-editing-area .note-editable,
    body[data-theme=dark] .page-wrapper,
    body[data-theme=dark] .picker,
    body[data-theme=dark] .select2-container--classic .select2-selection--single,
    body[data-theme=dark] .select2-container--default .select2-selection--multiple,
    body[data-theme=dark] .select2-container--default .select2-selection--single,
    body[data-theme=dark] .select2-container--default .select2-selection--single .select2-selection__arrow,
    body[data-theme=dark] .select2-container--default .select2-selection--single .select2-selection__rendered,
    body[data-theme=dark] .table .thead-light th,
    body[data-theme=dark] ul.list-style-none li a {
        color: #b2b9bf
    }

    body[data-theme=dark] .lobilists .lobilist-item-title,
    body[data-theme=dark] .mailbox .message-center .message-item .message-title,
    body[data-theme=dark] .wizard-content .wizard>.steps>ul>li.current>a {
        color: #fff
    }

    body[data-theme=dark] .b-form .row,
    body[data-theme=dark] .bootstrap-switch,
    body[data-theme=dark] .border,
    body[data-theme=dark] .border-bottom,
    body[data-theme=dark] .border-left,
    body[data-theme=dark] .border-right,
    body[data-theme=dark] .border-top,
    body[data-theme=dark] .card-group .card,
    body[data-theme=dark] .cd-horizontal-timeline .events a::after,
    body[data-theme=dark] .cd-timeline-navigation a,
    body[data-theme=dark] .cke_chrome,
    body[data-theme=dark] .cke_toolgroup a.cke_button.cke_button_disabled:hover:last-child:after,
    body[data-theme=dark] .cke_toolgroup a.cke_button:last-child:after,
    body[data-theme=dark] .custom-file-label,
    body[data-theme=dark] .custom-file-label::after,
    body[data-theme=dark] .custom-select,
    body[data-theme=dark] .datepaginator .pagination li a,
    body[data-theme=dark] .datepaginator-lg .pagination li a,
    body[data-theme=dark] .datepaginator-sm .pagination li a,
    body[data-theme=dark] .daterangepicker,
    body[data-theme=dark] .daterangepicker .calendar-table,
    body[data-theme=dark] .daterangepicker .drp-buttons,
    body[data-theme=dark] .dropdown-divider,
    body[data-theme=dark] .dropdown-menu,
    body[data-theme=dark] .dropzone,
    body[data-theme=dark] .e-campaign .c-cost,
    body[data-theme=dark] .form-control,
    body[data-theme=dark] .input-group-text,
    body[data-theme=dark] .jsgrid-edit-row>.jsgrid-cell,
    body[data-theme=dark] .jsgrid-filter-row>.jsgrid-cell,
    body[data-theme=dark] .jsgrid-grid-body,
    body[data-theme=dark] .jsgrid-grid-header,
    body[data-theme=dark] .jsgrid-header-row>.jsgrid-header-cell,
    body[data-theme=dark] .jsgrid-insert-row>.jsgrid-cell,
    body[data-theme=dark] .jsgrid-pager-current-page,
    body[data-theme=dark] .jsgrid-pager-nav-button a,
    body[data-theme=dark] .jsgrid-pager-page a,
    body[data-theme=dark] .left-part,
    body[data-theme=dark] .list-group-item,
    body[data-theme=dark] .lobilists .lobilist,
    body[data-theme=dark] .lobilists .lobilist-footer,
    body[data-theme=dark] .lobilists .lobilist-form-footer,
    body[data-theme=dark] .lobilists .lobilist-item,
    body[data-theme=dark] .lobilists .lobilist-item .drag-handler,
    body[data-theme=dark] .mailbox .message-center .message-item,
    body[data-theme=dark] .mailbox .nav-link,
    body[data-theme=dark] .mce-btn-group:not(:first-child),
    body[data-theme=dark] .mce-btn:active,
    body[data-theme=dark] .mce-btn:hover,
    body[data-theme=dark] .mce-menubar,
    body[data-theme=dark] .mce-panel,
    body[data-theme=dark] .mce-splitbtn:hover .mce-open,
    body[data-theme=dark] .modal-footer,
    body[data-theme=dark] .modal-header,
    body[data-theme=dark] .nav-tabs,
    body[data-theme=dark] .nav-tabs .nav-item.show .nav-link,
    body[data-theme=dark] .nav-tabs .nav-link.active,
    body[data-theme=dark] .nav-tabs .nav-link:focus,
    body[data-theme=dark] .nav-tabs .nav-link:hover,
    body[data-theme=dark] .noUi-tooltip,
    body[data-theme=dark] .note-editor.note-frame,
    body[data-theme=dark] .note-editor.note-frame .note-statusbar,
    body[data-theme=dark] .page-link,
    body[data-theme=dark] .picker__button--clear,
    body[data-theme=dark] .picker__button--close,
    body[data-theme=dark] .picker__button--today,
    body[data-theme=dark] .picker__list-item,
    body[data-theme=dark] .profiletimeline,
    body[data-theme=dark] .ql-container.ql-snow,
    body[data-theme=dark] .ql-toolbar.ql-snow,
    body[data-theme=dark] .r-separator .form-group,
    body[data-theme=dark] .select2-container--classic .select2-selection--single,
    body[data-theme=dark] .select2-container--default .select2-selection--multiple,
    body[data-theme=dark] .select2-container--default .select2-selection--single,
    body[data-theme=dark] .select2-dropdown,
    body[data-theme=dark] .table td,
    body[data-theme=dark] .table th,
    body[data-theme=dark] .table-bordered,
    body[data-theme=dark] .table-bordered td,
    body[data-theme=dark] .table-bordered th,
    body[data-theme=dark] .timeline>.timeline-item>.timeline-panel,
    body[data-theme=dark] .wizard-content .wizard.wizard-circle>.steps .step,
    body[data-theme=dark] blockquote,
    body[data-theme=dark] pre[class*=language-] {
        border-color: #243242!important
    }

    body[data-theme=dark] .wizard-content .wizard>.steps>ul>li.current .step {
        border-color: #2962FF!important;
        background-color: #000
    }

    body[data-theme=dark] .wizard-content .wizard.wizard-circle>.steps>ul>li.current:after,
    body[data-theme=dark] .wizard-content .wizard.wizard-circle>.steps>ul>li.current~li:after,
    body[data-theme=dark] .wizard-content .wizard.wizard-circle>.steps>ul>li.current~li:before {
        background-color: #243242
    }

    a,
    body[data-theme=dark] .wizard-content .wizard.vertical>.steps>ul>li.current:after,
    body[data-theme=dark] .wizard-content .wizard.vertical>.steps>ul>li.current:before,
    body[data-theme=dark] .wizard-content .wizard.vertical>.steps>ul>li.current~li:after,
    body[data-theme=dark] .wizard-content .wizard.vertical>.steps>ul>li.current~li:before,
    body[data-theme=dark] .wizard-content .wizard.vertical>.steps>ul>li:after,
    body[data-theme=dark] .wizard-content .wizard.vertical>.steps>ul>li:before {
        background-color: transparent
    }

    body[data-theme=dark] .custom-select.is-valid,
    body[data-theme=dark] .form-control.is-valid,
    body[data-theme=dark] .was-validated .custom-select:valid,
    body[data-theme=dark] .was-validated .form-control:valid {
        border-color: #5ac146!important
    }

    body[data-theme=dark] .custom-select.is-invalid,
    body[data-theme=dark] .form-control.is-invalid,
    body[data-theme=dark] .was-validated .custom-select:invalid,
    body[data-theme=dark] .was-validated .form-control:invalid {
        border-color: #fa5838!important
    }

    body[data-theme=dark] .ct-label {
        fill: #b2b9bf;
        color: #b2b9bf
    }

    body[data-theme=dark] .ct-grid {
        stroke: #212d3b
    }


    /*!
 * Bootstrap v4.3.1 (https://getbootstrap.com/)
 * Copyright 2011-2019 The Bootstrap Authors
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */

    :root {
        --gray-dark: #343a40;
        --blue: #137eff;
        --indigo: #6610f2;
        --pink: #e83e8c;
        --red: #fa5838;
        --yellow: #ffbc34;
        --green: #5ac146;
        --teal: #20c997;
        --white: #fff;
        --gray: #6c757d;
        --primary: #7460ee;
        --secondary: #6c757d;
        --success: #5ac146;
        --info: #137eff;
        --warning: #ffbc34;
        --danger: #fa5838;
        --light: #f6f8f9;
        --dark: #343a40;
        --cyan: #4fc3f7;
        --orange: #fb8c00;
        --purple: #8b5edd;
        --breakpoint-xs: 0;
        --breakpoint-sm: 576px;
        --breakpoint-md: 768px;
        --breakpoint-lg: 992px;
        --breakpoint-xl: 1600px;
        --font-family-sans-serif: "Rubik", sans-serif;
        --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
    }

    html {
        font-family: sans-serif;
        line-height: 1.15;
        -webkit-text-size-adjust: 100%
    }

    body {
        font-family: Rubik, sans-serif;
        font-size: .875rem;
        font-weight: 400;
        line-height: 1.5;
        background-color: #f2f4f5
    }

    [tabindex="-1"]:focus {
        outline: 0!important
    }

    abbr[data-original-title],
    abbr[title] {
        text-decoration: underline;
        text-decoration: underline dotted;
        cursor: help;
        border-bottom: 0;
        text-decoration-skip-ink: none
    }

    .btn-link,
    .btn:hover,
    a {
        text-decoration: none
    }

    [type=button]:not(:disabled),
    [type=reset]:not(:disabled),
    [type=submit]:not(:disabled),
    button:not(:disabled),
    summary {
        cursor: pointer
    }

    address {
        font-style: normal
    }

    ol ol,
    ol ul,
    ul ol,
    ul ul {
        margin-bottom: 0
    }

    dt {
        font-weight: 700
    }

    dd {
        margin-left: 0
    }

    blockquote,
    figure {
        margin: 0 0 1rem
    }

    b,
    strong {
        font-weight: bolder
    }

    small {
        font-size: 80%
    }

    sub,
    sup {
        font-size: 75%;
        line-height: 0;
        vertical-align: baseline
    }

    sub {
        bottom: -.25em
    }

    sup {
        top: -.5em
    }

    a:hover {
        color: #381be7
    }

    a:not([href]):not([tabindex]),
    a:not([href]):not([tabindex]):focus,
    a:not([href]):not([tabindex]):hover {
        color: inherit;
        text-decoration: none
    }

    a:not([href]):not([tabindex]):focus {
        outline: 0
    }

    code,
    kbd,
    pre,
    samp {
        font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        font-size: 1em
    }

    img {
        border-style: none
    }

    svg {
        overflow: hidden
    }

    table {
        border-collapse: collapse
    }

    caption {
        padding-top: 1rem;
        padding-bottom: 1rem;
        color: #afb5c1;
        caption-side: bottom
    }

    th {
        text-align: inherit
    }

    button {
        border-radius: 0
    }

    button:focus {
        outline: dotted 1px;
        outline: -webkit-focus-ring-color auto 5px
    }

    button,
    input,
    optgroup,
    select,
    textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit
    }

    button,
    input {
        overflow: visible
    }

    button,
    select {
        text-transform: none
    }

    select {
        word-wrap: normal
    }

    [type=button],
    [type=reset],
    [type=submit],
    button {
        -webkit-appearance: button
    }

    [type=button]::-moz-focus-inner,
    [type=reset]::-moz-focus-inner,
    [type=submit]::-moz-focus-inner,
    button::-moz-focus-inner {
        padding: 0;
        border-style: none
    }

    input[type=radio],
    input[type=checkbox] {
        box-sizing: border-box;
        padding: 0
    }

    input[type=date],
    input[type=time],
    input[type=datetime-local],
    input[type=month] {
        -webkit-appearance: listbox
    }

    textarea {
        resize: vertical
    }

    fieldset {
        min-width: 0;
        padding: 0;
        margin: 0;
        border: 0
    }

    legend {
        width: 100%;
        max-width: 100%;
        padding: 0;
        margin-bottom: .5rem;
        font-size: 1.5rem;
        color: inherit;
        white-space: normal
    }

    .badge,
    .dropdown-header,
    .dropdown-item,
    .dropdown-toggle,
    .input-group-text,
    .navbar-brand,
    .progress-bar {
        white-space: nowrap
    }

    progress {
        vertical-align: baseline
    }

    [type=number]::-webkit-inner-spin-button,
    [type=number]::-webkit-outer-spin-button {
        height: auto
    }

    [type=search] {
        outline-offset: -2px;
        -webkit-appearance: none
    }

    [type=search]::-webkit-search-decoration {
        -webkit-appearance: none
    }

    ::-webkit-file-upload-button {
        font: inherit;
        -webkit-appearance: button
    }

    .display-1,
    .display-2,
    .display-3,
    .display-4 {
        line-height: 1.2
    }

    summary {
        display: list-item
    }

    template {
        display: none
    }

    [hidden] {
        display: none!important
    }

    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin-bottom: .5rem;
        font-weight: 400;
        line-height: 1.2;
        color: inherit
    }

    .blockquote,
    hr {
        margin-bottom: 1rem
    }

    .display-1,
    .display-2,
    .display-3,
    .display-4,
    .lead {
        font-weight: 300
    }

    .h1,
    h1 {
        font-size: 2.25rem
    }

    .h2,
    h2 {
        font-size: 1.875rem
    }

    .h3,
    h3 {
        font-size: 1.5rem
    }

    .h4,
    h4 {
        font-size: 1.125rem
    }

    .h5,
    h5 {
        font-size: 1rem
    }

    .h6,
    h6 {
        font-size: .875rem
    }

    .lead {
        font-size: 1.09375rem
    }

    .display-1 {
        font-size: 6rem
    }

    .display-2 {
        font-size: 5.5rem
    }

    .display-3 {
        font-size: 4.5rem
    }

    .display-4 {
        font-size: 3.5rem
    }

    hr {
        box-sizing: content-box;
        height: 0;
        overflow: visible;
        margin-top: 1rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, .1)
    }

    .img-fluid,
    .img-thumbnail {
        max-width: 100%;
        height: auto
    }

    .small,
    small {
        font-size: 80%;
        font-weight: 400
    }

    .mark,
    mark {
        padding: .2em;
        background-color: #fcf8e3
    }

    .list-inline,
    .list-unstyled {
        padding-left: 0;
        list-style: none
    }

    .list-inline-item {
        display: inline-block
    }

    .list-inline-item:not(:last-child) {
        margin-right: .5rem
    }

    .initialism {
        font-size: 90%;
        text-transform: uppercase
    }

    .blockquote {
        font-size: 1.09375rem
    }

    .blockquote-footer {
        display: block;
        font-size: 80%;
        color: #6c757d
    }

    .blockquote-footer::before {
        content: "\2014\00A0"
    }

    .img-thumbnail {
        padding: .25rem;
        background-color: #f2f4f5;
        border: 1px solid #dee2e6;
        border-radius: 2px
    }

    .figure {
        display: inline-block
    }

    .figure-img {
        margin-bottom: .5rem;
        line-height: 1
    }

    .figure-caption {
        font-size: 90%;
        color: #6c757d
    }

    code,
    kbd {
        font-size: 87.5%
    }

    a>code,
    pre code {
        color: inherit
    }

    code {
        color: #e83e8c;
        word-break: break-word
    }

    kbd {
        padding: .2rem .4rem;
        color: #fff;
        background-color: #212529;
        border-radius: 1px
    }

    kbd kbd {
        padding: 0;
        font-size: 100%;
        font-weight: 700
    }

    .container,
    .container-fluid {
        padding-right: 10px;
        padding-left: 10px;
        margin-right: auto;
        margin-left: auto;
        width: 100%
    }

    .btn,
    .btn-link,
    .custom-select,
    .dropdown-item,
    .form-control,
    .input-group-text {
        font-weight: 400
    }

    pre {
        display: block;
        font-size: 87.5%;
        color: #212529
    }

    pre code {
        font-size: inherit;
        word-break: normal
    }

    .pre-scrollable {
        max-height: 340px;
        overflow-y: scroll
    }

    @media (min-width:576px) {
        .container {
            max-width: 540px
        }
    }

    @media (min-width:768px) {
        .container {
            max-width: 720px
        }
    }

    @media (min-width:992px) {
        .container {
            max-width: 960px
        }
    }

    @media (min-width:1600px) {
        .container {
            max-width: 1140px
        }
    }

    .col,
    .col-auto {
        max-width: 100%
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -10px;
        margin-left: -10px
    }

    .no-gutters {
        margin-right: 0;
        margin-left: 0
    }

    .no-gutters>.col,
    .no-gutters>[class*=col-] {
        padding-right: 0;
        padding-left: 0
    }

    .col,
    .col-1,
    .col-10,
    .col-11,
    .col-12,
    .col-2,
    .col-3,
    .col-4,
    .col-5,
    .col-6,
    .col-7,
    .col-8,
    .col-9,
    .col-auto,
    .col-lg,
    .col-lg-1,
    .col-lg-10,
    .col-lg-11,
    .col-lg-12,
    .col-lg-2,
    .col-lg-3,
    .col-lg-4,
    .col-lg-5,
    .col-lg-6,
    .col-lg-7,
    .col-lg-8,
    .col-lg-9,
    .col-lg-auto,
    .col-md,
    .col-md-1,
    .col-md-10,
    .col-md-11,
    .col-md-12,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-md-auto,
    .col-sm,
    .col-sm-1,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9,
    .col-sm-auto,
    .col-xl,
    .col-xl-1,
    .col-xl-10,
    .col-xl-11,
    .col-xl-12,
    .col-xl-2,
    .col-xl-3,
    .col-xl-4,
    .col-xl-5,
    .col-xl-6,
    .col-xl-7,
    .col-xl-8,
    .col-xl-9,
    .col-xl-auto {
        position: relative;
        width: 100%;
        padding-right: 10px;
        padding-left: 10px
    }

    .col {
        flex-basis: 0;
        flex-grow: 1
    }

    .col-auto {
        flex: 0 0 auto;
        width: auto
    }

    .col-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%
    }

    .col-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%
    }

    .col-3 {
        flex: 0 0 25%;
        max-width: 25%
    }

    .col-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%
    }

    .col-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%
    }

    .col-6 {
        flex: 0 0 50%;
        max-width: 50%
    }

    .col-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%
    }

    .col-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%
    }

    .col-9 {
        flex: 0 0 75%;
        max-width: 75%
    }

    .col-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%
    }

    .col-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%
    }

    .col-12 {
        flex: 0 0 100%;
        max-width: 100%
    }

    .order-first {
        order: -1
    }

    .order-last {
        order: 13
    }

    .order-0 {
        order: 0
    }

    .order-1 {
        order: 1
    }

    .order-2 {
        order: 2
    }

    .order-3 {
        order: 3
    }

    .order-4 {
        order: 4
    }

    .order-5 {
        order: 5
    }

    .order-6 {
        order: 6
    }

    .order-7 {
        order: 7
    }

    .order-8 {
        order: 8
    }

    .order-9 {
        order: 9
    }

    .order-10 {
        order: 10
    }

    .order-11 {
        order: 11
    }

    .order-12 {
        order: 12
    }

    .offset-1 {
        margin-left: 8.33333%
    }

    .offset-2 {
        margin-left: 16.66667%
    }

    .offset-3 {
        margin-left: 25%
    }

    .offset-4 {
        margin-left: 33.33333%
    }

    .offset-5 {
        margin-left: 41.66667%
    }

    .offset-6 {
        margin-left: 50%
    }

    .offset-7 {
        margin-left: 58.33333%
    }

    .offset-8 {
        margin-left: 66.66667%
    }

    .offset-9 {
        margin-left: 75%
    }

    .offset-10 {
        margin-left: 83.33333%
    }

    .offset-11 {
        margin-left: 91.66667%
    }

    @media (min-width:576px) {
        .col-sm {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%
        }
        .col-sm-auto {
            flex: 0 0 auto;
            width: auto;
            max-width: 100%
        }
        .col-sm-1 {
            flex: 0 0 8.33333%;
            max-width: 8.33333%
        }
        .col-sm-2 {
            flex: 0 0 16.66667%;
            max-width: 16.66667%
        }
        .col-sm-3 {
            flex: 0 0 25%;
            max-width: 25%
        }
        .col-sm-4 {
            flex: 0 0 33.33333%;
            max-width: 33.33333%
        }
        .col-sm-5 {
            flex: 0 0 41.66667%;
            max-width: 41.66667%
        }
        .col-sm-6 {
            flex: 0 0 50%;
            max-width: 50%
        }
        .col-sm-7 {
            flex: 0 0 58.33333%;
            max-width: 58.33333%
        }
        .col-sm-8 {
            flex: 0 0 66.66667%;
            max-width: 66.66667%
        }
        .col-sm-9 {
            flex: 0 0 75%;
            max-width: 75%
        }
        .col-sm-10 {
            flex: 0 0 83.33333%;
            max-width: 83.33333%
        }
        .col-sm-11 {
            flex: 0 0 91.66667%;
            max-width: 91.66667%
        }
        .col-sm-12 {
            flex: 0 0 100%;
            max-width: 100%
        }
        .order-sm-first {
            order: -1
        }
        .order-sm-last {
            order: 13
        }
        .order-sm-0 {
            order: 0
        }
        .order-sm-1 {
            order: 1
        }
        .order-sm-2 {
            order: 2
        }
        .order-sm-3 {
            order: 3
        }
        .order-sm-4 {
            order: 4
        }
        .order-sm-5 {
            order: 5
        }
        .order-sm-6 {
            order: 6
        }
        .order-sm-7 {
            order: 7
        }
        .order-sm-8 {
            order: 8
        }
        .order-sm-9 {
            order: 9
        }
        .order-sm-10 {
            order: 10
        }
        .order-sm-11 {
            order: 11
        }
        .order-sm-12 {
            order: 12
        }
        .offset-sm-0 {
            margin-left: 0
        }
        .offset-sm-1 {
            margin-left: 8.33333%
        }
        .offset-sm-2 {
            margin-left: 16.66667%
        }
        .offset-sm-3 {
            margin-left: 25%
        }
        .offset-sm-4 {
            margin-left: 33.33333%
        }
        .offset-sm-5 {
            margin-left: 41.66667%
        }
        .offset-sm-6 {
            margin-left: 50%
        }
        .offset-sm-7 {
            margin-left: 58.33333%
        }
        .offset-sm-8 {
            margin-left: 66.66667%
        }
        .offset-sm-9 {
            margin-left: 75%
        }
        .offset-sm-10 {
            margin-left: 83.33333%
        }
        .offset-sm-11 {
            margin-left: 91.66667%
        }
    }

    @media (min-width:768px) {
        .col-md {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%
        }
        .col-md-auto {
            flex: 0 0 auto;
            width: auto;
            max-width: 100%
        }
        .col-md-1 {
            flex: 0 0 8.33333%;
            max-width: 8.33333%
        }
        .col-md-2 {
            flex: 0 0 16.66667%;
            max-width: 16.66667%
        }
        .col-md-3 {
            flex: 0 0 25%;
            max-width: 25%
        }
        .col-md-4 {
            flex: 0 0 33.33333%;
            max-width: 33.33333%
        }
        .col-md-5 {
            flex: 0 0 41.66667%;
            max-width: 41.66667%
        }
        .col-md-6 {
            flex: 0 0 50%;
            max-width: 50%
        }
        .col-md-7 {
            flex: 0 0 58.33333%;
            max-width: 58.33333%
        }
        .col-md-8 {
            flex: 0 0 66.66667%;
            max-width: 66.66667%
        }
        .col-md-9 {
            flex: 0 0 75%;
            max-width: 75%
        }
        .col-md-10 {
            flex: 0 0 83.33333%;
            max-width: 83.33333%
        }
        .col-md-11 {
            flex: 0 0 91.66667%;
            max-width: 91.66667%
        }
        .col-md-12 {
            flex: 0 0 100%;
            max-width: 100%
        }
        .order-md-first {
            order: -1
        }
        .order-md-last {
            order: 13
        }
        .order-md-0 {
            order: 0
        }
        .order-md-1 {
            order: 1
        }
        .order-md-2 {
            order: 2
        }
        .order-md-3 {
            order: 3
        }
        .order-md-4 {
            order: 4
        }
        .order-md-5 {
            order: 5
        }
        .order-md-6 {
            order: 6
        }
        .order-md-7 {
            order: 7
        }
        .order-md-8 {
            order: 8
        }
        .order-md-9 {
            order: 9
        }
        .order-md-10 {
            order: 10
        }
        .order-md-11 {
            order: 11
        }
        .order-md-12 {
            order: 12
        }
        .offset-md-0 {
            margin-left: 0
        }
        .offset-md-1 {
            margin-left: 8.33333%
        }
        .offset-md-2 {
            margin-left: 16.66667%
        }
        .offset-md-3 {
            margin-left: 25%
        }
        .offset-md-4 {
            margin-left: 33.33333%
        }
        .offset-md-5 {
            margin-left: 41.66667%
        }
        .offset-md-6 {
            margin-left: 50%
        }
        .offset-md-7 {
            margin-left: 58.33333%
        }
        .offset-md-8 {
            margin-left: 66.66667%
        }
        .offset-md-9 {
            margin-left: 75%
        }
        .offset-md-10 {
            margin-left: 83.33333%
        }
        .offset-md-11 {
            margin-left: 91.66667%
        }
    }

    @media (min-width:992px) {
        .col-lg {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%
        }
        .col-lg-auto {
            flex: 0 0 auto;
            width: auto;
            max-width: 100%
        }
        .col-lg-1 {
            flex: 0 0 8.33333%;
            max-width: 8.33333%
        }
        .col-lg-2 {
            flex: 0 0 16.66667%;
            max-width: 16.66667%
        }
        .col-lg-3 {
            flex: 0 0 25%;
            max-width: 25%
        }
        .col-lg-4 {
            flex: 0 0 33.33333%;
            max-width: 33.33333%
        }
        .col-lg-5 {
            flex: 0 0 41.66667%;
            max-width: 41.66667%
        }
        .col-lg-6 {
            flex: 0 0 50%;
            max-width: 50%
        }
        .col-lg-7 {
            flex: 0 0 58.33333%;
            max-width: 58.33333%
        }
        .col-lg-8 {
            flex: 0 0 66.66667%;
            max-width: 66.66667%
        }
        .col-lg-9 {
            flex: 0 0 75%;
            max-width: 75%
        }
        .col-lg-10 {
            flex: 0 0 83.33333%;
            max-width: 83.33333%
        }
        .col-lg-11 {
            flex: 0 0 91.66667%;
            max-width: 91.66667%
        }
        .col-lg-12 {
            flex: 0 0 100%;
            max-width: 100%
        }
        .order-lg-first {
            order: -1
        }
        .order-lg-last {
            order: 13
        }
        .order-lg-0 {
            order: 0
        }
        .order-lg-1 {
            order: 1
        }
        .order-lg-2 {
            order: 2
        }
        .order-lg-3 {
            order: 3
        }
        .order-lg-4 {
            order: 4
        }
        .order-lg-5 {
            order: 5
        }
        .order-lg-6 {
            order: 6
        }
        .order-lg-7 {
            order: 7
        }
        .order-lg-8 {
            order: 8
        }
        .order-lg-9 {
            order: 9
        }
        .order-lg-10 {
            order: 10
        }
        .order-lg-11 {
            order: 11
        }
        .order-lg-12 {
            order: 12
        }
        .offset-lg-0 {
            margin-left: 0
        }
        .offset-lg-1 {
            margin-left: 8.33333%
        }
        .offset-lg-2 {
            margin-left: 16.66667%
        }
        .offset-lg-3 {
            margin-left: 25%
        }
        .offset-lg-4 {
            margin-left: 33.33333%
        }
        .offset-lg-5 {
            margin-left: 41.66667%
        }
        .offset-lg-6 {
            margin-left: 50%
        }
        .offset-lg-7 {
            margin-left: 58.33333%
        }
        .offset-lg-8 {
            margin-left: 66.66667%
        }
        .offset-lg-9 {
            margin-left: 75%
        }
        .offset-lg-10 {
            margin-left: 83.33333%
        }
        .offset-lg-11 {
            margin-left: 91.66667%
        }
    }

    @media (min-width:1600px) {
        .col-xl {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%
        }
        .col-xl-auto {
            flex: 0 0 auto;
            width: auto;
            max-width: 100%
        }
        .col-xl-1 {
            flex: 0 0 8.33333%;
            max-width: 8.33333%
        }
        .col-xl-2 {
            flex: 0 0 16.66667%;
            max-width: 16.66667%
        }
        .col-xl-3 {
            flex: 0 0 25%;
            max-width: 25%
        }
        .col-xl-4 {
            flex: 0 0 33.33333%;
            max-width: 33.33333%
        }
        .col-xl-5 {
            flex: 0 0 41.66667%;
            max-width: 41.66667%
        }
        .col-xl-6 {
            flex: 0 0 50%;
            max-width: 50%
        }
        .col-xl-7 {
            flex: 0 0 58.33333%;
            max-width: 58.33333%
        }
        .col-xl-8 {
            flex: 0 0 66.66667%;
            max-width: 66.66667%
        }
        .col-xl-9 {
            flex: 0 0 75%;
            max-width: 75%
        }
        .col-xl-10 {
            flex: 0 0 83.33333%;
            max-width: 83.33333%
        }
        .col-xl-11 {
            flex: 0 0 91.66667%;
            max-width: 91.66667%
        }
        .col-xl-12 {
            flex: 0 0 100%;
            max-width: 100%
        }
        .order-xl-first {
            order: -1
        }
        .order-xl-last {
            order: 13
        }
        .order-xl-0 {
            order: 0
        }
        .order-xl-1 {
            order: 1
        }
        .order-xl-2 {
            order: 2
        }
        .order-xl-3 {
            order: 3
        }
        .order-xl-4 {
            order: 4
        }
        .order-xl-5 {
            order: 5
        }
        .order-xl-6 {
            order: 6
        }
        .order-xl-7 {
            order: 7
        }
        .order-xl-8 {
            order: 8
        }
        .order-xl-9 {
            order: 9
        }
        .order-xl-10 {
            order: 10
        }
        .order-xl-11 {
            order: 11
        }
        .order-xl-12 {
            order: 12
        }
        .offset-xl-0 {
            margin-left: 0
        }
        .offset-xl-1 {
            margin-left: 8.33333%
        }
        .offset-xl-2 {
            margin-left: 16.66667%
        }
        .offset-xl-3 {
            margin-left: 25%
        }
        .offset-xl-4 {
            margin-left: 33.33333%
        }
        .offset-xl-5 {
            margin-left: 41.66667%
        }
        .offset-xl-6 {
            margin-left: 50%
        }
        .offset-xl-7 {
            margin-left: 58.33333%
        }
        .offset-xl-8 {
            margin-left: 66.66667%
        }
        .offset-xl-9 {
            margin-left: 75%
        }
        .offset-xl-10 {
            margin-left: 83.33333%
        }
        .offset-xl-11 {
            margin-left: 91.66667%
        }
    }

    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #6a7a8c
    }

    .table td,
    .table th {
        padding: 1rem;
        vertical-align: top;
        border-top: 1px solid rgba(0, 0, 0, .1)
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid rgba(0, 0, 0, .1)
    }

    .table tbody+tbody {
        border-top: 2px solid rgba(0, 0, 0, .1)
    }

    .table-sm td,
    .table-sm th {
        padding: .3rem
    }

    .table-bordered,
    .table-bordered td,
    .table-bordered th {
        border: 1px solid rgba(0, 0, 0, .1)
    }

    .table-bordered thead td,
    .table-bordered thead th {
        border-bottom-width: 2px
    }

    .table-borderless tbody+tbody,
    .table-borderless td,
    .table-borderless th,
    .table-borderless thead th {
        border: 0
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, .05)
    }

    .table-hover tbody tr:hover {
        color: #6a7a8c;
        background-color: #f6f8f9
    }

    .table-primary,
    .table-primary>td,
    .table-primary>th {
        background-color: #e3dffc
    }

    .table-primary tbody+tbody,
    .table-primary td,
    .table-primary th,
    .table-primary thead th {
        border-color: #b7acf6
    }

    .table-hover .table-primary:hover,
    .table-hover .table-primary:hover>td,
    .table-hover .table-primary:hover>th {
        background-color: #cfc8fa
    }

    .table-secondary,
    .table-secondary>td,
    .table-secondary>th {
        background-color: #e2e3e5
    }

    .table-secondary tbody+tbody,
    .table-secondary td,
    .table-secondary th,
    .table-secondary thead th {
        border-color: #b3b7bb
    }

    .table-hover .table-secondary:hover,
    .table-hover .table-secondary:hover>td,
    .table-hover .table-secondary:hover>th {
        background-color: #d5d6d9
    }

    .table-success,
    .table-success>td,
    .table-success>th {
        background-color: #def3da
    }

    .table-success tbody+tbody,
    .table-success td,
    .table-success th,
    .table-success thead th {
        border-color: #a9df9f
    }

    .table-hover .table-success:hover,
    .table-hover .table-success:hover>td,
    .table-hover .table-success:hover>th {
        background-color: #cdedc7
    }

    .table-info,
    .table-info>td,
    .table-info>th {
        background-color: #d0e5ff
    }

    .table-info tbody+tbody,
    .table-info td,
    .table-info th,
    .table-info thead th {
        border-color: #84bcff
    }

    .table-hover .table-info:hover,
    .table-hover .table-info:hover>td,
    .table-hover .table-info:hover>th {
        background-color: #b7d7ff
    }

    .table-warning,
    .table-warning>td,
    .table-warning>th {
        background-color: #fff2d6
    }

    .table-warning tbody+tbody,
    .table-warning td,
    .table-warning th,
    .table-warning thead th {
        border-color: #ffdc95
    }

    .table-hover .table-warning:hover,
    .table-hover .table-warning:hover>td,
    .table-hover .table-warning:hover>th {
        background-color: #ffeabd
    }

    .table-danger,
    .table-danger>td,
    .table-danger>th {
        background-color: #feded7
    }

    .table-danger tbody+tbody,
    .table-danger td,
    .table-danger th,
    .table-danger thead th {
        border-color: #fca898
    }

    .table-hover .table-danger:hover,
    .table-hover .table-danger:hover>td,
    .table-hover .table-danger:hover>th {
        background-color: #fdc9be
    }

    .table-light,
    .table-light>td,
    .table-light>th {
        background-color: #fdfefe
    }

    .table-light tbody+tbody,
    .table-light td,
    .table-light th,
    .table-light thead th {
        border-color: #fafbfc
    }

    .table-hover .table-light:hover,
    .table-hover .table-light:hover>td,
    .table-hover .table-light:hover>th {
        background-color: #ecf6f6
    }

    .table-dark,
    .table-dark>td,
    .table-dark>th {
        background-color: #d6d8d9
    }

    .table-dark tbody+tbody,
    .table-dark td,
    .table-dark th,
    .table-dark thead th {
        border-color: #95999c
    }

    .table-hover .table-dark:hover,
    .table-hover .table-dark:hover>td,
    .table-hover .table-dark:hover>th {
        background-color: #c9cbcd
    }

    .table-cyan,
    .table-cyan>td,
    .table-cyan>th {
        background-color: #dcf3fd
    }

    .table-cyan tbody+tbody,
    .table-cyan td,
    .table-cyan th,
    .table-cyan thead th {
        border-color: #a3e0fb
    }

    .table-hover .table-cyan:hover,
    .table-hover .table-cyan:hover>td,
    .table-hover .table-cyan:hover>th {
        background-color: #c4ebfc
    }

    .table-orange,
    .table-orange>td,
    .table-orange>th {
        background-color: #fee8cc
    }

    .table-orange tbody+tbody,
    .table-orange td,
    .table-orange th,
    .table-orange thead th {
        border-color: #fdc37a
    }

    .table-hover .table-orange:hover,
    .table-hover .table-orange:hover>td,
    .table-hover .table-orange:hover>th {
        background-color: #feddb3
    }

    .table-purple,
    .table-purple>td,
    .table-purple>th {
        background-color: #e8dff8
    }

    .table-purple tbody+tbody,
    .table-purple td,
    .table-purple th,
    .table-purple thead th {
        border-color: #c3abed
    }

    .table-hover .table-purple:hover,
    .table-hover .table-purple:hover>td,
    .table-hover .table-purple:hover>th {
        background-color: #d9caf3
    }

    .table-active,
    .table-active>td,
    .table-active>th {
        background-color: #f6f8f9
    }

    .table-hover .table-active:hover,
    .table-hover .table-active:hover>td,
    .table-hover .table-active:hover>th {
        background-color: #e7ecef
    }

    .table .thead-dark th {
        color: #fff;
        background-color: #343a40;
        border-color: #454d55
    }

    .table .thead-light th {
        color: #4F5467;
        background-color: #e9ecef;
        border-color: rgba(0, 0, 0, .1)
    }

    .table-dark {
        color: #fff;
        background-color: #343a40
    }

    .table-dark td,
    .table-dark th,
    .table-dark thead th {
        border-color: #454d55
    }

    .table-dark.table-bordered,
    .table-responsive>.table-bordered {
        border: 0
    }

    .table-dark.table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(255, 255, 255, .05)
    }

    .table-dark.table-hover tbody tr:hover {
        color: #fff;
        background-color: rgba(255, 255, 255, .075)
    }

    @media (max-width:575.98px) {
        .table-responsive-sm {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch
        }
        .table-responsive-sm>.table-bordered {
            border: 0
        }
    }

    @media (max-width:767.98px) {
        .table-responsive-md {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch
        }
        .table-responsive-md>.table-bordered {
            border: 0
        }
    }

    @media (max-width:991.98px) {
        .table-responsive-lg {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch
        }
        .table-responsive-lg>.table-bordered {
            border: 0
        }
    }

    @media (max-width:1599.98px) {
        .table-responsive-xl {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch
        }
        .table-responsive-xl>.table-bordered {
            border: 0
        }
    }

    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch
    }

    .accordion>.card,
    .collapsing,
    .modal-open,
    .progress,
    .toast {
        overflow: hidden
    }

    .form-control {
        display: block;
        width: 100%;
        height: calc(1.5em + .75rem + 2px);
        padding: .375rem .75rem;
        font-size: .875rem;
        line-height: 1.5;
        color: #4F5467;
        background-color: #fff;
        border: 1px solid #e9ecef;
        border-radius: 2px;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out
    }

    @media (prefers-reduced-motion:reduce) {
        .form-control {
            transition: none
        }
    }

    .form-control::-ms-expand {
        background-color: transparent;
        border: 0
    }

    .form-control:focus {
        color: #4F5467;
        background-color: #fff;
        border-color: rgba(0, 0, 0, .25);
        outline: 0;
        box-shadow: transparent
    }

    .form-control::placeholder {
        color: #6c757d;
        opacity: 1
    }

    .form-control:disabled,
    .form-control[readonly] {
        background-color: #e9ecef;
        opacity: 1
    }

    select.form-control:focus::-ms-value {
        color: #4F5467;
        background-color: #fff
    }

    .form-control-file,
    .form-control-range {
        display: block;
        width: 100%
    }

    .col-form-label {
        padding-top: calc(.375rem + 1px);
        padding-bottom: calc(.375rem + 1px);
        margin-bottom: 0;
        font-size: inherit;
        line-height: 1.5
    }

    .col-form-label-lg {
        padding-top: calc(.5rem + 1px);
        padding-bottom: calc(.5rem + 1px);
        font-size: 1.09375rem;
        line-height: 1.5
    }

    .col-form-label-sm,
    .form-control-sm {
        font-size: .76563rem;
        line-height: 1.5
    }

    .col-form-label-sm {
        padding-top: calc(.25rem + 1px);
        padding-bottom: calc(.25rem + 1px)
    }

    .form-control-plaintext {
        display: block;
        width: 100%;
        padding-top: .375rem;
        padding-bottom: .375rem;
        margin-bottom: 0;
        line-height: 1.5;
        color: #6a7a8c;
        background-color: transparent;
        border: solid transparent;
        border-width: 1px 0
    }

    .form-control-plaintext.form-control-lg,
    .form-control-plaintext.form-control-sm {
        padding-right: 0;
        padding-left: 0
    }

    .form-control-sm {
        height: calc(1.5em + .5rem + 2px);
        padding: .25rem .5rem;
        border-radius: 1px
    }

    .form-control-lg {
        height: calc(1.5em + 1rem + 2px);
        padding: .5rem 1rem;
        font-size: 1.09375rem;
        line-height: 1.5;
        border-radius: 2px
    }

    select.form-control[multiple],
    select.form-control[size],
    textarea.form-control {
        height: auto
    }

    .form-group {
        margin-bottom: 1rem
    }

    .form-text {
        display: block;
        margin-top: .25rem
    }

    .form-row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -5px;
        margin-left: -5px
    }

    .form-row>.col,
    .form-row>[class*=col-] {
        padding-right: 5px;
        padding-left: 5px
    }

    .form-check {
        display: block;
        padding-left: 1.25rem
    }

    .form-check-input {
        position: absolute;
        margin-top: .3rem;
        margin-left: -1.25rem
    }

    .form-check-input:disabled~.form-check-label {
        color: #afb5c1
    }

    .form-check-label {
        margin-bottom: 0
    }

    .form-check-inline {
        display: inline-flex;
        align-items: center;
        padding-left: 0;
        margin-right: .75rem
    }

    .form-check-inline .form-check-input {
        position: static;
        margin-top: 0;
        margin-right: .3125rem;
        margin-left: 0
    }

    .invalid-tooltip,
    .valid-tooltip {
        position: absolute;
        z-index: 5;
        max-width: 100%;
        border-radius: 2px;
        top: 100%;
        line-height: 1.5
    }

    .valid-feedback {
        display: none;
        width: 100%;
        margin-top: .25rem;
        font-size: 80%;
        color: #5ac146
    }

    .valid-tooltip {
        display: none;
        padding: .25rem .5rem;
        margin-top: .1rem;
        font-size: .76563rem;
        color: #fff;
        background-color: rgba(90, 193, 70, .9)
    }

    .custom-control-input.is-valid~.valid-feedback,
    .custom-control-input.is-valid~.valid-tooltip,
    .custom-file-input.is-valid~.valid-feedback,
    .custom-file-input.is-valid~.valid-tooltip,
    .custom-select.is-valid~.valid-feedback,
    .custom-select.is-valid~.valid-tooltip,
    .form-check-input.is-valid~.valid-feedback,
    .form-check-input.is-valid~.valid-tooltip,
    .form-control-file.is-valid~.valid-feedback,
    .form-control-file.is-valid~.valid-tooltip,
    .form-control.is-valid~.valid-feedback,
    .form-control.is-valid~.valid-tooltip,
    .was-validated .custom-control-input:valid~.valid-feedback,
    .was-validated .custom-control-input:valid~.valid-tooltip,
    .was-validated .custom-file-input:valid~.valid-feedback,
    .was-validated .custom-file-input:valid~.valid-tooltip,
    .was-validated .custom-select:valid~.valid-feedback,
    .was-validated .custom-select:valid~.valid-tooltip,
    .was-validated .form-check-input:valid~.valid-feedback,
    .was-validated .form-check-input:valid~.valid-tooltip,
    .was-validated .form-control-file:valid~.valid-feedback,
    .was-validated .form-control-file:valid~.valid-tooltip,
    .was-validated .form-control:valid~.valid-feedback,
    .was-validated .form-control:valid~.valid-tooltip {
        display: block
    }

    .custom-control-input.is-valid~.custom-control-label,
    .form-check-input.is-valid~.form-check-label,
    .was-validated .custom-control-input:valid~.custom-control-label,
    .was-validated .form-check-input:valid~.form-check-label {
        color: #5ac146
    }

    .form-control.is-valid,
    .was-validated .form-control:valid {
        border-color: #5ac146;
        padding-right: calc(1.5em + .75rem);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%235ac146' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: center right calc(.375em + .1875rem);
        background-size: calc(.75em + .375rem) calc(.75em + .375rem)
    }

    .form-control.is-valid:focus,
    .was-validated .form-control:valid:focus {
        border-color: #5ac146;
        box-shadow: 0 0 0 .2rem rgba(90, 193, 70, .25)
    }

    .was-validated textarea.form-control:valid,
    textarea.form-control.is-valid {
        padding-right: calc(1.5em + .75rem);
        background-position: top calc(.375em + .1875rem) right calc(.375em + .1875rem)
    }

    .custom-select.is-valid,
    .was-validated .custom-select:valid {
        border-color: #5ac146;
        padding-right: calc((1em + .75rem) * 3 / 4 + 1.75rem);
        background: url(../../assets/images/custom-select.png) right .75rem center/8px 10px no-repeat, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%235ac146' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") center right 1.75rem/calc(.75em + .375rem) calc(.75em + .375rem) no-repeat #fff
    }

    .custom-select.is-valid:focus,
    .was-validated .custom-select:valid:focus {
        border-color: #5ac146;
        box-shadow: 0 0 0 .2rem rgba(90, 193, 70, .25)
    }

    .custom-control-input.is-valid~.custom-control-label::before,
    .was-validated .custom-control-input:valid~.custom-control-label::before {
        border-color: #5ac146
    }

    .custom-control-input.is-valid:checked~.custom-control-label::before,
    .was-validated .custom-control-input:valid:checked~.custom-control-label::before {
        border-color: #7cce6c;
        background-color: #7cce6c
    }

    .custom-control-input.is-valid:focus~.custom-control-label::before,
    .was-validated .custom-control-input:valid:focus~.custom-control-label::before {
        box-shadow: 0 0 0 .2rem rgba(90, 193, 70, .25)
    }

    .custom-control-input.is-valid:focus:not(:checked)~.custom-control-label::before,
    .custom-file-input.is-valid~.custom-file-label,
    .was-validated .custom-control-input:valid:focus:not(:checked)~.custom-control-label::before,
    .was-validated .custom-file-input:valid~.custom-file-label {
        border-color: #5ac146
    }

    .custom-file-input.is-valid:focus~.custom-file-label,
    .was-validated .custom-file-input:valid:focus~.custom-file-label {
        border-color: #5ac146;
        box-shadow: 0 0 0 .2rem rgba(90, 193, 70, .25)
    }

    .invalid-feedback {
        display: none;
        width: 100%;
        margin-top: .25rem;
        font-size: 80%;
        color: #fa5838
    }

    .invalid-tooltip {
        display: none;
        padding: .25rem .5rem;
        margin-top: .1rem;
        font-size: .76563rem;
        color: #fff;
        background-color: rgba(250, 88, 56, .9)
    }

    .collapsing,
    .dropdown,
    .dropleft,
    .dropright,
    .dropup {
        position: relative
    }

    .custom-control-input.is-invalid~.invalid-feedback,
    .custom-control-input.is-invalid~.invalid-tooltip,
    .custom-file-input.is-invalid~.invalid-feedback,
    .custom-file-input.is-invalid~.invalid-tooltip,
    .custom-select.is-invalid~.invalid-feedback,
    .custom-select.is-invalid~.invalid-tooltip,
    .form-check-input.is-invalid~.invalid-feedback,
    .form-check-input.is-invalid~.invalid-tooltip,
    .form-control-file.is-invalid~.invalid-feedback,
    .form-control-file.is-invalid~.invalid-tooltip,
    .form-control.is-invalid~.invalid-feedback,
    .form-control.is-invalid~.invalid-tooltip,
    .was-validated .custom-control-input:invalid~.invalid-feedback,
    .was-validated .custom-control-input:invalid~.invalid-tooltip,
    .was-validated .custom-file-input:invalid~.invalid-feedback,
    .was-validated .custom-file-input:invalid~.invalid-tooltip,
    .was-validated .custom-select:invalid~.invalid-feedback,
    .was-validated .custom-select:invalid~.invalid-tooltip,
    .was-validated .form-check-input:invalid~.invalid-feedback,
    .was-validated .form-check-input:invalid~.invalid-tooltip,
    .was-validated .form-control-file:invalid~.invalid-feedback,
    .was-validated .form-control-file:invalid~.invalid-tooltip,
    .was-validated .form-control:invalid~.invalid-feedback,
    .was-validated .form-control:invalid~.invalid-tooltip {
        display: block
    }

    .custom-control-input.is-invalid~.custom-control-label,
    .form-check-input.is-invalid~.form-check-label,
    .was-validated .custom-control-input:invalid~.custom-control-label,
    .was-validated .form-check-input:invalid~.form-check-label {
        color: #fa5838
    }

    .form-control.is-invalid,
    .was-validated .form-control:invalid {
        border-color: #fa5838;
        padding-right: calc(1.5em + .75rem);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fa5838' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23fa5838' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E");
        background-repeat: no-repeat;
        background-position: center right calc(.375em + .1875rem);
        background-size: calc(.75em + .375rem) calc(.75em + .375rem)
    }

    .form-control.is-invalid:focus,
    .was-validated .form-control:invalid:focus {
        border-color: #fa5838;
        box-shadow: 0 0 0 .2rem rgba(250, 88, 56, .25)
    }

    .was-validated textarea.form-control:invalid,
    textarea.form-control.is-invalid {
        padding-right: calc(1.5em + .75rem);
        background-position: top calc(.375em + .1875rem) right calc(.375em + .1875rem)
    }

    .custom-select.is-invalid,
    .was-validated .custom-select:invalid {
        border-color: #fa5838;
        padding-right: calc((1em + .75rem) * 3 / 4 + 1.75rem);
        background: url(../../assets/images/custom-select.png) right .75rem center/8px 10px no-repeat, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fa5838' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23fa5838' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E") center right 1.75rem/calc(.75em + .375rem) calc(.75em + .375rem) no-repeat #fff
    }

    .custom-select.is-invalid:focus,
    .was-validated .custom-select:invalid:focus {
        border-color: #fa5838;
        box-shadow: 0 0 0 .2rem rgba(250, 88, 56, .25)
    }

    .custom-control-input.is-invalid~.custom-control-label::before,
    .was-validated .custom-control-input:invalid~.custom-control-label::before {
        border-color: #fa5838
    }

    .custom-control-input.is-invalid:checked~.custom-control-label::before,
    .was-validated .custom-control-input:invalid:checked~.custom-control-label::before {
        border-color: #fb826a;
        background-color: #fb826a
    }

    .custom-control-input.is-invalid:focus~.custom-control-label::before,
    .was-validated .custom-control-input:invalid:focus~.custom-control-label::before {
        box-shadow: 0 0 0 .2rem rgba(250, 88, 56, .25)
    }

    .custom-control-input.is-invalid:focus:not(:checked)~.custom-control-label::before,
    .custom-file-input.is-invalid~.custom-file-label,
    .was-validated .custom-control-input:invalid:focus:not(:checked)~.custom-control-label::before,
    .was-validated .custom-file-input:invalid~.custom-file-label {
        border-color: #fa5838
    }

    .custom-file-input.is-invalid:focus~.custom-file-label,
    .was-validated .custom-file-input:invalid:focus~.custom-file-label {
        border-color: #fa5838;
        box-shadow: 0 0 0 .2rem rgba(250, 88, 56, .25)
    }

    .btn.focus,
    .btn:focus,
    .custom-control-input:focus~.custom-control-label::before {
        box-shadow: transparent
    }

    .form-inline {
        display: flex;
        flex-flow: row wrap;
        align-items: center
    }

    .form-inline .form-check {
        width: 100%
    }

    @media (min-width:576px) {
        .form-inline label {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 0
        }
        .form-inline .form-group {
            display: flex;
            flex: 0 0 auto;
            flex-flow: row wrap;
            align-items: center;
            margin-bottom: 0
        }
        .form-inline .form-control {
            display: inline-block;
            width: auto;
            vertical-align: middle
        }
        .form-inline .form-control-plaintext {
            display: inline-block
        }
        .form-inline .custom-select,
        .form-inline .input-group {
            width: auto
        }
        .form-inline .form-check {
            display: flex;
            align-items: center;
            justify-content: center;
            width: auto;
            padding-left: 0
        }
        .form-inline .form-check-input {
            position: relative;
            flex-shrink: 0;
            margin-top: 0;
            margin-right: .25rem;
            margin-left: 0
        }
        .form-inline .custom-control {
            align-items: center;
            justify-content: center
        }
        .form-inline .custom-control-label {
            margin-bottom: 0
        }
    }

    .btn {
        display: inline-block;
        color: #6a7a8c;
        text-align: center;
        vertical-align: middle;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: .375rem .75rem;
        font-size: .875rem;
        line-height: 1.5;
        border-radius: 2px;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
    }

    .dropdown-toggle::after,
    .dropup .dropdown-toggle::after {
        vertical-align: .255em;
        content: ""
    }

    @media (prefers-reduced-motion:reduce) {
        .btn {
            transition: none
        }
    }

    .btn:hover {
        color: #6a7a8c
    }

    .btn.focus,
    .btn:focus {
        outline: 0
    }

    .btn-primary.focus,
    .btn-primary:focus,
    .btn-primary:not(:disabled):not(.disabled).active:focus,
    .btn-primary:not(:disabled):not(.disabled):active:focus,
    .show>.btn-primary.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(137, 120, 241, .5)
    }

    .btn.disabled,
    .btn:disabled {
        opacity: .65
    }

    a.btn.disabled,
    fieldset:disabled a.btn {
        pointer-events: none
    }

    .btn-primary {
        background-color: #7460ee;
        border-color: #7460ee
    }

    .btn-primary:hover {
        background-color: #563dea;
        border-color: #4c32e9
    }

    .btn-primary.disabled,
    .btn-primary:disabled {
        color: #fff;
        background-color: #7460ee;
        border-color: #7460ee
    }

    .btn-primary:not(:disabled):not(.disabled).active,
    .btn-primary:not(:disabled):not(.disabled):active,
    .show>.btn-primary.dropdown-toggle {
        color: #fff;
        background-color: #4c32e9;
        border-color: #4226e8
    }

    .btn-secondary.focus,
    .btn-secondary:focus,
    .btn-secondary:not(:disabled):not(.disabled).active:focus,
    .btn-secondary:not(:disabled):not(.disabled):active:focus,
    .show>.btn-secondary.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(130, 138, 145, .5)
    }

    .btn-secondary {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d
    }

    .btn-secondary:hover {
        color: #fff;
        background-color: #5a6268;
        border-color: #545b62
    }

    .btn-secondary.disabled,
    .btn-secondary:disabled {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d
    }

    .btn-secondary:not(:disabled):not(.disabled).active,
    .btn-secondary:not(:disabled):not(.disabled):active,
    .show>.btn-secondary.dropdown-toggle {
        color: #fff;
        background-color: #545b62;
        border-color: #4e555b
    }

    .btn-success.focus,
    .btn-success:focus,
    .btn-success:not(:disabled):not(.disabled).active:focus,
    .btn-success:not(:disabled):not(.disabled):active:focus,
    .show>.btn-success.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(115, 202, 98, .5)
    }

    .btn-success {
        color: #fff;
        background-color: #5ac146;
        border-color: #5ac146
    }

    .btn-success:hover {
        color: #fff;
        background-color: #4ba838;
        border-color: #469f35
    }

    .btn-success.disabled,
    .btn-success:disabled {
        color: #fff;
        background-color: #5ac146;
        border-color: #5ac146
    }

    .btn-success:not(:disabled):not(.disabled).active,
    .btn-success:not(:disabled):not(.disabled):active,
    .show>.btn-success.dropdown-toggle {
        color: #fff;
        background-color: #469f35;
        border-color: #429532
    }

    .btn-info.focus,
    .btn-info:focus,
    .btn-info:not(:disabled):not(.disabled).active:focus,
    .btn-info:not(:disabled):not(.disabled):active:focus,
    .show>.btn-info.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(54, 145, 255, .5)
    }

    .btn-info {
        color: #fff;
        background-color: #137eff;
        border-color: #137eff
    }

    .btn-info:hover {
        color: #fff;
        background-color: #006bec;
        border-color: #0065df
    }

    .btn-info.disabled,
    .btn-info:disabled {
        color: #fff;
        background-color: #137eff;
        border-color: #137eff
    }

    .btn-info:not(:disabled):not(.disabled).active,
    .btn-info:not(:disabled):not(.disabled):active,
    .show>.btn-info.dropdown-toggle {
        color: #fff;
        background-color: #0065df;
        border-color: #005fd2
    }

    .btn-warning.focus,
    .btn-warning:focus,
    .btn-warning:not(:disabled):not(.disabled).active:focus,
    .btn-warning:not(:disabled):not(.disabled):active:focus,
    .show>.btn-warning.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(222, 165, 50, .5)
    }

    .btn-warning {
        background-color: #ffbc34;
        border-color: #ffbc34
    }

    .btn-warning:hover {
        background-color: #ffaf0e;
        border-color: #ffab01
    }

    .btn-warning.disabled,
    .btn-warning:disabled {
        color: #212529;
        background-color: #ffbc34;
        border-color: #ffbc34
    }

    .btn-warning:not(:disabled):not(.disabled).active,
    .btn-warning:not(:disabled):not(.disabled):active,
    .show>.btn-warning.dropdown-toggle {
        color: #212529;
        background-color: #ffab01;
        border-color: #f3a300
    }

    .btn-danger.focus,
    .btn-danger:focus,
    .btn-danger:not(:disabled):not(.disabled).active:focus,
    .btn-danger:not(:disabled):not(.disabled):active:focus,
    .show>.btn-danger.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(251, 113, 86, .5)
    }

    .btn-danger {
        color: #fff;
        background-color: #fa5838;
        border-color: #fa5838
    }

    .btn-danger:hover {
        color: #fff;
        background-color: #f93913;
        border-color: #f92e06
    }

    .btn-danger.disabled,
    .btn-danger:disabled {
        color: #fff;
        background-color: #fa5838;
        border-color: #fa5838
    }

    .btn-danger:not(:disabled):not(.disabled).active,
    .btn-danger:not(:disabled):not(.disabled):active,
    .show>.btn-danger.dropdown-toggle {
        color: #fff;
        background-color: #f92e06;
        border-color: #ec2c06
    }

    .btn-light.focus,
    .btn-light:focus,
    .btn-light:not(:disabled):not(.disabled).active:focus,
    .btn-light:not(:disabled):not(.disabled):active:focus,
    .show>.btn-light.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(214, 216, 218, .5)
    }

    .btn-light {
        color: #212529;
        background-color: #f6f8f9;
        border-color: #f6f8f9
    }

    .btn-light:hover {
        color: #212529;
        background-color: #dfe6ea;
        border-color: #d7e0e5
    }

    .btn-light.disabled,
    .btn-light:disabled {
        color: #212529;
        background-color: #f6f8f9;
        border-color: #f6f8f9
    }

    .btn-light:not(:disabled):not(.disabled).active,
    .btn-light:not(:disabled):not(.disabled):active,
    .show>.btn-light.dropdown-toggle {
        color: #212529;
        background-color: #d7e0e5;
        border-color: #d0dae0
    }

    .btn-dark.focus,
    .btn-dark:focus,
    .btn-dark:not(:disabled):not(.disabled).active:focus,
    .btn-dark:not(:disabled):not(.disabled):active:focus,
    .show>.btn-dark.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(82, 88, 93, .5)
    }

    .btn-dark {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40
    }

    .btn-dark:hover {
        color: #fff;
        background-color: #23272b;
        border-color: #1d2124
    }

    .btn-dark.disabled,
    .btn-dark:disabled {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40
    }

    .btn-dark:not(:disabled):not(.disabled).active,
    .btn-dark:not(:disabled):not(.disabled):active,
    .show>.btn-dark.dropdown-toggle {
        color: #fff;
        background-color: #1d2124;
        border-color: #171a1d
    }

    .btn-cyan.focus,
    .btn-cyan:focus,
    .btn-cyan:not(:disabled):not(.disabled).active:focus,
    .btn-cyan:not(:disabled):not(.disabled):active:focus,
    .show>.btn-cyan.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(72, 171, 216, .5)
    }

    .btn-cyan {
        color: #212529;
        background-color: #4fc3f7;
        border-color: #4fc3f7
    }

    .btn-cyan:hover {
        color: #fff;
        background-color: #2ab7f5;
        border-color: #1eb2f5
    }

    .btn-cyan.disabled,
    .btn-cyan:disabled {
        color: #212529;
        background-color: #4fc3f7;
        border-color: #4fc3f7
    }

    .btn-cyan:not(:disabled):not(.disabled).active,
    .btn-cyan:not(:disabled):not(.disabled):active,
    .show>.btn-cyan.dropdown-toggle {
        color: #fff;
        background-color: #1eb2f5;
        border-color: #12aef4
    }

    .btn-orange.focus,
    .btn-orange:focus,
    .btn-orange:not(:disabled):not(.disabled).active:focus,
    .btn-orange:not(:disabled):not(.disabled):active:focus,
    .show>.btn-orange.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(218, 125, 6, .5)
    }

    .btn-orange {
        color: #212529;
        background-color: #fb8c00;
        border-color: #fb8c00
    }

    .btn-orange:hover {
        color: #fff;
        background-color: #d57700;
        border-color: #c87000
    }

    .btn-orange.disabled,
    .btn-orange:disabled {
        color: #212529;
        background-color: #fb8c00;
        border-color: #fb8c00
    }

    .btn-orange:not(:disabled):not(.disabled).active,
    .btn-orange:not(:disabled):not(.disabled):active,
    .show>.btn-orange.dropdown-toggle {
        color: #fff;
        background-color: #c87000;
        border-color: #bb6800
    }

    .btn-purple.focus,
    .btn-purple:focus,
    .btn-purple:not(:disabled):not(.disabled).active:focus,
    .btn-purple:not(:disabled):not(.disabled):active:focus,
    .show>.btn-purple.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(156, 118, 226, .5)
    }

    .btn-purple {
        color: #fff;
        background-color: #8b5edd;
        border-color: #8b5edd
    }

    .btn-purple:hover {
        color: #fff;
        background-color: #743ed6;
        border-color: #6d34d4
    }

    .btn-purple.disabled,
    .btn-purple:disabled {
        color: #fff;
        background-color: #8b5edd;
        border-color: #8b5edd
    }

    .btn-purple:not(:disabled):not(.disabled).active,
    .btn-purple:not(:disabled):not(.disabled):active,
    .show>.btn-purple.dropdown-toggle {
        color: #fff;
        background-color: #6d34d4;
        border-color: #662ccf
    }

    .btn-outline-primary.focus,
    .btn-outline-primary:focus,
    .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
    .btn-outline-primary:not(:disabled):not(.disabled):active:focus,
    .show>.btn-outline-primary.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(116, 96, 238, .5)
    }

    .btn-outline-primary {
        color: #7460ee;
        border-color: #7460ee
    }

    .btn-outline-primary:hover {
        background-color: #7460ee;
        border-color: #7460ee
    }

    .btn-outline-primary.disabled,
    .btn-outline-primary:disabled {
        color: #7460ee;
        background-color: transparent
    }

    .btn-outline-primary:not(:disabled):not(.disabled).active,
    .btn-outline-primary:not(:disabled):not(.disabled):active,
    .show>.btn-outline-primary.dropdown-toggle {
        color: #fff;
        background-color: #7460ee;
        border-color: #7460ee
    }

    .btn-outline-secondary.focus,
    .btn-outline-secondary:focus,
    .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
    .btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
    .show>.btn-outline-secondary.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(108, 117, 125, .5)
    }

    .btn-outline-secondary {
        color: #6c757d;
        border-color: #6c757d
    }

    .btn-outline-secondary:hover {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d
    }

    .btn-outline-secondary.disabled,
    .btn-outline-secondary:disabled {
        color: #6c757d;
        background-color: transparent
    }

    .btn-outline-secondary:not(:disabled):not(.disabled).active,
    .btn-outline-secondary:not(:disabled):not(.disabled):active,
    .show>.btn-outline-secondary.dropdown-toggle {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d
    }

    .btn-outline-success.focus,
    .btn-outline-success:focus,
    .btn-outline-success:not(:disabled):not(.disabled).active:focus,
    .btn-outline-success:not(:disabled):not(.disabled):active:focus,
    .show>.btn-outline-success.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(90, 193, 70, .5)
    }

    .btn-outline-success {
        color: #5ac146;
        border-color: #5ac146
    }

    .btn-outline-success:hover {
        color: #fff;
        background-color: #5ac146;
        border-color: #5ac146
    }

    .btn-outline-success.disabled,
    .btn-outline-success:disabled {
        color: #5ac146;
        background-color: transparent
    }

    .btn-outline-success:not(:disabled):not(.disabled).active,
    .btn-outline-success:not(:disabled):not(.disabled):active,
    .show>.btn-outline-success.dropdown-toggle {
        color: #fff;
        background-color: #5ac146;
        border-color: #5ac146
    }

    .btn-outline-info.focus,
    .btn-outline-info:focus,
    .btn-outline-info:not(:disabled):not(.disabled).active:focus,
    .btn-outline-info:not(:disabled):not(.disabled):active:focus,
    .show>.btn-outline-info.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(19, 126, 255, .5)
    }

    .btn-outline-info {
        color: #137eff;
        border-color: #137eff
    }

    .btn-outline-info:hover {
        color: #fff;
        background-color: #137eff;
        border-color: #137eff
    }

    .btn-outline-info.disabled,
    .btn-outline-info:disabled {
        color: #137eff;
        background-color: transparent
    }

    .btn-outline-info:not(:disabled):not(.disabled).active,
    .btn-outline-info:not(:disabled):not(.disabled):active,
    .show>.btn-outline-info.dropdown-toggle {
        color: #fff;
        background-color: #137eff;
        border-color: #137eff
    }

    .btn-outline-warning.focus,
    .btn-outline-warning:focus,
    .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
    .btn-outline-warning:not(:disabled):not(.disabled):active:focus,
    .show>.btn-outline-warning.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(255, 188, 52, .5)
    }

    .btn-outline-warning {
        color: #ffbc34;
        border-color: #ffbc34
    }

    .btn-outline-warning:hover {
        background-color: #ffbc34;
        border-color: #ffbc34
    }

    .btn-outline-warning.disabled,
    .btn-outline-warning:disabled {
        color: #ffbc34;
        background-color: transparent
    }

    .btn-outline-warning:not(:disabled):not(.disabled).active,
    .btn-outline-warning:not(:disabled):not(.disabled):active,
    .show>.btn-outline-warning.dropdown-toggle {
        color: #212529;
        background-color: #ffbc34;
        border-color: #ffbc34
    }

    .btn-outline-danger.focus,
    .btn-outline-danger:focus,
    .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
    .btn-outline-danger:not(:disabled):not(.disabled):active:focus,
    .show>.btn-outline-danger.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(250, 88, 56, .5)
    }

    .btn-outline-danger {
        color: #fa5838;
        border-color: #fa5838
    }

    .btn-outline-danger:hover {
        color: #fff;
        background-color: #fa5838;
        border-color: #fa5838
    }

    .btn-outline-danger.disabled,
    .btn-outline-danger:disabled {
        color: #fa5838;
        background-color: transparent
    }

    .btn-outline-danger:not(:disabled):not(.disabled).active,
    .btn-outline-danger:not(:disabled):not(.disabled):active,
    .show>.btn-outline-danger.dropdown-toggle {
        color: #fff;
        background-color: #fa5838;
        border-color: #fa5838
    }

    .btn-outline-light.focus,
    .btn-outline-light:focus,
    .btn-outline-light:not(:disabled):not(.disabled).active:focus,
    .btn-outline-light:not(:disabled):not(.disabled):active:focus,
    .show>.btn-outline-light.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(246, 248, 249, .5)
    }

    .btn-outline-light {
        color: #f6f8f9;
        border-color: #f6f8f9
    }

    .btn-outline-light:hover {
        color: #212529;
        background-color: #f6f8f9;
        border-color: #f6f8f9
    }

    .btn-outline-light.disabled,
    .btn-outline-light:disabled {
        color: #f6f8f9;
        background-color: transparent
    }

    .btn-outline-light:not(:disabled):not(.disabled).active,
    .btn-outline-light:not(:disabled):not(.disabled):active,
    .show>.btn-outline-light.dropdown-toggle {
        color: #212529;
        background-color: #f6f8f9;
        border-color: #f6f8f9
    }

    .btn-outline-dark.focus,
    .btn-outline-dark:focus,
    .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
    .btn-outline-dark:not(:disabled):not(.disabled):active:focus,
    .show>.btn-outline-dark.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
    }

    .btn-outline-dark {
        color: #343a40;
        border-color: #343a40
    }

    .btn-outline-dark:hover {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40
    }

    .btn-outline-dark.disabled,
    .btn-outline-dark:disabled {
        color: #343a40;
        background-color: transparent
    }

    .btn-outline-dark:not(:disabled):not(.disabled).active,
    .btn-outline-dark:not(:disabled):not(.disabled):active,
    .show>.btn-outline-dark.dropdown-toggle {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40
    }

    .btn-outline-cyan.focus,
    .btn-outline-cyan:focus,
    .btn-outline-cyan:not(:disabled):not(.disabled).active:focus,
    .btn-outline-cyan:not(:disabled):not(.disabled):active:focus,
    .show>.btn-outline-cyan.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(79, 195, 247, .5)
    }

    .btn-outline-cyan {
        color: #4fc3f7;
        border-color: #4fc3f7
    }

    .btn-outline-cyan:hover {
        color: #212529;
        background-color: #4fc3f7;
        border-color: #4fc3f7
    }

    .btn-outline-cyan.disabled,
    .btn-outline-cyan:disabled {
        color: #4fc3f7;
        background-color: transparent
    }

    .btn-outline-cyan:not(:disabled):not(.disabled).active,
    .btn-outline-cyan:not(:disabled):not(.disabled):active,
    .show>.btn-outline-cyan.dropdown-toggle {
        color: #212529;
        background-color: #4fc3f7;
        border-color: #4fc3f7
    }

    .btn-outline-orange.focus,
    .btn-outline-orange:focus,
    .btn-outline-orange:not(:disabled):not(.disabled).active:focus,
    .btn-outline-orange:not(:disabled):not(.disabled):active:focus,
    .show>.btn-outline-orange.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(251, 140, 0, .5)
    }

    .btn-outline-orange {
        color: #fb8c00;
        border-color: #fb8c00
    }

    .btn-outline-orange:hover {
        color: #212529;
        background-color: #fb8c00;
        border-color: #fb8c00
    }

    .btn-outline-orange.disabled,
    .btn-outline-orange:disabled {
        color: #fb8c00;
        background-color: transparent
    }

    .btn-outline-orange:not(:disabled):not(.disabled).active,
    .btn-outline-orange:not(:disabled):not(.disabled):active,
    .show>.btn-outline-orange.dropdown-toggle {
        color: #212529;
        background-color: #fb8c00;
        border-color: #fb8c00
    }

    .btn-outline-purple.focus,
    .btn-outline-purple:focus,
    .btn-outline-purple:not(:disabled):not(.disabled).active:focus,
    .btn-outline-purple:not(:disabled):not(.disabled):active:focus,
    .show>.btn-outline-purple.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(139, 94, 221, .5)
    }

    .btn-outline-purple {
        color: #8b5edd;
        border-color: #8b5edd
    }

    .btn-outline-purple:hover {
        color: #fff;
        background-color: #8b5edd;
        border-color: #8b5edd
    }

    .btn-outline-purple.disabled,
    .btn-outline-purple:disabled {
        color: #8b5edd;
        background-color: transparent
    }

    .btn-outline-purple:not(:disabled):not(.disabled).active,
    .btn-outline-purple:not(:disabled):not(.disabled):active,
    .show>.btn-outline-purple.dropdown-toggle {
        color: #fff;
        background-color: #8b5edd;
        border-color: #8b5edd
    }

    .btn-link {
        color: #7460ee
    }

    .btn-link:hover {
        color: #381be7;
        text-decoration: underline
    }

    .btn-link.focus,
    .btn-link:focus {
        text-decoration: underline;
        box-shadow: none
    }

    .breadcrumb-item+.breadcrumb-item:hover::before,
    .close:hover,
    .dropdown-item.active,
    .dropdown-item:active,
    .dropdown-item:focus,
    .dropdown-item:hover,
    .list-group-item-action:focus,
    .list-group-item-action:hover,
    .nav-link:focus,
    .nav-link:hover,
    .navbar-brand:focus,
    .navbar-brand:hover,
    .navbar-toggler:focus,
    .navbar-toggler:hover,
    .page-link:hover,
    a.badge:focus,
    a.badge:hover {
        text-decoration: none
    }

    .btn-link.disabled,
    .btn-link:disabled {
        color: #6c757d;
        pointer-events: none
    }

    .btn-group-lg>.btn,
    .btn-lg {
        padding: .5rem 1rem;
        font-size: 1.09375rem;
        line-height: 1.5;
        border-radius: 2px
    }

    .btn-group-sm>.btn,
    .btn-sm {
        padding: .25rem .5rem;
        font-size: .76563rem;
        line-height: 1.5;
        border-radius: 1px
    }

    .btn-block {
        display: block;
        width: 100%
    }

    .btn-block+.btn-block {
        margin-top: .5rem
    }

    input[type=button].btn-block,
    input[type=reset].btn-block,
    input[type=submit].btn-block {
        width: 100%
    }

    .fade {
        transition: opacity .15s linear
    }

    @media (prefers-reduced-motion:reduce) {
        .fade {
            transition: none
        }
    }

    .fade:not(.show) {
        opacity: 0
    }

    .collapse:not(.show) {
        display: none
    }

    .collapsing {
        height: 0;
        transition: height .35s ease
    }

    @media (prefers-reduced-motion:reduce) {
        .collapsing {
            transition: none
        }
    }

    .dropdown-toggle::after {
        display: inline-block;
        margin-left: .255em;
        border-top: .3em solid;
        border-right: .3em solid transparent;
        border-bottom: 0;
        border-left: .3em solid transparent
    }

    .dropdown-toggle:empty::after {
        margin-left: 0
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 10rem;
        padding: .5rem 0;
        margin: .125rem 0 0;
        font-size: .875rem;
        color: #6a7a8c;
        text-align: left;
        background-color: #fff;
        border: 1px solid #e9ecef;
        border-radius: 2px
    }

    .dropdown-menu-left {
        right: auto;
        left: 0
    }

    .dropdown-menu-right {
        right: 0;
        left: auto
    }

    @media (min-width:576px) {
        .dropdown-menu-sm-left {
            right: auto;
            left: 0
        }
        .dropdown-menu-sm-right {
            right: 0;
            left: auto
        }
    }

    @media (min-width:768px) {
        .dropdown-menu-md-left {
            right: auto;
            left: 0
        }
        .dropdown-menu-md-right {
            right: 0;
            left: auto
        }
    }

    @media (min-width:992px) {
        .dropdown-menu-lg-left {
            right: auto;
            left: 0
        }
        .dropdown-menu-lg-right {
            right: 0;
            left: auto
        }
    }

    @media (min-width:1600px) {
        .dropdown-menu-xl-left {
            right: auto;
            left: 0
        }
        .dropdown-menu-xl-right {
            right: 0;
            left: auto
        }
    }

    .dropup .dropdown-menu {
        top: auto;
        bottom: 100%;
        margin-top: 0;
        margin-bottom: .125rem
    }

    .dropup .dropdown-toggle::after {
        display: inline-block;
        margin-left: .255em;
        border-top: 0;
        border-right: .3em solid transparent;
        border-bottom: .3em solid;
        border-left: .3em solid transparent
    }

    .dropleft .dropdown-toggle::before,
    .dropright .dropdown-toggle::after {
        content: "";
        border-top: .3em solid transparent;
        border-bottom: .3em solid transparent
    }

    .dropup .dropdown-toggle:empty::after {
        margin-left: 0
    }

    .dropright .dropdown-menu {
        top: 0;
        right: auto;
        left: 100%;
        margin-top: 0;
        margin-left: .125rem
    }

    .dropright .dropdown-toggle::after {
        display: inline-block;
        margin-left: .255em;
        border-right: 0;
        border-left: .3em solid;
        vertical-align: 0
    }

    .dropright .dropdown-toggle:empty::after {
        margin-left: 0
    }

    .dropleft .dropdown-menu {
        top: 0;
        right: 100%;
        left: auto;
        margin-top: 0;
        margin-right: .125rem
    }

    .dropleft .dropdown-toggle::after {
        margin-left: .255em;
        vertical-align: .255em;
        content: "";
        display: none
    }

    .dropleft .dropdown-toggle::before {
        display: inline-block;
        margin-right: .255em;
        border-right: .3em solid;
        vertical-align: 0
    }

    .dropleft .dropdown-toggle:empty::after {
        margin-left: 0
    }

    .dropdown-menu[x-placement^=top],
    .dropdown-menu[x-placement^=right],
    .dropdown-menu[x-placement^=bottom],
    .dropdown-menu[x-placement^=left] {
        right: auto;
        bottom: auto
    }

    .dropdown-divider {
        height: 0;
        margin: .5rem 0;
        overflow: hidden;
        border-top: 1px solid #f6f8f9
    }

    .btn-group-toggle>.btn,
    .btn-group-toggle>.btn-group>.btn,
    .custom-control-label,
    .custom-file,
    .dropdown-header,
    .input-group-text,
    .nav {
        margin-bottom: 0
    }

    .dropdown-item {
        display: block;
        width: 100%;
        padding: .65rem 1rem;
        clear: both;
        color: #212529;
        text-align: inherit;
        background-color: transparent;
        border: 0
    }

    .btn-group>.btn-group:not(:last-child)>.btn,
    .btn-group>.btn:not(:last-child):not(.dropdown-toggle),
    .input-group>.custom-file:not(:last-child) .custom-file-label,
    .input-group>.custom-file:not(:last-child) .custom-file-label::after,
    .input-group>.custom-select:not(:last-child),
    .input-group>.form-control:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .btn-group>.btn-group:not(:first-child)>.btn,
    .btn-group>.btn:not(:first-child),
    .input-group>.custom-file:not(:first-child) .custom-file-label,
    .input-group>.custom-select:not(:first-child),
    .input-group>.form-control:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    .dropdown-item:focus,
    .dropdown-item:hover {
        color: #16181b;
        background-color: #f6f8f9
    }

    .dropdown-item.active,
    .dropdown-item:active {
        color: #fff;
        background-color: #2962FF
    }

    .dropdown-item.disabled,
    .dropdown-item:disabled {
        color: #6c757d;
        pointer-events: none;
        background-color: transparent
    }

    .dropdown-menu.show {
        display: block
    }

    .dropdown-header {
        display: block;
        padding: .5rem 1rem;
        font-size: .76563rem;
        color: #6c757d
    }

    .dropdown-item-text {
        display: block;
        padding: .65rem 1rem;
        color: #212529
    }

    .btn-group,
    .btn-group-vertical {
        position: relative;
        display: inline-flex;
        vertical-align: middle
    }

    .btn-group-vertical>.btn,
    .btn-group>.btn {
        position: relative;
        flex: 1 1 auto
    }

    .btn-group-vertical>.btn.active,
    .btn-group-vertical>.btn:active,
    .btn-group-vertical>.btn:focus,
    .btn-group-vertical>.btn:hover,
    .btn-group>.btn.active,
    .btn-group>.btn:active,
    .btn-group>.btn:focus,
    .btn-group>.btn:hover {
        z-index: 1
    }

    .btn-toolbar {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start
    }

    .btn-toolbar .input-group {
        width: auto
    }

    .btn-group>.btn-group:not(:first-child),
    .btn-group>.btn:not(:first-child) {
        margin-left: -1px
    }

    .dropdown-toggle-split {
        padding-right: .5625rem;
        padding-left: .5625rem
    }

    .dropdown-toggle-split::after,
    .dropright .dropdown-toggle-split::after,
    .dropup .dropdown-toggle-split::after {
        margin-left: 0
    }

    .input-group-append,
    .input-group-append .btn+.btn,
    .input-group-append .btn+.input-group-text,
    .input-group-append .input-group-text+.btn,
    .input-group-append .input-group-text+.input-group-text,
    .input-group-prepend .btn+.btn,
    .input-group-prepend .btn+.input-group-text,
    .input-group-prepend .input-group-text+.btn,
    .input-group-prepend .input-group-text+.input-group-text,
    .input-group>.custom-file+.custom-file,
    .input-group>.custom-file+.custom-select,
    .input-group>.custom-file+.form-control,
    .input-group>.custom-select+.custom-file,
    .input-group>.custom-select+.custom-select,
    .input-group>.custom-select+.form-control,
    .input-group>.form-control+.custom-file,
    .input-group>.form-control+.custom-select,
    .input-group>.form-control+.form-control,
    .input-group>.form-control-plaintext+.custom-file,
    .input-group>.form-control-plaintext+.custom-select,
    .input-group>.form-control-plaintext+.form-control {
        margin-left: -1px
    }

    .dropleft .dropdown-toggle-split::before {
        margin-right: 0
    }

    .btn-group-sm>.btn+.dropdown-toggle-split,
    .btn-sm+.dropdown-toggle-split {
        padding-right: .375rem;
        padding-left: .375rem
    }

    .btn-group-lg>.btn+.dropdown-toggle-split,
    .btn-lg+.dropdown-toggle-split {
        padding-right: .75rem;
        padding-left: .75rem
    }

    .btn-group-vertical {
        flex-direction: column;
        align-items: flex-start;
        justify-content: center
    }

    .btn-group-vertical>.btn,
    .btn-group-vertical>.btn-group {
        width: 100%
    }

    .btn-group-vertical>.btn-group:not(:first-child),
    .btn-group-vertical>.btn:not(:first-child) {
        margin-top: -1px
    }

    .btn-group-vertical>.btn-group:not(:last-child)>.btn,
    .btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle) {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0
    }

    .btn-group-vertical>.btn-group:not(:first-child)>.btn,
    .btn-group-vertical>.btn:not(:first-child) {
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }

    .btn-group-toggle>.btn input[type=radio],
    .btn-group-toggle>.btn input[type=checkbox],
    .btn-group-toggle>.btn-group>.btn input[type=radio],
    .btn-group-toggle>.btn-group>.btn input[type=checkbox] {
        position: absolute;
        clip: rect(0, 0, 0, 0);
        pointer-events: none
    }

    .input-group {
        position: relative;
        display: flex;
        flex-wrap: wrap;
        align-items: stretch;
        width: 100%
    }

    .input-group>.custom-file,
    .input-group>.custom-select,
    .input-group>.form-control,
    .input-group>.form-control-plaintext {
        position: relative;
        flex: 1 1 auto;
        width: 1%;
        margin-bottom: 0
    }

    .input-group>.custom-file .custom-file-input:focus~.custom-file-label,
    .input-group>.custom-select:focus,
    .input-group>.form-control:focus {
        z-index: 3
    }

    .input-group>.custom-file .custom-file-input:focus {
        z-index: 4
    }

    .input-group>.custom-file {
        display: flex;
        align-items: center
    }

    .input-group-append,
    .input-group-prepend {
        display: flex
    }

    .input-group-append .btn,
    .input-group-prepend .btn {
        position: relative;
        z-index: 2
    }

    .input-group-append .btn:focus,
    .input-group-prepend .btn:focus {
        z-index: 3
    }

    .input-group-prepend {
        margin-right: -1px
    }

    .input-group-text {
        display: flex;
        align-items: center;
        padding: .375rem .75rem;
        font-size: .875rem;
        line-height: 1.5;
        color: #4F5467;
        text-align: center;
        background-color: #f6f8f9;
        border: 1px solid #e9ecef;
        border-radius: 2px
    }

    .nav,
    .navbar {
        flex-wrap: wrap
    }

    .input-group-text input[type=radio],
    .input-group-text input[type=checkbox] {
        margin-top: 0
    }

    .input-group-lg>.custom-select,
    .input-group-lg>.form-control:not(textarea) {
        height: calc(1.5em + 1rem + 2px)
    }

    .input-group-lg>.custom-select,
    .input-group-lg>.form-control,
    .input-group-lg>.input-group-append>.btn,
    .input-group-lg>.input-group-append>.input-group-text,
    .input-group-lg>.input-group-prepend>.btn,
    .input-group-lg>.input-group-prepend>.input-group-text {
        padding: .5rem 1rem;
        font-size: 1.09375rem;
        line-height: 1.5;
        border-radius: 2px
    }

    .input-group-sm>.custom-select,
    .input-group-sm>.form-control:not(textarea) {
        height: calc(1.5em + .5rem + 2px)
    }

    .input-group-sm>.custom-select,
    .input-group-sm>.form-control,
    .input-group-sm>.input-group-append>.btn,
    .input-group-sm>.input-group-append>.input-group-text,
    .input-group-sm>.input-group-prepend>.btn,
    .input-group-sm>.input-group-prepend>.input-group-text {
        padding: .25rem .5rem;
        font-size: .76563rem;
        line-height: 1.5;
        border-radius: 1px
    }

    .input-group-lg>.custom-select,
    .input-group-sm>.custom-select {
        padding-right: 1.75rem
    }

    .input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle),
    .input-group>.input-group-append:last-child>.input-group-text:not(:last-child),
    .input-group>.input-group-append:not(:last-child)>.btn,
    .input-group>.input-group-append:not(:last-child)>.input-group-text,
    .input-group>.input-group-prepend>.btn,
    .input-group>.input-group-prepend>.input-group-text {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .input-group>.input-group-append>.btn,
    .input-group>.input-group-append>.input-group-text,
    .input-group>.input-group-prepend:first-child>.btn:not(:first-child),
    .input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child),
    .input-group>.input-group-prepend:not(:first-child)>.btn,
    .input-group>.input-group-prepend:not(:first-child)>.input-group-text {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    .custom-control {
        position: relative;
        display: block;
        min-height: 1.3125rem;
        padding-left: 1.5rem
    }

    .custom-control-inline {
        display: inline-flex;
        margin-right: 1rem
    }

    .custom-control-input {
        position: absolute;
        z-index: -1;
        opacity: 0
    }

    .custom-control-input:checked~.custom-control-label::before {
        color: #fff;
        border-color: #2962FF;
        background-color: #2962FF
    }

    .custom-control-input:focus:not(:checked)~.custom-control-label::before {
        border-color: rgba(0, 0, 0, .25)
    }

    .custom-control-input:not(:disabled):active~.custom-control-label::before {
        color: #fff;
        background-color: #000;
        border-color: #000
    }

    .custom-control-input:disabled~.custom-control-label {
        color: #6c757d
    }

    .custom-control-input:disabled~.custom-control-label::before {
        background-color: #e9ecef
    }

    .custom-control-label {
        position: relative;
        vertical-align: top
    }

    .custom-control-label::after,
    .custom-control-label::before {
        position: absolute;
        left: -1.5rem;
        display: block;
        width: 1rem;
        height: 1rem;
        content: ""
    }

    .custom-control-label::before {
        pointer-events: none;
        background-color: #fff;
        border: 1px solid #afb5c1
    }

    .custom-control-label::after {
        background: 50%/50% 50% no-repeat
    }

    .custom-checkbox .custom-control-label::before {
        border-radius: 2px
    }

    .custom-checkbox .custom-control-input:checked~.custom-control-label::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e")
    }

    .custom-checkbox .custom-control-input:indeterminate~.custom-control-label::before {
        border-color: #2962FF;
        background-color: #2962FF
    }

    .custom-checkbox .custom-control-input:disabled:checked~.custom-control-label::before,
    .custom-checkbox .custom-control-input:disabled:indeterminate~.custom-control-label::before,
    .custom-radio .custom-control-input:disabled:checked~.custom-control-label::before {
        background-color: rgba(116, 96, 238, .5)
    }

    .custom-checkbox .custom-control-input:indeterminate~.custom-control-label::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e")
    }

    .custom-radio .custom-control-label::before {
        border-radius: 50%
    }

    .custom-radio .custom-control-input:checked~.custom-control-label::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e")
    }

    .custom-switch {
        padding-left: 2.25rem
    }

    .custom-switch .custom-control-label::before {
        left: -2.25rem;
        width: 1.75rem;
        pointer-events: all;
        border-radius: .5rem
    }

    .custom-switch .custom-control-label::after {
        top: calc(.15625rem + 2px);
        left: calc(-2.25rem + 2px);
        width: calc(1rem - 4px);
        height: calc(1rem - 4px);
        background-color: #afb5c1;
        border-radius: .5rem;
        transition: transform .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
    }

    @media (prefers-reduced-motion:reduce) {
        .custom-switch .custom-control-label::after {
            transition: none
        }
    }

    .custom-switch .custom-control-input:checked~.custom-control-label::after {
        background-color: #fff;
        transform: translateX(.75rem)
    }

    .custom-switch .custom-control-input:disabled:checked~.custom-control-label::before {
        background-color: rgba(116, 96, 238, .5)
    }

    .custom-select {
        display: inline-block;
        width: 100%;
        height: calc(1.5em + .75rem + 2px);
        padding: .375rem 1.75rem .375rem .75rem;
        font-size: .875rem;
        line-height: 1.5;
        color: #4F5467;
        vertical-align: middle;
        background: url(../../assets/images/custom-select.png) right .75rem center/8px 10px no-repeat #fff;
        border: 1px solid #e9ecef;
        border-radius: 2px;
        appearance: none
    }

    .custom-file-input:focus~.custom-file-label,
    .custom-select:focus {
        border-color: rgba(0, 0, 0, .25);
        box-shadow: transparent
    }

    .custom-select:focus {
        outline: 0
    }

    .custom-select:focus::-ms-value {
        color: #4F5467;
        background-color: #fff
    }

    .custom-file-input:disabled~.custom-file-label,
    .custom-select:disabled {
        background-color: #e9ecef
    }

    .custom-select[multiple],
    .custom-select[size]:not([size="1"]) {
        height: auto;
        padding-right: .75rem;
        background-image: none
    }

    .custom-select:disabled {
        color: #6c757d
    }

    .custom-select::-ms-expand {
        display: none
    }

    .custom-select-sm {
        height: calc(1.5em + .5rem + 2px);
        padding-top: .25rem;
        padding-bottom: .25rem;
        padding-left: .5rem;
        font-size: .76563rem
    }

    .custom-select-lg {
        height: calc(1.5em + 1rem + 2px);
        padding-top: .5rem;
        padding-bottom: .5rem;
        padding-left: 1rem;
        font-size: 1.09375rem
    }

    .custom-file,
    .custom-file-input,
    .custom-file-label {
        height: calc(1.5em + .75rem + 2px)
    }

    .custom-file {
        position: relative;
        display: inline-block;
        width: 100%
    }

    .custom-file-input {
        position: relative;
        z-index: 2;
        width: 100%;
        margin: 0;
        opacity: 0
    }

    .custom-file-label,
    .custom-file-label::after {
        position: absolute;
        padding: .375rem .75rem;
        line-height: 1.5;
        color: #4F5467;
        top: 0;
        right: 0
    }

    .custom-file-input:lang(en)~.custom-file-label::after {
        content: "Browse"
    }

    .custom-file-input~.custom-file-label[data-browse]::after {
        content: attr(data-browse)
    }

    .custom-file-label {
        left: 0;
        z-index: 1;
        font-weight: 400;
        background-color: #fff;
        border: 1px solid #e9ecef;
        border-radius: 2px
    }

    .alert-link,
    .close {
        font-weight: 700
    }

    .custom-file-label::after {
        bottom: 0;
        z-index: 3;
        display: block;
        height: calc(1.5em + .75rem);
        content: "Browse";
        background-color: #f6f8f9;
        border-left: inherit;
        border-radius: 0 2px 2px 0
    }

    .custom-range {
        width: 100%;
        height: calc(1rem + .4rem);
        padding: 0;
        background-color: transparent;
        appearance: none
    }

    .custom-range:focus {
        outline: 0
    }

    .custom-range:focus::-webkit-slider-thumb {
        box-shadow: 0 0 0 1px #f2f4f5, transparent
    }

    .custom-range:focus::-moz-range-thumb {
        box-shadow: 0 0 0 1px #f2f4f5, transparent
    }

    .custom-range:focus::-ms-thumb {
        box-shadow: 0 0 0 1px #f2f4f5, transparent
    }

    .custom-range::-moz-focus-outer {
        border: 0
    }

    .custom-range::-webkit-slider-thumb {
        width: 1rem;
        height: 1rem;
        margin-top: -.25rem;
        background-color: #2962FF;
        border: 0;
        border-radius: 1rem;
        transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        appearance: none
    }

    @media (prefers-reduced-motion:reduce) {
        .custom-range::-webkit-slider-thumb {
            transition: none
        }
    }

    .custom-range::-webkit-slider-thumb:active {
        background-color: #dce5ff
    }

    .custom-range::-webkit-slider-runnable-track {
        width: 100%;
        height: .5rem;
        color: transparent;
        cursor: pointer;
        background-color: #dee2e6;
        border-color: transparent;
        border-radius: 1rem
    }

    .custom-range::-moz-range-thumb {
        width: 1rem;
        height: 1rem;
        background-color: #2962FF;
        border: 0;
        border-radius: 1rem;
        transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        appearance: none
    }

    @media (prefers-reduced-motion:reduce) {
        .custom-range::-moz-range-thumb {
            transition: none
        }
    }

    .custom-range::-moz-range-thumb:active {
        background-color: #dce5ff
    }

    .custom-range::-moz-range-track {
        width: 100%;
        height: .5rem;
        color: transparent;
        cursor: pointer;
        background-color: #dee2e6;
        border-color: transparent;
        border-radius: 1rem
    }

    .custom-range::-ms-thumb {
        width: 1rem;
        height: 1rem;
        margin-top: 0;
        margin-right: .2rem;
        margin-left: .2rem;
        background-color: #2962FF;
        border: 0;
        border-radius: 1rem;
        transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        appearance: none
    }

    @media (prefers-reduced-motion:reduce) {
        .custom-range::-ms-thumb {
            transition: none
        }
    }

    .custom-range::-ms-thumb:active {
        background-color: #dce5ff
    }

    .custom-range::-ms-track {
        width: 100%;
        height: .5rem;
        color: transparent;
        cursor: pointer;
        background-color: transparent;
        border-color: transparent;
        border-width: .5rem
    }

    .custom-range::-ms-fill-lower {
        background-color: #dee2e6;
        border-radius: 1rem
    }

    .custom-range::-ms-fill-upper {
        margin-right: 15px;
        background-color: #dee2e6;
        border-radius: 1rem
    }

    .custom-range:disabled::-webkit-slider-thumb {
        background-color: #afb5c1
    }

    .custom-range:disabled::-webkit-slider-runnable-track {
        cursor: default
    }

    .custom-range:disabled::-moz-range-thumb {
        background-color: #afb5c1
    }

    .custom-range:disabled::-moz-range-track {
        cursor: default
    }

    .custom-range:disabled::-ms-thumb {
        background-color: #afb5c1
    }

    .custom-control-label::before,
    .custom-file-label,
    .custom-select {
        transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
    }

    @media (prefers-reduced-motion:reduce) {
        .custom-control-label::before,
        .custom-file-label,
        .custom-select {
            transition: none
        }
    }

    .nav {
        display: flex;
        padding-left: 0
    }

    .nav-link,
    .navbar {
        padding: .5rem 1rem
    }

    .nav-link {
        display: block
    }

    .nav-link.disabled {
        color: #6c757d;
        pointer-events: none;
        cursor: default
    }

    .nav-tabs {
        border-bottom: 1px solid #dee2e6
    }

    .nav-tabs .nav-item {
        margin-bottom: -1px
    }

    .nav-tabs .nav-link {
        border: 1px solid transparent;
        border-top-left-radius: 2px;
        border-top-right-radius: 2px
    }

    .nav-tabs .nav-link:focus,
    .nav-tabs .nav-link:hover {
        border-color: #e9ecef #e9ecef #dee2e6
    }

    .nav-tabs .nav-link.disabled {
        color: #6c757d;
        background-color: transparent;
        border-color: transparent
    }

    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
        color: #4F5467;
        background-color: #fff;
        border-color: #dee2e6 #dee2e6 #fff
    }

    .nav-tabs .dropdown-menu {
        margin-top: -1px;
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }

    .nav-pills .nav-link {
        border-radius: 2px
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        color: #fff;
        background-color: #2962FF
    }

    .nav-fill .nav-item {
        flex: 1 1 auto;
        text-align: center
    }

    .nav-justified .nav-item {
        flex-basis: 0;
        flex-grow: 1;
        text-align: center
    }

    .tab-content>.tab-pane {
        display: none
    }

    .tab-content>.active {
        display: block
    }

    .navbar {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: space-between
    }

    .navbar>.container,
    .navbar>.container-fluid {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between
    }

    .navbar-brand {
        display: inline-block;
        padding-top: .33594rem;
        padding-bottom: .33594rem;
        margin-right: 1rem;
        font-size: 1.09375rem;
        line-height: inherit
    }

    .navbar-nav {
        display: flex;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0
    }

    .navbar-nav .nav-link {
        padding-right: 0;
        padding-left: 0
    }

    .navbar-nav .dropdown-menu {
        position: static;
        float: none
    }

    .navbar-text {
        display: inline-block;
        padding-top: .5rem;
        padding-bottom: .5rem
    }

    .navbar-collapse {
        flex-basis: 100%;
        flex-grow: 1;
        align-items: center
    }

    .navbar-toggler {
        padding: .25rem .75rem;
        font-size: 1.09375rem;
        line-height: 1;
        background-color: transparent;
        border: 1px solid transparent;
        border-radius: 2px
    }

    .navbar-toggler-icon {
        display: inline-block;
        width: 1.5em;
        height: 1.5em;
        vertical-align: middle;
        content: "";
        background: center center no-repeat;
        background-size: 100% 100%
    }

    @media (max-width:575.98px) {
        .navbar-expand-sm>.container,
        .navbar-expand-sm>.container-fluid {
            padding-right: 0;
            padding-left: 0
        }
    }

    @media (min-width:576px) {
        .navbar-expand-sm {
            flex-flow: row nowrap;
            justify-content: flex-start
        }
        .navbar-expand-sm .navbar-nav {
            flex-direction: row
        }
        .navbar-expand-sm .navbar-nav .dropdown-menu {
            position: absolute
        }
        .navbar-expand-sm .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem
        }
        .navbar-expand-sm>.container,
        .navbar-expand-sm>.container-fluid {
            flex-wrap: nowrap
        }
        .navbar-expand-sm .navbar-collapse {
            display: flex!important;
            flex-basis: auto
        }
        .navbar-expand-sm .navbar-toggler {
            display: none
        }
    }

    @media (max-width:767.98px) {
        .navbar-expand-md>.container,
        .navbar-expand-md>.container-fluid {
            padding-right: 0;
            padding-left: 0
        }
    }

    @media (min-width:768px) {
        .navbar-expand-md {
            flex-flow: row nowrap;
            justify-content: flex-start
        }
        .navbar-expand-md .navbar-nav {
            flex-direction: row
        }
        .navbar-expand-md .navbar-nav .dropdown-menu {
            position: absolute
        }
        .navbar-expand-md .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem
        }
        .navbar-expand-md>.container,
        .navbar-expand-md>.container-fluid {
            flex-wrap: nowrap
        }
        .navbar-expand-md .navbar-collapse {
            display: flex!important;
            flex-basis: auto
        }
        .navbar-expand-md .navbar-toggler {
            display: none
        }
    }

    @media (max-width:991.98px) {
        .navbar-expand-lg>.container,
        .navbar-expand-lg>.container-fluid {
            padding-right: 0;
            padding-left: 0
        }
    }

    @media (min-width:992px) {
        .navbar-expand-lg {
            flex-flow: row nowrap;
            justify-content: flex-start
        }
        .navbar-expand-lg .navbar-nav {
            flex-direction: row
        }
        .navbar-expand-lg .navbar-nav .dropdown-menu {
            position: absolute
        }
        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem
        }
        .navbar-expand-lg>.container,
        .navbar-expand-lg>.container-fluid {
            flex-wrap: nowrap
        }
        .navbar-expand-lg .navbar-collapse {
            display: flex!important;
            flex-basis: auto
        }
        .navbar-expand-lg .navbar-toggler {
            display: none
        }
    }

    @media (max-width:1599.98px) {
        .navbar-expand-xl>.container,
        .navbar-expand-xl>.container-fluid {
            padding-right: 0;
            padding-left: 0
        }
    }

    @media (min-width:1600px) {
        .navbar-expand-xl {
            flex-flow: row nowrap;
            justify-content: flex-start
        }
        .navbar-expand-xl .navbar-nav {
            flex-direction: row
        }
        .navbar-expand-xl .navbar-nav .dropdown-menu {
            position: absolute
        }
        .navbar-expand-xl .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem
        }
        .navbar-expand-xl>.container,
        .navbar-expand-xl>.container-fluid {
            flex-wrap: nowrap
        }
        .navbar-expand-xl .navbar-collapse {
            display: flex!important;
            flex-basis: auto
        }
        .navbar-expand-xl .navbar-toggler {
            display: none
        }
    }

    .navbar-expand {
        flex-flow: row nowrap;
        justify-content: flex-start
    }

    .navbar-expand>.container,
    .navbar-expand>.container-fluid {
        padding-right: 0;
        padding-left: 0
    }

    .navbar-expand .navbar-nav {
        flex-direction: row
    }

    .navbar-expand .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand .navbar-nav .nav-link {
        padding-right: .5rem;
        padding-left: .5rem
    }

    .navbar-expand>.container,
    .navbar-expand>.container-fluid {
        flex-wrap: nowrap
    }

    .navbar-expand .navbar-collapse {
        display: flex!important;
        flex-basis: auto
    }

    .navbar-expand .navbar-toggler {
        display: none
    }

    .navbar-light .navbar-brand,
    .navbar-light .navbar-brand:focus,
    .navbar-light .navbar-brand:hover {
        color: rgba(0, 0, 0, .9)
    }

    .navbar-light .navbar-nav .nav-link {
        color: rgba(0, 0, 0, .5)
    }

    .navbar-light .navbar-nav .nav-link:focus,
    .navbar-light .navbar-nav .nav-link:hover {
        color: rgba(0, 0, 0, .7)
    }

    .navbar-light .navbar-nav .nav-link.disabled {
        color: rgba(0, 0, 0, .3)
    }

    .navbar-light .navbar-nav .active>.nav-link,
    .navbar-light .navbar-nav .nav-link.active,
    .navbar-light .navbar-nav .nav-link.show,
    .navbar-light .navbar-nav .show>.nav-link {
        color: rgba(0, 0, 0, .9)
    }

    .navbar-light .navbar-toggler {
        color: rgba(0, 0, 0, .5);
        border-color: rgba(0, 0, 0, .1)
    }

    .navbar-light .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")
    }

    .navbar-light .navbar-text {
        color: rgba(0, 0, 0, .5)
    }

    .navbar-light .navbar-text a,
    .navbar-light .navbar-text a:focus,
    .navbar-light .navbar-text a:hover {
        color: rgba(0, 0, 0, .9)
    }

    .navbar-dark .navbar-brand,
    .navbar-dark .navbar-brand:focus,
    .navbar-dark .navbar-brand:hover {
        color: #fff
    }

    .navbar-dark .navbar-nav .nav-link {
        color: rgba(255, 255, 255, .8)
    }

    .navbar-dark .navbar-nav .nav-link:focus,
    .navbar-dark .navbar-nav .nav-link:hover {
        color: #fff
    }

    .navbar-dark .navbar-nav .nav-link.disabled {
        color: rgba(255, 255, 255, .25)
    }

    .navbar-dark .navbar-nav .active>.nav-link,
    .navbar-dark .navbar-nav .nav-link.active,
    .navbar-dark .navbar-nav .nav-link.show,
    .navbar-dark .navbar-nav .show>.nav-link {
        color: #fff
    }

    .navbar-dark .navbar-toggler {
        color: rgba(255, 255, 255, .8);
        border-color: rgba(255, 255, 255, .1)
    }

    .navbar-dark .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(255, 255, 255, 0.8)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")
    }

    .navbar-dark .navbar-text {
        color: rgba(255, 255, 255, .8)
    }

    .navbar-dark .navbar-text a,
    .navbar-dark .navbar-text a:focus,
    .navbar-dark .navbar-text a:hover {
        color: #fff
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid transparent;
        border-radius: 0
    }

    .card>hr {
        margin-right: 0;
        margin-left: 0
    }

    .card>.list-group:first-child .list-group-item:first-child {
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }

    .card>.list-group:last-child .list-group-item:last-child {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0
    }

    .card-body {
        flex: 1 1 auto;
        padding: 1.25rem
    }

    .card-footer,
    .card-header {
        padding: .75rem 1.25rem;
        background-color: rgba(0, 0, 0, .03)
    }

    .card-title {
        margin-bottom: .75rem
    }

    .card-header,
    .card-subtitle,
    .card-text:last-child {
        margin-bottom: 0
    }

    .card-subtitle {
        margin-top: -.375rem
    }

    .card-link:hover {
        text-decoration: none
    }

    .card-link+.card-link {
        margin-left: 1.25rem
    }

    .card-header-pills,
    .card-header-tabs {
        margin-right: -.625rem;
        margin-left: -.625rem
    }

    .card-header {
        border-bottom: 0 solid transparent
    }

    .card-header:first-child {
        border-radius: calc(0px - 0px) calc(0px - 0px) 0 0
    }

    .card-header+.list-group .list-group-item:first-child {
        border-top: 0
    }

    .card-footer {
        border-top: 0 solid transparent
    }

    .card-footer:last-child {
        border-radius: 0 0 calc(0px - 0px) calc(0px - 0px)
    }

    .card-header-tabs {
        margin-bottom: -.75rem;
        border-bottom: 0
    }

    .card-img-overlay {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        padding: 1.25rem
    }

    .alert,
    .btn .badge,
    .page-link {
        position: relative
    }

    .card-img {
        width: 100%;
        border-radius: calc(0px - 0px)
    }

    .card-img-top {
        width: 100%;
        border-top-left-radius: calc(0px - 0px);
        border-top-right-radius: calc(0px - 0px)
    }

    .card-img-bottom {
        width: 100%;
        border-bottom-right-radius: calc(0px - 0px);
        border-bottom-left-radius: calc(0px - 0px)
    }

    .card-deck {
        display: flex;
        flex-direction: column
    }

    .card-deck .card {
        margin-bottom: 10px
    }

    @media (min-width:576px) {
        .card-deck {
            flex-flow: row wrap;
            margin-right: -10px;
            margin-left: -10px
        }
        .card-deck .card {
            display: flex;
            flex: 1 0 0%;
            flex-direction: column;
            margin-right: 10px;
            margin-bottom: 0;
            margin-left: 10px
        }
    }

    .card-group {
        display: flex;
        flex-direction: column
    }

    .card-group>.card {
        margin-bottom: 10px
    }

    @media (min-width:576px) {
        .card-group {
            flex-flow: row wrap
        }
        .card-group>.card {
            flex: 1 0 0%;
            margin-bottom: 0
        }
        .card-group>.card+.card {
            margin-left: 0;
            border-left: 0
        }
        .card-group>.card:not(:last-child) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }
        .card-group>.card:not(:last-child) .card-header,
        .card-group>.card:not(:last-child) .card-img-top {
            border-top-right-radius: 0
        }
        .card-group>.card:not(:last-child) .card-footer,
        .card-group>.card:not(:last-child) .card-img-bottom {
            border-bottom-right-radius: 0
        }
        .card-group>.card:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }
        .card-group>.card:not(:first-child) .card-header,
        .card-group>.card:not(:first-child) .card-img-top {
            border-top-left-radius: 0
        }
        .card-group>.card:not(:first-child) .card-footer,
        .card-group>.card:not(:first-child) .card-img-bottom {
            border-bottom-left-radius: 0
        }
        .card-columns {
            column-count: 3;
            column-gap: 1.25rem;
            orphans: 1;
            widows: 1
        }
        .card-columns .card {
            display: inline-block;
            width: 100%
        }
    }

    .card-columns .card {
        margin-bottom: .75rem
    }

    .accordion>.card:not(:first-of-type) .card-header:first-child {
        border-radius: 0
    }

    .accordion>.card:not(:first-of-type):not(:last-of-type) {
        border-bottom: 0;
        border-radius: 0
    }

    .accordion>.card:first-of-type {
        border-bottom: 0;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0
    }

    .accordion>.card:last-of-type {
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }

    .breadcrumb,
    .pagination {
        border-radius: 2px;
        list-style: none
    }

    .accordion>.card .card-header {
        margin-bottom: 0
    }

    .breadcrumb {
        display: flex;
        flex-wrap: wrap;
        padding: .75rem 1rem;
        margin-bottom: 1.5rem;
        background-color: #f2f4f5
    }

    .breadcrumb-item+.breadcrumb-item {
        padding-left: .5rem
    }

    .breadcrumb-item+.breadcrumb-item::before {
        display: inline-block;
        padding-right: .5rem;
        color: #6c757d;
        content: "/"
    }

    .breadcrumb-item.active {
        color: #6c757d
    }

    .pagination {
        display: flex;
        padding-left: 0
    }

    .page-link {
        display: block;
        padding: .5rem .75rem;
        margin-left: -1px;
        line-height: 1.25;
        color: #7460ee;
        background-color: #fff;
        border: 1px solid #dee2e6
    }

    .page-item:first-child .page-link,
    .pagination-lg .page-item:first-child .page-link {
        border-top-left-radius: 2px;
        border-bottom-left-radius: 2px
    }

    .page-item:last-child .page-link,
    .pagination-lg .page-item:last-child .page-link {
        border-top-right-radius: 2px;
        border-bottom-right-radius: 2px
    }

    .page-link:hover {
        z-index: 2;
        color: #381be7;
        background-color: #e9ecef;
        border-color: #dee2e6
    }

    .page-link:focus {
        z-index: 2;
        outline: 0;
        box-shadow: transparent
    }

    .page-item:first-child .page-link {
        margin-left: 0
    }

    .page-item.active .page-link {
        z-index: 1;
        color: #fff;
        background-color: #2962FF;
        border-color: #2962FF
    }

    .page-item.disabled .page-link {
        color: #6c757d;
        pointer-events: none;
        cursor: auto;
        background-color: #fff;
        border-color: #dee2e6
    }

    .pagination-lg .page-link {
        padding: .75rem 1.5rem;
        font-size: 1.09375rem;
        line-height: 1.5
    }

    .pagination-sm .page-link {
        padding: .25rem .5rem;
        font-size: .76563rem;
        line-height: 1.5
    }

    .pagination-sm .page-item:first-child .page-link {
        border-top-left-radius: 1px;
        border-bottom-left-radius: 1px
    }

    .pagination-sm .page-item:last-child .page-link {
        border-top-right-radius: 1px;
        border-bottom-right-radius: 1px
    }

    .badge {
        display: inline-block;
        padding: .25em .4em;
        font-size: 75%;
        text-align: center;
        vertical-align: baseline;
        border-radius: 2px;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
    }

    @media (prefers-reduced-motion:reduce) {
        .badge {
            transition: none
        }
    }

    .badge:empty {
        display: none
    }

    .btn .badge {
        top: -1px
    }

    .badge-pill {
        padding-right: .2em;
        padding-left: .2em;
        border-radius: 10rem
    }

    .badge-primary {
        color: #fff;
        background-color: #7460ee
    }

    a.badge-primary:focus,
    a.badge-primary:hover {
        color: #fff;
        background-color: #4c32e9
    }

    a.badge-primary.focus,
    a.badge-primary:focus {
        outline: 0;
        box-shadow: 0 0 0 .2rem rgba(116, 96, 238, .5)
    }

    .badge-secondary {
        color: #fff;
        background-color: #6c757d
    }

    a.badge-secondary:focus,
    a.badge-secondary:hover {
        color: #fff;
        background-color: #545b62
    }

    a.badge-secondary.focus,
    a.badge-secondary:focus {
        outline: 0;
        box-shadow: 0 0 0 .2rem rgba(108, 117, 125, .5)
    }

    .badge-success {
        color: #fff;
        background-color: #5ac146
    }

    a.badge-success:focus,
    a.badge-success:hover {
        color: #fff;
        background-color: #469f35
    }

    a.badge-success.focus,
    a.badge-success:focus {
        outline: 0;
        box-shadow: 0 0 0 .2rem rgba(90, 193, 70, .5)
    }

    .badge-info {
        color: #fff;
        background-color: #137eff
    }

    a.badge-info:focus,
    a.badge-info:hover {
        color: #fff;
        background-color: #0065df
    }

    a.badge-info.focus,
    a.badge-info:focus {
        outline: 0;
        box-shadow: 0 0 0 .2rem rgba(19, 126, 255, .5)
    }

    .badge-warning {
        color: #212529;
        background-color: #ffbc34
    }

    a.badge-warning:focus,
    a.badge-warning:hover {
        color: #212529;
        background-color: #ffab01
    }

    a.badge-warning.focus,
    a.badge-warning:focus {
        outline: 0;
        box-shadow: 0 0 0 .2rem rgba(255, 188, 52, .5)
    }

    .badge-danger {
        color: #fff;
        background-color: #fa5838
    }

    a.badge-danger:focus,
    a.badge-danger:hover {
        color: #fff;
        background-color: #f92e06
    }

    a.badge-danger.focus,
    a.badge-danger:focus {
        outline: 0;
        box-shadow: 0 0 0 .2rem rgba(250, 88, 56, .5)
    }

    .badge-light {
        color: #212529;
        background-color: #f6f8f9
    }

    a.badge-light:focus,
    a.badge-light:hover {
        color: #212529;
        background-color: #d7e0e5
    }

    a.badge-light.focus,
    a.badge-light:focus {
        outline: 0;
        box-shadow: 0 0 0 .2rem rgba(246, 248, 249, .5)
    }

    .badge-dark {
        color: #fff;
        background-color: #343a40
    }

    a.badge-dark:focus,
    a.badge-dark:hover {
        color: #fff;
        background-color: #1d2124
    }

    a.badge-dark.focus,
    a.badge-dark:focus {
        outline: 0;
        box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
    }

    .badge-cyan {
        color: #212529;
        background-color: #4fc3f7
    }

    a.badge-cyan:focus,
    a.badge-cyan:hover {
        color: #212529;
        background-color: #1eb2f5
    }

    a.badge-cyan.focus,
    a.badge-cyan:focus {
        outline: 0;
        box-shadow: 0 0 0 .2rem rgba(79, 195, 247, .5)
    }

    .badge-orange {
        color: #212529;
        background-color: #fb8c00
    }

    a.badge-orange:focus,
    a.badge-orange:hover {
        color: #212529;
        background-color: #c87000
    }

    a.badge-orange.focus,
    a.badge-orange:focus {
        outline: 0;
        box-shadow: 0 0 0 .2rem rgba(251, 140, 0, .5)
    }

    .badge-purple {
        color: #fff;
        background-color: #8b5edd
    }

    a.badge-purple:focus,
    a.badge-purple:hover {
        color: #fff;
        background-color: #6d34d4
    }

    a.badge-purple.focus,
    a.badge-purple:focus {
        outline: 0;
        box-shadow: 0 0 0 .2rem rgba(139, 94, 221, .5)
    }

    .jumbotron {
        padding: 2rem 1rem;
        margin-bottom: 2rem;
        background-color: #e9ecef;
        border-radius: 2px
    }

    @media (min-width:576px) {
        .jumbotron {
            padding: 4rem 2rem
        }
    }

    .jumbotron-fluid {
        padding-right: 0;
        padding-left: 0;
        border-radius: 0
    }

    .alert {
        padding: .75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: 2px
    }

    .alert-heading {
        color: inherit
    }

    .alert-dismissible {
        padding-right: 3.8125rem
    }

    .alert-dismissible .close {
        position: absolute;
        top: 0;
        right: 0;
        padding: .75rem 1.25rem;
        color: inherit
    }

    .alert-primary {
        color: #3c327c;
        background-color: #e3dffc;
        border-color: #d8d2fa
    }

    .alert-primary hr {
        border-top-color: #c4bbf7
    }

    .alert-primary .alert-link {
        color: #2a2358
    }

    .alert-secondary {
        color: #383d41;
        background-color: #e2e3e5;
        border-color: #d6d8db
    }

    .alert-secondary hr {
        border-top-color: #c8cbcf
    }

    .alert-secondary .alert-link {
        color: #202326
    }

    .alert-success {
        color: #2f6424;
        background-color: #def3da;
        border-color: #d1eecb
    }

    .alert-success hr {
        border-top-color: #c0e8b8
    }

    .alert-success .alert-link {
        color: #1d3f17
    }

    .alert-info {
        color: #0a4285;
        background-color: #d0e5ff;
        border-color: #bddbff
    }

    .alert-info hr {
        border-top-color: #a4cdff
    }

    .alert-info .alert-link {
        color: #062a56
    }

    .alert-warning {
        color: #85621b;
        background-color: #fff2d6;
        border-color: #ffecc6
    }

    .alert-warning hr {
        border-top-color: #ffe4ad
    }

    .alert-warning .alert-link {
        color: #5b4312
    }

    .alert-danger {
        color: #822e1d;
        background-color: #feded7;
        border-color: #fed0c7
    }

    .alert-danger hr {
        border-top-color: #febbae
    }

    .alert-danger .alert-link {
        color: #581f14
    }

    .alert-light {
        color: #808181;
        background-color: #fdfefe;
        border-color: #fcfdfd
    }

    .alert-light hr {
        border-top-color: #edf3f3
    }

    .alert-light .alert-link {
        color: #676767
    }

    .alert-dark {
        color: #1b1e21;
        background-color: #d6d8d9;
        border-color: #c6c8ca
    }

    .alert-dark hr {
        border-top-color: #b9bbbe
    }

    .alert-dark .alert-link {
        color: #040505
    }

    .alert-cyan {
        color: #296580;
        background-color: #dcf3fd;
        border-color: #ceeefd
    }

    .alert-cyan hr {
        border-top-color: #b6e6fc
    }

    .alert-cyan .alert-link {
        color: #1d4759
    }

    .alert-orange {
        color: #834900;
        background-color: #fee8cc;
        border-color: #fedfb8
    }

    .alert-orange hr {
        border-top-color: #fed49f
    }

    .alert-orange .alert-link {
        color: #502d00
    }

    .alert-purple {
        color: #483173;
        background-color: #e8dff8;
        border-color: #dfd2f5
    }

    .alert-purple hr {
        border-top-color: #d0bdf0
    }

    .alert-purple .alert-link {
        color: #32224f
    }

    @keyframes progress-bar-stripes {
        from {
            background-position: 5px 0
        }
        to {
            background-position: 0 0
        }
    }

    .progress {
        display: flex;
        height: 5px;
        font-size: .65625rem;
        background-color: #f6f8f9;
        border-radius: 2px
    }

    .progress-bar {
        display: flex;
        flex-direction: column;
        justify-content: center;
        color: #fff;
        text-align: center;
        background-color: #7460ee;
        transition: width .6s ease
    }

    .progress-bar-striped {
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-size: 5px 5px
    }

    .progress-bar-animated {
        animation: progress-bar-stripes 1s linear infinite
    }

    @media (prefers-reduced-motion:reduce) {
        .progress-bar {
            transition: none
        }
        .progress-bar-animated {
            animation: none
        }
    }

    .media {
        display: flex;
        align-items: flex-start
    }

    .media-body {
        flex: 1
    }

    .list-group {
        display: flex;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0
    }

    .list-group-item-action {
        width: 100%;
        color: #4F5467;
        text-align: inherit
    }

    .list-group-item-action:focus,
    .list-group-item-action:hover {
        z-index: 1;
        color: #4F5467;
        background-color: #f6f8f9
    }

    .list-group-item-action:active {
        color: #6a7a8c;
        background-color: #e9ecef
    }

    .list-group-item {
        position: relative;
        display: block;
        padding: .75rem 1.25rem;
        margin-bottom: -1px;
        background-color: #fff;
        border: 1px solid rgba(0, 0, 0, .125)
    }

    .list-group-item:first-child {
        border-top-left-radius: 2px;
        border-top-right-radius: 2px
    }

    .list-group-item:last-child {
        margin-bottom: 0;
        border-bottom-right-radius: 2px;
        border-bottom-left-radius: 2px
    }

    .list-group-item.disabled,
    .list-group-item:disabled {
        color: #6c757d;
        pointer-events: none;
        background-color: #fff
    }

    .list-group-item.active {
        z-index: 2;
        color: #fff;
        background-color: #2962FF;
        border-color: #2962FF
    }

    .list-group-horizontal {
        flex-direction: row
    }

    .list-group-horizontal .list-group-item {
        margin-right: -1px;
        margin-bottom: 0
    }

    .list-group-horizontal .list-group-item:first-child {
        border-top-left-radius: 2px;
        border-bottom-left-radius: 2px;
        border-top-right-radius: 0
    }

    .list-group-horizontal .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 2px;
        border-bottom-right-radius: 2px;
        border-bottom-left-radius: 0
    }

    @media (min-width:576px) {
        .list-group-horizontal-sm {
            flex-direction: row
        }
        .list-group-horizontal-sm .list-group-item {
            margin-right: -1px;
            margin-bottom: 0
        }
        .list-group-horizontal-sm .list-group-item:first-child {
            border-top-left-radius: 2px;
            border-bottom-left-radius: 2px;
            border-top-right-radius: 0
        }
        .list-group-horizontal-sm .list-group-item:last-child {
            margin-right: 0;
            border-top-right-radius: 2px;
            border-bottom-right-radius: 2px;
            border-bottom-left-radius: 0
        }
    }

    @media (min-width:768px) {
        .list-group-horizontal-md {
            flex-direction: row
        }
        .list-group-horizontal-md .list-group-item {
            margin-right: -1px;
            margin-bottom: 0
        }
        .list-group-horizontal-md .list-group-item:first-child {
            border-top-left-radius: 2px;
            border-bottom-left-radius: 2px;
            border-top-right-radius: 0
        }
        .list-group-horizontal-md .list-group-item:last-child {
            margin-right: 0;
            border-top-right-radius: 2px;
            border-bottom-right-radius: 2px;
            border-bottom-left-radius: 0
        }
    }

    @media (min-width:992px) {
        .list-group-horizontal-lg {
            flex-direction: row
        }
        .list-group-horizontal-lg .list-group-item {
            margin-right: -1px;
            margin-bottom: 0
        }
        .list-group-horizontal-lg .list-group-item:first-child {
            border-top-left-radius: 2px;
            border-bottom-left-radius: 2px;
            border-top-right-radius: 0
        }
        .list-group-horizontal-lg .list-group-item:last-child {
            margin-right: 0;
            border-top-right-radius: 2px;
            border-bottom-right-radius: 2px;
            border-bottom-left-radius: 0
        }
    }

    @media (min-width:1600px) {
        .list-group-horizontal-xl {
            flex-direction: row
        }
        .list-group-horizontal-xl .list-group-item {
            margin-right: -1px;
            margin-bottom: 0
        }
        .list-group-horizontal-xl .list-group-item:first-child {
            border-top-left-radius: 2px;
            border-bottom-left-radius: 2px;
            border-top-right-radius: 0
        }
        .list-group-horizontal-xl .list-group-item:last-child {
            margin-right: 0;
            border-top-right-radius: 2px;
            border-bottom-right-radius: 2px;
            border-bottom-left-radius: 0
        }
    }

    .list-group-flush .list-group-item {
        border-right: 0;
        border-left: 0;
        border-radius: 0
    }

    .list-group-flush .list-group-item:last-child {
        margin-bottom: -1px
    }

    .list-group-flush:first-child .list-group-item:first-child {
        border-top: 0
    }

    .list-group-flush:last-child .list-group-item:last-child {
        margin-bottom: 0;
        border-bottom: 0
    }

    .list-group-item-primary {
        color: #3c327c;
        background-color: #d8d2fa
    }

    .list-group-item-primary.list-group-item-action:focus,
    .list-group-item-primary.list-group-item-action:hover {
        color: #3c327c;
        background-color: #c4bbf7
    }

    .list-group-item-primary.list-group-item-action.active {
        color: #fff;
        background-color: #3c327c;
        border-color: #3c327c
    }

    .list-group-item-secondary {
        color: #383d41;
        background-color: #d6d8db
    }

    .list-group-item-secondary.list-group-item-action:focus,
    .list-group-item-secondary.list-group-item-action:hover {
        color: #383d41;
        background-color: #c8cbcf
    }

    .list-group-item-secondary.list-group-item-action.active {
        color: #fff;
        background-color: #383d41;
        border-color: #383d41
    }

    .list-group-item-success {
        color: #2f6424;
        background-color: #d1eecb
    }

    .list-group-item-success.list-group-item-action:focus,
    .list-group-item-success.list-group-item-action:hover {
        color: #2f6424;
        background-color: #c0e8b8
    }

    .list-group-item-success.list-group-item-action.active {
        color: #fff;
        background-color: #2f6424;
        border-color: #2f6424
    }

    .list-group-item-info {
        color: #0a4285;
        background-color: #bddbff
    }

    .list-group-item-info.list-group-item-action:focus,
    .list-group-item-info.list-group-item-action:hover {
        color: #0a4285;
        background-color: #a4cdff
    }

    .list-group-item-info.list-group-item-action.active {
        color: #fff;
        background-color: #0a4285;
        border-color: #0a4285
    }

    .list-group-item-warning {
        color: #85621b;
        background-color: #ffecc6
    }

    .list-group-item-warning.list-group-item-action:focus,
    .list-group-item-warning.list-group-item-action:hover {
        color: #85621b;
        background-color: #ffe4ad
    }

    .list-group-item-warning.list-group-item-action.active {
        color: #fff;
        background-color: #85621b;
        border-color: #85621b
    }

    .list-group-item-danger {
        color: #822e1d;
        background-color: #fed0c7
    }

    .list-group-item-danger.list-group-item-action:focus,
    .list-group-item-danger.list-group-item-action:hover {
        color: #822e1d;
        background-color: #febbae
    }

    .list-group-item-danger.list-group-item-action.active {
        color: #fff;
        background-color: #822e1d;
        border-color: #822e1d
    }

    .list-group-item-light {
        color: #808181;
        background-color: #fcfdfd
    }

    .list-group-item-light.list-group-item-action:focus,
    .list-group-item-light.list-group-item-action:hover {
        color: #808181;
        background-color: #edf3f3
    }

    .list-group-item-light.list-group-item-action.active {
        color: #fff;
        background-color: #808181;
        border-color: #808181
    }

    .list-group-item-dark {
        color: #1b1e21;
        background-color: #c6c8ca
    }

    .list-group-item-dark.list-group-item-action:focus,
    .list-group-item-dark.list-group-item-action:hover {
        color: #1b1e21;
        background-color: #b9bbbe
    }

    .list-group-item-dark.list-group-item-action.active {
        color: #fff;
        background-color: #1b1e21;
        border-color: #1b1e21
    }

    .list-group-item-cyan {
        color: #296580;
        background-color: #ceeefd
    }

    .list-group-item-cyan.list-group-item-action:focus,
    .list-group-item-cyan.list-group-item-action:hover {
        color: #296580;
        background-color: #b6e6fc
    }

    .list-group-item-cyan.list-group-item-action.active {
        color: #fff;
        background-color: #296580;
        border-color: #296580
    }

    .list-group-item-orange {
        color: #834900;
        background-color: #fedfb8
    }

    .list-group-item-orange.list-group-item-action:focus,
    .list-group-item-orange.list-group-item-action:hover {
        color: #834900;
        background-color: #fed49f
    }

    .list-group-item-orange.list-group-item-action.active {
        color: #fff;
        background-color: #834900;
        border-color: #834900
    }

    .list-group-item-purple {
        color: #483173;
        background-color: #dfd2f5
    }

    .list-group-item-purple.list-group-item-action:focus,
    .list-group-item-purple.list-group-item-action:hover {
        color: #483173;
        background-color: #d0bdf0
    }

    .list-group-item-purple.list-group-item-action.active {
        color: #fff;
        background-color: #483173;
        border-color: #483173
    }

    .close {
        float: right;
        font-size: 1.3125rem;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        opacity: .5
    }

    .close:hover {
        color: #000
    }

    .close:not(:disabled):not(.disabled):focus,
    .close:not(:disabled):not(.disabled):hover {
        opacity: .75
    }

    button.close {
        padding: 0;
        background-color: transparent;
        border: 0;
        appearance: none
    }

    .toast,
    .toast-header {
        background-color: rgba(255, 255, 255, .85)
    }

    a.close.disabled {
        pointer-events: none
    }

    .toast {
        max-width: 350px;
        font-size: .875rem;
        border: 1px solid rgba(0, 0, 0, .1);
        box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .1);
        backdrop-filter: blur(10px);
        opacity: 0;
        border-radius: .25rem
    }

    .popover,
    .tooltip {
        font-family: Rubik, sans-serif;
        font-style: normal;
        font-weight: 400;
        line-height: 1.5;
        text-transform: none;
        letter-spacing: normal;
        word-break: normal;
        word-spacing: normal;
        white-space: normal;
        line-break: auto;
        font-size: .76563rem;
        word-wrap: break-word;
        text-decoration: none;
        text-shadow: none
    }

    .toast:not(:last-child) {
        margin-bottom: .75rem
    }

    .toast.showing {
        opacity: 1
    }

    .toast.show {
        display: block;
        opacity: 1
    }

    .toast.hide {
        display: none
    }

    .toast-header {
        display: flex;
        align-items: center;
        padding: .25rem .75rem;
        color: #6c757d;
        border-bottom: 1px solid rgba(0, 0, 0, .05)
    }

    .toast-body {
        padding: .75rem
    }

    .modal-open .modal {
        overflow-x: hidden;
        overflow-y: auto
    }

    .modal {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1050;
        display: none;
        width: 100%;
        height: 100%;
        overflow: hidden;
        outline: 0
    }

    .modal-dialog {
        position: relative;
        width: auto;
        margin: .5rem;
        pointer-events: none
    }

    .modal.fade .modal-dialog {
        transition: transform .3s ease-out;
        transform: translate(0, -50px)
    }

    @media (prefers-reduced-motion:reduce) {
        .modal.fade .modal-dialog {
            transition: none
        }
    }

    .modal.show .modal-dialog {
        transform: none
    }

    .modal-dialog-scrollable {
        display: flex;
        max-height: calc(100% - 1rem)
    }

    .modal-dialog-scrollable .modal-content {
        max-height: calc(100vh - 1rem);
        overflow: hidden
    }

    .modal-dialog-scrollable .modal-footer,
    .modal-dialog-scrollable .modal-header {
        flex-shrink: 0
    }

    .modal-dialog-scrollable .modal-body {
        overflow-y: auto
    }

    .modal-dialog-centered {
        display: flex;
        align-items: center;
        min-height: calc(100% - 1rem)
    }

    .modal-dialog-centered::before {
        display: block;
        height: calc(100vh - 1rem);
        content: ""
    }

    .modal-dialog-centered.modal-dialog-scrollable {
        flex-direction: column;
        justify-content: center;
        height: 100%
    }

    .modal-dialog-centered.modal-dialog-scrollable .modal-content {
        max-height: none
    }

    .modal-dialog-centered.modal-dialog-scrollable::before {
        content: none
    }

    .carousel-inner::after,
    .clearfix::after,
    .embed-responsive::before,
    .popover .arrow::after,
    .popover .arrow::before,
    .stretched-link::after,
    .tooltip .arrow::before {
        content: ""
    }

    .modal-content {
        position: relative;
        display: flex;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: #fff;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: 2px;
        outline: 0
    }

    .modal-backdrop {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1040;
        width: 100vw;
        height: 100vh;
        background-color: #000
    }

    .modal-backdrop.fade {
        opacity: 0
    }

    .modal-backdrop.show {
        opacity: .5
    }

    .modal-header {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        padding: 1rem;
        border-bottom: 1px solid rgba(0, 0, 0, .1);
        border-top-left-radius: 2px;
        border-top-right-radius: 2px
    }

    .modal-header .close {
        padding: 1rem;
        margin: -1rem -1rem -1rem auto
    }

    .modal-title {
        margin-bottom: 0;
        line-height: 1.5
    }

    .modal-body {
        position: relative;
        flex: 1 1 auto;
        padding: 1rem
    }

    .modal-footer {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        padding: 1rem;
        border-top: 1px solid rgba(0, 0, 0, .1);
        border-bottom-right-radius: 2px;
        border-bottom-left-radius: 2px
    }

    .popover,
    .popover .arrow,
    .popover .arrow::after,
    .popover .arrow::before,
    .tooltip,
    .tooltip .arrow {
        position: absolute;
        display: block
    }

    .modal-footer>:not(:first-child) {
        margin-left: .25rem
    }

    .modal-footer>:not(:last-child) {
        margin-right: .25rem
    }

    .modal-scrollbar-measure {
        position: absolute;
        top: -9999px;
        width: 50px;
        height: 50px;
        overflow: scroll
    }

    @media (min-width:576px) {
        .modal-dialog {
            max-width: 500px;
            margin: 1.75rem auto
        }
        .modal-dialog-scrollable {
            max-height: calc(100% - 3.5rem)
        }
        .modal-dialog-scrollable .modal-content {
            max-height: calc(100vh - 3.5rem)
        }
        .modal-dialog-centered {
            min-height: calc(100% - 3.5rem)
        }
        .modal-dialog-centered::before {
            height: calc(100vh - 3.5rem)
        }
        .modal-sm {
            max-width: 300px
        }
    }

    @media (min-width:992px) {
        .modal-lg,
        .modal-xl {
            max-width: 800px
        }
    }

    @media (min-width:1600px) {
        .modal-xl {
            max-width: 1140px
        }
    }

    .tooltip {
        z-index: 1070;
        margin: 0;
        text-align: left;
        text-align: start;
        opacity: 0
    }

    .tooltip.show {
        opacity: .9
    }

    .tooltip .arrow {
        width: .8rem;
        height: .4rem
    }

    .tooltip .arrow::before {
        position: absolute;
        border-color: transparent;
        border-style: solid
    }

    .bs-tooltip-auto[x-placement^=top],
    .bs-tooltip-top {
        padding: .4rem 0
    }

    .bs-tooltip-auto[x-placement^=top] .arrow,
    .bs-tooltip-top .arrow {
        bottom: 0
    }

    .bs-tooltip-auto[x-placement^=top] .arrow::before,
    .bs-tooltip-top .arrow::before {
        top: 0;
        border-width: .4rem .4rem 0;
        border-top-color: #000
    }

    .bs-tooltip-auto[x-placement^=right],
    .bs-tooltip-right {
        padding: 0 .4rem
    }

    .bs-tooltip-auto[x-placement^=right] .arrow,
    .bs-tooltip-right .arrow {
        left: 0;
        width: .4rem;
        height: .8rem
    }

    .bs-tooltip-auto[x-placement^=right] .arrow::before,
    .bs-tooltip-right .arrow::before {
        right: 0;
        border-width: .4rem .4rem .4rem 0;
        border-right-color: #000
    }

    .bs-tooltip-auto[x-placement^=bottom],
    .bs-tooltip-bottom {
        padding: .4rem 0
    }

    .bs-tooltip-auto[x-placement^=bottom] .arrow,
    .bs-tooltip-bottom .arrow {
        top: 0
    }

    .bs-tooltip-auto[x-placement^=bottom] .arrow::before,
    .bs-tooltip-bottom .arrow::before {
        bottom: 0;
        border-width: 0 .4rem .4rem;
        border-bottom-color: #000
    }

    .bs-tooltip-auto[x-placement^=left],
    .bs-tooltip-left {
        padding: 0 .4rem
    }

    .bs-tooltip-auto[x-placement^=left] .arrow,
    .bs-tooltip-left .arrow {
        right: 0;
        width: .4rem;
        height: .8rem
    }

    .bs-tooltip-auto[x-placement^=left] .arrow::before,
    .bs-tooltip-left .arrow::before {
        left: 0;
        border-width: .4rem 0 .4rem .4rem;
        border-left-color: #000
    }

    .tooltip-inner {
        max-width: 200px;
        padding: .25rem .5rem;
        color: #fff;
        text-align: center;
        background-color: #000;
        border-radius: 2px
    }

    .popover {
        top: 0;
        left: 0;
        z-index: 1060;
        max-width: 276px;
        text-align: left;
        text-align: start;
        background-color: #fff;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: 2px
    }

    .popover .arrow {
        width: 1rem;
        height: .5rem;
        margin: 0 2px
    }

    .popover .arrow::after,
    .popover .arrow::before {
        border-color: transparent;
        border-style: solid
    }

    .bs-popover-auto[x-placement^=top],
    .bs-popover-top {
        margin-bottom: .5rem
    }

    .bs-popover-auto[x-placement^=top]>.arrow,
    .bs-popover-top>.arrow {
        bottom: calc((.5rem + 1px) * -1)
    }

    .bs-popover-auto[x-placement^=top]>.arrow::before,
    .bs-popover-top>.arrow::before {
        bottom: 0;
        border-width: .5rem .5rem 0;
        border-top-color: rgba(0, 0, 0, .25)
    }

    .bs-popover-auto[x-placement^=top]>.arrow::after,
    .bs-popover-top>.arrow::after {
        bottom: 1px;
        border-width: .5rem .5rem 0;
        border-top-color: #fff
    }

    .bs-popover-auto[x-placement^=right],
    .bs-popover-right {
        margin-left: .5rem
    }

    .bs-popover-auto[x-placement^=right]>.arrow,
    .bs-popover-right>.arrow {
        left: calc((.5rem + 1px) * -1);
        width: .5rem;
        height: 1rem;
        margin: 2px 0
    }

    .bs-popover-auto[x-placement^=right]>.arrow::before,
    .bs-popover-right>.arrow::before {
        left: 0;
        border-width: .5rem .5rem .5rem 0;
        border-right-color: rgba(0, 0, 0, .25)
    }

    .bs-popover-auto[x-placement^=right]>.arrow::after,
    .bs-popover-right>.arrow::after {
        left: 1px;
        border-width: .5rem .5rem .5rem 0;
        border-right-color: #fff
    }

    .bs-popover-auto[x-placement^=bottom],
    .bs-popover-bottom {
        margin-top: .5rem
    }

    .bs-popover-auto[x-placement^=bottom]>.arrow,
    .bs-popover-bottom>.arrow {
        top: calc((.5rem + 1px) * -1)
    }

    .bs-popover-auto[x-placement^=bottom]>.arrow::before,
    .bs-popover-bottom>.arrow::before {
        top: 0;
        border-width: 0 .5rem .5rem;
        border-bottom-color: rgba(0, 0, 0, .25)
    }

    .bs-popover-auto[x-placement^=bottom]>.arrow::after,
    .bs-popover-bottom>.arrow::after {
        top: 1px;
        border-width: 0 .5rem .5rem;
        border-bottom-color: #fff
    }

    .bs-popover-auto[x-placement^=bottom] .popover-header::before,
    .bs-popover-bottom .popover-header::before {
        position: absolute;
        top: 0;
        left: 50%;
        display: block;
        width: 1rem;
        margin-left: -.5rem;
        content: "";
        border-bottom: 1px solid #f7f7f7
    }

    .carousel,
    .carousel-inner,
    .carousel-item {
        position: relative
    }

    .bs-popover-auto[x-placement^=left],
    .bs-popover-left {
        margin-right: .5rem
    }

    .bs-popover-auto[x-placement^=left]>.arrow,
    .bs-popover-left>.arrow {
        right: calc((.5rem + 1px) * -1);
        width: .5rem;
        height: 1rem;
        margin: 2px 0
    }

    .bs-popover-auto[x-placement^=left]>.arrow::before,
    .bs-popover-left>.arrow::before {
        right: 0;
        border-width: .5rem 0 .5rem .5rem;
        border-left-color: rgba(0, 0, 0, .25)
    }

    .bs-popover-auto[x-placement^=left]>.arrow::after,
    .bs-popover-left>.arrow::after {
        right: 1px;
        border-width: .5rem 0 .5rem .5rem;
        border-left-color: #fff
    }

    .popover-header {
        padding: .5rem .75rem;
        margin-bottom: 0;
        font-size: .875rem;
        color: inherit;
        background-color: #f7f7f7;
        border-bottom: 1px solid #ebebeb;
        border-top-left-radius: calc(2px - 1px);
        border-top-right-radius: calc(2px - 1px)
    }

    .popover-header:empty {
        display: none
    }

    .popover-body {
        padding: .5rem .75rem;
        color: #6a7a8c
    }

    .carousel.pointer-event {
        touch-action: pan-y
    }

    .carousel-inner {
        width: 100%;
        overflow: hidden
    }

    .carousel-inner::after {
        display: block;
        clear: both
    }

    .carousel-item {
        display: none;
        float: left;
        width: 100%;
        margin-right: -100%;
        backface-visibility: hidden;
        transition: transform .6s ease-in-out
    }

    @media (prefers-reduced-motion:reduce) {
        .carousel-item {
            transition: none
        }
    }

    .carousel-item-next,
    .carousel-item-prev,
    .carousel-item.active {
        display: block
    }

    .active.carousel-item-right,
    .carousel-item-next:not(.carousel-item-left) {
        transform: translateX(100%)
    }

    .active.carousel-item-left,
    .carousel-item-prev:not(.carousel-item-right) {
        transform: translateX(-100%)
    }

    .carousel-fade .carousel-item {
        opacity: 0;
        transition-property: opacity;
        transform: none
    }

    .carousel-fade .carousel-item-next.carousel-item-left,
    .carousel-fade .carousel-item-prev.carousel-item-right,
    .carousel-fade .carousel-item.active {
        z-index: 1;
        opacity: 1
    }

    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-right {
        z-index: 0;
        opacity: 0;
        transition: 0s .6s opacity
    }

    @media (prefers-reduced-motion:reduce) {
        .carousel-fade .active.carousel-item-left,
        .carousel-fade .active.carousel-item-right {
            transition: none
        }
    }

    .carousel-control-next,
    .carousel-control-prev {
        position: absolute;
        top: 0;
        bottom: 0;
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 15%;
        color: #fff;
        text-align: center;
        opacity: .5;
        transition: opacity .15s ease
    }

    @media (prefers-reduced-motion:reduce) {
        .carousel-control-next,
        .carousel-control-prev {
            transition: none
        }
    }

    .carousel-control-next:focus,
    .carousel-control-next:hover,
    .carousel-control-prev:focus,
    .carousel-control-prev:hover {
        color: #fff;
        text-decoration: none;
        outline: 0;
        opacity: .9
    }

    .carousel-control-prev {
        left: 0
    }

    .carousel-control-next {
        right: 0
    }

    .carousel-control-next-icon,
    .carousel-control-prev-icon {
        display: inline-block;
        width: 20px;
        height: 20px;
        background: 50%/100% 100% no-repeat
    }

    .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3e%3c/svg%3e")
    }

    .carousel-control-next-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3e%3c/svg%3e")
    }

    .carousel-indicators {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 15;
        display: flex;
        justify-content: center;
        padding-left: 0;
        margin-right: 15%;
        margin-left: 15%;
        list-style: none
    }

    .spinner-border,
    .spinner-grow {
        display: inline-block;
        vertical-align: text-bottom
    }

    .carousel-indicators li {
        box-sizing: content-box;
        flex: 0 1 auto;
        width: 30px;
        height: 3px;
        margin-right: 3px;
        margin-left: 3px;
        text-indent: -999px;
        cursor: pointer;
        background-color: #fff;
        background-clip: padding-box;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        opacity: .5;
        transition: opacity .6s ease
    }

    @media (prefers-reduced-motion:reduce) {
        .carousel-indicators li {
            transition: none
        }
    }

    #main-wrapper[data-layout=vertical] .topbar .top-navbar .navbar-header,
    .page-wrapper {
        transition: .2s ease-in
    }

    .carousel-indicators .active {
        opacity: 1
    }

    .carousel-caption {
        position: absolute;
        right: 15%;
        bottom: 20px;
        left: 15%;
        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px;
        color: #fff;
        text-align: center
    }

    @keyframes spinner-border {
        to {
            transform: rotate(360deg)
        }
    }

    .spinner-border {
        width: 2rem;
        height: 2rem;
        border: .25em solid currentColor;
        border-right-color: transparent;
        border-radius: 50%;
        animation: spinner-border .75s linear infinite
    }

    .spinner-border-sm {
        width: 1rem;
        height: 1rem;
        border-width: .2em
    }

    @keyframes spinner-grow {
        0% {
            transform: scale(0)
        }
        50% {
            opacity: 1
        }
    }

    .spinner-grow {
        width: 2rem;
        height: 2rem;
        background-color: currentColor;
        border-radius: 50%;
        opacity: 0;
        animation: spinner-grow .75s linear infinite
    }

    .spinner-grow-sm {
        width: 1rem;
        height: 1rem
    }

    .align-baseline {
        vertical-align: baseline!important
    }

    .align-top {
        vertical-align: top!important
    }

    .align-middle {
        vertical-align: middle!important
    }

    .align-bottom {
        vertical-align: bottom!important
    }

    .align-text-bottom {
        vertical-align: text-bottom!important
    }

    .align-text-top {
        vertical-align: text-top!important
    }

    .cell,
    .v-middle td,
    .v-middle th,
    .vm.table td,
    .vm.table th,
    .waves-effect {
        vertical-align: middle
    }

    .bg-primary {
        background-color: #7460ee!important
    }

    a.bg-primary:focus,
    a.bg-primary:hover,
    button.bg-primary:focus,
    button.bg-primary:hover {
        background-color: #4c32e9!important
    }

    .bg-secondary {
        background-color: #6c757d!important
    }

    a.bg-secondary:focus,
    a.bg-secondary:hover,
    button.bg-secondary:focus,
    button.bg-secondary:hover {
        background-color: #545b62!important
    }

    .bg-success {
        background-color: #5ac146!important
    }

    a.bg-success:focus,
    a.bg-success:hover,
    button.bg-success:focus,
    button.bg-success:hover {
        background-color: #469f35!important
    }

    .bg-info {
        background-color: #137eff!important
    }

    a.bg-info:focus,
    a.bg-info:hover,
    button.bg-info:focus,
    button.bg-info:hover {
        background-color: #0065df!important
    }

    .bg-warning {
        background-color: #ffbc34!important
    }

    a.bg-warning:focus,
    a.bg-warning:hover,
    button.bg-warning:focus,
    button.bg-warning:hover {
        background-color: #ffab01!important
    }

    .bg-danger {
        background-color: #fa5838!important
    }

    a.bg-danger:focus,
    a.bg-danger:hover,
    button.bg-danger:focus,
    button.bg-danger:hover {
        background-color: #f92e06!important
    }

    .bg-light {
        background-color: #f6f8f9!important
    }

    a.bg-light:focus,
    a.bg-light:hover,
    button.bg-light:focus,
    button.bg-light:hover {
        background-color: #d7e0e5!important
    }

    .bg-dark {
        background-color: #343a40!important
    }

    a.bg-dark:focus,
    a.bg-dark:hover,
    button.bg-dark:focus,
    button.bg-dark:hover {
        background-color: #1d2124!important
    }

    .bg-cyan {
        background-color: #4fc3f7!important
    }

    a.bg-cyan:focus,
    a.bg-cyan:hover,
    button.bg-cyan:focus,
    button.bg-cyan:hover {
        background-color: #1eb2f5!important
    }

    .bg-orange {
        background-color: #fb8c00!important
    }

    a.bg-orange:focus,
    a.bg-orange:hover,
    button.bg-orange:focus,
    button.bg-orange:hover {
        background-color: #c87000!important
    }

    .bg-purple {
        background-color: #8b5edd!important
    }

    a.bg-purple:focus,
    a.bg-purple:hover,
    button.bg-purple:focus,
    button.bg-purple:hover {
        background-color: #6d34d4!important
    }

    .bg-white {
        background-color: #fff!important
    }

    .bg-transparent {
        background-color: transparent!important
    }

    .border {
        border: 1px solid rgba(0, 0, 0, .1)!important
    }

    .border-top {
        border-top: 1px solid rgba(0, 0, 0, .1)!important
    }

    .border-right {
        border-right: 1px solid rgba(0, 0, 0, .1)!important
    }

    .border-bottom {
        border-bottom: 1px solid rgba(0, 0, 0, .1)!important
    }

    .border-left {
        border-left: 1px solid rgba(0, 0, 0, .1)!important
    }

    .border-0 {
        border: 0!important
    }

    .border-top-0 {
        border-top: 0!important
    }

    .border-right-0 {
        border-right: 0!important
    }

    .border-bottom-0 {
        border-bottom: 0!important
    }

    .border-left-0 {
        border-left: 0!important
    }

    .border-primary {
        border-color: #7460ee!important
    }

    .border-secondary {
        border-color: #6c757d!important
    }

    .border-success {
        border-color: #5ac146!important
    }

    .border-info {
        border-color: #137eff!important
    }

    .border-warning {
        border-color: #ffbc34!important
    }

    .border-danger {
        border-color: #fa5838!important
    }

    .border-light {
        border-color: #f6f8f9!important
    }

    .border-dark {
        border-color: #343a40!important
    }

    .border-cyan {
        border-color: #4fc3f7!important
    }

    .border-orange {
        border-color: #fb8c00!important
    }

    .border-purple {
        border-color: #8b5edd!important
    }

    .border-white {
        border-color: #fff!important
    }

    .rounded-sm {
        border-radius: 1px!important
    }

    .rounded-right,
    .rounded-top {
        border-top-right-radius: 2px!important
    }

    .rounded-bottom,
    .rounded-right {
        border-bottom-right-radius: 2px!important
    }

    .rounded-left,
    .rounded-top {
        border-top-left-radius: 2px!important
    }

    .rounded-bottom,
    .rounded-left {
        border-bottom-left-radius: 2px!important
    }

    .rounded,
    .rounded-lg {
        border-radius: 2px!important
    }

    .rounded-circle {
        border-radius: 50%!important
    }

    .rounded-pill {
        border-radius: 50rem!important
    }

    .rounded-0 {
        border-radius: 0!important
    }

    .clearfix::after {
        display: block;
        clear: both
    }

    .d-none {
        display: none!important
    }

    .d-inline {
        display: inline!important
    }

    .d-inline-block {
        display: inline-block!important
    }

    .d-block {
        display: block!important
    }

    .d-table {
        display: table!important
    }

    .d-table-row {
        display: table-row!important
    }

    .d-table-cell {
        display: table-cell!important
    }

    .d-flex {
        display: flex!important
    }

    .d-inline-flex {
        display: inline-flex!important
    }

    @media (min-width:576px) {
        .d-sm-none {
            display: none!important
        }
        .d-sm-inline {
            display: inline!important
        }
        .d-sm-inline-block {
            display: inline-block!important
        }
        .d-sm-block {
            display: block!important
        }
        .d-sm-table {
            display: table!important
        }
        .d-sm-table-row {
            display: table-row!important
        }
        .d-sm-table-cell {
            display: table-cell!important
        }
        .d-sm-flex {
            display: flex!important
        }
        .d-sm-inline-flex {
            display: inline-flex!important
        }
    }

    @media (min-width:768px) {
        .d-md-none {
            display: none!important
        }
        .d-md-inline {
            display: inline!important
        }
        .d-md-inline-block {
            display: inline-block!important
        }
        .d-md-block {
            display: block!important
        }
        .d-md-table {
            display: table!important
        }
        .d-md-table-row {
            display: table-row!important
        }
        .d-md-table-cell {
            display: table-cell!important
        }
        .d-md-flex {
            display: flex!important
        }
        .d-md-inline-flex {
            display: inline-flex!important
        }
    }

    @media (min-width:992px) {
        .d-lg-none {
            display: none!important
        }
        .d-lg-inline {
            display: inline!important
        }
        .d-lg-inline-block {
            display: inline-block!important
        }
        .d-lg-block {
            display: block!important
        }
        .d-lg-table {
            display: table!important
        }
        .d-lg-table-row {
            display: table-row!important
        }
        .d-lg-table-cell {
            display: table-cell!important
        }
        .d-lg-flex {
            display: flex!important
        }
        .d-lg-inline-flex {
            display: inline-flex!important
        }
    }

    @media (min-width:1600px) {
        .d-xl-none {
            display: none!important
        }
        .d-xl-inline {
            display: inline!important
        }
        .d-xl-inline-block {
            display: inline-block!important
        }
        .d-xl-block {
            display: block!important
        }
        .d-xl-table {
            display: table!important
        }
        .d-xl-table-row {
            display: table-row!important
        }
        .d-xl-table-cell {
            display: table-cell!important
        }
        .d-xl-flex {
            display: flex!important
        }
        .d-xl-inline-flex {
            display: inline-flex!important
        }
    }

    @media print {
        .d-print-none {
            display: none!important
        }
        .d-print-inline {
            display: inline!important
        }
        .d-print-inline-block {
            display: inline-block!important
        }
        .d-print-block {
            display: block!important
        }
        .d-print-table {
            display: table!important
        }
        .d-print-table-row {
            display: table-row!important
        }
        .d-print-table-cell {
            display: table-cell!important
        }
        .d-print-flex {
            display: flex!important
        }
        .d-print-inline-flex {
            display: inline-flex!important
        }
    }

    .embed-responsive {
        position: relative;
        display: block;
        width: 100%;
        padding: 0;
        overflow: hidden
    }

    .embed-responsive::before {
        display: block
    }

    .embed-responsive .embed-responsive-item,
    .embed-responsive embed,
    .embed-responsive iframe,
    .embed-responsive object,
    .embed-responsive video {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0
    }

    .embed-responsive-21by9::before {
        padding-top: 42.85714%
    }

    .embed-responsive-16by9::before {
        padding-top: 56.25%
    }

    .embed-responsive-4by3::before {
        padding-top: 75%
    }

    .embed-responsive-1by1::before {
        padding-top: 100%
    }

    .flex-row {
        flex-direction: row!important
    }

    .flex-column {
        flex-direction: column!important
    }

    .flex-row-reverse {
        flex-direction: row-reverse!important
    }

    .flex-column-reverse {
        flex-direction: column-reverse!important
    }

    .flex-wrap {
        flex-wrap: wrap!important
    }

    .flex-nowrap {
        flex-wrap: nowrap!important
    }

    .flex-wrap-reverse {
        flex-wrap: wrap-reverse!important
    }

    .flex-fill {
        flex: 1 1 auto!important
    }

    .flex-grow-0 {
        flex-grow: 0!important
    }

    .flex-grow-1 {
        flex-grow: 1!important
    }

    .flex-shrink-0 {
        flex-shrink: 0!important
    }

    .flex-shrink-1 {
        flex-shrink: 1!important
    }

    .justify-content-start {
        justify-content: flex-start!important
    }

    .justify-content-end {
        justify-content: flex-end!important
    }

    .justify-content-center {
        justify-content: center!important
    }

    .justify-content-between {
        justify-content: space-between!important
    }

    .justify-content-around {
        justify-content: space-around!important
    }

    .align-items-start {
        align-items: flex-start!important
    }

    .align-items-end {
        align-items: flex-end!important
    }

    .align-items-center {
        align-items: center!important
    }

    .align-items-baseline {
        align-items: baseline!important
    }

    .align-items-stretch {
        align-items: stretch!important
    }

    .align-content-start {
        align-content: flex-start!important
    }

    .align-content-end {
        align-content: flex-end!important
    }

    .align-content-center {
        align-content: center!important
    }

    .align-content-between {
        align-content: space-between!important
    }

    .align-content-around {
        align-content: space-around!important
    }

    .align-content-stretch {
        align-content: stretch!important
    }

    .align-self-auto {
        align-self: auto!important
    }

    .align-self-start {
        align-self: flex-start!important
    }

    .align-self-end {
        align-self: flex-end!important
    }

    .align-self-center {
        align-self: center!important
    }

    .align-self-baseline {
        align-self: baseline!important
    }

    .align-self-stretch {
        align-self: stretch!important
    }

    @media (min-width:576px) {
        .flex-sm-row {
            flex-direction: row!important
        }
        .flex-sm-column {
            flex-direction: column!important
        }
        .flex-sm-row-reverse {
            flex-direction: row-reverse!important
        }
        .flex-sm-column-reverse {
            flex-direction: column-reverse!important
        }
        .flex-sm-wrap {
            flex-wrap: wrap!important
        }
        .flex-sm-nowrap {
            flex-wrap: nowrap!important
        }
        .flex-sm-wrap-reverse {
            flex-wrap: wrap-reverse!important
        }
        .flex-sm-fill {
            flex: 1 1 auto!important
        }
        .flex-sm-grow-0 {
            flex-grow: 0!important
        }
        .flex-sm-grow-1 {
            flex-grow: 1!important
        }
        .flex-sm-shrink-0 {
            flex-shrink: 0!important
        }
        .flex-sm-shrink-1 {
            flex-shrink: 1!important
        }
        .justify-content-sm-start {
            justify-content: flex-start!important
        }
        .justify-content-sm-end {
            justify-content: flex-end!important
        }
        .justify-content-sm-center {
            justify-content: center!important
        }
        .justify-content-sm-between {
            justify-content: space-between!important
        }
        .justify-content-sm-around {
            justify-content: space-around!important
        }
        .align-items-sm-start {
            align-items: flex-start!important
        }
        .align-items-sm-end {
            align-items: flex-end!important
        }
        .align-items-sm-center {
            align-items: center!important
        }
        .align-items-sm-baseline {
            align-items: baseline!important
        }
        .align-items-sm-stretch {
            align-items: stretch!important
        }
        .align-content-sm-start {
            align-content: flex-start!important
        }
        .align-content-sm-end {
            align-content: flex-end!important
        }
        .align-content-sm-center {
            align-content: center!important
        }
        .align-content-sm-between {
            align-content: space-between!important
        }
        .align-content-sm-around {
            align-content: space-around!important
        }
        .align-content-sm-stretch {
            align-content: stretch!important
        }
        .align-self-sm-auto {
            align-self: auto!important
        }
        .align-self-sm-start {
            align-self: flex-start!important
        }
        .align-self-sm-end {
            align-self: flex-end!important
        }
        .align-self-sm-center {
            align-self: center!important
        }
        .align-self-sm-baseline {
            align-self: baseline!important
        }
        .align-self-sm-stretch {
            align-self: stretch!important
        }
    }

    @media (min-width:768px) {
        .flex-md-row {
            flex-direction: row!important
        }
        .flex-md-column {
            flex-direction: column!important
        }
        .flex-md-row-reverse {
            flex-direction: row-reverse!important
        }
        .flex-md-column-reverse {
            flex-direction: column-reverse!important
        }
        .flex-md-wrap {
            flex-wrap: wrap!important
        }
        .flex-md-nowrap {
            flex-wrap: nowrap!important
        }
        .flex-md-wrap-reverse {
            flex-wrap: wrap-reverse!important
        }
        .flex-md-fill {
            flex: 1 1 auto!important
        }
        .flex-md-grow-0 {
            flex-grow: 0!important
        }
        .flex-md-grow-1 {
            flex-grow: 1!important
        }
        .flex-md-shrink-0 {
            flex-shrink: 0!important
        }
        .flex-md-shrink-1 {
            flex-shrink: 1!important
        }
        .justify-content-md-start {
            justify-content: flex-start!important
        }
        .justify-content-md-end {
            justify-content: flex-end!important
        }
        .justify-content-md-center {
            justify-content: center!important
        }
        .justify-content-md-between {
            justify-content: space-between!important
        }
        .justify-content-md-around {
            justify-content: space-around!important
        }
        .align-items-md-start {
            align-items: flex-start!important
        }
        .align-items-md-end {
            align-items: flex-end!important
        }
        .align-items-md-center {
            align-items: center!important
        }
        .align-items-md-baseline {
            align-items: baseline!important
        }
        .align-items-md-stretch {
            align-items: stretch!important
        }
        .align-content-md-start {
            align-content: flex-start!important
        }
        .align-content-md-end {
            align-content: flex-end!important
        }
        .align-content-md-center {
            align-content: center!important
        }
        .align-content-md-between {
            align-content: space-between!important
        }
        .align-content-md-around {
            align-content: space-around!important
        }
        .align-content-md-stretch {
            align-content: stretch!important
        }
        .align-self-md-auto {
            align-self: auto!important
        }
        .align-self-md-start {
            align-self: flex-start!important
        }
        .align-self-md-end {
            align-self: flex-end!important
        }
        .align-self-md-center {
            align-self: center!important
        }
        .align-self-md-baseline {
            align-self: baseline!important
        }
        .align-self-md-stretch {
            align-self: stretch!important
        }
    }

    .float-left {
        float: left!important
    }

    .float-right,
    html[dir=rtl] .float-left {
        float: right!important
    }

    .float-none {
        float: none!important
    }

    @media (min-width:576px) {
        .float-sm-left {
            float: left!important
        }
        .float-sm-right {
            float: right!important
        }
        .float-sm-none {
            float: none!important
        }
    }

    @media (min-width:768px) {
        .float-md-left {
            float: left!important
        }
        .float-md-right {
            float: right!important
        }
        .float-md-none {
            float: none!important
        }
    }

    .overflow-auto {
        overflow: auto!important
    }

    .overflow-hidden {
        overflow: hidden!important
    }

    .position-static {
        position: static!important
    }

    .position-relative {
        position: relative!important
    }

    .position-absolute {
        position: absolute!important
    }

    .position-fixed {
        position: fixed!important
    }

    .position-sticky {
        position: sticky!important
    }

    .fixed-bottom,
    .fixed-top {
        position: fixed;
        z-index: 1030;
        right: 0;
        left: 0
    }

    .fixed-top {
        top: 0
    }

    .fixed-bottom {
        bottom: 0
    }

    @supports (position:sticky) {
        .sticky-top {
            position: sticky;
            top: 0;
            z-index: 1020
        }
    }

    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0
    }

    .sr-only-focusable:active,
    .sr-only-focusable:focus {
        position: static;
        width: auto;
        height: auto;
        overflow: visible;
        clip: auto;
        white-space: normal
    }

    .shadow-sm {
        box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075)!important
    }

    .shadow {
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15)!important
    }

    .shadow-lg {
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175)!important
    }

    .shadow-none {
        box-shadow: none!important
    }

    .w-25 {
        width: 25%!important
    }

    .w-50 {
        width: 50%!important
    }

    .w-75 {
        width: 75%!important
    }

    .w-100 {
        width: 100%!important
    }

    .w-auto {
        width: auto!important
    }

    .h-25 {
        height: 25%!important
    }

    .h-50 {
        height: 50%!important
    }

    .h-75 {
        height: 75%!important
    }

    .h-100 {
        height: 100%!important
    }

    .h-auto {
        height: auto!important
    }

    .mw-100 {
        max-width: 100%!important
    }

    .mh-100 {
        max-height: 100%!important
    }

    .min-vw-100 {
        min-width: 100vw!important
    }

    .min-vh-100 {
        min-height: 100vh!important
    }

    .vw-100 {
        width: 100vw!important
    }

    .vh-100 {
        height: 100vh!important
    }

    .stretched-link::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1;
        pointer-events: auto;
        background-color: rgba(0, 0, 0, 0)
    }

    .chartist-tooltip,
    .ct-area,
    .ct-line,
    .dd-dragel,
    .waves-effect .waves-ripple {
        pointer-events: none
    }

    .m-0 {
        margin: 0!important
    }

    .mt-0,
    .my-0 {
        margin-top: 0!important
    }

    .mr-0,
    .mx-0 {
        margin-right: 0!important
    }

    .mb-0,
    .my-0 {
        margin-bottom: 0!important
    }

    .ml-0,
    .mx-0 {
        margin-left: 0!important
    }

    .m-1 {
        margin: .25rem!important
    }

    .mt-1,
    .my-1 {
        margin-top: .25rem!important
    }

    .mr-1,
    .mx-1 {
        margin-right: .25rem!important
    }

    .mb-1,
    .my-1 {
        margin-bottom: .25rem!important
    }

    .ml-1,
    .mx-1 {
        margin-left: .25rem!important
    }

    .m-2 {
        margin: .5rem!important
    }

    .mt-2,
    .my-2 {
        margin-top: .5rem!important
    }

    .mr-2,
    .mx-2 {
        margin-right: .5rem!important
    }

    .mb-2,
    .my-2 {
        margin-bottom: .5rem!important
    }

    .ml-2,
    .mx-2 {
        margin-left: .5rem!important
    }

    .m-3 {
        margin: 1rem!important
    }

    .mt-3,
    .my-3 {
        margin-top: 1rem!important
    }

    .mr-3,
    .mx-3 {
        margin-right: 1rem!important
    }

    .mb-3,
    .my-3 {
        margin-bottom: 1rem!important
    }

    .ml-3,
    .mx-3 {
        margin-left: 1rem!important
    }

    .m-4 {
        margin: 1.5rem!important
    }

    .mt-4,
    .my-4 {
        margin-top: 1.5rem!important
    }

    .mr-4,
    .mx-4 {
        margin-right: 1.5rem!important
    }

    .mb-4,
    .my-4 {
        margin-bottom: 1.5rem!important
    }

    .ml-4,
    .mx-4 {
        margin-left: 1.5rem!important
    }

    .m-5 {
        margin: 3rem!important
    }

    .mt-5,
    .my-5 {
        margin-top: 3rem!important
    }

    .mr-5,
    .mx-5 {
        margin-right: 3rem!important
    }

    .mb-5,
    .my-5 {
        margin-bottom: 3rem!important
    }

    .ml-5,
    .mx-5 {
        margin-left: 3rem!important
    }

    .p-0 {
        padding: 0!important
    }

    .pt-0,
    .py-0 {
        padding-top: 0!important
    }

    .pr-0,
    .px-0 {
        padding-right: 0!important
    }

    .pb-0,
    .py-0 {
        padding-bottom: 0!important
    }

    .pl-0,
    .px-0 {
        padding-left: 0!important
    }

    .p-1 {
        padding: .25rem!important
    }

    .pt-1,
    .py-1 {
        padding-top: .25rem!important
    }

    .pr-1,
    .px-1 {
        padding-right: .25rem!important
    }

    .pb-1,
    .py-1 {
        padding-bottom: .25rem!important
    }

    .pl-1,
    .px-1 {
        padding-left: .25rem!important
    }

    .p-2 {
        padding: .5rem!important
    }

    .pt-2,
    .py-2 {
        padding-top: .5rem!important
    }

    .pr-2,
    .px-2 {
        padding-right: .5rem!important
    }

    .pb-2,
    .py-2 {
        padding-bottom: .5rem!important
    }

    .pl-2,
    .px-2 {
        padding-left: .5rem!important
    }

    .p-3 {
        padding: 1rem!important
    }

    .pt-3,
    .py-3 {
        padding-top: 1rem!important
    }

    .pr-3,
    .px-3 {
        padding-right: 1rem!important
    }

    .pb-3,
    .py-3 {
        padding-bottom: 1rem!important
    }

    .pl-3,
    .px-3 {
        padding-left: 1rem!important
    }

    .p-4 {
        padding: 1.5rem!important
    }

    .pt-4,
    .py-4 {
        padding-top: 1.5rem!important
    }

    .pr-4,
    .px-4 {
        padding-right: 1.5rem!important
    }

    .pb-4,
    .py-4 {
        padding-bottom: 1.5rem!important
    }

    .pl-4,
    .px-4 {
        padding-left: 1.5rem!important
    }

    .p-5 {
        padding: 3rem!important
    }

    .pt-5,
    .py-5 {
        padding-top: 3rem!important
    }

    .pr-5,
    .px-5 {
        padding-right: 3rem!important
    }

    .pb-5,
    .py-5 {
        padding-bottom: 3rem!important
    }

    .pl-5,
    .px-5 {
        padding-left: 3rem!important
    }

    .m-n1 {
        margin: -.25rem!important
    }

    .mt-n1,
    .my-n1 {
        margin-top: -.25rem!important
    }

    .mr-n1,
    .mx-n1 {
        margin-right: -.25rem!important
    }

    .mb-n1,
    .my-n1 {
        margin-bottom: -.25rem!important
    }

    .ml-n1,
    .mx-n1 {
        margin-left: -.25rem!important
    }

    .m-n2 {
        margin: -.5rem!important
    }

    .mt-n2,
    .my-n2 {
        margin-top: -.5rem!important
    }

    .mr-n2,
    .mx-n2 {
        margin-right: -.5rem!important
    }

    .mb-n2,
    .my-n2 {
        margin-bottom: -.5rem!important
    }

    .ml-n2,
    .mx-n2 {
        margin-left: -.5rem!important
    }

    .m-n3 {
        margin: -1rem!important
    }

    .mt-n3,
    .my-n3 {
        margin-top: -1rem!important
    }

    .mr-n3,
    .mx-n3 {
        margin-right: -1rem!important
    }

    .mb-n3,
    .my-n3 {
        margin-bottom: -1rem!important
    }

    .ml-n3,
    .mx-n3 {
        margin-left: -1rem!important
    }

    .m-n4 {
        margin: -1.5rem!important
    }

    .mt-n4,
    .my-n4 {
        margin-top: -1.5rem!important
    }

    .mr-n4,
    .mx-n4 {
        margin-right: -1.5rem!important
    }

    .mb-n4,
    .my-n4 {
        margin-bottom: -1.5rem!important
    }

    .ml-n4,
    .mx-n4 {
        margin-left: -1.5rem!important
    }

    .m-n5 {
        margin: -3rem!important
    }

    .mt-n5,
    .my-n5 {
        margin-top: -3rem!important
    }

    .mr-n5,
    .mx-n5 {
        margin-right: -3rem!important
    }

    .mb-n5,
    .my-n5 {
        margin-bottom: -3rem!important
    }

    .ml-n5,
    .mx-n5 {
        margin-left: -3rem!important
    }

    .m-auto {
        margin: auto!important
    }

    .mt-auto,
    .my-auto {
        margin-top: auto!important
    }

    .mr-auto,
    .mx-auto {
        margin-right: auto!important
    }

    .mb-auto,
    .my-auto {
        margin-bottom: auto!important
    }

    .ml-auto,
    .mx-auto {
        margin-left: auto!important
    }

    @media (min-width:576px) {
        .m-sm-0 {
            margin: 0!important
        }
        .mt-sm-0,
        .my-sm-0 {
            margin-top: 0!important
        }
        .mr-sm-0,
        .mx-sm-0 {
            margin-right: 0!important
        }
        .mb-sm-0,
        .my-sm-0 {
            margin-bottom: 0!important
        }
        .ml-sm-0,
        .mx-sm-0 {
            margin-left: 0!important
        }
        .m-sm-1 {
            margin: .25rem!important
        }
        .mt-sm-1,
        .my-sm-1 {
            margin-top: .25rem!important
        }
        .mr-sm-1,
        .mx-sm-1 {
            margin-right: .25rem!important
        }
        .mb-sm-1,
        .my-sm-1 {
            margin-bottom: .25rem!important
        }
        .ml-sm-1,
        .mx-sm-1 {
            margin-left: .25rem!important
        }
        .m-sm-2 {
            margin: .5rem!important
        }
        .mt-sm-2,
        .my-sm-2 {
            margin-top: .5rem!important
        }
        .mr-sm-2,
        .mx-sm-2 {
            margin-right: .5rem!important
        }
        .mb-sm-2,
        .my-sm-2 {
            margin-bottom: .5rem!important
        }
        .ml-sm-2,
        .mx-sm-2 {
            margin-left: .5rem!important
        }
        .m-sm-3 {
            margin: 1rem!important
        }
        .mt-sm-3,
        .my-sm-3 {
            margin-top: 1rem!important
        }
        .mr-sm-3,
        .mx-sm-3 {
            margin-right: 1rem!important
        }
        .mb-sm-3,
        .my-sm-3 {
            margin-bottom: 1rem!important
        }
        .ml-sm-3,
        .mx-sm-3 {
            margin-left: 1rem!important
        }
        .m-sm-4 {
            margin: 1.5rem!important
        }
        .mt-sm-4,
        .my-sm-4 {
            margin-top: 1.5rem!important
        }
        .mr-sm-4,
        .mx-sm-4 {
            margin-right: 1.5rem!important
        }
        .mb-sm-4,
        .my-sm-4 {
            margin-bottom: 1.5rem!important
        }
        .ml-sm-4,
        .mx-sm-4 {
            margin-left: 1.5rem!important
        }
        .m-sm-5 {
            margin: 3rem!important
        }
        .mt-sm-5,
        .my-sm-5 {
            margin-top: 3rem!important
        }
        .mr-sm-5,
        .mx-sm-5 {
            margin-right: 3rem!important
        }
        .mb-sm-5,
        .my-sm-5 {
            margin-bottom: 3rem!important
        }
        .ml-sm-5,
        .mx-sm-5 {
            margin-left: 3rem!important
        }
        .p-sm-0 {
            padding: 0!important
        }
        .pt-sm-0,
        .py-sm-0 {
            padding-top: 0!important
        }
        .pr-sm-0,
        .px-sm-0 {
            padding-right: 0!important
        }
        .pb-sm-0,
        .py-sm-0 {
            padding-bottom: 0!important
        }
        .pl-sm-0,
        .px-sm-0 {
            padding-left: 0!important
        }
        .p-sm-1 {
            padding: .25rem!important
        }
        .pt-sm-1,
        .py-sm-1 {
            padding-top: .25rem!important
        }
        .pr-sm-1,
        .px-sm-1 {
            padding-right: .25rem!important
        }
        .pb-sm-1,
        .py-sm-1 {
            padding-bottom: .25rem!important
        }
        .pl-sm-1,
        .px-sm-1 {
            padding-left: .25rem!important
        }
        .p-sm-2 {
            padding: .5rem!important
        }
        .pt-sm-2,
        .py-sm-2 {
            padding-top: .5rem!important
        }
        .pr-sm-2,
        .px-sm-2 {
            padding-right: .5rem!important
        }
        .pb-sm-2,
        .py-sm-2 {
            padding-bottom: .5rem!important
        }
        .pl-sm-2,
        .px-sm-2 {
            padding-left: .5rem!important
        }
        .p-sm-3 {
            padding: 1rem!important
        }
        .pt-sm-3,
        .py-sm-3 {
            padding-top: 1rem!important
        }
        .pr-sm-3,
        .px-sm-3 {
            padding-right: 1rem!important
        }
        .pb-sm-3,
        .py-sm-3 {
            padding-bottom: 1rem!important
        }
        .pl-sm-3,
        .px-sm-3 {
            padding-left: 1rem!important
        }
        .p-sm-4 {
            padding: 1.5rem!important
        }
        .pt-sm-4,
        .py-sm-4 {
            padding-top: 1.5rem!important
        }
        .pr-sm-4,
        .px-sm-4 {
            padding-right: 1.5rem!important
        }
        .pb-sm-4,
        .py-sm-4 {
            padding-bottom: 1.5rem!important
        }
        .pl-sm-4,
        .px-sm-4 {
            padding-left: 1.5rem!important
        }
        .p-sm-5 {
            padding: 3rem!important
        }
        .pt-sm-5,
        .py-sm-5 {
            padding-top: 3rem!important
        }
        .pr-sm-5,
        .px-sm-5 {
            padding-right: 3rem!important
        }
        .pb-sm-5,
        .py-sm-5 {
            padding-bottom: 3rem!important
        }
        .pl-sm-5,
        .px-sm-5 {
            padding-left: 3rem!important
        }
        .m-sm-n1 {
            margin: -.25rem!important
        }
        .mt-sm-n1,
        .my-sm-n1 {
            margin-top: -.25rem!important
        }
        .mr-sm-n1,
        .mx-sm-n1 {
            margin-right: -.25rem!important
        }
        .mb-sm-n1,
        .my-sm-n1 {
            margin-bottom: -.25rem!important
        }
        .ml-sm-n1,
        .mx-sm-n1 {
            margin-left: -.25rem!important
        }
        .m-sm-n2 {
            margin: -.5rem!important
        }
        .mt-sm-n2,
        .my-sm-n2 {
            margin-top: -.5rem!important
        }
        .mr-sm-n2,
        .mx-sm-n2 {
            margin-right: -.5rem!important
        }
        .mb-sm-n2,
        .my-sm-n2 {
            margin-bottom: -.5rem!important
        }
        .ml-sm-n2,
        .mx-sm-n2 {
            margin-left: -.5rem!important
        }
        .m-sm-n3 {
            margin: -1rem!important
        }
        .mt-sm-n3,
        .my-sm-n3 {
            margin-top: -1rem!important
        }
        .mr-sm-n3,
        .mx-sm-n3 {
            margin-right: -1rem!important
        }
        .mb-sm-n3,
        .my-sm-n3 {
            margin-bottom: -1rem!important
        }
        .ml-sm-n3,
        .mx-sm-n3 {
            margin-left: -1rem!important
        }
        .m-sm-n4 {
            margin: -1.5rem!important
        }
        .mt-sm-n4,
        .my-sm-n4 {
            margin-top: -1.5rem!important
        }
        .mr-sm-n4,
        .mx-sm-n4 {
            margin-right: -1.5rem!important
        }
        .mb-sm-n4,
        .my-sm-n4 {
            margin-bottom: -1.5rem!important
        }
        .ml-sm-n4,
        .mx-sm-n4 {
            margin-left: -1.5rem!important
        }
        .m-sm-n5 {
            margin: -3rem!important
        }
        .mt-sm-n5,
        .my-sm-n5 {
            margin-top: -3rem!important
        }
        .mr-sm-n5,
        .mx-sm-n5 {
            margin-right: -3rem!important
        }
        .mb-sm-n5,
        .my-sm-n5 {
            margin-bottom: -3rem!important
        }
        .ml-sm-n5,
        .mx-sm-n5 {
            margin-left: -3rem!important
        }
        .m-sm-auto {
            margin: auto!important
        }
        .mt-sm-auto,
        .my-sm-auto {
            margin-top: auto!important
        }
        .mr-sm-auto,
        .mx-sm-auto {
            margin-right: auto!important
        }
        .mb-sm-auto,
        .my-sm-auto {
            margin-bottom: auto!important
        }
        .ml-sm-auto,
        .mx-sm-auto {
            margin-left: auto!important
        }
    }

    @media (min-width:768px) {
        .m-md-0 {
            margin: 0!important
        }
        .mt-md-0,
        .my-md-0 {
            margin-top: 0!important
        }
        .mr-md-0,
        .mx-md-0 {
            margin-right: 0!important
        }
        .mb-md-0,
        .my-md-0 {
            margin-bottom: 0!important
        }
        .ml-md-0,
        .mx-md-0 {
            margin-left: 0!important
        }
        .m-md-1 {
            margin: .25rem!important
        }
        .mt-md-1,
        .my-md-1 {
            margin-top: .25rem!important
        }
        .mr-md-1,
        .mx-md-1 {
            margin-right: .25rem!important
        }
        .mb-md-1,
        .my-md-1 {
            margin-bottom: .25rem!important
        }
        .ml-md-1,
        .mx-md-1 {
            margin-left: .25rem!important
        }
        .m-md-2 {
            margin: .5rem!important
        }
        .mt-md-2,
        .my-md-2 {
            margin-top: .5rem!important
        }
        .mr-md-2,
        .mx-md-2 {
            margin-right: .5rem!important
        }
        .mb-md-2,
        .my-md-2 {
            margin-bottom: .5rem!important
        }
        .ml-md-2,
        .mx-md-2 {
            margin-left: .5rem!important
        }
        .m-md-3 {
            margin: 1rem!important
        }
        .mt-md-3,
        .my-md-3 {
            margin-top: 1rem!important
        }
        .mr-md-3,
        .mx-md-3 {
            margin-right: 1rem!important
        }
        .mb-md-3,
        .my-md-3 {
            margin-bottom: 1rem!important
        }
        .ml-md-3,
        .mx-md-3 {
            margin-left: 1rem!important
        }
        .m-md-4 {
            margin: 1.5rem!important
        }
        .mt-md-4,
        .my-md-4 {
            margin-top: 1.5rem!important
        }
        .mr-md-4,
        .mx-md-4 {
            margin-right: 1.5rem!important
        }
        .mb-md-4,
        .my-md-4 {
            margin-bottom: 1.5rem!important
        }
        .ml-md-4,
        .mx-md-4 {
            margin-left: 1.5rem!important
        }
        .m-md-5 {
            margin: 3rem!important
        }
        .mt-md-5,
        .my-md-5 {
            margin-top: 3rem!important
        }
        .mr-md-5,
        .mx-md-5 {
            margin-right: 3rem!important
        }
        .mb-md-5,
        .my-md-5 {
            margin-bottom: 3rem!important
        }
        .ml-md-5,
        .mx-md-5 {
            margin-left: 3rem!important
        }
        .p-md-0 {
            padding: 0!important
        }
        .pt-md-0,
        .py-md-0 {
            padding-top: 0!important
        }
        .pr-md-0,
        .px-md-0 {
            padding-right: 0!important
        }
        .pb-md-0,
        .py-md-0 {
            padding-bottom: 0!important
        }
        .pl-md-0,
        .px-md-0 {
            padding-left: 0!important
        }
        .p-md-1 {
            padding: .25rem!important
        }
        .pt-md-1,
        .py-md-1 {
            padding-top: .25rem!important
        }
        .pr-md-1,
        .px-md-1 {
            padding-right: .25rem!important
        }
        .pb-md-1,
        .py-md-1 {
            padding-bottom: .25rem!important
        }
        .pl-md-1,
        .px-md-1 {
            padding-left: .25rem!important
        }
        .p-md-2 {
            padding: .5rem!important
        }
        .pt-md-2,
        .py-md-2 {
            padding-top: .5rem!important
        }
        .pr-md-2,
        .px-md-2 {
            padding-right: .5rem!important
        }
        .pb-md-2,
        .py-md-2 {
            padding-bottom: .5rem!important
        }
        .pl-md-2,
        .px-md-2 {
            padding-left: .5rem!important
        }
        .p-md-3 {
            padding: 1rem!important
        }
        .pt-md-3,
        .py-md-3 {
            padding-top: 1rem!important
        }
        .pr-md-3,
        .px-md-3 {
            padding-right: 1rem!important
        }
        .pb-md-3,
        .py-md-3 {
            padding-bottom: 1rem!important
        }
        .pl-md-3,
        .px-md-3 {
            padding-left: 1rem!important
        }
        .p-md-4 {
            padding: 1.5rem!important
        }
        .pt-md-4,
        .py-md-4 {
            padding-top: 1.5rem!important
        }
        .pr-md-4,
        .px-md-4 {
            padding-right: 1.5rem!important
        }
        .pb-md-4,
        .py-md-4 {
            padding-bottom: 1.5rem!important
        }
        .pl-md-4,
        .px-md-4 {
            padding-left: 1.5rem!important
        }
        .p-md-5 {
            padding: 3rem!important
        }
        .pt-md-5,
        .py-md-5 {
            padding-top: 3rem!important
        }
        .pr-md-5,
        .px-md-5 {
            padding-right: 3rem!important
        }
        .pb-md-5,
        .py-md-5 {
            padding-bottom: 3rem!important
        }
        .pl-md-5,
        .px-md-5 {
            padding-left: 3rem!important
        }
        .m-md-n1 {
            margin: -.25rem!important
        }
        .mt-md-n1,
        .my-md-n1 {
            margin-top: -.25rem!important
        }
        .mr-md-n1,
        .mx-md-n1 {
            margin-right: -.25rem!important
        }
        .mb-md-n1,
        .my-md-n1 {
            margin-bottom: -.25rem!important
        }
        .ml-md-n1,
        .mx-md-n1 {
            margin-left: -.25rem!important
        }
        .m-md-n2 {
            margin: -.5rem!important
        }
        .mt-md-n2,
        .my-md-n2 {
            margin-top: -.5rem!important
        }
        .mr-md-n2,
        .mx-md-n2 {
            margin-right: -.5rem!important
        }
        .mb-md-n2,
        .my-md-n2 {
            margin-bottom: -.5rem!important
        }
        .ml-md-n2,
        .mx-md-n2 {
            margin-left: -.5rem!important
        }
        .m-md-n3 {
            margin: -1rem!important
        }
        .mt-md-n3,
        .my-md-n3 {
            margin-top: -1rem!important
        }
        .mr-md-n3,
        .mx-md-n3 {
            margin-right: -1rem!important
        }
        .mb-md-n3,
        .my-md-n3 {
            margin-bottom: -1rem!important
        }
        .ml-md-n3,
        .mx-md-n3 {
            margin-left: -1rem!important
        }
        .m-md-n4 {
            margin: -1.5rem!important
        }
        .mt-md-n4,
        .my-md-n4 {
            margin-top: -1.5rem!important
        }
        .mr-md-n4,
        .mx-md-n4 {
            margin-right: -1.5rem!important
        }
        .mb-md-n4,
        .my-md-n4 {
            margin-bottom: -1.5rem!important
        }
        .ml-md-n4,
        .mx-md-n4 {
            margin-left: -1.5rem!important
        }
        .m-md-n5 {
            margin: -3rem!important
        }
        .mt-md-n5,
        .my-md-n5 {
            margin-top: -3rem!important
        }
        .mr-md-n5,
        .mx-md-n5 {
            margin-right: -3rem!important
        }
        .mb-md-n5,
        .my-md-n5 {
            margin-bottom: -3rem!important
        }
        .ml-md-n5,
        .mx-md-n5 {
            margin-left: -3rem!important
        }
        .m-md-auto {
            margin: auto!important
        }
        .mt-md-auto,
        .my-md-auto {
            margin-top: auto!important
        }
        .mr-md-auto,
        .mx-md-auto {
            margin-right: auto!important
        }
        .mb-md-auto,
        .my-md-auto {
            margin-bottom: auto!important
        }
        .ml-md-auto,
        .mx-md-auto {
            margin-left: auto!important
        }
    }

    .text-monospace {
        font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace!important
    }

    .text-justify {
        text-align: justify!important
    }

    .text-wrap {
        white-space: normal!important
    }

    .text-nowrap {
        white-space: nowrap!important
    }

    .text-truncate {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .text-left {
        text-align: left!important
    }

    .text-right {
        text-align: right!important
    }

    .text-center {
        text-align: center!important
    }

    @media (min-width:576px) {
        .text-sm-left {
            text-align: left!important
        }
        .text-sm-right {
            text-align: right!important
        }
        .text-sm-center {
            text-align: center!important
        }
    }

    @media (min-width:768px) {
        .text-md-left {
            text-align: left!important
        }
        .text-md-right {
            text-align: right!important
        }
        .text-md-center {
            text-align: center!important
        }
    }

    @media (min-width:992px) {
        .flex-lg-row {
            flex-direction: row!important
        }
        .flex-lg-column {
            flex-direction: column!important
        }
        .flex-lg-row-reverse {
            flex-direction: row-reverse!important
        }
        .flex-lg-column-reverse {
            flex-direction: column-reverse!important
        }
        .flex-lg-wrap {
            flex-wrap: wrap!important
        }
        .flex-lg-nowrap {
            flex-wrap: nowrap!important
        }
        .flex-lg-wrap-reverse {
            flex-wrap: wrap-reverse!important
        }
        .flex-lg-fill {
            flex: 1 1 auto!important
        }
        .flex-lg-grow-0 {
            flex-grow: 0!important
        }
        .flex-lg-grow-1 {
            flex-grow: 1!important
        }
        .flex-lg-shrink-0 {
            flex-shrink: 0!important
        }
        .flex-lg-shrink-1 {
            flex-shrink: 1!important
        }
        .justify-content-lg-start {
            justify-content: flex-start!important
        }
        .justify-content-lg-end {
            justify-content: flex-end!important
        }
        .justify-content-lg-center {
            justify-content: center!important
        }
        .justify-content-lg-between {
            justify-content: space-between!important
        }
        .justify-content-lg-around {
            justify-content: space-around!important
        }
        .align-items-lg-start {
            align-items: flex-start!important
        }
        .align-items-lg-end {
            align-items: flex-end!important
        }
        .align-items-lg-center {
            align-items: center!important
        }
        .align-items-lg-baseline {
            align-items: baseline!important
        }
        .align-items-lg-stretch {
            align-items: stretch!important
        }
        .align-content-lg-start {
            align-content: flex-start!important
        }
        .align-content-lg-end {
            align-content: flex-end!important
        }
        .align-content-lg-center {
            align-content: center!important
        }
        .align-content-lg-between {
            align-content: space-between!important
        }
        .align-content-lg-around {
            align-content: space-around!important
        }
        .align-content-lg-stretch {
            align-content: stretch!important
        }
        .align-self-lg-auto {
            align-self: auto!important
        }
        .align-self-lg-start {
            align-self: flex-start!important
        }
        .align-self-lg-end {
            align-self: flex-end!important
        }
        .align-self-lg-center {
            align-self: center!important
        }
        .align-self-lg-baseline {
            align-self: baseline!important
        }
        .align-self-lg-stretch {
            align-self: stretch!important
        }
        .float-lg-left {
            float: left!important
        }
        .float-lg-right {
            float: right!important
        }
        .float-lg-none {
            float: none!important
        }
        .m-lg-0 {
            margin: 0!important
        }
        .mt-lg-0,
        .my-lg-0 {
            margin-top: 0!important
        }
        .mr-lg-0,
        .mx-lg-0 {
            margin-right: 0!important
        }
        .mb-lg-0,
        .my-lg-0 {
            margin-bottom: 0!important
        }
        .ml-lg-0,
        .mx-lg-0 {
            margin-left: 0!important
        }
        .m-lg-1 {
            margin: .25rem!important
        }
        .mt-lg-1,
        .my-lg-1 {
            margin-top: .25rem!important
        }
        .mr-lg-1,
        .mx-lg-1 {
            margin-right: .25rem!important
        }
        .mb-lg-1,
        .my-lg-1 {
            margin-bottom: .25rem!important
        }
        .ml-lg-1,
        .mx-lg-1 {
            margin-left: .25rem!important
        }
        .m-lg-2 {
            margin: .5rem!important
        }
        .mt-lg-2,
        .my-lg-2 {
            margin-top: .5rem!important
        }
        .mr-lg-2,
        .mx-lg-2 {
            margin-right: .5rem!important
        }
        .mb-lg-2,
        .my-lg-2 {
            margin-bottom: .5rem!important
        }
        .ml-lg-2,
        .mx-lg-2 {
            margin-left: .5rem!important
        }
        .m-lg-3 {
            margin: 1rem!important
        }
        .mt-lg-3,
        .my-lg-3 {
            margin-top: 1rem!important
        }
        .mr-lg-3,
        .mx-lg-3 {
            margin-right: 1rem!important
        }
        .mb-lg-3,
        .my-lg-3 {
            margin-bottom: 1rem!important
        }
        .ml-lg-3,
        .mx-lg-3 {
            margin-left: 1rem!important
        }
        .m-lg-4 {
            margin: 1.5rem!important
        }
        .mt-lg-4,
        .my-lg-4 {
            margin-top: 1.5rem!important
        }
        .mr-lg-4,
        .mx-lg-4 {
            margin-right: 1.5rem!important
        }
        .mb-lg-4,
        .my-lg-4 {
            margin-bottom: 1.5rem!important
        }
        .ml-lg-4,
        .mx-lg-4 {
            margin-left: 1.5rem!important
        }
        .m-lg-5 {
            margin: 3rem!important
        }
        .mt-lg-5,
        .my-lg-5 {
            margin-top: 3rem!important
        }
        .mr-lg-5,
        .mx-lg-5 {
            margin-right: 3rem!important
        }
        .mb-lg-5,
        .my-lg-5 {
            margin-bottom: 3rem!important
        }
        .ml-lg-5,
        .mx-lg-5 {
            margin-left: 3rem!important
        }
        .p-lg-0 {
            padding: 0!important
        }
        .pt-lg-0,
        .py-lg-0 {
            padding-top: 0!important
        }
        .pr-lg-0,
        .px-lg-0 {
            padding-right: 0!important
        }
        .pb-lg-0,
        .py-lg-0 {
            padding-bottom: 0!important
        }
        .pl-lg-0,
        .px-lg-0 {
            padding-left: 0!important
        }
        .p-lg-1 {
            padding: .25rem!important
        }
        .pt-lg-1,
        .py-lg-1 {
            padding-top: .25rem!important
        }
        .pr-lg-1,
        .px-lg-1 {
            padding-right: .25rem!important
        }
        .pb-lg-1,
        .py-lg-1 {
            padding-bottom: .25rem!important
        }
        .pl-lg-1,
        .px-lg-1 {
            padding-left: .25rem!important
        }
        .p-lg-2 {
            padding: .5rem!important
        }
        .pt-lg-2,
        .py-lg-2 {
            padding-top: .5rem!important
        }
        .pr-lg-2,
        .px-lg-2 {
            padding-right: .5rem!important
        }
        .pb-lg-2,
        .py-lg-2 {
            padding-bottom: .5rem!important
        }
        .pl-lg-2,
        .px-lg-2 {
            padding-left: .5rem!important
        }
        .p-lg-3 {
            padding: 1rem!important
        }
        .pt-lg-3,
        .py-lg-3 {
            padding-top: 1rem!important
        }
        .pr-lg-3,
        .px-lg-3 {
            padding-right: 1rem!important
        }
        .pb-lg-3,
        .py-lg-3 {
            padding-bottom: 1rem!important
        }
        .pl-lg-3,
        .px-lg-3 {
            padding-left: 1rem!important
        }
        .p-lg-4 {
            padding: 1.5rem!important
        }
        .pt-lg-4,
        .py-lg-4 {
            padding-top: 1.5rem!important
        }
        .pr-lg-4,
        .px-lg-4 {
            padding-right: 1.5rem!important
        }
        .pb-lg-4,
        .py-lg-4 {
            padding-bottom: 1.5rem!important
        }
        .pl-lg-4,
        .px-lg-4 {
            padding-left: 1.5rem!important
        }
        .p-lg-5 {
            padding: 3rem!important
        }
        .pt-lg-5,
        .py-lg-5 {
            padding-top: 3rem!important
        }
        .pr-lg-5,
        .px-lg-5 {
            padding-right: 3rem!important
        }
        .pb-lg-5,
        .py-lg-5 {
            padding-bottom: 3rem!important
        }
        .pl-lg-5,
        .px-lg-5 {
            padding-left: 3rem!important
        }
        .m-lg-n1 {
            margin: -.25rem!important
        }
        .mt-lg-n1,
        .my-lg-n1 {
            margin-top: -.25rem!important
        }
        .mr-lg-n1,
        .mx-lg-n1 {
            margin-right: -.25rem!important
        }
        .mb-lg-n1,
        .my-lg-n1 {
            margin-bottom: -.25rem!important
        }
        .ml-lg-n1,
        .mx-lg-n1 {
            margin-left: -.25rem!important
        }
        .m-lg-n2 {
            margin: -.5rem!important
        }
        .mt-lg-n2,
        .my-lg-n2 {
            margin-top: -.5rem!important
        }
        .mr-lg-n2,
        .mx-lg-n2 {
            margin-right: -.5rem!important
        }
        .mb-lg-n2,
        .my-lg-n2 {
            margin-bottom: -.5rem!important
        }
        .ml-lg-n2,
        .mx-lg-n2 {
            margin-left: -.5rem!important
        }
        .m-lg-n3 {
            margin: -1rem!important
        }
        .mt-lg-n3,
        .my-lg-n3 {
            margin-top: -1rem!important
        }
        .mr-lg-n3,
        .mx-lg-n3 {
            margin-right: -1rem!important
        }
        .mb-lg-n3,
        .my-lg-n3 {
            margin-bottom: -1rem!important
        }
        .ml-lg-n3,
        .mx-lg-n3 {
            margin-left: -1rem!important
        }
        .m-lg-n4 {
            margin: -1.5rem!important
        }
        .mt-lg-n4,
        .my-lg-n4 {
            margin-top: -1.5rem!important
        }
        .mr-lg-n4,
        .mx-lg-n4 {
            margin-right: -1.5rem!important
        }
        .mb-lg-n4,
        .my-lg-n4 {
            margin-bottom: -1.5rem!important
        }
        .ml-lg-n4,
        .mx-lg-n4 {
            margin-left: -1.5rem!important
        }
        .m-lg-n5 {
            margin: -3rem!important
        }
        .mt-lg-n5,
        .my-lg-n5 {
            margin-top: -3rem!important
        }
        .mr-lg-n5,
        .mx-lg-n5 {
            margin-right: -3rem!important
        }
        .mb-lg-n5,
        .my-lg-n5 {
            margin-bottom: -3rem!important
        }
        .ml-lg-n5,
        .mx-lg-n5 {
            margin-left: -3rem!important
        }
        .m-lg-auto {
            margin: auto!important
        }
        .mt-lg-auto,
        .my-lg-auto {
            margin-top: auto!important
        }
        .mr-lg-auto,
        .mx-lg-auto {
            margin-right: auto!important
        }
        .mb-lg-auto,
        .my-lg-auto {
            margin-bottom: auto!important
        }
        .ml-lg-auto,
        .mx-lg-auto {
            margin-left: auto!important
        }
        .text-lg-left {
            text-align: left!important
        }
        .text-lg-right {
            text-align: right!important
        }
        .text-lg-center {
            text-align: center!important
        }
    }

    @media (min-width:1600px) {
        .flex-xl-row {
            flex-direction: row!important
        }
        .flex-xl-column {
            flex-direction: column!important
        }
        .flex-xl-row-reverse {
            flex-direction: row-reverse!important
        }
        .flex-xl-column-reverse {
            flex-direction: column-reverse!important
        }
        .flex-xl-wrap {
            flex-wrap: wrap!important
        }
        .flex-xl-nowrap {
            flex-wrap: nowrap!important
        }
        .flex-xl-wrap-reverse {
            flex-wrap: wrap-reverse!important
        }
        .flex-xl-fill {
            flex: 1 1 auto!important
        }
        .flex-xl-grow-0 {
            flex-grow: 0!important
        }
        .flex-xl-grow-1 {
            flex-grow: 1!important
        }
        .flex-xl-shrink-0 {
            flex-shrink: 0!important
        }
        .flex-xl-shrink-1 {
            flex-shrink: 1!important
        }
        .justify-content-xl-start {
            justify-content: flex-start!important
        }
        .justify-content-xl-end {
            justify-content: flex-end!important
        }
        .justify-content-xl-center {
            justify-content: center!important
        }
        .justify-content-xl-between {
            justify-content: space-between!important
        }
        .justify-content-xl-around {
            justify-content: space-around!important
        }
        .align-items-xl-start {
            align-items: flex-start!important
        }
        .align-items-xl-end {
            align-items: flex-end!important
        }
        .align-items-xl-center {
            align-items: center!important
        }
        .align-items-xl-baseline {
            align-items: baseline!important
        }
        .align-items-xl-stretch {
            align-items: stretch!important
        }
        .align-content-xl-start {
            align-content: flex-start!important
        }
        .align-content-xl-end {
            align-content: flex-end!important
        }
        .align-content-xl-center {
            align-content: center!important
        }
        .align-content-xl-between {
            align-content: space-between!important
        }
        .align-content-xl-around {
            align-content: space-around!important
        }
        .align-content-xl-stretch {
            align-content: stretch!important
        }
        .align-self-xl-auto {
            align-self: auto!important
        }
        .align-self-xl-start {
            align-self: flex-start!important
        }
        .align-self-xl-end {
            align-self: flex-end!important
        }
        .align-self-xl-center {
            align-self: center!important
        }
        .align-self-xl-baseline {
            align-self: baseline!important
        }
        .align-self-xl-stretch {
            align-self: stretch!important
        }
        .float-xl-left {
            float: left!important
        }
        .float-xl-right {
            float: right!important
        }
        .float-xl-none {
            float: none!important
        }
        .m-xl-0 {
            margin: 0!important
        }
        .mt-xl-0,
        .my-xl-0 {
            margin-top: 0!important
        }
        .mr-xl-0,
        .mx-xl-0 {
            margin-right: 0!important
        }
        .mb-xl-0,
        .my-xl-0 {
            margin-bottom: 0!important
        }
        .ml-xl-0,
        .mx-xl-0 {
            margin-left: 0!important
        }
        .m-xl-1 {
            margin: .25rem!important
        }
        .mt-xl-1,
        .my-xl-1 {
            margin-top: .25rem!important
        }
        .mr-xl-1,
        .mx-xl-1 {
            margin-right: .25rem!important
        }
        .mb-xl-1,
        .my-xl-1 {
            margin-bottom: .25rem!important
        }
        .ml-xl-1,
        .mx-xl-1 {
            margin-left: .25rem!important
        }
        .m-xl-2 {
            margin: .5rem!important
        }
        .mt-xl-2,
        .my-xl-2 {
            margin-top: .5rem!important
        }
        .mr-xl-2,
        .mx-xl-2 {
            margin-right: .5rem!important
        }
        .mb-xl-2,
        .my-xl-2 {
            margin-bottom: .5rem!important
        }
        .ml-xl-2,
        .mx-xl-2 {
            margin-left: .5rem!important
        }
        .m-xl-3 {
            margin: 1rem!important
        }
        .mt-xl-3,
        .my-xl-3 {
            margin-top: 1rem!important
        }
        .mr-xl-3,
        .mx-xl-3 {
            margin-right: 1rem!important
        }
        .mb-xl-3,
        .my-xl-3 {
            margin-bottom: 1rem!important
        }
        .ml-xl-3,
        .mx-xl-3 {
            margin-left: 1rem!important
        }
        .m-xl-4 {
            margin: 1.5rem!important
        }
        .mt-xl-4,
        .my-xl-4 {
            margin-top: 1.5rem!important
        }
        .mr-xl-4,
        .mx-xl-4 {
            margin-right: 1.5rem!important
        }
        .mb-xl-4,
        .my-xl-4 {
            margin-bottom: 1.5rem!important
        }
        .ml-xl-4,
        .mx-xl-4 {
            margin-left: 1.5rem!important
        }
        .m-xl-5 {
            margin: 3rem!important
        }
        .mt-xl-5,
        .my-xl-5 {
            margin-top: 3rem!important
        }
        .mr-xl-5,
        .mx-xl-5 {
            margin-right: 3rem!important
        }
        .mb-xl-5,
        .my-xl-5 {
            margin-bottom: 3rem!important
        }
        .ml-xl-5,
        .mx-xl-5 {
            margin-left: 3rem!important
        }
        .p-xl-0 {
            padding: 0!important
        }
        .pt-xl-0,
        .py-xl-0 {
            padding-top: 0!important
        }
        .pr-xl-0,
        .px-xl-0 {
            padding-right: 0!important
        }
        .pb-xl-0,
        .py-xl-0 {
            padding-bottom: 0!important
        }
        .pl-xl-0,
        .px-xl-0 {
            padding-left: 0!important
        }
        .p-xl-1 {
            padding: .25rem!important
        }
        .pt-xl-1,
        .py-xl-1 {
            padding-top: .25rem!important
        }
        .pr-xl-1,
        .px-xl-1 {
            padding-right: .25rem!important
        }
        .pb-xl-1,
        .py-xl-1 {
            padding-bottom: .25rem!important
        }
        .pl-xl-1,
        .px-xl-1 {
            padding-left: .25rem!important
        }
        .p-xl-2 {
            padding: .5rem!important
        }
        .pt-xl-2,
        .py-xl-2 {
            padding-top: .5rem!important
        }
        .pr-xl-2,
        .px-xl-2 {
            padding-right: .5rem!important
        }
        .pb-xl-2,
        .py-xl-2 {
            padding-bottom: .5rem!important
        }
        .pl-xl-2,
        .px-xl-2 {
            padding-left: .5rem!important
        }
        .p-xl-3 {
            padding: 1rem!important
        }
        .pt-xl-3,
        .py-xl-3 {
            padding-top: 1rem!important
        }
        .pr-xl-3,
        .px-xl-3 {
            padding-right: 1rem!important
        }
        .pb-xl-3,
        .py-xl-3 {
            padding-bottom: 1rem!important
        }
        .pl-xl-3,
        .px-xl-3 {
            padding-left: 1rem!important
        }
        .p-xl-4 {
            padding: 1.5rem!important
        }
        .pt-xl-4,
        .py-xl-4 {
            padding-top: 1.5rem!important
        }
        .pr-xl-4,
        .px-xl-4 {
            padding-right: 1.5rem!important
        }
        .pb-xl-4,
        .py-xl-4 {
            padding-bottom: 1.5rem!important
        }
        .pl-xl-4,
        .px-xl-4 {
            padding-left: 1.5rem!important
        }
        .p-xl-5 {
            padding: 3rem!important
        }
        .pt-xl-5,
        .py-xl-5 {
            padding-top: 3rem!important
        }
        .pr-xl-5,
        .px-xl-5 {
            padding-right: 3rem!important
        }
        .pb-xl-5,
        .py-xl-5 {
            padding-bottom: 3rem!important
        }
        .pl-xl-5,
        .px-xl-5 {
            padding-left: 3rem!important
        }
        .m-xl-n1 {
            margin: -.25rem!important
        }
        .mt-xl-n1,
        .my-xl-n1 {
            margin-top: -.25rem!important
        }
        .mr-xl-n1,
        .mx-xl-n1 {
            margin-right: -.25rem!important
        }
        .mb-xl-n1,
        .my-xl-n1 {
            margin-bottom: -.25rem!important
        }
        .ml-xl-n1,
        .mx-xl-n1 {
            margin-left: -.25rem!important
        }
        .m-xl-n2 {
            margin: -.5rem!important
        }
        .mt-xl-n2,
        .my-xl-n2 {
            margin-top: -.5rem!important
        }
        .mr-xl-n2,
        .mx-xl-n2 {
            margin-right: -.5rem!important
        }
        .mb-xl-n2,
        .my-xl-n2 {
            margin-bottom: -.5rem!important
        }
        .ml-xl-n2,
        .mx-xl-n2 {
            margin-left: -.5rem!important
        }
        .m-xl-n3 {
            margin: -1rem!important
        }
        .mt-xl-n3,
        .my-xl-n3 {
            margin-top: -1rem!important
        }
        .mr-xl-n3,
        .mx-xl-n3 {
            margin-right: -1rem!important
        }
        .mb-xl-n3,
        .my-xl-n3 {
            margin-bottom: -1rem!important
        }
        .ml-xl-n3,
        .mx-xl-n3 {
            margin-left: -1rem!important
        }
        .m-xl-n4 {
            margin: -1.5rem!important
        }
        .mt-xl-n4,
        .my-xl-n4 {
            margin-top: -1.5rem!important
        }
        .mr-xl-n4,
        .mx-xl-n4 {
            margin-right: -1.5rem!important
        }
        .mb-xl-n4,
        .my-xl-n4 {
            margin-bottom: -1.5rem!important
        }
        .ml-xl-n4,
        .mx-xl-n4 {
            margin-left: -1.5rem!important
        }
        .m-xl-n5 {
            margin: -3rem!important
        }
        .mt-xl-n5,
        .my-xl-n5 {
            margin-top: -3rem!important
        }
        .mr-xl-n5,
        .mx-xl-n5 {
            margin-right: -3rem!important
        }
        .mb-xl-n5,
        .my-xl-n5 {
            margin-bottom: -3rem!important
        }
        .ml-xl-n5,
        .mx-xl-n5 {
            margin-left: -3rem!important
        }
        .m-xl-auto {
            margin: auto!important
        }
        .mt-xl-auto,
        .my-xl-auto {
            margin-top: auto!important
        }
        .mr-xl-auto,
        .mx-xl-auto {
            margin-right: auto!important
        }
        .mb-xl-auto,
        .my-xl-auto {
            margin-bottom: auto!important
        }
        .ml-xl-auto,
        .mx-xl-auto {
            margin-left: auto!important
        }
        .text-xl-left {
            text-align: left!important
        }
        .text-xl-right {
            text-align: right!important
        }
        .text-xl-center {
            text-align: center!important
        }
    }

    .text-lowercase {
        text-transform: lowercase!important
    }

    .text-uppercase {
        text-transform: uppercase!important
    }

    .text-capitalize {
        text-transform: capitalize!important
    }

    .font-weight-light {
        font-weight: 300!important
    }

    .font-weight-lighter {
        font-weight: lighter!important
    }

    .font-weight-normal {
        font-weight: 400!important
    }

    .font-weight-bold {
        font-weight: 700!important
    }

    .font-weight-bolder {
        font-weight: bolder!important
    }

    .font-italic {
        font-style: italic!important
    }

    .text-white {
        color: #fff!important
    }

    .text-primary {
        color: #7460ee!important
    }

    a.text-primary:focus,
    a.text-primary:hover {
        color: #381be7!important
    }

    .text-secondary {
        color: #6c757d!important
    }

    a.text-secondary:focus,
    a.text-secondary:hover {
        color: #494f54!important
    }

    .text-success {
        color: #5ac146!important
    }

    a.text-success:focus,
    a.text-success:hover {
        color: #3e8c2f!important
    }

    .text-info {
        color: #137eff!important
    }

    a.text-info:focus,
    a.text-info:hover {
        color: #005ac6!important
    }

    .text-warning {
        color: #ffbc34!important
    }

    a.text-warning:focus,
    a.text-warning:hover {
        color: #e79a00!important
    }

    .text-danger {
        color: #fa5838!important
    }

    a.text-danger:focus,
    a.text-danger:hover {
        color: #e02a06!important
    }

    .text-light {
        color: #f6f8f9!important
    }

    a.text-light:focus,
    a.text-light:hover {
        color: #c8d4da!important
    }

    .text-dark {
        color: #343a40!important
    }

    a.text-dark:focus,
    a.text-dark:hover {
        color: #121416!important
    }

    .text-cyan {
        color: #4fc3f7!important
    }

    a.text-cyan:focus,
    a.text-cyan:hover {
        color: #0ba8ef!important
    }

    .text-orange {
        color: #fb8c00!important
    }

    a.text-orange:focus,
    a.text-orange:hover {
        color: #af6100!important
    }

    .text-purple {
        color: #8b5edd!important
    }

    a.text-purple:focus,
    a.text-purple:hover {
        color: #612ac5!important
    }

    .text-body {
        color: #6a7a8c!important
    }

    .text-muted {
        color: #afb5c1!important
    }

    .text-black-50 {
        color: rgba(0, 0, 0, .5)!important
    }

    .text-white-50 {
        color: rgba(255, 255, 255, .5)!important
    }

    .text-hide {
        font: 0/0 a;
        color: transparent;
        text-shadow: none;
        background-color: transparent;
        border: 0
    }

    .text-decoration-none {
        text-decoration: none!important
    }

    .text-break {
        word-break: break-word!important;
        overflow-wrap: break-word!important
    }

    .text-reset {
        color: inherit!important
    }

    .visible {
        visibility: visible!important
    }

    .invisible {
        visibility: hidden!important
    }

    @media print {
        blockquote,
        img,
        pre,
        tr {
            page-break-inside: avoid
        }
        .table .thead-dark th,
        .table-dark {
            color: inherit
        }
        *,
        ::after,
        ::before {
            text-shadow: none!important;
            box-shadow: none!important
        }
        a:not(.btn) {
            text-decoration: underline
        }
        abbr[title]::after {
            content: " (" attr(title) ")"
        }
        pre {
            white-space: pre-wrap!important
        }
        blockquote,
        pre {
            border: 1px solid #afb5c1
        }
        thead {
            display: table-header-group
        }
        h2,
        h3,
        p {
            orphans: 3;
            widows: 3
        }
        h2,
        h3 {
            page-break-after: avoid
        }
        @page {
            size: a3
        }
        .container,
        body {
            min-width: 992px!important
        }
        .navbar {
            display: none
        }
        .badge {
            border: 1px solid #000
        }
        .table {
            border-collapse: collapse!important
        }
        .table td,
        .table th {
            background-color: #fff!important
        }
        .table-bordered td,
        .table-bordered th {
            border: 1px solid #dee2e6!important
        }
        .table .thead-dark th,
        .table-dark tbody+tbody,
        .table-dark td,
        .table-dark th,
        .table-dark thead th {
            border-color: rgba(0, 0, 0, .1)
        }
    }

    html[dir=ltr] body .m-t-5 {
        margin-top: 5px
    }

    html[dir=ltr] body .m-b-5 {
        margin-bottom: 5px
    }

    html[dir=ltr] body .m-r-5 {
        margin-right: 5px
    }

    html[dir=ltr] body .m-l-5 {
        margin-left: 5px
    }

    html[dir=ltr] body .p-t-5 {
        padding-top: 5px
    }

    html[dir=ltr] body .p-b-5 {
        padding-bottom: 5px
    }

    html[dir=ltr] body .p-r-5 {
        padding-right: 5px
    }

    html[dir=ltr] body .p-l-5 {
        padding-left: 5px
    }

    html[dir=ltr] body .p-5 {
        padding: 5px
    }

    html[dir=ltr] body .m-5 {
        margin: 5px
    }

    html[dir=ltr] body .m-t-10 {
        margin-top: 10px
    }

    html[dir=ltr] body .m-b-10 {
        margin-bottom: 10px
    }

    html[dir=ltr] body .m-r-10 {
        margin-right: 10px
    }

    html[dir=ltr] body .m-l-10 {
        margin-left: 10px
    }

    html[dir=ltr] body .p-t-10 {
        padding-top: 10px
    }

    html[dir=ltr] body .p-b-10 {
        padding-bottom: 10px
    }

    html[dir=ltr] body .p-r-10 {
        padding-right: 10px
    }

    html[dir=ltr] body .p-l-10 {
        padding-left: 10px
    }

    html[dir=ltr] body .p-10 {
        padding: 10px
    }

    html[dir=ltr] body .m-10 {
        margin: 10px
    }

    html[dir=ltr] body .m-t-15 {
        margin-top: 15px
    }

    html[dir=ltr] body .m-b-15 {
        margin-bottom: 15px
    }

    html[dir=ltr] body .m-r-15 {
        margin-right: 15px
    }

    html[dir=ltr] body .m-l-15 {
        margin-left: 15px
    }

    html[dir=ltr] body .p-t-15 {
        padding-top: 15px
    }

    html[dir=ltr] body .p-b-15 {
        padding-bottom: 15px
    }

    html[dir=ltr] body .p-r-15 {
        padding-right: 15px
    }

    html[dir=ltr] body .p-l-15 {
        padding-left: 15px
    }

    html[dir=ltr] body .p-15 {
        padding: 15px
    }

    html[dir=ltr] body .m-15 {
        margin: 15px
    }

    html[dir=ltr] body .m-t-20 {
        margin-top: 20px
    }

    html[dir=ltr] body .m-b-20 {
        margin-bottom: 20px
    }

    html[dir=ltr] body .m-r-20 {
        margin-right: 20px
    }

    html[dir=ltr] body .m-l-20 {
        margin-left: 20px
    }

    html[dir=ltr] body .p-t-20 {
        padding-top: 20px
    }

    html[dir=ltr] body .p-b-20 {
        padding-bottom: 20px
    }

    html[dir=ltr] body .p-r-20 {
        padding-right: 20px
    }

    html[dir=ltr] body .p-l-20 {
        padding-left: 20px
    }

    html[dir=ltr] body .p-20 {
        padding: 20px
    }

    html[dir=ltr] body .m-20 {
        margin: 20px
    }

    html[dir=ltr] body .m-t-25 {
        margin-top: 25px
    }

    html[dir=ltr] body .m-b-25 {
        margin-bottom: 25px
    }

    html[dir=ltr] body .m-r-25 {
        margin-right: 25px
    }

    html[dir=ltr] body .m-l-25 {
        margin-left: 25px
    }

    html[dir=ltr] body .p-t-25 {
        padding-top: 25px
    }

    html[dir=ltr] body .p-b-25 {
        padding-bottom: 25px
    }

    html[dir=ltr] body .p-r-25 {
        padding-right: 25px
    }

    html[dir=ltr] body .p-l-25 {
        padding-left: 25px
    }

    html[dir=ltr] body .p-25 {
        padding: 25px
    }

    html[dir=ltr] body .m-25 {
        margin: 25px
    }

    html[dir=ltr] body .m-t-30 {
        margin-top: 30px
    }

    html[dir=ltr] body .m-b-30 {
        margin-bottom: 30px
    }

    html[dir=ltr] body .m-r-30 {
        margin-right: 30px
    }

    html[dir=ltr] body .m-l-30 {
        margin-left: 30px
    }

    html[dir=ltr] body .p-t-30 {
        padding-top: 30px
    }

    html[dir=ltr] body .p-b-30 {
        padding-bottom: 30px
    }

    html[dir=ltr] body .p-r-30 {
        padding-right: 30px
    }

    html[dir=ltr] body .p-l-30 {
        padding-left: 30px
    }

    html[dir=ltr] body .p-30 {
        padding: 30px
    }

    html[dir=ltr] body .m-30 {
        margin: 30px
    }

    html[dir=ltr] body .m-t-40 {
        margin-top: 40px
    }

    html[dir=ltr] body .m-b-40 {
        margin-bottom: 40px
    }

    html[dir=ltr] body .m-r-40 {
        margin-right: 40px
    }

    html[dir=ltr] body .m-l-40 {
        margin-left: 40px
    }

    html[dir=ltr] body .p-t-40 {
        padding-top: 40px
    }

    html[dir=ltr] body .p-b-40 {
        padding-bottom: 40px
    }

    html[dir=ltr] body .p-r-40 {
        padding-right: 40px
    }

    html[dir=ltr] body .p-l-40 {
        padding-left: 40px
    }

    html[dir=ltr] body .p-40 {
        padding: 40px
    }

    html[dir=ltr] body .m-40 {
        margin: 40px
    }

    html[dir=ltr] body .m-0-0 {
        margin: 0
    }

    html[dir=ltr] body .m-t-0 {
        margin-top: 0
    }

    html[dir=ltr] body .m-r-0 {
        margin-right: 0
    }

    html[dir=ltr] body .m-b-0 {
        margin-bottom: 0
    }

    html[dir=ltr] body .m-l-0 {
        margin-left: 0
    }

    html[dir=ltr] body .p-0-0 {
        padding: 0
    }

    html[dir=ltr] body .p-t-0 {
        padding-top: 0
    }

    html[dir=ltr] body .p-r-0 {
        padding-right: 0
    }

    html[dir=ltr] body .p-b-0 {
        padding-bottom: 0
    }

    html[dir=ltr] body .p-l-0 {
        padding-left: 0
    }

    #main-wrapper[data-layout=vertical] .topbar .top-navbar .navbar-header[data-logobg=skin1],
    #main-wrapper[data-layout=horizontal] .topbar .top-navbar .navbar-header[data-logobg=skin1] {
        background: #2962FF
    }

    #main-wrapper[data-layout=vertical] .topbar .top-navbar .navbar-header[data-logobg=skin2],
    #main-wrapper[data-layout=horizontal] .topbar .top-navbar .navbar-header[data-logobg=skin2] {
        background: #fe5419
    }

    #main-wrapper[data-layout=vertical] .topbar .top-navbar .navbar-header[data-logobg=skin3],
    #main-wrapper[data-layout=horizontal] .topbar .top-navbar .navbar-header[data-logobg=skin3] {
        background: #00b0ff
    }

    #main-wrapper[data-layout=vertical] .topbar .top-navbar .navbar-header[data-logobg=skin4],
    #main-wrapper[data-layout=horizontal] .topbar .top-navbar .navbar-header[data-logobg=skin4] {
        background: #6659f7
    }

    #main-wrapper[data-layout=vertical] .topbar .top-navbar .navbar-header[data-logobg=skin5],
    #main-wrapper[data-layout=horizontal] .topbar .top-navbar .navbar-header[data-logobg=skin5] {
        background: #233242
    }

    #main-wrapper[data-layout=vertical] .topbar .top-navbar .navbar-header[data-logobg=skin6],
    #main-wrapper[data-layout=horizontal] .topbar .top-navbar .navbar-header[data-logobg=skin6] {
        background: #fff
    }

    #main-wrapper[data-layout=vertical] .topbar .top-navbar .navbar-header[data-logobg=skin6] .navbar-brand .dark-logo,
    #main-wrapper[data-layout=horizontal] .topbar .top-navbar .navbar-header[data-logobg=skin6] .navbar-brand .dark-logo {
        display: inline
    }

    #main-wrapper[data-layout=vertical] .topbar .top-navbar .navbar-header[data-logobg=skin6] .navbar-brand .light-logo,
    #main-wrapper[data-layout=vertical][data-sidebartype=iconbar] .topbar .top-navbar .navbar-header .navbar-brand .logo-icon,
    #main-wrapper[data-layout=horizontal] .topbar .top-navbar .navbar-header[data-logobg=skin6] .navbar-brand .light-logo {
        display: none
    }

    #main-wrapper[data-layout=vertical] .topbar .top-navbar .navbar-header[data-logobg=skin6] .nav-toggler,
    #main-wrapper[data-layout=vertical] .topbar .top-navbar .navbar-header[data-logobg=skin6] .sidebartoggler,
    #main-wrapper[data-layout=vertical] .topbar .top-navbar .navbar-header[data-logobg=skin6] .topbartoggler,
    #main-wrapper[data-layout=horizontal] .topbar .top-navbar .navbar-header[data-logobg=skin6] .nav-toggler,
    #main-wrapper[data-layout=horizontal] .topbar .top-navbar .navbar-header[data-logobg=skin6] .sidebartoggler,
    #main-wrapper[data-layout=horizontal] .topbar .top-navbar .navbar-header[data-logobg=skin6] .topbartoggler {
        color: #6a7a8c
    }

    #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul .nav-small-cap,
    #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul .sidebar-item .sidebar-link i,
    #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul .nav-small-cap,
    #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul .sidebar-item .sidebar-link i {
        color: #2b2b2b
    }

    #main-wrapper[data-layout=vertical] .topbar .navbar-collapse[data-navbarbg=skin1],
    #main-wrapper[data-layout=vertical] .topbar[data-navbarbg=skin1],
    #main-wrapper[data-layout=horizontal] .topbar .navbar-collapse[data-navbarbg=skin1],
    #main-wrapper[data-layout=horizontal] .topbar[data-navbarbg=skin1] {
        background: #2962FF
    }

    #main-wrapper[data-layout=vertical] .topbar .navbar-collapse[data-navbarbg=skin2],
    #main-wrapper[data-layout=vertical] .topbar[data-navbarbg=skin2],
    #main-wrapper[data-layout=horizontal] .topbar .navbar-collapse[data-navbarbg=skin2],
    #main-wrapper[data-layout=horizontal] .topbar[data-navbarbg=skin2] {
        background: #fe5419
    }

    #main-wrapper[data-layout=vertical] .topbar .navbar-collapse[data-navbarbg=skin3],
    #main-wrapper[data-layout=vertical] .topbar[data-navbarbg=skin3],
    #main-wrapper[data-layout=horizontal] .topbar .navbar-collapse[data-navbarbg=skin3],
    #main-wrapper[data-layout=horizontal] .topbar[data-navbarbg=skin3] {
        background: #00b0ff
    }

    #main-wrapper[data-layout=vertical] .topbar .navbar-collapse[data-navbarbg=skin4],
    #main-wrapper[data-layout=vertical] .topbar[data-navbarbg=skin4],
    #main-wrapper[data-layout=horizontal] .topbar .navbar-collapse[data-navbarbg=skin4],
    #main-wrapper[data-layout=horizontal] .topbar[data-navbarbg=skin4] {
        background: #6659f7
    }

    #main-wrapper[data-layout=vertical] .topbar .navbar-collapse[data-navbarbg=skin5],
    #main-wrapper[data-layout=vertical] .topbar[data-navbarbg=skin5],
    #main-wrapper[data-layout=horizontal] .topbar .navbar-collapse[data-navbarbg=skin5],
    #main-wrapper[data-layout=horizontal] .topbar[data-navbarbg=skin5] {
        background: #233242
    }

    #main-wrapper[data-layout=vertical] .topbar .navbar-collapse[data-navbarbg=skin6],
    #main-wrapper[data-layout=vertical] .topbar[data-navbarbg=skin6],
    #main-wrapper[data-layout=horizontal] .topbar .navbar-collapse[data-navbarbg=skin6],
    #main-wrapper[data-layout=horizontal] .topbar[data-navbarbg=skin6] {
        background: #fff
    }

    #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin1],
    #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin1] ul,
    #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin1],
    #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin1] ul {
        background: #2962FF
    }

    #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin2],
    #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin2] ul,
    #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin2],
    #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin2] ul {
        background: #fe5419
    }

    #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin3],
    #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin3] ul,
    #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin3],
    #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin3] ul {
        background: #00b0ff
    }

    #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin4],
    #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin4] ul,
    #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin4],
    #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin4] ul {
        background: #6659f7
    }

    #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin5],
    #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin5] ul,
    #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin5],
    #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin5] ul {
        background: #233242
    }

    #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin6],
    #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul,
    #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin6],
    #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul {
        background: #fff
    }

    #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul .sidebar-item .sidebar-link,
    #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul .sidebar-item .sidebar-link {
        color: #2b2b2b;
        opacity: .7
    }

    #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul .sidebar-item .sidebar-link.active,
    #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul .sidebar-item .sidebar-link:hover,
    #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul .sidebar-item .sidebar-link.active,
    #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul .sidebar-item .sidebar-link:hover {
        opacity: 1
    }

    #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav .has-arrow::after,
    #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav .has-arrow::after {
        border-color: #2b2b2b
    }

    .card-group .card,
    .left-part {
        border-right: 1px solid rgba(0, 0, 0, .1)
    }

    #main-wrapper {
        width: 100%;
        overflow: hidden
    }

    .page-wrapper {
        background: #f2f4f5;
        position: relative;
        display: none
    }

    .page-wrapper>.container-fluid {
        padding: 20px;
        min-height: calc(100vh - 180px)
    }

    .footer {
        padding: 15px 20px
    }

    .left-part {
        height: 100%;
        width: 260px;
        position: absolute
    }

    .left-part.fixed-left-part {
        position: fixed;
        top: 0;
        padding-top: 10px
    }

    .left-part .show-left-part {
        position: absolute;
        top: 45%;
        right: -41px
    }

    .right-part {
        width: calc(100% - 260px);
        min-height: calc(100vh - 64px);
        overflow: auto;
        margin-left: 260px
    }

    .reverse-mode .left-part {
        right: 0;
        border-left: 1px solid rgba(0, 0, 0, .1)
    }

    .reverse-mode .show-left-part {
        right: auto;
        left: -41px
    }

    .reverse-mode .right-part {
        margin-left: 0;
        margin-right: 260px
    }

    #main-wrapper[data-layout=vertical][data-sidebartype=full] .page-wrapper {
        margin-left: 250px
    }

    #main-wrapper[data-layout=vertical][data-sidebartype=iconbar] .page-wrapper {
        margin-left: 180px
    }

    #main-wrapper[data-layout=vertical][data-sidebartype=iconbar] .left-sidebar,
    #main-wrapper[data-layout=vertical][data-sidebartype=iconbar] .sidebar-nav ul .sidebar-item,
    #main-wrapper[data-layout=vertical][data-sidebartype=iconbar] .topbar .top-navbar .navbar-header {
        width: 180px
    }

    #main-wrapper[data-layout=vertical][data-sidebartype=iconbar] .sidebar-nav ul .sidebar-item .sidebar-link {
        display: block;
        text-align: center
    }

    #main-wrapper[data-layout=vertical][data-sidebartype=iconbar] .sidebar-nav ul .sidebar-item .sidebar-link i {
        display: block;
        width: auto
    }

    #main-wrapper[data-layout=vertical][data-sidebartype=overlay] .topbar .top-navbar .navbar-header {
        width: 250px
    }

    #main-wrapper[data-layout=vertical][data-sidebartype=overlay] .left-sidebar {
        left: -250px
    }

    #main-wrapper[data-layout=vertical][data-sidebartype=overlay].show-sidebar .left-sidebar {
        left: 0
    }

    #main-wrapper[data-layout=vertical][data-sidebar-position=fixed] .topbar .top-navbar .navbar-header {
        position: fixed;
        z-index: 10
    }

    #main-wrapper[data-layout=vertical][data-sidebar-position=fixed] .left-sidebar {
        position: fixed
    }

    #main-wrapper[data-layout=vertical][data-header-position=fixed] .topbar {
        position: fixed;
        width: 100%
    }

    #main-wrapper[data-layout=vertical][data-header-position=fixed] .page-wrapper {
        padding-top: 64px
    }

    #main-wrapper[data-layout=vertical][data-boxed-layout=boxed] {
        max-width: 1200px;
        margin: 0 auto;
        position: relative;
        box-shadow: 1px 0 80px rgba(0, 0, 0, .2)
    }

    #main-wrapper[data-layout=vertical][data-boxed-layout=boxed][data-header-position=fixed] .topbar {
        max-width: 1200px
    }

    @media (min-width:768px) {
        #main-wrapper[data-layout=vertical][data-sidebartype=full] .topbar .top-navbar .navbar-header {
            width: 250px
        }
        #main-wrapper[data-layout=vertical][data-sidebar-position=fixed][data-sidebartype=full] .topbar .top-navbar .navbar-collapse,
        #main-wrapper[data-layout=vertical][data-sidebar-position=fixed][data-sidebartype=overlay] .topbar .top-navbar .navbar-collapse {
            margin-left: 250px
        }
        #main-wrapper[data-layout=vertical][data-sidebar-position=fixed][data-sidebartype=iconbar] .topbar .top-navbar .navbar-collapse {
            margin-left: 180px
        }
        #main-wrapper[data-layout=vertical][data-sidebartype=mini-sidebar] .topbar .top-navbar .navbar-header {
            width: 65px
        }
        #main-wrapper[data-layout=vertical][data-sidebartype=mini-sidebar] .topbar .top-navbar .navbar-header .navbar-brand {
            justify-content: center
        }
        #main-wrapper[data-layout=vertical][data-sidebartype=mini-sidebar] .topbar .top-navbar .navbar-header .navbar-brand .logo {
            display: none
        }
        #main-wrapper[data-layout=vertical][data-sidebartype=mini-sidebar] .topbar .top-navbar .navbar-header.expand-logo {
            width: 250px
        }
        #main-wrapper[data-layout=vertical][data-sidebartype=mini-sidebar] .topbar .top-navbar .navbar-header.expand-logo .navbar-brand {
            justify-content: space-between
        }
        #main-wrapper[data-layout=vertical][data-sidebartype=mini-sidebar] .topbar .top-navbar .navbar-header.expand-logo .navbar-brand .logo {
            display: block
        }
        #main-wrapper[data-layout=vertical][data-sidebar-position=fixed][data-sidebartype=mini-sidebar] .topbar .top-navbar .navbar-collapse,
        #main-wrapper[data-layout=vertical][data-sidebartype=mini-sidebar] .page-wrapper {
            margin-left: 65px
        }
        #main-wrapper[data-layout=vertical][data-sidebartype=mini-sidebar] .sidebar-nav .has-arrow:after,
        #main-wrapper[data-layout=vertical][data-sidebartype=mini-sidebar] .sidebar-nav .hide-menu {
            display: none
        }
        #main-wrapper[data-layout=vertical][data-sidebartype=mini-sidebar] .sidebar-nav .nav-small-cap {
            justify-content: center
        }
        #main-wrapper[data-layout=vertical][data-sidebartype=mini-sidebar] .left-sidebar {
            width: 65px
        }
        #main-wrapper[data-layout=vertical][data-sidebartype=mini-sidebar] .left-sidebar:hover {
            width: 250px
        }
        #main-wrapper[data-layout=vertical][data-sidebartype=mini-sidebar] .left-sidebar:hover .sidebar-nav .has-arrow:after,
        #main-wrapper[data-layout=vertical][data-sidebartype=mini-sidebar] .left-sidebar:hover .sidebar-nav .hide-menu {
            display: block
        }
        #main-wrapper[data-layout=vertical][data-sidebartype=mini-sidebar] .left-sidebar:hover .sidebar-nav .nav-small-cap {
            justify-content: flex-start
        }
    }

    @media (max-width:766px) {
        #main-wrapper[data-sidebartype=mini-sidebar] .left-sidebar {
            left: -250px
        }
        #main-wrapper.show-sidebar .left-sidebar {
            left: 0
        }
        #main-wrapper[data-layout=vertical][data-header-position=fixed][data-sidebar-position=fixed] .topbar .top-navbar .navbar-collapse,
        #main-wrapper[data-layout=vertical][data-sidebar-position=fixed] .topbar .top-navbar .navbar-collapse {
            position: relative;
            top: 64px
        }
        .left-part {
            left: -260px;
            background: #f2f4f5;
            z-index: 1;
            position: fixed;
            transition: .1s ease-in
        }
        .left-part.show-panel {
            left: 0
        }
        .reverse-mode .left-part {
            right: -260px;
            left: auto
        }
        .reverse-mode .left-part.show-panel {
            right: 0
        }
        .right-part {
            width: 100%;
            margin-left: 0
        }
    }

    * {
        outline: 0
    }

    body {
        margin: 0;
        overflow-x: hidden;
        color: #6a7a8c;
        background: #fff
    }

    html {
        position: relative;
        min-height: 100%
    }

    a {
        color: #2962FF
    }

    a:focus,
    a:hover {
        text-decoration: none
    }

    a.link {
        color: #6a7a8c
    }

    a.link:focus,
    a.link:hover {
        color: #2962FF
    }

    .box {
        border-radius: 2px;
        padding: 10px
    }

    .no-wrap td,
    .no-wrap th {
        white-space: nowrap
    }

    html body blockquote {
        border: 1px solid rgba(0, 0, 0, .1);
        padding: 15px
    }

    .clear {
        clear: both
    }

    ol li {
        margin: 5px 0
    }

    .thumb-sm {
        height: 32px;
        width: 32px
    }

    .thumb-md {
        height: 48px;
        width: 48px
    }

    .thumb-lg {
        height: 88px;
        width: 88px
    }

    .hide {
        display: none
    }

    .radius {
        border-radius: 2px
    }

    .round,
    .round img {
        border-radius: 100%
    }

    .op-5 {
        opacity: .5
    }

    .op-3 {
        opacity: .3
    }

    html body .font-bold {
        font-weight: 700
    }

    html body .font-normal {
        font-weight: 400
    }

    html body .font-light {
        font-weight: 300
    }

    html body .font-medium {
        font-weight: 500
    }

    html body .font-16 {
        font-size: 16px
    }

    html body .font-12 {
        font-size: 12px
    }

    html body .font-14 {
        font-size: 14px
    }

    html body .font-10 {
        font-size: 10px
    }

    html body .font-18 {
        font-size: 18px
    }

    html body .font-20 {
        font-size: 20px
    }

    html body .font-22 {
        font-size: 22px
    }

    html body .font-24 {
        font-size: 24px
    }

    html body .display-5 {
        font-size: 3rem
    }

    html body .display-6 {
        font-size: 2.5rem
    }

    html body .display-7 {
        font-size: 2rem
    }

    html body .bg-megna {
        background-color: #4fc3f7
    }

    html body .bg-theme {
        background-color: #2962FF
    }

    html body .bg-inverse {
        background-color: #212529
    }

    html body .bg-purple {
        background-color: #8b5edd
    }

    html body .bg-light {
        background-color: #e9ecef
    }

    html body .bg-white {
        background-color: #fff
    }

    .round,
    .round.round-info {
        background: #137eff
    }

    .round {
        color: #fff;
        width: 50px;
        height: 50px;
        display: inline-block;
        font-weight: 400;
        text-align: center;
        line-height: 52px
    }

    .round.round-warning {
        background: #ffbc34
    }

    .round.round-danger {
        background: #fa5838
    }

    .round.round-success {
        background: #5ac146
    }

    .round.round-primary {
        background: #7460ee
    }

    .round-lg {
        line-height: 65px;
        width: 60px;
        height: 60px;
        font-size: 30px
    }

    .badge {
        font-weight: 300;
        line-height: normal
    }

    .badge.badge-pill {
        padding: .2em .6em
    }

    .badge-xs {
        font-size: 9px
    }

    .badge-sm,
    .badge-xs {
        -webkit-transform: translate(0, -2px);
        -ms-transform: translate(0, -2px);
        -o-transform: translate(0, -2px);
        transform: translate(0, -2px)
    }

    ul.list-style-none {
        margin: 0;
        padding: 0
    }

    ul.list-style-none li {
        list-style: none
    }

    ul.list-style-none li a {
        color: #6a7a8c;
        padding: 8px 0;
        display: block;
        text-decoration: none
    }

    ul.list-style-none li a:hover {
        color: #2962FF
    }

    .card {
        margin-bottom: 20px
    }

    .card .card-subtitle {
        font-weight: 300;
        margin-bottom: 10px;
        color: #afb5c1
    }

    .card .card-title {
        position: relative;
        font-weight: 400;
        margin-bottom: 10px
    }

    .card-fullscreen,
    .preloader {
        width: 100%;
        height: 100%;
        top: 0;
        position: fixed
    }

    .card .card-actions {
        float: right
    }

    .card .card-actions a {
        padding: 0 5px;
        cursor: pointer
    }

    .card .card-header .card-title {
        margin-bottom: 0
    }

    .card-alt {
        margin: 0 -20px;
        background: #e4e9ef
    }

    .card-group {
        margin-bottom: 20px
    }

    .card-fullscreen {
        left: 0;
        z-index: 9999;
        overflow: auto
    }

    .oh {
        overflow: hidden
    }

    .card-hover {
        -webkit-transition: all .25s ease;
        -o-transition: all .25s ease;
        -moz-transition: all .25s ease;
        transition: all .25s ease
    }

    .left-sidebar,
    .topbar,
    .topbar .top-navbar .navbar-nav>.nav-item {
        transition: .2s ease-in
    }

    .card-hover:hover {
        webkit-transform: translateY(-4px) scale(1.01);
        -moz-transform: translateY(-4px) scale(1.01);
        -ms-transform: translateY(-4px) scale(1.01);
        -o-transform: translateY(-4px) scale(1.01);
        transform: translateY(-4px) scale(1.01);
        -webkit-box-shadow: 0 14px 24px rgba(62, 57, 107, .1);
        box-shadow: 0 14px 24px rgba(62, 57, 107, .1)
    }

    .draggable-cards .card-header {
        cursor: move
    }

    .card-moved .card {
        background: #137eff;
        color: #fff
    }

    .label {
        padding: 3px 10px;
        line-height: 13px;
        color: #fff;
        font-weight: 400;
        border-radius: 2px;
        font-size: 75%
    }

    .table th,
    .table thead th,
    label {
        font-weight: 500
    }

    .label-rounded {
        border-radius: 60px
    }

    .label-custom {
        background-color: #4fc3f7
    }

    .label-success {
        background-color: #5ac146
    }

    .label-info {
        background-color: #137eff
    }

    .label-warning {
        background-color: #ffbc34
    }

    .label-danger {
        background-color: #fa5838
    }

    .label-megna {
        background-color: #4fc3f7
    }

    .label-primary {
        background-color: #7460ee
    }

    .label-purple {
        background-color: #8b5edd
    }

    .label-red {
        background-color: #fa5838
    }

    .label-inverse {
        background-color: #343a40
    }

    .label-default {
        background-color: #f6f8f9
    }

    .preloader {
        z-index: 99999;
        background: #fff
    }

    .lds-ripple {
        display: inline-block;
        width: 64px;
        height: 64px;
        position: absolute;
        top: calc(50% - 3.5px);
        left: calc(50% - 3.5px)
    }

    .lds-ripple .lds-pos {
        position: absolute;
        border: 2px solid #2962FF;
        opacity: 1;
        border-radius: 50%;
        animation: lds-ripple 1s cubic-bezier(0, .1, .5, 1) infinite
    }

    .lds-ripple .lds-pos:nth-child(2) {
        animation-delay: -.5s
    }

    @keyframes lds-ripple {
        0% {
            top: 28px;
            left: 28px;
            width: 0;
            height: 0;
            opacity: 0
        }
        5% {
            top: 28px;
            left: 28px;
            width: 0;
            height: 0;
            opacity: 1
        }
        100% {
            top: -1px;
            left: -1px;
            width: 58px;
            height: 58px;
            opacity: 0
        }
    }

    .notify {
        position: relative;
        top: -18px;
        right: -11px
    }

    .notify .heartbit {
        position: absolute;
        top: -20px;
        right: -4px;
        height: 25px;
        width: 25px;
        z-index: 10;
        border: 5px solid #fa5838;
        border-radius: 70px;
        -moz-animation: heartbit 1s ease-out;
        -moz-animation-iteration-count: infinite;
        -o-animation: heartbit 1s ease-out;
        -o-animation-iteration-count: infinite;
        -webkit-animation: heartbit 1s ease-out;
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite
    }

    .notify .point {
        width: 6px;
        height: 6px;
        -webkit-border-radius: 30px;
        -moz-border-radius: 30px;
        border-radius: 30px;
        background-color: #fa5838;
        position: absolute;
        right: 6px;
        top: -10px
    }

    @-moz-keyframes heartbit {
        0% {
            -moz-transform: scale(0);
            opacity: 0
        }
        25% {
            -moz-transform: scale(.1);
            opacity: .1
        }
        50% {
            -moz-transform: scale(.5);
            opacity: .3
        }
        75% {
            -moz-transform: scale(.8);
            opacity: .5
        }
        100% {
            -moz-transform: scale(1);
            opacity: 0
        }
    }

    @-webkit-keyframes heartbit {
        0% {
            -webkit-transform: scale(0);
            opacity: 0
        }
        25% {
            -webkit-transform: scale(.1);
            opacity: .1
        }
        50% {
            -webkit-transform: scale(.5);
            opacity: .3
        }
        75% {
            -webkit-transform: scale(.8);
            opacity: .5
        }
        100% {
            -webkit-transform: scale(1);
            opacity: 0
        }
    }

    .topbar {
        position: relative;
        z-index: 50;
        box-shadow: 1px 0 7px rgba(0, 0, 0, .05);
        background: #fff;
        height: 64px
    }

    .topbar .navbar-collapse {
        padding: 0 10px 0 0
    }

    .topbar .top-navbar {
        min-height: 64px;
        padding: 0
    }

    .topbar .top-navbar .dropdown-toggle::after {
        display: none
    }

    .topbar .top-navbar .navbar-header {
        line-height: 64px
    }

    .topbar .top-navbar .navbar-header .navbar-brand {
        display: flex;
        align-items: center;
        margin: 0;
        padding: 0 10px;
        justify-content: space-between
    }

    .topbar .top-navbar .navbar-header .navbar-brand .dark-logo {
        display: none
    }

    .topbar .top-navbar .navbar-header .navbar-brand .logo-icon {
        margin-right: 5px
    }

    .topbar .top-navbar .navbar-header .navbar-brand .sidebartoggler {
        color: #fff
    }

    .topbar .top-navbar .navbar-nav>.nav-item>.nav-link {
        padding: 0 15px;
        font-size: .875rem;
        line-height: 64px;
        height: 64px
    }

    .topbar .top-navbar .navbar-nav>.nav-item>.nav-link .noti {
        position: absolute;
        top: 13px;
        left: 28px;
        font-size: 60%
    }

    .topbar .top-navbar .navbar-nav>.nav-item:hover {
        background: rgba(0, 0, 0, .03)
    }

    .topbar .mailbox,
    .topbar .user-dd {
        min-width: 280px
    }

    .topbar .nav-toggler,
    .topbar .topbartoggler {
        color: #fff;
        padding: 0 15px
    }

    .search-box .app-search {
        z-index: 110;
        width: 100%;
        top: -1px;
        box-shadow: 1px 0 20px rgba(0, 0, 0, .08);
        display: none;
        left: 0
    }

    .search-box .app-search .form-control {
        padding: 23px 40px 20px 23px;
        transition: .2s ease-in;
        height: 68px
    }

    .search-box .app-search .form-control:focus {
        border-color: transparent
    }

    .search-box .app-search .srh-btn {
        position: absolute;
        top: 23px;
        cursor: pointer;
        right: 20px
    }

    .topbar .mega-dropdown {
        position: static
    }

    .topbar .mega-dropdown .dropdown-menu {
        padding: 30px;
        width: 100%;
        max-height: 480px;
        overflow: auto
    }

    .topbar .dropdown-menu {
        padding-top: 0;
        border: 0;
        box-shadow: 1px 1px 15px rgba(0, 0, 0, .1)
    }

    .auth-wrapper .auth-box,
    .customizer,
    .left-sidebar {
        box-shadow: 1px 0 20px rgba(0, 0, 0, .08)
    }

    .topbar .dropdown-menu .with-arrow {
        position: absolute;
        height: 10px;
        overflow: hidden;
        width: 40px;
        top: -10px
    }

    .topbar .dropdown-menu .with-arrow>span {
        background-color: #fff;
        width: 15px;
        height: 15px;
        top: 3px;
        left: 15px;
        position: absolute;
        content: "";
        -moz-border-radius: 6px 0 0;
        border-radius: 6px 0 0
    }

    .topbar .dropdown-menu.dropdown-menu-right .with-arrow {
        right: 0
    }

    .topbar .dropdown-menu.dropdown-menu-right .with-arrow>span {
        right: 20px;
        left: auto
    }

    @media (max-width:767px) {
        .topbar .top-navbar .navbar-collapse.collapsing,
        .topbar .top-navbar .navbar-collapse.show {
            display: block;
            width: 100%;
            border-top: 1px solid rgba(0, 0, 0, .1)
        }
        .topbar .top-navbar .navbar-nav {
            flex-direction: row
        }
        .topbar .top-navbar .navbar-nav .dropdown {
            position: static
        }
        .topbar .top-navbar .navbar-header {
            display: flex;
            align-items: center;
            width: 100%;
            justify-content: space-between
        }
        .topbar .top-navbar .dropdown-menu {
            position: absolute;
            width: 100%
        }
        .topbar .top-navbar .dropdown-menu .with-arrow {
            display: none
        }
    }

    @media only screen and (max-width:767px) and (orientation:landscape) {
        .mailbox .message-center {
            height: 110px!important
        }
        .user-dd .profile-dis {
            height: 110px
        }
    }

    .table-box {
        display: table;
        width: 100%
    }

    .cell {
        display: table-cell
    }

    .nowrap {
        white-space: nowrap
    }

    .lite-padding td {
        padding: 5px
    }

    .no-th-brd.table th,
    .table.no-border tbody td {
        border: 0
    }

    .jsgrid-pager-current-page,
    .jsgrid-pager-nav-button a,
    .jsgrid-pager-page a {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        display: inline-block;
        min-width: 1.5em;
        padding: .5em 1em;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        color: #67757c;
        border: 1px solid #ddd
    }

    .jsgrid-pager-current-page,
    .jsgrid-pager-nav-button a:hover,
    .jsgrid-pager-page a:hover {
        background-color: #2962FF;
        color: #fff
    }

    .jsgrid-pager-nav-button,
    .jsgrid-pager-page {
        padding: 0
    }

    .jsgrid-pager-page.jsgrid-pager-current-page {
        padding: .5em 1em!important
    }

    .page-breadcrumb {
        padding: 20px 20px 0
    }

    .page-breadcrumb .page-title {
        margin-bottom: 0;
        font-weight: 500;
        font-size: 21px
    }

    .page-breadcrumb .breadcrumb {
        padding: 0;
        margin: 0;
        background: 0 0;
        font-size: 12px
    }

    .page-breadcrumb .breadcrumb .breadcrumb-item+.breadcrumb-item::before {
        content: "\e649";
        font-family: themify;
        color: #ced4da;
        font-size: 11px
    }

    .left-sidebar {
        position: absolute;
        width: 250px;
        height: 100%;
        top: 0;
        z-index: 10;
        padding-top: 64px;
        background: #fff
    }

    .scroll-sidebar,
    .sidebar-nav .has-arrow {
        position: relative
    }

    .scroll-sidebar {
        height: calc(100% - 20px)
    }

    .sidebar-nav ul .sidebar-item {
        width: 250px
    }

    .sidebar-nav ul .sidebar-item .sidebar-link {
        color: #fff;
        padding: 12px 15px;
        display: flex;
        white-space: nowrap;
        align-items: center;
        line-height: 25px;
        opacity: .5
    }

    .sidebar-nav ul .sidebar-item .first-level>.sidebar-item.active>.sidebar-link,
    .sidebar-nav ul .sidebar-item .sidebar-link.active,
    .sidebar-nav ul .sidebar-item .sidebar-link:hover {
        opacity: 1
    }

    .sidebar-nav ul .sidebar-item .sidebar-link i {
        font-style: normal;
        width: 35px;
        line-height: 25px;
        font-size: 20px;
        color: #fff;
        display: inline-block;
        text-align: center
    }

    .sidebar-nav ul .sidebar-item.selected>.sidebar-link,
    .sidebar-nav ul .sidebar-item.selected>.sidebar-link i {
        color: #fff
    }

    .sidebar-nav ul .sidebar-item .first-level {
        padding: 0 0 10px
    }

    .sidebar-nav ul .sidebar-item .first-level .sidebar-item .sidebar-link {
        padding: 10px 15px
    }

    .sidebar-nav ul .sidebar-item .first-level .sidebar-item .sidebar-link i {
        font-size: 14px
    }

    .sidebar-nav ul .nav-small-cap {
        font-size: 12px;
        padding: 12px 15px;
        white-space: nowrap;
        display: flex;
        align-items: center;
        line-height: 30px;
        margin-top: 10px;
        color: #fff;
        opacity: .3;
        text-transform: uppercase
    }

    .sidebar-nav ul .nav-small-cap i {
        line-height: 30px;
        margin: 0 5px
    }

    .sidebar-nav>#sidebarnav>.sidebar-item.selected>.sidebar-link,
    .sidebar-nav>#sidebarnav>.sidebar-item>.sidebar-link:hover {
        background: rgba(0, 0, 0, .1);
        border-left: 2px solid #137eff
    }

    .sidebar-nav>#sidebarnav>.sidebar-item>.sidebar-link {
        border-left: 2px solid transparent
    }

    .sidebar-nav ul {
        margin: 0;
        padding: 0
    }

    .sidebar-nav ul li {
        list-style: none
    }

    .collapse.in {
        display: block
    }

    .sidebar-nav .has-arrow::after {
        position: absolute;
        content: '';
        width: 7px;
        height: 7px;
        border-width: 1px 0 0 1px;
        border-style: solid;
        border-color: #fff;
        margin-left: 10px;
        -webkit-transform: rotate(135deg) translate(0, -50%);
        -ms-transform: rotate(135deg) translate(0, -50%);
        -o-transform: rotate(135deg) translate(0, -50%);
        transform: rotate(135deg) translate(0, -50%);
        -webkit-transform-origin: top;
        -ms-transform-origin: top;
        -o-transform-origin: top;
        transform-origin: top;
        top: 25px;
        right: 15px;
        -webkit-transition: all .3s ease-out;
        -o-transition: all .3s ease-out;
        transition: all .3s ease-out
    }

    .sidebar-nav .has-arrow[aria-expanded=true]::after,
    .sidebar-nav li.active>.has-arrow::after,
    .sidebar-nav li>.has-arrow.active::after {
        -webkit-transform: rotate(-135deg) translate(0, -50%);
        -ms-transform: rotate(-135deg) translate(0, -50%);
        -o-transform: rotate(-135deg) translate(0, -50%);
        transform: rotate(-135deg) translate(0, -50%)
    }

    .waves-effect {
        position: relative;
        cursor: pointer;
        display: inline-block;
        overflow: hidden;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        z-index: 1;
        will-change: opacity, transform;
        -webkit-transition: all .1s ease-out;
        -moz-transition: all .1s ease-out;
        -o-transition: all .1s ease-out;
        -ms-transition: all .1s ease-out;
        transition: all .1s ease-out
    }

    .waves-effect .waves-ripple {
        position: absolute;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        margin-top: -10px;
        margin-left: -10px;
        opacity: 0;
        background: rgba(0, 0, 0, .2);
        -webkit-transition: all .7s ease-out;
        -moz-transition: all .7s ease-out;
        -o-transition: all .7s ease-out;
        -ms-transition: all .7s ease-out;
        transition: all .7s ease-out;
        -webkit-transition-property: -webkit-transform, opacity;
        -moz-transition-property: -moz-transform, opacity;
        -o-transition-property: -o-transform, opacity;
        transition-property: transform, opacity;
        -webkit-transform: scale(0);
        -moz-transform: scale(0);
        -ms-transform: scale(0);
        -o-transform: scale(0);
        transform: scale(0)
    }

    .waves-effect.waves-light .waves-ripple {
        background-color: rgba(255, 255, 255, .45)
    }

    .waves-effect.waves-red .waves-ripple {
        background-color: rgba(244, 67, 54, .7)
    }

    .waves-effect.waves-yellow .waves-ripple {
        background-color: rgba(255, 235, 59, .7)
    }

    .waves-effect.waves-orange .waves-ripple {
        background-color: rgba(255, 152, 0, .7)
    }

    .waves-effect.waves-purple .waves-ripple {
        background-color: rgba(156, 39, 176, .7)
    }

    .waves-effect.waves-green .waves-ripple {
        background-color: rgba(76, 175, 80, .7)
    }

    .waves-effect.waves-teal .waves-ripple {
        background-color: rgba(0, 150, 136, .7)
    }

    html body .waves-notransition {
        -webkit-transition: none;
        -moz-transition: none;
        -o-transition: none;
        -ms-transition: none;
        transition: none
    }

    .waves-circle {
        -webkit-transform: translateZ(0);
        -moz-transform: translateZ(0);
        -ms-transform: translateZ(0);
        -o-transform: translateZ(0);
        transform: translateZ(0);
        text-align: center;
        width: 2.5em;
        height: 2.5em;
        line-height: 2.5em;
        border-radius: 50%;
        -webkit-mask-image: none
    }

    .waves-input-wrapper {
        border-radius: .2em;
        vertical-align: bottom
    }

    .waves-input-wrapper .waves-button-input {
        position: relative;
        top: 0;
        left: 0;
        z-index: 1
    }

    .waves-block {
        display: block
    }

    .btn-circle {
        border-radius: 100%;
        width: 40px;
        height: 40px;
        padding: 5px;
        line-height: 30px
    }

    .btn-circle.btn-sm,
    .btn-group-sm>.btn-circle.btn {
        width: 35px;
        height: 35px;
        padding: 8px 10px;
        font-size: 14px
    }

    .btn-circle.btn-lg,
    .btn-group-lg>.btn-circle.btn {
        width: 50px;
        height: 50px;
        padding: 14px 10px;
        font-size: 18px;
        line-height: 23px
    }

    .btn-circle.btn-xl {
        width: 70px;
        height: 70px;
        padding: 14px 15px;
        font-size: 24px
    }

    .btn-xs {
        padding: .25rem .5rem;
        font-size: 10px
    }

    .btn-rounded {
        border-radius: 60px;
        padding: 7px 18px
    }

    .btn-group-lg>.btn-rounded.btn,
    .btn-rounded.btn-lg {
        padding: .75rem 1.5rem
    }

    .btn-group-sm>.btn-rounded.btn,
    .btn-rounded.btn-sm {
        padding: .25rem .5rem;
        font-size: 12px
    }

    .btn-rounded.btn-xs {
        padding: .25rem .5rem;
        font-size: 10px
    }

    .btn-rounded.btn-md {
        padding: 12px 35px;
        font-size: 16px
    }

    .btn-default,
    .btn-default:hover,
    .btn-outline-primary:hover,
    .btn-outline-primary:hover:hover,
    .btn-outline-warning:hover,
    .btn-outline-warning:hover:hover,
    .btn-primary,
    .btn-primary:hover,
    .btn-warning,
    .btn-warning:hover {
        color: #fff
    }

    .btn-default {
        background-color: #137eff
    }

    .btn-facebook {
        color: #fff;
        background-color: #3b5998
    }

    .btn-facebook:hover {
        color: #fff
    }

    .btn-twitter {
        color: #fff;
        background-color: #55acee
    }

    .btn-twitter:hover {
        color: #fff
    }

    .btn-linkedin {
        color: #fff;
        background-color: #007bb6
    }

    .btn-linkedin:hover {
        color: #fff
    }

    .btn-dribbble {
        color: #fff;
        background-color: #ea4c89
    }

    .btn-dribbble:hover {
        color: #fff
    }

    .btn-googleplus {
        color: #fff;
        background-color: #dd4b39
    }

    .btn-googleplus:hover {
        color: #fff
    }

    .btn-instagram {
        color: #fff;
        background-color: #3f729b
    }

    .btn-pinterest {
        color: #fff;
        background-color: #cb2027
    }

    .btn-dropbox {
        color: #fff;
        background-color: #007ee5
    }

    .btn-flickr {
        color: #fff;
        background-color: #ff0084
    }

    .btn-tumblr {
        color: #fff;
        background-color: #32506d
    }

    .btn-skype {
        color: #fff;
        background-color: #00aff0
    }

    .btn-youtube {
        color: #fff;
        background-color: #b00
    }

    .btn-github {
        color: #fff;
        background-color: #171515
    }

    .button-group .btn {
        margin-bottom: 5px;
        margin-right: 5px
    }

    .no-button-group .btn {
        margin-bottom: 5px;
        margin-right: 0
    }

    .btn .text-active {
        display: none
    }

    .btn.active .text-active {
        display: inline-block
    }

    .btn.active .text {
        display: none
    }

    .customizer {
        background: #fff;
        position: fixed;
        height: 100%;
        width: 280px;
        top: 0;
        right: -280px;
        z-index: 100;
        transition: .3s ease-in
    }

    .customizer .service-panel-toggle {
        background: #fa5838;
        padding: 12px 20px;
        color: #fff;
        position: absolute;
        top: 30%;
        left: -54px
    }

    .customizer.show-service-panel {
        right: 0
    }

    .customizer .customizer-body {
        position: relative;
        height: 100%
    }

    .customizer .customizer-tab {
        display: flex
    }

    .customizer .customizer-tab .nav-item {
        width: 33.33%;
        text-align: center
    }

    .customizer .customizer-tab .nav-item .nav-link {
        padding: 15px 12px;
        color: #6a7a8c;
        border-bottom: 3px solid transparent
    }

    .customizer .customizer-tab .nav-item .nav-link.active,
    .customizer .customizer-tab .nav-item .nav-link:hover {
        border-bottom: 3px solid #2962FF;
        color: #2962FF
    }

    .custom-control-label::after,
    .custom-control-label::before {
        top: .15rem
    }

    .theme-color {
        padding: 0;
        margin: 0;
        list-style: none
    }

    .theme-color .theme-item {
        list-style: none;
        display: inline-block;
        margin-right: 5px
    }

    .theme-color .theme-item .theme-link {
        border-radius: 100%;
        width: 20px;
        height: 20px;
        display: block
    }

    .theme-color .theme-item .theme-link[data-logobg=skin1],
    .theme-color .theme-item .theme-link[data-navbarbg=skin1],
    .theme-color .theme-item .theme-link[data-sidebarbg=skin1] {
        background: #2962FF
    }

    .theme-color .theme-item .theme-link[data-logobg=skin2],
    .theme-color .theme-item .theme-link[data-navbarbg=skin2],
    .theme-color .theme-item .theme-link[data-sidebarbg=skin2] {
        background: #fe5419
    }

    .theme-color .theme-item .theme-link[data-logobg=skin3],
    .theme-color .theme-item .theme-link[data-navbarbg=skin3],
    .theme-color .theme-item .theme-link[data-sidebarbg=skin3] {
        background: #00b0ff
    }

    .theme-color .theme-item .theme-link[data-logobg=skin4],
    .theme-color .theme-item .theme-link[data-navbarbg=skin4],
    .theme-color .theme-item .theme-link[data-sidebarbg=skin4] {
        background: #6659f7
    }

    .theme-color .theme-item .theme-link[data-logobg=skin5],
    .theme-color .theme-item .theme-link[data-navbarbg=skin5],
    .theme-color .theme-item .theme-link[data-sidebarbg=skin5] {
        background: #233242
    }

    .theme-color .theme-item .theme-link[data-logobg=skin6],
    .theme-color .theme-item .theme-link[data-navbarbg=skin6],
    .theme-color .theme-item .theme-link[data-sidebarbg=skin6] {
        background: #e9ecef
    }


    /*!
 * animate.css -http://daneden.me/animate
 * Version - 3.5.1
 * Licensed under the MIT license - http://opensource.org/licenses/MIT
 *
 * Copyright (c) 2016 Daniel Eden
 */

    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both
    }

    .animated.infinite {
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite
    }

    .animated.hinge {
        -webkit-animation-duration: 2s;
        animation-duration: 2s
    }

    .animated.bounceIn,
    .animated.bounceOut,
    .animated.flipOutX,
    .animated.flipOutY {
        -webkit-animation-duration: .75s;
        animation-duration: .75s
    }

    @-webkit-keyframes bounce {
        20%,
        53%,
        80%,
        from,
        to {
            -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
        40%,
        43% {
            -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
            animation-timing-function: cubic-bezier(.755, .05, .855, .06);
            -webkit-transform: translate3d(0, -30px, 0);
            transform: translate3d(0, -30px, 0)
        }
        70% {
            -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
            animation-timing-function: cubic-bezier(.755, .05, .855, .06);
            -webkit-transform: translate3d(0, -15px, 0);
            transform: translate3d(0, -15px, 0)
        }
        90% {
            -webkit-transform: translate3d(0, -4px, 0);
            transform: translate3d(0, -4px, 0)
        }
    }

    @keyframes bounce {
        20%,
        53%,
        80%,
        from,
        to {
            -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
        40%,
        43% {
            -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
            animation-timing-function: cubic-bezier(.755, .05, .855, .06);
            -webkit-transform: translate3d(0, -30px, 0);
            transform: translate3d(0, -30px, 0)
        }
        70% {
            -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
            animation-timing-function: cubic-bezier(.755, .05, .855, .06);
            -webkit-transform: translate3d(0, -15px, 0);
            transform: translate3d(0, -15px, 0)
        }
        90% {
            -webkit-transform: translate3d(0, -4px, 0);
            transform: translate3d(0, -4px, 0)
        }
    }

    .bounce {
        -webkit-animation-name: bounce;
        animation-name: bounce;
        -webkit-transform-origin: center bottom;
        transform-origin: center bottom
    }

    @-webkit-keyframes flash {
        50%,
        from,
        to {
            opacity: 1
        }
        25%,
        75% {
            opacity: 0
        }
    }

    @keyframes flash {
        50%,
        from,
        to {
            opacity: 1
        }
        25%,
        75% {
            opacity: 0
        }
    }

    .flash {
        -webkit-animation-name: flash;
        animation-name: flash
    }

    @-webkit-keyframes pulse {
        from,
        to {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1)
        }
        50% {
            -webkit-transform: scale3d(1.05, 1.05, 1.05);
            transform: scale3d(1.05, 1.05, 1.05)
        }
    }

    @keyframes pulse {
        from,
        to {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1)
        }
        50% {
            -webkit-transform: scale3d(1.05, 1.05, 1.05);
            transform: scale3d(1.05, 1.05, 1.05)
        }
    }

    .pulse {
        -webkit-animation-name: pulse;
        animation-name: pulse
    }

    @-webkit-keyframes rubberBand {
        from,
        to {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1)
        }
        30% {
            -webkit-transform: scale3d(1.25, .75, 1);
            transform: scale3d(1.25, .75, 1)
        }
        40% {
            -webkit-transform: scale3d(.75, 1.25, 1);
            transform: scale3d(.75, 1.25, 1)
        }
        50% {
            -webkit-transform: scale3d(1.15, .85, 1);
            transform: scale3d(1.15, .85, 1)
        }
        65% {
            -webkit-transform: scale3d(.95, 1.05, 1);
            transform: scale3d(.95, 1.05, 1)
        }
        75% {
            -webkit-transform: scale3d(1.05, .95, 1);
            transform: scale3d(1.05, .95, 1)
        }
    }

    @keyframes rubberBand {
        from,
        to {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1)
        }
        30% {
            -webkit-transform: scale3d(1.25, .75, 1);
            transform: scale3d(1.25, .75, 1)
        }
        40% {
            -webkit-transform: scale3d(.75, 1.25, 1);
            transform: scale3d(.75, 1.25, 1)
        }
        50% {
            -webkit-transform: scale3d(1.15, .85, 1);
            transform: scale3d(1.15, .85, 1)
        }
        65% {
            -webkit-transform: scale3d(.95, 1.05, 1);
            transform: scale3d(.95, 1.05, 1)
        }
        75% {
            -webkit-transform: scale3d(1.05, .95, 1);
            transform: scale3d(1.05, .95, 1)
        }
    }

    .rubberBand {
        -webkit-animation-name: rubberBand;
        animation-name: rubberBand
    }

    @-webkit-keyframes shake {
        from,
        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
        10%,
        30%,
        50%,
        70%,
        90% {
            -webkit-transform: translate3d(-10px, 0, 0);
            transform: translate3d(-10px, 0, 0)
        }
        20%,
        40%,
        60%,
        80% {
            -webkit-transform: translate3d(10px, 0, 0);
            transform: translate3d(10px, 0, 0)
        }
    }

    @keyframes shake {
        from,
        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
        10%,
        30%,
        50%,
        70%,
        90% {
            -webkit-transform: translate3d(-10px, 0, 0);
            transform: translate3d(-10px, 0, 0)
        }
        20%,
        40%,
        60%,
        80% {
            -webkit-transform: translate3d(10px, 0, 0);
            transform: translate3d(10px, 0, 0)
        }
    }

    .shake {
        -webkit-animation-name: shake;
        animation-name: shake
    }

    @-webkit-keyframes headShake {
        0% {
            -webkit-transform: translateX(0);
            transform: translateX(0)
        }
        6.5% {
            -webkit-transform: translateX(-6px) rotateY(-9deg);
            transform: translateX(-6px) rotateY(-9deg)
        }
        18.5% {
            -webkit-transform: translateX(5px) rotateY(7deg);
            transform: translateX(5px) rotateY(7deg)
        }
        31.5% {
            -webkit-transform: translateX(-3px) rotateY(-5deg);
            transform: translateX(-3px) rotateY(-5deg)
        }
        43.5% {
            -webkit-transform: translateX(2px) rotateY(3deg);
            transform: translateX(2px) rotateY(3deg)
        }
        50% {
            -webkit-transform: translateX(0);
            transform: translateX(0)
        }
    }

    @keyframes headShake {
        0% {
            -webkit-transform: translateX(0);
            transform: translateX(0)
        }
        6.5% {
            -webkit-transform: translateX(-6px) rotateY(-9deg);
            transform: translateX(-6px) rotateY(-9deg)
        }
        18.5% {
            -webkit-transform: translateX(5px) rotateY(7deg);
            transform: translateX(5px) rotateY(7deg)
        }
        31.5% {
            -webkit-transform: translateX(-3px) rotateY(-5deg);
            transform: translateX(-3px) rotateY(-5deg)
        }
        43.5% {
            -webkit-transform: translateX(2px) rotateY(3deg);
            transform: translateX(2px) rotateY(3deg)
        }
        50% {
            -webkit-transform: translateX(0);
            transform: translateX(0)
        }
    }

    .headShake {
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
        -webkit-animation-name: headShake;
        animation-name: headShake
    }

    @-webkit-keyframes swing {
        20% {
            -webkit-transform: rotate3d(0, 0, 1, 15deg);
            transform: rotate3d(0, 0, 1, 15deg)
        }
        40% {
            -webkit-transform: rotate3d(0, 0, 1, -10deg);
            transform: rotate3d(0, 0, 1, -10deg)
        }
        60% {
            -webkit-transform: rotate3d(0, 0, 1, 5deg);
            transform: rotate3d(0, 0, 1, 5deg)
        }
        80% {
            -webkit-transform: rotate3d(0, 0, 1, -5deg);
            transform: rotate3d(0, 0, 1, -5deg)
        }
        to {
            -webkit-transform: rotate3d(0, 0, 1, 0deg);
            transform: rotate3d(0, 0, 1, 0deg)
        }
    }

    @keyframes swing {
        20% {
            -webkit-transform: rotate3d(0, 0, 1, 15deg);
            transform: rotate3d(0, 0, 1, 15deg)
        }
        40% {
            -webkit-transform: rotate3d(0, 0, 1, -10deg);
            transform: rotate3d(0, 0, 1, -10deg)
        }
        60% {
            -webkit-transform: rotate3d(0, 0, 1, 5deg);
            transform: rotate3d(0, 0, 1, 5deg)
        }
        80% {
            -webkit-transform: rotate3d(0, 0, 1, -5deg);
            transform: rotate3d(0, 0, 1, -5deg)
        }
        to {
            -webkit-transform: rotate3d(0, 0, 1, 0deg);
            transform: rotate3d(0, 0, 1, 0deg)
        }
    }

    .swing {
        -webkit-transform-origin: top center;
        transform-origin: top center;
        -webkit-animation-name: swing;
        animation-name: swing
    }

    @-webkit-keyframes tada {
        from,
        to {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1)
        }
        10%,
        20% {
            -webkit-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg)
        }
        30%,
        50%,
        70%,
        90% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg)
        }
        40%,
        60%,
        80% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg)
        }
    }

    @keyframes tada {
        from,
        to {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1)
        }
        10%,
        20% {
            -webkit-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg)
        }
        30%,
        50%,
        70%,
        90% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg)
        }
        40%,
        60%,
        80% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg)
        }
    }

    .tada {
        -webkit-animation-name: tada;
        animation-name: tada
    }

    @-webkit-keyframes wobble {
        from,
        to {
            -webkit-transform: none;
            transform: none
        }
        15% {
            -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
            transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg)
        }
        30% {
            -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
            transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg)
        }
        45% {
            -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
            transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg)
        }
        60% {
            -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
            transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg)
        }
        75% {
            -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
            transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg)
        }
    }

    @keyframes wobble {
        from,
        to {
            -webkit-transform: none;
            transform: none
        }
        15% {
            -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
            transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg)
        }
        30% {
            -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
            transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg)
        }
        45% {
            -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
            transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg)
        }
        60% {
            -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
            transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg)
        }
        75% {
            -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
            transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg)
        }
    }

    .wobble {
        -webkit-animation-name: wobble;
        animation-name: wobble
    }

    @-webkit-keyframes jello {
        11.1%,
        from,
        to {
            -webkit-transform: none;
            transform: none
        }
        22.2% {
            -webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
            transform: skewX(-12.5deg) skewY(-12.5deg)
        }
        33.3% {
            -webkit-transform: skewX(6.25deg) skewY(6.25deg);
            transform: skewX(6.25deg) skewY(6.25deg)
        }
        44.4% {
            -webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
            transform: skewX(-3.125deg) skewY(-3.125deg)
        }
        55.5% {
            -webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
            transform: skewX(1.5625deg) skewY(1.5625deg)
        }
        66.6% {
            -webkit-transform: skewX(-.78125deg) skewY(-.78125deg);
            transform: skewX(-.78125deg) skewY(-.78125deg)
        }
        77.7% {
            -webkit-transform: skewX(.39063deg) skewY(.39063deg);
            transform: skewX(.39063deg) skewY(.39063deg)
        }
        88.8% {
            -webkit-transform: skewX(-.19531deg) skewY(-.19531deg);
            transform: skewX(-.19531deg) skewY(-.19531deg)
        }
    }

    @keyframes jello {
        11.1%,
        from,
        to {
            -webkit-transform: none;
            transform: none
        }
        22.2% {
            -webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
            transform: skewX(-12.5deg) skewY(-12.5deg)
        }
        33.3% {
            -webkit-transform: skewX(6.25deg) skewY(6.25deg);
            transform: skewX(6.25deg) skewY(6.25deg)
        }
        44.4% {
            -webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
            transform: skewX(-3.125deg) skewY(-3.125deg)
        }
        55.5% {
            -webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
            transform: skewX(1.5625deg) skewY(1.5625deg)
        }
        66.6% {
            -webkit-transform: skewX(-.78125deg) skewY(-.78125deg);
            transform: skewX(-.78125deg) skewY(-.78125deg)
        }
        77.7% {
            -webkit-transform: skewX(.39063deg) skewY(.39063deg);
            transform: skewX(.39063deg) skewY(.39063deg)
        }
        88.8% {
            -webkit-transform: skewX(-.19531deg) skewY(-.19531deg);
            transform: skewX(-.19531deg) skewY(-.19531deg)
        }
    }

    .jello {
        -webkit-animation-name: jello;
        animation-name: jello;
        -webkit-transform-origin: center;
        transform-origin: center
    }

    @-webkit-keyframes bounceIn {
        20%,
        40%,
        60%,
        80%,
        from,
        to {
            -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            animation-timing-function: cubic-bezier(.215, .61, .355, 1)
        }
        0% {
            opacity: 0;
            -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3)
        }
        20% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1)
        }
        40% {
            -webkit-transform: scale3d(.9, .9, .9);
            transform: scale3d(.9, .9, .9)
        }
        60% {
            opacity: 1;
            -webkit-transform: scale3d(1.03, 1.03, 1.03);
            transform: scale3d(1.03, 1.03, 1.03)
        }
        80% {
            -webkit-transform: scale3d(.97, .97, .97);
            transform: scale3d(.97, .97, .97)
        }
        to {
            opacity: 1;
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1)
        }
    }

    @keyframes bounceIn {
        20%,
        40%,
        60%,
        80%,
        from,
        to {
            -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            animation-timing-function: cubic-bezier(.215, .61, .355, 1)
        }
        0% {
            opacity: 0;
            -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3)
        }
        20% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1)
        }
        40% {
            -webkit-transform: scale3d(.9, .9, .9);
            transform: scale3d(.9, .9, .9)
        }
        60% {
            opacity: 1;
            -webkit-transform: scale3d(1.03, 1.03, 1.03);
            transform: scale3d(1.03, 1.03, 1.03)
        }
        80% {
            -webkit-transform: scale3d(.97, .97, .97);
            transform: scale3d(.97, .97, .97)
        }
        to {
            opacity: 1;
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1)
        }
    }

    .bounceIn {
        -webkit-animation-name: bounceIn;
        animation-name: bounceIn
    }

    @-webkit-keyframes bounceInDown {
        60%,
        75%,
        90%,
        from,
        to {
            -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            animation-timing-function: cubic-bezier(.215, .61, .355, 1)
        }
        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -3000px, 0);
            transform: translate3d(0, -3000px, 0)
        }
        60% {
            opacity: 1;
            -webkit-transform: translate3d(0, 25px, 0);
            transform: translate3d(0, 25px, 0)
        }
        75% {
            -webkit-transform: translate3d(0, -10px, 0);
            transform: translate3d(0, -10px, 0)
        }
        90% {
            -webkit-transform: translate3d(0, 5px, 0);
            transform: translate3d(0, 5px, 0)
        }
        to {
            -webkit-transform: none;
            transform: none
        }
    }

    @keyframes bounceInDown {
        60%,
        75%,
        90%,
        from,
        to {
            -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            animation-timing-function: cubic-bezier(.215, .61, .355, 1)
        }
        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -3000px, 0);
            transform: translate3d(0, -3000px, 0)
        }
        60% {
            opacity: 1;
            -webkit-transform: translate3d(0, 25px, 0);
            transform: translate3d(0, 25px, 0)
        }
        75% {
            -webkit-transform: translate3d(0, -10px, 0);
            transform: translate3d(0, -10px, 0)
        }
        90% {
            -webkit-transform: translate3d(0, 5px, 0);
            transform: translate3d(0, 5px, 0)
        }
        to {
            -webkit-transform: none;
            transform: none
        }
    }

    .bounceInDown {
        -webkit-animation-name: bounceInDown;
        animation-name: bounceInDown
    }

    @-webkit-keyframes bounceInLeft {
        60%,
        75%,
        90%,
        from,
        to {
            -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            animation-timing-function: cubic-bezier(.215, .61, .355, 1)
        }
        0% {
            opacity: 0;
            -webkit-transform: translate3d(-3000px, 0, 0);
            transform: translate3d(-3000px, 0, 0)
        }
        60% {
            opacity: 1;
            -webkit-transform: translate3d(25px, 0, 0);
            transform: translate3d(25px, 0, 0)
        }
        75% {
            -webkit-transform: translate3d(-10px, 0, 0);
            transform: translate3d(-10px, 0, 0)
        }
        90% {
            -webkit-transform: translate3d(5px, 0, 0);
            transform: translate3d(5px, 0, 0)
        }
        to {
            -webkit-transform: none;
            transform: none
        }
    }

    @keyframes bounceInLeft {
        60%,
        75%,
        90%,
        from,
        to {
            -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            animation-timing-function: cubic-bezier(.215, .61, .355, 1)
        }
        0% {
            opacity: 0;
            -webkit-transform: translate3d(-3000px, 0, 0);
            transform: translate3d(-3000px, 0, 0)
        }
        60% {
            opacity: 1;
            -webkit-transform: translate3d(25px, 0, 0);
            transform: translate3d(25px, 0, 0)
        }
        75% {
            -webkit-transform: translate3d(-10px, 0, 0);
            transform: translate3d(-10px, 0, 0)
        }
        90% {
            -webkit-transform: translate3d(5px, 0, 0);
            transform: translate3d(5px, 0, 0)
        }
        to {
            -webkit-transform: none;
            transform: none
        }
    }

    .bounceInLeft {
        -webkit-animation-name: bounceInLeft;
        animation-name: bounceInLeft
    }

    @-webkit-keyframes bounceInRight {
        60%,
        75%,
        90%,
        from,
        to {
            -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            animation-timing-function: cubic-bezier(.215, .61, .355, 1)
        }
        from {
            opacity: 0;
            -webkit-transform: translate3d(3000px, 0, 0);
            transform: translate3d(3000px, 0, 0)
        }
        60% {
            opacity: 1;
            -webkit-transform: translate3d(-25px, 0, 0);
            transform: translate3d(-25px, 0, 0)
        }
        75% {
            -webkit-transform: translate3d(10px, 0, 0);
            transform: translate3d(10px, 0, 0)
        }
        90% {
            -webkit-transform: translate3d(-5px, 0, 0);
            transform: translate3d(-5px, 0, 0)
        }
        to {
            -webkit-transform: none;
            transform: none
        }
    }

    @keyframes bounceInRight {
        60%,
        75%,
        90%,
        from,
        to {
            -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            animation-timing-function: cubic-bezier(.215, .61, .355, 1)
        }
        from {
            opacity: 0;
            -webkit-transform: translate3d(3000px, 0, 0);
            transform: translate3d(3000px, 0, 0)
        }
        60% {
            opacity: 1;
            -webkit-transform: translate3d(-25px, 0, 0);
            transform: translate3d(-25px, 0, 0)
        }
        75% {
            -webkit-transform: translate3d(10px, 0, 0);
            transform: translate3d(10px, 0, 0)
        }
        90% {
            -webkit-transform: translate3d(-5px, 0, 0);
            transform: translate3d(-5px, 0, 0)
        }
        to {
            -webkit-transform: none;
            transform: none
        }
    }

    .bounceInRight {
        -webkit-animation-name: bounceInRight;
        animation-name: bounceInRight
    }

    @-webkit-keyframes bounceInUp {
        60%,
        75%,
        90%,
        from,
        to {
            -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            animation-timing-function: cubic-bezier(.215, .61, .355, 1)
        }
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, 3000px, 0);
            transform: translate3d(0, 3000px, 0)
        }
        60% {
            opacity: 1;
            -webkit-transform: translate3d(0, -20px, 0);
            transform: translate3d(0, -20px, 0)
        }
        75% {
            -webkit-transform: translate3d(0, 10px, 0);
            transform: translate3d(0, 10px, 0)
        }
        90% {
            -webkit-transform: translate3d(0, -5px, 0);
            transform: translate3d(0, -5px, 0)
        }
        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @keyframes bounceInUp {
        60%,
        75%,
        90%,
        from,
        to {
            -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            animation-timing-function: cubic-bezier(.215, .61, .355, 1)
        }
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, 3000px, 0);
            transform: translate3d(0, 3000px, 0)
        }
        60% {
            opacity: 1;
            -webkit-transform: translate3d(0, -20px, 0);
            transform: translate3d(0, -20px, 0)
        }
        75% {
            -webkit-transform: translate3d(0, 10px, 0);
            transform: translate3d(0, 10px, 0)
        }
        90% {
            -webkit-transform: translate3d(0, -5px, 0);
            transform: translate3d(0, -5px, 0)
        }
        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    .bounceInUp {
        -webkit-animation-name: bounceInUp;
        animation-name: bounceInUp
    }

    @-webkit-keyframes bounceOut {
        20% {
            -webkit-transform: scale3d(.9, .9, .9);
            transform: scale3d(.9, .9, .9)
        }
        50%,
        55% {
            opacity: 1;
            -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1)
        }
        to {
            opacity: 0;
            -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3)
        }
    }

    @keyframes bounceOut {
        20% {
            -webkit-transform: scale3d(.9, .9, .9);
            transform: scale3d(.9, .9, .9)
        }
        50%,
        55% {
            opacity: 1;
            -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1)
        }
        to {
            opacity: 0;
            -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3)
        }
    }

    .bounceOut {
        -webkit-animation-name: bounceOut;
        animation-name: bounceOut
    }

    @-webkit-keyframes bounceOutDown {
        20% {
            -webkit-transform: translate3d(0, 10px, 0);
            transform: translate3d(0, 10px, 0)
        }
        40%,
        45% {
            opacity: 1;
            -webkit-transform: translate3d(0, -20px, 0);
            transform: translate3d(0, -20px, 0)
        }
        to {
            opacity: 0;
            -webkit-transform: translate3d(0, 2000px, 0);
            transform: translate3d(0, 2000px, 0)
        }
    }

    @keyframes bounceOutDown {
        20% {
            -webkit-transform: translate3d(0, 10px, 0);
            transform: translate3d(0, 10px, 0)
        }
        40%,
        45% {
            opacity: 1;
            -webkit-transform: translate3d(0, -20px, 0);
            transform: translate3d(0, -20px, 0)
        }
        to {
            opacity: 0;
            -webkit-transform: translate3d(0, 2000px, 0);
            transform: translate3d(0, 2000px, 0)
        }
    }

    .bounceOutDown {
        -webkit-animation-name: bounceOutDown;
        animation-name: bounceOutDown
    }

    @-webkit-keyframes bounceOutLeft {
        20% {
            opacity: 1;
            -webkit-transform: translate3d(20px, 0, 0);
            transform: translate3d(20px, 0, 0)
        }
        to {
            opacity: 0;
            -webkit-transform: translate3d(-2000px, 0, 0);
            transform: translate3d(-2000px, 0, 0)
        }
    }

    @keyframes bounceOutLeft {
        20% {
            opacity: 1;
            -webkit-transform: translate3d(20px, 0, 0);
            transform: translate3d(20px, 0, 0)
        }
        to {
            opacity: 0;
            -webkit-transform: translate3d(-2000px, 0, 0);
            transform: translate3d(-2000px, 0, 0)
        }
    }

    .bounceOutLeft {
        -webkit-animation-name: bounceOutLeft;
        animation-name: bounceOutLeft
    }

    @-webkit-keyframes bounceOutRight {
        20% {
            opacity: 1;
            -webkit-transform: translate3d(-20px, 0, 0);
            transform: translate3d(-20px, 0, 0)
        }
        to {
            opacity: 0;
            -webkit-transform: translate3d(2000px, 0, 0);
            transform: translate3d(2000px, 0, 0)
        }
    }

    @keyframes bounceOutRight {
        20% {
            opacity: 1;
            -webkit-transform: translate3d(-20px, 0, 0);
            transform: translate3d(-20px, 0, 0)
        }
        to {
            opacity: 0;
            -webkit-transform: translate3d(2000px, 0, 0);
            transform: translate3d(2000px, 0, 0)
        }
    }

    .bounceOutRight {
        -webkit-animation-name: bounceOutRight;
        animation-name: bounceOutRight
    }

    @-webkit-keyframes bounceOutUp {
        20% {
            -webkit-transform: translate3d(0, -10px, 0);
            transform: translate3d(0, -10px, 0)
        }
        40%,
        45% {
            opacity: 1;
            -webkit-transform: translate3d(0, 20px, 0);
            transform: translate3d(0, 20px, 0)
        }
        to {
            opacity: 0;
            -webkit-transform: translate3d(0, -2000px, 0);
            transform: translate3d(0, -2000px, 0)
        }
    }

    @keyframes bounceOutUp {
        20% {
            -webkit-transform: translate3d(0, -10px, 0);
            transform: translate3d(0, -10px, 0)
        }
        40%,
        45% {
            opacity: 1;
            -webkit-transform: translate3d(0, 20px, 0);
            transform: translate3d(0, 20px, 0)
        }
        to {
            opacity: 0;
            -webkit-transform: translate3d(0, -2000px, 0);
            transform: translate3d(0, -2000px, 0)
        }
    }

    .bounceOutUp {
        -webkit-animation-name: bounceOutUp;
        animation-name: bounceOutUp
    }

    @-webkit-keyframes fadeIn {
        from {
            opacity: 0
        }
        to {
            opacity: 1
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0
        }
        to {
            opacity: 1
        }
    }

    .fadeIn {
        -webkit-animation-name: fadeIn;
        animation-name: fadeIn
    }

    @-webkit-keyframes fadeInDown {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0)
        }
        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none
        }
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0)
        }
        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none
        }
    }

    .fadeInDown {
        -webkit-animation-name: fadeInDown;
        animation-name: fadeInDown
    }

    @-webkit-keyframes fadeInDownBig {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, -2000px, 0);
            transform: translate3d(0, -2000px, 0)
        }
        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none
        }
    }

    @keyframes fadeInDownBig {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, -2000px, 0);
            transform: translate3d(0, -2000px, 0)
        }
        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none
        }
    }

    .fadeInDownBig {
        -webkit-animation-name: fadeInDownBig;
        animation-name: fadeInDownBig
    }

    @-webkit-keyframes fadeInLeft {
        from {
            opacity: 0;
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0)
        }
        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none
        }
    }

    @keyframes fadeInLeft {
        from {
            opacity: 0;
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0)
        }
        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none
        }
    }

    .fadeInLeft {
        -webkit-animation-name: fadeInLeft;
        animation-name: fadeInLeft
    }

    @-webkit-keyframes fadeInLeftBig {
        from {
            opacity: 0;
            -webkit-transform: translate3d(-2000px, 0, 0);
            transform: translate3d(-2000px, 0, 0)
        }
        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none
        }
    }

    @keyframes fadeInLeftBig {
        from {
            opacity: 0;
            -webkit-transform: translate3d(-2000px, 0, 0);
            transform: translate3d(-2000px, 0, 0)
        }
        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none
        }
    }

    .fadeInLeftBig {
        -webkit-animation-name: fadeInLeftBig;
        animation-name: fadeInLeftBig
    }

    @-webkit-keyframes fadeInRight {
        from {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none
        }
    }

    .fadeInRight {
        -webkit-animation-name: fadeInRight;
        animation-name: fadeInRight
    }

    @-webkit-keyframes fadeInRightBig {
        from {
            opacity: 0;
            -webkit-transform: translate3d(2000px, 0, 0);
            transform: translate3d(2000px, 0, 0)
        }
        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none
        }
    }

    @keyframes fadeInRightBig {
        from {
            opacity: 0;
            -webkit-transform: translate3d(2000px, 0, 0);
            transform: translate3d(2000px, 0, 0)
        }
        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none
        }
    }

    .fadeInRightBig {
        -webkit-animation-name: fadeInRightBig;
        animation-name: fadeInRightBig
    }

    @-webkit-keyframes fadeInUp {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0)
        }
        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0)
        }
        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none
        }
    }

    .fadeInUp {
        -webkit-animation-name: fadeInUp;
        animation-name: fadeInUp
    }

    @-webkit-keyframes fadeInUpBig {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, 2000px, 0);
            transform: translate3d(0, 2000px, 0)
        }
        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none
        }
    }

    @keyframes fadeInUpBig {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, 2000px, 0);
            transform: translate3d(0, 2000px, 0)
        }
        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none
        }
    }

    .fadeInUpBig {
        -webkit-animation-name: fadeInUpBig;
        animation-name: fadeInUpBig
    }

    @-webkit-keyframes fadeOut {
        from {
            opacity: 1
        }
        to {
            opacity: 0
        }
    }

    @keyframes fadeOut {
        from {
            opacity: 1
        }
        to {
            opacity: 0
        }
    }

    .fadeOut {
        -webkit-animation-name: fadeOut;
        animation-name: fadeOut
    }

    @-webkit-keyframes fadeOutDown {
        from {
            opacity: 1
        }
        to {
            opacity: 0;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0)
        }
    }

    @keyframes fadeOutDown {
        from {
            opacity: 1
        }
        to {
            opacity: 0;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0)
        }
    }

    .fadeOutDown {
        -webkit-animation-name: fadeOutDown;
        animation-name: fadeOutDown
    }

    @-webkit-keyframes fadeOutDownBig {
        from {
            opacity: 1
        }
        to {
            opacity: 0;
            -webkit-transform: translate3d(0, 2000px, 0);
            transform: translate3d(0, 2000px, 0)
        }
    }

    @keyframes fadeOutDownBig {
        from {
            opacity: 1
        }
        to {
            opacity: 0;
            -webkit-transform: translate3d(0, 2000px, 0);
            transform: translate3d(0, 2000px, 0)
        }
    }

    .fadeOutDownBig {
        -webkit-animation-name: fadeOutDownBig;
        animation-name: fadeOutDownBig
    }

    @-webkit-keyframes fadeOutLeft {
        from {
            opacity: 1
        }
        to {
            opacity: 0;
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0)
        }
    }

    @keyframes fadeOutLeft {
        from {
            opacity: 1
        }
        to {
            opacity: 0;
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0)
        }
    }

    .fadeOutLeft {
        -webkit-animation-name: fadeOutLeft;
        animation-name: fadeOutLeft
    }

    @-webkit-keyframes fadeOutLeftBig {
        from {
            opacity: 1
        }
        to {
            opacity: 0;
            -webkit-transform: translate3d(-2000px, 0, 0);
            transform: translate3d(-2000px, 0, 0)
        }
    }

    @keyframes fadeOutLeftBig {
        from {
            opacity: 1
        }
        to {
            opacity: 0;
            -webkit-transform: translate3d(-2000px, 0, 0);
            transform: translate3d(-2000px, 0, 0)
        }
    }

    .fadeOutLeftBig {
        -webkit-animation-name: fadeOutLeftBig;
        animation-name: fadeOutLeftBig
    }

    @-webkit-keyframes fadeOutRight {
        from {
            opacity: 1
        }
        to {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
    }

    @keyframes fadeOutRight {
        from {
            opacity: 1
        }
        to {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
    }

    .fadeOutRight {
        -webkit-animation-name: fadeOutRight;
        animation-name: fadeOutRight
    }

    @-webkit-keyframes fadeOutRightBig {
        from {
            opacity: 1
        }
        to {
            opacity: 0;
            -webkit-transform: translate3d(2000px, 0, 0);
            transform: translate3d(2000px, 0, 0)
        }
    }

    @keyframes fadeOutRightBig {
        from {
            opacity: 1
        }
        to {
            opacity: 0;
            -webkit-transform: translate3d(2000px, 0, 0);
            transform: translate3d(2000px, 0, 0)
        }
    }

    .fadeOutRightBig {
        -webkit-animation-name: fadeOutRightBig;
        animation-name: fadeOutRightBig
    }

    @-webkit-keyframes fadeOutUp {
        from {
            opacity: 1
        }
        to {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0)
        }
    }

    @keyframes fadeOutUp {
        from {
            opacity: 1
        }
        to {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0)
        }
    }

    .fadeOutUp {
        -webkit-animation-name: fadeOutUp;
        animation-name: fadeOutUp
    }

    @-webkit-keyframes fadeOutUpBig {
        from {
            opacity: 1
        }
        to {
            opacity: 0;
            -webkit-transform: translate3d(0, -2000px, 0);
            transform: translate3d(0, -2000px, 0)
        }
    }

    @keyframes fadeOutUpBig {
        from {
            opacity: 1
        }
        to {
            opacity: 0;
            -webkit-transform: translate3d(0, -2000px, 0);
            transform: translate3d(0, -2000px, 0)
        }
    }

    .fadeOutUpBig {
        -webkit-animation-name: fadeOutUpBig;
        animation-name: fadeOutUpBig
    }

    @-webkit-keyframes flip {
        from {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
            transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
            -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out
        }
        40% {
            -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
            transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
            -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out
        }
        50% {
            -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
            transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in
        }
        80% {
            -webkit-transform: perspective(400px) scale3d(.95, .95, .95);
            transform: perspective(400px) scale3d(.95, .95, .95);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in
        }
        to {
            -webkit-transform: perspective(400px);
            transform: perspective(400px);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in
        }
    }

    @keyframes flip {
        from {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
            transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
            -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out
        }
        40% {
            -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
            transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
            -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out
        }
        50% {
            -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
            transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in
        }
        80% {
            -webkit-transform: perspective(400px) scale3d(.95, .95, .95);
            transform: perspective(400px) scale3d(.95, .95, .95);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in
        }
        to {
            -webkit-transform: perspective(400px);
            transform: perspective(400px);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in
        }
    }

    .animated.flip {
        -webkit-backface-visibility: visible;
        backface-visibility: visible;
        -webkit-animation-name: flip;
        animation-name: flip
    }

    @-webkit-keyframes flipInX {
        from {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
            opacity: 0
        }
        40% {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in
        }
        60% {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
            transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
            opacity: 1
        }
        80% {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
            transform: perspective(400px) rotate3d(1, 0, 0, -5deg)
        }
        to {
            -webkit-transform: perspective(400px);
            transform: perspective(400px)
        }
    }

    @keyframes flipInX {
        from {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
            opacity: 0
        }
        40% {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in
        }
        60% {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
            transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
            opacity: 1
        }
        80% {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
            transform: perspective(400px) rotate3d(1, 0, 0, -5deg)
        }
        to {
            -webkit-transform: perspective(400px);
            transform: perspective(400px)
        }
    }

    .flipInX {
        -webkit-backface-visibility: visible!important;
        backface-visibility: visible!important;
        -webkit-animation-name: flipInX;
        animation-name: flipInX
    }

    .flipInY,
    .flipOutX {
        -webkit-backface-visibility: visible!important
    }

    @-webkit-keyframes flipInY {
        from {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
            transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
            opacity: 0
        }
        40% {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
            transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in
        }
        60% {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
            transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
            opacity: 1
        }
        80% {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
            transform: perspective(400px) rotate3d(0, 1, 0, -5deg)
        }
        to {
            -webkit-transform: perspective(400px);
            transform: perspective(400px)
        }
    }

    @keyframes flipInY {
        from {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
            transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
            opacity: 0
        }
        40% {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
            transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in
        }
        60% {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
            transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
            opacity: 1
        }
        80% {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
            transform: perspective(400px) rotate3d(0, 1, 0, -5deg)
        }
        to {
            -webkit-transform: perspective(400px);
            transform: perspective(400px)
        }
    }

    .flipInY {
        backface-visibility: visible!important;
        -webkit-animation-name: flipInY;
        animation-name: flipInY
    }

    @-webkit-keyframes flipOutX {
        from {
            -webkit-transform: perspective(400px);
            transform: perspective(400px)
        }
        30% {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            opacity: 1
        }
        to {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            opacity: 0
        }
    }

    @keyframes flipOutX {
        from {
            -webkit-transform: perspective(400px);
            transform: perspective(400px)
        }
        30% {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            opacity: 1
        }
        to {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            opacity: 0
        }
    }

    .flipOutX {
        -webkit-animation-name: flipOutX;
        animation-name: flipOutX;
        backface-visibility: visible!important
    }

    @-webkit-keyframes flipOutY {
        from {
            -webkit-transform: perspective(400px);
            transform: perspective(400px)
        }
        30% {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
            transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
            opacity: 1
        }
        to {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
            transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
            opacity: 0
        }
    }

    @keyframes flipOutY {
        from {
            -webkit-transform: perspective(400px);
            transform: perspective(400px)
        }
        30% {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
            transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
            opacity: 1
        }
        to {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
            transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
            opacity: 0
        }
    }

    .flipOutY {
        -webkit-backface-visibility: visible!important;
        backface-visibility: visible!important;
        -webkit-animation-name: flipOutY;
        animation-name: flipOutY
    }

    @-webkit-keyframes lightSpeedIn {
        from {
            -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
            transform: translate3d(100%, 0, 0) skewX(-30deg);
            opacity: 0
        }
        60% {
            -webkit-transform: skewX(20deg);
            transform: skewX(20deg);
            opacity: 1
        }
        80% {
            -webkit-transform: skewX(-5deg);
            transform: skewX(-5deg);
            opacity: 1
        }
        to {
            -webkit-transform: none;
            transform: none;
            opacity: 1
        }
    }

    @keyframes lightSpeedIn {
        from {
            -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
            transform: translate3d(100%, 0, 0) skewX(-30deg);
            opacity: 0
        }
        60% {
            -webkit-transform: skewX(20deg);
            transform: skewX(20deg);
            opacity: 1
        }
        80% {
            -webkit-transform: skewX(-5deg);
            transform: skewX(-5deg);
            opacity: 1
        }
        to {
            -webkit-transform: none;
            transform: none;
            opacity: 1
        }
    }

    .lightSpeedIn {
        -webkit-animation-name: lightSpeedIn;
        animation-name: lightSpeedIn;
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out
    }

    @-webkit-keyframes lightSpeedOut {
        from {
            opacity: 1
        }
        to {
            -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
            transform: translate3d(100%, 0, 0) skewX(30deg);
            opacity: 0
        }
    }

    @keyframes lightSpeedOut {
        from {
            opacity: 1
        }
        to {
            -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
            transform: translate3d(100%, 0, 0) skewX(30deg);
            opacity: 0
        }
    }

    .lightSpeedOut {
        -webkit-animation-name: lightSpeedOut;
        animation-name: lightSpeedOut;
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }

    @-webkit-keyframes rotateIn {
        from {
            -webkit-transform-origin: center;
            transform-origin: center;
            -webkit-transform: rotate3d(0, 0, 1, -200deg);
            transform: rotate3d(0, 0, 1, -200deg);
            opacity: 0
        }
        to {
            -webkit-transform-origin: center;
            transform-origin: center;
            -webkit-transform: none;
            transform: none;
            opacity: 1
        }
    }

    @keyframes rotateIn {
        from {
            -webkit-transform-origin: center;
            transform-origin: center;
            -webkit-transform: rotate3d(0, 0, 1, -200deg);
            transform: rotate3d(0, 0, 1, -200deg);
            opacity: 0
        }
        to {
            -webkit-transform-origin: center;
            transform-origin: center;
            -webkit-transform: none;
            transform: none;
            opacity: 1
        }
    }

    .rotateIn {
        -webkit-animation-name: rotateIn;
        animation-name: rotateIn
    }

    @-webkit-keyframes rotateInDownLeft {
        from {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: rotate3d(0, 0, 1, -45deg);
            transform: rotate3d(0, 0, 1, -45deg);
            opacity: 0
        }
        to {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: none;
            transform: none;
            opacity: 1
        }
    }

    @keyframes rotateInDownLeft {
        from {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: rotate3d(0, 0, 1, -45deg);
            transform: rotate3d(0, 0, 1, -45deg);
            opacity: 0
        }
        to {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: none;
            transform: none;
            opacity: 1
        }
    }

    .rotateInDownLeft {
        -webkit-animation-name: rotateInDownLeft;
        animation-name: rotateInDownLeft
    }

    @-webkit-keyframes rotateInDownRight {
        from {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: rotate3d(0, 0, 1, 45deg);
            transform: rotate3d(0, 0, 1, 45deg);
            opacity: 0
        }
        to {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: none;
            transform: none;
            opacity: 1
        }
    }

    @keyframes rotateInDownRight {
        from {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: rotate3d(0, 0, 1, 45deg);
            transform: rotate3d(0, 0, 1, 45deg);
            opacity: 0
        }
        to {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: none;
            transform: none;
            opacity: 1
        }
    }

    .rotateInDownRight {
        -webkit-animation-name: rotateInDownRight;
        animation-name: rotateInDownRight
    }

    @-webkit-keyframes rotateInUpLeft {
        from {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: rotate3d(0, 0, 1, 45deg);
            transform: rotate3d(0, 0, 1, 45deg);
            opacity: 0
        }
        to {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: none;
            transform: none;
            opacity: 1
        }
    }

    @keyframes rotateInUpLeft {
        from {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: rotate3d(0, 0, 1, 45deg);
            transform: rotate3d(0, 0, 1, 45deg);
            opacity: 0
        }
        to {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: none;
            transform: none;
            opacity: 1
        }
    }

    .rotateInUpLeft {
        -webkit-animation-name: rotateInUpLeft;
        animation-name: rotateInUpLeft
    }

    @-webkit-keyframes rotateInUpRight {
        from {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: rotate3d(0, 0, 1, -90deg);
            transform: rotate3d(0, 0, 1, -90deg);
            opacity: 0
        }
        to {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: none;
            transform: none;
            opacity: 1
        }
    }

    @keyframes rotateInUpRight {
        from {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: rotate3d(0, 0, 1, -90deg);
            transform: rotate3d(0, 0, 1, -90deg);
            opacity: 0
        }
        to {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: none;
            transform: none;
            opacity: 1
        }
    }

    .rotateInUpRight {
        -webkit-animation-name: rotateInUpRight;
        animation-name: rotateInUpRight
    }

    @-webkit-keyframes rotateOut {
        from {
            -webkit-transform-origin: center;
            transform-origin: center;
            opacity: 1
        }
        to {
            -webkit-transform-origin: center;
            transform-origin: center;
            -webkit-transform: rotate3d(0, 0, 1, 200deg);
            transform: rotate3d(0, 0, 1, 200deg);
            opacity: 0
        }
    }

    @keyframes rotateOut {
        from {
            -webkit-transform-origin: center;
            transform-origin: center;
            opacity: 1
        }
        to {
            -webkit-transform-origin: center;
            transform-origin: center;
            -webkit-transform: rotate3d(0, 0, 1, 200deg);
            transform: rotate3d(0, 0, 1, 200deg);
            opacity: 0
        }
    }

    .rotateOut {
        -webkit-animation-name: rotateOut;
        animation-name: rotateOut
    }

    @-webkit-keyframes rotateOutDownLeft {
        from {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            opacity: 1
        }
        to {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: rotate3d(0, 0, 1, 45deg);
            transform: rotate3d(0, 0, 1, 45deg);
            opacity: 0
        }
    }

    @keyframes rotateOutDownLeft {
        from {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            opacity: 1
        }
        to {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: rotate3d(0, 0, 1, 45deg);
            transform: rotate3d(0, 0, 1, 45deg);
            opacity: 0
        }
    }

    .rotateOutDownLeft {
        -webkit-animation-name: rotateOutDownLeft;
        animation-name: rotateOutDownLeft
    }

    @-webkit-keyframes rotateOutDownRight {
        from {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            opacity: 1
        }
        to {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: rotate3d(0, 0, 1, -45deg);
            transform: rotate3d(0, 0, 1, -45deg);
            opacity: 0
        }
    }

    @keyframes rotateOutDownRight {
        from {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            opacity: 1
        }
        to {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: rotate3d(0, 0, 1, -45deg);
            transform: rotate3d(0, 0, 1, -45deg);
            opacity: 0
        }
    }

    .rotateOutDownRight {
        -webkit-animation-name: rotateOutDownRight;
        animation-name: rotateOutDownRight
    }

    @-webkit-keyframes rotateOutUpLeft {
        from {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            opacity: 1
        }
        to {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: rotate3d(0, 0, 1, -45deg);
            transform: rotate3d(0, 0, 1, -45deg);
            opacity: 0
        }
    }

    @keyframes rotateOutUpLeft {
        from {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            opacity: 1
        }
        to {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: rotate3d(0, 0, 1, -45deg);
            transform: rotate3d(0, 0, 1, -45deg);
            opacity: 0
        }
    }

    .rotateOutUpLeft {
        -webkit-animation-name: rotateOutUpLeft;
        animation-name: rotateOutUpLeft
    }

    @-webkit-keyframes rotateOutUpRight {
        from {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            opacity: 1
        }
        to {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: rotate3d(0, 0, 1, 90deg);
            transform: rotate3d(0, 0, 1, 90deg);
            opacity: 0
        }
    }

    @keyframes rotateOutUpRight {
        from {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            opacity: 1
        }
        to {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: rotate3d(0, 0, 1, 90deg);
            transform: rotate3d(0, 0, 1, 90deg);
            opacity: 0
        }
    }

    .rotateOutUpRight {
        -webkit-animation-name: rotateOutUpRight;
        animation-name: rotateOutUpRight
    }

    @-webkit-keyframes hinge {
        0% {
            -webkit-transform-origin: top left;
            transform-origin: top left;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out
        }
        20%,
        60% {
            -webkit-transform: rotate3d(0, 0, 1, 80deg);
            transform: rotate3d(0, 0, 1, 80deg);
            -webkit-transform-origin: top left;
            transform-origin: top left;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out
        }
        40%,
        80% {
            -webkit-transform: rotate3d(0, 0, 1, 60deg);
            transform: rotate3d(0, 0, 1, 60deg);
            -webkit-transform-origin: top left;
            transform-origin: top left;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
            opacity: 1
        }
        to {
            -webkit-transform: translate3d(0, 700px, 0);
            transform: translate3d(0, 700px, 0);
            opacity: 0
        }
    }

    @keyframes hinge {
        0% {
            -webkit-transform-origin: top left;
            transform-origin: top left;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out
        }
        20%,
        60% {
            -webkit-transform: rotate3d(0, 0, 1, 80deg);
            transform: rotate3d(0, 0, 1, 80deg);
            -webkit-transform-origin: top left;
            transform-origin: top left;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out
        }
        40%,
        80% {
            -webkit-transform: rotate3d(0, 0, 1, 60deg);
            transform: rotate3d(0, 0, 1, 60deg);
            -webkit-transform-origin: top left;
            transform-origin: top left;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
            opacity: 1
        }
        to {
            -webkit-transform: translate3d(0, 700px, 0);
            transform: translate3d(0, 700px, 0);
            opacity: 0
        }
    }

    .hinge {
        -webkit-animation-name: hinge;
        animation-name: hinge
    }

    @-webkit-keyframes rollIn {
        from {
            opacity: 0;
            -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
            transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg)
        }
        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none
        }
    }

    @keyframes rollIn {
        from {
            opacity: 0;
            -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
            transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg)
        }
        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none
        }
    }

    .rollIn {
        -webkit-animation-name: rollIn;
        animation-name: rollIn
    }

    @-webkit-keyframes rollOut {
        from {
            opacity: 1
        }
        to {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
            transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg)
        }
    }

    @keyframes rollOut {
        from {
            opacity: 1
        }
        to {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
            transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg)
        }
    }

    .rollOut {
        -webkit-animation-name: rollOut;
        animation-name: rollOut
    }

    @-webkit-keyframes zoomIn {
        from {
            opacity: 0;
            -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3)
        }
        50% {
            opacity: 1
        }
    }

    @keyframes zoomIn {
        from {
            opacity: 0;
            -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3)
        }
        50% {
            opacity: 1
        }
    }

    .zoomIn {
        -webkit-animation-name: zoomIn;
        animation-name: zoomIn
    }

    @-webkit-keyframes zoomInDown {
        from {
            opacity: 0;
            -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
            transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
            -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
            animation-timing-function: cubic-bezier(.55, .055, .675, .19)
        }
        60% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
            transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
            -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
            animation-timing-function: cubic-bezier(.175, .885, .32, 1)
        }
    }

    @keyframes zoomInDown {
        from {
            opacity: 0;
            -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
            transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
            -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
            animation-timing-function: cubic-bezier(.55, .055, .675, .19)
        }
        60% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
            transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
            -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
            animation-timing-function: cubic-bezier(.175, .885, .32, 1)
        }
    }

    .zoomInDown {
        -webkit-animation-name: zoomInDown;
        animation-name: zoomInDown
    }

    @-webkit-keyframes zoomInLeft {
        from {
            opacity: 0;
            -webkit-transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
            transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
            -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
            animation-timing-function: cubic-bezier(.55, .055, .675, .19)
        }
        60% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
            transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
            -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
            animation-timing-function: cubic-bezier(.175, .885, .32, 1)
        }
    }

    @keyframes zoomInLeft {
        from {
            opacity: 0;
            -webkit-transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
            transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
            -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
            animation-timing-function: cubic-bezier(.55, .055, .675, .19)
        }
        60% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
            transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
            -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
            animation-timing-function: cubic-bezier(.175, .885, .32, 1)
        }
    }

    .zoomInLeft {
        -webkit-animation-name: zoomInLeft;
        animation-name: zoomInLeft
    }

    @-webkit-keyframes zoomInRight {
        from {
            opacity: 0;
            -webkit-transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
            transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
            -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
            animation-timing-function: cubic-bezier(.55, .055, .675, .19)
        }
        60% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
            transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
            -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
            animation-timing-function: cubic-bezier(.175, .885, .32, 1)
        }
    }

    @keyframes zoomInRight {
        from {
            opacity: 0;
            -webkit-transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
            transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
            -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
            animation-timing-function: cubic-bezier(.55, .055, .675, .19)
        }
        60% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
            transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
            -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
            animation-timing-function: cubic-bezier(.175, .885, .32, 1)
        }
    }

    .zoomInRight {
        -webkit-animation-name: zoomInRight;
        animation-name: zoomInRight
    }

    @-webkit-keyframes zoomInUp {
        from {
            opacity: 0;
            -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
            transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
            -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
            animation-timing-function: cubic-bezier(.55, .055, .675, .19)
        }
        60% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
            transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
            -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
            animation-timing-function: cubic-bezier(.175, .885, .32, 1)
        }
    }

    @keyframes zoomInUp {
        from {
            opacity: 0;
            -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
            transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
            -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
            animation-timing-function: cubic-bezier(.55, .055, .675, .19)
        }
        60% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
            transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
            -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
            animation-timing-function: cubic-bezier(.175, .885, .32, 1)
        }
    }

    .zoomInUp {
        -webkit-animation-name: zoomInUp;
        animation-name: zoomInUp
    }

    @-webkit-keyframes zoomOut {
        from {
            opacity: 1
        }
        50% {
            opacity: 0;
            -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3)
        }
        to {
            opacity: 0
        }
    }

    @keyframes zoomOut {
        from {
            opacity: 1
        }
        50% {
            opacity: 0;
            -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3)
        }
        to {
            opacity: 0
        }
    }

    .zoomOut {
        -webkit-animation-name: zoomOut;
        animation-name: zoomOut
    }

    @-webkit-keyframes zoomOutDown {
        40% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
            transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
            -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
            animation-timing-function: cubic-bezier(.55, .055, .675, .19)
        }
        to {
            opacity: 0;
            -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
            transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
            -webkit-transform-origin: center bottom;
            transform-origin: center bottom;
            -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
            animation-timing-function: cubic-bezier(.175, .885, .32, 1)
        }
    }

    @keyframes zoomOutDown {
        40% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
            transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
            -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
            animation-timing-function: cubic-bezier(.55, .055, .675, .19)
        }
        to {
            opacity: 0;
            -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
            transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
            -webkit-transform-origin: center bottom;
            transform-origin: center bottom;
            -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
            animation-timing-function: cubic-bezier(.175, .885, .32, 1)
        }
    }

    .zoomOutDown {
        -webkit-animation-name: zoomOutDown;
        animation-name: zoomOutDown
    }

    @-webkit-keyframes zoomOutLeft {
        40% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
            transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0)
        }
        to {
            opacity: 0;
            -webkit-transform: scale(.1) translate3d(-2000px, 0, 0);
            transform: scale(.1) translate3d(-2000px, 0, 0);
            -webkit-transform-origin: left center;
            transform-origin: left center
        }
    }

    @keyframes zoomOutLeft {
        40% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
            transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0)
        }
        to {
            opacity: 0;
            -webkit-transform: scale(.1) translate3d(-2000px, 0, 0);
            transform: scale(.1) translate3d(-2000px, 0, 0);
            -webkit-transform-origin: left center;
            transform-origin: left center
        }
    }

    .zoomOutLeft {
        -webkit-animation-name: zoomOutLeft;
        animation-name: zoomOutLeft
    }

    @-webkit-keyframes zoomOutRight {
        40% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
            transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0)
        }
        to {
            opacity: 0;
            -webkit-transform: scale(.1) translate3d(2000px, 0, 0);
            transform: scale(.1) translate3d(2000px, 0, 0);
            -webkit-transform-origin: right center;
            transform-origin: right center
        }
    }

    @keyframes zoomOutRight {
        40% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
            transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0)
        }
        to {
            opacity: 0;
            -webkit-transform: scale(.1) translate3d(2000px, 0, 0);
            transform: scale(.1) translate3d(2000px, 0, 0);
            -webkit-transform-origin: right center;
            transform-origin: right center
        }
    }

    .zoomOutRight {
        -webkit-animation-name: zoomOutRight;
        animation-name: zoomOutRight
    }

    @-webkit-keyframes zoomOutUp {
        40% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
            transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
            -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
            animation-timing-function: cubic-bezier(.55, .055, .675, .19)
        }
        to {
            opacity: 0;
            -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
            transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
            -webkit-transform-origin: center bottom;
            transform-origin: center bottom;
            -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
            animation-timing-function: cubic-bezier(.175, .885, .32, 1)
        }
    }

    @keyframes zoomOutUp {
        40% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
            transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
            -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
            animation-timing-function: cubic-bezier(.55, .055, .675, .19)
        }
        to {
            opacity: 0;
            -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
            transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
            -webkit-transform-origin: center bottom;
            transform-origin: center bottom;
            -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
            animation-timing-function: cubic-bezier(.175, .885, .32, 1)
        }
    }

    .zoomOutUp {
        -webkit-animation-name: zoomOutUp;
        animation-name: zoomOutUp
    }

    @-webkit-keyframes slideInDown {
        from {
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
            visibility: visible
        }
        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @keyframes slideInDown {
        from {
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
            visibility: visible
        }
        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    .slideInDown {
        -webkit-animation-name: slideInDown;
        animation-name: slideInDown
    }

    @-webkit-keyframes slideInLeft {
        from {
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
            visibility: visible
        }
        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @keyframes slideInLeft {
        from {
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
            visibility: visible
        }
        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    .slideInLeft {
        -webkit-animation-name: slideInLeft;
        animation-name: slideInLeft
    }

    @-webkit-keyframes slideInRight {
        from {
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
            visibility: visible
        }
        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @keyframes slideInRight {
        from {
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
            visibility: visible
        }
        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    .slideInRight {
        -webkit-animation-name: slideInRight;
        animation-name: slideInRight
    }

    @-webkit-keyframes slideInUp {
        from {
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
            visibility: visible
        }
        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @keyframes slideInUp {
        from {
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
            visibility: visible
        }
        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    .slideInUp {
        -webkit-animation-name: slideInUp;
        animation-name: slideInUp
    }

    @-webkit-keyframes slideOutDown {
        from {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
        to {
            visibility: hidden;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0)
        }
    }

    @keyframes slideOutDown {
        from {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
        to {
            visibility: hidden;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0)
        }
    }

    .slideOutDown {
        -webkit-animation-name: slideOutDown;
        animation-name: slideOutDown
    }

    @-webkit-keyframes slideOutLeft {
        from {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
        to {
            visibility: hidden;
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0)
        }
    }

    @keyframes slideOutLeft {
        from {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
        to {
            visibility: hidden;
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0)
        }
    }

    .slideOutLeft {
        -webkit-animation-name: slideOutLeft;
        animation-name: slideOutLeft
    }

    @-webkit-keyframes slideOutRight {
        from {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
        to {
            visibility: hidden;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
    }

    @keyframes slideOutRight {
        from {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
        to {
            visibility: hidden;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
    }

    .slideOutRight {
        -webkit-animation-name: slideOutRight;
        animation-name: slideOutRight
    }

    @-webkit-keyframes slideOutUp {
        from {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
        to {
            visibility: hidden;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0)
        }
    }

    @keyframes slideOutUp {
        from {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
        to {
            visibility: hidden;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0)
        }
    }

    .slideOutUp {
        -webkit-animation-name: slideOutUp;
        animation-name: slideOutUp
    }

    .ps-container {
        -ms-touch-action: auto;
        touch-action: auto;
        overflow: hidden!important;
        -ms-overflow-style: none
    }

    @supports (-ms-overflow-style:none) {
        .ps-container {
            overflow: auto!important
        }
    }

    @media screen and (-ms-high-contrast:active),
    (-ms-high-contrast:none) {
        .ps-container {
            overflow: auto!important
        }
    }

    .ps-container.ps-active-x>.ps-scrollbar-x-rail,
    .ps-container.ps-active-y>.ps-scrollbar-y-rail {
        display: block;
        background-color: transparent
    }

    .ps-container.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail {
        background-color: transparent;
        opacity: .9
    }

    .ps-container.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail>.ps-scrollbar-x {
        background-color: rgba(0, 0, 0, .2);
        height: 11px
    }

    .ps-container.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail {
        background-color: transparent;
        opacity: .9
    }

    .ps-container.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail>.ps-scrollbar-y {
        background-color: rgba(0, 0, 0, .2);
        width: 11px
    }

    .ps-container>.ps-scrollbar-x-rail {
        display: none;
        position: absolute;
        opacity: 0;
        -webkit-transition: background-color .2s linear, opacity .2s linear;
        -o-transition: background-color .2s linear, opacity .2s linear;
        -moz-transition: background-color .2s linear, opacity .2s linear;
        transition: background-color .2s linear, opacity .2s linear;
        bottom: 0;
        height: 15px
    }

    .ps-container>.ps-scrollbar-x-rail>.ps-scrollbar-x {
        position: absolute;
        background-color: rgba(0, 0, 0, .2);
        -webkit-border-radius: 6px;
        -moz-border-radius: 6px;
        border-radius: 6px;
        -webkit-transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, -webkit-border-radius .2s ease-in-out;
        -o-transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, border-radius .2s ease-in-out;
        -moz-transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, border-radius .2s ease-in-out, -moz-border-radius .2s ease-in-out;
        transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, border-radius .2s ease-in-out;
        transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, border-radius .2s ease-in-out, -webkit-border-radius .2s ease-in-out, -moz-border-radius .2s ease-in-out;
        bottom: 2px;
        height: 6px
    }

    .ps-container>.ps-scrollbar-x-rail:active>.ps-scrollbar-x,
    .ps-container>.ps-scrollbar-x-rail:hover>.ps-scrollbar-x {
        height: 6px
    }

    .ps-container>.ps-scrollbar-y-rail {
        display: none;
        position: absolute;
        opacity: 0;
        -webkit-transition: background-color .2s linear, opacity .2s linear;
        -o-transition: background-color .2s linear, opacity .2s linear;
        -moz-transition: background-color .2s linear, opacity .2s linear;
        transition: background-color .2s linear, opacity .2s linear;
        right: 0;
        width: 15px
    }

    .ps-container>.ps-scrollbar-y-rail>.ps-scrollbar-y {
        position: absolute;
        background-color: rgba(0, 0, 0, .2);
        -webkit-border-radius: 6px;
        -moz-border-radius: 6px;
        border-radius: 6px;
        -webkit-transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, -webkit-border-radius .2s ease-in-out;
        -o-transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, border-radius .2s ease-in-out;
        -moz-transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, border-radius .2s ease-in-out, -moz-border-radius .2s ease-in-out;
        transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, border-radius .2s ease-in-out;
        transition: background-color .2s linear, height .2s linear, width .2s ease-in-out, border-radius .2s ease-in-out, -webkit-border-radius .2s ease-in-out, -moz-border-radius .2s ease-in-out;
        right: 2px;
        width: 6px
    }

    .ps-container>.ps-scrollbar-y-rail:active>.ps-scrollbar-y,
    .ps-container>.ps-scrollbar-y-rail:hover>.ps-scrollbar-y {
        width: 6px
    }

    .ps-container:hover.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail {
        background-color: transparent;
        opacity: .9
    }

    .ps-container:hover.ps-in-scrolling.ps-x>.ps-scrollbar-x-rail>.ps-scrollbar-x {
        background-color: rgba(0, 0, 0, .2);
        height: 6px
    }

    .ps-container:hover.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail {
        background-color: transparent;
        opacity: .9
    }

    .ps-container:hover.ps-in-scrolling.ps-y>.ps-scrollbar-y-rail>.ps-scrollbar-y {
        background-color: rgba(0, 0, 0, .2);
        width: 6px
    }

    .ps-container:hover>.ps-scrollbar-x-rail,
    .ps-container:hover>.ps-scrollbar-y-rail {
        opacity: .6
    }

    .ps-container:hover>.ps-scrollbar-x-rail:hover {
        background-color: transparent;
        opacity: .9
    }

    .ps-container:hover>.ps-scrollbar-x-rail:hover>.ps-scrollbar-x {
        background-color: rgba(0, 0, 0, .2)
    }

    .ps-container:hover>.ps-scrollbar-y-rail:hover {
        background-color: transparent;
        opacity: .9
    }

    .ps-container:hover>.ps-scrollbar-y-rail:hover>.ps-scrollbar-y {
        background-color: rgba(0, 0, 0, .2)
    }

    .ps-container .ps-scrollbar-y-rail {
        position: absolute;
        right: 3px;
        width: 8px;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        opacity: 0;
        filter: alpha(opacity=0);
        -o-transition: background-color .2s linear, opacity .2s linear;
        -webkit-transition: background-color .2s linear, opacity .2s linear;
        -moz-transition: background-color .2s linear, opacity .2s linear;
        transition: background-color .2s linear, opacity .2s linear
    }

    html body .flotTip,
    html body .jqstooltip {
        width: auto!important;
        height: auto!important;
        background: #212529;
        color: #fff;
        padding: 5px 10px
    }

    body .jqstooltip {
        border-color: transparent;
        border-radius: 60px
    }

    .chartist-tooltip {
        position: absolute;
        display: inline-block;
        opacity: 0;
        border-radius: 2px;
        padding: 10px 20px;
        background: #137eff;
        color: #fff;
        ext-align: center;
        z-index: 1;
        -webkit-transition: opacity .2s linear;
        -moz-transition: opacity .2s linear;
        -o-transition: opacity .2s linear;
        transition: opacity .2s linear
    }

    .chartist-tooltip:before {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        width: 0;
        height: 0;
        margin-left: -5px;
        border: 5px solid transparent;
        border-top-color: #137eff
    }

    .chartist-tooltip.tooltip-show {
        opacity: 1
    }

    .c3-chart-arcs-title {
        fill: #afb5c1
    }

    .c3 line,
    .c3 path {
        stroke: #e9ecef
    }

    .c3-chart-arc path {
        stroke: transparent
    }

    .popover-item {
        margin-left: -15px
    }

    .popover-item:hover {
        z-index: 10;
        position: relative
    }

    .custom-select {
        -moz-appearance: none;
        -webkit-appearance: none;
        -o-appearance: none;
        background-size: auto
    }

    .select2-container--classic .select2-selection--single,
    .select2-container--default .select2-selection--multiple,
    .select2-container--default .select2-selection--single,
    .select2-container--default .select2-selection--single .select2-selection__arrow,
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        border-color: rgba(0, 0, 0, .1);
        height: 40px;
        color: #6a7a8c;
        line-height: 40px
    }

    .select2-container--default .select2-selection--multiple {
        line-height: 27px
    }

    .select2-container--classic .select2-selection--multiple .select2-selection__choice,
    .select2-container--default .select2-selection--multiple .select2-selection__choice,
    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
        background-color: #137eff;
        border-color: #137eff;
        color: #fff
    }

    .m-icon {
        width: 33%;
        display: inline-block
    }

    @media (max-width:767.98px) {
        .m-icon {
            width: 100%
        }
    }

    .f-icon,
    .if-icon,
    .m-icon,
    .sl-icon,
    .t-icon,
    .w-icon {
        cursor: pointer;
        padding: 13px 15px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis
    }

    .f-icon:hover,
    .if-icon:hover,
    .m-icon:hover,
    .sl-icon:hover,
    .t-icon:hover,
    .w-icon:hover {
        background-color: #f6f8f9
    }

    .table.dataTable {
        border-collapse: collapse!important
    }

    .dataTables_wrapper {
        padding: 0
    }

    .dropzone,
    .note-editor.note-frame {
        border-color: rgba(0, 0, 0, .1)
    }

    .note-toolbar-wrapper {
        height: 33px!important
    }

    .dropzone {
        border-style: dotted
    }

    .note-toolbar {
        z-index: 1
    }

    .nav-pills.custom-pills .nav-link {
        border-radius: 0;
        opacity: .7
    }

    .nav-pills.custom-pills .nav-link.active {
        color: #2962FF;
        opacity: 1;
        background-color: transparent;
        border-bottom: 2px solid #2962FF
    }

    .r-separator .form-group {
        border-bottom: 1px solid rgba(0, 0, 0, .1)
    }

    .r-separator .form-group:last-child {
        border-bottom: none
    }

    .striped-rows .row:nth-child(odd) {
        background-color: #f6f8f9
    }

    .b-form .row {
        border-bottom: 1px solid rgba(0, 0, 0, .1);
        margin-bottom: 0;
        padding: 15px 0
    }

    .b-form .row:last-child {
        border-bottom: none
    }

    .b-label {
        display: flex;
        align-items: center;
        justify-content: flex-end
    }

    .error .form-control {
        border-color: #fa5838
    }

    .error .help-block {
        color: #fa5838
    }

    .validate .form-control {
        border-color: #5ac146
    }

    .validate .help-block {
        color: #5ac146
    }

    @media (min-height:33.875em) {
        .picker--opened .picker__frame {
            top: 30%;
            bottom: auto
        }
    }

    .dtp>.dtp-content>.dtp-date-view>header.dtp-header {
        background: #1d50de
    }

    .dtp div.dtp-date,
    .dtp div.dtp-time,
    .dtp table.dtp-picker-days tr>td>a.selected {
        background: #137eff
    }

    .dtp .p10>a {
        color: #fff
    }

    .datepicker .day,
    .datepicker .dow {
        padding: 5px 10px
    }

    .docs-buttons .btn,
    .docs-data .input-group {
        margin-bottom: 5px
    }

    .scrollable {
        position: relative
    }

    .error-box {
        height: 100%;
        position: fixed;
        background: url(../../../../assets/images/background/error-bg.jpg) center center no-repeat #fff;
        width: 100%
    }

    .error-box .error-body {
        padding-top: 5%
    }

    .error-box .error-title {
        font-size: 210px;
        font-weight: 900;
        text-shadow: 4px 4px 0 #fff, 6px 6px 0 #343a40;
        line-height: 210px
    }

    .price-label {
        position: absolute;
        top: -10px;
        margin: 0 auto;
        left: 0;
        right: 0;
        width: 100px;
        padding: 5px 10px
    }

    .price-sign {
        position: absolute;
        font-size: 15px;
        top: 5px;
        margin-left: -10px
    }

    .gaugejs-box {
        position: relative;
        margin: 0 auto
    }

    .gaugejs-box canvas.gaugejs {
        width: 100%!important;
        height: auto!important
    }

    .user-progress-bg {
        background-color: rgba(0, 0, 0, .1)
    }

    .jvectormap-goback,
    .jvectormap-zoomin,
    .jvectormap-zoomout {
        background: #dee2e6
    }

    #demo-foo-accordion .open>.dropdown-menu,
    #demo-foo-accordion2 .open>.dropdown-menu,
    #footable-addrow .open>.dropdown-menu {
        display: block
    }

    table.footable thead tr.footable-filtering th ul.dropdown-menu li a.checkbox {
        padding-left: 0
    }

    table.footable thead tr.footable-filtering th ul.dropdown-menu li a.checkbox input[type=checkbox] {
        position: relative;
        margin-right: 10px;
        margin-left: -20px;
        left: 0;
        opacity: 1
    }

    table.footable thead tr.footable-filtering th ul.dropdown-menu li .checkbox label::before {
        display: none
    }

    .footable .pagination li a {
        position: relative;
        display: block;
        padding: .5rem .75rem;
        margin-left: -1px;
        line-height: 1.25;
        color: #0275d8;
        background-color: #fff;
        border: 1px solid #ddd
    }

    #weather .ct-chart-bar .ct-label,
    #weather .ct-chart-line .ct-label,
    #weather .ct-grid,
    .auth-wrapper #recoverform,
    .sales2 .ct-chart-bar .ct-label,
    .sales2 .ct-chart-line .ct-label,
    .sales2 .ct-grid,
    html[dir=rtl] .dz-hidden-input {
        display: none
    }

    .footable .pagination li.active a {
        z-index: 2;
        color: #fff;
        background-color: #0275d8;
        border-color: #0275d8
    }

    .footable .pagination li.disabled a {
        color: #636c72;
        pointer-events: none;
        cursor: not-allowed;
        background-color: #fff;
        border-color: #ddd
    }

    .footable .pagination li:first-child a {
        margin-left: 0;
        border-bottom-left-radius: .25rem;
        border-top-left-radius: .25rem
    }

    html[dir=rtl] body .m-t-5 {
        margin-top: 5px
    }

    html[dir=rtl] body .m-b-5 {
        margin-bottom: 5px
    }

    html[dir=rtl] body .m-r-5 {
        margin-left: 5px
    }

    html[dir=rtl] body .m-l-5 {
        margin-right: 5px
    }

    html[dir=rtl] body .p-t-5 {
        padding-top: 5px
    }

    html[dir=rtl] body .p-b-5 {
        padding-bottom: 5px
    }

    html[dir=rtl] body .p-r-5 {
        padding-left: 5px
    }

    html[dir=rtl] body .p-l-5 {
        padding-right: 5px
    }

    html[dir=rtl] body .p-5 {
        padding: 5px
    }

    html[dir=rtl] body .m-5 {
        margin: 5px
    }

    html[dir=rtl] body .m-t-10 {
        margin-top: 10px
    }

    html[dir=rtl] body .m-b-10 {
        margin-bottom: 10px
    }

    html[dir=rtl] body .m-r-10 {
        margin-left: 10px
    }

    html[dir=rtl] body .m-l-10 {
        margin-right: 10px
    }

    html[dir=rtl] body .p-t-10 {
        padding-top: 10px
    }

    html[dir=rtl] body .p-b-10 {
        padding-bottom: 10px
    }

    html[dir=rtl] body .p-r-10 {
        padding-left: 10px
    }

    html[dir=rtl] body .p-l-10 {
        padding-right: 10px
    }

    html[dir=rtl] body .p-10 {
        padding: 10px
    }

    html[dir=rtl] body .m-10 {
        margin: 10px
    }

    html[dir=rtl] body .m-t-15 {
        margin-top: 15px
    }

    html[dir=rtl] body .m-b-15 {
        margin-bottom: 15px
    }

    html[dir=rtl] body .m-r-15 {
        margin-left: 15px
    }

    html[dir=rtl] body .m-l-15 {
        margin-right: 15px
    }

    html[dir=rtl] body .p-t-15 {
        padding-top: 15px
    }

    html[dir=rtl] body .p-b-15 {
        padding-bottom: 15px
    }

    html[dir=rtl] body .p-r-15 {
        padding-left: 15px
    }

    html[dir=rtl] body .p-l-15 {
        padding-right: 15px
    }

    html[dir=rtl] body .p-15 {
        padding: 15px
    }

    html[dir=rtl] body .m-15 {
        margin: 15px
    }

    html[dir=rtl] body .m-t-20 {
        margin-top: 20px
    }

    html[dir=rtl] body .m-b-20 {
        margin-bottom: 20px
    }

    html[dir=rtl] body .m-r-20 {
        margin-left: 20px
    }

    html[dir=rtl] body .m-l-20 {
        margin-right: 20px
    }

    html[dir=rtl] body .p-t-20 {
        padding-top: 20px
    }

    html[dir=rtl] body .p-b-20 {
        padding-bottom: 20px
    }

    html[dir=rtl] body .p-r-20 {
        padding-left: 20px
    }

    html[dir=rtl] body .p-l-20 {
        padding-right: 20px
    }

    html[dir=rtl] body .p-20 {
        padding: 20px
    }

    html[dir=rtl] body .m-20 {
        margin: 20px
    }

    html[dir=rtl] body .m-t-25 {
        margin-top: 25px
    }

    html[dir=rtl] body .m-b-25 {
        margin-bottom: 25px
    }

    html[dir=rtl] body .m-r-25 {
        margin-left: 25px
    }

    html[dir=rtl] body .m-l-25 {
        margin-right: 25px
    }

    html[dir=rtl] body .p-t-25 {
        padding-top: 25px
    }

    html[dir=rtl] body .p-b-25 {
        padding-bottom: 25px
    }

    html[dir=rtl] body .p-r-25 {
        padding-left: 25px
    }

    html[dir=rtl] body .p-l-25 {
        padding-right: 25px
    }

    html[dir=rtl] body .p-25 {
        padding: 25px
    }

    html[dir=rtl] body .m-25 {
        margin: 25px
    }

    html[dir=rtl] body .m-t-30 {
        margin-top: 30px
    }

    html[dir=rtl] body .m-b-30 {
        margin-bottom: 30px
    }

    html[dir=rtl] body .m-r-30 {
        margin-left: 30px
    }

    html[dir=rtl] body .m-l-30 {
        margin-right: 30px
    }

    html[dir=rtl] body .p-t-30 {
        padding-top: 30px
    }

    html[dir=rtl] body .p-b-30 {
        padding-bottom: 30px
    }

    html[dir=rtl] body .p-r-30 {
        padding-left: 30px
    }

    html[dir=rtl] body .p-l-30 {
        padding-right: 30px
    }

    html[dir=rtl] body .p-30 {
        padding: 30px
    }

    html[dir=rtl] body .m-30 {
        margin: 30px
    }

    html[dir=rtl] body .m-t-40 {
        margin-top: 40px
    }

    html[dir=rtl] body .m-b-40 {
        margin-bottom: 40px
    }

    html[dir=rtl] body .m-r-40 {
        margin-left: 40px
    }

    html[dir=rtl] body .m-l-40 {
        margin-right: 40px
    }

    html[dir=rtl] body .p-t-40 {
        padding-top: 40px
    }

    html[dir=rtl] body .p-b-40 {
        padding-bottom: 40px
    }

    html[dir=rtl] body .p-r-40 {
        padding-left: 40px
    }

    html[dir=rtl] body .p-l-40 {
        padding-right: 40px
    }

    html[dir=rtl] body .p-40 {
        padding: 40px
    }

    html[dir=rtl] body .m-40 {
        margin: 40px
    }

    html[dir=rtl] body .m-0-0 {
        margin: 0
    }

    html[dir=rtl] body .m-t-0 {
        margin-top: 0
    }

    html[dir=rtl] body .m-r-0 {
        margin-left: 0
    }

    html[dir=rtl] body .m-b-0 {
        margin-bottom: 0
    }

    html[dir=rtl] body .m-l-0 {
        margin-right: 0
    }

    html[dir=rtl] body .p-0-0 {
        padding: 0
    }

    html[dir=rtl] body .p-t-0 {
        padding-top: 0
    }

    html[dir=rtl] body .p-r-0 {
        padding-left: 0
    }

    html[dir=rtl] body .p-b-0 {
        padding-bottom: 0
    }

    html[dir=rtl] body .p-l-0 {
        padding-right: 0
    }

    html[dir=rtl] body {
        text-align: right;
        direction: rtl
    }

    html[dir=rtl] .page-breadcrumb .breadcrumb .breadcrumb-item+.breadcrumb-item {
        padding-right: .5rem;
        padding-left: 0
    }

    html[dir=rtl] .page-breadcrumb .breadcrumb .breadcrumb-item+.breadcrumb-item::before {
        content: "\e64a";
        padding-right: 0;
        padding-left: .5rem
    }

    html[dir=rtl] .custom-select {
        padding: .375rem .75rem .375rem 1.75rem;
        background: url(../../assets/images/custom-select.png) left .35rem center no-repeat #fff
    }

    html[dir=rtl] .custom-control {
        padding-left: 0;
        padding-right: 1.5rem
    }

    html[dir=rtl] .custom-control-label::after,
    html[dir=rtl] .custom-control-label::before {
        left: auto;
        right: 0
    }

    html[dir=rtl] .custom-control-label {
        position: unset
    }

    html[dir=rtl] .list-group {
        padding: 0
    }

    html[dir=rtl] .float-right {
        float: left!important
    }

    html[dir=rtl] .text-left {
        text-align: right!important
    }

    html[dir=rtl] .text-right {
        text-align: left!important
    }

    html[dir=rtl] .close {
        float: left
    }

    html[dir=rtl] .modal-header .close {
        float: left;
        margin: -1rem auto -1rem -1rem
    }

    html[dir=rtl] .modal-footer>:not(:last-child) {
        margin-left: .25rem;
        margin-right: 0
    }

    html[dir=rtl] .ml-auto {
        margin-right: auto!important;
        margin-left: 0!important
    }

    html[dir=rtl] .mr-auto {
        margin-left: auto!important;
        margin-right: 0!important
    }

    html[dir=rtl] .border-right {
        border-right: none!important;
        border-left: 1px solid rgba(0, 0, 0, .1)!important
    }

    html[dir=rtl] .border-left {
        border-left: none!important;
        border-right: 1px solid rgba(0, 0, 0, .1)!important
    }

    html[dir=rtl] .alert-dismissible {
        padding-left: 3.8125rem;
        padding-right: 1.25rem
    }

    html[dir=rtl] .alert-dismissible .close {
        left: 0;
        right: auto
    }

    html[dir=rtl] .custom-file-label {
        left: auto;
        right: 0;
        width: 100%
    }

    html[dir=rtl] .custom-file-label::after,
    html[dir=rtl] .dropdown-menu-right {
        right: auto;
        left: 0
    }

    html[dir=rtl] .dropdown-menu {
        text-align: right
    }

    html[dir=rtl] .chat-list .chat-item.odd .chat-content,
    html[dir=rtl] .chat-list .chat-item.odd .chat-time,
    html[dir=rtl] .chat-list li.odd .chat-content,
    html[dir=rtl] .chat-list li.odd .chat-time,
    html[dir=rtl] div.dataTables_wrapper div.dataTables_filter {
        text-align: left
    }

    html[dir=rtl] .topbar .navbar-collapse {
        padding: 0 0 0 10px
    }

    html[dir=rtl] .list-unstyled,
    html[dir=rtl] .nav,
    html[dir=rtl] .navbar-nav,
    html[dir=rtl] .pagination {
        padding-right: 0
    }

    html[dir=rtl] .topbar .top-navbar .navbar-header .navbar-brand .logo-icon {
        margin-right: 0
    }

    html[dir=rtl] .topbar .dropdown-menu.dropdown-menu-right .with-arrow {
        left: 0;
        right: auto
    }

    html[dir=rtl] .search-box .app-search .srh-btn,
    html[dir=rtl] .topbar .dropdown-menu.dropdown-menu-right .with-arrow>span {
        left: 20px;
        right: auto
    }

    html[dir=rtl] .mailbox .message-center .message-item .mail-contnet {
        padding-right: 10px;
        padding-left: 0
    }

    html[dir=rtl] .customizer {
        left: -280px;
        right: auto
    }

    html[dir=rtl] .customizer.show-service-panel {
        left: 0;
        right: auto
    }

    html[dir=rtl] .customizer .service-panel-toggle {
        right: -54px;
        left: auto
    }

    html[dir=rtl] .sidebar-nav .has-arrow::after {
        margin-left: 0;
        margin-right: 10px;
        right: auto;
        left: 15px
    }

    html[dir=rtl] .left-part {
        border-left: 1px solid rgba(0, 0, 0, .1);
        border-right: none
    }

    html[dir=rtl] .left-part .show-left-part {
        left: -41px;
        right: auto
    }

    html[dir=rtl] .right-part {
        margin-right: 260px;
        margin-left: 0
    }

    html[dir=rtl] .reverse-mode .left-part {
        right: auto;
        left: 0
    }

    html[dir=rtl] .reverse-mode .show-left-part {
        left: auto;
        right: -41px
    }

    html[dir=rtl] .reverse-mode .right-part {
        margin-right: 0;
        margin-left: 260px
    }

    html[dir=rtl] .profiletimeline {
        padding-right: 40px;
        padding-left: 0;
        margin: 40px 30px 0 10px;
        border-right: 1px solid rgba(0, 0, 0, .1);
        border-left: none
    }

    html[dir=rtl] .profiletimeline .sl-left {
        float: right;
        margin-right: -60px;
        margin-left: 15px
    }

    html[dir=rtl] .feed-widget .feed-body .feed-item>.feed-icon {
        margin-right: 0;
        margin-left: 10px
    }

    html[dir=rtl] table.table-bordered.dataTable td,
    html[dir=rtl] table.table-bordered.dataTable th {
        border-left-width: 1px
    }

    html[dir=rtl] div.dataTables_wrapper div.dataTables_filter input {
        margin-right: .5rem;
        margin-left: 0
    }

    html[dir=rtl] div.table-responsive>div.dataTables_wrapper>div.row>div[class^=col-]:last-child {
        padding-left: 1px
    }

    html[dir=rtl] .chat-windows {
        left: 300px;
        right: unset!important
    }

    html[dir=rtl] .chat-windows .user-chat .chat-head .status {
        left: auto;
        right: 10px
    }

    html[dir=rtl] .chat-windows .user-chat .chat-head img {
        margin: -4px 0 0 8px
    }

    html[dir=rtl] .chat-windows .user-chat .chat-head i {
        float: left!important
    }

    html[dir=rtl] .wizard-content .wizard.vertical>.steps,
    html[dir=rtl] .wizard>.actions>ul>li,
    html[dir=rtl] .wizard>.steps>ul>li {
        float: right
    }

    html[dir=rtl] .chat-list .chat-item .chat-content {
        padding-right: 15px;
        padding-left: 0
    }

    html[dir=rtl] .chat-list .chat-item .chat-time {
        margin: 5px 65px 15px 0
    }

    html[dir=rtl] .lobilists .lobilist-actions {
        right: auto;
        left: 8px
    }

    html[dir=rtl] .lobilists .lobilist-item .todo-actions {
        right: auto;
        left: 4px
    }

    html[dir=rtl] .lobilists .lobilist-check {
        left: auto;
        right: 12px
    }

    html[dir=rtl] .lobilists .lobilist-item,
    html[dir=rtl] .lobilists .lobilist-item-placeholder {
        padding-left: 0;
        padding-right: 35px
    }

    html[dir=rtl] .lobilists .lobilist-item .drag-handler {
        left: auto;
        right: 0
    }

    html[dir=rtl] .lobilists .lobilist-placeholder,
    html[dir=rtl] .lobilists .lobilist-wrapper {
        margin-left: 16px;
        margin-right: 0
    }

    html[dir=rtl] .datepicker {
        direction: rtl
    }

    html[dir=rtl] .minicolors .minicolors-grid {
        right: 22px;
        left: auto
    }

    html[dir=rtl] .wizard-content .wizard>.steps>ul>li:after {
        right: auto;
        left: 0
    }

    html[dir=rtl] .wizard-content .wizard>.steps>ul>li:before {
        left: auto;
        right: 0
    }

    html[dir=rtl] .css-bar>i {
        margin-left: 0;
        margin-right: 5px
    }

    html[dir=rtl] .treeview span.icon {
        margin-right: 0;
        margin-left: 5px
    }

    html[dir=rtl] #main-wrapper[data-sidebartype=full] .page-wrapper {
        margin-right: 250px;
        margin-left: 0
    }

    html[dir=rtl] #main-wrapper[data-sidebartype=iconbar] .page-wrapper {
        margin-right: 180px;
        margin-left: 0
    }

    html[dir=rtl] #main-wrapper[data-sidebartype=overlay] .left-sidebar {
        right: -250px;
        left: auto
    }

    html[dir=rtl] #main-wrapper[data-sidebartype=overlay].show-sidebar .left-sidebar {
        right: 0;
        left: auto
    }

    @media (min-width:768px) {
        html[dir=rtl] #main-wrapper[data-sidebar-position=fixed][data-sidebartype=full] .topbar .top-navbar .navbar-collapse,
        html[dir=rtl] #main-wrapper[data-sidebar-position=fixed][data-sidebartype=overlay] .topbar .top-navbar .navbar-collapse {
            margin-right: 250px;
            margin-left: 0
        }
        html[dir=rtl] #main-wrapper[data-sidebar-position=fixed][data-sidebartype=iconbar] .topbar .top-navbar .navbar-collapse {
            margin-right: 180px;
            margin-left: 0
        }
        html[dir=rtl] #main-wrapper[data-sidebar-position=fixed][data-sidebartype=mini-sidebar] .topbar .top-navbar .navbar-collapse,
        html[dir=rtl] #main-wrapper[data-sidebartype=mini-sidebar] .page-wrapper {
            margin-right: 65px;
            margin-left: 0
        }
    }

    @media (max-width:766px) {
        html[dir=rtl] #main-wrapper[data-sidebartype=mini-sidebar] .left-sidebar {
            right: -250px;
            left: auto
        }
        html[dir=rtl] #main-wrapper.show-sidebar .left-sidebar {
            right: 0;
            left: auto
        }
        html[dir=rtl] .left-part {
            right: -260px;
            left: auto
        }
        html[dir=rtl] .left-part.show-panel {
            right: 0;
            left: auto
        }
        html[dir=rtl] .right-part {
            margin-right: 0
        }
    }

    .sales {
        position: relative;
        height: 270px;
        -webkit-filter: drop-shadow(0 4px 4px rgba(0, 0, 0, .2));
        filter: drop-shadow(0 4px 4px rgba(0, 0, 0, .2))
    }

    .sales-ratio,
    .sales2 {
        height: 212px;
        position: relative
    }

    .sales .ct-series-a .ct-area {
        fill-opacity: .1;
        fill: url(#gradient)
    }

    .sales .ct-series-a .ct-line,
    .sales .ct-series-a .ct-point {
        stroke: #137eff;
        stroke-width: 3px
    }

    .sales .ct-series-b .ct-area {
        fill: #c9d9ea;
        fill-opacity: 0
    }

    .sales .ct-series-b .ct-line,
    .sales .ct-series-b .ct-point {
        stroke: #c9d9ea;
        stroke-width: 3px
    }

    .sales .ct-series-a .ct-point,
    .sales .ct-series-b .ct-point {
        stroke-width: 5px
    }

    .sales .ct-grid {
        stroke-width: .5px
    }

    .sales-ratio {
        -webkit-filter: drop-shadow(0 4px 2px rgba(0, 0, 0, .2));
        filter: drop-shadow(0 4px 2px rgba(0, 0, 0, .2))
    }

    .sales-ratio .ct-series-a .ct-area {
        fill-opacity: .1;
        fill: url(#gradient)
    }

    #weather .ct-series-a .ct-area,
    .sales2 .ct-series-a .ct-area {
        fill: none
    }

    .sales-ratio .ct-series-a .ct-line,
    .sales-ratio .ct-series-a .ct-point {
        stroke: #137eff;
        stroke-width: 3px
    }

    .sales-ratio .ct-series-a .ct-point,
    .sales-ratio .ct-series-b .ct-point {
        stroke-width: 6px
    }

    .sales2 {
        -webkit-filter: drop-shadow(0 8px 4px rgba(0, 0, 0, .2));
        filter: drop-shadow(0 8px 4px rgba(0, 0, 0, .2))
    }

    .sales2 .ct-series-a .ct-line,
    .sales2 .ct-series-a .ct-point {
        stroke: #fff;
        stroke-width: 3px
    }

    #weather {
        position: relative;
        height: 152px;
        -webkit-filter: drop-shadow(0 8px 4px rgba(0, 0, 0, .2));
        filter: drop-shadow(0 8px 4px rgba(0, 0, 0, .2))
    }

    #weather .ct-series-a .ct-line,
    #weather .ct-series-a .ct-point {
        stroke: #fff;
        stroke-width: 3px
    }

    .sales5 {
        position: relative;
        height: 278px
    }

    .sales5 .ct-series-a .ct-area {
        fill-opacity: .2;
        fill: url(#gradient)
    }

    .sales5 .ct-series-a .ct-line,
    .sales5 .ct-series-a .ct-point {
        stroke: #137eff;
        stroke-width: 2px
    }

    .sales5 .ct-series-b .ct-area {
        fill: #5ac146;
        fill-opacity: .1
    }

    .sales5 .ct-series-b .ct-line,
    .sales5 .ct-series-b .ct-point {
        stroke: #5ac146;
        stroke-width: 2px
    }

    .sales5 .ct-series-a .ct-point,
    .sales5 .ct-series-b .ct-point {
        stroke-width: 6px
    }

    .ct-series-a .ct-bar {
        stroke: #137eff
    }

    .ct-series-b .ct-bar {
        stroke: #e9ecef
    }

    .weather-report .c3-line {
        stroke-width: 2px
    }

    .auth-wrapper {
        min-height: 100vh;
        position: relative
    }

    .auth-wrapper .auth-box {
        background: #fff;
        padding: 20px;
        max-width: 400px;
        width: 90%;
        margin: 10% 0
    }

    .auth-wrapper .auth-box .logo {
        text-align: center
    }

    .auth-wrapper .auth-box.on-sidebar {
        top: 0;
        right: 0;
        height: 100%;
        margin: 0;
        position: absolute
    }

    .auth-wrapper .auth-sidebar {
        position: fixed;
        height: 100%;
        right: 0;
        overflow: auto;
        margin: 0;
        top: 0
    }

    @media (max-width:767px) {
        .ct-bar {
            stroke-width: 10px!important
        }
        .auth-wrapper .auth-sidebar {
            position: relative;
            max-width: 100%;
            width: 100%;
            margin: 40px 0 60px
        }
        .auth-wrapper .demo-text {
            margin-top: 30px
        }
        .email-table {
            min-width: 500px
        }
    }

    .email-app {
        position: relative
    }

    .email-app .list-group .list-group-item {
        padding: 0;
        background: 0 0;
        border: none
    }

    .email-app .list-group .list-group-item .list-group-item-action {
        padding: 12px 15px;
        display: block;
        color: #6a7a8c
    }

    .email-app .list-group .list-group-item .list-group-item-action .mdi {
        font-size: 18px;
        vertical-align: middle;
        margin-right: 5px
    }

    .email-app .list-group .list-group-item .list-group-item-action.active,
    .email-app .list-group .list-group-item .list-group-item-action:hover {
        background: rgba(0, 0, 0, .03)
    }

    .email-app .email-table {
        table-layout: fixed
    }

    .email-app .email-table .selected {
        background: #fff8e1
    }

    .email-app .email-table .max-texts,
    .email-app .email-table .user-name h6 {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis
    }

    .email-app .email-table .max-texts {
        padding: 1rem 5px
    }

    .email-app .email-table .chb {
        width: 50px
    }

    .email-app .email-table .time {
        width: 100px;
        text-align: right
    }

    .email-app .email-table .clip,
    .email-app .email-table .starred {
        width: 25px;
        padding: 1rem 5px
    }

    .email-app .email-table .user-image {
        width: 45px;
        padding: 1rem 5px
    }

    .email-app .email-table .user-name {
        width: 130px;
        padding: 1rem 5px
    }

    .email-app .email-table .user-name .m-b-0 {
        font-weight: 300
    }

    .email-app .email-table .unread .m-b-0,
    .email-app .email-table .unread .max-texts {
        font-weight: 500
    }

    .lobilists .lobilist {
        box-shadow: none
    }

    .lobilists .lobilist.lobilist-primary {
        border-color: rgba(0, 0, 0, .1)
    }

    .lobilists .lobilist.lobilist-primary .lobilist-footer,
    .lobilists .lobilist.lobilist-primary .lobilist-form-footer,
    .lobilists .lobilist.lobilist-primary .lobilist-header {
        border-color: #7460ee;
        background-color: #7460ee
    }

    .lobilists .lobilist.lobilist-danger {
        border-color: rgba(0, 0, 0, .1)
    }

    .lobilists .lobilist.lobilist-danger .lobilist-footer,
    .lobilists .lobilist.lobilist-danger .lobilist-form-footer,
    .lobilists .lobilist.lobilist-danger .lobilist-header {
        border-color: #fa5838;
        background-color: #fa5838
    }

    .lobilists .lobilist.lobilist-info {
        border-color: rgba(0, 0, 0, .1)
    }

    .lobilists .lobilist.lobilist-info .lobilist-footer,
    .lobilists .lobilist.lobilist-info .lobilist-form-footer,
    .lobilists .lobilist.lobilist-info .lobilist-header {
        border-color: #137eff;
        background-color: #137eff
    }

    .lobilists .lobilist.lobilist-success {
        border-color: rgba(0, 0, 0, .1)
    }

    .lobilists .lobilist.lobilist-success .lobilist-footer,
    .lobilists .lobilist.lobilist-success .lobilist-header {
        border-color: #5ac146;
        background-color: #5ac146
    }

    .lobilists .lobilist-footer,
    .lobilists .lobilist-form-footer {
        border-color: rgba(0, 0, 0, .1)!important;
        background: rgba(0, 0, 0, .02)!important
    }

    .lobilists .btn-link {
        background: 0 0;
        border: 0;
        box-shadow: none;
        color: #343a40!important
    }

    .lobilists.single-line {
        height: 500px
    }

    .lobilist,
    .lobilists {
        position: relative
    }

    .lobilists [type=checkbox]:checked,
    .lobilists [type=checkbox]:not(:checked) {
        opacity: 1;
        position: relative
    }

    .lobilists .lobilist-item {
        margin-bottom: 16px;
        padding-top: 5px
    }

    .lobilists .lobilist-item-title {
        color: #343a40
    }

    .lobilists .lobilist-item-description {
        font-style: normal;
        font-size: 13px
    }

    .lobilists .lobilist-check {
        top: 10px
    }

    .lobilists .lobilist-item-duedate {
        position: relative;
        font-size: 12px;
        left: 0
    }

    .lobilists .lobilist-actions {
        top: 0
    }

    .lobilist-actions .btn i {
        font-size: 15px;
        vertical-align: middle
    }

    .twitter-typeahead {
        width: 100%
    }

    .twitter-typeahead .tt-menu {
        width: 100%;
        background: #fff;
        border: 1px solid #f6f8f9;
        border-radius: 5px;
        padding: .75rem 0
    }

    .twitter-typeahead .tt-menu .tt-suggestion {
        padding: .25rem .75rem;
        cursor: pointer
    }

    .twitter-typeahead .tt-menu .tt-suggestion:hover {
        background-color: #7460ee;
        color: #fff
    }

    .twitter-typeahead .empty-message {
        padding: 5px 10px;
        text-align: center
    }

    .twitter-typeahead .rtl-typeahead .tt-menu {
        text-align: right
    }

    .twitter-typeahead .league-name {
        margin: 0 10px 5px;
        padding: 7px 5px 10px;
        border-bottom: 1px solid #e9ecef
    }

    .scrollable-dropdown .twitter-typeahead .tt-menu {
        max-height: 80px;
        overflow-y: auto
    }

    .bootstrap-maxlength {
        margin-top: .5rem
    }

    .el-element-overlay .white-box {
        padding: 0
    }

    .el-element-overlay .el-card-item {
        position: relative;
        padding-bottom: 20px
    }

    .el-element-overlay .el-card-item .el-card-avatar {
        margin-bottom: 20px
    }

    .el-element-overlay .el-card-item .el-card-content {
        text-align: center
    }

    .el-element-overlay .el-card-item .el-overlay-1 {
        width: 100%;
        overflow: hidden;
        position: relative;
        text-align: center;
        cursor: default
    }

    .el-element-overlay .el-card-item .el-overlay-1 img {
        display: block;
        position: relative;
        -webkit-transition: all .4s linear;
        transition: all .4s linear;
        width: 100%;
        height: auto
    }

    .el-element-overlay .el-card-item .el-overlay-1:hover img {
        -ms-transform: scale(1.2) translateZ(0);
        -webkit-transform: scale(1.2) translateZ(0)
    }

    .el-element-overlay .el-card-item .el-overlay-1 .el-info {
        text-decoration: none;
        display: inline-block;
        text-transform: uppercase;
        color: #fff;
        background-color: transparent;
        filter: alpha(opacity=0);
        -webkit-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
        padding: 0;
        margin: auto;
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        transform: translateY(-50%) translateZ(0);
        -webkit-transform: translateY(-50%) translateZ(0);
        -ms-transform: translateY(-50%) translateZ(0)
    }

    .el-element-overlay .el-card-item .el-overlay-1 .el-info .el-item {
        list-style: none;
        display: inline-block;
        margin: 0 3px
    }

    .el-element-overlay .el-card-item .el-overlay-1 .el-info .el-item .el-link {
        border-color: #fff;
        color: #fff;
        padding: 12px 15px 10px
    }

    .el-element-overlay .el-card-item .el-overlay-1 .el-info .el-item .el-link:hover {
        background: #2962FF;
        border-color: #2962FF
    }

    .gmaps-overlay_arrow.above,
    .gmaps-overlay_arrow.below {
        border-left: 16px solid transparent;
        border-right: 16px solid transparent
    }

    .el-element-overlay .el-card-item .el-overlay {
        width: 100%;
        height: 100%;
        position: absolute;
        overflow: hidden;
        top: 0;
        left: 0;
        opacity: 0;
        background-color: rgba(0, 0, 0, .7);
        -webkit-transition: all .4s ease-in-out;
        transition: all .4s ease-in-out
    }

    .el-element-overlay .el-card-item .el-overlay-1:hover .el-overlay {
        opacity: 1;
        filter: alpha(opacity=100);
        -webkit-transform: translateZ(0);
        -ms-transform: translateZ(0);
        transform: translateZ(0)
    }

    .el-element-overlay .el-card-item .el-overlay-1 .scrl-dwn {
        top: -100%
    }

    .el-element-overlay .el-card-item .el-overlay-1 .scrl-up {
        top: 100%;
        height: 0
    }

    .el-element-overlay .el-card-item .el-overlay-1:hover .scrl-dwn {
        top: 0
    }

    .el-element-overlay .el-card-item .el-overlay-1:hover .scrl-up {
        top: 0;
        height: 100%
    }

    .gmaps,
    .gmaps-panaroma {
        height: 300px;
        background: #e9ecef;
        border-radius: 2px
    }

    .gmaps-overlay {
        display: block;
        text-align: center;
        color: #fff;
        font-size: 16px;
        line-height: 40px;
        background: #137eff;
        border-radius: 4px;
        padding: 10px 20px
    }

    .gmaps-overlay_arrow {
        left: 50%;
        margin-left: -16px;
        width: 0;
        height: 0;
        position: absolute
    }

    .gmaps-overlay_arrow.above {
        bottom: -15px;
        border-top: 16px solid #137eff
    }

    .gmaps-overlay_arrow.below {
        top: -15px;
        border-bottom: 16px solid #137eff
    }

    .jvectormap-zoomin,
    .jvectormap-zoomout {
        width: 10px;
        height: 10px;
        line-height: 10px
    }

    .jvectormap-zoomout {
        top: 40px
    }

    .timeline {
        position: relative;
        padding: 20px 0;
        list-style: none;
        max-width: 1200px;
        margin: 0 auto
    }

    .timeline:before {
        content: " ";
        position: absolute;
        top: 0;
        bottom: 0;
        left: 50%;
        width: 3px;
        margin-left: -1.5px;
        background-color: #e9ecef
    }

    .timeline>.timeline-item {
        position: relative;
        margin-bottom: 20px
    }

    .timeline>.timeline-item:after,
    .timeline>.timeline-item:before {
        content: " ";
        display: table
    }

    .timeline>.timeline-item:after {
        clear: both
    }

    .timeline>.timeline-item>.timeline-panel {
        float: left;
        position: relative;
        width: 46%;
        padding: 20px;
        border: 1px solid rgba(0, 0, 0, .1);
        border-radius: 2px;
        -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, .05);
        box-shadow: 0 1px 6px rgba(0, 0, 0, .05)
    }

    .timeline>.timeline-item>.timeline-panel:before {
        content: " ";
        display: inline-block;
        position: absolute;
        top: 26px;
        right: -8px;
        border-top: 8px solid transparent;
        border-right: 0 solid rgba(0, 0, 0, .1);
        border-bottom: 8px solid transparent;
        border-left: 8px solid rgba(0, 0, 0, .1)
    }

    .timeline>.timeline-item>.timeline-panel:after {
        content: " ";
        display: inline-block;
        position: absolute;
        top: 27px;
        right: -7px;
        border-top: 7px solid transparent;
        border-right: 0 solid #fff;
        border-bottom: 7px solid transparent;
        border-left: 7px solid #fff
    }

    .timeline>.timeline-item>.timeline-badge {
        z-index: 10;
        position: absolute;
        top: 16px;
        left: 50%;
        width: 50px;
        height: 50px;
        margin-left: -25px;
        border-radius: 50%;
        text-align: center;
        font-size: 1.4em;
        line-height: 50px;
        color: #fff;
        overflow: hidden
    }

    .timeline-left>.timeline-item>.timeline-panel,
    .timeline-right>.timeline-item>.timeline-panel {
        width: calc(100% - 80px)
    }

    .timeline>.timeline-item.timeline-inverted>.timeline-panel {
        float: right
    }

    .timeline>.timeline-item.timeline-inverted>.timeline-panel:before {
        right: auto;
        left: -8px;
        border-right-width: 8px;
        border-left-width: 0
    }

    .timeline>.timeline-item.timeline-inverted>.timeline-panel:after {
        right: auto;
        left: -7px;
        border-right-width: 7px;
        border-left-width: 0
    }

    .timeline-badge.primary {
        background-color: #7460ee
    }

    .timeline-badge.success {
        background-color: #5ac146
    }

    .timeline-badge.warning {
        background-color: #ffbc34
    }

    .timeline-badge.danger {
        background-color: #fa5838
    }

    .timeline-badge.info {
        background-color: #137eff
    }

    .timeline-title {
        margin-top: 0;
        color: inherit;
        font-weight: 400
    }

    .dd-handle,
    .dd-item>button {
        font-weight: 700;
        margin: 5px 0
    }

    .timeline-body>p,
    .timeline-body>ul {
        margin-bottom: 0
    }

    .timeline-left:before {
        left: 30px
    }

    .timeline-left>.timeline-item>.timeline-badge {
        left: 30px;
        top: 9px
    }

    .timeline-right:before {
        right: 30px;
        left: auto
    }

    .timeline-right>.timeline-item>.timeline-badge {
        right: 5px;
        top: 9px;
        left: auto
    }

    .cd-horizontal-timeline .events a {
        padding-bottom: 6px;
        color: #2962FF
    }

    .dd,
    .dd-list {
        display: block;
        padding: 0;
        list-style: none
    }

    .cd-horizontal-timeline .events a.selected::after,
    .cd-horizontal-timeline .filling-line {
        background: #2962FF
    }

    .cd-horizontal-timeline .events a.selected::after {
        border-color: #2962FF
    }

    .cd-horizontal-timeline .m-t-40 {
        margin-top: 40px!important
    }

    .dd,
    .dd-list {
        margin: 0;
        position: relative
    }

    .search-box .app-search .form-control,
    .topbar .mega-dropdown .dropdown-menu {
        border-radius: 0
    }

    .topbar .dropdown-menu .with-arrow>span {
        transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        -moz-transform: rotate(45deg)
    }

    .dd {
        max-width: 600px;
        font-size: 13px;
        line-height: 20px
    }

    .dd-list .dd-list {
        padding-left: 30px
    }

    .dd-collapsed .dd-list {
        display: none
    }

    .dd-empty,
    .dd-item,
    .dd-placeholder {
        display: block;
        position: relative;
        margin: 0;
        padding: 0;
        min-height: 20px;
        font-size: 13px;
        line-height: 20px
    }

    .dd-handle {
        display: block;
        height: 30px;
        padding: 5px 10px;
        cursor: move;
        color: #979898;
        text-decoration: none;
        border: 1px solid #e5e5e5;
        background: #fafafa;
        -moz-box-sizing: border-box
    }

    .dd-handle:hover {
        color: #317eeb;
        background: #fff
    }

    .dd-item>button {
        display: block;
        position: relative;
        cursor: pointer;
        float: left;
        width: 25px;
        height: 20px;
        padding: 0;
        text-indent: 100%;
        white-space: nowrap;
        overflow: hidden;
        border: 0;
        background: 0 0;
        font-size: 12px;
        line-height: 1;
        text-align: center
    }

    .dd-item>button:before {
        content: '+';
        display: block;
        position: absolute;
        width: 100%;
        text-align: center;
        text-indent: 0
    }

    .dd-item>button[data-action=collapse]:before {
        content: '-'
    }

    .dd-empty,
    .dd-placeholder {
        margin: 5px 0;
        padding: 0;
        min-height: 30px;
        background: #f5f5f5;
        border: 1px dashed #b6bcbf;
        -moz-box-sizing: border-box
    }

    .dd-empty {
        border: 1px dashed #bbb;
        min-height: 100px;
        background-color: #e5e5e5;
        background-size: 60px 60px;
        background-position: 0 0, 30px 30px
    }

    .dd-dragel {
        position: absolute;
        z-index: 9999
    }

    .dd-dragel>.dd-item .dd-handle {
        margin-top: 0
    }

    .dd-dragel .dd-handle {
        -webkit-box-shadow: 2px 4px 6px 0 rgba(0, 0, 0, .1);
        box-shadow: 2px 4px 6px 0 rgba(0, 0, 0, .1)
    }

    .dd3-content {
        display: block;
        height: 30px;
        margin: 5px 0;
        padding: 5px 10px 5px 40px;
        color: #979898;
        text-decoration: none;
        font-weight: 700;
        border: 1px solid #e5e5e5;
        background: #fafafa;
        box-sizing: border-box;
        -moz-box-sizing: border-box
    }

    .dd3-content:hover {
        color: #317eeb;
        background: #fff
    }

    .dd-dragel>.dd3-item>.dd3-content {
        margin: 0
    }

    .dd3-item>button {
        margin-left: 30px
    }

    .dd3-handle {
        position: absolute;
        margin: 0;
        left: 0;
        top: 0;
        cursor: pointer;
        width: 30px;
        text-indent: 100%;
        white-space: nowrap;
        overflow: hidden;
        border: 1px solid #ccc;
        background: #d5d5d5;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .dd3-handle:before {
        content: "\f0c9";
        font-family: 'Font Awesome 5 Free';
        display: block;
        position: absolute;
        left: 0;
        width: 100%;
        text-align: center;
        text-indent: 0;
        font-size: 14px;
        font-weight: 900;
        color: #67757c;
        top: 7px
    }

    .chat-list .chat-item.odd .chat-time,
    .chat-list .chat-item.reverse {
        text-align: right
    }

    .dd3-handle:hover {
        background: #404040;
        border: 1px solid #404040
    }

    .myadmin-dd .dd-list .dd-item .dd-handle {
        background: #fff;
        border: 1px solid rgba(120, 130, 140, .13);
        padding: 8px 16px;
        height: auto;
        font-family: Montserrat, sans-serif;
        font-weight: 400;
        border-radius: 0
    }

    .myadmin-dd-empty .dd-list .dd3-content {
        height: auto;
        border: 1px solid rgba(120, 130, 140, .13);
        padding: 8px 16px 8px 46px;
        background: #fff;
        font-weight: 400
    }

    .myadmin-dd-empty .dd-list .dd3-handle {
        border: 1px solid rgba(120, 130, 140, .13);
        border-bottom: 0;
        background: #fff;
        height: 36px;
        width: 36px
    }

    .mailbox .drop-title {
        font-weight: 500;
        padding: 11px 20px 15px;
        border-radius: 2px 2px 0 0;
        position: relative
    }

    .mailbox .drop-title:after {
        content: "";
        position: absolute;
        background: url(../../assets/images/background/img5.png) no-repeat;
        opacity: .2;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-size: cover
    }

    .mailbox .nav-link {
        border-top: 1px solid rgba(0, 0, 0, .1);
        padding-top: 15px;
        color: #6a7a8c
    }

    .mailbox .message-center {
        height: 317px;
        overflow: auto;
        position: relative
    }

    .mailbox .message-center .message-item {
        border-bottom: 1px solid rgba(0, 0, 0, .1);
        display: block;
        text-decoration: none;
        padding: 9px 15px
    }

    .mailbox .message-center .message-item:hover {
        background: #f6f8f9
    }

    .mailbox .message-center .message-item .message-title {
        color: #212529
    }

    .mailbox .message-center .message-item .user-img {
        width: 40px;
        position: relative;
        display: inline-block;
        margin: 0 0 15px
    }

    .mailbox .message-center .message-item .user-img img {
        width: 100%
    }

    .mailbox .message-center .message-item .user-img .profile-status {
        border: 2px solid #fff;
        border-radius: 50%;
        display: inline-block;
        height: 10px;
        left: 30px;
        position: absolute;
        top: 1px;
        width: 10px
    }

    .mailbox .message-center .message-item .user-img .online {
        background: #5ac146
    }

    .mailbox .message-center .message-item .user-img .busy {
        background: #fa5838
    }

    .mailbox .message-center .message-item .user-img .away,
    .mailbox .message-center .message-item .user-img .offline {
        background: #ffbc34
    }

    .mailbox .message-center .message-item .mail-contnet {
        display: inline-block;
        width: 75%;
        padding-left: 10px;
        vertical-align: middle
    }

    .mailbox .message-center .message-item .mail-contnet .message-title {
        margin: 5px 0 0
    }

    .mailbox .message-center .message-item .mail-contnet .mail-desc,
    .mailbox .message-center .message-item .mail-contnet .time {
        font-size: 12px;
        display: block;
        margin: 1px 0;
        text-overflow: ellipsis;
        overflow: hidden;
        color: #afb5c1;
        white-space: nowrap
    }

    .comment-widgets {
        position: relative;
        margin-bottom: 10px
    }

    .comment-widgets .comment-row {
        border-bottom: 1px solid transparent;
        padding: 14px;
        display: flex;
        margin: 10px 0
    }

    .comment-widgets .comment-row:last-child {
        border-bottom: 0
    }

    .comment-widgets .comment-row.active,
    .comment-widgets .comment-row:hover {
        background: rgba(0, 0, 0, .03)
    }

    .comment-text {
        padding-left: 15px;
        width: 100%
    }

    .comment-text.active .comment-footer .action-icons,
    .comment-text:hover .comment-footer .action-icons {
        visibility: visible
    }

    .comment-text p {
        max-height: 65px;
        width: 100%;
        overflow: hidden
    }

    .comment-footer .action-icons {
        visibility: hidden
    }

    .comment-footer .action-icons a {
        padding-left: 7px;
        vertical-align: middle;
        color: #afb5c1
    }

    .comment-footer .action-icons a.active,
    .comment-footer .action-icons a:hover {
        color: #137eff
    }

    .chat-box {
        overflow: auto
    }

    .chat-list .chat-item {
        list-style: none;
        margin-top: 30px
    }

    .chat-list .chat-item .chat-img {
        display: inline-block;
        width: 45px;
        vertical-align: top
    }

    .chat-list .chat-item .chat-img img {
        width: 45px;
        border-radius: 100%
    }

    .chat-list .chat-item .chat-content {
        width: calc(100% - 50px);
        display: inline-block;
        padding-left: 15px
    }

    .chat-list .chat-item .chat-content .box {
        display: inline-block;
        padding: 10px;
        margin-bottom: 3px;
        color: #343a40;
        background: #f6f8f9
    }

    .chat-list .chat-item .chat-time {
        display: block;
        font-size: 10px;
        color: #4F5467;
        margin: 5px 0 15px 65px
    }

    .chat-list .chat-item.odd .chat-content {
        text-align: right;
        width: calc(100% - 0px)
    }

    .chat-list .chat-item.odd .box {
        clear: both;
        color: #fff;
        background: #137eff
    }

    .chat-list .chat-item.odd+.odd {
        margin-top: 0
    }

    .chat-list .chat-item.reverse .chat-time {
        text-align: left
    }

    .chat-list .chat-item.reverse .chat-content {
        padding-left: 0;
        padding-right: 15px
    }

    .chat-windows {
        position: fixed;
        bottom: 0;
        right: 300px;
        height: 350px;
        max-height: 350px;
        z-index: 9999;
        transition: .6s
    }

    .chat-windows.show-chat {
        bottom: 0
    }

    .chat-windows.hide-chat {
        bottom: -350px
    }

    .chat-windows .user-chat {
        min-width: 300px;
        min-height: 350px;
        background-color: #fff;
        box-shadow: 1px 0 20px rgba(0, 0, 0, .08);
        float: right;
        margin: 0 2px 0 0
    }

    .chat-windows .user-chat.mini-chat {
        min-width: 40px;
        min-height: 40px;
        bottom: 0;
        top: 310px;
        position: relative
    }

    .chat-windows .user-chat.mini-chat .chat-body,
    .chat-windows .user-chat.mini-chat .chat-footer,
    .chat-windows .user-chat.mini-chat .chat-head .name,
    .chat-windows .user-chat.mini-chat .chat-head i {
        display: none
    }

    .chat-windows .user-chat.mini-chat .chat-head img {
        margin: 0
    }

    .chat-windows .user-chat.mini-chat .chat-head .status {
        left: 28px;
        top: 10px
    }

    .chat-windows .user-chat .chat-head {
        height: 40px;
        padding: 10px;
        background-color: #137eff;
        color: #fff;
        position: relative
    }

    .chat-windows .user-chat .chat-head img {
        border-radius: 50%;
        height: 25px;
        width: 25px;
        vertical-align: middle;
        margin: -4px 8px 0 0;
        display: inline-block;
        cursor: pointer
    }

    .chat-windows .user-chat .chat-head .status {
        border: 1px solid #fff;
        border-radius: 50%;
        position: absolute;
        height: 8px;
        width: 8px;
        left: 28px;
        top: 7px
    }

    .chat-windows .user-chat .chat-head .online {
        background-color: #5ac146
    }

    .chat-windows .user-chat .chat-head .busy {
        background-color: #fa5838
    }

    .chat-windows .user-chat .chat-head .away {
        background-color: #fb8c00
    }

    .chat-windows .user-chat .chat-head .offline {
        background-color: #ffbc34
    }

    .chat-windows .user-chat .chat-head i {
        font-size: 14px;
        float: right;
        color: #fff;
        margin: 3px 0 0 5px;
        cursor: pointer
    }

    .chat-windows .user-chat .chat-footer {
        padding: 0;
        border-top: 1px solid rgba(0, 0, 0, .1)
    }

    .chat-windows .user-chat .chat-footer .form-control {
        background-color: transparent;
        color: #6a7a8c;
        font-size: 14px;
        border: 0;
        width: 100%;
        height: 40px
    }

    .chat-windows .user-chat .chat-footer .form-control:focus,
    .chat-windows .user-chat .chat-footer .form-control:hover {
        border: 0
    }

    .chat-windows .user-chat .chat-body {
        height: 270px;
        padding: 15px 15px 0;
        background-color: #f2f4f5;
        overflow: hidden;
        max-width: 300px;
        position: relative
    }

    .profiletimeline .sl-left img,
    .steamline .sl-left img {
        max-width: 40px
    }

    .chat-list {
        margin: 0;
        padding: 0
    }

    .chat-list .msg_receive,
    .chat-list .msg_sent {
        list-style: none;
        margin-top: 30px
    }

    .chat-list .msg_receive .chat-img,
    .chat-list .msg_sent .chat-img {
        display: inline-block;
        width: 45px;
        vertical-align: top
    }

    .chat-list .msg_receive .chat-img img,
    .chat-list .msg_sent .chat-img img {
        width: 100%;
        border-radius: 100%
    }

    .chat-list .msg_receive .chat-content,
    .chat-list .msg_sent .chat-content {
        width: calc(100% - 50px);
        display: inline-block;
        padding-left: 15px
    }

    .chat-list .msg_receive .chat-content .box,
    .chat-list .msg_sent .chat-content .box {
        display: inline-block;
        padding: 10px;
        margin-bottom: 3px;
        background: #fff
    }

    .chat-list .msg_receive .chat-time,
    .chat-list .msg_sent .chat-time {
        display: block;
        font-size: 10px;
        color: #afb5c1;
        margin: 5px 0 15px 15px
    }

    .chat-list .msg_receive.odd .chat-content,
    .chat-list .msg_sent.odd .chat-content {
        text-align: right;
        width: calc(100% - 0px)
    }

    .chat-list .msg_receive.odd .chat-content .box,
    .chat-list .msg_sent.odd .chat-content .box {
        clear: both;
        color: #fff;
        background: #137eff
    }

    .chat-list .msg_receive .reverse,
    .chat-list .msg_receive.odd .chat-time,
    .chat-list .msg_sent .reverse,
    .chat-list .msg_sent.odd .chat-time {
        text-align: right
    }

    .chat-list .msg_receive.odd+.odd,
    .chat-list .msg_sent.odd+.odd {
        margin-top: 0
    }

    .chat-list .msg_receive.reverse .chat-content,
    .chat-list .msg_sent.reverse .chat-content {
        padding-left: 0;
        padding-right: 15px
    }

    .chat-list .msg_receive.reverse .chat-time,
    .chat-list .msg_sent.reverse .chat-time {
        text-align: left
    }

    .mailbox .chat-scroll {
        height: calc(100vh - 100px)
    }

    .steamline {
        position: relative;
        border-left: 1px solid rgba(0, 0, 0, .1);
        margin-left: 20px
    }

    .steamline .sl-left {
        float: left;
        margin-left: -20px;
        z-index: 1;
        width: 40px;
        line-height: 40px;
        text-align: center;
        height: 40px;
        border-radius: 100%;
        color: #fff;
        margin-right: 15px
    }

    .steamline .sl-right {
        padding-left: 30px
    }

    .steamline .sl-right .desc,
    .steamline .sl-right .inline-photos {
        margin-bottom: 21px
    }

    .steamline .sl-item {
        border-bottom: 1px solid rgba(0, 0, 0, .1);
        margin: 20px 0
    }

    .steamline .sl-item:last-child {
        border-bottom: none
    }

    .time-item,
    .time-item:after {
        border-color: rgba(0, 0, 0, .1)
    }

    .sl-date {
        font-size: 10px;
        color: #afb5c1
    }

    .time-item {
        padding-bottom: 1px;
        position: relative
    }

    .time-item:before {
        content: " ";
        display: table
    }

    .time-item:after {
        background-color: #fff;
        border-radius: 10px;
        border-style: solid;
        border-width: 2px;
        bottom: 0;
        content: '';
        height: 14px;
        left: 0;
        margin-left: -8px;
        position: absolute;
        top: 5px;
        width: 14px
    }

    .time-item-item:after {
        content: " ";
        display: table
    }

    .item-info {
        margin-bottom: 15px;
        margin-left: 15px
    }

    .item-info p {
        margin-bottom: 10px!important
    }

    .feed-widget .feed-body .feed-item {
        padding: 12px 0;
        display: flex;
        align-items: center
    }

    .feed-widget .feed-body .feed-item:hover {
        background: #f6f8f9
    }

    .feed-widget .feed-body .feed-item>.feed-icon {
        width: 40px;
        height: 40px;
        margin-right: 10px;
        display: inline-block;
        text-align: center;
        vertical-align: middle;
        border-radius: 100%;
        color: #fff
    }

    .feed-widget .feed-body .feed-item>.feed-icon i {
        line-height: 40px
    }

    .todo-widget .todo-list .todo-item {
        border: 0;
        margin-bottom: 0;
        padding: 20px 15px 15px 0
    }

    .todo-widget .todo-list .todo-item .custom-checkbox {
        width: 100%
    }

    .todo-widget .todo-list .todo-item .custom-checkbox .todo-label {
        font-weight: 400;
        width: 100%
    }

    .todo-widget .todo-list .todo-item .custom-checkbox .custom-control-input:checked~.todo-label .todo-desc {
        text-decoration: line-through;
        opacity: .7
    }

    .todo-widget .todo-list .todo-item .custom-checkbox .custom-control-input:checked~.todo-label .badge {
        text-decoration: line-through
    }

    .todo-widget .todo-list .todo-item:hover {
        z-index: 0
    }

    .profiletimeline {
        position: relative;
        padding-left: 40px;
        margin: 40px 10px 0 30px;
        border-left: 1px solid rgba(0, 0, 0, .1)
    }

    .profiletimeline .sl-left {
        float: left;
        margin-left: -60px;
        z-index: 1;
        margin-right: 15px
    }

    .profiletimeline .sl-item {
        margin-top: 8px;
        margin-bottom: 30px
    }

    .profiletimeline .sl-date {
        font-size: 12px;
        color: #afb5c1
    }

    #main-wrapper[data-layout=horizontal][data-header-position=fixed] .topbar {
        position: fixed;
        width: 100%
    }

    #main-wrapper[data-layout=horizontal][data-header-position=fixed] .left-sidebar {
        padding-top: 64px
    }

    #main-wrapper[data-layout=horizontal][data-sidebar-position=fixed] .topbar {
        position: fixed;
        width: 100%
    }

    #main-wrapper[data-layout=horizontal][data-sidebar-position=fixed] .left-sidebar {
        padding-top: 64px;
        position: fixed
    }

    #main-wrapper[data-layout=horizontal][data-sidebar-position=fixed] .page-wrapper {
        padding-top: 78px
    }

    @media (min-width:768px) {
        #main-wrapper[data-layout=horizontal] {
            background: #f2f4f5
        }
        #main-wrapper[data-layout=horizontal] .topbar {
            transition: 0s
        }
        #main-wrapper[data-layout=horizontal][data-boxed-layout=boxed] .page-wrapper,
        #main-wrapper[data-layout=horizontal][data-boxed-layout=boxed] .scroll-sidebar,
        #main-wrapper[data-layout=horizontal][data-boxed-layout=boxed] .top-navbar {
            max-width: 1200px;
            margin: 0 auto;
            position: relative
        }
        #main-wrapper[data-layout=horizontal][data-boxed-layout=boxed] .sidebar-nav #sidebarnav {
            flex-wrap: wrap
        }
        #main-wrapper[data-layout=horizontal][data-boxed-layout=boxed] .sidebar-nav #sidebarnav>.sidebar-item>.has-arrow:after {
            display: block
        }
        #main-wrapper[data-layout=horizontal][data-boxed-layout=boxed] .sidebar-nav .sidebar-item {
            flex: 1 1 0
        }
        #main-wrapper[data-layout=horizontal][data-sidebar-position=fixed] .page-wrapper {
            padding-top: 128px
        }
        #main-wrapper[data-layout=horizontal] .topbar .top-navbar .navbar-header {
            width: 200px;
            border-right: 1px solid rgba(0, 0, 0, .1)
        }
        #main-wrapper[data-layout=horizontal] .topbar .sidebartoggler {
            display: none
        }
        #main-wrapper[data-layout=horizontal] .left-sidebar {
            width: 100%;
            height: auto;
            position: relative;
            padding-top: 0;
            z-index: 45;
            transition: 0s
        }
        #main-wrapper[data-layout=horizontal] .left-sidebar .scroll-sidebar {
            height: 50px
        }
        #main-wrapper[data-layout=horizontal] .sidebar-nav ul {
            display: flex
        }
        #main-wrapper[data-layout=horizontal] .scroll-sidebar {
            height: auto
        }
        #main-wrapper[data-layout=horizontal] .sidebar-nav #sidebarnav {
            display: flex;
            width: 100%
        }
        #main-wrapper[data-layout=horizontal] .sidebar-nav #sidebarnav .sidebar-item {
            position: relative;
            width: auto
        }
        #main-wrapper[data-layout=horizontal] .sidebar-nav #sidebarnav>.sidebar-item {
            border-right: 1px solid rgba(0, 0, 0, .1)
        }
        #main-wrapper[data-layout=horizontal] .sidebar-nav #sidebarnav>.sidebar-item>.has-arrow:after {
            transform: rotate(-135deg) translate(0, -50%)
        }
        #main-wrapper[data-layout=horizontal] .sidebar-nav #sidebarnav>.sidebar-item:last-child>.first-level {
            right: 0;
            left: auto
        }
        #main-wrapper[data-layout=horizontal] .sidebar-nav #sidebarnav>.sidebar-item>.two-column+.first-level {
            width: 400px
        }
        #main-wrapper[data-layout=horizontal] .sidebar-nav #sidebarnav>.sidebar-item>.two-column+.first-level>.sidebar-item {
            float: left;
            width: 50%;
            vertical-align: top
        }
        #main-wrapper[data-layout=horizontal] .sidebar-nav #sidebarnav>.sidebar-item ul {
            position: absolute;
            left: 0;
            top: auto;
            width: 220px;
            padding-bottom: 0;
            z-index: 100;
            display: none;
            box-shadow: 5px 10px 20px rgba(0, 0, 0, .1)
        }
        #main-wrapper[data-layout=horizontal] .sidebar-nav #sidebarnav ul.first-level>.sidebar-item:hover ul.second-level,
        #main-wrapper[data-layout=horizontal] .sidebar-nav #sidebarnav>.sidebar-item:hover ul.first-level,
        #main-wrapper[data-layout=horizontal] .sidebar-nav #sidebarnav>.sidebar-item:hover ul.first-level.collapse {
            display: block
        }
        #main-wrapper[data-layout=horizontal] .sidebar-nav #sidebarnav>.mega-dropdown {
            position: static
        }
        #main-wrapper[data-layout=horizontal] .sidebar-nav #sidebarnav>.mega-dropdown .first-level {
            width: 100%
        }
        #main-wrapper[data-layout=horizontal] .sidebar-nav #sidebarnav>.mega-dropdown .first-level>li {
            width: 25%;
            float: left
        }
        #main-wrapper[data-layout=horizontal] .sidebar-nav #sidebarnav>.sidebar-item:hover {
            background: rgba(0, 0, 0, .025)
        }
        #main-wrapper[data-layout=horizontal] .sidebar-nav #sidebarnav>.sidebar-item:hover ul.first-level.collapse:after,
        #main-wrapper[data-layout=horizontal] .sidebar-nav #sidebarnav>.sidebar-item:hover ul.first-level:after {
            position: absolute;
            content: "";
            background: rgba(0, 0, 0, .025);
            top: 0;
            height: 100%;
            width: 100%;
            left: 0;
            z-index: -1
        }
        #main-wrapper[data-layout=horizontal] .sidebar-nav #sidebarnav>.sidebar-item ul.second-level {
            left: 220px;
            top: 0
        }
        #main-wrapper[data-layout=horizontal] .sidebar-nav #sidebarnav>.sidebar-item .first-level .right-side-dd ul.second-level,
        #main-wrapper[data-layout=horizontal] .sidebar-nav #sidebarnav>.sidebar-item:last-child>.first-level ul.second-level {
            right: 220px;
            top: 0;
            left: auto
        }
        #main-wrapper[data-layout=horizontal] .sidebar-nav #sidebarnav .badge,
        #main-wrapper[data-layout=horizontal] .sidebar-nav #sidebarnav .nav-small-cap,
        #main-wrapper[data-layout=horizontal] .sidebar-nav #sidebarnav .sidebar-footer,
        #main-wrapper[data-layout=horizontal] .sidebar-nav #sidebarnav .user-pro,
        #main-wrapper[data-layout=horizontal] .sidebar-nav #sidebarnav>.sidebar-item>.has-arrow:after {
            display: none
        }
        #main-wrapper[data-layout=horizontal] .sidebar-nav>#sidebarnav>.sidebar-item.selected>.sidebar-link,
        #main-wrapper[data-layout=horizontal] .sidebar-nav>#sidebarnav>.sidebar-item>.sidebar-link:hover {
            border-left: 0 solid #137eff
        }
        #main-wrapper[data-layout=horizontal] .sidebar-nav>#sidebarnav>.sidebar-item>.sidebar-link {
            border-left: 0 solid transparent
        }
    }

    @media (min-width:768px) and (max-width:1023px) {
        #main-wrapper[data-layout=horizontal] .sidebar-nav>ul>.sidebar-item>.sidebar-link i {
            display: none
        }
        #main-wrapper[data-layout=horizontal] .sidebar-nav #sidebarnav>.sidebar-item {
            flex: auto
        }
        [data-sidebar-position=fixed] .left-sidebar {
            overflow: auto
        }
    }

    @media (min-width:768px) {
        .bc-content {
            justify-content: flex-end
        }
    }

    @media (max-width:991.98px) {
        .do-block {
            display: block!important
        }
    }
</style>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

