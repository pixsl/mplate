'use strict';

angular.module('macroApp', ['ui.router', 'angularPayments', 'mm.foundation', 'ngAnimate', 'angularSpinner' ])

    .controller('MyCtrl', function($scope, $location) {
    $scope.isActive = function(route) {
        return route === $location.path();
    }
    })
    .config(function($stateProvider, $urlRouterProvider) {

    $stateProvider

         .state('home', {

                        // Use a url of "/" to set a states as the "index".

                        url: "/",

                        views: {

                            'main': {

                                templateUrl: 'partials/main.html'

                            }

                        },

                        data : { pageTitle: 'A Deal A Minute - Sales, Coupon Codes and Promotions From Your Favorite Brands!' }

                    })

         .state('traditional-prices', {

                        // Use a url of "/" to set a states as the "index".

                        url: "/traditional-prices",

                        views: {

                            'prices': {

                                templateUrl: 'partials/traditional-prices.html'

                            }

                        },

                        data : { pageTitle: 'A Deal A Minute - Sales, Coupon Codes and Promotions From Your Favorite Brands!' }

                    })
        .state('high-protein-prices', {

                        // Use a url of "/" to set a states as the "index".

                        url: "/high-protein-prices",

                        views: {

                            'prices': {

                                templateUrl: 'partials/high-protein-prices.html'

                            }

                        },

                        data : { pageTitle: 'A Deal A Minute - Sales, Coupon Codes and Promotions From Your Favorite Brands!' }

                    })
        .state('high-carb-prices', {

                        // Use a url of "/" to set a states as the "index".

                        url: "/high-carb-prices",

                        views: {

                            'prices': {

                                templateUrl: 'partials/high-carb-prices.html'

                            }

                        },

                        data : { pageTitle: 'A Deal A Minute - Sales, Coupon Codes and Promotions From Your Favorite Brands!' }

                    })

		.state('custom-prices', {

			// Use a url of "/" to set a states as the "index".

			url: "/custom",

			views: {

				'prices': {

					templateUrl: 'partials/custom-prices.html'

				}

			},

			data : { pageTitle: 'A Deal A Minute - Sales, Coupon Codes and Promotions From Your Favorite Brands!' }

		})


    // catch all route
    $urlRouterProvider.otherwise('/traditional-prices');
})

	.controller('macroCtrl', function ($scope, $http, $modal) {
		$scope.cart = [];

		// Load products from server
		$http.get('products.json').success(function (response) {
			$scope.products = response.products;
		});

		$scope.addToCart = function (product) {
			var found = false;
			$scope.cart.forEach(function (item) {
				if (item.id === product.id) {
					item.quantity++;
					found = true;
				}
			});
			if (!found) {
				$scope.cart.push(angular.extend({quantity: 1}, product));
			}
		};

		$scope.getCartPrice = function () {
			var total = 0;
			$scope.cart.forEach(function (product) {
				total += product.price * product.quantity;
			});
			return total;
		};

		$scope.getCartItemTitle = function () {
			var item = null;
			$scope.cart.forEach(function (product) {
				item = product.title;
			});
			return item;
		};

		$scope.getCartItemBreakdown = function () {
			var item = null;
			$scope.cart.forEach(function (product) {
				item = product.description;
			});
			return item;
		};

		$scope.checkout = function () {
			$modal.open({
				templateUrl: 'checkouttwo.php',
				windowClass: 'checkout-modal',
				controller: 'CheckoutCtrl',
				resolve: {
					totalAmount: $scope.getCartPrice,
					cartItem: $scope.getCartItemTitle,
					itemBreakdown: $scope.getCartItemBreakdown
				}
			});
		};
	})

	.controller('CheckoutCtrl', function ($scope, totalAmount, cartItem, itemBreakdown) {
		$scope.totalAmount = totalAmount;
		$scope.cartItem = cartItem;
		$scope.itemBreakdown = itemBreakdown;

		$scope.onSubmit = function () {
			$scope.processsing = true;
		};

		$scope.stripeCallback = function (code, result) {
			$scope.processing = false;
			$scope.hideAlerts();
			if (result.error) {
				$scope.stripeError = result.error.message;
			} else {
				$scope.stripeToken = result.id;
			}
		};

		$scope.hideAlerts = function () {
			$scope.stripeError = null;
			$scope.stripeToken = null;
		};
	});

