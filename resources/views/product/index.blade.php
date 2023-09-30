@extends('layouts.app')

@section('content')
    {{-- <img src="{{ asset('images/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}"> --}}
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <title>Close</title>
                    <path
                        d="M14.293 5.293a1 1 0 011.414 0l5 5a1 1 0 01-1.414 1.414L10 6.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0z"
                        clip-rule="evenodd" fill-rule="evenodd"></path>
                </svg>
            </span>
        </div>
    @endif

    @if (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">{{ session('error') }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <title>Close</title>
                    <path
                        d="M14.293 5.293a1 1 0 011.414 0l5 5a1 1 0 01-1.414 1.414L10 6.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0z"
                        clip-rule="evenodd" fill-rule="evenodd"></path>
                </svg>
            </span>
        </div>
    @endif

    <div class="bg-white">

        {{-- <form action="{{ route('product.index') }}" method="GET">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search products">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form> --}}


        <form action="{{ route('product.index') }}" method="GET">
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" name="q" id="default-search"
                    class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search Mockups, Logos..." required>
                <button type="submit"
                    class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>







        @foreach ($products as $product)
            <div class="pt-6">

                <nav aria-label="Breadcrumb">
                    <ol role="list"
                        class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                        <li>
                            <div class="flex items-center">
                                <a href="#" class="mr-2 text-sm font-medium text-gray-900">Men</a>
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor"
                                    aria-hidden="true" class="h-5 w-4 text-gray-300">
                                    <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                                </svg>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <a href="#" class="mr-2 text-sm font-medium text-gray-900">Clothing</a>
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor"
                                    aria-hidden="true" class="h-5 w-4 text-gray-300">
                                    <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                                </svg>
                            </div>
                        </li>

                        <li class="text-sm">
                            <a href="#" aria-current="page"
                                class="font-medium text-gray-500 hover:text-gray-600">Basic
                                Tee 6-Pack</a>
                        </li>
                    </ol>
                </nav>


                <!-- Image gallery -->
                <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
                    <div class="aspect-h-4 aspect-w-3 hidden overflow-hidden rounded-lg lg:block">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-secondary-product-shot.jpg"
                            alt="Two each of gray, white, and black shirts laying flat."
                            class="h-full w-full object-cover object-center">
                    </div>
                    <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                        <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                            <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-tertiary-product-shot-01.jpg"
                                alt="Model wearing plain black basic tee." class="h-full w-full object-cover object-center">
                        </div>
                        <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                            <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-tertiary-product-shot-02.jpg"
                                alt="Model wearing plain gray basic tee." class="h-full w-full object-cover object-center">
                        </div>
                    </div>
                    <div class="aspect-h-5 aspect-w-4 lg:aspect-h-4 lg:aspect-w-3 sm:overflow-hidden sm:rounded-lg">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-featured-product-shot.jpg"
                            alt="Model wearing plain white basic tee." class="h-full w-full object-cover object-center">
                    </div>
                </div>

                <!-- Product info -->
                <div
                    class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
                    <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                        <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $product->name }}</h1>
                    </div>

                    <!-- Options -->
                    <div class="mt-4 lg:row-span-3 lg:mt-0">
                        <h2 class="sr-only">Product information</h2>
                        <p class="text-3xl tracking-tight text-gray-900">${{ $product->price }}</p>

                        <!-- Reviews -->
                        <div class="mt-6">
                            <h3 class="sr-only">Reviews</h3>
                            <div class="flex items-center">
                                <div class="flex items-center">
                                    <!-- Active: "text-gray-900", Default: "text-gray-200" -->
                                    <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg class="text-gray-200 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <p class="sr-only">4 out of 5 stars</p>
                                <a href="#"
                                    class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500">117
                                    reviews</a>
                            </div>
                        </div>

                        <form class="mt-10">
                            <!-- Colors -->
                            <div>
                                <h3 class="text-sm font-medium text-gray-900">Color</h3>

                                <fieldset class="mt-4">
                                    <legend class="sr-only">Choose a color</legend>
                                    <div class="flex items-center space-x-3">
                                        <!--
                                        Active and Checked: "ring ring-offset-1"
                                        Not Active and Checked: "ring-2"
                                      -->
                                        <label
                                            class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 focus:outline-none ring-gray-400">
                                            <input type="radio" name="color-choice" value="White" class="sr-only"
                                                aria-labelledby="color-choice-0-label">
                                            <span id="color-choice-0-label" class="sr-only">White</span>
                                            <span aria-hidden="true"
                                                class="h-8 w-8 bg-white rounded-full border border-black border-opacity-10"></span>
                                        </label>
                                        <!--
                                        Active and Checked: "ring ring-offset-1"
                                        Not Active and Checked: "ring-2"
                                      -->
                                        <label
                                            class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 focus:outline-none ring-gray-400">
                                            <input type="radio" name="color-choice" value="Gray" class="sr-only"
                                                aria-labelledby="color-choice-1-label">
                                            <span id="color-choice-1-label" class="sr-only">Gray</span>
                                            <span aria-hidden="true"
                                                class="h-8 w-8 bg-gray-200 rounded-full border border-black border-opacity-10"></span>
                                        </label>
                                        <!--
                                        Active and Checked: "ring ring-offset-1"
                                        Not Active and Checked: "ring-2"
                                      -->
                                        <label
                                            class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 focus:outline-none ring-gray-900">
                                            <input type="radio" name="color-choice" value="Black" class="sr-only"
                                                aria-labelledby="color-choice-2-label">
                                            <span id="color-choice-2-label" class="sr-only">Black</span>
                                            <span aria-hidden="true"
                                                class="h-8 w-8 bg-gray-900 rounded-full border border-black border-opacity-10"></span>
                                        </label>
                                    </div>
                                </fieldset>
                            </div>

                            <!-- Sizes -->
                            <div class="mt-10">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-sm font-medium text-gray-900">Size</h3>
                                    <a href="#"
                                        class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Size
                                        guide</a>
                                </div>

                                <fieldset class="mt-4">
                                    <legend class="sr-only">Choose a size</legend>
                                    <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                                        <!-- Active: "ring-2 ring-indigo-500" -->
                                        <label
                                            class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-not-allowed bg-gray-50 text-gray-200">
                                            <input type="radio" name="size-choice" value="XXS" disabled
                                                class="sr-only" aria-labelledby="size-choice-0-label">
                                            <span id="size-choice-0-label">XXS</span>
                                            <span aria-hidden="true"
                                                class="pointer-events-none absolute -inset-px rounded-md border-2 border-gray-200">
                                                <svg class="absolute inset-0 h-full w-full stroke-2 text-gray-200"
                                                    viewBox="0 0 100 100" preserveAspectRatio="none"
                                                    stroke="currentColor">
                                                    <line x1="0" y1="100" x2="100" y2="0"
                                                        vector-effect="non-scaling-stroke" />
                                                </svg>
                                            </span>
                                        </label>
                                        <!-- Active: "ring-2 ring-indigo-500" -->
                                        <label
                                            class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm">
                                            <input type="radio" name="size-choice" value="XS" class="sr-only"
                                                aria-labelledby="size-choice-1-label">
                                            <span id="size-choice-1-label">XS</span>
                                            <!--
                                          Active: "border", Not Active: "border-2"
                                          Checked: "border-indigo-500", Not Checked: "border-transparent"
                                        -->
                                            <span class="pointer-events-none absolute -inset-px rounded-md"
                                                aria-hidden="true"></span>
                                        </label>
                                        <!-- Active: "ring-2 ring-indigo-500" -->
                                        <label
                                            class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm">
                                            <input type="radio" name="size-choice" value="S" class="sr-only"
                                                aria-labelledby="size-choice-2-label">
                                            <span id="size-choice-2-label">S</span>
                                            <!--
                                          Active: "border", Not Active: "border-2"
                                          Checked: "border-indigo-500", Not Checked: "border-transparent"
                                        -->
                                            <span class="pointer-events-none absolute -inset-px rounded-md"
                                                aria-hidden="true"></span>
                                        </label>
                                        <!-- Active: "ring-2 ring-indigo-500" -->
                                        <label
                                            class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm">
                                            <input type="radio" name="size-choice" value="M" class="sr-only"
                                                aria-labelledby="size-choice-3-label">
                                            <span id="size-choice-3-label">M</span>
                                            <!--
                                          Active: "border", Not Active: "border-2"
                                          Checked: "border-indigo-500", Not Checked: "border-transparent"
                                        -->
                                            <span class="pointer-events-none absolute -inset-px rounded-md"
                                                aria-hidden="true"></span>
                                        </label>
                                        <!-- Active: "ring-2 ring-indigo-500" -->
                                        <label
                                            class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm">
                                            <input type="radio" name="size-choice" value="L" class="sr-only"
                                                aria-labelledby="size-choice-4-label">
                                            <span id="size-choice-4-label">L</span>
                                            <!--
                                          Active: "border", Not Active: "border-2"
                                          Checked: "border-indigo-500", Not Checked: "border-transparent"
                                        -->
                                            <span class="pointer-events-none absolute -inset-px rounded-md"
                                                aria-hidden="true"></span>
                                        </label>
                                        <!-- Active: "ring-2 ring-indigo-500" -->
                                        <label
                                            class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm">
                                            <input type="radio" name="size-choice" value="XL" class="sr-only"
                                                aria-labelledby="size-choice-5-label">
                                            <span id="size-choice-5-label">XL</span>
                                            <!--
                                          Active: "border", Not Active: "border-2"
                                          Checked: "border-indigo-500", Not Checked: "border-transparent"
                                        -->
                                            <span class="pointer-events-none absolute -inset-px rounded-md"
                                                aria-hidden="true"></span>
                                        </label>
                                        <!-- Active: "ring-2 ring-indigo-500" -->
                                        <label
                                            class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm">
                                            <input type="radio" name="size-choice" value="2XL" class="sr-only"
                                                aria-labelledby="size-choice-6-label">
                                            <span id="size-choice-6-label">2XL</span>
                                            <!--
                                          Active: "border", Not Active: "border-2"
                                          Checked: "border-indigo-500", Not Checked: "border-transparent"
                                        -->
                                            <span class="pointer-events-none absolute -inset-px rounded-md"
                                                aria-hidden="true"></span>
                                        </label>
                                        <!-- Active: "ring-2 ring-indigo-500" -->
                                        <label
                                            class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm">
                                            <input type="radio" name="size-choice" value="3XL" class="sr-only"
                                                aria-labelledby="size-choice-7-label">
                                            <span id="size-choice-7-label">3XL</span>
                                            <!--
                                          Active: "border", Not Active: "border-2"
                                          Checked: "border-indigo-500", Not Checked: "border-transparent"
                                        -->
                                            <span class="pointer-events-none absolute -inset-px rounded-md"
                                                aria-hidden="true"></span>
                                        </label>
                                    </div>
                                </fieldset>
                            </div>

                            <a type="submit" href="{{ route('product.show', ['productId' => $product->id]) }}"
                                class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                View details</a>
                            {{-- <a href="{{ route('products.show', ['product' => $product->id]) }}" class="btn btn-primary">View Details</a> --}}

                        </form>
                    </div>

                    <div
                        class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
                        <!-- Description and details -->
                        <div>
                            <h3 class="sr-only">Description</h3>

                            <div class="space-y-6">
                                <p class="text-base text-gray-900">{{ $product->description }}</p>
                            </div>
                        </div>

                        <div class="mt-10">
                            <h3 class="text-sm font-medium text-gray-900">Highlights</h3>

                            <div class="mt-4">
                                <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                                    <li class="text-gray-400"><span class="text-gray-600">Hand cut and sewn locally</span>
                                    </li>
                                    <li class="text-gray-400"><span class="text-gray-600">Dyed with our proprietary
                                            colors</span></li>
                                    <li class="text-gray-400"><span class="text-gray-600">Pre-washed &amp;
                                            pre-shrunk</span>
                                    </li>
                                    <li class="text-gray-400"><span class="text-gray-600">Ultra-soft 100% cotton</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="mt-10">
                            <h2 class="text-sm font-medium text-gray-900">Details</h2>

                            <div class="mt-4 space-y-6">
                                <p class="text-sm text-gray-600">The 6-Pack includes two black, two white, and two heather
                                    gray
                                    Basic Tees. Sign up for our subscription service and be the first to get new, exciting
                                    colors, like our upcoming &quot;Charcoal Gray&quot; limited release.</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        @endforeach
        {{ $products->links() }}
    </div>
@endsection
