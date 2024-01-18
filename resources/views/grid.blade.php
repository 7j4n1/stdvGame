<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StdvGame - Mission</title>
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lekton' rel='stylesheet'>


    <script src="{{ asset('js/tailwind.js') }}"></script>
</head>
<body class="bg-cover bg-center" style="background-size: no-repeat; background-image: linear-gradient(to bottom, rgba(00, 0, 0, 1.2), rgba(0, 14, 0, 0.2)), url('/images/block.jpg');">
    <div class="w-100 h-screen ">
        <nav class="h-[100px] flex items-center justify-between">
            <div class="flex items-center">
                <div class="h-10 w-10 mr-2 ml-20 bg-[url('/images/466292e1e5db889914591b2d89f61e44.png')] bg-cover border rounded-full border-white">
                    
                </div>
            </div>
            <ul class="flex">
                <li class="mr-4"><img width="28" src="/images/clock.svg"></li>
                <!-- make counter dynamic using javascript -->
                <li class="mr-4 ml-5"><span class="bg-[#FF0] text-black px-4 py-2 rounded-full font-bold"><span id="ctTimer">80</span> seconds</span></li>
            </ul>
        </nav>
        <div class="container mx-auto flex items-center flex-col h-[60%] text-white">
            <div class="w-[50%]">
                <div class="flex flex-col items-center justify-center h-[100%] gap-y-4">
                    <!-- Generate Shapes Grid 7 x 7 -->
                    <div class="grid grid-cols-7 gap-4">
                        @foreach ($Shapes as $key => $value)
                            @if ($value == 'circle')
                                <!-- <div class="bg-[#D9D9D9] rounded-full h-8 w-8 flex items-center justify-center">
                                    <img src="{{ url('/images/grids/ellip2.png') }}" height="16" width="16" style="object-fit: cover;">
                                </div> -->
                                <div class="bg-[#D9D9D9] rounded-full h-8 w-8 flex items-center justify-center">
                                    <img src="{{ url('/images/grids/ellip2.png') }}" height="16" width="16" style="object-fit: cover;">
                                </div>
                            @elseif ($value == 'square')
                                <div class="bg-[#D9D9D9] rounded h-8 w-8 flex items-center justify-center">
                                    <img src="{{ url('/images/grids/rect.png') }}" height="16" width="16" style="object-fit: cover;">
                                </div>
                            @elseif ($value == 'triangle')
                                <div class="bg-[#D9D9D9] rounded-t-lg h-8 w-8 flex items-center justify-center">
                                    <img src="{{ url('/images/grids/poly.png') }}" height="16" width="16" style="object-fit: cover;">
                                </div>
                            @elseif ($value == 'star')
                                <div class="bg-[#D9D9D9] rounded h-8 w-8 flex items-center justify-center">
                                    <img src="{{ url('/images/grids/star.png') }}" height="16" width="16" style="object-fit: cover;">
                                </div>
                            @elseif ($value == 'block')
                            <!-- Adjust the img to fit in the div parent fully -->
                            
                                <div class="bg-[#D9D9D9] rounded h-8 w-8 flex items-center justify-center">
                                    <img src="{{ url('/images/block.jpg') }}" height="16" width="16" style="object-fit: cover;">
                                </div>
                            @endif
                        @endforeach
                </div>
            </div>
        </div>
        
    </div>
    <script>
        var counter = 80;
        var interval = setInterval(function() {
            counter--;
            // Display 'counter' wherever you want to display it.
            document.getElementById("ctTimer").innerHTML = counter;
            if (counter <= 0) {
                // Display a login box
                clearInterval(interval);
            }
        }, 1000);
    </script>
</body>
</html>
