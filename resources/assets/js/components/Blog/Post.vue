<template>
    <div class="container">
        <div class="row">
            <div class="col-md-11 col-md-offset-0">

                <h2> {{ post.title }} {{myslug}} </h2>

                <small> {{ post.created_at }}</small>
                <p> {{ post.content }} </p>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                post:'',
                myslug:''
            };
        },
        methods: {

        },
        mounted() {
            this.myslug = this.$route.params.slug;
            console.log(this.myslug);
        }

    }
</script>