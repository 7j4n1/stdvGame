<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StdvGame - Mission</title>
    <link href="{{ url('css/tailwind.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lekton' rel='stylesheet'>


    <script src="{{ url('js/tailwind.js') }}"></script>
</head>
<style>
    body {
        background-image: linear-gradient(90deg, rgba(0,0,0,0.7287289915966386) 0%, rgba(0,0,0,0.7259278711484594) 35%, rgba(0,0,0,0.7343312324929971) 100%), url('/images/block.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>
<body>
    <div class="w-[100%] h-screen ">
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
        <div class="mx-auto flex text-white items-center w-100 justify-between h-[80%]">
            <div class=" w-fit ml-auto mr-20 items-center">
                <div class="flex h-[100%]">
                    <!-- Generate Shapes Grid 7 x 7 -->
                    <div class="grid grid-cols-7 gap-4 gap-x-6">
                        @foreach ($Shapes as $key => $value)
                            @if ($value == 'circle')
                                <!-- <div class="bg-[#D9D9D9] rounded-full h-8 w-8 flex items-center justify-center">
                                    <img src="{{ url('/images/grids/ellip2.png') }}" height="16" width="16" style="object-fit: cover;">
                                </div> -->
                                <div class="animate-bounce bg-[#D9D9D9] rounded-full h-8 w-8 flex items-center justify-center" style="border: 2px solid #9237E3">
                                    <img src="{{ url('/images/grids/ellip2.png') }}" height="16" width="16" style="object-fit: cover;">
                                </div>
                            @elseif ($value == 'square')
                                <div class="animate-spin bg-[#D9D9D9] rounded h-8 w-8 flex items-center justify-center" style="border: 2px solid #9237E3">
                                    <img src="{{ url('/images/grids/rect.png') }}" height="16" width="16" style="object-fit: cover;">
                                </div>
                            @elseif ($value == 'triangle')
                                <div class="animate-bounce bg-[#D9D9D9] rounded-t-lg h-8 w-8 flex items-center justify-center" style="border: 2px solid #9237E3">
                                    <img src="{{ url('/images/grids/poly.png') }}" height="16" width="16" style="object-fit: cover;">
                                </div>
                            @elseif ($value == 'star')
                                <div class="animate-bounce bg-[#D9D9D9] rounded h-8 w-8 flex items-center justify-center" style="border: 2px solid #9237E3">
                                    <img src="{{ url('/images/grids/star.png') }}" height="16" width="16" style="object-fit: cover;">
                                </div>
                            @elseif ($value == 'block')
                            <!-- Adjust the img to fit in the div parent fully -->
                                <div class="bg-[#D9D9D9] rounded h-8 w-8 flex items-center justify-center" style="border: 2px solid #9237E3">
                                    <img src="{{ url('/images/block.jpg') }}" height="16" width="16" style="object-fit: cover;">
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>


            <div class="w-[40%] mr-auto"  style="border: 2px solid #9237E3; background:none;">
                <div class="flex h-[100%]">
                    <!-- Generate a large div box container without any content -->
                    <div class="space-x-5" style="width: 100%; height: 350px;">
                        <!--  a Strong Bold text -->
                        <div class="text-3xl font-bold text-center mt-2 text-[#FFFF00]">Mission 1</div>
                        <!-- 4 normal text with an inline textboxes and small inline images on each row-->
                        <div class="inline-flex items-center space-x-5 text-xl text-center justify-evenly mt-2 text-[#FFF]">
                            <p>How many squares are in the boxes ?</p>
                            <input type="text" class="w-20 h-10 rounded text-center" style="border: 2px solid #FFF; background:none;">
                            <img src="{{ url('/images/grids/typcn_tick.svg') }}" height="16" width="16" style="object-fit: cover;">
                        </div>
                        <div class="inline-flex items-center space-x-5 justify-center text-xl justify-evenly text-center mt-2 text-[#FFF]">
                            <p>How many circles are in the boxes ?</p>
                            <input type="text" class="w-20 h-10 rounded text-center" style="border: 2px solid #FFF; background:none;">
                            <img src="{{ url('/images/grids/typcn_tick.svg') }}" height="16" width="16" style="object-fit: cover;">
                        </div>
                        <div class="inline-flex items-center space-x-5 text-xl justify-evenly text-center mt-2 text-[#FFF]">
                            <p>How many triangles are in the boxes ?</p>
                            <input type="text" class="w-20 h-10 rounded text-center" style="border: 2px solid #FFF; background:none;">
                            <img src="{{ url('/images/grids/typcn_tick.svg') }}" height="16" width="16" style="object-fit: cover;">
                        </div>
                        <div class="inline-flex items-center space-x-5 text-xl justify-evenly text-center mt-2 text-[#FFF]">
                            <p>How many stars are in the boxes ?</p>
                            <input type="text" class="w-20 h-10 rounded text-center" style="border: 2px solid #FFF; background:none;">
                            <img src="{{ url('/images/grids/typcn_tick.svg') }}" height="16" width="16" style="object-fit: cover;">
                        </div>
                        <!-- submit button -->
                        <div class="flex justify-center mt-10">
                            <button class="bg-[#FF0] text-black w-[30%] py-2 px-8 rounded-full font-bold" type="submit">Submit</button>
                        </div>
                    </div>
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
