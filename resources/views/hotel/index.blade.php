@extends('layout.slider-page')
@section('title', trans('title.hotel'))
@section('content')
{{-- change hotel sider images --}}
@include('partial.slider',['images'=>['/images/slider/travel1.jpg','/images/slider/travel2.jpg','/images/slider/travel3.jpg']])
<div id="hotel_list" class="page_container">
  <div class="ui grid container">
    <div class="ui row">
      <div class="ui four wide column">
        <h1 class="ui red header" style="display:inline-block">
          {{trans('hotel.title')}}
        </h1>
      </div>
      <div class="ui seven wide left aligned column">
        <div id="city_list" class="ui horizontal list" style="font-weight:bold;">
          @foreach($cities as $city)
            <a class="item" href="{{ action('HotelController@hotelsByCity',array($city->id)) }}">{{$city->name}}</a>
          @endforeach
        </div>
      </div>
      <div class="ui five wide right aligned column">
        <form id="searchForm" class="" action="{{ action('HotelController@search') }}" method="get" style="display:inline;">
          <div class="ui fluid icon input">
            <input type="text" name="query" value="{{ Request::input('query') }}" placeholder="{{ trans('site.search') }}">
            <i id="search" class="circular search link icon"></i>
            <input type="submit" style="display:none;">
          </div>
        </form>
      </div>
    </div>
    <div class="ui divider" style="margin-top:2em;">
    </div>
    <div class="ui row">
      <div class="ui column">
        <div class="ui divided link items">
          @foreach($hotels as $hotel)
          <a class="ui item" href="#">
            <div class="ui image" style="width:120px;height:auto;">
              <img src="{{ $hotel->logo }}" alt="place holder" />
            </div>
            <div class="content">
              <div class="header">{{$hotel->name}}</div>
              <div class="description">
                <p>
                  {{$hotel->desc}}
                </p>
              </div>
             </div>
           </a>
          @endforeach
        </div>
        <div class="ui divider">
        </div>
        @include('partial.pagination',['items'=>$hotels])
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
  @parent
  <script type="text/javascript" src="/js/hotel.js"></script>
@endsection
