            <div class="col-row" id="admin-items-panel">
            <blockquote class="blockquote text-center">
            <div class="col-row">
                {$nav}

                {assign var="defaultMessage" value=""}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                <div class="col-row">

                    <div class="form">
                        <div class="col-row"><strong>Item Count</strong></div>
                        <div class="col-row">{$item_count}</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row"><strong>Fees Configuration</strong></div>
                        <div class="col-row">{url type="anchor" url="admin/items/fees" text="Configure" attr=''}</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row"><strong>Trusted vendor settings</strong></div>
                        <div class="col-row">{url type="anchor" url="admin/trusted_user" text="Configure" attr=''}</div>
                    </div>
                </div>
            </div></div></blockquote>
