            <div class="col-row">
                <blockquote class="blockquote text-center"><div class="col-row">
                    <div class="col-row">
                        <div class='form'>
                            {$links}
                        </div>
                        <h2>{if isset($custom_title) == TRUE}{$custom_title|escape:'html':'UTF-8'}
                            {else}Items{/if}</h2><hr/>
                    </div>
                </div>

                {assign var="defaultMessage" value=""}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                {if is_array($items) AND count($items) > 0}
                    {$c = 0}
                    <div class="col-row">
                    {foreach from=$items item=item}

                        {capture name="t_item_img"}<img src='data:image/jpeg;base64,{$item.main_image.encoded}' title='{$item.name|escape:"html":"UTF-8"}'>{/capture}
                        {capture name="t_item_url"}item/{$item.hash}{/capture}
                        {capture name="t_item_vendor_url"}user/{$item.vendor.user_hash}{/capture}
                        {capture name="t_reviews_url"}reviews/view/item/{$item.hash}{/capture}
                        {capture name="t_reviews_str"}{$item.review_count} reviews{/capture}
                            <div class="col-row">
                                <div class="card bg-light card-body mb-3">
                                    {url type="anchor" url=$smarty.capture.t_item_url text=$smarty.capture.t_item_img attr="title='{$item.name|escape:"html":"UTF-8"}'"}
                                    <hr/><div class="capture">
                                        <h4>{url type="anchor" url=$smarty.capture.t_item_url text=$item.name|escape:"html":"UTF-8" attr="title='{$item.name|escape:"html":"UTF-8"}'"}
                                        </h4>
                                        {$item.price_f}<hr/>{url type="anchor" url=$smarty.capture.t_item_vendor_url text=$item.vendor.user_name|escape:"html":"UTF-8" attr=""}
                                    </div>
                                    <div class="ratings">
                                        <p class="form">{url type="anchor" url=$smarty.capture.t_reviews_url text=$smarty.capture.t_reviews_str attr=''}</p>
                                        <p>{rating rating=$item.average_rating}</p>
                                    </div>
                                </div>
                            </div>
                    {/foreach}
                    </div>

                {else}
                    There are no items at present, please try again later!
                {/if}
            </div></blockquote>
