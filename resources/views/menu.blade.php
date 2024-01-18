<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StdvGame - Menu Page</title>
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lekton' rel='stylesheet'>


    <script src="{{ asset('js/tailwind.js') }}"></script>
</head>
<body class="h-screen bg-cover bg-center" style="background-image: linear-gradient(to bottom, rgba(00, 0, 0, 1.2), rgba(0, 14, 0, 0.2)), url('/images/2b9a9cf39811e07faf0ff30005aaf766.png');">
    <div class="w-100 h-screen " >
        <nav class="h-[100px] flex items-center justify-between">
            <div class="flex items-center">
                <div class="h-10 w-10 mr-2 ml-20 bg-[url('/images/466292e1e5db889914591b2d89f61e44.png')] bg-cover border rounded-full border-white">
                    
                </div>
                <!-- <h1 class="text-white text-2xl">StdvGame</h1> -->
            </div>
            <ul class="flex">
                <li class="mr-4"><a href="{{ route('home') }}" class="text-white font-medium">Home</a></li>
                <li class="mr-4"><a href="{{ route('menu') }}" class="text-white font-medium underline decoration-4 decoration-yellow-500">Menu</a></li>
                <li class="mr-4 ml-10 animate-bounce"><a href="{{ route('menu') }}" class="bg-[#FF0] text-black px-4 py-2 rounded-full font-bold">Launch Game</a></li>
            </ul>
        </nav>
        <div class="container mx-auto flex h-[60%] text-white gap-x-4 gap-y-4">
            <div class="flex-grow w-[50%]">
                <div class="flex flex-col items-center justify-center h-[100%] gap-y-8">
                    <!-- <div class="content-container"> -->
                        <!-- <h1 style="line-height: 68px; font-family: 'Lekton'; font-size:64px;">Choose Your <strong>Hero</strong></h1> -->
                        <a href="{{ route('menu') }}" class="bg-[#FF0] flex text-black font-[900] justify-center w-[30%] py-2 rounded-full inline-flex items-center gap-x-2">
                            Launch <img src="{{ url('/images/icons8_Circled_Play.svg') }}" class="animate-bounce" height="16" width="24">
                        </a>
                        <a href="{{ route('menu') }}" class="border hover:bg-[#FF0] text-white hover:text-black hover:border-none flex justify-center font-[900] w-[30%] py-2 px-8 rounded-full">Leader Boards</a>
                        <a href="#" class="border hover:bg-[#FF0] text-white hover:text-black hover:border-none flex justify-center font-[900] w-[30%] py-2 px-8 rounded-full">About Game</a>
                        <a href="{{ route('home') }}" class="border hover:bg-[#FF0] flex text-white hover:text-black hover:border-none justify-center font-[900] w-[30%] py-2 px-8 rounded-full">Exit</a>
                    <!-- </div> -->
                </div>
            </div>
            <div class="flex-grow w-[50%]">
                <img src="{{url('/images/icons8_game_controller.png')}}" class="h-[100%] w-100 object-right" alt="Game Controller">
            </div>
        </div>
        
    </div>
</body>
</html>
