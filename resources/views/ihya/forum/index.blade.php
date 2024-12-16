<!DOCTYPE html>
<html lang="en" class="font-poppins">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Manjari:wght@100;400;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body class="font-poppins">
    <div class="flex overflow-hidden flex-col bg-white">
        <!-- <nav class="flex flex-col mt-1.5 w-full bg-white max-md:max-w-full" aria-label="Main Navigation">
        <div class="flex z-10 flex-wrap gap-10 justify-center place-content-center items-center pr-8 mt-0 mb-0 w-full h-[159px] max-md:pr-5 max-md:mb-2.5 max-md:max-w-full">
          <div class="flex flex-col self-stretch px-2.5 pb-2.5 my-auto w-[169px]">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/22f7bc01bb8ba3743ee164e4c5deaa7b8eec658d92ba135b824a494eb7586e7d?placeholderIfAbsent=true&apiKey=e00d3c793b254127971e1d09475396f0" class="object-contain aspect-[1.14] w-[149px]" alt="Company Logo" />
          </div>
          <div class="flex flex-wrap gap-8 justify-center items-center self-stretch my-auto text-lg leading-loose text-center text-black min-w-[240px] max-md:max-w-full">
            <a href="#jobs" class="self-stretch px-7 pb-7 my-auto whitespace-nowrap w-[92px] max-md:px-5 font-medium" tabindex="0">Jobs</a>
            <a href="#exams" class="self-stretch px-12 pb-7 my-auto whitespace-nowrap w-[149px] max-md:px-5 font-medium" tabindex="0">Exams</a>
            <a href="#community" class="self-stretch px-6 pb-6 my-auto  whitespace-nowrap w-[149px] max-md:px-5 font-medium" tabindex="0" style="color: #D39C32;">Community</a>
            <a href="#career" class="self-stretch px-7 pb-7 my-auto w-[149px] max-md:px-5 font-medium" tabindex="0">Set career</a>
          </div>
          <div class="flex gap-7 items-center self-stretch my-auto pb-7">
            <button aria-label="Search" class="focus:outline-none" tabindex="0">
              <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/49a3a3a045b985a55707eba8ab4dc297ee7b92fbfb3a7d0619e2b94e72cb4123?placeholderIfAbsent=true&apiKey=e00d3c793b254127971e1d09475396f0" class="object-contain shrink-0 self-stretch my-auto aspect-[0.86] w-[18px]" alt="" />
            </button>
            <button aria-label="User Profile" class="focus:outline-none" tabindex="0">
              <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/46223d1a92a2cbeaad09a6f2b5461340d9763780d92d3d344d809308f236134c?placeholderIfAbsent=true&apiKey=e00d3c793b254127971e1d09475396f0" class="object-contain shrink-0 self-stretch my-auto w-11 aspect-square" alt="" />
            </button>
          </div>
        </div>
      </nav> -->

        <main>
            <div class="px-6 pt-3 "
                style="background-color: #FFFAD7; clip-path: polygon(
            0% 0%,
            49.25% 0%,
            100% 0%,
            100% 94.09%,
            0% 100%
        );">
                <div class="flex flex-col-reverse md:flex-row ">
                    <div class="flex  ">
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/1b01df948736859606b9cb333801c9fb445727bd0ae07c33dc1913610e2e3fe0?placeholderIfAbsent=true&apiKey=e00d3c793b254127971e1d09475396f0"
                            alt="Community welcome illustration"
                            class="object-contain grow w-full aspect-[1.33] max-md:mt-7 max-md:max-w-full  md:grow-0" />
                    </div>
                    <div class="flex flex-col place-content-start items-start md:items-center md:place-content-center">
                        <div class="flex flex-col w-full text-black place-content-center items-center">
                            <div class="text-3xl items-center">
                                <h1 class="font-semibold mb-3">Welcome to the community <br> page of <span
                                        class="text-[#D39C32]">Ihya</span></h1>
                                <p class="text-base">
                                    Scroll and explore the hundreds of ideas
                                    we have made up for you according to your interest
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-end px-6 mt-20 w-full ">
                <div class="self-stretch max-md:max-w-full mb-10">
                    <div class="flex gap-5 flex-col-reverse md:flex-row">
                        <div class="flex flex-col w-[70%] max-md:ml-0 max-md:w-full">
                            <div class="flex flex-col w-full place-content-center items-center">
                                <nav class="flex  font-medium  items-center place-content-start text-black "
                                    role="navigation" aria-label="Main navigation">
                                    <div
                                        class="hidden md:block flex gap-3 w-full items-center text-center  text-xs  mt-10">

                                        <a href="community.html"
                                            class="hover:text-orange-400 focus:outline-none  focus:ring-orange-400"
                                            tabindex="0">Community</a>
                                        <a href="resource.html"
                                            class= "hover:text-orange-400 focus:outline-none  focus:ring-orange-400"
                                            tabindex="0">Resources</a>
                                        <a href="features.html"
                                            class= "hover:text-orange-400 focus:outline-none  focus:ring-orange-400"
                                            tabindex="0">Features</a>
                                        <a href="myproducts.html"
                                            class=" hover:text-orange-400 focus:outline-none text-nowrap focus:ring-orange-400"
                                            tabindex="0">My Products</a>
                                    </div>
                                </nav>

                                <form id="form1" enctype="multipart/form-data"
                                    class=" flex flex-col py-3 mt-9 w-full bg-white rounded-3xl shadow-lg max-md:max-w-full"
                                    role="form" aria-label="Create post form">
                                    <div class="flex flex-col px-2.5 w-full max-md:max-w-full">
                                        <!--  -->
                                        <div
                                            class="flex flex-col gap-3.5 self-start w-full mt-4  mx-2.5 text-xl leading-snug text-black">
                                            <img loading="lazy"
                                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/c920a56dc7fa05fd0a0193dea8242e6e4b6a9b992f6f0339e8bdf217f68c6a26?placeholderIfAbsent=true&apiKey=e00d3c793b254127971e1d09475396f0"
                                                class="object-contain shrink-0 w-11 aspect-square" alt="User avatar" />
                                            <input type="text" class="textbase placeholder:text-lg" id="subject"
                                                name="title" placeholder="Subject">

                                            <div class="h-[1px] bg-black w-full mr-16"></div>

                                            <label for="postContent" class="sr-only">Write your post</label>
                                            <textarea id="postContent" class="self-start basis-auto placeholder:text-sm" placeholder="Write something here..."
                                                aria-label="Write your post" name="content"></textarea>
                                        </div>
                                    </div>
                                    <div
                                        class="w-full overflow-hidden mt-20 max-w-full text-black gap-3 px-5 flex place-content-end">
                                        <div class="flex flex-col text-sm leading-loose ">
                                            <select class="flex gap-7 px-3 py-2  bg-orange-100 rounded-lg"
                                                aria-label="Select post category" name="category">
                                                <option>Select a Category</option>
                                                @foreach ($categories as $id => $category)
                                                    <option value="{{ encrypt($id) }}">{{ $category }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <button type="submit"
                                            class="self-start text-sm h-full text-base font-semibold leading-loose rounded-xl border border-orange-400 border-solid hover:bg-orange-400 hover:text-white transition-colors">
                                            <span class="text-nowrap px-2">Create Post</span>
                                        </button>
                                    </div>
                                </form>

                                <div class="flex flex-wrap gap-2 items-start mt-28 ml-6 text-xl font-medium text-center text-black max-md:mt-10 max-md:max-w-full"
                                    role="navigation" aria-label="Category filters">
                                    <div class="flex flex-wrap gap-2 items-center">
                                        <button
                                            class="px-4  py-1 text-sm bg-orange-400 text-white rounded-xl border border-orange-400 border-solid "
                                            aria-current="page">All</button>
                                        <button
                                            class="px-4 text-sm py-1 rounded-xl border border-orange-400 border-solid w-[164px] hover:bg-orange-400 hover:text-white transition-colors text-lg ">Civil
                                            Services</button>
                                        <button
                                            class="px-4 text-sm  py-1 rounded-xl border border-orange-400 border-solid w-[175px] hover:bg-orange-400 hover:text-white transition-colors">Administration</button>
                                        <button
                                            class="px-4 text-sm py-1 rounded-xl border border-orange-400 border-solid w-[145px] hover:bg-orange-400 hover:text-white transition-colors max-md:px-5">Teaching</button>
                                        <button
                                            class="px-4 text-sm py-1 rounded-xl border border-orange-400 border-solid w-[159px] hover:bg-orange-400 hover:text-white transition-colors">Management</button>

                                        <button
                                            class="flex text-sm px-4 py-1 rounded-xl place-content-center items-center border border-yellow-700 border-solid hover:bg-yellow-700 hover:text-white transition-colors">
                                            Show more..
                                            <img loading="lazy"
                                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/7d8b70e6edd85850b472e607d0dce9b6c3f6149d06451cdcdb49b65e65154b6f?placeholderIfAbsent=true&apiKey=e00d3c793b254127971e1d09475396f0"
                                                class="object-contain shrink-0 aspect-[1.73] w-[15px]"
                                                alt="" />
                                        </button>
                                    </div>

                                </div>

                                @foreach ($posts as $post)
                                    <article
                                        class="flex flex-col items-start py-5 pr-16 pl-4 mt-20 w-full bg-white rounded-3xl shadow-lg max-md:pr-5 max-md:mt-10 max-md:max-w-full">
                                        <header class="flex gap-5 w-full">
                                            <div
                                                class=" w-full flex gap-1.5 place-content-around text-xl font-medium leading-snug text-black">
                                                <img loading="lazy"
                                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/c920a56dc7fa05fd0a0193dea8242e6e4b6a9b992f6f0339e8bdf217f68c6a26?placeholderIfAbsent=true&apiKey=e00d3c793b254127971e1d09475396f0"
                                                    class="object-contain shrink-0 w-11 aspect-square"
                                                    alt="Navas VPP's profile picture" />
                                                <div class="flex w-full flex-col">
                                                    <h3 class="self-start text-base font-bold basis-auto text-nowrap">
                                                        {{ $post->user->name }}</h3>
                                                    <p class="text-xs">{{ $post->created_at->diffForHumans() }}</p>

                                                </div>
                                                <div
                                                    class="flex items-start text-orange-800  h-auto rounded-lg px-1 py-0">
                                                    <p class="font-semibold flex text-sm text-nowrap">
                                                        {{ $post->category->name }}
                                                    </p>
                                                </div>
                                            </div>

                                        </header>
                                        <h2 class="mt-6 text-xl font-semibold leading-snug text-yellow-700">
                                            {{ $post->title }}</h2>
                                        <p
                                            class="self-stretch mt-3 text-sm leading-6 text-neutral-600 max-md:max-w-full">
                                            {{ $post->content }}
                                        </p>
                                        <footer class="flex gap-10 mt-9 text-xl text-center">
                                            <button data-post-id="{{ encrypt($post->id) }}"
                                                class="{{ $post->whoLiked->isNotEmpty() ? 'liked' : '' }} flex like-btn flex-col my-auto  whitespace-nowrap  hover:text-white transition-colors duration-400 ">
                                                <span
                                                    class="parent-span z-10 px-5 py-1 items-center   rounded-xl {{ $post->whoLiked->isNotEmpty() ? 'bg-yellow-700 text-white' : 'bg-orange-50 hover:bg-yellow-700' }}  cursor-pointer border border-white shadow-md border-solid text-base">
                                                    <span
                                                        class="is_liked">{{ $post->whoLiked->isNotEmpty() ? 'Voted' : 'Vote' }}</span>
                                                    <span class="like-count">{{ $post->likes_count }}</span></span>
                                            </button>
                                            <div class="flex gap-1 font-light text-black text-opacity-50">
                                                <img loading="lazy"
                                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/ceecfcfa45eae15a04c9edc0ba1d6b64ba2c17844a02f0c2f8498d445b9d13a7?placeholderIfAbsent=true&apiKey=e00d3c793b254127971e1d09475396f0"
                                                    class="object-contain shrink-0 my-auto w-6 aspect-[1.09]"
                                                    alt="" />
                                            </div>
                                            <div class="flex place-content-center items-center self-stretch">
                                                <h2 class="basis-auto text-sm">
                                                    {{ $post->comments_count }}
                                                    <button class="comment-btn" data-post-id="{{ $post->id }}">
                                                        {{ $post->comments_count === 1 ? 'comment' : 'comments' }}
                                                    </button>
                                                </h2>
                                            </div>

                                        </footer>
                                        <!-- #region comment-->
                                        @foreach ($post->comments as $comment)
                                            <div class="hidden flex w-full items-start mt-6"
                                                id="{{ $post->id }}">
                                                {{-- <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/ceecfcfa45eae15a04c9edc0ba1d6b64ba2c17844a02f0c2f8498d445b9d13a7?placeholderIfAbsent=true&apiKey=e00d3c793b254127971e1d09475396f0"
                                                    alt=""> --}}
                                                <div class="flex-col">
                                                    <div class="flex gap-5 ml-2 text-sm">
                                                        <p>{{ $comment->user->name }}</p>
                                                        <p>{{ $comment->created_at ? $comment->created_at->diffForHumans() : ' ' }}
                                                        </p>

                                                    </div>
                                                    <div class="bg-orange-100 rounded-xl px-4 py-3 text-sm">
                                                        <p>{{ $comment->content }}
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <div class="flex gap-2 ml-6">
                                                            <div class="flex gap-2">
                                                                <p>Like</p> <button
                                                                    data-comment-id="{{ $comment->id }}"
                                                                    class="reply-btn">replies</button>
                                                            </div>
                                                        </div>
                                                        <div class="flex place-content-end">

                                                            <!-- #region reply-->




                                                            <div class=" hidden w-[75%] items-start mt-1"
                                                                id="{{ $comment->id }}">

                                                                @foreach ($comment->children as $child)
                                                                    <div class="flex-col">
                                                                        <div class="flex gap-5 ml-2 text-sm">
                                                                            <p>{{ $child->user->name }}</p>
                                                                            <p>{{ $child->created_at ? $child->created_at->diffForHumans() : 0 }}
                                                                            </p>
                                                                        </div>
                                                                        <div
                                                                            class="bg-orange-100 rounded-xl px-4 py-3 text-sm">
                                                                            <p>{{ $child->content }}</p>
                                                                        </div>
                                                                        <div class="flex gap-2 ml-6">
                                                                            <div class="flex gap-2">
                                                                                <p>Like</p>
                                                                                <p>replies</p>
                                                                            </div>
                                                                            <!-- #region reply-->
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>


                                                            <!-- #endregion reply-->

                                                            <!-- #endregion reply -->

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </article>
                                @endforeach
                            </div>
                        </div>

                        <div
                            class="flex flex-col ml-5 w-full max-md:ml-0 max-md:w-fullflex gap-5 flex-col-reverse md:w-[30%]">
                            <div class="flex flex-col mt-4 w-full text-xl font-medium text-black max-md:mt-10">
                                <div class="flex place-content-center">
                                    <h2 class=" text-2xl font-semibold text-center leading-snug">About <span
                                            class="font-semibold text-orange-400">Ihya</span> Community</h2>
                                </div>
                                <div
                                    class="flex flex-col items-start pt-1 pr-6 pb-2 pl-3 mt-1.5 w-full bg-white rounded-3xl shadow-lg text-black text-opacity-50 max-md:pr-5">
                                    <h3 class="leading-snug text-black text-center mt-3">Welcome to Ihya Community</h3>
                                    <p class="self-stretch mt-2 text-xs leading-5">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book. It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                        with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                        recently with desktop publishing software like Aldus PageMaker including
                                        versions of Lorem Ipsum.
                                    </p>
                                    <div class="flex gap-1 w-full mt-2.5 text-white" aria-label="Community members">
                                        <span
                                            class="px-1 text-center whitespace-nowrap bg-red-600 rounded-full h-[33px] w-[33px]">As</span>

                                        <span
                                            class="px-1 text-center whitespace-nowrap bg-blue-700 rounded-full h-[33px] w-[33px]">an</span>
                                        <span
                                            class="px-px text-xs text-center whitespace-nowrap bg-purple-800 rounded-full h-[33px] w-[33px]">+295</span>
                                        <span class="my-auto text-xs text-black text-opacity-50">300 Members</span>
                                    </div>
                                    <div class="flex gap-1.5 mt-3.5 leading-snug items-center">
                                        <img loading="lazy"
                                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/d786b13412a19ad37f33de054dcfecf88a43fc70a8835461169ec71cc9786f8e?placeholderIfAbsent=true&apiKey=e00d3c793b254127971e1d09475396f0"
                                            alt="Admin icon" class="object-contain shrink-0 w-11 aspect-square" />
                                        <span class="text-base">1 Admin</span>
                                    </div>
                                </div>

                                <div class="flex gap-3.5 self-start mt-10 leading-snug max-md:mt-10">
                                    <img loading="lazy"
                                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/bad0ac9e04b028919d15be70790be45ff9400ee3d536e3aaec5eb030b536ffa2?placeholderIfAbsent=true&apiKey=e00d3c793b254127971e1d09475396f0"
                                        class="object-contain shrink-0 self-start aspect-[0.96] w-[22px]"
                                        alt="Links icon" />
                                    <h3 class="basis-auto font-semibold">Helpful Links</h3>
                                </div>

                                <nav aria-label="Helpful links navigation">
                                    <a href="#jobs"
                                        class="flex gap-2 px-3.5 py-5 mt-3.5 leading-snug  bg-white rounded-xl shadow-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-400"
                                        tabindex="0">
                                        <div class="flex shrink-0 rounded-full bg-blue-100 place-content-center bg-opacity-90 h-[39px] w-[39px]"
                                            aria-hidden="true"><img width="24px"
                                                src="{{ asset('assets/vector.svg') }}" alt=""></div>
                                        <div class="flex place-content-center items-center"><span
                                                class="flex-auto items-center">Private and Govt jobs</span></div>
                                    </a>
                                    <a href="#jobs"
                                        class="flex gap-2 px-3.5 py-5 mt-3.5 leading-snug  bg-white rounded-xl shadow-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-400"
                                        tabindex="0">
                                        <div class="flex shrink-0 rounded-full bg-blue-100 place-content-center bg-opacity-90 h-[39px] w-[39px]"
                                            aria-hidden="true"><img width="24px"
                                                src="{{ asset('assets/vector.svg') }}" alt=""></div>
                                        <div class="flex place-content-center items-center "><span
                                                class="flex-auto items-center">UPSC vacancies</span></div>
                                    </a>
                                    <a href="#jobs"
                                        class="flex gap-2 px-3.5 py-5 mt-3.5 leading-snug  bg-white rounded-xl shadow-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-400"
                                        tabindex="0">
                                        <div class="flex shrink-0 rounded-full bg-blue-100 place-content-center bg-opacity-90 h-[39px] w-[39px]"
                                            aria-hidden="true"><img width="24px"
                                                src="{{ asset('assets/vector.svg') }}" alt=""></div>
                                        <div class="flex place-content-center items-center"><span
                                                class="flex-auto items-center">Jobs webinar</span></div>
                                    </a>
                                    <a href="#jobs"
                                        class="flex gap-2 px-3.5 py-5 mt-3.5 leading-snug  bg-white rounded-xl shadow-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-400"
                                        tabindex="0">
                                        <div class="flex shrink-0 rounded-full bg-blue-100 place-content-center bg-opacity-90 h-[39px] w-[39px]"
                                            aria-hidden="true"><img width="24px"
                                                src="{{ asset('assets/vector.svg') }}" alt=""></div>
                                        <div class="flex place-content-center items-center"><span
                                                class="flex-auto items-center">Govt internship</span></div>
                                    </a>
                                </nav>
                            </div>
                            <h2
                                class="mt-12 mr-72 text-xl font-medium leading-snug text-black max-md:mt-10 max-md:mr-2.5">
                                Features</h2>

                            <section class="feature-cards">
                                <div class="flex flex-col w-full">
                                    <article class="feature-card">
                                        <img loading="lazy"
                                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/fab36d759d6e1b798a0141b5a0a85a3fc3a71be10871dc951b5f9a1264935889?placeholderIfAbsent=true&apiKey=e00d3c793b254127971e1d09475396f0"
                                            class="object-contain mt-5 max-w-full rounded-xl aspect-[1.78] w-auto"
                                            alt="Feature illustration" />
                                        <div
                                            class="flex flex-col items-start pt-1 pr-14 pb-3.5 pl-3 max-w-full bg-white rounded-none shadow-lg w-auto max-md:pr-5">
                                            <h3 class="text-xl pt-4 pb-2 font-medium leading-7 text-black">Title comes
                                                here</h3>
                                            <p class="text-xs leading-4 text-black text-opacity-80">Lorem Ipsum is
                                                simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                                has been the industry's</p>
                                        </div>
                                    </article>

                                    <article class="feature-card">
                                        <img loading="lazy"
                                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/d2af622ddc1527970ffb7ca0e72b74d1fa1550b518f0b128938ce080df09db64?placeholderIfAbsent=true&apiKey=e00d3c793b254127971e1d09475396f0"
                                            class="object-contain mt-14 max-w-full rounded-xl aspect-[1.78] w-auto max-md:mt-10"
                                            alt="Feature illustration" />
                                        <div
                                            class="flex flex-col items-start pt-1 pr-14 pb-3.5 pl-3 max-w-full bg-white rounded-none shadow-lg w-auto max-md:pr-5">
                                            <h3 class="text-xl pt-4 pb-2 font-medium leading-7 text-black">Title comes
                                                here</h3>
                                            <p class="text-xs leading-4 text-black text-opacity-80">Lorem Ipsum is
                                                simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                                has been the industry's</p>
                                        </div>
                                    </article>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>


        </main>

        <footer
            class="flex flex-col py-10 pr-24 pl-20 mt-20 w-full  min-h-[425px] max-md:px-5 max-md:mt-10 max-md:max-w-full"
            role="contentinfo" style="background-color: #D39C32;">
            <div class="flex flex-wrap gap-10 items-center w-full max-md:max-w-full">
                <img src="assets/ihya footer.png" alt="">
                <nav class="flex flex-col self-stretch my-auto text-xl leading-none text-white w-[124px]"
                    aria-label="Useful links">
                    <h3 class="font-bold">Useful links</h3>
                    <ul class="flex flex-col mt-5 w-full font-medium">
                        <li><a href="#login"
                                class="hover: focus:outline-none hover:cursor-pointer focus:ring-white rounded">Log
                                in</a></li>
                        <li class="mt-5"><a href="#jobs"
                                class="hover: focus:outline-none hover:cursor-pointer focus:ring-white rounded">Jobs</a>
                        </li>
                        <li class="mt-5"><a href="#community"
                                class="hover: focus:outline-none hover:cursor-pointer focus:ring-white rounded">Community</a>
                        </li>
                        <li class="mt-5"><a href="#career"
                                class="hover: focus:outline-none hover:cursor-pointer focus:ring-white rounded">Career</a>
                        </li>
                    </ul>
                </nav>
                <nav class="flex flex-col self-stretch my-auto text-xl leading-none text-white w-[132px]"
                    aria-label="Related links">
                    <h3 class="font-bold">Related links</h3>
                    <ul class="flex flex-col mt-5 w-28 max-w-full font-medium">
                        <li><a href="#about"
                                class="hover: focus:outline-none hover:cursor-pointer focus:ring-white rounded">About
                                Us</a></li>
                        <li class="mt-5"><a href="#contact"
                                class="hover: focus:outline-none hover:cursor-pointer focus:ring-white rounded">Contact
                                Us</a></li>
                        <li class="mt-5"><a href="#faq"
                                class="hover: focus:outline-none hover:cursor-pointer focus:ring-white rounded">FAQ</a>
                        </li>
                        <li class="mt-5"><a href="#guide"
                                class="hover: focus:outline-none hover:cursor-pointer focus:ring-white rounded">Guide</a>
                        </li>
                    </ul>
                </nav>
                <div class="flex flex-col self-stretch my-auto w-[142px]">
                    <h3 class="text-xl font-medium leading-none text-white">Follow us</h3>
                    <div class="flex gap-3 items-center mt-2 w-full">
                        <a href="#social1" class="focus:outline-none hover:cursor-pointer focus:ring-white rounded"
                            aria-label="Social media link">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/544444cbdc39572295adc3512609a54b0d7b5f60b627ef7865b9cb9d9271d67b?apiKey=e00d3c793b254127971e1d09475396f0&"
                                class="object-contain shrink-0 self-stretch my-auto aspect-square w-[35px]"
                                alt="" />
                        </a>
                        <a href="#social2" class="focus:outline-none hover:cursor-pointer focus:ring-white rounded"
                            aria-label="Social media link">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/a0e76f8decbc27146d36f6aa02cbcae87cde11aafbc7818fdede1e87b57e1679?apiKey=e00d3c793b254127971e1d09475396f0&"
                                class="object-contain shrink-0 self-stretch my-auto aspect-square w-[47px]"
                                alt="" />
                        </a>
                        <a href="#social3" class="focus:outline-none hover:cursor-pointer focus:ring-white rounded"
                            aria-label="Social media link">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/8bd89289919b9daced6aeaf2252afca7c1881afb3fb10db5e3c623e6f2846100?apiKey=e00d3c793b254127971e1d09475396f0&"
                                class="object-contain shrink-0 self-stretch my-auto aspect-[1.41] w-[38px]"
                                alt="" />
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="gap-2.5 self-stretch p-2.5 mt-2.5 w-full text-base font-medium leading-tight text-center text-white max-md:max-w-full">
                All rights reserved
                <span class="font-bold">© Ihya 2024</span>
            </div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#form1').on('submit', function(e) {
                e.preventDefault();

                let formData = new FormData(this);
                $.ajax({
                    url: "{{ route('forum_post.store') }}",
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    contentType: false,
                    processData: false,
                    data: formData,
                    success: function(response) {
                        console.log('hmmm')
                        $('#form1').trigger('reset');
                    },
                    error: function(xhr, status, error) {
                        alert('Failed to create post. Please try again.');

                    }
                });
            });

            $(".like-btn").on('click', function(e) {
                const btn = $(this);
                if (btn.hasClass('processing')) return; // Prevent multiple clicks during processing

                const id = btn.attr('data-post-id');
                console.log(id)
                const likeCountElement = btn.find('.like-count'); // Find the like count span

                let currentLikes = parseInt(likeCountElement.text(), 10);
                // Optimistic UI update
                btn.toggleClass('liked');
                if (btn.hasClass('liked')) {
                    btn.find('.is_liked').text('Voted')
                    likeCountElement.text(currentLikes + 1); // Update like count
                    btn.find('.parent-span') // Ensure proper selector
                        .addClass('bg-yellow-700 text-white') // Add classes
                        .removeClass(
                            'bg-orange-50 hover:bg-yellow-700'
                        ); // Remove unwanted classes
                } else {
                    likeCountElement.text(currentLikes - 1); // Update like count
                    btn.find('.is_liked').text('Vote')
                    btn.find('.parent-span') // Ensure proper selector
                        .addClass('bg-orange-50 hover:bg-yellow-700') // Add classes
                        .removeClass(
                            'bg-yellow-700 text-white'); // Remove unwanted classes
                }

                btn.addClass('processing'); // Add a processing class to prevent multiple requests

                // Send the actual server request
                $.ajax({
                    url: "{{ route('forum_like') }}",
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: {
                        postId: id
                    },
                    success: function(response) {
                        // Optionally update the like count with the server response, if needed
                        // currentLikes = parseInt(likeCountElement.text(), 10);
                        // likeCountElement.text(response.likes);
                        // btn.toggleClass('liked');


                    },
                    error: function(xhr, status, error) {
                        // Rollback the optimistic UI update in case of failure


                        alert('Failed to process your like. Please try again.');
                    },

                    complete: function() {
                        btn.removeClass('processing'); // Remove the processing class
                    }
                });
            });

            $('.comment-btn').click(function() {
                let btnId = $(this).attr('data-post-id'); // Get the value of `data-post-id`
                $('#' + btnId).toggle(); // Toggle visibility of the target element
            });
            $('.reply-btn').click(function() {
                let btnId = $(this).attr('data-comment-id'); // Get the value of `data-comment-id`
                $('#' + btnId).toggle(); // Toggle visibility of the target element
            });


        })
    </script>

</body>

</html>
