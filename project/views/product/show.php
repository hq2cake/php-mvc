<h1>Продукт "<? echo $product["name"]; ?>" из категории "<? echo $product['category'] ?>"</h1>
<p>
    Цена: <? echo $product['price'] ?>$, количество: <? echo $product['quantity'] ?>
</p>
<p>
    Стоимость (<? echo $product['price'] ?> * <?echo $product['quantity'] ?> ): <? echo $product['price'] * $product['quantity'] ?>$
</p>