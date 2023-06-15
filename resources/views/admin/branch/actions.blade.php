@if (Auth::user()->role_id != 4)

    <a href="{{ route('show_order', $id) }}"
        class="btn btn-lila" data-toggle="tooltip" data-placement="top" title="Pedidos"><i class="far fa-file-alt"></i>
    </a>
    <a href="{{ route('show_invoice', $id) }}"
        class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Ventas"><i class="fas fa-file-export"></i>
    </a>
    <a href="{{ route('show_sale_box', $id) }}"
    class="btn btn-verde" data-toggle="tooltip" data-placement="top" title="Caja"><i class="fas fa-cash-register"></i>
    </a>
@endif
@if (Auth::user()->role_id != 5 )
    <a href="{{ route('show_purchase', $id) }}"
        class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Compras"><i class="fas fa-cart-plus"></i>
    </a>
    <a href="{{ route('show_expense', $id) }}"
        class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Gastos"><i class="fas fa-money-bill"></i>
    </a>
    <a href="{{ route('show_product', $id) }}"
        class="btn btn-limon" data-toggle="tooltip" data-placement="top" title="Productos esta Bodega"><i class="fas fa-box-open"></i>
    </a>
    @if (Auth::user()->transfer == 1)
        <a href="{{ route('show_transfer', $id) }}"
        class="btn btn-ver" data-toggle="tooltip" data-placement="top" title="Traslados"><i class="fas fa-dumpster"></i>
        </a>
    @endif

@endif






