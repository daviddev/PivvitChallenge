<!DOCTYPE html>
<html lang="en">
<head>
  <title>Purchase</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <script src="js/ctrl.js"></script>
</head>
<body ng-app="app" ng-controller="ctrl">

<div class="container">
    <h2>Create Purchase</h2>
    <form ng-submit="createPurchase()">
        <div class="form-group">
            <label for="email">Offering:</label>
            <select ng-model="purchase.offering_id" ng-change="calculateTotal()" required>
                <option value="">Select offering</option>
                <option ng-repeat="offering in offerings" value="@{{offering.id}}">
                    @{{offering.title}}
                </option>
            </select>
        </div>
        <div class="form-group">
            <label for="pwd">Customer:</label>
            <input type="text" ng-model="purchase.customer_name" required>
        </div>
        <div class="form-group">
            <label for="pwd">Quantity:</label>
            <input type="number" ng-model="purchase.quantity" min="1" ng-change="calculateTotal()" required>
        </div>
        <div class="form-group">
            <label for="pwd">Total amount:</label>
            <input type="number" ng-model="purchase.total" required>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

</body>
</html>
