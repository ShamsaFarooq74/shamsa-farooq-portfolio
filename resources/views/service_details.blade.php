@extends('layouts.inc.app')
@section('content')
    <section class="pt-[100px] pb-[100px]"
        style="
          background: url('{{ asset('img/services/brcm.jpg') }}') no-repeat center
            center/cover;
        ">
        <div class="max-w-lg mx-auto text-center">
            <h1 class="text-5xl text-interface-100 font-semibold mb-2.5">
                Services Details
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
                    Services Details
                </li>
            </ul>
        </div>
    </section>

    <section class="lg:pt-120">
        <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div>
                <div class="pb-5 border-b border-b-interface-200">
                    @if ($serviceDetail->images)
                        <img src="{{ asset('assets/uploads/place_images/' . $serviceDetail->images) }}"
                            class="rounded-lg w-full h-96" alt="">
                    @endif
                    <div class="flex flex-col md:flex-row justify-between mt-10">
                        <div>
                            <h4 class="text-lg font-medium text-interface-500">
                                Crated by Fallow
                            </h4>
                            <span>20 Jan. 2023</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <span class="text-lg font-medium text-interface-500">Share this Service</span>
                            <div class="flex space-x-3">
                                <a href="https://wa.me/+923017309726"
                                    class="text-white bg-gray-800 hover:bg-blue-500 transition-all text-lg w-10 h-10 rounded-full inline-flex justify-center items-center"
                                    target="_blank" rel="noopener noreferrer">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>
                                <a href="https://github.com/ShamsaFarooq74"
                                    class="text-white bg-gray-800 hover:bg-blue-500 transition-all text-lg w-10 h-10 rounded-full inline-flex justify-center items-center"
                                    target="_blank" rel="noopener noreferrer">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                                <a href="https://stackoverflow.com/users/9432459/sayed-bilal-hussain"
                                    class="text-white bg-gray-800 hover:bg-blue-500 transition-all text-lg w-10 h-10 rounded-full inline-flex justify-center items-center"
                                    target="_blank" rel="noopener noreferrer">
                                    <i class="fa-brands fa-stack-overflow"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/shamsa-farooq-3b9741225/"
                                    class="text-white bg-gray-800 hover:bg-blue-500 transition-all text-lg w-10 h-10 rounded-full inline-flex justify-center items-center"
                                    target="_blank" rel="noopener noreferrer">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-10">
                    <h3 class="text-2xl font-semibold mb-5">
                        {{ $serviceDetail->title }}
                    </h3>
                    <p class="text-lg text-interface-200 mb-5">
                        {{ $serviceDetail->description }}
                    </p>

                    {{-- <h3 class="text-2xl font-semibold mb-5">
    Do your research ahead of time
    </h3>
    <p class="text-lg text-interface-200">
    It is a long established fact that a reader will be distracted
    by the readable content of a page when looking at its layout.
    The point of using Lorem Ipsum is that it has a the a
    more-or-less normal distribution of letters, as opposed to using
    '
    </p> --}}
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7 mt-10">
                    <div>
                        <img src=" {{ asset('img/services/th-md-1.jpg') }}" class="w-full rounded" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('img/services/th-md-2.jpg') }}" class="w-full rounded" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('img/services/th-md-3.jpg') }}" class="w-full rounded" alt="">
                    </div>
                </div>
                <ul class="mt-10 mb-14 space-y-3 list-disc pl-5">
                    <li class="text-interface-200 text-lg">
                        Brainwriting: Everyone writes down three ideas and passes their
                        ideas to the person on their left (or right), who builds off
                        those ideas before passing them on again. This way, ideas can
                        cross-pollinate, morph and build on top of each other from
                        different perspectives. After all, two heads are better than
                        one.
                    </li>
                    <li class="text-interface-200 text-lg">
                        Rapid ideation: Everyone writes down as many ideas as they can
                        in a set amount of time before anything is discussed or
                        critiqued. This is a fun way to get all the good (and bad) ideas
                        out fast and bring a sense of fun urgency to the session.
                    </li>
                    <li class="text-interface-200 text-lg">
                        Figure storming: The group picks a well-known figure who is not
                        in the room and asks how they would approach the problem. For
                        example, “How would Barack Obama (or Harry Potter, or anyone
                        else) approach this problem?” - prepare for some funny answers
                        here, this method is a good ice-breaker for everyone involved.
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="py-11 px-14 rounded-2xl"
                style="
                      background: url('{{ asset('img/services/service-cta-bg.jpg') }} ') no-repeat
                        center center/cover;
                    ">
                <div class="flex flex-col lg:flex-row gap-8 lg:gap-10 lg:items-center justify-between">
                    <div class="grow">
                        <h2 class="text-white font-semibold text-4xl leading-normal xl:leading-snug xl:text-5xl">
                            Having any Query? <br>
                            Book an appointment.
                        </h2>
                    </div>
                    <div class="shrink-0">
                        <a href="#"
                            class="bg-white inline-flex bg-opacity-10 py-5 px-10 rounded-custom text-white">Send Us
                            Message</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- slider --}}

    <section class="pb-20 lg:pb-120">
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
                            <div class="flex justify-between items-center cursor-pointer accordion-header"
                                data-te-collapse-init data-te-target="#collapseOne">
                                <h3 class="text-2xl font-medium">
                                    <span class="inline-block accordion-number mr-4">01</span>
                                    Get a project overview
                                </h3>
                                <span class="accordion-icon">
                                    <svg width="15" height="9" viewBox="0 0 15 9" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L7.5 8L14 1" stroke="#04091E" stroke-width="1.5"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </div>

                            <div class="hidden accordion-body pl-5" id="collapseOne" data-te-collapse-item>
                                <div class="px-4 py-2">
                                    <p class="text-interface-100 text-xl mb-3">
                                        Responsive Web App Development,Custom Web Application,Content Management System
                                        (CMS),
                                        API Integration,Booking and Reservation System,Web App Backend Development,
                                        Single-Page Applications (SPA),API Development,
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="border-b border-interface-200 py-8">
                            <div class="flex gap-5 justify-between items-center cursor-pointer accordion-header"
                                data-te-collapse-init data-te-target="#collapseTwo">
                                <h3 class="text-2xl font-medium">
                                    <span class="inline-block accordion-number mr-4">02</span>
                                    Task monitoring at a glance
                                </h3>
                                <span class="accordion-icon">
                                    <svg width="15" height="9" viewBox="0 0 15 9" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L7.5 8L14 1" stroke="#04091E" stroke-width="1.5"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="hidden accordion-body pl-5" id="collapseTwo" data-te-collapse-item>
                                <div class="px-4 py-2">
                                    <p class="text-interface-100 text-xl mb-3">
                                        Developed a task monitoring dashboard using Laravel and PHP that provides a
                                        comprehensive overview of ongoing tasks and project progress.
                                        Implemented real-time data updates and visualizations to give stakeholders a quick
                                        and intuitive snapshot of task statuses and key metrics.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="border-b border-interface-200 py-8">
                            <div class="flex gap-5 justify-between items-center cursor-pointer accordion-header"
                                data-te-collapse-init data-te-target="#collapseThree">
                                <h3 class="text-2xl font-medium">
                                    <span class="inline-block accordion-number mr-4">03</span>
                                    Weekly Project
                                </h3>
                                <span class="accordion-icon">
                                    <svg width="15" height="9" viewBox="0 0 15 9" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L7.5 8L14 1" stroke="#04091E" stroke-width="1.5"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="hidden accordion-body pl-5" id="collapseThree" data-te-collapse-item>
                                <div class="px-4 py-2">
                                    <p class="text-interface-100 text-xl mb-3">
                                        Integrated task assignment and collaboration features, enabling team members to
                                        collaborate, communicate, and track progress in real-time.
                                        Designed a centralized dashboard that provides a comprehensive view of ongoing
                                        projects, upcoming deadlines, and task statuses for effective project monitoring
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xl:col-span-4 w-full">

                    <div class="px-8 py-10 bg-[#FF0000] rounded-lg"
                        style="
                                background: url('{{ asset('img/services/contact-form-bg-shape.jpg') }}')
                                  no-repeat center center/cover;
                              ">
                        <form method="post" action="{{ route('customer.store') }}">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-7 gap-y-5">
                                <div>
                                    <label for="fname"
                                        class="block mb-2 text-base font-medium text-interface-200">First Name</label>
                                    <input type="text" placeholder="Max" name="fname"
                                        class="px-4 py-2.5 bg-white rounded-lg border-0 w-full placeholder:text-interface-200 placeholder:text-sm">
                                    @if ($errors->has('fname'))
                                        <div class="text-red-500">
                                            {{ $errors->first('fname') }}
                                        </div>
                                    @endif
                                </div>
                                <div>
                                    <label for="lname" class="block mb-2 text-base font-medium text-interface-200">Last
                                        Name</label>
                                    <input type="text" placeholder="Mustermann" name="lname"
                                        class="px-4 py-2.5 bg-white rounded-lg border-0 w-full placeholder:text-interface-200 placeholder:text-sm">
                                    @if ($errors->has('lname'))
                                        <div class="text-red-500">
                                            {{ $errors->first('lname') }}
                                        </div>
                                    @endif
                                </div>
                                <div>
                                    <label for="email"
                                        class="block mb-2 text-base font-medium text-interface-200">Email</label>
                                    <input type="text" name="email" placeholder="max.mustermann@mail.de"
                                        class="px-4 py-2.5 bg-white rounded-lg border-0 w-full placeholder:text-interface-200 placeholder:text-sm">
                                    @if ($errors->has('email'))
                                        <div class="text-red-500">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>
                                <div>
                                    <label for="telephone"
                                        class="block mb-2 text-base font-medium text-interface-200">Telephone</label>
                                    <input type="text" name="telephone" placeholder="+49 123456789"
                                        class="px-4 py-2.5 bg-white rounded-lg border-0 w-full placeholder:text-interface-200 placeholder:text-sm">
                                    @if ($errors->has('telephone'))
                                        <div class="text-red-500">
                                            {{ $errors->first('telephone') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="md:col-span-2">
                                    <label for="description"
                                        class="block mb-2 text-base font-medium text-interface-200">Description</label>
                                    <textarea type="text" name="description" placeholder="Hier text ainfugen"
                                        class="px-4 py-2.5 bg-white rounded-lg border-0 w-full placeholder:text-interface-200 placeholder:text-sm resize-none h-40">                        </textarea>
                                    @if ($errors->has('description'))
                                        <div class="text-red-500">
                                            {{ $errors->first('description') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="mt-8 flex justify-end">
                                <button type="submit"
                                    class="py-4 px-6 rounded-lg bg-blue-500 text-white font-medium text-lg transition-all hover:bg-blue-600">
                                    Send Now
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20"
        style="
          background: url('{{ asset('img/services/cta-pm-1.jpg') }}') no-repeat center
            center/cover;
        ">
        <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="flex flex-col gap-5 xl:gap-10 lg:flex-row justify-between">
                <div class="xl:w-5/12">
                    <h2 class="text-4xl leading-normal xl:text-5xl xl:leading-tight font-bold text-white">
                        Hire me <br>
                        as a product design great skills elite.
                    </h2>
                </div>
                <div class="xl:w-5/12">
                    <div class="max-w-lg">
                        <p class="text-xl xl:text-2xl text-white mb-8">
                            I am product designer, who are excited about unique ideas and
                            help.
                        </p>
                        <a href="{{ url('/contact') }}"
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
