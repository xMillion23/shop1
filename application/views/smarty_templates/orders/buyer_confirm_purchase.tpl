           <div class="col-row" id="my-orders">
                <blockquote class="blockquote text-center">
                                <h2>Review Order</h2><hr/>

                    {assign var="defaultMessage" value=""}
                    {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                {if $order_type == "upfront"}
<p align="justify">{$order.vendor.user_name|escape:"html":"UTF-8"} has requested this order is paid up-front. After
payment is made to the order address, you will need authorize release of the funds before the
order is dispatched.</p>
                    {else}
<p align="justify">This order is proceeding via <u><strong> escrow.</u></strong> Once the payment has been processed the vendor will notify you once the order has been dispatched. When received you can release the funds to the vendor.
</p>
{/if}<hr/>

                    <p align="justify">Review the order details, and enter your address if you are happy to proceed. Once confirmed, you will be able to pay to the order address.</p><hr/>

                    {capture name='t_purchase_url'}purchases/confirm/{$order.id}{/capture}
                    {capture name="t_vendor_url"}user/{$order.vendor.user_hash}{/capture}

                    <div class="col-row">

                        <div class="col-row">
                            <div class="table-responsive">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Order with {url type="anchor" url=$smarty.capture.t_vendor_url text=$order.vendor.user_name attr=''}:</div><br/>

                                    <table class="table table-striped">
                                        <tbody>
                                        {foreach from=$order.items item=item}
                                            {capture name="t_item_url"}item/{$item.hash}{/capture}
                                            <tr>
                                                <td>{$item.quantity|escape:"html":"UTF-8"} x</td>
                                                <td>{url type="anchor" url=$smarty.capture.t_item_url text=$item.name|escape:"html":"UTF-8" attr=''}</td>
                                                <td>{$coin.code} {number_format($item.quantity*$item.price_b,8)}</td>
                                            </tr>
                                        {/foreach}
                                        <tr>
                                            <td></td>
                                            <td>Shipping to {$order.buyer.location_f}</td>
                                            <td>{$coin.code} {$fees.shipping_cost}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Fees</td>
                                            <td>{$coin.code} {$fees.fee}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><strong>Total</strong></td>
                                            <td>{$coin.code} {$total}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div><hr/>

                    <div class="col-row">

                    {form method="open" action=$smarty.capture.t_purchase_url attr=['name'=>'placeOrderForm','id'=>'placeOrderForm','class'=>'form-horizontal']}

                        <div class="col-row">
                            <div class="form-group">
                                <div class="col-row">
                                    <label class="control-label col-row" for="buyer_address">Shipping Address:</label>
                                    <div class="col-row">
                                        <textarea name='buyer_address' rows='5' class='form-control'></textarea>
                                    </div>
                                </div>
                                <div class="col-row text-warning">{form method='form_error' field='buyer_address'}</div>
                            </div>
                        </div>

                        {if $buyer_payout == FALSE}
                        <hr/>

                        <div class="form">
                            <div class="col-row">
                                <div class="col-row">You don't have a refund address set up at the moment. Please enter one now, along with your password, in case you need a refund at any point.</div>
                            </div><hr/>
                            <div class="form">
                                <div class="col-row">
                                    <label class="control-label col-row" for="buyer_payout">Refund Address:</label>
                                    <div class="col-row">
                                        <input type="text" name="buyer_payout" id="buyer_payout" class="form-control text-center" value="" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-row text-warning">{form method='form_error' field='buyer_payout'}</div>
                            </div><br/>
                            <div class="form">
                                <div class="col-row">
                                    <label class="control-label col-row" for="password">Password:</label>
                                    <div class="col-row">
                                        <input type="password" name="password" id="password" class="form-control text-center" value="" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-row text-warning">{form method='form_error' field='password'}</div>
                            </div>
                        </div>
                        {/if}

                        {if isset($order.vendor.pgp) == TRUE}
                        <textarea style="display:none;" name="public_key">{$order.vendor.pgp.public_key|escape:"html":"UTF-8"}</textarea>
                        {/if}

                        <div class="form">
                            <label class="control-label col-row" for="submit"></label>
                            <div class="col-row">
                                <p align="center">
                                    <input type="submit" class="btn btn-success" value='Place Order' {if isset($order.vendor.pgp) == TRUE}onclick='messageEncrypt()'{/if} />
                                    {url type="anchor" url='purchases' text="Cancel" attr='class="btn btn-danger"'}
                                </p>
                            </div>
                        </div>

                    </form>
                </div></blockquote>
