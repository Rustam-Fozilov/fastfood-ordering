<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="css/mycart.css">
    <title>Document</title>
</head>

<body>

@section('content')

{{-- KEREMAS ELEMENTLA START --}}
    <div class="invisible">
        <li id="savat"><a href="MyCart">SAVAT</a><span>0</span></li>

        <h1 id="titleBurgeri">BURGERLAR</h1>
        <div id="burgeri">
            <ul class="products">
                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/burger-1.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">Dabl Shefburger</div>
                            <div class="product-price">39000</div>
                            <button class="btn-addToCart cart1">Savatga</button>
                        </div>
                    </div>
                </li>

                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/burger-2.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">Achchiq Shefburger</div>
                            <div class="product-price">26000</div>
                            <button class="btn-addToCart cart2">Savatga</button>
                        </div>
                    </div>
                </li>

                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/burger-3.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">Chizburger</div>
                            <div class="product-price">22000</div>
                            <button class="btn-addToCart cart3">Savatga</button>
                        </div>
                    </div>
                </li>
            </ul>

            <ul class="products">
                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/burger-4.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">Chizburger DeLyuks</div>
                            <div class="product-price">26000</div>
                            <button class="btn-addToCart cart4">Savatga</button>
                        </div>
                    </div>
                </li>

                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/burger-5.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">Shef Tauer</div>
                            <div class="product-price">32000</div>
                            <button class="btn-addToCart cart5">Savatga</button>
                        </div>
                    </div>
                </li>

                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/burger-6.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">Shefburger</div>
                            <div class="product-price">20000</div>
                            <button class="btn-addToCart cart6">Savatga</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <h1 id="titleTvisteri">TVISTERLAR</h1>
        <div id="tvisteri">
            <ul class="products">
                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/tvister-1.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">Longer</div>
                            <div class="product-price">17000</div>
                            <button class="btn-addToCart cart7">Savatga</button>
                        </div>
                    </div>
                </li>

                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/tvister-2.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">Tvister oddiy</div>
                            <div class="product-price">26000</div>
                            <button class="btn-addToCart cart8">Savatga</button>
                        </div>
                    </div>
                </li>

                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/tvister-3.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">Tvister junior</div>
                            <div class="product-price">18000</div>
                            <button class="btn-addToCart cart9">Savatga</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <h1 id="titleKuritsa">TOVUQ</h1>
        <div id="kuritsa">
            <ul class="products">
                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/tovuq-1.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">3ta Qanot</div>
                            <div class="product-price">23000</div>
                            <button class="btn-addToCart cart10">Savatga</button>
                        </div>
                    </div>
                </li>

                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/tovuq-2.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">1ta Oyoq</div>
                            <div class="product-price">15000</div>
                            <button class="btn-addToCart cart11">Savatga</button>
                        </div>
                    </div>
                </li>

                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/tovuq-3.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">2ta Oyoq</div>
                            <div class="product-price">25000</div>
                            <button class="btn-addToCart cart12">Savatga</button>
                        </div>
                    </div>
                </li>
            </ul>

            <ul class="products">
                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/tovuq-4.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">3ta Oyoq</div>
                            <div class="product-price">34000</div>
                            <button class="btn-addToCart cart13">Savatga</button>
                        </div>
                    </div>
                </li>

                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/tovuq-5.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">3ta Striptsa</div>
                            <div class="product-price">24000</div>
                            <button class="btn-addToCart cart14">Savatga</button>
                        </div>
                    </div>
                </li>

                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/tovuq-6.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">Achchiq Striptsa</div>
                            <div class="product-price">45000</div>
                            <button class="btn-addToCart cart15">Savatga</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <h1 id="titleFri">KARTOSHKA FRI</h1>
        <div id="fri">
            <ul class="products">
                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/fri-1.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">Basket Fri</div>
                            <div class="product-price">26000</div>
                            <button class="btn-addToCart cart16">Savatga</button>
                        </div>
                    </div>
                </li>

                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/fri-2.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">Little Fri</div>
                            <div class="product-price">14000</div>
                            <button class="btn-addToCart cart17">Savatga</button>
                        </div>
                    </div>
                </li>

                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/fri-3.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">Standart Fri</div>
                            <div class="product-price">20000</div>
                            <button class="btn-addToCart cart18">Savatga</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <h1 id="titleSousi">SOUSLAR</h1>
        <div id="sousi">
            <ul class="products">
                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/sous-1.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">Tomatli Ketchup</div>
                            <div class="product-price">5000</div>
                            <button class="btn-addToCart cart19">Savatga</button>
                        </div>
                    </div>
                </li>

                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/sous-2.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">Pishloqli sous</div>
                            <div class="product-price">5000</div>
                            <button class="btn-addToCart cart20">Savatga</button>
                        </div>
                    </div>
                </li>

                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/sous-3.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">Chili Sous</div>
                            <div class="product-price">5000</div>
                            <button class="btn-addToCart cart21">Savatga</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <h1 id="titleNapitki">ICHIMLIKLAR</h1>
        <div id="napitki">
            <ul class="products">
                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/cola.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">Coca-cola 1.5L</div>
                            <div class="product-price">12000</div>
                            <button class="btn-addToCart cart22">Savatga</button>
                        </div>
                    </div>
                </li>

                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/fanta.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">Fanta 1.5L</div>
                            <div class="product-price">12000</div>
                            <button class="btn-addToCart cart23">Savatga</button>
                        </div>
                    </div>
                </li>

                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/suv.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">Mineral suv 0.5L</div>
                            <div class="product-price">5000</div>
                            <button class="btn-addToCart cart24">Savatga</button>
                        </div>
                    </div>
                </li>
            </ul>

            <ul class="products">
                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/pepsi.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">Pepsi 1.5L</div>
                            <div class="product-price">12000</div>
                            <button class="btn-addToCart cart25">Savatga</button>
                        </div>
                    </div>
                </li>

                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/sok-1.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">Apelsinli sok 1L</div>
                            <div class="product-price">7000</div>
                            <button class="btn-addToCart cart26">Savatga</button>
                        </div>
                    </div>
                </li>

                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/sok-2.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">Olmali sok 1L</div>
                            <div class="product-price">7000</div>
                            <button class="btn-addToCart cart27">Savatga</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <h1 id="titleDeserti">DESERT</h1>
        <div id="deserti">
            <ul class="products">
                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/desert-1.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">Yong'oqli donat</div>
                            <div class="product-price">17000</div>
                            <button class="btn-addToCart cart28">Savatga</button>
                        </div>
                    </div>
                </li>

                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/desert-2.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">Olmali donat</div>
                            <div class="product-price">16000</div>
                            <button class="btn-addToCart cart29">Savatga</button>
                        </div>
                    </div>
                </li>

                <li class="product-item">
                    <div class="productInner">
                        <div class="productImage">
                            <img src="img/desert-3.png" alt="post1">
                        </div>
                        <div class="productContent">
                            <div class="product-name">Shokoladli donat</div>
                            <div class="product-price">15000</div>
                            <button class="btn-addToCart cart30">Savatga</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
{{-- KEREMAS ELEMENTLA END --}}

    <div class="products-container">
        <div class="product-header">
            <h5 class="product-title">NOMI</h5>
            <h5 class="price">NARXI</h5>
            <h5 class="quantity">SONI</h5>
            <h5 class="total">JAMI</h5>
        </div>

        <form method="post" action="/storeOrder">
            @csrf
            <div class="products2">

            </div>
            <button type="submit" onclick="event.preventDefault(); storeOrder()"  class="btn-submit">OK</button>
        </form>
    </div>

    <script src="js/main.js"></script>
</body>

</html>
