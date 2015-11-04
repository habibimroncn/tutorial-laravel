angular.module('todoMainCtrl', [])

// inject the Todo service into our controller
.controller('mainController', function($scope, $http, Todo, $location) {
    // object to hold all the data for the new todo form
    $scope.todoData = {};
    $scope.todoss = {};

    // loading variable to show the spinning loading icon
    $scope.loading = true;
    $scope.visible = true;
    $scope.visible1 = false;

    // get all the todos first and bind it to the $scope.todos object
    // use the function we created in our service
    // GET ALL COMMENTS ==============
    Todo.get()
        .success(function(data) {
            $scope.todos = data;
            $scope.loading = false;
        });

    // function to handle submitting the form
    // SAVE A COMMENT ================
    $scope.submitTodo = function() {
        $scope.loading = true;

        // save the todo. pass in todo data from the form
        // use the function we created in our service
        Todo.save($scope.todoData)
            .success(function(data) {
               $location.path('/');
                // if successful, we'll need to refresh the todo list
                // Todo.get()
                //     .success(function(getData) {
                //         $scope.todos = getData;
                //         $scope.loading = false;
                //     });

            })
            .error(function(data) {
                console.log(data);
            });
    };

    // function to handle edi a todo
    // EDIT A TODO
    $scope.editTodo = function(id){
        $scope.loading =  true;

        Todo.edit(id)
            .success(function(data){
                $scope.todoss = data;
                $scope.visible = false;
                $scope.visible1 = true;
            });
    };

    // function to handle deleting a todo
    // DELETE A COMMENT ====================================================
    $scope.deleteTodo = function(id) {
        $scope.loading = true; 
        if (confirm("Are you delete ?") == true) {
        // use the function we created in our service
        Todo.destroy(id)
            .success(function(data) {
                //$location.path('/');
                // if successful, we'll need to refresh the todo list
                Todo.get()
                    .success(function(getData) {
                        $scope.todos = getData;
                        $scope.loading = false;
                    });

            });
        } else {
            
            Todo.get()
                    .success(function(getData) {
                        $scope.todos = getData;
                        $scope.loading = false;
                    });
        }
    };

    $scope.cancelEdit = function(){
        $scope.visible = true;
        $scope.visible1 = false;
    };

    $scope.updateTodo = function(id){
        $scope.loading =  true;
        Todo.update(id, $scope.todoss)
            .success(function(getData){
                $scope.loading  = false;
                $scope.visible  = true;
                $scope.visible1 = false;
            })
            .error(function(data){
                console.log(data);
            });
    };

    $scope.refreshTodo = function(){
        Todo.get()
        .success(function(data) {
            $scope.todos = data;
            $scope.loading = false;
        });
    };

});