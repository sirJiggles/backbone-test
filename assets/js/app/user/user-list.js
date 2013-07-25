// user list view
appvars.userList = Backbone.View.extend({
    el : '.content-ajax',
    render: function(){
        var users = new appvars.users();
        var that = this;
        users.fetch({
            success: function(users){
                // load tghe tempate using the collection, template and models part of collection
                var template = _.template($('#user-list-template').html(), {users:users.models});
                that.$el.html(template);
            }
        });
        
    }
})

var userList = new appvars.userList();