@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/product.css') }}">
@endsection

@section('content')


    <main>
        <div class="product">
            <div class="product__header">
                <h2>商品一覧</h2>
            </div>
        
            <div class="product__addition">
              <a href="/products/register"><span class="product__item">+</span>商品を追加</a>
            </div>
        </div>

      <form action="/products/search" method="post">
        @csrf
        <div class="product__list">
          <div class="product__search">
            <input type="text" name="keyword" placeholder="商品名で検索">
          </div>
            <button class="product__button-submit" type="submit">検索</button>
        </div>

        <div class="product__list">
          <div class="product__search">
            <h4>価格順で表示</h4>
            <select name="sort" id="sort">
                <option value="">価格で並び替え</option>
                <option value="high_price">高い順に表示</option>
                <option value="low_price">低い順に表示</option>
            </select>
        </div>

        <div class="product__image">
            @foreach ($products as $product)
                <div class="product__content">
                    <a href="/products/detail/{{$product->id}}" class="product-link">
                    <img src="{{ asset('storage/' . $product['image']) }}"  alt="商品画像" class="img-content"/>
                    </a>    
                    <div class="detail-content">
                        <p>{{$product->name}}</p>
                        <p>{{$product->price}}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pagination">
                {{ $products->links('pagination::bootstrap-4')}}
            </div>
      </form>
</main>

@endsection