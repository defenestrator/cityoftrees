<script>
import {onMount} from "svelte";
import { fly } from 'svelte/transition'

let products = false
let visible = false

onMount(() => fetch('/products')
    .then(response => response.json())
    .then(data => products = data.data)
    .then(() => (products.length > 0) ? visible = true : products = false))

function addToCart(uuid) {
    alert('add to cart stub! Uuid: ' + uuid)
}

function buyNow(uuid) {
    alert('BUY NOW stub! Uuid: ' + uuid)
}

</script>

<svelte:head>
    <link href="css/style.css" rel="stylesheet">
</svelte:head>

<main class="pb-4">
{#if visible}
    <div class="content-center pb-6" in:fly="{{ y:400, duration: 500 }}">
        <div class="flex flex-wrap flex-row-reverse content-start w-100">
        {#each products as product}
            <div class="flex-1 rounded border shadow content-center bg-white m-3 py-3 px-2" style="min-width:200px;">
                <div class="m-1 font-serif font-bold text-2xl" style="letter-spacing:0.1rem;">
                    <a href="/products/{product.uuid}">
                        {product.name}
                    </a>
                </div>
                <hr class="p-1">
                <div class="m-1"> ${product.price}</div>
                {#if product.images.length >= 1}
                <div class="m-0 p-0 w-auto">
                     <a href="/products/{product.uuid}">
                        <img class="rounded w-auto" style="margin: 0 auto; max-width:300px; width:100%;" src="{product.images[0].square}"alt="Image of {product.name}" title="Image of {product.name}" />
                    </a>
                </div>
                {/if}
                <div class="m-0 p-0 my-6 w-auto">
                    <button on:click="{buyNow(product.uuid)}" class="btn btn-green" style="background-color:#6ac318;">BUY NOW</button>
                </div>
                <div class="m-2 p-1 my-6 w-auto overflow-x-scroll" style="height:3.3rem; overflow:hidden">
                    <p style="text-overflow: ellipsis;"><a href="/products/{product.uuid}">{product.description}</a></p>
                </div>
                <div class="m-0 p-0 my-6 w-auto">
                    <button on:click="{window.location.href = '/products/' + product.uuid}" class="btn btn-green text-white" style="background-color:#f6ad55;">LEARN MORE</button>
                </div>
            </div>
        {/each}
        </div>
	</div>
{/if}
</main>
