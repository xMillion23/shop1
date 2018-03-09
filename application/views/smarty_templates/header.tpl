<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="{$header.site_description|escape:'html':'UTF-8'}" />
        <title>{$header.title|escape:'html':'UTF-8'} | {$header.site_title|escape:'html':'UTF-8'}</title>
        <link rel="stylesheet" type="text/css"  href="{url type="base_url" url=""}assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css"  href="{url type="base_url" url=""}assets/css/style.css">
        <link rel="stylesheet" href="{url type="base_url" url=""}assets/css/fontawesome-all.css">
        <!-- JavaScript -->
        <script src="{url type="base_url" url=""}assets/js/jquery-3.2.1.min.js"></script>
        <script src="{url type="base_url" url=""}assets/js/popper.js"></script>
        <script src="{url type="base_url" url=""}assets/js/fontawesome-all.min.js"></script>
        <script src="{url type="base_url" url=""}assets/js/bootstrap.js"></script>
        {$header.header_meta}
</head>
<body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
                <a class="navbar-brand" href="#"><img src="/icons/col.png" width="40" height="40" /></a>
                <div class="container-fluid">
                        {url type="anchor" url="" text=$header.site_title|escape:"html":"UTF-8" attr="class='navbar-brand'"}


<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
<span class="navbar-toggler-icon"></span>
</button>
                     

<div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav ml-auto">
                        {if $current_user.user_role eq 'Admin'}
                                <li class="nav-item">{url type="anchor" url="" text="Home" attr="title='Home' class='nav-link'"}</li>
                                <li class="nav-item">{url type="anchor" url="items" text="Items" attr="title='Items' class='nav-link'"}</li>
                                <li class="nav-item">{url type="anchor" url="admin" text="Admin" attr="title='Admin' class='nav-link'"}</li>
                                <li class="nav-item">{url type="anchor" url="inbox" text="Inbox{if $count_unread_messages gt 0} ($count_unread_messages){/if}" attr='title="Inbox" class="nav-link"'}</li>
                                <li class="nav-item">{url type="anchor" url="account" text="Account" attr="title='Account' class='nav-link'"}</li>
                                <li class="nav-item">{url type="anchor" url="" text="News" attr="title='News' class='nav-link'"}</li>
                                <li class="nav-item">{url type="anchor" url="" text="Help" attr="title='Help' class='nav-link'"}</li>
                                <li class="nav-item">{url type="anchor" url="logout" text="Logout" attr="title='Logout' class='nav-link'"}</li>

                        {elseif $current_user.user_role eq 'Buyer'}
                                <li class="nav-item">{url type="anchor" url="" text="Home" attr="title='Home' class='nav-link'"}</li>
                                <li class="nav-item">{url type="anchor" url="items" text="Items" attr="title='Items' class='nav-link'"}</li>
                                <li class="nav-item">{url type="anchor" url="inbox" text="Inbox{if $count_unread_messages gt 0} ($count_unread_messages){/if}" attr='title="Inbox" class="nav-link"'}</li>
                                <li class="nav-item">{url type="anchor" url="account" text="Account" attr="title='Account' class='nav-link'"}</li>
                                <li class="nav-item">{url type="anchor" url="" text="News" attr="title='News' class='nav-link'"}</li>                                                       <li class="nav-item">{url type="anchor" url="" text="Help" attr="title='Help' class='nav-link'"}</li>
                                <li class="nav-item">{url type="anchor" url="logout" text="Logout" attr="title='Logout' class='nav-link'"}</li>

                        {elseif $current_user.user_role == 'Vendor'}
                                <li class="nav-item">{url type="anchor" url="" text="Home" attr="title='Home' class='nav-link'"}</li>
                                <li class="nav-item">{url type="anchor" url="items" text="Items" attr="title='Items' class='nav-link'"}</li>
                                <li class="nav-item">{url type="anchor" url="inbox" text="Inbox{if $count_unread_messages gt 0} ($count_unread_messages){/if}" attr='title="Inbox" class="nav-link"'}</li>
                                <li class="nav-item">{url type="anchor" url="account" text="Account" attr="title='Account' class='nav-link'"}</li>
                                <li class="nav-item">{url type="anchor" url="" text="News" attr="title='News' class='nav-link'"}</li>
                                <li class="nav-item">{url type="anchor" url="" text="Help" attr="title='Help' class='nav-link'"}</li>
                                <li class="nav-item">{url type="anchor" url="logout" text="Logout" attr="title='Logout' class='nav-link'"}</li>

                        {elseif $current_user.user_role == 'half'}
                                {if $allow_guests eq TRUE}
                                        <li class="nav-item">{url type="anchor" url="" text="Home" attr="title='Home' class='nav-link'"}</li>
                                        <li class="nav-item">{url type="anchor" url="items" text="Items" attr="title='Items' class='nav-link'"}</li>
                                {/if}
                                <li class="nav-item">{url type="anchor" url="logout" text="Logout" attr="title='Logout' class='nav-link'"}</li>

                        {else}
                                {if $allow_guests eq TRUE}
                                        <li class="nav-item">{url type="anchor" url="" text="Home" attr="title='Home' class='nav-link'"}</li>
                                        <li class="nav-item">{url type="anchor" url="items" text="Items" attr="title='Items' class='nav-link'"}</li>
                                {/if}
                                        <li class="nav-item">{url type="anchor" url="login" text="Login" attr="title='Login' class='nav-link'"}</li>
                                        <li class="nav-item">{url type="anchor" url="register" text="Register" attr="title='Register' class='nav-link'"}</li>
                        {/if}

                        </ul>
                        </div>
                </div>
        </nav>

