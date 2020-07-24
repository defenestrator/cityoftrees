<script>
import Products from "./Products.svelte";
import ProductDetail from "./ProductDetail.svelte";
import { onMount } from "svelte";

</script>
<svelte:head>
	<link href="css/style.css" rel="stylesheet">
</svelte:head>
<main>
	<div class="flex-container content-start p-4 m-4">
        <div class="rounded shadow content-center p-3 m-2">
            <div class="text-center m-3 p-2">
                    <div class="container text-center">
                        {#each products as product} {product.name}<br> {/each}
                    </div>
                <Products />
            </div>
        </div>
	</div>
</main>
