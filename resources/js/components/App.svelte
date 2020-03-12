<script>
	import { onMount } from "svelte";

onMount(() => {
	  console.log("the component has mounted");
});
</script>
<svelte:head>
	<link href="css/style.css" rel="stylesheet">
</svelte:head>
<main>
	<div class="flex-container content-start p-4 m-4">
        <div class="rounded shadow content-center p-3 m-2">
            <div class="text-center m-3 p-2">
                I'm an example svelte component.
            </div>
        </div>
	</div>
</main>