{if in_array($current_user.user_role, ['guest','half']) eq FALSE}

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

<div class="container-flu">
    <div class="input-group">
      <input type="text" class="form-control text-right-center" placeholder="Search">
      <span class="input-group-btn">
        <button class="btn btn-outline-success" type="submit">Go!</button>
      </span>
    </div>
  </div>

</nav>

{/if}
        <br/>
        <!-- left-side-bar-space -->
        <div class="container-fluid">
               <div class="text-center"><div class="col-row">
                <!-- sidebar-nav -->
               <div class="form">
                        {if in_array($current_user.user_role, ['guest','half']) eq FALSE}
                                <!-- Logged in bar-->
                                <div class="list-group">
                                {capture name="t_user_link"}user/{$current_user.user_hash}{/capture}
                                {url type="anchor" url=$smarty.capture.t_user_link text=$current_user.user_name|escape:"html":"UTF-8" attr="class='list-group-item' title='Your Profile'"}
                                {if $current_user['user_role'] eq 'Vendor'}
                                        {url type="anchor" url="listings" text="My Listings" attr="class='list-group-item' title='My Listings'"}
                                        {url type="anchor" url="orders" text="Orders" attr="class='list-group-item' title='Orders'"}
                                {elseif $current_user['user_role'] eq 'Admin'}
                                        {url type="anchor" url="admin/orders" text="Orders" attr="class='list-group-item' title='Orders'"}
                                        {url type="anchor" url="admin/disputes" text="Disputes" attr="class='list-group-item' title='Disputes'"}
                                {elseif $current_user['user_role'] eq 'Buyer'}
                                        {url type="anchor" url="purchases" text="My Purchases" attr="class='list-group-item' title='Your Purchases'"}
                                {/if}
                                </div>
                        {/if}

                {if $category_data.block eq FALSE}
                <div class="card bg-light card-body mb-3 sidebar-nav">
                 <a data-toggle="collapse" href="#sidebar" aria-expanded="true" aria-controls="test-block"><h6>Categories:</h6></a>
                        <ul class="nav navbar-nav list-inline">
                           <div id="sidebar" class="collapse show">
                                <div class="card-block">
                                    {$category_data.cats}
                                </div></div>
                            </div>
                        </ul>
                </div>
                {/if}
        </div>
        <!-- /sidebar-nav -->
