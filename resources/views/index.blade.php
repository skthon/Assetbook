<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body class="bg-gradient-to-r from-gray-500 to-gray-500">
    <header class="bg-gray-100 sticky top-0">
        <nav class="flex justify-between items-center w-[92%] mx-auto">
            <div class="m-4">
                <a href="/assets" class="flex justify-between items-center hover:text-gray-500">
                    <div class="inline-flex">
                        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 98.27" class="w-8 h-8 mr-2">
                            <title>photos</title>
                            <path d="M4.84,27.31H90.76a4.77,4.77,0,0,1,3.4,1.41,4.84,4.84,0,0,1,1.41,3.4V93.47a4.75,4.75,0,0,1-1.41,3.39,1.36,1.36,0,0,1-.25.22,4.67,4.67,0,0,1-3.18,1.19H4.81A4.81,4.81,0,0,1,0,93.47V32.12a4.77,4.77,0,0,1,1.41-3.4,4.83,4.83,0,0,1,3.4-1.41ZM32.15,0h85.92a4.77,4.77,0,0,1,3.4,1.41,4.84,4.84,0,0,1,1.41,3.4V66.16a4.75,4.75,0,0,1-1.41,3.39,1.09,1.09,0,0,1-.25.22A4.67,4.67,0,0,1,118,71h-5.38V65.22h4.51V5.71H33.06v4.2H27.31V4.81a4.77,4.77,0,0,1,1.41-3.4A4.84,4.84,0,0,1,32.12,0ZM18.5,13.66h85.92a4.75,4.75,0,0,1,3.39,1.41,4.8,4.8,0,0,1,1.41,3.39V79.81a4.77,4.77,0,0,1-1.41,3.4,1.4,1.4,0,0,1-.25.22,4.67,4.67,0,0,1-3.18,1.19H99V78.88h4.51V19.37H19.4v4.2H13.65V18.46a4.81,4.81,0,0,1,4.81-4.8ZM24.68,44a6.9,6.9,0,1,1-6.89,6.89A6.89,6.89,0,0,1,24.68,44Zm29,29.59L67.49,49.71,82.14,86.77H13.77V82.18l5.74-.29,5.75-14.08,2.87,10.06h8.62l7.47-19.25L53.7,73.56ZM89.86,33H5.75V92.53H89.86V33Z"/>
                        </svg>
                        <h1 class="text-2xl">Laravel Assetbook</h1>
                    </div>
                </a>
            </div>
            <div>
                <ul class="flex items-center gap-[4vw]">
                    <li><a href="#" class="hover:text-gray-500">All Images</a></li>
                    <li><a href="#" class="hover:text-gray-500">Videos</a></li>
                    <li><a href="#" class="hover:text-gray-500">Optimize</a></li>
                </ul>
            </div>
            <div class="w-2/5">
                <div class="relative">
                    <form class="mt-2 mb-2">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" class="w-full p-4 pl-10 pr-12 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-gray-500 focus:border-gray-500" placeholder="Search images..." required>
                        <button type="submit" class="text-white absolute right-2.5 top-2.5 bg-gray-500 font-medium rounded-lg text-sm px-4 py-2 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Search
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <div class=" grid md:grid-cols-4 lg:grid-cols-6 grid-cols-2 md:gap-8 gap-4 m-8 p-8">
        @foreach($files as $info)
            <div class="shadow-lg flex bg-white flex-col justify-between h-64 rounded-lg border-1 border-gray-100">
                <img class="rounded-lg object-scale-down mx-2 h-48" src="{{ asset($info['path']) }}" alt="" />
                <p class="text-center h-8 mx-2 truncate">{{ basename($info['path']) }}</p>
                <p class="text-center h-8 mx-2 truncate">({{ $info['size'] }} Kb)</p>
            </div>
          @endforeach
    </div>
</body>
</html>