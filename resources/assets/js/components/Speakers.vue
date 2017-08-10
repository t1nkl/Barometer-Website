<template>
	<div class="col-md-12 row">
		<a @click="loadLeft()" :class="['load-more-left', 'col-md-half',{nonya: !visibleLeft}]"><p class="load-more-blog-prev"></p></a>
		<transition name="fade" mode="out-in">
			<div class="col-md-12 speakers-block-info row" v-if="show">
				<speaker-info v-for="speaker in speakers" :speaker="speaker"></speaker-info>
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
		components: ['speaker-info'],
		name: 'Speakers',

		data () {
			return {
				speakers:[],
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
					axios.get('/speakers', {params:{
						page: --this.page,
					}})
					.then(response => {
						this.speakers = response.data;
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

				axios.get('/speakers', {params:
					{
						page: ++this.page
					}
				})
				.then(response => {
					this.speakers = response.data;
					this.visibleLeft = true;
					if(response.data.length <= 10)
					{
						this.visibleRight = false;
					}
				});
				setTimeout(()=> {this.show = true},500);
			},
			loadBottom(){
				axios.get('/speakers', {params:
					{
						page: ++this.page
					}
				})
				.then(response => {
					this.speakers = this.speakers.concat(response.data);
					this.visibleLeft = true;
					if(response.data.length < 6)
					{
						this.visibleRight = false;
					}
				});
			}
		},
		created(){
			axios.get('/speakers', {
				params:
				{
					page: this.page,
				}
			})
			.then(response => this.speakers = response.data);
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