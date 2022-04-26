<div>
    <div class="w-full px-8 py-4 mx-auto bg-white shadow-md dark:bg-gray-800">

        <div class="flex items-center justify-between">

            <span class="lg:text-lg text-sm lg:font-medium font-light text-gray-800 dark:text-gray-400">
              Amber Tech Dashboard
            </span>
        </div>
    </div>
    <div class="my-20">

        <section
            class="w-3/5 p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
            <div class="flex justify-center">
                @if(session()->has('success'))
                    <div class="bg-green-200 px-6 py-4 mx-2 my-4 rounded-md text-lg flex  items-center mx-auto w-3/4 xl:w-2/4">
                        <svg viewBox="0 0 24 24" class="text-green-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                            <path fill="currentColor"
                                  d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z"
                            ></path>
                        </svg>
                        <span class="text-green-800"> {{ session('success') }} </span>
                    </div>
                @endif
            </div>
                <div class="">
                    <h2 class="text-3xl font-bold mb-10 text-gray-800 text-center">Class & Schedule</h2>

                    <form class="space-y-5 space-x-5" wire:submit.prevent="classschedule">
                        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                            <div>
                                <label class="block mb-1 font-bold text-gray-500">Class Name</label>
                                <input type="text" wire:model="class_nm" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                                @error('class_nm') <span class="error text-red-600">{{ $message }}</span> @enderror
                            </div>
                            <div>
                                <label class="block mb-1 font-bold text-gray-500">Teacher Name</label>
                                <select wire:model="teacher_id" id="" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                                    <option value="">No Teacher</option>
                                    @foreach($teacher as $teachers)
                                        @if ($teachers->user_type === 'Teacher')
                                            <option value="{{ $teachers->id }}">{{ $teachers->first_nm.' '.$teachers->last_nm }}</option>
                                        @endif
                                    @endforeach

                                </select>
                                @error('teacher_id') <span class="error text-red-600">{{ $message }}</span> @enderror
                            </div>
                            <div>
                                <label class="block mb-1 font-bold text-gray-500">Start Date</label>
                                <input type="date" wire:model="start_time" class="w-full border-2 border-gray-200 p-2.5 rounded outline-none focus:border-purple-500">
                                @error('start_time') <span class="error text-red-600">{{ $message }}</span> @enderror
                            </div>
                            <div>
                                <label class="block mb-1 font-bold text-gray-500">End Date</label>
                                <input type="date" wire:model="end_time" class="w-full border-2 border-gray-200 p-2.5 rounded outline-none focus:border-purple-500">

                                @error('end_time') <span class="error text-red-600">{{ $message }}</span> @enderror
                            </div>
                            <div>
                                <label class="block mb-1 font-bold text-gray-500">Subject Name</label>
                                <select wire:model="subject_id" id="" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                                    <option value="">Select a Subject For You Class</option>
                                    @foreach($subject as $subjects)
                                        <option value="{{ $subjects->id }}">{{ $subjects->subject_nm}}</option>
                                    @endforeach
                                </select>

                                @error('subject_id') <span class="error text-red-600">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="flex justify-end mt-6 space-x-1">
                            <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-green-500
                                   rounded-md hover:bg-green-600 focus:outline-none focus:bg-gray-600">
                                Save
                            </button>
{{--                            <a class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-red-500--}}
{{--                            rounded-md hover:bg-red-600 focus:outline-none focus:bg-gray-600" href="{{ url('dashboard') }}">back</a>--}}
                        </div>
                    </form>

                </div>
        </section>
    </div>

</div>
