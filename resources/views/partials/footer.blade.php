@php
 /*    $footerInfo = [
        "dcComics" => [
            "CHARACTERS" ,
            "COMICS",
            "MOVIES",
            "TV",
            "GAMES",
            "VIDEOS",
            "NEWS",  
        ],

        "shop"=>[   
             "Shop DC",
            
             "Shop DC Collectiblea",
            
        ],


        "dc"=>[ 
             "Terms Of Use",
            
              "Privacy policy (New)",
                
             "Ad Choices",
            
            "Advertising",
                
             "Jobs",
            
            "Subscritions",
             
             "Telent Workshops",
                
            "CPSC Certificates",
            
            "Rating",
        
            "Shop Help",
                
             "Jobs",
            
             "Contact Us",
        
        ],

        "site"=>[   
            "DC",
            
            "MAD Magazine",
                
            "DC Kids",
            
            "DC Universe",
                
            "DC Power Visa",
             
        ],
    ];

     */


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
        <div class="listGroup justify-content-between">
            <div class="d-flex">

                <div class="px-2">
                    <ul class="list-unstyled">
                        @foreach ($dcComics as $value)
                        <li>{{$value['tittle']}}</li>
                            
                        @endforeach
                    </ul>
    
                    <ul class="list-unstyled">
                        @foreach ($shop as $value)
                        <li>{{$value['tittle']}}</li>
                            
                        @endforeach
                    </ul>
                </div>
    
                <ul class="list-unstyled px-2">
                    @foreach ($dc as $value)
                    <li>{{$value['tittle']}}</li>
                        
                    @endforeach
                </ul>
                <ul class="list-unstyled px-2">
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