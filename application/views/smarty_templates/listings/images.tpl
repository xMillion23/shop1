            {capture name='t_form_url'}listings/images/{$item.hash}{/capture}

            <div class="col-row" id="add_Listing_Image">
            <blockquote class="blockquote text-center">

                <h2>Item Images</h2><hr/>

                {assign var="defaultMessage" value="Select an image to upload for your item: "}
                {returnMessage defaultMessage="$defaultMessage" returnMessage="$returnMessage" class="$returnMessage_class"}

                {form method="open-multipart" action=$smarty.capture.t_form_url attr=['class'=>'form-horizontal']}
                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row">{$item.name|escape:"html":"UTF-8"}</label>
                        </div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="userfile">Image File</label>
                            <div class="col-row">
                                    <span class="btn btn-default btn-file">
                                    <input type="file" name="userfile" />
                                    </span>
                            </div>
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="userfile"}</div>
                    </div><hr/>

                    <div class="form">
                        <label class="control-label col-row" for="main_image">Main Photo?</label>
                        <div class="form">
                            <input type="checkbox" class="checkbox" name="main_image" value="true" />
                        </div>
                        <div class="col-row text-warning">{form method="form_error" field="main_image"}</div>
                    </div>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                            <p align="center">
                                <input type="submit" name="add_image" value="Upload" class="btn btn-primary" />
                                {url type="anchor" url="listings" text="Cancel" attr='class="btn btn-danger"'}
                            </p>
                        </div>
                    </div>
                </form>

                {foreach from=$images item=image}
                    {capture name='t_main_image_url'}listings/main_image/{$image.hash}{/capture}
                    {capture name='t_delete_image_url'}listings/delete_image/{$image.hash}{/capture}
                    <div class="col-row">
                        <div class="thumbnail">
                            <img class="productImg" src="data:image/jpeg;base64,{$image.encoded}" title="{$item.name|escape:"html":"UTF-8"}" />
                            <div class="caption"><br/>
                                <center>{url type="anchor" url=$smarty.capture.t_main_image_url text="Main Image" attr='class="btn btn-primary"'}
                                {url type="anchor" url=$smarty.capture.t_delete_image_url text="<i class='icon-trash icon-white'></i>Delete" attr='class="btn btn-danger"'}
                                </center>
                            </div>
                        </div>
                    </div>
                {/foreach}
           </div></blockquote>
