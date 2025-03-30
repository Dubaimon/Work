<div class="bg-gray-200 w-16 h-screen flex flex-col items-center py-4">
    <!-- Botón de menú -->
    <button class="bg-gray-800 p-2 rounded-lg text-white mb-4">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Íconos del menú -->
    @foreach ($menuItems as $item)
        <a href="{{ route($item['route']) }}" class="mb-4 p-2 rounded-md hover:bg-gray-300">
            <i class="{{ $item['icon'] }} text-gray-700 text-xl"></i>
        </a>
    @endforeach
</div>