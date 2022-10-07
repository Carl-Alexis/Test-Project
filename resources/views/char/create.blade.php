@extends('layouts.master')

@section('content')

<form action="{{ route('char.store') }}" method="POST">
    @csrf
  <div class="relative md:ml-64 bg-blueGray-100">
  <div class="relative pt-64 pb-32 bg-lightBlue-200">
    <div class="px-4 md:px-6 mx-auto w-full"> <div class="flex flex-wrap"> </div> </div>
  </div>
<div class="px-4 md:px-6 mx-auto w-full -mt-24">
    <div class="flex flex-wrap">
      <div class="w-full">
        <div class="relative flex flex-col min-w-0 break-words w-full mb-8 shadow-lg rounded-lg bg-white text-blueGray-700">
{{-- Main Panel Content --}}
          <div class="block w-full overflow-x-auto">
                <div class="w-full ">
                  <div class="relative flex flex-col w-full mb-6 bg-white">
                    <div class="mb-0 p-6 pb-0">
                      <div class="text-center flex justify-between items-center">
                        <h6 class="text-xl font-bold mb-0">Character Information</h6>
                      </div>
                    </div>
<div class="flex-auto px-6 pb-6 pt-0">
                    <div>
                      <h6 class="mt-6 mb-2 font-bold">Character Details</h6>
                      <hr class="mb-6 border-b-1 border-blueGray-200">
                        <div class="flex flex-wrap -mx-4">
                          {{-- Rarity --}}
                            <div class="w-full px-4 lg:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-500 text-xs font-bold mb-2 ml-1" for="middle-name">Rarity</label>
                                    <div class="mb-3 pt-0"><input required id="rarity" name="rarity" maxlength="20" class="border-blueGray-300 px-3 py-2 text-sm  w-full placeholder-blueGray-200 text-blueGray-700 relative bg-white rounded-md outline-none focus:ring focus:ring-lightBlue-500 focus:ring-1 focus:border-lightBlue-500 border border-solid transition duration-200"></div>
                                </div>
                            </div>
                          {{-- Name --}}
                            <div class="w-full px-4 lg:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-500 text-xs font-bold mb-2 ml-1" for="last-name">Name</label>
                                    <div class="mb-3 pt-0"><input required id="name" name="name" maxlength="20" class="border-blueGray-300 px-3 py-2 text-sm  w-full placeholder-blueGray-200 text-blueGray-700 relative bg-white rounded-md outline-none focus:ring focus:ring-lightBlue-500 focus:ring-1 focus:border-lightBlue-500 border border-solid transition duration-200"></div>
                                </div>
                            </div>
                          {{-- Element --}}
                            <div class="w-full px-4 lg:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-500 text-xs font-bold mb-2 ml-1" for="first-name">Element</label>
                                    <div class="mb-3 pt-0"><input required id="elem" name="elem" maxlength="30" class="border-blueGray-300 px-3 py-2 text-sm  w-full placeholder-blueGray-200 text-blueGray-700 relative bg-white rounded-md outline-none focus:ring focus:ring-lightBlue-500 focus:ring-1 focus:border-lightBlue-500 border border-solid transition duration-200"></div>
                                </div>
                            </div>
                          {{-- Weapon --}}
                            <div class="w-full px-4 lg:w-4/12">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-500 text-xs font-bold mb-2 ml-1" for="middle-name">Weapon</label>
                                    <div class="mb-3 pt-0"><input required id="weap" name="weap" maxlength="20" class="border-blueGray-300 px-3 py-2 text-sm  w-full placeholder-blueGray-200 text-blueGray-700 relative bg-white rounded-md outline-none focus:ring focus:ring-lightBlue-500 focus:ring-1 focus:border-lightBlue-500 border border-solid transition duration-200"></div>
                                </div>
                            </div>

                  </div>
                </div>
              </div>
            </div> {{-- Close profile form --}}



          </div> {{-- Close main panel content --}}
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="block z-50">
    <button type="submit" class="inline-block outline-none focus:outline-none align-middle transition-all duration-150 ease-in-out uppercase border border-solid font-bold last:mr-0 mr-2  text-white bg-pink-500 border-pink-500 active:bg-pink-600 active:border-pink-600 text-xs px-3 py-2 shadow hover:shadow-md rounded-md">Submit</button>
  </div>
  </form>



@endsection
