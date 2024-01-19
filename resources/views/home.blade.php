<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StdvGame - Home Page</title>
    <link href="{{ url('css/tailwind.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lekton' rel='stylesheet'>


    <script src="{{ url('js/tailwind.js') }}"></script>
</head>
<body class="h-screen">
    
    <div class="w-100 h-screen bg-cover bg-center" style="background-image: linear-gradient(90deg, rgba(0,0,0,0.7287289915966386) 0%, rgba(0,0,0,0.7259278711484594) 35%, rgba(0,0,0,0.7343312324929971) 100%), url('/images/1172c22161aceb547050546ff5b59d47.png');">
        <nav class="h-[100px] bg-black flex items-center justify-between">
            <div class="flex items-center">
                <div class="h-10 w-10 mr-2 ml-20 bg-[url('/images/466292e1e5db889914591b2d89f61e44.png')] bg-cover border rounded-full border-white">
                    
                </div>
                <!-- <h1 class="text-white text-2xl">StdvGame</h1> -->
            </div>
            <ul class="flex">
                <li class="mr-4"><a href="#" class="text-white font-medium underline decoration-4 decoration-yellow-500">Home</a></li>
                <li class="mr-4"><a href="#" class="text-white font-medium">Games</a></li>
                <li class="mr-4 ml-10"><a href="{{ route('grid') }}" class="bg-[#FF0] text-black px-4 py-2 rounded-full font-medium">Launch Game</a></li>
            </ul>
        </nav>
        <div class="container mx-auto flex flex-col items-center justify-center h-[60%] text-white gap-y-20">
            <div class="content-container">
                <h1 style="line-height: 68px; font-family: 'Lekton'; font-size:64px;">Unlock Your <strong>Heroic</strong> Journey & <strong>Play</strong></h1>
            </div>
            <div class="content-container animate-bounce">
                <a href="{{ route('menu') }}" class="bg-[#FF0] text-black font-[900] py-4 px-8 rounded-full">Launch Game >></a>
            </div>
        </div>
        
    </div>
</body>
</html>
