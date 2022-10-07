@extends('layouts.master')
@section ('content')
<div class="relative md:ml-64 bg-blueGray-100">
    <div class="relative pt-64 pb-32 bg-lightBlue-200">
      <div class="px-4 md:px-6 mx-auto w-full">
        <div class="flex flex-wrap">
        </div>
      </div>
    </div>

<div class="px-4 md:px-6 mx-auto w-full -mt-24">
        <div class="flex flex-wrap">
          <div class="w-full">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-8 shadow-lg rounded-lg bg-white text-blueGray-700">
              <div class="px-6 py-4 border-0">
                <div class="flex flex-wrap items-center">
                  <div class="relative w-full max-w-full flex-grow flex-1">
                    <h3 class="font-bold text-lg text-blueGray-700">Character List</h3>
                  </div>
                  <div class="block z-50">
                    <a class="inline-block outline-none focus:outline-none align-middle transition-all duration-150 ease-in-out uppercase border border-solid font-bold last:mr-0 mr-2  text-white bg-pink-500 border-pink-500 active:bg-pink-600 active:border-pink-600 text-xs px-3 py-2 shadow hover:shadow-md rounded-md" href="{{route('char.create')}}">Add</a>
                  </div>
                </div>
              </div>
<div class="block w-full overflow-y-none overflow-x-none">
                <table id="list" class="items-center w-full bg-transparent border-collapse" style="width:100%">
                  <thead>
                    <tr>
                      <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-bold text-left bg-blueGray-100 text-blueGray-500 border-blueGray-200">Rarity</th>
                      <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-bold text-left bg-blueGray-100 text-blueGray-500 border-blueGray-200">Name</th>
                      <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-bold text-left bg-blueGray-100 text-blueGray-500 border-blueGray-200">Element</th>
                      <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-bold text-left bg-blueGray-100 text-blueGray-500 border-blueGray-200">Weapon</th>
                      <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-bold text-left bg-blueGray-100 text-blueGray-500 border-blueGray-200">Action</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($char as $record)
                    <tr>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">{{$record->rarity}}</div>
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">{{$record->name}}</div>
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">{{$record->elem}}</div>
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">{{$record->weap}}</div>
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                            <form action="{{ route('char.destroy', $record->id)}}" method="POST">
                                <a href="{{ route('char.show', $record->id)}}">Show</a>
                                <a href="{{ route('char.edit', $record->id)}}">Edit</a>

                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
      var table = $('#list').DataTable({
        responsive: true
      })
        .columns.adjust()
        .responsive.recalc();
    });

  </script>
