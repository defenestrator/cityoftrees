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
            <div class="flex-1 rounded border shadow content-center bg-white m-3 py-3 px-2" style="min-width:240px;">
                <div class="py-2 font-serif font-bold text-xl" style="letter-spacing:0.11rem; font-size:1.375rem; border-bottom:2px solid rgba(188, 188, 188, 0.5);">
                    <a href="/products/{product.uuid}">
                        {product.name}
                    </a>
                </div>
                {#if product.images.length >= 1}
                <div class="m-0 p-0 w-auto pb-2">
                     <a href="/products/{product.uuid}">
                        <img
                            class="rounded mx-auto"
                            style="max-width:300px; width:100%;"
                            src="{product.images[0].square}"alt="Image of {product.name}"
                            title="Image of {product.name}"
                        />
                    </a>
                </div>
                {/if}
                <div class="py-2" style="letter-spacing:0.11rem; font-size:1.375rem;"> ${product.price}</div>
                <div class="py-2 w-auto">
                    <button on:click="{buyNow(product.uuid)}" class="btn btn-green" style="letter-spacing:0.11rem;">
                        &nbsp; BUY NOW &nbsp;
                    </button>
                </div>
                <div class="py-4 w-auto shop-description">
                    <a href="/products/{product.uuid}">{product.description}</a>
                </div>
                <div class="py-4 w-auto">
                    <a href="/products/{product.uuid}">
                        <button class="btn btn-orange">LEARN MORE</button>
                    </a>
                </div>

            </div>
        {/each}
        </div>
	</div>
{/if}
</main>
