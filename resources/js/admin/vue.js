window.Vue = require('vue');




//Vue.component('menu-generator', require('.././components/admin/menu/menu_generator.vue').default);
Vue.component('menu-editor', require('.././components/admin/menu/MenuEditor.vue').default);
//Vue.component('menu', require('.././components/admin/menu/Menu.vue').default);
//Vue.component('MenuItems', require('.././components/admin/menu/menu_items.vue').default);




const app = new Vue({
    el: '#app',
});



