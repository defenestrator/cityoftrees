import Shop from "./components/Shop.svelte";

require("./bootstrap.js")

const shop = new Shop({
    target: document.getElementById('shop')
});

window.shop = shop

