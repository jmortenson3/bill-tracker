/*
 * So far, this is our typeical workflow when making an AngularJS app:
 * 1. Create a module, and use ng-app in the view to define the 
 *    application scope.
 * 2. Create a controller, and use ng-controller in the view to define
 *    the controller scope
 * 3. Add data to $scope inthe controller so they can be displayed with 
 *    be displayed with expressions in the view.
 */

 /*
  * What can we generalize about AngularJS?
  * 
  * 1. A user visits the AngularJS app.
  * 2. The VIEW presents the app's data through the user of
  *    EXPRESSIONS, FILTERS, DIRECTIVES.  Directives bind
  *    new behavior to HTML elements.
  * 3. A user clicks an element in the VIEW.  If the element has a
  *    DIRECTIVE, AngularJS runs the function.
  * 4. The function in the CONTROLLER updates the state of the data.
  * 5. The VIEW automatically changes and displays the updated data.
  *    The page doesn't need to reload at any point.
  */

app.controller('MainController', ['$scope',
  function($scope) {

  }
]);