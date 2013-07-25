// User edit view

appvars.editUser = Backbone.View.extend({
    el : '.content-ajax',
    render: function(options){
        var that = this;
        if(options.id){
            //GET request
            that.user = new appvars.user({id: options.id});
            that.user.fetch({
                success: function(){
                    var template = _.template($('#edit-user-template').html(), {user: that.user});
                    that.$el.html(template);
                }
            })
        }else{
            // NOrmal form
            var template = _.template($('#edit-user-template').html(), {user: null});
            this.$el.html(template);
        }
        
    },
    events:{
        'submit .edit-user-form' : 'saveUser',
        'click .delete' : 'deleteUser'

    },
    saveUser: function(ev){
        var userDetails = $(ev.currentTarget).serializeObject();
        var user = new appvars.user();
        user.save(userDetails, {
            success:function(){
                // go back home and trigger route
                router.navigate('', {trigger:true});
            }
        })
        return false;
    },
    deleteUser: function(ev){
        this.user.destroy({
            success: function(){
                router.navigate('', {trigger:true});
            }
        })
        return false;
    }
})

var editUser = new appvars.editUser();