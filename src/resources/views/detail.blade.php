<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>商品一覧ページ</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/product.css') }}" />
</head> 

<body>
    <header class="header">
        <div class="header__title">
            Mogitate 
        </div>
    </header>
    
    <main>
        <form action="/products/detail" method="get">
    <div class="detail">
            <div class="detail__header">
                <p><span class="span-item">商品一覧></span>{{$product->name}}</p>
                <img src="{{ asset('storage/' . $product['image']) }}"  alt="商品画像" class="img-content"/>
            </div>

            <div class="detail__content">
                <label class="name">商品名</label>
                <input class="name__text" type="text" name="name" placeholder="{{$product->name}}">
                <label class="price">値段</label>
                <input class="price__text" type="text" name="price" placeholder="{{$product->price}}">
                <label class="season">季節</label>
            @foreach ($seasons as $season)
                <input type="checkbox" id="season" value="{{$season->id}}" name="season">
                <label for="season">{{$season->name}}</label>
            @endforeach
            </div>

            <div class="detail__image">
                <input class="image" type="file" name="image" >
            </div>

            <div class="detail__comment">
                <label  class="comment" name>商品説明</label>
            </div>

            <div>
                <textarea  class="description" name="description" id="" cols="30" rows="10">{{$product->description}}</textarea>
            </div>

            <div class="button-content">
                    <a href="/products" class="back">戻る</a>
                    <button type="submit" class="button-change">変更を保存</button>
            </div>

        </form>
    








    </main>
</body>

</html>