@extends('layouts.inc.app')
@section('content')
    <section class="pt-[100px] pb-[100px]"
        style="
          background: url('{{ asset('/img/services/brcm.jpg') }}') no-repeat center
            center/cover;
        ">
        <div class="max-w-lg mx-auto text-center">
            <h1 class="text-5xl text-interface-100 font-semibold mb-2.5">
                Contact Me
            </h1>
            <ul class="flex justify-center items-center space-x-2">
                <li class="text-xl font-medium text-interface-100">Home</li>
                <li>
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 7.5L14 12.5L10 17.5" stroke="#04091E" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                </li>
                <li class="text-xl font-medium text-interface-100">Contact Me</li>
            </ul>
        </div>
    </section>
    <section class="pt-120">
        <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div
                class="grid lg:grid-cols-2 bg-[#F8FBFF] divide-y lg:divide-y-0 lg:divide-x divide-[#DFEAF9] border border-[#DFEAF9] shadow-customFive rounded-[15px]">

                <div class="flex flex-col md:flex-row  gap-6 py-14 px-20">
                    <div>
                        <img src="{{ asset('img/icons/ci-1.svg') }}" alt="">
                    </div>
                    <div class="grow">
                        <h4 class="text-2xl font-semibold text-interface-100">
                            Our Address
                        </h4>
                        <address class="text-lg text-interface-200 not-italic">
                            Lahore, Pakistan
                        </address>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row gap-6 py-14 px-20">
                    <div>
                        <img src="{{ asset('img/icons/ci-2.svg') }}" alt="">
                    </div>
                    <div class="grow">
                        <h4 class="text-2xl font-semibold text-interface-100">
                            Contact Info
                        </h4>
                        <p class="text-lg text-interface-200 not-italic">
                            Open a chat or give us call at <br>
                            <a href="tel:310 841 5500" class="font-bold text-interface-100">+923017309726</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 lg:py-120">
        <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="grid grid-cols-1 place-items-center lg:grid-cols-2 gap-10 xl:grid-cols-7">
                <div class="xl:col-span-3 w-full">
                    <div>
                        <h2
                            class="text-interface-500 font-bold text-4xl leading-normal xl:text-5xl capitalize xl:leading-snug">
                            Have any
                            <span class="relative">
                                <span class="relative z-20">Thought.</span>
                                <svg class="absolute -left-4 md:-left-1 z-0 top-0" width="204" height="61"
                                    viewBox="0 0 204 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M30.2354 3.79049C69.1075 3.09921 152.664 7.57177 186.934 20.378C223.844 34.1708 176.864 51.5472 126.365 56.3301C74.1181 61.2786 16.807 52.8912 6.47632 39.1849C-10.9639 16.046 64.0926 1.83083 122.121 3.36689"
                                        stroke="#DAED1A" stroke-width="6" stroke-linecap="round"></path>
                                </svg>
                            </span>
                            Find here
                        </h2>
                    </div>

                    <div class="flex flex-col">
                        <div class="border-b border-interface-200 py-8">
                          <div class="flex justify-between items-center cursor-pointer accordion-header" data-te-collapse-init data-te-target="#collapseOne">
                            <h3 class="text-2xl font-medium">
                              <span class="inline-block accordion-number mr-4">01</span>
                              Get a project overview
                            </h3>
                            <span class="accordion-icon">
                              <svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7.5 8L14 1" stroke="#04091E" stroke-width="1.5" stroke-linejoin="round"></path>
                              </svg>
                            </span>
                          </div>

                          <div class="hidden accordion-body pl-5" id="collapseOne" data-te-collapse-item>
                            <div class="px-4 py-2">
                              <p class="text-interface-100 text-xl mb-3">
                                Responsive Web App Development,Custom Web Application,Content Management System (CMS),
                                API Integration,Booking and Reservation System,Web App Backend Development,
                                Single-Page Applications (SPA),API Development,
                              </p>
                            </div>
                          </div>
                        </div>

                        <div class="border-b border-interface-200 py-8">
                          <div class="flex gap-5 justify-between items-center cursor-pointer accordion-header" data-te-collapse-init data-te-target="#collapseTwo">
                            <h3 class="text-2xl font-medium">
                              <span class="inline-block accordion-number mr-4">02</span>
                              Task monitoring at a glance
                            </h3>
                            <span class="accordion-icon">
                              <svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7.5 8L14 1" stroke="#04091E" stroke-width="1.5" stroke-linejoin="round"></path>
                              </svg>
                            </span>
                          </div>
                          <div class="hidden accordion-body pl-5" id="collapseTwo" data-te-collapse-item>
                            <div class="px-4 py-2">
                              <p class="text-interface-100 text-xl mb-3">
                                Developed a task monitoring dashboard using Laravel and PHP that provides a comprehensive overview of ongoing tasks and project progress.
                                Implemented real-time data updates and visualizations to give stakeholders a quick and intuitive snapshot of task statuses and key metrics
                              </p>
                            </div>
                          </div>
                        </div>

                        <div class="border-b border-interface-200 py-8">
                          <div class="flex gap-5 justify-between items-center cursor-pointer accordion-header" data-te-collapse-init data-te-target="#collapseThree">
                            <h3 class="text-2xl font-medium">
                              <span class="inline-block accordion-number mr-4">03</span>
                              Weekly Project
                            </h3>
                            <span class="accordion-icon">
                              <svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7.5 8L14 1" stroke="#04091E" stroke-width="1.5" stroke-linejoin="round"></path>
                              </svg>
                            </span>
                          </div>
                          <div class="hidden accordion-body pl-5" id="collapseThree" data-te-collapse-item>
                            <div class="px-4 py-2">
                              <p class="text-interface-100 text-xl mb-3">
                                Integrated task assignment and collaboration features, enabling team members to collaborate, communicate, and track progress in real-time.
                                Designed a centralized dashboard that provides a comprehensive view of ongoing projects, upcoming deadlines, and task statuses for effective project monitoring
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>

                </div>
                <div class="xl:col-span-4 w-full">

                    <div class="px-8 py-10 bg-[#F0F4FC] rounded-lg"
                        style="
                  background: url('{{ asset('img/services/contact-form-bg-shape.jpg') }}')
                    no-repeat center center/cover;
                ">
                        <form method="post" action="{{route('customer.store')}}">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-7 gap-y-5">
                                <div>
                                    <label for="fname"
                                        class="block mb-2 text-base font-medium text-interface-200">First Name</label>
                                    <input type="text" placeholder="Max"
                                       name="fname" class="px-4 py-2.5 bg-white rounded-lg border-0 w-full placeholder:text-interface-200 placeholder:text-sm">
                                       @if ($errors->has('fname'))
                                       <div class="text-red-500">
                                           {{ $errors->first('fname') }}
                                       </div>
                                   @endif
                                    </div>
                                <div>
                                    <label for="lname" class="block mb-2 text-base font-medium text-interface-200">Last
                                        Name</label>
                                    <input type="text" placeholder="Mustermann"
                                       name="lname" class="px-4 py-2.5 bg-white rounded-lg border-0 w-full placeholder:text-interface-200 placeholder:text-sm">
                                        @if ($errors->has('lname'))
                                        <div class="text-red-500">
                                            {{ $errors->first('lname') }}
                                        </div>
                                    @endif
                                    </div>
                                <div>
                                    <label for="email"
                                        class="block mb-2 text-base font-medium text-interface-200">Email</label>
                                    <input type="text" placeholder="max.mustermann@mail.de"
                                       name="email" class="px-4 py-2.5 bg-white rounded-lg border-0 w-full placeholder:text-interface-200 placeholder:text-sm">
                                       @if ($errors->has('email'))
                                       <div class="text-red-500">
                                           {{ $errors->first('email') }}
                                       </div>
                                   @endif
                                    </div>
                                <div>
                                    <label for="telephone"
                                        class="block mb-2 text-base font-medium text-interface-200">Telephone</label>
                                    <input type="text" placeholder="+49 123456789"
                                      name="telephone"  class="px-4 py-2.5 bg-white rounded-lg border-0 w-full placeholder:text-interface-200 placeholder:text-sm">
                                        @if ($errors->has('telephone'))
                                        <div class="text-red-500">
                                            {{ $errors->first('telephone') }}
                                        </div>
                                    @endif
                                    </div>
                                <div class="md:col-span-2">
                                    <label for="description"
                                        class="block mb-2 text-base font-medium text-interface-200">Description</label>
                                    <textarea type="text"name="description" placeholder="Hier text ainfugen"
                                      class="px-4 py-2.5 bg-white rounded-lg border-0 w-full placeholder:text-interface-200 placeholder:text-sm resize-none h-40">                      </textarea>
                                        @if ($errors->has('description'))
                                        <div class="text-red-500">
                                            {{ $errors->first('description') }}
                                        </div>
                                    @endif
                                    </div>
                            </div>
                            <div class="mt-8 flex justify-end">
                                <button
                                   type="submit" class="py-4 px-6 rounded-lg bg-blue-500 text-white font-medium text-lg transition-all hover:bg-blue-600">
                                    Send Now
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="lg:py-120 py-20 relative overflow-hidden"
        style="
          background: url('{{ asset('img/testimonial-n-bg.jpg') }}') no-repeat
            center center/cover;
        ">
        <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">

            <div>
                <div class="max-w-lg mx-auto text-center mb-10">
                    <h3 class="text-2xl text-interface font-semibold">
                        Take care of more than 100K customers
                    </h3>
                </div>
                <img src="{{ asset('img/big-el.png') }}" class="absolute hidden xl:block right-0 -bottom-10"
                    alt="">
    </section>
    <section class="mt-10 mx-auto container">
        <div class="max-w-md mx-auto rounded-xl shadow-md overflow-hidden md:max-w-7xl py-120"></div>
        <div class="max-w-2xl mx-auto text-center mb-10">
            <h4 class="text-lime-500 text-lg font-medium uppercase mb-2">
                CUSTOMER REVIEWS
            </h4>
            <h2 class="font-bold lg:text-5xl text-4xl">
                What’s Our Customer Say
            </h2>
        </div>
        <div class="md:flex">
            <div class="shadow-custom rounded-lg p-7 relative">
                <ul class="flex space-x-2 mb-6">
                    <li class="text-yellow-500">
                        <i class="fa-solid fa-star"></i>
                    </li>
                    <li class="text-yellow-500">
                        <i class="fa-solid fa-star"></i>
                    </li>
                    <li class="text-yellow-500">
                        <i class="fa-solid fa-star"></i>
                    </li>
                    <li class="text-yellow-500">
                        <i class="fa-solid fa-star"></i>
                    </li>
                    <li class="text-yellow-500">
                        <i class="fa-solid fa-star"></i>
                    </li>
                </ul>
                <q class="pb-8 block text-xl text-gray-500 italic">
                    I just want to thank you for the exceptional website that you created for us Your pricing is fair, your
                    work is superb and the customer service is excellent and to top it off you guys are extremely fast!
                </q>
                <div class="flex space-x-4">
                    <img src="http://sayedbilal.com.test/img/av-10.png" alt="">
                    <div>
                        <h4 class="font-semibold text-xl">
                            Esthar Howard
                        </h4>
                        <span class="text-gray-500 text-base">Travel Agent
                        </span>
                    </div>
                </div>
                <span class="absolute bottom-7 right-7">
                    <svg width="153" height="108" viewBox="0 0 153 108" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M31.9637 67.8045C32.2719 71.1359 32.0362 80.1919 23.3608 92.7849C22.7045 93.7351 22.8236 95.0168 23.6385 95.8315C27.1755 99.3685 29.3654 101.6 30.9013 103.162C32.921 105.222 33.843 106.16 35.1926 107.383C36.0936 108.193 37.457 108.207 38.3676 107.413C53.4889 94.2556 70.2842 67.0667 67.8539 33.7564C66.4297 14.197 52.1628 0.000146351 33.9317 0.000147945C15.2223 0.00014958 0.000510688 15.2195 0.000512323 33.9292C0.000513901 51.9781 14.1668 66.7796 31.9637 67.8045ZM33.9317 4.78144C49.5879 4.78144 61.8469 17.1129 63.0864 34.1018C63.0864 34.1018 63.0864 34.1018 63.0864 34.1042C65.8204 71.5678 43.5505 95.9016 36.822 102.345C36.166 101.698 35.4166 100.937 34.3123 99.8122C32.9817 98.4581 31.1605 96.6044 28.4057 93.8401C38.9373 77.6145 36.9504 66.0536 36.0797 64.3959C35.6664 63.6091 34.8189 63.0791 33.9317 63.0791C17.8579 63.0791 4.78181 50.003 4.78181 33.9292C4.78181 17.8576 17.8579 4.78145 33.9317 4.78144Z"
                            fill="#f7f8fa"></path>
                        <path
                            d="M116.868 67.8041C117.179 71.1261 116.95 80.1752 108.265 92.7845C107.611 93.7348 107.728 95.0164 108.543 95.8311C112.073 99.3612 114.26 101.591 115.794 103.152C117.821 105.216 118.745 106.157 120.094 107.383C120.996 108.193 122.359 108.205 123.27 107.416C138.391 94.2576 155.189 67.0733 152.763 33.756L152.763 33.7536C151.334 14.1966 137.065 -0.000250377 118.834 -0.000248783C100.124 -0.000247148 84.9024 15.2191 84.9024 33.9288C84.9024 51.9799 99.069 66.7838 116.868 67.8041ZM118.834 4.78105C134.487 4.78105 146.754 17.1125 147.996 34.1038L147.996 34.1014C150.722 71.5744 128.452 95.9036 121.724 102.345C121.066 101.698 120.314 100.932 119.207 99.8046C117.879 98.4506 116.06 96.5992 113.31 93.8397C123.842 77.6117 121.855 66.0532 120.984 64.3979C120.571 63.6111 119.721 63.0787 118.834 63.0787C102.76 63.0787 89.6837 50.0026 89.6837 33.9288C89.6837 17.8572 102.76 4.78106 118.834 4.78105Z"
                            fill="#f7f8fa"></path>
                    </svg>
                </span>
            </div>
            <div class="shadow-custom rounded-lg p-7 relative">
                <ul class="flex space-x-2 mb-6">
                    <li class="text-yellow-500">
                        <i class="fa-solid fa-star"></i>
                    </li>
                    <li class="text-yellow-500">
                        <i class="fa-solid fa-star"></i>
                    </li>
                    <li class="text-yellow-500">
                        <i class="fa-solid fa-star"></i>
                    </li>
                    <li class="text-yellow-500">
                        <i class="fa-solid fa-star"></i>
                    </li>
                    <li class="text-yellow-500">
                        <i class="fa-solid fa-star"></i>
                    </li>
                </ul>
                <q class="pb-8 block text-xl text-gray-500 italic">
                    thank you so much for all your help. Since we launched the website we had more than 400 hundred people
                    registering for our event. I look forward to working with you guys again on a new project.
                </q>
                <div class="flex space-x-4">
                    <img src="http://sayedbilal.com.test/img/av-4.png" alt="">
                    <div>
                        <h4 class="font-semibold text-xl">
                            Hugo Boss
                        </h4>
                        <span class="text-gray-500 text-base">Travel Agent
                        </span>
                    </div>
                </div>
                <span class="absolute bottom-7 right-7">
                    <svg width="153" height="108" viewBox="0 0 153 108" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M31.9637 67.8045C32.2719 71.1359 32.0362 80.1919 23.3608 92.7849C22.7045 93.7351 22.8236 95.0168 23.6385 95.8315C27.1755 99.3685 29.3654 101.6 30.9013 103.162C32.921 105.222 33.843 106.16 35.1926 107.383C36.0936 108.193 37.457 108.207 38.3676 107.413C53.4889 94.2556 70.2842 67.0667 67.8539 33.7564C66.4297 14.197 52.1628 0.000146351 33.9317 0.000147945C15.2223 0.00014958 0.000510688 15.2195 0.000512323 33.9292C0.000513901 51.9781 14.1668 66.7796 31.9637 67.8045ZM33.9317 4.78144C49.5879 4.78144 61.8469 17.1129 63.0864 34.1018C63.0864 34.1018 63.0864 34.1018 63.0864 34.1042C65.8204 71.5678 43.5505 95.9016 36.822 102.345C36.166 101.698 35.4166 100.937 34.3123 99.8122C32.9817 98.4581 31.1605 96.6044 28.4057 93.8401C38.9373 77.6145 36.9504 66.0536 36.0797 64.3959C35.6664 63.6091 34.8189 63.0791 33.9317 63.0791C17.8579 63.0791 4.78181 50.003 4.78181 33.9292C4.78181 17.8576 17.8579 4.78145 33.9317 4.78144Z"
                            fill="#f7f8fa"></path>
                        <path
                            d="M116.868 67.8041C117.179 71.1261 116.95 80.1752 108.265 92.7845C107.611 93.7348 107.728 95.0164 108.543 95.8311C112.073 99.3612 114.26 101.591 115.794 103.152C117.821 105.216 118.745 106.157 120.094 107.383C120.996 108.193 122.359 108.205 123.27 107.416C138.391 94.2576 155.189 67.0733 152.763 33.756L152.763 33.7536C151.334 14.1966 137.065 -0.000250377 118.834 -0.000248783C100.124 -0.000247148 84.9024 15.2191 84.9024 33.9288C84.9024 51.9799 99.069 66.7838 116.868 67.8041ZM118.834 4.78105C134.487 4.78105 146.754 17.1125 147.996 34.1038L147.996 34.1014C150.722 71.5744 128.452 95.9036 121.724 102.345C121.066 101.698 120.314 100.932 119.207 99.8046C117.879 98.4506 116.06 96.5992 113.31 93.8397C123.842 77.6117 121.855 66.0532 120.984 64.3979C120.571 63.6111 119.721 63.0787 118.834 63.0787C102.76 63.0787 89.6837 50.0026 89.6837 33.9288C89.6837 17.8572 102.76 4.78106 118.834 4.78105Z"
                            fill="#f7f8fa"></path>
                    </svg>
                </span>
            </div>
        </div>
        </div>
    </section>
    <section class="py-20"
        style="
          background: url('{{ asset('img/services/cta-pm-1.jpg') }} ') no-repeat center
            center/cover;
        ">
        <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="flex flex-col gap-5 xl:gap-10 lg:flex-row justify-between">
                <div class="xl:w-5/12">
                    <h2 class="text-4xl leading-normal xl:text-5xl xl:leading-tight font-bold text-white">
                        Hire me <br>
                        as a software developer great skills elite.
                    </h2>
                </div>
                <div class="xl:w-5/12">
                    <div class="max-w-lg">
                        <p class="text-xl xl:text-2xl text-white mb-8">
                            I am software developer, who are excited about unique ideas and
                            help.
                        </p>
                        <a href="{{url('/contact') }}"
                            class="bg-blue-500 group inline-flex gap-1 items-center justify-center py-4 px-7 rounded-xl text-white text-lg transition-all hover:bg-blue-600">
                            <span>Download CV</span>
                            <svg class="transform transition  group-hover:translate-y-2" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.0008 3.5625C11.7939 3.56255 11.5955 3.64474 11.4493 3.79101C11.303 3.93728 11.2208 4.13565 11.2208 4.3425V13.2409L8.23783 10.2579C8.16539 10.1855 8.07939 10.1281 7.98475 10.0889C7.89011 10.0497 7.78867 10.0295 7.68623 10.0295C7.47935 10.0295 7.28095 10.1117 7.13467 10.258C6.9884 10.4043 6.90623 10.6027 6.90625 10.8096C6.90627 11.0165 6.98847 11.2149 7.13477 11.3612L11.4491 15.675C11.5955 15.8212 11.7939 15.9034 12.0008 15.9034C12.2076 15.9034 12.4061 15.8212 12.5524 15.675L16.8668 11.3604C17.0131 11.2142 17.0953 11.0158 17.0953 10.8089C17.0953 10.602 17.0131 10.4036 16.8669 10.2573C16.7206 10.111 16.5222 10.0288 16.3153 10.0288C16.1084 10.0287 15.91 10.1109 15.7637 10.2572L12.7808 13.2409V4.3425C12.7807 4.13565 12.6985 3.93728 12.5523 3.79101C12.406 3.64474 12.2076 3.56255 12.0008 3.5625Z"
                                    fill="white"></path>
                                <path
                                    d="M4.3425 13.876C4.13563 13.876 3.93723 13.9582 3.79096 14.1044C3.64468 14.2507 3.5625 14.4491 3.5625 14.656V17.2262C3.56344 18.0776 3.90208 18.8939 4.50411 19.4959C5.10615 20.098 5.92241 20.4366 6.77381 20.4375H17.2262C18.0776 20.4366 18.8939 20.098 19.4959 19.4959C20.0979 18.8939 20.4366 18.0776 20.4375 17.2262V14.656C20.4375 14.5535 20.4173 14.4521 20.3781 14.3575C20.3389 14.2628 20.2815 14.1769 20.209 14.1044C20.1366 14.032 20.0506 13.9746 19.956 13.9354C19.8614 13.8962 19.7599 13.876 19.6575 13.876C19.5551 13.876 19.4536 13.8962 19.359 13.9354C19.2644 13.9746 19.1784 14.032 19.106 14.1044C19.0335 14.1769 18.9761 14.2628 18.9369 14.3575C18.8977 14.4521 18.8775 14.5535 18.8775 14.656V17.2262C18.877 17.664 18.7029 18.0838 18.3933 18.3933C18.0837 18.7029 17.664 18.877 17.2262 18.8775H6.77381C6.33601 18.877 5.91628 18.7029 5.60671 18.3933C5.29713 18.0838 5.123 17.664 5.1225 17.2262V14.656C5.12252 14.5535 5.10237 14.4521 5.06318 14.3575C5.02399 14.2628 4.96653 14.1768 4.8941 14.1044C4.82166 14.0319 4.73567 13.9745 4.64102 13.9353C4.54638 13.8961 4.44494 13.876 4.3425 13.876Z"
                                    fill="white"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        const accordionButtons = document.querySelectorAll('[data-te-collapse-init]');


        accordionButtons.forEach((button) => {
          button.addEventListener('click', () => {

            const target = button.dataset.teTarget;
            const accordionBody = document.querySelector(target);
            accordionBody.classList.toggle('hidden');


            const isExpanded = button.getAttribute('aria-expanded') === 'true';
            button.setAttribute('aria-expanded', !isExpanded);


            const icon = button.querySelector('svg');
            icon.classList.toggle('rotate-[-180deg]');


            const collapsedIcon = button.querySelector('.group-[data-te-collapse-collapsed] svg');
            collapsedIcon.classList.toggle('fill-[#212529]');
          });
        });

        </script>
@endsection
