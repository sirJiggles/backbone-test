"use srtict"

/*
 * Main javascript file
 * 
 * require any libraries using juicer
 * 
 * @depends vendor/jquery-1.8.2.min.js
 * @depends vendor/underscore.min.js
 * @depends vendor/backbone.min.js
 * @depends vendor/hammer.min.js
 * @depends ../navigation/js/script.js
 * @depends app-functions.js
 * 
 * Start of Backbone application includes and so on
 *
 * @depends app/user/user.js
 * @depends app/user/users.js
 * @depends app/user/user-list.js
 * @depends app/user/user-edit.js
 * @depends app/routes.js
 * 
 */

$(window).ready(function () {


    
    // start the app 
    Backbone.history.start();

    
});
