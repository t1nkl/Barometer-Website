
/**
* First we will load all of this project's JavaScript dependencies which
* includes Vue and other libraries. It is a great starting point when
* building robust, powerful web applications using Vue and Laravel.
*/

require('./bootstrap');

/**
* Next, we will create a fresh Vue application instance and attach it to
* the page. Then, you may begin adding components to this application
* or customize the JavaScript scaffolding to fit your unique needs.
*/

window.Vue = require('vue');

window.moment = require('moment');

window.mixin = {
	methods: {
	  locale(string)
		{
			if(typeof string === 'undefined')
			{
				return '';
			}
			return string[document.documentElement.lang] ? string[document.documentElement.lang] : string['ru']; //TODO
		},
	}
}

Vue.component('speaker-info', require('./components/SpeakerInfo.vue'));
Vue.component('speakers', require('./components/Speakers.vue'));

Vue.component('bar-info', require('./components/BarInfo.vue'));
Vue.component('bars', require('./components/Bars.vue'));

Vue.component('partner-info', require('./components/PartnerInfo.vue'));
Vue.component('partners', require('./components/Partners.vue'));

const app = new Vue({
	el: '#fullpage',
	data () {
		return {
		};
	},
	methods: {
		
	}
});
