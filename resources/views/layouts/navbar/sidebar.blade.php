<nav class="block py-4 px-6 top-0 bottom-0 w-64 bg-white left-0 absolute flex-row flex-nowrap md:z-10 z-9999 transition-all duration-300 ease-in-out transform md:translate-x-0 -translate-x-full">
    <button class="md:hidden flex items-center justify-center cursor-pointer text-blueGray-700 w-6 h-10 border-l-0 border-r border-t border-b border-solid border-blueGray-100 text-xl leading-none bg-white rounded-r border border-solid border-transparent absolute top-1/2 -right-24-px focus:outline-none z-9998"><i class="fas fa-ellipsis-v"></i></button>
    <div class="flex-col min-h-full px-0 flex flex-wrap items-center justify-between w-full mx-auto overflow-y-auto overflow-x-hidden">
       <div class="flex bg-white flex-col items-stretch opacity-100 relative mt-4 overflow-y-auto overflow-x-hidden h-auto z-40 items-center flex-1 rounded w-full">

            <p style="text-align:center;">Star Fleet Academy</p></a>
            <div class="md:flex-col md:min-w-full flex flex-col list-none">
                <hr class="my-4 md:min-w-full">
                    <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">Navigate</h6>
                        <a href="{{ route('profile.index')}}" class="text-xs uppercase py-3 font-bold block text-blueGray-800 hover:text-blueGray-500">
                            <i class="fas fa-newspaper mr-2 text-sm text-blueGray-400"></i>Profile
                        </a>

                        <a href="{{ route('char.index')}}" class="text-xs uppercase py-3 font-bold block text-blueGray-800 hover:text-blueGray-500">
                            <i class="fas fa-user-circle mr-2 text-sm text-blueGray-400"></i>Character
                        </a>

                <hr class="my-4 md:min-w-full">
            </div>
          </div>
       </div>
    </div>
</nav>
