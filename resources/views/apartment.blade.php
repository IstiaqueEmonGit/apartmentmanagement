<x-app-layout>
    <!--table-->
    <!-- component -->


    <a href="{{route('addapartment')}}"><x-bladewind.button>Add New Apartment</x-bladewind.button></a>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
              <table class="min-w-full">
                <thead class="border-b">
                  <tr>
                    <th scope="col" class="text-sm font-medium text-gray-500 px-6 py-4 text-left">
                        Society Name
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-500 px-6 py-4 text-left">
                      Apartment Name
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-500 px-6 py-4 text-left">
                      Apartment Number
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-500 px-6 py-4 text-left">
                        Address
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-500 px-6 py-4 text-left">
                        Flats
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-500 px-6 py-4 text-left">
                        Owners
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-500 px-6 py-4 text-left">
                        Tenants
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-500 px-6 py-4 text-left">
                        Action
                    </th>


                  </tr>
                </thead>
                <tbody>
                    @foreach($apartments as $a)
                  <tr class="border-b">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">{{$a->society_name}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">{{$a->apartment_name}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">{{$a->apartment_no}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">{{$a->address}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">{{$a->flats}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500"></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500"></td>
                        <td><a href="{{route('editapartment', $a->id)}}"><x-bladewind.button>Edit</x-bladewind.button></a> <a href="{{route('deleteapartment', $a->id)}}"><x-bladewind.button>Delete</x-bladewind.button></a></td>

                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class='row'>
                {{$apartments->links()}}

            </div>
            </div>
          </div>
        </div>
      </div>



</x-app-layout>
