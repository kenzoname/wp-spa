// This file can be replaced during build by using the `fileReplacements` array.
// `ng build` replaces `environment.ts` with `environment.prod.ts`.
// The list of file replacements can be found in `angular.json`.

export const environment = {
  production: false,
  apiUrl: 'http://localhost:8888/wpreact/?rest_route=/wp/v2/',
  origin: 'http://localhost:8888/wpreact/',
  wcEndpoint: '?rest_route=/wc/v3',
  woocommerce: {
    consumer_key:  'ck_a30d39fdd4939191d4818597a7e6ffe33e252754',
    consumer_secret: 'cs_ff43f607870552f9d13e92fc70444cb865b4f84e'
  }
};

/*
 * For easier debugging in development mode, you can import the following file
 * to ignore zone related error stack frames such as `zone.run`, `zoneDelegate.invokeTask`.
 *
 * This import should be commented out in production mode because it will have a negative impact
 * on performance if an error is thrown.
 */
// import 'zone.js/plugins/zone-error';  // Included with Angular CLI.
