<button @click="darkMode = !darkMode; localStorage.setItem('darkMode', darkMode)"
    class="p-2 rounded-full bg-gray-200 dark:bg-gray-800 text-gray-900 dark:text-gray-100">
    <template x-if="!darkMode">
        <!-- Moon Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 3C12.825 3 13.612 3.164 14.347 3.464C13.307 4.214 12.53 5.285 12.11 6.555C11.69 7.825 11.69 9.225 12.11 10.495C12.53 11.765 13.307 12.836 14.347 13.586C13.612 13.886 12.825 14.05 12 14.05C8.692 14.05 6 11.358 6 8.05C6 4.742 8.692 3 12 3Z" />
        </svg>
    </template>
    <template x-if="darkMode">
        <!-- Sun Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 4.05V6.05M16.95 7.05L15.364 8.636M20.05 12H18.05M16.95 16.95L15.364 15.364M12 20.05V18.05M7.05 16.95L8.636 15.364M4.05 12H6.05M7.05 7.05L8.636 8.636" />
        </svg>
    </template>
</button>
