@extends('layout.layout')

@section('content')
<div class="flex flex-col h-full">
    <div class="flex lowercase h-full gap-x-3 justify-between">
        <div class="flex flex-col h-full border-r border-kBlack w-1/2">
            <div class="flex flex-col px-6 gap-y-3">
                <div class="flex flex-col px-6 gap-y-6">
                    <h1 class="text-xl font-bold">Production Companies</h1>
                </div>
            </div>

            <div class="flex flex-col flex-grow px-6 py-3 gap-y-6 justify-between">
                <div class="flex flex-col px-6 py-3 gap-y-6">
                    <div class="flex flex-col gap-y-3">
                        <h1 class="text-lg font-bold">Choose a Printing Company</h1>
                        <div class="flex flex-col gap-y-6">
                            <label for="company" id="company" class="cursor-pointer" onclick="updateDescription()">
                                <input type="radio" name="company" id="" class="hidden peer">
                                <div class="flex gap-x-3">
                                    <div class="w-[100px] h-[100px] border border-kBlack">
                                        <img src="" alt="Logo" class="object-cover w-full h-full">
                                    </div>
                                    <div class="flex flex-col gap-y-2">
                                        <h1 class="text-base font-bold">Production Company</h1>
                                        <div class="flex gap-x-1">
                                            @for($i = 0; $i < 5; $i++)
                                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"
                                                        fill="black" />
                                                </svg>
                                            @endfor
                                        </div>
                                        <p class="text-base">This company produces cool shirts.</p>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="aboutSection" class="flex flex-col px-6 mr-6 gap-y-3 w-1/2" style="display: none;">
            <h1 class="font-bold text-lg normal-case mb-2" id="company-name">please select a production company</h1>
            <div class="flex flex-col gap-y-4">
                <div class="flex gap-x-2">
                    <div class="w-[100px] h-[100px] border border-kBlack bg-kViolet">
                        <img src="" alt="" srcset="" id="companyLogo" class="w-full h-full cursor-pointer"
                            onclick="openModal(src)">
                    </div>
                    <div class="flex flex-col">
                        <h1 id="company-name-2" class="font-bold text-base"></h1>
                        <div class="flex gap-x-1">
                            <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z"
                                    fill="black" />
                            </svg>
                            <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z"
                                    fill="black" />
                            </svg>
                            <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z"
                                    fill="black" />
                            </svg>
                            <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z"
                                    fill="black" />
                            </svg>
                            <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z"
                                    fill="black" />
                            </svg>
                        </div>
                        <div class="flex flex-col gap-y-2">
                            <p id="comp-desc-2" class="text-base">asdfasdf</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-y-2">
                    <h1 class="text-base font-semibold">company gallery</h1>
                    <div id="companyGalleryContainer" class="flex gap-x-2">
                        <div class="w-[150px] h-[150px] bg-kViolet border border-kBlack"></div>
                        <div class="w-[150px] h-[150px] bg-kViolet border border-kBlack"></div>
                        <div class="w-[150px] h-[150px] bg-kViolet border border-kBlack"></div>
                    </div>
                </div>
                <div class="flex flex-col flex-grow gap-y-3">
                    <h1 class="font-bold text-base text-kBlack">services and pricing</h1>
                    <table class="table-auto border border-kBlack">
                        <thead class="text-lg">
                            <tr class="border-b border-kBlack text-base">
                                <td class="p-2 font-bold border-r border-kBlack">service</td>
                                <td class="p-2 font-bold border-r border-kBlack">base price</td>
                                <td class="p-2 font-bold border-r border-kBlack">bulk price</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-kBlack">
                                <td class="p-2 text-base border-r border-kBlack">t-shirt</td>
                                <td class="p-2 text-base border-r border-kBlack">&#8369 500.00</td>
                                <td class="p-2 text-base border-r border-kBlack normal-case">&#8369 5000.00</td>
                            </tr>
                            <tr class="border-b border-kBlack">
                                <td class="p-2 text-base border-r border-kBlack">t-shirt</td>
                                <td class="p-2 text-base border-r border-kBlack">&#8369 500.00</td>
                                <td class="p-2 text-base border-r border-kBlack normal-case">&#8369 5000.00</td>
                            </tr>
                            <tr class="border-b border-kBlack">
                                <td class="p-2 text-base border-r border-kBlack">t-shirt</td>
                                <td class="p-2 text-base border-r border-kBlack">&#8369 500.00</td>
                                <td class="p-2 text-base border-r border-kBlack normal-case">&#8369 5000.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="flex flex-col gap-y-3">
                    <h1 class="text-base font-bold">reviews</h1>
                    <div class="flex-col">
                        <div class="flex justify-between items-center">
                            <h1 class="font-semibold">username</h1>
                            <div class="flex gap-x-1">
                                <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z"
                                        fill="black" />
                                </svg>
                                <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z"
                                        fill="black" />
                                </svg>
                                <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z"
                                        fill="black" />
                                </svg>
                                <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z"
                                        fill="black" />
                                </svg>
                                <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z"
                                        fill="black" />
                                </svg>
                            </div>
                        </div>
                        <p>review</p>
                    </div>
                    <div class="flex-col">
                        <div class="flex justify-between items-center">
                            <h1 class="font-semibold">username</h1>
                            <div class="flex gap-x-1">
                                <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z"
                                        fill="black" />
                                </svg>
                                <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z"
                                        fill="black" />
                                </svg>
                                <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z"
                                        fill="black" />
                                </svg>
                                <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z"
                                        fill="black" />
                                </svg>
                                <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z"
                                        fill="black" />
                                </svg>
                            </div>
                        </div>
                        <p>review</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    function openModal(src) {
        document.getElementById('modalImage').src = src;
        document.getElementById('imageModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('imageModal').classList.add('hidden');
    }

    function updateDescription(id, description, logo, gallery) {
        document.getElementById('aboutSection').style.display = 'block';
        document.getElementById('company-name').innerText = id;
        document.getElementById('company-name-2').innerText = id;
        document.getElementById('comp-desc-2').innerText = description;
        document.getElementById('companyLogo').src = logo;
    }

</script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
@endsection