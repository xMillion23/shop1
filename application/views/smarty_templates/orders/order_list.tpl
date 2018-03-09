            <div class="col-row" id="my-orders">
                <blockquote class="blockquote text-center">
                <h2>{if $current_user.user_role == 'Vendor'}My Orders{else}My Purchases{/if}</h2><hr/>

                {assign var="defaultMessage" value=""}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                {if $orders == TRUE}
                    {foreach from=$orders item=order}
                        {capture name='t_order_details_url'}{if $current_user.user_role == 'Buyer'}purchases/details/{$order.id}{else}orders/details/{$order.id}{/if}{/capture}
                        {capture name="t_vendor_url"}user/{$order.vendor.user_hash}{/capture}
                        {capture name="t_buyer_url"}user/{$order.vendor.user_hash}{/capture}
                        {capture name='t_dispute_url'}{if $current_user.user_role == 'Buyer'}purchases/dispute/{$order.id}{else}orders/dispute/{$order.id}{/if}{/capture}
                        {capture name='t_order_id_fmt'}#{$order.id}{/capture}
                        <!-- Order Box : Buyer : 1-->
                        {form method='open' action='purchases' attr='class="form-horizontal"'}
                        <div class="col-row">

                            <!-- Order Header: Buyer, Items, Buttons -->
                            <div class="col-row">
                                <div class="col-row">
                                    <!--<div class="row">
                                        <div class="col-4"><strong>ID</strong></div>
                                        <div class="col-8"><a href='#'>1</a></div>
                                    </div>-->

                                    {if $current_user.user_role == 'Buyer'}
                                    <div class="form">
                                        <div class="col-row"><strong>Vendor</strong></div>
                                        <div class="col-row" style='word-wrap: break-word;'>{url type='anchor' url=$smarty.capture.t_vendor_url text=$order.vendor.user_name|escape:"html":"UTF-8" attr=''}</div>
                                    </div><hr/>
                                    {else}
                                    <div class="form">
                                        <div class="col-row"><strong>Buyer</strong></div>
                                        <div class="col-row" style='word-wrap: break-word;'>{url type='anchor' url=$smarty.capture.t_buyer_url text=$order.buyer.user_name|escape:"html":"UTF-8" attr=''}</div>
                                    </div><hr/>
                                    {/if}

                                    <div class="form">
                                        <div class="col-row"><strong>Price</strong></div>
                                        <div class="col-row">{$current_user.currency.symbol}{$order.price_l}</div>
                                    </div><hr/>

                                    <div class="form">
                                        <div class="col-row"><strong>Updated</strong></div>
                                        <div class="col-row">{$order.time_f}</div>
                                    </div>
                                </div><hr/>

                                   <div class="form">
                                    <div class="col-row"><strong>Items</strong></div>
                                    <div class="col-row">
                                        <ul>
                                            {foreach from=$order.items item=item}
                                                {capture name="t_item_url"}item/{$item.hash}{/capture}
                                                {if $order.progress == '0'}
                                                    <select name="quantity[{$item.hash}]" autocomplete="off">
                                                        {for $i=0 to 10}
                                                            <option value='{$i}' {if $i == $item.quantity}selected="selected" {/if}>{$i}</option>
                                                        {/for}
                                                    </select> -
                                                    {if $item.hash == 'removed'}
                                                        {$item.name|escape:"html":"UTF-8"}
                                                    {else}
                                                        {url type="anchor" url=$smarty.capture.t_item_url text=$item.name|escape:"html":"UTF-8" attr=''}
                                                    {/if}
                                                {else}
                                                    {$item.quantity} x {if $item.hash == 'removed'}{$item.name|escape:"html":"UTF-8"}{else}{url type="anchor" url=$smarty.capture.t_item_url text=$item.name|escape:"html":"UTF-8" attr=''}{/if}
                                                {/if}
                                                <br />
                                            {/foreach}
                                        </ul>
                                    </div>
                                </div>
                            </div><hr/>
                            <div class="col-row">
                                {if $order.progress == 0}

                                    <input type="submit" class="btn btn-primary btn-block" name="recount" value="Update" />
                                    <input type="submit" class="btn btn-success btn-block" name="place_order" value="Confirm" />
                                    <input type="hidden" name="recount_order_id" value="{$order.id}" />
                                    <input type="hidden" name="place_order_id" value="{$order.id}" />
                                {else}
                                    {url type="anchor" url=$smarty.capture.t_order_details_url text="Details" attr='class="btn btn-primary btn-block"'}
                                {/if}

                                {if $current_user.user_role == 'Buyer' AND $order.progress == '1'}
                                    <input type="submit" class="btn btn-primary btn-block" name="cancel_order" value="Cancel" />
                                    <input type="hidden" name="cancel_order_id" value="{$order.id}" />
                                {/if}

                                {if $current_user.user_role == 'Vendor' AND $order.progress == 1}
                                    {capture name="t_accept_url"}orders/accept/{$order.id}{/capture}
                                    {url type="anchor" url=$smarty.capture.t_accept_url text="Accept Order" attr='class="btn btn-success btn-block"'}
                                {/if}

                                {if $order.progress >= 3 AND $order.progress < 6}
                                    {url type="anchor" url=$smarty.capture.t_dispute_url text="Raise Dispute" attr='class="btn btn-default btn-block"'}
                                {/if}

                                {if $current_user.user_role == 'Buyer' AND $order.progress == 5 AND $order.vendor_selected_upfront == TRUE}
                                    <input type="submit" class="btn btn-primary btn-block" name="received_upfront_order" value="Received" />
                                    <input type="hidden" name="received_upfront_order_id" value="{$order.id}" />
                                {/if}

                                {if $order.progress == 6 }
                                    {url type="anchor" url=$smarty.capture.t_dispute_url text="View Dispute" attr='class="btn btn-danger btn-block"'}
                                {/if}
                                {if isset($review_auth.{$order.id}) == TRUE}
                                    {capture name='t_review_form_url'}reviews/form/{$review_auth.{$order.id}}/{$order.id}{/capture}
                                    {url type='anchor' url=$smarty.capture.t_review_form_url text='Leave Feedback' attr='class="btn btn-success btn-block"'}
                                {/if}
                            </div>

                            <div class="row">&nbsp;
                            </div>
                            <!-- Order Body -->
                            <div class="form">
                                <div class="col-row">{$order.progress_message}</div>
                                <div class="form">
                                    <div class=" bs-wizard" style="border-bottom:0;">
                                        <div class=" bs-wizard-step {if $order.progress > 1}complete{else}active{/if}">
                                            <div class="text-center bs-wizard-stepnum">Step 1</div>
                                            <div class="progress"><div class="progress-bar"></div></div>
                                            <a href="#" class="bs-wizard-dot"></a>
                                            <div class="bs-wizard-info text-center">Order accepted</div>
                                        </div>

                                        <div class=" bs-wizard-step {if $order.progress > 2}complete{else}disabled{/if}"><!-- complete -->
                                            <div class="text-center bs-wizard-stepnum">Step 2</div>
                                            <div class="progress"><div class="progress-bar"></div></div>
                                            <a href="#" class="bs-wizard-dot"></a>
                                            <div class="bs-wizard-info text-center">Payment made</div>
                                        </div>
                                        {if $order.refund_time !== ''}
                                            <div class=" bs-wizard-step {if $order.progress == 7}complete{else}disabled{/if}">
                                                <div class="text-center bs-wizard-stepnum">Step 3</div>
                                                <div class="progress"><div class="progress-bar"></div></div>
                                                <a href="#" class="bs-wizard-dot"></a>
                                                <div class="bs-wizard-info text-center">Refund complete</div>
                                            </div>
                                        {else}
                                            <div class=" bs-wizard-step {if $order.progress > 4}complete{else}disabled{/if}"><!-- complete -->
                                                <div class="text-center bs-wizard-stepnum">Step 3</div>
                                                <div class="progress"><div class="progress-bar"></div></div>
                                                <a href="#" class="bs-wizard-dot"></a>
                                                <div class="bs-wizard-info text-center">Item dispatched</div>
                                            </div>

                                            <div class=" bs-wizard-step {if $order.progress == 7}complete{else}disabled{/if}"><!-- active -->
                                                <div class="text-center bs-wizard-stepnum">Step 4</div>
                                                <div class="progress"><div class="progress-bar"></div></div>
                                                <a href="#" class="bs-wizard-dot"></a>
                                                <div class="bs-wizard-info text-center">Order complete</div>
                                            </div>
                                        {/if}
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">&nbsp;
                        </div>
                        </form>
                        <hr>
                        <!-- End Order Box -->
                    {/foreach}
                {else}
                    <p>You have no orders at present!</p>
                {/if}
            </div></blockquote>
