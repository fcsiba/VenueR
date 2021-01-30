@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.venue.actions.edit', ['name' => $venue->name]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <venue-form
                :action="'{{ $venue->resource_url }}'"
                :data="{{ $venue->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.venue.actions.edit', ['name' => $venue->name]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.venue.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </venue-form>

        </div>
    
</div>

@endsection