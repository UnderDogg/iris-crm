<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="header text-center">{{ trans('app.sidebar:main-title') }}</li>
            <li><a href="{{ action('AccountController@index') }}"><i class="fa fa-briefcase"></i> <span>Comptes</span></a></li>
            <li><a href="{{ action('ProspectController@index') }}"><i class="fa fa-fire"></i> <span>Prospects</span></a></li>
            <li><a href="{{ action('ContactController@index') }}"><i class="fa fa-user"></i> <span>Contacts</span></a></li>
            <li><a href="{{ action('EstimateController@index') }}"><i class="fa fa-file-text"></i> <span>Devis</span></a></li>
            <li><a href="{{ action('OrderController@index') }}"><i class="fa fa-line-chart"></i> <span>Commandes</span></a></li>
            <li><a href="{{ action('InvoiceController@index') }}"><i class="fa fa-archive"></i> <span>Factures</span></a></li>
            <li><a href="{{ action('ProductsController@index') }}"><i class="fa fa-cubes"></i> <span>Produits</span></a></li>
            <li><a href="{{ action('ServiceController@index') }}"><i class="fa fa-truck"></i> <span>Services</span></a></li>
            <li><a href="{{ action('DocumentController@index') }}"><i class="fa fa-file-excel-o"></i> <span>Documents</span></a></li>
        </ul>
    </section>
</aside>