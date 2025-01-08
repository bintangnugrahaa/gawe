<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
</head>

<body class="font-poppins text-[#030303] bg-[#F6F5FA] pb-[100px] px-4 sm:px-0">
    <nav
        class="container max-w-[1130px] mx-auto flex items-center flex-wrap justify-between p-4 rounded-[20px] bg-white mt-[30px] gap-y-3 sm:gap-y-0">
        <a href="index.html">
            <img src="assets/logos/logo.svg" alt="logo">
        </a>
        <ul class="flex items-center flex-wrap gap-x-[30px]">
            <li>
                <a href="index.html"
                    class="hover:font-semibold hover:text-[#6635F1] transition-all duration-300 font-semibold text-[#6635F1]">Browse</a>
            </li>
            <li>
                <a href="category-auth.html"
                    class="hover:font-semibold hover:text-[#6635F1] transition-all duration-300">Categories</a>
            </li>
            <li>
                <a href="" class="hover:font-semibold hover:text-[#6635F1] transition-all duration-300">My
                    Jobs</a>
            </li>
            <li>
                <a href=""
                    class="hover:font-semibold hover:text-[#6635F1] transition-all duration-300">Wallets</a>
            </li>
            <li>
                <a href="" class="hover:font-semibold hover:text-[#6635F1] transition-all duration-300">Help</a>
            </li>
        </ul>
        <div class="flex items-center gap-3">
            <p class="font-semibold">Hi, Shayna</p>
            <div class="w-[50px] h-[50px] rounded-full overflow-hidden flex shrink-0">
                <img src="assets/photos/profile.png" class="w-full h-full object-cover" alt="photo">
            </div>
        </div>
    </nav>
    <section id="header"
        class="container max-w-[1130px] mx-auto flex flex-col sm:flex-row items-center justify-between gap-2 mt-[50px]">
        <h1 class="font-extrabold text-[40px] leading-[45px] text-center sm:text-left">Browse Your <br>Favorites
            Projects</h1>
        <div class="flex flex-col sm:flex-row justify-end items-center gap-3 w-full sm:w-auto">
            <div
                class="p-2 pl-5 rounded-full bg-white flex items-center justify-between gap-2 w-full sm:w-[500px] focus-within:ring-2 focus-within:ring-[#6635F1] transition-all duration-300">
                <input type="text"
                    class="appearance-none outline-none focus:outline-none font-semibold placeholder:font-normal placeholder:text-[#545768] w-full"
                    placeholder="Do quick search job by name...">
                <button class="w-9 h-9 flex shrink-0">
                    <img src="assets/icons/search.svg" alt="icon">
                </button>
            </div>
            <div class="h-[52px] w-0 border border-[#DCDAE3] hidden sm:block"></div>
            <button class="p-[14px_20px] bg-white rounded-full font-semibold">Job Filters</button>
        </div>
    </section>
    <section id="categories" class="container max-w-[1130px] mx-auto flex flex-col gap-4 mt-[50px]">
        <h2 class="font-bold text-xl">Browse Categories</h2>
        <div class="grid grid-cols-1 sm:grid-cols-5 gap-5">
            <a href="category-auth.html" class="card">
                <div
                    class="p-5 rounded-[20px] bg-white flex flex-col gap-[30px] hover:ring-2 hover:ring-[#6635F1] transition-all duration-300">
                    <div class="w-[70px] h-[70px] flex shrink-0">
                        <img src="assets/icons/Digital Marketing 101.svg" alt="icon">
                    </div>
                    <div class="flex flex-col gap-[6px]">
                        <p href="" class="font-semibold text-lg">Digital Marketing</p>
                        <p class="text-sm text-[#545768]">12,409 jobs available</p>
                    </div>
                </div>
            </a>
            <a href="category-auth.html" class="card">
                <div
                    class="p-5 rounded-[20px] bg-white flex flex-col gap-[30px] hover:ring-2 hover:ring-[#6635F1] transition-all duration-300">
                    <div class="w-[70px] h-[70px] flex shrink-0">
                        <img src="assets/icons/UIUX 2.svg" alt="icon">
                    </div>
                    <div class="flex flex-col gap-[6px]">
                        <p href="" class="font-semibold text-lg">UI/UX Design</p>
                        <p class="text-sm text-[#545768]">12,409 jobs available</p>
                    </div>
                </div>
            </a>
            <a href="category-auth.html" class="card">
                <div
                    class="p-5 rounded-[20px] bg-white flex flex-col gap-[30px] hover:ring-2 hover:ring-[#6635F1] transition-all duration-300">
                    <div class="w-[70px] h-[70px] flex shrink-0">
                        <img src="assets/icons/Web Development.svg" alt="icon">
                    </div>
                    <div class="flex flex-col gap-[6px]">
                        <p href="" class="font-semibold text-lg">Programming</p>
                        <p class="text-sm text-[#545768]">12,409 jobs available</p>
                    </div>
                </div>
            </a>
            <a href="category-auth.html" class="card">
                <div
                    class="p-5 rounded-[20px] bg-white flex flex-col gap-[30px] hover:ring-2 hover:ring-[#6635F1] transition-all duration-300">
                    <div class="w-[70px] h-[70px] flex shrink-0">
                        <img src="assets/icons/Basic Interview.svg" alt="icon">
                    </div>
                    <div class="flex flex-col gap-[6px]">
                        <p href="" class="font-semibold text-lg">User Research</p>
                        <p class="text-sm text-[#545768]">12,409 jobs available</p>
                    </div>
                </div>
            </a>
            <a href="category-auth.html" class="card">
                <div
                    class="p-5 rounded-[20px] bg-white flex flex-col gap-[30px] hover:ring-2 hover:ring-[#6635F1] transition-all duration-300">
                    <div class="w-[70px] h-[70px] flex shrink-0">
                        <img src="assets/icons/UIUX 1.svg" alt="icon">
                    </div>
                    <div class="flex flex-col gap-[6px]">
                        <p href="" class="font-semibold text-lg">App Developer</p>
                        <p class="text-sm text-[#545768]">12,409 jobs available</p>
                    </div>
                </div>
            </a>
        </div>
    </section>
    <section id="featured" class="container max-w-[1130px] mx-auto flex flex-col gap-4 mt-[50px]">
        <h2 class="font-bold text-xl">Featured Projects</h2>
        <div class="grid grid-cols-1 sm:grid-cols-4 gap-5">
            <a href="details.html" class="card">
                <div
                    class="p-5 rounded-[20px] bg-white flex flex-col gap-5 hover:ring-2 hover:ring-[#6635F1] transition-all duration-300">
                    <div class="w-full h-[140px] rounded-[20px] overflow-hidden relative">
                        <div
                            class="font-bold text-xs leading-[18px] text-white bg-[#2E82FE] p-[2px_10px] rounded-full w-fit absolute top-[10px] left-[10px]">
                            HIRING</div>
                        <img src="assets/thumbnails/thumbnail-1.png" class="w-full h-full object-cover"
                            alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <p class="title font-semibold text-lg min-h-[56px] line-clamp-2 hover:line-clamp-none">
                            Education Commerce Website Development</p>
                        <div class="flex items-center gap-[6px]">
                            <div>
                                <img src="assets/icons/dollar-circle.svg" alt="icon">
                            </div>
                            <p class="font-semibold text-sm">Rp 3.000.000</p>
                        </div>
                        <div class="flex items-center gap-[6px]">
                            <div>
                                <img src="assets/icons/verify.svg" alt="icon">
                            </div>
                            <p class="font-semibold text-sm">Payment Verified</p>
                        </div>
                        <div class="flex items-center gap-[6px]">
                            <div>
                                <img src="assets/icons/crown.svg" alt="icon">
                            </div>
                            <p class="font-semibold text-sm">Beginner</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="details.html" class="card">
                <div
                    class="p-5 rounded-[20px] bg-white flex flex-col gap-5 hover:ring-2 hover:ring-[#6635F1] transition-all duration-300">
                    <div class="w-full h-[140px] rounded-[20px] overflow-hidden relative">
                        <div
                            class="font-bold text-xs leading-[18px] text-white bg-[#F3445C] p-[2px_10px] rounded-full w-fit absolute top-[10px] left-[10px]">
                            CLOSED</div>
                        <img src="assets/thumbnails/thumbnail-2.png" class="w-full h-full object-cover"
                            alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <p class="title font-semibold text-lg min-h-[56px] line-clamp-2 hover:line-clamp-none">Product
                            Market Fit Research</p>
                        <div class="flex items-center gap-[6px]">
                            <div>
                                <img src="assets/icons/dollar-circle.svg" alt="icon">
                            </div>
                            <p class="font-semibold text-sm">Rp 3.000.000</p>
                        </div>
                        <div class="flex items-center gap-[6px]">
                            <div>
                                <img src="assets/icons/verify.svg" alt="icon">
                            </div>
                            <p class="font-semibold text-sm">Payment Verified</p>
                        </div>
                        <div class="flex items-center gap-[6px]">
                            <div>
                                <img src="assets/icons/crown.svg" alt="icon">
                            </div>
                            <p class="font-semibold text-sm">Intermediate</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="details.html" class="card">
                <div
                    class="p-5 rounded-[20px] bg-white flex flex-col gap-5 hover:ring-2 hover:ring-[#6635F1] transition-all duration-300">
                    <div class="w-full h-[140px] rounded-[20px] overflow-hidden relative">
                        <div
                            class="font-bold text-xs leading-[18px] text-white bg-[#2E82FE] p-[2px_10px] rounded-full w-fit absolute top-[10px] left-[10px]">
                            HIRING</div>
                        <img src="assets/thumbnails/thumbnail-3.png" class="w-full h-full object-cover"
                            alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <p class="title font-semibold text-lg min-h-[56px] line-clamp-2 hover:line-clamp-none">3D
                            Blender Modelings</p>
                        <div class="flex items-center gap-[6px]">
                            <div>
                                <img src="assets/icons/dollar-circle.svg" alt="icon">
                            </div>
                            <p class="font-semibold text-sm">Rp 80.000.000</p>
                        </div>
                        <div class="flex items-center gap-[6px]">
                            <div>
                                <img src="assets/icons/verify.svg" alt="icon">
                            </div>
                            <p class="font-semibold text-sm">Payment Verified</p>
                        </div>
                        <div class="flex items-center gap-[6px]">
                            <div>
                                <img src="assets/icons/crown.svg" alt="icon">
                            </div>
                            <p class="font-semibold text-sm">Beginner</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="details.html" class="card">
                <div
                    class="p-5 rounded-[20px] bg-white flex flex-col gap-5 hover:ring-2 hover:ring-[#6635F1] transition-all duration-300">
                    <div class="w-full h-[140px] rounded-[20px] overflow-hidden relative">
                        <div
                            class="font-bold text-xs leading-[18px] text-white bg-[#2E82FE] p-[2px_10px] rounded-full w-fit absolute top-[10px] left-[10px]">
                            HIRING</div>
                        <img src="assets/thumbnails/thumbnail-4.png" class="w-full h-full object-cover"
                            alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <p class="title font-semibold text-lg min-h-[56px] line-clamp-2 hover:line-clamp-none">SaaS AI
                            Integrated</p>
                        <div class="flex items-center gap-[6px]">
                            <div>
                                <img src="assets/icons/dollar-circle.svg" alt="icon">
                            </div>
                            <p class="font-semibold text-sm">Rp 3.000.000</p>
                        </div>
                        <div class="flex items-center gap-[6px]">
                            <div>
                                <img src="assets/icons/verify.svg" alt="icon">
                            </div>
                            <p class="font-semibold text-sm">Payment Verified</p>
                        </div>
                        <div class="flex items-center gap-[6px]">
                            <div>
                                <img src="assets/icons/crown.svg" alt="icon">
                            </div>
                            <p class="font-semibold text-sm">Expert</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </section>
    <section id="newest"
        class="container max-w-[1130px] mx-auto flex flex-col sm:flex-row sm:flex-nowrap gap-5 mt-[50px]">
        <div class="flex flex-col gap-4 w-full">
            <h2 class="font-bold text-xl">Newest Projects</h2>
            <div class="flex flex-col gap-5">
                <div
                    class="card hover:ring-2 hover:ring-[#6635F1] transition-all duration-300 bg-white p-5 rounded-[20px] flex flex-col sm:flex-row sm:items-center gap-[18px] w-full">
                    <a href="details.html"
                        class="w-full sm:w-[200px] h-[150px] flex shrink-0 rounded-[20px] overflow-hidden bg-[#D9D9D9]">
                        <img src="assets/thumbnails/thumbnail-1.png" class="w-full h-full object-cover"
                            alt="thumbnail">
                    </a>
                    <div class="flex flex-col gap-[10px]">
                        <div
                            class="font-bold text-xs leading-[18px] text-white bg-[#2E82FE] p-[2px_10px] rounded-full w-fit">
                            HIRING</div>
                        <a href="details.html" class="font-semibold text-lg leading-[27px]">Figma to Tailwind CSS</a>
                        <p class="text-sm leading-7 line-clamp-2">I'm seeking a proficient developer to create a unique
                            opinion collection app without a user registration feature would If you're passionate
                            abou...</p>
                        <div class="flex flex-col sm:flex-row sm:items-center gap-3">
                            <div class="flex items-center gap-[6px]">
                                <div>
                                    <img src="assets/icons/dollar-circle.svg" alt="icon">
                                </div>
                                <p class="font-semibold text-sm">Rp 18.000.000</p>
                            </div>
                            <div class="flex items-center gap-[6px]">
                                <div>
                                    <img src="assets/icons/verify.svg" alt="icon">
                                </div>
                                <p class="font-semibold text-sm">Payment Verified</p>
                            </div>
                            <div class="flex items-center gap-[6px]">
                                <div>
                                    <img src="assets/icons/crown.svg" alt="icon">
                                </div>
                                <p class="font-semibold text-sm">Beginner</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="card hover:ring-2 hover:ring-[#6635F1] transition-all duration-300 bg-white p-5 rounded-[20px] flex flex-col sm:flex-row sm:items-center gap-[18px] w-full">
                    <a href="details.html"
                        class="w-full sm:w-[200px] h-[150px] flex shrink-0 rounded-[20px] overflow-hidden bg-[#D9D9D9]">
                        <img src="assets/thumbnails/thumbnail-1.png" class="w-full h-full object-cover"
                            alt="thumbnail">
                    </a>
                    <div class="flex flex-col gap-[10px]">
                        <div
                            class="font-bold text-xs leading-[18px] text-white bg-[#2E82FE] p-[2px_10px] rounded-full w-fit">
                            HIRING</div>
                        <a href="details.html" class="font-semibold text-lg leading-[27px]">Education Commerce Website
                            Development</a>
                        <p class="text-sm leading-7 line-clamp-2">I'm seeking a proficient developer to create a unique
                            opinion collection app without a user registration feature would If you're passionate
                            abou...</p>
                        <div class="flex flex-col sm:flex-row sm:items-center gap-3">
                            <div class="flex items-center gap-[6px]">
                                <div>
                                    <img src="assets/icons/dollar-circle.svg" alt="icon">
                                </div>
                                <p class="font-semibold text-sm">Rp 18.000.000</p>
                            </div>
                            <div class="flex items-center gap-[6px]">
                                <div>
                                    <img src="assets/icons/verify.svg" alt="icon">
                                </div>
                                <p class="font-semibold text-sm">Payment Verified</p>
                            </div>
                            <div class="flex items-center gap-[6px]">
                                <div>
                                    <img src="assets/icons/crown.svg" alt="icon">
                                </div>
                                <p class="font-semibold text-sm">Beginner</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="card hover:ring-2 hover:ring-[#6635F1] transition-all duration-300 bg-white p-5 rounded-[20px] flex flex-col sm:flex-row sm:items-center gap-[18px] w-full">
                    <a href="details.html"
                        class="w-full sm:w-[200px] h-[150px] flex shrink-0 rounded-[20px] overflow-hidden bg-[#D9D9D9]">
                        <img src="assets/thumbnails/thumbnail-1.png" class="w-full h-full object-cover"
                            alt="thumbnail">
                    </a>
                    <div class="flex flex-col gap-[10px]">
                        <div
                            class="font-bold text-xs leading-[18px] text-white bg-[#2E82FE] p-[2px_10px] rounded-full w-fit">
                            HIRING</div>
                        <a href="details.html" class="font-semibold text-lg leading-[27px]">Education Commerce Website
                            Development</a>
                        <p class="text-sm leading-7 line-clamp-2">I'm seeking a proficient developer to create a unique
                            opinion collection app without a user registration feature would If you're passionate
                            abou...</p>
                        <div class="flex flex-col sm:flex-row sm:items-center gap-3">
                            <div class="flex items-center gap-[6px]">
                                <div>
                                    <img src="assets/icons/dollar-circle.svg" alt="icon">
                                </div>
                                <p class="font-semibold text-sm">Rp 18.000.000</p>
                            </div>
                            <div class="flex items-center gap-[6px]">
                                <div>
                                    <img src="assets/icons/verify.svg" alt="icon">
                                </div>
                                <p class="font-semibold text-sm">Payment Verified</p>
                            </div>
                            <div class="flex items-center gap-[6px]">
                                <div>
                                    <img src="assets/icons/crown.svg" alt="icon">
                                </div>
                                <p class="font-semibold text-sm">Beginner</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="card hover:ring-2 hover:ring-[#6635F1] transition-all duration-300 bg-white p-5 rounded-[20px] flex flex-col sm:flex-row sm:items-center gap-[18px] w-full">
                    <a href="details.html"
                        class="w-full sm:w-[200px] h-[150px] flex shrink-0 rounded-[20px] overflow-hidden bg-[#D9D9D9]">
                        <img src="assets/thumbnails/thumbnail-1.png" class="w-full h-full object-cover"
                            alt="thumbnail">
                    </a>
                    <div class="flex flex-col gap-[10px]">
                        <div
                            class="font-bold text-xs leading-[18px] text-white bg-[#2E82FE] p-[2px_10px] rounded-full w-fit">
                            HIRING</div>
                        <a href="details.html" class="font-semibold text-lg leading-[27px]">Education Commerce Website
                            Development</a>
                        <p class="text-sm leading-7 line-clamp-2">I'm seeking a proficient developer to create a unique
                            opinion collection app without a user registration feature would If you're passionate
                            abou...</p>
                        <div class="flex flex-col sm:flex-row sm:items-center gap-3">
                            <div class="flex items-center gap-[6px]">
                                <div>
                                    <img src="assets/icons/dollar-circle.svg" alt="icon">
                                </div>
                                <p class="font-semibold text-sm">Rp 18.000.000</p>
                            </div>
                            <div class="flex items-center gap-[6px]">
                                <div>
                                    <img src="assets/icons/verify.svg" alt="icon">
                                </div>
                                <p class="font-semibold text-sm">Payment Verified</p>
                            </div>
                            <div class="flex items-center gap-[6px]">
                                <div>
                                    <img src="assets/icons/crown.svg" alt="icon">
                                </div>
                                <p class="font-semibold text-sm">Beginner</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col sm:w-[300px] h-fit shrink-0 bg-white rounded-[20px] p-5 gap-[30px] sm:mt-[45px]">
            <div class="flex flex-col gap-3">
                <h3 class="font-semibold">Your Profile</h3>
                <div class="flex items-center gap-3">
                    <div class="w-[50px] h-[50px] rounded-full overflow-hidden flex shrink-0">
                        <img src="assets/photos/profile.png" class="w-full h-full object-cover" alt="photo">
                    </div>
                    <div class="flex flex-col gap-[2px]">
                        <p class="font-semibold">Hi, Shayna</p>
                        <p class="text-sm leading-[21px] text-[#545768]">911 Finished Projects</p>
                    </div>
                </div>
                <div class="flex items-center gap-[6px]">
                    <div class="flex items-center">
                        <div>
                            <img src="assets/icons/Star.svg" alt="star">
                        </div>
                        <div>
                            <img src="assets/icons/Star.svg" alt="star">
                        </div>
                        <div>
                            <img src="assets/icons/Star.svg" alt="star">
                        </div>
                        <div>
                            <img src="assets/icons/Star.svg" alt="star">
                        </div>
                        <div>
                            <img src="assets/icons/Star-grey.svg" alt="star">
                        </div>
                        <p class="font-semibold text-sm">(893)</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-[10px] rounded-[20px] p-[10px_14px] bg-[#030303]">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 flex shrink-0">
                        <img src="assets/icons/story.svg" alt="">
                    </div>
                    <p class="text-sm text-white">You have <span class="font-bold">183</span> connects available to
                        get a new job</p>
                </div>
                <a href="" class="font-semibold text-white text-sm hover:underline text-center">Top Up
                    Connect</a>
            </div>
            <hr>
            <div class="flex flex-col gap-3">
                <h3 class="font-semibold">Resources</h3>
                <div class="flex flex-col gap-[18px]">
                    <a href="" class="resources-card">
                        <div class="group flex gap-3 items-center">
                            <div class="w-[50px] h-[50px] flex shrink-0">
                                <img src="assets/icons/perosnalcard.svg" alt="icon">
                            </div>
                            <div class="flex flex-col justify-center gap-[2px]">
                                <p class="font-semibold group-hover:underline">Gawe Academy</p>
                                <p class="text-sm text-[#545768]">Improve your skills today</p>
                            </div>
                        </div>
                    </a>
                    <a href="" class="resources-card">
                        <div class="group flex gap-3 items-center">
                            <div class="w-[50px] h-[50px] flex shrink-0">
                                <img src="assets/icons/note-add.svg" alt="icon">
                            </div>
                            <div class="flex flex-col justify-center gap-[2px]">
                                <p class="font-semibold group-hover:underline">Invoice Marker</p>
                                <p class="text-sm text-[#545768]">Get the payment faster</p>
                            </div>
                        </div>
                    </a>
                    <a href="" class="resources-card">
                        <div class="group flex gap-3 items-center">
                            <div class="w-[50px] h-[50px] flex shrink-0">
                                <img src="assets/icons/ruler&pen.svg" alt="icon">
                            </div>
                            <div class="flex flex-col justify-center gap-[2px]">
                                <p class="font-semibold group-hover:underline">Assets Pixels Pro</p>
                                <p class="text-sm text-[#545768]">Design templates</p>
                            </div>
                        </div>
                    </a>
                    <a href="" class="resources-card">
                        <div class="group flex gap-3 items-center">
                            <div class="w-[50px] h-[50px] flex shrink-0">
                                <img src="assets/icons/code.svg" alt="icon">
                            </div>
                            <div class="flex flex-col justify-center gap-[2px]">
                                <p class="font-semibold group-hover:underline">Codelab Testing Unit</p>
                                <p class="text-sm text-[#545768]">Development</p>
                            </div>
                        </div>
                    </a>
                    <a href="" class="resources-card">
                        <div class="group flex gap-3 items-center">
                            <div class="w-[50px] h-[50px] flex shrink-0">
                                <img src="assets/icons/user-octagon.svg" alt="icon">
                            </div>
                            <div class="flex flex-col justify-center gap-[2px]">
                                <p class="font-semibold group-hover:underline">Interview Mocking</p>
                                <p class="text-sm text-[#545768]">Deal with your top clients</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
