            <div class="col-row" id="admin-panel">
            <blockquote class="blockquote text-center">

                {$nav}

                {assign var="defaultMessage" value=""}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                {if is_array($bitcoin_info) == TRUE}
                <div class="form">
                    <div class="col-row"><strong>{$coin.name} Status</strong></div>
                    <div class="col-row">{$coin.name}d is currently running{if $bitcoin_info.testnet == TRUE} <b>in the testnet</b>{/if}</div>
                </div>

                <div class="form">
                    <div class="col-row"><strong>{$coin.name} Version</strong></div>
                    <div class="col-row">{$bitcoin_info.version}</div>
                </div>

                {else}
                <div class="form">
                    <div class="col-row"><strong>{$coin.name} Status</strong></div>
                    <div class="col-row">Unable to make an outbound connection to the {strtolower($coin.name)} daemon.</div>
                </div><hr/>
                {/if}

                <div class="form">
                    <div class="col-row"><strong>Use A {$coin.name} Price Index?</strong></div>
                    <div class="col-row">{if $bitcoin_index == ''}Disabled{else}{$bitcoin_index}{/if}</div>
                </div><hr/>

                <div class="form">
                    <div class="col-row"><strong>Key Usage</strong></div>
                    <div class="col-row">Used {$key_usage_count} times. {url type="anchor" url="admin/key_usage" text="View Usage" attr=""}</div>
                </div>

            </div></blockquote>
