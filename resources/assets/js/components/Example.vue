<template>
    <div class="container margintop50">
        <div id="particles-js"></div>
        <div class="row" id="intro">
            <div class="col-md-12 col-md-offset-0">
                <h2>{{ data.title }}</h2>
                <p>{{ data.description }}</p>
            </div>
        </div>
        <div class="row margintop20">
            <div class="col-md-3">
                <div class="card">

                    <!--Card image-->
                    <div class="">
                        <a href="#">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%287%29.jpg"
                                 class="img-responsive" alt="">
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Card title</h4>
                        <!--Text-->
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Button</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
    #particles-js {
        background-color: #232323;
        height: 300px;
    }

    #intro {
        position: absolute;
        top: 10%;
        left: 25%;
        right: 20%;
        width: 40%;
        color: #e4e4e4;
    }
</style>
<script>
    //import axios from 'axios';
    export default {

        data() {
            return {
                data: []
            };
        },
        created() {
            particlesJS.load('particles-js', '/js/particles.json', function () {
                console.log('callback - particles.js config loaded');
            });
            axios.defaults.headers.common['Authorization'] = 'Bearer ' + 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjI1YmRlZjUwZDdhZjVkYTk2NjYyZDQ5NjNmZGM3ZjJmOGM1YmJhY2Q1ZTAzZDMyNDlkYTFmODI4ZWRhNzc4MjZlYzkyYjk3NzkxZGQ0NDNmIn0.eyJhdWQiOiIzIiwianRpIjoiMjViZGVmNTBkN2FmNWRhOTY2NjJkNDk2M2ZkYzdmMmY4YzViYmFjZDVlMDNkMzI0OWRhMWY4MjhlZGE3NzgyNmVjOTJiOTc3OTFkZDQ0M2YiLCJpYXQiOjE1MDM2NjYzODQsIm5iZiI6MTUwMzY2NjM4NCwiZXhwIjoxNTM1MjAyMzg0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.dX11o9FAPscTeevdz1ZYH_QEb4FwscUuuT3Ipu2KoX4G3Xsxx-UOKIvX6bl0t_UjXaV4hUPDoSfHbihC1ff7FsfhRneg6Ur2WgTcSL_dI3NNDKEIgWsadid2DWJTYkyIKRjOvpFBehzNE44RITfAf1n81ckpF5tPB0wCX1GxFcxI39mwlL9BY-tN_0kjM_H7I6kinG3BjDGf2ZF8JEjRVepfcxW_mz9btjJhsngglokgsa8IJuXW9-nskTY6uUtTxcvFnhnDMeREMaEaJxybJWtisCYeeBIha93H8O6V46PECaR-zXbo4VB8GufbIB31VsC-iNR7HOswGpq8lLRSC3hAw7u9Kf5Sjvu323mHpO90xU8tVYLUREkkYVEfH0JI4A37aA-8NTepHZr8b_G2GJHzN-5X_NFm5krU3AUBDMOBBxdNzZ75UCuTLZJtPSjX3yFTiC2Ni2rskA2lXyF0D9uzoJ08l03nIB4gv1zX0DJIxNxVamvDwRsXY9wrW0rS_w6Dw1YZekA1YVBBGlnZQvhMK18zxvXzDP1SZGH7qzPL34rJHuCDCwSgIVSSq9J-oy3FDI5qhmGg6fkg5YtUcxUmG-T_pMbWAdsRmsgpnRUzJWUuA180kYhuZdEy8NpYOnZsQVU18tSev6rmXwmMZLZ4ngY1giVEiXlzLgGY0KQ';

            axios.get('/api/intro', {}).then(response => {
                this.data = response.data;
            });
            console.log('Component example created.')
        }

    }
</script>
