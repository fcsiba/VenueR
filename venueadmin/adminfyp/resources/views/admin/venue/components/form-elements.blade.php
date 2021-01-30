<div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
    <label for="name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venue.columns.name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.name" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.venue.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('type'), 'has-success': fields.type && fields.type.valid }">
    <label for="type" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venue.columns.type') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" readonly v-model="form.type" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('type'), 'form-control-success': fields.type && fields.type.valid}" id="type" name="type" placeholder="{{ trans('admin.venue.columns.type') }}">
        <div v-if="errors.has('type')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('type') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('sub_type'), 'has-success': fields.sub_type && fields.sub_type.valid }">
    <label for="sub_type" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venue.columns.sub_type') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" readonly v-model="form.sub_type" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('sub_type'), 'form-control-success': fields.sub_type && fields.sub_type.valid}" id="sub_type" name="sub_type" placeholder="{{ trans('admin.venue.columns.sub_type') }}">
        <div v-if="errors.has('sub_type')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('sub_type') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('address'), 'has-success': fields.address && fields.address.valid }">
    <label for="address" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venue.columns.address') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.address" v-validate="''" id="address" name="address"></textarea>
        </div>
        <div v-if="errors.has('address')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('address') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('size'), 'has-success': fields.size && fields.size.valid }">
    <label for="size" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venue.columns.size') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.size" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('size'), 'form-control-success': fields.size && fields.size.valid}" id="size" name="size" placeholder="{{ trans('admin.venue.columns.size') }}">
        <div v-if="errors.has('size')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('size') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('accomodation'), 'has-success': fields.accomodation && fields.accomodation.valid }">
    <label for="accomodation" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venue.columns.accomodation') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.accomodation" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('accomodation'), 'form-control-success': fields.accomodation && fields.accomodation.valid}" id="accomodation" name="accomodation" placeholder="{{ trans('admin.venue.columns.accomodation') }}">
        <div v-if="errors.has('accomodation')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('accomodation') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('price'), 'has-success': fields.price && fields.price.valid }">
    <label for="price" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venue.columns.price') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.price" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('price'), 'form-control-success': fields.price && fields.price.valid}" id="price" name="price" placeholder="{{ trans('admin.venue.columns.price') }}">
        <div v-if="errors.has('price')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('price') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('availiblity'), 'has-success': fields.availiblity && fields.availiblity.valid }">
    <label for="availiblity" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venue.columns.availiblity') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.availiblity" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('availiblity'), 'form-control-success': fields.availiblity && fields.availiblity.valid}" id="availiblity" name="availiblity" placeholder="{{ trans('admin.venue.columns.availiblity') }}">
        <div v-if="errors.has('availiblity')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('availiblity') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('info'), 'has-success': fields.info && fields.info.valid }">
    <label for="info" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venue.columns.info') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.info" v-validate="''" id="info" name="info"></textarea>
        </div>
        <div v-if="errors.has('info')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('info') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('about'), 'has-success': fields.about && fields.about.valid }">
    <label for="about" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venue.columns.about') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.about" v-validate="''" id="about" name="about"></textarea>
        </div>
        <div v-if="errors.has('about')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('about') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('image'), 'has-success': fields.image && fields.image.valid }">
    <label for="image" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venue.columns.image') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" readonly v-model="form.image" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('image'), 'form-control-success': fields.image && fields.image.valid}" id="image" name="image" placeholder="{{ trans('admin.venue.columns.image') }}">
        <div v-if="errors.has('image')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('image') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('admin_id'), 'has-success': fields.admin_id && fields.admin_id.valid }">
    <label for="admin_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venue.columns.admin_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" readonly v-model="form.admin_id" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('admin_id'), 'form-control-success': fields.admin_id && fields.admin_id.valid}" id="admin_id" name="admin_id" placeholder="{{ trans('admin.venue.columns.admin_id') }}">
        <div v-if="errors.has('admin_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('admin_id') }}</div>
    </div>
</div>


