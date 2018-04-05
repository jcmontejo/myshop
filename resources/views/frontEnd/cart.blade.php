@extends('layouts.front') @section('content')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Finalizar Compra</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-content-right">
                    <div class="woocommerce">
                        <form enctype="multipart/form-data" action="#" class="checkout" method="post" name="checkout">

                            <div id="customer_details" class="col2-set">
                                <div class="col-1">
                                    <div class="woocommerce-billing-fields">
                                        <h3>Detalles</h3>
                                        <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                            <label class="" for="billing_first_name">Nombre(s)
                                                <abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="text" value="" placeholder="" id="billing_first_name" name="billing_first_name" class="input-text ">
                                        </p>

                                        <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                            <label class="" for="billing_last_name">Apellidos
                                                <abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="text" value="" placeholder="" id="billing_last_name" name="billing_last_name" class="input-text ">
                                        </p>
                                        <div class="clear"></div>

                                        <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                            <label class="" for="billing_address_1">Dirección
                                                <abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="text" value="" placeholder="" id="billing_address_1" name="billing_address_1" class="input-text ">
                                        </p>

                                        <p id="billing_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
                                            <label class="" for="billing_city">Ciudad
                                                <abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="text" value="" placeholder="" id="billing_city" name="billing_city" class="input-text ">
                                        </p>

                                        <p id="billing_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                                            <label class="" for="billing_postcode">Código Postal
                                                <abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="text" value="" placeholder="" id="billing_postcode" name="billing_postcode" class="input-text ">
                                        </p>

                                        <div class="clear"></div>

                                        <p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
                                            <label class="" for="billing_email">Correo Electrónico
                                                <abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="text" value="" placeholder="" id="billing_email" name="billing_email" class="input-text ">
                                        </p>

                                        <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                                            <label class="" for="billing_phone">Teléfono
                                                <abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="text" value="" placeholder="" id="billing_phone" name="billing_phone" class="input-text ">
                                        </p>
                                        <div class="clear"></div>
                                    </div>
                                </div>

                                <div class="col-2">
                                    <div class="woocommerce-shipping-fields">
                                        <h3 id="ship-to-different-address">
                                            <label class="checkbox" for="ship-to-different-address-checkbox">Editar texto</label>
                                        </h3>
                                        <p id="order_comments_field" class="form-row notes">
                                            <label class="" for="order_comments">Escribe el texto que llevara la tarjeta</label>
                                            <textarea cols="5" rows="2" placeholder="Escribe aquí." id="order_comments" class="input-text "
                                                name="order_comments"></textarea>
                                        </p>
                                        <p>
                                        <img src="{{asset('uploads')}}/{{$card->image}}" alt="">
                                        </p>


                                    </div>

                                </div>

                            </div>

                            <h3 id="order_review_heading">Tu orden</h3>

                            <div id="order_review" style="position: relative;">
                                <table class="shop_table">
                                    <thead>
                                        <tr>
                                            <th class="product-name">Producto</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                {{$card->title}}
                                            <strong class="product-quantity">× {{$quantity}}</strong>
                                            </td>
                                            <td class="product-total">
                                            <span class="amount">${{number_format($total)}}</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>

                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td>
                                            <span class="amount">${{number_format($total)}}</span>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Orden Total</th>
                                            <td>
                                                <strong>
                                                <span class="amount">${{number_format($total)}}</span>
                                                </strong>
                                            </td>
                                        </tr>

                                    </tfoot>
                                </table>


                                <div id="payment">
                                    <ul class="payment_methods methods">
                                        <li class="payment_method_bacs">
                                            <input type="radio" data-order_button_text="" checked="checked" value="bacs" name="payment_method" class="input-radio" id="payment_method_bacs">
                                            <label for="payment_method_bacs">Transferencia bancaria directa </label>
                                            <div class="payment_box payment_method_bacs">
                                                <p>Haga su pago directamente en nuestra cuenta bancaria. Utilice su ID de pedido como referencia de pago. Su pedido no será realizado hasta que los fondos se hayan liquidado en nuestra cuenta.</p>
                                            </div>
                                        </li>
                                        
                                        <li class="payment_method_paypal">
                                            <input type="radio" data-order_button_text="Proceed to PayPal" value="paypal" name="payment_method" class="input-radio" id="payment_method_paypal">
                                            <label for="payment_method_paypal">PayPal
                                                <img alt="PayPal Acceptance Mark" src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png">
                                                <a title="What is PayPal?" onclick="javascript:window.open('https://www.paypal.com/gb/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"
                                                    class="about_paypal" href="https://www.paypal.com/gb/webapps/mpp/paypal-popup">¿Qué es PayPal?</a>
                                            </label>
                                            <div style="display:none;" class="payment_box payment_method_paypal">
                                                <p>Pagar a través de PayPal; puede pagar con su tarjeta de crédito si no tiene una cuenta PayPal.</p>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="form-row place-order">

                                        <input type="submit" data-value="Place order" value="Terminar compra" id="place_order" name="woocommerce_checkout_place_order"
                                            class="button alt">


                                    </div>

                                    <div class="clear"></div>

                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection