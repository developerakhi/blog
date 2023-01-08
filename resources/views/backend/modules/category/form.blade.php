                           
                                {!!Form::text('name', null, ['id'=>'name','class'=>'form-control', 'placeholder'=>'Enter Category name']) !!}
                                {!!Form::label('slug', 'Slug', ['class'=>'mt-2']) !!}
                                {!!Form::text('slug', null, ['id'=>'slug','class'=>'form-control', 'placeholder'=>'Enter Category slug']) !!}
                                {!!Form::label('order_by', 'Category Serial', ['class'=>'mt-2']) !!}
                                {!!Form::number('order_by', null, ['class'=>'form-control', 'placeholder'=>'Enter Category serial']) !!}
                                {!!Form::label('status', 'Category Status', ['class'=>'mt-2']) !!}<br>
                                {!!Form::select('status', [1=>'Active', 0=>'Inactive'], null, ['class'=>'form-control form-select', 'placeholder'=>'Select Category status']) !!}