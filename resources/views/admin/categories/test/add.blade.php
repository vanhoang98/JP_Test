<div class="modal fade" id="addCategoryTest" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="card-title">{{ trans('home.add_categories_test') }}</h3>
                <button type="button" class="close white" data-dismiss="modal">&times;</button>
            </div>

            <form method="POST" action="{{ route('categories.store') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>{{ trans('home.name') }}</label>
                        <code><strong>{{ trans('home.necessary') }}</strong></code>
                        <input 
                            type="text" 
                            class="form-control {{ $errors->has('name') ? 'error' : '' }}" 
                            name="name" 
                            placeholder="{{ trans('home.input_name_of_category') }}"
                            required>
                        @if ($errors->has('name'))
                            <span class="error">
                                {{ $errors->first('name') }}
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>{{ trans('home.description') }}</label>
                        <textarea 
                            class="form-control" 
                            rows="3" 
                            name="description"                                        
                            placeholder="{{ trans('home.write_about_sth') }}"></textarea>
                    </div>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('home.close') }}</button>
                    <button type="submit" class="btn btn-primary">{{ trans('home.add_category') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>