<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>お問い合わせフォーム</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/product.css') }}" />
</head> 

<body>
    <header class="header">
        <div class="header__title">
           お問い合わせフォーム 
        </div>
    </header>

    <main>
        <div class="product">
            <div class="product__header">
                <h2>商品一覧</h2>
            </div>
        
            <div class="product__addition">
              <a href="/products/register"><span class="product__item">+</span>商品を追加</a>
            </div>
        </div>

        <div class="product__list">
          <div class="product__search">
            <input type="text" name=search placeholder="商品名で検索">
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
                        <img src="{{ asset('storage/' . $product['image']) }}"  alt="商品画像" class="img-content"/>
                        
                        <div class="detail-content">
                            <p>{{$product->name}}</p>
                            <p>{{$product->price}}</p>
                        </div>
                    </div>
                @endforeach
            </div>

