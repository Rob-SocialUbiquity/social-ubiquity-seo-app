<x-layouts.app :title="'Plans'">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-semibold mb-4">Plans</h1>

        @if ($plans->count())
            <ul class="divide-y divide-gray-200">
                @foreach ($plans as $plan)
                    <li class="py-2">
                        <strong>{{ $plan->name }}</strong> — ${{ number_format($plan->price, 2) }}
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-gray-500">No plans available.</p>
        @endif
    </div>
</x-layouts.app>
