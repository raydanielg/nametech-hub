
@extends('layouts.dashboard')

@section('dashboard-title', 'System Health')

@section('dashboard-content')
<div class="space-y-6 fade-in">
    <div class="flex items-start justify-between gap-4">
        <div>
            <h2 class="text-lg font-semibold text-gray-900">Real-time System Health</h2>
            <p class="text-sm text-gray-500">Live checks for core services and runtime metrics.</p>
        </div>

        <div class="text-right">
            <div id="health-status" class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gray-100 text-gray-700">Loading…</div>
            <div class="mt-1 text-xs text-gray-500">Last updated: <span id="health-updated">—</span></div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
            <div class="text-sm font-semibold text-gray-900">Database</div>
            <div class="mt-2 flex items-center justify-between">
                <div class="text-sm text-gray-500">Connectivity</div>
                <div id="check-database" class="text-sm font-semibold text-gray-700">—</div>
            </div>
        </div>

        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
            <div class="text-sm font-semibold text-gray-900">Cache</div>
            <div class="mt-2 flex items-center justify-between">
                <div class="text-sm text-gray-500">Read/Write</div>
                <div id="check-cache" class="text-sm font-semibold text-gray-700">—</div>
            </div>
        </div>

        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
            <div class="text-sm font-semibold text-gray-900">Storage</div>
            <div class="mt-2 flex items-center justify-between">
                <div class="text-sm text-gray-500">Writable</div>
                <div id="check-storage" class="text-sm font-semibold text-gray-700">—</div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
            <div class="flex items-center justify-between">
                <h3 class="text-sm font-semibold text-gray-900">Runtime</h3>
                <div class="text-xs text-gray-500">Auto-refresh: 10s</div>
            </div>

            <div class="mt-4 space-y-3 text-sm">
                <div class="flex items-center justify-between">
                    <div class="text-gray-500">Laravel</div>
                    <div id="meta-laravel" class="font-medium text-gray-800">—</div>
                </div>
                <div class="flex items-center justify-between">
                    <div class="text-gray-500">PHP</div>
                    <div id="meta-php" class="font-medium text-gray-800">—</div>
                </div>
                <div class="flex items-center justify-between">
                    <div class="text-gray-500">Environment</div>
                    <div id="meta-env" class="font-medium text-gray-800">—</div>
                </div>
                <div class="flex items-center justify-between">
                    <div class="text-gray-500">Debug</div>
                    <div id="meta-debug" class="font-medium text-gray-800">—</div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
            <h3 class="text-sm font-semibold text-gray-900">Performance</h3>

            <div class="mt-4 space-y-3 text-sm">
                <div class="flex items-center justify-between">
                    <div class="text-gray-500">Memory Usage</div>
                    <div id="meta-memory" class="font-medium text-gray-800">—</div>
                </div>
                <div class="flex items-center justify-between">
                    <div class="text-gray-500">Disk Free</div>
                    <div id="meta-disk" class="font-medium text-gray-800">—</div>
                </div>
                <div class="flex items-center justify-between">
                    <div class="text-gray-500">Cache Driver</div>
                    <div id="meta-cache-driver" class="font-medium text-gray-800">—</div>
                </div>
                <div class="flex items-center justify-between">
                    <div class="text-gray-500">Queue</div>
                    <div id="meta-queue" class="font-medium text-gray-800">—</div>
                </div>
                <div class="flex items-center justify-between">
                    <div class="text-gray-500">Mail Driver</div>
                    <div id="meta-mail" class="font-medium text-gray-800">—</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    (function () {
        const url = @json(route('admin.system.status.data'));

        const statusEl = document.getElementById('health-status');
        const updatedEl = document.getElementById('health-updated');

        const setChip = (el, ok, okLabel = 'OK', badLabel = 'Degraded') => {
            el.textContent = ok ? okLabel : badLabel;
            el.className = ok
                ? 'text-sm font-semibold text-emerald-700'
                : 'text-sm font-semibold text-rose-700';
        };

        const setTopStatus = (status) => {
            if (status === 'ok') {
                statusEl.textContent = 'Operational';
                statusEl.className = 'inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-emerald-50 text-emerald-700 border border-emerald-100';
                return;
            }

            statusEl.textContent = 'Degraded';
            statusEl.className = 'inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-amber-50 text-amber-800 border border-amber-100';
        };

        const safe = (v) => (v === null || v === undefined || v === '') ? '—' : v;

        const refresh = async () => {
            try {
                const res = await fetch(url, {
                    headers: {
                        'Accept': 'application/json'
                    }
                });

                if (!res.ok) throw new Error('Request failed');
                const data = await res.json();

                setTopStatus(data.status);
                updatedEl.textContent = safe(data.generated_at);

                setChip(document.getElementById('check-database'), !!data.checks?.database);
                setChip(document.getElementById('check-cache'), !!data.checks?.cache);
                setChip(document.getElementById('check-storage'), !!data.checks?.storage);

                document.getElementById('meta-laravel').textContent = safe(data.meta?.laravel_version);
                document.getElementById('meta-php').textContent = safe(data.meta?.php_version);
                document.getElementById('meta-env').textContent = safe(data.meta?.app_env);
                document.getElementById('meta-debug').textContent = data.meta?.app_debug ? 'true' : 'false';

                document.getElementById('meta-memory').textContent = safe(data.meta?.memory_usage_mb) + ' MB';

                const free = data.meta?.disk_free_gb;
                const total = data.meta?.disk_total_gb;
                document.getElementById('meta-disk').textContent = (free !== null && total !== null)
                    ? `${free} GB / ${total} GB`
                    : '—';

                document.getElementById('meta-cache-driver').textContent = safe(data.meta?.cache_driver);
                document.getElementById('meta-queue').textContent = safe(data.meta?.queue_connection);
                document.getElementById('meta-mail').textContent = safe(data.meta?.mail_driver);
            } catch (e) {
                statusEl.textContent = 'Unavailable';
                statusEl.className = 'inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-rose-50 text-rose-700 border border-rose-100';
            }
        };

        refresh();
        setInterval(refresh, 10000);
    })();
</script>
@endsection
