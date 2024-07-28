@vite('resources/css/app.css')
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    </head>
    <body>
        <header class="bg-kLightBlue">
            <nav class="font-[Inter] flex items-center justify-between px-8 py-4">
                <div>
                    <h3 class="font-bold text-kDarkBlue text-xl">Tel-A-PrintHub</h3>
                </div>
                <div>
                    <ul class="flex gap-x-3">
                        <a href="">
                            <li class="text-l font-semibold text-kDirtyWhite bg-kDarkBlue p-2">Home</li>
                        </a>
                        <a href="">
                            <li class="text-l font-semibold text-kDarkBlue  p-2">How it works</li>
                        </a>
                        <a href="">
                            <li class="text-l font-semibold text-kDarkBlue  p-2">FAQs</li>
                        </a>
                        <a href="">
                            <li class="text-l font-semibold text-kDarkBlue  p-2">Become a Partner</li>
                        </a>
                        <a href="">
                            <li class="text-l font-semibold text-kOrange  p-2">Get Started!!</li>
                        </a>
                        <a href="">
                            <li class="text-l font-semibold text-kDarkBlue  p-2">Contact Us</li>
                        </a>
                    </ul>
                </div>
            </nav>
        </header>
    </body>
    @yield('content')
    <h1>footer</h1>
</html>