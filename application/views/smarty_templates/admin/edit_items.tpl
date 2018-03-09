            <div class="col-row" id="edit_general">
            <blockquote class="blockquote text-center">
            <div class="col-row">
                {$nav}

                {assign var="defaultMessage" value=""}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                <legend>Categories</legend><hr/>
                {form method="open" action="admin/edit/items" attr='class="form-horizontal"'}

                    <div class="form">

                        <div class="col-row">
                            <label class="control-label col-row">Add:</label>
                            <div class="col-row">
                                <div class="col-row">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i>Name</i></span>
                                        <input type='text' class="form-control" name='create_name' value='' />
                                    </div>
                                </div>
                                <div class="col-row">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i>Parent</i></span>
                                        {$categories_add_select}
                                    </div>
                                </div>
                            </div>
                            <div class="col-row"><input type='submit' name='add_category' value='Add' class='btn btn-primary btn-block' /></div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="create_name"}
                            {form method="form_error" field="category_parent"}</div>
                    </div><hr/>


                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row">Rename:</label>
                            <div class="col-row">
                                <div class="col-row">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i>Name</i></span>
                                        {$categories_rename_select}
                                    </div>
                                </div>
                                <div class="col-row">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i>New</i></span>
                                        <input type='text' name='category_name' class="form-control" value='' />
                                    </div>
                                </div>
                            </div>
                            <div class="col-row"><input type='submit' name='rename_category' value='Rename' class='btn btn-primary btn-block' /></div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="rename_id"}
                            {form method='form_error' field='category_name'}</div>

                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row">Delete:</label>
                            <div class="col-row">
                                <div class="col-row">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i>Name</i></span>
                                        {$categories_delete_select}
                                    </div>
                                </div>
                                <div class="col-row">

                                </div>
                            </div>
                            <div class="col-row"><input type='submit' name='delete_category' value='Delete' class='btn btn-danger btn-block' /></div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="delete_id"}</div>
                    </div>

                </form>
            </div></div></blockquote>
