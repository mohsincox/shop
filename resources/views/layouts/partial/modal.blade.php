<div class="modal fade" id="donateModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="donateModalLabel">পণ্য কিনুন/ক্রয় করুন </h4>
            </div>
            <div class="modal-body">


                <div class="modal-footer">

                    <div>
                        <span id="hamba"></span>
                        <hr>
                    </div>
                    <h3 class="title-style-1 text-center">পণ্য কিনুন/ক্রয় করুন  <span class="title-under"></span>  </h3>

                    <div class="form-horizontal" >

                        <form action="store-customer" class="ajax-for" method="post">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <div class="form-group" {{ $errors->has('customer_name') ? 'has error' : '' }}>
                                {!! Form::label('customer_name', 'কাস্টমারের নাম:', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('customer_name', null,['class' => 'form-control', 'placeholder' => 'কাস্টমারের নাম', 'autocomplete' => 'off']) !!}
                                    <span class="help-block text-danger">
                                            {{ $errors->first('customer_name') }}
                                        </span>
                                </div>
                            </div>

                            <div class="form-group" {{ $errors->has('product_name') ? 'has error' : '' }}>
                                {!! Form::label('product_name', 'পণ্যের নাম:', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('product_name', null,['class' => 'form-control', 'placeholder' => 'পণ্যের নাম', 'autocomplete' => 'off']) !!}
                                    <span class="help-block text-danger">
                                            {{ $errors->first('product_name') }}
                                        </span>
                                </div>
                            </div>

                            <div class="form-group" {{ $errors->has('quantity') ? 'has error' : '' }}>
                                {!! Form::label('quantity', 'পরিমান:', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('quantity', null,['class' => 'form-control', 'placeholder' => 'পরিমান', 'autocomplete' => 'off']) !!}
                                    <span class="help-block text-danger">
                                            {{ $errors->first('quantity') }}
                                        </span>
                                </div>
                            </div>

                            <div class="form-group" {{ $errors->has('mobile') ? 'has error' : '' }}>
                                {!! Form::label('mobile', 'মোবাইল নম্বর:', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('mobile', null,['class' => 'form-control', 'placeholder' => 'মোবাইল নম্বর', 'autocomplete' => 'off', 'required']) !!}
                                    <span class="help-block text-danger">
                                            {{ $errors->first('mobile') }}
                                        </span>
                                </div>
                            </div>

                            <div class="form-group" {{ $errors->has('pay_info') ? 'has error' : '' }}>
                                {!! Form::label('pay_info', 'মূল্য পরিশোধের তথ্য:', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('pay_info', null,['class' => 'form-control', 'placeholder' => 'বিকাশ নাম্বার বা ব্যাংক একাউন্ট নাম্বার বা অন্নান্য', 'autocomplete' => 'off', 'required']) !!}
                                    <span class="help-block text-danger">
                                            {{ $errors->first('pay_info') }}
                                        </span>
                                </div>
                            </div>

                            <div class="form-group" {{ $errors->has('order_date') ? 'has error' : '' }}>
                                {!! Form::label('order_date', 'অর্ডারের তারিখ:', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('order_date', null,['class' => 'form-control', 'placeholder' => 'অর্ডারের তারিখ', 'autocomplete' => 'off']) !!}
                                    <span class="help-block text-danger">
                                            {{ $errors->first('order_date') }}
                                        </span>
                                </div>
                            </div>

                            <div class="form-group" {{ $errors->has('delivery_date') ? 'has error' : '' }}>
                                {!! Form::label('delivery_date', 'ডেলিভারির  তারিখ :', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('delivery_date', null,['class' => 'form-control', 'placeholder' => 'ডেলিভারির  তারিখ ', 'autocomplete' => 'off']) !!}
                                    <span class="help-block text-danger">
                                            {{ $errors->first('delivery_date') }}
                                        </span>
                                </div>
                            </div>

                            <div class="form-group" {{ $errors->has('address') ? 'has error' : '' }}>
                                {!! Form::label('address', 'ঠিকানা:', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-9">
                                    {!! Form::textarea('address', null,['class' => 'form-control', 'placeholder' => 'ঠিকানা', 'autocomplete' => 'off', 'rows' => 3]) !!}
                                    <span class="help-block text-danger">
                                            {{ $errors->first('address') }}
                                        </span>
                                </div>
                            </div>

                            <div class="row">

                                <div class="form-group col-md-12">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal" style="background-color: red">CLOSE</button>
                                    <button type="submit" class="btn btn-primary pull-right" >SUBMIT</button>
                                </div>

                            </div>

                        </form>

                    </div>

                </div>




            </div>
        </div>
    </div>

</div>