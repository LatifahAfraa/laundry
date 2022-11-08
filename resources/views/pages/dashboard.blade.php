@extends('layouts.base')
@section('content')


<div class="container-fluid">
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://img.freepik.com/premium-vector/washing-machine-with-cleanser-iron-ironing-board-clean-clothes-laundry-service-room_313242-126.jpg?w=2000"
                        class="img-fluid" alt="" height="50%">
                    <div class="container">
                        <div class="carousel-caption text-start">
                        </div>
                    </div>
                </div>

                <div class="carousel-item ">
                    <img src="https://previews.123rf.com/images/paladjai/paladjai1502/paladjai150200069/36988693-laundry-rooms-vector-illustration-of-a-laundry-.jpg"
                        class="img-fluid" alt="" height="50%">
                    <div class="container">
                        <div class="carousel-caption">
                        </div>
                    </div>
                </div>

                <div class="carousel-item ">
                     <img src="https://cottondna.com/vendor/designer/admin/assets/img/default-cover.png"
                        class="img-fluid" alt="" height="50%">
                <div class="container">
                  <div class="carousel-caption">
                  </div>
                </div>
              </div>

               <div class="carousel-item">
                     <img src="https://cottondna.com/vendor/designer/admin/assets/img/default-cover.png"
                        class="img-fluid" alt="" height="50%">
                <div class="container">
                  <div class="carousel-caption text-end">
                  </div>
                </div>
              </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


    </main>

</div>
@endsection
