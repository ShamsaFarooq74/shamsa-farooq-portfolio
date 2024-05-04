@extends('layouts.inc.app')
@section('content')
    <section class="pt-[100px] pb-[100px]"
        style="
          background: url(' {{ asset('img/services/brcm.jpg') }} ') no-repeat center
            center/cover;
        ">
        <div class="max-w-lg mx-auto text-center">
            <h1 class="text-5xl text-interface-100 font-semibold mb-2.5">
                Portolio
            </h1>
            <ul class="flex justify-center items-center space-x-2">
                <li class="text-lg font-medium text-interface-100">Home</li>
                <li>
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 7.5L14 12.5L10 17.5" stroke="#04091E" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                </li>
                <li class="text-lg font-medium text-interface-100">
                    Portolio Grid
                </li>
            </ul>
        </div>
    </section>
    <section class="lg:py-120 port-grid-two relative">
        <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8 relative z-10">
            <div class="max-w-2xl mx-auto mb-14 text-center">
                <h2 class="text-4xl leading-normal xl:text-5xl xl:leading-snug font-bold text-interface-100 mb-4">
                    Let’s Check my
                    <span class="relative"><span class="relative z-10">Best Works</span>
                        <svg class="absolute right-0 bottom-1" width="243" height="11" viewBox="0 0 243 11"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 7.22656C45.1729 4.20807 151.615 -0.017823 240 7.22656" stroke="#FFD233"
                                stroke-width="6" stroke-linecap="round"></path>
                        </svg>
                    </span>
                </h2>
                <p class="text-interface-200 text-xl mb-5">
                    E-commerce Website,Custom Web Application,Content Management System (CMS),API Integration,Booking and
                    Reservation System,
                    Social Media Application,API Development,
                </p>
            </div>

            <div class="grid grid-cols-1 gap-y-5 md:grid-cols-2 lg:grid-cols-3 md:gap-5 lg:gap-7">

                @foreach ($projects as $key => $project)
                    @if ($project->images)
                        <div class="relative group min-h-[370px] rounded-lg cursor-pointer overflow-hidden"
                            style="
            background: url('{{ asset('assets/uploads/place_images/' . $project->images) }}') no-repeat
              center center/cover;
          "
                            alt="not_img">
                    @endif
                    <div
                        class="bg-interface-100 bg-opacity-0 transition-opacity duration-500 ease-in-out absolute w-full h-full group-hover:bg-opacity-80 rounded-lg flex flex-col items-center justify-center">
                        <div
                            class="transform transition-transform duration-700 ease-in-out translate-y-24 opacity-0 invisible group-hover:visible group-hover:opacity-100 group-hover:translate-y-0 max-w-xs flex flex-col items-center justify-center text-center">
                            <h3 class="text-white">
                                <a href="{{ url('project-detail/' . $project->id) }}"
                                    class="text-3xl font-semibold text-white">{{ $project->title }}</a>
                            </h3>
                            <span class="flex items-center gap-2 text-white">
                                <span class="w-2 h-2 rounded-full inline-block bg-lime-500"></span>
                                {{ $project->tags }}</span>
                            <a href="{{ url('project-detail/' . $project->id) }}"
                                class="grid place-content-center transition mt-6 px-3 py-2 border border-lime-500 text-lime-500 text-sm rounded">View
                                Project
                            </a>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>

        <div class="flex justify-center mt-10">
            <a href="#"
                class="py-4 px-8 font-medium border-2 border-interface-200 rounded-lg text-interface-200 text-lg hover:border-transparent hover:text-white hover:bg-blue-500 transition-all">See
                More</a>
        </div>
        </div>
        <div class="hidden xl:block">
            <img src="{{ asset('img/portfolio-grid/circle.png') }}" class="absolute top-[60%] left-0" alt="">
            <img src="{{ asset('img/portfolio-grid/gr-circle.png') }}" class="absolute right-0 top-0" alt="">
        </div>
    </section>
@endsection
