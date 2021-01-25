import AppForm from '../app-components/Form/AppForm';

Vue.component('contactvenue-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                category:  '' ,
                venue_name:  '' ,
                name:  '' ,
                email:  '' ,
                phone:  '' ,
                admin_id:  '' ,
                
            }
        }
    }

});