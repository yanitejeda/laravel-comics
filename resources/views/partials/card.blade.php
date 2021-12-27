<div class=" container">

    <div class="product-container">
        @foreach ($lista_fumetti as $fumetto)

            <div class="product-card">
                <div class="box-url">
                    <img src="{{$fumetto['thumb']}}" alt="" />
                </div>
                
                <h6>{{$fumetto['series']}}</h6>

            </div>
        @endforeach
    </div>
</div>
      
{{-- @dump($lista_fumetti)
 --}}