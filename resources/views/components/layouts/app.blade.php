<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
        <body>
            <div class="flex flex-col bg-slate-100 w-screen h-screen">
                <div class="p-3 text-xl text-slate-800 bg-white w-full ">
                    <div class="w-full">
                        <div>
                            Laravel
                        </div>

                    </div>
                </div>
                <div class="w-full h-full mt-2 flex " id="main">
                    <div class=" h-full w-56 border-slate-200  bg-white border-2 rounded">
                        <div class="p-6 text-xl">
                            Dashboard
                        </div>
                        <div class="px-6 w-full">
                            <div class="" id="sub">
                                <div class="text-base">
                                    Home
                                </div>
                                <div class="font-thin ml-3 mt-2 flex gap-x-2 h-10">
                                    <div class="flex flex-col  border-l-sky-600  text-sky-800  py-1 rounded-r-lg" id="subMenu">
                                        <div class=" border-l-2 py-1 px-2 border-b">
                                            <div class="">
                                                Base
                                            </div>
                                        </div>
                                        <div class="border-l-2 py-1 px-2 border-b">
                                            Base
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div>
                        {{ $slot }}
                    </div>

                </div>
            </div>
        </body>
</html>
