<div class="bg-white p-4 flex items-center justify-between top-0 w-full z-50">
    <div class="flex items-center">
        <img src="{{ asset('img/hoax-chaser-logo.png') }}" alt="Logo" class="h-8 w-auto">
    </div>
    <div class="flex items-center space-x-4">
        <a href="/"
            class="{{ request()->is('/') ? 'bg-[#FA3454] text-white' : 'text-gray-400 hover:text-gray-200' }} px-4 py-2 rounded-xl flex items-center">
            <img src="{{ request()->is('/') ? asset('ic/house-active.svg') : asset('ic/house.svg') }}" alt="Home Icon"
                class="h-6 w-6">
            <span class="ml-2">Home</span>
        </a>
        <a href="{{ route('readMode') }}"
            class="{{ request()->is('read-mode') ? 'bg-[#FA3454] text-white' : 'text-gray-400 hover:text-gray-200' }} px-4 py-2 rounded-xl flex items-center">
            <img src="{{ request()->is('read-mode') ? asset('ic/read-mode-active.svg') : asset('ic/read-mode.svg') }}"
                alt="Read Mode Icon" class="h-6 w-6">
            <span class="ml-2">Read Mode</span>
        </a>
        <a href="{{ route('checkByAI') }}"
            class="{{ request()->is('check-by-ai') ? 'bg-[#FA3454] text-white' : 'text-gray-400 hover:text-gray-200' }} px-4 py-2 rounded-xl flex items-center">
            <img src="{{ request()->is('check-by-ai') ? asset('ic/analyze-active.svg') : asset('ic/analyze.svg') }}"
                alt="Check By AI Icon" class="h-6 w-6">
            <span class="ml-2">Check By AI</span>
        </a>
        <a href="{{ route('community') }}"
            class="{{ request()->is('community') ? 'bg-[#FA3454] text-white' : 'text-gray-400 hover:text-gray-200' }} px-4 py-2 rounded-xl flex items-center' }}">
            Community
        </a>
    </div>
</div>

<script></script>

<style scoped>

</style>
