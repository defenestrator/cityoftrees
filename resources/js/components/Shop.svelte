<script>
    import {
        onMount
    } from "svelte";
    import ProductDetail from "./ProductDetail.svelte";
    let products = null
    onMount(() => fetch('/products').then(response => response.json())
        .then(data => products = data.data)
        .then(data => console.log(products)))

</script>
<svelte:head>
    <link href="css/style.css" rel="stylesheet">
</svelte:head>
<main class="pb-4">
    <div class="content-center pb-6">
        {#if products != null && products.length >= 1}
        <div class="flex content-start w-100 flex-wrap">
        {#each products as product}
            <div class="flex-1 rounded shadow content-center bg-white m-3 py-3 px-2" style="max-width:auto; min-width:150px;">
                <div class="m-1"> {product.name}</div>
                <hr class="p-1">
                <div class="m-1"> ${product.price}</div>
                {#if product.images.length >= 1}

                <div class="m-0 p-0">
                    <img class="rounded w-100" src="{product.images[0].square}"alt="Image of {product.name}" title="Image of {product.name}" />
                </div>
                {/if}
                <div class="m-0 p-0 my-6 w-auto">
                    <button class="btn btn-blue w-auto">BUY NOW</button>
                </div>
            </div>
        {/each}
        </div>
    {/if}
	</div>
</main>
