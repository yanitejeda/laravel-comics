<div class="main_card">
    <div class=" container">
    
        <div class="product-container">
            @foreach ($lista_fumetti as $fumetto)
    
                <a class="product-card" href="{{Route('products.details',["id" =>$loop->index])}}">
                    <div class="box-url">
                        <img src="{{$fumetto['thumb']}}" alt="" />
                    </div>
                    
                    <h6>{{$fumetto['series']}}</h6>
    
                </a>
            @endforeach
        </div>
    </div>

</div>

      
{{-- @dump($lista_fumetti)
 --}}