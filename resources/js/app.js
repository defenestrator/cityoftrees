import App from "./components/App.svelte";


const app = new App({
    props: {

    },
    target: document.getElementById('app')
});

window.app = app;

export default app;
