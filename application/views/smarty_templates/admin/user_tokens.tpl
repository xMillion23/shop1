           <div class="col-row" id="registration-tokens">
           <blockquote class="blockquote text-center">
           <div class="col-row">

                <h2>{url type="anchor" url='admin/users' text='Back' attr='class="btn btn-danger"'}<br/>Registration Invites</h2><hr/>

                {assign var="defaultMessage" value=""}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                <legend>Create Registration Invites</legend>
                {form method="open" action='admin/tokens' attr='class="form-horizontal"'}
                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="user_role">Details:</label>
                            <div class="col-row">
                                <div class="input-group">
                                    <span class="input-group-addon"><i>Role</i></span>
                                    <select class="form-control" id="user_role" name="user_role">
                                        <option value=""></option>
                                        <option value="1">Buyer</option>
                                        <option value="2">Vendor</option>
                                        <option value="3">Administrator</option>
                                    </select>
                                </div>
                            </div><br/>
                            <div class="col-row">
                                <div class="input-group">
                                    <input type='text' class='form-control text-center' name='entry_payment' value='default' placeholder="Cost"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field='user_role'}{form method="form_error" field='entry_payment'}</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row">Comment:</label>
                            <div class="col-row">
                                <input type="text" name="token_comment" value="" class="form-control text-center" placeholder="Optional. This will not be shown to the user." />
                            </div>
                        </div>
                        <div class="col-row"></div>
                    </div>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                            <p align="center">
                                <input type="submit" name="create_token" value="Create" class="btn btn-primary" />
                            </p>
                        </div>
                    </div>
                </form>

                {if $tokens == TRUE}
                <table class='table' cellspacing='0'>
                    <thead>
                    <tr>
                        <th>Link</th>
                        <th>Delete</th>
                        <th>Role</th>
                        <th>Fee</th>
                        <th>Comment</th>
                    </tr>
                    </thead>
                    <tbody>
                    {foreach from=$tokens item=token}
                    {capture name="t_registration_url"}register/{$token.token_content}{/capture}
                        {form method="open" action="admin/user_tokens" attr=''}
                        <tr>
                            <td>{url type="anchor" url=$smarty.capture.t_registration_url text="Right click to copy" attr='class="btn btn-default btn-sm"'}</td>
                            <td><input type="submit" name="delete_token" value="Delete Token" class="btn btn-danger btn-sm" />
                                <input type="hidden" name="delete_token_content" value="{$token.token_content}" />
                            <td>{$token.role}</td>
                            <td>{$coin.symbol} {$token.entry_payment|escape:"html":"UTF-8"}</td>
                            <td>{$token.comment|escape:"html":"UTF-8"}</td>
                        </tr>
                        </form>
                    {/foreach}
                    </tbody>
                </table>
                {/if}
            </div></div></blockquote>
