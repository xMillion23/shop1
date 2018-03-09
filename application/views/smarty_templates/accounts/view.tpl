            <div class="col-row">
            {capture name='t_message_user_url'}message/send/{$user.user_hash}{/capture}
            {capture name='t_ban_user_txt'}{if $user.banned == '0'}Ban User{else}Unban User{/if}{/capture}
            {capture name='t_ban_user_page'}admin/ban_user/{$user.user_hash}{/capture}

                <blockquote class="blockquote text-center"><div class="col-row">
                <div class="col-row" id="view-account">
                    {assign var="defaultMessage" value=""}
                    {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}
                    <div class="col-row">
                        <div class="col-row">
                            <h2>
                            {$user.user_name|escape:"html":"UTF-8"} {if $user.banned == TRUE}<small>(banned)</small>{/if}
                       <br/><br/>{if $current_user.logged_in == TRUE AND $current_user.user_id !== $user.id}
                            {url type="anchor" url=$smarty.capture.t_message_user_url text="Message" attr='class="btn btn-warning"'}
                            {/if}
                            {if $current_user.user_role == 'Admin' && $user.user_role !== 'Admin'}
                            {url type="anchor" url=$smarty.capture.t_ban_user_page text=$smarty.capture.t_ban_user_txt attr='class="btn btn-warning"'}
                            {/if}</h2>
                        </div>
                    </div>
           </div>
                    <hr/><div class="col-row">
                    
                        <div class="col-row"><strong>Location</strong></div>
                        <div class="col-row">{$user.location_f}</div>
                    </div>

                    <div class="col-row">
                    <div class="row">&nbsp;</div>
                        <div class="col-row"><strong>Registered</strong></div>
                        <div class="col-row">{$user.register_time_f}</div>
                    </div>

                    {if $user.display_login_time == '1'}

                    <div class="col-row">
                    <div class="row">&nbsp;</div>
                        <div class="col-row"><strong>Last Activity</strong></div>
                        <div class="col-row">{$user.login_time_f}</div>
                    </div>
                    {/if}

                    <div class="col-row">
                    <div class="row">&nbsp;</div>
                        <div class="col-row"><strong>Average Rating</strong></div>
                        <div class="col-row">{$average_rating}</div>
                    </div>

                    <div class="col-row">
                    <div class="row">&nbsp;</div>
                        <div class='col-row'><strong>Completed Orders</strong></div>
                        <div class='col-row'>{$user.completed_order_count}</div>
                    </div>

                    {if $reviews == TRUE}
                        <div class="card bg-light card-body mb-3" style="background:white">
                            <legend>Recent Reviews</legend>
                            {capture name='t_user_all_reviews_url'}reviews/view/user/{$user.user_hash}{/capture}
                            {capture name='t_all_reviews_str'}[All Reviews: {$review_count.all}]{/capture}

                            {capture name='t_user_p_reviews_url'}reviews/view/user/{$user.user_hash}/0{/capture}
                            {capture name='t_p_reviews_str'}[Positive: {$review_count.positive}]{/capture}

                            {capture name='t_user_d_reviews_url'}reviews/view/user/{$user.user_hash}/1{/capture}
                            {capture name='t_d_reviews_str'}[Disputed: {$review_count.disputed}]{/capture}

                            {url type="anchor" url=$smarty.capture.t_user_all_reviews_url text=$smarty.capture.t_all_reviews_str attr=""}
                            {url type="anchor" url=$smarty.capture.t_user_p_reviews_url text=$smarty.capture.t_p_reviews_str attr=""}
                            {url type="anchor" url=$smarty.capture.t_user_d_reviews_url text=$smarty.capture.t_d_reviews_str attr=""}

                            {foreach from=$reviews item=review}
                                
                                <div class="row">
                                    <div class="col-row">
                                        <div class="col-row">
                                            {foreach from=$review.rating key=quality item=rating}
                                                <div class="col-row">
                                                    <div class="col-row">{ucfirst($quality)}</div>
                                                    <div class="col-row">{rating rating=$rating}</div>
                                                </div>
                                            {/foreach}
                                            <div class="col-row">
                                                <div class="col-row">Average</div>
                                                <div class="col-row">{rating rating=$review.average_rating}</div>
                                            </div>
                                        </div>
                                        <div class="col-row"></div>

                                        <span class="float-right">{$review.time_f}</span>
                                        <p>{$review.comments|escape:"html":"UTF-8"}</p>
                                    </div>
                                </div>
                            {/foreach}
                        </div>
                    {/if}

                    {if isset($items) && count($items) > 0}
                    <div class="card bg-light card-body mb-3" style="background:white">
                        <legend>Latest Listings</legend>
                        {$c = 0}
                        {$last = count($items)-1}
                        {foreach from=$items item=item}
                        {capture name="t_item_url"}item/{$item.hash}{/capture}
                            {$cal = $c%4}
                        {if $cal == 0}<div class="row">{/if}
                        <div class='col-row'>{url type="anchor" url=$smarty.capture.t_item_url text=$item.name|escape:"html":"UTF-8" attr=""}</div>
                        {if $cal == 3 OR $c == $last }</div>{/if}
                            {$c = $c+1}
                        {/foreach}
                    </div>
                    {/if}

                    {if isset($user.pgp) == TRUE}
                    <hr/><div class="col-row">
                    <div style="word-wrap: break-word;">
                        <div class="col-row"><strong>PGP Fingerprint</strong></div>
                        <div class="col-row">{substr($user.pgp.fingerprint, 0, -8)}<b>{substr($user.pgp.fingerprint,-8)}</b></div>
                    </div></div>

                    <div class="form">
                    <div class="row">&nbsp;</div>
                        <div class="col-row"><strong>PGP Public Key</strong></div>
                        <div class="col-row">
                            <pre id="publicKeyBox" class="card bg-light card-body form text-center">{$user.pgp.public_key|escape:"html":"UTF-8"}</pre>
                        </div>
                    </div>
                    {/if}
            </div></div></blockquote>
