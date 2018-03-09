            <div class="col-row" id="admin-users-list">
            <blockquote class="blockquote text-center">
            <div class="col-row">

                <h2>{url type="anchor" url='admin/users' text='Back' attr='class="btn btn-danger"'}<br/>User List</h2><hr/>

                {assign var="defaultMessage" value=""}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                <div class="form">
                    {$links}

                    {form method="open" url='admin/tokens' attr='class="form-horizontal"'}

                    <p>{url type="anchor" url="admin/users/list#Search" text='Click here to search for a user' attr='class="btn btn-primary"'}</p>

                    {if $users == TRUE}
                    <table class='table'>
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Role</th>
                            <th></th>
                            <th>Activated</th>
                            <th>Banned?</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        {foreach from=$users item=user}
                        {capture name="t_user_url"}user/{$user.user_hash}{/capture}
                        {capture name="t_ban_url"}admin/ban_user/{$user.user_hash}{/capture}
                        {capture name="t_ban_url_status"}{if $user.banned == TRUE}Unban{else}Ban{/if} user?{/capture}
                            <tr>
                                <td>{url type="anchor" url=$smarty.capture.t_user_url text=$user.user_name|escape:"html":"UTF-8" attr=''}</td>
                                <td>{$user.user_role}</td>
                                <td>Registered: {$user.register_time_f}<br/><br/>Last Login: {$user.login_time_f}</td>
                                <td>{if $user.entry_paid == TRUE}yes{/if}</td>
                                <td>{if $user.banned == TRUE}yes{/if}</td>
                                <td>{url type="anchor" url=$smarty.capture.t_ban_url text=$smarty.capture.t_ban_url_status attr='class="btn btn-warning"'}</td>
                            </tr>
                        {/foreach}
                        </tbody>
                    </table>
                    {else}
                        {if isset($search_fail) && $search_fail == TRUE}
                            No users were found in your query.
                        {else}
                            There are no users.
                        {/if}
                    {/if}

                    <hr/><a name="Search"></a><legend>Search Users</legend>
                    {form method="open" action="admin/users/list" attr='class="form-horizontal"'}
                        <div class='form'>
                            <label class="control-label col-row" for="user_name">Username:</label>
                            <div class="col-row"><input type="text" class="form-control text-center" id="user_name" name="user_name" value="" placeholder="Username"/></div>
                            <br/><div class="col-row"><input type="submit" name="search_username" value="Search" class="btn btn-primary"/></div>
                        </div><hr/>

                        <div class='form'>
                            <label class="control-label col-row" for="search_for">Search For:</label>
                            <div class="col-row">
                                <select name='search_for' id="search_for" class="form-control">
                                    <option value=''></option>
                                    <option value='all_users'>All Users</option>
                                    <option value='buyers'>Buyer Users</option>
                                    <option value='vendors'>Vendor Users</option>
                                    <option value='admins'>Admin Users</option>
                                </select>
                            </div><br/>
                            <div class="col-row">
                                <input type='submit' name='list_options' value='Advanced Search' class='btn btn-primary' />
                            </div>
                        </div><hr/>

                        <div class='form'>
                            <label class="control-label col-row" for="with_property">That Are:</label>
                            <div class='col-row'>
                                <select name='with_property' id="with_property" class="form-control">
                                    <option value=''></option>
                                    <option value='activated'>Activated</option>
                                    <option value='not_activated'>Not Activated</option>
                                    <option value='banned'>Banned</option>
                                    <option value='not_banned'>Not Banned</option>
                                </select>
                            </div>
                        </div><hr/>

                        <div class="form">
                            <label class="control-label col-row">Order By</label>
                            <div class="col-row">
                                <select name="order_by" id="order_by" class="form-control">
                                    <option value=""></option>
                                    <option value="id">User ID</option>
                                    <option value="user_name">User Name</option>
                                    <option value="register_time">Time Registered</option>
                                    <option value="login_time">Login Time</option>
                                    <option value="banned">Banned?</option>
                                </select>
                            </div>
                        </div><hr/>

                        <div class='form'>
                            <label class='control-label col-row'>List</label>
                            <div class='col-row'>
                                <label class="radio-inline">
                                    <input type='radio' name='list' value='ASC' /> Ascending
                                </label>
                                <label class="radio-inline">
                                    <input type='radio' name='list' value='DESC' /> Descending
                                </label>
                                <label class="radio-inline">
                                    <input type='radio' name='list' value='random' /> Random
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
            </div></div></blockquote>
