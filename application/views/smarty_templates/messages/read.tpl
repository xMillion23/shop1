            {capture name='t_from_user_url'}user/{$message.from.user_hash}{/capture}
            {capture name='t_msg_reply_url'}message/send/{$message.hash}{/capture}
            {capture name='t_msg_delete_url'}message/delete/{$message.hash}{/capture}

            {if $message.encrypted == TRUE}
                {capture name='t_message'}<pre>{$message.message|escape:"html":"UTF-8"}</pre>{/capture}
            {else}
                {capture name='t_message'}{$message.message|escape:"html":"UTF-8"}{/capture}
            {/if}

            <div class="col-row" id="read-message">
                <blockquote class="blockquote text-center">
                <h2>View Message</h2><hr/>

                {assign var="defaultMessage" value=""}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                   
                    <div class="form">
                        <div class="col-row"><strong>From</strong></div>
                        <div class="col-row">{url type="anchor" url=$smarty.capture.t_from_user_url text=$message.from.user_name|escape:"html":"UTF-8" attr=''}</div>
                        <br>
                   </div>

                    <div class="form">
                        <div class="col-row"><strong>Subject</strong></div>
                        <div class="col-row">{$message.subject|escape:"html":"UTF-8"}</div>
                        <br>
                    </div>

                    <div class="form">
                        <div class="col-row"><strong>Time</strong></div>
                        <div class="col-row">{$message.time_f}</div>
                        <br>
                    </div>

                    {if $message.remove_on_read == TRUE}
                    <div class="form">
                        <div class="col-row">This message will now self-destruct..</div>
                    </div>
                    {/if}

                    <div class="form">
                        <div class="col-row"><strong>Message</strong></div>

                   <div class="card bg-light card-body">{$smarty.capture.t_message}</div>
                    </div>
                

                <div class="form">
                    <label class="control-label col-row" for="submit"></label>
                    <div class="col-row">
                        <p align="center">
                            {url type="anchor" url=$smarty.capture.t_msg_reply_url text="Reply" attr='class="btn btn-primary"'}
                        {url type="anchor" url="inbox" text="Back" attr='class="btn btn-danger"'}
                        </p>
                    </div>
                </div>
            </div></blockquote>
