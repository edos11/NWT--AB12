var app = angular.module('newsRecords', [])
        .constant('API_URL', 'http://localhost/glavni/public/');

app.controller('NewsController', function($scope, $http, API_URL) {
    //retrieve news listing from API
    $http.get(API_URL + "svenovosti")
            .success(function(response) {
                $scope.news = response;
            });

    //show modal form
    $scope.novost={title:'', description:'', image_link:'', created_at:''  };
    $scope.toggle = function(modalstate, id) {
        $scope.modalstate = modalstate;
        $scope.pokazi=false;
        switch (modalstate) {
            case 'add':
                $scope.form_title = "Add New news";
                $scope.pokazi=true;
                break;
            case 'edit':
                $scope.form_title = "News Detail";
                $scope.id = id;
                $http.get(API_URL + 'news/' + id)
                        .success(function(response) {
                            console.log(response);
                            $scope.news = response;
                        });
                break;
            default:
                break;
        }
        console.log(id);
        //$('#myModal').modal('show');
    }

    //save new record / update existing record
    $scope.save1 = function(modalstate, id) {
        var url = API_URL + "news";
        //append news id to the URL if the form is in edit mode
        if (modalstate === 'edit'){
            url += "/" + id;
        }
        console.log("fdsdfs"+$scope.novost);
        $http({
            method: 'POST',
            url: url,
            data: {'novost':$scope.novost},
            headers: {'Content-Type': 'application/json'}
        }).success(function(response) {
            console.log("fdsdfs"+response);
            location.reload();
        }).error(function(response) {
            console.log(response);
            alert('This is embarassing. An error has occured. Please check the log for details');
        });
    }

    //delete record
    $scope.confirmDelete = function(id) {
        var isConfirmDelete = confirm('Are you sure you want this record?');
        if (isConfirmDelete) {
            $http({
                method: 'DELETE',
                url: API_URL + 'news/' + id
            }).
                    success(function(data) {
                        console.log(data);
                        location.reload();
                    }).
                    error(function(data) {
                        console.log(data);
                        alert('Unable to delete');
                    });
        } else {
            return false;
        }
    }
});
