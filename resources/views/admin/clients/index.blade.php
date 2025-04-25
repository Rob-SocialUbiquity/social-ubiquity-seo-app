<x-layouts.app :title="'Clients'">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-semibold mb-4">Clients</h1>

        @if ($clients->count())
            <ul class="divide-y divide-gray-200">
                @foreach ($clients as $client)
                    <li class="py-2">{{ $client->name }}</li>
                @endforeach
            </ul>
        @else
            <p class="text-gray-500">No clients found.</p>
        @endif
    </div>
</x-layouts.app>
