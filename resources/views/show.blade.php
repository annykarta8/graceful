<div class="">
    <div class="row">
        <div class="col">
            <div class="carousel slide" data-ride="carousel" id="Picshow">
                <ul class="carousel-indicators">
                    <li data-target="#Picshow" data-slide-to="0" class="active ctrlLine"></li>
                    <li data-target="#Picshow" data-slide-to="1" class="ctrlLine"></li>
                    <li data-target="#Picshow" data-slide-to="2" class="ctrlLine"></li>
                </ul>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ url('/slideimage/slide1.jpg') }}" alt="" class="pic">
                        <div class="carousel-caption">
                            <h1 class="text-white display-4">Graceful</h1>
                        </div>
                        <div class="carousel-caption">
                            <p class="display-5">Lorem ipsum dolor sit amet.</p>
                        </div>


                    </div>
                    <div class="carousel-item">
                        <img src="{{ url('/slideimage/slide2.png') }}" alt="" class="pic ">
                        <div class="carousel-caption pp">
                            <h1 class="text-white display-5">New Arrival.</h1>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ url('/slideimage/slide03.png') }}" alt="" class="pic">
                        <div class="carousel-caption">
                            <h1 class="text-white display-4">Multimedia.</h1>
                        </div>
                    </div>
                </div>
                <a href="#Picshow" data-slide="prev" class="carousel-control-prev">
                    <span class="carousel-control-prev-icon"></span></a>
                <a href="#Picshow" data-slide="next" class="carousel-control-next">
                    <span class="carousel-control-next-icon"></span></a>
            </div>
        </div>
    </div>
</div>
