@vite('resources/css/app.css')
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="bg-kWhite flex flex-col gap-y-6 justify-between">
    <nav class="px-6 py-3 font-dm-sans flex justify-center items-center text-base">
        <a href="{{ route('home') }}">
            <svg width="55" height="36" viewBox="0 0 55 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_192_26)">
                    <path d="M0.723999 8.86401H2.964V3.47201H7.78V8.86401H10.724V12.864H7.78V16.528C7.78 17.072 7.86 17.5147 8.02 17.856C8.18 18.1867 8.47333 18.352 8.9 18.352C9.188 18.352 9.43333 18.288 9.636 18.16C9.83867 18.032 9.96133 17.9467 10.004 17.904L11.668 21.36C11.5933 21.424 11.3587 21.5413 10.964 21.712C10.58 21.8827 10.0893 22.0373 9.492 22.176C8.89467 22.3147 8.228 22.384 7.492 22.384C6.18 22.384 5.09733 22.016 4.244 21.28C3.39067 20.5333 2.964 19.3867 2.964 17.84V12.864H0.723999V8.86401ZM14.333 16.464C14.365 16.9333 14.5143 17.3493 14.781 17.712C15.0477 18.0747 15.4157 18.3627 15.885 18.576C16.365 18.7787 16.9303 18.88 17.581 18.88C18.1997 18.88 18.7543 18.816 19.245 18.688C19.7463 18.56 20.1783 18.4 20.541 18.208C20.9143 18.016 21.2023 17.8187 21.405 17.616L23.293 20.624C23.0263 20.912 22.6477 21.1947 22.157 21.472C21.677 21.7387 21.0423 21.9573 20.253 22.128C19.4637 22.2987 18.4663 22.384 17.261 22.384C15.8103 22.384 14.5197 22.112 13.389 21.568C12.2583 21.024 11.3677 20.224 10.717 19.168C10.0663 18.112 9.741 16.8213 9.741 15.296C9.741 14.016 10.0183 12.864 10.573 11.84C11.1383 10.8053 11.9543 9.98934 13.021 9.39201C14.0877 8.78401 15.373 8.48001 16.877 8.48001C18.3063 8.48001 19.5437 8.74134 20.589 9.26401C21.645 9.78668 22.4557 10.5653 23.021 11.6C23.597 12.624 23.885 13.904 23.885 15.44C23.885 15.5253 23.8797 15.696 23.869 15.952C23.869 16.208 23.8583 16.3787 23.837 16.464H14.333ZM19.309 13.92C19.2983 13.5787 19.2077 13.2427 19.037 12.912C18.8663 12.5707 18.6103 12.2933 18.269 12.08C17.9277 11.856 17.4903 11.744 16.957 11.744C16.4237 11.744 15.9703 11.8507 15.597 12.064C15.2343 12.2667 14.957 12.5333 14.765 12.864C14.573 13.1947 14.4663 13.5467 14.445 13.92H19.309ZM28.2545 22H23.3745V-0.0159912H28.2545V22ZM28.7345 16.784V12.656H36.9745V16.784H28.7345ZM47.6603 22V19.872C47.5643 20.0853 47.3189 20.3947 46.9243 20.8C46.5403 21.2053 46.0283 21.5733 45.3883 21.904C44.7483 22.224 44.0016 22.384 43.1483 22.384C41.8683 22.384 40.7483 22.0747 39.7883 21.456C38.8283 20.8267 38.0816 19.9893 37.5483 18.944C37.0149 17.888 36.7483 16.72 36.7483 15.44C36.7483 14.16 37.0149 12.9973 37.5483 11.952C38.0816 10.896 38.8283 10.0533 39.7883 9.42401C40.7483 8.79468 41.8683 8.48001 43.1483 8.48001C43.9696 8.48001 44.6896 8.61334 45.3083 8.88001C45.9269 9.13601 46.4283 9.44534 46.8123 9.80801C47.1963 10.16 47.4629 10.4853 47.6123 10.784V8.86401H52.4443V22H47.6603ZM41.5163 15.44C41.5163 16.0373 41.6549 16.576 41.9323 17.056C42.2096 17.5253 42.5776 17.8933 43.0363 18.16C43.5056 18.4267 44.0229 18.56 44.5883 18.56C45.1749 18.56 45.6923 18.4267 46.1403 18.16C46.5883 17.8933 46.9403 17.5253 47.1963 17.056C47.4629 16.576 47.5963 16.0373 47.5963 15.44C47.5963 14.8427 47.4629 14.3093 47.1963 13.84C46.9403 13.36 46.5883 12.9867 46.1403 12.72C45.6923 12.4427 45.1749 12.304 44.5883 12.304C44.0229 12.304 43.5056 12.4427 43.0363 12.72C42.5776 12.9867 42.2096 13.36 41.9323 13.84C41.6549 14.3093 41.5163 14.8427 41.5163 15.44Z" fill="black" />
                    <path d="M4.119 27.225C4.61767 27.225 5.065 27.3497 5.461 27.599C5.857 27.8483 6.16867 28.193 6.396 28.633C6.63067 29.073 6.748 29.579 6.748 30.151C6.748 30.7157 6.63067 31.2217 6.396 31.669C6.16867 32.109 5.857 32.4573 5.461 32.714C5.07233 32.9633 4.63233 33.088 4.141 33.088C3.86967 33.088 3.613 33.0477 3.371 32.967C3.13633 32.879 2.92 32.769 2.722 32.637C2.53133 32.4977 2.37 32.3437 2.238 32.175C2.106 31.999 2.01067 31.8267 1.952 31.658L2.194 31.504V34.749C2.194 34.8737 2.15367 34.98 2.073 35.068C1.99233 35.156 1.886 35.2 1.754 35.2C1.62933 35.2 1.523 35.156 1.435 35.068C1.35434 34.9873 1.314 34.881 1.314 34.749V27.72C1.314 27.5953 1.35434 27.4927 1.435 27.412C1.523 27.324 1.62933 27.28 1.754 27.28C1.886 27.28 1.99233 27.324 2.073 27.412C2.15367 27.4927 2.194 27.5953 2.194 27.72V28.699L2.029 28.611C2.08033 28.4277 2.16833 28.2517 2.293 28.083C2.425 27.9143 2.58267 27.7677 2.766 27.643C2.95667 27.511 3.16567 27.4083 3.393 27.335C3.62767 27.2617 3.86967 27.225 4.119 27.225ZM4.02 28.039C3.65333 28.039 3.327 28.1307 3.041 28.314C2.76233 28.4973 2.54233 28.7467 2.381 29.062C2.227 29.3773 2.15 29.7403 2.15 30.151C2.15 30.5543 2.227 30.9173 2.381 31.24C2.54233 31.5627 2.76233 31.8157 3.041 31.999C3.327 32.1823 3.65333 32.274 4.02 32.274C4.38667 32.274 4.70933 32.1823 4.988 31.999C5.26667 31.8157 5.48667 31.5627 5.648 31.24C5.80933 30.9173 5.89 30.5543 5.89 30.151C5.89 29.7403 5.80933 29.3773 5.648 29.062C5.48667 28.7467 5.26667 28.4973 4.988 28.314C4.70933 28.1307 4.38667 28.039 4.02 28.039ZM9.83084 33C9.70617 33 9.59984 32.956 9.51184 32.868C9.43117 32.78 9.39084 32.6737 9.39084 32.549V27.753C9.39084 27.6283 9.43117 27.5257 9.51184 27.445C9.59984 27.357 9.70617 27.313 9.83084 27.313C9.96284 27.313 10.0692 27.357 10.1498 27.445C10.2305 27.5257 10.2708 27.6283 10.2708 27.753V29.205L10.1388 28.974C10.1828 28.7467 10.2598 28.5267 10.3698 28.314C10.4872 28.094 10.6338 27.8997 10.8098 27.731C10.9858 27.555 11.1875 27.4193 11.4148 27.324C11.6422 27.2213 11.8915 27.17 12.1628 27.17C12.3242 27.17 12.4708 27.2103 12.6028 27.291C12.7422 27.3643 12.8118 27.4707 12.8118 27.61C12.8118 27.764 12.7715 27.8777 12.6908 27.951C12.6102 28.0243 12.5185 28.061 12.4158 28.061C12.3205 28.061 12.2288 28.0427 12.1408 28.006C12.0528 27.962 11.9428 27.94 11.8108 27.94C11.6275 27.94 11.4442 27.9913 11.2608 28.094C11.0848 28.1893 10.9198 28.3287 10.7658 28.512C10.6192 28.6953 10.4982 28.9043 10.4028 29.139C10.3148 29.3663 10.2708 29.612 10.2708 29.876V32.549C10.2708 32.6737 10.2268 32.78 10.1388 32.868C10.0582 32.956 9.9555 33 9.83084 33ZM15.9729 32.549C15.9729 32.6737 15.9289 32.78 15.8409 32.868C15.7602 32.956 15.6575 33 15.5329 33C15.4009 33 15.2945 32.956 15.2139 32.868C15.1332 32.78 15.0929 32.6737 15.0929 32.549V27.665C15.0929 27.5403 15.1332 27.4377 15.2139 27.357C15.3019 27.269 15.4082 27.225 15.5329 27.225C15.6575 27.225 15.7602 27.269 15.8409 27.357C15.9289 27.4377 15.9729 27.5403 15.9729 27.665V32.549ZM15.5329 26.488C15.3495 26.488 15.2139 26.4513 15.1259 26.378C15.0379 26.3047 14.9939 26.191 14.9939 26.037V25.883C14.9939 25.729 15.0415 25.6153 15.1369 25.542C15.2322 25.4687 15.3679 25.432 15.5439 25.432C15.7199 25.432 15.8519 25.4687 15.9399 25.542C16.0279 25.6153 16.0719 25.729 16.0719 25.883V26.037C16.0719 26.191 16.0242 26.3047 15.9289 26.378C15.8409 26.4513 15.7089 26.488 15.5329 26.488ZM21.7006 27.17C22.1993 27.17 22.5916 27.2727 22.8776 27.478C23.1636 27.6833 23.3653 27.9583 23.4826 28.303C23.6073 28.6477 23.6696 29.0327 23.6696 29.458V32.549C23.6696 32.6737 23.6256 32.78 23.5376 32.868C23.4569 32.956 23.3543 33 23.2296 33C23.1049 33 22.9986 32.956 22.9106 32.868C22.8299 32.78 22.7896 32.6737 22.7896 32.549V29.48C22.7896 29.2013 22.7456 28.952 22.6576 28.732C22.5769 28.5047 22.4376 28.325 22.2396 28.193C22.0489 28.0537 21.7849 27.984 21.4476 27.984C21.1396 27.984 20.8573 28.0537 20.6006 28.193C20.3439 28.325 20.1386 28.5047 19.9846 28.732C19.8306 28.952 19.7536 29.2013 19.7536 29.48V32.549C19.7536 32.6737 19.7096 32.78 19.6216 32.868C19.5409 32.956 19.4383 33 19.3136 33C19.1889 33 19.0826 32.956 18.9946 32.868C18.9139 32.78 18.8736 32.6737 18.8736 32.549V27.753C18.8736 27.6283 18.9139 27.5257 18.9946 27.445C19.0826 27.357 19.1889 27.313 19.3136 27.313C19.4456 27.313 19.5519 27.357 19.6326 27.445C19.7133 27.5257 19.7536 27.6283 19.7536 27.753V28.534L19.5336 28.776C19.5703 28.5853 19.6546 28.3947 19.7866 28.204C19.9186 28.006 20.0836 27.83 20.2816 27.676C20.4796 27.522 20.6996 27.401 20.9416 27.313C21.1836 27.2177 21.4366 27.17 21.7006 27.17ZM26.3974 27.346H28.9824C29.0998 27.346 29.1951 27.3863 29.2684 27.467C29.3491 27.5477 29.3894 27.643 29.3894 27.753C29.3894 27.8703 29.3491 27.9693 29.2684 28.05C29.1951 28.1233 29.0998 28.16 28.9824 28.16H26.3974C26.2874 28.16 26.1921 28.1197 26.1114 28.039C26.0308 27.9583 25.9904 27.8593 25.9904 27.742C25.9904 27.632 26.0308 27.5403 26.1114 27.467C26.1921 27.3863 26.2874 27.346 26.3974 27.346ZM27.5524 25.85C27.6771 25.85 27.7798 25.894 27.8604 25.982C27.9411 26.0627 27.9814 26.1653 27.9814 26.29V31.603C27.9814 31.779 28.0071 31.911 28.0584 31.999C28.1098 32.087 28.1758 32.1493 28.2564 32.186C28.3444 32.2153 28.4288 32.23 28.5094 32.23C28.5828 32.23 28.6451 32.219 28.6964 32.197C28.7551 32.1677 28.8211 32.153 28.8944 32.153C28.9678 32.153 29.0338 32.1897 29.0924 32.263C29.1584 32.329 29.1914 32.417 29.1914 32.527C29.1914 32.659 29.1144 32.7727 28.9604 32.868C28.8064 32.956 28.6341 33 28.4434 33C28.3408 33 28.2124 32.9927 28.0584 32.978C27.9118 32.9633 27.7651 32.9157 27.6184 32.835C27.4718 32.7543 27.3471 32.6223 27.2444 32.439C27.1491 32.2483 27.1014 31.9843 27.1014 31.647V26.29C27.1014 26.1653 27.1454 26.0627 27.2334 25.982C27.3214 25.894 27.4278 25.85 27.5524 25.85ZM34.6835 27.225C35.1675 27.225 35.5489 27.3313 35.8275 27.544C36.1135 27.7493 36.3152 28.028 36.4325 28.38C36.5572 28.7247 36.6195 29.1097 36.6195 29.535V32.549C36.6195 32.6737 36.5755 32.78 36.4875 32.868C36.4069 32.956 36.3042 33 36.1795 33C36.0549 33 35.9485 32.956 35.8605 32.868C35.7799 32.78 35.7395 32.6737 35.7395 32.549V29.535C35.7395 29.2563 35.6992 29.007 35.6185 28.787C35.5379 28.5597 35.4022 28.38 35.2115 28.248C35.0282 28.1087 34.7752 28.039 34.4525 28.039C34.1519 28.039 33.8769 28.1087 33.6275 28.248C33.3782 28.38 33.1802 28.5597 33.0335 28.787C32.8869 29.007 32.8135 29.2563 32.8135 29.535V32.549C32.8135 32.6737 32.7695 32.78 32.6815 32.868C32.6009 32.956 32.4982 33 32.3735 33C32.2489 33 32.1425 32.956 32.0545 32.868C31.9739 32.78 31.9335 32.6737 31.9335 32.549V25.3C31.9335 25.1753 31.9739 25.0727 32.0545 24.992C32.1425 24.904 32.2489 24.86 32.3735 24.86C32.5055 24.86 32.6119 24.904 32.6925 24.992C32.7732 25.0727 32.8135 25.1753 32.8135 25.3V28.589L32.5935 28.831C32.6302 28.6403 32.7109 28.4497 32.8355 28.259C32.9602 28.061 33.1179 27.885 33.3085 27.731C33.4992 27.577 33.7119 27.456 33.9465 27.368C34.1812 27.2727 34.4269 27.225 34.6835 27.225ZM43.8269 27.313C43.9589 27.313 44.0653 27.357 44.1459 27.445C44.2266 27.5257 44.2669 27.6283 44.2669 27.753V30.756C44.2669 31.4967 44.0579 32.0723 43.6399 32.483C43.2293 32.8863 42.6536 33.088 41.9129 33.088C41.1796 33.088 40.6039 32.8863 40.1859 32.483C39.7753 32.0723 39.5699 31.4967 39.5699 30.756V27.753C39.5699 27.6283 39.6103 27.5257 39.6909 27.445C39.7789 27.357 39.8853 27.313 40.0099 27.313C40.1419 27.313 40.2483 27.357 40.3289 27.445C40.4096 27.5257 40.4499 27.6283 40.4499 27.753V30.756C40.4499 31.2547 40.5783 31.6323 40.8349 31.889C41.0916 32.1457 41.4509 32.274 41.9129 32.274C42.3896 32.274 42.7526 32.1457 43.0019 31.889C43.2586 31.6323 43.3869 31.2547 43.3869 30.756V27.753C43.3869 27.6283 43.4273 27.5257 43.5079 27.445C43.5959 27.357 43.7023 27.313 43.8269 27.313ZM50.0221 27.17C50.5208 27.17 50.9681 27.2983 51.3641 27.555C51.7601 27.8043 52.0718 28.149 52.2991 28.589C52.5338 29.029 52.6511 29.5387 52.6511 30.118C52.6511 30.6973 52.5338 31.2107 52.2991 31.658C52.0718 32.1053 51.7601 32.461 51.3641 32.725C50.9754 32.9817 50.5354 33.11 50.0441 33.11C49.7728 33.11 49.5161 33.0697 49.2741 32.989C49.0394 32.901 48.8231 32.7873 48.6251 32.648C48.4344 32.5013 48.2731 32.3437 48.1411 32.175C48.0091 31.999 47.9138 31.8267 47.8551 31.658L48.0971 31.504V32.604C48.0971 32.7287 48.0568 32.835 47.9761 32.923C47.8954 33.011 47.7891 33.055 47.6571 33.055C47.5324 33.055 47.4261 33.0147 47.3381 32.934C47.2574 32.846 47.2171 32.736 47.2171 32.604V25.311C47.2171 25.1863 47.2574 25.08 47.3381 24.992C47.4261 24.904 47.5324 24.86 47.6571 24.86C47.7891 24.86 47.8954 24.904 47.9761 24.992C48.0568 25.08 48.0971 25.1863 48.0971 25.311V28.699L47.9321 28.611C47.9834 28.4277 48.0714 28.2517 48.1961 28.083C48.3281 27.907 48.4858 27.753 48.6691 27.621C48.8598 27.4817 49.0688 27.3717 49.2961 27.291C49.5308 27.2103 49.7728 27.17 50.0221 27.17ZM49.9231 27.984C49.5564 27.984 49.2301 28.0757 48.9441 28.259C48.6654 28.4423 48.4454 28.6953 48.2841 29.018C48.1301 29.3407 48.0531 29.7073 48.0531 30.118C48.0531 30.5287 48.1301 30.899 48.2841 31.229C48.4454 31.559 48.6654 31.8193 48.9441 32.01C49.2301 32.2007 49.5564 32.296 49.9231 32.296C50.2898 32.296 50.6124 32.2007 50.8911 32.01C51.1698 31.8193 51.3898 31.559 51.5511 31.229C51.7124 30.899 51.7931 30.5287 51.7931 30.118C51.7931 29.7073 51.7124 29.3407 51.5511 29.018C51.3898 28.6953 51.1698 28.4423 50.8911 28.259C50.6124 28.0757 50.2898 27.984 49.9231 27.984Z" fill="black" />
                </g>
                <defs>
                    <clipPath id="clip0_192_26">
                        <rect width="54" height="36" fill="white" transform="translate(0.5)" />
                    </clipPath>
                </defs>
            </svg>
        </a>
    </nav>

    <div class="flex gap-x-6 justify-around">
        <form class="flex flex-col gap-y-6 px-6 py-3 w-1/2">
            <div class="flex flex-col gap-y-6 px-6 py-3">
                <h1 class="lowercase font-bold text-xl">order confirmation</h1>
                <div class="flex flex-col gap-y-7">
                    <div class="flex">
                        <table class="table-auto">
                            <thead>
                                <tr class="font-bold text-lg">
                                    <th class="border-l border-t border-b border-kBlack p-2">no</th>
                                    <th class="border-l border-t border-b border-kBlack p-2">shirt name</th>
                                    <th class="border-l border-t border-b border-kBlack p-2">jersey #</th>
                                    <th class="border-l border-t border-b border-kBlack p-2">size</th>
                                    <th class="border-l border-t border-b border-kBlack p-2">short #</th>
                                    <th class="border-l border-t border-b border-kBlack p-2">size</th>
                                    <th class="border-l border-t border-b border-kBlack p-2">pocket</th>
                                    <th class="border border-kBlack p-2">remarks</th>
                                </tr>
                            </thead>
                            <tbody id="orderTable">
                                <tr>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="inline-block">
                        <button class="bg-kBlack text-kWhite p-2" type="button" onclick="addRow()">+ add row</button>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-y-3 px-6 py-[10px]">
                <p class="text-base font-semibold">
                    please check the details if they are correct and final. once you confirm the list of orders, we will not be liable for any mistakes or errors.
                </p>
            </div>

            <div class="flex flex-grow flex-col px-6">
                <button type="submit" class="p-2 bg-kBlack text-kWhite">confirm</button>
            </div>

        </form>

        <div class="flex flex-col gap-y-6 px-6 py-3 w-1/2 lowercase mr-3">
            <h1 class="font-bold text-lg">order specifications</h1>
            <div class="flex flex-col gap-y-1">
                <h1 class="font-bold text-base normal-case">ORDER NO: TELA-PH939KJF</h1>
                <div class="w-[400px] h-[300px] bg-kViolet border">
                </div>
            </div>
            <div class="flex flex-col gap-y-1">
                <h1 class="text-base font-semibold">contact details</h1>
                <div class="flex justify-between">
                    <h1>customer name:</h1>
                    <h1 class="normal-case">Jane Doe</h1>
                </div>
                <div class="flex justify-between">
                    <h1>email address:</h1>
                    <h1 class="normal-case">jane@gmail.com</h1>
                </div>
                <div class="flex justify-between">
                    <h1>phone number:</h1>
                    <h1 class="normal-case">+63986 834 2374</h1>
                </div>
                <div class="flex justify-between">
                    <h1>mode of communication:</h1>
                    <h1 class="normal-case">WhatsApp</h1>
                </div>
            </div>
        </div>
    </div>
