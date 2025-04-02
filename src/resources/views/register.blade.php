<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mogitate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head> 

<body>
    <header class="header">
        <div class="header__title">
            mogitate
        </div>
    </header>

    <main>
        <div class="register">
            <div class="register__header">
                <h2>商品登録</h2>
            </div>
        </div>

        <form class="form" action="/products" method="post" enctype="multipart/form-data">
            @csrf
            <div class="register__form">
                <div class="register__title">
                    <label class="register__label" for="name">商品名</label>
                    <span class="register__label__required">必須</span>
                    </label>
                </div>

                <div class="register__input">
                    <div class="register__input__text">
                        <input class="register__input__text--text" type="text" name="name" id="name" placeholder="商品名を入力" value="{{ old('name')}}">
                    </div>
                </div>

                <div class="form__Validation">
                    <!--バリデーション機能。-->
                    @error('name')
                        {{ $message }} 
                    @enderror
                </div>
            </div>

            <div class="register__form">
                <div class="register__title">
                    <label class="register__label" for="price">値段</label>
                    <span class="register__label__required">必須</span>
                </div>

                <div class="register__input">
                    <div class="register__input__text">
                        <input class="register__input__text--text" type="integer" name="price" id="price" placeholder="値段を入力" value="{{ old('price')}}">
                    </div>
                </div>

                <div class="form__Validation">
                    <!--バリデーション機能。-->
                    @error('price')
                        {{ $message }} 
                    @enderror
                </div>
            </div>

            <div class="register__form">
                <div class="register__title">
                    <label class="register__label" for="image">商品登録</label>
                    <span class="register__label__required">必須</span>
                </div>

                <div class="register__input">
                    <div class="register__input__text">
                        <input class="register__input__text--text" type="file" name="image" id="image">
                    </div>
                </div>

                <div class="form__Validation">
                    <!--バリデーション機能。-->
                    @error('image')
                        {{ $message }} 
                    @enderror
                </div>
            </div>

            <div class="register__form">
                <div class="register__title">
                    <label class="register__label">季節</label>
                    <span class="register__label__required">必須</span>
                    <span class="register__label__required--comment">複数選択可</span>
                </div>

                <div class="register__input">
                    <div class="register__input__text">
                    @foreach ($seasons as $season)
                        <input type="checkbox" id="season" value="{{$season->id}}" name="season">
                        <label for="season">{{$season->name}}</label>
                    @endforeach
                    </div>
                </div>

                <div class="form__Validation">
                    <!--バリデーション機能。-->
                    @error('season')
                        {{ $message }} 
                    @enderror
                </div>
            </div>

            <div class="register__form">
                <div class="register__title">
                    <label class="register__label" for="name">商品説明</label>
                    <span class="register__label__required">必須</span>
                    </label>
                </div>

                <div class="register__input">
                    <div class="register__input__text">
                        <textarea cols="30" rows="5" placeholder="商品の説明を入力" name="description"></textarea>
                    </div>
                </div>

                <div class="form__Validation">
                    <!--バリデーション機能。-->
                    @error('description')
                        {{ $message }} 
                    @enderror
                </div>
            </div>

            <div class="register__button">
                <a class="register__button__buck" href="/products">戻る</a>
                <button class="register__button-submit" type="submit">登録</button>
            </div>

        </form>
    </main>
