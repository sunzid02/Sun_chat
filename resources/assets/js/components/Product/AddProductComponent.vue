<template>
    <div class="row">
        <div class="col-md-12 mt-5">

            <form action="product/add-product" @submit.prevent="addProduct()" id="productForm">
                <input type="text" name="productName" id="productName" v-model="productName" class="form-control" placeholder="product name" autofocus>
                <br>
                <input type="submit" class="btn btn-success" value="Add">
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        // props: ['chats'],

        mounted() {
            console.log('Product Component mounted.')
        },

        data() {
            return {
                productName: '',

            }
        },
        methods: {
            addProduct(){
                axios.post('/product/add-product',
                {
                    productName: this.productName                
                })
                .then( ( response ) => {

                    if (response.data.status == 200) 
                    {
                        alert(response.data.message);
                        this.productName = '';
                        // document.getElementById('productForm').resetForm(); //clear form automatically after successful request

                        
                    } 
                    else 
                    {
                        alert("try again later");

                    }
                    
                });                     
                
            }
        },
    }
</script>
