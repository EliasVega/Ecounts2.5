@if (Auth::user()->role_id != 4)

    <a href="{{ route('showOrder', $id) }}"
        class="btn btn-lila" data-toggle="tooltip" data-placement="top" title="Pedidos"><i class="far fa-file-alt"></i>
    </a>
    <a href="{{ route('showInvoice', $id) }}"
        class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Ventas"><i class="fas fa-file-export"></i>
        </a>
    </a>
    <a href="{{ route('showSaleBox', $id) }}"
    class="btn btn-verde" data-toggle="tooltip" data-placement="top" title="Caja"><i class="fas fa-cash-register"></i>
    </a>
@endif
@if (Auth::user()->role_id != 5 )
    <a href="{{ route('showPurchase', $id) }}"
        class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Compras"><i class="fas fa-cart-plus"></i>
        </a>
    </a>
    <a href="{{ route('showProduct', $id) }}"
        class="btn btn-limon" data-toggle="tooltip" data-placement="top" title="Productos"><i class="fas fa-box-open"></i>
        </a>
    </a>
    @if (Auth::user()->transfer == 1)
        <a href="{{ route('showProductBranch', $id) }}"
        class="btn btn-ver" data-toggle="tooltip" data-placement="top" title="Traslados"><i class="fas fa-dumpster"></i>
        </a>
    @endif

@endif






