@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.venue.actions.create'))

@section('body')

    <div class="container-xl">

                <div class="card">
        
        

                {!! Form::open(['action' => 'Admin\VenuesController@store','method'=>'POST','files' => true, 'class'=>'form-horizontal form-create']) !!}
                
                <div class="card-header">
                    <i class="fa fa-plus"></i> {{ trans('admin.venue.actions.create') }}
                </div>

                <div class="card-body">

                    <div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
                        <label for="name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venue.columns.name') }}</label>
                            <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                                {{ Form::text('name', '', ['class'=>'form-control']) }}
                            </div>
                    </div>
                    
                    <div class="form-group row align-items-center" :class="{'has-danger': errors.has('type'), 'has-success': fields.type && fields.type.valid }">
                        <label for="type" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venue.columns.type') }}</label>
                            <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                                {{Form::select('type',$type,null,['class'=>'form-control','id' => 'type'])}}
                        </div>
                    </div>
                    
                    <div class="form-group row align-items-center" :class="{'has-danger': errors.has('sub_type'), 'has-success': fields.sub_type && fields.sub_type.valid }">
                        <label for="sub_type" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venue.columns.sub_type') }}</label>
                            <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                                {{Form::select('sub_type',$subtype,null,['class'=>'form-control','id' => 'subtype'])}}
                            </div>
                    </div>
                    
                    <div class="form-group row align-items-center" :class="{'has-danger': errors.has('address'), 'has-success': fields.address && fields.address.valid }">
                        <label for="address" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venue.columns.address') }}</label>
                        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                            {{ Form::textarea('address', '', ['class'=>'form-control', 'rows' => 2]) }}
                        </div>
                    </div>
                    
                    <div class="form-group row align-items-center" :class="{'has-danger': errors.has('size'), 'has-success': fields.size && fields.size.valid }">
                        <label for="size" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venue.columns.size') }}</label>
                            <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                                {{ Form::number('size', '', ['class'=>'form-control']) }}
                        </div>
                    </div>
                    
                    <div class="form-group row align-items-center" :class="{'has-danger': errors.has('accomodation'), 'has-success': fields.accomodation && fields.accomodation.valid }">
                        <label for="accomodation" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venue.columns.accomodation') }}</label>
                            <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                                {{ Form::number('accomodation', '', ['class'=>'form-control']) }}
                        </div>
                    </div>
                    
                    <div class="form-group row align-items-center" :class="{'has-danger': errors.has('price'), 'has-success': fields.price && fields.price.valid }">
                        <label for="price" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venue.columns.price') }}</label>
                            <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                                {{ Form::number('price', '', ['class'=>'form-control']) }}
                        </div>
                    </div>
                    
                    <div class="form-group row align-items-center" :class="{'has-danger': errors.has('availiblity'), 'has-success': fields.availiblity && fields.availiblity.valid }">
                        <label for="availiblity" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venue.columns.availiblity') }}</label>
                            <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                                {{ Form::text('availiblity', '', ['class'=>'form-control']) }}
                        </div>
                    </div>
                    
                    <div class="form-group row align-items-center" :class="{'has-danger': errors.has('info'), 'has-success': fields.info && fields.info.valid }">
                        <label for="info" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venue.columns.info') }}</label>
                        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                            {{ Form::textarea('info', '', ['class'=>'form-control', 'rows' => 3]) }}
                        </div>
                    </div>
                    
                    <div class="form-group row align-items-center" :class="{'has-danger': errors.has('about'), 'has-success': fields.about && fields.about.valid }">
                        <label for="about" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venue.columns.about') }}</label>
                        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                            {{ Form::textarea('about', '', ['class'=>'form-control', 'rows' => 3]) }}
                        </div>
                    </div>
                    
                    <div class="form-group row align-items-center" :class="{'has-danger': errors.has('image'), 'has-success': fields.image && fields.image.valid }">
                        <label for="image" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venue.columns.image') }}</label>
                            <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                                <div class="vue-dropzone dropzone dz-clickable div_img">
                                    {!! Form::file('image', ['class'=>' form-control hide_file']) !!}
                                    <div class="dz-default dz-message"><span ><i class="fa fa-cloud-upload"></i><br><span id="drop_files">Drop files here to upload</span></span></div>
                                </div>
                        </div>
                    </div>
                    
                    <div class="form-group row align-items-center" :class="{'has-danger': errors.has('admin_id'), 'has-success': fields.admin_id && fields.admin_id.valid }">
                        <label for="admin_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.venue.columns.admin_id') }}</label>
                            <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                                {{ Form::text('admin_id', Auth::user()->id, ['class'=>'form-control', 'readonly']) }}
                            </div>
                    </div>
                    
                    
                    
                </div>
                                
                <div class="card-footer">
                   {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                </div>
            {!! Form::close() !!}
           

       

        </div>

        </div>

    
@endsection

@section('bottom-scripts')
<script>
    $(document).ready(function(){
        $("input:file").change(function (){
            var fileName = $(this).val();
            if(fileName!="")
            {
                $('#drop_files').html("Image uploaded");
            }
        });
    });
</script>
@endsection