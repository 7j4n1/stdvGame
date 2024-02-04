<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StdvGame - Mission 6</title>
    <link href="{{ url('css/tailwind.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lekton' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>


    <script src="{{ url('js/tailwind.js') }}"></script>
</head>
<style>
    body {
        background-image: linear-gradient(90deg, rgba(0,0,0,0.7287289915966386) 0%, rgba(0,0,0,0.7259278711484594) 35%, rgba(0,0,0,0.7343312324929971) 100%), url('/images/block.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .yellow {
        background-color: #FF0 !important;
        color: #000 !important;
    }

    .disabled {
        background-color: #131313 !important;
        color: #FFF !important;
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
                                @if ($key == 3)
                                    <div class=" rounded h-8 w-8 flex items-center justify-center" style="border: 2px solid #9237E3">
                                        <img src="{{ url('/images/grids/typcn_tick.svg') }}" height="16" width="16" style="object-fit: cover;">
                                    </div>
                                @else
                                    <div class="bg-[#D9D9D9] rounded h-8 w-8 flex items-center justify-center" style="border: 2px solid #9237E3">
                                        <img src="{{ url('/images/block.jpg') }}" height="16" width="16" style="object-fit: cover;">
                                    </div>
                                @endif
                                
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>


            <div class="w-[40%] mr-auto"  style="border: 2px solid #9237E3; background:none;">
                <div class="flex h-[100%]">
                    <!-- Generate a large div box container without any content -->
                    <form action="{{ route('grid7') }}" method="post" class="w-[100%] h-[100%] flex items-center justify-center">
                        @csrf
                        <div class="space-x-5" style="width: 100%; ">
                            <input type="hidden" name="Shapes" value="{{ json_encode($Shapes) }}">
                            <input type="hidden" name="shapesNumber" value="{{ json_encode($shapesNumber) }}">
                            <input type="hidden" name="meanDiff" value="{{ $meanDiff }}">
                            <input type="hidden" name="mean" value="{{ $mean }}">
                            <input type="hidden" name="sqrDiff" value="{{ $sqrDiff }}">
                            <!--  a Strong Bold text -->
                            <div class="text-3xl font-bold text-center mt-2 text-[#FFFF00]">Mission 6</div>
                            <!--  a normal text -->
                            <div class="text-xl text-center mt-2 text-[#FFF]">The variance, is how much an individual value differ from the mean.</div>
                            <div class="text-l text-center mt-2 text-[#FFF]">Now find the average of the squared differences to get our variance. </div>
                            <!-- 4 normal text with an inline textboxes and small inline images on each row-->
                            <div class="inline-flex items-center space-x-3 text-xl text-center justify-center mt-2 ml-10 text-[#FFF]">
                                <h1 style="font-family: 'Nunito Sans'; font-size: 36px; line-height: 65.47px;">Variance</h1>
                                <h1 style="font-family: 'Nunito Sans'; font-size: 48px; line-height: 65.47px;">=</h1>
                                <input type="text" id="totalSqrDiff" name="totalSqrDiff" class="w-40 h-10 rounded text-center" value="{{ $totalSqrDiff }}" style="border: 2px solid #FFF; background:none;" disabled>
                                
                            </div>
                            <div class="inline-flex items-center space-x-3 text-xl text-center mt-1 justify-center ml-10 text-[#FFF]">
                                <label class="w-20  rounded text-center" ></label>
                                <label class="w-20  rounded text-center" ></label>
                                <h1 style="font-family: 'Nunito Sans'; font-size: 48px; line-height: 65.47px;margin-top: -67px;">______</h1>
                            </div>
                            <div class="inline-flex items-center space-x-3 text-xl text-center justify-center mt-2 ml-10 text-[#FFF]">
                                <label class="w-20 rounded text-center" ></label>
                                <label class="w-20 rounded text-center" ></label>
                                <label class="w-40 h-10 rounded text-center" style="border: 2px solid #FFF;">4</label>
                            </div>
                            <div class="inline-flex items-center space-x-3 text-xl text-center justify-center mt-2 ml-10 text-[#FFF]">
                                <h1 style="font-family: 'Nunito Sans'; font-size: 48px; line-height: 65.47px;">Final Answer</h1>
                                <h1 style="font-family: 'Nunito Sans'; font-size: 48px; line-height: 65.47px;">=</h1>
                                <input type="text" id="variance" name="variance" class="w-40 h-10 rounded text-center" value="" style="border: 2px solid #FFF; background:none;">
                                <img src="{{ url('/images/grids/typcn_tick.svg') }}" id="squareImg" height="16" width="16" style="object-fit: cover;">
                                <img src="{{ url('/images/grids/miss.svg') }}" id="squareImg2" height="16" width="16" style="object-fit: cover;">
                            </div>
                            <!-- submit button -->
                            <div class="inline-flex items-center justify-center mt-10 mb-5 w-[100%]">
                                <button class="yellow text-black w-[30%] py-2 px-8 rounded-full font-bold" id="btnSubmit" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
    <!-- generate a modal box with opaque background -->
    <div class="fixed z-10 inset-0 overflow-y-auto hidden" id="modal">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
        
            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        
            <div class="inline-block text-center align-bottom bg-[#131313] rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle h-[50%]">
                <div class="bg-[#131313] px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <!-- <div class="sm:flex sm:items-start"> -->
                        <!-- <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left"> -->
                            <!-- image -->
                            <img src="{{ url('/images/grids/timeup.svg') }}" class="h-[50px] w-[50px] mx-auto mb-5" alt="Sad">
                            <h3 class="text-2xl leading-6 font-medium text-[#FF0]" id="modalTitle">
                                TIME UP!!!!
                            </h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">
                                    You ran out of time, please try again.
                                </p>
                                <p class="text-sm text-gray-500">
                                    Kindly remember that you have only 80 seconds to complete each mission.
                                </p>
                            </div>

                        <!-- </div> -->
                    <!-- </div> -->
                </div>
                <div class="bg-[#131313] px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse align-center">
                    <!-- <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-[#FF0] text-base font-medium text-black hover:bg-[#FF0] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FF0] sm:ml-3 sm:w-auto sm:text-sm">
                        Launch Game
                    </button> -->
                    <a href="{{ route('grid') }}" class="w-fit inline-flex justify-center items-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-[#FF0] text-base font-medium text-black hover:bg-[#FF0] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FF0] sm:ml-3 sm:w-auto sm:text-sm">Try Again</a>
                    <a href="{{ route('menu') }}" class="mt-3 w-[30px] inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-[#FF0] text-base font-medium text-black hover:bg-[#FF0] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FF0] sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Exit</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // By defaukt the submit button is disabled
        document.getElementById("btnSubmit").disabled = true;
        // apply tailwindcss class to the submit button when disabled to change the background color
        document.getElementById("btnSubmit").classList.add("disabled");
        document.getElementById("btnSubmit").classList.remove("yellow");


        // // By default the tick images are hidden
        document.getElementById("squareImg").style.display = "none";

        document.getElementById("squareImg2").style.display = "none";

        // Get the input field
        var totalSqrDiff = <?php echo $totalSqrDiff; ?>;

        var variance = document.getElementById("variance");
        // input focus on the mean input field
        variance.focus();

        var varSum = totalSqrDiff / 4;


        console.log("Variance: " + varSum);

        // When all the input fields are filled and the values were correct, enable the submit button
        variance.addEventListener("input", function(){
            // console.log(mean.value == total_mean);
            if (this.value == varSum) {
                document.getElementById("squareImg").style.display = "inline-flex";
                document.getElementById("squareImg2").style.display = "none";

                //apply tailwindcss class to the submit button when enabled to change the background color
                document.getElementById("btnSubmit").classList.add("yellow");
                document.getElementById("btnSubmit").classList.remove("disabled");
                document.getElementById("btnSubmit").disabled = false;
            }else {
                document.getElementById("squareImg2").style.display = "inline-flex";
                document.getElementById("squareImg").style.display = "none";

                document.getElementById("btnSubmit").disabled = true;
                // apply tailwindcss class to the submit button when disabled to change the background color
                document.getElementById("btnSubmit").classList.add("disabled");
                document.getElementById("btnSubmit").classList.remove("yellow");
            }

        });
        


        var counter = 80;
        var interval = setInterval(function() {
            counter--;
            // Display 'counter' wherever you want to display it.
            document.getElementById("ctTimer").innerHTML = counter;
            if (counter <= 0) {
                // Display a modal box
                document.getElementById("modal").classList.remove("hidden");
                clearInterval(interval);
            }
        }, 1000);
    </script>
</body>
</html>