</body>

<footer class="bg-kGray px-6 py-3 flex justify-between items-center">
    <a href="">
        <svg width="54" height="35" viewBox="0 0 54 35" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_194_197)">
                <path d="M0 8.88H2.24V3.488H7.056V8.88H10V12.88H7.056V16.544C7.056 17.088 7.136 17.5307 7.296 17.872C7.456 18.2027 7.74933 18.368 8.176 18.368C8.464 18.368 8.70933 18.304 8.912 18.176C9.11467 18.048 9.23733 17.9627 9.28 17.92L10.944 21.376C10.8693 21.44 10.6347 21.5573 10.24 21.728C9.856 21.8987 9.36533 22.0533 8.768 22.192C8.17067 22.3307 7.504 22.4 6.768 22.4C5.456 22.4 4.37333 22.032 3.52 21.296C2.66667 20.5493 2.24 19.4027 2.24 17.856V12.88H0V8.88ZM13.609 16.48C13.641 16.9493 13.7903 17.3653 14.057 17.728C14.3237 18.0907 14.6917 18.3787 15.161 18.592C15.641 18.7947 16.2063 18.896 16.857 18.896C17.4757 18.896 18.0303 18.832 18.521 18.704C19.0223 18.576 19.4543 18.416 19.817 18.224C20.1903 18.032 20.4783 17.8347 20.681 17.632L22.569 20.64C22.3023 20.928 21.9237 21.2107 21.433 21.488C20.953 21.7547 20.3183 21.9733 19.529 22.144C18.7397 22.3147 17.7423 22.4 16.537 22.4C15.0863 22.4 13.7957 22.128 12.665 21.584C11.5343 21.04 10.6437 20.24 9.993 19.184C9.34233 18.128 9.017 16.8373 9.017 15.312C9.017 14.032 9.29433 12.88 9.849 11.856C10.4143 10.8213 11.2303 10.0053 12.297 9.408C13.3637 8.8 14.649 8.496 16.153 8.496C17.5823 8.496 18.8197 8.75733 19.865 9.28C20.921 9.80267 21.7317 10.5813 22.297 11.616C22.873 12.64 23.161 13.92 23.161 15.456C23.161 15.5413 23.1557 15.712 23.145 15.968C23.145 16.224 23.1343 16.3947 23.113 16.48H13.609ZM18.585 13.936C18.5743 13.5947 18.4837 13.2587 18.313 12.928C18.1423 12.5867 17.8863 12.3093 17.545 12.096C17.2037 11.872 16.7663 11.76 16.233 11.76C15.6997 11.76 15.2463 11.8667 14.873 12.08C14.5103 12.2827 14.233 12.5493 14.041 12.88C13.849 13.2107 13.7423 13.5627 13.721 13.936H18.585ZM27.5305 22.016H22.6505V0H27.5305V22.016ZM28.0105 16.8V12.672H36.2505V16.8H28.0105ZM46.9363 22.016V19.888C46.8403 20.1013 46.5949 20.4107 46.2003 20.816C45.8163 21.2213 45.3043 21.5893 44.6643 21.92C44.0243 22.24 43.2776 22.4 42.4243 22.4C41.1443 22.4 40.0243 22.0907 39.0643 21.472C38.1043 20.8427 37.3576 20.0053 36.8243 18.96C36.2909 17.904 36.0243 16.736 36.0243 15.456C36.0243 14.176 36.2909 13.0133 36.8243 11.968C37.3576 10.912 38.1043 10.0693 39.0643 9.44C40.0243 8.81067 41.1443 8.496 42.4243 8.496C43.2456 8.496 43.9656 8.62933 44.5843 8.896C45.2029 9.152 45.7043 9.46133 46.0883 9.824C46.4723 10.176 46.7389 10.5013 46.8883 10.8V8.88H51.7203V22.016H46.9363ZM40.7923 15.456C40.7923 16.0533 40.9309 16.592 41.2083 17.072C41.4856 17.5413 41.8536 17.9093 42.3123 18.176C42.7816 18.4427 43.2989 18.576 43.8643 18.576C44.4509 18.576 44.9683 18.4427 45.4163 18.176C45.8643 17.9093 46.2163 17.5413 46.4723 17.072C46.7389 16.592 46.8723 16.0533 46.8723 15.456C46.8723 14.8587 46.7389 14.3253 46.4723 13.856C46.2163 13.376 45.8643 13.0027 45.4163 12.736C44.9683 12.4587 44.4509 12.32 43.8643 12.32C43.2989 12.32 42.7816 12.4587 42.3123 12.736C41.8536 13.0027 41.4856 13.376 41.2083 13.856C40.9309 14.3253 40.7923 14.8587 40.7923 15.456Z" fill="black" />
                <path d="M2.805 26.7649C3.30367 26.7649 3.751 26.8896 4.147 27.1389C4.543 27.3882 4.85467 27.7329 5.082 28.1729C5.31667 28.6129 5.434 29.1189 5.434 29.6909C5.434 30.2556 5.31667 30.7616 5.082 31.2089C4.85467 31.6489 4.543 31.9972 4.147 32.2539C3.75833 32.5032 3.31833 32.6279 2.827 32.6279C2.55567 32.6279 2.299 32.5876 2.057 32.5069C1.82233 32.4189 1.606 32.3089 1.408 32.1769C1.21733 32.0376 1.056 31.8836 0.924 31.7149C0.792 31.5389 0.69667 31.3666 0.638 31.1979L0.88 31.0439V34.2889C0.88 34.4136 0.83967 34.5199 0.759 34.6079C0.67833 34.6959 0.572 34.7399 0.44 34.7399C0.31533 34.7399 0.209 34.6959 0.121 34.6079C0.040333 34.5272 0 34.4209 0 34.2889V27.2599C0 27.1352 0.040333 27.0326 0.121 26.9519C0.209 26.8639 0.31533 26.8199 0.44 26.8199C0.572 26.8199 0.67833 26.8639 0.759 26.9519C0.83967 27.0326 0.88 27.1352 0.88 27.2599V28.2389L0.715 28.1509C0.76633 27.9676 0.85433 27.7916 0.979 27.6229C1.111 27.4542 1.26867 27.3076 1.452 27.1829C1.64267 27.0509 1.85167 26.9482 2.079 26.8749C2.31367 26.8016 2.55567 26.7649 2.805 26.7649ZM2.706 27.5789C2.33933 27.5789 2.013 27.6706 1.727 27.8539C1.44833 28.0372 1.22833 28.2866 1.067 28.6019C0.913 28.9172 0.836 29.2802 0.836 29.6909C0.836 30.0942 0.913 30.4572 1.067 30.7799C1.22833 31.1026 1.44833 31.3556 1.727 31.5389C2.013 31.7222 2.33933 31.8139 2.706 31.8139C3.07267 31.8139 3.39533 31.7222 3.674 31.5389C3.95267 31.3556 4.17267 31.1026 4.334 30.7799C4.49533 30.4572 4.576 30.0942 4.576 29.6909C4.576 29.2802 4.49533 28.9172 4.334 28.6019C4.17267 28.2866 3.95267 28.0372 3.674 27.8539C3.39533 27.6706 3.07267 27.5789 2.706 27.5789ZM8.51684 32.5399C8.39217 32.5399 8.28584 32.4959 8.19784 32.4079C8.11717 32.3199 8.07684 32.2136 8.07684 32.0889V27.2929C8.07684 27.1682 8.11717 27.0656 8.19784 26.9849C8.28584 26.8969 8.39217 26.8529 8.51684 26.8529C8.64884 26.8529 8.75517 26.8969 8.83584 26.9849C8.9165 27.0656 8.95684 27.1682 8.95684 27.2929V28.7449L8.82484 28.5139C8.86884 28.2866 8.94584 28.0666 9.05584 27.8539C9.17317 27.6339 9.3198 27.4396 9.4958 27.2709C9.6718 27.0949 9.8735 26.9592 10.1008 26.8639C10.3282 26.7612 10.5775 26.7099 10.8488 26.7099C11.0102 26.7099 11.1568 26.7502 11.2888 26.8309C11.4282 26.9042 11.4978 27.0106 11.4978 27.1499C11.4978 27.3039 11.4575 27.4176 11.3768 27.4909C11.2962 27.5642 11.2045 27.6009 11.1018 27.6009C11.0065 27.6009 10.9148 27.5826 10.8268 27.5459C10.7388 27.5019 10.6288 27.4799 10.4968 27.4799C10.3135 27.4799 10.1302 27.5312 9.9468 27.6339C9.7708 27.7292 9.6058 27.8686 9.4518 28.0519C9.3052 28.2352 9.18417 28.4442 9.08884 28.6789C9.00084 28.9062 8.95684 29.1519 8.95684 29.4159V32.0889C8.95684 32.2136 8.91284 32.3199 8.82484 32.4079C8.74417 32.4959 8.6415 32.5399 8.51684 32.5399ZM14.6589 32.0889C14.6589 32.2136 14.6149 32.3199 14.5269 32.4079C14.4462 32.4959 14.3435 32.5399 14.2189 32.5399C14.0869 32.5399 13.9805 32.4959 13.8999 32.4079C13.8192 32.3199 13.7789 32.2136 13.7789 32.0889V27.2049C13.7789 27.0802 13.8192 26.9776 13.8999 26.8969C13.9879 26.8089 14.0942 26.7649 14.2189 26.7649C14.3435 26.7649 14.4462 26.8089 14.5269 26.8969C14.6149 26.9776 14.6589 27.0802 14.6589 27.2049V32.0889ZM14.2189 26.0279C14.0355 26.0279 13.8999 25.9912 13.8119 25.9179C13.7239 25.8446 13.6799 25.7309 13.6799 25.5769V25.4229C13.6799 25.2689 13.7275 25.1552 13.8229 25.0819C13.9182 25.0086 14.0539 24.9719 14.2299 24.9719C14.4059 24.9719 14.5379 25.0086 14.6259 25.0819C14.7139 25.1552 14.7579 25.2689 14.7579 25.4229V25.5769C14.7579 25.7309 14.7102 25.8446 14.6149 25.9179C14.5269 25.9912 14.3949 26.0279 14.2189 26.0279ZM20.3866 26.7099C20.8853 26.7099 21.2776 26.8126 21.5636 27.0179C21.8496 27.2232 22.0513 27.4982 22.1686 27.8429C22.2933 28.1876 22.3556 28.5726 22.3556 28.9979V32.0889C22.3556 32.2136 22.3116 32.3199 22.2236 32.4079C22.1429 32.4959 22.0403 32.5399 21.9156 32.5399C21.7909 32.5399 21.6846 32.4959 21.5966 32.4079C21.5159 32.3199 21.4756 32.2136 21.4756 32.0889V29.0199C21.4756 28.7412 21.4316 28.4919 21.3436 28.2719C21.2629 28.0446 21.1236 27.8649 20.9256 27.7329C20.7349 27.5936 20.4709 27.5239 20.1336 27.5239C19.8256 27.5239 19.5433 27.5936 19.2866 27.7329C19.0299 27.8649 18.8246 28.0446 18.6706 28.2719C18.5166 28.4919 18.4396 28.7412 18.4396 29.0199V32.0889C18.4396 32.2136 18.3956 32.3199 18.3076 32.4079C18.2269 32.4959 18.1243 32.5399 17.9996 32.5399C17.8749 32.5399 17.7686 32.4959 17.6806 32.4079C17.5999 32.3199 17.5596 32.2136 17.5596 32.0889V27.2929C17.5596 27.1682 17.5999 27.0656 17.6806 26.9849C17.7686 26.8969 17.8749 26.8529 17.9996 26.8529C18.1316 26.8529 18.2379 26.8969 18.3186 26.9849C18.3993 27.0656 18.4396 27.1682 18.4396 27.2929V28.0739L18.2196 28.3159C18.2563 28.1252 18.3406 27.9346 18.4726 27.7439C18.6046 27.5459 18.7696 27.3699 18.9676 27.2159C19.1656 27.0619 19.3856 26.9409 19.6276 26.8529C19.8696 26.7576 20.1226 26.7099 20.3866 26.7099ZM25.0834 26.8859H27.6684C27.7858 26.8859 27.8811 26.9262 27.9544 27.0069C28.0351 27.0876 28.0754 27.1829 28.0754 27.2929C28.0754 27.4102 28.0351 27.5092 27.9544 27.5899C27.8811 27.6632 27.7858 27.6999 27.6684 27.6999H25.0834C24.9734 27.6999 24.8781 27.6596 24.7974 27.5789C24.7168 27.4982 24.6764 27.3992 24.6764 27.2819C24.6764 27.1719 24.7168 27.0802 24.7974 27.0069C24.8781 26.9262 24.9734 26.8859 25.0834 26.8859ZM26.2384 25.3899C26.3631 25.3899 26.4658 25.4339 26.5464 25.5219C26.6271 25.6026 26.6674 25.7052 26.6674 25.8299V31.1429C26.6674 31.3189 26.6931 31.4509 26.7444 31.5389C26.7958 31.6269 26.8618 31.6892 26.9424 31.7259C27.0304 31.7552 27.1148 31.7699 27.1954 31.7699C27.2688 31.7699 27.3311 31.7589 27.3824 31.7369C27.4411 31.7076 27.5071 31.6929 27.5804 31.6929C27.6538 31.6929 27.7198 31.7296 27.7784 31.8029C27.8444 31.8689 27.8774 31.9569 27.8774 32.0669C27.8774 32.1989 27.8004 32.3126 27.6464 32.4079C27.4924 32.4959 27.3201 32.5399 27.1294 32.5399C27.0268 32.5399 26.8984 32.5326 26.7444 32.5179C26.5978 32.5032 26.4511 32.4556 26.3044 32.3749C26.1578 32.2942 26.0331 32.1622 25.9304 31.9789C25.8351 31.7882 25.7874 31.5242 25.7874 31.1869V25.8299C25.7874 25.7052 25.8314 25.6026 25.9194 25.5219C26.0074 25.4339 26.1138 25.3899 26.2384 25.3899ZM33.3695 26.7649C33.8535 26.7649 34.2349 26.8712 34.5135 27.0839C34.7995 27.2892 35.0012 27.5679 35.1185 27.9199C35.2432 28.2646 35.3055 28.6496 35.3055 29.0749V32.0889C35.3055 32.2136 35.2615 32.3199 35.1735 32.4079C35.0929 32.4959 34.9902 32.5399 34.8655 32.5399C34.7409 32.5399 34.6345 32.4959 34.5465 32.4079C34.4659 32.3199 34.4255 32.2136 34.4255 32.0889V29.0749C34.4255 28.7962 34.3852 28.5469 34.3045 28.3269C34.2239 28.0996 34.0882 27.9199 33.8975 27.7879C33.7142 27.6486 33.4612 27.5789 33.1385 27.5789C32.8379 27.5789 32.5629 27.6486 32.3135 27.7879C32.0642 27.9199 31.8662 28.0996 31.7195 28.3269C31.5729 28.5469 31.4995 28.7962 31.4995 29.0749V32.0889C31.4995 32.2136 31.4555 32.3199 31.3675 32.4079C31.2869 32.4959 31.1842 32.5399 31.0595 32.5399C30.9349 32.5399 30.8285 32.4959 30.7405 32.4079C30.6599 32.3199 30.6195 32.2136 30.6195 32.0889V24.8399C30.6195 24.7152 30.6599 24.6126 30.7405 24.5319C30.8285 24.4439 30.9349 24.3999 31.0595 24.3999C31.1915 24.3999 31.2979 24.4439 31.3785 24.5319C31.4592 24.6126 31.4995 24.7152 31.4995 24.8399V28.1289L31.2795 28.3709C31.3162 28.1802 31.3969 27.9896 31.5215 27.7989C31.6462 27.6009 31.8039 27.4249 31.9945 27.2709C32.1852 27.1169 32.3979 26.9959 32.6325 26.9079C32.8672 26.8126 33.1129 26.7649 33.3695 26.7649ZM42.5129 26.8529C42.6449 26.8529 42.7513 26.8969 42.8319 26.9849C42.9126 27.0656 42.9529 27.1682 42.9529 27.2929V30.2959C42.9529 31.0366 42.7439 31.6122 42.3259 32.0229C41.9153 32.4262 41.3396 32.6279 40.5989 32.6279C39.8656 32.6279 39.2899 32.4262 38.8719 32.0229C38.4613 31.6122 38.2559 31.0366 38.2559 30.2959V27.2929C38.2559 27.1682 38.2963 27.0656 38.3769 26.9849C38.4649 26.8969 38.5713 26.8529 38.6959 26.8529C38.8279 26.8529 38.9343 26.8969 39.0149 26.9849C39.0956 27.0656 39.1359 27.1682 39.1359 27.2929V30.2959C39.1359 30.7946 39.2643 31.1722 39.5209 31.4289C39.7776 31.6856 40.1369 31.8139 40.5989 31.8139C41.0756 31.8139 41.4386 31.6856 41.6879 31.4289C41.9446 31.1722 42.0729 30.7946 42.0729 30.2959V27.2929C42.0729 27.1682 42.1133 27.0656 42.1939 26.9849C42.2819 26.8969 42.3883 26.8529 42.5129 26.8529ZM48.7081 26.7099C49.2068 26.7099 49.6541 26.8382 50.0501 27.0949C50.4461 27.3442 50.7578 27.6889 50.9851 28.1289C51.2198 28.5689 51.3371 29.0786 51.3371 29.6579C51.3371 30.2372 51.2198 30.7506 50.9851 31.1979C50.7578 31.6452 50.4461 32.0009 50.0501 32.2649C49.6614 32.5216 49.2214 32.6499 48.7301 32.6499C48.4588 32.6499 48.2021 32.6096 47.9601 32.5289C47.7254 32.4409 47.5091 32.3272 47.3111 32.1879C47.1204 32.0412 46.9591 31.8836 46.8271 31.7149C46.6951 31.5389 46.5998 31.3666 46.5411 31.1979L46.7831 31.0439V32.1439C46.7831 32.2686 46.7428 32.3749 46.6621 32.4629C46.5814 32.5509 46.4751 32.5949 46.3431 32.5949C46.2184 32.5949 46.1121 32.5546 46.0241 32.4739C45.9434 32.3859 45.9031 32.2759 45.9031 32.1439V24.8509C45.9031 24.7262 45.9434 24.6199 46.0241 24.5319C46.1121 24.4439 46.2184 24.3999 46.3431 24.3999C46.4751 24.3999 46.5814 24.4439 46.6621 24.5319C46.7428 24.6199 46.7831 24.7262 46.7831 24.8509V28.2389L46.6181 28.1509C46.6694 27.9676 46.7574 27.7916 46.8821 27.6229C47.0141 27.4469 47.1718 27.2929 47.3551 27.1609C47.5458 27.0216 47.7548 26.9116 47.9821 26.8309C48.2168 26.7502 48.4588 26.7099 48.7081 26.7099ZM48.6091 27.5239C48.2424 27.5239 47.9161 27.6156 47.6301 27.7989C47.3514 27.9822 47.1314 28.2352 46.9701 28.5579C46.8161 28.8806 46.7391 29.2472 46.7391 29.6579C46.7391 30.0686 46.8161 30.4389 46.9701 30.7689C47.1314 31.0989 47.3514 31.3592 47.6301 31.5499C47.9161 31.7406 48.2424 31.8359 48.6091 31.8359C48.9758 31.8359 49.2984 31.7406 49.5771 31.5499C49.8558 31.3592 50.0758 31.0989 50.2371 30.7689C50.3984 30.4389 50.4791 30.0686 50.4791 29.6579C50.4791 29.2472 50.3984 28.8806 50.2371 28.5579C50.0758 28.2352 49.8558 27.9822 49.5771 27.7989C49.2984 27.6156 48.9758 27.5239 48.6091 27.5239Z" fill="black" />
            </g>
            <defs>
                <clipPath id="clip0_194_197">
                    <rect width="54" height="34.74" fill="white" />
                </clipPath>
            </defs>
        </svg>
    </a>

    <ul class="flex gap-x-3 text-base">
        <a href="">
            <li>order tracker</li>
        </a>
        <a href="">
            <li>become a partner</li>
        </a>
        <a href="">
            <li>home</li>
        </a>
        <a href="">
            <li>request a print</li>
        </a>
        <a href="" class="text-kViolet">
            <li>business hub</li>
        </a>
    </ul>
