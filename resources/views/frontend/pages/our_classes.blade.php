@extends('frontend.layouts.app')

@section('content')
    
    
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Our <em>Classes</em></h2>
                        <img src="{{ asset('frontend/assets/images/line-dec.png') }}" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><img src="{{ asset('frontend/assets/images/tabs-first-icon.png') }}" alt="">First Training Class</a></li>
                  <li><a href='#tabs-2'><img src="{{ asset('frontend/assets/images/tabs-first-icon.png') }}" alt="">Second Training Class</a></a></li>
                  <li><a href='#tabs-3'><img src="{{ asset('frontend/assets/images/tabs-first-icon.png') }}" alt="">Third Training Class</a></a></li>
                  <li><a href='#tabs-4'><img src="{{ asset('frontend/assets/images/tabs-first-icon.png') }}" alt="">Fourth Training Class</a></a></li>
                  <div class="main-rounded-button"><a href="#">View All Schedules</a></div>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src="{{ asset('frontend/assets/images/training-image-01.jpg') }}" alt="First Class">
                    <h4>First Training Class</h4>
                    <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>
                    <div class="main-button">
                        <a href="#">View Schedule</a>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <img src="{{ asset('frontend/assets/images/training-image-02.jpg') }}" alt="Second Training">
                    <h4>Second Training Class</h4>
                    <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <div class="main-button">
                        <a href="#">View Schedule</a>
                    </div>
                  </article>
                  <article id='tabs-3'>
                    <img src="{{ asset('frontend/assets/images/training-image-03.jpg') }}" alt="Third Class">
                    <h4>Third Training Class</h4>
                    <p>Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id auctor neque posuere sit amet. Aliquam pharetra, augue vel cursus porta, nisi tortor vulputate sapien, id scelerisque felis magna id felis. Proin neque metus, pellentesque pharetra semper vel, accumsan a neque.</p>
                    <div class="main-button">
                        <a href="#">View Schedule</a>
                    </div>
                  </article>
                  <article id='tabs-4'>
                    <img src="{{ asset('frontend/assets/images/training-image-04.jpg') }}" alt="Fourth Training">
                    <h4>Fourth Training Class</h4>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ultrices elementum odio ac tempus. Etiam eleifend orci lectus, eget venenatis ipsum commodo et.</p>
                    <div class="main-button">
                        <a href="#">View Schedule</a>
                    </div>
                  </article>
                </section>
              </div>
            </div>
        </div>
    
@endsection