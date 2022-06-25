<x-app-layout>
    <!--table-->
    <!-- component -->


    <a href="{{route('addowners')}}"><x-bladewind.button>Add New Owner</x-bladewind.button></a>
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
                      Owner Name
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
                        Action
                    </th>


                  </tr>
                </thead>
                <tbody>
                    @foreach($owners as $o)
                  <tr class="border-b">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">{{$o->flat_no}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">{{$o->name}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">{{$o->NID}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">{{$o->email}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">{{$o->occupation}}</td>
                        <td><a href="{{route('editowners', $o->id)}}"><x-bladewind.button>Edit</x-bladewind.button></a> <a href="{{route('deleteowners', $o->id)}}"><x-bladewind.button>Delete</x-bladewind.button></a></td>

                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>



</x-app-layout>