</footer>

</html>
<script src="https://kit.fontawesome.com/d3c4f3f1ff.js" crossorigin="anonymous"></script>
<script>
    function addRow() {
        const tableBody = document.getElementById('orderTable');
        const rowCount = tableBody.rows.length

        const newRow = tableBody.insertRow();

        for (let i = 0; i < 8; i++) {
            const newCell = newRow.insertCell(i);
            newCell.className = 'border-l border-b border-kBlack p-2 items-center justify-center';

            if (i === 0) {
                newCell.className += ' font-bold text-center';
                newCell.textContent = rowCount;
            } else if (i === 3 || i === 5) {
                newCell.className = 'border-l border-b border-kBlack';
                const select = document.createElement('select');
                select.className = 'border-none p-2 focus:ring-0';

                const sizes = ['XXS', 'XS', 'S', 'M', 'L', 'XL', 'XXL'];
                sizes.forEach(size => {
                    const option = document.createElement('option');
                    option.value = size.toLowerCase();
                    option.textContent = size;
                    select.appendChild(option);
                });

                newCell.appendChild(select);
            } else if (i == 6) {
                newCell.className = 'border-l border-b border-kBlack flex justify-center items-center h-[48px]';
                const input = document.createElement('input');
                input.type = 'checkbox';
                input.className = 'h-5 w-5';

                newCell.appendChild(input);
            } else {
                newCell.className = 'border-l border-b border-kBlack';
                const input = document.createElement('input');
                input.type = 'text';
                input.className = 'w-[100px] border-none p-2 focus:ring-0';
                newCell.appendChild(input);
            }

            if (i === 7) {
                newCell.className += ' border-r';
            }
        }
    }
</script>