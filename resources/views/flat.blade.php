<x-app-layout>
    <!--table-->
    <!-- component -->


    <a href="{{route('addflat')}}"><x-bladewind.button>Add New Flat</x-bladewind.button></a>
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
                      Apartment No
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-500 px-6 py-4 text-left">
                      Owner Name
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-500 px-6 py-4 text-left">
                        Tenant Name
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-500 px-6 py-4 text-left">
                        Service Charge
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-500 px-6 py-4 text-left">
                        Action
                    </th>


                  </tr>
                </thead>
                <tbody>
                    @foreach($flats as $f)
                  <tr class="border-b">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">{{$f->flat_no}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">{{$f->apartment_no}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">{{$f->owner_name}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">{{$f->tenant_name}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">{{$f->service_charge}}</td>
                        <td><a href="{{route('editflat', $f->id)}}"><x-bladewind.button>Edit</x-bladewind.button></a> <a href="{{route('deleteflat', $f->id)}}"><x-bladewind.button>Delete</x-bladewind.button></a></td>

                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>



</x-app-layout>
