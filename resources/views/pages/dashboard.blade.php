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


               <div class="carousel-item">
                <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3033840493968!2d100.35037681427305!3d-0.9205396355950204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b8d2563d40cd%3A0xc7cb1faf831d3c3f!2sLaundry%20Lafisha!5e0!3m2!1sid!2sid!4v1667987441466!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center>
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
