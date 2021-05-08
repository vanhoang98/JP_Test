<div class="modal fade" id="editCategory" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="card-title">{{ trans('home.edit_categories_test') }}</h3>
                <button type="button" class="close white" data-dismiss="modal">&times;</button>
            </div>

            <form method="POST" action="{{ route('categories.update', 'type') }}">
                @csrf
                @method('PATCH')
                <div class="modal-body">
                    <input type="hidden" name="id" class="id" value="">
                    <div class="card-body"> 
                        <div class="form-group">
                            <label>{{ trans('home.name') }}</label>
                            <code><strong>{{ trans('home.necessary') }}</strong></code>
                            <input type="text" class="form-control name" name="name" required
                                placeholder="{{ trans('home.input_name_of_category') }}">
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
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('home.close') }}</button>
                    <button type="submit" class="btn btn-primary">{{ trans('home.edit') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>