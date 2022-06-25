<x-app-layout>
    <!--table-->
    <!-- component -->


    <a href="{{route('addtenants')}}"><x-bladewind.button>Add New Tenant</x-bladewind.button></a>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
              <table class="min-w-full">
                <thead class="border-b">
                  <tr>
                     <th scope="col" class="text-sm font-medium text-gray-500 px-6 py-4 text-left">
                        Flat No
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-500 px-6 py-4 text-left">
                      Tenant Name
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-500 px-6 py-4 text-left">
                      NID
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-500 px-6 py-4 text-left">
                        Email
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-500 px-6 py-4 text-left">
                        Occupation
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-500 px-6 py-4 text-left">
                        Rent
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-500 px-6 py-4 text-left">
                        Action
                    </th>


                  </tr>
                </thead>
                <tbody>
                    @foreach($tenants as $t)
                  <tr class="border-b">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">{{$t->flat_no}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">{{$t->name}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">{{$t->NID}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">{{$t->email}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">{{$t->occupation}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">{{$t->rent}}</td>
                        <td><a href="{{route('edittenants', $t->id)}}"><x-bladewind.button>Edit</x-bladewind.button></a> <a href="{{route('deletetenants', $t->id)}}"><x-bladewind.button>Delete</x-bladewind.button></a></td>

                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>



</x-app-layout>
