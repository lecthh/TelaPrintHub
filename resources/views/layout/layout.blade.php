@vite('resources/css/app.css')
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <header class="bg-kLightBlue">
            <nav class="font-[Inter] flex items-center justify-between px-8 py-4">
                <div>
                    <a href="">
                        <h3 class="font-bold text-kDarkBlue text-xl">TEL-A PrintHub</h3>
                    </a>
                    
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
    <footer class="bg-white border-t-2 border-kDarkBlue p-12 flex flex-col gap-y-8 itemsce">
        <div class="flex flex-col items-center gap-y-1">
            <h4 class="font-bold text-KDarkBlue text-sm">Site Links</h4>
            <ul class="text-sm text-kDarkBlue flex gap-x-6">
                <a href="">
                    <li>
                        Home
                    </li>
                </a>
                <a href="">
                    <li>
                        How it works
                    </li>
                </a>
                <a href="">
                    <li>
                        FAQs
                    </li>
                </a>
                <a href="">
                    <li>
                        Become a Partner
                    </li>
                </a>
                <a href="">
                    <li>
                        Get Started!!
                    </li>
                </a>
                <a href="">
                    <li>
                        Contact Us
                    </li>
                </a>
            </ul>
        </div>
        <a href="" class="self-center">
            <i class="fa-brands fa-facebook text-3xl" style="color: #010387;"></i>
        </a>
        <div class="flex flex-col gap-y-2">
            <hr style="color: #010387;">
            <h3 class="text-xs font-bold text-kDarkBlue self-center">A Capstone Project By Team NIKA | S.Y. 2023-2024</h3>
        </div>
        
    </footer>
</html>
<script src="https://kit.fontawesome.com/d3c4f3f1ff.js" crossorigin="anonymous"></script>