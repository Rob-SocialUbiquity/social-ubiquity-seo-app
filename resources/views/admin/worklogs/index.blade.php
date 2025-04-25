<x-layouts.app :title="'Worklogs'">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-semibold mb-4">Worklogs</h1>

        @if ($worklogs->count())
            <ul class="divide-y divide-gray-200">
                @foreach ($worklogs as $log)
                    <li class="py-2">
                        <span class="block text-sm text-gray-600">{{ $log->performed_at->format('M d, Y') }}</span>
                        <strong>{{ $log->action }}</strong><br>
                        <span class="text-gray-700">{{ $log->notes }}</span>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-gray-500">No worklogs available.</p>
        @endif
    </div>
</x-layouts.app>
