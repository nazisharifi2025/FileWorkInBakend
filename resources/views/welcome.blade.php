<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('subview.Navbar')
    <div class="h-screen w-full bg-no-repeat bg-fixed bg-center bg-cover bg-[url('img1.webp')]">
        <div class="h-full w-full  overflow-y-scroll bg-black/80">
            <div class="w-[50%] h-full py-40 mx-auto  justify-end items-center flex-col">
                <h1 class="text-8xl font-mono font-bold text-center text-white ">Music for Everyone</h1>
                <p class="text-gray-400 text-center my-6 w-[80%] mx-auto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex voluptatem eum aut quaerat natus laudantium aperiam libero quae expedita molestias ipsam dolores consequatur, corrupti hic a doloremque id tempora nulla.</p>
                <div class="w-full  flex justify-center items-center">
                <button class="bg-white px-6 py-3 text-gray-700 font-serif mx-auto w-fit">Book Now</button>
            </div>
            <!-- div 1 endded -->
            </div>
            <div class="w-full  h-screen p-12 flex flex-col">
                <h1 class="text-5xl font-bold text-white w-[80%] mx-auto my-12">Music Chart</h1>
                <div class="w-[80%] bg-black/90  flex-col flex gap-2 mx-auto">
                    <div class=" border-b border-gray-400 p-4 w-full flex justify-between items-center">
                        <div class="flex gap-3 justify-center items-center px-6 text-white">
                            <p class=" text-5xl font-bold font-serif">1.</p>
                            <img src="17.jpg.webp" class="h-20 w-20" alt="">
                            <h3 class="text-4xl "><i class="fa-solid fa-play text-2xl px-2 py-1.5 text-center rounded-full border-2 "></i> Aron Afshar</h3>
                        </div>
                        <button class="text-gray-800 bg-white  h-fit w-fit px-6 py-3 hover:shadow-md shadow-gray-500 font-serif"><a href="{{}}">Donlowd</a></button>
                    </div>
                </div>
             </div>
        </div>
    </div>
</body>
</html>