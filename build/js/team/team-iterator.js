var app = angular.module('teamMemberPage', [])

app.controller("MemberController", ["$scope", function($scope) {

    $scope.members = [
        {
            "name": "Dylan Fernandes",
            "team": "Web Team",
            "grade": "11th",
            "description": "I make websites"
        }
    ]
}])