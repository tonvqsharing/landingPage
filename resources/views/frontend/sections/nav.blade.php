
          <div class="container items-center">
            <div class="text-gray-700 transition duration-500 ease-in-out transform bg-white border rounded-lg ">
              <div class="flex flex-col flex-wrap p-5 mx-auto md:items-center md:flex-row">
                <a href="/" class="pr-2 lg:pr-8 lg:px-6 focus:outline-none">
                  <div class="inline-flex items-center">
                    <div class="w-2 h-2 p-2 mr-2 rounded-full bg-gradient-to-tr from-blue-500 to-blue-600">
                    </div>
                    <h2 class="block p-2 text-xl font-medium tracking-tighter text-black transition duration-500 ease-in-out transform cursor-pointer hover:text-gray-500 lg:text-x lg:mr-8"> wickedblocks </h2>
                  </div>
                </a>
                <nav class="flex flex-wrap items-center justify-center text-base md:ml-auto md:mr-auto">
                  <ul class="items-center inline-block list-none lg:inline-flex">
                    @foreach ($links as $link)
                    {{-- <a href=""></a> --}}
                    <li>
                      <a href="{{ $link->url }}" class="px-4 py-1 mr-1 text-base text-gray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black ">{{ $link->title }}</a>
                    </li>
                    @endforeach
</ul>
                </nav>
                <button class="w-auto px-8 py-2 my-2 text-base font-medium text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:b-gblue-700 ">Button </button>
              </div>
            </div>
          </div>
        