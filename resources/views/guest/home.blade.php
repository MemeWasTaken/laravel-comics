@extends('guest.layout.base')

@section('documentTitle')
    {{$nomePagina}}
@endsection

@section('content')

  <main>
          
    <div class="jumbo">

    </div>

    <div class="container-series">
        <div class="container">
            <h2> Current Series </h2>
            @foreach ($comics as $comic)
              <div class="serie">
                <div class="container-img">
                  <img src="{{ $comic['thumb'] }}" alt="">
                </div>
                <h3> {{ $comic['title'] }}</h3>
              </div>
            @endforeach
        </div>
          <div> <a href="#">Load More</a> </div>
    </div>
    <div class="merchandise">
        <div class="container">
            <ul class="merchandise-cards">
                <li class="card">
                    <img src=" {{asset('img/buy-comics-digital-comics.png')}} " alt="">
                    <div class="merch-text">Digital Comics</div>
                </li>
                <li class="card">
                    <img src=" {{asset('img/buy-comics-merchandise.png')}} " alt="">
                    <div class="merch-text">Dc Merchandise</div>
                </li>
                <li class="card">
                    <img src=" {{asset('img/buy-comics-subscriptions.png')}} " alt="">
                    <div class="merch-text">Subscription</div>
                </li>
                <li class="card">
                    <img src=" {{asset('img/buy-comics-shop-locator.png')}} " alt="">
                    <div class="merch-text">Comic Shop Locator</div>
                </li>
                <li class="card">
                    <img src=" {{asset('img/buy-dc-power-visa.svg')}} " alt="">
                    <div class="merch-text">Dc Power Visa</div>
                </li>
            </ul>
        </div>
    </div>
  </main>

@endsection

@section('scripts')
  <script src="{{asset('js/app.js')}}"></script>
@endsection