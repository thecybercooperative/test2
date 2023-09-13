<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    @vite('resources/css/app.css')
    <title>The Cyber Cooperative | {{$post->title}}</title>

</head>

<body>
    @include('partials.nav')

    <!-- blog section -->
    <div class="bg-gray-900 lg:flex lg:flex-row">
        <div class="lg:basis-2/3 p-10">
            <div class="py-10">
                <p class="text-gray-300 font-bold">{{date('Y-m-d', strtotime($post->publish_date))}}</p>
                <h2 class="text-4xl font-bold leading-10 tracking-tight text-white">{{$post->title}}</h2>
                <p class="mt-2 text-base leading-7 text-gray-400">{{$post->excerpt}}</p>


                <div class="flex items-center mt-4">
                    <img class="w-10 h-10 rounded-full mr-4" src="{{$post->author->avatar}}" alt="Avatar of Jonathan Reinink">
                    <div class="text-sm">
                        <p class="text-white leading-none">{{$post->author->name}}</p>
                        <p class="text-gray-500">Author</p>
                    </div>
                </div>



            </div>
        </div>
        <div style="background-image: url('{{$post->featured_image}}')" class="lg:basis-1/3"></div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="max-w-4xl mx-auto px-10 py-10 prose prose-slate lg:prose-xl">
                    <p>{!! $post->content !!}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>

    <!-- end blog section -->



    <!-- start CTA section -->



    <div class="relative isolate overflow-hidden bg-gray-900 px-6 py-24 text-center shadow-2xl sm:px-16">
        <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight text-white sm:text-4xl">Join us today</h2>
        <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-300">Don't wait! Join us now to see what we've got going on.</p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="https://discord.gg/9yPVMVDwgV" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Join Discord</a>

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

    @include('partials.footer')


</body>

</html>