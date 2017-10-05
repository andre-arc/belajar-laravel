<!DOCTYPE html>
<html lang="en">

  @include('template.partial._head')

  <body>

    <!-- Navigation -->
    @include('template.partial._navigation')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{ asset('assets/img/home-bg.jpg') }}')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>
                @if (@isset ($data))
                  {{ $data['title'] }}
                @else
                  {{ $post->title }}
                @endif
              </h1>
              {{-- <span class="subheading">{{ $data['subTitle'] }}</span> --}}
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">

      @yield('content')

    </div>

    <hr>

    <!-- Footer -->
    @include('template.partial._footer')

    @include('template.partial._script')

  </body>

</html>
