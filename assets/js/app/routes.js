// Routes file

appvars.router = Backbone.Router.extend({
    routes:{
        '' : 'home',
        'new' : 'editUser',
        'edit/:id' : 'editUser'
    }
});

// create a new router (uysing the router)
var router = new appvars.router();

// Create user routes
router.on('route:home', function(){
    userList.render();
});
router.on('route:editUser', function(id){
    editUser.render({id: id});
});
