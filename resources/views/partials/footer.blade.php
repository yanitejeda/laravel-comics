@php
 $dcComics=[
                [
                "tittle" => "CHARACTERS"
                ],
                [
                "tittle" => "COMICS"
                ], [
                "tittle" => "MOVIES"
                ], [
                "tittle" => "TV"
                ], [
                "tittle" => "GAMES"
                ], [
                "tittle" => "VIDEOS"
                ],[
                "tittle" => "NEWS"
                ],
];

 $shop=[
         [
        "tittle" => "Shop DC"
        ], [
        "tittle" => "Shop DC Collectiblea"
        ],
];
 $dc=[
        [
        "tittle" => "Terms Of Use"
        ], [
        "tittle" => "Privacy policy (New)"
        ],  [
        "tittle" => "Ad Choices"
        ], [
        "tittle" => "Advertising"
        ],  [
        "tittle" => "Jobs"
        ], [
        "tittle" => "Subscritions"
        ],
        [
        "tittle" => "Telent Workshops"
        ],  [
        "tittle" => "CPSC Certificates"
        ], [
        "tittle" => "Rating"
        ],[
        "tittle" => "Shop Help"
        ],  [
        "tittle" => "Jobs"
        ], [
        "tittle" => "Contact Us"
        ],
];
$site=[
        [
        "tittle" => "DC"
        ], [
        "tittle" => "MAD Magazine"
        ],  [
        "tittle" => "DC Kids"
        ], [
        "tittle" => "DC Universe"
        ],  [
        "tittle" => "DC Power Visa"
        ], 
    ]
@endphp

<div class="main-footer">
    <div class=" container">
        <div class="listGroup">
            <div class="d-flex">

                <div>
                    <ul>
                        @foreach ($dcComics as $value)
                        <li>{{$value['tittle']}}</li>
                            
                        @endforeach
                    </ul>
    
                    <ul>
                        @foreach ($shop as $value)
                        <li>{{$value['tittle']}}</li>
                            
                        @endforeach
                    </ul>
                </div>
    
                <ul>
                    @foreach ($dc as $value)
                    <li>{{$value['tittle']}}</li>
                        
                    @endforeach
                </ul>
                <ul>
                    @foreach ($site as $value)
                    <li>{{$value['tittle']}}</li>
                        
                    @endforeach
                </ul>
            </div>

            
            <div class="logo-bg">
            </div>

        </div>
        
    </div>

</div>