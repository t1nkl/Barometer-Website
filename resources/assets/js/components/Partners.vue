<template>
    <div class="col-md-12 row">
        <a @click="loadLeft()" :class="['load-more-left', 'col-md-half',{nonya: !visibleLeft}]"><p class="load-more-blog-prev"></p></a>
        <transition name="fade" mode="out-in">
            <div class="col-md-12 row" v-if="show">
                <partner-info v-for="partner in partners" :partner="partner"></partner-info>
            </div>
        </transition>
        <a v-if="visibleRight" @click="loadRight()" class="load-more-right col-md-half"><p class="load-more-blog-next"></p></a>
        <div class="load-more-section">
            <a v-if="visibleRight" @click="loadBottom()" class="load-more-button">Еще</a>
        </div>
    </div>
</template>

<script>
    export default {
        components: ['partner-info'],
        name: 'Partners',

        data () {
            return {
                partners:[],
                page: 1,
                visibleLeft: false,
                visibleRight: true,
                show: true
            };
        },
        methods:{
            loadLeft(){
                this.show = false;

                if(this.page-1 > 0)
                {
                    axios.get('/partners', {params:{
                        page: --this.page,
                    }})
                        .then(response => {
                            this.partners = response.data;
                            this.visibleRight = true;
                            if(this.page <= 1)
                            {
                                this.visibleLeft = false;
                            }
                        });
                }
                setTimeout(()=> {this.show = true},500);
            },
            loadRight(){
                this.show = false;

                axios.get('/partners', {params:
                    {
                        page: ++this.page
                    }
                })
                    .then(response => {
                        this.partners = response.data;
                        this.visibleLeft = true;
                        if(response.data.length < 10)
                        {
                            this.visibleRight = false;
                        }
                    });
                setTimeout(()=> {this.show = true},500);
            },
            loadBottom(){
                axios.get('/partners', {params:
                    {
                        page: ++this.page
                    }
                })
                .then(response => {
                    this.partners = this.partners.concat(response.data);
                    this.visibleLeft = true;
                    if(response.data.length < 12)
                    {
                        this.visibleRight = false;
                    }
                });
            }
        },
        created(){
            axios.get('/partners', {
                params:
                    {
                        page: this.page,
                    }
            })
                .then(response => this.partners = response.data);
        }
    };
</script>

<style lang="css" scoped>
    .nonya{
        visibility: hidden;
    }
    .fade-enter-active,
    .fade-leave-active {
        transition: opacity 0.5s
    }
    .fade-enter,
    .fade-leave-to {
        opacity: 0
    }
</style>