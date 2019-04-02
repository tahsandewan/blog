/* Setup Rounting For All Pages */
App.config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider) {
    // Redirect any unmatched url
    $urlRouterProvider.otherwise("/home");

    $stateProvider

    // Dashboard
    
    //Added by Tanvir

    .state('home', {
        url: "/home",
        templateUrl: "/home",
        data: {pageTitle: 'Home'},
        controller: "HomeController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'App',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'js/controllers/HomeController.js'
                    ]
                });
            }]
        }
    })

    .state('profile', {
        url: "/profile",
        templateUrl: "/profile",
        data: {pageTitle: 'profile'},
        controller: "ProfileController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'App',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'js/controllers/ProfileController.js'
                    ]
                });
            }]
        }
    })
    .state('general', {
        url: "/general",
        templateUrl: "/general",
        data: {pageTitle: 'general'},
        controller: "generalController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'App',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'js/controllers/generalController.js'
                    ]
                });
            }]
        }
    })

    .state('philips', {
        url: "/philips",
        templateUrl: "/philips",
        data: {pageTitle: 'philips'},
        controller: "philipsController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'App',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'js/controllers/philipsController.js'
                    

                    ]
                });
            }]
        }
    })

    .state('philips_hairdryer', {
        url: "/philips_hairdryer",
        templateUrl: "/philips_hairdryer",
        data: {pageTitle: 'philips_hairdryer'},
        controller: "philips_hairdryerController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'App',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'js/controllers/philips_hairdryerController.js'
                    
                    
                    ]
                });
            }]
        }
    })
    .state('store', {
        url: "/store",
        templateUrl: "/store",
        data: {pageTitle: 'store'},
        controller: "storeController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'App',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'js/controllers/storeController.js'
                    
                    
                    ]
                });
            }]
        }
    })
    .state('locator', {
        url: "/locator",
        templateUrl: "/locator",
        data: {pageTitle: 'locator'},
        controller: "locatorController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'App',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'js/controllers/locatorController.js'
                    
                    
                    ]
                });
            }]
        }
    })
    .state('registration', {
        url: "/registration",
        templateUrl: "/registration",
        data: {pageTitle: 'registration'},
        controller: "registrationController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'App',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'js/controllers/registrationController.js'
                    
                    
                    ]
                });
            }]
        }
    })
    .state('login', {
        url: "/login",
        templateUrl: "/login",
        data: {pageTitle: 'login'},
        controller: "loginController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'App',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'js/controllers/loginController.js'
                    
                    
                    ]
                });
            }]
        }
    })
    .state('trimmer', {
        url: "/trimmer",
        templateUrl: "/trimmer",
        data: {pageTitle: 'trimmer'},
        controller: "trimmerController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'App',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'js/controllers/trimmerController.js'
                    
                    
                    ]
                });
            }]
        }
    })
    .state('straightener', {
        url: "/straightener",
        templateUrl: "/straightener",
        data: {pageTitle: 'straightener'},
        controller: "straightenerController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'App',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'js/controllers/straightenerController.js'
                    
                    
                    ]
                });
            }]
        }
    })
    .state('wall', {
        url: "/wall",
        templateUrl: "/wall",
        data: {pageTitle: 'wall'},
        controller: "wallController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'App',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'js/controllers/wallController.js'
                    
                    
                    ]
                });
            }]
        }
    })
    .state('ceiling', {
        url: "/ceiling",
        templateUrl: "/ceiling",
        data: {pageTitle: 'ceiling'},
        controller: "ceilingController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'App',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'js/controllers/ceilingController.js'
                    
                    
                    ]
                });
            }]
        }
    })
    .state('cassette', {
        url: "/cassette",
        templateUrl: "/cassette",
        data: {pageTitle: 'cassette'},
        controller: "cassetteController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'App',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'js/controllers/cassetteController.js'
                    
                    
                    ]
                });
            }]
        }
    })
    .state('sharp', {
        url: "/sharp",
        templateUrl: "/sharp",
        data: {pageTitle: 'sharp'},
        controller: "sharpController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'App',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'js/controllers/sharpController.js'
                    
                    
                    ]
                });
            }]
        }
    })
    .state('blender', {
        url: "/blender",
        templateUrl: "/blender",
        data: {pageTitle: 'blender'},
        controller: "blenderController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'App',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'js/controllers/blenderController.js'
                    
                    
                    ]
                });
            }]
        }
    })
    .state('cooker', {
        url: "/cooker",
        templateUrl: "/cooker",
        data: {pageTitle: 'cooker'},
        controller: "cookerController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'App',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'js/controllers/cookerController.js'
                    
                    
                    ]
                });
            }]
        }
    })
    .state('pot', {
        url: "/pot",
        templateUrl: "/pot",
        data: {pageTitle: 'pot'},
        controller: "potController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'App',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'js/controllers/potController.js'
                    
                    
                    ]
                });
            }]
        }
    })
    .state('studentinfo', {
        url: "/studentinfo",
        templateUrl: "/studentinfo",
        data: {pageTitle: 'studentinfo'},
        controller: "studentinfoController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'App',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'js/controllers/studentinfoController.js'
                    
                    
                    ]
                });
            }]
        }
    })




}]);
