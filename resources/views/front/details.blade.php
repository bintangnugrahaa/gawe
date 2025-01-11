@extends('front.layouts.app')
@section('content')

    <body class="font-poppins text-[#030303] bg-[#F6F5FA] pb-[100px] px-4 sm:px-0">
        <x-nav />
        <section id="breadcrumb" class="container max-w-[1130px] mx-auto mt-[30px]">
            <div class="flex gap-[30px] items-center">
                <a href="{{ route('front.index') }}"
                    class="last-of-type:font-semibold active:font-semibold transition-all duration-300">Browse</a>
                <span>/</span>
                <a href=""
                    class="last-of-type:font-semibold active:font-semibold transition-all duration-300">Projects</a>
                <span>/</span>
                <a href=""
                    class="last-of-type:font-semibold active:font-semibold transition-all duration-300">Details</a>
            </div>
        </section>
        <section id="details"
            class="container max-w-[1130px] mx-auto flex flex-col sm:flex-row sm:flex-nowrap gap-5 mt-[30px]">
            <div class="bg-white flex flex-col gap-5 p-5 rounded-[20px]">
                <div class="flex flex-col gap-1">
                    <div class="font-bold text-xs leading-[18px] text-white bg-[#2E82FE] p-[2px_10px] rounded-full w-fit">
                        HIRING</div>
                    <h1 class="font-extrabold text-[30px] leading-[45px]">{{ $project->name }}</h1>
                    <p class="text-sm text-[#545768]">Posted at {{ $project->created_at->format('d M Y') }}</p>
                </div>
                <div class="flex flex-col gap-[6px] w-full">
                    <h3 class="font-semibold">About Project</h3>
                    <p class="text-sm leading-[28px]">{{ $project->about }}</p>
                </div>
                <div class="flex flex-col gap-[6px] w-full">
                    <h3 class="font-semibold">Details</h3>
                    <div class="grid sm:grid-cols-3 gap-5">
                        <div class="flex items-center gap-[10px] p-5 border border-[#F1F1F1] rounded-[20px] bg-white">
                            <div class="w-[38px] h-[38px] flex shrink-0">
                                <img src="{{ asset('assets/icons/dollar-circle.svg') }}"
                                    class="w-full h-full object-contain" alt="icon">
                            </div>
                            <div class="flex flex-col justify-center gap-[2px]">
                                <p class="text-sm text-[#545768]">Budget</p>
                                <p class="font-bold">Rp
                                    {{ number_format($project->budget, 0, ',', '.') }}</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-[10px] p-5 border border-[#F1F1F1] rounded-[20px] bg-white">
                            <div class="w-[38px] h-[38px] flex shrink-0">
                                <img src="{{ asset('assets/icons/verify.svg') }}" class="w-full h-full object-contain"
                                    alt="icon">
                            </div>
                            <div class="flex flex-col justify-center gap-[2px]">
                                <p class="text-sm text-[#545768]">Payment</p>
                                <p class="font-bold">Verified</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-[10px] p-5 border border-[#F1F1F1] rounded-[20px] bg-white">
                            <div class="w-[38px] h-[38px] flex shrink-0">
                                <img src="{{ asset('assets/icons/crown.svg') }}" class="w-full h-full object-contain"
                                    alt="icon">
                            </div>
                            <div class="flex flex-col justify-center gap-[2px]">
                                <p class="text-sm text-[#545768]">Level</p>
                                <p class="font-bold">{{ $project->skill_level }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-[6px] w-full">
                    <h3 class="font-semibold">Tools Used</h3>
                    <div class="grid sm:grid-cols-4 gap-5">
                        <div class="flex items-center gap-[10px] p-5 border border-[#F1F1F1] rounded-[20px] bg-white">
                            <div class="w-[38px] h-[38px] flex shrink-0">
                                <img src="{{ Storage::url($project->icon) }}" class="w-full h-full object-contain"
                                    alt="icon">
                            </div>
                            
                            <div class="flex flex-col justify-center gap-[2px]">
                                <p class="font-bold">NextJS</p>
                                <p class="text-sm text-[#545768]">Front-end</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full bg-[#0FB848] flex items-center gap-[10px] p-[10px_14px] rounded-xl">
                    <div class="w-5 h-5 flex shrink-0">
                        <img src="{{ asset('assets/icons/global.svg') }}" alt="icon">
                    </div>
                    <p class="text-white font-semibold text-sm">This project is worldwide means that you can apply and
                        working from wherever you are.</p>
                </div>
            </div>
            <div class="flex flex-col sm:w-[300px] h-fit shrink-0 bg-white rounded-[20px] p-5 gap-[30px]">
                <div class="w-full h-[170px] flex shrink-0 rounded-[20px] overflow-hidden">
                    <img src="{{ Storage::url($project->thumbnail) }}" class="w-full h-full object-cover" alt="thumbnail">
                </div>
                <div class="flex flex-col gap-3">
                    <a href="apply.html"
                        class="bg-[#6635F1] p-[14px_20px] rounded-full font-semibold text-white text-center">Apply Now</a>
                    <a href=""
                        class="bg-[#030303] p-[14px_20px] rounded-full font-semibold text-white text-center">Bookmark
                        Job</a>
                </div>
                <div class="flex flex-col gap-3">
                    <h3 class="font-semibold">About Client</h3>
                    <div class="flex items-center gap-3">
                        <div class="w-[50px] h-[50px] rounded-full overflow-hidden flex shrink-0">
                            <img src="{{ asset('assets/photos/profile.png') }}" class="w-full h-full object-cover"
                                alt="photo">
                        </div>
                        <div class="flex flex-col gap-[2px]">
                            <p class="font-semibold">Armadilla Putri</p>
                            <p class="text-sm leading-[21px] text-[#545768]">25,000 Total Projects</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-[6px]">
                        <div class="flex items-center">
                            <div>
                                <img src="{{ asset('assets/icons/Star.svg') }}" alt="star">
                            </div>
                            <div>
                                <img src="{{ asset('assets/icons/Star.svg') }}" alt="star">
                            </div>
                            <div>
                                <img src="{{ asset('assets/icons/Star.svg') }}" alt="star">
                            </div>
                            <div>
                                <img src="{{ asset('assets/icons/Star.svg') }}" alt="star">
                            </div>
                            <div>
                                <img src="{{ asset('assets/icons/Star-grey.svg') }}" alt="star">
                            </div>
                            <p class="font-semibold text-sm">(24,499)</p>
                        </div>
                    </div>
                </div>
                <hr>
                <a href=""
                    class="font-semibold border border-[#030303] p-[14px_20px] rounded-full text-center">Report this
                    Job</a>
            </div>
        </section>
        <section id="other" class="container max-w-[1130px] mx-auto flex flex-col gap-4 mt-[50px]">
            <h2 class="font-bold text-xl">Other Projects</h2>
            <div class="grid grid-cols-1 sm:grid-cols-4 gap-5">
                <a href="" class="card">
                    <div
                        class="p-5 rounded-[20px] bg-white flex flex-col gap-5 hover:ring-2 hover:ring-[#6635F1] transition-all duration-300">
                        <div class="w-full h-[140px] rounded-[20px] overflow-hidden relative">
                            <div
                                class="font-bold text-xs leading-[18px] text-white bg-[#2E82FE] p-[2px_10px] rounded-full w-fit absolute top-[10px] left-[10px]">
                                HIRING</div>
                            <img src="{{ asset('assets/thumbnails/thumbnail-1.png') }}"
                                class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                        <div class="flex flex-col gap-[10px]">
                            <p class="title font-semibold text-lg min-h-[56px] line-clamp-2 hover:line-clamp-none">
                                Education Commerce Website Development</p>
                            <div class="flex items-center gap-[6px]">
                                <div>
                                    <img src="{{ asset('assets/icons/dollar-circle.svg') }}" alt="icon">
                                </div>
                                <p class="font-semibold text-sm">Rp 3.000.000</p>
                            </div>
                            <div class="flex items-center gap-[6px]">
                                <div>
                                    <img src="{{ asset('assets/icons/verify.svg') }}" alt="icon">
                                </div>
                                <p class="font-semibold text-sm">Payment Verified</p>
                            </div>
                            <div class="flex items-center gap-[6px]">
                                <div>
                                    <img src="{{ asset('assets/icons/crown.svg') }}" alt="icon">
                                </div>
                                <p class="font-semibold text-sm">Beginner</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="" class="card">
                    <div
                        class="p-5 rounded-[20px] bg-white flex flex-col gap-5 hover:ring-2 hover:ring-[#6635F1] transition-all duration-300">
                        <div class="w-full h-[140px] rounded-[20px] overflow-hidden relative">
                            <div
                                class="font-bold text-xs leading-[18px] text-white bg-[#F3445C] p-[2px_10px] rounded-full w-fit absolute top-[10px] left-[10px]">
                                CLOSED</div>
                            <img src="{{ asset('assets/thumbnails/thumbnail-2.png') }}"
                                class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                        <div class="flex flex-col gap-[10px]">
                            <p class="title font-semibold text-lg min-h-[56px] line-clamp-2 hover:line-clamp-none">Product
                                Market Fit Research</p>
                            <div class="flex items-center gap-[6px]">
                                <div>
                                    <img src="{{ asset('assets/icons/dollar-circle.svg') }}" alt="icon">
                                </div>
                                <p class="font-semibold text-sm">Rp 3.000.000</p>
                            </div>
                            <div class="flex items-center gap-[6px]">
                                <div>
                                    <img src="{{ asset('assets/icons/verify.svg') }}" alt="icon">
                                </div>
                                <p class="font-semibold text-sm">Payment Verified</p>
                            </div>
                            <div class="flex items-center gap-[6px]">
                                <div>
                                    <img src="{{ asset('assets/icons/crown.svg') }}" alt="icon">
                                </div>
                                <p class="font-semibold text-sm">Intermediate</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="" class="card">
                    <div
                        class="p-5 rounded-[20px] bg-white flex flex-col gap-5 hover:ring-2 hover:ring-[#6635F1] transition-all duration-300">
                        <div class="w-full h-[140px] rounded-[20px] overflow-hidden relative">
                            <div
                                class="font-bold text-xs leading-[18px] text-white bg-[#2E82FE] p-[2px_10px] rounded-full w-fit absolute top-[10px] left-[10px]">
                                HIRING</div>
                            <img src="{{ asset('assets/thumbnails/thumbnail-3.png') }}"
                                class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                        <div class="flex flex-col gap-[10px]">
                            <p class="title font-semibold text-lg min-h-[56px] line-clamp-2 hover:line-clamp-none">3D
                                Blender Modelings</p>
                            <div class="flex items-center gap-[6px]">
                                <div>
                                    <img src="{{ asset('assets/icons/dollar-circle.svg') }}" alt="icon">
                                </div>
                                <p class="font-semibold text-sm">Rp 80.000.000</p>
                            </div>
                            <div class="flex items-center gap-[6px]">
                                <div>
                                    <img src="{{ asset('assets/icons/verify.svg') }}" alt="icon">
                                </div>
                                <p class="font-semibold text-sm">Payment Verified</p>
                            </div>
                            <div class="flex items-center gap-[6px]">
                                <div>
                                    <img src="{{ asset('assets/icons/crown.svg') }}" alt="icon">
                                </div>
                                <p class="font-semibold text-sm">Beginner</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="" class="card">
                    <div
                        class="p-5 rounded-[20px] bg-white flex flex-col gap-5 hover:ring-2 hover:ring-[#6635F1] transition-all duration-300">
                        <div class="w-full h-[140px] rounded-[20px] overflow-hidden relative">
                            <div
                                class="font-bold text-xs leading-[18px] text-white bg-[#2E82FE] p-[2px_10px] rounded-full w-fit absolute top-[10px] left-[10px]">
                                HIRING</div>
                            <img src="{{ asset('assets/thumbnails/thumbnail-4.png') }}"
                                class="w-full h-full object-cover" alt="thumbnail">
                        </div>
                        <div class="flex flex-col gap-[10px]">
                            <p class="title font-semibold text-lg min-h-[56px] line-clamp-2 hover:line-clamp-none">SaaS AI
                                Integrated</p>
                            <div class="flex items-center gap-[6px]">
                                <div>
                                    <img src="{{ asset('assets/icons/dollar-circle.svg') }}" alt="icon">
                                </div>
                                <p class="font-semibold text-sm">Rp 3.000.000</p>
                            </div>
                            <div class="flex items-center gap-[6px]">
                                <div>
                                    <img src="{{ asset('assets/icons/verify.svg') }}" alt="icon">
                                </div>
                                <p class="font-semibold text-sm">Payment Verified</p>
                            </div>
                            <div class="flex items-center gap-[6px]">
                                <div>
                                    <img src="{{ asset('assets/icons/crown.svg') }}" alt="icon">
                                </div>
                                <p class="font-semibold text-sm">Expert</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </section>
    </body>
@endsection
