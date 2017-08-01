# Developing Kiosks with Drupal and JS

## Drupal GovCon 2017 Presentation by [Will Vedder](http://willvedder.com/) of [Bluecadet](http://bluecadet.com/). 

### Presentation Abstract

With the advent of decoupled approaches within Drupal, the possibilities of what the platform can support goes beyond simply websites. Nowadays, Drupal can offer a full back-end to pair with Javascript web apps, native applications and even standalone interactive kiosks. These interactive kiosks can offer organizations a much more personal interaction with a visitor within a particular space, especially museums. 

Though built with web technologies, there are several key differences between interactive kiosks and regular websites, both in terms of design and development. This talk will uncover the primary differences of developing interactive kiosks versus routine websites with several supporting examples in production. 


### Custom API Module

Included in this repo is an example custom api module. This serves as a good starting point for D8 devs requiring a custom and flexible API for their frontend applications. Referenced by Will Vedder's GovCon 2017 presentation, [Developing Kiosks in Drupal and JS](https://www.drupalgovcon.org/program/sessions/developing-interactive-kiosks-powered-drupal-and-js).

For devs, look specifically at the `CustomAPIController.php` and the transformation of the data after executing the query, most of the development with the API will be done there.

#### Directions

1. Put this module in the modules folder
2. Enable module 
3. Vist `./api/kiosk.json` to view the custom api


### Slides

The presentation was written with the intent to be viewed with the Deckset presentation software.


### Support

For any questions regarding the content or technical requests for the custom api module, I'm available for contact @willvedd.

