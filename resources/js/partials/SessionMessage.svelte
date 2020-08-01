<div>
{#each messages as message}
    {#if message.type === 'error'}
    <div class="bg-red-200 text-red-900 rounded-lg shadow-md p-6 pr-10">
        <button
            class="opacity-75 cursor-pointer absolute top-0 right-0 py-2 px-3 hover:opacity-100"
            style="min-width: 240px"
        >
            ×
        </button>
        <div class="flex items-center">
            { message.text }
        </div>
    </div>
    {/if}
    {#if message.type === 'success'}
    <div class="bg-green-200 text-green-900 rounded-lg shadow-md p-6 pr-10">
        <button
            class="opacity-75 cursor-pointer absolute top-0 right-0 py-2 px-3 hover:opacity-100"
            style="min-width: 240px"
        >
            ×
        </button>
        <div class="flex items-center">
            { message.text }
        </div>
    </div>
    {/if}
    {#if message.type === 'warning'}
    <div class="bg-yellow-200 text-yellow-900 rounded-lg shadow-md p-6 pr-10">
        <button
            class="opacity-75 cursor-pointer absolute top-0 right-0 py-2 px-3 hover:opacity-100"
            style="min-width: 240px"
        >
            ×
        </button>
        <div class="flex items-center">
            { message.text }
        </div>
    </div>
    {/if}
    {#if message.type != 'success' && message.type != 'warning' && message.type != 'error'}
    <div class="bg-gray-200 text-gray-900 rounded-lg shadow-md p-6 pr-10">
        <button
            class="opacity-75 cursor-pointer absolute top-0 right-0 py-2 px-3 hover:opacity-100"
            style="min-width: 240px"
        >
            ×
        </button>
        <div class="flex items-center">
            { message.text }
        </div>
    </div>
    {/if}
{/each}
</div>
<script>
export let messages = null;

</script>
