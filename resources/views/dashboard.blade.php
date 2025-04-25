<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <!-- Clients Panel -->
            <div class="relative aspect-video rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 p-6">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Total Clients</h2>
                <p class="mt-2 text-3xl font-bold text-blue-600">{{ $clientCount }}</p>
            </div>

            <!-- Leads Panel -->
            <div class="relative aspect-video rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 p-6">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Total Leads</h2>
                <p class="mt-2 text-3xl font-bold text-green-600">{{ $leadCount }}</p>
            </div>

            <!-- Worklogs Panel -->
            <div class="relative aspect-video rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 p-6">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Worklogs</h2>
                <p class="mt-2 text-3xl font-bold text-purple-600">{{ $worklogCount }}</p>
            </div>
        </div>

        <!-- Plan Overview -->
        <div class="relative h-full flex-1 rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 p-6">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Current Plan Summary</h2>
            <ul class="list-disc list-inside text-gray-800 dark:text-gray-200">
                <li>Bronze: {{ $plans['Bronze'] ?? 0 }}</li>
                <li>Silver: {{ $plans['Silver'] ?? 0 }}</li>
                <li>Gold: {{ $plans['Gold'] ?? 0 }}</li>
                <li>Platinum: {{ $plans['Platinum'] ?? 0 }}</li>
            </ul>
        </div>
    </div>
</x-layouts.app>
