<div id="wrapper">
  <div class="cart-tab visible">
    <a href="#" title="View your shopping cart" class="cart-link">
      <i class="fa fa-shopping-cart"></i><span class="text-md"> Wishlist</span>
      <span class="contents">2 items</span>
    </a>
    <div class="cart">
      <h2>My Wishlist</h2>
      <div class="cart-items">
        <ul>
          <li class="clearfix">
            {!! Html::image('privasi/resources/views/template/img/spd.jpg', 'wishlist', array('class' => 'productimg')) !!}
            <h4>Fixie Mastah</h4>
            <span class="item-price">Rp.11.000</span>
          </li>

          <li class="clearfix">
            {!! Html::image('privasi/resources/views/template/img/motor', 'wishlist', array('class' => 'productimg')) !!}
            <h4>Motor Maling</h4>
            <span class="item-price">Rp.11.000</span>
          </li>
        </ul>
      </div><!-- @end .cart-items -->

      <a href="{{ route('fav') }}" class="checkout">Go To Wishlist →</a>
    </div><!-- @end .cart -->
  </div><!-- @end .cart-tab -->
