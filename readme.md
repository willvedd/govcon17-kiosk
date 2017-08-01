# Developing Kiosks with Drupal and JS

## Drupal GovCon 2017 Presentation by [Will Vedder](http://willvedder.com/) of [Bluecadet](http://bluecadet.com/). 

For any questions regarding the content or technical requests for the custom api module, I'm available for contact @willvedd.

The presentation was written with the intent to be viewed with the Deckset presentation software.


### Custom API Module

Included in this repo is an example custom api module. This serves as a good starting point for D8 devs requiring a custom and flexible API for their frontend applications. Referenced by Will Vedder's GovCon 2017 presentation, [Developing Kiosks in Drupal and JS](https://github.com/willvedd/govcon17-kiosk.

For devs, look specifically at the `CustomAPIController.php` and the transformation of the data after executing the query, most of the development with the API will be done there.

#### Directions

1. Put this module in the modules folder
2. Enable module 
3. Vist `./api/kiosk.json` to view the custom api



