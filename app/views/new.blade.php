@extends('master')
@section('content')
<div class="jumbotron bg">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 bg-text">
            <h2 class="text-center">Wecome to WSDB</h2>
            <p class="text-center">This is an independent fan made site. The purpose of this website is to provide players with a better platform to buy/ sell Weiss Schwarz products and track cards prices.</p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <h3 class="text-center new-h4-title">Category</h3>
        <div class="list-group">
            <a href="#" class="list-group-item">Cards</a>
            <a href="#" class="list-group-item">Boosters</a>
            <a href="#" class="list-group-item">Sleeves</a>
            <a href="#" class="list-group-item">Mats</a>
        </div>
    </div>
    <div class="col-md-9">
        <div class="col-md-12">
            <h3 class="text-center new-h4-title">New</h3>
        </div>
        @for($i = 0; $i < 9; $i++)
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="new-img center-block image-responsive" src="http://placehold.it/210x210">
                    <a href="">
                        <h4 class="text-center">Title</h4>
                    </a>
                    <p class="text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!
                    </p>
                    <div class="btn-group new-btn-group">
                        <a class="btn btn-default" href="">$99.99</a>
                        <a class="btn btn-primary" href=""><span class="glyphicon glyphicon-shopping-cart"></span> Buy</a>
                    </div>
                </div>
            </div>
        @endfor
        <div class="col-md-4 col-md-offset-4">
            <nav >
              <ul class="pagination">
                <li><a href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
              </ul>
            </nav>
        </div>
    </div>
</div>
@stop