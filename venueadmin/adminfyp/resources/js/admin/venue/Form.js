import AppForm from '../app-components/Form/AppForm';

Vue.component('venue-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                type:  '' ,
                sub_type:  '' ,
                address:  '' ,
                size:  '' ,
                accomodation:  '' ,
                price:  '' ,
                availiblity:  '' ,
                info:  '' ,
                about:  '' ,
                image:  '' ,
                admin_id:  '' ,
                
            }
        }
    }

});