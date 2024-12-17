@extends('ihya.app')
@section('content')
    <section class="flex flex-col items-center mt-14 max-md:mt-10" aria-labelledby="browse-section">
        <h2 id="browse-section" class="text-4xl font-semibold text-black mb-3">Browse your job by your interest</h2>
        <p class="mt-2 text-xl leading-6 text-center text-black mb-16">
            Explore the opportunities by Industry
            <br />
            Find your ideal role
        </p>

        <div class="flex flex-row gap-5 text-center" role="region" aria-label="Career Options">
            <div class="flex flex-col place-content-center px-20 py-12 text-center bg-white shadow-2xl rounded-[45px] max-sm:hidden"
                role="article" tabindex="0">
                <div class="content-center text-4xl font-semibold text-orange-400">
                    Teacher
                </div>
                <div class="mt-8 text-xl leading-7 text-black w-[262px]">
                    Responsible for Planning, designing, and overseeing construction projects
                </div>
            </div>
            <div class="flex flex-col justify-start items-center place-content-center px-20 py-12 bg-white shadow-2xl rounded-[45px] max-md:px-5 max-sm:hidden"
                role="article" tabindex="0">
                <div class="self-center text-4xl font-semibold text-orange-400">
                    Professor
                </div>
                <div class="mt-8 text-xl leading-8 text-black w-[262px]">
                    Responsible for Planning, designing, and overseeing construction projects
                </div>
            </div>
            <div class="flex flex-col justify-start items-center place-content-center px-20 py-12 shadow-2xl rounded-[45px] max-md:px-5 max-sm:hidden"
                style="background-color: #D39C32;" role="article" tabindex="0">
                <div class="self-center text-4xl font-semibold text-white">
                    Professor
                </div>
                <div class="mt-8 text-xl leading-8 text-white w-[262px]">
                    Responsible for Planning, designing, and overseeing construction projects
                </div>
            </div>
            <div class="flex flex-col justify-start items-center place-content-center px-20 py-12 bg-white shadow-2xl rounded-[45px] max-md:px-5 max-sm:hidden"
                role="article" tabindex="0">
                <div class="self-center text-4xl font-semibold text-orange-400">
                    Professor
                </div>
                <div class="mt-8 text-xl leading-8 text-black w-[262px]">
                    Responsible for Planning, designing, and overseeing construction projects
                </div>
            </div>
            <div class="flex flex-col justify-start items-center place-content-center px-20 py-12 bg-white shadow-2xl rounded-[45px] max-md:px-5 max-sm:hidden"
                role="article" tabindex="0">
                <div class="self-center text-4xl font-semibold text-orange-400">
                    Professor
                </div>
                <div class="mt-8 text-xl leading-8 text-black w-[262px]">
                    Responsible for Planning, designing, and overseeing construction projects
                </div>
            </div>

        </div>
    </section>
    <img loading="lazy" src="{{ asset('assets/src/map homepage.svg') }}"
        class="object-contain mt-40 w-full aspect-[3.75] max-md:mt-10 max-md:max-w-full"
        alt="Job categories illustration" />
@endsection
