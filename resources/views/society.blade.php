<x-app-layout>
        <!--table-->
        <!-- component -->


        <a href="{{route('addsociety')}}"><x-bladewind.button>Add New Society</x-bladewind.button></a>
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
                          Address
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-500 px-6 py-4 text-left">
                          Number_Of_Apartments
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-500 px-6 py-4 text-left">
                            Action
                        </th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach($societies as $s)
                      <tr class="border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">{{$s->society_name}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">{{$s->address}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">{{$s->number_of_apartments}}</td>
                            <td><a href="{{route('editsociety',$s->id)}}"><x-bladewind.button>Edit</x-bladewind.button></a> <a href="{{route('deletesociety', $s->id)}}"><x-bladewind.button>Delete</x-bladewind.button></a></td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <div class='row'>
                    {{$societies->links()}}

                </div>
                </div>
              </div>
            </div>
          </div>



</x-app-layout>
