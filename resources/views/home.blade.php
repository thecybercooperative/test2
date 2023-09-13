<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    @vite('resources/css/app.css')
    <title>The Cyber Cooperative</title>

</head>

<body>
    @include('partials.nav')


    <!-- Hero section -->

    <div class="relative bg-gray-900">
        <div class="mx-auto max-w-7xl lg:grid lg:grid-cols-12 lg:gap-x-8 lg:px-8">
            <div class="px-6 pb-24 pt-10 sm:pb-32 lg:col-span-7 lg:px-0 lg:pb-56 lg:pt-48 xl:col-span-6">
                <div class="mx-auto max-w-2xl lg:mx-0">

                    <img src="/images/title.png" alt="The Cyber Cooperative">
                    <p class="mt-6 text-lg leading-8 text-gray-400">The Cyber Cooperative is THE place to level-up in your cybersecurity game. Join over 1000 cybersecurity professionals, students, and enthusiasts today to level-up in your cybersecurity journey.</p>
                    <div class="mt-10 flex items-center gap-x-6">
                        <a href="https://discord.gg/9yPVMVDwgV" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Join the Discord</a>
                        <a href="#about" class="text-sm font-semibold leading-6 text-gray-100">Learn more <span aria-hidden="true">→</span></a>
                    </div>
                </div>
            </div>
            <div class="relative lg:col-span-5 lg:-mr-8 xl:absolute xl:inset-0 xl:left-1/2 xl:mr-0">
                <img class="aspect-[3/2] w-full bg-gray-50 object-cover lg:absolute lg:inset-0 lg:aspect-auto lg:h-full" src="/images/banner-notext.png" alt="">
            </div>
        </div>
    </div>

    <!-- End hero section -->

    <!-- about section -->
    <a name="about" id="about"></a>
    <div class="bg-gray-900 px-10">
        <h2 class="text-2xl font-bold leading-10 tracking-tight text-white">About us</h2>
        <subtitle class="text-gray-400">What we've got going on. (All good things, we swear)</subtitle>
        <div class="mt-5 grid md:grid-cols-2 gap-6 text-gray-200 items-stretch lg:grid-cols-3 sm:grid-cols-1">

            <div class="flex flex-col border border-transparent bg-slate-900 border-slate-800 hover:shadow-md p-6 relative rounded shadow-lg transition">
                <div class="flex items-center"><svg astro-icon="flat-color-icons:template" class="h-10 w-10" viewBox="0 0 48 48">
                        <path d="M4 7h40v34H4z" fill="#BBDEFB"></path>
                        <path d="M9 12h30v5H9z" fill="#3F51B5"></path>
                        <g fill="#2196F3">
                            <path d="M9 21h13v16H9zM26 21h13v16H26z"></path>
                        </g>
                    </svg>
                    <div class="font-bold text-xl ml-4">CTF</div>
                </div>
                <p class="text-muted text-gray-400 mt-4 text-md">Amazing CTF challenges provided weekly, written by the amazing team at CTFd.io</p>
            </div>
            <div class="flex flex-col border border-transparent bg-slate-900 border-slate-800 hover:shadow-md p-6 relative rounded shadow-lg transition">
                <div class="flex items-center"><svg astro-icon="flat-color-icons:gallery" class="h-10 w-10" viewBox="0 0 48 48">
                        <path d="M41 42H13c-2.2 0-4-1.8-4-4V18c0-2.2 1.8-4 4-4h28c2.2 0 4 1.8 4 4v20c0 2.2-1.8 4-4 4z" fill="#E65100"></path>
                        <path d="M35 36H7c-2.2 0-4-1.8-4-4V12c0-2.2 1.8-4 4-4h28c2.2 0 4 1.8 4 4v20c0 2.2-1.8 4-4 4z" fill="#F57C00"></path>
                        <circle cx="30" cy="16" r="3" fill="#FFF9C4"></circle>
                        <path d="M17 17.9 8 31h18z" fill="#942A09"></path>
                        <path d="M28 23.5 22 31h12z" fill="#BF360C"></path>
                    </svg>
                    <div class="font-bold text-xl ml-4">Events</div>
                </div>
                <p class="text-muted text-gray-400 mt-4 text-md">Educational events with cybersecurity experts and speakers who share their knowledge on a wide range of topics, from general career advice Q&amp;A to in-depth OSINT tutorials</p>
            </div>
            <div class="flex flex-col border border-transparent bg-slate-900 border-slate-800 hover:shadow-md p-6 relative rounded shadow-lg transition">
                <div class="flex items-center"><svg astro-icon="flat-color-icons:todo-list" class="h-10 w-10" viewBox="0 0 48 48">
                        <g fill="#3F51B5">
                            <path d="m17.8 18.1-7.4 7.3-4.2-4.1L4 23.5l6.4 6.4 9.6-9.6zM17.8 5.1l-7.4 7.3-4.2-4.1L4 10.5l6.4 6.4L20 7.3zM17.8 31.1l-7.4 7.3-4.2-4.1L4 36.5l6.4 6.4 9.6-9.6z"></path>
                        </g>
                        <g fill="#90CAF9">
                            <path d="M24 22h20v4H24zM24 9h20v4H24zM24 35h20v4H24z"></path>
                        </g>
                    </svg>
                    <div class="font-bold text-xl ml-4">Rewards</div>
                </div>
                <p class="text-muted text-gray-400 mt-4 text-md">Use points from CTF challenge and community involvement to earn real-life prizes and rewards</p>
            </div>
            <div class="flex flex-col  border border-transparent bg-slate-900 border-slate-800 hover:shadow-md p-6 relative rounded shadow-lg transition">
                <div class="flex items-center"><svg astro-icon="tabler:rocket" class="h-10 w-10" viewBox="0 0 24 24">
                        <g fill="none" class="icon-tabler" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <path d="M4 13a8 8 0 0 1 7 7 6 6 0 0 0 3-5 9 9 0 0 0 6-8 3 3 0 0 0-3-3 9 9 0 0 0-8 6 6 6 0 0 0-5 3"></path>
                            <path d="M7 14a6 6 0 0 0-3 6 6 6 0 0 0 6-3"></path>
                            <circle cx="15" cy="9" r="1"></circle>
                        </g>
                    </svg>
                    <div class="font-bold text-xl ml-4">Community</div>
                </div>
                <p class="text-muted text-gray-400 mt-4 text-md">A community of over 1000 cybersecurity experts, professionals, and students to connect with</p>
            </div>
            <div class="flex flex-col  border border-transparent bg-slate-900 border-slate-800 hover:shadow-md p-6 relative rounded shadow-lg transition">
                <div class="flex items-center"><svg astro-icon="flat-color-icons:advertising" class="h-10 w-10" viewBox="0 0 48 48">
                        <g fill="#90CAF9">
                            <path d="M17.4 33H15v-4h4l.4 1.5c.3 1.3-.7 2.5-2 2.5zM37 36s-11.8-7-18-7V15c5.8 0 18-7 18-7v28z"></path>
                        </g>
                        <g fill="#283593">
                            <circle cx="9" cy="22" r="5"></circle>
                            <path d="M40 19h-3v6h3c1.7 0 3-1.3 3-3s-1.3-3-3-3zM18.6 41.2c-.9.6-2.5 1.2-4.6 1.4-.6.1-1.2-.3-1.4-1L8.2 27.9S17 21.7 17 29c0 5.5 1.5 8.4 2.2 9.5.5.7.5 1.6 0 2.3-.2.2-.4.3-.6.4z"></path>
                        </g>
                        <path d="M9 29h10V15H9c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2z" fill="#3F51B5"></path>
                        <path d="M38 38c-1.1 0-2-.9-2-2V8c0-1.1.9-2 2-2s2 .9 2 2v28c0 1.1-.9 2-2 2z" fill="#42A5F5"></path>
                    </svg>
                    <div class="font-bold text-xl ml-4">Blog content</div>
                </div>
                <p class="text-muted text-gray-400 mt-4 text-md">Be the first to get access to educational blogs, written by experts to help you level up your cybersecurity career.</p>
            </div>
            <div class="flex flex-col  border border-transparent bg-slate-900 border-slate-800 hover:shadow-md p-6 relative rounded shadow-lg transition">
                <div class="flex items-center"><svg astro-icon="flat-color-icons:voice-presentation" class="h-10 w-10" viewBox="0 0 48 48">
                        <path d="M40 22h-8l-4 4V12c0-2.2 1.8-4 4-4h8c2.2 0 4 1.8 4 4v6c0 2.2-1.8 4-4 4z" fill="#2196F3"></path>
                        <circle cx="17" cy="19" r="8" fill="#FFA726"></circle>
                        <path d="M30 36.7S26.4 30 17 30 4 36.7 4 36.7V40h26v-3.3z" fill="#607D8B"></path>
                    </svg>
                    <div class="font-bold text-xl ml-4">A place to be</div>
                </div>
                <p class="text-muted text-gray-400 mt-4 text-md">Above all else, since it’s a Discord server, it’s just a place to be if you feel like being somewhere - feel free to just chat casually, we’re just chillin ya know?</p>
            </div>
        </div>
    </div>

    <!-- end about section -->

    <!-- start stats section -->

    <div class="bg-gray-900 py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                    <dt class="text-base leading-7 text-gray-400">Members</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-white sm:text-5xl">1.2k</dd>
                </div>
                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                    <dt class="text-base leading-7 text-gray-400">Members online</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-white sm:text-5xl">600</dd>
                </div>
                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                    <dt class="text-base leading-7 text-gray-400">CTF challenge week</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-white sm:text-5xl">12</dd>
                </div>
            </dl>
        </div>
    </div>

    <!-- end stats section -->

    <!-- blog section -->

    <div class="bg-gray-900">
        <div class="mx-auto max-w-7xl px-6 py-16 sm:py-24 lg:px-8">
            <h2 class="text-2xl font-bold leading-10 tracking-tight text-white">Blog</h2>
            <p class="mt-6 max-w-2xl text-base leading-7 text-gray-400">Check out our latest blog posts below.</p>
        </div>

    </div>

    <div class="bg-gray-900">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">


                @forelse ($posts as $post)

                <article class="flex flex-col items-start justify-between">
                    <div class="relative w-full">
                        <img src="{{ $post->featured_image }}" alt="" class="aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
                        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                    </div>
                    <div class="max-w-xl">
                        <div class="group relative">
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-white group-hover:text-gray-300">
                                <a href="/blog/{{ $post->slug }}">
                                    <span class="absolute inset-0"></span>
                                    {{ $post->title }}
                                </a>
                            </h3>
                            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-400">{{$post->excerpt}}</p>
                        </div>

                    </div>

                </article>


                @empty
                <p>No blog posts available.</p>
                @endforelse

            </div>
        </div>
    </div>

    <!-- end blog section -->


    <!-- FAQ section -->

    <div class="bg-gray-900">
        <div class="mx-auto max-w-7xl px-6 py-16 sm:py-24 lg:px-8">
            <h2 class="text-2xl font-bold leading-10 tracking-tight text-white">Frequently asked questions</h2>
            <p class="mt-6 max-w-2xl text-base leading-7 text-gray-300">Have a different question and can’t find the answer you’re looking for? Reach out for support by messaging <a href="https://discordapp.com/users/994628074211643473" class="font-semibold text-indigo-400 hover:text-indigo-300">@pure.energy</a> on Discord and we’ll get back to you as soon as we can.</p>
            <div class="mt-20">
                <dl class="space-y-16 sm:grid sm:grid-cols-3 sm:gap-x-6 sm:gap-y-16 sm:space-y-0 lg:gap-x-10">
                    <div>
                        <dt class="text-base font-semibold leading-7 text-white">How do I join?</dt>
                        <dd class="mt-2 text-base leading-7 text-gray-300">Simply access <a href="https://discord.gg/9yPVMVDwgV" class="font-semibold text-indigo-400 hover:text-indigo-300">this link</a> to join our Discord server. Of course, you'll need a Discord account.</dd>
                    </div>
                    <div>
                        <dt class="text-base font-semibold leading-7 text-white">What's this about? What's the point of Cyber Cooperative?</dt>
                        <dd class="mt-2 text-base leading-7 text-gray-300">The Cyber Cooperative aims to advance your cybersecurity knowledge and career. Whether you're a professional, student, or enthusiast, our platform offers a supportive space for learning and networking. We provide educational content, resources, expert talks, and events like Capture the Flag competitions and workshops to enhance your skills.</dd>
                    </div>
                    <div>
                        <dt class="text-base font-semibold leading-7 text-white">Who is in charge of this?</dt>
                        <dd class="mt-2 text-base leading-7 text-gray-300">Currently, the Cyber Cooperative is sponsored by Tenable, but as we grow as a community we are open to having other organizations and individuals to join our team as well to help the Cooperative be at its best 💪</dd>
                    </div>


                    <!-- More questions... -->
                </dl>
            </div>
        </div>
    </div>

    <!-- end FAQ section -->

    <!-- start CTA section -->



    <div class="relative isolate overflow-hidden bg-gray-900 px-6 py-24 text-center shadow-2xl sm:px-16">
        <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight text-white sm:text-4xl">Join us today</h2>
        <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-300">Don't wait! Join us now to see what we've got going on.</p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="https://discord.gg/9yPVMVDwgV" class="rounded-md  px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-300 bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Join Discord</a>

        </div>
        <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-x-1/2 [mask-image:radial-gradient(closest-side,white,transparent)]" aria-hidden="true">
            <circle cx="512" cy="512" r="512" fill="url(#827591b1-ce8c-4110-b064-7cb85a0b1217)" fill-opacity="0.7" />
            <defs>
                <radialGradient id="827591b1-ce8c-4110-b064-7cb85a0b1217">
                    <stop stop-color="#7775D6" />
                    <stop offset="1" stop-color="#E935C1" />
                </radialGradient>
            </defs>
        </svg>
    </div>



    <!-- end CTA section -->

    <!-- start footer -->

    @include('partials.footer')


    <!-- end footer -->

</body>

</html>