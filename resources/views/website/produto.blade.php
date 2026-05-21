@extends('website.index')
@section('assunto')
  <main class="page-hero">
    <div class="container page-panel product-grid">
      <div class="card">
        <img src="{{ asset($produtoSelecionado['img']) }}" alt="{{ $produtoSelecionado['nome'] }}">
      </div>
      
      <div>
        <span class="tag">Destaque</span>
        <h1>{{ $produtoSelecionado['nome'] }}</h1>
        <p>Modelo versátil com pegada premium, visual limpo e proposta ideal para vitrine principal de um ecommerce.</p>
        
        <div class="price">
          R$ {{ number_format($produtoSelecionado['preco'], 2, ',', '.') }}
        </div>
        <p class="small">Parcelamento em até 12x sem juros. Frete grátis para capitais.</p>

        <div class="list">
          <label>Cor<select><option>Padrão</option></select></label>
          <label>Tamanho<select><option>Único</option></select></label>
          <label>Quantidade<input id="qty" type="number" min="1" value="1" /></label>
        </div>

        <div class="cta-row">
          <a class="btn btn-primary" href="/carrinho">Adicionar ao carrinho</a>
          <a class="btn btn-light" href="/checkout">Comprar agora</a>
        </div>

        <div class="summary" style="margin-top:22px;position:static">
          <div class="summary-row">
            <strong>Total estimado</strong>
            <strong>R$ {{ number_format($produtoSelecionado['preco'], 2, ',', '.') }}</strong>
          </div>
          <div class="summary-row"><span>Disponibilidade</span><span class="badge">Em estoque</span></div>
          <div class="summary-row"><span>SKU</span><span>NS-PROD-{{ strtoupper($produtoSelecionado['nome']) }}</span></div>
        </div>
      </div>
    </div>
  </main>
@endsection