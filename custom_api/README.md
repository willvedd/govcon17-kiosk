# Example Custom API Module

This serves as a good starting point for D8 devs requiring a custom and flexible API for their frontend applications. Referenced by Will Vedder's GovCon 2017 presentation, Developing Kiosks in Drupal and JS ([https://github.com/willvedd/govcon17-kiosk](https://github.com/willvedd/govcon17-kiosk).

##Directions

1. Put this module in the modules folder
2. Enable module 
3. Vist `./api/kiosk.json` to view the custom api

##Exploratory points

For devs, look specifically at the `CustomAPIController.php` and the transformation of the data after executing the query, most of the development with the API will be done there.

