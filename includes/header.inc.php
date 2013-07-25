<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>

    	<title>PROTOTYPE</title>
            
        <!--[if lt IE 9]>
            <script src="assets/js/vendor/htmlshiv.min.js"></script>
        <![endif]-->

        <!-- META -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, minimum-scale=1" />
    	<meta name="description" content="" />
    	<meta name="author" content="" />
        <meta name="keywords" content="" />
	
        <!-- Humans file -->
        <link rel="author" type="text/plain" href="/humans.txt" />

        <!-- Favicons -->
        <link rel="shortcut icon" href="assets/favicons/16.ico" />
    	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/favicons/57.png" />
    	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/favicons/72.png" />
    	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/favicons/114.png" />
    	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/favicons/144.png" />
        
    	<!-- CSS -->
        <link rel="stylesheet" href="assets/css/screen.css" media="screen" type="text/css" />
    	<link rel="stylesheet" href="assets/css/print.css" media="print" type="text/css"/>
        
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="assets/css/fixed-width.css" media="screen" type="text/css"/>
        <![endif]-->
              
       
        
    </head>
    <body>  
        <!-- TEMPLATES -->
        <script type="text/template" id="user-list-template">
            <a href="#/new" class="btn">New User</a>
            <hr />
            <table>
                <thead>
                    <th>First Name</th>
                    <th>Second Name</th>
                    <th>Age</th>
                    <th></th>
                </thead>
                <tbody>
                    <% _.each(users, function(user){ %>
                        <tr>
                            <td><%= user.get('firstname') %></td>
                            <td><%= user.get('lastname') %></td>
                            <td><%= user.get('age') %></td>
                            <td><a href="#/edit/<%= user.id %>" class="btn">Edit</a></td>
                        </tr>
                    <% }); %>
                </tbody>
            </table>
        </script>

        <script type="text/template" id="edit-user-template">
            <form class="edit-user-form">
                <legend><%= user ? 'Update' : 'Create' %> User</legend>
                <label for="firstname">First name</label>
                <input type="text" name="firstname" value="<%= user ? user.get('firstname') : '' %>" />
                <label for="lastname">Last name</label>
                <input type="text" name="lastname" value="<%= user ? user.get('lastname') : '' %>" />
                <label for="age">Age</label>
                <input type="text" name="age" value="<%= user ? user.get('age') : '' %>" />
                <hr />
                <button type="submit" class="btn"><%= user ? 'Update' : 'Create' %></button>
                <% if(user){ %>
                    <input type="hidden" name="id" value="<%= user.id %>" />
                    <button type="button" class="btn delete">Delete</button> 
                <% }; %>
            </form>

        </script>

        <!-- used for sticky footer -->
        <div id="site-wrapper">

            <header id="nav-header" role="banner">
<div id="main-nav-facebook">
    <div class="row">

        <div class="nav-controls span-1 full end">
            <a title="click here to toggle nav" href="#">Nav</a>
        </div>

        <nav role="navigation" class="span-1 full end">
            <ul id="facebook-nav">
                <li><a href="#" title="Nav item one">Nav item one</a></li>
                <li><a href="#" title="Nav item two">Nav item two</a></li>
                <li><a href="#" title="Nav item three">Nav item three</a></li>
                <li><a href="#" title="Nav item four">Nav item four</a></li>
                <li class="last"><a href="#" title="Nav item five">Nav item five</a></li>
            </ul>

        </nav>
    </div>
</div></header>

            <div class="row main" role="main">