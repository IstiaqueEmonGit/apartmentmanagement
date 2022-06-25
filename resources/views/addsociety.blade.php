<x-app-layout>
<div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1" style="position:relative; left:20px;" >
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-500">Society Information</h3>
        {{$errors}}
      </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2" style="position:relative; right:40px;">
      <form action="{{url('/addsociety')}}" method="POST">
        @csrf
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="society_name" class="block text-sm font-medium text-gray-500">Society Name</label>
                <input type="text" name="society_name" id="society_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>


              <div class="col-span-6">
                <label for="address" class="block text-sm font-medium text-gray-500">Address</label>
                <input type="text" name="address" id="address" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="number_of_apartments" class="block text-sm font-medium text-gray-500">Number Of Apartments</label>
                <input type="text" name="number_of_apartments" id="number_of_apartments" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
            </div>
          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Save
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</x-app-layout>
