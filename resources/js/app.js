import App from "./components/App.svelte";
require("./bootstrap.js")

const app = new App({
    props: {

    },
    target: document.getElementById('dashboard')
});

window.app = app;

export default app;
