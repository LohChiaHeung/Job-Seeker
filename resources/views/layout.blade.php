<!DOCTYPE html>
<html lang="en">
    <head>
            <title>Job Seeker</title>
            <meta charset="urf=8">
            <meta name="viewport" content="width=device=width, initial-scale=1">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="/css/main.css">

            <!-- Load icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="icon" href="/images/logo.JPG">

    </head> 
    <body>
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
          {{Session::get('success')}}
        </div>
        @endif
        <!--=========最上面的navigation bar===============-->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <img src="{{asset('images/logo.JPG')}}" class="rounded-circle" alt="Job Seeker" width="30">&nbsp;
        <a class="navbar-brand" href="#">Job Seeker</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">IT</a>
                        <a class="dropdown-item" href="#">Accountant</a>
                        <a class="dropdown-item" href="#">Artist</a>
                    </div>
                    </li>
                </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
            </form>
            <button type="button" class="btn btn-primary">
                    My Wishlist <span class="badge bg-danger">0</span>
            </button>
            </div>
        </nav>
        <!--=========end of最上面的navigation bar===============-->

        @yield('content')
        <!--==========footer===============-->
        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <h6 class="text-uppercase font-weight-bold">Additional Information</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis</p>

                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <h6 class="text-uppercase font-weight-bold">Contact</h6>
                        <p>1640 Riverside Drive, Hill Valley, California
                        <br/>info@mywebsite.com
                        <br/>+ 01 234 567 88
                        <br/>+ 01 234 567 89</p>
                    </div>
                    <div class="footer-copyright text-center">© 2020 Copyright: MyWebsite.com</div>
                </div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <script src="main.js"></script>
        <div id="demo-modal" class="modal fade">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <img class="rounded-circle mx-auto" src="email-icon.jpg" alt="modal image" width="100px" height="100px">
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span>x</span>
                        </button>
                        <div class="modal-body text-center">
                            <h4>Subscribe to our newsletter</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu.</p>
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Enter your email address" name="email">
                                <div class="input-group-append">
                                    <input type="submit" class="btn" value="Subscribe">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <style>
    body
    {
        padding: 0;
        margin: 0 ;
        background: #f2f6e9;
    }

    .page-footer 
    {
        background-color: #222;
        color: #ccc;
        padding: 60px 0 30px;
    }

    .footer-copyright 
    {
        color: #666;
        padding: 40px 0;
    }

@media (max-width: 575.98px) {
    .description {
        left: 0;
        padding: 0 15px;
        position: absolute;
        top: 10%;
        transform: none;
        text-align: center;
    }
 
    .description h1 {
        font-size: 2em;
    }
 
    .description p {
        font-size: 1.2rem;
    }
 
    .features {
        margin: 0;
    }
}

    #demo-modal .modal-content {
        border-radius: 0;
        padding: 2rem;
    }
    #demo-modal .modal-header 
    {
        border-bottom: none;
    }
    #demo-modal h4 
    {
        color: #000;
        font-size: 30px;
        margin: 0 0 25px;
        font-weight: bold;
        text-transform: capitalize;
    }
    #demo-modal .close 
    {
        background: #c0c3c8;
        border-radius: 50%;
        color: #fff;
        font-size: 19px;
        font-weight: normal;
        height: 30px;
        opacity: 0.5;
        padding: 0;
        position: absolute;
        right: 26px;
        text-align: center;
        top: 26px;
        width: 30px;
    }
    #demo-modal .close span
    {
        position: relative;
        top: -3px;
    }
    #demo-modal .modal-body p 
    {
        color: #999;
    }
    #demo-modal .form-control,
    #demo-modal .btn 
    {
        min-height: 46px;
    }
    #demo-modal .btn 
    {
        background-color: #1da098;
        border: none;
        color: #fff;
        min-width: 150px;
        transition: all 0.4s;
    }
    #demo-modal .btn:hover,
    #demo-modal .btn:focus 
    {
        background-color: #12968d;
    }
    </style>
</html>