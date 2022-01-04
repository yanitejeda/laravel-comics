@extends('layouts.default')
@section('page_title',$fumetto["title"])
    

@section('main_content')
    <div class="border_comics"></div>
    <div class=" products_comics">

        <div class="container pb-4">

            <div class="box-url">
                <img src="{{$fumetto['thumb']}}" alt="" />
            </div>
            
            <div class="row">
                <div class="col-9">
                    <h6>{{$fumetto['title']}}</h6>
                    <div class="row py-2">
                        <div class="col-9 d-flex justify-content-between info_bg green_text " > 
                            <div>
                                U.S. Price
                                 <span class="white_text">{{$fumetto['price']}}</span> 
                            </div>
                            <div> Available</div>  
                        </div>
                        <div class="col-3 info_bg white_text">Check Availability</div> 
                    </div>
                    <p>{!!$fumetto['description']!!}</p>
                </div>
                <div class="col-3">
                    <div class="adv_text">ADVERTISEMENT</div> 
                    <div class="adv_box">
                        <img src="/img/adv.jpg" alt="pubblicità">
                    </div>
                </div>
            </div>
        </div>
        <div class="comics_info_section">
            <div class="container">
                <div class="row gx-5 py-4">
                    <div class="col-6"> 
                        <h5 class="Border_b pb-4">Talent</h5>
                        <div class="row Border_b py-2">
                            <div class="col-4">Art by:</div>
                            <div class="col-8">
                                @foreach ($fumetto['artists'] as $artist)
                                    <span >{{$artist}}</span>
                                @endforeach
                            </div>
        
                        </div>
                        <div class="row Border_b py-2">
                            <div class="col-4">Written by: </div>
                            <div class="col-8">
                                @foreach ($fumetto['writers'] as $writer)
                                  <span>{{$writer}}</span>
                                @endforeach
                            </div>
        
                        </div>
                    </div>
                    
                    <div class="col-6"> 
                        <h5 class="Border_b pb-4">Specs</h5>
                        <div class="row Border_b py-2">
                            <div class="col-4">Series:</div>
                            <div class="col-8">
                               <span>{{$fumetto['series']}}</span>
                            </div>
        
                        </div>
        
                        <div class="row Border_b py-2">
                            <div class="col-4">U.S.Price:</div>
                            <div class="col-8">
                                {{$fumetto['price']}}
                            </div>
        
                        </div>
        
        
                        <div class="row Border_b py-2">
                            <div class="col-4">On Sale Date:</div>
                            <div class="col-8">
                              <span>{{$fumetto['sale_date']}}</span>
                            </div>
        
                        </div>
                    </div>
                 
                </div>

            </div>
        </div>




            
            
    </div>

@endsection