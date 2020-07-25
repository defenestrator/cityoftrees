<script>

data = fetch('/products')
export const products = {
    props: {
        products: data.data
    }
}
</script>
