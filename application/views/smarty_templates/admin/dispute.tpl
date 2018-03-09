            {capture name="t_disputing_user_url"}user/{$disputing_user.user_hash}{/capture}
            {capture name="t_dispute_url"}admin/dispute/{$current_order.id}{/capture}

            <div class="col-row" id="dispute-form">
            <blockquote class="blockquote text-center">

                <h2>{url type="anchor" url="admin" text="Back" attr='class="btn btn-danger"'} Disputed Order #{$dispute.order_id}</h2><hr/>

                {assign var="defaultMessage" value=""}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                <div class="well">
                    <div class="row">
                        <div class="col-row">
                            <div class="row">
                                <div class="col-row"><strong>Order Date</strong></div>
                                <div class="col-row">{$current_order.created_time_f}</div>
                            </div>
                            <div class="row">
                                <div class="col-row"><strong>Amount Paid</strong></div>
                                <div class="col-row">{$coin.symbol} {number_format($current_order.order_price, 8)}</div>
                            </div>
                            <div class="row">
                                <div class="col-row"><strong>Disputing User</strong></div>
                                <div class="col-row">{url type="anchor" url=$smarty.capture.t_disputing_user_url text=$disputing_user.user_name|escape:"html":"UTF-8" attr=''}</div>
                            </div>
                        </div>

                        <div class="col-row">
                            <div class="row">
                                <div class="col-row"><strong>Items:</strong></div>
                                <div class="col-row">
                                    <ul>
                                    {foreach from=$current_order.items item=item}
                                        <li>{$item.quantity|escape:"html":"UTF-8"} x {$item.name|escape:"html":"UTF-8"}</li>
                                    {/foreach}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="well">
                    <h4>Messages</h4>
                    {form method="open" action=$smarty.capture.t_dispute_url attr='class="form-horizontal"'}
                        <div class="row">
                            <div class="col-row"><strong>Initial Dispute</strong></div>
                            <div class="col-row">{$dispute.dispute_message|escape:"html":"UTF-8"}</div>
                        </div>

                        {if count($dispute.updates) > 0}
                        <hr />
                        <div class="row">
                            {foreach from=$dispute.updates item=update}
                            {capture name="t_posting_user_url"}user/{$update.posting_user_hash}{/capture}
                            <div class="row">
                                <div class="col-row">
                                    {if $update.posting_user_id == "0"}
                                        <b>Notification</b>
                                    {else}
                                        Posted {$update.time_f} by {url type="anchor" url=$smarty.capture.t_posting_user_url text=$update.posting_user_name|escape:"html":"UTF-8" attr=''}.
                                    {/if}
                                </div>
                                <div class="col-row">{$update.message|escape:"html":"UTF-8"}</div>
                            </div><br />
                            {/foreach}
                        </div>
                        {/if}
                        {if $dispute.final_response == "0"}
                        <hr />

                        <div class="form">
                            <div class="col-row">
                                <label class="control-group col-row" for="update_message">Response</label>
                                <div class="col-row"><textarea name="update_message" id="update_message" class="form-control"></textarea></div>
                            </div>
                            <div class="col-row">{form method="form_error" field="update_message"}</div>
                        </div>

                        <div class="form">
                            <div class="col-row">
                                <label class="control-label col-row" for="submit"></label>
                                <div class="col-row">
                                    <p align="center">
                                        <input type="submit" name="post_dispute_message" value="Post Message" class="btn btn-primary" />
                                    </p>
                                </div>
                            </div>
                        </div>

                        {/if}
                    </form>
                </div>


                <div class="well">
                    <h4>Resolution</h4>
                    {if isset($amount_error) == TRUE}<div class="alert">{$amount_error}</div>{/if}
                    {form method="open" action=$smarty.capture.t_dispute_url attr='class="form-horizontal"'}
                        <div class="row">
                            <div class="col-row">

                                <div class="col-row"><strong>Order Price:</strong></div>
                                <div class="col-row">{$coin.symbol} {$current_order.order_price}</div>
                                <div class="col-row"><strong>Transaction Fee:</strong></div>
                                <div class="col-row">{$coin.symbol} {$transaction_fee}</div>
                                <div class="col-row"><strong>Admin Fee's:</strong></div>
                                <div class="col-row">{$coin.symbol} {$admin_fee}</div>
                                <div class="col-row"><strong>User Funds:</strong></div>
                                <div class="col-row">{$coin.symbol} {$user_funds}</div>
                                <input type='checkbox' name='relinquish_fee' value='1' /> Release sites fee for users
                            </div>

                            <div class="col-row">
                                <div class="row">
                                {if $dispute.final_response == "1"}
                                    <b>{if $current_order.vendor_selected_escrow == "1"}
                                        This dispute has been closed, as the transaction has been broadcast.
                                    {else}
                                        This dispute has been closed.
                                    {/if}</b>
                                {else}
                                    {if $current_order.vendor_selected_escrow == "1"}
                                        <div class="row">
                                            <div class="col-row"><strong>Pay {$current_order.buyer.user_name|escape:"html":"UTF-8"}:</strong></div>
                                            <div class="col-row"><input type="text" name="pay_buyer" class="form-control" value="" /></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-row"><strong>Pay {$current_order.vendor.user_name|escape:"html":"UTF-8"}:</strong></div>
                                            <div class="col-row"><input type="text" name="pay_vendor" class="form-control" value="" /></div>
                                        </div>

                                        <div class="col-row">Distribute the entire User Funds balance appropriately between the two users.</div>
                                    {else}
                                        This order was paid up-front!
                                    {/if}
                                {/if}
                                </div>
                            </div>
                        </div>
                    {if $dispute.final_response == "0"}
                        <div class="form">
                            <div class="col-row">
                                <label class="control-label col-row" for="submit"></label>
                                <div class="col-row">
                                    <p align="center">
                                        <input type="submit" name="resolve_dispute" value="{if $current_order.vendor_selected_upfront == "1"}Close Dispute{else}Propose Resolution{/if}" class="btn btn-primary" />
                                        <input type="hidden" name="resolve_dispute_id" value="{$current_order.id}" />
                                    </p>
                                </div>
                            </div>
                        </div>

                    {/if}
                </form>
            </div></blockquote>
