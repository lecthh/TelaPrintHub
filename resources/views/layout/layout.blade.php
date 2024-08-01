@vite('resources/css/app.css')
<html>
    <head>
        
    </head>
    <body class="bg-kBlackReal">
        <header class="bg-kWhite px-8 py-3 font-dm-sans">
            <nav class="flex items-center justify-between">
                <a href="{{ route('home') }}">
                    <svg width="100" height="52" viewBox="0 0 175 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.43995 44V23.84H0.199951V18.24H22.2V23.84H14.96V44H7.43995ZM24.1828 44V18.24H43.7028V24H31.7028V28.2H42.2228V34.04H31.7028V38.24H43.7028V44H24.1828ZM46.0969 44V18.24H53.6169V38.24H65.2169V44H46.0969ZM66.4297 35.52V29.76H82.6297V35.52H66.4297ZM84.6328 44L94.5128 18.24H102.473L112.353 44H104.513L102.353 38.52H94.5928L92.4728 44H84.6328ZM95.5928 33.12H101.353L98.4728 25.56L95.5928 33.12Z" fill="#1F1F1F"/>
                        <path d="M6.80005 74V48.24H20.08C22.1867 48.24 23.92 48.6667 25.28 49.52C26.6667 50.3467 27.6934 51.48 28.3601 52.92C29.0268 54.36 29.3601 55.96 29.3601 57.72C29.3601 59.5333 28.9734 61.1467 28.2001 62.56C27.4268 63.9733 26.3333 65.08 24.92 65.88C23.5067 66.68 21.84 67.08 19.92 67.08H14.32V74H6.80005ZM14.32 61.32H18.2C19.3733 61.32 20.24 60.9867 20.8 60.32C21.3867 59.6533 21.68 58.7867 21.68 57.72C21.68 56.5733 21.4133 55.6667 20.88 55C20.3467 54.3333 19.52 54 18.4 54H14.32V61.32ZM31.3703 74V55.04H38.6103L38.8103 56.56C39.5836 56.1067 40.5704 55.6933 41.7704 55.32C42.9704 54.9467 44.1837 54.72 45.4104 54.64V60.24C44.7171 60.2933 43.957 60.3867 43.1303 60.52C42.3303 60.6533 41.5437 60.8267 40.7704 61.04C40.0237 61.2267 39.3971 61.44 38.8904 61.68V74H31.3703ZM48.8623 52.52V47.08H56.9823V52.52H48.8623ZM49.4622 74V60.52H46.7023L47.3423 55.04H56.9823V74H49.4622ZM60.5891 74V55.04H67.6291L67.8292 56.48C68.5492 56 69.4957 55.5733 70.6691 55.2C71.8691 54.8267 73.1491 54.64 74.5091 54.64C76.8824 54.64 78.6157 55.2267 79.7091 56.4C80.8024 57.5733 81.3491 59.3867 81.3491 61.84V74H73.8291V62.6C73.8291 61.7467 73.6424 61.1333 73.2691 60.76C72.8957 60.3867 72.2424 60.2 71.3091 60.2C70.7491 60.2 70.1625 60.3333 69.5492 60.6C68.9625 60.8667 68.4824 61.1867 68.1091 61.56V74H60.5891ZM92.8497 74.4C90.3164 74.4 88.4764 73.76 87.3297 72.48C86.183 71.2 85.6097 69.4667 85.6097 67.28V60.6H83.1297V55.04H85.6097V51.16L93.1297 49.36V55.04H97.4897L97.2097 60.6H93.1297V66.72C93.1297 67.52 93.3297 68.0933 93.7297 68.44C94.1297 68.76 94.743 68.92 95.5697 68.92C96.343 68.92 97.1297 68.7867 97.9297 68.52V73.52C96.5164 74.1067 94.823 74.4 92.8497 74.4ZM99.925 74V48.24H107.445V57.84H116.325V48.24H123.845V74H116.325V64.4H107.445V74H99.925ZM134.344 74.4C132.131 74.4 130.397 73.7733 129.144 72.52C127.891 71.2667 127.264 69.4267 127.264 67V55.04H134.784V66.4C134.784 68.0533 135.624 68.88 137.304 68.88C137.917 68.88 138.517 68.7467 139.104 68.48C139.691 68.2133 140.157 67.88 140.504 67.48V55.04H148.024V74H140.984L140.784 72.56C140.037 73.0933 139.117 73.5333 138.024 73.88C136.957 74.2267 135.731 74.4 134.344 74.4ZM164.245 74.4C163.018 74.4 161.938 74.24 161.005 73.92C160.098 73.5733 159.258 73.1067 158.485 72.52L158.125 74H151.605V47.04H159.125V55.72C159.765 55.3733 160.511 55.1067 161.365 54.92C162.245 54.7333 163.125 54.64 164.005 54.64C166.831 54.64 169.045 55.4 170.645 56.92C172.271 58.4133 173.085 60.8933 173.085 64.36C173.085 67.7467 172.285 70.2667 170.685 71.92C169.085 73.5733 166.938 74.4 164.245 74.4ZM162.085 68.96C163.258 68.96 164.098 68.6133 164.605 67.92C165.138 67.2 165.405 66.04 165.405 64.44C165.405 62.8133 165.125 61.68 164.565 61.04C164.031 60.4 163.205 60.08 162.085 60.08C160.858 60.08 159.871 60.4133 159.125 61.08V67.8C159.951 68.5733 160.938 68.96 162.085 68.96Z" fill="#1F1F1F"/>
                    </svg>
                </a>
                <ul class="flex gap-x-5">
                    <a href="{{ route('home') }}">
                        <li class="p-2 text-base hover:border-b-2 border-kBlack">Home</li>
                    </a>
                    <a href="{{ route('contact') }}">
                        <li class="p-2 text-base hover:border-b-2 border-kBlack">Contact us</li>
                    </a>
                    <a href="{{ route('track') }}">
                        <li class="p-2 text-base hover:border-b-2 border-kBlack">Track my order</li>
                    </a>
                    <a href="{{ route('become-a-partner') }}">
                        <li class="p-2 text-base hover:border-b-2 border-kBlack">Become a partner</li>
                    </a>
                    <a href="{{ route('request-print') }}">
                        <li class="p-2 text-base border-2 border-kBlack rounded-lg transition hover:bg-kBlack hover:text-kWhite">Request a print</li>
                    </a>
                </ul>
            </nav>
        </header>
    </body>
    @yield('content')
    <footer class="bg-kBlack px-8 py-10">
        <div class="flex items-center justify-between">
            <svg width="100" height="52" viewBox="0 0 120 62" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect width="120" height="61.4876" fill="url(#pattern0_31_21)"/>
                <defs>
                <pattern id="pattern0_31_21" patternContentUnits="objectBoundingBox" width="1" height="1">
                <use xlink:href="#image0_31_21" transform="matrix(0.00285714 0 0 0.00557604 0 -0.00184333)"/>
                </pattern>
                <image id="image0_31_21" width="350" height="180" xlink:href="data:image/png;base64,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"/>
                </defs>
            </svg>
            <ul class="flex text-kWhite gap-x-6">
                <a href="{{ route('home') }}">
                    <li class="text-sm">Home</li>
                </a>
                <a href="{{ route('contact') }}">
                    <li class="text-sm">Contact us</li>
                </a>
                <a href="{{ route('track') }}">
                    <li class="text-sm">Track my order</li>
                </a>
                <a href="{{ route('become-a-partner') }}">
                    <li class="text-sm">Become a partner</li>
                </a>
                <a href="{{ route('request-print') }}">
                    <li class="text-sm">Request a print</li>
                </a>
                <a href="">
                    <li class="text-sm">Already a partner?</li>
                </a>
            </ul>
        </div>
    </footer>
    <div class="bg-kBlackReal flex p-3 justify-center">
        <h1 class="text-sm font-bold text-kWhite">
            A Captsone Project by TEAM NIKA | S.Y. 2024 - 2025
        </h1>
    </div>
</html>
<script src="https://kit.fontawesome.com/d3c4f3f1ff.js" crossorigin="anonymous"></script>
