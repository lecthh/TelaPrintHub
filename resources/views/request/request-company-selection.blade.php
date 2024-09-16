@extends('layout.layout')

@section('content')
<div class="flex flex-col">
    <div class="flex lowercase gap-x-3 justify-between">
        <div class="flex flex-col w-1/2">
            <form method="GET" action="{{ route('request-company-selection') }}" class="flex flex-col px-6 gap-y-3">
                <div class="flex flex-col px-6 gap-y-6">
                    <h1 class="text-xl font-bold">Request a Print</h1>
                    <div class="flex flex-col gap-y-3">
                        <div class="flex flex-col gap-y-3">
                            <h1 class="text-lg font-bold">Select Apparel</h1>
                            <div class="flex">
                                @foreach(['T-shirt', 'Hoodie', 'Polo shirt', 'Shorts', 'Sportswear'] as $apparel)
                                <label for="{{ strtolower(str_replace(' ', '', $apparel)) }}" class="cursor-pointer">
                                    <input type="radio" name="apparel"
                                        id="{{ strtolower(str_replace(' ', '', $apparel)) }}" value="{{ $apparel }}"
                                        class="hidden peer" {{ request('apparel') === $apparel ? 'checked' : '' }}
                                        onchange="this.form.submit(); document.getElementById('selected_category').value = '{{ $apparel }}';">
                                    <div
                                        class="p-[10px] border {{ $loop->first ? 'rounded-l-md' : ($loop->last ? 'rounded-r-md' : '') }} border-kBlack transition hover:bg-kBlack hover:text-kWhite peer-checked:bg-kBlack peer-checked:text-kWhite">
                                        {{ $apparel }}
                                    </div>
                                </label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <form method="POST" action="{{ route('request-company-selection') }}"
                class="flex flex-col flex-grow px-6 py-3 gap-y-6 justify-between">
                @csrf
                @if($selectedCategory)
                <div class="flex flex-col px-6 py-3 gap-y-6">
                    <div class="flex flex-col gap-y-3">
                        <h1 class="text-lg font-bold">Choose a Designer</h1>
                        @if($designerCompanies->isEmpty())
                        <p class="text-red-700 text-base">No companies are offering this apparel.</p>
                        @else
                        <div class="flex flex-col gap-y-6">
                            @foreach($designerCompanies as $company)
                            <label for="{{ $company->designer_ID }}" class="cursor-pointer">
                                <input type="radio" name="company" id="{{ $company->designer_ID }}" class="hidden peer"
                                    onchange="updateDescription('{{ $company->designer_ID }}', '{{ $company->description }}', '{{ $company->logo }}', '{{ $company->gallery }}' )">
                                <div class="flex gap-x-3">
                                    <div class="w-[100px] h-[100px] border border-kBlack">
                                        <img src="{{ asset($company->logo) }}"
                                            alt="{{ $company->name }} Logo" class="object-cover w-full h-full">
                                    </div>
                                    <div class="flex flex-col gap-y-2">
                                        <h1 class="text-base font-bold">{{ $company->name }}</h1>
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
                                        <p class="text-base">{{ $company->description }}</p>
                                    </div>
                                </div>
                            </label>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
                <input type="hidden" name="selected_category" id="selected_category" value="{{ request('apparel') }}">
                <input type="hidden" name="selected_company" id="selected_company">
                <div class="inline-flex justify-start px-6">
                    <button type="submit" value="Next"
                        class="bg-kBlack font-base flex p-3 justify-around items-center text-kWhite text-base">
                        <p>next</p>
                    </button>
                </div>
            </form>
            <div class="flex justify-center items-center px-12">
                <div class="flex items-center justify-center">
                    <div class="flex w-[30px] h-[30px] rounded-full bg-kBlack items-center justify-center text-kWhite">
                        <h1 class="text-base font-bold">1</h1>
                    </div>
                    <svg width="80" height="2" viewBox="0 0 80 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line y1="1" x2="80" y2="1" stroke="black" stroke-width="2" />
                    </svg>
                </div>
                <div class="flex items-center justify-center">
                    <div
                        class="flex w-[30px] h-[30px] rounded-full border-2 border-kBlack bg-kWhite items-center justify-center text-kBlack">
                        <h1 class="text-base font-bold">2</h1>
                    </div>
                    <svg width="80" height="2" viewBox="0 0 80 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line y1="1" x2="80" y2="1" stroke="black" stroke-width="2" />
                    </svg>
                </div>
                <div class="flex items-center justify-center">
                    <div
                        class="flex w-[30px] h-[30px] rounded-full border-2 border-kBlack bg-kWhite items-center justify-center text-kBlack">
                        <h1 class="text-base font-bold">3</h1>
                    </div>
                </div>
            </div>
        </div>

        <div id="aboutSection" class="flex flex-col px-6 mr-6 gap-y-3 w-1/2" style="display: none;">
            <h1 class="font-bold text-lg normal-case mb-2" id="company-name">please select a production company</h1>
            <div class="flex flex-col gap-y-4">
                <div class="flex gap-x-2">
                    <div class="w-[100px] h-[100px] border border-kBlack bg-kViolet">
                        <img src="" alt="" srcset="" id="companyLogo" class="w-full h-full cursor-pointer" onclick="openModal(src)">
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
                    <h1 class="text-base font-semibold">Apparel Price</h1>
                    <div id="apparelPriceContainer" class="flex gap-x-2">
                        @if(Session::has('price'))
                            <p class="text-base">
                                {{ ucfirst(Session::get('selected_category')->name) }} Price: ${{ Session::get('price') ?? 'N/A' }}
                            </p>
                        @else
                            <p class="text-base">Price: N/A</p>
                        @endif
                    </div>
                </div>                
                <div class="flex flex-col gap-y-2">
                    <h1 class="text-base font-semibold">company gallery</h1>
                    <div id="companyGalleryContainer" class="flex gap-x-2">
                    </div>
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

    @endif
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center" onclick="closeModal(event)">
        <span class="absolute top-2 right-2 text-white cursor-pointer text-xl">&times;</span>
        <img id="modalImage" class="max-w-full max-h-full">
    </div>
    </form>
    @if($errors->any())
    <div class="text-red-500 text-sm">
        @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif
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
        console.log(id, description, logo, gallery);

        const galleryArray = JSON.parse(gallery);

        document.getElementById('aboutSection').style.display = 'block';
        document.getElementById('selected_company').value = id;
        document.getElementById('company-name').textContent = 'about ' + document.querySelector(`label[for="${id}"] .text-base`).textContent;
        document.getElementById('company-name-2').textContent = document.querySelector(`label[for="${id}"] .text-base`).textContent;
        document.getElementById('comp-desc-2').textContent = description;
        document.getElementById('companyLogo').src = logo;

        const galleryContainer = document.getElementById('companyGalleryContainer');

        galleryContainer.innerHTML = '';

        galleryArray.forEach((item) => {
            const imgDiv = document.createElement('div');
            imgDiv.classList.add('w-[120px]', 'h-[150px]', 'border', 'border-kBlack');

            const img = document.createElement('img');
            img.src = item.file_path;
            img.alt = 'Gallery Image';
            img.classList.add('w-full', 'h-full', 'object-cover', 'cursor-pointer');
            img.onclick = function() {
                openModal(item.file_path);
            };
            imgDiv.appendChild(img);
            galleryContainer.appendChild(imgDiv);
        });
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
@endsection