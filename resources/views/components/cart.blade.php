<x-layout>
<div class="container mx-auto flex flex-wrap w-full pt-10">
    <div class="w-80 bg-white rounded p-3">
      <div class="flex items-center space-x-4 p-2 mb-5">
        <img
          class="h-12 rounded-full"
          src="./images/Juan-Karlos-Labajo-2.webp"
          alt="James Bhatta"
        />
        <div>
          <h4
            class="font-semibold text-lg text-gray-700 capitalize font-poppins tracking-wide"
          >
            Sheen Irving Suba
          </h4>
          <span class="text-sm tracking-wide flex items-center space-x-1">
            <svg
              class="h-4 text-red-300"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
              /></svg
            ><span class="text-gray-600">Verified</span>
          </span>
        </div>
      </div>
      <ul class="space-y-2 text-sm">
        <li>
          <a
            href="#"
            class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:shadow-outline"
          >
            <span class="text-gray-600">
              <svg
                class="h-5"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                />
              </svg>
            </span>
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a
            href="#"
            class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline"
          >
            <span class="text-gray-600">
              <svg
                class="h-5"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                />
              </svg>
            </span>
            <span>My profile</span>
          </a>
        </li>
        <li>
          <a
            href="#"
            class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 bg-gray-200 focus:bg-gray-200 focus:shadow-outline"
          >
            <span class="text-gray-600">
              <svg
                class="h-5"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"
                />
              </svg>
            </span>
            <span>My orders</span>
          </a>
        </li>
        <li>
          <a
            href="#"
            class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline"
          >
            <span class="text-gray-600">
              <svg
                class="h-5"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"
                ></path>
              </svg>
            </span>
            <span>Settings</span>
          </a>
        </li>
        <li>
          <a
            href="#"
            class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline"
          >
            <span class="text-gray-600">
              <svg
                class="h-5"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                />
              </svg>
            </span>
            <span>Logout</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="w-9/12">
    <div class="bg-white lg:block hidden w-3/4">
        <h1 class="uppercase tracking-wide text-lg font-semibold text-gray-700 my-2">Order Summary</h1>
        <ul class="py-6 border-b space-y-6 px-8">
            @if(session('cart'))
                @foreach(session('cart') as $id => $details)
            <li class="grid grid-cols-6 gap-2 border-b-1 details-{{$id}}">
                <div class="col-span-1 self-center">
                    {{-- <img src="{{ asset('logo') }}/{{ $details['logo'] }}" alt="Product" class="rounded w-full"> --}}
                    <img src="{{ $details['logo'] ? asset('storage/' . $details['logo']) : asset('images/4800016642029.jpg') }}" 
                             alt="{{ $details['productbrand'] }}" 
                             class="object-cover w-full">
                </div>
                <div class="flex flex-col col-span-3 pt-2">
                    <span class="text-gray-600 text-md font-semi-bold">{{$details['productbrand']}}</span>
                    <span class="text-gray-400 text-sm inline-block pt-2">{{$details['description']}}</span>
                </div>
                <div class="col-span-2 pt-3">
                    <div class="flex items-center space-x-2 text-sm justify-between">
                      <div class=" flex flex-row w-28 h-8 bg-transparent rounded-lg">

                        <input type="number"
                            class="flex items-center w-full font-semibold text-center text-gray-700 placeholder-gray-700 bg-gray-100 outline-none dark:text-gray-400 dark:placeholder-gray-400 dark:bg-gray-900 focus:outline-none text-md hover:text-black"
                            placeholder="1">
                    </div>
                        <span class="text-gray-400"> x {{$details['price']}}</span>
                        <span class="text-pink-400 font-semibold inline-block">{{$details['price']}}</span>
                        <span> </span>
                        <span> </span>
                        <button><i class="fa-solid fa-trash text-pink-400"></i></button>
                    </div>
                </div>
            </li>
                @endforeach
            @endif    
            
        </ul>
        <div class="px-8 border-b">
            <div class="flex justify-between py-4 text-gray-600">
                <span>Subtotal</span>
                <span class="font-semibold text-pink-500">₱846.98</span>
            </div>
            <div class="flex justify-between py-4 text-gray-600">
                <span>Shipping</span>
                <span class="font-semibold text-pink-500">Free</span>
            </div>
        </div>
        <div class="font-semibold text-xl px-8 flex justify-between py-8 text-gray-600">
            <span>Total</span>
            <span>₱846.98</span>
        </div>
    </div>
    <div class="w-3/4 pb-20">
    <button class=" submit-button px-4 py-3 rounded-full bg-pink-400 text-white focus:ring focus:outline-none w-full text-xl font-semibold transition-colors">
        Complete Order
    </button>
</div>
    </div>
</div>
</x-layout>

