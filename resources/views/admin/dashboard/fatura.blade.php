@extends('layouts.admin-master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Fatura</h1>
        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Início</a></div>
        <div class="breadcrumb-item">Fatura</div>
        </div>
    </div>

    <div class="section-body">
        <div class="invoice">
        <div class="invoice-print">
            <div class="row">
            <div class="col-lg-12">
                <div class="invoice-title">
                <h2>Fatura</h2>
                <div class="invoice-number">Pedido #12345</div>
                </div>
                <hr>
                <div class="row">
                <div class="col-md-6">
                    <address>
                    <strong>Forma de Pagamento:</strong><br>
                    PagSeguro<br>
                    </address>
                </div>
                <div class="col-md-6 text-md-right">
                    <address>
                    <strong>Data do Pedido:</strong><br>
                    19 de Setembro de 2018<br><br>
                    </address>
                </div>
                </div>
            </div>
            </div>

            <div class="row mt-4">
            <div class="col-md-12">
                <div class="section-title">Resumo da Compra</div>
                <p class="section-lead">Todos os itens aqui não podem ser deletados.</p>
                <div class="table-responsive">
                <table class="table table-striped table-hover table-md">
                    <tbody><tr>
                    <th data-width="40" style="width: 40px;">#</th>
                    <th>Item</th>
                    <th class="text-center">Preço</th>
                    <th class="text-center">Quantidade</th>
                    <th class="text-right">Total</th>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td>Kit de Barbear</td>
                    <td class="text-center">R$10.99</td>
                    <td class="text-center">1</td>
                    <td class="text-right">R$10.99</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>Curso de Pilhamento</td>
                    <td class="text-center">R$20.00</td>
                    <td class="text-center">3</td>
                    <td class="text-right">R$60.00</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td>Curso 2000 - O mais completo curso sobre a virada do milênio</td>
                    <td class="text-center">R$600.00</td>
                    <td class="text-center">1</td>
                    <td class="text-right">R$600.00</td>
                    </tr>
                </tbody></table>
                </div>
                <div class="row mt-4">
                <div class="col-lg-8">
                    <div class="section-title">Forma de Pagamento</div>
                    <p class="section-lead">O método de pagamento que utilizamos facilita a sua vida.</p>
                    <div class="images">
                    <img src="{{ asset('assets/img/visa.png') }}" alt="visa">
                    <img src="{{ asset('assets/img/jcb.png') }}" alt="jcb">
                    <img src="{{ asset('assets/img/mastercard.png') }}" alt="mastercard">
                    <img src="{{ asset('assets/img/paypal.png') }}" alt="paypal">
                    </div>
                </div>
                <div class="col-lg-4 text-right">
                    <div class="invoice-detail-item">
                    <div class="invoice-detail-name">Subtotal</div>
                    <div class="invoice-detail-value">R$670.99</div>
                    </div>
                    <div class="invoice-detail-item">
                    <div class="invoice-detail-name">Frete</div>
                    <div class="invoice-detail-value">R$15</div>
                    </div>
                    <hr class="mt-2 mb-2">
                    <div class="invoice-detail-item">
                    <div class="invoice-detail-name">Total</div>
                    <div class="invoice-detail-value invoice-detail-value-lg">R$685.99</div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <hr>
        <div class="text-md-right">
            <div class="float-lg-left mb-lg-0 mb-3">
            <button class="btn btn-primary btn-icon icon-left"><i class="fas fa-credit-card"></i> Processar Pagamento</button>
            <button class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i> Cancelar</button>
            </div>
            <button class="btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i> Imprimir</button>
        </div>
        </div>
    </div>
    </section>
@endsection
