<div class="modal fade" id="customer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-primary modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Agregar cliente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">
                {!!Form::open(array('url'=>'customer', 'method'=>'Post', 'autocomplete'=>'off'))!!}
                {!!Form::token()!!}
                @include('admin/invoice.formcustomer')
                {!!Form::close()!!}
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
