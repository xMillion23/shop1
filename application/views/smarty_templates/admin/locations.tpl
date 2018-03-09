            <div class="col-row" id="admin-locations-form">
            <blockquote class="blockquote text-center">
            <div class="col-row">

                <h2>{url type="anchor" url='admin' text='Back' attr='class="btn btn-danger"'}<br/>Locations</h2><hr/>

                {assign var="defaultMessage" value=""}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                <div class="form">
                    <div class="col-row">
                        When users are entering locations on the site, they can use the
                        default country list, or you can configure the site to a specific
                        area.
                    </div>
                </div><hr/>

                <legend>Location List</legend>

                {form method="open" action="admin/locations" attr='class="form form-horizontal"'}
                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="location_source">List</label>
                            <div class="col-row">
                                <select name="location_source" id="location_source" class="form-control">
                                    <option value=""></option>
                                    <option value="Default"{if $list_source == 'Default'} selected="selected"{/if}>Default</option>
                                    <option value="Custom"{if $list_source == 'Custom'} selected="selected"{/if}>Custom</option>
                                </select>
                            </div>
                            <div class="col-row"></div>
                            <br/><div class="col-row"><input type='submit' name='update_location_list_source' value='Submit' class="btn btn-primary"/></div>
                        </div>
                        <div class='col-row text-warning'>
                            {form method="form_error" field="location_source"}
                        </div>
                    </div>
                </form><hr/>

                <legend>Custom Locations</legend>
                {form method="open" action="admin/locations" attr='class="form-horizontal"'}

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="location_source">Add:</label>
                            <div class="col-row">
                                <div class="col-row">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i>Name</i></span>
                                        <input type='text' class="form-control" name='create_location' value='' />
                                    </div>
                                </div>
                                <div class="col-row">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i>Parent</i></span>
                                        {$locations_parent}
                                    </div>
                                </div>
                            </div>
                            <div class="col-row"><input type='submit' name='add_custom_location' value='Submit' class="btn btn-primary"/></div>
                        </div>
                        <div class='col-row text-warning'>{form method="form_error" field="create_location"}{form method='form_error' field='location'}</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="location_delete">Delete:</label>
                            <div class="col-row">
                                <div class="col-row">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i>Name</i></span>
                                        {$locations_delete}
                                    </div>
                                </div>
                            </div>
                            <div class="col-row"><input type="submit" name="delete_custom_location" value="Submit" class="btn btn-primary" /></div>
                        </div>
                        <div class='col-row text-warning'>{form method="form_error" field="location_delete"}</div>
                    </div>
                </form>

                <legend>List Preview</legend>
                    {$locations_human_readable}

            </div></div></blockquote>
