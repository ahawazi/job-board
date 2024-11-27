<x-site-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form >
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900 dark:text-white">Profile</h2>
                <p class="mt-1 text-sm/6 text-gray-600 dark:text-white">This information will be displayed publicly so be careful what
                    you share.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="username" class="block text-sm/6 font-medium text-gray-900 dark:text-white">Username</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <span
                                    class="flex select-none items-center pl-3 text-gray-500 dark:text-white sm:text-sm">workcation.com/</span>
                                <input type="text" name="username" id="username" autocomplete="username"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                    placeholder="janesmith">
                            </div>
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="about" class="block text-sm/6 font-medium text-gray-900 dark:text-white">About</label>
                        <div class="mt-2">
                            <textarea id="about" name="about" rows="3"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"></textarea>
                        </div>
                        <p class="mt-3 text-sm/6 text-gray-600 dark:text-white">Write a few sentences about yourself.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900 dark:text-white">Cancel</button>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>

</x-site-layout>
