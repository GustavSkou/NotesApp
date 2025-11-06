<x-html_body>

    <main class="p-6 max-w-3xl mx-auto">
        <h1 class="text-2xl font-semibold mb-4">Batch Status</h1>

        <pre id="jsonOutput" class="bg-gray-50 border rounded p-4 text-sm overflow-auto min-h-[8rem]">
            Loading…
        </pre>

        <div class="mt-4 flex gap-2">
            <button id="refreshBtn" class="btn">Refresh</button>
            <button id="pollToggleBtn" class="btn">Start Poll</button>
        </div>
    </main>

    <script>
        const url = '/status/batch';
        const output = document.getElementById('jsonOutput');
        const refreshBtn = document.getElementById('refreshBtn');
        const pollBtn = document.getElementById('pollToggleBtn');

        async function loadStatus() {
            try {
                const res = await fetch(url);
                if (!res.ok) throw new Error('HTTP ' + res.status);
                const data = await res.json();
                output.textContent = JSON.stringify(data, null, 2);
            } catch (err) {
                output.textContent = 'Error: ' + err.message;
            }
        }

        refreshBtn.addEventListener('click', loadStatus);

        let polling = false;
        let pollInterval = null;
        pollBtn.addEventListener('click', () => {
            polling = !polling;
            pollBtn.textContent = polling ? 'Stop Poll' : 'Start Poll';
            if (polling) {
                loadStatus();
                pollInterval = setInterval(loadStatus, 5000);
            } else {
                clearInterval(pollInterval);
            }
        });

        // initial load
        loadStatus();
    </script>
</x-html_body>