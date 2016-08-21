<div>

    <ul class="nav nav-tabs">
        <li role="presentation" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                Creation <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li>{!! Html::link('category/create', 'Category Create') !!}</li>
                <li>{!! Html::link('unit/create', 'Unit Create') !!}</li>
                <li>{!! Html::link('product/create', 'Product Create') !!}</li>
                <li>{!! Html::link('customer/create', 'Customer Create') !!}</li>
                <li>{!! Html::link('sale/create', 'Sale Create') !!}</li>
            </ul>
        </li>

        <li role="presentation" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                Lists <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">

                <li>{!! Html::link('category', 'Category List') !!}</li>
                <li>{!! Html::link('unit', 'Unit List') !!}</li>
                <li>{!! Html::link('product', 'Product List') !!}</li>
                <li>{!! Html::link('customer', 'Customer List') !!}</li>
                <li>{!! Html::link('sale', 'Sale List') !!}</li>

            </ul>
        </li>
        <li role="presentation" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                Dropdown <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li role="presentation"><a href="#">Home</a></li>
                <li role="presentation"><a href="#">Profile</a></li>
                <li role="presentation"><a href="#">Messages</a></li>
            </ul>
        </li>
    </ul>
</div>