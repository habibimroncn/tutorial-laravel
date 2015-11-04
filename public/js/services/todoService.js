angular.module('todoService', [])

.factory('Todo', function($http) {

    return {
        // get all the todos
        get : function() {
            return $http.get('/todoapi/todos');
        },

        // save a todo (pass in todo data)
        save : function(todoData) {
            return $http({
                method: 'POST',
                url: '/todoapi/todos',
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                data: $.param(todoData)
            });
        },

        //edit a todo
        edit : function(id) {
            return $http.get('/todoapi/todos/' + id + '/edit');
        },

        //update a todo
        update : function(id, todoss) {
            return $http({
                method: 'PUT',
                url: '/todoapi/todos/' + id,
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                data: $.param(todoss)
            });
        },


        // destroy a todo
        destroy : function(id) {
            return $http.delete('/todoapi/todos/' + id);
        }
    }

});