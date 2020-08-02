<script>
export let product = productData
</script>

<main>
<div class="flex flex-wrap content-start p-4 m-4">
    <div class="flex-1 px-6">
        {#if product.images.length >= 1}
        {#each product.images as image, index}
            <img src="/{image.medium}" alt="{product.name}" style="width:100%; min-width:240px; max-width:640px;" class="pb-4 rounded">
        {/each}
        {/if}
    </div>
    <div class="flex-1 p-6 bg-white border-2 rounded-lg shadow" style="min-width:240px; max-width:640px;">
        <h1 class="text-2xl">{product.name}</h1>
        <p class="py-4">{product.description}</p>
        <p class="text-2xl">${product.price}</p>
        <div class="py-4 text-2xl">
            <button class="btn btn-green" style="background-color:#6ac318;">BUY NOW</button>
        </div>
        <p class="py-2">In Stock: {product.stock}</p>
        <p class="py-2">Contents: {product.contents}</p>
        <p class="py-2">Weight: {product.weight} grams</p>
        <p class="py-2">Height: {product.height} mm</p>
        <p class="py-2">Width: {product.width} mm</p>
        <p class="py-2">Depth: {product.depth} mm</p>
        <p class="py-2">Volume: {product.volume} ml</p>
        {#if product.manufacturer }
            <p class="py-2">Manufacturer: {product.manufacturer.name}</p>
        {/if}
        </div>
    </div>
</main>

<style>

</style>
