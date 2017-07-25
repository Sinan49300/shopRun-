<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        @yield('title','ShopRun!')
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('dist/css/foundation.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
    <link href="https://fonts.googleapis.com/css?family=Caveat+Brush" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
   <link href="{{ asset('dist/font/times-new-roman-italic-58a6bd2ca8eaa.ttf')}}">
    
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">


</head>
<body>
<div class="top-bar">
    <div class="main-logo">
    <div class="logo"><img src="{{asset('images/logo.png')}}"></div>
    <h2 class="logo-title"><a href="/">Run!<p>shop</p></a></h2>
    </div>
    <div class="top-bar-right">
        <ol class="menu">
            <li>
                <a href="{{route('shoes')}}">
                    SHOES
                </a>
            </li>
            <li>
                <a href="#">
                    CONTACT
                </a>
            </li>
            <li>
                <a href="{{route('cart.index')}}">
                    <i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
                    </i>
                    PANIER
                    <span class="alert badge">
                               {{Cart::count()}}
                            </span>
                </a>
            </li>
        </ol>
    </div>
</div>

@yield('content')
<footer>
    <div class="row">
        <div class="small-12 medium-4 large-4 columns">
            <h2>Run!<p>shop</p></h2>
        </div>
        <div class="small-12 medium-4 large-4 columns">
            
        </div>

        <div class="small-6 medium-4 large-4 columns">
            <h3>&copy; 2017 <a href="https://www.sinan-aktas.fr/">www.sinan-aktas.fr</a></h3>
        </div>
    </div>
</footer>

<script src="{{asset('dist/js/vendor/jquery.js')}}"></script>
<script src="{{asset('dist/js/vendor/app.js')}}"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
    Stripe.setPublishableKey('pk_test_pJeO00yOgIA4E7VPDgzraFYH');
</script>
</body>
</html>
