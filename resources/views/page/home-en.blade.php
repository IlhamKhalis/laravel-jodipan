@extends('layout.app-en')

@section('content')

<header class="header-2">
    <div
        class="page-header min-vh-75 relative"
        style="background-image: url('{{ asset('assets/img/kww/IMG_0219.PNG') }}')"
        >
      <span class="mask bg-gradient-primary opacity-4"></span>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 text-center mx-auto">
            <h1 class="text-white pt-3 mt-n5">Kampung Warna Warni Jodipan</h1>
          </div>
        </div>
      </div>
    </div>
  </header>

    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
      <section class="my-5 py-5">
        <div class="container">
          <div class="row">
            <div class="row justify-content-center text-center">
              <p class="lead">
                Kampung Warna-Warni Jodipan, located on the banks of the Brantas River, is the first tourist destination in Malang City, famous for its rows of houses adorned with attractive colors, enhancing the appearance of its walls to avoid a monotonous look. This area is situated in Jodipan, which is also along the banks of the Brantas River.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="pt-3 pb-4">
        <div class="container">
          <div class="row">
            <div class="row justify-content-center text-center">
              <iframe width="1000" height="500" src="https://www.youtube.com/embed/Wm0F06ln8uY?si=0">
              </iframe>
            </div>
          </div>
        </div>
      </section>

      <section class="pt-3 pb-4">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
              <div class="rotating-card-container">
                <div
                  class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5"
                >
                  <div
                    class="front front-background"
                    style="
                      background-image: url(https://images.unsplash.com/photo-1569683795645-b62e50fbf103?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80);
                      background-size: cover;
                    "
                  >
                    <div class="card-body py-7 text-center">
                      <i class="material-icons text-white text-4xl my-3"
                        >touch_app</i
                      >
                      <h3 class="text-white">
                        Facilities
                      </h3>
                      <p class="text-white opacity-8">
                        Available facilities at Kampung Warna Warni Jodipan
                      </p>
                    </div>
                  </div>
                  <div
                    class="back back-background"
                    style="
                      background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80);
                      background-size: cover;
                    "
                  >
                    <div class="card-body py-7 text-center">
                      <i class="material-icons text-white text-4xl my-3"
                        >touch_app</i
                      >
                      <h3 class="text-white">
                        Facilities
                      </h3>
                      <p class="text-white opacity-8">
                        Available facilities at Kampung Warna Warni Jodipan
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 ms-auto">
              <div class="row justify-content-start">
                <div class="col-md-6">
                  <div class="info">
                    <br><i class="material-icons text-gradient text-primary text-3xl"
                      >wc</i
                    >
                    <h5 class="font-weight-bolder mt-3">Toilets</h5>
                    <p class="pe-5">
                      Clean and comfortable restroom area for visitor convenience.
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info">
                    <br><i class="material-icons text-gradient text-primary text-3xl"
                      >mosque</i
                    >
                    <h5 class="font-weight-bolder mt-3">Mushola (Prayer Room)</h5>
                    <p class="pe-3">
                      Quiet place of worship available for visitors.
                    </p>
                  </div>
                </div>
              </div>
              <div class="row justify-content-start mt-5">
                <div class="col-md-6 mt-3">
                  <i class="material-icons text-gradient text-primary text-3xl"
                    >directions_car</i
                  >
                  <h5 class="font-weight-bolder mt-3">Parking Area</h5>
                  <p class="pe-5">
                    Spacious parking area easily accessible for visitor convenience.
                  </p>
                </div>
                <div class="col-md-6 mt-3">
                  <div class="info">
                    <i class="material-icons text-gradient text-primary text-3xl"
                      >restaurant</i
                    >
                    <h5 class="font-weight-bolder mt-3">Food Shops</h5>
                    <p class="pe-3">
                      Enjoy a variety of delicious meals at our food store, complete with a friendly and cozy atmosphere.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="pt-3 pb-4">
        <div class="container">
          <div class="row">
            <div class="row justify-content-center text-center my-sm-5">
              <div class="col-lg-6">
                <h2 class="text-dark mb-0">Operating Hours</h2>
                <p class="lead">
                  07.00 AM - 06.00 PM WIB
                </p>
              </div>
            </div>
          </div>
        </div><br>

        <div class="row justify-content-center text-center">
          <h2 class="text-dark mb-0">Entrance Ticket</h2>
          <div class="col-md-3">
            <h1 class="text-gradient text-info">Rp. 5000</h1>
            <h5>Local Tourist</h5>
          </div>
          <div class="col-md-3">
            <h1 class="text-gradient text-info"><span>Rp. 10000</h1>
            <h5>International Tourist</h5>
          </div>
        </div>
      </section>

      <section class="pt-3 pb-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 mx-auto py-3">
              <div class="row justify-content-center text-center">
                <h2 class="text-dark mb-0">Vehicle Parking</h2>
                <div class="col-md-4 position-relative">
                  <div class="p-3 text-center">
                    <h5 class="mt-3">Rp. 2000</h5>
                    <p class="text-sm font-weight-normal">
                      Motorcycle
                    </p>
                  </div>
                  <hr class="vertical dark" />
                </div>
                <div class="col-md-4 position-relative">
                  <div class="p-3 text-center">
                    <h5 class="mt-3">Rp. 5000</h5>
                    <p class="text-sm font-weight-normal">
                      Car
                    </p>
                  </div>
                  <hr class="vertical dark" />
                </div>
                <div class="col-md-4">
                  <div class="p-3 text-center">
                    <h5 class="mt-3">Rp. 25000</h5>
                    <p class="text-sm font-weight-normal">
                      Bus
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-7">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="row justify-content-start">
                <div class="col-md-6">
                  <div class="info">
                    <i class="material-icons text-3xl text-gradient text-info mb-3">map</i>
                    <h5>Easily Accessible Routes</h5>
                    <p>Easily accessible route for convenient navigation.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info">
                    <i class="material-icons text-3xl text-gradient text-info mb-3">add_road</i>
                    <h5>Paved Roads</h5>
                    <p>Well-paved road ensuring smooth travel</p>
                  </div>
                </div>
              </div>
              <div class="row justify-content-start mt-4">
                <div class="col-md-6">
                  <div class="info">
                    <i class="material-icons text-3xl text-gradient text-info mb-3">directions_car</i>
                    <h5>Accessible by Car</h5>
                    <p>Accessible by car for convenient transportation.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info">
                    <i class="material-icons text-3xl text-gradient text-info mb-3">motorcycle</i>
                    <h5>Accessible by motorcycle</h5>
                    <p>Accessible by motorcycle for easy maneuverability.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 ms-auto mt-lg-0 mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                        <a class="d-block blur-shadow-image" href="https://www.google.com/maps/place/Kampung+Warna+Warni+Jodipan/@-7.9837269,112.6377261,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd629537cd9ffdf:0x614750a282c3fe65!8m2!3d-7.9837269!4d112.6399148" target="_blank" rel="noopener noreferrer">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1480.0081893248132!2d112.63772609970033!3d-7.98372685308517!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629537cd9ffdf%3A0x614750a282c3fe65!2sKampung%20Warna%20Warni%20Jodipan!5e0!3m2!1sen!2sid!4v1719244002859!5m2!1sen!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </a>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="font-weight-normal">
                            <a href="javascript:;">Accessibility to the Tourist Attraction</a>
                        </h5>
                        <p class="mb-0">
                            Seamless and hassle-free experience when accessing tourist attractions.
                        </p>
                        <a href="https://www.google.com/maps/place/Kampung+Warna+Warni+Jodipan/@-7.9837269,112.6377261,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd629537cd9ffdf:0x614750a282c3fe65!8m2!3d-7.9837269!4d112.6399148" target="_blank" rel="noopener noreferrer" class="btn bg-gradient-info btn-sm mb-0 mt-3">Find out more</a>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-sm-7" id="download-soft-ui">
        <div
          class="bg-gradient-dark position-relative m-3 border-radius-xl overflow-hidden"
        >
          <img
            src="{{ asset('assets/img/shapes/waves-white.svg') }}"
            alt="pattern-lines"
            class="position-absolute start-0 top-md-0 w-100 opacity-2"
          />
          <div class="container py-7 postion-relative z-index-2 position-relative">
            <div class="row">
              <div class="col-md-7 mx-auto text-center">
                <h3 class="text-white mb-0">Find interesting things at</h3>
                <h3 class="text-white">Kampung Warna Warni Jodipan!</h3>
                <p class="text-white mb-5">
                  From narrow alleys decorated with cheerful colors to Instagrammable views around every corner. Come on, visit now and feel the magic of street art in Malang!
                </p>
                <a
                  href="{{ route('home.galleryEn') }}"
                  class="btn btn-primary btn-lg mb-3 mb-sm-0"
                  >Gallery</a
                >
            </div>
          </div>
        </div>
      </section>
      <!-- -------   END PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->
    </div>

@endsection
