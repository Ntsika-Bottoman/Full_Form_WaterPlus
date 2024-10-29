<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('We offer free pick ups and dropoffs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

<!-- Hire Us -->
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
<!-- Grid -->
            <div class="grid md:grid-cols-2 items-center gap-12">
        <div> 
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d229169.65614506535!2d27.875213428121533!3d-26.171427670020726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sza!4v1726050121539!5m2!1sen!2sza" 
        width="500" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="mt-8">
            <ul class="mt-2 space-y-2"> 
            </ul>
        </div>
<!-- Brands -->
        <div class="mt-8">
            <div class="mt-4 flex gap-x-8">
        </div>
      </div>
<!-- End Brands -->
        </div>
<!-- End Col -->




        <div class="relative">
<!-- Card -->
            <div class="flex flex-col border rounded-xl p-4 sm:p-6 lg:p-10 dark:border-neutral-700">
            <h2 class="text-xl font-semibold text-dark-800 dark:text-dark-200">
            Fill in the form
            </h2>
                <form action="/create" method="POST">
                    @csrf 
                    <div class="mt-6 grid gap-4 lg:gap-6">
<!-- Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                            <div>
                                <label for="title" class="block mb-2 text-sm text-gray-700 font-medium dark:text-dark">Full Name</label>
                                <input type="text" name="title" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            </div>
                            <div>
                                <label for="title1" class="block mb-2 text-sm text-gray-700 font-medium dark:text-dark">Phone Number</label>
                                <input type="text" name="title1" id="hs-lastname-hire-us-1" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            </div>
                        </div>
<!-- End Grid -->  
                        <div>
                            <label for="title2" class="block mb-2 text-sm text-gray-700 font-medium dark:text-dark">Email Address</label>
                            <input type="email" name="title2" id="hs-work-email-hire-us-1" autocomplete="email" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                        </div>
 <!-- Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                            <div>
                                <label for="title3" class="block mb-2 text-sm text-gray-700 font-medium dark:text-dark">City</label>
                                <input type="text" name="title3" id="hs-company-hire-us-1" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            </div>

                            <div>
                                <label for="title4" class="block mb-2 text-sm text-gray-700 font-medium dark:text-dark">Province</label>
                                <input type="text" name="title4" id="hs-company-website-hire-us-1" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            </div>
                        </div>
 <!-- End Grid -->
                        <div>
                            <label for="body" class="block mb-2 text-sm text-gray-700 font-medium dark:text-dark">Physical Address</label>
                            <textarea name="body" rows="4" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"></textarea>
                        </div>
<!-- Checkbox -->
                        <div class="mt-3 flex">
                            <div class="flex">
                                <input id="remember-me" name="remember-me" type="checkbox" class="shrink-0 mt-1.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                            </div>
                            <div class="ms-3">
                                <label for="remember-me" class="text-sm text-gray-600 dark:text-neutral-400">By submitting this form I have read and acknowledged the <a class="text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">Privacy policy</a></label>
                            </div>
                        </div>
<!-- End Checkbox -->

                    <button>Save</button>
                </form>
                
                <div class="mt-3 text-center">
                    <p class="text-sm text-gray-500 dark:text-neutral-500">
                    You will be redirected to the Home Page.
                    </p>
                </div>
                
            </div>
        </div>
    </div>




    
</x-app-layout>
