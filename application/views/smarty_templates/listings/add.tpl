            <div class="col-row" id="add_item">
                <blockquote class="blockquote text-center">
                <h2>Add Item</h2><hr/>

                {assign var="defaultMessage" value=""}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                {form method="open" action="listings/add" attr=['class'=>'form-horizontal']}
                    <div class="form">
                        <div class="col-row">
                            <label for="name" class="control-label col-row">Name</label>
                            <div class="col-row">
                                <input type="text" class="form-control text-center" name="name" id="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="name"}</div>
                    </div><br/>

                    <div class="form">
                        <div class="col-row">
                            <label for="name" class="control-label col-row">Description</label>
                            <div class="col-row">
                                <textarea class="form-control text-center" name='description' placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="description"}</div>
                    </div><br/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="price">Price</label>
                            <div class="col-row">
                                <div class="input-group">
                                    <input type='text' class="form-control text-center" placeholder="{$current_user.currency.code}" name='price' value="{form method="set_value" field="price"}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="price"}</div>
                    </div><br/>

                    <div class="form">
                        <div class="col-row">
                            <label for="name" class="control-label col-row">Category</label>
                            <div class="col-row">
                                {$categories}
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="category"}</div>
                    </div><br/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="ship_from">Ship From</label>
                            <div class="col-row">
                                {$locations}
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="ship_from"}</div>
                    </div><br/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="hidden">Invisible Listing</label>
                            <div class="col-row">
                                <select name='hidden' class='form-control' autoselection='off'>
                                    <option value=''></option>
                                    <option value='0'>No</option>
                                    <option value='1'>Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="hidden"}</div>
                    </div><br/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="prefer_upfront">Prefer up-front payment?</label>
                            <div class="col-row">
                                <select name='prefer_upfront' class="form-control" autoselection='off'>
                                    <option value=''></option>
                                    <option value='0'>No</option>
                                    <option value='1'>Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="prefer_upfront"}</div>
                    </div><br/>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                            <p align="center">
                                <input type="submit" value="Create" class="btn btn-primary" />
                                {url type="anchor" url="listings" text="Cancel" attr='title="Cancel" class="btn btn-danger"'}
                            </p>
                        </div>
                    </div>
                </form>
            </div></blockquote>
